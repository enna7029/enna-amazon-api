<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentShipmentPackage extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentShipmentPackage';

    protected static $openAPITypes = [
        'package_number' => 'int',
        'carrier_code' => 'string',
        'tracking_number' => 'string',
        'amazon_fulfillment_tracking_number' => 'string',
        'estimated_arrival_date' => 'string',
        'locker_details' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\LockerDetails',
        'delivery_information' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DeliveryInformation',
    ];

    protected static $openAPIFormats = [
        'package_number' => 'int32',
        'carrier_code' => null,
        'tracking_number' => null,
        'amazon_fulfillment_tracking_number' => null,
        'estimated_arrival_date' => null,
        'locker_details' => null,
        'delivery_information' => null,
    ];

    protected static $attributeMap = [
        'package_number' => 'packageNumber',
        'carrier_code' => 'carrierCode',
        'tracking_number' => 'trackingNumber',
        'amazon_fulfillment_tracking_number' => 'amazonFulfillmentTrackingNumber',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'locker_details' => 'lockerDetails',
        'delivery_information' => 'deliveryInformation',
    ];

    protected static $setters = [
        'package_number' => 'setPackageNumber',
        'carrier_code' => 'setCarrierCode',
        'tracking_number' => 'setTrackingNumber',
        'amazon_fulfillment_tracking_number' => 'setAmazonFulfillmentTrackingNumber',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'locker_details' => 'setLockerDetails',
        'delivery_information' => 'setDeliveryInformation',
    ];

    protected static $getters = [
        'package_number' => 'getPackageNumber',
        'carrier_code' => 'getCarrierCode',
        'tracking_number' => 'getTrackingNumber',
        'amazon_fulfillment_tracking_number' => 'getAmazonFulfillmentTrackingNumber',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'locker_details' => 'getLockerDetails',
        'delivery_information' => 'getDeliveryInformation',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['amazon_fulfillment_tracking_number'] = $data['amazon_fulfillment_tracking_number'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['locker_details'] = $data['locker_details'] ?? null;
        $this->container['delivery_information'] = $data['delivery_information'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['package_number'] === null) {
            $invalidProperties[] = "'package_number' can't be null";
        }
        if ($this->container['carrier_code'] === null) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }
        return $invalidProperties;
    }

    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    public function setPackageNumber($package_number)
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }

    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    public function getAmazonFulfillmentTrackingNumber()
    {
        return $this->container['amazon_fulfillment_tracking_number'];
    }

    public function setAmznFulfillmentTrackingNumber($amazon_fulfillment_tracking_number)
    {
        $this->container['amazon_fulfillment_tracking_number'] = $amazon_fulfillment_tracking_number;

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

    public function getLockerDetails()
    {
        return $this->container['locker_details'];
    }

    public function setLockerDetails($locker_details)
    {
        $this->container['locker_details'] = $locker_details;

        return $this;
    }

    public function getDeliveryInformation()
    {
        return $this->container['delivery_information'];
    }

    public function setDeliveryInformation($delivery_information)
    {
        $this->container['delivery_information'] = $delivery_information;

        return $this;
    }
}