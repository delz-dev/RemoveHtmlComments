<?php

namespace diffrentdigital\RemoveHtmlComments;

use Statamic\Providers\AddonServiceProvider;
use diffrentdigital\RemoveHtmlComments\Http\Middleware\RemoveHtmlComments;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->app['router']->pushMiddlewareToGroup('web', RemoveHtmlComments::class);
    }
}
