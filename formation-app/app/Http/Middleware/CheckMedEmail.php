<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckMedEmail
{
    public function handle(Request $request, Closure $next): Response
    
        {
            if (Auth::check() && Auth::user()->email === 'med@gmail.com') {
                return $next($request);
            }
    
            return redirect('/404');
    }
}
