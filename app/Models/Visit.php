<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    protected $fillable = ['ip_address', 'visited_at', 'duration'];

    public $timestamps = true;

    protected $casts = [
        'visited_at' => 'datetime',
    ];
}
