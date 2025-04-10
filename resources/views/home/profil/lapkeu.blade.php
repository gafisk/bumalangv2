@extends('layouts.home')

@section('hero')
    <!-- Hero Section -->
    <section id="hero" class="hero1 section light-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Laporan Keuangan</h1>
                    <p>Insan Cerdas dan Kompetitif</p>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->
@endsection

@section('content')
    <section id="contents" class="contents section">
        <div class="container section-title" data-aos="fade-up">
            <p><span>Cek Laporan Keuangan</span> <span class="description-title">BU Malang</span></p>
        </div>

        <div class="container">
            <div class="row gy-3">
                @foreach ($lapkeus as $lapkeu)
                    <div class="col-xl-6 col-lg-12" data-aos="fade-up">
                        <div class="contents-item">
                            <h3>{{ $lapkeu->created_at }}</h3>
                            <ul>
                                <h5>Laporan Keuangan Kabinet <strong>{{ $lapkeu->nama_kabinet }}</strong> <br> Tahun
                                    {{ $lapkeu->tahun }}</h5>
                            </ul>
                            <div class="btn-wrap">
                                <a href="{{ route('home.show-lapkeu', $lapkeu->id) }}" class="btn-buy">Baca Laporan
                                    Keuangan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tambahkan Pagination di sini -->
            <div class="d-flex justify-content-center mt-4">
                {{ $lapkeus->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </section><!-- /contents Section -->
@endsection
