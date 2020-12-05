@extends('layouts.admin.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tabel Guru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/teachers">Home</a></li>
                    <li class="breadcrumb-item active">Data Guru</li>
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
                        <h3 class="card-title">Data Guru PKBM Taman Siswa</h3>
                        <div class="card-tools">
                            @can('isAdmin')
                            <a href="/admin/teachers/create" class="btn btn-primary btn-sm">Tambah Data Guru</a>
                            @endcan
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan</th>
                                    <th>Jabatan</th>
                                    <th>No.Handphone</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->nama_depan}} {{ $teacher->nama_belakang}}</td>
                                    <td>{{ $teacher->jenis_kelamin}}</td>
                                    <td>{{ $teacher->pendidikan}}</td>
                                    <td>{{ $teacher->jabatan }}</td>
                                    <td>{{ $teacher->no_handphone }}</td>
                                    <td>
                                        <a href="/teacher/{{ $teacher->id }}/profile" class="btn btn-primary">Lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="d-flex justify-content-center">
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
    </div>


</section>

@stop