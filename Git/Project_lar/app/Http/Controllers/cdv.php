<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cdv extends Controller
{
    function shop(Request $req){
        return $req->file('file')->store('docs');
    }
}
