<div>
    <div class="row">
        <!-- Default box -->
        <div class="col-8">
            <div class="card">
                <div class="card-body p-0" style="margin: 20px">
                    <div class="dt-ext table-responsive">
                    <table class="dataTables_wrapper container-fluid dt-bootstrap4" id="aksesMenuDatatable">
                        <thead>
                            <tr>
                                <th class="col-6">Nama</th>
                                <th class="col-6">Email</th>
                                <th class="col-1"></th>
                            </tr>
                        </thead>
                        <tbody id="body_dtl_stockopname">
                        </tbody>
                    </table>
                    </div>
                    
                    <input type="hidden" name="baris_dtl" id="input_baris_dtl" />

                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card -->

        <div class="col-4 invisible" id="right_area" style="max-height: 530px;overflow-y: auto;">
            <div class="card mt-3">
                <div class="card-header border-0 ui-sortable-handle p-3" style="cursor: move;">
                    <h5 class="card-title">
                        <div class="row">
                            <div class="col-10">
                                Content - <span id="txt_user"></span>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary btn-sm" onclick="close_rigth_area()">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </h5>

                </div>
                <div class="card-body p-3">
                    <form action="#" id="form-create">
                        @csrf
                        <input type="hidden" name="id_user" id="id_user" />
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered table-hover" id="modal-table">
                                    <thead>
                                        <tr>
                                            <th class="col-2"></th>
                                            <th class="col-10">Konten</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($menu['data'] as $item)
                                        <tr>
                                            <td><input type="checkbox" name="content{{$item['id']}}" id="cb_content{{$item['id']}}" /></td>
                                            <td>{{$item['head_content']}} / {{$item['body_content']}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-success" id="btn-save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    var thisTable;
    var apiUrl = "{{ $apiEndpoint }}";
    $(document).ready(function() {
        var thisTable;
        thisTable = $('#aksesMenuDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "aksesmenu",
                    type: 'GET',
                    data: {
                        ...data
                    },
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // For CSRF protection in Laravel
                    },
                    success: function (response) {
                        let originalData = response.original ? response.original :
                            response[0].original;
                        callback({
                            draw: originalData.draw,
                            recordsTotal: originalData.recordsTotal,
                            recordsFiltered: originalData.recordsFiltered,
                            data: originalData.data
                        });
                    },
                    error: function (xhr, textStatus, error) {
                        // console.log("AJAX error:", error);
                        alert("review your answer");
                        window.location.href = "{{ url('auth/login') }}";
                    }
                });
            },
            columns: [{
                    data: "nama",
                },
                {
                    data: "email",
                },
                {
                    data: null,
                    title: '',
                    orderable: false,
                    render: function (data, type, row) {
                        return `<a id="open_right" data-id="${row.id}" data-nama="${row.nama}" class="cursor-pointer btn btn-primary open-right btn-xs">Open</a>`;
                    }
                }
            ],
        });

        $('#btn-save').click(function() {
            submit();
        });

    });
    $('#aksesMenuDatatable').on('click', '.open-right', function (e) {
        e.preventDefault();
        $('input').prop('checked', false);
        var id = $(this).data('id');
        var nama = $(this).data('nama'); 

        $.ajax({
            url: apiUrl + "aksesmenu/get_user_menu",
            type: "GET",
            data: {
                id: id
            },
            headers: {
                'Authorization': 'Bearer ' + '{{ $token }}',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                    'content') // For CSRF protection in Laravel
            },
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $.each(response.data, function(key, value) {
                        $('#cb_content' + value.id).prop('checked', true);
                    });
                    $('#id_user').val(id);
                    $('#txt_user').html(nama);

                    $('#right_area').removeClass('invisible').addClass('visible');
                } else {
                    alert('something wrong!!!');
                }
                $("#btn-save").prop('disabled', false);
            },
            statusCode: {
                422: function(data) {
                    $.each(data.responseJSON.errors, function(key, value) {
                        // Set errors on inputs
                        if (key == 'kode') {
                            $('#input_kode').parsley().addError('customError', {
                                message: value
                            });
                        }
                    });
                    $("#btn-save").prop('disabled', false);
                }
            }
        });
    });

    

    function open(id, nama) {
        


        //  alert('oke');
    }

    function close_rigth_area() {
        $('#right_area').removeClass('visible').addClass('invisible');
    }

    function submit() {
        $("#btn-save").prop('disabled', true);
        $.ajax({
            url:  apiUrl + "aksesmenu/update",
            type: "POST",
            data: $('#form-create').serialize(),
            dataType: "json",
            headers: {
                'Authorization': 'Bearer ' + '{{ $token }}',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                    'content') // For CSRF protection in Laravel
            },
            success: function(response) {
                if (response.status == 200) {
                    toastr["success"](response.message);
                } else {
                    alert('something wrong!!!');
                }
                $("#btn-save").prop('disabled', false);
            },
            statusCode: {
                422: function(data) {
                    $.each(data.responseJSON.errors, function(key, value) {
                        // Set errors on inputs
                        if (key == 'kode') {
                            $('#input_kode').parsley().addError('customError', {
                                message: value
                            });
                        }
                    });
                    $("#btn-save").prop('disabled', false);
                }
            }
        });
      
    }
</script>
@endsection
