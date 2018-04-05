<?php

namespace Aquinow\BlockIo;

use Illuminate\Support\Facades\Facade;

class LaraBlockIoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blockio';
    }
}
