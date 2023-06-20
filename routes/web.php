<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortopolioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
})->name('login');


// Route::get('home', function () {
//     return view('home');
// });

// user
Route::post('login/auth', [UserController::class,'auth']);
Route::get('register', [UserController::class,'daftar']);
Route::post('daftar/create', [UserController::class,'create']);
Route::get('logout', [UserController::class,'logout']);



// Admin
Route::middleware(['auth'])->group(function (){
        Route::get('template', function () {
            return view('template');
        });

    Route::get('admin', [AdminController::class,'show']);
    Route::get('admin', [AdminController::class,'add']);
    Route::post('admin/create', [AdminController::class,'create']);
    // Route::get('admin/hapus/{id}', [AdmminController::class,'hapus']);
    Route::get('admin/edit/{id}', [AdminController::class,'edit']);
    Route::post('admin/update/{id}', [AdminController::class,'update']);

    // portopolio
    // Route::middleware('auth')->group(function (){
    Route::get('portopolio', [PortopolioController::class, 'show']);
    Route::get('portopolio/add', [PortopolioController::class, 'add']);
    Route::post('portopolio/create', [PortopolioController::class, 'create']);
    Route::get('portopolio/hapus/{id}', [PortopolioController::class, 'hapus']);
    Route::get('portopolio/edit/{id}', [PortopolioController::class, 'edit']);
    Route::post('portopolio/update/{id}', [PortopolioController::class, 'update']);
    Route::get('portopolio/cari', [PortopolioController::class, 'cari']);
    // });


    // kontak
    // Route::middleware('auth')->group(function (){
    Route::get('kontak', [KontakController::class, 'show']);
    Route::get('kontak/add', [KontakController::class, 'add']);
    Route::post('kontak/create', [KontakController::class, 'create']);
    Route::get('kontak/hapus/{id}', [KontakController::class, 'hapus']);
    // Route::get('kontak/edit/{id}', [KontakController::class, 'edit']);
    // Route::post('kontak/update/{id}', [KontakController::class, 'update']);



});




// Home
Route::get('home', [HomeController::class, 'show']);