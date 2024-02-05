<?php

use App\Http\Controllers\CustRegController;
use App\Http\Controllers\MainDashController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
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


// Guestmode -> Yg Akses hanya yg belum login
Route::middleware(['guest'])->group(function() {
    // Selector Section
    Route::get('/select',[SessionController::class,'select'])->name('select');


    // Login Section
    Route::get('/login',[SessionController::class, 'index'])->name('login');
    Route::get('/confirm',[SessionController::class, 'confirm'])->name('confirm');
    Route::post('/login',[SessionController::class,'login']);

    // Landing page
    Route::get('/', function () {
        return view('index');
    });

    // Register As Customer
    Route::get('/cust-regis',[CustRegController::class,'index'])->name('cust-regis');
    Route::post('/cust-regis/post',[CustRegController::class,'store'])->name('post-cust-regis');
    
});


// Route wajib login
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard',[MainDashController::class,'index']);

    Route::get('/logout', [SessionController::class,'logout']);

});

// Route Error 404 - Berfungsi jika memasukkan route ngawur
Route::fallback(function () {
    return view('404');
});

Route::get('/tn-regis', function () {
    return view('Auth.tenant_regis');
});

Route::get('/403', function () {
    return view('403');
});







