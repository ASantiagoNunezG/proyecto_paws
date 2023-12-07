<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user()->role !== $role) {
            return $this->refresh($request);
        }

        return $next($request);
    }

    protected function refresh(Request $request): Response
    {
        return new Response('', 204, ['Refresh' => '0;url=' . $request->fullUrl()]);
    }
    
}
