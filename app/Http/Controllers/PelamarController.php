<?php

namespace App\Http\Controllers;

use App\Lampiran;
use App\Lowongan;
use App\Peserta;
use App\User;
use Illuminate\Http\Request;
use App\Mail\NotifVerifikasi;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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

        $lampiran = new Lampiran;
        $lampiran->user_id = $user->id;
        if ($req->doc_ijazah != null) {
            $img = $req->file('doc_ijazah');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('lampiran/ijazah', $foto);
            $lampiran->doc_ijazah = $foto;
        }
        if ($req->foto_ktp != null) {
            $img = $req->file('foto_ktp');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('lampiran/ktp', $foto);
            $lampiran->foto_ktp = $foto;
        }
        if ($req->doc_transkip != null) {
            $img = $req->file('doc_transkip');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('lampiran/transkip', $foto);
            $lampiran->doc_transkip = $foto;
        }
        if ($req->doc_npwp != null) {
            $img = $req->file('doc_npwp');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('lampiran/npwp', $foto);
            $lampiran->doc_npwp = $foto;
        }

        $lampiran->save();

        toast('Berhasil input lamaran, silahkan login menggunakan NIK sebagai username & password','success');
        return redirect()->route('depan');
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

        Mail::to($data->peserta->email)->send(new NotifVerifikasi($data));

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
        $data = Peserta::whereHas('user', function ($query) {
            $query->where('status', 1);
        })->with('user')->get();
        return view('admin.pelamar.seleksiBerkasShow', compact('lowongan', 'data'));
    }

    public function filter($uuid)
    {
        $lowongan = Lowongan::where('uuid', $uuid)->first();
        return view('admin.pelamar.filter', compact('lowongan'));
    }
}
