<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Soal;
use App\Uji_kompetensi;

class ujiKompetensiController extends Controller
{
    public function index()
    {

        $data = Uji_kompetensi::latest()->get();
        $lowongan = Lowongan::latest()->get();
        return view('admin.ujiKompetensi.index', compact('data', 'lowongan'));
    }

    public function edit($uuid)
    {
        $data = Uji_kompetensi::where('uuid', $uuid)->first();
        return view('admin.ujiKompetensi.edit', compact('data'));
    }

    public function show()
    {

        return view('admin.ujiKompetensi.show');
    }

    public function input()
    {

        $soals = Soal::oldest()->get();
        return view('user.ujiKompetensi.input', compact('soals'));
    }

    public function hasil()
    {

        return view('user.ujiKompetensi.hasil');
    }
}
