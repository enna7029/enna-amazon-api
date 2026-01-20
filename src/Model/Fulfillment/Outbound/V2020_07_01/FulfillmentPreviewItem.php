<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentPreviewItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentPreviewItem';

    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'quantity' => 'int',
        'seller_fulfillment_order_item_id' => 'string',
        'estimated_shipping_weight' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Weight',
        'shipping_weight_calculation_method' => 'string'
    ];

    protected static $openAPIFormats = [
        'seller_sku' => null,
        'quantity' => 'int32',
        'seller_fulfillment_order_item_id' => null,
        'estimated_shipping_weight' => null,
        'shipping_weight_calculation_method' => null
    ];

    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'estimated_shipping_weight' => 'estimatedShippingWeight',
        'shipping_weight_calculation_method' => 'shippingWeightCalculationMethod'
    ];

    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'estimated_shipping_weight' => 'setEstimatedShippingWeight',
        'shipping_weight_calculation_method' => 'setShippingWeightCalculationMethod'
    ];

    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'estimated_shipping_weight' => 'getEstimatedShippingWeight',
        'shipping_weight_calculation_method' => 'getShippingWeightCalculationMethod'
    ];

    protected $container = [];

    const SHIPPING_WEIGHT_CALCULATION_METHOD_PACKAGE = 'Package';

    const SHIPPING_WEIGHT_CALCULATION_METHOD_DIMENSIONAL = 'Dimensional';

    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['estimated_shipping_weight'] = $data['estimated_shipping_weight'] ?? null;
        $this->container['shipping_weight_calculation_method'] = $data['shipping_weight_calculation_method'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $listInvalidProperties = [];
        if ($this->container['seller_sku'] === null) {
            $listInvalidProperties[] = "'seller_sku' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $listInvalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $listInvalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        $allowedValues = $this->getShippingWeightCalculationMethodAllowableValues();
        if (
            !is_null($this->container['shipping_weight_calculation_method'])
            && !in_array(strtoupper($this->container['shipping_weight_calculation_method']), $allowedValues, true)
        ) {
            $listInvalidProperties[] = sprintf("invalid value '%s' for 'shipping_weight_calculation_method', must be one of '%s'",
                $this->container['shipping_weight_calculation_method'],
                implode("', '", $allowedValues));
        }
        return $listInvalidProperties;
    }

    public function getShippingWeightCalculationMethodAllowableValues()
    {
        $baseValues = [
            self::SHIPPING_WEIGHT_CALCULATION_METHOD_PACKAGE,
            self::SHIPPING_WEIGHT_CALCULATION_METHOD_DIMENSIONAL
        ];

        return $baseValues;
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
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    public function getEstimatedShippingWeight()
    {
        return $this->container['estimated_shipping_weight'];
    }

    public function setEstimatedShippingWeight($estimated_shipping_weight)
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    public function getShippingWeightCalculationMethod()
    {
        return $this->container['shipping_weight_calculation_method'];
    }

    public function setShippingWeightCalculationMethod($shipping_weight_calculation_method)
    {
        $allowedValues = $this->getShippingWeightCalculationMethodAllowableValues();

        if (!in_array($shipping_weight_calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf(
                "Invalid value '%s' for 'shipping_weight_calculation_method', must be one of '%s'",
                $shipping_weight_calculation_method,
                implode("', '", $allowedValues)
            ));
        }

        $this->container['shipping_weight_calculation_method'] = $shipping_weight_calculation_method;

        return $this;
    }
}