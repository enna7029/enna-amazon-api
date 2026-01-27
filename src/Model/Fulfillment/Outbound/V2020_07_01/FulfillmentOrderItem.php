<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentOrderItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentOrderItem';

    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => 'int',
        'gift_message' => 'string',
        'displayable_comment' => 'string',
        'fulfillment_network_sku' => 'string',
        'order_item_disposition' => 'string',
        'cancelled_quantity' => 'int',
        'unfulfillable_quantity' => 'int',
        'estimated_ship_date' => 'string',
        'estimated_arrival_date' => 'string',
        'per_unit_price' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'per_unit_tax' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'per_unit_declared_value' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
    ];

    protected static $openAPIFormats = [
        'seller_sku' => null,
        'seller_fulfillment_order_item_id' => null,
        'quantity' => 'int32',
        'gift_message' => null,
        'displayable_comment' => null,
        'fulfillment_network_sku' => null,
        'order_item_disposition' => null,
        'cancelled_quantity' => 'int32',
        'unfulfillable_quantity' => 'int32',
        'estimated_ship_date' => null,
        'estimated_arrival_date' => null,
        'per_unit_price' => null,
        'per_unit_tax' => null,
        'per_unit_declared_value' => null,
    ];

    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'displayable_comment' => 'displayableComment',
        'fulfillment_network_sku' => 'fulfillmentNetworkSku',
        'order_item_disposition' => 'orderItemDisposition',
        'cancelled_quantity' => 'cancelledQuantity',
        'unfulfillable_quantity' => 'unfulfillableQuantity',
        'estimated_ship_date' => 'estimatedShipDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'per_unit_price' => 'perUnitPrice',
        'per_unit_tax' => 'perUnitTax',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
    ];

    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'displayable_comment' => 'setDisplayableComment',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'order_item_disposition' => 'setOrderItemDisposition',
        'cancelled_quantity' => 'setCancelledQuantity',
        'unfulfillable_quantity' => 'setUnfulfillableQuantity',
        'estimated_ship_date' => 'setEstimatedShipDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'per_unit_price' => 'setPerUnitPrice',
        'per_unit_tax' => 'setPerUnitTax',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
    ];

    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'displayable_comment' => 'getDisplayableComment',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'order_item_disposition' => 'getOrderItemDisposition',
        'cancelled_quantity' => 'getCancelledQuantity',
        'unfulfillable_quantity' => 'getUnfulfillableQuantity',
        'estimated_ship_date' => 'getEstimatedShipDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'per_unit_price' => 'getPerUnitPrice',
        'per_unit_tax' => 'getPerUnitTax',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
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
        $this->container['order_item_disposition'] = $data['order_item_disposition'] ?? null;
        $this->container['cancelled_quantity'] = $data['cancelled_quantity'] ?? null;
        $this->container['unfulfillable_quantity'] = $data['unfulfillable_quantity'] ?? null;
        $this->container['estimated_ship_date'] = $data['estimated_ship_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['per_unit_price'] = $data['per_unit_price'] ?? null;
        $this->container['per_unit_tax'] = $data['per_unit_tax'] ?? null;
        $this->container['per_unit_declared_value'] = $data['per_unit_declared_value'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $listInvalidProperties = [];
        if ($this->container['seller_sku'] === null) {
            $listInvalidProperties[] = "'seller_sku' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $listInvalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $listInvalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['cancelled_quantity'] === null) {
            $listInvalidProperties[] = "'cancelled_quantity' can't be null";
        }
        if ($this->container['unfulfillable_quantity'] === null) {
            $listInvalidProperties[] = "'unfulfillable_quantity' can't be null";
        }
        return $listInvalidProperties;
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

    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    public function setGiftMessage($gift_message)
    {
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    public function getDisplayableComment()
    {
        return $this->container['displayable_comment'];
    }

    public function setDisplayableComment($displayable_comment)
    {
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

    public function getOrderItemDisposition()
    {
        return $this->container['order_item_disposition'];
    }

    public function setOrderItemDisposition($order_item_disposition)
    {
        $this->container['order_item_disposition'] = $order_item_disposition;

        return $this;
    }

    public function getCancelledQuantity()
    {
        return $this->container['cancelled_quantity'];
    }

    public function setCancelledQuantity($cancelled_quantity)
    {
        $this->container['cancelled_quantity'] = $cancelled_quantity;

        return $this;
    }

    public function getUnfulfillableQuantity()
    {
        return $this->container['unfulfillable_quantity'];
    }

    public function setUnfulfillableQuantity($unfulfillable_quantity)
    {
        $this->container['unfulfillable_quantity'] = $unfulfillable_quantity;

        return $this;
    }

    public function getEstimatedShipDate()
    {
        return $this->container['estimated_ship_date'];
    }

    public function setEstimatedShipDate($estimated_ship_date)
    {
        $this->container['estimated_ship_date'] = $estimated_ship_date;

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

    public function getPerUnitDeclaredValue()
    {
        return $this->container['per_unit_declared_value'];
    }

    public function setPerUnitDeclaredValue($per_unit_declared_value)
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }
}