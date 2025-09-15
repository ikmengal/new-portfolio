<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PortfolioController,
    ContactController
};

Route::get('/', function () {
    return view('admin.index');
    return view('laura.index');
});

Route::get('download-cv', function () {
    $path = public_path('admin/cv/resume.pdf'); // file path in public folder
    return response()->download($path, 'Imran-Ali-Brohi-CV.pdf');
});

Route::post('contact_us', [ContactController::class,'store'])->name('contact_us');
Route::get('show', [PortfolioController::class,'show'])->name('portfolio_detail');
