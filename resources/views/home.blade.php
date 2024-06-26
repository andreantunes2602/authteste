<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   Bem vindo {{session('user.nome')}}<br>
    <a href="{{route('do-logout')}}">Logout</a><br>
    
</body>
</html>