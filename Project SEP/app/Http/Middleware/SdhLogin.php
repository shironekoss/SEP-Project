<?php

namespace App\Http\Middleware;

use App\Models\PESANANCART;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class SdhLogin
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
        $menus = [];
        if(Auth::user()==null){
            $menus = config('MenusUser.Notlogin.menu');
        }
        else if(Auth::user()->users_role == "customer"){
            $menus = config('MenusUser.Customer.menu');
        }
        else if(Auth::user()->users_role == "kasir"){
            $menus = config('MenusUser.Kasir.menu');
        }


        return $next($request);
    }
}
