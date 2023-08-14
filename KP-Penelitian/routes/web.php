<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormdafController;
use App\Http\Controllers\CapaiController;
use App\Http\Controllers\AdpenController;
use App\Http\Controllers\AdcapController;
use App\Http\Controllers\AdlapController;
use App\Http\Controllers\LaporakhController;
use App\Models\Daftar;
use App\Models\Laporan;
use App\Models\Capaian;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/alurdanpanduan', [HomeController::class, 'indexap'])->name('alurdanpanduan');
Route::get('/magang', [HomeController::class, 'indexmag'])->name('magang');
Route::get('/magang/pendaftaran', [HomeController::class, 'indexpend'])->name('pendaftaran');

// Project
Route::get('/magang/project', [HomeController::class, 'indexpro'])->name('project');
Route::get('/magang/desain', [HomeController::class, 'indexdes'])->name('desain');
Route::get('/magang/penggunaan', [HomeController::class, 'indexvid'])->name('video');
Route::get('/magang/jss', [HomeController::class, 'indexjss'])->name('jss');

// Form
Route::get('/magang/form', [FormdafController::class, 'indexform'])->name('daftar.kp');
Route::post('/magang/form', [FormdafController::class, 'store'])->name('form.kp');
Route::get('/capaian',[CapaiController::class, 'index'])->name('capaian');
Route::post('/capaian',[CapaiController::class, 'store'])->name('capai.post');
Route::get('/laporan', [LaporakhController::class, 'index'])->name('laporan');
Route::post('/laporan', [LaporakhController::class, 'store'])->name('laporan.post');

// Admin
Route::get('/admin/pendaftaran',[AdpenController::class, 'index'])->name('adpen');
Route::get('/admin/capaian', [AdcapController::class, 'index'])->name('adcap');
Route::get('/admin/laporan', [AdlapController::class, 'index'])->name('adlap');

Route::post('/magang/form', [FormdafController::class, 'store'])->name('daftarkp');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return view('admin.index'); }) -> middleware('checkRole:admin');
Route::get('/dashboard', function () {
    return view('dashboard'); }) -> middleware('checkRole:mahasiswa,admin')->name('dashboard');
// Route::middleware('admin')->group(function() {
//     Route::get('/user', [UserController::class, 'index'])->name('user.index');
//     Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
//     Route::patch('/user/{user}/makeadmin', [UserController::class, 'makeadmin'])->name('user.makeadmin');
//     Route::patch('/user/{user}/removeadmin', [UserController::class, 'removeadmin'])->name('user.removeadmin');
// });

require __DIR__.'/auth.php';
 