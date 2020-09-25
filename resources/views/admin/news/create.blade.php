@extends('layouts.admin.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Buat Artikel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Artikel</li>
                    <li class="breadcrumb-item active">Artikel Baru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"> Artikel Baru </div>
                    <div class="card-body">
                        <form action="/berita/store" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body"> Isi Artikel </label>
                                <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                                @error('body')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop