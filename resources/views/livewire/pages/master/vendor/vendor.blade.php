<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="show_vendor">Create Vendor</button>
                    <!-- Modal Form-->
                    <div class="modal fade" id="vendorModalForm" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                                    <div class="col-3 col-form-label-sm">Nama <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama" value="{{old('nama')}}" id="input_nama"
                                                            maxlength="100" required />
                                                        <span id="error_nama" class="txt-danger"></span>

                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Alamat <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="alamat" value="{{old('alamat')}}" id="input_alamat"
                                                            maxlength="200" required />
                                                        <span id="error_alamat" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Telp <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="telp" value="{{old('telp')}}" id="input_telp"
                                                            maxlength="50" required />
                                                        <span id="error_telp" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Kontak <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="kontak" value="{{old('kontak')}}" id="input_kontak"
                                                            maxlength="100" required />
                                                        <span id="error_kontak" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">NPWP</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="npwp" value="{{old('npwp')}}" id="input_npwp"
                                                            maxlength="100">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">No Rekening</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="no_rekening" value="{{old('no_rekening')}}"
                                                            id="input_no_rekening" maxlength="100">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama Bank</div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama_bank" value="{{old('nama_bank')}}"
                                                            id="input_nama_bank" maxlength="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close"
                                        id="cancel_modal">Cancel</button>
                                    <button type="button" class="btn btn-success" id="vendor_save">Simpan</button>
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
                                    <table aria-describedby="keytable_info" id="vendorDatatable" class="table table-striped table-sm" style="width: 100%">
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
    <script>
        window.onclick = function (event) {
            let modal = document.getElementById('vendorModel');
            if (event.target == modal) {
                modal.style.display = "none";
                Livewire.emit('closeModal'); // Emitting an event to close the modal
            }
        }

    </script>
</div>
@section('script')
<script>
    var thisTable;
    var currentVendor = null;
    var apiUrl = "{{ $apiEndpoint }}";

    $(document).ready(function () {
        thisTable = $("#vendorDatatable").DataTable({
            serverSide: true,
            processing: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "vendor-datatable",
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
                    data: "nama",
                }, {
                    data: "alamat",
                },
                {
                    data: "telp",
                },
                {
                    data: "kontak",
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
        $('#show_vendor').click(function () {
            $('#modalFormLabel').html('Buat Vendor');
            $("#vendorModalForm input").val('');
            $("#vendor_save").show();
            $("#btn_edit").hide();
            $("#vendorModalForm").modal('show');
        });

        $('#vendor_save').click(function () {
            $("#vendor_save").prop('disabled', true);

            $.ajax({
                url: apiUrl + "vendor",
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
                        $("#vendorModalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#vendor_save").prop('disabled', false);
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
                    $("#vendor_save").prop('disabled', false);
                }
            });

        });
        // form edit
        $('#vendorDatatable').on('click', '.edit-btn', function (e) {
            e.preventDefault();
            currentVendor = $(this).data('id'); // Get the ID of the record
            $.ajax({
                url: apiUrl + "vendor/" + currentVendor,
                type: "GET",
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $("#btn_edit").show();
                    $("#vendor_save").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_nama').val(dt['nama']);
                    $('#input_alamat').val(dt['alamat']);
                    $('#input_telp').val(dt['telp']);
                    $('#input_kontak').val(dt['kontak']);
                    $('#input_npwp').val(dt['npwp']);
                    $('#input_no_rekening').val(dt['no_rekening']);
                    $('#input_nama_bank').val(dt['nama_bank']);
                    $('#modalFormLabel').html('Edit Jenis Servis');
                    $("#vendorModalForm").modal('show');
                }
            });
        });
        $('#btn_edit').click(function () {
            $("#btn_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "vendor/" + currentVendor,
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
                        $("#vendorModalForm").modal('hide');
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
            $('#vendorModalForm').modal('hide');
        });
    });

</script>
@endsection