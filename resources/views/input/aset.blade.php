@extends('layouts/app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Aset</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Input</li>
                        <li class="breadcrumb-item active">Tambah Aset</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <!-- Alert -->
                    @foreach (['success', 'danger'] as $message)
                        @if (session($message))
                            <div class="alert alert-{{ $message }} alert-dismissible fade show" role="alert">
                                {{ session($message) }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    @endforeach

                    <!-- Form -->
                    <form action="{{ route('input.aset.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="d-block">Ruas Jalan Tol <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="ruas_id" name="ruas_id" style="width:100%">
                                <option disabled selected>-- Pilih Ruas --</option>
                                @foreach ($list_ruas as $ruas)
                                    <option value="{{ $ruas['id'] }}">{{ $ruas['nama'] }} ({{ $ruas['tahun'] }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label class="d-block">Tipe Aset <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="tipe_aset" name="tipe_aset" style="width:100%">
                                <option disabled selected>-- Pilih Tipe Aset --</option>
                                @foreach ($tipe_aset as $aset)
                                    <option value="{{ $aset['type'] }}">{{ $aset['text'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label class="d-block">File GeoJSON <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="geojson" name="geojson" onchange="updateFileName()">
                                <label class="custom-file-label" for="geojson">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group text-right mt-5">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-1"></i> Simpan
                            </button>
                            <a href="{{ URL::previous() }}" class="btn btn-secondary ml-1">
                                <i class="fas fa-undo mr-1"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('.select2').select2({
                theme: 'bootstrap4'
            });
        });

        function updateFileName() {
            var input = document.getElementById('geojson');
            var label = input.nextElementSibling;
            var fileName = input.files[0].name;
            label.innerHTML = fileName;
        }
    </script>
@endpush