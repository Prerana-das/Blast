<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
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
        if(is_null(Auth::user()))
        {
            return redirect('wel');
        }
        elseif (Auth::user()->user_type != 'Admin') {
            # code...
             return redirect('/');
        }
        return $next($request);
    }
}
