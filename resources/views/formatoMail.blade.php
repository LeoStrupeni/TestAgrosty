<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mail</title>
</head>
<body>
  <p>Cuerpo de la Respuesta</p>
  <br>
  <br>
  <p>----------------Mensaje Original----------------</p>
  <p>Fecha de Carga: {{$fecha}}</p>
  <br>
  <p>Nombre: {{$details['name']}}</p>
  <p>Email: {{$details['email']}}</p>
  <br>
  <p>Asunto: {{$subject}}</p>
  <p>Mensaje: </p>
  <p>{{$details['body']}}</p>
</body>
</html>
