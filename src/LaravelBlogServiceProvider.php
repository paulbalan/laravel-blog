<?php

namespace PaulBalan\LaravelBlog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PaulBalan\LaravelBlog\Commands\LaravelBlogCommand;

class LaravelBlogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_blog_table')
            ->hasCommand(LaravelBlogCommand::class);
    }
}
