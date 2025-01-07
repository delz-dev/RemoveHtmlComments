<?php

namespace Diffrentdigital\RemoveHtmlComments;

use Statamic\Providers\AddonServiceProvider;
use Diffrentdigital\RemoveHtmlComments\Http\Middleware\RemoveHtmlComments;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        // Register middleware for the `web` group
        $this->app['router']->pushMiddlewareToGroup('web', RemoveHtmlComments::class);
    }
}
