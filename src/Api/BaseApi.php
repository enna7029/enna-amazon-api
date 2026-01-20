<?php

namespace Enna\AmazonApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Enna\AmazonApi\Configuration;
use Enna\AmazonApi\HeaderSelector;
use GuzzleHttp\RequestOptions;

abstract class BaseApi
{
    /**
     * 配置对象
     * @var Configuration
     */
    protected $config;

    /**
     * 客户端对象
     * @var Client|ClientInterface
     */
    protected $client;

    /**
     * header头选择器对象
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config, ClientInterface $client = null, HeaderSelector $selector = null)
    {
        $this->config = $config;
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector($this->config);
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig(Configuration $config)
    {
        $this->config = $config;
        $this->headerSelector = new HeaderSelector($this->config);

        return $this;
    }

    public function createHttpClientOption()
    {
        $option = [];
        if ($this->config->getDebug()) {
            $option[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(),'a+');
            if (!$option[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }
        return $option;
    }

    /**
     * 写debug日志到文件中
     * @param $data
     * @return void
     */
    public function writeDebug($data)
    {
        if ($this->config->getDebug()) {
            file_put_contents($this->config->getDebugFile(), '[' . date('Y-m-d H:i:s') . ']:' . print_r($data, true) . "\n", FILE_APPEND);
        }
    }
}