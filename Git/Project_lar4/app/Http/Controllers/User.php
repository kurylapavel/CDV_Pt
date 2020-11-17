<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class User extends Controller
{
    function index(){
        //return DB::table('user')->get();

        //return DB::table('user')->where('name','Pavel')->get();

        // $data = DB::table('user')->count();
        // echo $data;

        // $data = DB::table('user')->first();
        // print_r($data);

        // $data = DB::table('user')->find(1);
        // print_r($data);

        //return DB::table('user')->where('name', 'Anna')->delete();

        //return DB::table('user')->insert(['name'=>'Anna','surname'=> 'Nowak','birthday'=>'2019-10-29']);

        // return  DB::table('user')->where('surname','Nowak')
        // ->update(
        //     [
        //         'surname'=>'Kowal'
        //     ]
        // );


        // return  DB::table('user')->where('surname','Kowal')
        // ->update(
        //     [
        //         'name'=>'Agnieszka',
        //         'surname'=>'Nowak',
        //         'birthday'=>'1999-01-01'
        //     ]
        // );

        // return DB::table('user')
        // ->max('height');

        // return DB::table('user')
        // ->sum('height');

        // $data = round(DB::table('user')
        // ->avg('height'),2);


        // return $data;

        // $data = DB::table('user')->get();

        // echo '<pre>';
        //     print_r($data);
        // echo '</pre>';


        // $data = DB::table('user')
        // ->join('city','city_id','city.id')
        // ->get();

        // echo '<pre>';
        //     print_r($data);
        // echo '</pre>';


        

    }
}
