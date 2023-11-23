<?php

namespace HuaweiCloud\SDK\Vpc\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class VpcClient extends Client
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
        return new ClientBuilder(new VpcClient());
    }


    /**
     * 端口插入安全组
     *
     * 端口插入安全组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSecurityGroups($request)
    {
        return $this->addSecurityGroupsWithHttpInfo($request);
    }

    public function addSecurityGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/ports/{port_id}/insert-security-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['portId'] !== null) {
            $pathParams['port_id'] = $localVarParams['portId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\AddSecurityGroupsResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\AddSecurityGroupsRequest');
    }

    /**
     * 流量镜像会话添加镜像源
     *
     * 流量镜像会话添加镜像源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSourcesToTrafficMirrorSession($request)
    {
        return $this->addSourcesToTrafficMirrorSessionWithHttpInfo($request);
    }

    public function addSourcesToTrafficMirrorSessionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions/{traffic_mirror_session_id}/add-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorSessionId'] !== null) {
            $pathParams['traffic_mirror_session_id'] = $localVarParams['trafficMirrorSessionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\AddSourcesToTrafficMirrorSessionResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\AddSourcesToTrafficMirrorSessionRequest');
    }

    /**
     * 批量创建安全组规则
     *
     * 在特定安全组下批量创建安全组规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateSecurityGroupRules($request)
    {
        return $this->batchCreateSecurityGroupRulesWithHttpInfo($request);
    }

    public function batchCreateSecurityGroupRulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-groups/{security_group_id}/security-group-rules/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['securityGroupId'] !== null) {
            $pathParams['security_group_id'] = $localVarParams['securityGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSecurityGroupRulesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSecurityGroupRulesRequest');
    }

    /**
     * 批量创建辅助弹性网卡
     *
     * 批量创建辅助弹性网卡
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateSubNetworkInterface($request)
    {
        return $this->batchCreateSubNetworkInterfaceWithHttpInfo($request);
    }

    public function batchCreateSubNetworkInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSubNetworkInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSubNetworkInterfaceRequest');
    }

    /**
     * 创建安全组
     *
     * 创建安全组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityGroup($request)
    {
        return $this->createSecurityGroupWithHttpInfo($request);
    }

    public function createSecurityGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateSecurityGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateSecurityGroupRequest');
    }

    /**
     * 创建安全组规则
     *
     * 创建安全组规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityGroupRule($request)
    {
        return $this->createSecurityGroupRuleWithHttpInfo($request);
    }

    public function createSecurityGroupRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-group-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateSecurityGroupRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateSecurityGroupRuleRequest');
    }

    /**
     * 创建辅助弹性网卡
     *
     * 创建辅助弹性网卡
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubNetworkInterface($request)
    {
        return $this->createSubNetworkInterfaceWithHttpInfo($request);
    }

    public function createSubNetworkInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateSubNetworkInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateSubNetworkInterfaceRequest');
    }

    /**
     * 创建流量镜像筛选条件
     *
     * 创建流量镜像筛选条件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrafficMirrorFilter($request)
    {
        return $this->createTrafficMirrorFilterWithHttpInfo($request);
    }

    public function createTrafficMirrorFilterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateTrafficMirrorFilterResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateTrafficMirrorFilterRequest');
    }

    /**
     * 创建流量镜像筛选规则
     *
     * 创建流量镜像筛选规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrafficMirrorFilterRule($request)
    {
        return $this->createTrafficMirrorFilterRuleWithHttpInfo($request);
    }

    public function createTrafficMirrorFilterRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filter-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateTrafficMirrorFilterRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateTrafficMirrorFilterRuleRequest');
    }

    /**
     * 创建流量镜像会话
     *
     * 创建流量镜像会话
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrafficMirrorSession($request)
    {
        return $this->createTrafficMirrorSessionWithHttpInfo($request);
    }

    public function createTrafficMirrorSessionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateTrafficMirrorSessionResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateTrafficMirrorSessionRequest');
    }

    /**
     * 删除安全组
     *
     * 删除安全组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityGroup($request)
    {
        return $this->deleteSecurityGroupWithHttpInfo($request);
    }

    public function deleteSecurityGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-groups/{security_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['securityGroupId'] !== null) {
            $pathParams['security_group_id'] = $localVarParams['securityGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteSecurityGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteSecurityGroupRequest');
    }

    /**
     * 删除安全组规则
     *
     * 删除安全组规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityGroupRule($request)
    {
        return $this->deleteSecurityGroupRuleWithHttpInfo($request);
    }

    public function deleteSecurityGroupRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-group-rules/{security_group_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['securityGroupRuleId'] !== null) {
            $pathParams['security_group_rule_id'] = $localVarParams['securityGroupRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteSecurityGroupRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteSecurityGroupRuleRequest');
    }

    /**
     * 删除辅助弹性网卡
     *
     * 删除辅助弹性网卡
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubNetworkInterface($request)
    {
        return $this->deleteSubNetworkInterfaceWithHttpInfo($request);
    }

    public function deleteSubNetworkInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces/{sub_network_interface_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['subNetworkInterfaceId'] !== null) {
            $pathParams['sub_network_interface_id'] = $localVarParams['subNetworkInterfaceId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteSubNetworkInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteSubNetworkInterfaceRequest');
    }

    /**
     * 删除流量镜像筛选条件
     *
     * 删除流量镜像筛选条件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrafficMirrorFilter($request)
    {
        return $this->deleteTrafficMirrorFilterWithHttpInfo($request);
    }

    public function deleteTrafficMirrorFilterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filters/{traffic_mirror_filter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorFilterId'] !== null) {
            $pathParams['traffic_mirror_filter_id'] = $localVarParams['trafficMirrorFilterId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteTrafficMirrorFilterResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteTrafficMirrorFilterRequest');
    }

    /**
     * 删除流量镜像筛选规则
     *
     * 删除流量镜像筛选规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrafficMirrorFilterRule($request)
    {
        return $this->deleteTrafficMirrorFilterRuleWithHttpInfo($request);
    }

    public function deleteTrafficMirrorFilterRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filter-rules/{traffic_mirror_filter_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorFilterRuleId'] !== null) {
            $pathParams['traffic_mirror_filter_rule_id'] = $localVarParams['trafficMirrorFilterRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteTrafficMirrorFilterRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteTrafficMirrorFilterRuleRequest');
    }

    /**
     * 删除流量镜像会话
     *
     * 删除流量镜像会话
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrafficMirrorSession($request)
    {
        return $this->deleteTrafficMirrorSessionWithHttpInfo($request);
    }

    public function deleteTrafficMirrorSessionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions/{traffic_mirror_session_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorSessionId'] !== null) {
            $pathParams['traffic_mirror_session_id'] = $localVarParams['trafficMirrorSessionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteTrafficMirrorSessionResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteTrafficMirrorSessionRequest');
    }

    /**
     * 查询安全组规则列表
     *
     * 查询安全组规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityGroupRules($request)
    {
        return $this->listSecurityGroupRulesWithHttpInfo($request);
    }

    public function listSecurityGroupRulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-group-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['securityGroupId'] !== null) {
            $queryParams['security_group_id'] = $localVarParams['securityGroupId'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['remoteGroupId'] !== null) {
            $queryParams['remote_group_id'] = $localVarParams['remoteGroupId'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['remoteIpPrefix'] !== null) {
            $queryParams['remote_ip_prefix'] = $localVarParams['remoteIpPrefix'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListSecurityGroupRulesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListSecurityGroupRulesRequest');
    }

    /**
     * 查询安全组列表
     *
     * 查询某租户下的安全组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityGroups($request)
    {
        return $this->listSecurityGroupsWithHttpInfo($request);
    }

    public function listSecurityGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListSecurityGroupsResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListSecurityGroupsRequest');
    }

    /**
     * 查询租户下辅助弹性网卡列表
     *
     * 查询辅助弹性网卡列表，单次查询最多返回2000条数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubNetworkInterfaces($request)
    {
        return $this->listSubNetworkInterfacesWithHttpInfo($request);
    }

    public function listSubNetworkInterfacesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['virsubnetId'] !== null) {
            $queryParams['virsubnet_id'] = $localVarParams['virsubnetId'];
        }
        if ($localVarParams['privateIpAddress'] !== null) {
            $queryParams['private_ip_address'] = $localVarParams['privateIpAddress'];
        }
        if ($localVarParams['macAddress'] !== null) {
            $queryParams['mac_address'] = $localVarParams['macAddress'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListSubNetworkInterfacesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListSubNetworkInterfacesRequest');
    }

    /**
     * 查询流量镜像筛选规则列表
     *
     * 查询流量镜像筛选规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrafficMirrorFilterRules($request)
    {
        return $this->listTrafficMirrorFilterRulesWithHttpInfo($request);
    }

    public function listTrafficMirrorFilterRulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filter-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['trafficMirrorFilterId'] !== null) {
            $queryParams['traffic_mirror_filter_id'] = $localVarParams['trafficMirrorFilterId'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['sourceCidrBlock'] !== null) {
            $queryParams['source_cidr_block'] = $localVarParams['sourceCidrBlock'];
        }
        if ($localVarParams['destinationCidrBlock'] !== null) {
            $queryParams['destination_cidr_block'] = $localVarParams['destinationCidrBlock'];
        }
        if ($localVarParams['sourcePortRange'] !== null) {
            $queryParams['source_port_range'] = $localVarParams['sourcePortRange'];
        }
        if ($localVarParams['destinationPortRange'] !== null) {
            $queryParams['destination_port_range'] = $localVarParams['destinationPortRange'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['priority'] !== null) {
            $queryParams['priority'] = $localVarParams['priority'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListTrafficMirrorFilterRulesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListTrafficMirrorFilterRulesRequest');
    }

    /**
     * 查询流量镜像筛选条件列表
     *
     * 查询流量镜像筛选条件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrafficMirrorFilters($request)
    {
        return $this->listTrafficMirrorFiltersWithHttpInfo($request);
    }

    public function listTrafficMirrorFiltersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['createdAt'] !== null) {
            $queryParams['created_at'] = $localVarParams['createdAt'];
        }
        if ($localVarParams['updatedAt'] !== null) {
            $queryParams['updated_at'] = $localVarParams['updatedAt'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListTrafficMirrorFiltersResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListTrafficMirrorFiltersRequest');
    }

    /**
     * 查询流量镜像会话列表
     *
     * 查询流量镜像会话列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrafficMirrorSessions($request)
    {
        return $this->listTrafficMirrorSessionsWithHttpInfo($request);
    }

    public function listTrafficMirrorSessionsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['trafficMirrorFilterId'] !== null) {
            $queryParams['traffic_mirror_filter_id'] = $localVarParams['trafficMirrorFilterId'];
        }
        if ($localVarParams['trafficMirrorTargetId'] !== null) {
            $queryParams['traffic_mirror_target_id'] = $localVarParams['trafficMirrorTargetId'];
        }
        if ($localVarParams['trafficMirrorTargetType'] !== null) {
            $queryParams['traffic_mirror_target_type'] = $localVarParams['trafficMirrorTargetType'];
        }
        if ($localVarParams['virtualNetworkId'] !== null) {
            $queryParams['virtual_network_id'] = $localVarParams['virtualNetworkId'];
        }
        if ($localVarParams['packetLength'] !== null) {
            $queryParams['packet_length'] = $localVarParams['packetLength'];
        }
        if ($localVarParams['priority'] !== null) {
            $queryParams['priority'] = $localVarParams['priority'];
        }
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['createdAt'] !== null) {
            $queryParams['created_at'] = $localVarParams['createdAt'];
        }
        if ($localVarParams['updatedAt'] !== null) {
            $queryParams['updated_at'] = $localVarParams['updatedAt'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListTrafficMirrorSessionsResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListTrafficMirrorSessionsRequest');
    }

    /**
     * 迁移辅助弹性网卡
     *
     * 批量迁移辅助弹性网卡
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function migrateSubNetworkInterface($request)
    {
        return $this->migrateSubNetworkInterfaceWithHttpInfo($request);
    }

    public function migrateSubNetworkInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces/migrate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\MigrateSubNetworkInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\MigrateSubNetworkInterfaceRequest');
    }

    /**
     * 端口移除安全组
     *
     * 端口移除安全组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeSecurityGroups($request)
    {
        return $this->removeSecurityGroupsWithHttpInfo($request);
    }

    public function removeSecurityGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/ports/{port_id}/remove-security-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['portId'] !== null) {
            $pathParams['port_id'] = $localVarParams['portId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveSecurityGroupsResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveSecurityGroupsRequest');
    }

    /**
     * 流量镜像会话移除镜像源
     *
     * 流量镜像会话移除镜像源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeSourcesFromTrafficMirrorSession($request)
    {
        return $this->removeSourcesFromTrafficMirrorSessionWithHttpInfo($request);
    }

    public function removeSourcesFromTrafficMirrorSessionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions/{traffic_mirror_session_id}/remove-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorSessionId'] !== null) {
            $pathParams['traffic_mirror_session_id'] = $localVarParams['trafficMirrorSessionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveSourcesFromTrafficMirrorSessionResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveSourcesFromTrafficMirrorSessionRequest');
    }

    /**
     * 查询安全组
     *
     * 查询单个安全组详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityGroup($request)
    {
        return $this->showSecurityGroupWithHttpInfo($request);
    }

    public function showSecurityGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-groups/{security_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['securityGroupId'] !== null) {
            $pathParams['security_group_id'] = $localVarParams['securityGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSecurityGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSecurityGroupRequest');
    }

    /**
     * 查询安全组规则
     *
     * 查询单个安全组规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityGroupRule($request)
    {
        return $this->showSecurityGroupRuleWithHttpInfo($request);
    }

    public function showSecurityGroupRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-group-rules/{security_group_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['securityGroupRuleId'] !== null) {
            $pathParams['security_group_rule_id'] = $localVarParams['securityGroupRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSecurityGroupRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSecurityGroupRuleRequest');
    }

    /**
     * 查询租户下辅助弹性网卡
     *
     * 查询辅助弹性网卡详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSubNetworkInterface($request)
    {
        return $this->showSubNetworkInterfaceWithHttpInfo($request);
    }

    public function showSubNetworkInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces/{sub_network_interface_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['subNetworkInterfaceId'] !== null) {
            $pathParams['sub_network_interface_id'] = $localVarParams['subNetworkInterfaceId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSubNetworkInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSubNetworkInterfaceRequest');
    }

    /**
     * 查询租户下辅助弹性网卡数目
     *
     * 查询辅助弹性网卡数目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSubNetworkInterfacesQuantity($request)
    {
        return $this->showSubNetworkInterfacesQuantityWithHttpInfo($request);
    }

    public function showSubNetworkInterfacesQuantityWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSubNetworkInterfacesQuantityResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowSubNetworkInterfacesQuantityRequest');
    }

    /**
     * 查询流量镜像筛选条件详情
     *
     * 查询流量镜像筛选条件详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrafficMirrorFilter($request)
    {
        return $this->showTrafficMirrorFilterWithHttpInfo($request);
    }

    public function showTrafficMirrorFilterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filters/{traffic_mirror_filter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorFilterId'] !== null) {
            $pathParams['traffic_mirror_filter_id'] = $localVarParams['trafficMirrorFilterId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowTrafficMirrorFilterResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowTrafficMirrorFilterRequest');
    }

    /**
     * 查询流量镜像筛选规则详情
     *
     * 查询流量镜像筛选规则详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrafficMirrorFilterRule($request)
    {
        return $this->showTrafficMirrorFilterRuleWithHttpInfo($request);
    }

    public function showTrafficMirrorFilterRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filter-rules/{traffic_mirror_filter_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorFilterRuleId'] !== null) {
            $pathParams['traffic_mirror_filter_rule_id'] = $localVarParams['trafficMirrorFilterRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowTrafficMirrorFilterRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowTrafficMirrorFilterRuleRequest');
    }

    /**
     * 查询流量镜像会话详情
     *
     * 查询流量镜像会话详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrafficMirrorSession($request)
    {
        return $this->showTrafficMirrorSessionWithHttpInfo($request);
    }

    public function showTrafficMirrorSessionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions/{traffic_mirror_session_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorSessionId'] !== null) {
            $pathParams['traffic_mirror_session_id'] = $localVarParams['trafficMirrorSessionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowTrafficMirrorSessionResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowTrafficMirrorSessionRequest');
    }

    /**
     * 更新安全组
     *
     * 更新安全组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityGroup($request)
    {
        return $this->updateSecurityGroupWithHttpInfo($request);
    }

    public function updateSecurityGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/security-groups/{security_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['securityGroupId'] !== null) {
            $pathParams['security_group_id'] = $localVarParams['securityGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateSecurityGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateSecurityGroupRequest');
    }

    /**
     * 更新辅助弹性网卡
     *
     * 更新辅助弹性网卡
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubNetworkInterface($request)
    {
        return $this->updateSubNetworkInterfaceWithHttpInfo($request);
    }

    public function updateSubNetworkInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/sub-network-interfaces/{sub_network_interface_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['subNetworkInterfaceId'] !== null) {
            $pathParams['sub_network_interface_id'] = $localVarParams['subNetworkInterfaceId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateSubNetworkInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateSubNetworkInterfaceRequest');
    }

    /**
     * 更新流量镜像筛选条件
     *
     * 更新流量镜像筛选条件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTrafficMirrorFilter($request)
    {
        return $this->updateTrafficMirrorFilterWithHttpInfo($request);
    }

    public function updateTrafficMirrorFilterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filters/{traffic_mirror_filter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorFilterId'] !== null) {
            $pathParams['traffic_mirror_filter_id'] = $localVarParams['trafficMirrorFilterId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateTrafficMirrorFilterResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateTrafficMirrorFilterRequest');
    }

    /**
     * 更新流量镜像筛选规则
     *
     * 更新流量镜像筛选规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTrafficMirrorFilterRule($request)
    {
        return $this->updateTrafficMirrorFilterRuleWithHttpInfo($request);
    }

    public function updateTrafficMirrorFilterRuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-filter-rules/{traffic_mirror_filter_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorFilterRuleId'] !== null) {
            $pathParams['traffic_mirror_filter_rule_id'] = $localVarParams['trafficMirrorFilterRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateTrafficMirrorFilterRuleResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateTrafficMirrorFilterRuleRequest');
    }

    /**
     * 更新流量镜像会话
     *
     * 更新流量镜像会话
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTrafficMirrorSession($request)
    {
        return $this->updateTrafficMirrorSessionWithHttpInfo($request);
    }

    public function updateTrafficMirrorSessionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/traffic-mirror-sessions/{traffic_mirror_session_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['trafficMirrorSessionId'] !== null) {
            $pathParams['traffic_mirror_session_id'] = $localVarParams['trafficMirrorSessionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateTrafficMirrorSessionResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateTrafficMirrorSessionRequest');
    }

    /**
     * 网络ACL插入规则
     *
     * 网络ACL插入规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFirewallRules($request)
    {
        return $this->addFirewallRulesWithHttpInfo($request);
    }

    public function addFirewallRulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}/insert-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\AddFirewallRulesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\AddFirewallRulesRequest');
    }

    /**
     * 网络ACL绑定子网
     *
     * 网络ACL绑定子网
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateSubnetFirewall($request)
    {
        return $this->associateSubnetFirewallWithHttpInfo($request);
    }

    public function associateSubnetFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}/associate-subnets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\AssociateSubnetFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\AssociateSubnetFirewallRequest');
    }

    /**
     * 创建网络ACL
     *
     * 创建网络ACL
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFirewall($request)
    {
        return $this->createFirewallWithHttpInfo($request);
    }

    public function createFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateFirewallRequest');
    }

    /**
     * 删除网络ACL
     *
     * 删除网络ACL
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFirewall($request)
    {
        return $this->deleteFirewallWithHttpInfo($request);
    }

    public function deleteFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteFirewallRequest');
    }

    /**
     * 网络ACL解绑子网
     *
     * 网络ACL解绑子网
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateSubnetFirewall($request)
    {
        return $this->disassociateSubnetFirewallWithHttpInfo($request);
    }

    public function disassociateSubnetFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}/disassociate-subnets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DisassociateSubnetFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DisassociateSubnetFirewallRequest');
    }

    /**
     * 查询网络ACL列表
     *
     * 查询网络ACL列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFirewall($request)
    {
        return $this->listFirewallWithHttpInfo($request);
    }

    public function listFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListFirewallRequest');
    }

    /**
     * 网络ACL移除规则
     *
     * 网络ACL移除规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeFirewallRules($request)
    {
        return $this->removeFirewallRulesWithHttpInfo($request);
    }

    public function removeFirewallRulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}/remove-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveFirewallRulesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveFirewallRulesRequest');
    }

    /**
     * 查询网络ACL详情
     *
     * 查询网络ACL详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFirewall($request)
    {
        return $this->showFirewallWithHttpInfo($request);
    }

    public function showFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowFirewallRequest');
    }

    /**
     * 更新网络ACL
     *
     * 更新网络ACL
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFirewall($request)
    {
        return $this->updateFirewallWithHttpInfo($request);
    }

    public function updateFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateFirewallRequest');
    }

    /**
     * 网络ACL更新规则
     *
     * 网络ACL更新规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFirewallRules($request)
    {
        return $this->updateFirewallRulesWithHttpInfo($request);
    }

    public function updateFirewallRulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/firewalls/{firewall_id}/update-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['firewallId'] !== null) {
            $pathParams['firewall_id'] = $localVarParams['firewallId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateFirewallRulesResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateFirewallRulesRequest');
    }

    /**
     * 创建地址组
     *
     * 创建地址组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAddressGroup($request)
    {
        return $this->createAddressGroupWithHttpInfo($request);
    }

    public function createAddressGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/address-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateAddressGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateAddressGroupRequest');
    }

    /**
     * 删除地址组
     *
     * 删除地址组，非强制删除，删除前请确保未被其他资源引用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAddressGroup($request)
    {
        return $this->deleteAddressGroupWithHttpInfo($request);
    }

    public function deleteAddressGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/address-groups/{address_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['addressGroupId'] !== null) {
            $pathParams['address_group_id'] = $localVarParams['addressGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteAddressGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteAddressGroupRequest');
    }

    /**
     * 强制删除地址组
     *
     * 强制删除地址组，删除的地址组与安全组规则关联时，会删除地址组与关联的安全组规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIpAddressGroupForce($request)
    {
        return $this->deleteIpAddressGroupForceWithHttpInfo($request);
    }

    public function deleteIpAddressGroupForceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/address-groups/{address_group_id}/force';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['addressGroupId'] !== null) {
            $pathParams['address_group_id'] = $localVarParams['addressGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteIpAddressGroupForceResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteIpAddressGroupForceRequest');
    }

    /**
     * 查询地址组列表
     *
     * 查询地址组列表，根据过滤条件进行过滤。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressGroup($request)
    {
        return $this->listAddressGroupWithHttpInfo($request);
    }

    public function listAddressGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/address-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListAddressGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListAddressGroupRequest');
    }

    /**
     * 查询地址组
     *
     * 查询地址组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAddressGroup($request)
    {
        return $this->showAddressGroupWithHttpInfo($request);
    }

    public function showAddressGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/address-groups/{address_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['addressGroupId'] !== null) {
            $pathParams['address_group_id'] = $localVarParams['addressGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowAddressGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowAddressGroupRequest');
    }

    /**
     * 更新地址组
     *
     * 更新地址组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAddressGroup($request)
    {
        return $this->updateAddressGroupWithHttpInfo($request);
    }

    public function updateAddressGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/address-groups/{address_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['addressGroupId'] !== null) {
            $pathParams['address_group_id'] = $localVarParams['addressGroupId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateAddressGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateAddressGroupRequest');
    }

    /**
     * 添加VPC扩展网段
     *
     * 添加VPC的扩展网段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addVpcExtendCidr($request)
    {
        return $this->addVpcExtendCidrWithHttpInfo($request);
    }

    public function addVpcExtendCidrWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs/{vpc_id}/add-extend-cidr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $pathParams['vpc_id'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\AddVpcExtendCidrResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\AddVpcExtendCidrRequest');
    }

    /**
     * 创建VPC
     *
     * 创建虚拟私有云
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpc($request)
    {
        return $this->createVpcWithHttpInfo($request);
    }

    public function createVpcWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateVpcResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\CreateVpcRequest');
    }

    /**
     * 删除VPC
     *
     * 删除VPC
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpc($request)
    {
        return $this->deleteVpcWithHttpInfo($request);
    }

    public function deleteVpcWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs/{vpc_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $pathParams['vpc_id'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteVpcResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\DeleteVpcRequest');
    }

    /**
     * 查询VPC列表
     *
     * 查询vpc列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpcs($request)
    {
        return $this->listVpcsWithHttpInfo($request);
    }

    public function listVpcsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['cidr'] !== null) {
            $queryParams['cidr'] = $localVarParams['cidr'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ListVpcsResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ListVpcsRequest');
    }

    /**
     * 移除VPC扩展网段
     *
     * 移除VPC扩展网段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeVpcExtendCidr($request)
    {
        return $this->removeVpcExtendCidrWithHttpInfo($request);
    }

    public function removeVpcExtendCidrWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs/{vpc_id}/remove-extend-cidr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $pathParams['vpc_id'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveVpcExtendCidrResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\RemoveVpcExtendCidrRequest');
    }

    /**
     * 查询VPC详情
     *
     * 查询vpc详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpc($request)
    {
        return $this->showVpcWithHttpInfo($request);
    }

    public function showVpcWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs/{vpc_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $pathParams['vpc_id'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowVpcResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\ShowVpcRequest');
    }

    /**
     * 更新VPC
     *
     * 更新vpc
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpc($request)
    {
        return $this->updateVpcWithHttpInfo($request);
    }

    public function updateVpcWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/vpc/vpcs/{vpc_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $pathParams['vpc_id'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateVpcResponse',
            $requestType='\HuaweiCloud\SDK\Vpc\V3\Model\UpdateVpcRequest');
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