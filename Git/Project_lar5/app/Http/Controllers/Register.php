<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Register extends Controller
{

   

    function add(Request $request){
        DB::table('user')
        ->insert([
            'Login'=>$request->input('Login'),
            'Name'=>$request->input('Name'),
            'Surname'=>$request->input('Surname')
        ]);
        
        return redirect('register');
        
    }

        

}
