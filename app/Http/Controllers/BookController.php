<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Redirect;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::get();
        return view('book.lista', ['book' => $book]);
    }

    public function adicionar()
    {
        return view('book.form');
    }

    public function salvar( Request $request)
    {
      $book = new Book();
      $book = $book->create($request->all());

    \Session::flash('msg_success', 'Livro cadastrado com sucesso');
     return Redirect::to('book/adicionar');
    }

    public function editar($id)
    {
        $book = Book::FindOrFail($id);
        return view('book.form', ['book' => $book]);
    }
}
