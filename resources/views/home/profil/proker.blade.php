@extends('layouts.home')

@section('hero')
    <!-- Hero Section -->
    <section id="hero" class="hero1 section light-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Program Kerja</h1>
                    <p>Insan Cerdas dan Kompetitif</p>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->
@endsection

@section('content')
    <section id="contents" class="contents section">
        <div class="container section-title" data-aos="fade-up">
            <p><span>Cek Program Kerja</span> <span class="description-title">BU Malang</span></p>
        </div>

        <div class="container">
            <div class="row gy-3">
                @foreach ($prokers as $proker)
                    <div class="col-xl-6 col-lg-12" data-aos="fade-up">
                        <div class="contents-item">
                            <h3>{{ $proker->created_at }}</h3>
                            <ul>
                                <h5>Program Kerja Kabinet <strong>{{ $proker->nama_kabinet }}</strong> <br> Tahun
                                    {{ $proker->tahun }}</h5>
                            </ul>
                            <div class="btn-wrap">
                                <a href="{{ route('home.show-proker', $proker->id) }}" class="btn-buy">Baca Program
                                    Kerja</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tambahkan Pagination di sini -->
            <div class="d-flex justify-content-center mt-4">
                {{ $prokers->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </section><!-- /contents Section -->
@endsection
