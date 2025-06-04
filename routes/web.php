<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('/{slug}',[PageController::class,'index'])->name('pages');

Route::get('/{slug}/{detail}',[PageController::class,'show'])->name('pages.show');
