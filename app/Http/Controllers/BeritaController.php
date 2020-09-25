<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{

    public function index()
    {
        return view('admin.news.index', [
            'articles' => Article::latest()->paginate(8),
        ]);
    }

    public function show(Article $article)
    {
        return view('admin.news.berita', compact('article'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store()
    {
        // validasi
        $attr = $this->requestValidate();

        //assign title to slug
        $attr['slug'] = \Str::slug(request('title'));

        //create new article
        Article::create($attr);

        //pesan flash message
        session()->flash('success', 'Berita baru telah dibuat');

        return redirect()->to('/berita');
    }

    public function edit(Article $article)
    {
        return view('admin.news.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // validasi
        $attr = $this->requestValidate();

        // update data
        $article->update($attr);

        session()->flash('success', 'Berita baru telah di Update');
        return redirect()->to('/berita');
    }

    public function requestValidate()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        session()->flash('delete', "Berita telah di hapus");
        return redirect('/berita');
    }
}
