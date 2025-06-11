<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\KalenderAkademik;
use App\Exports\KalenderAkademikExport;
use App\Http\Controllers\CommentController;
use Maatwebsite\Excel\Facades\Excel;

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('/{slug}',[PageController::class,'index'])->name('pages');

Route::get('/{slug}/{detail}',[PageController::class,'show'])->name('pages.show');

Route::prefix('comment')->group(function(){

    Route::post('/new',[CommentController::class,'create'])->name('comment.new');

});

Route::get('/admin/kalender-akademiks/export', function (\Illuminate\Http\Request $request) {
    $query = KalenderAkademik::query();

    if ($request->has('tahun')) {

        if($request->has('semester')){
            $query->where('tahun','=',$request->tahun)->where('semester','=',$request->semester);
        }else{
            $query->where('tahun_akademik', $request->tahun);
        }
    }

    return Excel::download(new KalenderAkademikExport($query), 'kalender-akademik.xlsx');
})->name('filament.admin.kalender-akademik.export');
