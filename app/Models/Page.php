<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'published_at'
    ];
    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->title);
            }
        });
    }


    public function contents()
    {
        return $this->hasMany(Content::class,'page_id','id');
    }
}
