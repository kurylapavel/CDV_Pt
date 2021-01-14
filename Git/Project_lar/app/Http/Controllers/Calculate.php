<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class Calculate extends Controller
{
    function index(Request $req){
        $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/C?format=json')->json();

        $value = $req->input();
        
        $i=-1;

        if($value['currency']=='Euro'){
            $i=3;
        }else if($value['currency']=='Frank'){
            $i=5;
        }else if($value['currency']=='Dolar'){
            $i=0;
        }

        if($i==-1){
            $text ='Error';
        }else{
            $x = $value['count']/$tab[0]['rates'][$i]['bid'];
            $text = 'Za kwotę '.$value['count'].' zł można zakupić '.intval($x).' '.$tab[0]['rates'][$i]['code'];
        }

        return view ('kalk',['text'=>$text]);

        

    }
}
