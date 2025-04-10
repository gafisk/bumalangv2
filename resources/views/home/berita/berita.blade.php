@extends('layouts.home')

@section('hero')
    <!-- Hero Section -->
    <section id="hero" class="hero1 section light-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Berita</h1>
                    <p>Insan Cerdas dan Kompetitif</p>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->
@endsection

@section('content')
    <section id="contents" class="contents section">
        <div class="container section-title" data-aos="fade-up">
            <p><span>Cek Berita</span> <span class="description-title">BU Malang</span></p>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($beritas as $berita)
                    <div class="col">
                        <div class="card h-100 d-flex flex-column">
                            <!-- Gambar -->
                            @if ($berita->foto)
                                <img src="{{ asset('storage/foto_berita/' . $berita->foto) }}" class="card-img-top"
                                    alt="Gambar Berita" style="width: 100%; height: 200px; object-fit: cover;">
                            @else
                                <img src="{{ asset('home/img/temp_berita.jpg') }}" class="card-img-top" alt="Gambar Berita"
                                    style="width: 100%; height: 200px; object-fit: cover;">
                            @endif

                            <!-- Konten -->
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $berita->judul_berita }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $berita->created_at }}</small></p>

                                <!-- Tombol di bagian bawah -->
                                <div class="mt-auto">
                                    <a href="{{ route('home.show-berita', $berita->id) }}"
                                        class="btn btn-primary w-100">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tambahkan Pagination di sini -->
            <div class="d-flex justify-content-center mt-4">
                {{ $beritas->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </section><!-- /contents Section -->
@endsection
