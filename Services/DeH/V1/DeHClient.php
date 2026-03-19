<?php

namespace HuaweiCloud\SDK\DeH\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DeHClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;

    public function __construct($selector = null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder()
    {
        $client = new ClientBuilder(new DeHClient());
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
    public function batchCreateDedicatedHostTags($request)
    {
        return $this->batchCreateDedicatedHostTagsWithHttpInfo($request);
    }

    public function batchCreateDedicatedHostTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\BatchCreateDedicatedHostTagsRequest');
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
    public function batchDeleteDedicatedHostTags($request)
    {
        return $this->batchDeleteDedicatedHostTagsWithHttpInfo($request);
    }

    public function batchDeleteDedicatedHostTagsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\DeH\V1\Model\BatchDeleteDedicatedHostTagsResponse',
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\BatchDeleteDedicatedHostTagsRequest');
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
    public function createDedicatedHost($request)
    {
        return $this->createDedicatedHostWithHttpInfo($request);
    }

    public function createDedicatedHostWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\CreateDedicatedHostRequest');
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
    public function deleteDedicatedHost($request)
    {
        return $this->deleteDedicatedHostWithHttpInfo($request);
    }

    public function deleteDedicatedHostWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\DeleteDedicatedHostRequest');
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
    public function listDedicatedHostAllTypes($request)
    {
        return $this->listDedicatedHostAllTypesWithHttpInfo($request);
    }

    public function listDedicatedHostAllTypesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostAllTypesRequest');
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
    public function listDedicatedHostTags($request)
    {
        return $this->listDedicatedHostTagsWithHttpInfo($request);
    }

    public function listDedicatedHostTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostTagsRequest');
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
    public function listDedicatedHostTypes($request)
    {
        return $this->listDedicatedHostTypesWithHttpInfo($request);
    }

    public function listDedicatedHostTypesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostTypesRequest');
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
    public function listDedicatedHosts($request)
    {
        return $this->listDedicatedHostsWithHttpInfo($request);
    }

    public function listDedicatedHostsWithHttpInfo($request)
    {
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
            $queryParams['changes-since'] = $localVarParams['changesSince'];
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostsRequest');
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
    public function listDedicatedHostsByTags($request)
    {
        return $this->listDedicatedHostsByTagsWithHttpInfo($request);
    }

    public function listDedicatedHostsByTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListDedicatedHostsByTagsRequest');
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
    public function listServersDedicatedHost($request)
    {
        return $this->listServersDedicatedHostWithHttpInfo($request);
    }

    public function listServersDedicatedHostWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ListServersDedicatedHostRequest');
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
    public function showDedicatedHost($request)
    {
        return $this->showDedicatedHostWithHttpInfo($request);
    }

    public function showDedicatedHostWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ShowDedicatedHostRequest');
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
    public function showDedicatedHostTags($request)
    {
        return $this->showDedicatedHostTagsWithHttpInfo($request);
    }

    public function showDedicatedHostTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ShowDedicatedHostTagsRequest');
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
    public function showQuotaSets($request)
    {
        return $this->showQuotaSetsWithHttpInfo($request);
    }

    public function showQuotaSetsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\ShowQuotaSetsRequest');
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
    public function updateDedicatedHost($request)
    {
        return $this->updateDedicatedHostWithHttpInfo($request);
    }

    public function updateDedicatedHostWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DeH\V1\Model\UpdateDedicatedHostRequest');
    }

    protected function callApi(
        $method,
        $resourcePath,
        $pathParams = null,
        $queryParams = null,
        $headerParams = null,
        $body = null,
        $multipart = null,
        $postParams = null,
        $responseType = null,
        $requestType = null)
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
        $requestType);
    }
}