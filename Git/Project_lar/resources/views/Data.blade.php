{{-- {{print_r($tab)}} --}}
{{-- 
<h2><b>Dane ze strony:
<a href="https://jsonplaceholder.typicode.com/posts">https://jsonplaceholder.typicode.com/posts</a>
</b></h2>

<ul>
@foreach ($tab as $value)
    <li>{{$value['title']}}</li>
@endforeach
</ul> --}}

<ul>
    @foreach ($tab as $value)
        <li>
            UserId: {{$value['id']}}
            <p>{{$value['title']}}</p>

            @foreach ($fot as $item)
              @if ($item['albumId'] == $value['id'])
                <img src="{{$item['thumbnailUrl']}}">
              @endif

            @endforeach
        </li>
    @endforeach
</ul> 
