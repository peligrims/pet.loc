<?php

namespace Corp\Http\Controllers\OwnerAuth;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Auth;

class LoginController extends Controller
{
    //Where to redirect owner after login.
    protected $redirectTo = '/owner_home';

    //Trait
    use AuthenticatesUsers;

    //Custom guard for owner
    protected function guard()
    {
      return Auth::guard('web_owner');
    }

    //Shows owner login form
   public function showLoginForm()
   {
       return view('owner.auth.login');
   }
}