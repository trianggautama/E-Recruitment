<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        return view('admin.pendidikan.index');
    }

    public function edit()
    {
        return view('admin.pendidikan.edit');
    }
}
