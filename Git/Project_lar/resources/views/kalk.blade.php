<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Calculate" method="post">
        @csrf
        <input type="text" name="count" placeholder="200 zł"><br><br>
        <select name ="currency">
            <option>Euro</option>
            <option>Frank</option>
            <option>Dolar</option>
        </select><br><br>
        <button type="submit">Calculate</button>
        <br><br>
        
        <?php
                echo $text ?? '';    
        ?>
    </form>
</body>
</html>