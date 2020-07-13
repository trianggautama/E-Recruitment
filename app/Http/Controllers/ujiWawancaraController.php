<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ujiWawancaraController extends Controller
{
    public function index() 
    {
        $now = Carbon::now()->format('Ymd');
        $lowongan = Lowongan::latest()->get();
        $data = [];
        return view('admin.ujiWawancara.index', compact('lowongan', 'now', 'data'));
    }

    public function edit() 
    {
        $lowongan = Lowongan::latest()->get();
        return view('admin.ujiWawancara.edit',compact('lowongan'));
    }

    public function show() 
    {

        return view('admin.ujiWawancara.show');
    }

    public function rincianEdit() 
    {
        return view('admin.ujiWawancara.rincianEdit');
    }
}
