<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Vamos a editar tu puta mierda</h1>

<form action="{{ $masajes->path() }}" method="post">
    @csrf
    @method('PUT')
    <h3>Tipo</h3>
    <input type="text" name="tipo" value="{{ $masajes->tipo }}">

    <h3>fecha cita</h3>
    <input type="datetime-local" name="fecha_cita" value="{{ $masajes->fecha_cita }}">

    <h3>Observaciones</h3>
    <textarea name="observaciones" id="" cols="30" rows="10"> {{ $masajes->observaciones }} </textarea>

    <button type="submit">Editar</button>
</form>

<form action="{{ $masajes->path() }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Borrar</button>
</form>

</body>
</html>
