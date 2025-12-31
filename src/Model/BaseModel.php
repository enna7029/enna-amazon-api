<?php

namespace Enna\AmazonApi\Model;

use InvalidArgumentException;
use Enna\AmazonApi\ObjectSerializer;

abstract class BaseModel implements ModelInterface
{
    /**
     * 存储属性值
     * @var array
     */
    protected $container = [];

    /**
     * 原始的模型名称
     * @var string
     */
    protected static $openAPIModelName;

    /**
     * 属性到类型的映射数组。用于（反）序列化
     * @var array
     */
    protected static $openAPITypes = [];

    /**
     * 属性到格式映射的数组。用于（反）序列化
     * @var array
     */
    protected static $openAPIFormats = [];

    /**
     * 属性数组，其中键是本地名称，值是原始名称
     * @var array
     */
    protected static $attributeMap = [];

    /**
     * setter函数的属性数组（用于反序列化响应）
     * @var array
     */
    protected static $setters = [];

    /**
     * getter函数的属性数组（用于请求的序列化）
     * @var array
     */
    protected static $getters = [];

    /**
     * @return string
     */
    public function getModelName(): string
    {
        return static::$openAPIModelName;
    }

    public static function openAPITypes(): array
    {
        return static::$openAPITypes;
    }

    public static function openAPIFormats(): array
    {
        return static::$openAPIFormats;
    }

    public static function attributeMap(): array
    {
        return static::$attributeMap;
    }

    public static function setters(): array
    {
        return static::$setters;
    }

    public static function getters(): array
    {
        return static::$getters;
    }

    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    public function getIterator()
    {
        foreach ($this->container as $key => $value) {
            yield $key => $value;
        }
    }

    public function __toString()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
    }

    public function __get($propertyName)
    {
        $method = 'get' . ucfirst($propertyName);

        if (!method_exists($this, $method)) {
            throw new InvalidArgumentException("Property \"$propertyName\" does not exist on class \"" . static::class . "\"");
        }

        return $this->$method();
    }

    public function __set($propertyName, $propertyValue)
    {
        $method = 'set' . ucfirst($propertyName);

        if (!method_exists($this, $method)) {
            throw new InvalidArgumentException("Property \"$propertyName\" does not exist on class \"" . static::class . "\"");
        }

        $this->$method($propertyValue);

        return $this;
    }
}