<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Forms extends Model
{
    //
    protected $fillable = [
        'form_id',
        'title',
        'slug',
        'description',
        'fields',
        'password',
        'is_public',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'fields' => 'array',
        'is_public' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->form_id || !$model->slug) {
                $model->form_id = Str::uuid();
                $model->slug = Str::slug($model->title);
            }
        });
    }


}
