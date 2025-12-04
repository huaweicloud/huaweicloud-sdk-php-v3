<?php

namespace HuaweiCloud\SDK\Ucs\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class UcsAsyncClient extends Client
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
        $client = new ClientBuilder(new UcsAsyncClient(), "GlobalCredentials");
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
    public function createAddonInstanceAsync($request)
    {
        return $this->createAddonInstanceAsyncWithHttpInfo($request);
    }
    
    public function createAddonInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateAddonInstanceRequest',
            $asyncRequest = true);
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
    public function createClusterGroupPolicyInstanceAsync($request)
    {
        return $this->createClusterGroupPolicyInstanceAsyncWithHttpInfo($request);
    }
    
    public function createClusterGroupPolicyInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterGroupPolicyInstanceRequest',
            $asyncRequest = true);
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
    public function createConfigSetAsync($request)
    {
        return $this->createConfigSetAsyncWithHttpInfo($request);
    }
    
    public function createConfigSetAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateConfigSetRequest',
            $asyncRequest = true);
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
    public function createFederationCertAsync($request)
    {
        return $this->createFederationCertAsyncWithHttpInfo($request);
    }
    
    public function createFederationCertAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateFederationCertRequest',
            $asyncRequest = true);
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
    public function createFederationConnectionAsync($request)
    {
        return $this->createFederationConnectionAsyncWithHttpInfo($request);
    }
    
    public function createFederationConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateFederationConnectionRequest',
            $asyncRequest = true);
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
    public function createProxyUnitedWorkloadAsync($request)
    {
        return $this->createProxyUnitedWorkloadAsyncWithHttpInfo($request);
    }
    
    public function createProxyUnitedWorkloadAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateProxyUnitedWorkloadRequest',
            $asyncRequest = true);
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
    public function createRecordSetAsync($request)
    {
        return $this->createRecordSetAsyncWithHttpInfo($request);
    }
    
    public function createRecordSetAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_zone_project_id'] = $localVarParams['xZoneProjectId'];
        }
        if ($localVarParams['xZoneId'] !== null) {
            $headerParams['x_zone_id'] = $localVarParams['xZoneId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRecordSetRequest',
            $asyncRequest = true);
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
    public function createRepoAsync($request)
    {
        return $this->createRepoAsyncWithHttpInfo($request);
    }
    
    public function createRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRepoRequest',
            $asyncRequest = true);
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
    public function createRuleAsync($request)
    {
        return $this->createRuleAsyncWithHttpInfo($request);
    }
    
    public function createRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateRuleRequest',
            $asyncRequest = true);
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
    public function deleteAddonInstanceAsync($request)
    {
        return $this->deleteAddonInstanceAsyncWithHttpInfo($request);
    }
    
    public function deleteAddonInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteAddonInstanceRequest',
            $asyncRequest = true);
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
    public function deleteClusterGroupAsync($request)
    {
        return $this->deleteClusterGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteClusterGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteClusterGroupRequest',
            $asyncRequest = true);
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
    public function deleteConfigSetAsync($request)
    {
        return $this->deleteConfigSetAsyncWithHttpInfo($request);
    }
    
    public function deleteConfigSetAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteConfigSetRequest',
            $asyncRequest = true);
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
    public function deletePolicyInstanceAsync($request)
    {
        return $this->deletePolicyInstanceAsyncWithHttpInfo($request);
    }
    
    public function deletePolicyInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeletePolicyInstanceRequest',
            $asyncRequest = true);
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
    public function deleteProxyUnitedWorkloadAsync($request)
    {
        return $this->deleteProxyUnitedWorkloadAsyncWithHttpInfo($request);
    }
    
    public function deleteProxyUnitedWorkloadAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteProxyUnitedWorkloadRequest',
            $asyncRequest = true);
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
    public function deleteRepoAsync($request)
    {
        return $this->deleteRepoAsyncWithHttpInfo($request);
    }
    
    public function deleteRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteRepoRequest',
            $asyncRequest = true);
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
    public function deleteRuleAsync($request)
    {
        return $this->deleteRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteRuleRequest',
            $asyncRequest = true);
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
    public function disableClusterGroupPolicyAsync($request)
    {
        return $this->disableClusterGroupPolicyAsyncWithHttpInfo($request);
    }
    
    public function disableClusterGroupPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableClusterGroupPolicyRequest',
            $asyncRequest = true);
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
    public function disableFederationAsync($request)
    {
        return $this->disableFederationAsyncWithHttpInfo($request);
    }
    
    public function disableFederationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableFederationRequest',
            $asyncRequest = true);
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
    public function downloadFederationKubeconfigAsync($request)
    {
        return $this->downloadFederationKubeconfigAsyncWithHttpInfo($request);
    }
    
    public function downloadFederationKubeconfigAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DownloadFederationKubeconfigRequest',
            $asyncRequest = true);
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
    public function enableClusterGroupPolicyAsync($request)
    {
        return $this->enableClusterGroupPolicyAsyncWithHttpInfo($request);
    }
    
    public function enableClusterGroupPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableClusterGroupPolicyRequest',
            $asyncRequest = true);
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
    public function enableFederationAsync($request)
    {
        return $this->enableFederationAsyncWithHttpInfo($request);
    }
    
    public function enableFederationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableFederationRequest',
            $asyncRequest = true);
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
    public function joinGroupAsync($request)
    {
        return $this->joinGroupAsyncWithHttpInfo($request);
    }
    
    public function joinGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\JoinGroupRequest',
            $asyncRequest = true);
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
    public function leaveGroupAsync($request)
    {
        return $this->leaveGroupAsyncWithHttpInfo($request);
    }
    
    public function leaveGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\LeaveGroupRequest',
            $asyncRequest = true);
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
    public function listAddonInstancesAsync($request)
    {
        return $this->listAddonInstancesAsyncWithHttpInfo($request);
    }
    
    public function listAddonInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListAddonInstancesRequest',
            $asyncRequest = true);
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
    public function listAddonTemplatesAsync($request)
    {
        return $this->listAddonTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listAddonTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListAddonTemplatesRequest',
            $asyncRequest = true);
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
    public function listClusterGroupAsync($request)
    {
        return $this->listClusterGroupAsyncWithHttpInfo($request);
    }
    
    public function listClusterGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListClusterGroupRequest',
            $asyncRequest = true);
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
    public function listConfigSetsAsync($request)
    {
        return $this->listConfigSetsAsyncWithHttpInfo($request);
    }
    
    public function listConfigSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListConfigSetsRequest',
            $asyncRequest = true);
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
    public function listPolicyDefinitionsAsync($request)
    {
        return $this->listPolicyDefinitionsAsyncWithHttpInfo($request);
    }
    
    public function listPolicyDefinitionsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyDefinitionsRequest',
            $asyncRequest = true);
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
    public function listPolicyInstancesAsync($request)
    {
        return $this->listPolicyInstancesAsyncWithHttpInfo($request);
    }
    
    public function listPolicyInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyInstancesRequest',
            $asyncRequest = true);
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
    public function listPolicyJobsAsync($request)
    {
        return $this->listPolicyJobsAsyncWithHttpInfo($request);
    }
    
    public function listPolicyJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListPolicyJobsRequest',
            $asyncRequest = true);
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
    public function listRecordSetsAsync($request)
    {
        return $this->listRecordSetsAsyncWithHttpInfo($request);
    }
    
    public function listRecordSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRecordSetsRequest',
            $asyncRequest = true);
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
    public function listReposAsync($request)
    {
        return $this->listReposAsyncWithHttpInfo($request);
    }
    
    public function listReposAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListReposRequest',
            $asyncRequest = true);
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
    public function listRuleAsync($request)
    {
        return $this->listRuleAsyncWithHttpInfo($request);
    }
    
    public function listRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRuleRequest',
            $asyncRequest = true);
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
    public function listServerConfigsAsync($request)
    {
        return $this->listServerConfigsAsyncWithHttpInfo($request);
    }
    
    public function listServerConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListServerConfigsRequest',
            $asyncRequest = true);
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
    public function registerClusterGroupAsync($request)
    {
        return $this->registerClusterGroupAsyncWithHttpInfo($request);
    }
    
    public function registerClusterGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\RegisterClusterGroupRequest',
            $asyncRequest = true);
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
    public function showAddonInstanceAsync($request)
    {
        return $this->showAddonInstanceAsyncWithHttpInfo($request);
    }
    
    public function showAddonInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowAddonInstanceRequest',
            $asyncRequest = true);
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
    public function showClusterGroupAsync($request)
    {
        return $this->showClusterGroupAsyncWithHttpInfo($request);
    }
    
    public function showClusterGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterGroupRequest',
            $asyncRequest = true);
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
    public function showConfigSetAsync($request)
    {
        return $this->showConfigSetAsyncWithHttpInfo($request);
    }
    
    public function showConfigSetAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowConfigSetRequest',
            $asyncRequest = true);
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
    public function showFederationProgressAsync($request)
    {
        return $this->showFederationProgressAsyncWithHttpInfo($request);
    }
    
    public function showFederationProgressAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowFederationProgressRequest',
            $asyncRequest = true);
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
    public function showGitopsStatisticsAsync($request)
    {
        return $this->showGitopsStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showGitopsStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowGitopsStatisticsRequest',
            $asyncRequest = true);
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
    public function showPolicyDefinitionAsync($request)
    {
        return $this->showPolicyDefinitionAsyncWithHttpInfo($request);
    }
    
    public function showPolicyDefinitionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyDefinitionRequest',
            $asyncRequest = true);
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
    public function showPolicyInstanceAsync($request)
    {
        return $this->showPolicyInstanceAsyncWithHttpInfo($request);
    }
    
    public function showPolicyInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyInstanceRequest',
            $asyncRequest = true);
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
    public function showPolicyJobAsync($request)
    {
        return $this->showPolicyJobAsyncWithHttpInfo($request);
    }
    
    public function showPolicyJobAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowPolicyJobRequest',
            $asyncRequest = true);
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
    public function showProxyUnitedWorkloadAsync($request)
    {
        return $this->showProxyUnitedWorkloadAsyncWithHttpInfo($request);
    }
    
    public function showProxyUnitedWorkloadAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowProxyUnitedWorkloadRequest',
            $asyncRequest = true);
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
    public function showQuotaAsync($request)
    {
        return $this->showQuotaAsyncWithHttpInfo($request);
    }
    
    public function showQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowQuotaRequest',
            $asyncRequest = true);
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
    public function updateAddonInstanceAsync($request)
    {
        return $this->updateAddonInstanceAsyncWithHttpInfo($request);
    }
    
    public function updateAddonInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateAddonInstanceRequest',
            $asyncRequest = true);
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
    public function updateClusterGroupAsync($request)
    {
        return $this->updateClusterGroupAsyncWithHttpInfo($request);
    }
    
    public function updateClusterGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupRequest',
            $asyncRequest = true);
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
    public function updateClusterGroupAssociatedClustersAsync($request)
    {
        return $this->updateClusterGroupAssociatedClustersAsyncWithHttpInfo($request);
    }
    
    public function updateClusterGroupAssociatedClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedClustersRequest',
            $asyncRequest = true);
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
    public function updateClusterGroupAssociatedRulesAsync($request)
    {
        return $this->updateClusterGroupAssociatedRulesAsyncWithHttpInfo($request);
    }
    
    public function updateClusterGroupAssociatedRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedRulesRequest',
            $asyncRequest = true);
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
    public function updateClusterGroupAssociatedZonesAsync($request)
    {
        return $this->updateClusterGroupAssociatedZonesAsyncWithHttpInfo($request);
    }
    
    public function updateClusterGroupAssociatedZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterGroupAssociatedZonesRequest',
            $asyncRequest = true);
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
    public function updateConfigSetAsync($request)
    {
        return $this->updateConfigSetAsyncWithHttpInfo($request);
    }
    
    public function updateConfigSetAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateConfigSetRequest',
            $asyncRequest = true);
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
    public function updatePolicyDefinationAsync($request)
    {
        return $this->updatePolicyDefinationAsyncWithHttpInfo($request);
    }
    
    public function updatePolicyDefinationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdatePolicyDefinationRequest',
            $asyncRequest = true);
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
    public function updatePolicyInstanceAsync($request)
    {
        return $this->updatePolicyInstanceAsyncWithHttpInfo($request);
    }
    
    public function updatePolicyInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdatePolicyInstanceRequest',
            $asyncRequest = true);
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
    public function updateProxyUnitedWorkloadAsync($request)
    {
        return $this->updateProxyUnitedWorkloadAsyncWithHttpInfo($request);
    }
    
    public function updateProxyUnitedWorkloadAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateProxyUnitedWorkloadRequest',
            $asyncRequest = true);
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
    public function updateRepoAsync($request)
    {
        return $this->updateRepoAsyncWithHttpInfo($request);
    }
    
    public function updateRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateRepoRequest',
            $asyncRequest = true);
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
    public function updateRuleAsync($request)
    {
        return $this->updateRuleAsyncWithHttpInfo($request);
    }
    
    public function updateRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateRuleRequest',
            $asyncRequest = true);
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
    public function upgradeFederationAsync($request)
    {
        return $this->upgradeFederationAsyncWithHttpInfo($request);
    }
    
    public function upgradeFederationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpgradeFederationRequest',
            $asyncRequest = true);
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
    public function createClusterConfAsync($request)
    {
        return $this->createClusterConfAsyncWithHttpInfo($request);
    }
    
    public function createClusterConfAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterConfRequest',
            $asyncRequest = true);
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
    public function createClusterKubeconfigAsync($request)
    {
        return $this->createClusterKubeconfigAsyncWithHttpInfo($request);
    }
    
    public function createClusterKubeconfigAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterKubeconfigRequest',
            $asyncRequest = true);
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
    public function createClusterPolicyInstanceAsync($request)
    {
        return $this->createClusterPolicyInstanceAsyncWithHttpInfo($request);
    }
    
    public function createClusterPolicyInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\CreateClusterPolicyInstanceRequest',
            $asyncRequest = true);
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
    public function deleteClusterAsync($request)
    {
        return $this->deleteClusterAsyncWithHttpInfo($request);
    }
    
    public function deleteClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DeleteClusterRequest',
            $asyncRequest = true);
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
    public function disableClusterPolicyAsync($request)
    {
        return $this->disableClusterPolicyAsyncWithHttpInfo($request);
    }
    
    public function disableClusterPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableClusterPolicyRequest',
            $asyncRequest = true);
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
    public function disableGitOpsAsync($request)
    {
        return $this->disableGitOpsAsyncWithHttpInfo($request);
    }
    
    public function disableGitOpsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\DisableGitOpsRequest',
            $asyncRequest = true);
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
    public function enableClusterPolicyAsync($request)
    {
        return $this->enableClusterPolicyAsyncWithHttpInfo($request);
    }
    
    public function enableClusterPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableClusterPolicyRequest',
            $asyncRequest = true);
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
    public function enableGitOpsAsync($request)
    {
        return $this->enableGitOpsAsyncWithHttpInfo($request);
    }
    
    public function enableGitOpsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\EnableGitOpsRequest',
            $asyncRequest = true);
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
    public function listManagedClustersAsync($request)
    {
        return $this->listManagedClustersAsyncWithHttpInfo($request);
    }
    
    public function listManagedClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListManagedClustersRequest',
            $asyncRequest = true);
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
    public function listRegisteredClusterVersionsAsync($request)
    {
        return $this->listRegisteredClusterVersionsAsyncWithHttpInfo($request);
    }
    
    public function listRegisteredClusterVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ListRegisteredClusterVersionsRequest',
            $asyncRequest = true);
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
    public function registerClusterAsync($request)
    {
        return $this->registerClusterAsyncWithHttpInfo($request);
    }
    
    public function registerClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\RegisterClusterRequest',
            $asyncRequest = true);
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
    public function retryClusterActivationAsync($request)
    {
        return $this->retryClusterActivationAsyncWithHttpInfo($request);
    }
    
    public function retryClusterActivationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\RetryClusterActivationRequest',
            $asyncRequest = true);
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
    public function showClusterAsync($request)
    {
        return $this->showClusterAsyncWithHttpInfo($request);
    }
    
    public function showClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterRequest',
            $asyncRequest = true);
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
    public function showClusterAccessInfoAsync($request)
    {
        return $this->showClusterAccessInfoAsyncWithHttpInfo($request);
    }
    
    public function showClusterAccessInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterAccessInfoRequest',
            $asyncRequest = true);
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
    public function showClusterListAsync($request)
    {
        return $this->showClusterListAsyncWithHttpInfo($request);
    }
    
    public function showClusterListAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowClusterListRequest',
            $asyncRequest = true);
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
    public function showGitOpsStatusAsync($request)
    {
        return $this->showGitOpsStatusAsyncWithHttpInfo($request);
    }
    
    public function showGitOpsStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\ShowGitOpsStatusRequest',
            $asyncRequest = true);
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
    public function updateClusterAsync($request)
    {
        return $this->updateClusterAsyncWithHttpInfo($request);
    }
    
    public function updateClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterRequest',
            $asyncRequest = true);
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
    public function updateClusterRulesAsync($request)
    {
        return $this->updateClusterRulesAsyncWithHttpInfo($request);
    }
    
    public function updateClusterRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ucs\V1\Model\UpdateClusterRulesRequest',
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