<?php

namespace App\Http\Controllers;

use App\Article;
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
        return view('sites.single', compact('article'));
    }
}
