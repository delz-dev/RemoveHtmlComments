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
        /** @var Response $response */
        $response = $next($request);

        // Ensure the response is an instance of Response and the environment is production
        if ($this->shouldRemoveHtmlComments($response)) {
            $content = $response->getContent();

            // Use a safer regex to remove comments while preserving content
            $content = preg_replace('/<!--(?!<!)[^\[>][\s\S]*?-->/', '', $content);

            $response->setContent($content);
        }

        return $response;
    }

    /**
     * Determine if HTML comments should be removed from the response.
     *
     * @param Response $response
     * @return bool
     */
    private function shouldRemoveHtmlComments(Response $response): bool
    {
        return app()->environment('production')
            && $response->headers->has('Content-Type')
            && str_contains($response->headers->get('Content-Type'), 'text/html');
    }
}
