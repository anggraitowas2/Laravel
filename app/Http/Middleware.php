<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            // check auth user role (I don't know how you can implement this for yourself, this is just for me)
            if(Auth::user()->role->name == 'admin'){
                return $next($request);
            } else {
                return redirect()->route('/redirects'); // for admins
            }
        }

        return redirect()->route('author.author'); // for users
    }
}