<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class CancelFulfillmentOrderResponse extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CancelFulfillmentOrderResponse';

    protected static $openAPITypes = [
        'errors' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Error[]',
    ];

    protected static $openAPIFormats = [
        'errors' => null,
    ];

    protected static $attributeMap = [
        'headers' => 'headers',
        'errors' => 'errors'
    ];

    protected static $setters = [
        'headers' => 'setHeaders',
        'errors' => 'setErrors'
    ];

    protected static $getters = [
        'headers' => 'getHeaders',
        'errors' => 'getErrors'
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['errors'] = $data['errors'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $listInvalidProperties = [];
        return $listInvalidProperties;
    }

    public function getHeaders()
    {
        return $this->container['headers'];
    }

    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    public function getErrors()
    {
        return $this->container['errors'];
    }

    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
}