<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('submission_guideline', [WelcomeController::class, 'submissionGuideline'])->name('submissionguide');

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
    

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});

require __DIR__.'/auth.php';