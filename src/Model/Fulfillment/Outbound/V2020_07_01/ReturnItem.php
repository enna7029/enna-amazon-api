<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class ReturnItem extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ReturnItem';

    protected static $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'seller_return_reason_code' => 'string',
        'return_comment' => 'string',
        'amazon_return_reason_code' => 'string',
        'status' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentReturnItemStatus',
        'status_changed_date' => 'string',
        'return_authorization_id' => 'string',
        'return_received_condition' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ReturnItemDisposition',
        'fulfillment_center_id' => 'string',
    ];

    protected static $openAPIFormats = [
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'seller_return_reason_code' => null,
        'return_comment' => null,
        'amazon_return_reason_code' => null,
        'status' => null,
        'status_changed_date' => null,
        'return_authorization_id' => null,
        'return_received_condition' => null,
        'fulfillment_center_id' => null,
    ];

    protected static $attributeMap = [
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'seller_return_reason_code' => 'sellerReturnReasonCode',
        'return_comment' => 'returnComment',
        'amazon_return_reason_code' => 'amazonReturnReasonCode',
        'status' => 'status',
        'status_changed_date' => 'statusChangedDate',
        'return_authorization_id' => 'returnAuthorizationId',
        'return_received_condition' => 'returnReceivedCondition',
        'fulfillment_center_id' => 'fulfillmentCenterId',
    ];

    protected static $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'seller_return_reason_code' => 'setSellerReturnReasonCode',
        'return_comment' => 'setReturnComment',
        'amazon_return_reason_code' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'status_changed_date' => 'setStatusChangedDate',
        'return_authorization_id' => 'setReturnAuthorizationId',
        'return_received_condition' => 'setReturnReceivedCondition',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
    ];

    protected static $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'seller_return_reason_code' => 'getSellerReturnReasonCode',
        'return_comment' => 'getReturnComment',
        'amazon_return_reason_code' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'status_changed_date' => 'getStatusChangedDate',
        'return_authorization_id' => 'getReturnAuthorizationId',
        'return_received_condition' => 'getReturnReceivedCondition',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['seller_return_item_id'] = $data['seller_return_item_id'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['seller_return_reason_code'] = $data['seller_return_reason_code'] ?? null;
        $this->container['return_comment'] = $data['return_comment'] ?? null;
        $this->container['amazon_return_reason_code'] = $data['amazon_return_reason_code'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_changed_date'] = $data['status_changed_date'] ?? null;
        $this->container['return_authorization_id'] = $data['return_authorization_id'] ?? null;
        $this->container['return_received_condition'] = $data['return_received_condition'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['seller_return_item_id'] === null) {
            $invalidProperties[] = "'seller_return_item_id' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['seller_return_reason_code'] === null) {
            $invalidProperties[] = "'seller_return_reason_code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['status_changed_date'] === null) {
            $invalidProperties[] = "'status_changed_date' can't be null";
        }
        return $invalidProperties;
    }

    public function getSellerReturnItemId()
    {
        return $this->container['seller_return_item_id'];
    }

    public function setSellerReturnItemId($seller_return_item_id)
    {
        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }

    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    public function getSellerReturnReasonCode()
    {
        return $this->container['seller_return_reason_code'];
    }

    public function setSellerReturnReasonCode($seller_return_reason_code)
    {
        $this->container['seller_return_reason_code'] = $seller_return_reason_code;

        return $this;
    }

    public function getReturnComment()
    {
        return $this->container['return_comment'];
    }

    public function setReturnComment($return_comment)
    {
        $this->container['return_comment'] = $return_comment;

        return $this;
    }

    public function getAmazonReturnReasonCode()
    {
        return $this->container['amazon_return_reason_code'];
    }

    public function setAmazonReturnReasonCode($amazon_return_reason_code)
    {
        $this->container['amazon_return_reason_code'] = $amazon_return_reason_code;

        return $this;
    }

    public function getStatus()
    {
        return $this->container['status'];
    }

    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    public function getStatusChangedDate()
    {
        return $this->container['status_changed_date'];
    }

    public function setStatusChangedDate($status_changed_date)
    {
        $this->container['status_changed_date'] = $status_changed_date;

        return $this;
    }

    public function getReturnAuthorizationId()
    {
        return $this->container['return_authorization_id'];
    }

    public function setReturnAuthorizationId($return_authorization_id)
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    public function getReturnReceivedCondition()
    {
        return $this->container['return_received_condition'];
    }

    public function setReturnReceivedCondition($return_received_condition)
    {
        $this->container['return_received_condition'] = $return_received_condition;

        return $this;
    }

    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

}