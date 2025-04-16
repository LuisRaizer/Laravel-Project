<?php

use App\Http\Controllers\ColaboradorController;

Route::get('/', [ColaboradorController::class, 'index']);
Route::resource('colaboradores', ColaboradorController::class);

