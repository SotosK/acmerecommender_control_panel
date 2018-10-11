<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HasAccount
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
        if (is_null(Auth::user()->userAccounts)) {
            return redirect('/userAccounts/create')->withErrors("You need to create an account first!");
        }

        return $next($request);
    }
}
