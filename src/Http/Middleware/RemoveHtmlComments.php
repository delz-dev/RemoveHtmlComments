<?php

namespace Diffrentdigital\RemoveHtmlComments\Http\Middleware;

use Closure;

class RemoveHtmlComments
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $content = $response->getContent();
            $content = preg_replace('/<!--(.|\s)*?-->/', '', $content);
            $response->setContent($content);
        }

        return $response;
    }
}
