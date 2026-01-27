<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class DeliveryWindow extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DeliveryWindow';

    protected static $openAPITypes = [
        'start_date' => 'string',
        'end_date' => 'string',
    ];

    protected static $openAPIFormats = [
        'start_date' => null,
        'end_date' => null,
    ];

    protected static $attributeMap = [
        'start_date' => 'startDate',
        'end_date' => 'endDate',
    ];

    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
    ];

    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        return $invalidProperties;
    }

    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }
}
