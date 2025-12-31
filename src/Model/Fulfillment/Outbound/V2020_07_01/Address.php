<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class Address extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Address';

    protected static $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'city' => 'string',
        'district_or_county' => 'string',
        'state_or_region' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'phone' => 'string'
    ];

    protected static $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'city' => null,
        'district_or_county' => null,
        'state_or_region' => null,
        'postal_code' => null,
        'country_code' => null,
        'phone' => null
    ];

    protected static $attributeMap = [
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'city' => 'city',
        'district_or_county' => 'districtOrCounty',
        'state_or_region' => 'stateOrRegion',
        'postal_code' => 'postalCode',
        'country_code' => 'countryCode',
        'phone' => 'phone'
    ];

    protected static $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'city' => 'setCity',
        'district_or_county' => 'setDistrictOrCounty',
        'state_or_region' => 'setStateOrRegion',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone'
    ];

    protected static $getters = [
        'name' => 'setName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'city' => 'getCity',
        'district_or_county' => 'getDistrictOrCounty',
        'state_or_region' => 'getStateOrRegion',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone'
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['district_or_county'] = $data['district_or_county'] ?? null;
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        return $invalidProperties;
    }

    public function getName()
    {
        return $this->container['name'];
    }

    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    public function getCity()
    {
        return $this->container['city'];
    }

    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    public function getDistrictOrCounty()
    {
        return $this->container['district_or_county'];
    }

    public function setDistrictOrCounty($district_or_county)
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    public function getStateOrRegion()
    {
        return $this->container['state_or_region'];
    }

    public function setStateOrRegion($state_or_region)
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    public function getPhone()
    {
        return $this->container['phone'];
    }

    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }
}