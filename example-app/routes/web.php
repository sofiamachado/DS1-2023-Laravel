<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'geraMyHome']);
Route::get('/filtro', [MyController::class, 'geraMyHome'])->name('filtro');

Route::get('/addDados', [MyController::class,'novosDados']);
Route::post('/addDados', [MyController::class, 'geraSalvaDados']);

Route::get('/deletaDados/{id}', [MyController::class, 'deletaDados']);
Route::get('/editaDados/{id}', [MyController::class, 'editaCasa']);
Route::post('/editaDados/{id}', [MyController::class, 'editaDados']);