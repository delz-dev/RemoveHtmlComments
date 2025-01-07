<?php

namespace Vendor\RemoveHtmlComments;

use Statamic\Providers\AddonServiceProvider;
use Vendor\RemoveHtmlComments\Http\Middleware\RemoveHtmlComments;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        // Add middleware to the `web` group
        $this->app['router']->pushMiddlewareToGroup('web', RemoveHtmlComments::class);
    }
}
