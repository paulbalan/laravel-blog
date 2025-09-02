<?php

namespace PaulBalan\LaravelBlog;

use PaulBalan\LaravelBlog\Commands\LaravelBlogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
