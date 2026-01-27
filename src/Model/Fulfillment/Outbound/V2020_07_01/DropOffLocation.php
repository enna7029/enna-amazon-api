<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class DropOffLocation extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DropOffLocation';

    protected static $openAPITypes = [
        'type' => 'string',
        'attributes' => 'string',
    ];

    protected static $openAPIFormats = [
        'type' => null,
        'attributes' => null,
    ];

    protected static $attributeMap = [
        'type' => 'type',
        'attributes' => 'attributes',
    ];

    protected static $setters = [
        'type' => 'setType',
        'attributes' => 'setAttributes',
    ];

    protected static $getters = [
        'type' => 'getType',
        'attributes' => 'getAttributes',
    ];

    protected $container = [];

    const FRONT_DOOR = 'FRONT_DOOR';
    const DELIVERY_BOX = 'DELIVERY_BOX';
    const GAS_METER_BOX = 'GAS_METER_BOX';
    const BICYCLE_BASKET = 'BICYCLE_BASKET';
    const GARAGE = 'GARAGE';
    const RECEPTIONIST = 'RECEPTIONIST';
    const FALLBACK_NEIGHBOR_DELIVERY = 'FALLBACK_NEIGHBOR_DELIVERY';
    const DO_NOT_LEAVE_UNATTENDED = 'DO_NOT_LEAVE_UNATTENDED';

    public function __construct(array $data = null)
    {
        $this->container['type'] = $data['type'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getUnitAllowValues();
        if (!is_null($this->container['type']) && !in_array(strtoupper($this->container['type']), $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'unit', must be one of '%s'", $this->container['type'], implode("', '", $allowedValues));
        }
        return $invalidProperties;
    }

    public function getUnitAllowValues()
    {
        $baseValues = [
            self::FRONT_DOOR,
            self::DELIVERY_BOX,
            self::GAS_METER_BOX,
            self::BICYCLE_BASKET,
            self::GARAGE,
            self::RECEPTIONIST,
            self::FALLBACK_NEIGHBOR_DELIVERY,
            self::DO_NOT_LEAVE_UNATTENDED,
        ];
        $ucVals = array_map(function ($val) {
            return strtoupper($val);
        }, $baseValues);
        return array_merge($baseValues, $ucVals);
    }

    public function getType()
    {
        return $this->container['type'];
    }

    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
}