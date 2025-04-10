@extends('layouts.home')

@section('content')
    <!-- HTML untuk Menampilkan Detail Berita -->
    <section id="contents" class="contents section">
        <div class="container mt-4">
            <h2 class="mb-3">Laporan Keuangan Kabinet {{ $lapkeu->nama_kabinet }} tahun {{ $lapkeu->tahun }}</h2>
            <p class="text-muted"><i class="bi bi-calendar"></i> {{ $lapkeu->created_at }}</p>

            <div class="card p-4 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title fw-bold text-primary">
                        <i class="bi bi-megaphone-fill"></i> Laporan Keuangan Forum BU Malang Kabinet
                        {{ $lapkeu->nama_kabinet }}
                    </h4>
                    <p class="card-text text-muted">
                        Dalam rangka menjaga transparansi dan akuntabilitas keuangan,
                        <strong>Forum Beasiswa Unggulan Malang Kabinet {{ $lapkeu->nama_kabinet }} Tahun
                            {{ $lapkeu->tahun }}</strong> dengan
                        ini menyampaikan laporan keuangan yang mencakup seluruh pemasukan dan pengeluaran selama periode
                        kepengurusan.
                    </p>

                    <p class="card-text text-muted">
                        Laporan ini disusun sebagai bentuk pertanggungjawaban kepada seluruh anggota serta pemangku
                        kepentingan,
                        guna memastikan bahwa setiap dana yang dikelola telah dialokasikan secara efektif dan sesuai dengan
                        kebutuhan organisasi.
                    </p>

                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-circle-fill me-2"></i>
                        Laporan ini mencakup rincian dana yang diterima, pengeluaran program kerja, serta saldo akhir yang
                        tersedia.
                    </div>

                    {{-- Tambahan Link --}}
                    @if (!empty($lapkeu->link))
                        <p class="mt-4">
                        <div class="card border-0 shadow-sm p-3 bg-light">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="bi bi-file-earmark-text-fill text-primary fs-3"></i>
                                </div>
                                <div>
                                    <span class="fw-bold text-dark">Dokumen Laporan Keuangan:</span>
                                    @if (Str::contains($lapkeu->link, 'drive.google.com'))
                                        {{-- Jika link Google Drive (PDF) --}}
                                        <a href="#" class="d-block text-primary fw-bold text-decoration-none"
                                            data-bs-toggle="modal" data-bs-target="#pdfModal">
                                            Lihat Laporan Keuangan <i class="bi bi-eye-fill"></i>
                                        </a>
                                    @else
                                        {{-- Jika bukan Google Drive (buka tab baru) --}}
                                        <a href="{{ $lapkeu->link }}" target="_blank"
                                            class="d-block text-primary fw-bold text-decoration-none">
                                            Lihat Laporan Keuangan <i class="bi bi-box-arrow-up-right"></i>
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
    @if (!empty($lapkeu->link) && Str::contains($lapkeu->link, 'drive.google.com'))
        @php
            preg_match('/\/d\/([^\/]+)/', $lapkeu->link, $match);
            $file_id = $match[1] ?? '';
        @endphp

        @if (!empty($file_id))
            <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel">Laporan Keuangan Kabinet {{ $lapkeu->nama_kabinet }}
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
