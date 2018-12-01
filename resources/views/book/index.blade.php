@extends('layouts.app')

@section('content')
<div class="container">
    <div id="app">
        <vue-books-read> </vue-books-read>
        <vue-books-edit> </vue-books-edit>
        <two-component> </two-component>
        <example-component> </example-component>
           vue books read here!
    </div> 
</div>

<script src="js/main.js"> </script>
@endsection