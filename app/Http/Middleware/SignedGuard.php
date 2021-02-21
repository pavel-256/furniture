<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class SignedGuard// singet in kernel an created by artisan an routed

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
        if (Session::has('user_id')) { // if theuser conected redirec to home page

            return redirect('');
        } else { // use the middelware
            return $next($request);
        } // app/http/Request/kernal - signup the middleware
    }
}
