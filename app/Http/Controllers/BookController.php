<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Redirect;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


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

    public function atualizar($id, Request $request)
    {
        $book = Book::FindOrFail($id);
        $book->update($request->all());

        \Session::flash('msg_success', 'Livro atualizado com sucesso');
        return Redirect::to('book/'.$book->id.'/editar');
    }

    public function excluir($id)
    { 
        $book = Book::FindOrFail($id);
        $book->delete();
        \Session::flash('msg_success', 'deletado com sucesso');
        return Redirect::to('book');
    }
}
