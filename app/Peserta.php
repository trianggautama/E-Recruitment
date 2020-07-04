<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use Uuid;

    protected $fillable = [
        'user_id', 'lowongan_id', 'NIK', 'jk', 'tempat_lahir', 'tgl_lahir', 'agama', 'warga_negara', 'alamat_sekarang',
        'alamat_ktp', 'tlp_rumah', 'tlp_hp', 'hobi', 'transportasi', 'email', 'ijazah_terakhir',
        'tahun_lulus', 'lembaga', 'jurusan', 'ipk',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
