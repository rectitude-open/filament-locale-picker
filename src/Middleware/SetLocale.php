<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentLocalePicker\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale') &&
            isset(config('app.locales')[session('locale')]) &&
            app()->getLocale() !== session('locale')
        ) {
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
