<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('sites.daftar');
    }

    public function store(Request $request)
    {
        Student::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'kelas_paket' => $request->kelas_paket,
            'alamat' => $request->alamat
        ]);

        return redirect()->to('/beranda');
    }
}
