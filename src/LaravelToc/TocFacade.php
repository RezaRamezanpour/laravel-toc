<?php

namespace RezaRamezanpour\LaravelToc;

use Illuminate\Support\Facades\Facade;

class TocFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contents';
    }
}
