<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table = 'dosens';
    protected $fillable = [
        'nama',
        'nip',
        'no_telp',
        'email',
        'jabatan_fungsional',
        'sertifikasi_dosen',
        'bidang_pengajaran',
        'foto',
    ];
}
