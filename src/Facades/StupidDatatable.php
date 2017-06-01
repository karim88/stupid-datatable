<?php namespace Karim88\StupidDatatable\Facades;

use Illuminate\Support\Facades\Facade;

class StupidDatatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stupid-datatable';
    }
}