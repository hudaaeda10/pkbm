@extends('layouts.master')

@section('content')
    
<div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url({{asset('/sites')}}/images/home-pkbm.png);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Selamat Datang di Website</h2>
                                <h1 class="mb-4">PKBM Taman Siswa Jakarta</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{asset('/sites')}}/images/home2-pkbm.png);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Selamat Datang di Website</h2>
                                <h1 class="mb-4">PKBM Taman Siswa Jakarta</h1>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{asset('/sites')}}/images/home3-pkbm.png);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Selamat Datang di Website</h2>
                                <h1 class="mb-4">PKBM Taman Siswa Jakarta</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="intro py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="intro-box w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text pl-3">
                            <h4 class="mb-0">Hubungi Kami: +021-4243-281</h4>
                            <span> Jl. Garuda No.31, RT.7/RW.4, Kec. Kemayoran, Jakarta Pusat 10610</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="intro-box w-100 d-flex ml-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <div class="text pl-3">
                            <h4 class="mb-0">Jam Operasional</h4>
                            <span>Senin - Jum'at 8:00  - 17:00 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Semboyan PKBM Taman Siswa</h2>
                    <span class="subheading">Ing Ngarso Sung Tulodho, Ing Madyo Mangun Karso, Tutwuri Handayani</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-crm"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Ing Ngarso Sung Tulodho</h3>
                            <p>Memberikan tauladan di depan, menjadikan diri sebagai contoh yang baik di masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-marriage"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Ing Madyo Mangun Karso</h3>
                            <p> Ditengah membangun semangat, menjadikan diri sebagai pencipta semangat di setiap keadaan yang ada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-goal"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Tutwuri Handayani</h3>
                            <p>Memberikan dorongan dari belakang, menjadi orang yang dapat mengarahkan orang lain menuju tujuan yang ingin di capai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Apa Saja Program PKBM Taman Siswa?</h2>
                    <span class="subheading">Program Kami</span>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url({{asset('/sites')}}/images/video-image.png);">
                        <a href="https://www.youtube.com/watch?v=nBtH8qPqTGI" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
                        <div class="text pl-4">
                            <h4>Pendidikan Kesetaraan</h4>
                            <p>Pendidikan tersebut terdiri dari Paket A, Paket B dan Paket C</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
                        <div class="text pl-4">
                            <h4>Keaksaraan Fungsional</h4>
                            <p>Program tersebut diantaranya membaca, menulis, menghitun dan Life Skill</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
                        <div class="text pl-4">
                            <h4>Kursus-Kursus</h4>
                            <p>Ketrampilan montir mobil, operator komputer, teknisi komputer, seni tari, gamelan, bela diri</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stress"></span></div>
                        <div class="text pl-4">
                            <h4>PAUD</h4>
                            <p>Program ini melatih panca indera, pembentukan karakter positif, belajar bersosialisasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-secondary">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                    <h2>Pendapat Lulusan PKBM Taman Siswa</h2>
                    <span class="subheading">Pendapat mereka</span>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Saya mendapatkan pengalaman yang baik, kemampuan saya meningkat dan mendapatkan pekerjaan dengan mudah.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('/sites')}}/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Joko Anwar</p>
                                            <span class="position">Pekerja Swat</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('/sites')}}/images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('/sites')}}/images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Artikel terbaru dari PKBM taman siswa</h2>
                    <span class="subheading">Berita &amp; Artikel</span>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('/sites')}}/images/image_1.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('/sites')}}/images/image_2.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('/sites')}}/images/image_3.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop