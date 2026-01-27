<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class DeliveryPreferences extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DeliveryPreferences';

    protected static $openAPITypes = [
        'delivery_instructions' => 'string',
        'drop_off_location' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DropOffLocation',
    ];

    protected static $openAPIFormats = [
        'delivery_instructions' => null,
        'drop_off_location' => null,
    ];

    protected static $attributeMap = [
        'delivery_instructions' => 'deliveryInstructions',
        'drop_off_location' => 'dropOffLocation',
    ];

    protected static $setters = [
        'delivery_instructions' => 'setDeliveryInstructions',
        'drop_off_location' => 'setDropOffLocation',
    ];

    protected static $getters = [
        'delivery_instructions' => 'getDeliveryInstructions',
        'drop_off_location' => 'getDropOffLocation',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['delivery_instructions'] = $data['delivery_instructions'] ?? null;
        $this->container['drop_off_location'] = $data['drop_off_location'] ?? null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['delivery_instructions']) && $this->container['delivery_instructions'] > 250) {
            throw new \InvalidArgumentException('Invalid value for "delivery_instructions", must be smaller than 250 length.');
        }
        return $invalidProperties;
    }

    public function getDeliveryInstructions()
    {
        return $this->container['delivery_instructions'];
    }

    public function setDeliveryInstructions($value)
    {
        $this->container['delivery_instructions'] = $value;

        return $this;
    }

    public function getDropOffLocation()
    {
        return $this->container['drop_off_location'];
    }

    public function setDropOffLocation($value)
    {
        if (!is_null($value) && $value > 250) {
            throw new \InvalidArgumentException('Invalid value for "delivery_instructions", must be smaller than 250 length.');
        }

        $this->container['drop_off_location'] = $value;

        return $this;
    }
}