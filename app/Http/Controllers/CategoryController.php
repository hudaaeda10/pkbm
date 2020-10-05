<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $articles = $category->articles()->latest()->paginate(8);
        return view('admin.news.index', compact('articles', 'category'));
    }

    public function tampil(Category $category)
    {
        $articles = $category->articles()->latest()->paginate(4);
        return view('sites.artikel', compact('articles', 'category'));
    }
}
