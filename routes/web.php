<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function () {
    /* Pantallas Generales */
    Route::get('/', [
        'uses' => 'FrontController@index',
        'as' => 'index',
    ]);

    Route::get('/acerca-de-nosotros', [
        'uses' => 'FrontController@aboutUs',
        'as' => 'nosotros',
    ]);

    Route::get('/hospitalidad', [
        'uses' => 'FrontController@spa',
        'as' => 'spa',
    ]);

    Route::get('/boutique', [
        'uses' => 'FrontController@boutique',
        'as' => 'boutique',
    ]);

    Route::get('/gastronomia', [
        'uses' => 'FrontController@gastro',
        'as' => 'gastro',
    ]);

    Route::get('/eventos/bodas', [
        'uses' => 'FrontController@eventWedding',
        'as' => 'bodas',
    ]);

    Route::get('/eventos/celebracion', [
        'uses' => 'FrontController@eventGeneral',
        'as' => 'events',
    ]);

    Route::get('/negocios', [
        'uses' => 'FrontController@business',
        'as' => 'business',
    ]);

    /* Pantallas Generales */
    Route::get('/terminos-y-condiciones', [
        'uses' => 'FrontController@terms',
        'as' => 'terms',
    ]);

    Route::get('/aviso-de-privacidad', [
        'uses' => 'FrontController@privacy',
        'as' => 'privacy',
    ]);

    Route::get('/uso-de-cookies', [
        'uses' => 'FrontController@cookies',
        'as' => 'cookies',
    ]);
});