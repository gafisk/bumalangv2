@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Pengurus</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Pengurus BU Malang
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('admin.update-pengurus', $pengurus->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Laravel membutuhkan ini untuk method PUT --}}

                        <div class="mb-3">
                            <label for="nama_divisi" class="form-label">Nama Divisi</label>
                            <select name="nama_divisi" id="nama_divisi" class="form-control" required>
                                <option value="">--Pilih Divisi--</option>
                                @foreach ($divisis as $divisi)
                                    <option value="{{ $divisi->id }}"
                                        {{ $pengurus->id_divisi == $divisi->id ? 'selected' : '' }}>
                                        {{ $divisi->nama_divisi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Status Jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-control" required>
                                <option value="">--Pilih Jabatan--</option>
                                <option value="pembina" {{ $pengurus->jabatan == 'pembina' ? 'selected' : '' }}>Pembina
                                </option>
                                <option value="penasihat" {{ $pengurus->jabatan == 'penasihat' ? 'selected' : '' }}>
                                    Penasihat</option>
                                <option value="ketua" {{ $pengurus->jabatan == 'ketua' ? 'selected' : '' }}>Ketua Umum
                                </option>
                                <option value="wake1" {{ $pengurus->jabatan == 'wake1' ? 'selected' : '' }}>Wakil Ketua 1
                                </option>
                                <option value="wake2" {{ $pengurus->jabatan == 'wake2' ? 'selected' : '' }}>Wakil Ketua 2
                                </option>
                                <option value="sekretaris" {{ $pengurus->jabatan == 'sekretaris' ? 'selected' : '' }}>
                                    Sekretaris</option>
                                <option value="bendahara" {{ $pengurus->jabatan == 'bendahara' ? 'selected' : '' }}>
                                    Bendahara</option>
                                <option value="koordinator" {{ $pengurus->jabatan == 'koordinator' ? 'selected' : '' }}>
                                    Koordinator</option>
                                <option value="anggota" {{ $pengurus->jabatan == 'anggota' ? 'selected' : '' }}>Anggota
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pengurus" class="form-label">Nama Pengurus</label>
                            <input type="text" name="nama_pengurus" id="nama_pengurus" class="form-control"
                                value="{{ $pengurus->nama_pengurus }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="asal_univ" class="form-label">Asal Universitas</label>
                            <input type="text" name="asal_univ" id="asal_univ" class="form-control"
                                value="{{ $pengurus->univ_pengurus }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="instagram" class="form-label">Link Instagram</label>
                            <input type="url" name="instagram" id="instagram" class="form-control"
                                value="{{ $pengurus->link_instagram }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">Link Linkedin</label>
                            <input type="url" name="linkedin" id="linkedin" class="form-control"
                                value="{{ $pengurus->link_linkedin }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Gambar</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                            @if ($pengurus->foto)
                                <p class="mt-2">Gambar saat ini:</p>
                                <img src="{{ asset('storage/foto_pengurus/' . $pengurus->foto) }}" width="150">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Perbarui Data Pengurus
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
