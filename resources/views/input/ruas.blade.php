@extends('layouts/app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Ruas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Input</li>
                        <li class="breadcrumb-item active">Tambah Ruas</li>
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
                    <form action="{{ route('input.ruas.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="d-block">Nama Ruas <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label class="d-block">Kode Ruas <span class="text-danger">*</span></label>
                            <input type="text" name="kode" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label class="d-block">Tahun <span class="text-danger">*</span></label>
                            <input type="text" name="tahun" class="form-control">
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