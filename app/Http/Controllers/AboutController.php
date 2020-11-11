<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $teachers = Teacher::first()->paginate(8);
        return view('sites.tentang', compact('teachers'));
    }
}
