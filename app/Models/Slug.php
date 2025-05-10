<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    //
    protected $table = 'slugs';
    protected $fillable = ['slug_name'];
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
