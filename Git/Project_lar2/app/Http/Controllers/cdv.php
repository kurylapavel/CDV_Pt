<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cdv extends Controller
{
    public function show(){
        $users = DB::table('user')->get();
        return view('cdv',['data'=>$users]);
    }
}
