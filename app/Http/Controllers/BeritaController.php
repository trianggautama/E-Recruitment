<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Posisi;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::orderBy('id', 'desc')->get();
        // foreach ($data as $d) {
        //     foreach ($d->lowongan->posisi as $posisi) {

        //         dd($posisi);
        //     }
        // }
        $posisi = Posisi::orderBy('nama', 'asc')->get();
        return view('admin.berita.index', compact('data', 'posisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posisi = Posisi::orderBy('nama', 'asc')->get();

        return view('admin.berita.add', compact('posisi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $berita = Berita::create($req->all());
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $berita->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/berita', $foto);
            $berita->foto = $foto;

        }
        $lowongan = $berita->lowongan()->create($req->all());

        return redirect()->route('beritaIndex')->withSuccess('Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $data = Berita::where('uuid', $uuid)->first();
        return view('admin.berita.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        return view('admin.berita.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
