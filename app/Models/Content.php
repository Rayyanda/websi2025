<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'sub_title',
        'contents',
        'is_active',
        'published_at',
        'page_id'
    ];

    protected $casts = [
        'contents' => 'array',
        'is_active' => 'boolean',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
