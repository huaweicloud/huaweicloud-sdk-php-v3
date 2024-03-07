<?php

namespace HuaweiCloud\SDK\Config\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ConfigAsyncClient extends Client
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
        return new ClientBuilder(new ConfigAsyncClient(), "GlobalCredentials");
    }

    /**
     * 创建资源聚合器授权
     *
     * 给资源聚合器帐号授予从源帐号收集数据的权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAggregationAuthorizationAsync($request)
    {
        return $this->createAggregationAuthorizationAsyncWithHttpInfo($request);
    }
    
    public function createAggregationAuthorizationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregation-authorization';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateAggregationAuthorizationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateAggregationAuthorizationRequest',
            $asyncRequest = true);
    }

    /**
     * 创建资源聚合器
     *
     * 创建资源聚合器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConfigurationAggregatorAsync($request)
    {
        return $this->createConfigurationAggregatorAsyncWithHttpInfo($request);
    }
    
    public function createConfigurationAggregatorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateConfigurationAggregatorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateConfigurationAggregatorRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源聚合器授权
     *
     * 删除指定资源聚合器帐号的授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAggregationAuthorizationAsync($request)
    {
        return $this->deleteAggregationAuthorizationAsyncWithHttpInfo($request);
    }
    
    public function deleteAggregationAuthorizationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregation-authorization/{authorized_account_id}';
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
        if ($localVarParams['authorizedAccountId'] !== null) {
            $pathParams['authorized_account_id'] = $localVarParams['authorizedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteAggregationAuthorizationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteAggregationAuthorizationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源聚合器
     *
     * 删除资源聚合器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConfigurationAggregatorAsync($request)
    {
        return $this->deleteConfigurationAggregatorAsyncWithHttpInfo($request);
    }
    
    public function deleteConfigurationAggregatorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/{aggregator_id}';
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
        if ($localVarParams['aggregatorId'] !== null) {
            $pathParams['aggregator_id'] = $localVarParams['aggregatorId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteConfigurationAggregatorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteConfigurationAggregatorRequest',
            $asyncRequest = true);
    }

    /**
     * 删除聚合器帐号中挂起的授权请求
     *
     * 删除聚合器帐号中挂起的授权请求。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePendingAggregationRequestAsync($request)
    {
        return $this->deletePendingAggregationRequestAsyncWithHttpInfo($request);
    }
    
    public function deletePendingAggregationRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/pending-aggregation-request/{requester_account_id}';
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
        if ($localVarParams['requesterAccountId'] !== null) {
            $pathParams['requester_account_id'] = $localVarParams['requesterAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeletePendingAggregationRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeletePendingAggregationRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 查询聚合合规规则列表
     *
     * 查询合规和不合规规则的列表，其中包含合规和不合规规则的资源数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAggregateComplianceByPolicyAssignmentAsync($request)
    {
        return $this->listAggregateComplianceByPolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function listAggregateComplianceByPolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-data/policy-assignments/compliance';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListAggregateComplianceByPolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListAggregateComplianceByPolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询聚合器中资源的列表
     *
     * 查询资源聚合器中特定资源的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAggregateDiscoveredResourcesAsync($request)
    {
        return $this->listAggregateDiscoveredResourcesAsyncWithHttpInfo($request);
    }
    
    public function listAggregateDiscoveredResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-data/aggregate-discovered-resources';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListAggregateDiscoveredResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListAggregateDiscoveredResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源聚合器授权列表
     *
     * 查询授权过的资源聚合器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAggregationAuthorizationsAsync($request)
    {
        return $this->listAggregationAuthorizationsAsyncWithHttpInfo($request);
    }
    
    public function listAggregationAuthorizationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregation-authorization';
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
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListAggregationAuthorizationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListAggregationAuthorizationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源聚合器列表
     *
     * 查询资源聚合器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConfigurationAggregatorsAsync($request)
    {
        return $this->listConfigurationAggregatorsAsyncWithHttpInfo($request);
    }
    
    public function listConfigurationAggregatorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators';
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
        if ($localVarParams['aggregatorName'] !== null) {
            $queryParams['aggregator_name'] = $localVarParams['aggregatorName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListConfigurationAggregatorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListConfigurationAggregatorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有挂起的聚合请求列表
     *
     * 查询所有挂起的聚合请求列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPendingAggregationRequestsAsync($request)
    {
        return $this->listPendingAggregationRequestsAsyncWithHttpInfo($request);
    }
    
    public function listPendingAggregationRequestsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/pending-aggregation-request';
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
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListPendingAggregationRequestsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListPendingAggregationRequestsRequest',
            $asyncRequest = true);
    }

    /**
     * 对指定聚合器执行高级查询
     *
     * 对指定聚合器执行高级查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runAggregateResourceQueryAsync($request)
    {
        return $this->runAggregateResourceQueryAsyncWithHttpInfo($request);
    }
    
    public function runAggregateResourceQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/{aggregator_id}/run-query';
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
        if ($localVarParams['aggregatorId'] !== null) {
            $pathParams['aggregator_id'] = $localVarParams['aggregatorId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\RunAggregateResourceQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\RunAggregateResourceQueryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定聚合合规规则的评估结果详情
     *
     * 返回指定聚合合规规则的评估结果详情。包含评估了哪些资源，以及每个资源是否符合规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAggregateComplianceDetailsByPolicyAssignmentAsync($request)
    {
        return $this->showAggregateComplianceDetailsByPolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function showAggregateComplianceDetailsByPolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-data/policy-states/compliance-details';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregateComplianceDetailsByPolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregateComplianceDetailsByPolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询聚合器中帐号资源的计数
     *
     * 查询聚合器中帐号资源的计数，支持通过过滤器和GroupByKey来统计资源数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAggregateDiscoveredResourceCountsAsync($request)
    {
        return $this->showAggregateDiscoveredResourceCountsAsyncWithHttpInfo($request);
    }
    
    public function showAggregateDiscoveredResourceCountsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-data/aggregate-discovered-resource-counts';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregateDiscoveredResourceCountsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregateDiscoveredResourceCountsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定聚合合规规则详情
     *
     * 返回指定聚合合规规则详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAggregatePolicyAssignmentDetailAsync($request)
    {
        return $this->showAggregatePolicyAssignmentDetailAsyncWithHttpInfo($request);
    }
    
    public function showAggregatePolicyAssignmentDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-data/policy-assignment/detail';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregatePolicyAssignmentDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregatePolicyAssignmentDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询聚合器中一个或多个帐户的合规概况
     *
     * 查询聚合器中一个或多个帐户的合规和不合规规则数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAggregatePolicyStateComplianceSummaryAsync($request)
    {
        return $this->showAggregatePolicyStateComplianceSummaryAsyncWithHttpInfo($request);
    }
    
    public function showAggregatePolicyStateComplianceSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-data/policy-states/compliance-summary';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregatePolicyStateComplianceSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregatePolicyStateComplianceSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询源帐号中资源的详情
     *
     * 查询源帐号中特定资源的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAggregateResourceConfigAsync($request)
    {
        return $this->showAggregateResourceConfigAsyncWithHttpInfo($request);
    }
    
    public function showAggregateResourceConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/aggregate-resource-config';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregateResourceConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowAggregateResourceConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定资源聚合器
     *
     * 查询指定资源聚合器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConfigurationAggregatorAsync($request)
    {
        return $this->showConfigurationAggregatorAsyncWithHttpInfo($request);
    }
    
    public function showConfigurationAggregatorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/{aggregator_id}';
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
        if ($localVarParams['aggregatorId'] !== null) {
            $pathParams['aggregator_id'] = $localVarParams['aggregatorId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowConfigurationAggregatorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowConfigurationAggregatorRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定资源聚合器聚合帐号的状态信息
     *
     * 查询指定资源聚合器聚合帐号的状态信息，状态包括验证源帐号和聚合器帐号之间授权的信息。如果失败，状态包含相关的错误码或消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConfigurationAggregatorSourcesStatusAsync($request)
    {
        return $this->showConfigurationAggregatorSourcesStatusAsyncWithHttpInfo($request);
    }
    
    public function showConfigurationAggregatorSourcesStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/{aggregator_id}/aggregator-sources-status';
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
        if ($localVarParams['updateStatus'] !== null) {
            $queryParams['update_status'] = $localVarParams['updateStatus'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['aggregatorId'] !== null) {
            $pathParams['aggregator_id'] = $localVarParams['aggregatorId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowConfigurationAggregatorSourcesStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowConfigurationAggregatorSourcesStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 更新资源聚合器
     *
     * 更新资源聚合器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateConfigurationAggregatorAsync($request)
    {
        return $this->updateConfigurationAggregatorAsyncWithHttpInfo($request);
    }
    
    public function updateConfigurationAggregatorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/aggregators/{aggregator_id}';
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
        if ($localVarParams['aggregatorId'] !== null) {
            $pathParams['aggregator_id'] = $localVarParams['aggregatorId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\UpdateConfigurationAggregatorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\UpdateConfigurationAggregatorRequest',
            $asyncRequest = true);
    }

    /**
     * 列举合规规则包的结果概览
     *
     * 列举用户的合规规则包的合规结果概览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function collectConformancePackComplianceSummaryAsync($request)
    {
        return $this->collectConformancePackComplianceSummaryAsyncWithHttpInfo($request);
    }
    
    public function collectConformancePackComplianceSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs/compliance/summary';
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
        if ($localVarParams['conformancePackName'] !== null) {
            $queryParams['conformance_pack_name'] = $localVarParams['conformancePackName'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CollectConformancePackComplianceSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CollectConformancePackComplianceSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 创建合规规则包
     *
     * 创建新的合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConformancePackAsync($request)
    {
        return $this->createConformancePackAsyncWithHttpInfo($request);
    }
    
    public function createConformancePackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateConformancePackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateConformancePackRequest',
            $asyncRequest = true);
    }

    /**
     * 创建组织合规规则包
     *
     * 创建新的组织合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrganizationConformancePackAsync($request)
    {
        return $this->createOrganizationConformancePackAsyncWithHttpInfo($request);
    }
    
    public function createOrganizationConformancePackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/conformance-packs';
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
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateOrganizationConformancePackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateOrganizationConformancePackRequest',
            $asyncRequest = true);
    }

    /**
     * 删除合规规则包
     *
     * 删除用户的合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConformancePackAsync($request)
    {
        return $this->deleteConformancePackAsyncWithHttpInfo($request);
    }
    
    public function deleteConformancePackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs/{conformance_pack_id}';
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
        if ($localVarParams['conformancePackId'] !== null) {
            $pathParams['conformance_pack_id'] = $localVarParams['conformancePackId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteConformancePackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteConformancePackRequest',
            $asyncRequest = true);
    }

    /**
     * 删除组织合规规则包
     *
     * 删除用户的组织合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOrganizationConformancePackAsync($request)
    {
        return $this->deleteOrganizationConformancePackAsyncWithHttpInfo($request);
    }
    
    public function deleteOrganizationConformancePackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/conformance-packs/{conformance_pack_id}';
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
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
        }
        if ($localVarParams['conformancePackId'] !== null) {
            $pathParams['conformance_pack_id'] = $localVarParams['conformancePackId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteOrganizationConformancePackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteOrganizationConformancePackRequest',
            $asyncRequest = true);
    }

    /**
     * 列举预定义合规规则包模板
     *
     * 列举预定义的合规规则包的模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBuiltInConformancePackTemplatesAsync($request)
    {
        return $this->listBuiltInConformancePackTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listBuiltInConformancePackTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/conformance-packs/templates';
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
        if ($localVarParams['templateKey'] !== null) {
            $queryParams['template_key'] = $localVarParams['templateKey'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListBuiltInConformancePackTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListBuiltInConformancePackTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 列举合规规则包的评估结果
     *
     * 列举合规规则包的合规规则评估结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConformancePackComplianceByPackIdAsync($request)
    {
        return $this->listConformancePackComplianceByPackIdAsyncWithHttpInfo($request);
    }
    
    public function listConformancePackComplianceByPackIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs/{conformance_pack_id}/compliance';
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
        if ($localVarParams['policyAssignmentName'] !== null) {
            $queryParams['policy_assignment_name'] = $localVarParams['policyAssignmentName'];
        }
        if ($localVarParams['conformancePackId'] !== null) {
            $pathParams['conformance_pack_id'] = $localVarParams['conformancePackId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePackComplianceByPackIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePackComplianceByPackIdRequest',
            $asyncRequest = true);
    }

    /**
     * 列举合规规则包的评估结果详情
     *
     * 列举合规规则包的合规规则评估结果详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConformancePackComplianceDetailsByPackIdAsync($request)
    {
        return $this->listConformancePackComplianceDetailsByPackIdAsyncWithHttpInfo($request);
    }
    
    public function listConformancePackComplianceDetailsByPackIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs/{conformance_pack_id}/compliance/details';
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
        if ($localVarParams['policyAssignmentName'] !== null) {
            $queryParams['policy_assignment_name'] = $localVarParams['policyAssignmentName'];
        }
        if ($localVarParams['conformancePackId'] !== null) {
            $pathParams['conformance_pack_id'] = $localVarParams['conformancePackId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePackComplianceDetailsByPackIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePackComplianceDetailsByPackIdRequest',
            $asyncRequest = true);
    }

    /**
     * 列举合规规则包分数
     *
     * 列举用户的合规规则包分数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConformancePackComplianceScoresAsync($request)
    {
        return $this->listConformancePackComplianceScoresAsyncWithHttpInfo($request);
    }
    
    public function listConformancePackComplianceScoresAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs/scores';
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
        if ($localVarParams['conformancePackName'] !== null) {
            $queryParams['conformance_pack_name'] = $localVarParams['conformancePackName'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePackComplianceScoresResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePackComplianceScoresRequest',
            $asyncRequest = true);
    }

    /**
     * 列举合规规则包
     *
     * 列举用户的合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConformancePacksAsync($request)
    {
        return $this->listConformancePacksAsyncWithHttpInfo($request);
    }
    
    public function listConformancePacksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs';
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
        if ($localVarParams['conformancePackName'] !== null) {
            $queryParams['conformance_pack_name'] = $localVarParams['conformancePackName'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePacksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListConformancePacksRequest',
            $asyncRequest = true);
    }

    /**
     * 查看组织合规规则包部署状态
     *
     * 列举用户的组织合规规则包部署状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationConformancePackStatusesAsync($request)
    {
        return $this->listOrganizationConformancePackStatusesAsyncWithHttpInfo($request);
    }
    
    public function listOrganizationConformancePackStatusesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/conformance-packs/statuses';
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
        if ($localVarParams['conformancePackName'] !== null) {
            $queryParams['conformance_pack_name'] = $localVarParams['conformancePackName'];
        }
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListOrganizationConformancePackStatusesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListOrganizationConformancePackStatusesRequest',
            $asyncRequest = true);
    }

    /**
     * 列举组织合规规则包
     *
     * 列举用户的组织合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationConformancePacksAsync($request)
    {
        return $this->listOrganizationConformancePacksAsyncWithHttpInfo($request);
    }
    
    public function listOrganizationConformancePacksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/conformance-packs';
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
        if ($localVarParams['conformancePackName'] !== null) {
            $queryParams['conformance_pack_name'] = $localVarParams['conformancePackName'];
        }
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListOrganizationConformancePacksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListOrganizationConformancePacksRequest',
            $asyncRequest = true);
    }

    /**
     * 查看预定义合规规则包模板
     *
     * 根据ID获取单个预定义合规规则包模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuiltInConformancePackTemplateAsync($request)
    {
        return $this->showBuiltInConformancePackTemplateAsyncWithHttpInfo($request);
    }
    
    public function showBuiltInConformancePackTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/conformance-packs/templates/{template_id}';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowBuiltInConformancePackTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowBuiltInConformancePackTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查看合规规则包
     *
     * 根据ID获取单个合规规则包。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConformancePackAsync($request)
    {
        return $this->showConformancePackAsyncWithHttpInfo($request);
    }
    
    public function showConformancePackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/conformance-packs/{conformance_pack_id}';
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
        if ($localVarParams['conformancePackId'] !== null) {
            $pathParams['conformance_pack_id'] = $localVarParams['conformancePackId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowConformancePackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowConformancePackRequest',
            $asyncRequest = true);
    }

    /**
     * 查看组织合规规则包
     *
     * 根据ID获取单个组织合规规则包详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationConformancePackAsync($request)
    {
        return $this->showOrganizationConformancePackAsyncWithHttpInfo($request);
    }
    
    public function showOrganizationConformancePackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/conformance-packs/{conformance_pack_id}';
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
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
        }
        if ($localVarParams['conformancePackId'] !== null) {
            $pathParams['conformance_pack_id'] = $localVarParams['conformancePackId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationConformancePackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationConformancePackRequest',
            $asyncRequest = true);
    }

    /**
     * 查看组织合规规则包部署详细状态
     *
     * 查看指定组织合规规则包在成员帐号中的部署状态详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationConformancePackDetailedStatusesAsync($request)
    {
        return $this->showOrganizationConformancePackDetailedStatusesAsyncWithHttpInfo($request);
    }
    
    public function showOrganizationConformancePackDetailedStatusesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/conformance-packs/detailed-statuses';
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
        if ($localVarParams['conformancePackName'] !== null) {
            $queryParams['conformance_pack_name'] = $localVarParams['conformancePackName'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationConformancePackDetailedStatusesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationConformancePackDetailedStatusesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源历史
     *
     * 查询资源与资源关系的变更历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceHistoryAsync($request)
    {
        return $this->showResourceHistoryAsyncWithHttpInfo($request);
    }
    
    public function showResourceHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/resources/{resource_id}/history';
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
        if ($localVarParams['earlierTime'] !== null) {
            $queryParams['earlier_time'] = $localVarParams['earlierTime'];
        }
        if ($localVarParams['laterTime'] !== null) {
            $queryParams['later_time'] = $localVarParams['laterTime'];
        }
        if ($localVarParams['chronologicalOrder'] !== null) {
            $queryParams['chronological_order'] = $localVarParams['chronologicalOrder'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 创建或更新组织合规规则
     *
     * 创建或更新组织合规规则，如果规则名称已存在，则为更新操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrganizationPolicyAssignmentAsync($request)
    {
        return $this->createOrganizationPolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function createOrganizationPolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/policy-assignments';
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
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateOrganizationPolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateOrganizationPolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 创建合规规则
     *
     * 创建新的合规规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPolicyAssignmentsAsync($request)
    {
        return $this->createPolicyAssignmentsAsyncWithHttpInfo($request);
    }
    
    public function createPolicyAssignmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreatePolicyAssignmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreatePolicyAssignmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除组织合规规则
     *
     * 删除组织合规规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOrganizationPolicyAssignmentAsync($request)
    {
        return $this->deleteOrganizationPolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function deleteOrganizationPolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/policy-assignments/{organization_policy_assignment_id}';
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
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
        }
        if ($localVarParams['organizationPolicyAssignmentId'] !== null) {
            $pathParams['organization_policy_assignment_id'] = $localVarParams['organizationPolicyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteOrganizationPolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteOrganizationPolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除合规规则
     *
     * 根据规则ID删除此规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePolicyAssignmentAsync($request)
    {
        return $this->deletePolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function deletePolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeletePolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeletePolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 停用合规规则
     *
     * 根据规则ID停用此规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disablePolicyAssignmentAsync($request)
    {
        return $this->disablePolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function disablePolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}/disable';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DisablePolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DisablePolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 启用合规规则
     *
     * 根据规则ID启用此规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enablePolicyAssignmentAsync($request)
    {
        return $this->enablePolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function enablePolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}/enable';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\EnablePolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\EnablePolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 列出内置策略
     *
     * 列出用户的内置策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBuiltInPolicyDefinitionsAsync($request)
    {
        return $this->listBuiltInPolicyDefinitionsAsyncWithHttpInfo($request);
    }
    
    public function listBuiltInPolicyDefinitionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/policy-definitions';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListBuiltInPolicyDefinitionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListBuiltInPolicyDefinitionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询组织合规规则列表
     *
     * 查询组织合规规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationPolicyAssignmentsAsync($request)
    {
        return $this->listOrganizationPolicyAssignmentsAsyncWithHttpInfo($request);
    }
    
    public function listOrganizationPolicyAssignmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/policy-assignments';
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
        if ($localVarParams['organizationPolicyAssignmentName'] !== null) {
            $queryParams['organization_policy_assignment_name'] = $localVarParams['organizationPolicyAssignmentName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListOrganizationPolicyAssignmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListOrganizationPolicyAssignmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 列出合规规则
     *
     * 列出用户的合规规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyAssignmentsAsync($request)
    {
        return $this->listPolicyAssignmentsAsyncWithHttpInfo($request);
    }
    
    public function listPolicyAssignmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments';
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
        if ($localVarParams['policyAssignmentName'] !== null) {
            $queryParams['policy_assignment_name'] = $localVarParams['policyAssignmentName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyAssignmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyAssignmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取规则的合规结果
     *
     * 根据规则ID查询所有的合规结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyStatesByAssignmentIdAsync($request)
    {
        return $this->listPolicyStatesByAssignmentIdAsyncWithHttpInfo($request);
    }
    
    public function listPolicyStatesByAssignmentIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}/policy-states';
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
        if ($localVarParams['complianceState'] !== null) {
            $queryParams['compliance_state'] = $localVarParams['complianceState'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyStatesByAssignmentIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyStatesByAssignmentIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取用户的合规结果
     *
     * 查询用户所有的合规结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyStatesByDomainIdAsync($request)
    {
        return $this->listPolicyStatesByDomainIdAsyncWithHttpInfo($request);
    }
    
    public function listPolicyStatesByDomainIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-states';
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
        if ($localVarParams['complianceState'] !== null) {
            $queryParams['compliance_state'] = $localVarParams['complianceState'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyStatesByDomainIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyStatesByDomainIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取资源的合规结果
     *
     * 根据资源ID查询所有合规结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyStatesByResourceIdAsync($request)
    {
        return $this->listPolicyStatesByResourceIdAsyncWithHttpInfo($request);
    }
    
    public function listPolicyStatesByResourceIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/resources/{resource_id}/policy-states';
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
        if ($localVarParams['complianceState'] !== null) {
            $queryParams['compliance_state'] = $localVarParams['complianceState'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyStatesByResourceIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListPolicyStatesByResourceIdRequest',
            $asyncRequest = true);
    }

    /**
     * 运行合规评估
     *
     * 根据规则ID评估此规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runEvaluationByPolicyAssignmentIdAsync($request)
    {
        return $this->runEvaluationByPolicyAssignmentIdAsyncWithHttpInfo($request);
    }
    
    public function runEvaluationByPolicyAssignmentIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}/policy-states/run-evaluation';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\RunEvaluationByPolicyAssignmentIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\RunEvaluationByPolicyAssignmentIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个内置策略
     *
     * 根据策略ID查询单个内置策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuiltInPolicyDefinitionAsync($request)
    {
        return $this->showBuiltInPolicyDefinitionAsyncWithHttpInfo($request);
    }
    
    public function showBuiltInPolicyDefinitionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/policy-definitions/{policy_definition_id}';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['policyDefinitionId'] !== null) {
            $pathParams['policy_definition_id'] = $localVarParams['policyDefinitionId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowBuiltInPolicyDefinitionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowBuiltInPolicyDefinitionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取规则的评估状态
     *
     * 根据规则ID查询此规则的评估状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEvaluationStateByAssignmentIdAsync($request)
    {
        return $this->showEvaluationStateByAssignmentIdAsyncWithHttpInfo($request);
    }
    
    public function showEvaluationStateByAssignmentIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}/policy-states/evaluation-state';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowEvaluationStateByAssignmentIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowEvaluationStateByAssignmentIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定组织合规规则
     *
     * 查询指定组织合规规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationPolicyAssignmentAsync($request)
    {
        return $this->showOrganizationPolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function showOrganizationPolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/policy-assignments/{organization_policy_assignment_id}';
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
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
        }
        if ($localVarParams['organizationPolicyAssignmentId'] !== null) {
            $pathParams['organization_policy_assignment_id'] = $localVarParams['organizationPolicyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationPolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationPolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询组织内每个成员帐号合规规则部署的详细状态
     *
     * 查询组织内每个成员帐号合规规则部署的详细状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationPolicyAssignmentDetailedStatusAsync($request)
    {
        return $this->showOrganizationPolicyAssignmentDetailedStatusAsyncWithHttpInfo($request);
    }
    
    public function showOrganizationPolicyAssignmentDetailedStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/policy-assignment-detailed-status';
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
        if ($localVarParams['organizationPolicyAssignmentName'] !== null) {
            $queryParams['organization_policy_assignment_name'] = $localVarParams['organizationPolicyAssignmentName'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationPolicyAssignmentDetailedStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationPolicyAssignmentDetailedStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询组织合规规则部署状态
     *
     * 查询组织合规规则部署状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationPolicyAssignmentStatusesAsync($request)
    {
        return $this->showOrganizationPolicyAssignmentStatusesAsyncWithHttpInfo($request);
    }
    
    public function showOrganizationPolicyAssignmentStatusesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/organizations/{organization_id}/policy-assignment-statuses';
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
        if ($localVarParams['organizationPolicyAssignmentId'] !== null) {
            $queryParams['organization_policy_assignment_id'] = $localVarParams['organizationPolicyAssignmentId'];
        }
        if ($localVarParams['organizationPolicyAssignmentName'] !== null) {
            $queryParams['organization_policy_assignment_name'] = $localVarParams['organizationPolicyAssignmentName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['organizationId'] !== null) {
            $pathParams['organization_id'] = $localVarParams['organizationId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationPolicyAssignmentStatusesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowOrganizationPolicyAssignmentStatusesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取单个合规规则
     *
     * 根据规则ID获取单个规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPolicyAssignmentAsync($request)
    {
        return $this->showPolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function showPolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowPolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowPolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合规规则
     *
     * 更新用户的合规规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePolicyAssignmentAsync($request)
    {
        return $this->updatePolicyAssignmentAsyncWithHttpInfo($request);
    }
    
    public function updatePolicyAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-assignments/{policy_assignment_id}';
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
        if ($localVarParams['policyAssignmentId'] !== null) {
            $pathParams['policy_assignment_id'] = $localVarParams['policyAssignmentId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\UpdatePolicyAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\UpdatePolicyAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合规评估结果
     *
     * 更新用户自定义合规规则的合规评估结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePolicyStateAsync($request)
    {
        return $this->updatePolicyStateAsyncWithHttpInfo($request);
    }
    
    public function updatePolicyStateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/policy-states';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\UpdatePolicyStateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\UpdatePolicyStateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建高级查询
     *
     * 创建新的高级查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStoredQueryAsync($request)
    {
        return $this->createStoredQueryAsyncWithHttpInfo($request);
    }
    
    public function createStoredQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/stored-queries';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateStoredQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateStoredQueryRequest',
            $asyncRequest = true);
    }

    /**
     * 删除高级查询
     *
     * 删除单个高级查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStoredQueryAsync($request)
    {
        return $this->deleteStoredQueryAsyncWithHttpInfo($request);
    }
    
    public function deleteStoredQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/stored-queries/{query_id}';
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
        if ($localVarParams['queryId'] !== null) {
            $pathParams['query_id'] = $localVarParams['queryId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteStoredQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteStoredQueryRequest',
            $asyncRequest = true);
    }

    /**
     * 列举高级查询Schema
     *
     * List Schemas
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSchemasAsync($request)
    {
        return $this->listSchemasAsyncWithHttpInfo($request);
    }
    
    public function listSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/schemas';
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 列出高级查询
     *
     * 列举所有高级查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStoredQueriesAsync($request)
    {
        return $this->listStoredQueriesAsyncWithHttpInfo($request);
    }
    
    public function listStoredQueriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/stored-queries';
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListStoredQueriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListStoredQueriesRequest',
            $asyncRequest = true);
    }

    /**
     * 运行高级查询
     *
     * 执行高级查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runQueryAsync($request)
    {
        return $this->runQueryAsyncWithHttpInfo($request);
    }
    
    public function runQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/run-query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\RunQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\RunQueryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个高级查询
     *
     * Show Resource Query Language
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStoredQueryAsync($request)
    {
        return $this->showStoredQueryAsyncWithHttpInfo($request);
    }
    
    public function showStoredQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/stored-queries/{query_id}';
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
        if ($localVarParams['queryId'] !== null) {
            $pathParams['query_id'] = $localVarParams['queryId'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowStoredQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowStoredQueryRequest',
            $asyncRequest = true);
    }

    /**
     * 更新单个高级查询
     *
     * 更新自定义查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStoredQueryAsync($request)
    {
        return $this->updateStoredQueryAsyncWithHttpInfo($request);
    }
    
    public function updateStoredQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/stored-queries/{query_id}';
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
        if ($localVarParams['queryId'] !== null) {
            $pathParams['query_id'] = $localVarParams['queryId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\UpdateStoredQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\UpdateStoredQueryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户可见的区域
     *
     * 查询用户可见的区域
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRegionsAsync($request)
    {
        return $this->listRegionsAsyncWithHttpInfo($request);
    }
    
    public function listRegionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/regions';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListRegionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListRegionsRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源关系
     *
     * 指定资源ID，查询该资源与其他资源的关联关系，可以指定关系方向为\&quot;in\&quot; 或者\&quot;out\&quot;
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceRelationsAsync($request)
    {
        return $this->showResourceRelationsAsyncWithHttpInfo($request);
    }
    
    public function showResourceRelationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/resources/{resource_id}/relations';
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceRelationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceRelationsRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源关系详情
     *
     * 指定资源ID，查询该资源与其他资源的关联关系，可以指定关系方向为“in”或者“out”，需要当帐号有rms:resources:getRelation权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceRelationsDetailAsync($request)
    {
        return $this->showResourceRelationsDetailAsyncWithHttpInfo($request);
    }
    
    public function showResourceRelationsDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/all-resources/{resource_id}/relations';
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceRelationsDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceRelationsDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源概要
     *
     * 查询当前帐号的资源概览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function collectAllResourcesSummaryAsync($request)
    {
        return $this->collectAllResourcesSummaryAsyncWithHttpInfo($request);
    }
    
    public function collectAllResourcesSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/all-resources/summary';
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CollectAllResourcesSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CollectAllResourcesSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源记录器收集的资源概要
     *
     * 查询当前用户资源记录器收集的资源概览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function collectTrackedResourcesSummaryAsync($request)
    {
        return $this->collectTrackedResourcesSummaryAsyncWithHttpInfo($request);
    }
    
    public function collectTrackedResourcesSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracked-resources/summary';
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CollectTrackedResourcesSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CollectTrackedResourcesSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源数量
     *
     * 查询当前帐号的资源数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countAllResourcesAsync($request)
    {
        return $this->countAllResourcesAsyncWithHttpInfo($request);
    }
    
    public function countAllResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/all-resources/count';
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
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CountAllResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CountAllResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源记录器收集的资源数量
     *
     * 查询当前用户资源记录器收集的资源数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countTrackedResourcesAsync($request)
    {
        return $this->countTrackedResourcesAsyncWithHttpInfo($request);
    }
    
    public function countTrackedResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracked-resources/count';
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
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CountTrackedResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CountTrackedResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 列举所有资源
     *
     * 返回当前用户下所有资源，需要当前用户有rms:resources:list权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllResourcesAsync($request)
    {
        return $this->listAllResourcesAsyncWithHttpInfo($request);
    }
    
    public function listAllResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/all-resources';
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
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListAllResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListAllResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源标签
     *
     * 查询当前帐号下所有资源的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllTagsAsync($request)
    {
        return $this->listAllTagsAsyncWithHttpInfo($request);
    }
    
    public function listAllTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/all-resources/tags';
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
        if ($localVarParams['key'] !== null) {
            $queryParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListAllTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListAllTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 列举云服务
     *
     * 查询Config支持的云服务、资源、区域列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProvidersAsync($request)
    {
        return $this->listProvidersAsyncWithHttpInfo($request);
    }
    
    public function listProvidersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/providers';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['track'] !== null) {
            $queryParams['track'] = $localVarParams['track'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListProvidersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListProvidersRequest',
            $asyncRequest = true);
    }

    /**
     * 列举指定类型的资源
     *
     * 返回当前租户下特定资源类型的资源，需要当前用户有rms:resources:list权限。比如查询云服务器，对应的Config资源类型是ecs.cloudservers，其中provider为ecs，type为cloudservers。 Config支持的服务和资源类型参见[支持的服务和区域](https://console.huaweicloud.com/eps/#/resources/supported)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourcesAsync($request)
    {
        return $this->listResourcesAsyncWithHttpInfo($request);
    }
    
    public function listResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/provider/{provider}/type/{type}/resources';
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
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['provider'] !== null) {
            $pathParams['provider'] = $localVarParams['provider'];
        }
        if ($localVarParams['type'] !== null) {
            $pathParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源记录器收集的资源标签
     *
     * 查询当前用户资源记录器收集的资源的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrackedResourceTagsAsync($request)
    {
        return $this->listTrackedResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function listTrackedResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracked-resources/tags';
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
        if ($localVarParams['key'] !== null) {
            $queryParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListTrackedResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListTrackedResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 列举资源记录器收集的全部资源
     *
     * 查询当前用户资源记录器收集的全部资源，需要当前用户有rms:resources:list权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrackedResourcesAsync($request)
    {
        return $this->listTrackedResourcesAsyncWithHttpInfo($request);
    }
    
    public function listTrackedResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracked-resources';
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
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ListTrackedResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ListTrackedResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个资源
     *
     * 指定资源ID，返回该资源的详细信息，需要当前用户有rms:resources:get权限。比如查询云服务器，对应的Config资源类型是ecs.cloudservers，其中provider为ecs，type为cloudservers。Config支持的服务和资源类型参见[支持的服务和区域](https://console.huaweicloud.com/eps/#/resources/supported)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceByIdAsync($request)
    {
        return $this->showResourceByIdAsyncWithHttpInfo($request);
    }
    
    public function showResourceByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/provider/{provider}/type/{type}/resources/{resource_id}';
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
        if ($localVarParams['provider'] !== null) {
            $pathParams['provider'] = $localVarParams['provider'];
        }
        if ($localVarParams['type'] !== null) {
            $pathParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询帐号下的单个资源
     *
     * 查询当前帐号下的单个资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceDetailAsync($request)
    {
        return $this->showResourceDetailAsyncWithHttpInfo($request);
    }
    
    public function showResourceDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/all-resources/{resource_id}';
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowResourceDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源记录器收集的单个资源
     *
     * 查询当前用户资源记录器收集的单个资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrackedResourceDetailAsync($request)
    {
        return $this->showTrackedResourceDetailAsyncWithHttpInfo($request);
    }
    
    public function showTrackedResourceDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracked-resources/{resource_id}';
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowTrackedResourceDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowTrackedResourceDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 创建或更新记录器
     *
     * 创建或更新资源记录器，只能存在一个资源记录器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrackerConfigAsync($request)
    {
        return $this->createTrackerConfigAsyncWithHttpInfo($request);
    }
    
    public function createTrackerConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracker-config';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\CreateTrackerConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\CreateTrackerConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 删除记录器
     *
     * 删除资源记录器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrackerConfigAsync($request)
    {
        return $this->deleteTrackerConfigAsyncWithHttpInfo($request);
    }
    
    public function deleteTrackerConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracker-config';
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\DeleteTrackerConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\DeleteTrackerConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询记录器
     *
     * 查询资源记录器的详细信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrackerConfigAsync($request)
    {
        return $this->showTrackerConfigAsyncWithHttpInfo($request);
    }
    
    public function showTrackerConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-manager/domains/{domain_id}/tracker-config';
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
            $responseType='\HuaweiCloud\SDK\Config\V1\Model\ShowTrackerConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Config\V1\Model\ShowTrackerConfigRequest',
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