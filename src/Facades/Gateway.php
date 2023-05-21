<?php

namespace Hak\GatewayMyanmar\Facades;

use Illuminate\Support\Facades\Facade;

class Gateway extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Gateway';
    }
}