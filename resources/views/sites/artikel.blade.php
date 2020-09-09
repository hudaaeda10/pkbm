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
                    <div class="story-wrap d-md-flex align-items-center">
                        <div class="img" style="background-image: url({{asset('sites')}}/images/image_1.jpg);"></div>
                        <div class="text pl-md-5">
                            <h4>Story About: <span>John Doe</span></h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>

                    <div class="story-wrap d-md-flex align-items-center">
                        <div class="img" style="background-image: url({{asset('sites')}}/images/image_2.jpg);"></div>
                        <div class="text pl-md-5">
                            <h4>Story About: <span>John Doe</span></h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>

                    <div class="story-wrap d-md-flex align-items-center">
                        <div class="img" style="background-image: url({{asset('sites')}}/images/image_3.jpg);"></div>
                        <div class="text pl-md-5">
                            <h4>Story About: <span>John Doe</span></h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>

                    <div class="story-wrap d-md-flex align-items-center">
                        <div class="img" style="background-image: url({{asset('sites')}}/images/image_4.jpg);"></div>
                        <div class="text pl-md-5">
                            <h4>Story About: <span>John Doe</span></h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>

                    <div class="story-wrap d-md-flex align-items-center">
                        <div class="img" style="background-image: url({{asset('sites')}}/images/image_5.jpg);"></div>
                        <div class="text pl-md-5">
                            <h4>Story About: <span>John Doe</span></h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- .section -->
@stop