<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="show_create">Create Karyawan</button>

                    <!-- Modal Form-->
                    <div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                                    <div class="col-3 col-form-label-sm">Kode <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="kode" value="{{old('kode')}}" id="input_kode"
                                                            maxlength="100" required>
                                                        <span id="error_kode" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama" value="{{old('nama')}}" id="input_nama"
                                                            maxlength="100" required>
                                                        <span id="error_nama" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">HP <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="hp" value="{{old('hp')}}" id="input_hp"
                                                            maxlength="200" required>
                                                        <span id="error_hp" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Email <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="email" value="{{old('email')}}" id="input_email"
                                                            maxlength="50" required>
                                                        <span id="error_email" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Posisi <span
                                                            class="text-danger">*</span></div>
                                                    <div class="col-9">
                                                        <select class="form-select form-select-sm" name="posisi" id="input_posisi" required>
                                                            <option value="Kepala Bengkel">Kepala Bengkel</option>
                                                            <option value="Service Advisor">Service Advisor</option>
                                                            <option value="Mekanik">Mekanik</option>
                                                            <option value="Forman">Forman</option>
                                                            <option value="Staff">Staff</option>
                                                            <option value="Part Head">Part Head</option>
                                                            <option value="Partman">Partman</option>
                                                        </select>
                                                        <span id="error_posisi" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Group</div>
                                                    <div class="col-9">
                                                        <select class="form-select form-select-sm" name="group"
                                                            id="input_group">
                                                            <option value="">-</option>
                                                            <option value="Group 1">Group 1</option>
                                                            <option value="Group 2">Group 2</option>
                                                            <option value="Group 3">Group 3</option>
                                                            <option value="Group 4">Group 4</option>
                                                            <option value="Group 5">Group 5</option>
                                                            <option value="Group 6">Group 6</option>
                                                            <option value="Group 7">Group 7</option>
                                                            <option value="Group 8">Group 8</option>
                                                            <option value="Group 9">Group 9</option>
                                                            <option value="Group 10">Group 10</option>
                                                        </select>
                                                        <span id="error_group" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close"
                                        onclick="cancel_modal()">Cancel</button>
                                    <button type="button" class="btn btn-success" id="btn_create">Simpan</button>
                                    <button type="button" class="btn btn-success" id="btn_edit"
                                        onclick="simpan_edit()">Edit</button>
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
                                    <table class="dataTables_wrapper container-fluid dt-bootstrap4" id="karyawanDatatable" role="grid"
                                        aria-describedby="keytable_info" style="position: relative;">
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
    var apiUrl = "{{ $apiEndpoint }}";
    var currentKaryawanId = null;
    $(document).ready(function () {
        thisTable = $('#karyawanDatatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, 'desc']
            ],
            ajax: function (data, callback, settings) {
                $.ajax({
                    url: apiUrl + "karyawan/datatable",
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
                    data: "kode",
                },
                {
                    data: "nama",
                },
                {
                    data: "hp",
                },
                {
                    data: "email",
                },
                {
                    data: "created_by",
                },
                {
                    data: null,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, row) {
                        return `<a class="cursor-pointer edit" data-id="${row.id}" title="Buat Akun"><i class="fa fa-key text-info fa-lg mx-2"></i></a>
                        <a class="cursor-pointer edit show-edit" data-id="${row.id}" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>
                        <a class="cursor-pointer hapus-karyawan" data-id="${row.id}" title="Delete"><i class="fa fa-trash-o text-danger fa-lg mx-2"></i></a>`;
                    }
                }
            ]
        });
        $('#show_create').click(function () {
            $('#modalFormLabel').html('Buat Karyawan');
            $("#modalForm input").val('');
            $("#btn_create").show();
            $("#btn_edit").hide();
            $('[id^="error_"]').text('');
            $("#modalForm").modal('show');
        });
        $('#btn_create').click(function () {
            $("#btn_create").prop('disabled', true);
            $.ajax({
                url: apiUrl + "karyawan",
                type: "POST",
                data: $('#form_modal').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status === true) {
                        $("#modalForm").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
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
            $("#btn_create").prop('disabled', false);
        });

        $("#karyawanDatatable").on("click", ".show-edit", function () {
            currentKaryawanId = $(this).data('id'); // Get the ID of the record
            $.ajax({
                url: apiUrl + "karyawan/" +currentKaryawanId,
                type: "GET",
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status == true) {
                        $("#btn_edit").prop('disabled', false);
                        $("#btn_edit").show();
                        $("#btn_create").hide();
                        var dt = [];
                        $.each(response.data, function (key, value) {
                            dt[key] = value;
                        });
                        $('#input_kode').val(dt['kode']);
                        $('#input_nama').val(dt['nama']);
                        $('#input_hp').val(dt['hp']);
                        $('#input_email').val(dt['email']);
                        $('#input_posisi').val(dt['posisi']);
                        $('#input_group').val(dt['group']);
                        $('#modalFormLabel').html('Edit Karyawan');
                        $("#modalForm").modal('show');
                    } else {
                        alert('something wrong!!!');
                    }
                }
            });
        });
        $('#btn_edit').click(function () {
            $("#btn_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "karyawan/" +currentKaryawanId,
                type: "PUT",
                data: $('#form_modal').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status == true) {
                        $("#modalForm").modal('hide');
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
        
        // hapus data
        $("#karyawanDatatable").on("click", ".hapus-karyawan", function () {
            currentKaryawanId = $(this).data('id'); // Get the ID of the record
            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Kamu tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    // console.log();
                    $.ajax({
                        url: apiUrl + "karyawan/" +currentKaryawanId,
                        type: "DELETE",
                        dataType: "json",
                        headers: {
                            'Authorization': 'Bearer ' + '{{ $token }}',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // For CSRF protection in Laravel
                        },
                        success: function (response) {
                            // console.log();
                            Swal.fire("Terhapus!", response.msg, "success");
                            $("#karyawanDatatable").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });

    function do_delete(crypt_kode) {

        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Kamu tidak akan dapat mengembalikan ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                // console.log();
                $.ajax({
                    url: '',
                    type: "POST",
                    dataType: 'json',
                    data: {
                        crypt_kode: crypt_kode,
                        _token: "{{csrf_token()}}",
                    },
                    success: function (response) {
                        // console.log();
                        Swal.fire("Terhapus!", response.message, "success");
                        $("#karyawanDatatable").DataTable().ajax.reload();
                    },
                });
            }
        });
    }


    function buat_akun(crypt_id) {

        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Karyawan ini akan dibuatkan akses menggunakan aplikasi ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                // console.log();
                $.ajax({
                    url: '',
                    type: "POST",
                    dataType: 'json',
                    data: {
                        crypt_id: crypt_id,
                        _token: "{{csrf_token()}}",
                    },
                    success: function (response) {
                        // console.log();
                        if (response.status == 200) {
                            Swal.fire("Berhasil!", response.message, "success");
                            $("#karyawanDatatable").DataTable().ajax.reload();
                        } else {
                            Swal.fire("Gagal!", response.message, "error");
                        }

                    },
                });
            }
        });
    }

    function cancel_modal() {
        $('#modalForm').modal('hide');
    }

</script>
@endsection
