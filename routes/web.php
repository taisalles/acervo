<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('book', 'BookController@index')->middleware('auth');


/* Grupo Admin */
Route::group(['middleware' => ['auth', 'auth.admin']], function(){
    Route::get('book/adicionar', 'BookController@adicionar');
    Route::post('book/salvar', 'BookController@salvar');
    Route::get('book/{book}/editar', 'BookController@editar');
    Route::patch('book/{book}', 'BookController@atualizar');
    Route::delete('book/{book}', 'BookController@excluir');
   
});

Route::post('userbook/add', 'UserBookController@add');
