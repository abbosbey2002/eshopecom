<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function sign(Request $req){
       

        $login=User::where('login', $req->input('login'))->get();
        
           if(count($login)){
            $password=$login[0]->password;
               if($login[0]->login == $req->input('login') && $password == $req->input('password')){
                   return view('main');
               }else{
                   return view('login')->with('error', 'password');
                }
               }else{
                return view('login')->with('error', 'user');
               }
    }
        
    
}
