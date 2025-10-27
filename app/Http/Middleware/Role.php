<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        $user = Auth::user(); //Obtiene cual es el usuario autenticado
        if(in_array($user->role->name, explode('|', $roles))){  //Si el usuario tiene alguno del los roles que pueden acceder
            return $next($request);
        }
        
        return abort(403, 'No puede seguir');
    }
}
