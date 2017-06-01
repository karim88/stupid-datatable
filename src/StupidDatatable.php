<?php namespace Karim88\StupidDatatable;

use Illuminate\Support\HtmlString;

class StupidDatatable
{
    
    function __construct()
    {

    }

    public function table($value='')
    {
        $html = "<div>coco $value</div>;
        return HtmlString($html);
    }

}
