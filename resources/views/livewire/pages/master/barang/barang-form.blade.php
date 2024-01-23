<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body p-0" style="margin: 20px">
                    <form action="#" id="form-create">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kode <span class="text-danger">*</span></div>
                                    <div class="col-9">
                                        <input type="text" class="form-control form-control-sm" name="kode"
                                            id="input_kode" maxlength="100" required />
                                    </div>
                                </div>
                                <span id="error_kode" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kode 2</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="kode_2" id="input_kode_2" maxlength="100" /></div>
                                </div>
                                <span id="error_kode_2"
                                            class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Nama <span class="text-danger">*</span></div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="nama" id="input_nama" maxlength="100" required /></div>
                                </div>
                                <span id="error_nama"
                                            class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Divisi</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm " name="divisi" id="input_divisi"
                                            required>
                                            @foreach($divisi_sparepart['data'] as $item)
                                            <option value="{{$item['id']}}">
                                                {{$item['nama_divisi_sparepart']}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                                <span id="error_divisi" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Brand</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="brand" id="input_brand" maxlength="100" />
                                        
                                    </div>
                                </div>
                                <span id="error_brand" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Harga Jual</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="harga_jual" id="input_harga_jual" maxlength="50" required />
                                        
                                    </div>
                                </div>
                                <span id="error_harga_jual" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Barcode</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="barcode" id="input_barcode" maxlength="100" />
                                        
                                    </div>
                                </div>
                                <span id="error_barcode" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Satuan</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="satuan" id="input_satuan"
                                            required>
                                            @foreach($satuan['data'] as $item)
                                            <option value="{{$item['id']}}">{{$item['nama_satuan']}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                                <span id="error_satuan" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">No Stock</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="no_stock" id="input_no_stock" maxlength="100" />
                                        
                                    </div>
                                </div>
                                <span id="error_no_stock" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Lokasi</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="lokasi" id="input_lokasi" maxlength="100" />
                                        
                                    </div>
                                </div>
                                <span id="error_lokasi" class="txt-danger"></span>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Note</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="note" id="input_note" maxlength="100" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Tipe</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm js-example-basic-single" height="70%"
                                            name="tipe" id="input_tipe" required>
                                            @foreach($tipe['data'] as $item)
                                            <option value="{{$item['id']}}">{{$item['nama_tipe']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kode Supplier</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="kode_supplier" id="input_kode_supplier" maxlength="100" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Qty Minimal</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="qty_min" id="input_qty_min" maxlength="100" value="0" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Qty Maksimal</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="qty_max" id="input_qty_max" maxlength="100" value="0" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Ukuran</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="ukuran" id="input_ukuran" maxlength="100" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kualitas</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="kualitas" id="input_kualitas"
                                            required>
                                            <option value="ORI">ORI</option>
                                            <option value="OEM">OEM</option>
                                            <option value="KW">KW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Demand Bulanan</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="demand_bulanan" id="input_demand_bulanan" maxlength="100" value="0"
                                            required /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Emergency</div>
                                    <div class="col-9">
                                        <div class="checkbox checkbox-dark m-squar">
                                            <input id="check_emergency" type="checkbox" name="emergency">
                                            <label class="mt-0" for="check_emergency"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Jenis</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="jenis" id="input_jenis"
                                            required>
                                            <option value="PART">PART</option>
                                            <option value="BAHAN">BAHAN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                    </form>
                    <div class="form-group row mb-1">
                            <div class="col-3 col-form-label-sm">&nbsp;</div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-success" id="btn-save">Save</button>
                                <a class="btn btn-danger" wire:navigate id="btn-cancel"
                                    href="{{ route('master/barang') }}">Back</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    $(document).ready(function () {
        var apiUrl = "{{ $apiEndpoint }}";

        var isFirstRequest = true; // Flag to indicate the first request
        var currentMerkId = null;

        // $('.js-example-basic-single').select2();

        // insert data
        $('#btn-save').click(function () {
            $("#btn-save").prop('disabled', true);
            $.ajax({
                url: apiUrl + "barang",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                data: $('#form-create').serialize(),
                dataType: "json",
                success: function (response) {
                    // if (response.status == "success") {
                    toastr["success"](response.message);
                    /*} else {
                        alert('something wrong!!!');
                    } **/
                    $('[id^="error_"]').text('');
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
                    }
                    $("#btn-save").prop('disabled', false);
                }
            });
        });

        // form edit
        /** 
        $('#barangDatatable').on('click', '.edit-btn', function (e) {
            e.preventDefault();
            currentMerkId = $(this).data('id'); // Get the ID of the record
            console.log(apiUrl)
            $.ajax({
                url: apiUrl + "merk/" + currentMerkId,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    $("#btn_edit").prop('disabled', false);
                    $("#btn_edit").show();
                    $("#btn-save").hide();
                    var dt = [];
                    $.each(response.data, function (key, value) {
                        dt[key] = value;
                    });
                    $('#input_nama_merk').val(dt['nama_merk']);
                    $('#modalFormLabel').html('Edit Merk');
                    $("#merkModal").modal('show');
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

        // update data
        $('#btn_edit').click(function () {
            if (currentMerkId === null) {
                alert('No supplier selected.');
                return;
            }
            $("#btn_edit").prop('disabled', true);
            $.ajax({
                url: apiUrl + "merk/" + currentMerkId,
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
                        $("#merkModal").modal('hide');
                        toastr["success"](response.message);
                        thisTable.ajax.reload(null, false);
                    } else {
                        alert('something wrong!!!');
                    }
                    $('[id^="error_"]').text('');
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
                        console.log(xhr.responseJSON)
                        // window.location.href = "{{ url('auth/login') }}";
                        alert('Forbidden')
                    } else { // Check for unauthorized status
                        // Redirect to the login page
                        // window.location.href = "{{ url('auth/login') }}";

                        alert('something wrong')
                    }
                    $("#btn_edit").prop('disabled', false);
                }
            });
        });
        */
    });

</script>
@endsection
