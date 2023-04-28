<?php

use App\Http\Controllers\kelasController;
use App\Http\Controllers\siswaController;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.login');
})->name('login')->middleware('guest');

// login siswa
Route::post('/login', [siswaController::class, "authenticate"]);

//logout siswa
Route::get('/logout', [siswaController::class, "logout"]);

//beranda siswa
Route::get('/berandasiswa', function () {
    return view('siswa.beranda');
})->middleware('auth');

// halaman belum tuntas siswa
Route::get('/belumtuntas', [siswaController::class, "belumtuntas"]);
Route::post('/ajukan/{mapel}', [siswaController::class, "ajukan"]);

// halaman sudah tuntas siswa
Route::get('/sudahtuntas', [siswaController::class, "sudahtuntas"]);

// halaman proses penuntasan siswa
Route::get('/prosespenuntasan', [siswaController::class, "prosespenuntasan"]);

// halaman beranda guru
Route::get('/berandaguru', function () {
    return view('guru.beranda');
})->middleware('auth');

// halaman detail kelas guru
Route::get('/detailkelas', [kelasController::class, "detailkelas"]);
Route::get('/detailkelassepuluh', [kelasController::class, "detailkelassepuluh"]);
Route::get('/detailkelassebelas', [kelasController::class, "detailkelassebelas"]);
Route::get('/detailkelasduabelas', [kelasController::class, "detailkelasduabelas"]);

// halaman detail siswa pada guru
Route::get('/detailsiswa', [kelasController::class, "detailsiswa"]);
Route::post('/tolak/{user}', [kelasController::class, "tolak"]);
Route::post('/terima/{user}', [kelasController::class, "terima"]);


