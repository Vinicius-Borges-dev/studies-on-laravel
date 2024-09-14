<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.clientes');
});

Route::group([
    'prefix'=> 'admin',
    'as' => 'admin.'
], function(){

    Route::get('dashboard', function () {
        return 'dashboard';
    })->name('dashboard');

    Route::get('users', function () {
        return 'user';
    })->name('users');

    Route::get('clientes', function () {
        return 'clientes';
    })->name('clientes');
});
