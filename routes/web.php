<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ColaboradorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [ColaboradorController::class, 'index'])->name('home');
    Route::resource('colaboradores', ColaboradorController::class)->except(['show']);
    Route::get('colaboradores/{id}/delete', [ColaboradorController::class, 'delete']) ->name('colaboradores.delete');
});