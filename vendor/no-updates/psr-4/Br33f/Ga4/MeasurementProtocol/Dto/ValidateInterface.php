<?php
/**
 * User: Damian Zamojski (br33f)
 * Date: 22.06.2021
 * Time: 11:10
 */

namespace Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Dto;

use Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Exception\ValidationException;

interface ValidateInterface
{
    /**
     * Method validates object. Throws exception if error, returns true if valid.
     * @return boolean
     * @throws ValidationException
     */
    public function validate();
}