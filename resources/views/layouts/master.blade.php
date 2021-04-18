<!DOCTYPE html>
<html lang="en">

<head>
    <title>PKBM Taman Siswa Jakarta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('/sites')}}/css/animate.css">

    <link rel="stylesheet" href="{{asset('/sites')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/sites')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/sites')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('/sites')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/sites')}}/css/style.css">
    @stack('headersite')
    @yield('headersites')
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+ 021-4243-281</a></p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand"> <img src="{{asset('/sites')}}/images/logo-pkbm.png" alt="logo-pkbm" width="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('beranda') ? 'active': '' }}"><a href="{{route('beranda')}}" class="nav-link">Beranda</a></li>
                    <li class="nav-item {{ request()->is('tentang') ? 'active': '' }}"><a href="/tentang" class="nav-link">Profile</a></li>
                    <li class="nav-item {{ request()->is('program') ? 'active': '' }}"><a href="/program" class="nav-link">Program</a></li>
                    <li class="nav-item {{ request()->is('foto') ? 'active': '' }}"><a href="/foto" class="nav-link">Foto</a></li>
                    <li class="nav-item {{ request()->is('video') ? 'active': '' }}"><a href="/video" class="nav-link">Video</a></li>
                    <li class="nav-item {{ request()->is('artikel') ? 'active': '' }}"><a href="/artikel" class="nav-link">Artikel</a></li>
                    <li class="nav-item {{ request()->is('daftar') ? 'active': '' }}"><a href="/daftar" class="nav-link">Daftar</a></li>
                    <!-- <li class="nav-item"><a href="/masuk" class="nav-link">Login</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')


    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Tentang Kami</h2>
                            <p>PKBM Tamansiswa Jakarta di tahun 2011 sudah di kenal di tingkat nasional dengan telah mengikuti kegiatan Jambore PTK PAUDNI 2011</p>
                            <ul class="ftco-footer-social p-0">
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-10">
                                    <div class="row">
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Paket</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Paket A</a></li>
                                                <li><a href="#" class="py-1 d-block">Paket B</a></li>
                                                <li><a href="#" class="py-1 d-block">Paket C</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Tentang</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Visi</a></li>
                                                <li><a href="#" class="py-1 d-block">Misi</a></li>
                                                <li><a href="#" class="py-1 d-block">Sejarah</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Program</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Pembelajaran</a></li>
                                                <li><a href="#" class="py-1 d-block">Pelatihan</a></li>
                                                <li><a href="#" class="py-1 d-block">Seminar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-md-5">
                <div class="col-md-12">
                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{asset('/sites')}}/js/jquery.min.js"></script>
    <script src="{{asset('/sites')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('/sites')}}/js/popper.min.js"></script>
    <script src="{{asset('/sites')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('/sites')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('/sites')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('/sites')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('/sites')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{asset('/sites')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('/sites')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/sites')}}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('/sites')}}/js/google-map.js"></script>
    <script src="{{asset('/sites')}}/js/main.js"></script>
    @stack('footersite')


</body>

</html>