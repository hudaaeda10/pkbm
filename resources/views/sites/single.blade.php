@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url(&quot;/sites//images/bg_2.jpg&quot;); background-position: 50% 5px;" data-stellar-background-ratio="0.5">
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
                    <h3>Recent Blog</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(/sites/images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Nama Artikel</a>
                            </h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span>25 Oktober 2020</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <h3>Tag</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">home</a>
                        <a href="#" class="tag-cloud-link">builder</a>
                        <a href="#" class="tag-cloud-link">build</a>
                        <a href="#" class="tag-cloud-link">create</a>
                        <a href="#" class="tag-cloud-link">make</a>
                        <a href="#" class="tag-cloud-link">construction</a>
                        <a href="#" class="tag-cloud-link">house</a>
                        <a href="#" class="tag-cloud-link">architect</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop