<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isAuthenticated = Auth::guard('admin')->check();

        if (!$isAuthenticated) {
            return redirect()->route('admin.login')->with('checklogin', 'please need login first !');
        }
        return $next($request);
    }
}
