<?php

namespace HuaweiCloud\SDK\Ucs\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class UcsClient extends Client
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
        $client = new ClientBuilder(new UcsClient(), "GlobalCredentials");
        return $client;
    }


    /**
     * 安装插件实例
     *
     * 安装插件实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAddonInstance($request)
    {
        return $this->createAddonInstanceWithHttpInfo($request);
    }

    public function createAddonInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/addons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateAddonInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateAddonInstanceRequest');
    }

    /**
     * 创建舰队策略实例
     *
     * 创建舰队策略实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterGroupPolicyInstance($request)
    {
        return $this->createClusterGroupPolicyInstanceWithHttpInfo($request);
    }

    public function createClusterGroupPolicyInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/policyinstance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterGroupPolicyInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterGroupPolicyInstanceRequest');
    }

    /**
     * 创建配置集合
     *
     * 创建配置集合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConfigSet($request)
    {
        return $this->createConfigSetWithHttpInfo($request);
    }

    public function createConfigSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateConfigSetResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateConfigSetRequest');
    }

    /**
     * 创建联邦网络连接并下载联邦kubeconfig
     *
     * 舰队开通联邦后，调用此接口，创建vpcep终端节点，连接到联邦apiserver，并下载联邦apiserver的kubeconfig
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFederationCert($request)
    {
        return $this->createFederationCertWithHttpInfo($request);
    }

    public function createFederationCertWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/cert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateFederationCertResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateFederationCertRequest');
    }

    /**
     * 创建联邦网络连接
     *
     * 舰队开通联邦后，创建vpcep终端节点连接到联邦apiserver
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFederationConnection($request)
    {
        return $this->createFederationConnectionWithHttpInfo($request);
    }

    public function createFederationConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateFederationConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateFederationConnectionRequest');
    }

    /**
     * 创建联邦工作负载
     *
     * 创建联邦工作负载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProxyUnitedWorkload($request)
    {
        return $this->createProxyUnitedWorkloadWithHttpInfo($request);
    }

    public function createProxyUnitedWorkloadWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/unitedworkload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateProxyUnitedWorkloadResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateProxyUnitedWorkloadRequest');
    }

    /**
     * 创建域名解析记录集
     *
     * 创建域名解析记录集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecordSet($request)
    {
        return $this->createRecordSetWithHttpInfo($request);
    }

    public function createRecordSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/traffic/recordsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xZoneProjectId'] !== null) {
            $headerParams[$arr['xZoneProjectId']] = $localVarParams['xZoneProjectId'];
        }
        if ($localVarParams['xZoneId'] !== null) {
            $headerParams[$arr['xZoneId']] = $localVarParams['xZoneId'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRecordSetResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRecordSetRequest');
    }

    /**
     * 创建仓库源
     *
     * 创建仓库源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepo($request)
    {
        return $this->createRepoWithHttpInfo($request);
    }

    public function createRepoWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/repos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRepoResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRepoRequest');
    }

    /**
     * 创建权限策略
     *
     * 创建权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRule($request)
    {
        return $this->createRuleWithHttpInfo($request);
    }

    public function createRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/permissions/rules';
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
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRuleResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRuleRequest');
    }

    /**
     * 卸载插件实例
     *
     * 卸载插件实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAddonInstance($request)
    {
        return $this->deleteAddonInstanceWithHttpInfo($request);
    }

    public function deleteAddonInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/addons/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteAddonInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteAddonInstanceRequest');
    }

    /**
     * 删除容器舰队
     *
     * 容器舰队删除接口，只有在容器舰队为空时才可以删除该容器舰队，若需删除请先将集群移出容器舰队；传入的cluster ID必须符合k8s UUID的格式规则；同时需要用户有对应集群的操作权限，否则会鉴权失败
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterGroup($request)
    {
        return $this->deleteClusterGroupWithHttpInfo($request);
    }

    public function deleteClusterGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteClusterGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteClusterGroupRequest');
    }

    /**
     * 删除配置集合
     *
     * 仅删除配置集合，不删除仓库源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConfigSet($request)
    {
        return $this->deleteConfigSetWithHttpInfo($request);
    }

    public function deleteConfigSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/{configsetid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['configsetid'] !== null) {
            $pathParams['configsetid'] = $localVarParams['configsetid'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteConfigSetResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteConfigSetRequest');
    }

    /**
     * 删除指定策略实例
     *
     * 删除指定策略实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePolicyInstance($request)
    {
        return $this->deletePolicyInstanceWithHttpInfo($request);
    }

    public function deletePolicyInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/policyinstances/{policyinstanceid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyinstanceid'] !== null) {
            $pathParams['policyinstanceid'] = $localVarParams['policyinstanceid'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeletePolicyInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeletePolicyInstanceRequest');
    }

    /**
     * 删除联邦工作负载
     *
     * 删除联邦工作负载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProxyUnitedWorkload($request)
    {
        return $this->deleteProxyUnitedWorkloadWithHttpInfo($request);
    }

    public function deleteProxyUnitedWorkloadWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/unitedworkload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['kind'] !== null) {
            $queryParams['kind'] = $localVarParams['kind'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteProxyUnitedWorkloadResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteProxyUnitedWorkloadRequest');
    }

    /**
     * 删除仓库源
     *
     * 删除仓库源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepo($request)
    {
        return $this->deleteRepoWithHttpInfo($request);
    }

    public function deleteRepoWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/repos/{repoid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repoid'] !== null) {
            $pathParams['repoid'] = $localVarParams['repoid'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteRepoResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteRepoRequest');
    }

    /**
     * 删除权限策略
     *
     * 删除权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRule($request)
    {
        return $this->deleteRuleWithHttpInfo($request);
    }

    public function deleteRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/permissions/rules/{ruleid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleid'] !== null) {
            $pathParams['ruleid'] = $localVarParams['ruleid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteRuleResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteRuleRequest');
    }

    /**
     * 舰队关闭策略中心
     *
     * 舰队关闭策略中心
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableClusterGroupPolicy($request)
    {
        return $this->disableClusterGroupPolicyWithHttpInfo($request);
    }

    public function disableClusterGroupPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableClusterGroupPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableClusterGroupPolicyRequest');
    }

    /**
     * 关闭容器集群联邦
     *
     * 关闭容器舰队联邦
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableFederation($request)
    {
        return $this->disableFederationWithHttpInfo($request);
    }

    public function disableFederationWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/federations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableFederationResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableFederationRequest');
    }

    /**
     * 下载联邦kubeconfig
     *
     * 舰队开通联邦并且创建网络连接之后，可以使用此接口下载联邦的kubeconfig
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadFederationKubeconfig($request)
    {
        return $this->downloadFederationKubeconfigWithHttpInfo($request);
    }

    public function downloadFederationKubeconfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/kubeconfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DownloadFederationKubeconfigResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DownloadFederationKubeconfigRequest');
    }

    /**
     * 舰队启用策略中心
     *
     * 舰队启用策略中心
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableClusterGroupPolicy($request)
    {
        return $this->enableClusterGroupPolicyWithHttpInfo($request);
    }

    public function enableClusterGroupPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['retry'] !== null) {
            $queryParams['retry'] = $localVarParams['retry'];
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableClusterGroupPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableClusterGroupPolicyRequest');
    }

    /**
     * 启用容器舰队联邦
     *
     * 启用容器舰队联邦
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableFederation($request)
    {
        return $this->enableFederationWithHttpInfo($request);
    }

    public function enableFederationWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/federations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['retryjoinall'] !== null) {
            $queryParams['retryjoinall'] = $localVarParams['retryjoinall'];
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableFederationResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableFederationRequest');
    }

    /**
     * 集群加入容器舰队
     *
     * 集群加入容器舰队
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function joinGroup($request)
    {
        return $this->joinGroupWithHttpInfo($request);
    }

    public function joinGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/join';
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
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\JoinGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\JoinGroupRequest');
    }

    /**
     * 集群移出容器舰队
     *
     * 集群退出容器舰队
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function leaveGroup($request)
    {
        return $this->leaveGroupWithHttpInfo($request);
    }

    public function leaveGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/unjoin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\LeaveGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\LeaveGroupRequest');
    }

    /**
     * 获取插件实例列表
     *
     * 获取插件实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddonInstances($request)
    {
        return $this->listAddonInstancesWithHttpInfo($request);
    }

    public function listAddonInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/addons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['addonTemplateName'] !== null) {
            $queryParams['addon_template_name'] = $localVarParams['addonTemplateName'];
        }
        if ($localVarParams['isDatabaseStatus'] !== null) {
            $queryParams['is_database_status'] = $localVarParams['isDatabaseStatus'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListAddonInstancesResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListAddonInstancesRequest');
    }

    /**
     * 获取插件模板列表
     *
     * 获取插件模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddonTemplates($request)
    {
        return $this->listAddonTemplatesWithHttpInfo($request);
    }

    public function listAddonTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/addontemplates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['newest'] !== null) {
            $queryParams['newest'] = $localVarParams['newest'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['addonTemplateName'] !== null) {
            $queryParams['addon_template_name'] = $localVarParams['addonTemplateName'];
        }
        if ($localVarParams['baseUpdateAddonVersion'] !== null) {
            $queryParams['base_update_addon_version'] = $localVarParams['baseUpdateAddonVersion'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListAddonTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListAddonTemplatesRequest');
    }

    /**
     * 获取容器舰队列表
     *
     * 获取所有容器舰队信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterGroup($request)
    {
        return $this->listClusterGroupWithHttpInfo($request);
    }

    public function listClusterGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListClusterGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListClusterGroupRequest');
    }

    /**
     * 获取所有配置集合信息
     *
     * 获取所有配置集合信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConfigSets($request)
    {
        return $this->listConfigSetsWithHttpInfo($request);
    }

    public function listConfigSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $queryParams['clusterid'] = $localVarParams['clusterid'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListConfigSetsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListConfigSetsRequest');
    }

    /**
     * 获取策略定义列表
     *
     * 获取策略定义列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyDefinitions($request)
    {
        return $this->listPolicyDefinitionsWithHttpInfo($request);
    }

    public function listPolicyDefinitionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/policydefinitions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyDefinitionsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyDefinitionsRequest');
    }

    /**
     * 获取策略实例列表
     *
     * 获取策略实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyInstances($request)
    {
        return $this->listPolicyInstancesWithHttpInfo($request);
    }

    public function listPolicyInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/policyinstances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyInstancesResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyInstancesRequest');
    }

    /**
     * 获取策略实例任务列表
     *
     * 获取策略实例任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyJobs($request)
    {
        return $this->listPolicyJobsWithHttpInfo($request);
    }

    public function listPolicyJobsWithHttpInfo($request)
    {
        $resourcePath = '/v1/policy/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['kind'] !== null) {
            $queryParams['kind'] = $localVarParams['kind'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyJobsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyJobsRequest');
    }

    /**
     * 查询域名解析记录集列表
     *
     * 查询域名解析记录集列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordSets($request)
    {
        return $this->listRecordSetsWithHttpInfo($request);
    }

    public function listRecordSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/traffic/recordsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRecordSetsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRecordSetsRequest');
    }

    /**
     * 获取仓库源列表
     *
     * 获取仓库源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepos($request)
    {
        return $this->listReposWithHttpInfo($request);
    }

    public function listReposWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/repos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $queryParams['clusterid'] = $localVarParams['clusterid'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListReposResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListReposRequest');
    }

    /**
     * 获取权限策略列表
     *
     * 获取权限策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRule($request)
    {
        return $this->listRuleWithHttpInfo($request);
    }

    public function listRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/permissions/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRuleResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRuleRequest');
    }

    /**
     * 查询服务配置信息
     *
     * 获取各个类型集群的全局配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServerConfigs($request)
    {
        return $this->listServerConfigsWithHttpInfo($request);
    }

    public function listServerConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/serverconfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListServerConfigsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListServerConfigsRequest');
    }

    /**
     * 注册容器舰队
     *
     * 容器舰队创建API，生成容器舰队时可以选择关联的集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerClusterGroup($request)
    {
        return $this->registerClusterGroupWithHttpInfo($request);
    }

    public function registerClusterGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups';
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
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\RegisterClusterGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\RegisterClusterGroupRequest');
    }

    /**
     * 获取插件实例
     *
     * 获取插件实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAddonInstance($request)
    {
        return $this->showAddonInstanceWithHttpInfo($request);
    }

    public function showAddonInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/addons/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isDatabaseStatus'] !== null) {
            $queryParams['is_database_status'] = $localVarParams['isDatabaseStatus'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowAddonInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowAddonInstanceRequest');
    }

    /**
     * 获取单个容器舰队
     *
     * 获取单个容器舰队
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterGroup($request)
    {
        return $this->showClusterGroupWithHttpInfo($request);
    }

    public function showClusterGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterGroupRequest');
    }

    /**
     * 获取配置集合详细信息
     *
     * 获取配置集合详细信息，包含仓库源信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConfigSet($request)
    {
        return $this->showConfigSetWithHttpInfo($request);
    }

    public function showConfigSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/{configsetid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['configsetid'] !== null) {
            $pathParams['configsetid'] = $localVarParams['configsetid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowConfigSetResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowConfigSetRequest');
    }

    /**
     * 查询联邦开启进度
     *
     * 查询联邦开启进度
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFederationProgress($request)
    {
        return $this->showFederationProgressWithHttpInfo($request);
    }

    public function showFederationProgressWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/federations/progress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowFederationProgressResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowFederationProgressRequest');
    }

    /**
     * 统计某个用户所有配置集合的运行状态
     *
     * 统计某个用户所有配置集合的运行状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGitopsStatistics($request)
    {
        return $this->showGitopsStatisticsWithHttpInfo($request);
    }

    public function showGitopsStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowGitopsStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowGitopsStatisticsRequest');
    }

    /**
     * 获取策略定义
     *
     * 获取策略定义
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPolicyDefinition($request)
    {
        return $this->showPolicyDefinitionWithHttpInfo($request);
    }

    public function showPolicyDefinitionWithHttpInfo($request)
    {
        $resourcePath = '/v1/policydefinitions/{policydefinitionid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policydefinitionid'] !== null) {
            $pathParams['policydefinitionid'] = $localVarParams['policydefinitionid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyDefinitionResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyDefinitionRequest');
    }

    /**
     * 获取指定策略实例
     *
     * 获取指定策略实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPolicyInstance($request)
    {
        return $this->showPolicyInstanceWithHttpInfo($request);
    }

    public function showPolicyInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/policyinstances/{policyinstanceid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyinstanceid'] !== null) {
            $pathParams['policyinstanceid'] = $localVarParams['policyinstanceid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyInstanceRequest');
    }

    /**
     * 获取指定策略实例相关任务
     *
     * 获取指定策略实例相关任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPolicyJob($request)
    {
        return $this->showPolicyJobWithHttpInfo($request);
    }

    public function showPolicyJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/policy/jobs/{jobid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobid'] !== null) {
            $pathParams['jobid'] = $localVarParams['jobid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyJobResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyJobRequest');
    }

    /**
     * 查询联邦工作负载
     *
     * 查询联邦工作负载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProxyUnitedWorkload($request)
    {
        return $this->showProxyUnitedWorkloadWithHttpInfo($request);
    }

    public function showProxyUnitedWorkloadWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/unitedworkload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['kind'] !== null) {
            $queryParams['kind'] = $localVarParams['kind'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowProxyUnitedWorkloadResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowProxyUnitedWorkloadRequest');
    }

    /**
     * 获取配额信息
     *
     * 获取UCS配额信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuota($request)
    {
        return $this->showQuotaWithHttpInfo($request);
    }

    public function showQuotaWithHttpInfo($request)
    {
        $resourcePath = '/v1/maintenance/quota/{domainid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainid'] !== null) {
            $pathParams['domainid'] = $localVarParams['domainid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowQuotaResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowQuotaRequest');
    }

    /**
     * 更新插件实例
     *
     * 更新插件实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAddonInstance($request)
    {
        return $this->updateAddonInstanceWithHttpInfo($request);
    }

    public function updateAddonInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/addons/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateAddonInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateAddonInstanceRequest');
    }

    /**
     * 更新容器舰队描述信息
     *
     * 更新集群所属的容器舰队description信息；需要用户对相应容器舰队有更新权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterGroup($request)
    {
        return $this->updateClusterGroupWithHttpInfo($request);
    }

    public function updateClusterGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/description';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupRequest');
    }

    /**
     * 向容器舰队中添加集群
     *
     * 向容器舰队中添加集群，同批次可以添加一个或多个集群，该接口无法清空或减少管理的集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterGroupAssociatedClusters($request)
    {
        return $this->updateClusterGroupAssociatedClustersWithHttpInfo($request);
    }

    public function updateClusterGroupAssociatedClustersWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/associatedclusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedClustersResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedClustersRequest');
    }

    /**
     * 更新容器舰队关联权限策略
     *
     * 更新容器舰队关联权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterGroupAssociatedRules($request)
    {
        return $this->updateClusterGroupAssociatedRulesWithHttpInfo($request);
    }

    public function updateClusterGroupAssociatedRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/associatedrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedRulesResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedRulesRequest');
    }

    /**
     * 更新容器舰队的联邦对应的zone
     *
     * 更新容器舰队的集群联邦关联的zone
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterGroupAssociatedZones($request)
    {
        return $this->updateClusterGroupAssociatedZonesWithHttpInfo($request);
    }

    public function updateClusterGroupAssociatedZonesWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/associatedzones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedZonesResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedZonesRequest');
    }

    /**
     * 更新配置集合信息
     *
     * 仅更新配置集合，不更新仓库源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateConfigSet($request)
    {
        return $this->updateConfigSetWithHttpInfo($request);
    }

    public function updateConfigSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/{configsetid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['configsetid'] !== null) {
            $pathParams['configsetid'] = $localVarParams['configsetid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateConfigSetResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateConfigSetRequest');
    }

    /**
     * 更新策略定义
     *
     * 更新策略定义
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePolicyDefination($request)
    {
        return $this->updatePolicyDefinationWithHttpInfo($request);
    }

    public function updatePolicyDefinationWithHttpInfo($request)
    {
        $resourcePath = '/v1/policydefinitions/{policydefinitionid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policydefinitionid'] !== null) {
            $pathParams['policydefinitionid'] = $localVarParams['policydefinitionid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdatePolicyDefinationResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdatePolicyDefinationRequest');
    }

    /**
     * 更新指定策略实例
     *
     * 更新指定策略实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePolicyInstance($request)
    {
        return $this->updatePolicyInstanceWithHttpInfo($request);
    }

    public function updatePolicyInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/policyinstances/{policyinstanceid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyinstanceid'] !== null) {
            $pathParams['policyinstanceid'] = $localVarParams['policyinstanceid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdatePolicyInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdatePolicyInstanceRequest');
    }

    /**
     * 更新联邦工作负载
     *
     * 更新联邦工作负载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProxyUnitedWorkload($request)
    {
        return $this->updateProxyUnitedWorkloadWithHttpInfo($request);
    }

    public function updateProxyUnitedWorkloadWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/unitedworkload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateProxyUnitedWorkloadResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateProxyUnitedWorkloadRequest');
    }

    /**
     * 更新仓库源信息
     *
     * 更新仓库源信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepo($request)
    {
        return $this->updateRepoWithHttpInfo($request);
    }

    public function updateRepoWithHttpInfo($request)
    {
        $resourcePath = '/v1/configsets/repos/{repoid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repoid'] !== null) {
            $pathParams['repoid'] = $localVarParams['repoid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateRepoResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateRepoRequest');
    }

    /**
     * 更新权限策略
     *
     * 更新权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRule($request)
    {
        return $this->updateRuleWithHttpInfo($request);
    }

    public function updateRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/permissions/rules/{ruleid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleid'] !== null) {
            $pathParams['ruleid'] = $localVarParams['ruleid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateRuleResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateRuleRequest');
    }

    /**
     * 升级容器舰队联邦
     *
     * 容器舰队联邦版本升级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeFederation($request)
    {
        return $this->upgradeFederationWithHttpInfo($request);
    }

    public function upgradeFederationWithHttpInfo($request)
    {
        $resourcePath = '/v1/clustergroups/{clustergroupid}/federations/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $pathParams['clustergroupid'] = $localVarParams['clustergroupid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpgradeFederationResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpgradeFederationRequest');
    }

    /**
     * 获取集群安装时所需的配置信息
     *
     * 获取集群安装时所需的配置信息，当前仅本地集群使用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterConf($request)
    {
        return $this->createClusterConfWithHttpInfo($request);
    }

    public function createClusterConfWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/clusterconf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterConfResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterConfRequest');
    }

    /**
     * 获取集群kubeconfig
     *
     * 获取集群kubeconfig
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterKubeconfig($request)
    {
        return $this->createClusterKubeconfigWithHttpInfo($request);
    }

    public function createClusterKubeconfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/kubeconfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterKubeconfigResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterKubeconfigRequest');
    }

    /**
     * 创建集群策略实例
     *
     * 创建集群策略实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterPolicyInstance($request)
    {
        return $this->createClusterPolicyInstanceWithHttpInfo($request);
    }

    public function createClusterPolicyInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/policyinstance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterPolicyInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterPolicyInstanceRequest');
    }

    /**
     * 删除集群
     *
     * 用于集群解除注册；传入的cluster ID必须符合k8s UUID的格式规则；同时需要用户有对应集群的操作权限，否则会鉴权失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCluster($request)
    {
        return $this->deleteClusterWithHttpInfo($request);
    }

    public function deleteClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteClusterResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteClusterRequest');
    }

    /**
     * 集群关闭策略中心
     *
     * 集群关闭策略中心
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableClusterPolicy($request)
    {
        return $this->disableClusterPolicyWithHttpInfo($request);
    }

    public function disableClusterPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableClusterPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableClusterPolicyRequest');
    }

    /**
     * 卸载集群gitops插件
     *
     * 卸载集群gitops插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableGitOps($request)
    {
        return $this->disableGitOpsWithHttpInfo($request);
    }

    public function disableGitOpsWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/gitops';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableGitOpsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableGitOpsRequest');
    }

    /**
     * 集群启用策略中心
     *
     * 集群启用策略中心
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableClusterPolicy($request)
    {
        return $this->enableClusterPolicyWithHttpInfo($request);
    }

    public function enableClusterPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['retry'] !== null) {
            $queryParams['retry'] = $localVarParams['retry'];
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableClusterPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableClusterPolicyRequest');
    }

    /**
     * 启用Gitops插件
     *
     * 启用Gitops插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableGitOps($request)
    {
        return $this->enableGitOpsWithHttpInfo($request);
    }

    public function enableGitOpsWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/gitops';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['retry'] !== null) {
            $queryParams['retry'] = $localVarParams['retry'];
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableGitOpsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableGitOpsRequest');
    }

    /**
     * 获取租户的CCE集群列表
     *
     * 获取当前租户的CCE集群列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedClusters($request)
    {
        return $this->listManagedClustersWithHttpInfo($request);
    }

    public function listManagedClustersWithHttpInfo($request)
    {
        $resourcePath = '/v1/managedclusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['unimported'] !== null) {
            $queryParams['unimported'] = $localVarParams['unimported'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListManagedClustersResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListManagedClustersRequest');
    }

    /**
     * 查询支持接入UCS的集群版本列表
     *
     * 查询支持接入UCS的集群版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRegisteredClusterVersions($request)
    {
        return $this->listRegisteredClusterVersionsWithHttpInfo($request);
    }

    public function listRegisteredClusterVersionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/config/registeredclusterversions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRegisteredClusterVersionsResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRegisteredClusterVersionsRequest');
    }

    /**
     * 注册集群
     *
     * 集群注册接口。支持三方集群的注册和CCE导入集群的注册。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerCluster($request)
    {
        return $this->registerClusterWithHttpInfo($request);
    }

    public function registerClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters';
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
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\RegisterClusterResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\RegisterClusterRequest');
    }

    /**
     * 激活集群
     *
     * 激活集群接口；传入的cluster ID必须符合k8s UUID的格式规则；同时需要用户有对应集群的更新权限，否则会鉴权失败
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryClusterActivation($request)
    {
        return $this->retryClusterActivationWithHttpInfo($request);
    }

    public function retryClusterActivationWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/activation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\RetryClusterActivationResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\RetryClusterActivationRequest');
    }

    /**
     * 获取单个集群
     *
     * 获取集群信息。传入的cluster ID必须符合k8s UUID的格式规则；同时需要用户有对应集群的获取权限，否则会鉴权失败
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCluster($request)
    {
        return $this->showClusterWithHttpInfo($request);
    }

    public function showClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterRequest');
    }

    /**
     * 获取集群接入信息
     *
     * 该API接口用于获取集群接入信息；传入的cluster ID必须符合k8s UUID的格式规则；同时需要用户有对应集群证书的获取权限，否则会鉴权失败；agent证书只可以下载一次。仅用于获取三方集群的集群接入信息，CCE集群不从该接口获取，如果传入CCE集群ID，返回码为400
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterAccessInfo($request)
    {
        return $this->showClusterAccessInfoWithHttpInfo($request);
    }

    public function showClusterAccessInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/accessinfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpcendpoint'] !== null) {
            $queryParams['vpcendpoint'] = $localVarParams['vpcendpoint'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterAccessInfoResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterAccessInfoRequest');
    }

    /**
     * 获取集群列表
     *
     * 获取集群信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterList($request)
    {
        return $this->showClusterListWithHttpInfo($request);
    }

    public function showClusterListWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['enablestatus'] !== null) {
            $queryParams['enablestatus'] = $localVarParams['enablestatus'];
        }
        if ($localVarParams['clustergroupid'] !== null) {
            $queryParams['clustergroupid'] = $localVarParams['clustergroupid'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['managetype'] !== null) {
            $queryParams['managetype'] = $localVarParams['managetype'];
        }
        if ($localVarParams['clusterids'] !== null) {
            $queryParams['clusterids'] = $localVarParams['clusterids'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterListResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterListRequest');
    }

    /**
     * 获取gitops启用进展
     *
     * 获取gitops启用进展
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGitOpsStatus($request)
    {
        return $this->showGitOpsStatusWithHttpInfo($request);
    }

    public function showGitOpsStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/gitops';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowGitOpsStatusResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowGitOpsStatusRequest');
    }

    /**
     * 更新集群
     *
     * 更新集群。当前仅允许更新附着集群和本地集群的国家/城市，允许更新多云集群的工作节点个数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCluster($request)
    {
        return $this->updateClusterWithHttpInfo($request);
    }

    public function updateClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterRequest');
    }

    /**
     * 集群关联权限策略
     *
     * 集群关联权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterRules($request)
    {
        return $this->updateClusterRulesWithHttpInfo($request);
    }

    public function updateClusterRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/clusters/{clusterid}/associatedrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterid'] !== null) {
            $pathParams['clusterid'] = $localVarParams['clusterid'];
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
            $responseType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterRulesResponse',
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterRulesRequest');
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