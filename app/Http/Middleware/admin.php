<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // التحقق مما إذا كان المستخدم غير مسجل دخول
        if (!Auth::check()) {
            return redirect('/bookadmin')->with('error', 'You must be logged in to access this page.');
        }

        // التحقق مما إذا كان المستخدم الحالي ليس Admin
        if (Auth::user()->role !== 'admin') {
            return redirect('bookadmin')->with('error', 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}
