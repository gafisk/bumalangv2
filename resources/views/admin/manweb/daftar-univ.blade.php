@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Universitas Penerima</h1>
        <a href="{{ route('admin.tambah-universitas') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Universitas Penerima
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
                Daftar Data Universitas Penerima BU Malang
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Universitas</th>
                            <th>Logo Universitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Universitas</th>
                            <th>Logo Universitas</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($universitases as $univ)
                            <tr>
                                <td>{{ $univ->nama_universitas }}</td>
                                <td>
                                    <img src="{{ asset('storage/foto_universitas/' . $univ->foto) }}" alt="Foto Universitas"
                                        class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;">
                                </td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.edit-universitas', $univ->id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('admin.delete-universitas', $univ->id) }}" method="POST"
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
