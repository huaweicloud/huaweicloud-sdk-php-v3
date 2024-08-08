<?php

namespace HuaweiCloud\SDK\Cse\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CseClient extends Client
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
        $client = new ClientBuilder(new CseClient());
        return $client;
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
    public function createEngine($request)
    {
        return $this->createEngineWithHttpInfo($request);
    }

    public function createEngineWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateEngineRequest');
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
    public function createGovernancePolicy($request)
    {
        return $this->createGovernancePolicyWithHttpInfo($request);
    }

    public function createGovernancePolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams[$arr['xEnvironment']] = $localVarParams['xEnvironment'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateGovernancePolicyRequest');
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
    public function createMicroserviceRouteRule($request)
    {
        return $this->createMicroserviceRouteRuleWithHttpInfo($request);
    }

    public function createMicroserviceRouteRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateMicroserviceRouteRuleRequest');
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
    public function deleteEngine($request)
    {
        return $this->deleteEngineWithHttpInfo($request);
    }

    public function deleteEngineWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteEngineRequest');
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
    public function deleteGovernancePolicy($request)
    {
        return $this->deleteGovernancePolicyWithHttpInfo($request);
    }

    public function deleteGovernancePolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams[$arr['xEnvironment']] = $localVarParams['xEnvironment'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteGovernancePolicyRequest');
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
    public function deleteMicroserviceRouteRule($request)
    {
        return $this->deleteMicroserviceRouteRuleWithHttpInfo($request);
    }

    public function deleteMicroserviceRouteRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteMicroserviceRouteRuleRequest');
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
    public function downloadKie($request)
    {
        return $this->downloadKieWithHttpInfo($request);
    }

    public function downloadKieWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DownloadKieRequest');
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
    public function listEngines($request)
    {
        return $this->listEnginesWithHttpInfo($request);
    }

    public function listEnginesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListEnginesRequest');
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
    public function listFlavors($request)
    {
        return $this->listFlavorsWithHttpInfo($request);
    }

    public function listFlavorsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListFlavorsRequest');
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
    public function listGovernancePolicy($request)
    {
        return $this->listGovernancePolicyWithHttpInfo($request);
    }

    public function listGovernancePolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams[$arr['xEnvironment']] = $localVarParams['xEnvironment'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicyRequest');
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
    public function listGovernancePolicyByPolicyId($request)
    {
        return $this->listGovernancePolicyByPolicyIdWithHttpInfo($request);
    }

    public function listGovernancePolicyByPolicyIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams[$arr['xEnvironment']] = $localVarParams['xEnvironment'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicyByPolicyIdRequest');
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
    public function listGovernancePolicys($request)
    {
        return $this->listGovernancePolicysWithHttpInfo($request);
    }

    public function listGovernancePolicysWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListGovernancePolicysRequest');
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
    public function listMicroserviceRouteRule($request)
    {
        return $this->listMicroserviceRouteRuleWithHttpInfo($request);
    }

    public function listMicroserviceRouteRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListMicroserviceRouteRuleRequest');
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
    public function resizeEngine($request)
    {
        return $this->resizeEngineWithHttpInfo($request);
    }

    public function resizeEngineWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ResizeEngineRequest');
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
    public function retryEngine($request)
    {
        return $this->retryEngineWithHttpInfo($request);
    }

    public function retryEngineWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\RetryEngineRequest');
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
    public function showEngine($request)
    {
        return $this->showEngineWithHttpInfo($request);
    }

    public function showEngineWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineRequest');
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
    public function showEngineJob($request)
    {
        return $this->showEngineJobWithHttpInfo($request);
    }

    public function showEngineJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineJobRequest');
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
    public function showEngineQuotas($request)
    {
        return $this->showEngineQuotasWithHttpInfo($request);
    }

    public function showEngineQuotasWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowEngineQuotasRequest');
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
    public function updateGovernancePolicy($request)
    {
        return $this->updateGovernancePolicyWithHttpInfo($request);
    }

    public function updateGovernancePolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEnvironment'] !== null) {
            $headerParams[$arr['xEnvironment']] = $localVarParams['xEnvironment'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpdateGovernancePolicyRequest');
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
    public function upgradeEngine($request)
    {
        return $this->upgradeEngineWithHttpInfo($request);
    }

    public function upgradeEngineWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpgradeEngineRequest');
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
    public function upgradeEngineConfig($request)
    {
        return $this->upgradeEngineConfigWithHttpInfo($request);
    }

    public function upgradeEngineConfigWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpgradeEngineConfigRequest');
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
    public function uploadKie($request)
    {
        return $this->uploadKieWithHttpInfo($request);
    }

    public function uploadKieWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UploadKieRequest');
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
    public function createHttp2Rpc($request)
    {
        return $this->createHttp2RpcWithHttpInfo($request);
    }

    public function createHttp2RpcWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateHttp2RpcRequest');
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
    public function createPlugin($request)
    {
        return $this->createPluginWithHttpInfo($request);
    }

    public function createPluginWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreatePluginRequest');
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
    public function deleteHttp2Rpc($request)
    {
        return $this->deleteHttp2RpcWithHttpInfo($request);
    }

    public function deleteHttp2RpcWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['http2RpcId'] !== null) {
            $pathParams['http2Rpc_id'] = $localVarParams['http2RpcId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteHttp2RpcRequest');
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
    public function deletePlugin($request)
    {
        return $this->deletePluginWithHttpInfo($request);
    }

    public function deletePluginWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeletePluginRequest');
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
    public function modifyHttp2Rpc($request)
    {
        return $this->modifyHttp2RpcWithHttpInfo($request);
    }

    public function modifyHttp2RpcWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
        }
        if ($localVarParams['gatewayId'] !== null) {
            $pathParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['http2RpcId'] !== null) {
            $pathParams['http2Rpc_id'] = $localVarParams['http2RpcId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ModifyHttp2RpcRequest');
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
    public function modifyPlugin($request)
    {
        return $this->modifyPluginWithHttpInfo($request);
    }

    public function modifyPluginWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ModifyPluginRequest');
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
    public function showHttp2Rpcs($request)
    {
        return $this->showHttp2RpcsWithHttpInfo($request);
    }

    public function showHttp2RpcsWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowHttp2RpcsRequest');
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
    public function showPlugins($request)
    {
        return $this->showPluginsWithHttpInfo($request);
    }

    public function showPluginsWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowPluginsRequest');
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
    public function showSinglePlugin($request)
    {
        return $this->showSinglePluginWithHttpInfo($request);
    }

    public function showSinglePluginWithHttpInfo($request)
    {
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
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ShowSinglePluginRequest');
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
    public function createNacosNamespaces($request)
    {
        return $this->createNacosNamespacesWithHttpInfo($request);
    }

    public function createNacosNamespacesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\CreateNacosNamespacesRequest');
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
    public function deleteNacosNamespaces($request)
    {
        return $this->deleteNacosNamespacesWithHttpInfo($request);
    }

    public function deleteNacosNamespacesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\DeleteNacosNamespacesRequest');
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
    public function listNacosNamespaces($request)
    {
        return $this->listNacosNamespacesWithHttpInfo($request);
    }

    public function listNacosNamespacesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\ListNacosNamespacesRequest');
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
    public function updateNacosNamespaces($request)
    {
        return $this->updateNacosNamespacesWithHttpInfo($request);
    }

    public function updateNacosNamespacesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Cse\V1\Model\UpdateNacosNamespacesRequest');
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