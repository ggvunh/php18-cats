<?php

namespace Furbook\Http\Middleware;

use Closure;
use Auth;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Support\Facades\Input;

class IsAdmin
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
        // $cat = $request->route('cat');
        // dd($cat);
        if (!Auth::user()->is_admin)
        {
          throw new AccessDeniedHttpException ;
        }
        return $next($request);
    }
}
