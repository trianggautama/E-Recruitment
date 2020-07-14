<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_wawancara extends Model
{
    use Uuid;

    protected $guarded = [

    ];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class);
    }

}
