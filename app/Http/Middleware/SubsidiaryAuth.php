<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SubsidiaryAuth
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
        if(!auth()->check() || (
            auth()->check() &&
            !auth()->user()->hasRole('seller') &&
            !auth()->user()->hasRole('manager') &&
            !auth()->user()->hasRole('super-admin'))) {
            return redirect()->route('subsidiary.login');
        }

        return $next($request);
    }
}
