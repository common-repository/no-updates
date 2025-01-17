<?php
/**
 * User: Damian Zamojski (br33f)
 * Date: 25.06.2021
 * Time: 13:52
 */

namespace Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Dto\Event;

use Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Dto\Parameter\AbstractParameter;
use Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Enum\ErrorCode;
use Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Exception\ValidationException;

/**
 * Class SearchEvent
 * @package Rich4rdMuvirimi\NoUpdates\Vendor\Br33f\Ga4\MeasurementProtocol\Dto\Event
 * @method string getSearchTerm()
 * @method SearchEvent setSearchTerm(string $searchTerm)
 */
class SearchEvent extends AbstractEvent
{
    private $eventName = 'search';

    /**
     * SearchEvent constructor.
     * @param AbstractParameter[] $paramList
     */
    public function __construct(array $paramList = [])
    {
        parent::__construct($this->eventName, $paramList);
    }

    /**
     * @return bool
     * @throws ValidationException
     */
    public function validate()
    {
        if (empty($this->getSearchTerm())) {
            throw new ValidationException('Field "search_term" is required if "value" is set', ErrorCode::VALIDATION_FIELD_REQUIRED, 'search_term');
        }

        return true;
    }
}