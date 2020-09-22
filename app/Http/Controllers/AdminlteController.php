<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlteController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
