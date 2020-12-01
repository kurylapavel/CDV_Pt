<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wykres extends Controller
{
    function wykres(){

        $months = array(1,2,3,1,2,3,1,2,3,1,2,3);
        $datas = array(1,1,1,1,1,1,1,1,1,1,1,1);

        foreach($months as $key => $month){
            $datas[$key] = $months[$key];
        }

        return view ('wykres_1',compact('datas'));

    }
}
