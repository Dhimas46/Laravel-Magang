<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
class ExtracurricularController extends Controller
{
  public function index()
    {
      $ekskul = Extracurricular::with('students')->get();
      $data = array(
        'ekskul' =>$ekskul
      );
      return view('extracurricular.get', $data);
    }

    public function show($id)
    {
      $ekskul = Extracurricular::with('students')->findOrFail($id);
      $data = array(
        'ekskul' => $ekskul
      );
      return view('extracurricular.detail', $data);
    }
}
