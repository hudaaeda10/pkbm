@extends('layouts.admin.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Siswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Edit Siswa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Siswa Baru: {{ $student->title }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/student/{{ $student->id }}/update" method="post" role="form" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" value="{{ old('nama_depan') ?? $student->nama_depan }}" name="nama_depan" id="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror">
                    @error('nama_depan')
                    <div class="text-danger mt-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" value="{{ old('nama_belakang') ?? $student->nama_belakang }}">
                    @error('nama_belakang')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                        <option value="Laki-Laki" @if($student->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                        <option value="Perempuan" @if($student->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" value="{{ old('pekerjaan') ?? $student->pekerjaan }}">
                    @error('pekerjaan')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat"> Alamat </label>
                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') ?? $student->alamat }}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pilih Kelas Paket</label>
                    <select name="kelas_paket" id="kelas_paket" class="form-control @error('kelas_paket') is-invalid @enderror">
                        <option value="A" @if($student->kelas_paket == 'A') selected @endif>Paket A</option>
                        <option value="B" @if($student->kelas_paket == 'B') selected @endif>Paket B</option>
                        <option value="C" @if($student->kelas_paket == 'C') selected @endif>Paket C</option>
                    </select>
                    @error('kelas_paket')<div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="file" name="avatar" id="avatar">
                    @error('avatar')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>

@stop