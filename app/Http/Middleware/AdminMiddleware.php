<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        $user = Auth::User();

        if (!$user) {
             return redirect()->route('login');
        }
       if ($user->role != User::ADMIN_ROLE) {
        return redirect()->route('login');
       }
        
        return $next($request);
    }
}
