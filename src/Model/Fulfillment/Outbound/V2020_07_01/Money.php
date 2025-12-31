<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class Money extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Money';

    protected static $openAPITypes = [
        'currency_code' => 'string',
        'value' => 'string',
    ];

    protected static $openAPIFormats = [
        'currency_code' => null,
        'value' => null,
    ];

    protected static $attributeMap = [
        'currency_code' => 'currencyCode',
        'value' => 'value',
    ];

    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'value' => 'setValue',
    ];

    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'value' => 'getValue',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        return $invalidProperties;
    }

    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    public function getValue()
    {
        return $this->container['value'];
    }

    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
}