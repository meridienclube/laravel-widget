<?php

namespace ConfrariaWeb\Widget\Providers;

use ConfrariaWeb\Widget\Contracts\WidgetContract;
use ConfrariaWeb\Widget\Repositories\WidgetRepository;
use ConfrariaWeb\Widget\Services\WidgetService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class WidgetServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'widget');
        //$this->loadTranslationsFrom(__DIR__ . '/../Translations', 'widget');
        Blade::component('widget::components.widget', 'widget');
        Blade::component('widget::components.widgets', 'widgets');
    }

    public function register()
    {
        $this->app->bind(WidgetContract::class, WidgetRepository::class);
        $this->app->bind('WidgetService', function ($app) {
            return new WidgetService($app->make(WidgetContract::class));
        });
    }

}
