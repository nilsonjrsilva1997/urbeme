<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRules
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
        if($request->user_id != \Auth::id()) {
            return response(['message' => 'Acesso não permitido'], 422);
        }

        return $next($request);
    }
}
