<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class CreateFulfillmentOrderItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateFulfillmentOrderItem';

    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => 'int',
        'gift_message' => 'string',
        'displayable_comment' => 'string',
        'fulfillment_network_sku' => 'string',
        'per_unit_declared_value' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'per_unit_price' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'per_unit_tax' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
    ];

    protected static $openAPIFormats = [
        'seller_sku' => null,
        'seller_fulfillment_order_item_id' => null,
        'quantity' => 'int32',
        'gift_message' => null,
        'displayable_comment' => null,
        'fulfillment_network_sku' => null,
        'per_unit_declared_value' => null,
        'per_unit_price' => null,
        'per_unit_tax' => null,
    ];

    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'displayable_comment' => 'displayableComment',
        'fulfillment_network_sku' => 'fulfillmentNetworkSku',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'per_unit_price' => 'perUnitPrice',
        'per_unit_tax' => 'perUnitTax',
    ];

    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'displayable_comment' => 'setDisplayableComment',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'per_unit_price' => 'setPerUnitPrice',
        'per_unit_tax' => 'setPerUnitTax',
    ];

    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'displayable_comment' => 'getDisplayableComment',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'per_unit_price' => 'getPerUnitPrice',
        'per_unit_tax' => 'getPerUnitTax',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['gift_message'] = $data['gift_message'] ?? null;
        $this->container['displayable_comment'] = $data['displayable_comment'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['per_unit_declared_value'] = $data['per_unit_declared_value'] ?? null;
        $this->container['per_unit_price'] = $data['per_unit_price'] ?? null;
        $this->container['per_unit_tax'] = $data['per_unit_tax'] ?? null;
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
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if (mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (!is_null($this->container['gift_message']) && (mb_strlen($this->container['gift_message']) > 512)) {
            $invalidProperties[] = "invalid value for 'gift_message', the character length must be smaller than or equal to 512.";
        }
        if (!is_null($this->container['displayable_comment']) && (mb_strlen($this->container['displayable_comment']) > 250)) {
            $invalidProperties[] = "invalid value for 'displayable_comment', the character length must be smaller than or equal to 250.";
        }
        return $invalidProperties;
    }

    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    public function setSellerSku($seller_sku)
    {
        if ((mb_strlen($seller_sku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_sku when calling CreateFulfillmentOrderItem., must be smaller than or equal to 50.');
        }


        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if ((mb_strlen($seller_fulfillment_order_item_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_item_id when calling CreateFulfillmentOrderItem., must be smaller than or equal to 50.');
        }

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

    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    public function setGiftMessage($gift_message)
    {
        if (!is_null($gift_message) && (mb_strlen($gift_message) > 512)) {
            throw new \InvalidArgumentException('invalid length for $gift_message when calling CreateFulfillmentOrderItem., must be smaller than or equal to 512.');
        }

        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    public function getDisplayableComment()
    {
        return $this->container['displayable_comment'];
    }

    public function setDisplayableComment($displayable_comment)
    {
        if (!is_null($displayable_comment) && (mb_strlen($displayable_comment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $displayable_comment when calling CreateFulfillmentOrderItem., must be smaller than or equal to 250.');
        }

        $this->container['displayable_comment'] = $displayable_comment;

        return $this;
    }

    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
       $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

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

    public function getPerUnitPrice()
    {
        return $this->container['per_unit_price'];
    }

    public function setPerUnitPrice($per_unit_price)
    {
        $this->container['per_unit_price'] = $per_unit_price;

        return $this;
    }

    public function getPerUnitTax()
    {
        return $this->container['per_unit_tax'];
    }

    public function setPerUnitTax($per_unit_tax)
    {
        $this->container['per_unit_tax'] = $per_unit_tax;

        return $this;
    }
}