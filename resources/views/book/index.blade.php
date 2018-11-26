@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                    Acervo 
                  <!--  @if (Auth::user()->admin == true)
                  <a class="card-link float-right" href="{{ url ('/book/adicionar') }}"> Adicionar Livro </a> 
                   @endif -->
                </div>

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
                        <th> Páginas          </th>
                        <th> Informações      </th>

                        <tbody>
                             @forelse ( $books as $book )
                            <tr>
                                <td> {{ $book->title }}</td>
                                <td> {{ $book->publisher }} </td>
                                <td> {{ $book->ed }} </td>
                                <td> {{ $book->country }} </td>
                                <td> {{ $book->isbn }} </td>
                                <td> {{ $book->pages }} </td>
                                <td>                
                                @forelse($book->authors as $author)
                                    {{ $author->name }}
                                @empty
                                    <b> Nenhum autor cadastrado </b>
                                @endforelse

                                </td>

                    
                            </tr>
                            @empty
                                <b> Nenhum livro no acervo </b>
                            @endforelse
                        </tbody>
                      </table>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection