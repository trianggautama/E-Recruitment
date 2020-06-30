<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $data = Lowongan::latest()->get();
        return view('admin.lowongan.index',compact('data'));
    }
}
