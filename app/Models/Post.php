<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //
    protected $fillable = ['category_id','title','images','slug' ,'content', 'user_id','published_at'];
    public function category()
    {
        return $this->belongsTo(PostCategory::class,'category_id','id');
    }
    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'images' => 'array',
    ];

    // ...

}
