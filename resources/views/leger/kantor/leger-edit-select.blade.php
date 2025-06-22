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

    @if(session('status'))
        <div class="alert alert-{{ session('status.type') }}">
            {{ session('status.message') }}
        </div>
    @endif


    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pilih Ruas Jalan Tol</h3>
                        <div class="card-tools">
                            <form action="{{ route('admin.leger.kantor.edit.detail') }}" method="POST">
                                @csrf
                                  <label for="jalan_tol_id">Ruas Jalan Tol</label>
                                <select name="jalan_tol_id" id="jalan_tol_id">
                                    @foreach ($data as $r)
                                        <option value= {{ $r['id'] }}>{{ $r['nama'] }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-info btn-sm">
                                    Detail
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

