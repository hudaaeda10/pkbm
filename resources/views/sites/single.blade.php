@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url(&quot;/sites/images/bg_2.jpg&quot;); background-position: 50% 5px;" data-stellar-background-ratio="0.5">
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
                    <img src="{{ $article->takeImage}}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $article->title }}</h2>
                <p>{!! nl2br($article->body) !!}</p>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate fadeInUp ftco-animated">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="/category/{{ $article->category->slug}}">{{ $article->category->name }}<span class="ion-ios-arrow-forward"></span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <h3>Tag</h3>
                    <div class="tagcloud">
                        @foreach($article->tags as $tag)
                        <a href="{{ route('site.tag.show', $tag->slug)}}" class="tag-cloud-link">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <h3>Artikel Lain</h3>
                    @foreach($articles as $article)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('{{ $article->takeImage}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/artikel/{{ $article->slug}}">{{ $article->title }}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> {{ $article->created_at->format('m. d, Y') }}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{ $article->author->name }}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@stop