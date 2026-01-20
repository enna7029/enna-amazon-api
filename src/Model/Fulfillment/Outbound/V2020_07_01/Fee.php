<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class Fee extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Fee';

    protected static $openAPITypes = [
        'name' => 'string',
        'amount' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
    ];

    protected static $openAPIFormats = [
        'name' => null,
        'amount' => null,
    ];

    protected static $attributeMap = [
        'name' => 'name',
        'amount' => 'amount',
    ];

    protected static $setters = [
        'name' => 'setName',
        'amount' => 'setAmount',
    ];

    protected static $getters = [
        'name' => 'getName',
        'amount' => 'getAmount',
    ];

    protected $container = [];

    const NAME_FBA_PER_UNIT_FULFILLMENT_FEE = 'FBAPerUnitFulfillmentFee';
    const NAME_FBA_PER_ORDER_FULFILLMENT_FEE = 'FBAPerOrderFulfillmentFee';
    const NAME_FBA_TRANSPORTATION_FEE = 'FBATransportationFee';
    const NAME_FBA_FULFILLMENT_COD_FEE = 'FBAFulfillmentCODFee';

    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValue = $this->getNameAllowableValues();
        if (!is_null($this->container['name']) && !in_array(strtoupper($this->container['name']), $allowedValue, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'name', must be one of '%s'", $this->container['name'], implode("', '", $allowedValue));
        }
        if ($this->container['amount'] !== null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        return $invalidProperties;
    }

    public function getNameAllowableValues()
    {
        $baseValues = [
            self::NAME_FBA_PER_UNIT_FULFILLMENT_FEE,
            self::NAME_FBA_PER_ORDER_FULFILLMENT_FEE,
            self::NAME_FBA_TRANSPORTATION_FEE,
            self::NAME_FBA_FULFILLMENT_COD_FEE,
        ];

        return $baseValues;
    }

    public function getName()
    {
        return $this->container['name'];
    }

    public function setName($name)
    {
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($name) && !in_array($name, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf(
                "Invalid value '%s' for 'name', must be one of '%s'",
                $name,
                implode("', '", $allowedValues)
            ));
        }

        $this->container['name'] = $name;

        return $this;
    }

    public function getAmount()
    {
        return $this->container['amount'];
    }

    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
}