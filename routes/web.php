<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\PresenController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('guru')->group(function () {
    Route::get('/view', [GuruController::class, 'index'])->name('guru.view');
    Route::get('/add', [GuruController::class, 'add'])->name('guru.add');
    Route::post('/store', [GuruController::class, 'store'])->name('guru.store');
    Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
    Route::post('/update/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::get('/hapus/{id}', [GuruController::class, 'delete'])->name('guru.delete');
});

Route::prefix('presen')->group(function () {
    Route::get('/view', [PresenController::class, 'index'])->name('presen.view');
    Route::get('/add', [PresenController::class, 'add'])->name('presen.add');
    Route::post('/store', [PresenController::class, 'store'])->name('presen.store');
    Route::get('/edit/{id}', [PresenController::class, 'edit'])->name('presen.edit');
    Route::post('/update/{id}', [PresenController::class, 'update'])->name('presen.update');
    Route::get('/hapus/{id}', [PresenController::class, 'delete'])->name('presen.delete');
    Route::get('/excel-export', [PresenController::class, 'export'])->name('presen.export');
});