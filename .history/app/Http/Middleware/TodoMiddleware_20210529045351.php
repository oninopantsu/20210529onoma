<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TodoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['tex']
        ]
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
