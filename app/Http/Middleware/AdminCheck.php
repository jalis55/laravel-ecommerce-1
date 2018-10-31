<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session_start();
        $admin_id=session::get('admin_id');
        if($admin_id != NULL)
        {
            return redirect::to('dashboard')->send();
        }
        return $next($request);
    }
}
