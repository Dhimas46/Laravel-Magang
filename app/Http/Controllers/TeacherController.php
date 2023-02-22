<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    public function index(){
      $teacher = Teacher::all();
      $data = array(
        "teacherList" => $teacher,
      );
      return view('teacher.get', $data);
    }

    public function show($id){
      $teacher = Teacher::with('class.students')->findOrFail($id);
      $data = array(
        "teacher" => $teacher,
      );
      return view('teacher.detail', $data);
    }
}
