<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function main(){
        return view('main');
    }
    public function header(){
        return view('layout/header');
    }

    public function cards(){
        return view('cards');
    }

    public function buttons(){
        return view('buttons');
    }

    public function charts(){
        return view('charts');
    }

    public function tables(){
        return view('tables');
    }

    public function signup(){
        return view('register');
    }

    public function forgetPassword(){
        return view('forget-password');
    }

    public function error404(){
        return view('404');
    }

    public function blank(){
        return view('blank');
    }

    public function utilitiescolor(){
        return view('utilities-color');
    }

    public function utilitiesborder(){
        return view('utilities-border');
    }

    public function utilitiesother(){
        return view('utilities-other');
    }

    public function utilitiesanimation(){
        return view('utilities-animation');
    }
}
