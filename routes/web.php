<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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
Route::post('user',[FrontController::class,'postlogin']);
Route::get('user',[FrontController::class,'index']);
Route::get('user/profile',[FrontController::class,'profile']);
Route::get('user/editprofile',[FrontController::class,'editprofile']);
Route::post('user/profile',[FrontController::class,'postprofile']);

Route::get('infotrash',[FrontController::class,'infotrash']);
Route::get('kataloghadiah',[FrontController::class,'kataloghadiah']);
Route::get('konter',[FrontController::class,'konter']);

Route::get('user/infotrash',[FrontController::class,'infotrash']);
Route::get('user/historibuangsampah',[FrontController::class,'historibuangsampah']);
Route::post('user/historibuangsampah',[FrontController::class,'closetrash']);
Route::get('user/buangsampah',[FrontController::class,'buangsampah']);

Route::get('user/kataloghadiah',[FrontController::class,'kataloghadiah']);
Route::get('user/klaimhadiah',[FrontController::class,'klaimhadiah']);
Route::post('user/klaimhadiah',[FrontController::class,'klaimhadiah']);
Route::get('user/klaimhadiah/voucher',[FrontController::class,'voucher']);
Route::get('user/pilihhadiah',[FrontController::class,'pilihhadiah']);
Route::get('user/konter',[FrontController::class,'konter']);

Route::get('admin',[AdminController::class,'login']);
Route::get('admin/infotrash',[AdminController::class,'trash']);
Route::get('admin/infotrash/create',[AdminController::class,'trashcreate']);

Route::post('admin/infotrash',[AdminController::class,'postlogin']);
Route::post('admin/infotrash',[AdminController::class,'posttrashcreate']);