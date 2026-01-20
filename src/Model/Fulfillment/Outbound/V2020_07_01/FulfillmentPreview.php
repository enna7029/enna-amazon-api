<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentPreview extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentPreview';

    protected static $openAPITypes = [
        'shipping_speed_category' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ShippingSpeedCategory',
        'scheduled_delivery_info' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ScheduledDeliveryInfo',
        'is_fulfill_able' => 'bool',
        'is_cod_capable' => 'bool',
        'estimated_shipping_weight' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Weight',
        'estimated_fees' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Fee[]',
        'fulfillment_preview_shipments' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentPreviewShipment[]',
        'unfulfillable_preview_items' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\UnfulfillablePreviewItem[]',
        'order_unfulfillable_reasons' => 'string[]',
        'marketplace_id' => 'string',
        'feature_constraints' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FeatureSettings[]',
    ];

    protected static $openAPIFormats = [
        'shipping_speed_category' => null,
        'scheduled_delivery_info' => null,
        'is_fulfill_able' => null,
        'is_cod_capable' => null,
        'estimated_shipping_weight' => null,
        'estimated_fees' => null,
        'fulfillment_preview_shipments' => null,
        'unfulfillable_preview_items' => null,
        'order_unfulfillable_reasons' => null,
        'marketplace_id' => null,
        'feature_constraints' => null,
    ];

    protected static $attributeMap = [
        'shipping_speed_category' => 'shippingSpeedCategory',
        'scheduled_delivery_info' => 'scheduledDeliveryInfo',
        'is_fulfill_able' => 'isFulfillable',
        'is_cod_capable' => 'isCODCapable',
        'estimated_shipping_weight' => 'estimatedShippingWeight',
        'estimated_fees' => 'estimatedFees',
        'fulfillment_preview_shipments' => 'fulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'unfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'orderUnfulfillableReasons',
        'marketplace_id' => 'marketplaceId',
        'feature_constraints' => 'featureConstraints',
    ];

    protected static $setters = [
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'scheduled_delivery_info' => 'setScheduledDeliveryInfo',
        'is_fulfill_able' => 'setIsFulfillable',
        'is_cod_capable' => 'setIsCODCapable',
        'estimated_shipping_weight' => 'setEstimatedShippingWeight',
        'estimated_fees' => 'setEstimatedFees',
        'fulfillment_preview_shipments' => 'setFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'setUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'setOrderUnfulfillableReasons',
        'marketplace_id' => 'setMarketplaceId',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    protected static $getters = [
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'scheduled_delivery_info' => 'getScheduledDeliveryInfo',
        'is_fulfill_able' => 'getIsFulfillable',
        'is_cod_capable' => 'getIsCODCapable',
        'estimated_shipping_weight' => 'getEstimatedShippingWeight',
        'estimated_fees' => 'getEstimatedFees',
        'fulfillment_preview_shipments' => 'getFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'getUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'getOrderUnfulfillableReasons',
        'marketplace_id' => 'getMarketplaceId',
        'feature_constraints' => 'getFeatureConstraints',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['scheduled_delivery_info'] = $data['scheduled_delivery_info'] ?? null;
        $this->container['is_fulfill_able'] = $data['is_fulfill_able'] ?? null;
        $this->container['is_cod_capable'] = $data['is_cod_capable'] ?? null;
        $this->container['estimated_shipping_weight'] = $data['estimated_shipping_weight'] ?? null;
        $this->container['estimated_fees'] = $data['estimated_fees'] ?? null;
        $this->container['fulfillment_preview_items'] = $data['fulfillment_preview_items'] ?? null;
        $this->container['unfulfillable_preview_items'] = $data['unfulfillable_preview_items'] ?? null;
        $this->container['order_unfulfillable_reasons'] = $data['order_unfulfillable_reasons'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' is required";
        }
        if ($this->container['is_cod_capable'] === null) {
            $invalidProperties[] = "'is_cod_capable' is required";
        }
        if ($this->container['is_fulfill_able'] === null) {
            $invalidProperties[] = "'is_fulfill_able' is required";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' is required";
        }
        return $invalidProperties;
    }

    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    public function setShippingSpeedCategory($shipping_speed_category)
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    public function getScheduledDeliveryInfo()
    {
        return $this->container['scheduled_delivery_info'];
    }

    public function setScheduledDeliveryInfo($scheduled_delivery_info)
    {
        $this->container['scheduled_delivery_info'] = $scheduled_delivery_info;

        return $this;
    }

    public function getIsFulfillable()
    {
        return $this->container['is_fulfill_able'];
    }

    public function setIsFulfillable($is_fulfill_able)
    {
        $this->container['is_fulfill_able'] = $is_fulfill_able;

        return $this;
    }

    public function getIsCODCapable()
    {
        return $this->container['is_cod_capable'];
    }

    public function setIsCODCapable($is_cod_capable)
    {
        $this->container['is_cod_capable'] = $is_cod_capable;

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

    public function getEstimatedFees()
    {
        return $this->container['estimated_fees'];
    }

    public function setEstimatedFees($estimated_fees)
    {
        $this->container['estimated_fees'] = $estimated_fees;

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

    public function getUnfulfillablePreviewItems()
    {
        return $this->container['unfulfillable_preview_items'];
    }

    public function setUnfulfillablePreviewItems($unfulfillable_preview_items)
    {
        $this->container['unfulfillable_preview_items'] = $unfulfillable_preview_items;

        return $this;
    }

    public function getOrderUnfulfillableReasons()
    {
        return $this->container['order_unfulfillable_reasons'];
    }

    public function setOrderUnfulfillableReasons($order_unfulfillable_reasons)
    {
        $this->container['order_unfulfillable_reasons'] = $order_unfulfillable_reasons;

        return $this;
    }

    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    public function setFeatureConstraints($feature_constraints)
    {
        $this->container['feature_constraints'] = $feature_constraints;

        return $this;
    }
}
