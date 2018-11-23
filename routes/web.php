<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/acervo', 'AcervoController@index');
Route::get('/adicionar/livro', 'AcervoController@adicionar');
