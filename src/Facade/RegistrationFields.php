<?php

namespace Slakbal\Gotowebinar\Facade;

use Illuminate\Support\Facades\Facade;
use Slakbal\Gotowebinar\Resources\RegistrationField\RegistrationField;

class RegistrationFields extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RegistrationField::class;
    }
}