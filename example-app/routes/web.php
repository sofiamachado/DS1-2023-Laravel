<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', [MyController::class, 'geraWelcome']);

Route::get('/tela', [MyController::class, 'geraTela']);

Route::post('/home', [MyController::class, 'geraMyHome']);

Route::get('/salvaDados', [MyController::class, 'mostraDados']);
Route::post('/salvaDados', [MyController::class, 'gerasalvaDados']);