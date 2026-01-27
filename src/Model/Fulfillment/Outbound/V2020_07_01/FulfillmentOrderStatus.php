<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

class FulfillmentOrderStatus
{
    public $value;

    const NEW = 'New';
    const RECEIVED = 'Received';
    const PLANNING = 'Planning';
    const PROCESSING = 'Processing';
    const CANCELLED = 'Cancelled';
    const COMPLETE = 'Complete';
    const COMPLETEPARTIALLED = 'CompletePartialled';
    const UNFULFILLABLE = 'Unfulfillable';
    const INVALID = 'Invalid';

    public static function getAllowableEnumValues()
    {
        $baseValues = [
            self::NEW,
            self::RECEIVED,
            self::PLANNING,
            self::PROCESSING,
            self::CANCELLED,
            self::COMPLETE,
            self::COMPLETEPARTIALLED,
            self::UNFULFILLABLE,
            self::INVALID,
        ];

        $ucVals = array_map(function ($val) {
            return strtoupper($val);
        }, $baseValues);
        return array_merge($baseValues, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new InvalidArgumentException(sprintf("Invalid value %s for enum 'FulfillmentOrderStatus', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }
}