<?php

namespace HuaweiCloud\SDK\Apig\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ApigAsyncClient extends Client
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
        return new ClientBuilder(new ApigAsyncClient());
    }

    /**
     * 接受或拒绝终端节点连接
     *
     * 接受或拒绝实例节点连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptOrRejectEndpointConnectionsAsync($request)
    {
        return $this->acceptOrRejectEndpointConnectionsAsyncWithHttpInfo($request);
    }
    
    public function acceptOrRejectEndpointConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-endpoint/connections/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AcceptOrRejectEndpointConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AcceptOrRejectEndpointConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 实例更新或绑定EIP
     *
     * 实例更新或绑定EIP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addEipV2Async($request)
    {
        return $this->addEipV2AsyncWithHttpInfo($request);
    }
    
    public function addEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AddEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AddEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量添加实例终端节点连接白名单
     *
     * 批量添加实例终端节点连接白名单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addEndpointPermissionsAsync($request)
    {
        return $this->addEndpointPermissionsAsyncWithHttpInfo($request);
    }
    
    public function addEndpointPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-endpoint/permissions/batch-add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AddEndpointPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AddEndpointPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 开启实例公网出口
     *
     * 实例开启公网出口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addEngressEipV2Async($request)
    {
        return $this->addEngressEipV2AsyncWithHttpInfo($request);
    }
    
    public function addEngressEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/nat-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AddEngressEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AddEngressEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 开启实例公网入口
     *
     * 开启实例开启公网入口，仅当实例为ELB类型时支持
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addIngressEipV2Async($request)
    {
        return $this->addIngressEipV2AsyncWithHttpInfo($request);
    }
    
    public function addIngressEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/ingress-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AddIngressEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AddIngressEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 凭据配额绑定凭据列表
     *
     * 凭据配额绑定凭据列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateAppsForAppQuotaAsync($request)
    {
        return $this->associateAppsForAppQuotaAsyncWithHttpInfo($request);
    }
    
    public function associateAppsForAppQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}/binding-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateAppsForAppQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateAppsForAppQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定域名证书
     *
     * 如果创建API时，“定义API请求”使用HTTPS请求协议，那么在独立域名中需要添加SSL证书。
     * 本章节主要介绍为特定域名绑定证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateCertificateV2Async($request)
    {
        return $this->associateCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function associateCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}/certificate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 绑定域名
     *
     * 用户自定义的域名，需要增加A记录才能生效，具体方法请参见《云解析服务用户指南》的“添加A类型记录集”章节。
     * 
     * 每个API分组下最多可绑定5个域名。绑定域名后，用户可通过自定义域名调用API。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateDomainV2Async($request)
    {
        return $this->associateDomainV2AsyncWithHttpInfo($request);
    }
    
    public function associateDomainV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateDomainV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateDomainV2Request',
            $asyncRequest = true);
    }

    /**
     * 绑定签名密钥
     *
     * 签名密钥创建后，需要绑定到API才能生效。
     * 
     * 
     * 将签名密钥绑定到API后，则API网关请求后端服务时就会使用这个签名密钥进行加密签名，后端服务可以校验这个签名来验证请求来源。
     * 
     * 
     * 将指定的签名密钥绑定到一个或多个已发布的API上。同一个API发布到不同的环境可以绑定不同的签名密钥；一个API在发布到特定环境后只能绑定一个签名密钥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateSignatureKeyV2Async($request)
    {
        return $this->associateSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function associateSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/sign-bindings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 插件绑定API
     *
     * 绑定插件到API上。
     * - 只能选择发布状态的API
     * - 绑定以后及时生效
     * - 修改插件后及时生效
     * - 相同类型的插件只能绑定一个，如果再次绑定同类型的插件，那么已绑定的同类型插件将直接被覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachApiToPluginAsync($request)
    {
        return $this->attachApiToPluginAsyncWithHttpInfo($request);
    }
    
    public function attachApiToPluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}/attach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AttachApiToPluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AttachApiToPluginRequest',
            $asyncRequest = true);
    }

    /**
     * API绑定插件
     *
     * 绑定插件到API上。
     * - 只能选择发布状态的API
     * - 绑定以后及时生效
     * - 修改插件后及时生效
     * - 相同类型的插件只能绑定一个，如果再次绑定同类型的插件，那么已绑定的同类型插件将直接被覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachPluginToApiAsync($request)
    {
        return $this->attachPluginToApiAsyncWithHttpInfo($request);
    }
    
    public function attachPluginToApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}/plugins/attach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AttachPluginToApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AttachPluginToApiRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加或删除单个实例的标签
     *
     * 批量添加或删除单个实例的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateOrDeleteInstanceTagsAsync($request)
    {
        return $this->batchCreateOrDeleteInstanceTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateOrDeleteInstanceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/instance-tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchCreateOrDeleteInstanceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchCreateOrDeleteInstanceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 校验APP
     *
     * 校验app是否存在，非APP所有者可以调用该接口校验APP是否真实存在。这个接口只展示app的基本信息id 、name、
     * remark，其他信息不显示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkAppV2Async($request)
    {
        return $this->checkAppV2AsyncWithHttpInfo($request);
    }
    
    public function checkAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/validation/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CheckAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CheckAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建APP
     *
     * APP即应用，是一个可以访问API的身份标识。将API授权给APP后，APP即可调用API。
     * 创建一个APP。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAnAppV2Async($request)
    {
        return $this->createAnAppV2AsyncWithHttpInfo($request);
    }
    
    public function createAnAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAnAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAnAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 自动生成APP Code
     *
     * 创建App Code时，可以不指定具体值，由后台自动生成随机字符串填充。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppCodeAutoV2Async($request)
    {
        return $this->createAppCodeAutoV2AsyncWithHttpInfo($request);
    }
    
    public function createAppCodeAutoV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-codes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAppCodeAutoV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAppCodeAutoV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建APP Code
     *
     * App Code为APP应用下的子模块，创建App Code之后，可以实现简易的APP认证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppCodeV2Async($request)
    {
        return $this->createAppCodeV2AsyncWithHttpInfo($request);
    }
    
    public function createAppCodeV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-codes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAppCodeV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAppCodeV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建凭据配额
     *
     * 创建凭据配额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppQuotaAsync($request)
    {
        return $this->createAppQuotaAsyncWithHttpInfo($request);
    }
    
    public function createAppQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAppQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAppQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义认证
     *
     * 创建自定义认证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCustomAuthorizerV2Async($request)
    {
        return $this->createCustomAuthorizerV2AsyncWithHttpInfo($request);
    }
    
    public function createCustomAuthorizerV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/authorizers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateCustomAuthorizerV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateCustomAuthorizerV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建环境
     *
     * 在实际的生产中，API提供者可能有多个环境，如开发环境、测试环境、生产环境等，用户可以自由将API发布到某个环境，供调用者调用。
     * 
     * 
     * 对于不同的环境，API的版本、请求地址甚至于包括请求消息等均有可能不同。如：某个API，v1.0的版本为稳定版本，发布到了生产环境供生产使用，同时，该API正处于迭代中，v1.1的版本是开发人员交付测试人员进行测试的版本，发布在测试环境上，而v1.2的版本目前开发团队正处于开发过程中，可以发布到开发环境进行自测等。
     * 
     * 
     * 为此，API网关提供多环境管理功能，使租户能够最大化的模拟实际场景，低成本的接入API网关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnvironmentV2Async($request)
    {
        return $this->createEnvironmentV2AsyncWithHttpInfo($request);
    }
    
    public function createEnvironmentV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/envs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateEnvironmentV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateEnvironmentV2Request',
            $asyncRequest = true);
    }

    /**
     * 新建变量
     *
     * 将API发布到不同的环境后，对于不同的环境，可能会有不同的环境变量，比如，API的服务部署地址，请求的版本号等。
     * 
     * 
     * 用户可以定义不同的环境变量，用户在定义API时，在API的定义中使用这些变量，当调用API时，API网关会将这些变量替换成真实的变量值，以达到不同环境的区分效果。
     * 
     * 
     * 环境变量定义在API分组上，该分组下的所有API都可以使用这些变量。
     * 
     * &gt; 1. 环境变量的变量名称必须保持唯一，即一个分组在同一个环境上不能有两个同名的变量。
     * &gt; 2. 环境变量区分大小写，即变量ABC与变量abc是两个不同的变量。
     * &gt; 3. 设置了环境变量后，使用到该变量的API的调试功能将不可使用。
     * &gt; 4. 定义了环境变量后，使用到环境变量的地方应该以对称的#标识环境变量，当API发布到相应的环境后，会对环境变量的值进行替换，如：定义的API的URL为：https://#address#:8080，环境变量address在RELEASE环境上的值为：192.168.1.5，则API发布到RELEASE环境后的真实的URL为：https://192.168.1.5:8080。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnvironmentVariableV2Async($request)
    {
        return $this->createEnvironmentVariableV2AsyncWithHttpInfo($request);
    }
    
    public function createEnvironmentVariableV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/env-variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateEnvironmentVariableV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateEnvironmentVariableV2Request',
            $asyncRequest = true);
    }

    /**
     * 实例配置特性
     *
     * 为实例配置需要的特性。
     * 
     * 支持配置的特性列表及特性配置示例请参考本手册中的“附录 &gt; 实例支持的APIG特性”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFeatureV2Async($request)
    {
        return $this->createFeatureV2AsyncWithHttpInfo($request);
    }
    
    public function createFeatureV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateFeatureV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateFeatureV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建分组自定义响应
     *
     * 新增分组下自定义响应
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGatewayResponseV2Async($request)
    {
        return $this->createGatewayResponseV2AsyncWithHttpInfo($request);
    }
    
    public function createGatewayResponseV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateGatewayResponseV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateGatewayResponseV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建专享版实例（按需）
     *
     * 创建按需专享版实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceV2Async($request)
    {
        return $this->createInstanceV2AsyncWithHttpInfo($request);
    }
    
    public function createInstanceV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateInstanceV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateInstanceV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建专享版实例（包周期）
     *
     * 创建包周期专享版实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrderAsync($request)
    {
        return $this->createOrderAsyncWithHttpInfo($request);
    }
    
    public function createOrderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/prepay-instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateOrderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateOrderRequest',
            $asyncRequest = true);
    }

    /**
     * 创建插件
     *
     * 创建插件信息。
     * - 插件不允许重名
     * - 插件创建后未绑定API前是无意义的，绑定API后，对绑定的API即时生效
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
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json-1', 'application/json-2', 'application/json-3', 'application/json-4', 'application/json-5', 'application/json-6']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json-1', 'application/json-2', 'application/json-3', 'application/json-4', 'application/json-5', 'application/json-6'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreatePluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreatePluginRequest',
            $asyncRequest = true);
    }

    /**
     * 按需规格变更
     *
     * 创建按需规格变更订单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPostPayResizeOrderAsync($request)
    {
        return $this->createPostPayResizeOrderAsyncWithHttpInfo($request);
    }
    
    public function createPostPayResizeOrderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/postpaid-resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreatePostPayResizeOrderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreatePostPayResizeOrderRequest',
            $asyncRequest = true);
    }

    /**
     * 创建包周期规格变更订单
     *
     * 创建包周期规格变更订单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPrepayResizeAsync($request)
    {
        return $this->createPrepayResizeAsyncWithHttpInfo($request);
    }
    
    public function createPrepayResizeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/prepay-resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreatePrepayResizeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreatePrepayResizeRequest',
            $asyncRequest = true);
    }

    /**
     * 创建流控策略
     *
     * 当API上线后，系统会默认给每个API提供一个流控策略，API提供者可以根据自身API的服务能力及负载情况变更这个流控策略。
     * 流控策略即限制API在一定长度的时间内，能够允许被访问的最大次数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRequestThrottlingPolicyV2Async($request)
    {
        return $this->createRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function createRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建签名密钥
     *
     * 为了保护API的安全性，建议租户为API的访问提供一套保护机制，即租户开放的API，需要对请求来源进行认证，不符合认证的请求直接拒绝访问。
     * 
     * 
     * 其中，签名密钥就是API安全保护机制的一种。
     * 
     * 
     * 租户创建一个签名密钥，并将签名密钥与API进行绑定，则API网关在请求这个API时，就会使用绑定的签名密钥对请求参数进行数据加密，生成签名。当租户的后端服务收到请求时，可以校验这个签名，如果签名校验不通过，则该请求不是API网关发出的请求，租户可以拒绝这个请求，从而保证API的安全性，避免API被未知来源的请求攻击。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSignatureKeyV2Async($request)
    {
        return $this->createSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function createSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/signs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建特殊设置
     *
     * 流控策略可以限制一段时间内可以访问API的最大次数，也可以限制一段时间内单个租户和单个APP可以访问API的最大次数。
     * 
     * 如果想要对某个特定的APP进行特殊设置，例如设置所有APP每分钟的访问次数为500次，但想设置APP1每分钟的访问次数为800次，可以通过在流控策略中设置特殊APP来实现该功能。
     * 
     * 为流控策略添加一个特殊设置的对象，可以是APP，也可以是租户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSpecialThrottlingConfigurationV2Async($request)
    {
        return $this->createSpecialThrottlingConfigurationV2AsyncWithHttpInfo($request);
    }
    
    public function createSpecialThrottlingConfigurationV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}/throttle-specials';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateSpecialThrottlingConfigurationV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateSpecialThrottlingConfigurationV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除APP的访问控制
     *
     * 删除凭据的访问控制信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppAclAsync($request)
    {
        return $this->deleteAppAclAsyncWithHttpInfo($request);
    }
    
    public function deleteAppAclAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-acl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppAclResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppAclRequest',
            $asyncRequest = true);
    }

    /**
     * 删除APP Code
     *
     * 删除App Code，App Code删除后，将无法再通过简易认证访问对应的API。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppCodeV2Async($request)
    {
        return $this->deleteAppCodeV2AsyncWithHttpInfo($request);
    }
    
    public function deleteAppCodeV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-codes/{app_code_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['appCodeId'] !== null) {
            $pathParams['app_code_id'] = $localVarParams['appCodeId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppCodeV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppCodeV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除凭据配额
     *
     * 删除凭据配额。删除凭据配额时，同时删除凭据配额和凭据的关联关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppQuotaAsync($request)
    {
        return $this->deleteAppQuotaAsyncWithHttpInfo($request);
    }
    
    public function deleteAppQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 删除APP
     *
     * 删除指定的APP。
     * APP删除后，将无法再调用任何API[；其中，云商店自动创建的APP无法被删除](tag:hws)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppV2Async($request)
    {
        return $this->deleteAppV2AsyncWithHttpInfo($request);
    }
    
    public function deleteAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除自定义认证
     *
     * 删除自定义认证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCustomAuthorizerV2Async($request)
    {
        return $this->deleteCustomAuthorizerV2AsyncWithHttpInfo($request);
    }
    
    public function deleteCustomAuthorizerV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/authorizers/{authorizer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['authorizerId'] !== null) {
            $pathParams['authorizer_id'] = $localVarParams['authorizerId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteCustomAuthorizerV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteCustomAuthorizerV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量删除实例终端节点连接白名单
     *
     * 批量删除实例终端节点连接白名单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEndpointPermissionsAsync($request)
    {
        return $this->deleteEndpointPermissionsAsyncWithHttpInfo($request);
    }
    
    public function deleteEndpointPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-endpoint/permissions/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteEndpointPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteEndpointPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除环境
     *
     * 删除指定的环境。
     * 
     * 该操作将导致此API在指定的环境无法被访问，可能会影响相当一部分应用和用户。请确保已经告知用户，或者确认需要强制下线。
     * 
     * 环境上存在已发布的API时，该环境不能被删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnvironmentV2Async($request)
    {
        return $this->deleteEnvironmentV2AsyncWithHttpInfo($request);
    }
    
    public function deleteEnvironmentV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/envs/{env_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['envId'] !== null) {
            $pathParams['env_id'] = $localVarParams['envId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteEnvironmentV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteEnvironmentV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除变量
     *
     * 删除指定的环境变量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnvironmentVariableV2Async($request)
    {
        return $this->deleteEnvironmentVariableV2AsyncWithHttpInfo($request);
    }
    
    public function deleteEnvironmentVariableV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/env-variables/{env_variable_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['envVariableId'] !== null) {
            $pathParams['env_variable_id'] = $localVarParams['envVariableId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteEnvironmentVariableV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteEnvironmentVariableV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除分组指定错误类型的自定义响应配置
     *
     * 删除分组指定错误类型的自定义响应配置，还原为使用默认值的配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGatewayResponseTypeV2Async($request)
    {
        return $this->deleteGatewayResponseTypeV2AsyncWithHttpInfo($request);
    }
    
    public function deleteGatewayResponseTypeV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses/{response_id}/{response_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['responseId'] !== null) {
            $pathParams['response_id'] = $localVarParams['responseId'];
        }
        if ($localVarParams['responseType'] !== null) {
            $pathParams['response_type'] = $localVarParams['responseType'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteGatewayResponseTypeV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteGatewayResponseTypeV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除分组自定义响应
     *
     * 删除分组自定义响应
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGatewayResponseV2Async($request)
    {
        return $this->deleteGatewayResponseV2AsyncWithHttpInfo($request);
    }
    
    public function deleteGatewayResponseV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses/{response_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['responseId'] !== null) {
            $pathParams['response_id'] = $localVarParams['responseId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteGatewayResponseV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteGatewayResponseV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除专享版实例
     *
     * 删除专享版实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstancesV2Async($request)
    {
        return $this->deleteInstancesV2AsyncWithHttpInfo($request);
    }
    
    public function deleteInstancesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteInstancesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteInstancesV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除插件
     *
     * 删除插件。
     * - 必须先解除API和插件的绑定关系，否则删除报错
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
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeletePluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeletePluginRequest',
            $asyncRequest = true);
    }

    /**
     * 删除流控策略
     *
     * 删除指定的流控策略，以及该流控策略与API的所有绑定关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRequestThrottlingPolicyV2Async($request)
    {
        return $this->deleteRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function deleteRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除签名密钥
     *
     * 删除指定的签名密钥，删除签名密钥时，其配置的绑定关系会一并删除，相应的签名密钥会失效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSignatureKeyV2Async($request)
    {
        return $this->deleteSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function deleteSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/signs/{sign_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['signId'] !== null) {
            $pathParams['sign_id'] = $localVarParams['signId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除特殊设置
     *
     * 删除某个流控策略的某个特殊配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSpecialThrottlingConfigurationV2Async($request)
    {
        return $this->deleteSpecialThrottlingConfigurationV2AsyncWithHttpInfo($request);
    }
    
    public function deleteSpecialThrottlingConfigurationV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}/throttle-specials/{strategy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
        }
        if ($localVarParams['strategyId'] !== null) {
            $pathParams['strategy_id'] = $localVarParams['strategyId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteSpecialThrottlingConfigurationV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteSpecialThrottlingConfigurationV2Request',
            $asyncRequest = true);
    }

    /**
     * 解除绑定插件的API
     *
     * 解除绑定在插件上的API。
     * - 解绑及时生效
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachApiFromPluginAsync($request)
    {
        return $this->detachApiFromPluginAsyncWithHttpInfo($request);
    }
    
    public function detachApiFromPluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}/detach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DetachApiFromPluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DetachApiFromPluginRequest',
            $asyncRequest = true);
    }

    /**
     * 解除绑定API的插件
     *
     * 解除绑定在API上的插件。
     * - 解绑及时生效
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachPluginFromApiAsync($request)
    {
        return $this->detachPluginFromApiAsyncWithHttpInfo($request);
    }
    
    public function detachPluginFromApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}/plugins/detach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DetachPluginFromApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DetachPluginFromApiRequest',
            $asyncRequest = true);
    }

    /**
     * 解除凭据配额和凭据的绑定
     *
     * 解除凭据配额和凭据的绑定
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateAppQuotaWithAppAsync($request)
    {
        return $this->disassociateAppQuotaWithAppAsyncWithHttpInfo($request);
    }
    
    public function disassociateAppQuotaWithAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}/bound-apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateAppQuotaWithAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateAppQuotaWithAppRequest',
            $asyncRequest = true);
    }

    /**
     * 删除域名证书
     *
     * 如果域名证书不再需要或者已过期，则可以删除证书内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateCertificateV2Async($request)
    {
        return $this->disassociateCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function disassociateCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}/certificate/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 解绑域名
     *
     * 如果API分组不再需要绑定某个自定义域名，则可以为此API分组解绑此域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateDomainV2Async($request)
    {
        return $this->disassociateDomainV2AsyncWithHttpInfo($request);
    }
    
    public function disassociateDomainV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateDomainV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateDomainV2Request',
            $asyncRequest = true);
    }

    /**
     * 解除API与签名密钥的绑定关系
     *
     * 解除API与签名密钥的绑定关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateSignatureKeyV2Async($request)
    {
        return $this->disassociateSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function disassociateSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/sign-bindings/{sign_bindings_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['signBindingsId'] !== null) {
            $pathParams['sign_bindings_id'] = $localVarParams['signBindingsId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 异步导出API
     *
     * 导出分组下API的定义信息。导出文件内容符合swagger标准规范，API网关自定义扩展字段请参考《API网关开发指南》的“导入导出API：扩展定义”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportApiDefinitionsAsyncAsync($request)
    {
        return $this->exportApiDefinitionsAsyncAsyncWithHttpInfo($request);
    }
    
    public function exportApiDefinitionsAsyncAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/openapi/async-export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['oasVersion'] !== null) {
            $queryParams['oas_version'] = $localVarParams['oasVersion'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ExportApiDefinitionsAsyncResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ExportApiDefinitionsAsyncRequest',
            $asyncRequest = true);
    }

    /**
     * 异步导入API
     *
     * 导入API。导入文件内容需要符合swagger标准规范，API网关自定义扩展字段请参考《API网关开发指南》的“导入导出API：扩展定义”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importApiDefinitionsAsyncAsync($request)
    {
        return $this->importApiDefinitionsAsyncAsyncWithHttpInfo($request);
    }
    
    public function importApiDefinitionsAsyncAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/openapi/async-import';
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ImportApiDefinitionsAsyncResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ImportApiDefinitionsAsyncRequest',
            $asyncRequest = true);
    }

    /**
     * 导入微服务
     *
     * 导入微服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importMicroserviceAsync($request)
    {
        return $this->importMicroserviceAsyncWithHttpInfo($request);
    }
    
    public function importMicroserviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/microservice/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ImportMicroserviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ImportMicroserviceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可绑定当前API的插件
     *
     * 查询可绑定当前API的插件信息。
     * - 支持分页返回
     * - 支持插件名称模糊查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiAttachablePluginsAsync($request)
    {
        return $this->listApiAttachablePluginsAsyncWithHttpInfo($request);
    }
    
    public function listApiAttachablePluginsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}/attachable-plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['pluginType'] !== null) {
            $queryParams['plugin_type'] = $localVarParams['pluginType'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $queryParams['plugin_id'] = $localVarParams['pluginId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiAttachablePluginsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiAttachablePluginsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API下绑定的插件
     *
     * 查询指定API下绑定的插件信息。
     * - 用于查询指定API下已经绑定的插件列表信息
     * - 支持分页返回
     * - 支持插件名称模糊查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiAttachedPluginsAsync($request)
    {
        return $this->listApiAttachedPluginsAsyncWithHttpInfo($request);
    }
    
    public function listApiAttachedPluginsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}/attached-plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $queryParams['plugin_id'] = $localVarParams['pluginId'];
        }
        if ($localVarParams['envName'] !== null) {
            $queryParams['env_name'] = $localVarParams['envName'];
        }
        if ($localVarParams['pluginType'] !== null) {
            $queryParams['plugin_type'] = $localVarParams['pluginType'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiAttachedPluginsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiAttachedPluginsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API分组概况
     *
     * 查询租户名下的API分组概况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiGroupsQuantitiesV2Async($request)
    {
        return $this->listApiGroupsQuantitiesV2AsyncWithHttpInfo($request);
    }
    
    public function listApiGroupsQuantitiesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/resources/outline/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiGroupsQuantitiesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiGroupsQuantitiesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询API概况
     *
     * 查询租户名下的API概况：已发布到RELEASE环境的API个数，未发布到RELEASE环境的API个数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiQuantitiesV2Async($request)
    {
        return $this->listApiQuantitiesV2AsyncWithHttpInfo($request);
    }
    
    public function listApiQuantitiesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/resources/outline/apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiQuantitiesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiQuantitiesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看签名密钥绑定的API列表
     *
     * 查询某个签名密钥上已经绑定的API列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisBindedToSignatureKeyV2Async($request)
    {
        return $this->listApisBindedToSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function listApisBindedToSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/sign-bindings/binded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['signId'] !== null) {
            $queryParams['sign_id'] = $localVarParams['signId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看签名密钥未绑定的API列表
     *
     * 查询所有未绑定到该签名密钥上的API列表。需要API已经发布，未发布的API不予展示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisNotBoundWithSignatureKeyV2Async($request)
    {
        return $this->listApisNotBoundWithSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function listApisNotBoundWithSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/sign-bindings/unbinded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['signId'] !== null) {
            $queryParams['sign_id'] = $localVarParams['signId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisNotBoundWithSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisNotBoundWithSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询APP Code列表
     *
     * 查询App Code列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppCodesV2Async($request)
    {
        return $this->listAppCodesV2AsyncWithHttpInfo($request);
    }
    
    public function listAppCodesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-codes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppCodesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppCodesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询APP概况
     *
     * 查询租户名下的APP概况：已进行API访问授权的APP个数，未进行API访问授权的APP个数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppQuantitiesV2Async($request)
    {
        return $this->listAppQuantitiesV2AsyncWithHttpInfo($request);
    }
    
    public function listAppQuantitiesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/resources/outline/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuantitiesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuantitiesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询凭据配额可绑定的凭据列表
     *
     * 查询凭据配额可绑定的凭据列表。支持按凭据名称模糊搜索
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppQuotaBindableAppsAsync($request)
    {
        return $this->listAppQuotaBindableAppsAsyncWithHttpInfo($request);
    }
    
    public function listAppQuotaBindableAppsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}/bindable-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuotaBindableAppsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuotaBindableAppsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据配额已绑定的凭据列表
     *
     * 查询凭据配额已绑定的凭据列表。支持按凭据名称模糊匹配
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppQuotaBoundAppsAsync($request)
    {
        return $this->listAppQuotaBoundAppsAsyncWithHttpInfo($request);
    }
    
    public function listAppQuotaBoundAppsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}/bound-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuotaBoundAppsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuotaBoundAppsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取凭据配额列表
     *
     * 获取凭据配额列表。支持根据名称模糊查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppQuotasAsync($request)
    {
        return $this->listAppQuotasAsyncWithHttpInfo($request);
    }
    
    public function listAppQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询APP列表
     *
     * 查询APP列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppsV2Async($request)
    {
        return $this->listAppsV2AsyncWithHttpInfo($request);
    }
    
    public function listAppsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['appKey'] !== null) {
            $queryParams['app_key'] = $localVarParams['appKey'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看可用区信息
     *
     * 查看可用区信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailableZonesV2Async($request)
    {
        return $this->listAvailableZonesV2AsyncWithHttpInfo($request);
    }
    
    public function listAvailableZonesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/available-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAvailableZonesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAvailableZonesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询自定义认证列表
     *
     * 查询自定义认证列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomAuthorizersV2Async($request)
    {
        return $this->listCustomAuthorizersV2AsyncWithHttpInfo($request);
    }
    
    public function listCustomAuthorizersV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/authorizers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListCustomAuthorizersV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListCustomAuthorizersV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询实例终端节点连接列表
     *
     * 查询实例终端节点连接列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndpointConnectionsAsync($request)
    {
        return $this->listEndpointConnectionsAsyncWithHttpInfo($request);
    }
    
    public function listEndpointConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-endpoint/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['markerId'] !== null) {
            $queryParams['marker_id'] = $localVarParams['markerId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListEndpointConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListEndpointConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例的终端节点服务的白名单列表
     *
     * 查询当前实例终端节点服务的白名单列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndpointPermissionsAsync($request)
    {
        return $this->listEndpointPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listEndpointPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-endpoint/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permission'] !== null) {
            $queryParams['permission'] = $localVarParams['permission'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListEndpointPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListEndpointPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询变量列表
     *
     * 查询分组下的所有环境变量的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvironmentVariablesV2Async($request)
    {
        return $this->listEnvironmentVariablesV2AsyncWithHttpInfo($request);
    }
    
    public function listEnvironmentVariablesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/env-variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['variableName'] !== null) {
            $queryParams['variable_name'] = $localVarParams['variableName'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListEnvironmentVariablesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListEnvironmentVariablesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询环境列表
     *
     * 查询符合条件的环境列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvironmentsV2Async($request)
    {
        return $this->listEnvironmentsV2AsyncWithHttpInfo($request);
    }
    
    public function listEnvironmentsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/envs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListEnvironmentsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListEnvironmentsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看实例特性列表
     *
     * 查看实例特性列表。注意：实例不支持以下特性的需要联系技术支持升级实例版本。
     * 
     * 支持配置的特性列表及特性配置示例请参考本手册中的“附录 &gt; 实例支持的APIG特性”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFeaturesV2Async($request)
    {
        return $this->listFeaturesV2AsyncWithHttpInfo($request);
    }
    
    public function listFeaturesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListFeaturesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListFeaturesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询分组自定义响应列表
     *
     * 查询分组自定义响应列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGatewayResponsesV2Async($request)
    {
        return $this->listGatewayResponsesV2AsyncWithHttpInfo($request);
    }
    
    public function listGatewayResponsesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListGatewayResponsesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListGatewayResponsesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询租户实例配置列表
     *
     * 查询租户实例配置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceConfigsV2Async($request)
    {
        return $this->listInstanceConfigsV2AsyncWithHttpInfo($request);
    }
    
    public function listInstanceConfigsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instance/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstanceConfigsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstanceConfigsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询实例支持的特性列表
     *
     * 查询实例支持的特性列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceFeaturesAsync($request)
    {
        return $this->listInstanceFeaturesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceFeaturesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/instance-features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstanceFeaturesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstanceFeaturesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个实例标签
     *
     * 查询单个实例的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceTagsAsync($request)
    {
        return $this->listInstanceTagsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/instance-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstanceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstanceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询专享版实例列表
     *
     * 查询专享版实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstancesV2Async($request)
    {
        return $this->listInstancesV2AsyncWithHttpInfo($request);
    }
    
    public function listInstancesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $queryParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstancesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListInstancesV2Request',
            $asyncRequest = true);
    }

    /**
     * API统计信息查询-最近一段时间
     *
     * 根据API的id和最近的一段时间查询API被调用的次数，统计周期为1分钟。查询范围一小时以内，一分钟一个样本，其样本值为一分钟内的累计值。
     * &gt; 为了安全起见，在服务器上使用curl命令调用接口查询信息后，需要清理历史操作记录，包括但不限于“~/.bash_history”、“/var/log/messages”（如有）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLatelyApiStatisticsV2Async($request)
    {
        return $this->listLatelyApiStatisticsV2AsyncWithHttpInfo($request);
    }
    
    public function listLatelyApiStatisticsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/statistics/api/latest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['duration'] !== null) {
            $queryParams['duration'] = $localVarParams['duration'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListLatelyApiStatisticsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListLatelyApiStatisticsV2Request',
            $asyncRequest = true);
    }

    /**
     * 分组统计信息查询-最近一小时内
     *
     * 根据API分组的编号查询该分组下所有API被调用的总次数，统计周期为1分钟。查询范围一小时以内，一分钟一个样本，其样本值为一分钟内的累计值。
     * &gt; 为了安全起见，在服务器上使用curl命令调用接口查询信息后，需要清理历史操作记录，包括但不限于“~/.bash_history”、“/var/log/messages”（如有）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLatelyGroupStatisticsV2Async($request)
    {
        return $this->listLatelyGroupStatisticsV2AsyncWithHttpInfo($request);
    }
    
    public function listLatelyGroupStatisticsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/statistics/group/latest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListLatelyGroupStatisticsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListLatelyGroupStatisticsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询监控数据
     *
     * 查询指定时间范围指定指标的指定粒度的监控数据，可以通过参数指定需要查询的数据维度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetricDataAsync($request)
    {
        return $this->listMetricDataAsyncWithHttpInfo($request);
    }
    
    public function listMetricDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/metric-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dim'] !== null) {
            $queryParams['dim'] = $localVarParams['dim'];
        }
        if ($localVarParams['metricName'] !== null) {
            $queryParams['metric_name'] = $localVarParams['metricName'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListMetricDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListMetricDataRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可绑定当前插件的API
     *
     * 查询可绑定当前插件的API信息。
     * - 支持分页返回
     * - 支持API名称模糊查询
     * - 支持已绑定其他插件的API查询返回
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPluginAttachableApisAsync($request)
    {
        return $this->listPluginAttachableApisAsyncWithHttpInfo($request);
    }
    
    public function listPluginAttachableApisAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}/attachable-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['reqMethod'] !== null) {
            $queryParams['req_method'] = $localVarParams['reqMethod'];
        }
        if ($localVarParams['reqUri'] !== null) {
            $queryParams['req_uri'] = $localVarParams['reqUri'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListPluginAttachableApisResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListPluginAttachableApisRequest',
            $asyncRequest = true);
    }

    /**
     * 查询插件下绑定的API
     *
     * 查询指定插件下绑定的API信息。
     * - 用于查询指定插件下已经绑定的API列表信息
     * - 支持分页返回
     * - 支持API名称模糊查询
     * - 绑定关系列表中返回的API在对应的环境中可能已经下线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPluginAttachedApisAsync($request)
    {
        return $this->listPluginAttachedApisAsyncWithHttpInfo($request);
    }
    
    public function listPluginAttachedApisAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}/attached-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['reqMethod'] !== null) {
            $queryParams['req_method'] = $localVarParams['reqMethod'];
        }
        if ($localVarParams['reqUri'] !== null) {
            $queryParams['req_uri'] = $localVarParams['reqUri'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListPluginAttachedApisResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListPluginAttachedApisRequest',
            $asyncRequest = true);
    }

    /**
     * 查询插件列表
     *
     * 查询一组符合条件的API网关插件详情。
     * - 支持分页
     * - 支持根据插件类型查询
     * - 支持根据插件可见范围查询
     * - 支持根据插件编码查询
     * - 支持根据名称模糊查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPluginsAsync($request)
    {
        return $this->listPluginsAsyncWithHttpInfo($request);
    }
    
    public function listPluginsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pluginType'] !== null) {
            $queryParams['plugin_type'] = $localVarParams['pluginType'];
        }
        if ($localVarParams['pluginScope'] !== null) {
            $queryParams['plugin_scope'] = $localVarParams['pluginScope'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $queryParams['plugin_id'] = $localVarParams['pluginId'];
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListPluginsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListPluginsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询某个实例的租户配置列表
     *
     * 查询某个实例的租户配置列表，用户可以通过此接口查看各类型资源配置及使用情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectCofigsV2Async($request)
    {
        return $this->listProjectCofigsV2AsyncWithHttpInfo($request);
    }
    
    public function listProjectCofigsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/project/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListProjectCofigsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListProjectCofigsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询项目下所有实例标签
     *
     * 查询项目下所有实例标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectInstanceTagsAsync($request)
    {
        return $this->listProjectInstanceTagsAsyncWithHttpInfo($request);
    }
    
    public function listProjectInstanceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instance-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListProjectInstanceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListProjectInstanceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询流控策略列表
     *
     * 查询所有流控策略的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRequestThrottlingPolicyV2Async($request)
    {
        return $this->listRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function listRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看API绑定的签名密钥列表
     *
     * 查询某个API绑定的签名密钥列表。每个API在每个环境上应该最多只会绑定一个签名密钥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSignatureKeysBindedToApiV2Async($request)
    {
        return $this->listSignatureKeysBindedToApiV2AsyncWithHttpInfo($request);
    }
    
    public function listSignatureKeysBindedToApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/sign-bindings/binded-signs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['signId'] !== null) {
            $queryParams['sign_id'] = $localVarParams['signId'];
        }
        if ($localVarParams['signName'] !== null) {
            $queryParams['sign_name'] = $localVarParams['signName'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListSignatureKeysBindedToApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListSignatureKeysBindedToApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询签名密钥列表
     *
     * 查询所有签名密钥的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSignatureKeysV2Async($request)
    {
        return $this->listSignatureKeysV2AsyncWithHttpInfo($request);
    }
    
    public function listSignatureKeysV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/signs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListSignatureKeysV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListSignatureKeysV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看特殊设置列表
     *
     * 查看给流控策略设置的特殊配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSpecialThrottlingConfigurationsV2Async($request)
    {
        return $this->listSpecialThrottlingConfigurationsV2AsyncWithHttpInfo($request);
    }
    
    public function listSpecialThrottlingConfigurationsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}/throttle-specials';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['objectType'] !== null) {
            $queryParams['object_type'] = $localVarParams['objectType'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['user'] !== null) {
            $queryParams['user'] = $localVarParams['user'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListSpecialThrottlingConfigurationsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListSpecialThrottlingConfigurationsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询标签列表
     *
     * 查询标签列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagsV2Async($request)
    {
        return $this->listTagsV2AsyncWithHttpInfo($request);
    }
    
    public function listTagsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListTagsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListTagsV2Request',
            $asyncRequest = true);
    }

    /**
     * 实例解绑EIP
     *
     * 实例解绑EIP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeEipV2Async($request)
    {
        return $this->removeEipV2AsyncWithHttpInfo($request);
    }
    
    public function removeEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\RemoveEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\RemoveEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 关闭实例公网出口
     *
     * 关闭实例公网出口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeEngressEipV2Async($request)
    {
        return $this->removeEngressEipV2AsyncWithHttpInfo($request);
    }
    
    public function removeEngressEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/nat-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\RemoveEngressEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\RemoveEngressEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 关闭实例公网入口
     *
     * 关闭实例公网入口，仅当实例为ELB类型时支持
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeIngressEipV2Async($request)
    {
        return $this->removeIngressEipV2AsyncWithHttpInfo($request);
    }
    
    public function removeIngressEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/ingress-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\RemoveIngressEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\RemoveIngressEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 重置密钥
     *
     * 重置指定APP的密钥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resettingAppSecretV2Async($request)
    {
        return $this->resettingAppSecretV2AsyncWithHttpInfo($request);
    }
    
    public function resettingAppSecretV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/secret/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ResettingAppSecretV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ResettingAppSecretV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询凭据关联的凭据配额
     *
     * 查看指定凭据关联的凭据配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppBoundAppQuotaAsync($request)
    {
        return $this->showAppBoundAppQuotaAsyncWithHttpInfo($request);
    }
    
    public function showAppBoundAppQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/bound-quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowAppBoundAppQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowAppBoundAppQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 获取凭据配额详情
     *
     * 获取凭据配额详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppQuotaAsync($request)
    {
        return $this->showAppQuotaAsyncWithHttpInfo($request);
    }
    
    public function showAppQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowAppQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowAppQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 获取异步任务结果
     *
     * 获取异步任务结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAsyncTaskResultAsync($request)
    {
        return $this->showAsyncTaskResultAsyncWithHttpInfo($request);
    }
    
    public function showAsyncTaskResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/async-tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1', 'application/json-2', 'application/json-3', 'application/json-4']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1', 'application/json-2', 'application/json-3', 'application/json-4'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowAsyncTaskResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowAsyncTaskResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查看APP的访问控制详情
     *
     * 查看APP的访问控制详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfAppAclAsync($request)
    {
        return $this->showDetailsOfAppAclAsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfAppAclAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-acl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAppAclResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAppAclRequest',
            $asyncRequest = true);
    }

    /**
     * 查看APP Code详情
     *
     * App Code为APP应用下的子模块，创建App Code之后，可以实现简易的APP认证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfAppCodeV2Async($request)
    {
        return $this->showDetailsOfAppCodeV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfAppCodeV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-codes/{app_code_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['appCodeId'] !== null) {
            $pathParams['app_code_id'] = $localVarParams['appCodeId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAppCodeV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAppCodeV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看APP详情
     *
     * 查看指定APP的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfAppV2Async($request)
    {
        return $this->showDetailsOfAppV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看自定义认证详情
     *
     * 查看自定义认证详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfCustomAuthorizersV2Async($request)
    {
        return $this->showDetailsOfCustomAuthorizersV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfCustomAuthorizersV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/authorizers/{authorizer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['authorizerId'] !== null) {
            $pathParams['authorizer_id'] = $localVarParams['authorizerId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfCustomAuthorizersV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfCustomAuthorizersV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看域名证书
     *
     * 查看域名下绑定的证书详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfDomainNameCertificateV2Async($request)
    {
        return $this->showDetailsOfDomainNameCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfDomainNameCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}/certificate/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfDomainNameCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfDomainNameCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看变量详情
     *
     * 查看指定的环境变量的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfEnvironmentVariableV2Async($request)
    {
        return $this->showDetailsOfEnvironmentVariableV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfEnvironmentVariableV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/env-variables/{env_variable_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['envVariableId'] !== null) {
            $pathParams['env_variable_id'] = $localVarParams['envVariableId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfEnvironmentVariableV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfEnvironmentVariableV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看分组下指定错误类型的自定义响应
     *
     * 查看分组下指定错误类型的自定义响应
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfGatewayResponseTypeV2Async($request)
    {
        return $this->showDetailsOfGatewayResponseTypeV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfGatewayResponseTypeV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses/{response_id}/{response_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['responseId'] !== null) {
            $pathParams['response_id'] = $localVarParams['responseId'];
        }
        if ($localVarParams['responseType'] !== null) {
            $pathParams['response_type'] = $localVarParams['responseType'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfGatewayResponseTypeV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfGatewayResponseTypeV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询分组自定义响应详情
     *
     * 查询分组自定义响应详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfGatewayResponseV2Async($request)
    {
        return $this->showDetailsOfGatewayResponseV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfGatewayResponseV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses/{response_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['responseId'] !== null) {
            $pathParams['response_id'] = $localVarParams['responseId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfGatewayResponseV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfGatewayResponseV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看专享版实例创建进度
     *
     * 查看专享版实例创建进度
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfInstanceProgressV2Async($request)
    {
        return $this->showDetailsOfInstanceProgressV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfInstanceProgressV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/progress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfInstanceProgressV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfInstanceProgressV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看专享版实例详情
     *
     * 查看专享版实例详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfInstanceV2Async($request)
    {
        return $this->showDetailsOfInstanceV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfInstanceV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfInstanceV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfInstanceV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看流控策略详情
     *
     * 查看指定流控策略的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfRequestThrottlingPolicyV2Async($request)
    {
        return $this->showDetailsOfRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询插件详情
     *
     * 查询插件详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginAsync($request)
    {
        return $this->showPluginAsyncWithHttpInfo($request);
    }
    
    public function showPluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowPluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowPluginRequest',
            $asyncRequest = true);
    }

    /**
     * 查看实例约束信息
     *
     * 查看实例约束信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRestrictionOfInstanceV2Async($request)
    {
        return $this->showRestrictionOfInstanceV2AsyncWithHttpInfo($request);
    }
    
    public function showRestrictionOfInstanceV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/restriction';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowRestrictionOfInstanceV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowRestrictionOfInstanceV2Request',
            $asyncRequest = true);
    }

    /**
     * 设置APP的访问控制
     *
     * 设置凭据的访问控制。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppAclAsync($request)
    {
        return $this->updateAppAclAsyncWithHttpInfo($request);
    }
    
    public function updateAppAclAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}/app-acl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAppAclResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAppAclRequest',
            $asyncRequest = true);
    }

    /**
     * 修改凭据配额
     *
     * 修改凭据配额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppQuotaAsync($request)
    {
        return $this->updateAppQuotaAsyncWithHttpInfo($request);
    }
    
    public function updateAppQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-quotas/{app_quota_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appQuotaId'] !== null) {
            $pathParams['app_quota_id'] = $localVarParams['appQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAppQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAppQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 修改APP
     *
     * 修改指定APP的信息。其中可修改的属性为：name、remark，当支持用户自定义key和secret的开关开启时，app_key和app_secret也支持修改，其它属性不可修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppV2Async($request)
    {
        return $this->updateAppV2AsyncWithHttpInfo($request);
    }
    
    public function updateAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改自定义认证
     *
     * 修改自定义认证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCustomAuthorizerV2Async($request)
    {
        return $this->updateCustomAuthorizerV2AsyncWithHttpInfo($request);
    }
    
    public function updateCustomAuthorizerV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/authorizers/{authorizer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['authorizerId'] !== null) {
            $pathParams['authorizer_id'] = $localVarParams['authorizerId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateCustomAuthorizerV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateCustomAuthorizerV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改域名
     *
     * 修改绑定的域名所对应的配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDomainV2Async($request)
    {
        return $this->updateDomainV2AsyncWithHttpInfo($request);
    }
    
    public function updateDomainV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateDomainV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateDomainV2Request',
            $asyncRequest = true);
    }

    /**
     * 更新实例出公网带宽
     *
     * 更新实例出公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEngressEipV2Async($request)
    {
        return $this->updateEngressEipV2AsyncWithHttpInfo($request);
    }
    
    public function updateEngressEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/nat-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateEngressEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateEngressEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改环境
     *
     * 修改指定环境的信息。其中可修改的属性为：name、remark，其它属性不可修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEnvironmentV2Async($request)
    {
        return $this->updateEnvironmentV2AsyncWithHttpInfo($request);
    }
    
    public function updateEnvironmentV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/envs/{env_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['envId'] !== null) {
            $pathParams['env_id'] = $localVarParams['envId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateEnvironmentV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateEnvironmentV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改变量
     *
     * 修改环境变量。环境变量引用位置为api的后端服务地址时，修改对应环境变量会将使用该变量的所有api重新发布。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEnvironmentVariableV2Async($request)
    {
        return $this->updateEnvironmentVariableV2AsyncWithHttpInfo($request);
    }
    
    public function updateEnvironmentVariableV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/env-variables/{env_variable_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['envVariableId'] !== null) {
            $pathParams['env_variable_id'] = $localVarParams['envVariableId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateEnvironmentVariableV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateEnvironmentVariableV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改分组下指定错误类型的自定义响应
     *
     * 修改分组下指定错误类型的自定义响应。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGatewayResponseTypeV2Async($request)
    {
        return $this->updateGatewayResponseTypeV2AsyncWithHttpInfo($request);
    }
    
    public function updateGatewayResponseTypeV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses/{response_id}/{response_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['responseId'] !== null) {
            $pathParams['response_id'] = $localVarParams['responseId'];
        }
        if ($localVarParams['responseType'] !== null) {
            $pathParams['response_type'] = $localVarParams['responseType'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateGatewayResponseTypeV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateGatewayResponseTypeV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改分组自定义响应
     *
     * 修改分组自定义响应
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGatewayResponseV2Async($request)
    {
        return $this->updateGatewayResponseV2AsyncWithHttpInfo($request);
    }
    
    public function updateGatewayResponseV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/gateway-responses/{response_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['responseId'] !== null) {
            $pathParams['response_id'] = $localVarParams['responseId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateGatewayResponseV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateGatewayResponseV2Request',
            $asyncRequest = true);
    }

    /**
     * 更新实例入公网带宽
     *
     * 更新实例入公网带宽，仅当实例为ELB类型时支持
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIngressEipV2Async($request)
    {
        return $this->updateIngressEipV2AsyncWithHttpInfo($request);
    }
    
    public function updateIngressEipV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/ingress-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateIngressEipV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateIngressEipV2Request',
            $asyncRequest = true);
    }

    /**
     * 更新专享版实例
     *
     * 更新专享版实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceV2Async($request)
    {
        return $this->updateInstanceV2AsyncWithHttpInfo($request);
    }
    
    public function updateInstanceV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateInstanceV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateInstanceV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改插件
     *
     * 修改插件信息。
     * - 插件不允许重名
     * - 插件不支持修改类型和可见范围
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePluginAsync($request)
    {
        return $this->updatePluginAsyncWithHttpInfo($request);
    }
    
    public function updatePluginAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/plugins/{plugin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pluginId'] !== null) {
            $pathParams['plugin_id'] = $localVarParams['pluginId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json-1', 'application/json-2', 'application/json-3', 'application/json-4', 'application/json-5', 'application/json-6']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json-1', 'application/json-2', 'application/json-3', 'application/json-4', 'application/json-5', 'application/json-6'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdatePluginResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdatePluginRequest',
            $asyncRequest = true);
    }

    /**
     * 修改流控策略
     *
     * 修改指定流控策略的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRequestThrottlingPolicyV2Async($request)
    {
        return $this->updateRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function updateRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改签名密钥
     *
     * 修改指定签名密钥的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSignatureKeyV2Async($request)
    {
        return $this->updateSignatureKeyV2AsyncWithHttpInfo($request);
    }
    
    public function updateSignatureKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/signs/{sign_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['signId'] !== null) {
            $pathParams['sign_id'] = $localVarParams['signId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateSignatureKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateSignatureKeyV2Request',
            $asyncRequest = true);
    }

    /**
     * 设置调试域名是否可以访问
     *
     * 禁用或启用API分组绑定的调试域名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSlDomainSettingV2Async($request)
    {
        return $this->updateSlDomainSettingV2AsyncWithHttpInfo($request);
    }
    
    public function updateSlDomainSettingV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/sl-domain-access-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateSlDomainSettingV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateSlDomainSettingV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改特殊设置
     *
     * 修改某个流控策略下的某个特殊设置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSpecialThrottlingConfigurationV2Async($request)
    {
        return $this->updateSpecialThrottlingConfigurationV2AsyncWithHttpInfo($request);
    }
    
    public function updateSpecialThrottlingConfigurationV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttles/{throttle_id}/throttle-specials/{strategy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $pathParams['throttle_id'] = $localVarParams['throttleId'];
        }
        if ($localVarParams['strategyId'] !== null) {
            $pathParams['strategy_id'] = $localVarParams['strategyId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateSpecialThrottlingConfigurationV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateSpecialThrottlingConfigurationV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量删除ACL策略
     *
     * 批量删除指定的多个ACL策略。
     * 
     * 删除ACL策略时，如果存在ACL策略与API绑定关系，则无法删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAclV2Async($request)
    {
        return $this->batchDeleteAclV2AsyncWithHttpInfo($request);
    }
    
    public function batchDeleteAclV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDeleteAclV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDeleteAclV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建ACL策略
     *
     * 增加一个ACL策略，策略类型通过字段acl_type来确定（permit或者deny），限制的对象的类型可以为IP或者DOMAIN，这里的DOMAIN对应的acl_value的值为租户名称，而非“www.exampleDomain.com”之类的网络域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAclStrategyV2Async($request)
    {
        return $this->createAclStrategyV2AsyncWithHttpInfo($request);
    }
    
    public function createAclStrategyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAclStrategyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAclStrategyV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除ACL策略
     *
     * 删除指定的ACL策略， 如果存在api与该ACL策略的绑定关系，则无法删除
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAclV2Async($request)
    {
        return $this->deleteAclV2AsyncWithHttpInfo($request);
    }
    
    public function deleteAclV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acls/{acl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['aclId'] !== null) {
            $pathParams['acl_id'] = $localVarParams['aclId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAclV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteAclV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看ACL策略列表
     *
     * 查询所有的ACL策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclStrategiesV2Async($request)
    {
        return $this->listAclStrategiesV2AsyncWithHttpInfo($request);
    }
    
    public function listAclStrategiesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['aclType'] !== null) {
            $queryParams['acl_type'] = $localVarParams['aclType'];
        }
        if ($localVarParams['entityType'] !== null) {
            $queryParams['entity_type'] = $localVarParams['entityType'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAclStrategiesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAclStrategiesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看ACL策略详情
     *
     * 查询指定ACL策略的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfAclPolicyV2Async($request)
    {
        return $this->showDetailsOfAclPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfAclPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acls/{acl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['aclId'] !== null) {
            $pathParams['acl_id'] = $localVarParams['aclId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAclPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfAclPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改ACL策略
     *
     * 修改指定的ACL策略，其中可修改的属性为：acl_name、acl_type、acl_value，其它属性不可修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAclStrategyV2Async($request)
    {
        return $this->updateAclStrategyV2AsyncWithHttpInfo($request);
    }
    
    public function updateAclStrategyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acls/{acl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['aclId'] !== null) {
            $pathParams['acl_id'] = $localVarParams['aclId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAclStrategyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateAclStrategyV2Request',
            $asyncRequest = true);
    }

    /**
     * 绑定流控策略
     *
     * 将流控策略应用于API，则所有对该API的访问将会受到该流控策略的限制。
     * 
     * 
     * 当一定时间内的访问次数超过流控策略设置的API最大访问次数限制后，后续的访问将会被拒绝，从而能够较好的保护后端API免受异常流量的冲击，保障服务的稳定运行。
     * 
     * 
     * 为指定的API绑定流控策略，绑定时，需要指定在哪个环境上生效。同一个API发布到不同的环境可以绑定不同的流控策略；一个API在发布到特定环境后只能绑定一个默认的流控策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateRequestThrottlingPolicyV2Async($request)
    {
        return $this->associateRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function associateRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttle-bindings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AssociateRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量解绑流控策略
     *
     * 批量解除API与流控策略的绑定关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDisassociateThrottlingPolicyV2Async($request)
    {
        return $this->batchDisassociateThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function batchDisassociateThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttle-bindings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisassociateThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisassociateThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量发布或下线API
     *
     * 将多个API发布到一个指定的环境，或将多个API从指定的环境下线。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchPublishOrOfflineApiV2Async($request)
    {
        return $this->batchPublishOrOfflineApiV2AsyncWithHttpInfo($request);
    }
    
    public function batchPublishOrOfflineApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchPublishOrOfflineApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchPublishOrOfflineApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 切换API版本
     *
     * API每次发布时，会基于当前的API定义生成一个版本。版本记录了API发布时的各种定义及状态。
     * 
     * 多个版本之间可以进行随意切换。但一个API在一个环境上，只能有一个版本生效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeApiVersionV2Async($request)
    {
        return $this->changeApiVersionV2AsyncWithHttpInfo($request);
    }
    
    public function changeApiVersionV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/publish/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ChangeApiVersionV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ChangeApiVersionV2Request',
            $asyncRequest = true);
    }

    /**
     * 校验API分组名称是否存在
     *
     * 校验API分组名称是否存在。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkApiGroupsV2Async($request)
    {
        return $this->checkApiGroupsV2AsyncWithHttpInfo($request);
    }
    
    public function checkApiGroupsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CheckApiGroupsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CheckApiGroupsV2Request',
            $asyncRequest = true);
    }

    /**
     * 校验API定义
     *
     * 校验API定义。校验API的路径或名称是否已存在
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkApisV2Async($request)
    {
        return $this->checkApisV2AsyncWithHttpInfo($request);
    }
    
    public function checkApisV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CheckApisV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CheckApisV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建API分组
     *
     * API分组是API的管理单元，一个API分组等同于一个服务入口，创建API分组时，返回一个子域名作为访问入口。建议一个API分组下的API具有一定的相关性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApiGroupV2Async($request)
    {
        return $this->createApiGroupV2AsyncWithHttpInfo($request);
    }
    
    public function createApiGroupV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateApiGroupV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateApiGroupV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建API
     *
     * 添加一个API，API即一个服务接口，具体的服务能力。
     * 
     * 
     * API分为两部分，第一部分为面向API使用者的API接口，定义了使用者如何调用这个API。第二部分面向API提供者，由API提供者定义这个API的真实的后端情况，定义了API网关如何去访问真实的后端服务。API的真实后端服务目前支持四种类型：传统的HTTP/HTTPS形式的web后端、GRPC后端、函数工作流、MOCK。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApiV2Async($request)
    {
        return $this->createApiV2AsyncWithHttpInfo($request);
    }
    
    public function createApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1', 'application/json-2', 'application/json-3']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1', 'application/json-2', 'application/json-3'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 发布或下线API
     *
     * 对API进行发布或下线。
     * 
     * 发布操作是将一个指定的API发布到一个指定的环境，API只有发布后，才能够被调用，且只能在该环境上才能被调用。未发布的API无法被调用。
     * 
     * 下线操作是将API从某个已发布的环境上下线，下线后，API将无法再被调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrDeletePublishRecordForApiV2Async($request)
    {
        return $this->createOrDeletePublishRecordForApiV2AsyncWithHttpInfo($request);
    }
    
    public function createOrDeletePublishRecordForApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateOrDeletePublishRecordForApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateOrDeletePublishRecordForApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 调试API
     *
     * 调试一个API在指定运行环境下的定义，接口调用者需要具有操作该API的权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function debugApiV2Async($request)
    {
        return $this->debugApiV2AsyncWithHttpInfo($request);
    }
    
    public function debugApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/debug/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DebugApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DebugApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 根据版本编号下线API
     *
     * 对某个生效中的API版本进行下线操作，下线后，API在该版本生效的环境中将不再能够被调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApiByVersionIdV2Async($request)
    {
        return $this->deleteApiByVersionIdV2AsyncWithHttpInfo($request);
    }
    
    public function deleteApiByVersionIdV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/versions/{version_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiByVersionIdV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiByVersionIdV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除API分组
     *
     * 删除指定的API分组。
     * 
     * 删除API分组前，要先下线并删除分组下的所有API。
     * 
     * 删除时，会一并删除直接或间接关联到该分组下的所有资源，包括独立域名、SSL证书信息等等。并会将外部域名与子域名的绑定关系进行解除（取决于域名cname方式）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApiGroupV2Async($request)
    {
        return $this->deleteApiGroupV2AsyncWithHttpInfo($request);
    }
    
    public function deleteApiGroupV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiGroupV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiGroupV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除API
     *
     * 删除指定的API。
     * 
     * 删除API时，会删除该API所有相关的资源信息或绑定关系，如API的发布记录，绑定的后端服务，对APP的授权信息等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApiV2Async($request)
    {
        return $this->deleteApiV2AsyncWithHttpInfo($request);
    }
    
    public function deleteApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 解除API与流控策略的绑定关系
     *
     * 解除API与流控策略的绑定关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateRequestThrottlingPolicyV2Async($request)
    {
        return $this->disassociateRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function disassociateRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttle-bindings/{throttle_binding_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['throttleBindingId'] !== null) {
            $pathParams['throttle_binding_id'] = $localVarParams['throttleBindingId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DisassociateRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询分组列表
     *
     * 查询API分组列表。
     * 
     * 如果是租户操作，则查询该租户下所有的分组；如果是管理员权限账号操作，则查询的是所有租户的分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiGroupsV2Async($request)
    {
        return $this->listApiGroupsV2AsyncWithHttpInfo($request);
    }
    
    public function listApiGroupsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiGroupsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiGroupsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询API运行时定义
     *
     * 查看指定的API在指定的环境上的运行时定义，默认查询RELEASE环境上的运行时定义。
     * 
     * API的定义分为临时定义和运行时定义，分别代表如下含义：
     * - 临时定义：API在编辑中的定义，表示用户最后一次编辑后的API的状态
     * - 运行时定义：API在发布到某个环境时，对发布时的API的临时定义进行快照，固化出来的API的状态。
     * 
     * 访问某个环境上的API，其实访问的就是其运行时的定义
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiRuntimeDefinitionV2Async($request)
    {
        return $this->listApiRuntimeDefinitionV2AsyncWithHttpInfo($request);
    }
    
    public function listApiRuntimeDefinitionV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/runtime/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiRuntimeDefinitionV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiRuntimeDefinitionV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看版本详情
     *
     * 查询某个指定的版本详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersionDetailV2Async($request)
    {
        return $this->listApiVersionDetailV2AsyncWithHttpInfo($request);
    }
    
    public function listApiVersionDetailV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/versions/{version_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiVersionDetailV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiVersionDetailV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询API历史版本列表
     *
     * 查询某个API的历史版本。每个API在一个环境上最多存在10个历史版本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersionsV2Async($request)
    {
        return $this->listApiVersionsV2AsyncWithHttpInfo($request);
    }
    
    public function listApiVersionsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/publish/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['envName'] !== null) {
            $queryParams['env_name'] = $localVarParams['envName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiVersionsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApiVersionsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看流控策略绑定的API列表
     *
     * 查询某个流控策略上已经绑定的API列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisBindedToRequestThrottlingPolicyV2Async($request)
    {
        return $this->listApisBindedToRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function listApisBindedToRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttle-bindings/binded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['throttleId'] !== null) {
            $queryParams['throttle_id'] = $localVarParams['throttleId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看流控策略未绑定的API列表
     *
     * 查询所有未绑定到该流控策略上的自有API列表。需要API已经发布，未发布的API不予展示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisUnbindedToRequestThrottlingPolicyV2Async($request)
    {
        return $this->listApisUnbindedToRequestThrottlingPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function listApisUnbindedToRequestThrottlingPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttle-bindings/unbinded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['throttleId'] !== null) {
            $queryParams['throttle_id'] = $localVarParams['throttleId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisUnbindedToRequestThrottlingPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisUnbindedToRequestThrottlingPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询API列表
     *
     * 查看API列表，返回API详细信息、发布信息等，但不能查看到后端服务信息和API请求参数信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisV2Async($request)
    {
        return $this->listApisV2AsyncWithHttpInfo($request);
    }
    
    public function listApisV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['reqProtocol'] !== null) {
            $queryParams['req_protocol'] = $localVarParams['reqProtocol'];
        }
        if ($localVarParams['reqMethod'] !== null) {
            $queryParams['req_method'] = $localVarParams['reqMethod'];
        }
        if ($localVarParams['reqUri'] !== null) {
            $queryParams['req_uri'] = $localVarParams['reqUri'];
        }
        if ($localVarParams['authType'] !== null) {
            $queryParams['auth_type'] = $localVarParams['authType'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['vpcChannelName'] !== null) {
            $queryParams['vpc_channel_name'] = $localVarParams['vpcChannelName'];
        }
        if ($localVarParams['returnDataMode'] !== null) {
            $queryParams['return_data_mode'] = $localVarParams['returnDataMode'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看API绑定的流控策略列表
     *
     * 查询某个API绑定的流控策略列表。每个环境上应该最多只有一个流控策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRequestThrottlingPoliciesBindedToApiV2Async($request)
    {
        return $this->listRequestThrottlingPoliciesBindedToApiV2AsyncWithHttpInfo($request);
    }
    
    public function listRequestThrottlingPoliciesBindedToApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/throttle-bindings/binded-throttles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['throttleId'] !== null) {
            $queryParams['throttle_id'] = $localVarParams['throttleId'];
        }
        if ($localVarParams['throttleName'] !== null) {
            $queryParams['throttle_name'] = $localVarParams['throttleName'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListRequestThrottlingPoliciesBindedToApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListRequestThrottlingPoliciesBindedToApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询分组详情
     *
     * 查询指定分组的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfApiGroupV2Async($request)
    {
        return $this->showDetailsOfApiGroupV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfApiGroupV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfApiGroupV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfApiGroupV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询API详情
     *
     * 查看指定的API的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfApiV2Async($request)
    {
        return $this->showDetailsOfApiV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改API分组
     *
     * 修改API分组属性。其中name和remark可修改，其他属性不可修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApiGroupV2Async($request)
    {
        return $this->updateApiGroupV2AsyncWithHttpInfo($request);
    }
    
    public function updateApiGroupV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateApiGroupV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateApiGroupV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改API
     *
     * 修改指定API的信息，包括后端服务信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApiV2Async($request)
    {
        return $this->updateApiV2AsyncWithHttpInfo($request);
    }
    
    public function updateApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/apis/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量解除API与ACL策略的绑定
     *
     * 批量解除API与ACL策略的绑定
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteApiAclBindingV2Async($request)
    {
        return $this->batchDeleteApiAclBindingV2AsyncWithHttpInfo($request);
    }
    
    public function batchDeleteApiAclBindingV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acl-bindings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDeleteApiAclBindingV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDeleteApiAclBindingV2Request',
            $asyncRequest = true);
    }

    /**
     * 将API与ACL策略进行绑定
     *
     * 将API与ACL策略进行绑定。
     * 
     * 同一个API发布到不同的环境可以绑定不同的ACL策略；一个API在发布到特定环境后只能绑定一个同一种类型的ACL策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApiAclBindingV2Async($request)
    {
        return $this->createApiAclBindingV2AsyncWithHttpInfo($request);
    }
    
    public function createApiAclBindingV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acl-bindings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateApiAclBindingV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateApiAclBindingV2Request',
            $asyncRequest = true);
    }

    /**
     * 解除API与ACL策略的绑定
     *
     * 解除某条API与ACL策略的绑定关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApiAclBindingV2Async($request)
    {
        return $this->deleteApiAclBindingV2AsyncWithHttpInfo($request);
    }
    
    public function deleteApiAclBindingV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acl-bindings/{acl_bindings_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['aclBindingsId'] !== null) {
            $pathParams['acl_bindings_id'] = $localVarParams['aclBindingsId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiAclBindingV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteApiAclBindingV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看API绑定的ACL策略列表
     *
     * 查看API绑定的ACL策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclPolicyBindedToApiV2Async($request)
    {
        return $this->listAclPolicyBindedToApiV2AsyncWithHttpInfo($request);
    }
    
    public function listAclPolicyBindedToApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acl-bindings/binded-acls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['envName'] !== null) {
            $queryParams['env_name'] = $localVarParams['envName'];
        }
        if ($localVarParams['aclId'] !== null) {
            $queryParams['acl_id'] = $localVarParams['aclId'];
        }
        if ($localVarParams['aclName'] !== null) {
            $queryParams['acl_name'] = $localVarParams['aclName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAclPolicyBindedToApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAclPolicyBindedToApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看ACL策略绑定的API列表
     *
     * 查看ACL策略绑定的API列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisBindedToAclPolicyV2Async($request)
    {
        return $this->listApisBindedToAclPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function listApisBindedToAclPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acl-bindings/binded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['aclId'] !== null) {
            $queryParams['acl_id'] = $localVarParams['aclId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToAclPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToAclPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看ACL策略未绑定的API列表
     *
     * 查看ACL策略未绑定的API列表，需要API已发布
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisUnbindedToAclPolicyV2Async($request)
    {
        return $this->listApisUnbindedToAclPolicyV2AsyncWithHttpInfo($request);
    }
    
    public function listApisUnbindedToAclPolicyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/acl-bindings/unbinded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['aclId'] !== null) {
            $queryParams['acl_id'] = $localVarParams['aclId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisUnbindedToAclPolicyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisUnbindedToAclPolicyV2Request',
            $asyncRequest = true);
    }

    /**
     * 解除授权
     *
     * 解除API对APP的授权关系。解除授权后，APP将不再能够调用该API。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelingAuthorizationV2Async($request)
    {
        return $this->cancelingAuthorizationV2AsyncWithHttpInfo($request);
    }
    
    public function cancelingAuthorizationV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-auths/{app_auth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appAuthId'] !== null) {
            $pathParams['app_auth_id'] = $localVarParams['appAuthId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CancelingAuthorizationV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CancelingAuthorizationV2Request',
            $asyncRequest = true);
    }

    /**
     * APP授权
     *
     * APP创建成功后，还不能访问API，如果想要访问某个环境上的API，需要将该API在该环境上授权给APP。授权成功后，APP即可访问该环境上的这个API。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAuthorizingAppsV2Async($request)
    {
        return $this->createAuthorizingAppsV2AsyncWithHttpInfo($request);
    }
    
    public function createAuthorizingAppsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-auths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAuthorizingAppsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateAuthorizingAppsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看APP已绑定的API列表
     *
     * 查询APP已经绑定的API列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisBindedToAppV2Async($request)
    {
        return $this->listApisBindedToAppV2AsyncWithHttpInfo($request);
    }
    
    public function listApisBindedToAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-auths/binded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisBindedToAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看APP未绑定的API列表
     *
     * 查询指定环境上某个APP未绑定的API列表[，包括自有API和从云商店购买的API](tag:hws)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisUnbindedToAppV2Async($request)
    {
        return $this->listApisUnbindedToAppV2AsyncWithHttpInfo($request);
    }
    
    public function listApisUnbindedToAppV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-auths/unbinded-apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisUnbindedToAppV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListApisUnbindedToAppV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看API已绑定的APP列表
     *
     * 查询API绑定的APP列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppsBindedToApiV2Async($request)
    {
        return $this->listAppsBindedToApiV2AsyncWithHttpInfo($request);
    }
    
    public function listAppsBindedToApiV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/app-auths/binded-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['apiId'] !== null) {
            $queryParams['api_id'] = $localVarParams['apiId'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppsBindedToApiV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAppsBindedToApiV2Request',
            $asyncRequest = true);
    }

    /**
     * 导出API
     *
     * 导出分组下API的定义信息。导出文件内容符合swagger标准规范，API网关自定义扩展字段请参考《API网关开发指南》的“导入导出API：扩展定义”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportApiDefinitionsV2Async($request)
    {
        return $this->exportApiDefinitionsV2AsyncWithHttpInfo($request);
    }
    
    public function exportApiDefinitionsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/openapi/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['oasVersion'] !== null) {
            $queryParams['oas_version'] = $localVarParams['oasVersion'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ExportApiDefinitionsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ExportApiDefinitionsV2Request',
            $asyncRequest = true);
    }

    /**
     * 导入API
     *
     * 导入API。导入文件内容需要符合swagger标准规范，API网关自定义扩展字段请参考《API网关开发指南》的“导入导出API：扩展定义”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importApiDefinitionsV2Async($request)
    {
        return $this->importApiDefinitionsV2AsyncWithHttpInfo($request);
    }
    
    public function importApiDefinitionsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/openapi/import';
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ImportApiDefinitionsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ImportApiDefinitionsV2Request',
            $asyncRequest = true);
    }

    /**
     * 域名绑定SSL证书
     *
     * 域名绑定SSL证书。目前暂时仅支持单个绑定，请求体当中的certificate_ids里面有且只能有一个证书ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAssociateCertsV2Async($request)
    {
        return $this->batchAssociateCertsV2AsyncWithHttpInfo($request);
    }
    
    public function batchAssociateCertsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}/certificates/attach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchAssociateCertsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchAssociateCertsV2Request',
            $asyncRequest = true);
    }

    /**
     * SSL证书绑定域名
     *
     * SSL证书绑定域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAssociateDomainsV2Async($request)
    {
        return $this->batchAssociateDomainsV2AsyncWithHttpInfo($request);
    }
    
    public function batchAssociateDomainsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates/{certificate_id}/domains/attach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchAssociateDomainsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchAssociateDomainsV2Request',
            $asyncRequest = true);
    }

    /**
     * 域名解绑SSL证书
     *
     * 域名解绑SSL证书。目前暂时仅支持单个解绑，请求体当中的certificate_ids里面有且只能有一个证书ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDisassociateCertsV2Async($request)
    {
        return $this->batchDisassociateCertsV2AsyncWithHttpInfo($request);
    }
    
    public function batchDisassociateCertsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/api-groups/{group_id}/domains/{domain_id}/certificates/detach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisassociateCertsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisassociateCertsV2Request',
            $asyncRequest = true);
    }

    /**
     * SSL证书解绑域名
     *
     * SSL证书解绑域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDisassociateDomainsV2Async($request)
    {
        return $this->batchDisassociateDomainsV2AsyncWithHttpInfo($request);
    }
    
    public function batchDisassociateDomainsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates/{certificate_id}/domains/detach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisassociateDomainsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisassociateDomainsV2Request',
            $asyncRequest = true);
    }

    /**
     * 创建SSL证书
     *
     * 创建SSL证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCertificateV2Async($request)
    {
        return $this->createCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function createCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除SSL证书
     *
     * 删除ssl证书接口，删除时只有没有关联域名的证书才能被删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCertificateV2Async($request)
    {
        return $this->deleteCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function deleteCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 获取SSL证书已绑定域名列表
     *
     * 获取SSL证书已绑定域名列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttachedDomainsV2Async($request)
    {
        return $this->listAttachedDomainsV2AsyncWithHttpInfo($request);
    }
    
    public function listAttachedDomainsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates/{certificate_id}/attached-domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['urlDomain'] !== null) {
            $queryParams['url_domain'] = $localVarParams['urlDomain'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListAttachedDomainsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListAttachedDomainsV2Request',
            $asyncRequest = true);
    }

    /**
     * 获取SSL证书列表
     *
     * 获取SSL证书列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCertificatesV2Async($request)
    {
        return $this->listCertificatesV2AsyncWithHttpInfo($request);
    }
    
    public function listCertificatesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['commonName'] !== null) {
            $queryParams['common_name'] = $localVarParams['commonName'];
        }
        if ($localVarParams['signatureAlgorithm'] !== null) {
            $queryParams['signature_algorithm'] = $localVarParams['signatureAlgorithm'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListCertificatesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListCertificatesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看证书详情
     *
     * 查看证书详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfCertificateV2Async($request)
    {
        return $this->showDetailsOfCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改SSL证书
     *
     * 修改SSL证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCertificateV2Async($request)
    {
        return $this->updateCertificateV2AsyncWithHttpInfo($request);
    }
    
    public function updateCertificateV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateCertificateV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateCertificateV2Request',
            $asyncRequest = true);
    }

    /**
     * 添加或更新后端实例
     *
     * 为指定的VPC通道添加后端实例
     * 
     * 若指定地址的后端实例已存在，则更新对应后端实例信息。若请求体中包含多个重复地址的后端实例定义，则使用第一个定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addingBackendInstancesV2Async($request)
    {
        return $this->addingBackendInstancesV2AsyncWithHttpInfo($request);
    }
    
    public function addingBackendInstancesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\AddingBackendInstancesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\AddingBackendInstancesV2Request',
            $asyncRequest = true);
    }

    /**
     * 批量修改后端服务器状态不可用
     *
     * 批量修改后端服务器状态不可用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDisableMembersAsync($request)
    {
        return $this->batchDisableMembersAsyncWithHttpInfo($request);
    }
    
    public function batchDisableMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/members/batch-disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisableMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchDisableMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改后端服务器状态可用
     *
     * 批量修改后端服务器状态可用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchEnableMembersAsync($request)
    {
        return $this->batchEnableMembersAsyncWithHttpInfo($request);
    }
    
    public function batchEnableMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/members/batch-enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\BatchEnableMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\BatchEnableMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 添加或更新VPC通道后端服务器组
     *
     * 在APIG中创建VPC通道后端服务器组，VPC通道后端实例可以选择是否关联后端实例服务器组，以便管理后端服务器节点。
     * 
     * 若指定名称的后端服务器组已存在，则更新对应后端服务器组信息。若请求体中包含多个重复名称的后端服务器定义，则使用第一个定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMemberGroupAsync($request)
    {
        return $this->createMemberGroupAsyncWithHttpInfo($request);
    }
    
    public function createMemberGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/member-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateMemberGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateMemberGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPC通道
     *
     * 在API网关中创建连接私有VPC资源的通道，并在创建API时将后端节点配置为使用这些VPC通道，以便API网关直接访问私有VPC资源。
     * &gt; 每个用户最多创建30个VPC通道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpcChannelV2Async($request)
    {
        return $this->createVpcChannelV2AsyncWithHttpInfo($request);
    }
    
    public function createVpcChannelV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\CreateVpcChannelV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\CreateVpcChannelV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除后端实例
     *
     * 删除指定VPC通道中的后端实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBackendInstanceV2Async($request)
    {
        return $this->deleteBackendInstanceV2AsyncWithHttpInfo($request);
    }
    
    public function deleteBackendInstanceV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteBackendInstanceV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteBackendInstanceV2Request',
            $asyncRequest = true);
    }

    /**
     * 删除VPC通道后端服务器组
     *
     * 删除指定的VPC通道后端服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMemberGroupAsync($request)
    {
        return $this->deleteMemberGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteMemberGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/member-groups/{member_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['memberGroupId'] !== null) {
            $pathParams['member_group_id'] = $localVarParams['memberGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteMemberGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteMemberGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPC通道
     *
     * 删除指定的VPC通道
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpcChannelV2Async($request)
    {
        return $this->deleteVpcChannelV2AsyncWithHttpInfo($request);
    }
    
    public function deleteVpcChannelV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteVpcChannelV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\DeleteVpcChannelV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看后端实例列表
     *
     * 查看指定VPC通道的后端实例列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBackendInstancesV2Async($request)
    {
        return $this->listBackendInstancesV2AsyncWithHttpInfo($request);
    }
    
    public function listBackendInstancesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['memberGroupName'] !== null) {
            $queryParams['member_group_name'] = $localVarParams['memberGroupName'];
        }
        if ($localVarParams['memberGroupId'] !== null) {
            $queryParams['member_group_id'] = $localVarParams['memberGroupId'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListBackendInstancesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListBackendInstancesV2Request',
            $asyncRequest = true);
    }

    /**
     * 查询VPC通道后端云服务组列表
     *
     * 查询VPC通道后端云服务组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMemberGroupsAsync($request)
    {
        return $this->listMemberGroupsAsyncWithHttpInfo($request);
    }
    
    public function listMemberGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/member-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['dictCode'] !== null) {
            $queryParams['dict_code'] = $localVarParams['dictCode'];
        }
        if ($localVarParams['memberGroupName'] !== null) {
            $queryParams['member_group_name'] = $localVarParams['memberGroupName'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListMemberGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListMemberGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPC通道列表
     *
     * 查看VPC通道列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpcChannelsV2Async($request)
    {
        return $this->listVpcChannelsV2AsyncWithHttpInfo($request);
    }
    
    public function listVpcChannelsV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['dictCode'] !== null) {
            $queryParams['dict_code'] = $localVarParams['dictCode'];
        }
        if ($localVarParams['preciseSearch'] !== null) {
            $queryParams['precise_search'] = $localVarParams['preciseSearch'];
        }
        if ($localVarParams['memberHost'] !== null) {
            $queryParams['member_host'] = $localVarParams['memberHost'];
        }
        if ($localVarParams['memberPort'] !== null) {
            $queryParams['member_port'] = $localVarParams['memberPort'];
        }
        if ($localVarParams['memberGroupName'] !== null) {
            $queryParams['member_group_name'] = $localVarParams['memberGroupName'];
        }
        if ($localVarParams['memberGroupId'] !== null) {
            $queryParams['member_group_id'] = $localVarParams['memberGroupId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ListVpcChannelsV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ListVpcChannelsV2Request',
            $asyncRequest = true);
    }

    /**
     * 查看VPC通道后端服务器组详情
     *
     * 查看指定的VPC通道后端服务器组详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfMemberGroupAsync($request)
    {
        return $this->showDetailsOfMemberGroupAsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfMemberGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/member-groups/{member_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['memberGroupId'] !== null) {
            $pathParams['member_group_id'] = $localVarParams['memberGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfMemberGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfMemberGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查看VPC通道详情
     *
     * 查看指定的VPC通道详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailsOfVpcChannelV2Async($request)
    {
        return $this->showDetailsOfVpcChannelV2AsyncWithHttpInfo($request);
    }
    
    public function showDetailsOfVpcChannelV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfVpcChannelV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\ShowDetailsOfVpcChannelV2Request',
            $asyncRequest = true);
    }

    /**
     * 更新后端实例
     *
     * 更新指定的VPC通道的后端实例。更新时，使用传入的请求参数对对应云服务组的后端实例进行全量覆盖修改。若未指定修改的云服务器组，则进行全量覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBackendInstancesV2Async($request)
    {
        return $this->updateBackendInstancesV2AsyncWithHttpInfo($request);
    }
    
    public function updateBackendInstancesV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateBackendInstancesV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateBackendInstancesV2Request',
            $asyncRequest = true);
    }

    /**
     * 修改VPC通道健康检查
     *
     * 修改VPC通道健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHealthCheckAsync($request)
    {
        return $this->updateHealthCheckAsyncWithHttpInfo($request);
    }
    
    public function updateHealthCheckAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/health-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateHealthCheckResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateHealthCheckRequest',
            $asyncRequest = true);
    }

    /**
     * 更新VPC通道后端服务器组
     *
     * 更新指定VPC通道后端服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMemberGroupAsync($request)
    {
        return $this->updateMemberGroupAsyncWithHttpInfo($request);
    }
    
    public function updateMemberGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}/member-groups/{member_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['memberGroupId'] !== null) {
            $pathParams['member_group_id'] = $localVarParams['memberGroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateMemberGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateMemberGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新VPC通道
     *
     * 更新指定VPC通道的参数
     * 
     * 使用传入的后端实例列表对VPC通道进行全量覆盖，若后端实例列表为空，则会全量删除已有的后端实例；
     * 
     * 使用传入的后端服务器组列表对VPC通道进行全量覆盖，若后端服务器组列表为空，则会全量删除已有的服务器组；
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpcChannelV2Async($request)
    {
        return $this->updateVpcChannelV2AsyncWithHttpInfo($request);
    }
    
    public function updateVpcChannelV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/apigw/instances/{instance_id}/vpc-channels/{vpc_channel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vpcChannelId'] !== null) {
            $pathParams['vpc_channel_id'] = $localVarParams['vpcChannelId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateVpcChannelV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apig\V2\Model\UpdateVpcChannelV2Request',
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