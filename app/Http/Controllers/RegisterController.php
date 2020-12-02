<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function show()
    {
        return view('sites.daftar');
    }

    public function store(Request $request)
    {
        $attr = $this->requestValidate();

        $user = new \App\User;
        $user->role = 'student';
        $user->name = $attr['nama_depan'];
        $user->username = $attr['nama_depan'];
        $user->email = $attr['email'];
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        Student::create([
            'user_id' => $user->id,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'kelas_paket' => $request->kelas_paket,
            'alamat' => $request->alamat
        ]);

        session()->flash('success', 'Pendaftaran mu sudah terkirim');
        return redirect()->to('/daftar');
    }

    public function requestValidate()
    {
        return request()->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'email' => 'required',
            'kelas_paket' => 'required',
            'alamat' => 'required',
        ]);
    }
}
