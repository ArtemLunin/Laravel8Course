<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function students() {
       // получение всех полей
        $students = Student::all();

        return view('students', [
            "students" => $students
        ]);
    }
}
