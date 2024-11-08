@extends('layouts/app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>LEGER</h1>
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
                <h5>LEGER JALAN UTAMA</h5>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Jalan Utama (Select)</h3>
                        <div class="card-tools">
                            <form action="{{ route('admin.map.jalan_utama') }}" method="POST">
                                @csrf
                                {{-- <label for="jalan_tol_id">Ruas Jalan Tol</label>
                                <select name="jalan_tol_id" id="jalan_tol_id">
                                    @foreach ($data as $r)
                                        <option value= {{ $r['id'] }}>{{ $r['nama'] }}</option>
                                    @endforeach
                                </select> --}}
                                <label for="leger_id">Segmen Leger</label>
                                <input type="text" id="leger_id" name="leger_id">
                                <button type="submit" class="btn btn-info btn-sm">
                                    Download
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Jalan Utama (All)</h3>
                        <div class="card-tools
                        ">
                            <form action="{{ route('admin.map.jalan_utama_all') }}" method="POST">
                                @csrf
                                {{-- <label for="jalan_tol_id">Ruas Jalan Tol</label>
                                <select name="jalan_tol_id" id="jalan_tol_id">
                                    @foreach ($data as $r)
                                        <option value= {{ $r['id'] }}>{{ $r['nama'] }}</option>
                                    @endforeach
                                </select> --}}
                                <button type="submit" class="btn btn-info btn-sm">
                                    Download
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection

@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // When the 'jalan_tol_id' is changed, fetch the corresponding 'id_leger'
    $('#jalan_tol_id').on('change', function() {
        var jalanTolId = $(this).val(); // Get the selected 'jalan_tol_id'

        if (jalanTolId) {
            // Send AJAX request to fetch corresponding 'id_leger'
            $.ajax({

                url: "http://127.0.0.1:8000/api/leger/segmen/"; + jalanTolId,  // Adjust route as needed
                type: 'GET',
                success: function(data) {
                    // Clear the 'leger_id' dropdown
                    $('#leger_id').empty().append('<option value="">Select ID Leger</option>');

                    // Populate the 'leger_id' dropdown with the returned legers
                    $.each(data, function(index, value) {
                        $('#leger_id').append('<option value="' + value.id_leger + '">' + value.id_leger + '</option>');
                    });
                }
            });
        } else {
            // If no 'jalan_tol_id' is selected, clear the 'leger_id' dropdown
            $('#leger_id').empty().append('<option value="">Select ID Leger</option>');
        }
    });
</script> --}}
@endpush