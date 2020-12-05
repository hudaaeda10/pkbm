@extends('layouts.admin.master')

@section('title', $article->title)

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            @if($article->thumbnail)
                            <img style="height: 550px; object-fit:cover; object-position:top;" class="rounder w-100" src="{{ $article->takeImage }}" alt="gambar post">
                            @endif
                            <h1>{{ $article->title }}</h1>
                            <div class="text-secondary ">
                                <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }} </a>
                                &middot; {{ $article->created_at->format("d F, Y") }}
                                &middot;
                                @foreach ($article->tags as $tag)
                                <a href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                                @endforeach
                                <div class="media my-3">
                                    <!-- <img width="60" class="rounded-circle mr-3" src="/admin/img/default-user.png"> -->
                                    <div class="media-body">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p> {!! nl2br($article->body) !!}</p>
                            @canany(['isAdmin', 'isCreator'])
                            <div class="flex">
                                <button type="button" class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#exampleModal">
                                    Delete
                                </button>
                                <a href="/article/{{ $article->slug}}/edit" class="btn btn-success btn-sm">Edit</a>
                            </div>
                            @endcanany


                            <!-- Modal -->
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
                                                <div>{{ $article->title }}</div>
                                                <div class="text-secondary">
                                                    <div class="small"> Tanggal Published: {{ $article->created_at->format('d F, Y') }} </div>

                                                </div>
                                            </div>

                                            <form action="/article/{{ $article->slug}}/delete" method="post">
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
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@stop