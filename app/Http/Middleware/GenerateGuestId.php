<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class GenerateGuestId
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
        if (!Cookie::has('guest_id')) {
            // Make it last 40 years
            Cookie::queue('guest_id', Str::uuid(), 40 * 365 * 24 * 60);
        }
        $request->guest_id = Cookie::get('guest_id');

        return $next($request);
    }
}
