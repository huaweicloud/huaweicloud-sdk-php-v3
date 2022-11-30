<?php

namespace HuaweiCloud\SDK\Dns\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DnsAsyncClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;

    public function __construct($selector=null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder()
    {
        return new ClientBuilder(new DnsAsyncClient());
    }

    /**
     * 绑定ip地址。
     *
     * 绑定单个IP地址到终端节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateEndpointIpaddressAsync($request)
    {
        return $this->associateEndpointIpaddressAsyncWithHttpInfo($request);
    }
    
    public function associateEndpointIpaddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/06 /v2.1/endpoint/{endpoint_id}/ipaddress';
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
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\AssociateEndpointIpaddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\AssociateEndpointIpaddressRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除PTR
     *
     * 批量删除PTR。本接口为原子操作，所有记录应全部删除成功或全部失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeletePtrRecordsAsync($request)
    {
        return $this->batchDeletePtrRecordsAsyncWithHttpInfo($request);
    }
    
    public function batchDeletePtrRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.1/reverse/floatingips';
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeletePtrRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeletePtrRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除Record Set
     *
     * 批量删除Record Set。
     * 响应结果中只包含本次实际删除的Record Set。
     * 支持批量删除公网域名和内网域名的记录集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteRecordSetsAsync($request)
    {
        return $this->batchDeleteRecordSetsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteRecordSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2.1/recordsets';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeleteRecordSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeleteRecordSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除Zone
     *
     * 批量删除Zone。
     * 本接口为原子操作，所有记录应全部删除成功或全部失败。
     * 仅支持公网Zone、内网Zone。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteZonesAsync($request)
    {
        return $this->batchDeleteZonesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.1/zones';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeleteZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeleteZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量设置Record Set状态
     *
     * 批量设置Record Set状态。
     * 响应结果中只包含本次实际更新的Record Set。
     * 仅支持公网域名记录集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSetRecordSetsStatusAsync($request)
    {
        return $this->batchSetRecordSetsStatusAsyncWithHttpInfo($request);
    }
    
    public function batchSetRecordSetsStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2.1/recordsets/statuses';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchSetRecordSetsStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchSetRecordSetsStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 批量设置Zone状态
     *
     * 批量设置Zone状态。
     * 响应结果中只包含本次实际更新的Zone。
     * 仅支持公网Zone。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSetZonesStatusAsync($request)
    {
        return $this->batchSetZonesStatusAsyncWithHttpInfo($request);
    }
    
    public function batchSetZonesStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2.1/zones/statuses';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchSetZonesStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchSetZonesStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 创建单个自定义线路
     *
     * 创建单个自定义线路
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCustomLineAsync($request)
    {
        return $this->createCustomLineAsyncWithHttpInfo($request);
    }
    
    public function createCustomLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/customlines';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateCustomLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateCustomLineRequest',
            $asyncRequest = true);
    }

    /**
     * 创建终端节点。
     *
     * 创建单个终端节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEndpointAsync($request)
    {
        return $this->createEndpointAsyncWithHttpInfo($request);
    }
    
    public function createEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.1/endpoint';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 创建线路分组。
     *
     * 创建一个线路分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLineGroupAsync($request)
    {
        return $this->createLineGroupAsyncWithHttpInfo($request);
    }
    
    public function createLineGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.1/linegroups';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateLineGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateLineGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建解析规则。
     *
     * 创建一个解析规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResolveRuleAsync($request)
    {
        return $this->createResolveRuleAsyncWithHttpInfo($request);
    }
    
    public function createResolveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/10 /v2.1/resolverrule';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateResolveRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateResolveRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建公网域名找回请求。
     *
     * 创建公网域名找回请求。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRetrievalAsync($request)
    {
        return $this->createRetrievalAsyncWithHttpInfo($request);
    }
    
    public function createRetrievalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/retrieval';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRetrievalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRetrievalRequest',
            $asyncRequest = true);
    }

    /**
     * 请求立即验证域名找回。
     *
     * 请求服务器立即执行找回验证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRetrievalVerificationAsync($request)
    {
        return $this->createRetrievalVerificationAsyncWithHttpInfo($request);
    }
    
    public function createRetrievalVerificationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/retrieval/verification/{id}';
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRetrievalVerificationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRetrievalVerificationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个自定义线路
     *
     * 删除单个自定义线路
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCustomLineAsync($request)
    {
        return $this->deleteCustomLineAsyncWithHttpInfo($request);
    }
    
    public function deleteCustomLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.1/customlines/{line_id}';
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
        if ($localVarParams['lineId'] !== null) {
            $pathParams['line_id'] = $localVarParams['lineId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteCustomLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteCustomLineRequest',
            $asyncRequest = true);
    }

    /**
     * 删除终端节点。
     *
     * 删除终端节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEndpointAsync($request)
    {
        return $this->deleteEndpointAsyncWithHttpInfo($request);
    }
    
    public function deleteEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2.1/endpoint/{endpoint_id}';
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
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 删除线路分组。
     *
     * 删除单个线路分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLineGroupAsync($request)
    {
        return $this->deleteLineGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteLineGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2.1/linegroups/{linegroup_id}';
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
        if ($localVarParams['linegroupId'] !== null) {
            $pathParams['linegroup_id'] = $localVarParams['linegroupId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteLineGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteLineGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除解析规则。
     *
     * 删除解析规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResolveRuleAsync($request)
    {
        return $this->deleteResolveRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteResolveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/14 /v2.1/resolverrule/{resolverrule_id}';
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
        if ($localVarParams['resolverruleId'] !== null) {
            $pathParams['resolverrule_id'] = $localVarParams['resolverruleId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteResolveRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteResolveRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 解关联ip地址。
     *
     * 解除endpoint绑定的IP。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateEndpointIpaddressAsync($request)
    {
        return $this->disassociateEndpointIpaddressAsyncWithHttpInfo($request);
    }
    
    public function disassociateEndpointIpaddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/08 v2.1/endpoint/{endpoint_id}/ipaddress/{ipaddress_id}';
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
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
        }
        if ($localVarParams['ipaddressId'] !== null) {
            $pathParams['ipaddress_id'] = $localVarParams['ipaddressId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DisassociateEndpointIpaddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DisassociateEndpointIpaddressRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有的云解析服务API版本号
     *
     * 查询所有的云解析服务API版本号列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersionsAsync($request)
    {
        return $this->listApiVersionsAsyncWithHttpInfo($request);
    }
    
    public function listApiVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListApiVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListApiVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义线路
     *
     * 查询自定义线路
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomLineAsync($request)
    {
        return $this->listCustomLineAsyncWithHttpInfo($request);
    }
    
    public function listCustomLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/customlines';
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
        if ($localVarParams['lineId'] !== null) {
            $queryParams['line_id'] = $localVarParams['lineId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['showDetail'] !== null) {
            $queryParams['show_detail'] = $localVarParams['showDetail'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListCustomLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListCustomLineRequest',
            $asyncRequest = true);
    }

    /**
     * 查询ip地址列表。
     *
     * 查询某个endpoint下的ip地址列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndpointIpaddressesAsync($request)
    {
        return $this->listEndpointIpaddressesAsyncWithHttpInfo($request);
    }
    
    public function listEndpointIpaddressesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/07 /v2.1/endpoint/{endpoint_id}/ipaddress';
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
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListEndpointIpaddressesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListEndpointIpaddressesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询vpc信息。
     *
     * 查询vpc的终端节点信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndpointVpcsAsync($request)
    {
        return $this->listEndpointVpcsAsyncWithHttpInfo($request);
    }
    
    public function listEndpointVpcsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/09 /v2.1/vpc';
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
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListEndpointVpcsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListEndpointVpcsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询终端节点列表。
     *
     * 查询终端节点列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndpointsAsync($request)
    {
        return $this->listEndpointsAsyncWithHttpInfo($request);
    }
    
    public function listEndpointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2.1/endpoint';
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
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListEndpointsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListEndpointsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询线路分组列表。
     *
     * 查询线路分组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLineGroupsAsync($request)
    {
        return $this->listLineGroupsAsyncWithHttpInfo($request);
    }
    
    public function listLineGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.1/linegroups';
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
        if ($localVarParams['lineId'] !== null) {
            $queryParams['line_id'] = $localVarParams['lineId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListLineGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListLineGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询名称服务器列表
     *
     * 查询名称服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNameServersAsync($request)
    {
        return $this->listNameServersAsyncWithHttpInfo($request);
    }
    
    public function listNameServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/nameservers';
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
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListNameServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListNameServersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询解析规则列表。
     *
     * 查询解析规则的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResoleRulesAsync($request)
    {
        return $this->listResoleRulesAsyncWithHttpInfo($request);
    }
    
    public function listResoleRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/12 /v2.1/resolverrule';
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
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListResoleRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListResoleRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定的云解析服务API版本号
     *
     * 查询指定的云解析服务API版本号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiInfoAsync($request)
    {
        return $this->showApiInfoAsyncWithHttpInfo($request);
    }
    
    public function showApiInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{version}';
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
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowApiInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowApiInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户配额
     *
     * 查询单租户在DNS服务下的资源配额，包括公网zone配额、内网zone配额、Record Set配额、PTR Record配额、入站终端节点配额、出站终端节点配额、自定义线路配额、线路分组配额等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainQuotaAsync($request)
    {
        return $this->showDomainQuotaAsyncWithHttpInfo($request);
    }
    
    public function showDomainQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/quotamg/dns/quotas';
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
        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowDomainQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowDomainQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 查询endpoint。
     *
     * 查询终端单个节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEndpointAsync($request)
    {
        return $this->showEndpointAsyncWithHttpInfo($request);
    }
    
    public function showEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.1/endpoint/{endpoint_id}';
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
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 查询线路分组。
     *
     * 查询线路分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLineGroupAsync($request)
    {
        return $this->showLineGroupAsyncWithHttpInfo($request);
    }
    
    public function showLineGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2.1/linegroups/{linegroup_id}';
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
        if ($localVarParams['linegroupId'] !== null) {
            $pathParams['linegroup_id'] = $localVarParams['linegroupId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowLineGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowLineGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个解析规则。
     *
     * 查询单个解析规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResoleRuleAsync($request)
    {
        return $this->showResoleRuleAsyncWithHttpInfo($request);
    }
    
    public function showResoleRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/11 /v2.1/resolverrule/{resolverrule_id}';
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
        if ($localVarParams['resolverruleId'] !== null) {
            $pathParams['resolverrule_id'] = $localVarParams['resolverruleId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowResoleRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowResoleRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询域名找回。
     *
     * 查询域名找回请求。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRetrievalAsync($request)
    {
        return $this->showRetrievalAsyncWithHttpInfo($request);
    }
    
    public function showRetrievalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/retrieval';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRetrievalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRetrievalRequest',
            $asyncRequest = true);
    }

    /**
     * 查询域名找回结果。
     *
     * 查询域名找回结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRetrievalVerificationAsync($request)
    {
        return $this->showRetrievalVerificationAsyncWithHttpInfo($request);
    }
    
    public function showRetrievalVerificationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2/retrieval/verification/{id}';
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRetrievalVerificationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRetrievalVerificationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新单个自定义线路
     *
     * 更新单个自定义线路
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCustomLineAsync($request)
    {
        return $this->updateCustomLineAsyncWithHttpInfo($request);
    }
    
    public function updateCustomLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.1/customlines/{line_id}';
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
        if ($localVarParams['lineId'] !== null) {
            $pathParams['line_id'] = $localVarParams['lineId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateCustomLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateCustomLineRequest',
            $asyncRequest = true);
    }

    /**
     * 修改终端节点
     *
     * 修改终端节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEndpointAsync($request)
    {
        return $this->updateEndpointAsyncWithHttpInfo($request);
    }
    
    public function updateEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2.1/endpoint/{endpoint_id}';
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
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 更新线路分组。
     *
     * 更新单个线路分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLineGroupsAsync($request)
    {
        return $this->updateLineGroupsAsyncWithHttpInfo($request);
    }
    
    public function updateLineGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2.1/linegroups/{linegroup_id}';
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
        if ($localVarParams['linegroupId'] !== null) {
            $pathParams['linegroup_id'] = $localVarParams['linegroupId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateLineGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateLineGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改解析规则。
     *
     * 修改一个解析规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateResolveRuleAsync($request)
    {
        return $this->updateResolveRuleAsyncWithHttpInfo($request);
    }
    
    public function updateResolveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/13 /v2.1/resolverrule/{resolverrule_id}';
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
        if ($localVarParams['resolverruleId'] !== null) {
            $pathParams['resolverrule_id'] = $localVarParams['resolverruleId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateResolveRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateResolveRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 设置弹性IP的PTR记录
     *
     * 设置弹性IP的PTR记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEipRecordSetAsync($request)
    {
        return $this->createEipRecordSetAsyncWithHttpInfo($request);
    }
    
    public function createEipRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/reverse/floatingips/{region}:{floatingip_id}';
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
        if ($localVarParams['region'] !== null) {
            $pathParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateEipRecordSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateEipRecordSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户弹性IP的PTR记录列表
     *
     * 查询租户弹性IP的PTR记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPtrRecordsAsync($request)
    {
        return $this->listPtrRecordsAsyncWithHttpInfo($request);
    }
    
    public function listPtrRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/reverse/floatingips';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListPtrRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListPtrRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 将弹性IP的PTR记录恢复为默认值
     *
     * 将弹性IP的PTR记录恢复为默认值
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restorePtrRecordAsync($request)
    {
        return $this->restorePtrRecordAsyncWithHttpInfo($request);
    }
    
    public function restorePtrRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/reverse/floatingips/{region}:{floatingip_id}';
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
        if ($localVarParams['region'] !== null) {
            $pathParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
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
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\RestorePtrRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\RestorePtrRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个弹性IP的PTR记录
     *
     * 查询单个弹性IP的PTR记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPtrRecordSetAsync($request)
    {
        return $this->showPtrRecordSetAsyncWithHttpInfo($request);
    }
    
    public function showPtrRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/reverse/floatingips/{region}:{floatingip_id}';
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
        if ($localVarParams['region'] !== null) {
            $pathParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPtrRecordSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPtrRecordSetRequest',
            $asyncRequest = true);
    }

    /**
     * 修改弹性IP的PTR记录
     *
     * 修改弹性IP的PTR记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePtrRecordAsync($request)
    {
        return $this->updatePtrRecordAsyncWithHttpInfo($request);
    }
    
    public function updatePtrRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2/reverse/floatingips/{region}:{floatingip_id}';
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
        if ($localVarParams['region'] !== null) {
            $pathParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['floatingipId'] !== null) {
            $pathParams['floatingip_id'] = $localVarParams['floatingipId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePtrRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePtrRecordRequest',
            $asyncRequest = true);
    }

    /**
     * Record Set关联健康检查。
     *
     * Record Set关联健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateHealthCheckAsync($request)
    {
        return $this->associateHealthCheckAsyncWithHttpInfo($request);
    }
    
    public function associateHealthCheckAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01  /v2.1/recordsets/{recordset_id}/associatehealthcheck';
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
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\AssociateHealthCheckResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\AssociateHealthCheckRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除某个Zone下的Record Set资源。
     *
     * 批量删除某个Zone下的Record Set资源，当删除的资源不存在时，则默认删除成功。
     * 响应结果中只包含本次实际删除的资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteRecordSetWithLineAsync($request)
    {
        return $this->batchDeleteRecordSetWithLineAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteRecordSetWithLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/zones/{zone_id}/recordsets';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeleteRecordSetWithLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchDeleteRecordSetWithLineRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改RecordSet。
     *
     * 批量修改RecordSet。属于原子性操作，请求Record Set将全部完成修改，或不做任何修改。
     * 仅公网Zone支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateRecordSetWithLineAsync($request)
    {
        return $this->batchUpdateRecordSetWithLineAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateRecordSetWithLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/zones/{zone_id}/recordsets';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchUpdateRecordSetWithLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchUpdateRecordSetWithLineRequest',
            $asyncRequest = true);
    }

    /**
     * 创建单个Record Set
     *
     * 创建单个Record Set
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecordSetAsync($request)
    {
        return $this->createRecordSetAsyncWithHttpInfo($request);
    }
    
    public function createRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/recordsets';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRecordSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRecordSetRequest',
            $asyncRequest = true);
    }

    /**
     * 批量线路创建RecordSet。仅公网Zone支持。
     *
     * 批量线路创建RecordSet。属于原子性操作，如果存在一个参数校验不通过，则创建失败。仅公网Zone支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecordSetWithBatchLinesAsync($request)
    {
        return $this->createRecordSetWithBatchLinesAsyncWithHttpInfo($request);
    }
    
    public function createRecordSetWithBatchLinesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/zones/{zone_id}/recordsets/batch/lines';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRecordSetWithBatchLinesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRecordSetWithBatchLinesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建单个Record Set，仅适用于公网DNS
     *
     * 创建单个Record Set，仅适用于公网DNS
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecordSetWithLineAsync($request)
    {
        return $this->createRecordSetWithLineAsyncWithHttpInfo($request);
    }
    
    public function createRecordSetWithLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/zones/{zone_id}/recordsets';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRecordSetWithLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateRecordSetWithLineRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个Record Set
     *
     * 删除单个Record Set
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRecordSetAsync($request)
    {
        return $this->deleteRecordSetAsyncWithHttpInfo($request);
    }
    
    public function deleteRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/zones/{zone_id}/recordsets/{recordset_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteRecordSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteRecordSetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个Record Set
     *
     * 删除单个Record Set
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRecordSetsAsync($request)
    {
        return $this->deleteRecordSetsAsyncWithHttpInfo($request);
    }
    
    public function deleteRecordSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.1/zones/{zone_id}/recordsets/{recordset_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteRecordSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteRecordSetsRequest',
            $asyncRequest = true);
    }

    /**
     * Record Set解关联健康检查。
     *
     * Record Set解关联健康检查。。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateHealthCheckAsync($request)
    {
        return $this->disassociateHealthCheckAsyncWithHttpInfo($request);
    }
    
    public function disassociateHealthCheckAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.1/recordsets/{recordset_id}/associatehealthcheck';
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
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DisassociateHealthCheckResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DisassociateHealthCheckRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户Record Set资源列表
     *
     * 查询租户Record Set资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordSetsAsync($request)
    {
        return $this->listRecordSetsAsyncWithHttpInfo($request);
    }
    
    public function listRecordSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/recordsets';
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
        if ($localVarParams['zoneType'] !== null) {
            $queryParams['zone_type'] = $localVarParams['zoneType'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['records'] !== null) {
            $queryParams['records'] = $localVarParams['records'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListRecordSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListRecordSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个Zone下Record Set列表
     *
     * 查询单个Zone下Record Set列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordSetsByZoneAsync($request)
    {
        return $this->listRecordSetsByZoneAsyncWithHttpInfo($request);
    }
    
    public function listRecordSetsByZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/recordsets';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListRecordSetsByZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListRecordSetsByZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户Record Set资源列表
     *
     * 查询租户Record Set资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordSetsWithLineAsync($request)
    {
        return $this->listRecordSetsWithLineAsyncWithHttpInfo($request);
    }
    
    public function listRecordSetsWithLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/recordsets';
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
        if ($localVarParams['zoneType'] !== null) {
            $queryParams['zone_type'] = $localVarParams['zoneType'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['lineId'] !== null) {
            $queryParams['line_id'] = $localVarParams['lineId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['records'] !== null) {
            $queryParams['records'] = $localVarParams['records'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['healthCheckId'] !== null) {
            $queryParams['health_check_id'] = $localVarParams['healthCheckId'];
        }
        if ($localVarParams['searchMode'] !== null) {
            $queryParams['search_mode'] = $localVarParams['searchMode'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListRecordSetsWithLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListRecordSetsWithLineRequest',
            $asyncRequest = true);
    }

    /**
     * 设置Record Set状态
     *
     * 设置Record Set状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setRecordSetsStatusAsync($request)
    {
        return $this->setRecordSetsStatusAsyncWithHttpInfo($request);
    }
    
    public function setRecordSetsStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/recordsets/{recordset_id}/statuses/set';
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
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\SetRecordSetsStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\SetRecordSetsStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个Record Set
     *
     * 查询单个Record Set
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordSetAsync($request)
    {
        return $this->showRecordSetAsyncWithHttpInfo($request);
    }
    
    public function showRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/recordsets/{recordset_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRecordSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRecordSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个Zone下Record Set列表
     *
     * 查询单个Zone下Record Set列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordSetByZoneAsync($request)
    {
        return $this->showRecordSetByZoneAsyncWithHttpInfo($request);
    }
    
    public function showRecordSetByZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2.1/zones/{zone_id}/recordsets';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['lineId'] !== null) {
            $queryParams['line_id'] = $localVarParams['lineId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['searchMode'] !== null) {
            $queryParams['search_mode'] = $localVarParams['searchMode'];
        }
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRecordSetByZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRecordSetByZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个Record Set，仅适用于公网DNS
     *
     * 查询单个Record Set，仅适用于公网DNS
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordSetWithLineAsync($request)
    {
        return $this->showRecordSetWithLineAsyncWithHttpInfo($request);
    }
    
    public function showRecordSetWithLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.1/zones/{zone_id}/recordsets/{recordset_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRecordSetWithLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowRecordSetWithLineRequest',
            $asyncRequest = true);
    }

    /**
     * 修改单个Record Set
     *
     * 修改单个Record Set
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRecordSetAsync($request)
    {
        return $this->updateRecordSetAsyncWithHttpInfo($request);
    }
    
    public function updateRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/zones/{zone_id}/recordsets/{recordset_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateRecordSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateRecordSetRequest',
            $asyncRequest = true);
    }

    /**
     * 修改单个Record Set
     *
     * 修改单个Record Set
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRecordSetsAsync($request)
    {
        return $this->updateRecordSetsAsyncWithHttpInfo($request);
    }
    
    public function updateRecordSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2.1/zones/{zone_id}/recordsets/{recordset_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['recordsetId'] !== null) {
            $pathParams['recordset_id'] = $localVarParams['recordsetId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateRecordSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdateRecordSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 为指定实例批量添加或删除标签
     *
     * 为指定实例批量添加或删除标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateTagAsync($request)
    {
        return $this->batchCreateTagAsyncWithHttpInfo($request);
    }
    
    public function batchCreateTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags/action';
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\BatchCreateTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\BatchCreateTagRequest',
            $asyncRequest = true);
    }

    /**
     * 为指定实例添加标签
     *
     * 为指定实例添加标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTagAsync($request)
    {
        return $this->createTagAsyncWithHttpInfo($request);
    }
    
    public function createTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/{resource_type}/{resource_id}/tags';
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreateTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreateTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源标签
     *
     * 删除资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTagAsync($request)
    {
        return $this->deleteTagAsyncWithHttpInfo($request);
    }
    
    public function deleteTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags/{key}';
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeleteTagRequest',
            $asyncRequest = true);
    }

    /**
     * 使用标签查询资源实例
     *
     * 使用标签查询资源实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagAsync($request)
    {
        return $this->listTagAsyncWithHttpInfo($request);
    }
    
    public function listTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/resource_instances/action';
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListTagRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定实例类型的所有标签集合
     *
     * 查询指定实例类型的所有标签集合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagsAsync($request)
    {
        return $this->listTagsAsyncWithHttpInfo($request);
    }
    
    public function listTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/tags';
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定实例的标签信息
     *
     * 查询指定实例的标签信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceTagAsync($request)
    {
        return $this->showResourceTagAsyncWithHttpInfo($request);
    }
    
    public function showResourceTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/{project_id}/{resource_type}/{resource_id}/tags';
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowResourceTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowResourceTagRequest',
            $asyncRequest = true);
    }

    /**
     * 在内网Zone上关联VPC
     *
     * 在内网Zone上关联VPC
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateRouterAsync($request)
    {
        return $this->associateRouterAsyncWithHttpInfo($request);
    }
    
    public function associateRouterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/associaterouter';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\AssociateRouterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\AssociateRouterRequest',
            $asyncRequest = true);
    }

    /**
     * 创建单个内网Zone
     *
     * 创建单个内网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPrivateZoneAsync($request)
    {
        return $this->createPrivateZoneAsyncWithHttpInfo($request);
    }
    
    public function createPrivateZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/zones';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreatePrivateZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreatePrivateZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 创建单个公网Zone
     *
     * 创建单个公网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPublicZoneAsync($request)
    {
        return $this->createPublicZoneAsyncWithHttpInfo($request);
    }
    
    public function createPublicZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2/zones';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\CreatePublicZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\CreatePublicZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个内网Zone
     *
     * 删除单个内网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePrivateZoneAsync($request)
    {
        return $this->deletePrivateZoneAsyncWithHttpInfo($request);
    }
    
    public function deletePrivateZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2/zones/{zone_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeletePrivateZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeletePrivateZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个公网Zone
     *
     * 删除单个公网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePublicZoneAsync($request)
    {
        return $this->deletePublicZoneAsyncWithHttpInfo($request);
    }
    
    public function deletePublicZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/zones/{zone_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DeletePublicZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DeletePublicZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 在内网Zone上解关联VPC
     *
     * 在内网Zone上解关联VPC
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateRouterAsync($request)
    {
        return $this->disassociateRouterAsyncWithHttpInfo($request);
    }
    
    public function disassociateRouterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/disassociaterouter';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\DisassociateRouterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\DisassociateRouterRequest',
            $asyncRequest = true);
    }

    /**
     * 查询内网Zone的列表
     *
     * 查询内网Zone的列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPrivateZonesAsync($request)
    {
        return $this->listPrivateZonesAsyncWithHttpInfo($request);
    }
    
    public function listPrivateZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones';
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListPrivateZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListPrivateZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询公网Zone的列表
     *
     * 查询公网Zone的列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublicZonesAsync($request)
    {
        return $this->listPublicZonesAsyncWithHttpInfo($request);
    }
    
    public function listPublicZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/zones';
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ListPublicZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ListPublicZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 设置单个内网Zone的子域名递归解析代理
     *
     * 设置单个内网Zone的子域名递归解析代理
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setPrivateZoneProxyPatternAsync($request)
    {
        return $this->setPrivateZoneProxyPatternAsyncWithHttpInfo($request);
    }
    
    public function setPrivateZoneProxyPatternAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/07 /v2/zones/{zone_id}/actions/set-proxy-pattern';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\SetPrivateZoneProxyPatternResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\SetPrivateZoneProxyPatternRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个内网Zone
     *
     * 查询单个内网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPrivateZoneAsync($request)
    {
        return $this->showPrivateZoneAsyncWithHttpInfo($request);
    }
    
    public function showPrivateZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2/zones/{zone_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPrivateZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPrivateZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个内网Zone的名称服务器
     *
     * 查询单个内网Zone的名称服务器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPrivateZoneNameServerAsync($request)
    {
        return $this->showPrivateZoneNameServerAsyncWithHttpInfo($request);
    }
    
    public function showPrivateZoneNameServerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/nameservers';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPrivateZoneNameServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPrivateZoneNameServerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个公网Zone
     *
     * 查询单个公网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPublicZoneAsync($request)
    {
        return $this->showPublicZoneAsyncWithHttpInfo($request);
    }
    
    public function showPublicZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/zones/{zone_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPublicZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPublicZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个公网Zone的名称服务器
     *
     * 查询单个公网Zone的名称服务器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPublicZoneNameServerAsync($request)
    {
        return $this->showPublicZoneNameServerAsyncWithHttpInfo($request);
    }
    
    public function showPublicZoneNameServerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/zones/{zone_id}/nameservers';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPublicZoneNameServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\ShowPublicZoneNameServerRequest',
            $asyncRequest = true);
    }

    /**
     * 修改单个内网Zone
     *
     * 修改单个内网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePrivateZoneAsync($request)
    {
        return $this->updatePrivateZoneAsyncWithHttpInfo($request);
    }
    
    public function updatePrivateZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/06 /v2/zones/{zone_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePrivateZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePrivateZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 修改单个公网Zone
     *
     * 修改单个公网Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePublicZoneAsync($request)
    {
        return $this->updatePublicZoneAsyncWithHttpInfo($request);
    }
    
    public function updatePublicZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/zones/{zone_id}';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePublicZoneResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePublicZoneRequest',
            $asyncRequest = true);
    }

    /**
     * 设置单个公网Zone状态，支持暂停、启用Zone
     *
     * 设置单个公网Zone状态，支持暂停、启用Zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePublicZoneStatusAsync($request)
    {
        return $this->updatePublicZoneStatusAsyncWithHttpInfo($request);
    }
    
    public function updatePublicZoneStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/zones/{zone_id}/statuses';
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
        if ($localVarParams['zoneId'] !== null) {
            $pathParams['zone_id'] = $localVarParams['zoneId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $responseType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePublicZoneStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dns\V2\Model\UpdatePublicZoneStatusRequest',
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