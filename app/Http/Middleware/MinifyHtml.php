<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class MinifyHtml
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
        // Get the response from the next middleware
        $response = $next($request);

        // Check if the response is an instance of Illuminate\Http\Response
        if ($response instanceof Response) {
            $output = $response->getContent();

            // Minify the HTML output
            $minifiedOutput = $this->minifyHTML($output);

            // Set the minified HTML as the response content
            $response->setContent($minifiedOutput);
        }

        return $response;
    }

    /**
     * Minify HTML content.
     *
     * @param  string  $html
     * @return string
     */
    protected function minifyHTML($html)
    {
        return preg_replace(['/<!--(.*?)-->/s', '/\s+/'], ['', ' '], $html);
    }
}
