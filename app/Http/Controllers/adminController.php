<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function userIndex(){

        return view('admin.user.index');
    }

    public function posisiIndex(){

        return view('admin.posisi.index');
    }

    public function beritaIndex(){

        return view('admin.berita.index');
    }
}
