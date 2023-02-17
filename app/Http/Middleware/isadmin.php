<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isadmin
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

       if(Auth::check())
       {
           if(Auth::user()->role == '1')
           {
               return $next($request);
           }
           else
           {
               return redirect('report')->with('status','Access Denied! as you are not as admin');
           }
       }
       else
       {
           return redirect('/')->with('status','Please Login First');
       }
    }
}
