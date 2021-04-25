<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     * 識別子チェック
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
            if ($request->hasCookie('sun_dock_identifier')){
                $is_identifier=true;
            }else{
                $is_identifier=false;
                Log::debug("hasIdentfiterKey");
            }
           
            $request->merge(['is_identifier'=> $is_identifier,]);
            return $next($request);
    
    }
}
