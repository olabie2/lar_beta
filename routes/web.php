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
        Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
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

        // Authentication Routes
        Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.submit');
        Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


        // Admin Dashboard Routes
        Route::middleware(['auth', 'admin'])->prefix('dashboard')->group(function () {
            Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
            
            // Projects Management
            Route::get('/projects', [\App\Http\Controllers\Admin\AdminProjectController::class, 'index'])->name('admin.projects.index');
            Route::get('/projects/create', [\App\Http\Controllers\Admin\AdminProjectController::class, 'create'])->name('admin.projects.create');
            Route::post('/projects', [\App\Http\Controllers\Admin\AdminProjectController::class, 'store'])->name('admin.projects.store');
            Route::get('/projects/{project}/edit', [\App\Http\Controllers\Admin\AdminProjectController::class, 'edit'])->name('admin.projects.edit');
            Route::put('/projects/{project}', [\App\Http\Controllers\Admin\AdminProjectController::class, 'update'])->name('admin.projects.update');
            Route::delete('/projects/{project}', [\App\Http\Controllers\Admin\AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');
            
            // Careers Management
            Route::get('/careers', [\App\Http\Controllers\Admin\AdminCareerController::class, 'index'])->name('admin.careers.index');
            Route::get('/careers/create', [\App\Http\Controllers\Admin\AdminCareerController::class, 'create'])->name('admin.careers.create');
            Route::post('/careers', [\App\Http\Controllers\Admin\AdminCareerController::class, 'store'])->name('admin.careers.store');
            Route::get('/careers/{career}/edit', [\App\Http\Controllers\Admin\AdminCareerController::class, 'edit'])->name('admin.careers.edit');
            Route::put('/careers/{career}', [\App\Http\Controllers\Admin\AdminCareerController::class, 'update'])->name('admin.careers.update');
            Route::delete('/careers/{career}', [\App\Http\Controllers\Admin\AdminCareerController::class, 'destroy'])->name('admin.careers.destroy');
            
            // Events Management
            Route::get('/events', [\App\Http\Controllers\Admin\AdminEventController::class, 'index'])->name('admin.events.index');
            Route::get('/events/create', [\App\Http\Controllers\Admin\AdminEventController::class, 'create'])->name('admin.events.create');
            Route::post('/events', [\App\Http\Controllers\Admin\AdminEventController::class, 'store'])->name('admin.events.store');
            Route::get('/events/{event}/edit', [\App\Http\Controllers\Admin\AdminEventController::class, 'edit'])->name('admin.events.edit');
            Route::put('/events/{event}', [\App\Http\Controllers\Admin\AdminEventController::class, 'update'])->name('admin.events.update');
            Route::delete('/events/{event}', [\App\Http\Controllers\Admin\AdminEventController::class, 'destroy'])->name('admin.events.destroy');
            
            // Applications View
            Route::get('/applications', [\App\Http\Controllers\Admin\AdminApplicationController::class, 'index'])->name('admin.applications.index');
            Route::get('/applications/{application}', [\App\Http\Controllers\Admin\AdminApplicationController::class, 'show'])->name('admin.applications.show');
            Route::delete('/applications/{application}', [\App\Http\Controllers\Admin\AdminApplicationController::class, 'destroy'])->name('admin.applications.destroy');
            
            // Demo Requests View
            Route::get('/demos', [\App\Http\Controllers\Admin\AdminDemoController::class, 'index'])->name('admin.demos.index');
            Route::get('/demos/{demo}', [\App\Http\Controllers\Admin\AdminDemoController::class, 'show'])->name('admin.demos.show');
            Route::delete('/demos/{demo}', [\App\Http\Controllers\Admin\AdminDemoController::class, 'destroy'])->name('admin.demos.destroy');
        });
    }
);
Route::post('/careers/{career}/apply', [JobApplicationController::class, 'store'])->name('careers.apply');
Route::post('/request-demo', [DemoController::class, 'store'])->name('request-demo.store');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');