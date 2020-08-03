<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h4,h2{
        font-family:serif;
    }
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
      }
      th{
        text-align: left;
      }
      tr{
          height: 30px;
      }
      td{
        text-align: left;
        height: 30px;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 20px;
         padding: 0px;
     }
     .pemko{
         width:120px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 21%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         padding-top:10px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 4px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="depan/assets/img/logo.png" >
            </div>
            <div class="headtext">
                <h2 style="margin:1px;">PT.TELKOM AKSES</h2>
                <p style="margin:0px;">Karang Mekar, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70236, Telepon :(0511) 3255551</p>
            </div>
            <br>
    </div>
    <div class="container">
        <div class="isi">
        <hr>
            <h2 style="text-align:center; text-transform:uppercase;">DATA ANALISIS PELAMAR {{$lowongan->berita->judul}}</h2>
            <br>
            <table>
                <tr>
                    <td width="40%">Posisi</td>
                    <td>: @foreach(collect($lowongan->posisi) as $l) 
                            {{$l}},
                          @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pendaftaran</td>
                    <td>: {{carbon\carbon::parse($lowongan->tgl_mulai)->translatedFormat('d F Y')}}  -  {{carbon\carbon::parse($lowongan->tgl_selesai)->translatedFormat('d F Y')}}</td> 
                </tr>
                <tr>
                    <td>Pendidikan Minimal</td>
                    <td>: {{$lowongan->pendidikan_terakhir->nama}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:   @if($lowongan->status == 1)
                    <i class="text-success"> Sedang Berlangsung</i>
                    @else
                    <i class="text-primary">Sudah Selesai</i>
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pelamar</td>
                    <td>: {{$lowongan->peserta->count()}} pelamar</td>
                </tr>
                <tr>
                    <td>Jumlah Pelamar yang lolos</td>
                    <td>:@if($lowongan->uji_wawancara->isNotEmpty()) {{$lowongan->uji_wawancara->uji_wawancara_peserta->where('status',1)->count()}} pelamar @else Rekrutmen masih berlangsung @endif</td>
                </tr>
            </table>       
                    </div>
             </div>
         </body>
</html>