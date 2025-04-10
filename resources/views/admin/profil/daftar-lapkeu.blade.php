@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Laporan Keuangan</h1>
        <a href="{{ route('admin.tambah-lapkeu') }}" class="btn btn-primary mb-3">
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
                Daftar Laporan Keuangan BU Malang
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Kabinet</th>
                            <th>Tahun Kabinet</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Kabinet</th>
                            <th>Tahun Kabinet</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($lapkeus as $lapkeu)
                            <tr>
                                <td>{{ $lapkeu->nama_kabinet }}</td>
                                <td>{{ $lapkeu->tahun }}</td>
                                <td><a href="{{ $lapkeu->link }}" target="_blank">Link Google Drive</a></td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.edit-lapkeu', $lapkeu->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('admin.delete-lapkeu', $lapkeu->id) }}" method="POST"
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
