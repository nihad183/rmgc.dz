<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\CookieController;
 

/* ================= Front ================= */

Route::get('/', [HomeController::class, 'index']);

Route::post('/cookie/consent', [CookieController::class, 'store'])->name('cookie.store');

Route::get('/propos', fn () => view('propos'))
    ->name('view.propos');

Route::get('/contact', fn () => view('contact'));
Route::get('/privacypolicy', fn () => view('privacypolicy'));

Route::get('/actualites', [NewsController::class, 'index'])->name('news.index');
Route::get('/actualites/{slug}', [NewsController::class, 'show'])
     ->where('slug', '[A-Za-z0-9\-]+')
     ->name('news.show');


/* ================= Admin ================= */

Route::prefix('rmgc-secret-dashboard')->group(function () {

    // Login
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])
        ->name('admin.login-form');

    Route::post('/login', [AdminLoginController::class, 'login'])
        ->name('admin.login')
        ->middleware(['throttle:5,1']);

    Route::post('/logout', [AdminLoginController::class, 'logout'])
        ->name('admin.logout');

    Route::middleware([App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/news', [AdminNewsController::class, 'index'])->name('rmgc-secret-dashboard.news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
});

});


