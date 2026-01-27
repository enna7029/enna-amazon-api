<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class CreateFulfillmentOrderResponse extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateFulfillmentOrderResponse';

    protected static $openAPITypes = [];

    protected static $openAPIFormats = [];

    protected static $attributeMap = [];

    protected static $setters = [];

    protected static $getters = [];

    protected $container = [];

    public function __construct(array $data = null)
    {
        
    }

    public function listInvalidProperties(): array
    {
        // TODO: Implement listInvalidProperties() method.
    }
}