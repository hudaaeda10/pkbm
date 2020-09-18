<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function show()
    {
        return view('sites.foto');
    }
}
