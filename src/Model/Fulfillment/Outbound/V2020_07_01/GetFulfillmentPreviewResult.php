<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class GetFulfillmentPreviewResult extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'GetFulfillmentPreviewResult';

    protected static $openAPITypes = [
        'fulfillment_previews' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentPreview[]'
    ];

    protected static $openAPIFormats = [
        'fulfillment_previews' => null
    ];

    protected static $attributeMap = [
        'fulfillment_previews' => 'fulfillmentPreview',
    ];

    protected static $setters = [
        'fulfillment_previews' => 'setFulfillmentPreview',
    ];

    protected static $getters = [
        'fulfillment_previews' => 'getFulfillmentPreview',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['fulfillment_previews'] = $data['fulfillment_previews'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getFulfillmentPreviews()
    {
        return $this->container['fulfillment_previews'];
    }

    public function setFulfillmentPreviews($fulfillment_previews)
    {
        $this->container['fulfillment_previews'] = $fulfillment_previews;

        return $this;
    }
}