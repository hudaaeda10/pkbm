@extends('layouts.admin.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tabel Siswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/adminlte">Home</a></li>
                    <li class="breadcrumb-item active">Data Siswa</li>
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
                        <h3 class="card-title">Data Siswa PKBM Taman Siswa</h3>
                        @can('isAdmin')
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahsiswa">
                                Tambah Siswa
                            </button>
                        </div>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Kelas Paket</th>
                                    <th>Tanggal Daftar</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->nama_depan}} {{ $student->nama_belakang}}</td>
                                    <td>{{ $student->jenis_kelamin}}</td>
                                    <td>{{ $student->pekerjaan}}</td>
                                    <td>Paket {{ $student->kelas_paket}}</td>
                                    <td>{{ $student->created_at->format('d F Y') }}</td>
                                    <td>
                                        <a href="/student/tampil/{{ $student->id }}" class="btn btn-primary">Lihat</a>
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
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- modal tambah siswa -->
    <div class="modal fade" id="tambahsiswa" tabindex="-1" aria-labelledby="tambahsiswa" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/student/store" method="post" role="form" enctype="multipart/form-data">
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
                                <label for="jenis_kelamin">Jenis Kelamin</label>
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
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
                                @error('pekerjaan')
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
                                <label>Kelas Paket</label>
                                <select name="kelas_paket" id="kelas_paket" class="form-control @error('kelas_paket') is-invalid @enderror">
                                    <option disabled selected>Pilih Kelas yang Diambil</option>
                                    <option value="A">Paket A</option>
                                    <option value="B">Paket B</option>
                                    <option value="B">Paket C</option>
                                </select>
                                @error('kelas_paket')<div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                            </div>


                            @enderror
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