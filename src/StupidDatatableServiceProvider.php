<?php namespace Karim88\StupidDatatable;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class StupidDatatableServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('stupid-datatable.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('stupid-datatable', function ($app)
        {
            return new Docusign($app->config->get('stupid-datatable', array()));
        });

        $this->app->booting(function()
        {
            AliasLoader::getInstance()->alias('Datatable', 'Karim88\StupidDatatable\Facades\StupidDatatable');
        });
    }

    public function provides()
    {
        return ['stupid-datatable'];
    }

}
