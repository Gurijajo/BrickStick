<?php

namespace App\Http\Middleware;

use Closure;
use MatthiasMullie\Minify\CSS;

class MinifyCSS
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
        $response = $next($request);

        // Check if the request is for a CSS file
        if ($response->headers->get('Content-Type') === 'text/css') {
            $cssMinifier = new CSS();
            $cssMinifier->add($response->getContent());
            $minifiedCSS = $cssMinifier->minify();
            $response->setContent($minifiedCSS);
        }

        return $response;
    }
}
