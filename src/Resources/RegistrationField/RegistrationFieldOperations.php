<?php

namespace Slakbal\Gotowebinar\Resources\RegistrationField;

/*
 * Operations available for webinar registration fields.
 */

trait RegistrationFieldOperations
{
    /**
     * Set the webinar key.
     */
    public function webinarKey($webinarKey): self
    {
        $this->pathKeys['webinarKey'] = $webinarKey;

        return $this;
    }
}
