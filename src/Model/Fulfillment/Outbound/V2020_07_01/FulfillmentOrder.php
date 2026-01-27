<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FulfillmentOrder extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FulfillmentOrder';

    protected static $openAPITypes = [
        'seller_fulfillment_order_id' => 'string',
        'marketplace_id' => 'string',
        'displayable_order_id' => 'string',
        'displayable_order_date' => 'string',
        'displayable_order_comment' => 'string',
        'shipping_speed_category' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ShippingSpeedCategory',
        'delivery_window' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DeliveryWindow',
        'destination_address' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Address',
        'fulfillment_action' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentAction',
        'fulfillment_policy' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentPolicy',
        'cod_settings' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CODSettings',
        'received_date' => 'string',
        'fulfillment_order_status' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentOrderStatus',
        'status_updated_date' => 'string',
        'notification_emails' => 'string[]',
        'feature_constraints' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FeatureSettings[]',
    ];

    protected static $openAPIFormats = [
        'seller_fulfillment_order_id' => null,
        'marketplace_id' => null,
        'displayable_order_id' => null,
        'displayable_order_date' => null,
        'displayable_order_comment' => null,
        'shipping_speed_category' => null,
        'delivery_window' => null,
        'destination_address' => null,
        'fulfillment_action' => null,
        'fulfillment_policy' => null,
        'cod_settings' => null,
        'received_date' => null,
        'fulfillment_order_status' => null,
        'status_updated_date' => null,
        'notification_emails' => null,
        'feature_constraints' => null,
    ];

    protected static $attributeMap = [
        'seller_fulfillment_order_id' => 'sellerFulfillmentOrderId',
        'marketplace_id' => 'marketplaceId',
        'displayable_order_id' => 'displayableOrderId',
        'displayable_order_date' => 'displayableOrderDate',
        'displayable_order_comment' => 'displayableOrderComment',
        'shipping_speed_category' => 'shippingSpeedCategory',
        'delivery_window' => 'deliveryWindow',
        'destination_address' => 'destinationAddress',
        'fulfillment_action' => 'fulfillmentAction',
        'fulfillment_policy' => 'fulfillmentPolicy',
        'cod_settings' => 'codSettings',
        'received_date' => 'receivedDate',
        'fulfillment_order_status' => 'fulfillmentOrderStatus',
        'status_updated_date' => 'statusUpdatedDate',
        'notification_emails' => 'notificationEmails',
        'feature_constraints' => 'featureConstraints',
    ];

    protected static $setters = [
        'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'displayable_order_id' => 'setDisplayableOrderId',
        'displayable_order_date' => 'setDisplayableOrderDate',
        'displayable_order_comment' => 'setDisplayableOrderComment',
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'delivery_window' => 'setDeliveryWindow',
        'destination_address' => 'setDestinationAddress',
        'fulfillment_action' => 'setFulfillmentAction',
        'fulfillment_policy' => 'setFulfillmentPolicy',
        'cod_settings' => 'setCodSettings',
        'received_date' => 'setReceivedDate',
        'fulfillment_order_status' => 'setFulfillmentOrderStatus',
        'status_updated_date' => 'setStatusUpdatedDate',
        'notification_emails' => 'setNotificationEmails',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    protected static $getters = [
        'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'displayable_order_id' => 'getDisplayableOrderId',
        'displayable_order_date' => 'getDisplayableOrderDate',
        'displayable_order_comment' => 'getDisplayableOrderComment',
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'delivery_window' => 'getDeliveryWindow',
        'destination_address' => 'getDestinationAddress',
        'fulfillment_action' => 'getFulfillmentAction',
        'fulfillment_policy' => 'getFulfillmentPolicy',
        'cod_settings' => 'getCodSettings',
        'received_date' => 'getReceivedDate',
        'fulfillment_order_status' => 'getFulfillmentOrderStatus',
        'status_updated_date' => 'getStatusUpdatedDate',
        'notification_emails' => 'getNotificationEmails',
        'feature_constraints' => 'getFeatureConstraints',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['seller_fulfillment_order_id'] = $data['seller_fulfillment_order_id'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['displayable_order_id'] = $data['displayable_order_id'] ?? null;
        $this->container['displayable_order_date'] = $data['displayable_order_date'] ?? null;
        $this->container['displayable_order_comment'] = $data['displayable_order_comment'] ?? null;
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['delivery_window'] = $data['delivery_window'] ?? null;
        $this->container['destination_address'] = $data['destination_address'] ?? null;
        $this->container['fulfillment_action'] = $data['fulfillment_action'] ?? null;
        $this->container['fulfillment_policy'] = $data['fulfillment_policy'] ?? null;
        $this->container['cod_settings'] = $data['cod_settings'] ?? null;
        $this->container['received_date'] = $data['received_date'] ?? null;
        $this->container['fulfillment_order_status'] = $data['fulfillment_order_status'] ?? null;
        $this->container['status_updated_date'] = $data['status_updated_date'] ?? null;
        $this->container['notification_emails'] = $data['notification_emails'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['seller_fulfillment_order_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_orderId' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['displayable_order_id'] === null) {
            $invalidProperties[] = "'displayable_order_id' can't be null";
        }
        if ($this->container['displayable_order_date'] === null) {
            $invalidProperties[] = "'displayable_order_date' can't be null";
        }
        if ($this->container['displayable_order_comment'] === null) {
            $invalidProperties[] = "'displayable_order_comment' can't be null";
        }
        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if ($this->container['destination_address'] === null) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if ($this->container['received_date'] === null) {
            $invalidProperties[] = "'received_date' can't be null";
        }
        if ($this->container['fulfillment_order_status'] === null) {
            $invalidProperties[] = "'fulfillment_order_status' can't be null";
        }
        if ($this->container['status_updated_date'] === null) {
            $invalidProperties[] = "'status_updated_date' can't be null";
        }
        return $invalidProperties;
    }

    public function getSellerFulfillmentOrderId()
    {
        return $this->container['seller_fulfillment_order_id'];
    }

    public function setSellerFulfillmentOrderId($seller_fulfillment_order_id)
    {
        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

        return $this;
    }

    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    public function getDisplayableOrderId()
    {
        return $this->container['displayable_order_id'];
    }

    public function setDisplayableOrderId($displayable_order_id)
    {
        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    public function getDisplayableOrderDate()
    {
        return $this->container['displayable_order_date'];
    }

    public function setDisplayableOrderDate($displayable_order_date)
    {
        $this->container['displayable_order_date'] = $displayable_order_date;

        return $this;
    }

    public function getDisplayableOrderComment()
    {
        return $this->container['displayable_order_comment'];
    }

    public function setDisplayableOrderComment($displayable_order_comment)
    {
        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
    }

    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    public function setShippingSpeedCategory($shipping_speed_category)
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    public function getFulfillmentAction()
    {
        return $this->container['fulfillment_action'];
    }

    public function setFulfillmentAction($fulfillment_action)
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillment_policy'];
    }

    public function setFulfillmentPolicy($fulfillment_policy)
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    public function getCodSettings()
    {
        return $this->container['cod_settings'];
    }

    public function setCodSettings($cod_settings)
    {
        $this->container['cod_settings'] = $cod_settings;

        return $this;
    }

    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    public function getFulfillmentOrderStatus()
    {
        return $this->container['fulfillment_order_status'];
    }

    public function setFulfillmentOrderStatus($fulfillment_order_status)
    {
        $this->container['fulfillment_order_status'] = $fulfillment_order_status;

        return $this;
    }

    public function getStatusUpdatedDate()
    {
        return $this->container['status_updated_date'];
    }

    public function setStatusUpdatedDate($status_updated_date)
    {
        $this->container['status_updated_date'] = $status_updated_date;

        return $this;
    }

    public function getNotificationEmails()
    {
        return $this->container['notification_emails'];
    }

    public function setNotificationEmails($notification_emails)
    {
        $this->container['notification_emails'] = $notification_emails;

        return $this;
    }

    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    public function setFeatureConstraints($feature_constraints)
    {
        $this->container['feature_constraints'] = $feature_constraints;

        return $this;
    }
}