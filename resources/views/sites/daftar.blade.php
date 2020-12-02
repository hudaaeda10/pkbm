@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/sites/images/banner-pkbm.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/beranda">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Daftar <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Daftar</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        @include('alert')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Daftar PKBM Taman Siswa</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Silahkan isi data-data berikut dibawah ini.
                                </div>
                                <form action="/student/site/store" method="POST" role="form" class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="nama_depan">Nama Depan</label>
                                                <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="nama_belakang">Nama Belakang</label>
                                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Alamat Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="jenis_kelamin">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="pekerjaan">Pekerjaan</label>
                                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="pekerjaan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kelas Paket</label>
                                                <select name="kelas_paket" id="kelas_paket" class="form-control @error('kelas_paket') is-invalid @enderror">
                                                    <option disabled selected>Pilih Kelas yang Diambil</option>
                                                    <option value="A">Paket A</option>
                                                    <option value="B">Paket B</option>
                                                    <option value="B">Paket C</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>Kontak PKBM Taman Siswa</h3>
                                <p class="mb-4">Kami dapat dihubungi pada kontak dan tempat dibawah ini</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Alamat:</span> Jl. Garuda No.31, RT.7/RW.4, Kec. Kemayoran, Jakarta Pusat 10610
                                        </p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Nomor Telphone:</span> <a href="https://wa.me/+021-4243-281"> +021-4243-281</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:">pkbmtamsisjkt@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="/beranda">pkbmtamansiswa.com</a></p>
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


@stop