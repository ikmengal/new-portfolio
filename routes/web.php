<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    TestimonialsController,
    ExperienceController,
    PortfolioController,
    EducationController,
    ProjectController,
    AboutUsController,
    ContactController,
    ServiceController,
    SettingController,
    AdminController,
    HeroController,
    AuthController
};

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('admin/login', [AuthController::class, 'loginForm'])->name('login');

Route::controller(AuthController::class)->prefix('admin')->name('admin.')->group(function() {
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});

Route::get('download-cv', function () {
    $path = public_path('admin/cv/resume.pdf'); // file path in public folder
    return response()->download($path, 'Imran-Ali-Brohi-CV.pdf');
});

Route::get('hero/{id?}', [HeroController::class, 'hero'])->name('hero');
Route::get('aboutus/{id?}', [HeroController::class, 'aboutus'])->name('aboutus');
Route::get('resume/{id?}', [HeroController::class, 'resume'])->name('resume');
Route::get('services/{id?}', [HeroController::class, 'services'])->name('services');
Route::get('portfolio/{id?}', [HeroController::class, 'portfolio'])->name('portfolio');
Route::get('contact', [HeroController::class, 'contact'])->name('contact');

Route::post('contact_us', [ContactController::class,'store'])->name('contact_us');
Route::get('show/{id?}', [PortfolioController::class,'show'])->name('portfolio_detail');

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Setting Custom Routes
    Route::get('setting/craete', [SettingController::class, 'create'])->name('settings.create');
    Route::post('setting/store', [SettingController::class, 'store'])->name('settings.store');
    Route::patch('setting/update/{id}', [SettingController::class, 'update'])->name('settings.update');

    // AboutUs Custom Routes
    Route::controller(AboutUsController::class)->prefix('about_us')->name('about_us.')->group(function () {
        Route::get('trashed', 'trashed')->name('trashed');
        Route::get('restore/{id}', 'reStore')->name('restore');
    });

    // Educations Custom Routes
    Route::controller(EducationController::class)->prefix('educations')->name('educations.')->group(function () {
        Route::get('trashed', 'trashed')->name('trashed');
        Route::get('restore/{id}', 'reStore')->name('restore');
    });

    // Experiences Custom Routes
    Route::controller(ExperienceController::class)->prefix('experiences')->name('experiences.')->group(function () {
        Route::get('trashed', 'trashed')->name('trashed');
        Route::get('restore/{id}', 'reStore')->name('restore');
    });

    // Services Custom Routes
    Route::controller(ServiceController::class)->prefix('service')->name('service.')->group(function () {
        Route::get('trashed', 'trashed')->name('trashed');
        Route::get('restore/{id}', 'reStore')->name('restore');
    });

    // Projects Custom Routes
    Route::controller(ProjectController::class)->prefix('projects')->name('projects.')->group(function () {
        Route::get('trashed', 'trashed')->name('trashed');
        Route::get('restore/{id}', 'reStore')->name('restore');
    });

    Route::resource('testimonials', TestimonialsController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('about_us', AboutUsController::class);
    Route::resource('projects', ProjectController::class);
});
