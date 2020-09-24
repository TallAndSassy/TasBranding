<?php

namespace TallAndSassy\TasBranding\Facades;

use Illuminate\Support\Facades\Facade;

class TasBranding extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tasbranding';
    }
}
