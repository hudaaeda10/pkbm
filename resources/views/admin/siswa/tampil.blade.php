@extends('layouts.admin.master')

@section('headeradmin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile Siswa</h1>
            </div>
            <div class="col-sm-6">
                @if($student->user->role == 'admin')
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/adminlte">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/students">Data Siswa</a></li>
                    <li class="breadcrumb-item active">Profile Siswa</li>
                </ol>
                @else
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/adminlte">Home</a></li>
                    <li class="breadcrumb-item active">Profile Siswa</li>
                </ol>
                @endif
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
                            <img class="profile-user-img img-fluid img-circle" src="{{ $student->getAvatar() }}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{ $student->nama_depan }} {{ $student->nama_belakang }}</h3>

                        <p class="text-muted text-center">Paket {{ $student->kelas_paket }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Jumlah Mata Pelajaran</b> <a class="float-right">{{ $student->courses->count() }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nilai Rata-Rata</b> <a class="float-right">{{ $student->rataRataNilai()}}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Biodata Siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Pekerjaan</strong>

                        <p class="text-muted">
                            {{ $student->pekerjaan }}
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                        <p class="text-muted">{{ $student->alamat }}</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i>Email</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">{{ $student->user->email }}</span>
                        </p>

                        <hr>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Nilai Pelajaran</a></li>
                            @canany(['isStudent', 'isAdmin'])
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah Profile</a></li>
                            @endcanany
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                @include('admin.siswa.matpel')
                            </div>
                            <!-- /.tab-pane -->
                            @canany(['isStudent', 'isAdmin'])
                            <div class="tab-pane" id="settings">
                                @include('admin.siswa.setting')
                            </div>
                            @endcanany
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- modal tambah siswa -->
<div class="modal fade" id="tambahnilai" tabindex="-1" aria-labelledby="tambahsiswa" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/student/{{ $student->id }}/addnilai" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Mata Pelajaran</label>
                            <select name="courses" id="courses" class="form-control @error('courses') is-invalid @enderror">
                                <option disabled selected>Pilih Mata pelajaran</option>
                                @foreach($courses as $course)
                                <option value="{{ $course->id}}">{{ $course->nama }}</option>
                                @endforeach
                            </select>
                            @error('courses')<div class="invalid-feedback mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input type="text" name="nilai" id="nilai" class="form-control @error('nilai') is-invalid @enderror">
                            @error('nilai')
                            <div class="invalid-feedback mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#username').editable();
    });
</script>
@stop

@section('footeradmin')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
    $(document).ready(function() {
        $('.nilai').editable({
            mode: 'inline',
        });
    });
</script>
@stop