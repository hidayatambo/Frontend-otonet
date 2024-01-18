<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="create_satuan">Create Satuan</button>
                    <div class="modal fade" id="satuanModalForm" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel"></h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body">
                                    <form action="" id="form_modal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama Satuan <span
                                                            class="text-danger">Wajib</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama_satuan" value="{{old('nama_satuan')}}"
                                                            id="input_nama_satuan" maxlength="100" required />
                                                    <span id="error_nama_satuan" class="txt-danger"></span>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close" id="cancel_modal">Cancel</button>
                                    <button type="button" class="btn btn-success" id="satuan_create">Save</button>
                                    <button type="button" class="btn btn-success" id="satuan_edit">Update</button>
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
                                    <table class="display dataTable" id="satuanDatatable" role="grid"
                                        aria-describedby="keytable_info" style="position: relative;">
                                        <thead>
                                            <tr role="row">
                                                @foreach($headers as $header)
                                                <th tabindex="0" aria-controls="keytable" rowspan="1" colspan="1"
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
    var apiUrl = "{{ $apiEndpoint }}";
    var currentSatuanId = null;
    $(document).ready(function () {
        thisTable = $('#satuanDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "satuan-datatable",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // For CSRF protection in Laravel
                    },
                    dataType: "json",
                    type: "GET",
                    data: {
                        ...data,
                    },
                    success: function (response) {
                        let originalData = response[0].original;
                        // console.log(response);
                        callback({
                            draw: originalData.draw,
                            recordsTotal: originalData.recordsTotal,
                            recordsFiltered: originalData.recordsFiltered,
                            data: originalData.data
                        });
                    },
                    error: function (xhr, textStatus, error) {
                        // console.log("AJAX error:", error);
                        window.location.href = "{{ url('auth/login') }}";
                    }
                });
            },
            columns: [ {
                    data: "nama_satuan",
                },
                {
                    data: "created_by",
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `
                        <a id="edit-satuan" data-id="${row.id}" class="cursor-pointer edit-satuan" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                    }
                },
            ]
        });

        $('#create_satuan').click(function () {
            $('#modalFormLabel').html('Buat Satuan');
            $("#satuanModalForm input").val('');
            $("#satuan_create").show();
            $("#satuan_edit").hide();
            $("#satuanModalForm").modal('show');
        });

        $('#satuan_create').click(function () {
            $("#satuan_create").prop('disabled', true);
            $.ajax({
                url: apiUrl + "satuan",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.status == "success") {
                        $("#satuanModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#satuan_create").prop('disabled', false);
                },
                error: function (xhr) {
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
                    $("#satuan_create").prop('disabled', false);
                }
            });
        });

        // form edit satuan
        $('#satuanDatatable').on('click', '.edit-satuan', function (e) {
            e.preventDefault();
            currentSatuanId = $(this).data('id'); // Get the ID of the record
            console.log(apiUrl)
            $.ajax({
                url: apiUrl + "satuan/" + currentSatuanId,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    $("#satuan_edit").show();
                    $("#satuan_create").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_nama_satuan').val(dt['nama_satuan']);
                    $('#modalFormLabel').html('Edit Pelanggan');
                    $("#satuanModalForm").modal('show');
                },
                error: function (xhr) {
                    if (xhr.status === 401) { // Check for unauthorized status
                        // Redirect to the login page
                        window.location.href = "{{ url('auth/login') }}";
                    }
                }
            });
        });

        // update form edit
        $('#satuan_edit').click(function () {
            
            if (currentSatuanId === null) {
                alert('No Satuan selected.');
                return;
            }
            $("#satuan_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "satuan/" + currentSatuanId,
                type: "PUT",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.status == "success") {
                        $("#satuanModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#satuan_edit").prop('disabled', false);
                },
                error: function (xhr) {
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
                    $("#satuan_edit").prop('disabled', false);
                }
            });
        });
        $('#cancel_modal').click(function () {
            $('#satuanModalForm').modal('hide');
        });

        
    });
</script>
@endsection
