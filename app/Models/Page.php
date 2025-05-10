<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
        'title',
        'slug_id',
        'content',
        'published_at',
    ];

    public function slug()
    {
        return $this->belongsTo(Slug::class,'slug_id','id');
    }
}
