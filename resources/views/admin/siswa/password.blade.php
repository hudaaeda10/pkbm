@extends('layouts.admin.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Password</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/student/{{$student->id}}/tampil">Profile Siswa</a></li>
                    <li class="breadcrumb-item active">Reset Passwords</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Passowrd Siswa: {{ $student->nama_depan }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/student/updatePassword/{{ $student->id }}" method="post" role="form">
            @method('patch')
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="password">Passowrd</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">update password</button>
            </div>
        </form>

    </div>
</section>
@stop