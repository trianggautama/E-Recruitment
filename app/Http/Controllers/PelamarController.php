<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Peserta;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PelamarController extends Controller
{
    public function index($uuid)
    {
        $lowongan = Lowongan::where('uuid', $uuid)->first();
        return view('admin.pelamar.index', compact('lowongan'));
    }

    public function store(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->username = $req->NIK;
        $user->password = Hash::make($req->NIK);
        $user->role = 1;

        $user->save();
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $user->foto = $foto;
        }
        $user->update();

        $data = $user->peserta()->create($req->all());

        return redirect()->route('depan')->withSuccess('Berhasil input lamaran, silahkan login menggunakan NIK sebagai username & password');
    }

    public function show($uuid)
    {
        $data = Peserta::where('uuid', $uuid)->first();
        return view('admin.pelamar.show', compact('data'));
    }

    public function verifPeserta(Request $req, $uuid)
    {
        $data = User::where('uuid', $uuid)->first();

        $data->status = $req->status;
        $data->update();

        return back()->withSuccess('Berhasil verifikasi');
    }

    public function edit($uuid)
    {
        return view('admin.pelamar.edit');
    }

    public function lulusSeleksi()
    {
        $data = Lowongan::latest()->get();
        return view('admin.pelamar.seleksiBerkas', compact('data'));
    }

    public function lulusSeleksiShow($uuid)
    {
        $lowongan = Lowongan::where('uuid', $uuid)->first();
        return view('admin.pelamar.seleksiBerkasShow', compact('lowongan'));
    }
}
