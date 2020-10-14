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
                <h1 class="m-0 text-dark">Pengelolaan Video PKBM TAMAN SISWA</h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Video v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Video PKBM TAMAN SISWA</h5>
                        <div class="card-tools">
                            <a href="/videos/create" class="btn btn-info">New Video</a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            @forelse ($videos as $video)
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="card mb-4" style="width: 18rem;">
                                    <a href="{{ $video->alamat_url }}" class="block-20 popup-vimeo d-flex justify-content-center align-items-center" style="background-image: url('{{$video->takeImage}}');">
                                        <span class="fa fa-play fa-3x"></span>
                                    </a>
                                    <div class="card-footer d-flex">
                                        <div class="text-secondary">
                                            {{ $video->created_at->format('d M Y')}}
                                        </div>
                                        <div class="d-flex">
                                            <a href="/articles/{{ $video->category->slug }}"> {{ $video->category->name }} </a>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <h5 class="heading"><a href="{{ $video->alamat_url }}">{{ Str::limit($video->title, 20) }}</a></h5>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between">
                                        <!-- tombol delete -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>

                                        <a href="/videos/{{ $video->slug}}/edit" class="btn btn-success">Edit</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-6">
                                <div class="alert alert-info">
                                    Tidak ada Video
                                </div>
                            </div>
                            @endforelse
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $videos->links() }}
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
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
                    <div>{{ $video->title }}</div>
                    <div class="text-secondary">
                        <div class="small"> Tanggal Published: {{ $video->created_at->format('d F, Y') }} </div>

                    </div>
                </div>

                <form action="/videos/{{ $video->slug}}/delete" method="post">
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

@section('footeradmin')
<script src="{{asset('/sites')}}/js/jquery.min.js"></script>
<script src="{{asset('/sites')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('/sites')}}/js/popper.min.js"></script>
<script src="{{asset('/sites')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/sites')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('/sites')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('/sites')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('/sites')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('/sites')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('/sites')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/sites')}}/js/scrollax.min.js"></script>
<script src="{{asset('/sites')}}/js/main.js"></script>
@stop