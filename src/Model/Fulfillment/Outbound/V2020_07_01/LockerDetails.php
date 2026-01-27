<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use JsonSerializable;
use IteratorAggregate;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class LockerDetails extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'LockerDetails';

    protected static $openAPITypes = [
        'locker_number' => 'string',
        'locker_access_code' => 'string',
    ];

    protected static $openAPIFormats = [
        'locker_number' => null,
        'locker_access_code' => null,
    ];

    protected static $attributeMap = [
        'locker_number' => 'lockerNumber',
        'locker_access_code' => 'lockerAccessCode',
    ];

    protected static $setters = [
        'locker_number' => 'setLockerNumber',
        'locker_access_code' => 'setLockerAccessCode',
    ];

    protected static $getters = [
        'locker_number' => 'getLockerNumber',
        'locker_access_code' => 'getLockerAccessCode',
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['locker_number'] = $data['locker_number'] ?? null;
        $this->container['locker_access_code'] = $data['locker_access_code'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getLockerNumber()
    {
        return $this->container['locker_number'];
    }

    public function setLockerNumber($locker_number)
    {
        $this->container['locker_number'] = $locker_number;

        return $this;
    }

    public function getLockerAccessCode()
    {
        return $this->container['locker_access_code'];
    }

    public function setLockerAccessCode($locker_access_code)
    {
        $this->container['locker_access_code'] = $locker_access_code;

        return $this;
    }
}