<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $articles = $tag->articles()->latest()->paginate(8);
        return view('admin.news.index', compact('articles', 'tag'));
    }
}
