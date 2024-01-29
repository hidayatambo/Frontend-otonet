<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 xl-100">
            <div class="card col-12 mt-3">
                <div class="card-body p-0" style="margin: 20px">
                    <form action="#" id="form-edit">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="kode_paketmember" id="input_kode_paketmember" value="{{$paket_member['kode_paketmember']}}" />
                                <div class="form-group row">
                                    <div class="col-3">Kode Paket</div>
                                    <div class="col-9">{{$paket_member['kode_paketmember']}}</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">Nama Paket</div>
                                    <div class="col-9">{{$paket_member['nama_paketmember']}}</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">Harga</div>
                                    <div class="col-9">{{number_format($paket_member['harga'])}}</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">Durasi</div>
                                    <div class="col-9">{{$paket_member['durasi']}}</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">Tipe Paket</div>
                                    <div class="col-9">{{$paket_member['tipe_paket']}}</div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        @if($paket_member['tipe_paket']=='global')
                        <div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Diskon Part Servis (%)</div>
                                <div class="col-2">{{$paket_member['diskon_part_svc']}}</div>
                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Diskon Jasa Servis (%)</div>
                                <div class="col-2">{{$paket_member['diskon_jasa_svc']}}</div>
                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-form-label-sm">Diskon Toko (%)</div>
                                <div class="col-2">{{$paket_member['diskon_toko']}}</div>
                            </div>
                        </div>
                        @else
                        <table class="table table-bordered table-hover" id="table-toko">
                            <thead>
                                <tr>
                                    <th style="width:20%">Kode Sparepart</th>
                                    <th style="width:30%">Nama Sparepart</th>
                                    <th style="width:20%">Harga</th>
                                    <th style="width:20%">Diskon (Rp)</th>
                                    <th style="width:10%">Diskon (%)</th>
                                </tr>
                            </thead>
                            <tbody id="body_dtl_toko">
                                @php $row=0;$total_part=0; @endphp
                                @if(!empty($paket_member_part))
                                @foreach($paket_member_part as $item)
                                <tr id="row_dtl{{$row}}">
                                    <td>{{$item['kode_part']}}</td>
                                    <td>{{$item['nama']}}</td>
                                    <td>{{number_format($item['harga_jual'])}}</td>
                                    <td>{{number_format($item['diskon_rp_part'])}}</td>
                                    <td>{{$item['diskon_persen_part']}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <table class="table table-bordered table-hover mt-4" id="table-toko">
                            <thead>
                                <tr>
                                    <th style="width:20%">Kode Jasa</th>
                                    <th style="width:30%">Nama Jasa</th>
                                    <th style="width:20%">Harga</th>
                                    <th style="width:20%">Diskon (Rp)</th>
                                    <th style="width:10%">Diskon (%)</th>
                                </tr>
                            </thead>
                            <tbody id="body_dtl_toko">
                                @php $row=0;$total_jasa=0; @endphp
                                @if(!empty($paket_member_jasa))
                                @foreach($paket_member_jasa as $item)
                                <tr id="row_dtl{{$row}}">
                                    <td>{{$item['kode_jasa']}}</td>
                                    <td>{{$item['nama_jasa']}}</td>
                                    <td>{{number_format($item['biaya'])}}</td>
                                    <td>{{number_format($item['diskon_rp_jasa'])}}</td>
                                    <td>{{$item['diskon_persen_jasa']}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        @endif
                    </form>
                    <div class="form-group row">
                        <div class="col-3">&nbsp;</div>
                        <div class="col-9">
                            <button class="btn btn-danger" id="btn-cancel">Cancel</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>