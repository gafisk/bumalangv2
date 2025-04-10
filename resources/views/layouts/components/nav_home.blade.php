<a href="{{ route('home.index') }}" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <img src="{{ asset('home/img/Logo.png') }}" alt="">
    <h1 class="sitename">BU Malang</h1>
</a>
<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('home.index') }}" class="active">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ route('home.index') }}#sejarah">Sejarah</a></li>
                <!-- <li><a href="#">Struktur Organisasi</a></li> -->
                <li><a href="{{ route('home.index') }}#lambang">Makna dan Lambang</a></li>
                <li><a href="{{ route('home.index') }}#visimisi">Visi dan Misi</a></li>
                <li><a href="{{ route('home.pengurus') }}">Profil Pengurus</a></li>
                <li><a href="{{ route('home.proker') }}">Program Kerja</a></li>
                <li><a href="">Laporan Keuangan</a></li>
                <li><a href="">Laporan Pertanggungjawaban</a></li>
                <li><a href="">Anggaran Dasar dan Anggaran Rumah Tangga</a></li>
            </ul>
        </li>
        <li><a href="{{ route('home.berita') }}">Berita</a></li>
        <li class="dropdown"><a href="#"><span>Aktivitas</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="">Events</a></li>
                <li><a href="">Prestasi Awardee</a></li>
                <li><a href="">Publikasi Awardee</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Pelaporan</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="">Pelaporan Awardee Baru</a></li>
                <li><a href="">Pelaporan Alumni</a></li>
                <li><a href="">Pelaporan Prestasi</a></li>
                <li><a href="">Pelaporan Publikasi</a></li>
            </ul>
        </li>
        <li><a href="#footer">Kontak</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
