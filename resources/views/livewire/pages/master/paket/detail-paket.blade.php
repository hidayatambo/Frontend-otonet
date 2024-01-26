<div wire:ignore>
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 xl-100">
                <div class="card col-12 mt-3">
                    <div class="card-body p-0" style="margin: 20px">
                        <form action="#" id="form-edit">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" name="kode_paket" id="input_kode_paket"
                                        value="{{$paket['kode_paket']}}" />
                                    <div class="form-group row">
                                        <div class="col-3">Kode Paket</div>
                                        <div class="col-9">{{$paket['kode_paket']}}</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3">Nama Paket</div>
                                        <div class="col-9">{{$paket['nama_paket']}}</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3">Tipe Sevice</div>
                                        <div class="col-9">{{$paket['tipe_svc']}}</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3">Total</div>
                                        <div class="col-9">{{number_format($paket['total'])}}</div>
                                    </div>
                                </div>

                            </div>
                            <hr />
                            <table class="table table-bordered table-hover" id="table-toko">
                                <thead>
                                    <tr>
                                        <th style="width:22%">Kode Sparepart</th>
                                        <th style="width:29%">Nama Sparepart</th>
                                        <th style="width:15%">Qty</th>
                                        <th style="width:12%">Harga</th>
                                        <th style="width:10%">Diskon</th>
                                        <th style="width:12%">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody id="body_dtl_toko">
                                    @php $row=0;$total_part=0; @endphp
                                    @if(!empty($paket_part))
                                    @foreach($paket_part as $item)
                                    @php $jumlah= $item['qty_part']*($item['harga_part']-($item['harga_part']*$item['diskon_part']/100)); @endphp
                                    <tr id="row_dtl{{$row}}">
                                        <td>{{$item['kode_part']}}</td>
                                        <td>{{$item['nama']}}</td>
                                        <td>{{$item['qty_part']}} {{$item['satuan']}}</td>
                                        <td>{{number_format($item['harga_part'])}}</td>
                                        <td>{{$item['diskon_part']}}</td>
                                        <td>{{number_format($jumlah)}}</td>
                                    </tr>
                                    @php $row++;$total_part+=$jumlah; @endphp
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-11 text-right">Total Part: {{number_format($total_part)}}</div>
                            </div>
                            <table class="table table-bordered table-hover mt-4" id="table-toko">
                                <thead>
                                    <tr>
                                        <th style="width:22%">Kode Jasa</th>
                                        <th style="width:29%">Nama Jasa</th>
                                        <th style="width:15%">Qty</th>
                                        <th style="width:12%">Harga</th>
                                        <th style="width:10%">Diskon</th>
                                        <th style="width:12%">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody id="body_dtl_toko">
                                    @php $row=0;$total_jasa=0; @endphp
                                    @if(!empty($paket_jasa))
                                    @foreach($paket_jasa as $item)
                                    @php $jumlah= $item['qty_jasa']*($item['harga_jasa']-($item['harga_jasa']*$item['diskon_jasa']/100)); @endphp
                                    <tr id="row_dtl{{$row}}">
                                        <td>{{$item['kode_jasa']}}</td>
                                        <td>{{$item['nama_jasa']}}</td>
                                        <td>{{$item['qty_jasa']}}</td>
                                        <td>{{number_format($item['harga_jasa'])}}</td>
                                        <td>{{$item['diskon_jasa']}}</td>
                                        <td>{{number_format($jumlah)}}</td>
                                    </tr>
                                    @php $row++;$total_jasa+=$jumlah; @endphp
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-11 text-right">Total Part: {{number_format($total_jasa)}}</div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-3">&nbsp;</div>
                            <div class="col-9">
                                <a href="{{ url('master/paket') }}" wire:navigate class="btn btn-danger" id="btn-cancel" >Cancel</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
