<?php

use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ChangePasswordController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
})->name('home');
Route::get('/news', function () {
    return view('landing.news');
})->name('news');
Route::get('/news/{id}', function () {
    return view('landing.detail_news');
})->name('detail-news');
Route::get('/videos', function () {
    return view('landing.videos');
})->name('videos');
Route::get('/videos/{id}', function () {
    return view('landing.detail_video');
})->name('detail-videos');
Route::get('/audios', function () {
    return view('landing.audios');
})->name('audios');
Route::get('/audios/{id}', function () {
    return view('landing.detail_audio');
})->name('detail-audio');
Route::get('/articles', function () {
    return view('landing.articles');
})->name('articles');
Route::get('/contact', function () {
    return view('landing.contact');
})->name('contact');

Auth::routes();

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
    });

    Route::resources([
        'categories' => CategoryController::class,
        'articles' => ArticleController::class,
        'about' => AboutController::class
    ]);

    Route::name('user.')->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');

        Route::patch('change-password', [ChangePasswordController::class, 'update'])->name('change-password');
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
