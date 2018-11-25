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

                 @if (Session::has('msg_success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('msg_success') }}
                        </div>
                    @endif
               
                    <table class="table">
                        <th> Título           </th>
                        <th> Editora          </th>
                        <th> Edição           </th>
                        <th> País             </th>
                        <th> ISBN             </th>
                        <th> Páginas </th>
                        <th> Alteração     </th>

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
                                    <a href="book/{{$book->id}}/editar" class="btn btn-default btn-sn"> Editar </a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => '/book/'.$book -> id, 'style' => 'display:inline;']) !!}
                                    <button type="submit" class="btn btn-default btn-sn"> Excluir </button>
                                    {!! Form::close() !!}
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