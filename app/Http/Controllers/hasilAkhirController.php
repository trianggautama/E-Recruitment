<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;

class hasilAkhirController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::latest()->get();
        return view('admin.hasilAkhir.index',compact('lowongan'));
    }

    public function store(Request $req)
    {
        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        return view('admin.hasilAkhir.edit');
    }

    public function update(Request $req, $uuid)
    {

        return redirect()->route('hasilAkhirIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {

        return back();

    }

    public function show($uuid)
    {
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        return view('admin.hasilAkhir.show',compact('lowongan'));
    }

    public function pesertaStore(Request $req)
    {

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function rincianEdit($uuid)
    {
        

        return view('admin.hasilAkhir.rincianEdit');
    }

    public function rincianUpdate(Request $req, $uuid)
    {
       
        return redirect()->route('hasilAkhirShow', ['uuid' => 'qqabxjb'])->withSuccess('Data berhasil diubah');
    }

    public function rincianDestroy($uuid)
    {
        return back();

    }

}
