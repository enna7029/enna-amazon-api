<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class GetFulfillmentOrderResult extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'GetFulfillmentOrderResult';

    protected static $openAPITypes = [
        'fulfillment_order' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentOrder',
        'fulfillment_order_items' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentOrderItem[]',
        'fulfillment_shipments' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentShipment[]',
        'return_items' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ReturnItem[]',
        'return_authorizations' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ReturnAuthorization[]',
        'payment_information' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\PaymentInformation[]',
    ];

    protected static $openAPIFormats = [
        'fulfillment_order' => null,
        'fulfillment_order_items' => null,
        'fulfillment_shipments' => null,
        'return_items' => null,
        'return_authorizations' => null,
        'payment_information' => null,
    ];

    protected static $attributeMap = [
        'fulfillment_order' => 'fulfillmentOrder',
        'fulfillment_order_items' => 'fulfillmentOrderItems',
        'fulfillment_shipments' => 'fulfillmentShipments',
        'return_items' => 'returnItems',
        'return_authorizations' => 'returnAuthorizations',
        'payment_information' => 'paymentInformation',
    ];

    protected static $setters = [
        'fulfillment_order' => 'setFulfillmentOrder',
        'fulfillment_order_items' => 'setFulfillmentOrderItems',
        'fulfillment_shipments' => 'setFulfillmentShipments',
        'return_items' => 'setReturnItems',
        'return_authorizations' => 'setReturnAuthorizations',
        'payment_information' => 'setPaymentInformation',
    ];

    protected static $getters = [
        'fulfillment_order' => 'getFulfillmentOrder',
        'fulfillment_order_items' => 'getFulfillmentOrderItems',
        'fulfillment_shipments' => 'getFulfillmentShipments',
        'return_items' => 'getReturnItems',
        'return_authorizations' => 'getReturnAuthorizations',
        'payment_information' => 'getPaymentInformation',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['fulfillment_order'] = $data['fulfillment_order'] ?? null;
        $this->container['fulfillment_order_items'] = $data['fulfillment_order_items'] ?? null;
        $this->container['fulfillment_shipments'] = $data['fulfillment_shipments'] ?? null;
        $this->container['return_items'] = $data['return_items'] ?? null;
        $this->container['return_authorizations'] = $data['return_authorizations'] ?? null;
        $this->container['payment_information'] = $data['payment_information'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['fulfillment_order'] === null) {
            $invalidProperties[] = "'fulfillment_order' can't be null";
        }
        if ($this->container['fulfillment_order_items'] === null) {
            $invalidProperties[] = "'fulfillment_order_items' can't be null";
        }
        if ($this->container['return_authorizations'] === null) {
            $invalidProperties[] = "'return_authorizations' can't be null";
        }
        if ($this->container['return_items'] === null) {
            $invalidProperties[] = "'return_items' can't be null";
        }
        return $invalidProperties;
    }

    public function getFulfillmentOrder()
    {
        return $this->container['fulfillment_order'];
    }

    public function setFulfillmentOrder($fulfillment_order)
    {
        $this->container['fulfillment_order'] = $fulfillment_order;

        return $this;
    }

    public function getFulfillmentOrderItems()
    {
        return $this->container['fulfillment_order_items'];
    }

    public function setFulfillmentOrderItems($fulfillment_order_items)
    {
        $this->container['fulfillment_order_items'] = $fulfillment_order_items;

        return $this;
    }

    public function getFulfillmentShipments()
    {
        return $this->container['fulfillment_shipments'];
    }

    public function setFulfillmentShipments($fulfillment_shipments)
    {
        $this->container['fulfillment_shipments'] = $fulfillment_shipments;

        return $this;
    }

    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    public function setReturnItems($return_items)
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }

    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    public function setReturnAuthorizations($return_authorizations)
    {
        $this->container['return_authorizations'] = $return_authorizations;

        return $this;
    }

    public function getPaymentInformation()
    {
        return $this->container['payment_information'];
    }

    public function setPaymentInformation($payment_information)
    {
        $this->container['payment_information'] = $payment_information;

        return $this;
    }
}