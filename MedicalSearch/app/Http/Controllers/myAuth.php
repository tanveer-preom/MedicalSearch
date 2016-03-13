<?php

 namespace App\Http\Controllers;
 
 use Input;
 use Redirect;
 use Illuminate\Support\Facades\Auth;
class myAuth extends  Controller
{
    

    public function getLogin(){

        
       return view('auth.login');
    }


    public function postLogin(){

         
        $creds= Input::only('email', 'password');
        $remember= Input::has('remember');

        if (Auth::attempt($creds,$remember))
        {
            return Redirect::intended();
        }

        return Redirect::to('login')->withInput();
    }


    public function getLogout(){

        Auth::logout();
        return Redirect::to('\User');
    }
}
