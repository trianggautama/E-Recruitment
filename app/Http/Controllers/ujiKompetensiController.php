<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;

class ujiKompetensiController extends Controller
{
    public function index(){

        return view('admin.ujiKompetensi.index');
    }

    public function edit(){

        return view('admin.ujiKompetensi.edit');
    }

    public function show(){

        return view('admin.ujiKompetensi.show');
    }

    public function input(){

        $soals = Soal::oldest()->get();
        return view('user.ujiKompetensi.input',compact('soals'));
    }

    public function hasil(){

        return view('user.ujiKompetensi.hasil');
    }
}
