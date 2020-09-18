<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function show(Article $article)
    {
        return view('admin.berita', compact('article'));
    }
}
