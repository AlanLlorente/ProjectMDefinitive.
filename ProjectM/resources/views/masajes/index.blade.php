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
    <h1>bla bla bla</h1>

    <a href="/masajes/create">crea tu cita ahora</a>

    @forelse($citas as $cita)
        <h1><a href="{{ $cita->path() }}">{{ $cita['tipo'] }}</a></h1>
    @empty
        <h1>No hay ninguna cita creada aun</h1>
    @endforelse
</body>
</html>
