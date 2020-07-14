<?php

namespace App\Http\Controllers;

use App\Jawaban_peserta;
use App\Lowongan;
use App\Soal;
use App\Uji_kompetensi;
use App\Uji_kompetensi_peserta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ujiKompetensiController extends Controller
{
    public function index()
    {

        $data = Uji_kompetensi::latest()->get();
        $lowongan = Lowongan::latest()->get();
        $now = Carbon::now()->format('Ymd');
        return view('admin.ujiKompetensi.index', compact('data', 'lowongan', 'now'));
    }

    public function store(Request $req)
    {
        $data = Uji_kompetensi::create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $data = Uji_kompetensi::where('uuid', $uuid)->first();
        $lowongan = Lowongan::latest()->get();
        return view('admin.ujiKompetensi.edit', compact('data', 'lowongan'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Uji_kompetensi::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('ujiKompetensiIndex')->withSuccess('Data berhasil diubah');
    }

    public function show($uuid)
    {
        $data = Uji_kompetensi::where('uuid', $uuid)->first();
        $peserta = Uji_kompetensi_peserta::where('uji_kompetensi_id', $data->id)->get();

        return view('admin.ujiKompetensi.show', compact('data', 'peserta'));
    }

    public function input($uuid)
    {

        $peserta_id = Auth::user()->peserta->id;
        $lowongan = Lowongan::where('uuid', $uuid)->first();
        $data = Uji_kompetensi::where('lowongan_id', $lowongan->id)->first();
        $tesPeserta = Uji_kompetensi_peserta::where('peserta_id', $peserta_id)->where('uji_kompetensi_id', $data->id)->first();

        if (!$tesPeserta) {
            $tesPeserta = new Uji_kompetensi_peserta;
            $tesPeserta->peserta_id = $peserta_id;
            $tesPeserta->uji_kompetensi_id = $data->id;
            $tesPeserta->save();

            $soalData = Soal::all();
            $soals = $soalData->shuffle()->take(20);
            return view('user.ujiKompetensi.input', compact('soals', 'data'));
        } else {

            return back()->withWarning('Anda sudah melakukan uji kompetensi');
        }
    }

    public function inputStore(Request $req)
    {
        $peserta_id = Auth::user()->peserta->id;

        $data = Uji_kompetensi::findOrFail($req->uji_id);
        $tesPeserta = Uji_kompetensi_peserta::where('peserta_id', $peserta_id)->where('uji_kompetensi_id', $data->id)->first();
        $soal = collect($req->soal_id)->filter();
        $pilihan = collect($req->pilihan)->filter();
        for ($i = 0; $i < count($soal); $i++) {
            $jawabanSoal = Soal::findOrFail($soal[$i]);
            if ($jawabanSoal->kunci == $pilihan[$i]) {
                $bs = 1;
            } else {
                $bs = 0;
            }
            $jawaban = new Jawaban_peserta();
            $jawaban->soal_id = $soal[$i];
            $jawaban->jawaban = $pilihan[$i];
            $jawaban->bs = $bs;
            $jawaban->uji_kompetensi_peserta_id = $tesPeserta->id;
            $jawaban->save();
        }
        $peserta = Jawaban_peserta::where('uji_kompetensi_peserta_id', $tesPeserta->id)->where('bs', 1)->count();
        $tesPeserta->nilai = $peserta * 5;
        $tesPeserta->update();
        return redirect()->route('pelamarIndex')->withSuccess('Berhasil melakukan ujian! Nilai anda adalah : <b>' . $tesPeserta->nilai . '</b>');

    }

    public function hasil()
    {
        $peserta_id = Auth::user()->peserta;
        $tesPeserta = Uji_kompetensi_peserta::where('peserta_id', $peserta_id->id)->first();
        if (!$tesPeserta) {
            return back()->withWarning('Anda belum melakukan ujian');
        }
        $data = Uji_kompetensi::where('lowongan_id', $peserta_id->lowongan_id)->first();
        return view('user.ujiKompetensi.hasil', compact('data'));
    }
}
