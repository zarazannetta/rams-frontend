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
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/map-layer.js') }}"></script>
    <script>
        // Basemap
        var osm_map = L.tileLayer.provider('OpenStreetMap.Mapnik');

        // Aset Layer Polygon
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

        // Aset Layer Point
        var lampuLalulintasPointLayer = getLampuLalulintasPointLayer();
        var manholePointLayer = getManholePointLayer();
        var gerbangPointLayer = getGerbangPointLayer();
        var patokHMPointLayer = getPatokHMPointLayer();
        var patokKMPointLayer = getPatokKMPointLayer();
        var patokLJPointLayer = getPatokLJPointLayer();
        var patokRMJPointLayer = getPatokRMJPointLayer();
        var patokROWPointLayer = getPatokROWPointLayer();
        var patokPemanduPointLayer = getPatokPemanduPointLayer();
        var reflektorPointLayer = getReflektorPointLayer();
        var rambuLalulintasPointLayer = getRambuLalulintasPointLayer();
        var rambuPenunjukarahPointLayer = getRambuPenunjukarahPointLayer();
        var rumahKabelPointLayer = getRumahKabelPointLayer();
        var staTextPointLayer = getStaTextPointLayer();
        var tiangListrikPointLayer = getTiangListrikPointLayer();
        var tiangTeleponPointLayer = getTiangTeleponPointLayer();
        var vmsPointLayer = getVMSPointLayer();
        
        // Aset Layer Line
        var batasDesaLineLayer = getBatasDesaLineLayer();
        var boxCulvertLineLayer = getBoxCulvertLineLayer();
        var bptLineLayer = getBPTLineLayer();
        var bronjongLineLayer = getBronjongLineLayer();
        var concreteBarrierLineLayer = getConcreteBarrierLineLayer();
        var gorongGorongLineLayer = getGorongGorongLineLayer();
        var guardrailLineLayer = getGuardrailLineLayer();
        var jalanLineLayer = getJalanLineLayer();
        var listrikBawahtanahLineLayer = getListrikBawahtanahLineLayer();
        var markaLineLayer = getMarkaLineLayer();
        var pagarOperasionalLineLayer = getPagarOperasionalLineLayer();
        var pitaKejutLineLayer = getPitaKejutLineLayer();
        var riolLineLayer = getRiolLineLayer();
        var saluranLineLayer = getSaluranLineLayer();
        var sungaiLineLayer = getSungaiLineLayer();
        var teleponBawahtanahLineLayer = getTeleponBawahtanahLineLayer();

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
            "Lampu Lalu Lintas": lampuLalulintasPointLayer,
            "Manhole": manholePointLayer,
            "Gerbang": gerbangPointLayer,
            "Patok HM": patokHMPointLayer,
            "Patok KM": patokKMPointLayer,
            "Patok LJ": patokLJPointLayer,
            "Patok RMJ": patokRMJPointLayer,
            "Patok ROW": patokROWPointLayer,
            "Patok Pemandu": patokPemanduPointLayer,
            "Reflektor": reflektorPointLayer,
            "Rambu Lalu Lintas": rambuLalulintasPointLayer,
            "Rambu Penunjuk Arah": rambuPenunjukarahPointLayer,
            "Rumah Kabel": rumahKabelPointLayer,
            "STA Text": staTextPointLayer,
            "Tiang Listrik": tiangListrikPointLayer,
            "Tiang Telepon": tiangTeleponPointLayer,
            "VMS": vmsPointLayer,
            "Batas Desa": batasDesaLineLayer,
            "Box Culvert": boxCulvertLineLayer,
            "Bangunan Penahan Tanah": bptLineLayer,
            "Bronjong": bronjongLineLayer,
            "Concrete Barrier": concreteBarrierLineLayer,
            "Gorong Gorong": gorongGorongLineLayer,
            "Guardrail": guardrailLineLayer,
            "Jalan": jalanLineLayer,
            "Listrik Bawah Tanah": listrikBawahtanahLineLayer,
            "Marka": markaLineLayer,
            "Pagar Operasional": pagarOperasionalLineLayer,
            "Pita Kejut": pitaKejutLineLayer,
            "Riol": riolLineLayer,
            "Saluran": saluranLineLayer,
            "Sungai": sungaiLineLayer,
            "Telepon Bawah Tanah": teleponBawahtanahLineLayer,
        }

        // Init Map
        var map = L.map('admin-map', {
            center: [-4.881600, 105.230373],
            zoom: 16,
            layers: [osm_map, segmenLegerPolygonLayer]
        });
        var mapLayers = L.control.layers(baseGroupMaps, overlayMaps).addTo(map);
        $('.leaflet-control-layers-base').prepend('<h5 class="text-center font-weight-bold mb-2">Layer Options</h5><div class="leaflet-control-layers-separator"></div>');
        $('.leaflet-control-layers-overlays').children(':nth-child(18)').after('<div class="leaflet-control-layers-separator"></div>');

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