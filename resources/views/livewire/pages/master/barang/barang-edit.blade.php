<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body p-0" style="margin: 20px">
                <input type="hidden" name="id" id="input_id" maxlength="100"
                                    value="{{ $barang['id'] }}" />
                    <form action="#" id="form-edit">
                   
                        <div class="row">
                            <div class="col-6">
                                
                                {{-- <input type="hidden" name="crypt_kode" id="input_crypt_kode" maxlength="200"
                                    value="{{ $crypt_kode }}" /> --}}
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kode <span class="text-danger">*</span></div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="kode" id="input_kode" maxlength="100"
                                            value="{{ $barang['kode'] }}" readonly /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kode 2</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="kode_2" id="input_kode_2" maxlength="100"
                                            value="{{ $barang['kode_2'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Nama <span class="text-danger">*</span></div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="nama" id="input_nama" maxlength="100"
                                            value="{{ $barang['nama'] }}" required /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Divisi</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="divisi" id="input_divisi"
                                            required>
                                            @foreach($divisi_sparepart['data'] as $item)
                                            <option value="{{$item['id']}}"
                                                {{ ($barang['divisi']==$item['id'])?'selected':'' }}>
                                                {{$item['nama_divisi_sparepart']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Brand</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="brand" id="input_brand" maxlength="100"
                                            value="{{ $barang['brand'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Harga Beli</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="harga_beli" id="input_harga_beli" maxlength="50"
                                            value="{{ $barang['harga_beli'] }}" readonly /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Harga Jual</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="harga_jual" id="input_harga_jual" maxlength="50"
                                            value="{{ $barang['harga_jual'] }}" required /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Barcode</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="barcode" id="input_barcode" maxlength="100"
                                            value="{{ $barang['barcode'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Satuan</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="satuan" id="input_satuan"
                                            required>
                                            @foreach($satuan['data'] as $item)
                                            <option value="{{$item['id']}}"
                                                {{ ($barang['satuan']==$item['nama_satuan'])?'selected':'' }}>
                                                {{$item['nama_satuan']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">No Stock</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="no_stock" id="input_no_stock" maxlength="100"
                                            value="{{ $barang['no_stock'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Lokasi</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="lokasi" id="input_lokasi" maxlength="100"
                                            value="{{ $barang['lokasi'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Note</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="note" id="input_note" maxlength="100"
                                            value="{{ $barang['note'] }}" /></div>
                                </div>
                                {{-- <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Status</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="deleted" id="input_deleted"
                                            required>
                                            <option value="0" {{ ($barang['deleted']=='0')?'selected':'' }}>Active
                                            </option>
                                            <option value="1" {{ ($barang['deleted']=='1')?'selected':'' }}>Non
                                                Active</option>

                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-6">
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Tipe</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="tipe" id="input_tipe" required>
                                            @foreach($tipe['data'] as $item)
                                            <option value="{{$item['id']}}"
                                                {{ ($barang['tipe']==$item['nama_tipe'])?'selected':'' }}>
                                                {{$item['nama_tipe']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kode Supplier</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="kode_supplier" id="input_kode_supplier" maxlength="100"
                                            value="{{ $barang['kode_supplier'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Qty Minimal</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="qty_min" id="input_qty_min" maxlength="100"
                                            value="{{ $barang['qty_min'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Qty Maksimal</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="qty_max" id="input_qty_max" maxlength="100"
                                            value="{{ $barang['qty_max'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Ukuran</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="ukuran" id="input_ukuran" maxlength="100"
                                            value="{{ $barang['ukuran'] }}" /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Kualitas</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="kualitas" id="input_kualitas"
                                            required>
                                            <option value="ORI" {{ ($barang['kualitas']=='ORI')?'selected':'' }}>
                                                ORI</option>
                                            <option value="OEM" {{ ($barang['kualitas']=='OEM')?'selected':'' }}>
                                                OEM</option>
                                            <option value="KW" {{ ($barang['kualitas']=='KW')?'selected':'' }}>KW
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Demand Bulanan</div>
                                    <div class="col-9"><input type="text" class="form-control form-control-sm"
                                            name="demand_bulanan" id="input_demand_bulanan" maxlength="100"
                                            value="{{ $barang['demand_bulanan'] }}" required /></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Emergency</div>
                                    <div class="col-9">
                                        <div class="checkbox checkbox-dark m-squar">
                                            <input id="check_emergency" type="checkbox" name="emergency"
                                                {{ ($barang['emergency']=='on')?'checked':'' }}>
                                            <label class="mt-0" for="check_emergency"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-3 col-form-label-sm">Jenis</div>
                                    <div class="col-9">
                                        <select class="form-select form-select-sm" name="jenis" id="input_jenis"
                                            required>
                                            <option value="PART" {{ ($barang['jenis']=='PART')?'selected':'' }}>
                                                PART</option>
                                            <option value="BAHAN" {{ ($barang['jenis']=='BAHAN')?'selected':'' }}>
                                                BAHAN</option>
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

        // $('.js-example-basic-single').select2();
        var id_barang = $('#input_id').val();
        // insert data
        $('#btn-save').click(function () {
            $("#btn-save").prop('disabled', true);
            $.ajax({
                url: apiUrl + "barang/" + id_barang,
                type: "PUT",
                headers: {
                    'Authorization': 'Bearer ' + '{{ $token }}',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // For CSRF protection in Laravel
                },
                
                data:  $('#form-edit').serialize(),
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
