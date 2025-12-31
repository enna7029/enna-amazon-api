<?php

namespace Enna\AmazonApi\Model;

interface ModelInterface
{
    /**
     * 模型方法
     * @return string
     */
    public function getModelName(): string;

    /**
     * 属性到类型的关联关系
     * @return array
     */
    public static function openAPITypes(): array;

    /**
     * 属性到格式的关联关系
     * @return array
     */
    public static function openAPIFormats(): array;

    /**
     * 属性数组，其中键是本地名称，值是原始名称
     * @return array
     */
    public static function attributeMap(): array;

    /**
     * @return array
     */
    public static function setters(): array;

    /**
     * @return array
     */
    public static function getters(): array;

    /**
     * 显示所有无效属性及其原因
     * @return array
     */
    public function listInvalidProperties(): array;

    /**
     * 验证属性
     * @return bool
     */
    public function valid(): bool;
}