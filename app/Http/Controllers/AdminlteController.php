<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class AdminlteController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'articles' => Article::latest()->paginate(12),
        ]);
    }
}
