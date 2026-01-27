<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class ReturnAuthorization extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ReturnAuthorization';

    protected static $openAPITypes = [
        'return_authorization_id' => 'string',
        'fulfillment_centerId' => 'string',
        'return_to_address' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\Address',
        'amazon_rma_id' => 'string',
        'rma_page_url' => 'string',
    ];

    protected static $openAPIFormats = [
        'return_authorization_id' => null,
        'fulfillment_centerId' => null,
        'return_to_address' => null,
        'amazon_rma_id' => null,
        'rma_page_url' => null,
    ];

    protected static $attributeMap = [
        'return_authorization_id' => 'returnAuthorizationId',
        'fulfillment_centerId' => 'fulfillmentCenterId',
        'return_to_address' => 'returnToAddress',
        'amazon_rma_id' => 'amazonRmaId',
        'rma_page_url' => 'rmaPageURL',
    ];

    protected static $setters = [
        'return_authorization_id' => 'setReturnAuthorizationId',
        'fulfillment_centerId' => 'setFulfillmentCenterId',
        'return_to_address' => 'setReturnToAddress',
        'amazon_rma_id' => 'setAmazonRmaId',
        'rma_page_url' => 'setRmaPageURL',
    ];

    protected static $getters = [
        'return_authorization_id' => 'getReturnAuthorizationId',
        'fulfillment_centerId' => 'getFulfillmentCenterId',
        'return_to_address' => 'getReturnToAddress',
        'amazon_rma_id' => 'getAmazonRmaId',
        'rma_page_url' => 'getRmaPageURL',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['return_authorization_id'] = $data['return_authorization_id'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
        $this->container['return_to_address'] = $data['return_to_address'] ?? null;
        $this->container['amazon_rma_id'] = $data['amazon_rma_id'] ?? null;
        $this->container['rma_page_url'] = $data['rma_page_url'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $listInvalidProperties = [];
        if ($this->container['return_authorization_id'] === null) {
            $listInvalidProperties[] = "'return_authorization_id' can't be null";
        }
        if ($this->container['fulfillment_center_id'] === null) {
            $listInvalidProperties[] = "'fulfillment_center_id' can't be null";
        }
        if ($this->container['return_to_address'] === null) {
            $listInvalidProperties[] = "'return_to_address' can't be null";
        }
        if ($this->container['amazon_rma_id'] === null) {
            $listInvalidProperties[] = "'amazon_rma_id' can't be null";
        }
        if ($this->container['rma_page_url'] === null) {
            $listInvalidProperties[] = "'rma_page_url' can't be null";
        }
        return $listInvalidProperties;
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

    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

    public function getReturnToAddress()
    {
        return $this->container['return_to_address'];
    }

    public function setReturnToAddress($return_to_address)
    {
        $this->container['return_to_address'] = $return_to_address;

        return $this;
    }

    public function getAmazonRmaId()
    {
        return $this->container['amazon_rma_id'];
    }

    public function setAmazonRmaId($amazon_rma_id)
    {
        $this->container['amazon_rma_id'] = $amazon_rma_id;
    }

    public function getRmaPageURL()
    {
        return $this->container['rma_page_url'];
    }

    public function setRmaPageURL($rma_page_url)
    {
        $this->container['rma_page_url'] = $rma_page_url;
        
        return $this;
    }
}