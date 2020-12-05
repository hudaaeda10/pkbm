@extends('layouts.admin.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile {{ $teacher->nama_depan}} {{ $teacher->nama_belakang}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/adminlte">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/teachers">Daftar Guru</a></li>
                    <li class="breadcrumb-item active">Profile Guru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ $teacher->getAvatar() }}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{ $teacher->nama_depan }} {{ $teacher->nama_belakang }}</h3>

                        <p class="text-muted text-center">{{ $teacher->jabatan }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Pendidikan</b> <a class="float-right">{{ $teacher->pendidikan }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nomor Telphone</b> <a class="float-right">{{ $teacher->no_handphone}}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Biodata Guru</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Pekerjaan</strong>

                        <p class="text-muted">
                            {{ $teacher->jabatan }}
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                        <p class="text-muted">{{ $teacher->alamat }}</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i>Email</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">{{ $teacher->user->email}}</span>
                        </p>

                        <hr>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                @canany(['isTeacher', 'isAdmin'])
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah Profile</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="setting">
                                @include('admin.guru.setting')
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                @endcanany
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop