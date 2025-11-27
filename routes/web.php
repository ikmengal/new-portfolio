<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PortfolioController,
    AboutUsController,
    ContactController,
    HeroController
};

Route::get('/', function () {
    return redirect()->route('hero');
    // return view('admin.index');
    // return view('laura.index');
    // return view('admin.pages.hero');
});

Route::get('download-cv', function () {
    $path = public_path('admin/cv/resume.pdf'); // file path in public folder
    return response()->download($path, 'Imran-Ali-Brohi-CV.pdf');
});

Route::get('hero', [HeroController::class, 'hero'])->name('hero');
Route::get('aboutus', [HeroController::class, 'aboutus'])->name('aboutus');
Route::get('resume', [HeroController::class, 'resume'])->name('resume');
Route::get('services', [HeroController::class, 'services'])->name('services');
Route::get('portfolio', [HeroController::class, 'portfolio'])->name('portfolio');
Route::get('contact', [HeroController::class, 'contact'])->name('contact');

Route::post('contact_us', [ContactController::class,'store'])->name('contact_us');
Route::get('show', [PortfolioController::class,'show'])->name('portfolio_detail');

Route::resource('about_us', AboutUsController::class);
