@extends('layouts.admin.utama', ['title' => 'Buat Berita'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> Artikel Baru </div>
                <div class="card-body">
                    <form action="/berita/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <div class="invalid-feedback mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="body"> Isi Artikel </label>
                            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body')
                            <div class="invalid-feedback mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop