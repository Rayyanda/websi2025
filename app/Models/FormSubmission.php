<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class FormSubmission extends Model
{
    //
    protected $fillable = [
        'form_id',
        'data'
    ];

    protected $casts =[
        'data' => 'array'
    ];

    public function form()
    {
        return $this->belongsTo(Forms::class,'form_id','form_id');
    }
}
