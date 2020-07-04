<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use Uuid;

    protected $fillable = [
        'berita_id', 'posisi', 'keterangan', 'ipk_min', 'pendidikan_terakhir'
        , 'tgl_mulai', 'tgl_selesai', 'status',
    ];

    protected $casts = [
        'posisi' => 'array',
    ];

    public function setPosisiAttribute($value)
    {
        $posisi = [];

        foreach ($value as $array_item) {

            $posisi[] = $array_item;
        }

        $this->attributes['posisi'] = json_encode($posisi);
    }

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }

    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }

}
