<?php

// src/Http/Middleware/RemoveHtmlComments.php

namespace Diffrentdigital\RemoveHtmlComments\Http\Middleware;

use Closure;

class RemoveHtmlComments
{
    public function handle($request, Closure $next)
    {
        \Log::info('RemoveHtmlComments middleware started.');

        $response = $next($request);

        if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            \Log::info('Processing HTML response.');

            $content = $response->getContent();
            // Improved regex to remove HTML comments
            $content = preg_replace('/<!--[\s\S]*?-->/', '', $content);
            $response->setContent($content);

            \Log::info('HTML comments removed.');
        }

        return $response;
    }
}
