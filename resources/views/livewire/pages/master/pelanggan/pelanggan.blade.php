<div>
    {{-- :headers="$headers" :rows="$rows" :showUpdate="false", :showDelete="false" :perPage="10" --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="tambah_pelanggan">Tambah Data</button>

                    <div class="modal fade" tabindex="-1" role="dialog" id="pelangganModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel"></h5>
                                    {{-- <button wire:click="closeModal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                </div>
                                <div class="modal-body">
                                    <form action="" id="form_modal">
                                        <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama <small><span class="text-danger">(Wajib)</span></small></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama" value="{{old('nama')}}" id="input_nama"
                                                            maxlength="100" required>
                                                        <span id="error_nama" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Alamat </div>
                                                    <div class="col-9">
                                                        <textarea class="form-control form-control-sm" name="alamat"
                                                            id="input_alamat" maxlength="250"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Telp </div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="telp" value="{{old('telp')}}" id="input_telp"
                                                            maxlength="50">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">HP </div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="hp" value="{{old('hp')}}" id="input_hp"
                                                            maxlength="50">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Email </div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="email" value="{{old('email')}}" id="input_email"
                                                            maxlength="100">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Kontak <small><span class="text-danger">(Wajib)</span></small></div>
                                                    <div class="col-9">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="kontak" value="{{old('kontak')}}" id="input_kontak"
                                                            maxlength="100">
                                                        <span id="error_kontak" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm pe-0">Tipe Pelanggan</div>
                                                    <div class="col-8 ">
                                                        <select class="form-select form-select-sm" name="tipe_pelanggan"
                                                            id="input_tipe_pelanggan" required>
                                                            <option value="UMUM">UMUM</option>
                                                            <option value="PERUSAHAAN">PERUSAHAAN</option>
                                                            <option value="BENGKEL">BENGKEL</option>
                                                            <option value="INSTANSI PEMERINTAH">INSTANSI PEMERINTAH
                                                            </option>
                                                            <option value="ORGANISASI">ORGANISASI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Due </div>
                                                    <div class="col-9">
                                                        <div class="input-group input-group-sm">
                                                            <input type="text" class="form-control form-control-sm" name="due" id="input_due" maxlength="3" value="0" />
                                                            <span class="input-group-text">Hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">Nama Tagihan <small><span class="text-danger">(Wajib)</span></small></div>
                                                    <div class="col-8">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="nama_tagihan" value="{{old('nama_tagihan')}}"
                                                            id="input_nama_tagihan" maxlength="100" required>
                                                        <span id="error_nama_tagihan" class="txt-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">Alamat Tagihan</div>
                                                    <div class="col-8">
                                                        <textarea class="form-control form-control-sm"
                                                            name="alamat_tagihan" id="input_alamat_tagihan"
                                                            maxlength="250"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">Telp Tagihan</div>
                                                    <div class="col-8">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="telp_tagihan" value="{{old('telp_tagihan')}}"
                                                            id="input_telp_tagihan" maxlength="50">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">PIC Tagihan</div>
                                                    <div class="col-8">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="pic_tagihan" value="{{old('pic_tagihan')}}"
                                                            id="input_pic_tagihan" maxlength="100">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">NPWP Tagihan</div>
                                                    <div class="col-8">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="npwp_tagihan" value="{{old('npwp_tagihan')}}"
                                                            id="input_npwp_tagihan" maxlength="50">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" aria-label="Close"
                                        id="btn_cancel">Cancel</button>
                                    <button type="button" class="btn btn-success" id="btn_create">Simpan</button>
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
                                    <table class="display dataTable" id="pelangganDatatable" role="grid"
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
    <script src="{{ asset("admin/js/jquery.min.js") }}"></script>

    <script>
        $(document).ready(function () {
            var apiUrl = "{{ $apiEndpoint }}";
            
            var isFirstRequest = true; // Flag to indicate the first request
            var thisTable;
            var currentPelangganId = null;
            thisTable = $('#pelangganDatatable').DataTable({
                processing: true,
                serverSide: true,
                order: [
                    [0, 'desc']
                ],
                ajax: function (data, callback, settings) {
                    $.ajax({
                        url: "{{ route('master/pelanggan/datatable') }}",
                        type: 'GET',
                        data: {
                            ...data,
                        },
                        success: function (response) {
                            // console.log(response);
                            callback({
                                draw: response.draw,
                                recordsTotal: response.recordsTotal,
                                recordsFiltered: response.recordsFiltered,
                                data: response.data
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
                        data: 'nama'
                    },
                    {
                        data: 'alamat'
                    },
                    {
                        data: 'telp'
                    },
                    {
                        data: 'hp'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'kontak'
                    },
                    {
                        data: null,
                        title: 'Actions',
                        orderable: false,
                        render: function (data, type, row) {
                            return `<a id="edit_pelanggan" data-id="${row.id}" class="cursor-pointer edit-btn-pelanggan" title="Edit"><i class="fa fa-edit text-primary fa-lg mx-2"></i></a>
                            <a id="edit_kendaraan" data-id="${row.id}" class="cursor-pointer edit-kendaraan" title="Kendaraan"><i class="fa fa-car text-info fa-lg mx-2"></i></a>`;
                        }
                    }
                ]
            });

            $('#btn_cancel').click(function() {
                $('#pelangganModal').modal('hide');
            });

            // form create
            $('#tambah_pelanggan').click(function () {
                $('#modalFormLabel').html('Buat Pelanggan');
                $("#modalForm input").val('');
                $("#btn_create").show();
                $("#btn_edit").hide();
                $('#form_modal').trigger("reset"); // Reset the form
                $("#pelangganModal").modal('show');
            });

            // insert data
            $('#btn_create').click(function() {
                $("#btn_create").prop('disabled', true);
                $.ajax({
                    url: apiUrl + "pelanggan",
                    type: "POST",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    data: $('#form_modal').serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.status == "success") {
                            $("#pelangganModal").modal('hide');
                            toastr["success"](response.message);
                            thisTable.ajax.reload(null, false);
                        } else {
                            alert('something wrong!!!');
                        }
                        $('[id^="error_"]').text('');
                        $("#btn_create").prop('disabled', false);
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
                        $("#btn_create").prop('disabled', false);
                    }
                });
            });

            // form edit
            $('#pelangganDatatable').on('click', '.edit-btn-pelanggan', function(e) {
                e.preventDefault();
                currentPelangganId = $(this).data('id'); // Get the ID of the record
                console.log(apiUrl)
                $.ajax({
                    url: apiUrl + "pelanggan/" + currentPelangganId,
                    type: "GET",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response)
                        $("#btn_edit").prop('disabled', false);
                        $("#btn_edit").show();
                        $("#btn_create").hide();
                        var dt = [];
                        $.each(response.data, function(key, value) {
                            dt[key] = value;
                        });
                        
                        $('#input_nama').val(dt['nama']);
                        $('#input_alamat').val(dt['alamat']);
                        $('#input_telp').val(dt['telp']);
                        $('#input_hp').val(dt['hp']);
                        $('#input_kontak').val(dt['kontak']);
                        $('#input_tipe_pelanggan').val(dt['tipe_pelanggan']);
                        $('#input_due').val(dt['due']);
                        $('#input_nama_tagihan').val(dt['nama_tagihan']);
                        $('#input_alamat_tagihan').val(dt['alamat_tagihan']);
                        $('#input_telp_tagihan').val(dt['telp_tagihan']);
                        $('#input_npwp_tagihan').val(dt['npwp_tagihan']);
                        $('#modalFormLabel').html('Edit Pelanggan');
                        $("#pelangganModal").modal('show');
                    },
                    error: function(xhr) {
                        if (xhr.status === 401) { // Check for unauthorized status
                            // Redirect to the login page
                            window.location.href = "{{ url('auth/login') }}";
                        }
                        $("#btn_edit").prop('disabled', false);
                    }
                });
            });

            // update data
            $('#btn_edit').click(function() {
                if (currentPelangganId === null) {
                    alert('No supplier selected.');
                    return;
                }
                $("#btn_edit").prop('disabled', true);
                $.ajax({
                    url: apiUrl + "pelanggan/" + currentPelangganId,
                    type: "PUT",
                    headers: {
                        'Authorization': 'Bearer ' + '{{ $token }}',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                    },
                    data: $('#form_modal').serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log(response)
                        if (response.status == "success") {
                            $("#pelangganModal").modal('hide');
                            toastr["success"](response.message);
                            thisTable.ajax.reload(null, false);
                        } else {
                            alert('something wrong!!!');
                        }
                        $('[id^="error_"]').text('');
                        $("#btn_edit").prop('disabled', false);
                    },
                    error: function(xhr) {
                        console.log(xhr)
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
        });
    </script>
</div>
