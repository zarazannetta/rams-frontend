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
                <div class="card">
                    <div class="card-header">
                        <h3>Detail Ruas Jalan Tol {{ $data_segmen['ruas']['nama'] }}</h3>
                        <div class="card-body">
                            <label for="leger_id">Pilih KM</label>
                            <select class="form-control select2" style="width: 100%" name="leger_id" id="leger_id"
                                onchange="updateData()">
                                @foreach ($data_segmen['segmen'] as $l)
                                    <option value={{ $l['id_leger'] }}>{{ $l['km'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Table for Data Details -->
                        <div class="card-body">
                            <table class="table table-bordered" id="leger-details">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                @php
                                    // Recursive function to check if any value in the array or subarrays is null
                                    function hasNullValue($array)
                                    {
                                        foreach ($array as $value) {
                                            if (is_array($value)) {
                                                // If the value is an array, recursively check for nulls in it
                                                if (hasNullValue($value)) {
                                                    return true;
                                                }
                                            } elseif (is_null($value)) {
                                                // If a value is null, return true
                                                return true;
                                            }
                                        }
                                        return false;
                                    }
                                @endphp
                                @foreach ($data_leger as $legerId => $l)
                                    <tbody data-leger-id="{{ $legerId }}" style="display: none;">
                                        @foreach ($l as $key => $value)
                                            <tr>
                                                <td>{{ $key }}</td>
                                                <td>
                                                    @php
                                                        $isFull = !empty($value) && !hasNullValue($value);
                                                    @endphp
                                                    @if ($isFull)
                                                        <span>✔️</span>
                                                    @else
                                                        <span style="color: red;">Belum Lengkap</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Data Leger Jalan Utama</h3>
                        <div class="card-tools">
                            <form action="{{ route('admin.leger.jalanUtama.generate') }}" method="POST">
                                @csrf
                                <input type="hidden" name="jalan_tol_id" id="jalan_tol_id" value="{{ $jalan_tol_id }}">
                                <button type="submit" class="btn btn-info btn-sm">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection

{{-- @dd($data_leger['M.001']) --}}

<script>
    function updateData() {
        const selectedId = document.getElementById('leger_id').value;

        // Get all rows in the table
        const rows = document.querySelectorAll('#leger-details tbody');

        rows.forEach(row => {
            if (row.dataset.legerId === selectedId) {
                row.style.display = ''; // Show the row
            } else {
                row.style.display = 'none'; // Hide the row
            }
        });
    }
</script>
