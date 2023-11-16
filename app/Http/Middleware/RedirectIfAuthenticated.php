<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (auth()->guard($guard)->check()) {
            // Eğer kullanıcı admin ise, admin dashboard'a yönlendir
            if (auth()->user()->hasRole('admin')) {
                return redirect('/admin-dashboard');
            }

            // Eğer kullanıcı trainer ise, trainer dashboard'a yönlendir
            if (auth()->user()->hasRole('trainer')) {
                return redirect('/trainer-dashboard');
            }

            // Eğer kullanıcı customer ise, customer dashboard'a yönlendir
            if (auth()->user()->hasRole('customer')) {
                return redirect('/customer-dashboard');
            }
        }

        return $next($request);
    }
}
