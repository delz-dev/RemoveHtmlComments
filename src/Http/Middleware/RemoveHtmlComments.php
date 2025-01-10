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
        $content = $response->getContent();
        $content = preg_replace('/<!--[\s\S]*?-->/', '', $content);
        $response->setContent($content);
        return $response;
    }
}
