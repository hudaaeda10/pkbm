@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/sites/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Stories <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Artikel</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <div class="mb-5">
                    @isset($category)
                    <h1>Kategori : {{ $category->name }}</h1>
                    @endisset

                    @isset($tag)
                    <h1>Kategori : {{ $tag->name }}</h1>
                    @endisset

                    @if(!isset($category) && !isset($tag))
                    <h4>Semua Kategori </h4>
                    @endisset
                </div>
                @foreach($articles as $article)
                <div class="story-wrap d-md-flex align-items-center">
                    <div class="img" style="background-image: url('{{ $article->takeImage }}');"></div>
                    <div class="text pl-md-5">
                        <h4><a href="/artikel/{{ $article->slug}}"><span>{{ $article->title }}</span></a></h4>
                        <!-- <p> {{ Str::limit($article->body, 130, '.') }}</p> -->
                        <div class=" text-secondary mb-2 ">
                            <div>{{ $article->created_at->format("d F, Y") }}</div>
                        </div>
                        <p><a href="/artikel/{{ $article->slug}}" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
                @endforeach
                <div class="row mt-5">
                    <div class="col">
                        <div class="pagination pagination-lg">
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- .section -->
@stop