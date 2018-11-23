<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcervoController extends Controller
{
    public function index()
    {
        return view('acervo.lista');
    }

    public function adicionar()
    {
        return view('acervo.form');
    }
}
