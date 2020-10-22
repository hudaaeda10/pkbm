<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use Illuminate\Http\Request;

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

    public function store()
    {

        // validasi
        $attr = $this->requestValidate();

        $student = Student::create($attr);
        //pesan flash message
        session()->flash('success', 'Siswa baru telah dibuat');

        return redirect()->to('/admin/students');
    }

    public function edit(Student $student)
    {
        return view('admin.siswa.edit', compact('student'));
    }

    //guru untuk update murid
    public function update(Student $student)
    {
        $attr = $this->requestValidate();
        if (request()->file('avatar')) {
            \Storage::delete($student->avatar);
            $avatar = request()->file('avatar')->store("images/siswa");
        } else {
            $avatar = $student->avatar;
        }
        $attr['avatar'] = $avatar;
        $student->update($attr);
        session()->flash('success', 'Siswa Telah terupdate');
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
        $attr['avatar'] = $avatar;
        $student->update($attr);
        session()->flash('success', 'Siswa Telah terupdate');
        return redirect()->back();
    }

    public function destroy(Student $student)
    {
        $student->delete();
        session()->flash('success', 'Siswa Telah dihapus');
        return redirect()->to('/admin/students');
    }


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
            'pekerjaan' => 'required',
            'kelas_paket' => 'required',
            'alamat' => 'required',
        ]);
    }
}
