<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\User;
use App\Controllers\BookController;
use App\Controllers\HomeController;

class UserBookController extends Controller
{
    public function add ()
    {
        
    dd(Input::has('see'));
    dd(Input::has('want'));
    $see = Input::has('see') ? true : false;
    $want = Input::has('want') ? true : false;

    UserBook:: create ([
            'user_id'=> Auth::user()->id,
            'book_id' => $id,
            'see' => $see,
            'want'=> $want,

    ]);

    return view('book.lista', ['book' => $book]);
    
     }
}

