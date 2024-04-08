<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function () {
    /* Pantallas Generales */
    Route::get('/', [
        'uses' => 'FrontController@index',
        'as' => 'index',
    ]);

    /* Pantallas Generales */
    Route::get('/terminos-y-condiciones', [
        'uses' => 'FrontController@terms',
        'as' => 'terms',
    ]);

    /* Pantallas Generales */
    Route::get('/aviso-de-privacidad', [
        'uses' => 'FrontController@privacy',
        'as' => 'privacy',
    ]);
});