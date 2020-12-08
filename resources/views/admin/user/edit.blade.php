@extends('layouts.admin.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active">User baru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit User: {{ $user->name }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/user/update/{{ $user->id }}" method="post" role="form">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" value="{{ old('username') ?? $user->username }}" name="username" class="form-control @error('username') is-invalid @enderror" id="username">
                    @error('username')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{ old('email') ?? $user->email }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <br>
                    <a href="/changePassword/{{$user->id}}" class="btn btn-warning btn-sm mb-3">Ubah Password</a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</section>
@stop