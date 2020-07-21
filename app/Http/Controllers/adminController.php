<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Lowongan;
use App\Pendidikan_terakhir;
use App\Peserta;
use App\Posisi;
use App\Soal;
use App\Uji_kompetensi;
use App\Uji_wawancara_peserta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $posisi = Posisi::count();
        $lowongan = Lowongan::count();
        $pelamar = Peserta::count();
        $soal    = Soal::count();
        $ujiKompetensi = Uji_kompetensi::count();
        $lulus = Uji_wawancara_peserta::where('status',1)->count();
        return view('admin.index',compact('posisi','lowongan','pelamar','soal','ujiKompetensi','lulus'));
    }

    public function depan(){
        $berita = Berita::latest()->get();
        return view('welcome',compact('berita'));
    }

    public function lowonganDetail($uuid){
        $now = Carbon::now()->format('Y-m-d');
        $berita = Berita::where('uuid',$uuid)->first();
        return view('lowonganDetail',compact('berita','now'));
    }

    public function lowonganInput($uuid){
        $pendidikan = Pendidikan_terakhir::latest()->get();
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        return view('lowonganInput',compact('lowongan','pendidikan'));
    }
}
