<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Subsidiary
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $subsidiary = auth()->user()->subsidiary;
            if ($subsidiary) {
                session()->put('subsidiary', $subsidiary);
            }
        }

        return $next($request);
    }
}
