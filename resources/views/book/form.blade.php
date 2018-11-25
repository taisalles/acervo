@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Acervo
                    <a class="card-link float-right" href="{{ url ('/book') }}"> voltar</a>
                
                </div>

                <div class="card-body">
                    @if (Session::has('msg_success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('msg_success') }}
                        </div>
                    @endif

                    @if(Request::is('*/editar'))
                    
                         {!! Form::model($book, ['method' => 'PATCH', 'url' => 'book/'.$book->id]) !!} 
                    @else
                    
                         {!!Form::open(['url' => 'book/salvar']) !!} 
                    @endif

                         {!! Form::label( 'name','Título:') !!}  
                         {!! Form::input( 'text','title', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'título']) !!}  

                         {!! Form::label( 'publisher','Editora:') !!}  
                         {!! Form::input( 'text','publisher', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'editora']) !!} 

                         {!! Form::label( 'ed','Edição:') !!}  
                         {!! Form::input( 'text','ed', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'edição']) !!} 

                         {!! Form::label( 'country','País:') !!}  
                         {!! Form::input( 'text','country', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'país']) !!}   

                         {!! Form::label( 'isbn','ISBN:') !!}  
                         {!! Form::input( 'text','isbn', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'ISBN']) !!} 

                         {!! Form::label( 'pages','Número de Páginas:') !!}  
                         {!! Form::input( 'text','pages', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'número de páginas']) !!} 
               
                         {!! Form::submit('salvar', ['class' => 'btn btn-primary']) !!}

                         {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection