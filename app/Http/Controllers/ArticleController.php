<?php

namespace App\Http\Controllers;

use App\{Article, Tag};
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('sites.artikel', [
            'articles' => Article::latest()->paginate(4),
        ]);
    }

    public function show(Article $article)
    {
        $articles = Article::latest()->paginate(3);
        return view('sites.single', compact('article', 'articles'));
    }

    public function tampil(Tag $tag)
    {
        $articles = $tag->articles()->latest()->paginate(8);
        return view('sites.artikel', compact('articles', 'tag'));
    }
}
