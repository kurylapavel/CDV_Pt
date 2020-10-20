<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function account(Request $req){
        // return $req->input();
        //return $req->path();
        //return $req->method();
       // $this->validate($req,['address' => 'required'],['address.required' => 'Adres nie moze byc pusty']);
       // $this->validate($req,['address' => 'min:5'],['address.min' => 'za maly']);
       // $this->validate($req,['address' => 'max:8'],['address.max' => 'za duzy']);

        
        $req->validate([
            'name' => 'required | min:3 | max:14',
            'password' => 'required | min:8 | max:16',
            'gender' => 'required',
            'email' => 'required | email',
            'phone' => 'required | phone',
        ]);

        return $req->input('password');
    }
}
