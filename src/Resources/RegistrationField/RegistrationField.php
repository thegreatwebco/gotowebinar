<?php

namespace Slakbal\Gotowebinar\Resources\RegistrationField;

use Slakbal\Gotowebinar\Resources\AbstractResource;

final class RegistrationField extends AbstractResource
{
    use RegistrationFieldOperations, RegistrationFieldQueryParameters;
    
    /** RESOURCE PATH **/
    protected $baseResourcePath = '/organizers/:organizerKey/webinars/:webinarKey/registrants/fields';

    public function __construct()
    {
        $this->resourcePath = $this->baseResourcePath;
    }
}
