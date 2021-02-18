@extends('plantilla')

@section('title','El pozo de la ascensión')

@section('content')
    <h1 class="text-center">El pozo de la ascensión</h1>
    <div class="media border border-dark p-3 mt-2">
        <img src="/imgs/libro5.jpg" class="mr-3 mt-3 rounded-circle" style="width:200px">
        <div class="media-body">
          <p class="h4">Nacidos de la bruma: El pozo de la ascensión</p>
          <p class="mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
            consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque recusandae, quia nesciunt a qui.
        </p>
        </div>
    </div>

    <div class="row text-center mt-2">
        <button class="col-3 ms-5"><a href="libros">VOLVER</a></button>
        <div class="col-6">Por favor introduce tu correo electrónico: <input id="mail" type="text"></div>
        <button class="col"><a class="text-primary" onclick="comprar()">COMPRAR</a></button>
    </div>
@endsection