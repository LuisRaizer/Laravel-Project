<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ColaboradorController;

Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UsuarioController::class, 'login']);

Route::middleware(['checkLogin'])->group(function () {
    Route::get('/', [ColaboradorController::class, 'index'])->name('home');
    Route::resource('colaboradores', ColaboradorController::class)->except(['show']);
    Route::get('colaboradores/{id}/delete', [ColaboradorController::class, 'delete'])->name('colaboradores.delete');
});