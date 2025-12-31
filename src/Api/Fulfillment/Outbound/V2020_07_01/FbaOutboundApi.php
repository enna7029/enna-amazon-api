<?php

namespace Enna\AmazonApi\Api\Fulfillment\Outbound\V2020_07_01;

use Enna\AmazonApi\Api\BaseApi;
use Enna\AmazonApi\Model\Fulfillment\Outbound\V2020_07_01\GetFulfillmentPreviewRequest;
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
     * @return null
     */
    public function getFulfillmentPreview($body)
    {
        $response = $this->getFulfillmentPreviewWithHttpInfo($body);

        return $response;
    }

    /**
     * @param GetFulfillmentPreviewRequest $body
     * @return void
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

            echo 1234;
            exit;

        } catch (ApiException $e) {
            throw new ApiException($e->getMessage());
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
}