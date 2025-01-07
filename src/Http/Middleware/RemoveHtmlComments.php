<?php

namespace Diffrentdigital\RemoveHtmlComments\Http\Middleware;

use Closure;

class RemoveHtmlComments
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Check if the response is HTML
        $contentType = $response->headers->get('Content-Type');
        if (str_contains($contentType, 'text/html')) {
            $content = $response->getContent();

            if ($content) {
                // Remove HTML comments
                $content = preg_replace('/<!--[\s\S]*?-->/', '', $content);
                $response->setContent($content);
            }
        }

        return $response;
    }
}
