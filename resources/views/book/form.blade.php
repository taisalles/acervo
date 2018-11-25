@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar livro no acervo
                    <a class="card-link float-right" href="{{ url ('/book') }}"> voltar</a>
                
                </div>

                <div class="card-body">
                    @if (Session::has('msg_success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('msg_success') }}
                        </div>
                    @endif

                    @if(Request::ls('*/editar'))
                        {!! Form::model($book, ['method' => 'PATCH', 'url' => 'book/editar']) !!}
                    @else
                         {!!Form::open(['url' => 'book/salvar']) !!}
                    @endif

                         {!! Form::input( 'text','title', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'título']) !!}  
                         {!! Form::input( 'text','publisher', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'editora']) !!} 
                         {!! Form::input( 'text','ed', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'edição']) !!} 
                         {!! Form::input( 'text','country', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'país']) !!}   
                         {!! Form::input( 'text','isbn', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'ISBN']) !!} 
                         {!! Form::input( 'text','pages', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'número de páginas']) !!} 
               
                         {!! Form::submit('salvar', ['class' => 'btn btn-primary']) !!}

                         {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection