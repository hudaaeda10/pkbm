<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editnilai(Request $request, $id)
    {
        $student = \App\Student::find($id);
        $student->courses()->updateExistingPivot($request->pk, ['nilai' => $request->value]);
    }
}
