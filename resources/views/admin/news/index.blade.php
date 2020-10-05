@extends('layouts.admin.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @isset($category)
                <h1>Kategori : {{ $category->name }}</h1>
                @endisset

                @isset($tag)
                <h1>Tag : {{ $tag->name }}</h1>
                @endisset

                @if(!isset($category) && !isset($tag))
                <h4>Semua Artikel </h4>
                @endIf
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Artikel</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div>
                <a href="/article/create" class="btn btn-primary"> Buat Artikel </a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<section class="content">
    <div class="row">
        @forelse ($articles as $article)
        <div class="col-md-3 col-sm-6 col-12">
            <div class="card mb-4">
                <div class="card-header">
                    {{ Str::limit($article->title, 50) }}
                </div>
                <div class="card-body">
                    <div>
                        {{ Str::limit($article->body, 90) }}
                    </div>
                    <a href="/article/{{ $article->slug}}">Selengkapnya</a>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    Published On {{ $article->created_at->diffForHumans() }}
                    <a href="/article/{{ $article->slug}}/edit" class="btn btn-success">Edit</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-6">
            <div class="alert alert-info">
                Tidak ada berita
            </div>
        </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>

</section>
<!-- /.content -->
@stop