<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Langus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->language;
        $hl = substr($locale, 0, 2);
        if (str_contains($locale, 'zh')) {
            $hl = substr($locale, 0,  5);
        }
        if (!$hl || !in_array($hl, ['en', 'ar', 'bn','de','es','fr','hi','id','it', 'ja','ko','ms','my','pt','ru','th','tl','tr','vi','zh-cn','zh-tw'])) {
            $hl = 'en';
        }

      
        // Đặt ngôn ngữ cho ứng dụng
        app()->setLocale($hl);

        return $next($request);
    }
}
