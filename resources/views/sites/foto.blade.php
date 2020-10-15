@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/sites/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Foto <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Foto</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="mb-5">
            @isset($category)
            <h1>Kategori : {{ $category->name }}</h1>
            @else
            <h4>Semua Kategori </h4>
            @endisset
        </div>
        <div class="row d-flex">
            @forelse ($photos as $photo)
            <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{$photo->takeImage}}');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">{{$photo->created_at->format('d F, Y')}}</a></div>
                            <div><a href="#">{{$photo->author->name}}</a></div>
                            <div><a href="/category/{{ $photo->category->slug}}/photo" class="meta-chat">{{$photo->category->name}}</a></div>
                        </div>
                        <h3 class="heading"><a href="#">{{ $photo->title }}</a></h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <div class="alert alert-info">
                    Tidak ada Photo
                </div>
            </div>
            @endforelse
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{ $photos->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@stop