<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Teacher $teacher)
    {
        $teachers = Teacher::latest()->paginate(5);
        return view('admin.guru.index', compact('teachers', 'teacher'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        // validasi
        $attr = $this->requestValidate();

        $teacher = Teacher::create($attr);
        //pesan flash message
        session()->flash('success', 'Teacher baru telah dibuat');

        return redirect()->to('/admin/teachers');
    }


    public function profile(Teacher $teacher)
    {
        return view('admin.guru.profile', compact('teacher'));
    }

    public function update(Teacher $teacher)
    {
        $attr = $this->requestValidate();
        if (request()->file('avatar')) {
            \Storage::delete($teacher->avatar);
            $avatar = request()->file('avatar')->store("images/guru");
        } else {
            $avatar = $teacher->avatar;
        }
        $attr['avatar'] = $avatar;
        $teacher->update($attr);
        session()->flash('success', 'Guru Telah terupdate');
        return redirect()->back();
    }

    public function requestValidate()
    {
        return request()->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            // 'email' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'no_handphone' => 'required',
        ]);
    }
}
