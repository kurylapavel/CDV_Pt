<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function account(Request $req){
       
       $this->validate($req,['name' => 'required'],['name.required' => 'name nie moze byc pusty']);
       $this->validate($req,['name' => 'min:3'],['name.min' => 'za maly']);
       $this->validate($req,['name' => 'max:14'],['name.max' => 'za duzy']);

       $this->validate($req,['password' => 'required'],['password.required' => 'password nie moze byc pusty']);
       $this->validate($req,['password' => 'min:8'],['password.min' => 'za maly']);
       $this->validate($req,['password' => 'max:20'],['password.max' => 'za duzy']);

       $this->validate($req,['gender' => 'required'],['gender.required' => 'gender nie moze byc pusty']);

       $this->validate($req,['email' => 'required'],['email.required' => 'email nie moze byc pusty']);

       $this->validate($req,['phone' => 'required'],['phone.required' => 'phone nie moze byc pusty']);
        
        $req->validate([
            'name' => 'required | min:3 | max:14',
            'password' => 'required | min:8 | max:20',
            'gender' => 'required',
            'email' => 'required | email',
            'phone' => 'required '
        ]);

        return<<<TORETURN
        Name: {$req->input('name')} <br>
        Password: {$req->input('password')}<br>
        Gender: {$req->input('gender')}<br>
        Email: {$req->input('email')}<br>
        Phone: {$req->input('phone')}<br>
TORETURN;
    }
}
