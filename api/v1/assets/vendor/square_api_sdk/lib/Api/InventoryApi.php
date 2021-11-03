<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * InventoryApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class InventoryApi
{

    /**
     * API Client
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://connect.squareup.com');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \SquareConnect\ApiClient $apiClient set the API client
     * @return InventoryApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    /**
     * batchChangeInventory
     *
     * BatchChangeInventory
     *
     * @param \SquareConnect\Model\BatchChangeInventoryRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @return \SquareConnect\Model\BatchChangeInventoryResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function batchChangeInventory($body)
    {
        list($response, $statusCode, $httpHeader) = $this->batchChangeInventoryWithHttpInfo ($body);
        return $response; 
    }


    /**
     * batchChangeInventoryWithHttpInfo
     *
     * BatchChangeInventory
     *
     * @param \SquareConnect\Model\BatchChangeInventoryRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @return Array of \SquareConnect\Model\BatchChangeInventoryResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function batchChangeInventoryWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling batchChangeInventory');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/batch-change";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\BatchChangeInventoryResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\BatchChangeInventoryResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\BatchChangeInventoryResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * batchRetrieveInventoryChanges
     *
     * BatchRetrieveInventoryChanges
     *
     * @param \SquareConnect\Model\BatchRetrieveInventoryChangesRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @return \SquareConnect\Model\BatchRetrieveInventoryChangesResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function batchRetrieveInventoryChanges($body)
    {
        list($response, $statusCode, $httpHeader) = $this->batchRetrieveInventoryChangesWithHttpInfo ($body);
        return $response; 
    }


    /**
     * batchRetrieveInventoryChangesWithHttpInfo
     *
     * BatchRetrieveInventoryChanges
     *
     * @param \SquareConnect\Model\BatchRetrieveInventoryChangesRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @return Array of \SquareConnect\Model\BatchRetrieveInventoryChangesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function batchRetrieveInventoryChangesWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling batchRetrieveInventoryChanges');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/batch-retrieve-changes";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\BatchRetrieveInventoryChangesResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\BatchRetrieveInventoryChangesResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\BatchRetrieveInventoryChangesResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * batchRetrieveInventoryCounts
     *
     * BatchRetrieveInventoryCounts
     *
     * @param \SquareConnect\Model\BatchRetrieveInventoryCountsRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @return \SquareConnect\Model\BatchRetrieveInventoryCountsResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function batchRetrieveInventoryCounts($body)
    {
        list($response, $statusCode, $httpHeader) = $this->batchRetrieveInventoryCountsWithHttpInfo ($body);
        return $response; 
    }


    /**
     * batchRetrieveInventoryCountsWithHttpInfo
     *
     * BatchRetrieveInventoryCounts
     *
     * @param \SquareConnect\Model\BatchRetrieveInventoryCountsRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @return Array of \SquareConnect\Model\BatchRetrieveInventoryCountsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function batchRetrieveInventoryCountsWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling batchRetrieveInventoryCounts');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/batch-retrieve-counts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\BatchRetrieveInventoryCountsResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\BatchRetrieveInventoryCountsResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\BatchRetrieveInventoryCountsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * retrieveInventoryAdjustment
     *
     * RetrieveInventoryAdjustment
     *
     * @param string $adjustment_id ID of the &#x60;InventoryAdjustment&#x60; to retrieve. (required)
     * @return \SquareConnect\Model\RetrieveInventoryAdjustmentResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryAdjustment($adjustment_id)
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveInventoryAdjustmentWithHttpInfo ($adjustment_id);
        return $response; 
    }


    /**
     * retrieveInventoryAdjustmentWithHttpInfo
     *
     * RetrieveInventoryAdjustment
     *
     * @param string $adjustment_id ID of the &#x60;InventoryAdjustment&#x60; to retrieve. (required)
     * @return Array of \SquareConnect\Model\RetrieveInventoryAdjustmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryAdjustmentWithHttpInfo($adjustment_id)
    {
        
        // verify the required parameter 'adjustment_id' is set
        if ($adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $adjustment_id when calling retrieveInventoryAdjustment');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/adjustment/{adjustment_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        
        
        // path params
        if ($adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "adjustment_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($adjustment_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\RetrieveInventoryAdjustmentResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\RetrieveInventoryAdjustmentResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveInventoryAdjustmentResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * retrieveInventoryChanges
     *
     * RetrieveInventoryChanges
     *
     * @param string $catalog_object_id ID of the &#x60;CatalogObject&#x60; to retrieve. (required)
     * @param string $location_ids The &#x60;Location&#x60; IDs to look up as a comma-separated list. An empty list queries all locations. (optional)
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. (optional)
     * @return \SquareConnect\Model\RetrieveInventoryChangesResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryChanges($catalog_object_id, $location_ids = null, $cursor = null)
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveInventoryChangesWithHttpInfo ($catalog_object_id, $location_ids, $cursor);
        return $response; 
    }


    /**
     * retrieveInventoryChangesWithHttpInfo
     *
     * RetrieveInventoryChanges
     *
     * @param string $catalog_object_id ID of the &#x60;CatalogObject&#x60; to retrieve. (required)
     * @param string $location_ids The &#x60;Location&#x60; IDs to look up as a comma-separated list. An empty list queries all locations. (optional)
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. (optional)
     * @return Array of \SquareConnect\Model\RetrieveInventoryChangesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryChangesWithHttpInfo($catalog_object_id, $location_ids = null, $cursor = null)
    {
        
        // verify the required parameter 'catalog_object_id' is set
        if ($catalog_object_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $catalog_object_id when calling retrieveInventoryChanges');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/{catalog_object_id}/changes";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        // query params
        if ($location_ids !== null) {
            $queryParams['location_ids'] = $this->apiClient->getSerializer()->toQueryValue($location_ids);
        }// query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
        }
        
        // path params
        if ($catalog_object_id !== null) {
            $resourcePath = str_replace(
                "{" . "catalog_object_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($catalog_object_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\RetrieveInventoryChangesResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\RetrieveInventoryChangesResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveInventoryChangesResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * retrieveInventoryCount
     *
     * RetrieveInventoryCount
     *
     * @param string $catalog_object_id ID of the &#x60;CatalogObject&#x60; to retrieve. (required)
     * @param string $location_ids The &#x60;Location&#x60; IDs to look up as a comma-separated list. An empty list queries all locations. (optional)
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. (optional)
     * @return \SquareConnect\Model\RetrieveInventoryCountResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryCount($catalog_object_id, $location_ids = null, $cursor = null)
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveInventoryCountWithHttpInfo ($catalog_object_id, $location_ids, $cursor);
        return $response; 
    }


    /**
     * retrieveInventoryCountWithHttpInfo
     *
     * RetrieveInventoryCount
     *
     * @param string $catalog_object_id ID of the &#x60;CatalogObject&#x60; to retrieve. (required)
     * @param string $location_ids The &#x60;Location&#x60; IDs to look up as a comma-separated list. An empty list queries all locations. (optional)
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. (optional)
     * @return Array of \SquareConnect\Model\RetrieveInventoryCountResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryCountWithHttpInfo($catalog_object_id, $location_ids = null, $cursor = null)
    {
        
        // verify the required parameter 'catalog_object_id' is set
        if ($catalog_object_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $catalog_object_id when calling retrieveInventoryCount');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/{catalog_object_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        // query params
        if ($location_ids !== null) {
            $queryParams['location_ids'] = $this->apiClient->getSerializer()->toQueryValue($location_ids);
        }// query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
        }
        
        // path params
        if ($catalog_object_id !== null) {
            $resourcePath = str_replace(
                "{" . "catalog_object_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($catalog_object_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\RetrieveInventoryCountResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\RetrieveInventoryCountResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveInventoryCountResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * retrieveInventoryPhysicalCount
     *
     * RetrieveInventoryPhysicalCount
     *
     * @param string $physical_count_id ID of the &#x60;InventoryPhysicalCount&#x60; to retrieve. (required)
     * @return \SquareConnect\Model\RetrieveInventoryPhysicalCountResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryPhysicalCount($physical_count_id)
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveInventoryPhysicalCountWithHttpInfo ($physical_count_id);
        return $response; 
    }


    /**
     * retrieveInventoryPhysicalCountWithHttpInfo
     *
     * RetrieveInventoryPhysicalCount
     *
     * @param string $physical_count_id ID of the &#x60;InventoryPhysicalCount&#x60; to retrieve. (required)
     * @return Array of \SquareConnect\Model\RetrieveInventoryPhysicalCountResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveInventoryPhysicalCountWithHttpInfo($physical_count_id)
    {
        
        // verify the required parameter 'physical_count_id' is set
        if ($physical_count_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $physical_count_id when calling retrieveInventoryPhysicalCount');
        }
  
        // parse inputs
        $resourcePath = "/v2/inventory/physical-count/{physical_count_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-12-17";

        
        
        // path params
        if ($physical_count_id !== null) {
            $resourcePath = str_replace(
                "{" . "physical_count_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($physical_count_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\RetrieveInventoryPhysicalCountResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\RetrieveInventoryPhysicalCountResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveInventoryPhysicalCountResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
}
