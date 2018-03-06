<?php

namespace Corp\Http\Middleware;

use Closure;


//Auth Facade
use Auth;

class AuthenticateOwner
{
   public function handle($request, Closure $next)
   {
       //If request does not comes from logged in seller
       //then he shall be redirected to Seller Login page
       if (! Auth::guard('web_owner')->check()) {
           return redirect('/owner_login');
       }

       return $next($request);
   }
}