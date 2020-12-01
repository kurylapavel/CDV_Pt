<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href ="{{ URL::asset('css/app.css')}}" rel = "stylesheet" type="text/css">

</head>
<body>
    <table>
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data Urodzenia</th>
            <th>Wzrost</th>
            
        </tr>
        @foreach ($data as $item)
        
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->birthday}}</td>
                <td>{{$item->weight}}</td>
            </tr>
        
        
    @endforeach
    <tr>
        <td colspan="4">{{ $data->links() }}</td>
    </tr>
</table>
</body>
</html>