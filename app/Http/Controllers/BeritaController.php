<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Lowongan;
use App\Posisi;
use File;
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

        $berita->update();
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
        $data = Berita::where('uuid', $uuid)->first();
        $posisi = Posisi::orderBy('nama', 'asc')->get();

        return view('admin.berita.edit', compact('data', 'posisi'));
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
        $berita = Berita::where('uuid', $uuid)->first();
        $berita->fill($req->all())->save();

        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $berita->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/berita', $foto);
            $berita->foto = $foto;

        }
        $berita->update();
        $lowongan = Lowongan::where('berita_id', $berita->id)->first();
        $lowongan->fill($req->all())->save();

        return redirect()->route('beritaIndex')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::where('uuid', $uuid)->first();
        File::delete('images/berita/' . $berita->foto);
        $berita->delete();
    }
}
