<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function lowonganDetail($uuid){

        return view('lowonganDetail');
    }

    public function lowonganInput($uuid){

        return view('lowonganInput');
    }
}
