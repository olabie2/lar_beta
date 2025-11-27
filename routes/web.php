<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\CompanyEventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EventRegisterApplicationController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\AiAgentsController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectController;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
  
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::get('/ai-agents', [AiAgentsController::class, 'index'])->name('ai-agents');
        Route::get('/education', [HomeController::class, 'index'])->name('education');
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::get('/test', [HomeController::class, 'test'])->name('test');
        Route::get('/request-demo', [DemoController::class, 'index'])->name('request-demo');
        Route::get('/careers', [CareersController::class, 'index'])->name('careers.index');
        Route::get('/careers/{career}', [CareersController::class, 'show'])->name('careers.show');
        // Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
        Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

        Route::get('/events',[CompanyEventController::class,'index'])->name('company-events.index');
        Route::get('/events/{event}', [CompanyEventController::class, 'show'])->name('event.show');


        Route::post('/events/{event}/register', [EventRegisterApplicationController::class, 'store']) ->name('event.register');

        Route::get('/education',[EducationController::class,'index'])->name('education');
        // Route::get('/education',[EducationController::class,'index'])->name('education.index');
        // Route::get('/blog/create',[BlogController::class, 'create'])->name('blog.create');
        Route::get('/services',[ServicesController::class,'index'])->name('services.index');
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
    }
);
Route::post('/careers/{career}/apply', [JobApplicationController::class, 'store'])->name('careers.apply');
Route::post('/request-demo', [DemoController::class, 'store'])->name('request-demo.store');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');