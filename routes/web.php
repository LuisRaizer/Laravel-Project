<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Middleware\AuthSession;

Route::get('/', [UsuarioController::class, 'showLoginForm'])->name('loginform');
Route::post('/', [UsuarioController::class, 'login'])->name('login');

Route::middleware(['auth.session'])->group(function () {
    Route::get('/home', [ColaboradorController::class, 'index'])->name('home');
    Route::resource('colaboradores', ColaboradorController::class)->except(['show']);
    Route::get('colaboradores/{id}/delete', [ColaboradorController::class, 'delete'])->name('colaboradores.delete');
    Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');
});
