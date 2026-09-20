<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Auth\LoginController;

// Pertemuan 2
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');

    // Riwayat transaksi
    Route::get('/pos/history', function () {})->name('pos.history');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

//Tugas 4
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');

    // Tambahan rute untuk mengelola akun kasir
    Route::resource('users', UserController::class);
});

Route::get('/index', function () {
    $post = [
        (object) ['title' => 'Halvina Farras Savitri', 'published' => true],
        (object) ['title' => '2410631170071', 'published' => true],
        (object) ['title' => 'Informatika', 'published' => false],
        (object) ['created_at' => '2023-01-01'],
    ];
    return view('posts.index', compact('post'));
});
