<?php

namespace App\Http\Controllers;

use App\{Article, Category, Tag};
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
        return view('admin.news.create', [
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function store()
    {
        // validasi
        $attr = $this->requestValidate();

        //assign title to slug
        $attr['slug'] = \Str::slug(request('title'));
        $attr['category_id'] = request('category');

        //create new article
        $article = Article::create($attr);
        $article->tags()->attach(request('tags'));


        //pesan flash message
        session()->flash('success', 'Artikel baru telah dibuat');

        return redirect()->to('/article');
    }

    public function edit(Article $article)
    {
        return view('admin.news.edit', [
            'article' => $article,
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function update(Article $article)
    {
        // validasi
        $attr = $this->requestValidate();
        $attr['category_id'] = request('category');
        // update data
        $article->update($attr);
        $article->tags()->sync(request('tags'));

        session()->flash('success', 'Artikel baru telah di Update');
        return redirect()->to('/article');
    }

    public function requestValidate()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
            'category' => 'required',
            'tags' => 'array|required',
        ]);
    }

    public function destroy(Article $article)
    {
        $article->tags()->detach();
        $article->delete();

        session()->flash('delete', "Artikel telah di hapus");
        return redirect('/article');
    }
}
