<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecordController;
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
        'canRegister' => Route::has('register'),
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
    })->name('dashboard');
});

/**
 * Need to login
 */
Route::middleware(['auth'])->group(function () {
    //Home page
    Route::get('/homepage', [HomeController::class, "index"]);
    //Recording page
    Route::get('/recording', [RecordController::class, "index"]);
    // Blog page
    Route::get('/blog', [BlogListController::class, "index"]);
    // Blog view
    Route::get('/blogview', [BlogController::class, "index"]);
});
