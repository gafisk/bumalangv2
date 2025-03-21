@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Berita</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Tambah Berita BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store-berita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto_berita" class="form-label">Foto Berita</label>
                        <input type="file" name="foto_berita" id="foto_berita" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" name="judul_berita" id="judul_berita" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea name="isi_berita" id="isi_berita" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Data Berita
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('isi_berita'); // Sesuaikan dengan ID textarea
    </script>
@endsection
