<?php

namespace App\Http\Controllers;

use App\{Student, User};
use App\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        $students = Student::latest()->paginate(5);
        return view('admin.siswa.index', compact('students', 'student'));
    }

    public function tampil(Student $student)
    {
        $courses = Course::all();
        return view('admin.siswa.tampil', compact('student', 'courses'));
    }

    public function store(Request $request)
    {

        // validasi
        $attr = $this->requestValidate();

        $user = new \App\User;
        $user->role = 'student';
        $user->name = $attr['nama_depan'];
        $user->username = strtolower($attr['nama_depan']);
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
        //pesan flash message
        session()->flash('success', 'Siswa baru telah dibuat');

        return redirect()->to('/admin/students');
    }

    // murid untuk update
    public function updatestudent(Student $student)
    {
        $attr = $this->requestValidate();
        if (request()->file('avatar')) {
            \Storage::delete($student->avatar);
            $avatar = request()->file('avatar')->store("images/siswa");
        } else {
            $avatar = $student->avatar;
        }
        $user = User::where('id', $student->user_id)->first();
        $attr['avatar'] = $avatar;
        $user['email'] = $attr['email'];
        $student->update($attr);
        $user->update($attr);
        session()->flash('success', 'Siswa Telah terupdate');
        return redirect()->back();
    }

    // public function destroy($idstudent)
    // {
    //     Student::findOrFail($idstudent)->delete();
    //     session()->flash('success', 'Siswa Telah dihapus');
    //     return redirect()->route('admin.student');
    // }


    public function addnilai(Request $request, $idstudent)
    {
        $student = Student::find($idstudent);
        if ($student->courses()->where('course_id', $request->courses)->exists()) {
            session()->flash('delete', 'Nilai Sudah ada');
            return redirect()->back();
        }
        $student->courses()->attach($request->courses, ['nilai' => $request->nilai]);
        session()->flash('success', 'Nilai Telah masuk');
        return redirect()->back();
    }

    public function deletenilai(Student $student, $idcourse)
    {
        $student->courses()->detach($idcourse);
        session()->flash('delete', 'Mata Pelajaran Telah Di hapus');
        return redirect()->back();
    }

    public function requestValidate()
    {
        return request()->validate([
            // 'thumbnail' => 'image|mimes:jpeg, jpg, png, svg, PNG, JPEG|max:2048',
            'nama_depan' => 'required|min:3',
            'nama_belakang' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'email' => 'required|unique:users',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kelas_paket' => 'required',
        ]);
    }
}
