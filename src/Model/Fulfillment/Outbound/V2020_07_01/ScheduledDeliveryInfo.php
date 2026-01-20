<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class ScheduledDeliveryInfo extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ScheduledDeliveryInfo';

    protected static $openAPITypes = [
        'delivery_Time_zone' => 'string',
        'delivery_windows' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DeliveryWindow[]',
    ];

    protected static $openAPIFormats = [
        'delivery_Time_zone' => null,
        'delivery_windows' => null,
    ];

    protected static $attributeMap = [
        'delivery_Time_zone' => 'deliveryTimeZone',
        'delivery_windows' => 'deliveryWindows',
    ];

    protected static $setters = [
        'delivery_Time_zone' => 'setDeliveryTimeZone',
        'delivery_windows' => 'setDeliveryWindows',
    ];

    protected static $getters = [
        'delivery_Time_zone' => 'getDeliveryTimeZone',
        'delivery_windows' => 'getDeliveryWindows',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['delivery_Time_zone'] = $data['delivery_Time_zone'] ?? null;
        $this->container['delivery_windows'] = $data['delivery_windows'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['delivery_Time_zone'] === null) {
            $invalidProperties[] = "'delivery_time_zone' can't be null";
        }
        if ($this->container['delivery_windows'] === null) {
            $invalidProperties[] = "'delivery_windows' can't be null";
        }
        return $invalidProperties;
    }

    public function getDeliveryTimeZone()
    {
        return $this->container['delivery_Time_zone'];
    }

    public function setDeliveryTimeZone($deliveryTimeZone)
    {
        $this->container['delivery_Time_zone'] = $deliveryTimeZone;

        return $this;
    }

    public function getDeliveryWindows()
    {
        return $this->container['delivery_windows'];
    }

    public function setDeliveryWindows($deliveryWindows)
    {
        $this->container['delivery_windows'] = $deliveryWindows;

        return $this;
    }
}