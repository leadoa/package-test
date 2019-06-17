<?php

namespace Leadoa\PackageTest;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('test', function () {
            return new Test();
        });
    }
}