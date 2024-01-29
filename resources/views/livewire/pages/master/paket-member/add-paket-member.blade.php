<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 xl-100">
                <div class="card col-12 mt-3">
                    <div class="card-body p-0" style="margin: 20px">
                        <form action="#" id="form-create">
                            @csrf
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Kode Paket Member <span
                                        class="text-danger">*</span></div>
                                <div class="col-9"><input type="text" class="form-control form-control-sm"
                                        name="kode_paketmember" id="input_kode_paketmember" maxlength="50" required />
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Nama Paket Member <span
                                        class="text-danger">*</span></div>
                                <div class="col-9"><input type="text" class="form-control form-control-sm"
                                        name="nama_paketmember" id="input_nama_paketmember" maxlength="100" /></div>
                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Harga <span class="text-danger">*</span></div>
                                <div class="col-9"><input type="number" class="form-control form-control-sm"
                                        name="harga" id="input_harga_paketmember" maxlength="10" /></div>
                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Durasi <span class="text-danger">*</span></div>
                                <div class="col-9">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm"
                                            name="durasi" id="input_durasi_paketmember" maxlength="3" />
                                        <span class="input-group-text">Hari</span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label">Tipe Paket</div>
                                <div class="col-9">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline1" type="radio"
                                                name="tipe_paket" value="global" data-bs-original-title="" title="" 
                                                checked>
                                            <label class="form-check-label mb-0" for="radioinline1">Global</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline2" type="radio"
                                                name="tipe_paket" value="detail" data-bs-original-title="" title=""
                                                >
                                            <label class="form-check-label mb-0" for="radioinline2">Detail</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div id="area_global" style="display: none;">
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Diskon Part Servis (%)</div>
                                    <div class="col-2"><input type="text" class="form-control form-control-sm"
                                            name="diskon_part_svc" id="input_diskon_part_svc" maxlength="2" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Diskon Jasa Servis (%)</div>
                                    <div class="col-2"><input type="text" class="form-control form-control-sm"
                                            name="diskon_jasa_svc" id="input_diskon_jasa_svc" maxlength="2" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Diskon Toko (%)</div>
                                    <div class="col-2"><input type="text" class="form-control form-control-sm"
                                            name="diskon_toko" id="input_diskon_toko" maxlength="2" /></div>
                                </div>
                            </div>

                            <div id="area_detail" style="display: none;">
                                <table class="table table-bordered table-hover" id="table-part">
                                    <thead>
                                        <tr>
                                            <th style="width:20%">Kode Sparepart</th>
                                            <th style="width:30%">Nama Sparepart</th>
                                            <th style="width:15%">Harga</th>
                                            <th style="width:15%">Diskon (Rp)</th>
                                            <th style="width:10%">Diskon (%)</th>
                                            <th style="width:10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body_dtl_part">

                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-2"><button type="button" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#areaModal">+ Sparepart</button>
                                    </div>

                                    <div class="col-10 text-end pr-5">

                                    </div>
                                </div>
                                <hr />
                                <table class="table table-bordered table-hover" id="table-jasa">
                                    <thead>
                                        <tr>
                                            <th style="width:20%">Kode Jasa</th>
                                            <th style="width:30%">Nama Jasa</th>
                                            <th style="width:15%">Harga</th>
                                            <th style="width:15%">Diskon (Rp)</th>
                                            <th style="width:10%">Diskon (%)</th>
                                            <th style="width:10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body_dtl_jasa">

                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-2"><button type="button" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#areaModalJasa">+ Jasa</button></div>

                                    <div class="col-10 text-end pr-5">

                                    </div>
                                </div>
                                <input type="hidden" name="baris_dtl" id="input_baris_dtl" />
                                <input type="hidden" name="baris_dtl_jasa" id="input_baris_dtl_jasa" />
                            </div>

                        </form>
                        <div class="form-group row">
                            <div class="col-3">&nbsp;</div>
                            <div class="col-9">
                                <button class="btn btn-success" id="btn-save">Save</button>
                                <button class="btn btn-danger" id="btn-cancel">Cancel</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="modal fade" id="areaModal" tabindex="-1" role="dialog" aria-labelledby="areaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form autocomplete="off" id="form_cari_sparepart">
                        <div class="row">
                            <div class="col-4">
                                <input name="cari_modal_kode_sparepart" type="text" id="input_cari_modal_kode_sparepart"
                                    class="form-control form-control-sm" placeholder="Kode sparepart"
                                    onkeyup="search_kode()" />
                            </div>
                            <div class="col-4">
                                <input name="cari_modal_nama_sparepart" type="text" id="input_cari_modal_nama_sparepart"
                                    class="form-control form-control-sm" placeholder="Nama sparepart"
                                    onkeyup="search_nama()" />
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger" onclick="reset_search()">Reset</button>
                            </div>
                            <div class="col-2">
                                <!-- <button type="button" class="btn btn-primary" onclick="create_new_sparepart()">Create new</button> -->
                            </div>
                        </div>
                    </form>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-hover" id="modal-table">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Harga Beli</th>
                                        <th>Qty</th>
                                        <th>Satuan</th>
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

    <div class="modal fade" id="areaModalJasa" tabindex="-1" role="dialog" aria-labelledby="areaModalJasaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form autocomplete="off" id="form_cari_jasa">
                        <div class="row">
                            <div class="col-4">
                                <input name="cari_modal_kode_jasa" type="text" id="input_cari_modal_kode_jasa"
                                    class="form-control form-control-sm" placeholder="Kode jasa"
                                    onkeyup="search_kode_jasa()" />
                            </div>
                            <div class="col-4">
                                <input name="cari_modal_nama_jasa" type="text" id="input_cari_modal_nama_jasa"
                                    class="form-control form-control-sm" placeholder="Nama jasa"
                                    onkeyup="search_nama_jasa()" />
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger"
                                    onclick="reset_search_jasa()">Reset</button>
                            </div>
                            <div class="col-2">
                                <!-- <button type="button" class="btn btn-primary" onclick="create_new_sparepart()">Create new</button> -->
                            </div>
                        </div>
                    </form>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-hover" id="modal-table-jasa">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Tarif</th>
                                        <th>Waktu</th>
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
@section('script')
<script>
    var apiUrl = "{{ $apiEndpoint }}";
    var tbl_modal;
    var tbl_modal_jasa;
    var baris_dtl = 0;
    var kd_dtl = [];

    var baris_dtl_jasa = 0;
    var kd_dtl_jasa = [];
    $(document).ready(function() {
        $('#area_global').show();
        $('input[name="tipe_paket"]').change(function(){
            var tipe = $('input[name=tipe_paket]:checked').val();
            if (tipe == 'global') {
                $('#area_global').show();
                $('#area_detail').hide();
            } else {
                $('#area_detail').show();
                $('#area_global').hide();
            }
        });
        
        function addRow(kode, nama, harga_jual, satuan, qty, hpp) {
            if (kd_dtl.indexOf(kode) > -1) {
                toastr["warning"]("Sparepart sudah digunakan")
            } else {
                var html = '';
                html += '<tr id="row_dtl' + baris_dtl + '">';
                html += '<td><input type="text" name="dtl_kode_sparepart' + baris_dtl + '" id="input_dtl_kode_sparepart' + baris_dtl + '" class="form-control form-control-sm" readonly value="' + kode + '" /></td>';
                html += '<td><input type="text" name="dtl_nama_sparepart' + baris_dtl + '" id="input_dtl_nama_sparepart' + baris_dtl + '" class="form-control form-control-sm" readonly value="' + nama + '" /></td>';
                html += '<td><input type="text" name="dtl_harga_beli_sparepart' + baris_dtl + '" id="input_dtl_harga_beli_sparepart' + baris_dtl + '" class="form-control form-control-sm text-end" readonly value="' + currencyFormat(harga_jual) + '" /></td>';
                html += '<td><input type="text" value="0" name="dtl_diskon_rp_sparepart' + baris_dtl + '" id="input_dtl_diskon_rp_sparepart' + baris_dtl + '" class="form-control form-control-sm text-end" onkeyup="type_diskon_sparepart(' + baris_dtl + ')" /></td>';
                html += '<td><input type="text" value="0" name="dtl_diskon_persen_sparepart' + baris_dtl + '" id="input_dtl_diskon_persen_sparepart' + baris_dtl + '" class="form-control form-control-sm" onkeyup="type_diskon_sparepart(' + baris_dtl + ')" /></td>';
                html += '<td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(' + baris_dtl + ',\'' + kode + '\')"><i class="fa fa-times"></i></button></td>';
                html += '</tr>';
                $('#body_dtl_part').append(html);
                baris_dtl++;
                kd_dtl.push(kode);
                $('#input_baris_dtl').val(baris_dtl);
                hitung_total()
            }

        }

        function removeRow(row, kode) {
            $('#row_dtl' + row).remove();
            kd_dtl.splice(kd_dtl.indexOf(kode), 1);
            hitung_total()
        }

        //---------baris jasa

        function addRowJasa(kode, nama, harga) {
            if (kd_dtl_jasa.indexOf(kode) > -1) {
                toastr["warning"]("Jasa sudah digunakan")
            } else {
                var html = '';
                html += '<tr id="row_dtl' + baris_dtl_jasa + '">';
                html += '<td><input type="text" name="dtl_kode_jasa' + baris_dtl_jasa + '" id="input_dtl_kode_jasa' + baris_dtl_jasa + '" class="form-control form-control-sm" readonly value="' + kode + '" /></td>';
                html += '<td><input type="text" name="dtl_nama_jasa' + baris_dtl_jasa + '" id="input_dtl_nama_jasa' + baris_dtl_jasa + '" class="form-control form-control-sm" readonly value="' + nama + '" /></td>';
                html += '<td><input type="text" name="dtl_harga_jasa' + baris_dtl_jasa + '" id="input_dtl_harga_jasa' + baris_dtl_jasa + '" class="form-control text-end" readonly value="' + currencyFormat(harga) + '" onChange="hitung_jml_jasa(' + baris_dtl_jasa + ')" /></td>';
                html += '<td><input type="text" value="0" name="dtl_diskon_rp_jasa' + baris_dtl_jasa + '" id="input_dtl_diskon_rp_jasa' + baris_dtl_jasa + '" class="form-control form-control-sm text-end"  onkeyup="type_diskon_jasa(' + baris_dtl_jasa + ')" /></td>';
                html += '<td><input type="text" value="0" name="dtl_diskon_persen_jasa' + baris_dtl_jasa + '" id="input_dtl_diskon_persen_jasa' + baris_dtl_jasa + '" class="form-control form-control-sm"  onkeyup="type_diskon_jasa(' + baris_dtl_jasa + ')" /></td>';
                html += '<td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(' + baris_dtl_jasa + ',\'' + kode + '\')"><i class="fa fa-times"></i></button></td>';
                html += '</tr>';
                $('#body_dtl_jasa').append(html);
                baris_dtl_jasa++;
                kd_dtl_jasa.push(kode);
                $('#input_baris_dtl_jasa').val(baris_dtl_jasa);
                hitung_total()
            }

        }

        function removeRowJasa(row, kode) {
            $('#row_dtl' + row).remove();
            kd_dtl_jasa.splice(kd_dtl_jasa.indexOf(kode), 1);
            hitung_total()
        }

        function search_kode() {
            var key = $('#input_cari_modal_kode_sparepart').val();
            tbl_modal.columns(0).search(key).draw();
        }

        function search_nama() {
            var key = $('#input_cari_modal_nama_sparepart').val();
            tbl_modal.columns(1).search(key).draw();
        }

        function reset_search() {
            $("#input_cari_modal_kode_sparepart").val('');
            $("#input_cari_modal_nama_sparepart").val('');
            tbl_modal.columns(0).search('').draw();
            tbl_modal.columns(1).search('').draw();
        };

        function search_kode_jasa() {
            var key = $('#input_cari_modal_kode_jasa').val();
            tbl_modal_jasa.columns(0).search(key).draw();
        }

        function search_nama_jasa() {
            var key = $('#input_cari_modal_nama_jasa').val();
            tbl_modal_jasa.columns(1).search(key).draw();
        }

        function reset_search_jasa() {
            $("#input_cari_modal_kode_jasa").val('');
            $("#input_cari_modal_nama_jasa").val('');
            tbl_modal_jasa.columns(0).search('').draw();
            tbl_modal_jasa.columns(1).search('').draw();
        };

        function hitung_total() {
            var total_part = 0;
            var total_jasa = 0;
            var total = 0;
            for (var i = 0; i < baris_dtl; i++) {
                if ($('#input_dtl_jumlah_sparepart' + i).val() != '') {
                    total_part += getNumber($('#input_dtl_jumlah_sparepart' + i).val());
                }
            }
            $("#txt_total_part").html(currencyFormat(total_part));

            for (var i = 0; i < baris_dtl_jasa; i++) {
                if ($('#input_dtl_jumlah_jasa' + i).val() != '') {
                    total_jasa += getNumber($('#input_dtl_jumlah_jasa' + i).val());
                }
            }
            $("#txt_total_jasa").html(currencyFormat(total_jasa));

            total = total_part + total_jasa;

            $("#txt_total").html(currencyFormat(total));
            $("#input_total").val(total);
        }

        function type_diskon_sparepart(brs) {

            var rp = $('#input_dtl_diskon_rp_sparepart' + brs).val();
            var per = $('#input_dtl_diskon_persen_sparepart' + brs).val();
            if (rp == '' && per != '') {
                $('#input_dtl_diskon_rp_sparepart' + brs).prop('disabled', true);
            } else if (per == '' && rp != '') {
                $('#input_dtl_diskon_persen_sparepart' + brs).prop('disabled', true);
            } else {
                $('#input_dtl_diskon_rp_sparepart' + brs).prop('disabled', false);
                $('#input_dtl_diskon_persen_sparepart' + brs).prop('disabled', false);
            }
        }


        function type_diskon_jasa(brs) {

            var rp = $('#input_dtl_diskon_rp_jasa' + brs).val();
            var per = $('#input_dtl_diskon_persen_jasa' + brs).val();
            if (rp == '' && per != '') {
                $('#input_dtl_diskon_rp_jasa' + brs).prop('disabled', true);
            } else if (per == '' && rp != '') {
                $('#input_dtl_diskon_persen_jasa' + brs).prop('disabled', true);
            } else {
                $('#input_dtl_diskon_rp_jasa' + brs).prop('disabled', false);
                $('#input_dtl_diskon_persen_jasa' + brs).prop('disabled', false);
            }
        }

        function submit() {
            $("#btn-save").prop('disabled', true);
            
            $.ajax({
                url: apiUrl + "paketmember",
                type: "POST",
                data: $('#form-create').serialize(),
                dataType: "json",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                },
                success: function (response) {
                    if (response.status == true) {
                        
                        if(baris_dtl > 0 )
                        {
                            $.ajax({
                                url: apiUrl + "paketmember_part/bulk_store", // URL for the new AJAX request
                                type: "POST", // Method type (GET, POST, etc.), depends on your requirements
                                data: $('#form-create').serialize(),
                                dataType: "json",
                                headers: {
                                    'Authorization': 'Bearer ' + '{{ $token }}',
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response_paket_part) {
                                    
                                },
                                error: function(error) {
                                    // Handle errors from the second AJAX request
                                    console.error("Error in second request", error);
                                }
                            });
                        }
                        if(baris_dtl_jasa > 0 )
                        {
                            $.ajax({
                                url: apiUrl + "paketmember_jasa/bulk_store", // URL for the new AJAX request
                                type: "POST", // Method type (GET, POST, etc.), depends on your requirements
                                data: $('#form-create').serialize(),
                                dataType: "json",
                                headers: {
                                    'Authorization': 'Bearer ' + '{{ $token }}',
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response_paket_jasa) {
                                
                                },
                                error: function(error) {
                                    // Handle errors from the second AJAX request
                                    console.error("Error in second request", error);
                                }
                            });
                        }
                        flashMessageRedirect("Tambah Paket Berhasil", 'success');
                        
                        window.location.href = '/master/paket_member';
                    } else {
                        alert('something wrong!!!');
                    }
                    $("#btn-save").prop('disabled', false);
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
                    }else if (xhr.status === 500)
                    {
                        var messages = xhr.responseJSON.data || ["An error occurred on the server."]; // Fallback message
                        console.log(messages);
                        flashMessage(messages, 'danger');
                    }
                    $("#import").prop('disabled', false);
                }
            });
            $("#btn-save").prop('disabled', false);
        }
        //modal sparepart

        //modal sparepart
        $('#areaModal').on('shown.bs.modal', function () {
            if ($.fn.DataTable.isDataTable('#modal-table')) {
                $('#modal-table').DataTable().clear().destroy();
            }

            tbl_modal = $('#modal-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'rtp',
                order: [
                    [0, 'desc']
                ],
                ajax: function (data, callback, settings) {
                    $.ajax({
                        
                        url: apiUrl + "barangdatatable",
                        dataType: "json",
                        type: "GET",
                        headers: {
                            'Authorization': 'Bearer ' + '{{ $token }}',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                        },
                        data: {
                            ...data,
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
              
                columns: [
                    {
                        data: "kode",
                    },
                    {
                        data: "nama",
                    },
                    {
                        data: "harga_jual",
                    },
                    {
                        data: "qty",
                    },
                    {
                        data: "satuan",
                    }
                ]
            });
        });


        $('#modal-table tbody').on('click', 'tr', function() {
            var data = tbl_modal.row(this).data();
            addRow(data.kode, data.nama, data.harga_jual, data.satuan, data.qty, data.harga_beli);
        });

        //modal sparepart
        $('#areaModalJasa').on('shown.bs.modal', function () {
            // Destroy existing DataTable instance if it exists
            if ($.fn.DataTable.isDataTable('#modal-table-jasa')) {
                $('#modal-table-jasa').DataTable().clear().destroy();
            }
            tbl_modal_jasa = $("#modal-table-jasa").DataTable({
                serverSide: true,
                processing: true,
                dom: 'rtp',
                ajax: function (data, callback, settings) {
                    $.ajax({
                        
                        url: apiUrl + "jasa-service-datatable",
                        dataType: "json",
                        type: "GET",
                        headers: {
                            'Authorization': 'Bearer ' + '{{ $token }}',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                        },
                        data: {
                            ...data,
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
                            window.location.href = "{{ url('auth/login') }}";
                        }
                    });
                },
                
                columnDefs: [{
                    target: 2,
                    render: $.fn.dataTable.render.number(',', '.', 0, '')
                }],
                columns: [{
                        data: "kode_jasa",
                    },
                    {
                        data: "nama_jasa",
                    },
                    {
                        data: "biaya",
                    },
                    {
                        data: "jam",
                    }
                ]
            });
        });

        //dt jasa

        $('#modal-table-jasa tbody').on('click', 'tr', function() {
            var data = tbl_modal_jasa.row(this).data();
            addRowJasa(data.kode_jasa, data.nama_jasa, data.biaya);
        });

        $('#btn-save').click(function() {
            submit();
        });

        $('#btn-cancel').click(function() {
            //window.location.href = "{{ route('master/paket_member') }}";
        });
    });

    

</script>
@endsection