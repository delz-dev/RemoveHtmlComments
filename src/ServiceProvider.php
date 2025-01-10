<?php

namespace Diffrentdigital\RemoveHtmlComments;

use Statamic\Providers\AddonServiceProvider;
use Diffrentdigital\RemoveHtmlComments\Http\Middleware\RemoveHtmlComments;

class ServiceProvider extends AddonServiceProvider
{
    protected $middlewareGroups = [
        'web' => [
            RemoveHtmlComments::class,
        ],
    ];
}
