<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
    * Inspecting the current route
    */
    public function handle($request, Closure $next)
    {
        if ($request->route()->named('home')) {
            // do something
        }

        return $next($request);
    }
}
