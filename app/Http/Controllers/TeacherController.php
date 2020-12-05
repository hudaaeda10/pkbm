<?php

namespace App\Http\Controllers;

use App\{Teacher, User};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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


        $user = new \App\User;
        $user->role = 'teacher';
        $user->name = $attr['nama_depan'];
        $user->username = strtolower($attr['nama_depan']);
        $user->email = $attr['email'];
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        // $attr['user_id'] = $user->id;
        $teacher = Teacher::create([
            'user_id' => $user->id,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'pendidikan' => $request->pendidikan,
            'no_handphone' => $request->no_handphone,
        ]);
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
        $user = User::where('id', $teacher->user_id)->first();
        $attr['avatar'] = $avatar;
        $user['email'] = $attr['email'];
        $teacher->update($attr);
        $user->update($attr);
        session()->flash('success', 'Guru Telah terupdate');
        return redirect()->back();
    }

    // public function destroy($idteacher)
    // {
    //     Teacher::findOrFail($idteacher)->delete();
    //     session()->flash('success', 'Data guru telah dihapus.');
    //     return redirect()->back();
    // }

    public function requestValidate()
    {
        return request()->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required|unique:users',
        ]);
    }
}
