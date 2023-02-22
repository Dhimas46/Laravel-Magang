<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Barang extends Controller
{
    public function index()
    {
      return view('barang.get');
    }
}
