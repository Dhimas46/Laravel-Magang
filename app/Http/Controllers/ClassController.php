<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
class ClassController extends Controller
{
public function index()
{
  $class = Kelas::get();
  $data = array(
    "classList" => $class,
  );
  return view('class.get', $data);
  }

  public function show($id)
  {
    $class = Kelas::with(['students', 'homeroomTeacher'])->findOrFail($id);
    $data = array(
      "class" => $class,
    );
    return view('class.detail', $data);
    }
}
