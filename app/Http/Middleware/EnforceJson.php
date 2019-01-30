<?php

namespace App\Http\Middleware;

use Closure;

class EnforceJson
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
        if ($request->wantsJson()) {
            return $next($request);
        }

        throw new NotFoundHttpException();
    }
}
