<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class show extends Controller
{

    function list(Request $req){
        
        $value = $req->input();

        $text = 'imie: '.$value['name'].' nazwisko: '.$value['surname'];

        return view('formularz',['text'=>$text]);
    }



   
}
