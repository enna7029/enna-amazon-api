<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

class ReturnItemDisposition
{
    public $value;

    const SELLABLE = 'Sellable';
    const DEFECTIVE = 'Defective';
    const CUSTOMERDAMAGED = 'CustomerDamaged';
    const CARRIERDAMAGED = 'CarrierDamaged';
    const FULFILLERDAMAGED = 'FulfillerDamaged';

    public function __construct($value = null)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'ReturnItemDisposition', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::SELLABLE,
            self::DEFECTIVE,
            self::CUSTOMERDAMAGED,
            self::CARRIERDAMAGED,
            self::FULFILLERDAMAGED,
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