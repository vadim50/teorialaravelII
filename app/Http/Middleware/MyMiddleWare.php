<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param)
    {
        if($request->route('page') != 'pages' && $param == 'admin'){
            return redirect()->route('home');
        }
        //echo 'Middle';
        $responce = $next($request);

        echo " Middle ";
        return $responce;
    }
}
