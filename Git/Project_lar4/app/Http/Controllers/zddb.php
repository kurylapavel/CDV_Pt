<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class zddb extends Controller
{
    public function show()
    {
        $users = DB::table('user')
        ->select('user.name','user.surname','city.city')
        ->join('city','city_id','city.id')
        ->join('state','state_id','state.id')
        ->get();



//  $data = DB::table('user')
//         ->select('user.name','user.surname','city.city')
//         ->join('city','city_id','city.id')
//         ->join('state','state_id','state.id')
//         ->where('city.city','Bolesławiec')
//         ->get();



        return view('db',['data'=>$users]);

    }
}
