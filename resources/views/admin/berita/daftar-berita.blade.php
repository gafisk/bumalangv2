@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Berita</h1>
        <a href="{{ route('admin.tambah-berita') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Berita
        </a>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Berita BU Malang
            </div>
            <div class="card-body">
                <table id="dataBerita">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Foto</th>
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($beritas as $berita)
                            <tr>
                                <td>
                                    @if ($berita->foto)
                                        <img src="{{ asset('storage/foto_berita/' . $berita->foto) }}" alt="Foto Berita"
                                            class="img-thumbnail" style="height: 80px; object-fit: cover;">
                                    @else
                                        Tidak ada Gambar
                                    @endif
                                </td>
                                <td>{{ $berita->judul_berita }}</td>
                                <td>Isi berita ....</td>
                                <td>{{ $berita->status }}</td>
                                <td class="d-flex align-items-center gap-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.edit-berita', $berita->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('admin.delete-berita', $berita->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                    <!-- Ikon Status -->
                                    @if ($berita->status === 'draft')
                                        <form action="{{ route('admin.publish-berita', $berita->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin mempublish Berita?');">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.draft-berita', $berita->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menurunkan Berita?');">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-success">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('dataBerita');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>
@endsection
