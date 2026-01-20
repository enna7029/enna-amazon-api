<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class Weight extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Weight';

    protected static $openAPITypes = [
        'unit' => 'string',
        'value' => 'string'
    ];

    protected static $openAPIFormats = [
        'unit' => null,
        'value' => null
    ];

    protected static $attributeMap = [
        'unit' => 'unit',
        'value' => 'value'
    ];

    protected static $setters = [
        'unit' => 'setUnit',
        'value' => 'setValue'
    ];

    protected static $getters = [
        'unit' => 'getUnit',
        'value' => 'getValue'
    ];

    protected $container = [];

    const UNIT_KG = 'KG';
    const UNIT_KILOGRAMS = 'KILOGRAMS';
    const UNIT_LB = 'LB';
    const UNIT_POUNDS = 'POUNDS';

    public function __construct(array $data = null)
    {
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        $allowedValues = $this->getUnitAllowValues();
        if (!is_null($this->container['unit']) && !in_array(strtoupper($this->container['unit']), $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'unit', must be one of '%s'", $this->container['unit'], implode("', '", $allowedValues));
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        return $invalidProperties;
    }

    public function getUnitAllowValues()
    {
        $baseVals = [
            self::UNIT_KG,
            self::UNIT_KILOGRAMS,
            self::UNIT_LB,
            self::UNIT_POUNDS
        ];

        return $baseVals;
    }

    public function getUnit()
    {
        return $this->container['unit'];
    }

    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowValues();
        if (!is_null($unit) && !in_array(strtoupper($unit), $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf(
                "Invalid value '%s' for 'unit', must be one of '%s'",
                $unit,
                implode("', '", $allowedValues)
            ));
        }

        $this->container['unit'] = $unit;

        return $this;
    }

    public function getValue()
    {
        return $this->container['value'];
    }

    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
}