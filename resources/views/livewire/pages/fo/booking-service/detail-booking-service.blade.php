<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="row">
                    <div class="col-sm-9">
                    </div>
                    <div class="col-sm-3">
                        <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dashboard
                            </button>
                            <ul class="dropdown-menu dropdown-block">
                                <li><a class="dropdown-item" href="#">Project</a></li>
                                <li><a class="dropdown-item" href="#">Ecommerce</a></li>
                                <li><a class="dropdown-item" href="#">Crypto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-header pb-0 card-no-border"></div> -->
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <div id="keytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"></div>
                                    <p>Jam Booking: {{ $detail['data']['jam_booking'] }}</p>
                                    <p>Tanggal Booking: {{ $detail['data']['tgl_booking'] }}</p>
                                    <p>Berita: {{ $detail['data']['berita'] }}</p>
                                    <p>Nama: {{ $detail['data']['customer']['nama'] }}</p>
                                    <p>Alamat: {{ $detail['data']['customer']['alamat'] }}</p>
                                    <p>Jenis Service: {{ $detail['data']['jenis_service']['nama_jenissvc'] }}</p>
                                    <p>Rest Area: {{ $detail['data']['rest_area']['nama_rest_area'] }}</p>
                                    <p>No Polisi: {{ $detail['data']['kendaraan']['no_polisi'] }}</p>
                                    <p>Tipe: {{ $detail['data']['kendaraan']['tipes'][0]['nama_tipe'] }}</p>
                                    <p>Merk: {{ $detail['data']['kendaraan']['merks']['nama_merk'] }}</p>
                                    <p>Latitude: {{ $detail['data']['rest_area']['latitude'] }}</p>
                                    <p>Longitude: {{ $detail['data']['rest_area']['longitude'] }}</p>
                                    <div id="map" style="height: 400px; width: 100%;"></div>
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
    $(document).ready(function () {

        var latitude = {{ $detail['data']['rest_area']['latitude'] }};
        var longitude = {{ $detail['data']['rest_area']['longitude'] }};
        var rest_area_name = "{{ $detail['data']['rest_area']['nama_rest_area'] }}";
        var map = L.map('map').setView([latitude, longitude], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© TechthinkHub'
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map)
            .bindPopup(rest_area_name)
            .openPopup();
    });

</script>
@endsection
