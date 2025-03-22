@extends('layouts.home')

@section('content')
    <section id="contents" class="contents section">
        <div class="container mt-4">
            <!-- Judul Berita -->
            <h1 class="mb-3 text-center fw-bold border-bottom pb-2">{{ $berita->judul_berita }}</h1>
            <!-- Tanggal Berita -->
            <p class="text-muted text-center">
                <i class="bi bi-calendar me-2"></i> {{ $berita->created_at }}
            </p>
            <div class="card p-4 shadow-lg border-0">
                <!-- Tampilkan Gambar -->
                @if ($berita->foto)
                    <div class="text-center mb-3">
                        <img src="{{ asset('storage/foto_berita/' . $berita->foto) }}" alt="Gambar Berita"
                            class="img-fluid rounded shadow" style="max-width: 60%; height: auto;">
                    </div>
                @endif
                {!! $berita->isi_berita !!}
                <!-- Tombol Kembali -->
                <div class="text-center mt-4">
                    <a href="javascript:history.back()" class="btn btn-outline-secondary btn-lg shadow-sm">
                        <i class="bi bi-arrow-left me-2"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
