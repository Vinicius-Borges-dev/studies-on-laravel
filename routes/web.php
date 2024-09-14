<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'dashboard';
    });

    Route::get('/users', function () {
        return 'user';
    });

    Route::get('/clientes', function () {
        return 'clientes';
    });
});
