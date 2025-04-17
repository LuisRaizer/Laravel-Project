<?php

use App\Http\Controllers\ColaboradorController;

Route::get('/', [ColaboradorController::class, 'index']);
Route::resource('colaboradores', ColaboradorController::class);
Route::get('colaboradores/{id}/delete', [ColaboradorController::class, 'delete'])->name('colaboradores.delete');
Route::get('/login', [UsuarioController::class, 'create'])->name('login');