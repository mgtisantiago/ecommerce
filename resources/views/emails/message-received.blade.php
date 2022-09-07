<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <h1>Mensaje</h1>
    <p>Recibiste un mesaje de: <strong>{{ $msg['nombre'] }}</strong> - {{ $msg['correo'] }} </p>
    <p><strong>Asunto: </strong> <br/> {{ $msg['asunto'] }}</p>
    <p><strong>Mensaje: </strong><br/> {{ $msg['mensaje'] }}</p>
</body>
</html>