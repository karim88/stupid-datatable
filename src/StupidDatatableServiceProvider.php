<?php namespace Karim88\StupidDatatable;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class StupidDatatableServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {

    }

    public function register()
    {


        $this->app->booting(function()
        {
            AliasLoader::getInstance()->alias('StupidDatatable', 'Karim88\StupidDatatable\Facades\StupidDatatable');
        });
    }

    public function provides()
    {
        return ['stupid-datatable'];
    }

}
