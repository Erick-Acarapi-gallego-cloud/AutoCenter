<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompradorController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/motos', function () {
    return view('motos');
});

/*
|--------------------------------------------------------------------------
| CRUD de compradores
|--------------------------------------------------------------------------
*/

Route::resource('compradores', CompradorController::class)
    ->parameters([
        'compradores' => 'comprador'
    ]);