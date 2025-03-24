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
                        <select name="nama_divisi" id="nama_divisi" class="form-control">
                            <option value="">--Pilih Divisi--</option>
                            @foreach ($divisis as $divisi)
                                <option value="{{ $divisi->id }}"
                                    {{ old('nama_divisi') == $divisi->id ? 'selected' : '' }}>{{ $divisi->nama_divisi }}
                                </option>
                            @endforeach
                        </select>
                        @error('nama_divisi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Status Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="">--Pilih Jabatan--</option>
                            <option value="pembina" {{ old('jabatan') == 'pembina' ? 'selected' : '' }}>Pembina</option>
                            <option value="penasihat" {{ old('jabatan') == 'penasihat' ? 'selected' : '' }}>Penasihat
                            </option>
                            <option value="ketua" {{ old('jabatan') == 'ketua' ? 'selected' : '' }}>Ketua Umum</option>
                            <option value="wake1" {{ old('jabatan') == 'wake1' ? 'selected' : '' }}>Wakil Ketua 1</option>
                            <option value="wake2" {{ old('jabatan') == 'wake2' ? 'selected' : '' }}>Wakil Ketua 2</option>
                            <option value="sekretaris" {{ old('jabatan') == 'sekretaris' ? 'selected' : '' }}>Sekretaris
                            </option>
                            <option value="bendahara" {{ old('jabatan') == 'bendahara' ? 'selected' : '' }}>Bendahara
                            </option>
                            <option value="koordinator" {{ old('jabatan') == 'koordinator' ? 'selected' : '' }}>Koordinator
                            </option>
                            <option value="anggota" {{ old('jabatan') == 'anggota' ? 'selected' : '' }}>Anggota</option>
                        </select>
                        @error('jabatan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengurus" class="form-label">Nama Pengurus</label>
                        <input type="text" name="nama_pengurus" id="nama_pengurus" class="form-control"
                            value="{{ old('nama_pengurus') }}">
                        @error('nama_pengurus')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="asal_univ" class="form-label">Asal Universitas</label>
                        <input type="text" name="asal_univ" id="asal_univ" class="form-control"
                            value="{{ old('asal_univ') }}">
                        @error('asal_univ')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Link Instagram</label>
                        <input type="url" name="instagram" id="instagram" class="form-control"
                            value="{{ old('instagram') }}">
                        @error('instagram')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Link Linkedin</label>
                        <input type="url" name="linkedin" id="linkedin" class="form-control"
                            value="{{ old('linkedin') }}">
                        @error('linkedin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Gambar</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                        @error('foto')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Data Pengurus
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
