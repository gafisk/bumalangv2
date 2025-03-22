<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beasiswa Unggulan Malang</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('home/img/favicon.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('home/css/main.css') }}" rel="stylesheet">

</head>

<style>
    .pricing-item {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pricing-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }

    .pricing-item h3 {
        color: #007bff;
        font-weight: bold;
        text-align: center;
    }

    .icon-wrapper {
        text-align: center;
        font-size: 2.5rem;
        color: #28a745;
        margin-bottom: 10px;
    }
</style>

<body class="index-page">
    <audio id="bg-music" muted loop>
        <source src="assets/music/mars.mp3" type="audio/mp3">
        Browser tidak mendukung audio.
    </audio>

    <script>
        document.addEventListener("click", function() {
            var audio = document.getElementById("bg-music");
            audio.muted = false; // Matikan mute setelah klik
            audio.play();
        });
    </script>


    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="{{ $data_organisasi->email }}">{{ $data_organisasi->email }}</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">{{ $data_organisasi->no_telp }}</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="{{ $data_organisasi->link_youtube }}" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="{{ $data_organisasi->link_instagram }}" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                    <a href="{{ $data_organisasi->link_linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ $data_organisasi->link_tiktok }}" target="_blank"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->


        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                @include('layouts.components.nav_home')
            </div>

        </div>

    </header>

    <main class="main">

        @yield('hero')

        @yield('content')

    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h3>Forum Beasiswa Unggulan Malang</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Forum Beasiswa Unggulan Malang</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>{{ $data_organisasi->alamat }}</p>
                        <p>Kota Malang, Jawa Timur</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>{{ $data_organisasi->no_telp }}</span></p>
                        <p><strong>Email:</strong> <span>{{ $data_organisasi->email }}</span></p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Ikuti sosial media kami</p>
                    <div class="social-links d-flex">
                        <a href="{{ $data_organisasi->link_youtube }}" target="_blank"><i
                                class="bi bi-youtube"></i></a>
                        <a href="{{ $data_organisasi->link_instagram }}" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="{{ $data_organisasi->link_linkedin }}" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="{{ $data_organisasi->link_tiktok }}" target="_blank"><i class="bi bi-tiktok"></i></a>
                    </div>
                    <br>
                    <p>kritik & saran pengembangan Website: <a
                            href="https://wa.me/{{ $data_organisasi->no_pengembang }}" target="_blank">Pengembang</a>
                    </p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Pengurus BU Malang</strong> <span>2024</span></p>
            <div class="credits">
            </div>
        </div>

    </footer>

    <div class="preloader"></div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('home/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('home/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('home/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('home/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('home/js/main.js') }}"></script>


</body>

</html>
