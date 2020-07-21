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
    <h1>tus datitos maricon</h1>
    <form action="/masajes" method="POST">
        @csrf
        <h3>Tipo</h3>
        <input type="text" name="tipo">

        <h3>fecha cita</h3>
        <input type="text" name="fecha_cita">

        <h3>observaciones</h3>
        <textarea name="observaciones" cols="30" rows="10"></textarea>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>
