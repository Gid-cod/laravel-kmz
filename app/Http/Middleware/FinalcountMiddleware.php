<?php

namespace App\Http\Middleware;

use App\Models\Item;
use Closure;
use Illuminate\Http\Request;

class FinalcountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();
        $items = $user->carts->toArray();
        $finalCount = collect($items)->sum('available');
        view()->share('finalCount', $finalCount);
        return $next($request);
    }
}
