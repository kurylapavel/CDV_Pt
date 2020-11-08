<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
    <tr>
        <th>Waluta</th>
        <th>Ask</th>
        <th>Bid</th>
    </tr>
    <tr>
        <td>Euro</td>
        <td>{{$tab[0]['rates'][3]['ask']}}</td>
        <td>{{$tab[0]['rates'][3]['bid']}}</td>
    </tr>

    <tr>
        <td>Frank</td>
        <td>{{$tab[0]['rates'][5]['ask']}}</td>
        <td>{{$tab[0]['rates'][5]['bid']}}</td>
    </tr>

    <tr>
        <td>Euro</td>
        <td>{{$tab[0]['rates'][3]['ask']}}</td>
        <td>{{$tab[0]['rates'][3]['bid']}}</td>
    </tr>

    </table>

</body>
</html>
<style>
    th, td {
        border: 1px solid black;
      }
</style>