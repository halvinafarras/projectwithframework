<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

route::get('/halo', function () {
    return 'Halo, World!';
});

route::get('beranda', function () {
    return view('welcome');
});

Route::get('/user/profil', function () {
    return 'Halaman Profil';
})->name('profil.user');

route::get('nama/{nama?}', function ($nama = 'Tamu') {
    return "Nama: " . $nama;
});

Route::prefix('admin')->group(function () {


    Route::get('/dashboard', function () {
        return 'Halaman Dashboard Admin'; // URL: /admin/dashboard
    });

    Route::get('/users', function () {
        return 'Halaman Manajemen User'; // URL: /admin/users
    });
});
