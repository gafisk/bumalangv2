@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Pengurus</h1>
        <a href="{{ route('admin.tambah-pengurus') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Data
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
                Daftar Pengurus BU Malang
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Universitas</th>
                            <th>Instagram</th>
                            <th>Linkedin</th>
                            <th>Jabatan</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Universitas</th>
                            <th>Instagram</th>
                            <th>Linkedin</th>
                            <th>Jabatan</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($penguruses as $pengurus)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/foto_pengurus/' . $pengurus->foto) }}" alt="Foto Pengurus"
                                        class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                                </td>
                                <td>{{ $pengurus->nama_pengurus }}</td>
                                <td>{{ $pengurus->univ_pengurus }}</td>
                                <td><a href="{{ $pengurus->link_instagram }}" target="_blank">Instagram</a></td>
                                <td><a href="{{ $pengurus->link_linkedin }}" target="_blank">LinkedIn</a></td>
                                <td>{{ $pengurus->jabatan }}</td>
                                <td>{{ $pengurus->divisi->nama_divisi }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.edit-pengurus', $pengurus->id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('admin.delete-pengurus', $pengurus->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
