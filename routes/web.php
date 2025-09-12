<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ContactController,
};

Route::get('/', function () {
    return view('admin.index');
});

Route::get('download-cv', function () {
    $path = public_path('admin/cv/resume.pdf'); // file path in public folder
    return response()->download($path, 'Imran-Ali-Brohi-CV.pdf');
});

Route::post('contact_us', [ContactController::class,'store'])->name('contact_us');
