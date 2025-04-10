@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Laporan Keuangan</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Laporan Keuangan BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update-lapkeu', $lapkeu->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_kabinet" class="form-label">Nama Kabinet</label>
                        <input type="text" name="nama_kabinet" id="nama_kabinet" class="form-control"
                            value="{{ old('nama_kabinet', $lapkeu->nama_kabinet) }}">
                        @error('nama_kabinet')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun Kabinet</label>
                        <input type="text" name="tahun" id="tahun" class="form-control"
                            value="{{ old('tahun', $lapkeu->tahun) }}">
                        @error('tahun')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link Laporan Keuangan (Google Drive)</label>
                        <input type="text" name="link" id="link" class="form-control"
                            value="{{ old('link', $lapkeu->link) }}">
                        @error('link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Data Laporan Keuangan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
