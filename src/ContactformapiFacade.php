<?php

namespace EcoOnline\Contactformapi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EcoOnline\Contactformapi\Contactformapi
 */
class ContactformapiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contactformapi';
    }
}
