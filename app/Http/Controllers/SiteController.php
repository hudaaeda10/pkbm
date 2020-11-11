<?php

namespace App\Http\Controllers;

use App\{Article};
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $articles = Article::latest()->paginate(3);
        return view('sites.beranda', compact('articles'));
    }
}
