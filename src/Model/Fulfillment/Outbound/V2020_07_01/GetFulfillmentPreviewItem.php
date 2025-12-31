<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;
use InvalidArgumentException;

class GetFulfillmentPreviewItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'GetFulfillmentPreviewItem';

    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'quantity' => 'int',
        'per_unit_declared_value' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'seller_fulfillment_order_itemId' => 'string',
    ];

    protected static $openAPIFormats = [
        'seller_sku' => null,
        'quantity' => 'int32',
        'per_unit_declared_value' => null,
        'seller_fulfillment_order_itemId' => null,
    ];

    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'seller_fulfillment_order_itemId' => 'sellerFulfillmentOrderItemId',
    ];

    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'seller_fulfillment_order_itemId' => 'setSellerFulfillmentOrderItemId',
    ];

    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'seller_fulfillment_order_itemId' => 'getSellerFulfillmentOrderItemId',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['per_unit_declared_value'] = $data['per_unit_declared_value'] ?? null;
        $this->container['seller_fulfillment_order_itemId'] = $data['seller_fulfillment_order_itemId'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (mb_strlen($this->container['seller_sku']) > 50) {
            $invalidProperties[] = "invalid value for 'seller_sku', the character length must be smaller than or equal to 50.";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['per_unit_declared_value'] === null) {
            $invalidProperties[] = "'per_unit_declared_value' can't be null";
        }
        if ($this->container['seller_fulfillment_order_itemId'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_itemId' can't be null";
        }
        if (mb_strlen($this->container['seller_fulfillment_order_itemId']) > 50) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
        }
        return $invalidProperties;
    }

    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    public function setSellerSku($seller_sku)
    {
        if (mb_strlen($this->container['seller_sku']) > 50) {
            throw new InvalidArgumentException("invalid value for 'seller_sku', the character length must be smaller than or equal to 50.");
        }

        $this->container['seller_sku'] = $seller_sku;

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

    public function getPerUnitDeclaredValue()
    {
        return $this->container['per_unit_declared_value'];
    }

    public function setPerUnitDeclaredValue($per_unit_declared_value)
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }

    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if (mb_strlen($this->container['seller_fulfillment_order_itemId']) > 50) {
            throw new InvalidArgumentException("invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.");
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }
}