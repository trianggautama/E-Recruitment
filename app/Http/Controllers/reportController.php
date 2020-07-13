<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Peserta;
use App\Uji_kompetensi;
use App\Uji_kompetensi_peserta;
use Illuminate\Http\Request;
use PDF;

class reportController extends Controller
{
    public function biodataPelamar($uuid)
    {
        $data     = Peserta::where('uuid',$uuid)->first();
        $pdf      = PDF::loadView('formCetak.biodataPelamar', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan biodata Pelamar.pdf');
    }

    public function pelamar($uuid)
    {
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        $data     = Peserta::where('lowongan_id',$lowongan->id)->get();
        $pdf      = PDF::loadView('formCetak.dataPelamar', ['data'=>$data, 'lowongan'=>$lowongan]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pelamar.pdf');
    }

    public function filterPelamar()
    {
        $status = request()->status;
        $lowongan = Lowongan::findOrFail(request()->lowongan_id);
        $data     = Peserta::whereHas('user',function( $query) use ($status){
            $query->where('status',$status);
        })->with('user')->where('lowongan_id',$lowongan->id)->get();
        $pdf      = PDF::loadView('formCetak.filterPelamar', ['data'=>$data,'lowongan'=>$lowongan,'status'=>$status]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pelamar Filter.pdf');
    }

    public function ujiKompetensi($uuid)
    {
        $uji_kompetensi = Uji_kompetensi::where('uuid',$uuid)->first();
        $data     = Uji_kompetensi_peserta::where('uji_kompetensi_id',$uji_kompetensi->id)->get();
        $pdf      = PDF::loadView('formCetak.dataUjiKompetensi', ['data'=>$data, 'uji_kompetensi'=>$uji_kompetensi]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji Kompetensi.pdf');
    }

    public function ujiKompetensiFilter()
    {
        $uji_kompetensi = Uji_kompetensi::findOrFail(request()->uji_id);
        if(request()->status == 1){
            $data     = Uji_kompetensi_peserta::where('uji_kompetensi_id',$uji_kompetensi->id)->where('nilai','>=', 75)->get();
        }else{
            $data     = Uji_kompetensi_peserta::where('uji_kompetensi_id',$uji_kompetensi->id)->where('nilai','<=', 75)->get();
        }
        $status = request()->status;
        $pdf      = PDF::loadView('formCetak.dataUjiKompetensiFilter', ['data'=>$data, 'uji_kompetensi'=>$uji_kompetensi, 'status'=>$status]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji Kompetensi Filter .pdf');
    }

}
