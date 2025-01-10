<?php

// src/Http/Middleware/RemoveHtmlComments.php

namespace Diffrentdigital\RemoveHtmlComments\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RemoveHtmlComments
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (strpos($response->headers->get('Content-Type'), 'text/html') !== false) {
            $content = $response->getContent();
            // Improved regex to remove HTML comments
            $content = preg_replace('/<!--[\s\S]*?-->/', '', $content);
            $response->setContent($content);
        }

        return $response;
    }
}
