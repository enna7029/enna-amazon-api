<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class PaymentInformation extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PaymentInformation';

    protected static $openAPITypes = [
        'payment_transaction_id' => 'string',
        'payment_mode' => 'string',
        'payment_date' => 'string',
    ];

    protected static $openAPIFormats = [
        'payment_transaction_id' => null,
        'payment_mode' => null,
        'payment_date' => null,
    ];

    protected static $attributeMap = [
        'payment_transaction_id' => 'paymentTransactionId',
        'payment_mode' => 'paymentMode',
        'payment_date' => 'paymentDate',
    ];

    protected static $setters = [
        'payment_transaction_id' => 'setPaymentTransactionId',
        'payment_mode' => 'setPaymentMode',
        'payment_date' => 'setPaymentDate',
    ];

    protected static $getters = [
        'payment_transaction_id' => 'getPaymentTransactionId',
        'payment_mode' => 'getPaymentMode',
        'payment_date' => 'getPaymentDate',
    ];

    protected $container;

    public function __construct(array $data = null)
    {
        $this->container['payment_transaction_id'] = $data['payment_transaction_id'] ?? null;
        $this->container['payment_mode'] = $data['payment_mode'] ?? null;
        $this->container['payment_date'] = $data['payment_date'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['payment_transaction_id'] === null) {
            $invalidProperties[] = "'payment_transaction_id' can't be null";
        }
        if ($this->container['payment_mode'] === null) {
            $invalidProperties[] = "'payment_mode' can't be null";
        }
        if ($this->container['payment_date'] === null) {
            $invalidProperties[] = "'payment_date' can't be null";
        }
        return $invalidProperties;
    }

    public function getPaymentTransactionId()
    {
        return $this->container['payment_transaction_id'];
    }

    public function setPaymentTransactionId($payment_transaction_id)
    {
        $this->container['payment_transaction_id'] = $payment_transaction_id;

        return $this;
    }

    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    public function setPaymentMode($payment_mode)
    {
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }
}