<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! Auth::check() ){
            return redirect('/login')->withErrors([
                'message' => "You are not logged in"
                ]);   
            }
            if(! (auth()->user()->role >  0) ){
                
                return redirect('/errorRole')->withErrors([
                    'message' => "You don't own this role"
                ]); 
            }
        return $next($request);
    }
}
