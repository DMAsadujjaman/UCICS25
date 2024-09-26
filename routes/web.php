<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ScopesController;
use App\Http\Controllers\CallFpController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\KNSpeakerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('submission_guideline', [WelcomeController::class, 'submissionGuideline'])->name('submissionguide');
Route::get('faq', [WelcomeController::class, 'faq'])->name('faq');
Route::get('committee', [WelcomeController::class, 'committee'])->name('committee');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function(){
    Route::get('/dashboard',[MainPageController::class,'index'])->name('dashboard');

    Route::prefix('slider')->group(function(){
    Route::get('/view', [MainPageController::class, 'slider'])->name('slider.view');
    Route::get('/add', [MainPageController::class, 'add'])->name('slider.add');
    Route::patch('/store', [MainPageController::class, 'store'])->name('slider.store');
    Route::get('/edit/{id}', [MainPageController::class, 'edit'])->name('slider.edit');
    Route::get('/delete/{id}', [MainPageController::class, 'delete'])->name('slider.delete');
    Route::patch('/slider/{id}', [MainPageController::class,'update'])->name('slider.update');
    });
    Route::prefix('about')->group(function(){
    Route::get('/view', [AboutController::class, 'index'])->name('about.view');
    Route::get('/add', [AboutController::class, 'add'])->name('about.add');
    Route::patch('/store', [AboutController::class, 'store'])->name('about.store');

    Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    // Route::get('/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
    Route::patch('/about/{id}', [AboutController::class,'update'])->name('about.update');

    Route::get('/date/{id}', [AboutController::class, 'editdate'])->name('date.edit');
    // Route::get('/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
    Route::patch('/date/{id}', [AboutController::class,'updatedate'])->name('date.update');
    });
    Route::prefix('call_fp')->group(function(){
    Route::get('/view', [CallFpController::class, 'index'])->name('call_fp.view');
    Route::get('/edit/{id}', [CallFpController::class, 'edit'])->name('call_fp.edit');
    Route::patch('/about/{id}', [CallFpController::class,'update'])->name('call_fp.update');
    });
    Route::prefix('scopes')->group(function(){
    Route::get('/view', [ScopesController::class, 'index'])->name('scopes.view');
    Route::get('/create', [ScopesController::class, 'create'])->name('scopes.create');
    Route::patch('/store', [ScopesController::class, 'store'])->name('scopes.store');
    Route::get('/edit/{id}', [ScopesController::class, 'edit'])->name('scopes.edit');
    Route::patch('/about/{id}', [ScopesController::class,'update'])->name('scopes.update');
    Route::get('/delete/{id}', [ScopesController::class, 'destroy'])->name('scopes.delete');
    });

    Route::prefix('chair')->group(function(){
    Route::get('/view', [ChairController::class, 'index'])->name('chair.view');
    Route::get('/create', [ChairController::class, 'create'])->name('chair.create');
    Route::patch('/store', [ChairController::class, 'store'])->name('chair.store');

    Route::get('/edit/{id}', [ChairController::class, 'edit'])->name('chair.edit');
    Route::patch('/chair/{id}', [ChairController::class,'update'])->name('chair.update');

    Route::get('/welcome/{id}', [ChairController::class, 'editwelcome'])->name('welcome.edit');
    Route::patch('/welcome/{id}', [ChairController::class,'updatewelcome'])->name('welcome.update');
    });

    Route::prefix('keynote')->group(function(){
    Route::get('/view', [KNSpeakerController::class, 'index'])->name('kns.view');
    Route::get('/add', [KNSpeakerController::class, 'create'])->name('kns.add');
    Route::patch('/store', [KNSpeakerController::class, 'store'])->name('kns.store');
    Route::get('/edit/{id}', [KNSpeakerController::class, 'edit'])->name('kns.edit');
    Route::get('/delete/{id}', [KNSpeakerController::class, 'destroy'])->name('kns.delete');
    Route::patch('/kns/{id}', [KNSpeakerController::class,'update'])->name('kns.update');
    });


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});

require __DIR__.'/auth.php';