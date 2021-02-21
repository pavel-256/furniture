<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CmsGuard// singet in kernel an created by artisan an routed

{
    public function handle($request, Closure $next)
    {
        if (Session::has('is_admin')) { // if theuser conected redirec to home page    from user.php

            return $next($request);
        } else { // use the middelware
            return redirect('user/signin');
        }
    }
}
