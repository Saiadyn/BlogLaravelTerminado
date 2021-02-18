@extends('plantilla')

@section('title', 'Libros')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Libros de la web</h1>
            </div>
        </div>

        <div class="row">
            <div class="media border border-dark p-3 col-4">
                <img src="/imgs/libro1.jpg" class="mr-3 mt-3" style="width:50px">
                <div class="media-body">
                  <p class="h4">El arco de la guadaña: Siega</p>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
                    consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque.
                </p>

                <button><a href="libro1">INFORMACIÓN</a></button>
                </div>
            </div>
        
            <div class="media border border-dark p-3 col-4">
                <img src="/imgs/libro2.jpg" class="mr-3 mt-3" style="width:50px">
                <div class="media-body">
                  <p class="h4">El arco de la guadaña: Nimbo</p>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
                    consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque.
                </p>

                <button><a href="libro2">INFORMACIÓN</a></button>
                </div>
            </div>
        
            <div class="media border border-dark p-3 col-4">
                <img src="/imgs/libro3.jpg" class="mr-3 mt-3" style="width:50px">
                <div class="media-body">
                  <p class="h4">El arco de la guadaña: Trueno</p>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
                    consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque.
                </p>

                <button><a href="libro3">INFORMACIÓN</a></button>
                </div>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="media border border-dark p-3 col-4">
                <img src="/imgs/libro4.jpg" class="mr-3 mt-3" style="width:50px">
                <div class="media-body">
                  <p class="h4">Nacidos de la bruma: El imperio final</p>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
                    consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque.
                </p>

                <button><a href="libro4">INFORMACIÓN</a></button>
                </div>
            </div>
        
            <div class="media border border-dark p-3 col-4">
                <img src="/imgs/libro5.jpg" class="mr-3 mt-3" style="width:50px">
                <div class="media-body">
                  <p class="h4">Nacidos de la bruma: El pozo de la ascensión</p>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
                    consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque.
                </p>

                <button><a href="libro5">INFORMACIÓN</a></button>
                </div>
            </div>
        
            <div class="media border border-dark p-3 col-4">
                <img src="/imgs/libro6.jpg" class="mr-3 mt-3" style="width:50px">
                <div class="media-body">
                  <p class="h4">Nacidos de la bruma: El héroe de las Eras</p>
                  <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nemo reiciendis. Neque assumenda
                    consequatur delectus et deleniti ratione tempora molestias nemo optio beatae accusamus doloremque.
                </p>

                <button><a href="libro6">INFORMACIÓN</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
