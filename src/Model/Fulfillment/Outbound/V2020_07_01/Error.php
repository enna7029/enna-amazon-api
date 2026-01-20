<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;
use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;

class Error extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Error';

    protected static $openAPITypes = [
        'code' => 'string',
        'message' => 'string',
        'details' => 'string',
    ];

    protected static $openAPIFormats = [
        'code' => null,
        'message' => null,
        'details' => null,
    ];

    protected static $attributeMap = [
        'code' => 'code',
        'message' => 'message',
        'details' => 'details',
    ];

    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'details' => 'setDetails',
    ];

    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'details' => 'getDetails',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['code'] = $data['code'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        return $invalidProperties;
    }

    public function getCode()
    {
        return $this->container['code'];
    }

    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    public function getMessage()
    {
        return $this->container['message'];
    }

    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    public function getDetails()
    {
        return $this->container['details'];
    }

    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }
}