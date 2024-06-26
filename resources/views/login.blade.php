<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Credenciais</legend>
        <form action="{{route('do-login')}}" method="post">
            @csrf
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="login"><br>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password"><br>
            @error('message') {{$message}}<br>@enderror
            <input type="submit" value="Acessar">
        </form>
    </fieldset>
</body>
</html>