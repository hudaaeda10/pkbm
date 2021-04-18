@extends('layouts.master')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/sites//images/kegiatan.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('beranda')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Program <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Program</h1>
            </div>
        </div>
    </div>
</section>

@include('komponen.tabel')
@stop