<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MediaLainController;
use App\Http\Controllers\UploadController;
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
Route::get('/', [WelcomeController::class, 'index']);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/news/{id}', [WelcomeController::class, 'read'])->name('read');
Route::get('/allnews', [WelcomeController::class, 'allnews'])->name('allnews');
Route::get('/get-more-news', [WelcomeController::class, 'getdatanews'])->name('getdatanews');

Route::get('/allmedia', [WelcomeController::class, 'allmedia'])->name('allmedia');
Route::get('/get-more-medias', [WelcomeController::class, 'getdatamedias'])->name('getdatamedias');

Route::get('/profil', [WelcomeController::class, 'profil'])->name('profil');
Route::get('/informasi', [WelcomeController::class, 'informasi'])->name('informasi');
Route::get('/zi', [WelcomeController::class, 'zi'])->name('zi');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/berita', BeritaController::class);
Route::post('berita/upload', [BeritaController::class, 'upload'])->name('berita.upload');

Route::resource('/medialain', MediaLainController::class);
Route::post('medialain/upload', [MediaLainController::class, 'upload'])->name('medialain.upload');


Route::resource('/uploads', UploadController::class);
require __DIR__.'/auth.php';
