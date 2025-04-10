@extends('layouts.home')

@section('hero')
    <!-- Hero Section -->
    <section id="hero" class="hero1 section light-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Profil Pengurus</h1>
                    <p>Insan Cerdas dan Kompetitif</p>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->
@endsection

@section('content')
    <section id="team" class="team section light-background">

        <!-- Bootstrap 5 Carousel -->
        <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="7"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="8"></button>
            </div>

            <div class="carousel-inner">

                {{-- Bagian Pembina dan Penasihat --}}
                <div class="carousel-item active">
                    @if (isset($datas['Pembina & Penasihat']))
                        @php
                            $penguruses = $datas['Pembina & Penasihat'];
                            $grouped = $penguruses->groupBy('jabatan');
                        @endphp

                        <div class="container section-title" data-aos="fade-up">
                            <p><span class="description-title">Pembina</span> <span>& Penasihat</span></p>
                        </div>

                        <div class="container">

                            {{-- Baris Pembina --}}
                            @if (isset($grouped['pembina']))
                                <div class="row gy-4 justify-content-center mb-3">
                                    @foreach ($grouped['pembina'] as $pembina)
                                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <div class="team-member">
                                                <div class="member-img">
                                                    <img src="{{ asset('storage/foto_pengurus/' . $pembina->foto) }}"
                                                        class="img-fluid" alt="Pembina">
                                                    <div class="social">
                                                        @if ($pembina->link_instagram)
                                                            <a href="{{ $pembina->link_instagram }}"><i
                                                                    class="bi bi-instagram"></i></a>
                                                        @endif
                                                        @if ($pembina->link_linkedin)
                                                            <a href="{{ $pembina->link_linkedin }}"><i
                                                                    class="bi bi-linkedin"></i></a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <span>Pembina</span>
                                                    <h4>{{ $pembina->nama_pengurus }}</h4>
                                                    <span>{{ $pembina->univ_pengurus }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            {{-- Baris Penasihat --}}
                            @if (isset($grouped['penasihat']))
                                <div class="row gy-4 justify-content-center">
                                    @foreach ($grouped['penasihat'] as $penasihat)
                                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                            data-aos-delay="200">
                                            <div class="team-member">
                                                <div class="member-img">
                                                    <img src="{{ asset('storage/foto_pengurus/' . $penasihat->foto) }}"
                                                        class="img-fluid" alt="Penasihat">
                                                    <div class="social">
                                                        @if ($penasihat->link_instagram)
                                                            <a href="{{ $penasihat->link_instagram }}"><i
                                                                    class="bi bi-instagram"></i></a>
                                                        @endif
                                                        @if ($penasihat->link_linkedin)
                                                            <a href="{{ $penasihat->link_linkedin }}"><i
                                                                    class="bi bi-linkedin"></i></a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <span>Penasihat</span>
                                                    <h4>{{ $penasihat->nama_pengurus }}</h4>
                                                    <span>{{ $penasihat->univ_pengurus }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    @endif
                </div>
                {{-- End::Bagian Pembina dan Penasihat --}}

                {{-- Bagian Divisi BPHI --}}
                <div class="carousel-item">
                    <div class="container section-title" data-aos="fade-up">
                        <p><span class="description-title">Badan Pengurus</span> <span>Harian Inti</span></p>
                    </div>
                    <div class="container">
                        @if (isset($datas['Badan Pengurus Harian']))
                            @php
                                $bphi = $datas['Badan Pengurus Harian']->groupBy('jabatan');

                                $positions = [
                                    'wake1' => 'Wakil Ketua I',
                                    'wake2' => 'Wakil Ketua II',
                                    'sekretaris' => 'Sekretaris',
                                    'bendahara' => 'Bendahara',
                                ];
                            @endphp

                            <!-- Ketua di baris sendiri -->
                            <div class="row gy-4 justify-content-center mb-3">
                                @if (isset($bphi['ketua']))
                                    @foreach ($bphi['ketua'] as $ketua)
                                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <div class="team-member">
                                                <div class="member-img">
                                                    <img src="{{ asset('storage/foto_pengurus/' . $ketua->foto) }}"
                                                        class="img-fluid" alt="BPHI">
                                                    <div class="social">
                                                        @if ($ketua->link_instagram)
                                                            <a href="{{ $ketua->link_instagram }}"><i
                                                                    class="bi bi-instagram"></i></a>
                                                        @endif
                                                        @if ($ketua->link_linkedin)
                                                            <a href="{{ $ketua->link_linkedin }}"><i
                                                                    class="bi bi-linkedin"></i></a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <span>Ketua Umum</span>
                                                    <h4>{{ $ketua->nama_pengurus }}</h4>
                                                    <span>{{ $ketua->univ_pengurus }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <!-- Baris Anggota -->
                            <div class="row gy-4 justify-content-center">
                                @foreach ($positions as $key => $title)
                                    @if (isset($bphi[$key]))
                                        @foreach ($bphi[$key] as $anggota)
                                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <div class="team-member">
                                                    <div class="member-img">
                                                        <img src="{{ asset('storage/foto_pengurus/' . $anggota->foto) }}"
                                                            class="img-fluid" alt="BPHI">
                                                        <div class="social">
                                                            @if ($anggota->link_instagram)
                                                                <a href="{{ $anggota->link_instagram }}"><i
                                                                        class="bi bi-instagram"></i></a>
                                                            @endif
                                                            @if ($anggota->link_linkedin)
                                                                <a href="{{ $anggota->link_linkedin }}"><i
                                                                        class="bi bi-linkedin"></i></a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="member-info">
                                                        <span>{{ $title }}</span>
                                                        <h4>{{ $anggota->nama_pengurus }}</h4>
                                                        <span>{{ $anggota->univ_pengurus }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        @endif

                    </div>
                </div>
                {{-- End::Bagian Divisi BPHI --}}

                <!-- Bagian Divisi Dengan Koordinator -->
                @php
                    $urutan_divisi = [
                        'Riset & Keilmuan',
                        'Komunikasi, Media & Desain',
                        'Internal & Advokasi',
                        'Minat & Bakat',
                        'Kewirausahaan',
                        'Hubungan Luar',
                        'Tim Kesekretariatan',
                    ];
                @endphp
                @foreach ($urutan_divisi as $nama_divisi)
                    @if (isset($datas[$nama_divisi]) && $nama_divisi !== 'Badan Pengurus Harian' && $nama_divisi !== 'Pembina & Penasihat')
                        @php
                            $penguruses = $datas[$nama_divisi];
                            $grouped = $penguruses->groupBy('jabatan');
                        @endphp

                        <div class="carousel-item">
                            <div class="container section-title" data-aos="fade-up">
                                <p><span class="description-title">Divisi</span> <span>{{ $nama_divisi }}</span></p>
                            </div>
                            <div class="container">
                                <!-- Baris Koordinator -->
                                @if (isset($grouped['koordinator']))
                                    <div class="row gy-4 justify-content-center mb-3">
                                        @foreach ($grouped['koordinator'] as $koor)
                                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                                data-aos-delay="100">
                                                <div class="team-member">
                                                    <div class="member-img">
                                                        <img src="{{ asset('storage/foto_pengurus/' . $koor->foto) }}"
                                                            class="img-fluid" alt="Koordinator">
                                                        <div class="social">
                                                            @if ($koor->link_instagram)
                                                                <a href="{{ $koor->link_instagram }}"><i
                                                                        class="bi bi-instagram"></i></a>
                                                            @endif
                                                            @if ($koor->link_linkedin)
                                                                <a href="{{ $koor->link_linkedin }}"><i
                                                                        class="bi bi-linkedin"></i></a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="member-info">
                                                        <span>Koordinator</span>
                                                        <h4>{{ $koor->nama_pengurus }}</h4>
                                                        <span>{{ $koor->univ_pengurus }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Baris Anggota -->
                                @if (isset($grouped['anggota']))
                                    <div class="row gy-4 justify-content-center">
                                        @foreach ($grouped['anggota'] as $anggota)
                                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                                data-aos-delay="100">
                                                <div class="team-member">
                                                    <div class="member-img">
                                                        <img src="{{ asset('storage/foto_pengurus/' . $anggota->foto) }}"
                                                            class="img-fluid" alt="Anggota">
                                                        <div class="social">
                                                            @if ($anggota->link_instagram)
                                                                <a href="{{ $anggota->link_instagram }}"><i
                                                                        class="bi bi-instagram"></i></a>
                                                            @endif
                                                            @if ($anggota->link_linkedin)
                                                                <a href="{{ $anggota->link_linkedin }}"><i
                                                                        class="bi bi-linkedin"></i></a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="member-info">
                                                        <h4>{{ $anggota->nama_pengurus }}</h4>
                                                        <span>{{ $anggota->univ_pengurus }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- End::Bagian Divisi Dengan Koordinator -->
            </div>

            <!-- Navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </section><!-- /Team Section -->
@endsection
