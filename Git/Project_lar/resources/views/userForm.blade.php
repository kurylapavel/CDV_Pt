<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Informacje o uzytkowniku</h1>
        {{-- <@php
            $errors = explode(',', $errors)
        @endphp
        @foreach ($errors as $item)
            {{$item}}
            <br>
        @endforeach --}}

        {{-- @if($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="usercontroller" method="POST">
            {{ csrf_field()}}
            <input type="text" name="email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="password" name="password">

            @error('password')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="text" name="address">
            @error('address')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="submit" name="Zatwierdz"><br><br>
        </form>
    </div>
</body>
</html>