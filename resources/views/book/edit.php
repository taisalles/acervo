@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar de Livro
                </div>

                <div class="card-body">
                    @if (Session::has('msg_success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('msg_success') }}
                        </div>
                    @endif

                    View edit.php
<!--
                    <form method="post" action="{{ action('BookController@update', $id)}}">
                            {{ csrf_field() }}

                    <div class="row">
                    <label for="title"> Título: </label>
                    <input type="text" name="title" placeholder="Título do Livro" autofocus>
                    </div>

                    <div class="row">
                    <label for="publisher"> Editora: </label>
                    <input type="text" name="publisher" placeholder="Editora" autofocus>
                    </div>

                    <div class="row">
                    <label for="ed"> Edição: </label>
                    <input type="text" name="ed" placeholder="Edição" autofocus>
                    </div>

                    <div class="row">
                    <label for="country"> País: </label>
                    <input type="text" name="country" placeholder="País" autofocus>
                    </div>

                    <div class="row">
                    <label for="isbn"> ISBN: </label>
                    <input type="text" name="isbn" placeholder="ISBN" autofocus>
                    </div>

                    <div class="row">
                    <label for="pages"> Número de páginas: </label>
                    <input type="text" name="pages" placeholder="Número de Páginas" autofocus>
                    </div>

                    <div class="row">
                    <label for="author"> Nome do Autor: </label>
                        <select name="authors[]" multiple>
                        @foreach ($authors as $author)
                        <option value="{{ $author['id'] }}"> {{ $author['name'] }} </option>
                        @endforeach
                    </select> 
                    </div>

                    <div class="row">
                    <button type="submit" class="btn btn-default btn-sn"> Editar </button>
                    </div>
                    </form>
                        

                 -->
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection