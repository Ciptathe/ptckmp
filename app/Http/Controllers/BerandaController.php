<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $var_nama = "Cipta THe";
        return view('HalamanIndex.Viewdashboard', compact('var_nama'));
    }
    public function fungsihalamanlampu()
    {
        $var_nama = "Cipta THe";
        return view('Halaman.viewhalamanlampu', compact('var_nama'));
    }
    public function fungsihalamanrab()
    {
        $var_nama = "Cipta THe";
        return view('Halaman.viewhalamanrab', compact('var_nama'));
    }
 
}
