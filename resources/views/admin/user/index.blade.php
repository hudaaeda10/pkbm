@extends('layouts.admin.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tabel User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">data-user</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data User PKBM Taman Siswa</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 100px;">
                                <div class="button-group input-group-append">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahuser">
                                        Tambah User
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>role</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->role}}</td>
                                    <td>
                                        <a href="/user/edit/{{ $user->id }}" class="btn btn-warning">Ubah</a>
                                        <form action="/user/delete/{{ $user->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" title="Delete User" onclick="return confirm('Yakin hapus User?')" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    <!-- modal tambah siswa -->
    <div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="tambahuser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/user/store" method="post" role="form">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                                @error('name')
                                <div class="invalid-feedback mt-2">
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
                                <label>Role</label>
                                <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                    <option disabled selected>Pilih Role</option>
                                    <option value="student">Murid</option>
                                    <option value="teacher">Guru</option>
                                    <option value="admin">Admin</option>
                                    <option value="konten">Konten</option>
                                </select>
                                @error('role')<div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
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
</section>

@stop