<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'galleries';
    protected $fillable = [
        'slug',
        'image',
        'published_at'
    ];
    public function slug()
    {
        return $this->belongsTo(Slug::class,'slug_id','id');
    }
}
