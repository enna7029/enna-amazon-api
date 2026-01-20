<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentPreviewShipment extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentPreviewShipment';

    protected static $openAPITypes = [
        'earliest_ship_date' => 'string',
        'latest_ship_date' => 'string',
        'earliest_arrival_date' => 'string',
        'latest_arrival_date' => 'string',
        'shipping_notes' => 'string[]',
        'fulfillment_preview_items' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentPreviewItem[]',
    ];

    protected static $openAPIFormats = [
        'earliest_shipDate' => null,
        'latest_ship_date' => null,
        'earliest_arrival_date' => null,
        'latest_arrival_date' => null,
        'shipping_notes' => null,
        'fulfillment_preview_items' => null,
    ];

    protected static $attributeMap = [
        'earliest_shipDate' => 'earliestShipDate',
        'latest_ship_date' => 'latestShipDate',
        'earliest_arrival_date' => 'earliestArrivalDate',
        'latest_arrival_date' => 'latestArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_preview_items' => 'fulfillmentPreviewItems',
    ];

    protected static $setters = [
        'earliest_shipDate' => 'setEarliestShipDate',
        'latest_ship_date' => 'setLatestShipDate',
        'earliest_arrival_date' => 'setEarliestArrivalDate',
        'latest_arrival_date' => 'setLatestArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_preview_items' => 'setFulfillmentPreviewItems',
    ];

    protected static $getters = [
        'earliest_shipDate' => 'getEarliestShipDate',
        'latest_ship_date' => 'getLatestShipDate',
        'earliest_arrival_date' => 'getEarliestArrivalDate',
        'latest_arrival_date' => 'getLatestArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_preview_items' => 'getFulfillmentPreviewItems',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['earliest_shipDate'] = $data['earliest_shipDate'] ?? null;
        $this->container['latest_ship_date'] = $data['latest_ship_date'] ?? null;
        $this->container['earliest_arrival_date'] = $data['earliest_arrival_date'] ?? null;
        $this->container['latest_arrival_date'] = $data['latest_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_preview_items'] = $data['fulfillment_preview_items'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['earliest_shipDate'] === null) {
            $invalidProperties[] = "'fulfillment_preview_items' can't be null";
        }
        return $invalidProperties;
    }

    public function getEarliestShipDate()
    {
        return $this->container['earliest_ship_date'];
    }

    public function setEarliestShipDate($earliest_ship_date)
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    public function getLatestShipDate()
    {
        return $this->container['latest_ship_date'];
    }

    public function setLatestShipDate($latest_ship_date)
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    public function getEarliestArrivalDate()
    {
        return $this->container['earliest_arrival_date'];
    }

    public function setEarliestArrivalDate($earliest_arrival_date)
    {
        $this->container['earliest_arrival_date'] = $earliest_arrival_date;

        return $this;
    }

    public function getLatestArrivalDate()
    {
        return $this->container['latest_arrival_date'];
    }

    public function setLatestArrivalDate($latest_arrival_date)
    {
        $this->container['latest_arrival_date'] = $latest_arrival_date;
    }

    public function getShippingNotes()
    {
        return $this->container['shipping_notes'];
    }

    public function setShippingNotes($shipping_notes)
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }

    public function getFulfillmentPreviewItems()
    {
        return $this->container['fulfillment_preview_items'];
    }

    public function setFulfillmentPreviewItems($fulfillment_preview_items)
    {
        $this->container['fulfillment_preview_items'] = $fulfillment_preview_items;

        return $this;
    }
}