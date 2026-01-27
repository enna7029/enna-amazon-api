<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

class FulfillmentAction
{
    public $value;

    const SHIP = 'Ship';

    const HOLD = 'Hold';

    public static function getAllowableEnumValues()
    {
        $baseValues = [
            self::SHIP,
            self::HOLD,
        ];
        $ucVals = array_map(function ($val) {
            return strtoupper($val);
        }, $baseValues);
        return array_merge($baseValues, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new InvalidArgumentException(sprintf("Invalid value %s for enum 'FulfillmentAction', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }
}