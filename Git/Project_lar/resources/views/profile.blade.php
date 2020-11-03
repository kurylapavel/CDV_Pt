<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>CDV - strona główna</h1>

    Witamy na stronie: {{session('data')['user']}}<br>
    Hasło : {{session('data')['password']}}<br>

    <a href="logout"> wyl</a>

</body>
</html>