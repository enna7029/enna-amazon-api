<?php

namespace Enna\AmazonApi;

use Exception;

class ApiException extends Exception
{
    protected $responseHeaders;

    protected $responseBody;

    protected $responseObject;

    public function __construct($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }
}