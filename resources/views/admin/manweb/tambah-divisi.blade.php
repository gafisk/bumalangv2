@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Divisi</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Tambah Divisi BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store-divisi') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_divisi" class="form-label">Nama Divisi</label>
                        <input type="text" name="nama_divisi" id="nama_divisi" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Data Divisi
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
