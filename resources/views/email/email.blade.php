<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo</title>
</head>
<body>
    <h1 style="text-align: center">MENSAJE RECIBIDO</h1>

    <p ><strong>Correo: </strong> {{$contacto["cor"]}}</p>
    <p ><strong>Asunto: </strong> {{$contacto["asu"]}}</p>
    <p ><strong>Texto: </strong> {{$contacto["txt"]}}</p>
</body>
</html>