<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*===========================================================================*/
    /*                          Shows login form                                 */
    /*===========================================================================*/
        public function showLoginForm(){
            return view('login');
        }
    /*===========================================================================*/
    
    
    /*===========================================================================*/
    /*                            Processes Login Form                           */
    /*===========================================================================*/
       public function processLoginForm(Request $request, \Illuminate\Contracts\Auth\Guard $auth){
           $credential = $request->only('email', 'password');
           
           if($auth->attempt($credential)){
               return redirect()->intended('/');
           }else{
               return redirect('login')->with('message','*Incorrect e-mail or password. Please try again!');
           }
       }
    /*===========================================================================*/
    
    
    /*===========================================================================*/
    /*                           Logout                                          */
    /*===========================================================================*/
        public function logout(\Illuminate\Contracts\Auth\Guard $auth){
            $auth->logout();
        return redirect('/');
    }
    /*===========================================================================*/
}
