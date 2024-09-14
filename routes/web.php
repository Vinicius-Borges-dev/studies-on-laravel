<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/empresa', function(){
    return view('site/empresa');
});

Route::any('/any', function(){
    return 'Essa rota permite todo tipo de acesso http (put, delete, get, post)';
});
