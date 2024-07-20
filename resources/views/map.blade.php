@extends('layouts/app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Map</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Map</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Data Spasial</h3>
            </div>
            <div class="card-body">
                <div id="admin-map"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Leger</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-info btn-sm">
                        Download
                    </a>
                </div>
            </div>
            <div class="card-body">
                <h6 class="font-weight-bold mb-1">IDENTIFIKASI</h6>
                <table class="table w-50 mx-auto mb-4">
                    <tr>
                        <td>Nomor Kartu Leger Jalan</td>
                        <td class="text-right">T0011</td>
                    </tr>
                    <tr>
                        <td>Nomor Kode dan Nama</td>
                        <td class="text-right">[17] Provinsi: Lampung, [02] Kabupaten/Kota: Lampung Tengah, [14] Kecamatan: Bumi Ratu Nuban, [03] Desa: Suka Jadi</td>
                    </tr>
                    <tr>
                        <td>Nomor Ruas Jalan / Seksi</td>
                        <td class="text-right">Bakauheni - Terbanggi Besar Seksi 4 (Tegineneng - Terbanggi Besar)</td>
                    </tr>
                    <tr>
                        <td>Titik Awal Segmen Jalan</td>
                        <td class="text-right">KM: 108+982, X: 522825.146, Y: 9430234.102, Z: 77.734, Deskripsi: 400 meter setelah Interchange Tegineneng</td>
                    </tr>
                    <tr>
                        <td>Titik Akhir Segmen Jalan</td>
                        <td class="text-right">KM: 140+892, X: 525626.860, Y: 9460898.902, Z: 39.063, Deskripsi: 9 meter setelah Box Culvert KM 140+883</td>
                    </tr>
                </table>
                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link active" id="pills-data-teknik-1-tab" data-toggle="pill" data-target="#pills-data-teknik-1" type="button" role="tab" aria-controls="pills-data-teknik-1" aria-selected="true">Data Teknik 1</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-teknik-2-tab" data-toggle="pill" data-target="#pills-data-teknik-2" type="button" role="tab" aria-controls="pills-data-teknik-2" aria-selected="false">Data Teknik 2</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-teknik-3-tab" data-toggle="pill" data-target="#pills-data-teknik-3" type="button" role="tab" aria-controls="pills-data-teknik-3" aria-selected="false">Data Teknik 3</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-teknik-4-tab" data-toggle="pill" data-target="#pills-data-teknik-4" type="button" role="tab" aria-controls="pills-data-teknik-4" aria-selected="false">Data Teknik 4</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-teknik-5-tab" data-toggle="pill" data-target="#pills-data-teknik-5" type="button" role="tab" aria-controls="pills-data-teknik-5" aria-selected="false">Data Teknik 5</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-lainnya-tab" data-toggle="pill" data-target="#pills-data-lainnya" type="button" role="tab" aria-controls="pills-data-lainnya" aria-selected="false">Data Lainnya</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-lintasan-harian-tab" data-toggle="pill" data-target="#pills-lintasan-harian" type="button" role="tab" aria-controls="pills-lintasan-harian" aria-selected="false">Lintasan Harian</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-geometrik-tab" data-toggle="pill" data-target="#pills-data-geometrik" type="button" role="tab" aria-controls="pills-data-geometrik" aria-selected="false">Data Geometrik</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-data-lingkungan-jalan-tab" data-toggle="pill" data-target="#pills-data-lingkungan-jalan" type="button" role="tab" aria-controls="pills-data-lingkungan-jalan" aria-selected="false">Data Lingkungan Jalan</button>
                    </li>
                    <li class="nav-item mr-1" role="presentation">
                        <button class="nav-link" id="pills-legalisasi-tab" data-toggle="pill" data-target="#pills-legalisasi" type="button" role="tab" aria-controls="pills-legalisasi" aria-selected="false">Legalisasi</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-data-teknik-1" role="tabpanel" aria-labelledby="pills-data-teknik-1-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-teknik-2" role="tabpanel" aria-labelledby="pills-data-teknik-2-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-teknik-3" role="tabpanel" aria-labelledby="pills-data-teknik-3-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-teknik-4" role="tabpanel" aria-labelledby="pills-data-teknik-4-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-teknik-5" role="tabpanel" aria-labelledby="pills-data-teknik-5-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-lainnya" role="tabpanel" aria-labelledby="pills-data-lainnya-tab">...</div>
                    <div class="tab-pane fade" id="pills-lintasan-harian" role="tabpanel" aria-labelledby="pills-lintasan-harian-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-geometrik" role="tabpanel" aria-labelledby="pills-data-geometrik-tab">...</div>
                    <div class="tab-pane fade" id="pills-data-lingkungan-jalan" role="tabpanel" aria-labelledby="pills-data-lingkungan-jalan-tab">...</div>
                    <div class="tab-pane fade" id="pills-legalisasi" role="tabpanel" aria-labelledby="pills-legalisasi-tab">...</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/map-layer.js') }}"></script>
    <script>
        // Basemap
        var osm_map = L.tileLayer.provider('OpenStreetMap.Mapnik');

        // Aset Layer
        var administratifPolygonLayer = getAdministratifPolygonLayer();
        var dataGeometrikJalanPolygonLayer = getDataGeometrikJalanPolygonLayer();
        var iriPolygonLayer = getIRIPolygonLayer();
        var jembatanPolygonLayer = getJembatanPolygonLayer();
        var lapisPermukaanPolygonLayer = getLapisPermukaanPolygonLayer();
        var lapisPondasiAtas1PolygonLayer = getLapisPondasiAtas1PolygonLayer();
        var lapisPondasiAtas2PolygonLayer = getLapisPondasiAtas2PolygonLayer();
        var lapisPondasiBawahPolygonLayer = getLapisPondasiBawahPolygonLayer();
        var lhrPolygonLayer = getLHRPolygonLayer();
        var ruwasjaPolygonLayer = getRuwasjaPolygonLayer();
        var segmenKonstruksiPolygonLayer = getSegmenKonstruksiPolygonLayer();
        var segmenLegerPolygonLayer = getSegmenLegerPolygonLayer();
        var segmenPerlengkapanPolygonLayer = getSegmenPerlengkapanPolygonLayer();
        var segmenTolPolygonLayer = getSegmenTolPolygonLayer();

        // Set Layer Options
        var baseGroupMaps = {
            "Ruwasja": ruwasjaPolygonLayer,
            "Administratif": administratifPolygonLayer,
            "Data Geometrik Jalan": dataGeometrikJalanPolygonLayer,
            "LHR": lhrPolygonLayer,
            "IRI": iriPolygonLayer,
            "Segmen Tol": segmenTolPolygonLayer,
            "Segmen Leger": segmenLegerPolygonLayer,
            "Segmen Perlengkapan": segmenPerlengkapanPolygonLayer,
            "Segmen Konstruksi": segmenKonstruksiPolygonLayer,
            "Lapis Permukaan": lapisPermukaanPolygonLayer,
            "Lapis Pondasi Atas 1": lapisPondasiAtas1PolygonLayer,
            "Lapis Pondasi Atas 2": lapisPondasiAtas2PolygonLayer,
            "Lapis Pondasi Bawah": lapisPondasiBawahPolygonLayer,
        };
        var overlayMaps = {
            "Jembatan": jembatanPolygonLayer,
        }

        // Init Map
        var map = L.map('admin-map', {
            center: [-4.881600, 105.230373],
            zoom: 16,
            layers: [osm_map, segmenLegerPolygonLayer]
        });
        var mapLayers = L.control.layers(baseGroupMaps, overlayMaps, {collapsed: false}).addTo(map);
        $('.leaflet-control-layers-base').prepend('<h5 class="text-center font-weight-bold mb-2">Layer Options</h5><hr>');

        // Create Legend
        function createLegend(position, categories, colors) {
            var legend = L.control({ position: position });
            legend.onAdd = function (map) {
                var div = L.DomUtil.create('div', 'custom-legend');
                div.innerHTML += '<div class="font-weight-bold">Keterangan:</div>';
                for (var i = 0; i < categories.length; i++) {
                    div.innerHTML += '<div><i style="background: ' + colors[i] + '"></i> ' + categories[i] + '</div>';
                }
                return div;
            };
            return legend;
        }

        // Set Legend
        var legendDataGeometrikJalan = createLegend('bottomleft', ['Mainroad', 'Ramp', 'Akses'], ['#4793AF', '#FFC470', '#DD5746']);
        var legendIRI = createLegend('bottomleft', ['Baik (< 4)', 'Sedang (4-8)', 'Rusak Ringan (8-12)', 'Rusak Berat (> 12)'], ['#198754', '#ffc107', '#fd7e14', '#dc3545']);
        var legendSegmenLeger = createLegend('bottomleft', ['Mainroad', 'Ramp', 'Akses'], ['#4793AF', '#FFC470', '#DD5746']);
        var legendSegmenTol = createLegend('bottomleft', ['Mainroad', 'Ramp', 'Akses'], ['#4793AF', '#FFC470', '#DD5746']);
        var legendSegmenPerlengkapan = createLegend('bottomleft', ['Jalur Kanan', 'Jalur Kiri', 'Median'], ['#008DDA', '#FF204E', '#FFF455']);
        var legendSegmenKonstruksi = createLegend('bottomleft', ['Bahu Luar', 'Bahu Dalam', 'Lajur 1', 'Lajur 2', 'Lajur Tambahan', 'Median'], ['#071952', '#FFB200', '#81A263', '#365E32', '#9CAFAA', '#E4003A']);
        var legendLapisPermukaan = createLegend('bottomleft', ['Beton', 'AC-BC', 'MCB'], ['#009FBD', '#4A249D', '#F9E2AF']);
        var legendLapisPondasiAtas1 = createLegend('bottomleft', ['AGG-A', 'Jembatan', 'Lean Concrete'], ['#124076', '#87A922', '#FAA300']);
        var legendLapisPondasiAtas2 = createLegend('bottomleft', ['AGG-A', 'Jembatan', 'Box Culvert'], ['#124076', '#87A922', '#EE4266']);
        var legendLapisPondasiBawah = createLegend('bottomleft', ['Box Culvert', 'Jembatan', 'Tanah Pilihan'], ['#114232', '#87A922', '#FCDC2A']);

        // Remove All Legends
        function removeAllLegends(map) {
            legendDataGeometrikJalan.remove(map);
            legendIRI.remove(map);
            legendSegmenLeger.remove(map);
            legendSegmenTol.remove(map);
            legendSegmenPerlengkapan.remove(map);
            legendSegmenKonstruksi.remove(map);
            legendLapisPermukaan.remove(map);
            legendLapisPondasiAtas1.remove(map);
            legendLapisPondasiAtas2.remove(map);
            legendLapisPondasiBawah.remove(map);
        }

        // Show Legend Before Add Layer
        ruwasjaPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
        }
        administratifPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
        }
        lhrPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
        }
        dataGeometrikJalanPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendDataGeometrikJalan.addTo(map);
        }
        iriPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendIRI.addTo(map);
        }
        segmenLegerPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendSegmenLeger.addTo(map);
        }
        segmenTolPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendSegmenTol.addTo(map);
        }
        segmenPerlengkapanPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendSegmenPerlengkapan.addTo(map);
        }
        segmenKonstruksiPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendSegmenKonstruksi.addTo(map);
        }
        lapisPermukaanPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendLapisPermukaan.addTo(map);
        }
        lapisPondasiAtas1PolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendLapisPondasiAtas1.addTo(map);
        }
        lapisPondasiAtas2PolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendLapisPondasiAtas2.addTo(map);
        }
        lapisPondasiBawahPolygonLayer.beforeAdd = function (map) {
            removeAllLegends(map);
            legendLapisPondasiBawah.addTo(map);
        }
        legendSegmenLeger.addTo(map);
    </script>
@endpush