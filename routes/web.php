<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NaiveBayesController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestingController;

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


Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog/{slug}', 'detailBlog')->name('detailBlog');
    Route::get('/blog/kategori/{slug}', 'blogKategori')->name('blogKategori');
});

Route::controller(NaiveBayesController::class)->group(function() {
    Route::post('/cek-status-stunting', 'cekStunting')->name('cekStunting');
    Route::get('/cek-nilai-probailitas', 'calculateProbabilities')->name('probabilitasStunting')->middleware('auth');
    Route::get('/admin/uji-massal', 'ujiMassal')->name('ujiMassalStunting')->middleware('auth');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('proses.login');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});


Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/data-testing-riwayat', [TestingController::class, 'index'])->name('data.testing');

    Route::post('/blog/image/store', [BaseController::class, 'image'])->name('blog.imageStore');
    Route::resource('/blog', BlogController::class);

    Route::resource('/kategori',KategoriController::class);

    Route::resource('/tag',TagController::class);
    Route::resource('/user',PetugasController::class);

    Route::controller(TrainingController::class)->group(function() {
        Route::get('/training', 'index')->name('training.index');
        Route::post('/training/store', 'store')->name('training.store');
        Route::post('/training/destroy/{id}', 'destroy')->name('training.destroy');
        Route::patch('/training/{id}/update', 'update')->name('training.update');
        Route::post('/training/import_excel', 'import_excel')->name('training.import');
        Route::post('/training/truncate', 'truncate')->name('training.truncate');
    });
});




