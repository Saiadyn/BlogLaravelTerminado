@extends('plantilla')

@section('title','Contacto')

@section('content')
    <h1 class="text-center">Sugerencias</h1>
    <div class="mx-auto col mt-1 border border-dark p-3">
        <form action="{{route('contacto.store')}}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <input name="cor" class="col form-control" type="text" placeholder="Correo electrónico">
                </div>
                <div class="col">
                    <input name="asu" class="col form-control" type="text" placeholder="Asunto">
                </div>
            </div>
            <div class="col">
                <textarea name="txt" style="resize:none" class="w-100" rows="5" placeholder=" Escribe aquí . . ."></textarea>
            </div>

            <div class="row">
                <div class="col">
                    <button class="col border rounded py-2 mt-3"><strong>Enviar</strong></button>
                </div>
            </div>
        </form>
    </div>
@endsection