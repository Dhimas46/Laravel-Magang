<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
      $keyword = $request->keyword;
      $student = Student::with('class')
                ->where('name', 'LIKE', '%'.$keyword.'%')
                ->orWhere('gender', $keyword)
                ->orWhere('nis', 'LIKE', '%'.$keyword.'%')
                ->orWhereHas('class', function($query) use($keyword){
                  $query->where('name', 'LIKE', '%'.$keyword.'%');
                })
                ->paginate(10);
      $data = array(
        "studentList" => $student,
        'keyword' => $keyword
      );
      return view('student.get', $data);
    }

    public function show($id)
    {
    $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
    $data = array(
      'student' => $student
    );
    return view('student.detail', $data);
    }

    public function create()
    {
      $class = Kelas::select('id', 'name')->get();
      $data = array (
        'class' => $class,
      );
      return view('student.add', $data);
    }

    public function store(StudentCreateRequest $request)
    {
      $newName = '';

      if($request->file('photo'))
      {
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
        $request->file('photo')->storeAs('img', $newName);
      }
      $request['image'] = $newName;
      $student = Student::create($request->all());
      session()->flash('success', 'Student Data Saved Successfully');
      return redirect('/student');
    }

    public function edit(Request $request, $id)
    {
      $student = Student::findOrFail($id);
      $class = Kelas::where('id', '!=', $student->class_id)->get(['id', 'name']);

      $data = array (
        'class' => $class,
        'student' =>$student
      );
      return view('student.edit', $data);
    }

    public function update(Request $request, $id)
    {
      $student = Student::findOrFail($id);
      $student->update($request->all());
      session()->flash('success', 'Student Data Saved Successfully');
      return redirect('/student');
    }

    public function delete($id)
    {
        //$deleteStudent = DB::table('students')->where('id', $id)->delete();
        $delete = Student::findOrFail($id);
        $delete->delete();

        session()->flash('success', 'Student Data Deleted Successfully');
        return redirect('/student');
    }
    public function deletedStudent()
    {
        //$deleteStudent = DB::table('students')->where('id', $id)->delete();
        $deletedStudent = Student::onlyTrashed()->get();
        $data = array(
          'student' => $deletedStudent,
        );
        return view('student.deleted', $data);
    }
    public function restore($id)
    {
      $deletedStudent = Student::withTrashed()->where('id', $id)->restore();
      session()->flash('success', 'Student Data Restored Successfully');
      return redirect('/student');
    }
}
