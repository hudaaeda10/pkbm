@extends('layouts.admin.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        @forelse ($articles as $article)
        <div class="col-md-3 col-sm-6 col-12">
            <div class="card mb-4">
                <div class="card-header">
                    {{ $article->title }}
                </div>
                <div class="card-body">
                    <div>
                        {{ Str::limit($article->body, 100) }}
                    </div>
                    <a href="/article/{{ $article->slug}}">Selengkapnya</a>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    Published On {{ $article->created_at->diffForHumans() }}
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