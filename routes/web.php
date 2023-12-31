<?php

use App\Http\Controllers\ActivityLandingController;
use App\Http\Controllers\AgendaLandingController;
use App\Http\Controllers\ArticleLandingController;
use App\Http\Controllers\AudioLandingController;
use App\Http\Controllers\ContactLandingController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\ActivityController;
use App\Http\Controllers\Dashboard\AgendaController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\AudioController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ChangePasswordController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\OrganizationController;
use App\Http\Controllers\Dashboard\PollController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Controllers\Dashboard\VideoController;
use App\Http\Controllers\Dashboard\VisionMissionController;
use App\Http\Controllers\HomeLandingController;
use App\Http\Controllers\PollLandingController;
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
    Route::get('/articles', [ArticleLandingController::class, 'index'])->name('articles');
    Route::get('/articles/{slug}', [ArticleLandingController::class, 'show'])->name('detail-article');
    Route::get('/about', [HomeLandingController::class, 'about'])->name('about');
    Route::get('/', [HomeLandingController::class, 'index'])->name('home');
    Route::get('/vision-mission', [HomeLandingController::class, 'visionMission'])->name('vision-mission');
    Route::get('/organization', [HomeLandingController::class, 'organization'])->name('organization');
    Route::get('/agenda', [AgendaLandingController::class, 'index'])->name('agenda');
    Route::get('/agenda/{slug}', [AgendaLandingController::class, 'show'])->name('detail-agenda');
    Route::get('/activities', [ActivityLandingController::class, 'index'])->name('activities');
    Route::get('/activities/{slug}', [ActivityLandingController::class, 'show'])->name('detail-activities');
    Route::get('/polling', [PollLandingController::class, 'index'])->name('polling');
    Route::get('/polling/{poll}', [PollLandingController::class, 'pollResult'])->name('polling-result');
    Route::post('/polling/form/{id}', [PollLandingController::class, 'show'])->name('polling-form');
    Route::post('/polling/submit-form', [PollLandingController::class, 'storeAnswer'])->name('submit-polling');
    Route::get('/contact', [ContactLandingController::class, 'index'])->name('contact');
});

Auth::routes();

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
        Route::get('/export-excel/{poll}', [PollController::class, 'export'])->name('export-poll');
    });

    Route::resources([
        'categories' => CategoryController::class,
        'articles' => ArticleController::class,
        'audios' => AudioController::class,
        'videos' => VideoController::class,
        'agendas' => AgendaController::class,
        'activities' => ActivityController::class,
        'polls' => PollController::class
    ]);

    Route::resource('questions', QuestionController::class)->only('store', 'destroy');

    Route::resources([
        'about' => AboutController::class,
        'vision-mission' => VisionMissionController::class,
        'organization' => OrganizationController::class,
        'contact' => ContactController::class
    ], ['only' => ['index', 'update']]);

    Route::name('user.')->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('edit-profile', [ProfileController::class, 'edit'])->name('edit.profile');
        Route::patch('change-profile', [ProfileController::class, 'update'])->name('change.profile');
        Route::patch('change-password', [ChangePasswordController::class, 'update'])->name('change-password');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
