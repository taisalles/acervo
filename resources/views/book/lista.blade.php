@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Acervo 
                  <a class="card-link float-right" href="{{ url ('/book/adicionar') }}"> Adicionar Livro </a> 
                </div>

                <div class="card-body">
               
                    <table class="table">
                        <th> Título           </th>
                        <th> Editora          </th>
                        <th> Edição           </th>
                        <th> País             </th>
                        <th> ISBN             </th>
                        <th> Total de Páginas </th>
                        <th>  Gerenciar Dados     </th>

                        <tbody>
                            @foreach ($book as $book)
                            <tr>
                                <td> {{ $book->title }}</td>
                                <td> {{ $book->publisher }} </td>
                                <td> {{ $book->ed }} </td>
                                <td> {{ $book->country }} </td>
                                <td> {{ $book->isbn }} </td>
                                <td> {{ $book->pages }} </td>
                                <td>
                                <a class="btn btn-default" href="book/{{$book->id}}/editar"> Editar </a>
                              

                                </td>
                            </tr>
                            @endforeach       
                          </tbody>
                    </div>
                 </div>
        </div>
    </div>
</div>
@endsection