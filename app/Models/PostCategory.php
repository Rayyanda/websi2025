<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostCategory extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'url'
    ];
    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
