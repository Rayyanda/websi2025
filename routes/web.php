<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\KalenderAkademik;
use App\Exports\KalenderAkademikExport;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PublicFormController;
use Maatwebsite\Excel\Facades\Excel;

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/form/{slug}', [PublicFormController::class, 'show'])->name('form.show');
Route::post('/form/{slug}/check', [PublicFormController::class, 'checkPassword'])->name('form.check');
Route::post('/form/{slug}/submit', [PublicFormController::class, 'submit'])->name('form.submit');

Route::get('/admin/form-submissions/export/{form_id}', function ($form_id) {
    return Excel::download(new \App\Exports\FormSubmissionsExport($form_id), 'form-submissions.xlsx');
})->name('form-submissions.export');

Route::post('/visit-duration', function (\Illuminate\Http\Request $request) {
    \App\Models\Visit::create([
        'ip_address' => $request->ip(), // atau $request->input('ip_address')
        'duration' => $request->input('duration'),
        'visited_at' => now(),
    ]);
})->name('visit-duration');


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
