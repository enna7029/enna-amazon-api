<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class UnfulfillablePreviewItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'UnfulfillablePreviewItem';

    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'quantity' => 'int',
        'seller_fulfillment_order_item_id' => 'string',
        'item_unfulfillable_reasons' => 'string[]',
    ];

    protected static $openAPIFormats = [
        'seller_sku' => null,
        'quantity' => null,
        'seller_fulfillment_order_item_id' => null,
        'item_unfulfillable_reasons' => null,
    ];

    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'item_unfulfillable_reasons' => 'itemUnfulfillableReasons',
    ];

    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'item_unfulfillable_reasons' => 'setItemUnfulfillableReasons',
    ];

    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'item_unfulfillable_reasons' => 'getItemUnfulfillableReasons',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['item_unfulfillable_reasons'] = $data['item_unfulfillable_reasons'] ?? null;
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
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if (mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
        }
        return $invalidProperties;
    }

    protected function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    public function setSellerSku($seller_sku)
    {
        if (mb_strlen($seller_sku) > 50) {
            throw new \InvalidArgumentException("invalid value for 'seller_sku', the character length must be smaller than or equal to 50.");
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

    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if (mb_strlen($seller_fulfillment_order_item_id) > 50) {
            throw new \InvalidArgumentException("invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.");
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    public function getItemUnfulfillableReasons()
    {
        return $this->container['item_unfulfillable_reasons'];
    }

    public function setItemUnfulfillableReasons($item_unfulfillable_reasons)
    {
        $this->container['item_unfulfillable_reasons'] = $item_unfulfillable_reasons;

        return $this;
    }
}