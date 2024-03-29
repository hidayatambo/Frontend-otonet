<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="create_warna">Create Warna</button>
                    <div class="modal fade" id="warnaModalForm" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                                    <div class="col-3 col-form-label-sm">Warna <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama" value="{{old('nama')}}" id="input_nama"
                                                            maxlength="100" required />
                                                        <span id="error_nama" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Hex Code <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm form-control-color" type="color" value="#563d7c" 
                                                            name="hex_code" value="{{old('hex_code')}}" id="input_hex_code" required />
                                                        <span id="error_hex_code" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close"
                                        id="cancel_modal">Cancel</button>
                                    <button type="button" class="btn btn-success" id="warna_create">Save</button>
                                    <button type="button" class="btn btn-success" id="warna_edit">Update</button>
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
                                    <table class="display dataTable" id="warnaDatatable" role="grid"
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
        thisTable = $('#warnaDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "warnas/datatable",
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
            columns: [{
                    data: "nama",
                },
                {
                    data: "hex_code",
                    orderable: false,
                    render: function (data, type, row) {
                        return `<input class="form-control form-control-sm form-control-color" type="color" value="${row.hex_code}" disabled />`;
                    }
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `
                        <a id="edit-warna" data-id="${row.id}" class="cursor-pointer edit-warna" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                    }
                },
            ]
        });

        $('#create_warna').click(function () {
            $('#modalFormLabel').html('Buat Warna');
            $("#warnaModalForm input").val('');
            $("#warna_create").show();
            $("#warna_edit").hide();
            $("#warnaModalForm").modal('show');
        });

        $('#warna_create').click(function () {
            $("#warna_create").prop('disabled', true);
            $.ajax({
                url: apiUrl + "warnas",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
                    // if (response.status == "success") {
                    $("#warnaModalForm").modal('hide');
                    toastr["success"](response.message);
                    thisTable.ajax.reload(null, false);
                    // } else {
                    //     alert('something wrong!!!');
                    // }
                    $('[id^="error_"]').text('');
                    $("#warna_create").prop('disabled', false);
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
                    } else if (xhr.status === 422) { // Check for unauthorized status
                        $('.txt-danger').text('');
                        // Extract and display validation errors
                        var errors = xhr.responseJSON.errors;
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
                    $("#warna_create").prop('disabled', false);
                }
            });
        });

        // form edit satuan
        $('#warnaDatatable').on('click', '.edit-warna', function (e) {
            e.preventDefault();
            currentSatuanId = $(this).data('id'); // Get the ID of the record
            console.log(apiUrl)
            $.ajax({
                url: apiUrl + "warnas/" + currentSatuanId,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    $("#warna_edit").show();
                    $("#warna_create").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_nama').val(dt['nama']);
                    $('#input_hex_code').val(dt['hex_code']);
                    $('#modalFormLabel').html('Edit Warna');
                    $("#warnaModalForm").modal('show');
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
        $('#warna_edit').click(function () {

            if (currentSatuanId === null) {
                alert('No Satuan selected.');
                return;
            }
            $("#warna_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "warnas/" + currentSatuanId,
                type: "PUT",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
                    // if (response.status == "success") {
                    $("#warnaModalForm").modal('hide');
                    toastr["success"](response.message);
                    thisTable.ajax.reload(null, false);
                    // } else {
                    //     alert('something wrong!!!');
                    // }
                    $('[id^="error_"]').text('');
                    $("#warna_edit").prop('disabled', false);
                },
                error: function (xhr) {
                    if (xhr.status === 400) {
                        $('.txt-danger').text('');
                        // Extract and display validation errors
                        var errors = xhr.responseJSON.errors;
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
                    $("#warna_edit").prop('disabled', false);
                }
            });
        });
        $('#cancel_modal').click(function () {
            $('#warnaModalForm').modal('hide');
        });


    });

</script>
@endsection
