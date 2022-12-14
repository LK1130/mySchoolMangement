<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogListController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureDownloadController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicHomeController;
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

//OTP
Route::get("/otp", function(){
    return inertia(("OTP"));
});

Route::post("/otp", [HomeController::class, "changePassword"])->name('home')->name("otp");

// Auth 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/homepage', [HomeController::class, "index"])->name('home');
});



//Public Home page
Route::post("/contact", [PublicHomeController::class, "index"]);

/**
 * Need to login
 */
Route::middleware(['auth'])->group(function () {
    //Home page
    Route::get('/homepage', [HomeController::class, "index"]);
    Route::post('/homepage', [HomeController::class, "changeClass"])->name("home.change");
    //Recording page
    Route::get('/recording', [RecordController::class, "index"])->name("record.index");
    Route::post('/recording', [RecordController::class, "search"])->name("record.search");

    //Video Page
    Route::get('/video/{id?}', [VideoListController::class, 'index'])->name("video.index");
    //Inbox Page
    Route::get('/inbox/{category?}', [MessageController::class, 'index'])->name("inbox.index");


    //Download Lecture
    Route::get('/download/{id?}',[LectureDownloadController::class,'download'])->name("download");
    // Blog page
    Route::get('/blog', [BlogController::class, "index"])->name("blog.index");
    // Blog view
    Route::get('/blogview/{blog}', [BlogController::class, "show"])->name("blog.show");
    // Privacy Policy
    Route::get('/privacypolicy', [PrivacyPolicyController::class, "index"]);



    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name("profile.index");
    Route::post('/profile', [ProfileController::class, 'update'])->name("profile.update");
    Route::post('/saveImg',  [ProfileController::class, 'saveImg'])->name("profile.saveImg");
    // Route::get('posts', fn ($request) => [ProfileController::class, 'saveImg'])->name('profile.saveImg');

    // Guide
    Route::get('/guide', [GuideController::class, 'index']);

    //Setting
    Route::get('/setting', [SettingController::class, 'index']);

    Route::get('language/{language}', function ($language) {
        Session()->put('locale', $language);

        return redirect()->back();
    })->name('language');
});
