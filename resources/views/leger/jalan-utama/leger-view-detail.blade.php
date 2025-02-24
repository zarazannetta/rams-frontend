@extends('layouts/app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ruas Jalan Tol {{ $data['ruas']['nama'] }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb
                    float-sm-right">
                        <li class="breadcrumb
                        -item"><a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb
                        -item active">Leger</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <h4>Download seluruh leger</h4>
                                <form action="{{ route('admin.leger.jalanUtama.print-all') }}" method="POST" target="_blank">
                                    @csrf
                                    <input type="hidden" name="jalan_tol_id" id="jalan_tol_id" value="{{ $jalan_tol_id }}">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        Download
                                    </button>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <h4>Pilih segmen tertentu</h4>
                            <form action="{{ route('admin.leger.jalanUtama.print') }}" method="POST" target="_blank">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="leger_id_awal">KM Awal</label>
                                    <select class="form-control select2" style="width: 100%" name="leger_id_awal"
                                        id="leger_id_awal" onchange="updateMap()">
                                        @foreach ($data['segmen'] as $l)
                                            <option value={{ $l['id_leger'] }}>{{ $l['km'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="leger_id_akhir">KM Akhir</label>
                                    <select class="form-control select2" style="width: 100%" name="leger_id_akhir"
                                        id="leger_id_akhir" onchange="updateMap()">
                                        @foreach ($data['segmen'] as $l)
                                            <option value={{ $l['id_leger'] }}>{{ $l['km'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="jalan_tol_id" id="jalan_tol_id" value="{{ $jalan_tol_id }}">
                                <button type="submit" class="btn btn-info btn-sm">
                                    Download
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div id="admin-map" data-route="{{ route('admin.leger.jalanUtama.print') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/map-layer.js') }}"></script>
    <script>
        $(function() {
            $('.select2').select2({
                theme: 'bootstrap4'
            });
        });

        var osm_map = L.tileLayer.provider('OpenStreetMap.Mapnik');

        var map = L.map('admin-map', {
            center: [-4.881600, 105.230373],
            zoom: 16,
            layers: [osm_map]
        });
        var layerGroup = L.layerGroup().addTo(map);

        function updateMap() {
            var awal = document.getElementById('leger_id_awal').value;
            var akhir = document.getElementById('leger_id_akhir').value;

            if (awal && akhir) {
                layerGroup.clearLayers();
                var segmenLegerPolygonLayer = getSegmenLegerPolygonSelectionLayer(awal, akhir);
                layerGroup.addLayer(segmenLegerPolygonLayer);
            }
        }
    </script>
@endpush
