<?php

use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\AudioController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ChangePasswordController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\VideoController;
use App\Http\Controllers\Dashboard\VisionMissionController;
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
});

Auth::routes();

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
    });

    Route::resources([
        'categories' => CategoryController::class,
        'articles' => ArticleController::class,
        'audios' => AudioController::class,
        'videos' => VideoController::class
    ]);

    Route::resources([
        'about' => AboutController::class,
        'vision-mission' => VisionMissionController::class
    ], ['only' => ['index', 'update']]);

    Route::name('user.')->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');

        Route::patch('change-password', [ChangePasswordController::class, 'update'])->name('change-password');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
