@extends('layouts.admin.master')

@push('header')
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="/admin/plugins/ekko-lightbox/ekko-lightbox.css">
@endpush
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
                    <li class="breadcrumb-item"><a href="/adminlte">Home</a></li>
                    <li class="breadcrumb-item active">Foto</li>
                </ol>
            </div>
        </div><!-- /.row -->
        @canany(['isAdmin', 'isCreator'])
        <div class="row">
            <div>
                <a href="/photos/create" class="btn btn-primary"> Buat Konten Foto </a>
            </div>
        </div>
        @endcanany
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-4">
                @forelse ($photos as $photo)
                <div class="card mb-4">
                    @if($photo->thumbnail)
                    <a href="{{$photo->takeImage}}" data-toggle="lightbox">
                        <img style="height:400px; object-fit: cover; object-position: center;" class="card-img-top img-fluid mb-2" src="{{$photo->takeImage}}" alt="">
                    </a>
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
                        @canany(['isAdmin', 'isCreator'])
                        <div class="row ml-2">
                            <!-- tombol delete -->
                            <form action="/photos/{{ $photo->slug}}/delete" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mr-2" title="Delete Foto" onclick="return confirm('Yakin hapus foto?')" type="submit">Delete</button>
                            </form>
                            <a href="/photos/{{$photo->slug}}/edit" class="btn btn-success">Edit</a>
                        </div>
                        @endcanany
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
    </div>



    <div class="d-flex justify-content-center">
        {{ $photos->links() }}
    </div>

</section>

@stop

@push('footermaster')
<!-- Ekko Lightbox -->
<script src="/admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });
</script>
@endpush