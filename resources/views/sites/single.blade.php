@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url(&quot;{{asset('sites')}}/images/bg_2.jpg&quot;); background-position: 50% 5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single
                        <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
                <p>
                    <img src="{{asset('sites')}}/images/image_1.jpg" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $article->title }}</h2>
                <p>{{ $article->body }}</p>


</section>
@stop