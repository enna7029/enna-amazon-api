<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class DeliveryDocument extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DeliveryDocument';

    protected static $openAPITypes = [
        'document_type' => 'string',
        'url' => 'string',
    ];

    protected static $openAPIFormats = [
        'document_type' => null,
        'url' => null,
    ];

    protected static $attributeMap = [
        'document_type' => 'documentType',
        'url' => 'url',
    ];

    protected static $setters = [
        'document_type' => 'setDocumentType',
        'url' => 'setUrl',
    ];

    protected static $getters = [
        'document_type' => 'getDocumentType',
        'url' => 'getUrl',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['document_type'] = $data['document_type'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    public function getUrl()
    {
        return $this->container['url'];
    }

    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }
}