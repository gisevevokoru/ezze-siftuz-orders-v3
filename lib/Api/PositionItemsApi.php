<?php
/**
 * PositionItemsApi
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\OrdersV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Orders
 *
 * This API documentation describes all endpoints for orders - version 3
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\OrdersV3\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EzzeSiftuz\OrdersV3\ApiException;
use EzzeSiftuz\OrdersV3\Configuration;
use EzzeSiftuz\OrdersV3\HeaderSelector;
use EzzeSiftuz\OrdersV3\ObjectSerializer;

/**
 * PositionItemsApi Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\OrdersV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionItemsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation cancelPartnerOrderPositionItems
     *
     * Cancels PositionItems of an order by ids
     *
     * @param  string $sales_order_id The Sales Order Id of the order to cancel (required)
     * @param  string[] $position_item_id The ids of the PositionItems to cancel (required)
     *
     * @throws \EzzeSiftuz\OrdersV3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function cancelPartnerOrderPositionItems($sales_order_id, $position_item_id)
    {
        $this->cancelPartnerOrderPositionItemsWithHttpInfo($sales_order_id, $position_item_id);
    }

    /**
     * Operation cancelPartnerOrderPositionItemsWithHttpInfo
     *
     * Cancels PositionItems of an order by ids
     *
     * @param  string $sales_order_id The Sales Order Id of the order to cancel (required)
     * @param  string[] $position_item_id The ids of the PositionItems to cancel (required)
     *
     * @throws \EzzeSiftuz\OrdersV3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelPartnerOrderPositionItemsWithHttpInfo($sales_order_id, $position_item_id)
    {
        $returnType = '';
        $request = $this->cancelPartnerOrderPositionItemsRequest($sales_order_id, $position_item_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation cancelPartnerOrderPositionItemsAsync
     *
     * Cancels PositionItems of an order by ids
     *
     * @param  string $sales_order_id The Sales Order Id of the order to cancel (required)
     * @param  string[] $position_item_id The ids of the PositionItems to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelPartnerOrderPositionItemsAsync($sales_order_id, $position_item_id)
    {
        return $this->cancelPartnerOrderPositionItemsAsyncWithHttpInfo($sales_order_id, $position_item_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelPartnerOrderPositionItemsAsyncWithHttpInfo
     *
     * Cancels PositionItems of an order by ids
     *
     * @param  string $sales_order_id The Sales Order Id of the order to cancel (required)
     * @param  string[] $position_item_id The ids of the PositionItems to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelPartnerOrderPositionItemsAsyncWithHttpInfo($sales_order_id, $position_item_id)
    {
        $returnType = '';
        $request = $this->cancelPartnerOrderPositionItemsRequest($sales_order_id, $position_item_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cancelPartnerOrderPositionItems'
     *
     * @param  string $sales_order_id The Sales Order Id of the order to cancel (required)
     * @param  string[] $position_item_id The ids of the PositionItems to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelPartnerOrderPositionItemsRequest($sales_order_id, $position_item_id)
    {
        // verify the required parameter 'sales_order_id' is set
        if ($sales_order_id === null || (is_array($sales_order_id) && count($sales_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id when calling cancelPartnerOrderPositionItems'
            );
        }
        // verify the required parameter 'position_item_id' is set
        if ($position_item_id === null || (is_array($position_item_id) && count($position_item_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $position_item_id when calling cancelPartnerOrderPositionItems'
            );
        }

        $resourcePath = '/v3/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sales_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'salesOrderId' . '}',
                ObjectSerializer::toPathValue($sales_order_id),
                $resourcePath
            );
        }
        // path params
        if ($position_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'positionItemId' . '}',
                ObjectSerializer::toPathValue($position_item_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
