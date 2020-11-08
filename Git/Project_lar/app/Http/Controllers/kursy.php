<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class kursy extends Controller
{
    function list(){
        $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/C?format=json')->json();
        //$fot = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        
        return view ('kursy',['tab'=>$tab]);
    }
}
