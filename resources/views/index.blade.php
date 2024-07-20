@extends('layouts/app-index')

@section('content')
    <div class="container-fluid">
        <div id="guest-map"></div>
    </div>
@endsection

@push('scripts')
    <script>
        var osmMap = L.tileLayer.provider('OpenStreetMap.Mapnik');
        
        var url = 'http://117.53.47.111:91/api/data/aset/';
        var administratifLayer = new L.GeoJSON.AJAX(url + 'administratif_polygon')
        .bindPopup(function (layer) {
            return "<h3>Nama Desa</h3>" + layer.feature.properties.nama_desa;
        });

        var map = L.map('guest-map', {
            center: [-4.881600, 105.230373],
            zoom: 15,
            layers: [osmMap, administratifLayer]
        });
    </script>
@endpush