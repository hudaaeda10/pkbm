@extends('layouts.admin.master')

@section('headeradmin')
<link rel="stylesheet" href="{{asset('/sites')}}/css/animate.css">

<link rel="stylesheet" href="{{asset('/sites')}}/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/sites')}}/css/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('/sites')}}/css/magnific-popup.css">

<link rel="stylesheet" href="{{asset('/sites')}}/css/flaticon.css">
<link rel="stylesheet" href="{{asset('/sites')}}/css/style.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
                        <div class="row d-flex">
                            <div class="col-md-6">
                                @forelse ($videos as $video)
                                <div class="card mb-4" style="width: 37rem;">
                                    <div class="col-md-6 d-flex ftco-animate">
                                        <div class="blog-entry align-self-stretch">

                                            <div class="d-flex justify-content-center my-2">
                                                {!! $video->alamat_url !!}
                                            </div>
                                            <div class="text mt-3">
                                                <div class="meta mb-2">
                                                    <div><a href="#">{{$video->created_at->format('M d, Y')}}</a></div>
                                                    <div><a href="/videos/{{ $video->category->slug }}" class="meta-chat">{{$video->category->name}}</a></div>
                                                </div>
                                                <h3 class="heading">{{$video->title}}</h3>
                                                <div class="row ml-2">
                                                    <!-- tombol delete -->
                                                    <form action="/videos/{{ $video->slug }}/delete" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" title="Delete Video" onclick="return confirm('Yakin hapus video?')" type="submit">Delete</button>
                                                    </form>
                                                    <a href="/videos/{{ $video->slug}}/edit" class="btn btn-success ml-2">Edit</a>
                                                </div>

                                            </div>
                                        </div>
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

                            <div class="d-flex justify-content-center">
                                {{ $videos->links() }}
                            </div>
                        </div>
                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- ./card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>



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
<script src="/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
@stop