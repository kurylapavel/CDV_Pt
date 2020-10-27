<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function account(Request $req){
        // return $req->input();
        //return $req->path();
        //return $req->method();
        // $this->validate($req,['address' => 'required'],['address.required' => 'Adres nie moze byc pusty']);
        // $this->validate($req,['address' => 'min:5'],['address.min' => 'za maly']);
        // $this->validate($req,['address' => 'max:8'],['address.max' => 'za duzy']);

        
        $req->validate([
            'email' => 'required | email',
            'password' => 'required',
            'address' => 'required | min:5 | max:8'
        ],
        [
            'email.required' => 'Email jest wymagany',
            'email.email' => 'Email jest nie poprawny',
            'password.required' => 'Password jest wymagany',
            'address.required' => 'Address jest wymagany',
            'address.min' => 'Za maly',
            'address.max' => 'Za duzy',
        ]);

        return $req->input('password');
    }
}
