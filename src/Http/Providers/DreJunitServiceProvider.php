<?php

namespace Dresong\Http\Providers;

use Illuminate\Support\ServiceProvider;

class DreJunitSeriveProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'drejunit');
    }
}
