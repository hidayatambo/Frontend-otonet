<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="show_jasa_service">Create Jasa Servis</button>
                    <div class="modal fade" id="jasaServiceModalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="jasaServiceModalFormLabel"></h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body">
                                    <form action="" id="form_modal">
                                        <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Kode Jasa <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="kode_jasa" value="{{old('kode_jasa')}}"
                                                            id="input_kode_jasa" maxlength="100" required />
                                                        <span id="error_kode_jasa" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama Jasa <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama_jasa" value="{{old('nama_jasa')}}"
                                                            id="input_nama_jasa" maxlength="100" required />
                                                        <span id="error_nama_jasa" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Divisi </div>
                                                    <div class="col-9">
                                                        <select class="form-select form-select-sm" name="divisi_jasa"
                                                            id="input_divisi_jasa" required>
                                                            @foreach($divisi_jasa['data'] as $item)
                                                            <option value="{{$item['id']}}">
                                                                {{$item['nama_divisi_jasa']}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span id="error_divisi_jasa" class="txt-danger"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Biaya </div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="biaya" value="{{old('biaya')}}" id="input_biaya"
                                                            maxlength="15" />
                                                        <span id="error_biaya" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Menit </div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="jam" value="{{old('jam')}}" id="input_jam"
                                                            maxlength="5" />
                                                        <span id="error_jam" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close"
                                        id="cancel_modal">Cancel</button>
                                    <button type="button" class="btn btn-success" id="jasa_service_save">Simpan</button>
                                    <button type="button" class="btn btn-success" id="btn_edit">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <div id="keytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input
                                            type="text" tabindex="0"></div>
                                    <table aria-describedby="keytable_info" id="jasaServiceDatatable" class="table table-striped table-sm" style="width: 100%">
                                        <thead>
                                            <tr role="row">
                                                @foreach($headers as $header)
                                                <th wire:click="sortBy('{{ $header }}')" tabindex="0"
                                                    aria-controls="keytable" rowspan="1" colspan="1"
                                                    aria-sort="ascending" style="width: 138.719px;">{{ $header }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    var thisTable;
    var currentJasaService = null;
    var apiUrl = "{{ $apiEndpoint }}";

    $(document).ready(function () {
        thisTable = $("#jasaServiceDatatable").DataTable({
            serverSide: true,
            processing: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "jasa-service-datatable",
                    type: 'GET',
                    data: {
                        ...data,
                    },
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    success: function (response) {
                        let originalData = response.original ? response.original : response[0].original;


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
            columns: [
                {
                    data: "kode_jasa",
                },
                {
                    data: "nama_jasa",
                },
                {
                    data: "divisi_jasa",
                },
                {
                    data: "biaya",
                    render: $.fn.dataTable.render.number(',', '.', 0, ''),
                    className: 'dt-right'
                },
                {
                    data: "jam",
                    className: 'dt-center'
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `<a id="edit_jasa_service" data-id="${row.id}" class="cursor-pointer edit-btn" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                    }
                },
            ]
        });
        $('#show_jasa_service').click(function() {
            $('#modalFormLabel').html('Buat Jasa Servis');
            $("#jasaServiceModalForm input").val('');
            $("#jasa_service_save").show();
            $("#btn_edit").hide();
            $("#jasaServiceModalForm").modal('show');
        });

        $('#jasa_service_save').click(function() {
            $("#jasa_service_save").prop('disabled', true);
        
            $.ajax({
                url: apiUrl + "jasa-service",
                type: "POST",
                data: $('#form_modal').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                },
                success: function(response) {
                    if (response.status == "success") {
                        $("#jasaServiceModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#jasa_service_save").prop('disabled', false);
                },
                error: function(xhr) {
                    if (xhr.status === 400) {
                        $('.txt-danger').text('');
                        // Extract and display validation errors
                        var errors = xhr.responseJSON.error;
                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                var errorMessage = errors[key][0];
                                $('#error_' + key).text(errorMessage);
                            }
                        }
                    } else if (xhr.status === 401) { // Check for unauthorized status
                        // Redirect to the login page
                        window.location.href = "{{ url('auth/login') }}";
                    }
                    $("#jasa_service_save").prop('disabled', false);
                }
            });
      
        });
        // form edit
        $('#jasaServiceDatatable').on('click', '.edit-btn', function(e) {
            e.preventDefault();
            currentJasaService = $(this).data('id'); // Get the ID of the record
            $.ajax({
                url: apiUrl + "jasa-service/" + currentJasaService,
                type: "GET",
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $("#btn_edit").show();
                    $("#jasa_service_save").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_kode_jasa').val(dt['kode_jasa']);
                    $('#input_nama_jasa').val(dt['nama_jasa']);
                    $('#input_divisi_jasa').val(dt['divisi_jasa']);
                    $('#input_biaya').val(dt['biaya']);
                    $('#input_jam').val(dt['jam']);
                    $('#modalFormLabel').html('Edit Jasa Servis');
                    $("#jasaServiceModalForm").modal('show');
                }
            });
        });
        $('#btn_edit').click(function() {
            $("#btn_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "jasa-service/" + currentJasaService,
                type: "PUT",
                data: $('#form_modal').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status == "success") {
                        $("#jasaServiceModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $("#btn_edit").prop('disabled', false);
                },
                error: function(xhr) {
                    
                    if (xhr.status === 400) {
                        $('.txt-danger').text('');
                        // Extract and display validation errors
                        var errors = xhr.responseJSON.error;
                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                var errorMessage = errors[key][0];
                                $('#error_' + key).text(errorMessage);
                            }
                        }
                    } else if (xhr.status === 401) { // Check for unauthorized status
                        // Redirect to the login page
                        window.location.href = "{{ url('auth/login') }}";
                    }
                    $("#btn_edit").prop('disabled', false);
                }
            });
        });

        $('#cancel_modal').click(function() {
            $('.txt-danger').text('');

            $('#jasaServiceModalForm').modal('hide');
        });
    });
</script>
@endsection
