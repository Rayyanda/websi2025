<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Symfony\Component\HttpFoundation\Response;

class TrackVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah URL dimulai dengan "admin"
        if (!str_starts_with($request->path(), 'admin')) {
            Visit::create([
                'ip_address'   => $request->ip(),
                'user_agent'   => $request->userAgent(),
                'path'         => '/' . ltrim($request->path(), '/'),
                'visited_at'   => now(),
            ]);
        }
        return $next($request);
    }
}
