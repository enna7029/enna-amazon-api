<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class DeliveryInformation extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DeliveryInformation';

    protected static $openAPITypes = [
        'delivery_document_list' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DeliveryDocument[]',
        'drop_off_location' => 'Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\DropOffLocation',
    ];

    protected static $openAPIFormats = [
        'delivery_document_list' => null,
        'drop_off_location' => null,
    ];

    protected static $attributeMap = [
        'delivery_document_list' => 'deliveryDocumentList',
        'drop_off_location' => 'dropOffLocation',
    ];

    protected static $setters = [
        'delivery_document_list' => 'setDeliveryDocumentList',
        'drop_off_location' => 'setDropOffLocation',
    ];

    protected static $getters = [
        'delivery_document_list' => 'getDeliveryDocumentList',
        'drop_off_location' => 'getDropOffLocation',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['delivery_document_list'] = $data['delivery_document_list'] ?? null;
        $this->container['drop_off_location'] = $data['drop_off_location'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getDeliveryDocumentList()
    {
        return $this->container['delivery_document_list'];
    }

    public function setDeliveryDocumentList($delivery_document_list)
    {
        $this->container['delivery_document_list'] = $delivery_document_list;

        return $this;
    }

    public function getDropOffLocation()
    {
        return $this->container['drop_off_location'];
    }

    public function setDropOffLocation($drop_off_location)
    {
        $this->container['drop_off_location'] = $drop_off_location;

        return $this;
    }
}