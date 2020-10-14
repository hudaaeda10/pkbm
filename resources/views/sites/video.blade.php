@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/sites/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @forelse ($videos as $video)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="{{ $video->alamat_url }}" class="block-20 rounded popup-vimeo d-flex justify-content-center align-items-center" style="background-image: url('{{$video->takeImage}}');">
                        <span class="fa fa-play fa-3x"></span>
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">{{$video->created_at->format('M d, Y')}}</a></div>
                            <div><a href="#" class="meta-chat">{{$video->category->name}}</a></div>
                        </div>
                        <h3 class="heading"><a href="{{$video->alamat_url}}">{{$video->title}}</a></h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <div class="alert alert-info">
                    Tidak ada Video
                </div>
            </div>
            @endforelse
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@stop