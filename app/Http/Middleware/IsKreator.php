<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsKreator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
public function handle(Request $request, Closure $next): Response
{
    // Jika user belum login atau role-nya bukan kreator
    if (!auth()->check() || auth()->user()->role !== 'kreator') {
        // Tendang ke halaman Cari Kreator (atau Beranda)
        return redirect()->route('kreator.cari')->with('error', 'Akses khusus Kreator.');
    }

    return $next($request);
}
}
