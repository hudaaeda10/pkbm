<?php

namespace App\Http\Controllers;

use App\{Article, Category, Tag};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->paginate(4);
        $categories = Article::limit(5);
        return view('admin.news.index', compact('articles', 'categories'));
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
        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;
        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("images/article") : null;
        $attr['user_id'] = 1;

        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;

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
        if (request()->file('thumbnail')) {
            \Storage::delete($article->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/article");
        } else {
            $thumbnail = $article->thumbnail;
        }



        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;
        // update data
        $article->update($attr);
        $article->tags()->sync(request('tags'));

        session()->flash('success', 'Artikel baru telah di Update');
        return redirect()->to('/article');
    }

    public function destroy(Article $article)
    {
        \Storage::delete($article->thumbnail);
        $article->tags()->detach();
        $article->delete();
        session()->flash('delete', "Artikel telah di hapus");
        return redirect('/article');
    }

    public function requestValidate()
    {
        return request()->validate([
            'thumbnail' => 'image|mimes:jpeg, jpg, png, svg, PNG, JPEG|max:2048',
            'title' => 'required|min:3',
            'body' => 'required',
            'category' => 'required',
            'tags' => 'array|required',

        ]);
    }
}
