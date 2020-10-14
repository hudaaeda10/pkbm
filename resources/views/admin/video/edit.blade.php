@extends('layouts.admin.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Video Baru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Video</a></li>
                    <li class="breadcrumb-item active">Video baru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Video Baru: {{ $video->title }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/videos/{{ $video->slug }}/edit" method="post" role="form" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Pilih Kategori</label>
                    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        <option disabled selected>Pilih satu kategori</option>
                        @foreach($categories as $category)
                        <option {{ $category->id == $video->category_id ? 'selected' : '' }} value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')<div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Masukkan Gambar Video</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                        </div>
                    </div>
                    @error('thumbnail')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Judul Video</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') ?? $video->title }}">
                    @error('title')
                    <div class="invalid-feedback mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat_url">Alamat Video Youtube</label>
                    <input type="text" name="alamat_url" id="alamat_url" value="{{ old('alamat_url') ?? $video->alamat_url }}" class="form-control @error('alamat_url') is-invalid @enderror">
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