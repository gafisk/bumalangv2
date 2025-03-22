@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Footer</h1>
        <a href="{{ route('admin.tambah-footer') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Footer
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
                Daftar Data Footer BU Malang
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Youtube</th>
                            <th>Instgram</th>
                            <th>Linked in</th>
                            <th>Tiktok</th>
                            <th>No Pengembang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Youtube</th>
                            <th>Instgram</th>
                            <th>Linked in</th>
                            <th>Tiktok</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($footers as $footer)
                            <tr>
                                <td>{{ $footer->alamat }}</td>
                                <td>{{ $footer->no_telp }}</td>
                                <td>{{ $footer->email }}</td>
                                <td><a href="{{ $footer->link_youtube }}" target="_blank">YouTube</a></td>
                                <td><a href="{{ $footer->link_instagram }}" target="_blank">Instagram</a></td>
                                <td><a href="{{ $footer->link_linkedin }}" target="_blank">LinkedIn</a></td>
                                <td><a href="{{ $footer->link_tiktok }}" target="_blank">TikTok</a></td>
                                <td>{{ $footer->no_pengembang }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.edit-footer', $footer->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('admin.delete-footer', $footer->id) }}" method="POST"
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
