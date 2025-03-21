<div class="nav">
    <div class="sb-sidenav-menu-heading">Core</div>
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a>
    {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#manajemenprofil"
        aria-expanded="false" aria-controls="manajemenprofil">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        M Profil
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="manajemenprofil" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{ route('admin.daftar-pengurus') }}">Pengurus</a>
            <a class="nav-link" href="">Program Kerja</a>
            <a class="nav-link" href="">L Keuangan</a>
            <a class="nav-link" href="">L Pertanggungjawaban</a>
        </nav>
    </div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#manajemenberita"
        aria-expanded="false" aria-controls="manajemenberita">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        M Berita
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="manajemenberita" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="">Kelola Berita</a>
        </nav>
    </div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#manajemenaktivitas"
        aria-expanded="false" aria-controls="manajemenaktivitas">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        M Aktivitas
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="manajemenaktivitas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="">Event</a>
            <a class="nav-link" href="">Prestasi</a>
            <a class="nav-link" href="">Publikasi</a>
        </nav>
    </div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#manajemenpelaporan"
        aria-expanded="false" aria-controls="manajemenpelaporan">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        M Pelaporan
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="manajemenpelaporan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="">P Awardee Baru</a>
            <a class="nav-link" href="">P Alumni</a>
            <a class="nav-link" href="">P Prestasi</a>
            <a class="nav-link" href="">P Publikasi</a>
        </nav>
    </div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#manajemenweb"
        aria-expanded="false" aria-controls="manajemenweb">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        M Web
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="manajemenweb" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{ route('admin.daftar-divisi') }}">Kelola Divisi</a>
            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
        </nav>
    </div>
</div>
