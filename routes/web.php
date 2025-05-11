<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/tes',function(){
    return view('tes');
});

Route::get('/tentang/{slug}',[PagesController::class,'index'])->name('pages.tentang.index');

Route::get('/dosen-dan-staf/{slug}',[DosenController::class,'index'])->name('dosen.dosen.index');

Route::get('/akademik/mk',function(){
    return view('pages.akademik.distribusimk');
})->name('mk');
