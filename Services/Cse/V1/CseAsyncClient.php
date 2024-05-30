<?php

namespace HuaweiCloud\SDK\Cse\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CseAsyncClient extends Client
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
        return new ClientBuilder(new CseAsyncClient());
    }

    /**
     * 创建微服务引擎
     *
     * 创建微服务引擎，支持创建ServiceComb引擎专享版、注册配置中心、应用网关（公测）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEngineAsync($request)
    {
        return $this->createEngineAsyncWithHttpInfo($request);
    }
    
    public function createEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\CreateEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateEngineRequest',
            $asyncRequest = true);
    }

    /**
     * 创建治理策略
     *
     * 创建治理策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGovernancePolicyAsync($request)
    {
        return $this->createGovernancePolicyAsyncWithHttpInfo($request);
    }
    
    public function createGovernancePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/governance/{kind}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams['x_environment'] = $localVarParams['xEnvironment'];
        }
        if ($localVarParams['kind'] !== null) {
            $pathParams['kind'] = $localVarParams['kind'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\CreateGovernancePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateGovernancePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建灰度发布策略
     *
     * 创建灰度发布策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMicroserviceRouteRuleAsync($request)
    {
        return $this->createMicroserviceRouteRuleAsyncWithHttpInfo($request);
    }
    
    public function createMicroserviceRouteRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/route-rule/microservices/{service_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environment'] !== null) {
            $queryParams['environment'] = $localVarParams['environment'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['serviceName'] !== null) {
            $pathParams['service_name'] = $localVarParams['serviceName'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\CreateMicroserviceRouteRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateMicroserviceRouteRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除微服务引擎
     *
     * 删除微服务引擎。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEngineAsync($request)
    {
        return $this->deleteEngineAsyncWithHttpInfo($request);
    }
    
    public function deleteEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteEngineRequest',
            $asyncRequest = true);
    }

    /**
     * 删除治理策略
     *
     * 删除治理策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGovernancePolicyAsync($request)
    {
        return $this->deleteGovernancePolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteGovernancePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/governance/{kind}/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams['x_environment'] = $localVarParams['xEnvironment'];
        }
        if ($localVarParams['kind'] !== null) {
            $pathParams['kind'] = $localVarParams['kind'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteGovernancePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteGovernancePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除灰度发布策略
     *
     * 删除灰度发布策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMicroserviceRouteRuleAsync($request)
    {
        return $this->deleteMicroserviceRouteRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteMicroserviceRouteRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/route-rule/microservices/{service_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environment'] !== null) {
            $queryParams['environment'] = $localVarParams['environment'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['serviceName'] !== null) {
            $pathParams['service_name'] = $localVarParams['serviceName'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteMicroserviceRouteRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteMicroserviceRouteRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 导出kie配置
     *
     * 导出kie配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadKieAsync($request)
    {
        return $this->downloadKieAsyncWithHttpInfo($request);
    }
    
    public function downloadKieAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/kie/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['match'] !== null) {
            $queryParams['match'] = $localVarParams['match'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DownloadKieResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DownloadKieRequest',
            $asyncRequest = true);
    }

    /**
     * 查询微服务引擎列表
     *
     * 查询微服务引擎列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnginesAsync($request)
    {
        return $this->listEnginesAsyncWithHttpInfo($request);
    }
    
    public function listEnginesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListEnginesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListEnginesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询微服务引擎的规格列表
     *
     * 查询微服务引擎的规格列表。
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
        $resourcePath = '/v2/{project_id}/enginemgr/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specType'] !== null) {
            $queryParams['spec_type'] = $localVarParams['specType'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListFlavorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListFlavorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定类型治理策略列表
     *
     * 查询指定类型治理策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGovernancePolicyAsync($request)
    {
        return $this->listGovernancePolicyAsyncWithHttpInfo($request);
    }
    
    public function listGovernancePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/governance/{kind}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams['x_environment'] = $localVarParams['xEnvironment'];
        }
        if ($localVarParams['kind'] !== null) {
            $pathParams['kind'] = $localVarParams['kind'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询治理策略详情
     *
     * 查询治理策略详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGovernancePolicyByPolicyIdAsync($request)
    {
        return $this->listGovernancePolicyByPolicyIdAsyncWithHttpInfo($request);
    }
    
    public function listGovernancePolicyByPolicyIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/governance/{kind}/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams['x_environment'] = $localVarParams['xEnvironment'];
        }
        if ($localVarParams['kind'] !== null) {
            $pathParams['kind'] = $localVarParams['kind'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicyByPolicyIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicyByPolicyIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询治理策略列表
     *
     * 查询治理策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGovernancePolicysAsync($request)
    {
        return $this->listGovernancePolicysAsyncWithHttpInfo($request);
    }
    
    public function listGovernancePolicysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/governance/display';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environment'] !== null) {
            $queryParams['environment'] = $localVarParams['environment'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicysRequest',
            $asyncRequest = true);
    }

    /**
     * 查询微服务的灰度发布规则
     *
     * 查询微服务的灰度发布规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMicroserviceRouteRuleAsync($request)
    {
        return $this->listMicroserviceRouteRuleAsyncWithHttpInfo($request);
    }
    
    public function listMicroserviceRouteRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/route-rule/microservices/{service_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environment'] !== null) {
            $queryParams['environment'] = $localVarParams['environment'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['serviceName'] !== null) {
            $pathParams['service_name'] = $localVarParams['serviceName'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListMicroserviceRouteRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListMicroserviceRouteRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 变更微服务引擎规格
     *
     * 变更微服务引擎规格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeEngineAsync($request)
    {
        return $this->resizeEngineAsyncWithHttpInfo($request);
    }
    
    public function resizeEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}/resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ResizeEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ResizeEngineRequest',
            $asyncRequest = true);
    }

    /**
     * 对微服务引擎进行重试
     *
     * 对微服务引擎进行重试，当前支持ServiceComb专享版引擎
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryEngineAsync($request)
    {
        return $this->retryEngineAsyncWithHttpInfo($request);
    }
    
    public function retryEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\RetryEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\RetryEngineRequest',
            $asyncRequest = true);
    }

    /**
     * 查询微服务引擎详情
     *
     * 查询微服务引擎详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEngineAsync($request)
    {
        return $this->showEngineAsyncWithHttpInfo($request);
    }
    
    public function showEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineRequest',
            $asyncRequest = true);
    }

    /**
     * 查询微服务引擎任务详情
     *
     * 查询微服务引擎任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEngineJobAsync($request)
    {
        return $this->showEngineJobAsyncWithHttpInfo($request);
    }
    
    public function showEngineJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询微服务引擎配额
     *
     * 查询微服务引擎配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEngineQuotasAsync($request)
    {
        return $this->showEngineQuotasAsyncWithHttpInfo($request);
    }
    
    public function showEngineQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 修改治理策略
     *
     * 修改治理策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGovernancePolicyAsync($request)
    {
        return $this->updateGovernancePolicyAsyncWithHttpInfo($request);
    }
    
    public function updateGovernancePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/govern/governance/{kind}/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams['x_environment'] = $localVarParams['xEnvironment'];
        }
        if ($localVarParams['kind'] !== null) {
            $pathParams['kind'] = $localVarParams['kind'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\UpdateGovernancePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpdateGovernancePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 升级微服务引擎
     *
     * 升级微服务引擎
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeEngineAsync($request)
    {
        return $this->upgradeEngineAsyncWithHttpInfo($request);
    }
    
    public function upgradeEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\UpgradeEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpgradeEngineRequest',
            $asyncRequest = true);
    }

    /**
     * 更新微服务引擎配置
     *
     * 更新微服务引擎配置，更新ServiceComb专享版引擎与注册配置中心引擎的配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeEngineConfigAsync($request)
    {
        return $this->upgradeEngineConfigAsyncWithHttpInfo($request);
    }
    
    public function upgradeEngineConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\UpgradeEngineConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpgradeEngineConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 导入kie配置
     *
     * 导入kie配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadKieAsync($request)
    {
        return $this->uploadKieAsyncWithHttpInfo($request);
    }
    
    public function uploadKieAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/kie/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['override'] !== null) {
            $queryParams['override'] = $localVarParams['override'];
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\UploadKieResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UploadKieRequest',
            $asyncRequest = true);
    }

    /**
     * 创建http转rpc方法
     *
     * 创建http转rpc方法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHttp2RpcAsync($request)
    {
        return $this->createHttp2RpcAsyncWithHttpInfo($request);
    }
    
    public function createHttp2RpcAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/http2Rpcs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\CreateHttp2RpcResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateHttp2RpcRequest',
            $asyncRequest = true);
    }

    /**
     * 创建插件
     *
     * 创建插件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPluginAsync($request)
    {
        return $this->createPluginAsyncWithHttpInfo($request);
    }
    
    public function createPluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\CreatePluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreatePluginRequest',
            $asyncRequest = true);
    }

    /**
     * 删除http转rpc方法
     *
     * 删除http转rpc方法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHttp2RpcAsync($request)
    {
        return $this->deleteHttp2RpcAsyncWithHttpInfo($request);
    }
    
    public function deleteHttp2RpcAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/http2Rpcs/{http2Rpc_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['http2RpcId'] !== null) {
            $pathParams['http2_rpc_id'] = $localVarParams['http2RpcId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteHttp2RpcResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteHttp2RpcRequest',
            $asyncRequest = true);
    }

    /**
     * 删除插件
     *
     * 删除插件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePluginAsync($request)
    {
        return $this->deletePluginAsyncWithHttpInfo($request);
    }
    
    public function deletePluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/plugins/{plugin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DeletePluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeletePluginRequest',
            $asyncRequest = true);
    }

    /**
     * 修改http转rpc方法
     *
     * 修改http转rpc方法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyHttp2RpcAsync($request)
    {
        return $this->modifyHttp2RpcAsyncWithHttpInfo($request);
    }
    
    public function modifyHttp2RpcAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/http2Rpcs/{http2Rpc_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['http2RpcId'] !== null) {
            $pathParams['http2_rpc_id'] = $localVarParams['http2RpcId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ModifyHttp2RpcResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ModifyHttp2RpcRequest',
            $asyncRequest = true);
    }

    /**
     * 修改插件
     *
     * 修改插件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyPluginAsync($request)
    {
        return $this->modifyPluginAsyncWithHttpInfo($request);
    }
    
    public function modifyPluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/plugins/{plugin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ModifyPluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ModifyPluginRequest',
            $asyncRequest = true);
    }

    /**
     * 查询http2rpc资源列表
     *
     * 查询http转rpc资源列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHttp2RpcsAsync($request)
    {
        return $this->showHttp2RpcsAsyncWithHttpInfo($request);
    }
    
    public function showHttp2RpcsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/http2Rpcs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ShowHttp2RpcsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowHttp2RpcsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询插件列表
     *
     * 查询插件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginsAsync($request)
    {
        return $this->showPluginsAsyncWithHttpInfo($request);
    }
    
    public function showPluginsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ShowPluginsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowPluginsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个插件
     *
     * 查询单个插件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSinglePluginAsync($request)
    {
        return $this->showSinglePluginAsyncWithHttpInfo($request);
    }
    
    public function showSinglePluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/enginemgr/gateways/{gateway_id}/plugins/{plugin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ShowSinglePluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowSinglePluginRequest',
            $asyncRequest = true);
    }

    /**
     * 创建nacos命名空间
     *
     * 创建nacos命名空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNacosNamespacesAsync($request)
    {
        return $this->createNacosNamespacesAsyncWithHttpInfo($request);
    }
    
    public function createNacosNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/nacos/v1/console/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['customNamespaceId'] !== null) {
            $queryParams['custom_namespace_id'] = $localVarParams['customNamespaceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['namespaceDesc'] !== null) {
            $queryParams['namespace_desc'] = $localVarParams['namespaceDesc'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\CreateNacosNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateNacosNamespacesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除nacos命名空间
     *
     * 删除nacos命名空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNacosNamespacesAsync($request)
    {
        return $this->deleteNacosNamespacesAsyncWithHttpInfo($request);
    }
    
    public function deleteNacosNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/nacos/v1/console/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespaceId'] !== null) {
            $queryParams['namespace_id'] = $localVarParams['namespaceId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteNacosNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteNacosNamespacesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询nacos命名空间
     *
     * 查询nacos命名空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNacosNamespacesAsync($request)
    {
        return $this->listNacosNamespacesAsyncWithHttpInfo($request);
    }
    
    public function listNacosNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/nacos/v1/console/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\ListNacosNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListNacosNamespacesRequest',
            $asyncRequest = true);
    }

    /**
     * 更新nacos命名空间
     *
     * 更新nacos命名空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNacosNamespacesAsync($request)
    {
        return $this->updateNacosNamespacesAsyncWithHttpInfo($request);
    }
    
    public function updateNacosNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/nacos/v1/console/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['namespaceShowName'] !== null) {
            $queryParams['namespace_show_name'] = $localVarParams['namespaceShowName'];
        }
        if ($localVarParams['namespaceDesc'] !== null) {
            $queryParams['namespace_desc'] = $localVarParams['namespaceDesc'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams['x_engine_id'] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams['x_enterprise_project_id'] = $localVarParams['xEnterpriseProjectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cse\V1\Model\UpdateNacosNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpdateNacosNamespacesRequest',
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