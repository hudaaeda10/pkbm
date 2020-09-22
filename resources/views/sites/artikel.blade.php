@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('sites')}}/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Stories <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Successful Stories</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                @foreach($articles as $article)
                <div class="story-wrap d-md-flex align-items-center">
                    <div class="img" style="background-image: url({{asset('sites')}}/images/image_1.jpg);"></div>
                    <div class="text pl-md-5">
                        <h4>Judul Artikel <span>{{ $article->title }}</span></h4>
                        <p>{{ $article->body }}</p>
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