<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    //
    protected $table='tahun_ajaran';
    protected $fillable = [
        'tahun_ajaran',
        'keterangan'
    ];
    public function kalenderAkademik()
    {
        return $this->hasMany(KalenderAkademik::class,'tahun_ajaran_id','id');
    }
}
