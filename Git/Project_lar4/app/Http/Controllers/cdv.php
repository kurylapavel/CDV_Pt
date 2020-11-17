<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class cdv extends Controller
{
    function index(){
        //return "Połączenie z bazą danych";
        $user = DB::table('user')->get();
        return $user;
    }
}
