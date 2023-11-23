<?php

namespace HuaweiCloud\SDK\Elb\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ElbAsyncClient extends Client
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
        return new ClientBuilder(new ElbAsyncClient());
    }

    /**
     * 新增负载均衡器可用区
     *
     * 给负载均衡器新增可用区。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddAvailableZonesAsync($request)
    {
        return $this->batchAddAvailableZonesAsyncWithHttpInfo($request);
    }
    
    public function batchAddAvailableZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/availability-zone/batch-add';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchAddAvailableZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchAddAvailableZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建后端服务器
     *
     * 在指定pool下批量创建后端服务器。一次最多创建200个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateMembersAsync($request)
    {
        return $this->batchCreateMembersAsyncWithHttpInfo($request);
    }
    
    public function batchCreateMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/batch-add';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchCreateMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchCreateMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除后端服务器
     *
     * 在指定pool下批量删除后端服务器。一次最多添加200个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteMembersAsync($request)
    {
        return $this->batchDeleteMembersAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/batch-delete';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 移除负载均衡器可用区
     *
     * 移除负载均衡器的可用区。
     * &gt; 移除可用区可能导致已有链接断开，请谨慎操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRemoveAvailableZonesAsync($request)
    {
        return $this->batchRemoveAvailableZonesAsyncWithHttpInfo($request);
    }
    
    public function batchRemoveAvailableZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/availability-zone/batch-remove';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/xml'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchRemoveAvailableZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchRemoveAvailableZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新后端服务器
     *
     * 在指定pool下批量更新后端服务器。一次最多添加200个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateMembersAsync($request)
    {
        return $this->batchUpdateMembersAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/batch-update';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdateMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdateMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新转发策略优先级
     *
     * 批量更新转发策略的优先级。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdatePoliciesPriorityAsync($request)
    {
        return $this->batchUpdatePoliciesPriorityAsyncWithHttpInfo($request);
    }
    
    public function batchUpdatePoliciesPriorityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/batch-update-priority';
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePoliciesPriorityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePoliciesPriorityRequest',
            $asyncRequest = true);
    }

    /**
     * 变更负载均衡器计费模式
     *
     * 负载均衡器计费模式变更，当前支持的计费模式变更为：
     * 1. 按需计费转包周期计费；
     * 2. 按需按规格计费转按需按使用量计费；
     * 3. 按需按使用量计费转按需按规格计费；
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeLoadbalancerChargeModeAsync($request)
    {
        return $this->changeLoadbalancerChargeModeAsyncWithHttpInfo($request);
    }
    
    public function changeLoadbalancerChargeModeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/change-charge-mode';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ChangeLoadbalancerChargeModeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ChangeLoadbalancerChargeModeRequest',
            $asyncRequest = true);
    }

    /**
     * 创建证书
     *
     * 创建证书。用于HTTPS协议监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCertificateAsync($request)
    {
        return $this->createCertificateAsyncWithHttpInfo($request);
    }
    
    public function createCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/certificates';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建健康检查
     *
     * 创建健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHealthMonitorAsync($request)
    {
        return $this->createHealthMonitorAsyncWithHttpInfo($request);
    }
    
    public function createHealthMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/healthmonitors';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateHealthMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateHealthMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 创建转发策略
     *
     * 创建七层转发策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createL7PolicyAsync($request)
    {
        return $this->createL7PolicyAsyncWithHttpInfo($request);
    }
    
    public function createL7PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建转发规则
     *
     * 创建七层转发规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createL7RuleAsync($request)
    {
        return $this->createL7RuleAsyncWithHttpInfo($request);
    }
    
    public function createL7RuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7RuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7RuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建监听器
     *
     * 创建监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createListenerAsync($request)
    {
        return $this->createListenerAsyncWithHttpInfo($request);
    }
    
    public function createListenerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/listeners';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateListenerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateListenerRequest',
            $asyncRequest = true);
    }

    /**
     * 创建负载均衡器
     *
     * 创建负载均衡器。
     * 1. 若要创建内网IPv4负载均衡器，则需要设置vip_subnet_cidr_id。
     * 2. 若要创建公网IPv4负载均衡器，则需要设置publicip，以及设置vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * 3. 若要绑定有已有公网IPv4地址，
     * 则需要设置publicip_ids，以及设置vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * 4. 若要创建内网双栈负载均衡器，则需要设置ipv6_vip_virsubnet_id。
     * 5. 若要创建公网双栈负载均衡器，则需要设置ipv6_vip_virsubnet_id和ipv6_bandwidth。
     * 6. 不支持绑定已有未使用的内网IPv4、内网IPv6或公网IPv6地址。
     * 
     * [&gt; 关于计费：
     * - 若billing_info非空时，包周期。
     * - 若billing_info为空，autoscaling.enable&#x3D;true时，弹性计费。
     * - 若billing_info为空，autoscaling.enable&#x3D;false或未设置，charge_mode&#x3D;lcu，按量计费。
     * - 若billing_info为空，autoscaling.enable&#x3D;false或未设置，charge_mode&#x3D;flavor，固定规格按需计费。](tag:hws)
     * [&gt; 不支持创建IPv6地址负载均衡器](tag:dt,dt_test)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLoadBalancerAsync($request)
    {
        return $this->createLoadBalancerAsyncWithHttpInfo($request);
    }
    
    public function createLoadBalancerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerRequest',
            $asyncRequest = true);
    }

    /**
     * 创建云日志
     *
     * 创建云日志。[荷兰region不支持云日志功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogtankAsync($request)
    {
        return $this->createLogtankAsyncWithHttpInfo($request);
    }
    
    public function createLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/logtanks';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 创建主备后端服务器组
     *
     * 创建主备后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMasterSlavePoolAsync($request)
    {
        return $this->createMasterSlavePoolAsyncWithHttpInfo($request);
    }
    
    public function createMasterSlavePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlavePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlavePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 创建后端服务器
     *
     * 创建后端服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMemberAsync($request)
    {
        return $this->createMemberAsyncWithHttpInfo($request);
    }
    
    public function createMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 创建后端服务器组
     *
     * 创建后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPoolAsync($request)
    {
        return $this->createPoolAsyncWithHttpInfo($request);
    }
    
    public function createPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义安全策略
     *
     * 创建自定义安全策略。用于在创建HTTPS监听器时，请求参数中指定security_policy_id来设置监听器的自定义安全策略。
     * 
     * [荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityPolicyAsync($request)
    {
        return $this->createSecurityPolicyAsyncWithHttpInfo($request);
    }
    
    public function createSecurityPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/security-policies';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateSecurityPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateSecurityPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除证书
     *
     * 删除证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCertificateAsync($request)
    {
        return $this->deleteCertificateAsyncWithHttpInfo($request);
    }
    
    public function deleteCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/certificates/{certificate_id}';
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
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除健康检查
     *
     * 删除健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHealthMonitorAsync($request)
    {
        return $this->deleteHealthMonitorAsyncWithHttpInfo($request);
    }
    
    public function deleteHealthMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/healthmonitors/{healthmonitor_id}';
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
        if ($localVarParams['healthmonitorId'] !== null) {
            $pathParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteHealthMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteHealthMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 删除转发策略
     *
     * 删除七层转发策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteL7PolicyAsync($request)
    {
        return $this->deleteL7PolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteL7PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7PolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除转发规则
     *
     * 删除七层转发规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteL7RuleAsync($request)
    {
        return $this->deleteL7RuleAsyncWithHttpInfo($request);
    }
    
    public function deleteL7RuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules/{l7rule_id}';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['l7ruleId'] !== null) {
            $pathParams['l7rule_id'] = $localVarParams['l7ruleId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7RuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7RuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除监听器
     *
     * 删除监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteListenerAsync($request)
    {
        return $this->deleteListenerAsyncWithHttpInfo($request);
    }
    
    public function deleteListenerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}';
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
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerRequest',
            $asyncRequest = true);
    }

    /**
     * 级联删除监听器
     *
     * 删除监听器且级联删除其下子资源（删除监听器、转发策略等，解绑后端服务器组）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteListenerForceAsync($request)
    {
        return $this->deleteListenerForceAsyncWithHttpInfo($request);
    }
    
    public function deleteListenerForceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}/force';
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
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerForceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerForceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除负载均衡器
     *
     * 删除负载均衡器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLoadBalancerAsync($request)
    {
        return $this->deleteLoadBalancerAsyncWithHttpInfo($request);
    }
    
    public function deleteLoadBalancerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerRequest',
            $asyncRequest = true);
    }

    /**
     * 级联删除负载均衡器
     *
     * 删除负载均衡器且级联删除其下子资源（删除负载均衡器及其绑定的监听器、后端服务器组、后端服务器等一系列资源）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLoadBalancerForceAsync($request)
    {
        return $this->deleteLoadBalancerForceAsyncWithHttpInfo($request);
    }
    
    public function deleteLoadBalancerForceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerForceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerForceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除云日志
     *
     * 删除云日志。[荷兰region不支持云日志功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogtankAsync($request)
    {
        return $this->deleteLogtankAsyncWithHttpInfo($request);
    }
    
    public function deleteLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/logtanks/{logtank_id}';
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
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主备后端服务器组
     *
     * 删除主备后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMasterSlavePoolAsync($request)
    {
        return $this->deleteMasterSlavePoolAsyncWithHttpInfo($request);
    }
    
    public function deleteMasterSlavePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools/{pool_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMasterSlavePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMasterSlavePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 删除后端服务器
     *
     * 删除后端服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMemberAsync($request)
    {
        return $this->deleteMemberAsyncWithHttpInfo($request);
    }
    
    public function deleteMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/{member_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 删除后端服务器组
     *
     * 删除后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePoolAsync($request)
    {
        return $this->deletePoolAsyncWithHttpInfo($request);
    }
    
    public function deletePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeletePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeletePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 删除自定义安全策略
     *
     * 删除自定义安全策略。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityPolicyAsync($request)
    {
        return $this->deleteSecurityPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/security-policies/{security_policy_id}';
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
        if ($localVarParams['securityPolicyId'] !== null) {
            $pathParams['security_policy_id'] = $localVarParams['securityPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteSecurityPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteSecurityPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 后端服务器全局列表
     *
     * 查询当前租户下的后端服务器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllMembersAsync($request)
    {
        return $this->listAllMembersAsyncWithHttpInfo($request);
    }
    
    public function listAllMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/members';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['weight'] !== null) {
            $queryParams['weight'] = $localVarParams['weight'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['subnetCidrId'] !== null) {
            $queryParams['subnet_cidr_id'] = $localVarParams['subnetCidrId'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['protocolPort'] !== null) {
            $queryParams['protocol_port'] = $localVarParams['protocolPort'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListAllMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListAllMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可用区列表
     *
     * 返回租户创建LB时可使用的可用区集合列表情况。
     * 
     * - 默认情况下，会返回一个可用区集合。
     * 在（如创建LB）设置可用区时，填写的可用区必须包含在可用区集合中、为这个可用区集合的子集。
     * 
     * - 特殊场景下，部分客户要求负载均衡只能创建在指定可用区集合中，此时会返回客户定制的可用区集合。
     * 返回可用区集合可能为一个也可能为多个，比如列表有两个可用区集合\\[az1,az2\\],\\[az2,az3\\]。
     * 在创建负载均衡器时，可以选择创建在多个可用区，但所选的多个可用区必须同属于其中一个可用区集合，
     * 如可以选az2和az3，但不能选择az1和az3。你可以选择多个可用区，只要这些可用区在一个子集中
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailabilityZonesAsync($request)
    {
        return $this->listAvailabilityZonesAsyncWithHttpInfo($request);
    }
    
    public function listAvailabilityZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/availability-zones';
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
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListAvailabilityZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询证书列表
     *
     * 查询证书列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCertificatesAsync($request)
    {
        return $this->listCertificatesAsyncWithHttpInfo($request);
    }
    
    public function listCertificatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/certificates';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListCertificatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListCertificatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规格列表
     *
     * 查询租户在当前region下可用的负载均衡规格列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlavorsAsync($request)
    {
        return $this->listFlavorsAsyncWithHttpInfo($request);
    }
    
    public function listFlavorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/flavors';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['shared'] !== null) {
            $queryParams['shared'] = $localVarParams['shared'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListFlavorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListFlavorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询健康检查列表
     *
     * 健康检查列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHealthMonitorsAsync($request)
    {
        return $this->listHealthMonitorsAsyncWithHttpInfo($request);
    }
    
    public function listHealthMonitorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/healthmonitors';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['monitorPort'] !== null) {
            $queryParams['monitor_port'] = $localVarParams['monitorPort'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['delay'] !== null) {
            $queryParams['delay'] = $localVarParams['delay'];
        }
        if ($localVarParams['maxRetries'] !== null) {
            $queryParams['max_retries'] = $localVarParams['maxRetries'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['maxRetriesDown'] !== null) {
            $queryParams['max_retries_down'] = $localVarParams['maxRetriesDown'];
        }
        if ($localVarParams['timeout'] !== null) {
            $queryParams['timeout'] = $localVarParams['timeout'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['expectedCodes'] !== null) {
            $queryParams['expected_codes'] = $localVarParams['expectedCodes'];
        }
        if ($localVarParams['urlPath'] !== null) {
            $queryParams['url_path'] = $localVarParams['urlPath'];
        }
        if ($localVarParams['httpMethod'] !== null) {
            $queryParams['http_method'] = $localVarParams['httpMethod'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListHealthMonitorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListHealthMonitorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询转发策略列表
     *
     * 查询七层转发策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listL7PoliciesAsync($request)
    {
        return $this->listL7PoliciesAsyncWithHttpInfo($request);
    }
    
    public function listL7PoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $queryParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['position'] !== null) {
            $queryParams['position'] = $localVarParams['position'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['redirectUrl'] !== null) {
            $queryParams['redirect_url'] = $localVarParams['redirectUrl'];
        }
        if ($localVarParams['redirectPoolId'] !== null) {
            $queryParams['redirect_pool_id'] = $localVarParams['redirectPoolId'];
        }
        if ($localVarParams['redirectListenerId'] !== null) {
            $queryParams['redirect_listener_id'] = $localVarParams['redirectListenerId'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['displayAllRules'] !== null) {
            $queryParams['display_all_rules'] = $localVarParams['displayAllRules'];
        }
        if ($localVarParams['priority'] !== null) {
            $queryParams['priority'] = $localVarParams['priority'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7PoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7PoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询转发规则列表
     *
     * 查询转发规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listL7RulesAsync($request)
    {
        return $this->listL7RulesAsyncWithHttpInfo($request);
    }
    
    public function listL7RulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules';
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
        if ($localVarParams['compareType'] !== null) {
            $queryParams['compare_type'] = $localVarParams['compareType'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['invert'] !== null) {
            $queryParams['invert'] = $localVarParams['invert'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['value'] !== null) {
            $queryParams['value'] = $localVarParams['value'];
        }
        if ($localVarParams['key'] !== null) {
            $queryParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7RulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7RulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询监听器列表
     *
     * 查询监听器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listListenersAsync($request)
    {
        return $this->listListenersAsyncWithHttpInfo($request);
    }
    
    public function listListenersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/listeners';
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
        if ($localVarParams['protocolPort'] !== null) {
            $queryParams['protocol_port'] = $localVarParams['protocolPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['defaultTlsContainerRef'] !== null) {
            $queryParams['default_tls_container_ref'] = $localVarParams['defaultTlsContainerRef'];
        }
        if ($localVarParams['clientCaTlsContainerRef'] !== null) {
            $queryParams['client_ca_tls_container_ref'] = $localVarParams['clientCaTlsContainerRef'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['connectionLimit'] !== null) {
            $queryParams['connection_limit'] = $localVarParams['connectionLimit'];
        }
        if ($localVarParams['defaultPoolId'] !== null) {
            $queryParams['default_pool_id'] = $localVarParams['defaultPoolId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['http2Enable'] !== null) {
            $queryParams['http2_enable'] = $localVarParams['http2Enable'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['tlsCiphersPolicy'] !== null) {
            $queryParams['tls_ciphers_policy'] = $localVarParams['tlsCiphersPolicy'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['enableMemberRetry'] !== null) {
            $queryParams['enable_member_retry'] = $localVarParams['enableMemberRetry'];
        }
        if ($localVarParams['memberTimeout'] !== null) {
            $queryParams['member_timeout'] = $localVarParams['memberTimeout'];
        }
        if ($localVarParams['clientTimeout'] !== null) {
            $queryParams['client_timeout'] = $localVarParams['clientTimeout'];
        }
        if ($localVarParams['keepaliveTimeout'] !== null) {
            $queryParams['keepalive_timeout'] = $localVarParams['keepaliveTimeout'];
        }
        if ($localVarParams['transparentClientIpEnable'] !== null) {
            $queryParams['transparent_client_ip_enable'] = $localVarParams['transparentClientIpEnable'];
        }
        if ($localVarParams['proxyProtocolEnable'] !== null) {
            $queryParams['proxy_protocol_enable'] = $localVarParams['proxyProtocolEnable'];
        }
        if ($localVarParams['enhanceL7policyEnable'] !== null) {
            $queryParams['enhance_l7policy_enable'] = $localVarParams['enhanceL7policyEnable'];
        }
        if ($localVarParams['memberInstanceId'] !== null) {
            $queryParams['member_instance_id'] = $localVarParams['memberInstanceId'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListListenersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListListenersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询负载均衡器列表
     *
     * 查询负载均衡器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoadBalancersAsync($request)
    {
        return $this->listLoadBalancersAsyncWithHttpInfo($request);
    }
    
    public function listLoadBalancersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['guaranteed'] !== null) {
            $queryParams['guaranteed'] = $localVarParams['guaranteed'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['vipPortId'] !== null) {
            $queryParams['vip_port_id'] = $localVarParams['vipPortId'];
        }
        if ($localVarParams['vipAddress'] !== null) {
            $queryParams['vip_address'] = $localVarParams['vipAddress'];
        }
        if ($localVarParams['vipSubnetCidrId'] !== null) {
            $queryParams['vip_subnet_cidr_id'] = $localVarParams['vipSubnetCidrId'];
        }
        if ($localVarParams['ipv6VipPortId'] !== null) {
            $queryParams['ipv6_vip_port_id'] = $localVarParams['ipv6VipPortId'];
        }
        if ($localVarParams['ipv6VipAddress'] !== null) {
            $queryParams['ipv6_vip_address'] = $localVarParams['ipv6VipAddress'];
        }
        if ($localVarParams['ipv6VipVirsubnetId'] !== null) {
            $queryParams['ipv6_vip_virsubnet_id'] = $localVarParams['ipv6VipVirsubnetId'];
        }
        if ($localVarParams['eips'] !== null) {
            $queryParams['eips'] = $localVarParams['eips'];
        }
        if ($localVarParams['publicips'] !== null) {
            $queryParams['publicips'] = $localVarParams['publicips'];
        }
        if ($localVarParams['availabilityZoneList'] !== null) {
            $queryParams['availability_zone_list'] = $localVarParams['availabilityZoneList'];
        }
        if ($localVarParams['l4FlavorId'] !== null) {
            $queryParams['l4_flavor_id'] = $localVarParams['l4FlavorId'];
        }
        if ($localVarParams['l4ScaleFlavorId'] !== null) {
            $queryParams['l4_scale_flavor_id'] = $localVarParams['l4ScaleFlavorId'];
        }
        if ($localVarParams['l7FlavorId'] !== null) {
            $queryParams['l7_flavor_id'] = $localVarParams['l7FlavorId'];
        }
        if ($localVarParams['l7ScaleFlavorId'] !== null) {
            $queryParams['l7_scale_flavor_id'] = $localVarParams['l7ScaleFlavorId'];
        }
        if ($localVarParams['billingInfo'] !== null) {
            $queryParams['billing_info'] = $localVarParams['billingInfo'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['deletionProtectionEnable'] !== null) {
            $queryParams['deletion_protection_enable'] = $localVarParams['deletionProtectionEnable'];
        }
        if ($localVarParams['elbVirsubnetType'] !== null) {
            $queryParams['elb_virsubnet_type'] = $localVarParams['elbVirsubnetType'];
        }
        if ($localVarParams['autoscaling'] !== null) {
            $queryParams['autoscaling'] = $localVarParams['autoscaling'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }
        if ($localVarParams['globalEips'] !== null) {
            $queryParams['global_eips'] = $localVarParams['globalEips'];
        }
        if ($localVarParams['logTopicId'] !== null) {
            $queryParams['log_topic_id'] = $localVarParams['logTopicId'];
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['log_group_id'] = $localVarParams['logGroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListLoadBalancersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListLoadBalancersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云日志列表
     *
     * 查询云日志列表。[荷兰region不支持云日志功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogtanksAsync($request)
    {
        return $this->listLogtanksAsyncWithHttpInfo($request);
    }
    
    public function listLogtanksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/logtanks';
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logTopicId'] !== null) {
            $queryParams['log_topic_id'] = $localVarParams['logTopicId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListLogtanksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListLogtanksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主备后端服务器组列表
     *
     * 主备后端服务器组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMasterSlavePoolsAsync($request)
    {
        return $this->listMasterSlavePoolsAsyncWithHttpInfo($request);
    }
    
    public function listMasterSlavePoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $queryParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['lbAlgorithm'] !== null) {
            $queryParams['lb_algorithm'] = $localVarParams['lbAlgorithm'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $queryParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['memberInstanceId'] !== null) {
            $queryParams['member_instance_id'] = $localVarParams['memberInstanceId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListMasterSlavePoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListMasterSlavePoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询后端服务器列表
     *
     * Pool下的后端服务器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMembersAsync($request)
    {
        return $this->listMembersAsyncWithHttpInfo($request);
    }
    
    public function listMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['weight'] !== null) {
            $queryParams['weight'] = $localVarParams['weight'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['subnetCidrId'] !== null) {
            $queryParams['subnet_cidr_id'] = $localVarParams['subnetCidrId'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['protocolPort'] !== null) {
            $queryParams['protocol_port'] = $localVarParams['protocolPort'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['memberType'] !== null) {
            $queryParams['member_type'] = $localVarParams['memberType'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询后端服务器组列表
     *
     * 后端服务器组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPoolsAsync($request)
    {
        return $this->listPoolsAsyncWithHttpInfo($request);
    }
    
    public function listPoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $queryParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['lbAlgorithm'] !== null) {
            $queryParams['lb_algorithm'] = $localVarParams['lbAlgorithm'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['memberDeletionProtectionEnable'] !== null) {
            $queryParams['member_deletion_protection_enable'] = $localVarParams['memberDeletionProtectionEnable'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $queryParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['memberInstanceId'] !== null) {
            $queryParams['member_instance_id'] = $localVarParams['memberInstanceId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListPoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListPoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额使用详情
     *
     * 查询指定项目中负载均衡相关的各类资源的当前配额和已使用配额信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotaDetailsAsync($request)
    {
        return $this->listQuotaDetailsAsyncWithHttpInfo($request);
    }
    
    public function listQuotaDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/quotas/details';
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
        if ($localVarParams['quotaKey'] !== null) {
            $queryParams['quota_key'] = $localVarParams['quotaKey'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListQuotaDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListQuotaDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义安全策略列表
     *
     * 查询自定义安全策略列表。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityPoliciesAsync($request)
    {
        return $this->listSecurityPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/security-policies';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['protocols'] !== null) {
            $queryParams['protocols'] = $localVarParams['protocols'];
        }
        if ($localVarParams['ciphers'] !== null) {
            $queryParams['ciphers'] = $localVarParams['ciphers'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListSecurityPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListSecurityPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询系统安全策略列表
     *
     * 查询系统安全策略列表。
     * 
     * 系统安全策略为预置的所有租户通用的安全策略，租户不可新增或修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSystemSecurityPoliciesAsync($request)
    {
        return $this->listSystemSecurityPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listSystemSecurityPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/system-security-policies';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListSystemSecurityPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListSystemSecurityPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询证书详情
     *
     * 查询证书详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCertificateAsync($request)
    {
        return $this->showCertificateAsyncWithHttpInfo($request);
    }
    
    public function showCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/certificates/{certificate_id}';
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
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规格详情
     *
     * 查询规格的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlavorAsync($request)
    {
        return $this->showFlavorAsyncWithHttpInfo($request);
    }
    
    public function showFlavorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/flavors/{flavor_id}';
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
        if ($localVarParams['flavorId'] !== null) {
            $pathParams['flavor_id'] = $localVarParams['flavorId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowFlavorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowFlavorRequest',
            $asyncRequest = true);
    }

    /**
     * 查询健康检查详情
     *
     * 查询健康检查详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHealthMonitorAsync($request)
    {
        return $this->showHealthMonitorAsyncWithHttpInfo($request);
    }
    
    public function showHealthMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/healthmonitors/{healthmonitor_id}';
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
        if ($localVarParams['healthmonitorId'] !== null) {
            $pathParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowHealthMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowHealthMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 查询转发策略详情
     *
     * 查询七层转发策略详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showL7PolicyAsync($request)
    {
        return $this->showL7PolicyAsyncWithHttpInfo($request);
    }
    
    public function showL7PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7PolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询转发规则详情
     *
     * 查询七层转发规则详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showL7RuleAsync($request)
    {
        return $this->showL7RuleAsyncWithHttpInfo($request);
    }
    
    public function showL7RuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules/{l7rule_id}';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['l7ruleId'] !== null) {
            $pathParams['l7rule_id'] = $localVarParams['l7ruleId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7RuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7RuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询监听器详情
     *
     * 监听器详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showListenerAsync($request)
    {
        return $this->showListenerAsyncWithHttpInfo($request);
    }
    
    public function showListenerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}';
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
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowListenerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowListenerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询负载均衡器详情
     *
     * 查询负载均衡器详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLoadBalancerAsync($request)
    {
        return $this->showLoadBalancerAsyncWithHttpInfo($request);
    }
    
    public function showLoadBalancerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询负载均衡器状态树
     *
     * 查询负载均衡器状态树，包括负载均衡器及其关联的子资源的状态信息。
     * 注意：该接口中的operating_status不一定与对应资源的operating_status相同。
     * 如：当Member的admin_state_up&#x3D;false且operating_status&#x3D;OFFLINE时，
     * 该接口返回member的operating_status&#x3D;DISABLE。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLoadBalancerStatusAsync($request)
    {
        return $this->showLoadBalancerStatusAsyncWithHttpInfo($request);
    }
    
    public function showLoadBalancerStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/statuses';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云日志详情
     *
     * 云日志详情。[荷兰region不支持云日志功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLogtankAsync($request)
    {
        return $this->showLogtankAsyncWithHttpInfo($request);
    }
    
    public function showLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/logtanks/{logtank_id}';
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
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主备后端服务器组详情
     *
     * 主备后端服务器组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMasterSlavePoolAsync($request)
    {
        return $this->showMasterSlavePoolAsyncWithHttpInfo($request);
    }
    
    public function showMasterSlavePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools/{pool_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMasterSlavePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMasterSlavePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 查询后端服务器详情
     *
     * 后端服务器详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMemberAsync($request)
    {
        return $this->showMemberAsyncWithHttpInfo($request);
    }
    
    public function showMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/{member_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 查询后端服务器组详情
     *
     * 后端服务器组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolAsync($request)
    {
        return $this->showPoolAsyncWithHttpInfo($request);
    }
    
    public function showPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowPoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowPoolRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额详情
     *
     * 查询指定项目中负载均衡相关的各类资源的当前配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotaAsync($request)
    {
        return $this->showQuotaAsyncWithHttpInfo($request);
    }
    
    public function showQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/quotas';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义安全策略详情
     *
     * 查询自定义安全策略详情。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityPolicyAsync($request)
    {
        return $this->showSecurityPolicyAsyncWithHttpInfo($request);
    }
    
    public function showSecurityPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/security-policies/{security_policy_id}';
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
        if ($localVarParams['securityPolicyId'] !== null) {
            $pathParams['security_policy_id'] = $localVarParams['securityPolicyId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowSecurityPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowSecurityPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 更新证书
     *
     * 更新证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCertificateAsync($request)
    {
        return $this->updateCertificateAsyncWithHttpInfo($request);
    }
    
    public function updateCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/certificates/{certificate_id}';
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
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 更新健康检查
     *
     * 更新健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHealthMonitorAsync($request)
    {
        return $this->updateHealthMonitorAsyncWithHttpInfo($request);
    }
    
    public function updateHealthMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/healthmonitors/{healthmonitor_id}';
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
        if ($localVarParams['healthmonitorId'] !== null) {
            $pathParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 更新转发策略
     *
     * 更新七层转发策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateL7PolicyAsync($request)
    {
        return $this->updateL7PolicyAsyncWithHttpInfo($request);
    }
    
    public function updateL7PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 更新转发规则
     *
     * 更新七层转发规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateL7RuleAsync($request)
    {
        return $this->updateL7RuleAsyncWithHttpInfo($request);
    }
    
    public function updateL7RuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules/{l7rule_id}';
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
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['l7ruleId'] !== null) {
            $pathParams['l7rule_id'] = $localVarParams['l7ruleId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7RuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7RuleRequest',
            $asyncRequest = true);
    }

    /**
     * 更新监听器
     *
     * 更新监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateListenerAsync($request)
    {
        return $this->updateListenerAsyncWithHttpInfo($request);
    }
    
    public function updateListenerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}';
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
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateListenerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateListenerRequest',
            $asyncRequest = true);
    }

    /**
     * 更新负载均衡器
     *
     * 更新负载均衡器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLoadBalancerAsync($request)
    {
        return $this->updateLoadBalancerAsyncWithHttpInfo($request);
    }
    
    public function updateLoadBalancerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}';
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
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadBalancerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadBalancerRequest',
            $asyncRequest = true);
    }

    /**
     * 更新云日志
     *
     * 更新云日志。[荷兰region不支持云日志功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogtankAsync($request)
    {
        return $this->updateLogtankAsyncWithHttpInfo($request);
    }
    
    public function updateLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/logtanks/{logtank_id}';
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
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 更新后端服务器
     *
     * 更新后端服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMemberAsync($request)
    {
        return $this->updateMemberAsyncWithHttpInfo($request);
    }
    
    public function updateMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/{member_id}';
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
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 更新后端服务器组
     *
     * 更新后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePoolAsync($request)
    {
        return $this->updatePoolAsyncWithHttpInfo($request);
    }
    
    public function updatePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}';
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
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 更新自定义安全策略
     *
     * 更新自定义安全策略。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityPolicyAsync($request)
    {
        return $this->updateSecurityPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/security-policies/{security_policy_id}';
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
        if ($localVarParams['securityPolicyId'] !== null) {
            $pathParams['security_policy_id'] = $localVarParams['securityPolicyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateSecurityPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateSecurityPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API版本列表信息
     *
     * 返回ELB当前所有可用的API版本。
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
        $resourcePath = '/versions';
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListApiVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListApiVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除IP地址组的IP列表项
     *
     * 批量删除IP地址组的IP列表信息。[荷兰region不支持该API](tag:dt,dt_test)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteIpListAsync($request)
    {
        return $this->batchDeleteIpListAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteIpListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}/iplist/batch-delete';
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
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteIpListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteIpListRequest',
            $asyncRequest = true);
    }

    /**
     * 计算预占IP数
     *
     * 计算以下几种场景的预占用IP数量：
     * 
     * - 计算创建LB的第一个七层监听器后总占用IP数量：
     * 传入loadbalancer_id、l7_flavor_id为空、ip_target_enable不传或为false。
     * 
     * - 计算LB规格变更或开启跨VPC后总占用IP数量：
     * 传入参数loadbalancer_id，及l7_flavor_id不为空或ip_target_enable为true。
     * 
     * - 计算创建LB所需IP数量：传入参数availability_zone_id，
     * 及可选参数l7_flavor_id、ip_target_enable、ip_version，不能传loadbalancer_id。
     * 
     * 说明：
     * - 计算出来的预占IP数大于等于最终实际占用的IP数。
     * - 总占用IP数量，即整个LB所占用的IP数量。
     * 
     * [不支持传入l7_flavor_id](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countPreoccupyIpNumAsync($request)
    {
        return $this->countPreoccupyIpNumAsyncWithHttpInfo($request);
    }
    
    public function countPreoccupyIpNumAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/preoccupy-ip-num';
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
        if ($localVarParams['l7FlavorId'] !== null) {
            $queryParams['l7_flavor_id'] = $localVarParams['l7FlavorId'];
        }
        if ($localVarParams['ipTargetEnable'] !== null) {
            $queryParams['ip_target_enable'] = $localVarParams['ipTargetEnable'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['availabilityZoneId'] !== null) {
            $queryParams['availability_zone_id'] = $localVarParams['availabilityZoneId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CountPreoccupyIpNumResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CountPreoccupyIpNumRequest',
            $asyncRequest = true);
    }

    /**
     * 创建IP地址组
     *
     * 创建IP地址组。输入的ip可为ip地址或者CIDR子网，支持IPV4和IPV6。
     * 
     * 需要注意0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * 
     * [荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIpGroupAsync($request)
    {
        return $this->createIpGroupAsyncWithHttpInfo($request);
    }
    
    public function createIpGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups';
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateIpGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateIpGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除IP地址组
     *
     * 删除ip地址组。[荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIpGroupAsync($request)
    {
        return $this->deleteIpGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteIpGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}';
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
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteIpGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteIpGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询IP地址组列表
     *
     * 查询IP地址组列表。[荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpGroupsAsync($request)
    {
        return $this->listIpGroupsAsyncWithHttpInfo($request);
    }
    
    public function listIpGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups';
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['ipList'] !== null) {
            $queryParams['ip_list'] = $localVarParams['ipList'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListIpGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListIpGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询IP地址组详情
     *
     * 获取IP地址组详情。[荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIpGroupAsync($request)
    {
        return $this->showIpGroupAsyncWithHttpInfo($request);
    }
    
    public function showIpGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}';
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
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowIpGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowIpGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新IP地址组
     *
     * 更新IP地址组，只支持全量更新IP。即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。
     * 输入的ip可为ip地址或者CIDR子网，支持IPV4和IPV6。
     * 
     * 需要注意0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * 
     * [荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIpGroupAsync($request)
    {
        return $this->updateIpGroupAsyncWithHttpInfo($request);
    }
    
    public function updateIpGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}';
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
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新IP地址组的IP列表项
     *
     * 添加新的IP地址到IP地址组的IP列表信息，或更新已有IP地址的描述。[荷兰region不支持该API](tag:dt,dt_test)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIpListAsync($request)
    {
        return $this->updateIpListAsyncWithHttpInfo($request);
    }
    
    public function updateIpListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}/iplist/create-or-update';
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
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpListRequest',
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