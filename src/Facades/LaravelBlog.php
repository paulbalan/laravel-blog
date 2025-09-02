<?php

namespace PaulBalan\LaravelBlog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PaulBalan\LaravelBlog\LaravelBlog
 */
class LaravelBlog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PaulBalan\LaravelBlog\LaravelBlog::class;
    }
}
