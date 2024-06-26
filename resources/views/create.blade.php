<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoa</title>
</head>
<body>
    <fieldset>
        <legend>Pessoa</legend>
        <form action="{{route('pessoa.store')}}" method="post">
            @csrf
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>
            <label for="nome">cpf: </label>
            <input type="text" name="cpf" id="cpf"><br>
            <label for="senha">Senha:</label>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="Salvar">
        </form>
    </fieldset>
</body>
</html>