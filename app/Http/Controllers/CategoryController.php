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

    //video-admin
    public function video(Category $category)
    {
        $videos = $category->videos()->latest()->paginate(4);
        return view('admin.video.index', compact('videos', 'category'));
    }

    //video-site
    public function showvideo(Category $category)
    {
        $videos = $category->videos()->latest()->paginate(4);
        return view('sites.video', compact('videos', 'category'));
    }

    //photo-admin
    public function photo(Category $category)
    {
        $photos = $category->photos()->latest()->paginate(4);
        return view('admin.photo.index', compact('photos', 'category'));
    }

    //photo-sites
    public function showphoto(Category $category)
    {
        $photos = $category->photos()->latest()->paginate(4);
        return view('sites.foto', compact('photos', 'category'));
    }

    public function tampil(Category $category)
    {
        $articles = $category->articles()->latest()->paginate(4);
        return view('sites.artikel', compact('articles', 'category'));
    }
}
