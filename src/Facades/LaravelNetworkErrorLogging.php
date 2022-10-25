<?php

namespace AdGoDev\LaravelNetworkErrorLogging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdGoDev\LaravelNetworkErrorLogging\LaravelNetworkErrorLogging
 */
class LaravelNetworkErrorLogging extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdGoDev\LaravelNetworkErrorLogging\LaravelNetworkErrorLogging::class;
    }
}
