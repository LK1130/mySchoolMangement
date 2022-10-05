<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogListController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VideoListController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Start public Home Page
 */
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Auth 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/homepage', function () {
        return Inertia::render('Home');
    })->name('home');
});

/**
 * Need to login
 */
Route::middleware(['auth'])->group(function () {
    //Home page
    Route::get('/homepage', [HomeController::class, "index"]);
    //Recording page
    Route::get('/recording', [RecordController::class, "index"]);
    //Video Page
    Route::get('/video',[VideoListController::class,'index']);
    //Inbox Page
    Route::get('/inbox',[MessageController::class,'index']);

    // Blog page
    Route::get('/blog', [BlogListController::class, "index"]);
    // Blog view
    Route::get('/blogview', [BlogController::class, "index"]);
    // Privacy Policy
    Route::get('/privacypolicy', [PrivacyPolicyController::class, "index"]);

    // Profile
    Route::get('/profile',[ProfileController::class,'index']);

    // Guide
    Route::get('/guide',[GuideController::class,'index']);

    //Setting
    Route::get('/setting',[SettingController::class,'index']);
});
