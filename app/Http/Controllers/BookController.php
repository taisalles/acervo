<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

use App\User;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index', ['book' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new \App\Models\Book;
        $book->title = $request->get('title');
        $book->publisher = $request->get('publisher');
        $book->ed = $request->get('ed');
        $book->country = $request->get('country');
        $book->isbn = $request->get('isbn');
        $book->pages = $request->get('pages');

        $book->save();

        $authors = $request->get('authors');

        foreach ( $authors as $author ) {
            $book->authors()->attach($author);
        }
        
        $book->save();

        return redirect('books')->with('Sucesso', 'Livro inserido');

    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $authors= Author::all();
        return view('book.edit', compact('book','authors','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $book->title = $request->get('title');
        $book->publisher = $request->get('publisher');
        $book->ed = $request->get('ed');
        $book->country = $request->get('country');
        $book->isbn = $request->get('isbn');
        $book->pages = $request->get('pages');

        $book->save();

        $authors = $request->get('authors');

        foreach ( $authors as $author ) {
            $book->authors()->attach($author);
        }
        
        $book->save();

        return redirect('books')->with('Sucesso', 'Dados atualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('home')->with('Sucesso', 'Livro deletado');

    }
}
