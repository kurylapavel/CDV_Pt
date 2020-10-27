<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="FormController" method="POST">
            {{ csrf_field()}}
            <input type="text" name="name" placeholder="Name">
            @error('name')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            @error('gender')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="text" name="email" placeholder="email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="text" name="phone" placeholder="98480*****">
            @error('phone')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="submit" name="Zatwierdz"><br><br>
        </form>
</body>
</html>