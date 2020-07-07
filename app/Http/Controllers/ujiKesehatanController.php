<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;

class ujiKesehatanController extends Controller
{
    public function index()
    {

        $lowongan = Lowongan::latest()->get();
        return view('admin.ujiKesehatan.index', compact('lowongan'));
    }

    public function edit($uuid)
    {
        return view('admin.ujiKesehatan.edit');
    }

    public function rincianEdit($uuid)
    {
        return view('admin.ujiKesehatan.rincianEdit');
    }

    public function show()
    {

        return view('admin.ujiKesehatan.show');
    }

    public function input()
    {

        return view('user.ujiKompetensi.input', compact('soals'));
    }

    public function hasil()
    {

        return view('user.ujiKompetensi.hasil');
    }
}
