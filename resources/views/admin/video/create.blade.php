@extends('layouts.admin.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Buat Konten Video Baru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/video">Video</a></li>
                    <li class="breadcrumb-item active">Video baru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Video Baru</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/videos/store" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Pilih Kategori</label>
                    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        <option disabled selected>Pilih satu kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')<div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Judul Video</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
                    @error('title')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat_url">Alamat Video Youtube</label>
                    <input type="text" name="alamat_url" id="alamat_url" class="form-control @error('alamat_url') is-invalid @enderror">
                    @error('alamat_url')
                    <div class="invalid-feedback mt-2">
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