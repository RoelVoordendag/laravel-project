<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;


class WriterMiddleware
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
                'message' => "You are not yet logged in go ahead and login"
                ]);   
            }
            if(! (auth()->user()->role > 1) ){
                
                return redirect('/errorRole')->withErrors([
                    'message' => "You don't own this role"
                ]); 
            }
        return $next($request);
    }
}
