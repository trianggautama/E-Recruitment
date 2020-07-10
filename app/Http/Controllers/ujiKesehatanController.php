<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Peserta;
use App\Uji_kesehatan;
use App\Uji_kesehatan_peserta;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class ujiKesehatanController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->format('Ymd');
        $lowongan = Lowongan::latest()->get();
        $data = Uji_kesehatan::latest()->get();
        return view('admin.ujiKesehatan.index', compact('lowongan', 'now', 'data'));
    }

    public function store(Request $req)
    {
        $data = Uji_kesehatan::create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $data = Uji_kesehatan::where('uuid', $uuid)->first();

        return view('admin.ujiKesehatan.edit', compact('data'));
    }

    public function update($uuid)
    {
        $data = Uji_kesehatan::where('uuid', $uuid)->first();

        $data->fill($req->all())->save();

        return redirect()->route('ujiKesehatanIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Uji_kesehatan::where('uuid', $uuid)->first()->delete();

        return back();

    }

    public function show($uuid)
    {
        $ujiKesehatan = Uji_kesehatan::where('uuid', $uuid)->first();
        $data = Uji_kesehatan_peserta::where('uji_kesehatan_id', $ujiKesehatan->id)->latest()->get();
        $peserta = Peserta::whereHas('uji_kompetensi_peserta', function ($query) {
            $query->where('nilai', '<=', 75);
        })->with('uji_kompetensi_peserta')->get();
        return view('admin.ujiKesehatan.show', compact('data', 'peserta', 'ujiKesehatan'));
    }

    public function pesertaStore(Request $req)
    {
        $data = new Uji_kesehatan_peserta;

        $data->uji_kesehatan_id = $req->uji_kesehatan_id;
        $data->peserta_id = $req->peserta_id;
        $data->detak_jantung = $req->detak_jantung;
        $data->tes_lari = $req->tes_lari;
        $data->save();

        if ($req->surat_kesehatan != null) {
            $img = $req->file('surat_kesehatan');
            $surat_kesehatanExt = $img->getClientOriginalExtension();
            $surat_kesehatanName = $data->id;
            $surat_kesehatan = $surat_kesehatanName . '.' . $surat_kesehatanExt;
            $img->move('lampiran/suratKesehatan', $surat_kesehatan);
            $data->surat_kesehatan = $surat_kesehatan;
        }
        if ($req->surat_narkoba != null) {
            $img = $req->file('surat_narkoba');
            $surat_narkobaExt = $img->getClientOriginalExtension();
            $surat_narkobaName = $data->id;
            $surat_narkoba = $surat_narkobaName . '.' . $surat_narkobaExt;
            $img->move('lampiran/suratNarkoba', $surat_narkoba);
            $data->surat_narkoba = $surat_narkoba;
        }

        $data->update();

        return back()->withSuccess('Data berhasil disimpan');

    }

    public function rincianEdit($uuid)
    {
        $data = Uji_kesehatan_peserta::where('uuid', $uuid)->first();
        $peserta = Peserta::whereHas('uji_kompetensi_peserta', function ($query) {
            $query->where('nilai', '<=', 75);
        })->with('uji_kompetensi_peserta')->get();

        return view('admin.ujiKesehatan.rincianEdit', compact('data', 'peserta'));
    }

    public function rincianUpdate(Request $req, $uuid)
    {
        $data = Uji_kesehatan_peserta::where('uuid', $uuid)->first();

        $data->detak_jantung = $req->detak_jantung;
        $data->tes_lari = $req->tes_lari;

        if ($req->surat_kesehatan != null) {
            $img = $req->file('surat_kesehatan');
            $surat_kesehatanExt = $img->getClientOriginalExtension();
            $surat_kesehatanName = $data->id;
            $surat_kesehatan = $surat_kesehatanName . '.' . $surat_kesehatanExt;
            $img->move('lampiran/suratKesehatan', $surat_kesehatan);
            $data->surat_kesehatan = $surat_kesehatan;
        }
        if ($req->surat_narkoba != null) {
            $img = $req->file('surat_narkoba');
            $surat_narkobaExt = $img->getClientOriginalExtension();
            $surat_narkobaName = $data->id;
            $surat_narkoba = $surat_narkobaName . '.' . $surat_narkobaExt;
            $img->move('lampiran/suratNarkoba', $surat_narkoba);
            $data->surat_narkoba = $surat_narkoba;
        }
        $data->update();

        return redirect()->route('ujiKesehatanShow', ['uuid' => $data->uji_kesehatan->uuid])->withSuccess('Data berhasil diubah');

    }

    public function rincianDestroy($uuid)
    {
        $data = Uji_kesehatan_peserta::where('uuid', $uuid)->first();
        File::delete('lampiran/suratKesehatan/' . $data->surat_kesehatan);
        File::delete('lampiran/suratNarkoba/' . $data->surat_narkoba);
        $data->delete();

        return back();
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