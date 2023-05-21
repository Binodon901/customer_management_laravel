<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('form');
    }
    public function register(Request $req){
        
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirm'=>'required|same:password',
        ]);
        $customer=new Customer;
        $customer->name=$req['name'];
        $customer->email=$req['email'];
        $customer->password=$req['password'];
        $customer->save();
        print_r($req->all());
    }
}
