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
        <div class="col-md-7">
            @forelse ($articles as $article)
            <div class="card mb-4">
                @if($article->thumbnail)
                <a href="{{ route('articles.show', $article->slug)}}">
                    <img style="height:400px; object-fit: cover; object-position: center;" class="card-img-top" src="{{$article->takeImage}}" alt="">
                </a>
                @endif
                <div class="card-body">
                    <div>
                        <a href="{{ route('categories.show', $article->category->slug) }}" class="text-secondary">
                            <small> {{ $article->category->name }} | </small>
                        </a>
                        @foreach($article->tags as $tag)
                        <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                            <small> {{ $tag->name }}</small>
                        </a>
                        @endforeach
                    </div>
                    <h5>
                        <a class="text-dark" href="{{ route('articles.show', $article->slug) }}">
                            {{$article->title}}
                        </a>
                    </h5>
                    <div class="text-secondary my-3">
                        <!-- {{ Str::limit($article->body, 130, '.') }} -->
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="media align-items-center">
                            <img width="40" class="rounded-circle mr-3" src="/admin/img/default-user.png">
                            <div class="media-body">
                                <div class="">
                                    {{ $article->author->name }}
                                </div>
                            </div>
                        </div>
                        <div class="text-secondary">
                            <small>
                                Published on {{$article->created_at->diffForHumans()}}
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-md-12">
                <div class="alert alert-info">
                    There's No Posts
                </div>
            </div>
            @endforelse
        </div>
    </div>



    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>

</section>
<!-- /.content -->
@stop