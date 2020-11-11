@extends('layouts.admin.master', ['title' => 'Update Berita'])

@section('headeradmin')
<!-- summernote -->
<link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.css">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Artikel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Artikel</li>
                    <li class="breadcrumb-item active">Update Artikel</li>
                </ol>
            </div>
        </div>
</section>

<section class="content">
    <div class="container-fuluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Update Berita: {{ $article->title}} </div>
                    <div class="card-body">
                        <form action="/article/{{ $article->slug}}/edit" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="file" name="thumbnail" id="thumbnail">
                                @error('thumbnail')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title" value="{{ old('title') ?? $article->title}}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                                    <option disabled selected>Pilih Salah Satu</option>
                                    @foreach($categories as $category)
                                    <option {{ $category->id == $article->category_id ? 'selected' : '' }} value="{{ $category->id}}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tags">tags</label>
                                <select name="tags[]" id="tags" class="select2 form-control @error('tags') is-invalid @enderror" multiple>
                                    @foreach($article->tags as $tag)
                                    <option selected value="{{ $tag->id}}">{{ $tag->name }}</option>
                                    @endforeach

                                    @foreach($tags as $tag)
                                    <option value="{{ $tag->id}}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                @error('tags')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="body"> Isi Artikel </label>
                                <textarea class="textarea form-control @error('body') is-invalid @enderror" name="body" id="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! nl2br(old('body') ?? $article->body) !!}</textarea>
                                @error('body')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('footeradmin')
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
</script>
@stop