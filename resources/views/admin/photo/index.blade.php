@extends('layouts.admin.master')

@section('headeradmin')
<link rel="stylesheet" href="{{asset('/sites')}}/css/animate.css">

<link rel="stylesheet" href="{{asset('/sites')}}/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/sites')}}/css/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('/sites')}}/css/magnific-popup.css">

<link rel="stylesheet" href="{{asset('/sites')}}/css/flaticon.css">
<link rel="stylesheet" href="{{asset('/sites')}}/css/style.css">
@stop

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @isset($category)
                <h1 class="m-0 text-dark">{{$category->name}}</h1>
                @endisset

                @if (!isset($category))
                <h1 class="m-0 text-dark">Pengelolaan Foto PKBM TAMAN SISWA</h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Photo v1</li>
                </ol>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div>
                <a href="/photos/create" class="btn btn-primary"> Buat Konten Foto </a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            @forelse ($photos as $photo)
            <div class="card mb-4">
                @if($photo->thumbnail)
                <img style="height:400px; object-fit: cover; object-position: center;" class="card-img-top" src="{{$photo->takeImage}}" alt="">
                @endif
                <div class="card-body">
                    <div>
                        <a href="/photos/{{ $photo->category->slug}}">
                            <small> {{ $photo->category->name }}</small>
                        </a>
                    </div>
                    <h5>{{$photo->title}}</h5>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="text-secondary">
                            <small>
                                Published on {{$photo->created_at->diffForHumans()}}
                            </small>
                        </div>
                    </div>
                    <div class="my-3">
                        <button type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#exampleModal">Delete</button>
                        <a href="/photos/{{$photo->slug}}/edit" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-md-6">
                <div class="alert alert-info">
                    Tidak ada Photo
                </div>
            </div>
            @endforelse
        </div>
    </div>



    <div class="d-flex justify-content-center">
        {{ $photos->links() }}
    </div>

</section>

<!-- Modal delete-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div>{{ $photo->title }}</div>
                </div>

                <form action="/photos/{{ $photo->slug}}/delete" method="post">
                    @csrf
                    @method('delete')
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-danger mr-2" type="submit">Ya</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>












@stop