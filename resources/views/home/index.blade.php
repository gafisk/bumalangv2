@extends('layouts.home')

@php
    $sarjana = $data_jumlahawardee->where('kategori_awardee', 'Sarjana')->first();
    $magister = $data_jumlahawardee->where('kategori_awardee', 'Magister')->first();
    $doktor = $data_jumlahawardee->where('kategori_awardee', 'Doktor')->first();
@endphp

@section('hero')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Selamat Datang di Forum <span>Beasiswa Unggulan Malang</span></h1>
                    <p>Insan Cerdas dan Kompetitif</p>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
@endsection

@section('content')
    <!-- Sejarah Section -->
    <section id="sejarah" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sejarah</h2>
            <p><span>Sejarah Beasiswa Unggulan</span> <span class="description-title">dan Beasiswa Unggulan
                    Malang</span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-3">
                <!-- Beasiswa Unggulan -->
                <div class="col-xl-6 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item h-100 shadow-sm p-4 bg-white rounded-4">
                        <div class="icon-wrapper text-center">
                            <i class="bi bi-award-fill fs-1 text-primary"></i>
                        </div>
                        <h3 class="text-center text-primary">Beasiswa Unggulan</h3>
                        <p class="fs-5 text-muted" style="text-align: justify;">
                            Beasiswa Unggulan atau BU telah digelar Kemendikbudristek sejak tahun 2006. Artinya,
                            pada tahun 2024 ini, BU telah berlangsung selama 18 tahun. BU Kemendikbudristek terbagi
                            menjadi dua kategori, yakni BU bagi pegawai Kemendikbudristek dan BU bagi masyarakat
                            berprestasi.
                        </p>
                        <p class="fs-5 text-muted" style="text-align: justify;">
                            Sejak dikelola oleh Pusat Layanan Pembiayaan Pendidikan (Puslapdik) tahun 2020 hingga
                            2023, jumlah penerima BU mencapai 6.384 orang. Hingga awal 2024, masih aktif sebanyak
                            4.259 mahasiswa, terdiri dari 2.275 jenjang S-1/D-4, 1.715 jenjang S-2, dan 269 jenjang
                            S-3. Selain itu, terdapat 3 mahasiswa penyandang disabilitas serta 77 mahasiswa
                            berstatus pegawai Kemendikbudristek.
                        </p>
                    </div>
                </div>

                <!-- Beasiswa Unggulan Malang -->
                <div class="col-xl-6 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-item h-100 shadow-sm p-4 bg-white rounded-4">
                        <div class="icon-wrapper text-center">
                            <i class="bi bi-people-fill fs-1 text-success"></i>
                        </div>
                        <h3 class="text-center text-success">Beasiswa Unggulan Malang</h3>
                        <p class="fs-5 text-muted" style="text-align: justify;">
                            Forum Awardee Beasiswa Unggulan (BU) Regional Malang Raya merupakan wadah bagi penerima
                            BU di universitas wilayah Malang Raya. Forum ini didirikan di Universitas Negeri Malang
                            pada 12 November 2016 dan telah berjalan selama 8 tahun.
                        </p>
                        <p class="fs-5 text-muted" style="text-align: justify;">
                            Forum ini bertujuan untuk menjadi tempat silaturahmi, bersinergi, berkolaborasi, dan
                            saling menginspirasi antar penerima Beasiswa Unggulan se-Malang Raya.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end Row -->
        </div>
    </section><!-- /Sejarah Section -->

    <!-- Lambang Section -->
    <section id="lambang" class="lambang section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Logo BU Malang</h2>
            <p><span>Makna</span> <span class="description-title">Logo BU Malang</span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center">
                <!-- Gambar Logo -->
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('home/img/Logo.png') }}" alt="Logo BU Malang" class="img-fluid rounded shadow-lg">
                </div>

                <!-- Deskripsi Arti Logo -->
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-content ps-0 ps-lg-4">
                        <h3 class="text-primary fw-bold">Launching Logo Tahun 2019</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-palette text-primary fs-4 me-3"></i>
                                <div>
                                    <h5 class="fw-semibold">Warna Biru</h5>
                                    <p class="text-muted mb-0">Merupakan Lambang Pendidikan Indonesia</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-fire text-danger fs-4 me-3"></i>
                                <div>
                                    <h5 class="fw-semibold">Api</h5>
                                    <p class="text-muted mb-0">Melambangkan Semangat Membara Awardee BU Malang</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-building text-dark fs-4 me-3"></i>
                                <div>
                                    <h5 class="fw-semibold">Siluet Tugu Kota Malang</h5>
                                    <p class="text-muted mb-0">Melambangkan Identitas Kota Malang</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-bookmark-star text-warning fs-4 me-3"></i>
                                <div>
                                    <h5 class="fw-semibold">BU MALANG</h5>
                                    <p class="text-muted mb-0">Merupakan Singkatan Dari Beasiswa Unggulan Malang
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-book text-success fs-4 me-3"></i>
                                <div>
                                    <h5 class="fw-semibold">Buku</h5>
                                    <p class="text-muted mb-0">Melambangkan Jendela Ilmu Pengetahuan</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-gem text-warning fs-4 me-3"></i>
                                <div>
                                    <h5 class="fw-semibold">Warna Emas</h5>
                                    <p class="text-muted mb-0">Melambangkan Kesuksesan dan Prestasi</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Paragraf Penjelasan -->
                <div class="col-12 text-center">
                    <p class="fst-italic text-muted px-lg-5">
                        Arti logo Forum BU Malang bukan hanya sekadar simbol, melainkan cerminan semangat
                        kebersamaan, inovasi, dan visi yang menyatukan para penerima beasiswa dalam tujuan yang
                        sama. Setiap elemen dirancang dengan makna tersendiri, menggambarkan bagaimana kolaborasi
                        dan sinergi di antara para awardee menjadi sebuah fondasi kokoh untuk menciptakan perubahan
                        positif.
                    </p>
                </div>
            </div>


        </div>

    </section><!-- /Lambang Section -->

    <!-- Visi & Misi Section -->
    <section id="visimisi" class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Visi & Misi</h2>
                <p><span>Visi & Misi</span> <span class="description-title">BU Malang</span></p>
            </div><!-- End Section Title -->

            <div class="row justify-content-center">
                <!-- Card Visi & Misi-->
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm p-4 bg-white rounded-4 h-100">
                        <h4 class="fw-bold text-center text-primary">🎯 Visi</h4>
                        <p class="fs-5 text-center text-muted">Terwujudnya Forum Awardee Beasiswa Unggulan Regional
                            Malang Raya sebagai wadah pemberdayaan dan pengembangan potensi awardee yang informatif
                            dan kontributif terhadap negeri.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm p-4 bg-white rounded-4 h-100">
                        <h4 class="fw-bold text-center text-primary">🚀 Misi</h4>
                        <ol class="fs-5 text-muted">
                            <li><i class="bi bi-person-lines-fill text-primary"></i> Menguatkan sistem organisasi
                                forum dan potensi awardee dengan pelatihan kepemimpinan dan keunggulan akademik.
                            </li>
                            <li><i class="bi bi-people text-success"></i> Mensinergikan seluruh potensi awardee
                                untuk memberikan mentorship dan sosialisasi Beasiswa Unggulan.</li>
                            <li><i class="bi bi-info-circle text-danger"></i> Memberikan informasi secara aktif
                                kepada masyarakat luas dalam bidang pendidikan.</li>
                            <li><i class="bi bi-handshake text-warning"></i> Membangun hubungan yang harmonis
                                sesama awardee dan alumni.</li>
                        </ol>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>
    <!-- /Visi & Misi Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-bank"></i> <!-- Simbol gedung universitas -->
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah_univ }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Kampus Awardee</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-mortarboard"></i> <!-- Topi wisuda -->
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $sarjana->total_awardee ?? 0 }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awardee Program Sarjana</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-mortarboard"></i> <!-- Topi wisuda -->
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $magister->total_awardee ?? 0 }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awardee Program Magister</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-mortarboard"></i> <!-- Topi wisuda -->
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $doktor->total_awardee ?? 0 }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awardee Program Doktor</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

        <div class="container">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
                <div class="swiper-wrapper align-items-center">
                    @foreach ($data_universitas as $univ)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/foto_universitas/' . $univ->foto) }}"
                                alt="Foto {{ $univ->nama_universitas }}" class="img-fluid">
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </section><!-- /Clients Section -->
@endsection
