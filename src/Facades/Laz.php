<?php

namespace Laravelazier\Facades;

use Illuminate\Support\Facades\Facade;

class Laz extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravelazier.laz';
    }
}
