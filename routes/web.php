<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;


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

Route::get('/laravel', function () {
    return view('welcome');
});

// Guest routes
Route::middleware('guest')->group(function () {
    Route::resource('/', LandingController::class);
});

Route::get('/about', [LandingController::class, 'tentangkami'])->name('about');
Route::get('/contact', [LandingController::class, 'hubungikami'])->name('contact');
Route::get('/paketkelas', [LandingController::class, 'paketkelas'])->name('paketkelas');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/loginprocess', [LoginController::class, 'loginprocess'])->name('login.process')->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [LoginController::class, 'register'])->name('signup')->middleware('guest');
Route::post('/registerprocess', [LoginController::class, 'registerprocess'])->name('register.process')->middleware('guest');

// Route::prefix(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'])->group(function () {

// });

//User Routes
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});






Route::get('/test', function () {
    return view('test');
});
