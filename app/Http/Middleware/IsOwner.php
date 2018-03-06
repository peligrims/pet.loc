<?php

namespace Corp\Http\Middleware;

use Closure;
use Auth;

class IsOwner
{
     public function handle($request, Closure $next)
        {
            if (!Auth::guard('owner')->check()) {
                return redirect('/');
            }
            dd(Auth::guard('owner')->check);
			return $next($request);
        }
    
}
