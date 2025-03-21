@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Pengurus</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Tambah Pengurus BU Malang
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store-pengurus') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_divisi" class="form-label">Nama Divisi</label>
                        <select name="nama_divisi" id="nama_divisi" class="form-control" required>
                            <option value="">--Pilih Divisi--</option>
                            @foreach ($divisis as $divisi)
                                <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Status Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">--Pilih Jabatan--</option>
                            <option value="pembina">Pembina</option>
                            <option value="penasihat">Penasihat</option>
                            <option value="ketua">Ketua Umum</option>
                            <option value="wake1">Wakil Ketua 1</option>
                            <option value="wake2">Wakil ketua 2</option>
                            <option value="sekretaris">Sekretaris</option>
                            <option value="bendahara">Bendahara</option>
                            <option value="koordinator">Koordinator</option>
                            <option value="anggota">Anggota</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengurus" class="form-label">Nama Pengurus</label>
                        <input type="text" name="nama_pengurus" id="nama_pengurus" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="asal_univ" class="form-label">Asal Universitas</label>
                        <input type="text" name="asal_univ" id="asal_univ" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Link Instagram</label>
                        <input type="url" name="instagram" id="instagram" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Link Linkedin</label>
                        <input type="url" name="linkedin" id="linkedin" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Gambar</label>
                        <input type="file" name="foto" id="foto" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Data Pengurus
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
