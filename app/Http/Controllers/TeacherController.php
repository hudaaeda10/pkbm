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

    public function store()
    {
        // validasi
        $attr = $this->requestValidate();

        $teacher = Teacher::create($attr);
        //pesan flash message
        session()->flash('success', 'Data Guru  telah dibuat');

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

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        session()->flash('success', 'Data Guru Telah dihapus');
        return redirect()->to('/admin/teachers');
    }

    public function requestValidate()
    {
        return request()->validate([
            // 'thumbnail' => 'image|mimes:jpeg, jpg, png, svg, PNG, JPEG|max:2048',
            'nama_depan' => 'required|min:3',
            'nama_belakang' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'jabatan' => 'required',
            'no_handphone' => 'required',
        ]);
    }
}
