<?php

namespace HuaweiCloud\SDK\DeH\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DeHAsyncClient extends Client
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
        $client = new ClientBuilder(new DeHAsyncClient());
        return $client;
    }

    /**
     * 批量添加专属主机标签
     *
     * 为指定专属主机批量添加标签。
     * 
     * 标签管理服务（TMS）使用该接口批量添加专属主机的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateDedicatedHostTagsAsync($request)
    {
        return $this->batchCreateDedicatedHostTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateDedicatedHostTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-host-tags/{dedicated_host_id}/tags/action';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\BatchCreateDedicatedHostTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\BatchCreateDedicatedHostTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除专属主机标签
     *
     * 批量删除指定专属主机标签。
     * 
     * 标签管理服务（TMS）使用该接口批量删除专属主机的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteDedicatedHostTagsAsync($request)
    {
        return $this->batchDeleteDedicatedHostTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteDedicatedHostTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v1.0/{project_id}/dedicated-host-tags/{dedicated_host_id}/tags/action';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\BatchDeleteDedicatedHostTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\BatchDeleteDedicatedHostTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 分配专属主机
     *
     * 分配一台或多台专属主机，需要设置实例规格、所属AZ、数量等参数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDedicatedHostAsync($request)
    {
        return $this->createDedicatedHostAsyncWithHttpInfo($request);
    }
    
    public function createDedicatedHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-hosts';
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\CreateDedicatedHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\CreateDedicatedHostRequest',
            $asyncRequest = true);
    }

    /**
     * 释放专属主机
     *
     * 释放专属主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDedicatedHostAsync($request)
    {
        return $this->deleteDedicatedHostAsyncWithHttpInfo($request);
    }
    
    public function deleteDedicatedHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-hosts/{dedicated_host_id}';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\DeleteDedicatedHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\DeleteDedicatedHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询专属主机类型列表
     *
     * 查询专属主机类型列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDedicatedHostAllTypesAsync($request)
    {
        return $this->listDedicatedHostAllTypesAsyncWithHttpInfo($request);
    }
    
    public function listDedicatedHostAllTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-host-types';
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
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['hostType'] !== null) {
            $queryParams['host_type'] = $localVarParams['hostType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostAllTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostAllTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有专属主机标签
     *
     * 查询所有专属主机的标签信息。
     * 
     * 标签管理服务（TMS）使用该接口查询所有专属主机的标签数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDedicatedHostTagsAsync($request)
    {
        return $this->listDedicatedHostTagsAsyncWithHttpInfo($request);
    }
    
    public function listDedicatedHostTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-host-tags/tags';
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可用的专属主机类型
     *
     * 查询某一AZ内可用的专属主机类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDedicatedHostTypesAsync($request)
    {
        return $this->listDedicatedHostTypesAsyncWithHttpInfo($request);
    }
    
    public function listDedicatedHostTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/availability-zone/{availability_zone}/dedicated-host-types';
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
        if ($localVarParams['availabilityZone'] !== null) {
            $pathParams['availability_zone'] = $localVarParams['availabilityZone'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询专属主机列表
     *
     * 通过该接口查询专属主机列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDedicatedHostsAsync($request)
    {
        return $this->listDedicatedHostsAsyncWithHttpInfo($request);
    }
    
    public function listDedicatedHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-hosts';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $queryParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['hostType'] !== null) {
            $queryParams['host_type'] = $localVarParams['hostType'];
        }
        if ($localVarParams['hostTypeName'] !== null) {
            $queryParams['host_type_name'] = $localVarParams['hostTypeName'];
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['tenant'] !== null) {
            $queryParams['tenant'] = $localVarParams['tenant'];
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['instanceUuid'] !== null) {
            $queryParams['instance_uuid'] = $localVarParams['instanceUuid'];
        }
        if ($localVarParams['releasedAt'] !== null) {
            $queryParams['released_at'] = $localVarParams['releasedAt'];
        }
        if ($localVarParams['changesSince'] !== null) {
            $queryParams['changes_since'] = $localVarParams['changesSince'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 按标签查询专属主机列表
     *
     * 使用标签过滤专属主机列表，并返回专属主机使用的所有标签。
     * 
     * 标签管理服务（TMS）使用该接口过滤专属主机列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDedicatedHostsByTagsAsync($request)
    {
        return $this->listDedicatedHostsByTagsAsyncWithHttpInfo($request);
    }
    
    public function listDedicatedHostsByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-host-tags/resource_instances/action';
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
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostsByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostsByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询专属主机上的云服务器
     *
     * 查询专属主机上已部署的云服务器信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServersDedicatedHostAsync($request)
    {
        return $this->listServersDedicatedHostAsyncWithHttpInfo($request);
    }
    
    public function listServersDedicatedHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-hosts/{dedicated_host_id}/servers';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ListServersDedicatedHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListServersDedicatedHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询专属主机详情
     *
     * 查询某一台专属主机的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDedicatedHostAsync($request)
    {
        return $this->showDedicatedHostAsyncWithHttpInfo($request);
    }
    
    public function showDedicatedHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-hosts/{dedicated_host_id}';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ShowDedicatedHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ShowDedicatedHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定专属主机标签
     *
     * 查询指定专属主机的标签信息。
     * 
     * 标签管理服务（TMS）使用该接口查询指定专属主机的全部标签数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDedicatedHostTagsAsync($request)
    {
        return $this->showDedicatedHostTagsAsyncWithHttpInfo($request);
    }
    
    public function showDedicatedHostTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-host-tags/{dedicated_host_id}/tags';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ShowDedicatedHostTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ShowDedicatedHostTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户的专属主机配额
     *
     * 该接口用于查询租户的专属主机配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotaSetsAsync($request)
    {
        return $this->showQuotaSetsAsyncWithHttpInfo($request);
    }
    
    public function showQuotaSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/quota-sets/{tenant_id}';
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
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\ShowQuotaSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ShowQuotaSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新专属主机属性
     *
     * 该接口用于变更专属主机的“auto_placement”和“name”属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDedicatedHostAsync($request)
    {
        return $this->updateDedicatedHostAsyncWithHttpInfo($request);
    }
    
    public function updateDedicatedHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dedicated-hosts/{dedicated_host_id}';
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
        if ($localVarParams['dedicatedHostId'] !== null) {
            $pathParams['dedicated_host_id'] = $localVarParams['dedicatedHostId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\UpdateDedicatedHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\UpdateDedicatedHostRequest',
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