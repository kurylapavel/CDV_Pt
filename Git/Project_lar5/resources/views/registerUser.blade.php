<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="reg" method="post">
        @csrf
        <input type="text" name="Login" placeholder="Login"><br><br>
        <input type="text" name="Name" placeholder="Name"><br><br>
        <input type="text" name="Surname" placeholder="Surname"><br><br>
        {{-- <input type="PASSWORD" name="password" placeholder="password"><br><br> --}}
        <button type="submit">nowy user</button>
    </form>
</body>
</html>