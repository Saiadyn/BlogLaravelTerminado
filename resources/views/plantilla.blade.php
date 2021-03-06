<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function comprar(){
            if(document.getElementById("mail").value != ""){
                alert("¡Todo listo! Recibirás un correo cuando llegue tu libro.");
            }else{
                alert("Por favor introduce tu correo.");
            }
        }
    </script>

    <title>@yield('title')</title>
    <style>
        body{
            width:90%;
            margin:0 auto;
            background-color:rgb(35, 35, 104);
            color:white;
        }
        a:hover{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <header>
        <div class="row text-center pt-2">
            <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="/">INICIO</a></div>
            <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="biografia">BIOGRAFÍA</a></div>
            <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="libros">LIBROS</a></div>
            <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="mail">CONTACTO</a></div>
        </div>
    </header>

    <div class="row">
        @yield('content')
    </div>

    <footer class="text-center fixed-bottom bg-primary text-light">
        Santiago Luque García
    </footer>
</body>
</html>