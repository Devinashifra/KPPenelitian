<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/alurdanpanduan', [HomeController::class, 'indexap'])->name('alurdanpanduan');
Route::get('/magang', [HomeController::class, 'indexmag'])->name('magang');
Route::get('pendaftaran', [HomeController::class, 'indexpend'])->name('pendaftaran');
Route::get('/magang/form', [DaftarController::class, 'indexform'])->name('form');

Route::post('/magang/form', [DaftarController::class, 'store']);

Route::get('/user',[UserController::class, 'index'])->name('pengguna');

// Route::post('/magang/form', 'DaftarController@store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';