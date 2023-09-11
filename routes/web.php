<?php

use App\Http\Controllers\AudioLandingController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\AudioController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ChangePasswordController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\OrganizationController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\VideoController;
use App\Http\Controllers\Dashboard\VisionMissionController;
use App\Http\Controllers\VideoLandingController;
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

Route::name('landing.')->group(function () {
    Route::get('/videos', [VideoLandingController::class, 'index'])->name('videos');
    Route::get('/videos/{slug}', [VideoLandingController::class, 'show'])->name('detail-videos');
    Route::get('/audios', [AudioLandingController::class, 'index'])->name('audios');
    Route::get('/audios/{slug}', [AudioLandingController::class, 'show'])->name('detail-audio');
});

Route::get('/', function () {
    return view('landing.pages.home.index');
})->name('home');
Route::get('/agenda', function () {
    return view('landing.pages.agenda.agenda');
})->name('agenda');
Route::get('/activities', function () {
    return view('landing.pages.activity.activity');
})->name('activities');
Route::get('/news/{id}', function () {
    return view('landing.pages.news.detail_news');
})->name('detail-news');
//Route::get('/videos', function () {
//    return view('landing.pages.videos.videos');
//})->name('videos');
//Route::get('/videos/{id}', function () {
//    return view('landing.pages.videos.detail_video');
//})->name('detail-videos');
//Route::get('/audios', function () {
//    return view('landing.pages.audios.audios');
//})->name('audios');
//Route::get('/audios/{id}', function () {
//    return view('landing.pages.audios.detail_audio');
//})->name('detail-audio');
Route::get('/articles', function () {
    return view('landing.pages.articles.articles');
})->name('articles');
Route::get('/polling', function () {
    return view('landing.pages.polling.polling');
})->name('polling');
Route::get('/polling/form/{id}', function () {
    return view('landing.pages.polling.polling_form');
})->name('polling-form');
Route::get('/contact', function () {
    return view('landing.pages.contact.contact');
})->name('contact');

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
        'vision-mission' => VisionMissionController::class,
        'organization' => OrganizationController::class
    ], ['only' => ['index', 'update']]);

    Route::name('user.')->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');

        Route::patch('change-password', [ChangePasswordController::class, 'update'])->name('change-password');
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
