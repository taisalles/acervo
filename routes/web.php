<?php


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('home', 'HomeController@index');
Route::resource('books', 'BookController')->middleware('auth');
Route::resource('authors', 'AuthorController')->middleware('auth');
Route::get('books/teste', function(){

    return view('book.teste');
}
 
);
