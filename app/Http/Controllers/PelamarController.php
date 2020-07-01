<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index($uuid){
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        return view('admin.pelamar.index',compact('lowongan'));
    }

    public function show($uuid){
        return view('admin.pelamar.show');
    }

    public function edit($uuid){
        return view('admin.pelamar.edit');
    }
}
