<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListProdukController;

 Route::get('/welcome', function () {
    return view('welcome');
 });

 Route::get('user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
 });

 Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
 });

  Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
  });

 Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('ameylia', function() {
Return view('ameylia');
});

Route::get('/produk', [ProductController::class, 'index']);

// REGISTRASI
Route::get('/registerpage', [AuthController::class, 'showRegister'])->name('registerpage');
Route::post('/registerpage', [AuthController::class, 'register'])->name('registerpage.post');
// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// RESET PASSWORD
Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('forgot');

// EDIT PROFIL
Route::get('/edit-profile', [AuthController::class, 'editProfile'])->middleware('auth')->name('edit.profile');
Route::post('/edit-profile', [AuthController::class, 'updateProfile'])->middleware('auth')->name('update.profile');

Route::get('/listproduk', [ListProdukController::class, 'show']);