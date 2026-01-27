<?php

namespace Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use Enna\AmazonApi\Model\BaseModel;
use Enna\AmazonApi\Model\ModelInterface;

class FeatureSettings extends BaseModel implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'FeatureSettings';

    protected static $openAPITypes = [
        'feature_name' => 'string',
        'feature_fulfillment_policy' => 'string'
    ];

    protected static $openAPIFormats = [
        'feature_name' => null,
        'feature_fulfillment_policy' => null
    ];

    protected static $attributeMap = [
        'feature_name' => 'featureName',
        'feature_fulfillment_policy' => 'featureFulfillmentPolicy',
    ];

    protected static $setters = [
        'feature_name' => 'setFeatureName',
        'feature_fulfillment_policy' => 'setFeatureFulfillmentPolicy',
    ];

    protected static $getters = [
        'feature_name' => 'getFeatureName',
        'feature_fulfillment_policy' => 'getFeatureFulfillmentPolicy',
    ];

    const FEATURE_FULFILLMENT_POLICY_REQUIRED = 'Required';

    const FEATURE_FULFILLMENT_POLICY_NOT_REQUIRED = 'NotRequired';

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['feature_name'] = $data['feature_name'] ?? null;
        $this->container['feature_fulfillment_policy'] = $data['feature_fulfillment_policy'] ?? null;
    }

    public function getFeatureFulfillmentPolicyAllowableValues()
    {
        $baseValues = [
            self::FEATURE_FULFILLMENT_POLICY_REQUIRED,
            self::FEATURE_FULFILLMENT_POLICY_NOT_REQUIRED
        ];

        $ucVals = array_map(function ($val) {
            return strtoupper($val);
        }, $baseValues);
        return array_merge($baseValues, $ucVals);
    }

    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        $allowedValues = $this->getFeatureFulfillmentPolicyAllowableValues();
        if (
            !is_null($this->container['feature_fulfillment_policy'])
            && !in_array($this->container['feature_fulfillment_policy'], $allowedValues)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feature_fulfillment_policy', must be one of '%s'",
                $this->container['feature_fulfillment_policy'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    public function getFeatureName()
    {
        return $this->container['feature_name'];
    }

    public function setFeatureName($feature_name)
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }

    public function getFeatureFulfillmentPolicy()
    {
        return $this->container['feature_fulfillment_policy'];
    }

    public function setFeatureFulfillmentPolicy($feature_fulfillment_policy)
    {
        $allowedValues = $this->getFeatureFulfillmentPolicyAllowableValues();
        if (!is_null($feature_fulfillment_policy) && !in_array($feature_fulfillment_policy, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feature_fulfillment_policy', must be one of '%s'",
                    $feature_fulfillment_policy,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['feature_fulfillment_policy'] = $feature_fulfillment_policy;

        return $this;
    }
}