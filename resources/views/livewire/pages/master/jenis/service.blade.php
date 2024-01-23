<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="show_jenis_service">Create Jenis Servis</button>
                    <!-- Modal Form-->
                    <div class="modal fade" id="jenisServiceModalForm" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel"></h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body">
                                    <form action="" id="form_modal">
                                        <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">Nama Jenis Servis <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-8">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama_jenissvc" value="{{old('nama_jenissvc')}}"
                                                            id="input_nama_jenissvc" maxlength="100" required />
                                                        <span id="error_nama_jenissvc" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close"
                                        id="cancel_modal">Cancel</button>
                                    <button type="button" class="btn btn-success" id="jenis_service_save">Simpan</button>
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
                                        <table aria-describedby="keytable_info" id="jenisServiceDatatable" class="table table-striped table-sm" style="width: 100%">
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
    var currentJenisService = null;
    var apiUrl = "{{ $apiEndpoint }}";

    $(document).ready(function () {
        thisTable = $("#jenisServiceDatatable").DataTable({
            serverSide: true,
            processing: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "jenis-service-datatable",
                    type: 'GET',
                    data: {
                        ...data,
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
                    data: "nama_jenissvc",
                },
                {
                    data: "created_by",
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `<a id="edit_jenis_service" data-id="${row.id}" class="cursor-pointer edit-btn" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>`;
                    }
                },
            ]
        });
        $('#show_jenis_service').click(function () {
            $('#modalFormLabel').html('Buat Jenis Servis');
            $("#jenisServiceModalForm input").val('');
            $("#jenis_service_save").show();
            $("#btn_edit").hide();
            $("#jenisServiceModalForm").modal('show');
        });

        $('#jenis_service_save').click(function () {
            $("#jenis_service_save").prop('disabled', true);

            $.ajax({
                url: apiUrl + "jenis-service",
                type: "POST",
                data: $('#form_modal').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status == "success") {
                        $("#jenisServiceModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#jenis_service_save").prop('disabled', false);
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
                    $("#jenis_service_save").prop('disabled', false);
                }
            });

        });
        // form edit
        $('#jenisServiceDatatable').on('click', '.edit-btn', function (e) {
            e.preventDefault();
            currentJenisService = $(this).data('id'); // Get the ID of the record
            $.ajax({
                url: apiUrl + "jenis-service/" + currentJenisService,
                type: "GET",
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $("#btn_edit").show();
                    $("#jenis_service_save").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_nama_jenissvc').val(dt['nama_jenissvc']);
                    $('#modalFormLabel').html('Edit Jenis Servis');
                    $("#jenisServiceModalForm").modal('show');
                }
            });
        });
        $('#btn_edit').click(function () {
            $("#btn_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "jenis-service/" + currentJenisService,
                type: "PUT",
                data: $('#form_modal').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status == "success") {
                        $("#jenisServiceModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $("#btn_edit").prop('disabled', false);
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
                    $("#btn_edit").prop('disabled', false);
                }
            });
        });

        $('#cancel_modal').click(function () {
            $('.txt-danger').text('');
            $('#jenisServiceModalForm').modal('hide');
        });
    });

</script>
@endsection
