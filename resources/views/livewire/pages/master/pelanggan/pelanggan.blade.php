<div>
    {{-- :headers="$headers" :rows="$rows" :showUpdate="false", :showDelete="false" :perPage="10" --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <button type="button" class="btn btn-primary btn-sm mb-2" id="tambah_pelanggan">Tambah Data</button>

                    {{-- pelanggan modal --}}
                    <div class="modal fade" tabindex="-1" role="dialog" id="pelangganModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalFormLabel"></h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" id="form_modal">
                                        <input type="hidden" name="crypt_id" id="input_crypt_id" maxlength="200">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group row mb-1">
                                                    <div class="col-3 col-form-label-sm">Nama <small><span
                                                                class="text-danger">(Wajib)</span></small></div>
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
                                                    <div class="col-3 col-form-label-sm">Kontak <small><span
                                                                class="text-danger">(Wajib)</span></small></div>
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
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="due" id="input_due" maxlength="3" value="0" />
                                                            <span class="input-group-text">Hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group row mb-1">
                                                    <div class="col-4 col-form-label-sm">Nama Tagihan <small><span
                                                                class="text-danger">(Wajib)</span></small></div>
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

                    <!-- List kendaraan -->
                    <div class="modal fade" id="areaModalKendaraan" tabindex="-1" role="dialog"
                        aria-labelledby="areaModalLabelKendaraan" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form autocomplete="off" id="form_cari_kendaraan">
                                        <div class="row">
                                            <div class="col-8">
                                                <input name="cari_modal_nama_kendaraan" type="text"
                                                    id="input_cari_modal_nama_kendaraan"
                                                    class="form-control form-control-sm" placeholder="No Polisi"
                                                    />
                                            </div>
                                            <div class="col-2">
                                                <button type="button" class="btn btn-danger"
                                                    onclick="reset_search_kendaraan()">Reset</button>
                                            </div>
                                            <div class="col-2">
                                                <button type="button" class="btn btn-primary"
                                                    id="create_new_kendaraan">Create new</button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr />
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-bordered table-hover" id="modal-table-kendaraan">
                                                <thead>
                                                    <tr>
                                                        <th>No Polisi</th>
                                                        <th>Merk</th>
                                                        <th>Tipe</th>
                                                        <th>Tahun</th>
                                                        <th>Warna</th>
                                                        <th>Transmisi</th>
                                                        <th>Act</th>
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

                    {{-- Create Kendaraan --}}
                    <div class="modal fade" id="areaModal_newkendaraan" tabindex="-1" role="dialog"
                        aria-labelledby="areaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Create Kendaraan</h5>
                                </div>
                                <div class="modal-body">
                                    <form autocomplete="off" id="form_new_kendaraan">
                                        @csrf
                                        <input type="hidden" name="kode_pelanggan_kendaraan"
                                            id="input_kode_pelanggan_kendaraan" />
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">No Polisi <span
                                                    class="text-danger">*</span></div>
                                            <div class="col-9"><input type="text" class="form-control form-control-sm"
                                                    name="no_polisi" id="input_new_no_polisi_kendaraan"
                                                    maxlength="50" required />
                                                    <span id="error_no_polisi" class="txt-danger"></span>
                                                    </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Merk <span class="text-danger">*</span>
                                            </div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm" name="id_merk"
                                                    id="input_new_merk_kendaraan" required>
                                                    <option disabled>--Pilih Merk--</option>

                                                    @foreach($merk['data'] as $item)
                                                        <option value="{{$item['id']}}">{{$item['nama_merk']}}</option>
                                                    @endforeach
                                                </select>
                                                <span id="error_id_merk" class="txt-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Tipe <span class="text-danger">*</span>
                                            </div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm" name="id_tipe"
                                                    id="input_new_tipe_kendaraan" required>
                                                <span id="error_id_tipe" class="txt-danger"></span>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Tahun</div>
                                            <div class="col-9">
                                            <input type="text" class="form-control form-control-sm"
                                                    name="tahun" id="input_new_tahun_kendaraan"
                                                    maxlength="50" />
                                            <span id="error_tahun" class="txt-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Warna</div>
                                            <div class="col-9">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="warna" id="input_new_warna_kendaraan"
                                                    maxlength="50" />
                                                <span id="error_warna" class="txt-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Transmisi <span
                                                    class="text-danger">*</span></div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm"
                                                    name="transmisi" id="input_new_transmisi_kendaraan"
                                                    required>
                                                    <option value="AT">AT</option>
                                                    <option value="MT">MT</option>
                                                </select>
                                                <span id="error_transmisi" class="txt-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">No Rangka</div>
                                            <div class="col-9">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="no_rangka" id="input_new_no_rangka_kendaraan"
                                                    maxlength="50" />
                                                <span id="error_no_rangka" class="txt-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">No Mesin</div>
                                            <div class="col-9">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="no_mesin" id="input_new_no_mesin_kendaraan"
                                                    maxlength="50" />
                                                <span id="error_no_mesin" class="txt-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm pe-0">Jenis Kontrak</div>
                                            <div class="col-9 ">
                                                <select class="form-select form-select-sm" name="jenis_kontrak"
                                                    id="input_new_jenis_kontrak">
                                                    <option value="Non Kontrak">Non Kontrak</option>
                                                    <option value="Lumpsum">Lumpsum</option>
                                                    <option value="Lumpsum Terbatas">Lumpsum Terbatas</option>
                                                    <option value="Cost Plus">Cost Plus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Model Karoseri</div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm"
                                                    name="model_karoseri"
                                                    id="input_new_model_karoseri_kendaraan">
                                                    <option value="">-- Pilih Model Karoseri --</option>
                                                    <option value="Box Besi">Box Besi</option>
                                                    <option value="Wing Box">Wing Box</option>
                                                    <option value="Bak Kayu">Bak Kayu</option>
                                                    <option value="Box Aluminium">Box Aluminium</option>
                                                    <option value="Bak Besi">Bak Besi</option>
                                                    <option value="Freezer">Freezer</option>
                                                    <option value="Container">Container</option>
                                                    <option value="Flatbad">Flatbad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Driving Mode</div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm"
                                                    name="driving_mode"
                                                    id="input_new_driving_mode_kendaraan">
                                                    <option value="">-- Pilih Driving Mode --</option>
                                                    <option value="6 ban">6 ban</option>
                                                    <option value="4 ban">4 ban</option>
                                                    <option value="10 ban">10 ban</option>
                                                    <option value="16 ban">16 ban</option>
                                                    <option value="24 ban">24 ban</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Power</div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm" name="power"
                                                    id="input_new_power_kendaraan">
                                                    <option value="">-- Pilih Power --</option>
                                                    <option value="100 PS">100 PS</option>
                                                    <option value="120 PS">120 PS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">Katagori Kendaraan</div>
                                            <div class="col-9">
                                                <select class="form-select form-select-sm" name="kategori_kendaraan"
                                                    id="input_new_kategori_kendaraan">
                                                    <option value="">-- Pilih Kategori Kendaraan --</option>
                                                    <option value="Passenger">Passenger</option>
                                                    <option value="Pick Up">Pick Up</option>
                                                    <option value="Light Truck/CDD">Light Truck/CDD</option>
                                                    <option value="Light Truck/CDE">Light Truck/CDE</option>
                                                    <option value="Medium Truck/Engkel">Medium Truck/Engkel</option>
                                                    <option value="Medium Truck/Tronton">Medium Truck/Tronton</option>
                                                    <option value="Heavy Duty">Heavy Duty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-3 col-form-label-sm">&nbsp;</div>
                                            <div class="col-9">
                                            <button type="button" class="btn btn-success" id="do_add_kendaraan">Save</button>
                                            <button type="button" class="btn btn-success" id="do_update_kendaraan">Update</button>
                                            <button type="button" class="btn btn-danger" id="cancel_add_kendaraan">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
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
</div>
@section('script')
<script>
    var apiUrl = "{{ $apiEndpoint }}";
    var isFirstRequest = true; // Flag to indicate the first request
    var thisTable;
    var tbl_modal_kendaraan;
    var currentPelangganId = null;
    var currentKendaraanId = null;
    function updateTipeDropdown(merk) {
        $.ajax({
            url: apiUrl + "tipe-search?column=id_merk&value=" + merk,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + '{{ $token }}',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function (response) {
                var dt = '';
                $.each(response.data, function(key, value) {
                    dt += '<option value="' + value.id + '">' + value.nama_tipe + '</option>';
                });
                if (dt == '') {
                    dt = '<option value="">Tidak ada tipe</option>';
                }
                $('#input_new_tipe_kendaraan').html(dt);
                $("#btn_edit").prop('disabled', false);
            }
        });
    }
    
    $(document).ready(function () {
        
        // Pelanggan datatable
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
                        <a id="kendaraan" data-id="${row.id}" class="cursor-pointer edit-btn-kendaraan" title="Kendaraan"><i class="fa fa-car text-info fa-lg mx-2"></i></a>`;
                    }
                }
            ]
        });

        // Show kendaraan
        $('#pelangganDatatable').on('click', '.edit-btn-kendaraan', function (e) {
            //e.preventDefault();
            currentPelangganId = $(this).data('id'); // Get the ID of the record
            console.log(currentPelangganId)
            $("#areaModalKendaraan").modal('show');
        });

        //modal Kendaraan
        $('#areaModalKendaraan').on('shown.bs.modal', function () {
            if (currentPelangganId === null) {
                alert('No Pelanggan selected.');
                return;
            }

            tbl_modal_kendaraan = $("#modal-table-kendaraan").DataTable({
                serverSide: true,
                processing: true,
                ajax: function (data, callback, settings) {
                    $.ajax({
                        url: apiUrl + "kendaraan/datatable/" + currentPelangganId,
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
                        data: "no_polisi",
                    },
                    {
                        data: "nama_merk",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "nama_tipe",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "tahun",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "warna",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "transmisi",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "Actions",
                        orderable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            return `
                            <a id="update_kendaraan" data-id="${row.id}" class="edit-btn edit btn btn-primary btn-xs cursor-pointer">Edit</a>
                            <a id="delete_kendaraan" data-id="${row.id}" class="delete-btn-kendaraan edit btn btn-danger btn-xs cursor-pointer">Delete</a>`;
                        }
                    }
                ]
            });
        })

        // remove datatable areaModalKendaraan while modal hide/disapper
        $('#areaModalKendaraan').on('hide.bs.modal', function () {
            $('#modal-table-kendaraan').DataTable().destroy();
        });

        // show add kendaraan modal
        $('#create_new_kendaraan').click(function () {
            if (currentPelangganId === null) {
                alert('No Pelanggan selected.');
                return;
            }
            $("#input_kode_pelanggan_kendaraan").val(currentPelangganId);
            $('#do_update_kendaraan').hide();
            $('#do_add_kendaraan').show();

            $('#areaModalKendaraan').modal('hide');
            $('#areaModal_newkendaraan').modal('show');
        });

        // update tipe dropdown
        $('#input_new_merk_kendaraan').on('change', function(){
            var merk = $(this).val();
            updateTipeDropdown(merk);
        });

        // cancel kendaraan
        $('#cancel_add_kendaraan').click(function () {
            $('#areaModal_newkendaraan').modal('hide');
            $('#areaModalKendaraan').modal('show');
        });

        // insert kendaraan
        $('#do_add_kendaraan').click(function () {
            $("#do_add_kendaraan").prop('disabled', true);

            // Serialize the form data
            var formData = $('#form_new_kendaraan').serialize();

            // Additional data with new key-value pair
            var additionalData = { kode_pelanggan: currentPelangganId };

            // Merge the serialized form data and additional data
            var finalData = formData + '&' + $.param(additionalData);
            $.ajax({
                url: apiUrl + "kendaraan",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                },
                data: finalData,
                dataType: "json",
                success: function(response) {
                    if (response.status == "success") {
                        $('#areaModal_newkendaraan').modal('hide');
                        $('#areaModalKendaraan').modal('show');
                        toastr["success"](response.message);
                        tbl_modal_kendaraan.ajax.reload(null, false);
                        $('#form_new_kendaraan').trigger("reset");
                    } else {
                        alert('something wrong!!!');
                    }
                    $("#do_add_kendaraan").prop('disabled', false);
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
                    $("#do_add_kendaraan").prop('disabled', false);
                }
            });
        });

        // search kendaraan
        $('#input_cari_modal_nama_kendaraan').keyup(function() {
            var key = $('#input_cari_modal_nama_kendaraan').val();
            tbl_modal_kendaraan.search(key).draw();
        });

        // edit kendaraan
        $('#modal-table-kendaraan').on('click', '.edit-btn', function (e) {
            e.preventDefault();
            currentKendaraanId = $(this).data('id'); // Get the ID of the record
           
            $.ajax({
                url: apiUrl + "kendaraan/" + currentKendaraanId,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    $("#do_update_kendaraan").show();
                    $("#do_add_kendaraan").hide();
                    var dt = [];
                    $.each(response.data, function(key, value) {
                        dt[key] = value;
                    });
                    $('#input_new_no_polisi_kendaraan').val(dt['no_polisi']);
                    $('#input_new_merk_kendaraan').val(dt['id_merk']);
                    updateTipeDropdown(dt['id_merk']);
                    $('#input_new_tipe_kendaraan').val(dt['id_tipe']);
                    $('#input_new_tahun_kendaraan').val(dt['tahun']);
                    $('#input_new_warna_kendaraan').val(dt['warna']);
                    $('#input_new_transmisi_kendaraan').val(dt['transmisi']);
                    $('#input_new_no_rangka_kendaraan').val(dt['no_rangka']);
                    $('#input_new_no_mesin_kendaraan').val(dt['no_mesin']);
                    $('#input_new_model_karoseri_kendaraan').val(dt['model_karoseri']);
                    $('#input_new_driving_mode_kendaraan').val(dt['driving_mode']);
                    $('#input_new_power_kendaraan').val(dt['power']);
                    $('#input_new_kategori_kendaraan').val(dt['kategori_kendaraan']);
                    $('#input_new_jenis_kontrak').val(dt['jenis_kontrak']);
                    $('#modalFormLabel').html('Edit Pelanggan');
                    $('#areaModalKendaraan').modal('hide');
                    $('#areaModal_newkendaraan').modal('show');
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

        // Update kendaraan
        $('#do_update_kendaraan').click(function () {
            if (currentKendaraanId === null) {
                alert('No Kendaraan selected.');
                return;
            }
            $("#btn_edit").prop('disabled', true);
            $("#do_update_kendaraan").prop('disabled', true);
            $.ajax({
                url: apiUrl + "kendaraan/" + currentKendaraanId,
                type: "PUT",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                },
                data: $('#form_new_kendaraan').serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.status == "success") {
                        $('#areaModal_newkendaraan').modal('hide');
                        $('#areaModalKendaraan').modal('show');
                        toastr["success"](response.message);
                        tbl_modal_kendaraan.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $("#do_update_kendaraan").prop('disabled', false);
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
                    $("#do_update_kendaraan").prop('disabled', false);
                }
            });
        });

        // Delete kendaraan
        $('#modal-table-kendaraan').on('click', '.delete-btn-kendaraan', function (e) {
            e.preventDefault();
            currentKendaraanId = $(this).data('id');
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
                        url: apiUrl + "kendaraan/" + currentKendaraanId,
                        type: "DELETE",
                        headers: {
                            'Authorization': 'Bearer ' + '{{ $token }}',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // console.log();
                            Swal.fire("Terhapus!", "Data Berhasil Terhapus", "success");
                            $("#modal-table-kendaraan").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });

        // cancel modal pelanggan
        $('#btn_cancel').click(function () {
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
        $('#btn_create').click(function () {
            $("#btn_create").prop('disabled', true);
            $.ajax({
                url: apiUrl + "pelanggan",
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
                        $("#pelangganModal").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
                    $("#btn_create").prop('disabled', false);
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
                    $("#btn_create").prop('disabled', false);
                }
            });
        });

        // form edit
        $('#pelangganDatatable').on('click', '.edit-btn-pelanggan', function (e) {
            e.preventDefault();
            currentPelangganId = $(this).data('id'); // Get the ID of the record
            console.log(apiUrl)
            $.ajax({
                url: apiUrl + "pelanggan/" + currentPelangganId,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    $("#btn_edit").prop('disabled', false);
                    $("#btn_edit").show();
                    $("#btn_create").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
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
                error: function (xhr) {
                    if (xhr.status === 401) { // Check for unauthorized status
                        // Redirect to the login page
                        window.location.href = "{{ url('auth/login') }}";
                    }
                    $("#btn_edit").prop('disabled', false);
                }
            });
        });

        // update data
        $('#btn_edit').click(function () {
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
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form_modal').serialize(),
                dataType: "json",
                success: function (response) {
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
                error: function (xhr) {
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
@endsection
