<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get ('/home/{numero?}', function ($numero = null) {
    if ($numero) {
        return view('home', [
            'numero' => $numero,
        ]);
    }else {
        return "<h1>Pagina não encontrada!</h1>";
    }
    
});

