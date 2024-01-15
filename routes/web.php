<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('/galeri', [HomeController::class, 'galeri'])->name("user.galeri");
Route::get('/kontak', [HomeController::class, 'kontak'])->name("user.kontak");
Route::get('/berita', [HomeController::class, 'berita'])->name("user.berita");
Route::get('/galeri/{idGaleri}', [HomeController::class, 'galeriDetail'])->name("user.galeriDetail");
Route::get('/berita/1', [HomeController::class, 'beritaDetail'])->name("user.beritaDetail");
Route::get('/form-pesan', [HomeController::class, 'pesan'])->name("user.pesan");
Route::post('/post-pesan', [HomeController::class, 'postPesan'])->name("pesan.post");

Route::middleware('admin')->group(function(){
    Route::get('/dashboard-admin', [AuthController::class, 'dashboardAdmin'])->name('admin.pages.dashboard');
    Route::get('/registration', [AuthController::class, 'registration'])->name('admin.auth.register');
    Route::post('/post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
    Route::get('/tampil-pesan', [AdminController::class, 'tampilPesan'])->name("admin.pages.tampil_pesan");
    Route::get('/tampil-galeri', [AdminController::class, 'tampilGaleri'])->name("admin.pages.tampil_galeri");
    Route::get('/tampil-berita', [AdminController::class, 'tampilBerita'])->name("admin.pages.tampil_berita");
    Route::post('/post-galeri', [AdminController::class, 'postGaleri'])->name("galeri.post");
    Route::post('/post-berita', [AdminController::class, 'postBerita'])->name("berita.post");
    Route::delete('/tampil-berita/{idBerita}/delete', [AdminController::class, 'deleteBerita'])->name("berita.delete");
    Route::delete('/tampil-galeri/{idGaleri}/delete', [AdminController::class, 'deleteGaleri'])->name("galeri.delete");
    Route::get('/edit-berita/{idBerita}', [AdminController::class, 'editBerita'])->name("admin.pages.edit_berita");
    Route::put('/edit-berita/{idBerita}/update', [AdminController::class, 'updateBerita'])->name("berita.update");
    Route::get('/edit-galeri/{idGaleri}', [AdminController::class, 'editGaleri'])->name("admin.pages.edit_galeri");
    Route::put('/edit-galeri/{idGaleri}/update', [AdminController::class, 'updateGaleri'])->name("galeri.update");
});

Route::get('/login', [AuthController::class, 'index'])->name('admin.auth.login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/dashboard', [AuthController::class, 'dashboard']); 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/redirecrWA', [HomeController::class, 'redirectWA'])->name('redirect');