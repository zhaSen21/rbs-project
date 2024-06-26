<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FormController;


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

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('settings');
});

//User Routes
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/pendaftaran', [LandingController::class, 'pendaftaran'])->name('pendaftaran');
    Route::resource('/users', UserController::class)->only('show', 'edit', 'update');
    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf.generate');
    Route::get('view-pdf', [PDFController::class, 'pdf'])->name('pdf.view');

    Route::post('storeData', [FormController::class, 'store'])->name('storeData');
    // Route::get('/pdf/generate', 'PDFController::class')->name('generatePDF');

});

Route::get('/usertest', function () {
    return view('users.profile');
});



Route::get('/test', function () {
    return view('test');
});
