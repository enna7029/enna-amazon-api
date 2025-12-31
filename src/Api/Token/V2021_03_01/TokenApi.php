<?php

namespace Enna\AmazonApi\Api\Token\V2021_03_01;

class TokenApi
{
    public function createRestrictedDataToken($body)
    {
        $response = $this->createRestrictedDataTokenWithHttpInfo($body);
        return $response;
    }

    public function createRestrictedDataTokenWithHttpInfo()
    {

    }

    public function createRestrictedDataTokenRequest()
    {

    }
}