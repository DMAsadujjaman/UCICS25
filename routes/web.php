<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ScopesController;
use App\Http\Controllers\CallFpController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\KNSpeakerController;
use App\Http\Controllers\CommitteesController;
use App\Http\Controllers\SubmissionGLsController;
use App\Http\Controllers\CamReadySubsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\RegPagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('submission_guideline', [WelcomeController::class, 'submissionGuideline'])->name('submissionguide');
Route::get('cam_submission_guideline', [WelcomeController::class, 'camsubmissionGuideline'])->name('camsubmissionguide');
Route::get('faq', [WelcomeController::class, 'faq'])->name('faq');
Route::get('committee', [WelcomeController::class, 'committee'])->name('committee');
Route::get('student_award', [WelcomeController::class, 'swaward'])->name('swaward');
Route::get('registration', [WelcomeController::class, 'registration'])->name('reg');
Route::get('contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('reg_form', [WelcomeController::class, 'reg_form'])->name('reg_form');
Route::patch('reg-store', [WelcomeController::class, 'reg_store'])->name('reg.store');

Route::get('/conference_flyers', [DownloadsController::class, 'down_cf'])->name('download.down_cf');
    Route::get('/word_template', [DownloadsController::class, 'down_wt'])->name('download.down_wt');
    Route::get('/latex_template', [DownloadsController::class, 'down_latx'])->name('download.down_latx');
    Route::get('/Conference_Poster', [DownloadsController::class, 'down_cp'])->name('download.down_cp');
    Route::get('/Program_Booklet', [DownloadsController::class, 'down_bl'])->name('download.down_bl');
    Route::get('/submissionGL', [DownloadsController::class, 'subgl'])->name('download.subGL');
    Route::get('/Cam_submissionGL', [DownloadsController::class, 'camsubGL'])->name('download.camsubGL');
    Route::get('/Developing_the_Presentation', [DownloadsController::class, 'down_dtp'])->name('download.down_dtp');
    



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

    Route::prefix('committees')->group(function(){
    Route::get('/view', [CommitteesController::class, 'index'])->name('committees.view');
    Route::get('/add', [CommitteesController::class, 'create'])->name('committees.add');
    Route::patch('/store', [CommitteesController::class, 'store'])->name('committees.store');
    Route::get('/edit/{id}', [CommitteesController::class, 'edit'])->name('committees.edit');
    Route::get('/delete/{id}', [CommitteesController::class, 'destroy'])->name('committees.delete');
    Route::patch('/kns/{id}', [CommitteesController::class,'update'])->name('committees.update');
    });

    Route::prefix('submission')->group(function(){
    Route::get('/view', [SubmissionGLsController::class, 'index'])->name('submission.view');
    Route::get('/edit/{id}', [SubmissionGLsController::class, 'edit'])->name('submission.edit');
    Route::patch('/submission/{id}', [SubmissionGLsController::class,'update'])->name('submission.update');
    });

    Route::prefix('cam_submission')->group(function(){
    Route::get('/view', [CamReadySubsController::class, 'index'])->name('cam_submission.view');
    Route::get('/edit/{id}', [CamReadySubsController::class, 'edit'])->name('cam_submission.edit');
    Route::patch('/cam_submission/{id}', [CamReadySubsController::class,'update'])->name('cam_submission.update');
    });
    Route::prefix('award')->group(function(){
    Route::get('/view', [SubmissionGLsController::class, 'index_spa'])->name('award.view');
    Route::get('/edit/{id}', [SubmissionGLsController::class, 'edit'])->name('award.edit');
    Route::patch('/award/{id}', [SubmissionGLsController::class,'update'])->name('award.update');
    });
    Route::prefix('download')->group(function(){
    Route::get('/view', [DownloadsController::class, 'index'])->name('download.view');
    Route::get('/add', [DownloadsController::class, 'create'])->name('download.add');
    Route::patch('/store', [DownloadsController::class, 'store'])->name('download.store');


    
    
    Route::get('/edit/{id}', [DownloadsController::class, 'edit'])->name('download.edit');
    Route::patch('/download/{id}', [DownloadsController::class,'update'])->name('download.update');
    Route::get('/delete/{id}', [DownloadsController::class, 'destroy'])->name('download.delete');
    });

    Route::prefix('faqs')->group(function(){
        Route::get('/view', [FaqsController::class, 'index'])->name('faq.view');
        Route::get('/add', [FaqsController::class, 'create'])->name('faq.add');
        Route::patch('/store', [FaqsController::class, 'store'])->name('faq.store');
        Route::get('/edit/{id}', [FaqsController::class, 'edit'])->name('faq.edit');
        Route::patch('/faq/{id}', [FaqsController::class,'update'])->name('faq.update');
        Route::get('/delete/{id}', [FaqsController::class, 'destroy'])->name('faq.delete');
        });
        
    Route::prefix('sponsors')->group(function(){
        Route::get('/view', [SponsorsController::class, 'index'])->name('sponsor.view');
        Route::get('/add', [SponsorsController::class, 'create'])->name('sponsor.add');
        Route::patch('/store', [SponsorsController::class, 'store'])->name('sponsor.store');
        Route::get('/edit/{id}', [SponsorsController::class, 'edit'])->name('sponsor.edit');
        Route::patch('/sponsor/{id}', [SponsorsController::class,'update'])->name('sponsor.update');
        Route::get('/delete/{id}', [SponsorsController::class, 'destroy'])->name('sponsor.delete');
        });

    Route::prefix('contacts')->group(function(){
        Route::get('/view', [ContactsController::class, 'index'])->name('contact.view');
        Route::get('/add', [ContactsController::class, 'create'])->name('contact.add');
        Route::patch('/store', [ContactsController::class, 'store'])->name('contact.store');
        Route::get('/edit/{id}', [ContactsController::class, 'edit'])->name('contact.edit');
        Route::patch('/contact/{id}', [ContactsController::class,'update'])->name('contact.update');
        Route::get('/delete/{id}', [ContactsController::class, 'destroy'])->name('contact.delete');
        });

    Route::prefix('register')->group(function(){
        Route::get('/view', [RegPagesController::class, 'index'])->name('register.view');
        Route::get('/add', [RegPagesController::class, 'create'])->name('register.add');
        Route::patch('/store', [RegPagesController::class, 'store'])->name('register.store');
        Route::get('/edit/{id}', [RegPagesController::class, 'edit'])->name('register.edit');
        Route::patch('/reg/{id}', [RegPagesController::class,'update'])->name('register.update');
        Route::get('/delete/{id}', [RegPagesController::class, 'destroy'])->name('register.delete');
        });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});

require __DIR__.'/auth.php';
