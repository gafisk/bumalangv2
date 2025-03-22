@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Universitas Penerima</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Tambah Data Universitas Penerima BU Malang
            </div>

            <div class="card-body">
                <form action="{{ route('admin.store-universitas') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_univ" class="form-label">Nama Universitas</label>
                        <input type="text" name="nama_univ" id="nama_univ" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto_univ" class="form-label">Foto Universitas</label>
                        <input type="file" name="foto_univ" id="foto_univ" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Data Universitas
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
