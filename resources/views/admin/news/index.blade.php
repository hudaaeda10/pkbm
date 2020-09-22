@extends('layouts.admin.utama')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h4> Semua Artikel </h4>
            <hr>
        </div>
        <div>
            <a href="/berita/create" class="btn btn-primary"> Buat Berita </a>
        </div>
    </div>
    <div class="row">
        @forelse ($articles as $article)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    {{ $article->title }}
                </div>
                <div class="card-body">
                    <div>
                        {{ Str::limit($article->body, 100) }}
                    </div>
                    <a href="/berita/{{ $article->slug}}">Selengkapnya</a>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    Published On {{ $article->created_at->diffForHumans() }}
                    <a href="/berita/{{ $article->slug}}/edit" class="btn btn-sm btn-success">Edit</a>
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
</div>
@stop