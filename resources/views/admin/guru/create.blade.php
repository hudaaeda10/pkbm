@extends('layouts.admin.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Data Guru Baru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/adminlte">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/teachers">Daftar Guru</a></li>
                    <li class="breadcrumb-item active">Buat Data Guru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Data Guru Baru</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <form action="/teacher/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="nama_depan">Nama Depan</label>
                                    <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan">
                                    @error('nama_depan')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama_belakang">Nama Belakang</label>
                                    <input type="text" name="nama_belakang" id="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror">
                                    @error('nama_belakang')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')<div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="alamat"> Alamat </label>
                                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                                    @error('jabatan')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <input type="text" name="pendidikan" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
                                    @error('pendidikan')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="no_handphone">Nomor Handphone</label>
                                    <input type="text" name="no_handphone" id="no_handphone" class="form-control @error('no_handphone') is-invalid @enderror">
                                    @error('no_handphone')
                                    <div class="invalid-feedback mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </diqv>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @stop