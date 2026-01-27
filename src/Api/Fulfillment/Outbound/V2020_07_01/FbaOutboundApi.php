<?php

namespace Enna\AmazonApi\Api\Fulfillment\Outbound\V2020_07_01;

use Enna\AmazonApi\Api\BaseApi;
use Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentPreviewRequest;
use Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentPreviewResponse;
use Enna\AmazonApi\ApiException;
use Enna\AmazonApi\ObjectSerializer;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;

class FbaOutboundApi extends BaseApi
{
    /**
     * 操作 getFulfillmentPreview
     * @param GetFulfillmentPreviewRequest $body
     * @return mixed
     */
    public function getFulfillmentPreview($body)
    {
        $response = $this->getFulfillmentPreviewWithHttpInfo($body);

        return $response;
    }

    /**
     * @param GetFulfillmentPreviewRequest $body
     * @return mixed
     */
    public function getFulfillmentPreviewWithHttpInfo($body)
    {
        $request = $this->getFulfillmentPreviewRequest($body);
        $signedRequest = $this->config->signRequest($request);

        $this->writeDebug($signedRequest);
        $this->writeDebug((string)$signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string)$response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string)($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            $returnType = '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentPreviewResponse';
            if ($returnType === '\SplFileObject') {
                $content = $responseBody;
            } else {
                $content = (string)$responseBody;
            }
            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            $data = ObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentPreviewResponse',
                $e->getResponseHeaders()
            );
            $e->setResponseObject($data);

            throw $e;
        }
    }

    public function getFulfillmentPreviewRequest($body)
    {
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling getFulfillmentPreview');
        }
        $resourcePath = "/fba/outbound/2020-07-01/fulfillmentOrders/preview";
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload'],
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload'],
                ['application/json']
            );
        }

        if (isset($body)) {
            if ($headers['Content-Type'] == 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($body));
                if (JSON_ERROR_NONE !== json_last_error()) {
                    throw new InvalidArgumentException('json_encode error: ' . json_last_error_msg());
                }
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }

                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] == 'application/json') {
                $httpBody = json_encode($formParams);
            } else {
                $httpBody = Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $headers['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge($defaultHeaders, $headerParams, $headers);
        $query = Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?" . $query : ""),
            $headers,
            $httpBody
        );
    }

    /**
     * 返回由指定订单标识符指示的履行订单。
     * @param string $seller_fulfillment_order_id 在创建履行订单时，卖家为商品分配的标识符
     * @return array|\DateTime|\Enna\AmazonApi\Model\ModelInterface|false|object|\SplFileObject|string|null
     * @throws ApiException
     */
    public function getFulfillmentOrder($seller_fulfillment_order_id)
    {
        $response = $this->getFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id);
        return $response;
    }

    public function getFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id)
    {
        $request = $this->getFulfillmentOrderRequest($seller_fulfillment_order_id);
        $signedRequest = $this->config->signRequest($request);

        $this->writeDebug($signedRequest);
        $this->writeDebug((string)$signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string)$response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string)($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }
            $responseBody = $response->getBody();
            $returnType = '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentOrderResponse';
            if ($returnType === '\SplFileObject') {
                $content = $responseBody;
            } else {
                $content = (string)$responseBody;
            }
            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            $data = ObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentOrderResponse',
                $e->getResponseHeaders()
            );
            $e->setResponseObject($data);

            throw $e;
        }
    }

    public function getFulfillmentOrderRequest($seller_fulfillment_order_id)
    {
        if ($seller_fulfillment_order_id === null || (is_array($seller_fulfillment_order_id) && count($seller_fulfillment_order_id) === 0)) {
            throw new InvalidArgumentException('Missing the required parameter $seller_fulfillment_order_id when calling getFulfillmentOrder');
        }
        if (strlen($seller_fulfillment_order_id) > 40) {
            throw new InvalidArgumentException('invalid length for "$seller_fulfillment_order_id" when calling FbaOutboundV20200701Api.getFulfillmentOrder, must be smaller than or equal to 40.');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($seller_fulfillment_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sellerFulfillmentOrderId' . '}',
                ObjectSerializer::toPathValue($seller_fulfillment_order_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload'],
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload'],
                []
            );
        }

        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * @param \Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CreateFulfillmentOrderRequest $body
     * @return \Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CreateFulfillmentOrderResponse
     */
    public function createFulfillmentOrder($body)
    {
        $response = $this->createFulfillmentOrderWithHttpInfo($body);
        return $response;
    }

    public function createFulfillmentOrderWithHttpInfo($body)
    {
        $request = $this->createFulfillmentOrderRequest($body);
        $signedRequest = $this->config->signRequest($request);

        $this->writeDebug($signedRequest);
        $this->writeDebug((string)$signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string)$response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string)($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }
            $responseBody = $response->getBody();
            $returnType = '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CreateFulfillmentOrderResponse';
            if ($returnType === '\SplFileObject') {
                $content = $responseBody;
            } else {
                $content = (string)$responseBody;
            }
            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            $data = ObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CreateFulfillmentOrderResponse',
                $e->getResponseHeaders()
            );
            $e->setResponseObject($data);

            throw $e;
        }
    }

    public function createFulfillmentOrderRequest($body)
    {
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createFulfillmentOrder'
            );
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * 取消订单
     * @param string $seller_fulfillment_order_id
     * @return mixed
     */
    public function cancelFulfillmentOrder($seller_fulfillment_order_id)
    {
        $response = $this->cancelFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id);
        return $response;
    }

    public function cancelFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id)
    {
        $request = $this->cancelFulfillmentOrderRequest($seller_fulfillment_order_id);
        $signedRequest = $this->config->signRequest($request);

        $this->writeDebug($signedRequest);
        $this->writeDebug((string)$signedRequest->getBody());

        try {
            $option = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $option);
                $this->writeDebug($response);
                $this->writeDebug((string)$response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string)($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();

            $returnType = '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CancelFulfillmentOrderResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string)$responseBody;
            }
            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            $data = ObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\CancelFulfillmentOrderResponse',
                $e->getResponseHeaders()
            );
            $e->setResponseObject($data);

            throw $e;
        }
    }

    public function cancelFulfillmentOrderRequest($seller_fulfillment_order_id)
    {
        if ($seller_fulfillment_order_id === null || (is_array($seller_fulfillment_order_id) && count($seller_fulfillment_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $seller_fulfillment_order_id when calling cancelFulfillmentOrder'
            );
        }
        if (strlen($seller_fulfillment_order_id) > 40) {
            throw new \InvalidArgumentException('invalid length for "$seller_fulfillment_order_id" when calling FbaOutboundV20200701Api.cancelFulfillmentOrder, must be smaller than or equal to 40.');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($seller_fulfillment_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sellerFulfillmentOrderId' . '}',
                ObjectSerializer::toPathValue($seller_fulfillment_order_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}