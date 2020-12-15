<?php

namespace HuaweiCloud\SDK\Eip\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class EipAsyncClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;
    public function __construct($selector=null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder($clazz)
    {
        return new ClientBuilder($clazz);
    }

    public function addPublicipsIntoSharedBandwidthAsync($request){
        return $this->addPublicipsIntoSharedBandwidthAsyncWithHttpInfo($request);
    }
    
    public function addPublicipsIntoSharedBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/bandwidths/{bandwidth_id}/insert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['bandwidthId'] !== null) {
            $pathParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\AddPublicipsIntoSharedBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\AddPublicipsIntoSharedBandwidthRequest',
            $asyncRequest = true);
    }

    public function batchCreateSharedBandwidthsAsync($request){
        return $this->batchCreateSharedBandwidthsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateSharedBandwidthsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batch-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }




        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\BatchCreateSharedBandwidthsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\BatchCreateSharedBandwidthsRequest',
            $asyncRequest = true);
    }

    public function createSharedBandwidthAsync($request){
        return $this->createSharedBandwidthAsyncWithHttpInfo($request);
    }
    
    public function createSharedBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }




        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\CreateSharedBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\CreateSharedBandwidthRequest',
            $asyncRequest = true);
    }

    public function deleteSharedBandwidthAsync($request){
        return $this->deleteSharedBandwidthAsyncWithHttpInfo($request);
    }
    
    public function deleteSharedBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/bandwidths/{bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['bandwidthId'] !== null) {
            $pathParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }


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
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\DeleteSharedBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\DeleteSharedBandwidthRequest',
            $asyncRequest = true);
    }

    public function listBandwidthsAsync($request){
        return $this->listBandwidthsAsyncWithHttpInfo($request);
    }
    
    public function listBandwidthsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }

        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['shareType'] !== null) {
            $queryParams['share_type'] = $localVarParams['shareType'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ListBandwidthsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ListBandwidthsRequest',
            $asyncRequest = true);
    }

    public function listQuotasAsync($request){
        return $this->listQuotasAsyncWithHttpInfo($request);
    }
    
    public function listQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }

        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ListQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ListQuotasRequest',
            $asyncRequest = true);
    }

    public function removePublicipsFromSharedBandwidthAsync($request){
        return $this->removePublicipsFromSharedBandwidthAsyncWithHttpInfo($request);
    }
    
    public function removePublicipsFromSharedBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/bandwidths/{bandwidth_id}/remove';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['bandwidthId'] !== null) {
            $pathParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\RemovePublicipsFromSharedBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\RemovePublicipsFromSharedBandwidthRequest',
            $asyncRequest = true);
    }

    public function showBandwidthAsync($request){
        return $this->showBandwidthAsyncWithHttpInfo($request);
    }
    
    public function showBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/bandwidths/{bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['bandwidthId'] !== null) {
            $pathParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ShowBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ShowBandwidthRequest',
            $asyncRequest = true);
    }

    public function updateBandwidthAsync($request){
        return $this->updateBandwidthAsyncWithHttpInfo($request);
    }
    
    public function updateBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/bandwidths/{bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['bandwidthId'] !== null) {
            $pathParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\UpdateBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\UpdateBandwidthRequest',
            $asyncRequest = true);
    }

    public function updatePrePaidBandwidthAsync($request){
        return $this->updatePrePaidBandwidthAsyncWithHttpInfo($request);
    }
    
    public function updatePrePaidBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/bandwidths/{bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['bandwidthId'] !== null) {
            $pathParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json-1', 'application/json-2'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\UpdatePrePaidBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\UpdatePrePaidBandwidthRequest',
            $asyncRequest = true);
    }

    public function batchCreatePublicipTagsAsync($request){
        return $this->batchCreatePublicipTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreatePublicipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips/{publicip_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\BatchCreatePublicipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\BatchCreatePublicipTagsRequest',
            $asyncRequest = true);
    }

    public function batchDeletePublicipTagsAsync($request){
        return $this->batchDeletePublicipTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeletePublicipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.0/{project_id}/publicips/{publicip_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\BatchDeletePublicipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\BatchDeletePublicipTagsRequest',
            $asyncRequest = true);
    }

    public function createPrePaidPublicipAsync($request){
        return $this->createPrePaidPublicipAsyncWithHttpInfo($request);
    }
    
    public function createPrePaidPublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }




        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json-1', 'application/json-2'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\CreatePrePaidPublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\CreatePrePaidPublicipRequest',
            $asyncRequest = true);
    }

    public function createPublicipAsync($request){
        return $this->createPublicipAsyncWithHttpInfo($request);
    }
    
    public function createPublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/publicips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }




        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json-1', 'application/json-2'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\CreatePublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\CreatePublicipRequest',
            $asyncRequest = true);
    }

    public function createPublicipTagAsync($request){
        return $this->createPublicipTagAsyncWithHttpInfo($request);
    }
    
    public function createPublicipTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips/{publicip_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\CreatePublicipTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\CreatePublicipTagRequest',
            $asyncRequest = true);
    }

    public function deletePublicipAsync($request){
        return $this->deletePublicipAsyncWithHttpInfo($request);
    }
    
    public function deletePublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/publicips/{publicip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }


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
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\DeletePublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\DeletePublicipRequest',
            $asyncRequest = true);
    }

    public function deletePublicipTagAsync($request){
        return $this->deletePublicipTagAsyncWithHttpInfo($request);
    }
    
    public function deletePublicipTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips/{publicip_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
        }


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
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\DeletePublicipTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\DeletePublicipTagRequest',
            $asyncRequest = true);
    }

    public function listPublicipTagsAsync($request){
        return $this->listPublicipTagsAsyncWithHttpInfo($request);
    }
    
    public function listPublicipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ListPublicipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ListPublicipTagsRequest',
            $asyncRequest = true);
    }

    public function listPublicipsAsync($request){
        return $this->listPublicipsAsyncWithHttpInfo($request);
    }
    
    public function listPublicipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/publicips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }

        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['portId'] !== null) {
            $queryParams['port_id'] = $localVarParams['portId'];
        }
        if ($localVarParams['publicIpAddress'] !== null) {
            $queryParams['public_ip_address'] = $localVarParams['publicIpAddress'];
        }
        if ($localVarParams['privateIpAddress'] !== null) {
            $queryParams['private_ip_address'] = $localVarParams['privateIpAddress'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ListPublicipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ListPublicipsRequest',
            $asyncRequest = true);
    }

    public function listPublicipsByTagsAsync($request){
        return $this->listPublicipsByTagsAsyncWithHttpInfo($request);
    }
    
    public function listPublicipsByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }




        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json-1', 'application/json-2'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ListPublicipsByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ListPublicipsByTagsRequest',
            $asyncRequest = true);
    }

    public function showPublicipAsync($request){
        return $this->showPublicipAsyncWithHttpInfo($request);
    }
    
    public function showPublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/publicips/{publicip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ShowPublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ShowPublicipRequest',
            $asyncRequest = true);
    }

    public function showPublicipTagsAsync($request){
        return $this->showPublicipTagsAsyncWithHttpInfo($request);
    }
    
    public function showPublicipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/publicips/{publicip_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\ShowPublicipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\ShowPublicipTagsRequest',
            $asyncRequest = true);
    }

    public function updatePublicipAsync($request){
        return $this->updatePublicipAsyncWithHttpInfo($request);
    }
    
    public function updatePublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/publicips/{publicip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json-1', 'application/json-2'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\UpdatePublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\UpdatePublicipRequest',
            $asyncRequest = true);
    }

    public function neutronCreateFloatingIpAsync($request){
        return $this->neutronCreateFloatingIpAsyncWithHttpInfo($request);
    }
    
    public function neutronCreateFloatingIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/floatingips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }




        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronCreateFloatingIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronCreateFloatingIpRequest',
            $asyncRequest = true);
    }

    public function neutronDeleteFloatingIpAsync($request){
        return $this->neutronDeleteFloatingIpAsyncWithHttpInfo($request);
    }
    
    public function neutronDeleteFloatingIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/floatingips/{floatingip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
        }


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
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronDeleteFloatingIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronDeleteFloatingIpRequest',
            $asyncRequest = true);
    }

    public function neutronListFloatingIpsAsync($request){
        return $this->neutronListFloatingIpsAsyncWithHttpInfo($request);
    }
    
    public function neutronListFloatingIpsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/floatingips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }

        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['floatingIpAddress'] !== null) {
            $queryParams['floating_ip_address'] = $localVarParams['floatingIpAddress'];
        }
        if ($localVarParams['routerId'] !== null) {
            $queryParams['router_id'] = $localVarParams['routerId'];
        }
        if ($localVarParams['portId'] !== null) {
            $queryParams['port_id'] = $localVarParams['portId'];
        }
        if ($localVarParams['fixedIpAddress'] !== null) {
            $queryParams['fixed_ip_address'] = $localVarParams['fixedIpAddress'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $queryParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['floatingNetworkId'] !== null) {
            $queryParams['floating_network_id'] = $localVarParams['floatingNetworkId'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronListFloatingIpsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronListFloatingIpsRequest',
            $asyncRequest = true);
    }

    public function neutronShowFloatingIpAsync($request){
        return $this->neutronShowFloatingIpAsyncWithHttpInfo($request);
    }
    
    public function neutronShowFloatingIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/floatingips/{floatingip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronShowFloatingIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronShowFloatingIpRequest',
            $asyncRequest = true);
    }

    public function neutronUpdateFloatingIpAsync($request){
        return $this->neutronUpdateFloatingIpAsyncWithHttpInfo($request);
    }
    
    public function neutronUpdateFloatingIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/floatingips/{floatingip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }



        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json-1', 'application/json-2'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronUpdateFloatingIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V2\Model\NeutronUpdateFloatingIpRequest',
            $asyncRequest = true);
    }

    protected function callApi(
        $method,
        $resourcePath,
        $pathParams=null,
        $queryParams=null,
        $headerParams=null,
        $body=null,
        $multipart=null,
        $postParams=null,
        $responseType=null,
        $collectionFormats=null,
        $requestType=null,
        $asyncRequest = null)
    {
    return $this->doHttpRequest(
        $method,
        $resourcePath,
        $pathParams,
        $queryParams,
        $headerParams,
        $body,
        $multipart,
        $postParams,
        $responseType,
        $collectionFormats,
        $requestType,
        $asyncRequest);
    }
}