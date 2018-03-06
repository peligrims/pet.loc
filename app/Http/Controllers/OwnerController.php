<?php

namespace Corp\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
	   
        public function __construct()
        {
            $this->middleware('isOwner:owner');
        }
		
		
		
	   public function index()
		{
		  
		   return view('/');
		  // dd( Auth::guard('owner')->user());
		}
		
		protected function guard()
        {
            return Auth::guard('owner');
        }		
    
}
