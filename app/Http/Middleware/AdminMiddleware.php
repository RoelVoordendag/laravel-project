<?php

namespace App\Http\Middleware;

use App\User; 
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware 
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
        //checking if user is logged in
        if(! Auth::check() ){
            return redirect('/login')->withErrors([
                'message' => "You are not logged in"
                ]);   
            }
            if(! (auth()->user()->role > 2) ){
                
                return redirect('/errorRole')->withErrors([
                    'message' => "You don't own this role"
                ]); 
            }
        return $next($request);
        }
}
