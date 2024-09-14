<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/empresa', 'site/empresa');

Route::any('/any', function(){
    return 'Essa rota permite todo tipo de acesso http (put, delete, get, post)';
});


Route::match(['delete','post'],'/match', function(){
    return 'Permite apenas acessos definidos';
});


Route::get('/produto/{id}/{categoria?}',function($id, $categoria = ''){
    return "O id do produto é: {$id}<br>E a categoria é: {$categoria}";
});


Route::redirect('/sobre', 'empresa');


Route::get('/news', function(){
    return view('site/news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});
