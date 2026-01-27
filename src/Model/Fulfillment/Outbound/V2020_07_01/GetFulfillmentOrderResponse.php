<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class GetFulfillmentOrderResponse extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'GetFulfillmentOrderResponse';

    protected static $openAPITypes = [
        'payload' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentOrderResult',
        'errors' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Error[]',
    ];

    protected static $openAPIFormats = [
        'payload' => null,
        'errors' => null,
    ];

    protected static $attributeMap = [
        'headers' => 'headers',
        'payload' => 'payload',
        'errors' => 'errors',
    ];

    protected static $setters = [
        'headers' => 'setHeaders',
        'payload' => 'setPayload',
        'errors' => 'setErrors',
    ];

    protected static $getters = [
        'headers' => 'getHeaders',
        'payload' => 'getPayload',
        'errors' => 'getErrors',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['payload'] = $data['payload'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        return $invalidProperties;
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

    public function getPayload()
    {
        return $this->container['payload'];
    }

    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

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