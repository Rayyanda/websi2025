<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KalenderAkademik extends Model
{
    //
    protected $table = 'kalender_akademik';
    protected $fillable = [
        'tahun_ajaran_id',
        'slug',
        'kegiatan',
        'tgl_mulai',
        'tgl_selesai',
        'semester',
        'keterangan'
    ];
    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug('Kalender Akademik ' . $model->tahunAjaran->tahun_ajaran);
            }
        });
    }
    //public array $kalender =[];
    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class,'tahun_ajaran_id','id');
    }

    // public function mount():void
    // {
    //     parent::mount();
    //     $this->kalender = KalenderAkademik::all()->toArray();
    // }
}
