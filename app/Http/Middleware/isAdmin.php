<?php

namespace Corp\Http\Middleware;

use Closure;

class isAdmin
{
    public function handle($request, Closure $next, $adminId)
	{
    return auth()->id() == $adminId ? $next($request) : redirect('/');
	}
}