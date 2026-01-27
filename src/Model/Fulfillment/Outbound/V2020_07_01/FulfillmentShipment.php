<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentShipment extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentShipment';

    protected static $openAPITypes = [
        'amazon_shipment_id' => 'string',
        'fulfillment_center_id' => 'string',
        'fulfillment_shipment_status' => 'string',
        'shipping_date' => 'string',
        'estimated_arrival_date' => 'string',
        'shipping_notes' => 'string[]',
        'fulfillment_shipment_item' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentShipmentItem[]',
        'fulfillment_shipment_package' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentShipmentPackage[]',
    ];

    protected static $openAPIFormats = [
        'amazon_shipment_id' => null,
        'fulfillment_center_id' => null,
        'fulfillment_shipment_status' => null,
        'shipping_date' => null,
        'estimated_arrival_date' => null,
        'shipping_notes' => null,
        'fulfillment_shipment_item' => null,
        'fulfillment_shipment_package' => null,
    ];

    protected static $attributeMap = [
        'amazon_shipment_id' => 'amazonShipmentId',
        'fulfillment_center_id' => 'fulfillmentCenterId',
        'fulfillment_shipment_status' => 'fulfillmentShipmentStatus',
        'shipping_date' => 'shippingDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_shipment_item' => 'fulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'fulfillmentShipmentPackage',
    ];

    protected static $setters = [
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
        'fulfillment_shipment_status' => 'setFulfillmentShipmentStatus',
        'shipping_date' => 'setShippingDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_shipment_item' => 'setFulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'setFulfillmentShipmentPackage',
    ];

    protected static $getters = [
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
        'fulfillment_shipment_status' => 'getFulfillmentShipmentStatus',
        'shipping_date' => 'getShippingDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_shipment_item' => 'getFulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'getFulfillmentShipmentPackage',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
        $this->container['fulfillment_shipment_status'] = $data['fulfillment_shipment_status'] ?? null;
        $this->container['shipping_date'] = $data['shipping_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_shipment_item'] = $data['fulfillment_shipment_item'] ?? null;
        $this->container['fulfillment_shipment_package'] = $data['fulfillment_shipment_package'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['fulfillment_center_id'] === null) {
            $invalidProperties[] = "'fulfillment_center_id' can't be null";
        }
        if ($this->container['fulfillment_shipment_status'] === null) {
            $invalidProperties[] = "'fulfillment_shipment_status' can't be null";
        }
        if ($this->container['fulfillment_shipment_item'] === null) {
            $invalidProperties[] = "'fulfillment_shipment_item' can't be null";
        }
        return $invalidProperties;
    }

    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

    public function getFulfillmentShipmentStatus()
    {
        return $this->container['fulfillment_shipment_status'];
    }

    public function setFulfillmentShipmentStatus($fulfillment_shipment_status)
    {
        $this->container['fulfillment_shipment_status'] = $fulfillment_shipment_status;

        return $this;
    }

    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
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
    
    public function getFulfillmentShipmentItem()
    {
        return $this->container['fulfillment_shipment_item'];
    }
    
    public function setFulfillmentShipmentItem($fulfillment_shipment_item)
    {
        $this->container['fulfillment_shipment_item'] = $fulfillment_shipment_item;
        
        return $this;
    }
    
    public function getFulfillmentShipmentPackage()
    {
        return $this->container['fulfillment_shipment_package'];
    }
    
    public function setFulfillmentShipmentPackage($fulfillment_shipment_package)
    {
        $this->container['fulfillment_shipment_package'] = $fulfillment_shipment_package;
        
        return $this;
    }
}