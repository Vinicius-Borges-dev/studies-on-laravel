<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('admin.')->group(function () {
    Route::get('admin/dashboard', function () {
        return 'dashboard';
    })->name('dashboard');

    Route::get('admin/users', function () {
        return 'user';
    })->name('users');

    Route::get('admin/clientes', function () {
        return 'clientes';
    })->name('clientes');
});
