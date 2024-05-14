<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailTrashController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HadiahController;
use App\Http\Controllers\KonterController;
use App\Http\Controllers\TrashController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontController::class,'index']);
Route::get('login',[FrontController::class,'login']);
Route::get('register',[FrontController::class,'register']);
Route::post('login',[FrontController::class,'store']);
Route::get('logout',[FrontController::class,'logout']);

Route::get('infotrash',[FrontController::class,'infotrash']);
Route::get('kataloghadiah',[FrontController::class,'kataloghadiah']);
Route::get('kataloghadiah/stok',[FrontController::class,'stokhadiah']);
Route::get('konter',[FrontController::class,'konter']);

Route::prefix('user')->group(function () {
    Route::post('/',[FrontController::class,'postlogin']);
    Route::get('/',[FrontController::class,'index']);

    Route::prefix('profile')->group(function () {
        Route::get('/',[FrontController::class,'profile']);
        Route::get('edit',[FrontController::class,'editprofile']);
        Route::get('edit/password',[FrontController::class,'changepassword']);
        Route::post('/',[FrontController::class,'postprofile']);
        Route::post('changepassword',[FrontController::class,'updatePassword']);
    });

    Route::get('infotrash',[FrontController::class,'infotrash']);

    Route::prefix('historibuangsampah')->group(function () {
        Route::get('/',[DetailTrashController::class,'index']);
        Route::post('closetrash',[DetailTrashController::class,'closetrash']);
    });

    Route::get('buangsampah',[DetailTrashController::class,'buangsampah']);

    Route::prefix('kataloghadiah')->group(function () {
        Route::get('/',[FrontController::class,'kataloghadiah']);
        Route::get('{idHadiah}/stok',[FrontController::class,'stokhadiah']);
    });

    Route::prefix('klaimhadiah')->group(function () {
        Route::get('/',[FrontController::class,'klaimhadiah']);
        Route::post('/',[FrontController::class,'klaimhadiah']);
        Route::get('voucher',[FrontController::class,'voucher']);
    });

    Route::get('pilihhadiah',[FrontController::class,'pilihhadiah']);
    Route::get('konter',[FrontController::class,'konter']);
    Route::get('notifikasi',[FrontController::class,'notif']);
});

Route::prefix('admin')->group(function () {
    Route::post('/',[FrontController::class,'postlogin']);
    Route::get('/',[AdminController::class,'index']);

    Route::prefix('infotrash')->group(function () {
        Route::get('/',[TrashController::class,'index']);
        Route::get('add',[TrashController::class,'create']);
        Route::get('{idTrash}/update',[TrashController::class,'edit']);
        Route::delete('{idTrash}',[TrashController::class,'destroy']);
        Route::delete('/',[TrashController::class,'deleteall']);
        Route::post('/',[TrashController::class,'store']);
        Route::post('update-status/{idTrash}',[TrashController::class,'update']);
    });
    
    Route::prefix('kataloghadiah')->group(function () {
        Route::get('/',[HadiahController::class,'index']);
        Route::get('add',[HadiahController::class,'create']);
        Route::get('{idHadiah}/update',[HadiahController::class,'edit']);
        Route::get('stok',[AdminController::class,'katalogstok']);
        Route::delete('{idHadiah}',[HadiahController::class,'destroy']);
        Route::delete('/',[HadiahController::class,'deleteall']);
        Route::post('/',[HadiahController::class,'store']);
        Route::post('{idHadiah}',[HadiahController::class,'update']);
    });

    Route::prefix('konter')->group(function () {
        Route::get('/',[KonterController::class, 'index']);
        Route::get('add',[KonterController::class,'create']);
        Route::get('{idKonter}/update',[KonterController::class,'edit']);
        Route::delete('{idKonter}',[KonterController::class,'destroy']);
        Route::delete('/',[KonterController::class,'deleteall']);
        Route::post('/', [KonterController::class, 'store']);
        Route::put('{idKonter}', [KonterController::class, 'update']);
    });
    
    Route::get('klaimhadiah',[AdminController::class,'klaim']);
    Route::get('historibuangsampah',[AdminController::class,'buang']);
    Route::prefix('profileuser')->group(function () {
        Route::get('/',[AdminController::class,'profile']);
        Route::delete('{idpengguna}',[AdminController::class,'destroyUser']);
    });
});