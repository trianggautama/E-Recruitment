<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hasilAkhirController extends Controller
{
    public function index()
    {
        
        return view('admin.hasilAkhir.index');
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
        
        return view('admin.hasilAkhir.show');
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
