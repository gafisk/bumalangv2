@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Universitas Penerima</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Data Universitas Penerima BU Malang
            </div>

            <div class="card-body">
                <form action="{{ route('admin.update-universitas', $univ->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_univ" class="form-label">Nama Universitas</label>
                        <input type="text" name="nama_univ" id="nama_univ" class="form-control" required
                            value="{{ $univ->nama_universitas }}">
                    </div>
                    <div class="mb-3">
                        <label for="foto_univ" class="form-label">Foto Universitas</label>
                        <input type="file" name="foto_univ" id="foto_univ" class="form-control">
                        @if ($univ->foto)
                            <p class="mt-2">Gambar saat ini:</p>
                            <img src="{{ asset('storage/foto_universitas/' . $univ->foto) }}" width="150">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Data Universitas
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
