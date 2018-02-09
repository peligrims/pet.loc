<?php

namespace Corp\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Http\Requests;
use Closure;
use Corp\User;
class Role
{
    public function __construct() {
		
		parent::__construct();
		
		if(Gate::denies('VIEW_ADMIN')) {
			abort(403);
		}
		
		
		$this->template = env('THEME').'.admin.index';
		
	}
	
	
	
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /* public function handle($request, Closure $next)
    {
         if( ! Auth::user()->hasRole('VIEW_ADMIN'))
        {
            return abort(403);
        }
		
		
		return $next($request);
    } */
	
	public function handle($request, Closure $next){
    }
	
	
	
	
	
}
