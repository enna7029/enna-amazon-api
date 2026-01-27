<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentShipmentItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentShipmentItem';

    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => 'int',
        'package_number' => 'int',
        'serial_number' => 'string',
        'manufacturer_lot_codes' => 'string[]',
    ];

    protected static $openAPIFormats = [
        'seller_sku' => null,
        'seller_fulfillment_order_item_id' => null,
        'quantity' => 'int32',
        'package_number' => 'int32',
        'serial_number' => null,
        'manufacturer_lot_codes' => null,
    ];

    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'package_number' => 'packageNumber',
        'serial_number' => 'serialNumber',
        'manufacturer_lot_codes' => 'manufacturerLotCodes',
    ];

    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'package_number' => 'setPackageNumber',
        'serial_number' => 'setSerialNumber',
        'manufacturer_lot_codes' => 'setManufacturerLotCodes',
    ];

    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'package_number' => 'getPackageNumber',
        'serial_number' => 'getSerialNumber',
        'manufacturer_lot_codes' => 'getManufacturerLotCodes',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['manufacturer_lot_codes'] = $data['manufacturer_lot_codes'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' is required";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' is required";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' is required";
        }
        return $invalidProperties;
    }

    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
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

    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    public function getManufacturerLotCodes()
    {
        return $this->container['manufacturer_lot_codes'];
    }

    public function setManufacturerLotCodes($manufacturer_lot_codes)
    {
        $this->container['manufacturer_lot_codes'] = $manufacturer_lot_codes;

        return $this;
    }
}