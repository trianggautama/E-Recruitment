<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Lowongan;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function depan(){
        $berita = Berita::latest()->get();
        return view('welcome',compact('berita'));
    }

    public function lowonganDetail($uuid){
        $berita = Berita::where('uuid',$uuid)->first();
        return view('lowonganDetail',compact('berita'));
    }

    public function lowonganInput($uuid){
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        return view('lowonganInput',compact('lowongan'));
    }
}
