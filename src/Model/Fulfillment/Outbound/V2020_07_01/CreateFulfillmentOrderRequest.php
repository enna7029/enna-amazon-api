<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class CreateFulfillmentOrderRequest extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateFulfillmentOrderRequest';

    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'seller_fulfillment_order_id' => 'string',
        'displayable_order_id' => 'string',
        'displayable_order_date' => 'string',
        'displayable_order_comment' => 'string',
        'shipping_speed_category' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\ShippingSpeedCategory',
        'delivery_window' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DeliveryWindow',
        'destination_address' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Address',
        'delivery_preferences' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DeliveryPreferences',
        'fulfillment_action' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentAction',
        'fulfillment_policy' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FulfillmentPolicy',
        'cod_settings' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CodSettings',
        'ship_from_country_code' => 'string',
        'notification_emails' => 'string[]',
        'feature_constraints' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\FeatureSettings[]',
        'items' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CreateFulfillmentOrderItem[]',
        'payment_information' => '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\PaymentInformation',
    ];

    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'seller_fulfillment_order_id' => null,
        'displayable_order_id' => null,
        'displayable_order_date' => null,
        'displayable_order_comment' => null,
        'shipping_speed_category' => null,
        'delivery_window' => null,
        'destination_address' => null,
        'delivery_preferences' => null,
        'fulfillment_action' => null,
        'fulfillment_policy' => null,
        'cod_settings' => null,
        'ship_from_country_code' => null,
        'notification_emails' => null,
        'feature_constraints' => null,
        'items' => null,
        'payment_information' => null,
    ];

    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'seller_fulfillment_order_id' => 'sellerFulfillmentOrderId',
        'displayable_order_id' => 'displayableOrderId',
        'displayable_order_date' => 'displayableOrderDate',
        'displayable_order_comment' => 'displayableOrderComment',
        'shipping_speed_category' => 'shippingSpeedCategory',
        'delivery_window' => 'deliveryWindow',
        'destination_address' => 'destinationAddress',
        'delivery_preferences' => 'deliveryPreferences',
        'fulfillment_action' => 'fulfillmentAction',
        'fulfillment_policy' => 'fulfillmentPolicy',
        'cod_settings' => 'codSettings',
        'ship_from_country_code' => 'shipFromCountryCode',
        'notification_emails' => 'notificationEmails',
        'feature_constraints' => 'featureConstraints',
        'items' => 'items',
        'payment_information' => 'paymentInformation',
    ];

    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
        'displayable_order_id' => 'setDisplayableOrderId',
        'displayable_order_date' => 'setDisplayableOrderDate',
        'displayable_order_comment' => 'setDisplayableOrderComment',
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'delivery_window' => 'setDeliveryWindow',
        'destination_address' => 'setDestinationAddress',
        'delivery_preferences' => 'setDeliveryPreferences',
        'fulfillment_action' => 'setFulfillmentAction',
        'fulfillment_policy' => 'setFulfillmentPolicy',
        'cod_settings' => 'setCodSettings',
        'ship_from_country_code' => 'setShipFromCountryCode',
        'notification_emails' => 'setNotificationEmails',
        'feature_constraints' => 'setFeatureConstraints',
        'items' => 'setItems',
        'payment_information' => 'setPaymentInformation',
    ];

    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
        'displayable_order_id' => 'getDisplayableOrderId',
        'displayable_order_date' => 'getDisplayableOrderDate',
        'displayable_order_comment' => 'getDisplayableOrderComment',
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'delivery_window' => 'getDeliveryWindow',
        'destination_address' => 'getDestinationAddress',
        'delivery_preferences' => 'getDeliveryPreferences',
        'fulfillment_action' => 'getFulfillmentAction',
        'fulfillment_policy' => 'getFulfillmentPolicy',
        'cod_settings' => 'getCodSettings',
        'ship_from_country_code' => 'getShipFromCountryCode',
        'notification_emails' => 'getNotificationEmails',
        'feature_constraints' => 'getFeatureConstraints',
        'items' => 'getItems',
        'payment_information' => 'getPaymentInformation',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['seller_fulfillment_order_id'] = $data['seller_fulfillment_order_id'] ?? null;
        $this->container['displayable_order_id'] = $data['displayable_order_id'] ?? null;
        $this->container['displayable_order_date'] = $data['displayable_order_date'] ?? null;
        $this->container['displayable_order_comment'] = $data['displayable_order_comment'] ?? null;
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['delivery_window'] = $data['delivery_window'] ?? null;
        $this->container['destination_address'] = $data['destination_address'] ?? null;
        $this->container['delivery_preferences'] = $data['delivery_preferences'] ?? null;
        $this->container['fulfillment_action'] = $data['fulfillment_action'] ?? null;
        $this->container['fulfillment_policy'] = $data['fulfillment_policy'] ?? null;
        $this->container['cod_settings'] = $data['cod_settings'] ?? null;
        $this->container['ship_from_country_code'] = $data['ship_from_country_code'] ?? null;
        $this->container['notification_emails'] = $data['notification_emails'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['payment_information'] = $data['payment_information'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['destination_address'] === null) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if ((mb_strlen($this->container['seller_fulfillment_order_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_id', the character length must be smaller than or equal to 40.";
        }
        if ($this->container['displayable_order_comment'] === null) {
            $invalidProperties[] = "'displayable_order_comment' can't be null";
        }
        if ((mb_strlen($this->container['displayable_order_comment']) > 750)) {
            $invalidProperties[] = "invalid value for 'displayable_order_comment', the character length must be smaller than or equal to 750.";
        }
        if ($this->container['displayable_order_date'] === null) {
            $invalidProperties[] = "'displayable_order_date' can't be null";
        }
        if ($this->container['displayable_order_id'] === null) {
            $invalidProperties[] = "'displayable_order_id' can't be null";
        }
        if ((mb_strlen($this->container['displayable_order_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'displayable_order_id', the character length must be smaller than or equal to 40.";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['seller_fulfillment_order_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_id' can't be null";
        }
        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        return $invalidProperties;
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

    public function getSellerFulfillmentOrderId()
    {
        return $this->container['seller_fulfillment_order_id'];

    }

    public function setSellerFulfillmentOrderId($seller_fulfillment_order_id)
    {
        if ((mb_strlen($seller_fulfillment_order_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_id when calling CreateFulfillmentOrderRequest., must be smaller than or equal to 40.');
        }

        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

        return $this;
    }

    public function getDisplayableOrderId()
    {
        return $this->container['displayable_order_id'];
    }

    public function setDisplayableOrderId($displayable_order_id)
    {
        if ((mb_strlen($displayable_order_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $displayable_order_id when calling CreateFulfillmentOrderRequest., must be smaller than or equal to 40.');
        }

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

    public function getDeliveryPreferences()
    {
        return $this->container['delivery_preferences'];
    }

    public function setDeliveryPreferences($delivery_preferences)
    {
        $this->container['delivery_preferences'] = $delivery_preferences;

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

    public function getShipFromCountryCode()
    {
        return $this->container['ship_from_country_code'];
    }

    public function setShipFromCountryCode($ship_from_country_code)
    {
        $this->container['ship_from_country_code'] = $ship_from_country_code;

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

    public function getItems()
    {
        return $this->container['items'];
    }

    public function setItems($items)
    {
        $this->container['items'] = $items;

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