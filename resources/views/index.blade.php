@extends('plantilla')

@section('title','Página principal')

@section('content')
    <h1 class="text-center">Entradas de la base de datos</h1>
    
    @foreach($entradas as $entrada)
        <div>
            ID: {{$entrada->id}}<br>
            TÍTULO: {{$entrada->titulo}}<br>
            TEXTO: {{$entrada->texto}}<br><br>
        </div>
    @endforeach
@endsection