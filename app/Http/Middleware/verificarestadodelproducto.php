<?php

namespace App\Http\Middleware;

use Closure;

class verificarestadodelproducto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { if($request->estadodelproducto=="dañado"){
        return $next($request);

    }else if($request->estadodelproducto=="estado bueno")
    {
        return $next($request);

    }
    else{
        return response()->json([ "no existe el estado"],400);


    }
    }
}
