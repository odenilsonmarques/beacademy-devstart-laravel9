<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>via cep</title>
</head>
<body>
    <fieldset>
        <legend>Busca por cep</legend>
        <form action="{{route('viacep.indexAction')}}" method="POST">
            @csrf
            <input type="text" name="cep">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
</body>
</html>