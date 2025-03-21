@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Berita</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Berita BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update-berita', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="foto_berita" class="form-label">Foto Berita</label>
                        <input type="file" name="foto_berita" id="foto_berita" class="form-control">
                        @if ($berita->foto)
                            <p class="mt-2">Gambar saat ini:</p>
                            <img src="{{ asset('storage/foto_berita/' . $berita->foto) }}" width="150">
                        @else
                            <p class="mt-2">Tidak ada Gambar</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" name="judul_berita" id="judul_berita" class="form-control" required
                            value="{{ $berita->judul_berita }}">
                    </div>
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea name="isi_berita" id="isi_berita" cols="30" rows="10" class="form-control" required>{{ $berita->isi_berita }}</textarea>
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
