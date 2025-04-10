@extends('layouts.home')

@section('content')
    <!-- HTML untuk Menampilkan Detail Berita -->
    <section id="contents" class="contents section">
        <div class="container mt-4">
            <h2 class="mb-3">Program Kerja Kabinet {{ $proker->nama_kabinet }} tahun {{ $proker->tahun }}</h2>
            <p class="text-muted"><i class="bi bi-calendar"></i> {{ $proker->created_at }}</p>

            <div class="card p-4 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title fw-bold text-primary">
                        <i class="bi bi-megaphone-fill"></i> Proker Forum BU Malang Kabinet {{ $proker->nama_kabinet }}
                    </h4>
                    <p class="card-text text-muted">
                        Sebagai bagian dari komitmen kami dalam membangun komunitas yang lebih solid dan berdampak,
                        <strong>Forum Beasiswa Unggulan Malang Kabinet {{ $proker->nama_kabinet }} Tahun
                            {{ $proker->tahun }}</strong> dengan
                        bangga mempersembahkan program kerja yang telah kami rancang.
                        Program ini dirancang untuk memberikan kontribusi nyata dalam pengembangan akademik, sosial, dan
                        profesional para awardee.
                    </p>

                    <p class="card-text text-muted">
                        Kami percaya bahwa kolaborasi dan partisipasi aktif dari seluruh awardee akan membawa perubahan yang
                        lebih besar.
                        Oleh karena itu, kami mengundang Anda untuk menjelajahi dan memahami setiap inisiatif yang telah
                        kami jalankan.
                    </p>

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="bi bi-lightbulb-fill me-2"></i>
                        Program ini mencakup kegiatan pengembangan keterampilan, pelatihan, serta kesempatan berjejaring
                        dengan calon awardee, awardee, alumni dan profesional di berbagai bidang.
                    </div>

                    <!-- Tambahan Link -->
                    {{-- Tambahan Link --}}
                    @if (!empty($proker->link))
                        <p class="mt-4">
                        <div class="card border-0 shadow-sm p-3 bg-light">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="bi bi-file-earmark-text-fill text-primary fs-3"></i>
                                </div>
                                <div>
                                    <span class="fw-bold text-dark">Dokumen Program Kerja:</span>
                                    @if (Str::contains($proker->link, 'drive.google.com'))
                                        {{-- Jika link Google Drive (PDF) --}}
                                        <a href="#" class="d-block text-primary fw-bold text-decoration-none"
                                            data-bs-toggle="modal" data-bs-target="#pdfModal">
                                            Lihat Program Kerja <i class="bi bi-eye-fill"></i>
                                        </a>
                                    @else
                                        {{-- Jika bukan Google Drive (buka tab baru) --}}
                                        <a href="{{ $proker->link }}" target="_blank"
                                            class="d-block text-primary fw-bold text-decoration-none">
                                            Lihat Program Kerja <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </p>
                    @endif
                </div>
                <!-- Tombol Kembali -->
                <a href="javascript:history.back()" class="btn btn-secondary mt-3">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </section>

    {{-- Modal PDF --}}
    @if (!empty($proker->link) && Str::contains($proker->link, 'drive.google.com'))
        @php
            preg_match('/\/d\/([^\/]+)/', $proker->link, $match);
            $file_id = $match[1] ?? '';
        @endphp

        @if (!empty($file_id))
            <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel">Program Kerja Kabinet {{ $proker->nama_kabinet }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://drive.google.com/file/d/{{ $file_id }}/preview" width="100%"
                                height="500px"></iframe>
                        </div>
                        <div class="modal-footer">
                            <a href="https://drive.google.com/file/d/{{ $file_id }}/view" target="_blank"
                                class="btn btn-danger">
                                <i class="bi bi-box-arrow-up-right"></i> Buka di Tab Baru
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle"></i> Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif

@endsection
