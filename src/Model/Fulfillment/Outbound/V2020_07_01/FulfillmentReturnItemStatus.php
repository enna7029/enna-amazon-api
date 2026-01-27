<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

class FulfillmentReturnItemStatus
{
    public $value;

    const NEW = 'New';
    const PROCESSED = 'Processed';

    public function __construct($value = null)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'FulfillmentReturnItemStatus', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::NEW,
            self::PROCESSED,
        ];

        $ucVals = array_map(function ($val) {
            return strtoupper($val);
        }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __toString()
    {
        return $this->value;
    }
}