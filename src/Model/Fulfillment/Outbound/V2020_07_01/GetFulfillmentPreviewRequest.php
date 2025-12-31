<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class GetFulfillmentPreviewRequest extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'GetFulfillmentPreviewRequest';

    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'address' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Address',
        'items' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentPreviewItem[]',
        'shipping_speed_categories' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ShippingSpeedCategory[]',
        'include_cod_fulfillment_preview' => 'bool',
        'include_delivery_windows' => 'bool',
        'feature_constraints' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FeatureSettings[]',
    ];

    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'address' => null,
        'items' => null,
        'shipping_speed_categories' => null,
        'include_cod_fulfillment_preview' => null,
        'include_delivery_windows' => null,
        'feature_constraints' => null,
    ];

    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'address' => 'address',
        'items' => 'items',
        'shipping_speed_categories' => 'shippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'includeCODFulfillmentPreview',
        'include_delivery_windows' => 'includeDeliveryWindows',
        'feature_constraints' => 'featureConstraints',
    ];

    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'address' => 'setAddress',
        'items' => 'setItems',
        'shipping_speed_categories' => 'setShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'setIncludeCODFulfillmentPreview',
        'include_delivery_windows' => 'setIncludeDeliveryWindows',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'address' => 'getAddress',
        'items' => 'getItems',
        'shipping_speed_categories' => 'getShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'getIncludeCODFulfillmentPreview',
        'include_delivery_windows' => 'getIncludeDeliveryWindows',
        'feature_constraints' => 'getFeatureConstraints',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['shipping_speed_categories'] = $data['shipping_speed_categories'] ?? null;
        $this->container['include_cod_fulfillment_preview'] = $data['include_cod_fulfillment_preview'] ?? null;
        $this->container['include_delivery_windows'] = $data['include_delivery_windows'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * 获取marketplace_id
     * @return mixed
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * 设置marketplace_id
     * @param string $marketplace_id
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * 获取address
     * @return mixed
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * 设置address
     * @param Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * 获取items
     * @return mixed
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * 设置items
     * @param GetFulfillmentPreviewItem[]|null $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * 获取shipping_speed_categories
     * @return mixed
     */
    public function getShippingSpeedCategories()
    {
        return $this->container['shipping_speed_categories'];
    }

    /**
     * shipping_speed_categories
     * @param ShippingSpeedCategory[]|null $shipping_speed_categories
     * @return $this
     */
    public function setShippingSpeedCategories($shipping_speed_categories)
    {
        $this->container['shipping_speed_categories'] = $shipping_speed_categories;

        return $this;
    }

    /**
     * 获取include_cod_fulfillment_preview
     * @return mixed
     */
    public function getIncludeCODFulfillmentPreview()
    {
        return $this->container['include_cod_fulfillment_preview'];
    }

    /**
     * 设置include_cod_fulfillment_preview
     * @param bool|null $include_cod_fulfillment_preview
     * @return $this
     */
    public function setIncludeCODFulfillmentPreview($include_cod_fulfillment_preview)
    {
        $this->container['include_cod_fulfillment_preview'] = $include_cod_fulfillment_preview;

        return $this;
    }

    /**
     * 获取include_delivery_windows
     * @return mixed
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->container['include_delivery_windows'];
    }

    /**
     * 设置include_delivery_windows
     * @param bool|null $include_delivery_windows
     * @return $this
     */
    public function setIncludeDeliveryWindows($include_delivery_windows)
    {
        $this->container['include_delivery_windows'] = $include_delivery_windows;

        return $this;
    }

    /**
     * 获取 feature_constraints
     * @return mixed
     */
    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    /**
     * 设置feature_constraints
     * @param FeatureSettings[]|null $feature_constraints
     * @return $this
     */
    public function setFeatureConstraints($feature_constraints)
    {
        $this->container['feature_constraints'] = $feature_constraints;

        return $this;
    }
}