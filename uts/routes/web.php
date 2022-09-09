<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KomenAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/' , [ClientController::class, 'showBeranda']);

Route::get('beranda' , [ClientController::class, 'showBeranda']);
Route::get('blog' , [ClientController::class, 'showBlog']);
Route::get('detailblog/{artikel}', [ClientController::class, 'show']);
Route::post('blog/filter',[ArtikelController::class, 'filter']);

// Route::get('komen', [KomenAdminController::class, 'showKomen']);
// Route::post('komen', [KomenAdminController::class, 'komen']);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('home' , [AdminController::class, 'showHome']);
    Route::resource('user', UserController::class);
    Route::resource('artikel', ArtikelController::class);
});


Route::get('komen' , [KomenAdminController::class, 'index']);
Route::post('komen' , [KomenAdminController::class, 'store']);
Route::get('komen/{komen}' , [KomenAdminController::class, 'show']);
Route::post('balas-komen', [KomenAdminController::class, 'balasKomen']);


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'Loginprocess']);
Route::get('logout', [AuthController::class, 'Logout']);


// Route::get('artikel' , [ArtikelController::class, 'index']);
// Route::get('artikel/create' , [ArtikelController::class, 'create']);
// Route::post('artikel' , [ArtikelController::class, 'store']);
// Route::get('artikel/{artikel}' , [ArtikelController::class, 'show']);
// Route::get('artikel/{artikel}/edit' , [ArtikelController::class, 'edit']);
// Route::put('artikel/{artikel}' , [ArtikelController::class, 'update']);
// Route::delete('artikel/{artikel}' , [ArtikelController::class, 'destroy']);