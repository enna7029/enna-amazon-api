<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class CODSettings extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CODSettings';

    protected static $openAPITypes = [
        'is_cod_required' => 'bool',
        'cod_charge' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'cod_charge_tax' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'shipping_charge' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
        'shipping_charge_tax' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Money',
    ];

    protected static $openAPIFormats = [
        'is_cod_required' => null,
        'cod_charge' => null,
        'cod_charge_tax' => null,
        'shipping_charge' => null,
        'shipping_charge_tax' => null,
    ];

    protected static $attributeMap = [
        'is_cod_required' => 'isCodRequired',
        'cod_charge' => 'codCharge',
        'cod_charge_tax' => 'codChargeTax',
        'shipping_charge' => 'shippingCharge',
        'shipping_charge_tax' => 'shippingChargeTax',
    ];

    protected static $setters = [
        'is_cod_required' => 'setIsCodRequired',
        'cod_charge' => 'setCodCharge',
        'cod_charge_tax' => 'setCodChargeTax',
        'shipping_charge' => 'setShippingCharge',
        'shipping_charge_tax' => 'setShippingChargeTax',
    ];

    protected static $getters = [
        'is_cod_required' => 'getIsCodRequired',
        'cod_charge' => 'getCodCharge',
        'cod_charge_tax' => 'getCodChargeTax',
        'shipping_charge' => 'getShippingCharge',
        'shipping_charge_tax' => 'getShippingChargeTax',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['is_cod_required'] = $data['is_cod_required'] ?? null;
        $this->container['cod_charge'] = $data['cod_charge'] ?? null;
        $this->container['cod_charge_tax'] = $data['cod_charge_tax'] ?? null;
        $this->container['shipping_charge'] = $data['shipping_charge'] ?? null;
        $this->container['shipping_charge_tax'] = $data['shipping_charge_tax'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['is_cod_required'] !== null) {
            $invalidProperties[] = "invalid value for 'is_cod_required', must be one of '";
        }
        return $invalidProperties;
    }

    public function getIsCodRequired()
    {
        return $this->container['is_cod_required'];
    }

    public function setIsCodRequired($is_cod_required)
    {
        $this->container['is_cod_required'] = $is_cod_required;

        return $this;
    }

    public function getCodCharge()
    {
        return $this->container['cod_charge'];
    }

    public function setCodCharge($cod_charge)
    {
        $this->container['cod_charge'] = $cod_charge;

        return $this;
    }

    public function getCodChargeTax()
    {
        return $this->container['cod_charge_tax'];
    }

    public function setCodChargeTax($cod_charge_tax)
    {
        $this->container['cod_charge_tax'] = $cod_charge_tax;

        return $this;
    }

    public function getShippingCharge()
    {
        return $this->container['shipping_charge'];
    }

    public function setShippingCharge($shipping_charge)
    {
        $this->container['shipping_charge'] = $shipping_charge;

        return $this;
    }

    public function getShippingChargeTax()
    {
        return $this->container['shipping_charge_tax'];
    }

    public function setShippingChargeTax($shipping_charge_tax)
    {
        $this->container['shipping_charge_tax'] = $shipping_charge_tax;

        return $this;
    }
}