@extends('layouts.admin.utama')

@section('title', $article->title)

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p> {{ $article->body }}</p>
</div>
@stop