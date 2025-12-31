<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use InvalidArgumentException;

class ShippingSpeedCategory
{
    public $value;

    const STANDARD = 'Standard';

    const EXPEDITED = 'Expedited';

    const PRIORITY = 'Priority';

    const SCHEDULED_DELIVERY = 'ScheduledDelivery';

    public static function getAllowableEnumValues()
    {
        $enumValues = [
            self::STANDARD,
            self::EXPEDITED,
            self::PRIORITY,
            self::SCHEDULED_DELIVERY,
        ];

        return $enumValues;
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new InvalidArgumentException(sprintf("Invalid value %s for enum 'ShippingSpeedCategory', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }
}