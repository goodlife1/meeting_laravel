<?php

namespace App\Http\Middleware;

use Closure;

class UserActivatedEmailVerification
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
       if(\Auth::user()->activated == true){
           return $next($request);

       }else{
           return redirect()->route('verif_email');
       }

    }
}
