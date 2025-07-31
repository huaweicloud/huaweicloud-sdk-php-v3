<?php

namespace HuaweiCloud\SDK\Hss\V5;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class HssAsyncClient extends Client
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
        $client = new ClientBuilder(new HssAsyncClient());
        return $client;
    }

    /**
     * 新增基线白名单
     *
     * 新增基线白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addBaselineWhiteListAsync($request)
    {
        return $this->addBaselineWhiteListAsyncWithHttpInfo($request);
    }
    
    public function addBaselineWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/whitelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddBaselineWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddBaselineWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 新建cce集成防护配置
     *
     * 新建cce集成防护配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCceIntegrationProtectionAsync($request)
    {
        return $this->addCceIntegrationProtectionAsyncWithHttpInfo($request);
    }
    
    public function addCceIntegrationProtectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/protection-enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddCceIntegrationProtectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddCceIntegrationProtectionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建服务器组
     *
     * 创建服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addHostsGroupAsync($request)
    {
        return $this->addHostsGroupAsyncWithHttpInfo($request);
    }
    
    public function addHostsGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddHostsGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddHostsGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 添加登录白名单
     *
     * 添加登录白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addLoginWhiteListAsync($request)
    {
        return $this->addLoginWhiteListAsyncWithHttpInfo($request);
    }
    
    public function addLoginWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddLoginWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddLoginWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 添加防护策略
     *
     * 添加防护策略：创建防护策略，包含策略名称、相关规则开启状态、防护动作以及检测规则配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addPolicyAsync($request)
    {
        return $this->addPolicyAsyncWithHttpInfo($request);
    }
    
    public function addPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 添加防护策略
     *
     * 添加防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addProtectionPolicyAsync($request)
    {
        return $this->addProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function addProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 添加系统用户白名单
     *
     * 添加系统用户白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSystemUserWhiteListAsync($request)
    {
        return $this->addSystemUserWhiteListAsyncWithHttpInfo($request);
    }
    
    public function addSystemUserWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/userlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddSystemUserWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddSystemUserWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 部署策略组
     *
     * 部署策略组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associatePolicyGroupAsync($request)
    {
        return $this->associatePolicyGroupAsyncWithHttpInfo($request);
    }
    
    public function associatePolicyGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/policy/deploy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AssociatePolicyGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AssociatePolicyGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加账号
     *
     * 批量添加账号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddAccountsAsync($request)
    {
        return $this->batchAddAccountsAsyncWithHttpInfo($request);
    }
    
    public function batchAddAccountsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/setting/account/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchAddAccountsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchAddAccountsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建标签
     *
     * 批量创建标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateTagsAsync($request)
    {
        return $this->batchCreateTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量卸载集群daemonset
     *
     * 批量卸载集群daemonset
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAgentDaemonsetAsync($request)
    {
        return $this->batchDeleteAgentDaemonsetAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteAgentDaemonsetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/daemonsets/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchDeleteAgentDaemonsetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchDeleteAgentDaemonsetRequest',
            $asyncRequest = true);
    }

    /**
     * 镜像仓库镜像批量扫描
     *
     * 镜像仓库镜像批量扫描
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchScanSwrImageAsync($request)
    {
        return $this->batchScanSwrImageAsyncWithHttpInfo($request);
    }
    
    public function batchScanSwrImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/batch-scan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageRequest',
            $asyncRequest = true);
    }

    /**
     * 批量开启勒索病毒防护2.0
     *
     * 批量开启勒索病毒防护,若开启备份防护，请保证该region有cbr云备份服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStartProtectionAsync($request)
    {
        return $this->batchStartProtectionAsyncWithHttpInfo($request);
    }
    
    public function batchStartProtectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/batch-open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchStartProtectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchStartProtectionRequest',
            $asyncRequest = true);
    }

    /**
     * 批量升级集群daemonset
     *
     * 批量升级集群daemonset
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpgradeAgentDaemonsetAsync($request)
    {
        return $this->batchUpgradeAgentDaemonsetAsyncWithHttpInfo($request);
    }
    
    public function batchUpgradeAgentDaemonsetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/daemonsets/batch-upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchUpgradeAgentDaemonsetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchUpgradeAgentDaemonsetRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑自定义查杀策略
     *
     * 编辑自定义查杀策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAntivirusPolicyAsync($request)
    {
        return $this->changeAntivirusPolicyAsyncWithHttpInfo($request);
    }
    
    public function changeAntivirusPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAntivirusPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAntivirusPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改基线白名单
     *
     * 修改基线白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeBaselineWhiteListAsync($request)
    {
        return $this->changeBaselineWhiteListAsyncWithHttpInfo($request);
    }
    
    public function changeBaselineWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/whitelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeBaselineWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeBaselineWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 解除已拦截IP
     *
     * 解除已拦截IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeBlockedIpAsync($request)
    {
        return $this->changeBlockedIpAsyncWithHttpInfo($request);
    }
    
    public function changeBlockedIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/blocked-ip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeBlockedIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeBlockedIpRequest',
            $asyncRequest = true);
    }

    /**
     * 对未通过的配置检查项进行忽略/取消忽略/修复/验证操作
     *
     * 对未通过的配置检查项进行忽略/取消忽略/修复/验证操作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeCheckRuleActionAsync($request)
    {
        return $this->changeCheckRuleActionAsyncWithHttpInfo($request);
    }
    
    public function changeCheckRuleActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/check-rule/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['checkCce'] !== null) {
            $queryParams['check_cce'] = $localVarParams['checkCce'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeCheckRuleActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeCheckRuleActionRequest',
            $asyncRequest = true);
    }

    /**
     * 修改告警状态
     *
     * 修改告警状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeClusterEventsAsync($request)
    {
        return $this->changeClusterEventsAsyncWithHttpInfo($request);
    }
    
    public function changeClusterEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeClusterEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeClusterEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改集群防护策略
     *
     * 修改集群防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeClusterProtectionPolicyAsync($request)
    {
        return $this->changeClusterProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function changeClusterProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeClusterProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeClusterProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 处理告警事件
     *
     * 处理告警事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEventAsync($request)
    {
        return $this->changeEventAsyncWithHttpInfo($request);
    }
    
    public function changeEventAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/operate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeEventResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeEventRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑服务器组
     *
     * 编辑服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeHostsGroupAsync($request)
    {
        return $this->changeHostsGroupAsyncWithHttpInfo($request);
    }
    
    public function changeHostsGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeHostsGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeHostsGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复已隔离文件
     *
     * 恢复已隔离文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIsolatedFileAsync($request)
    {
        return $this->changeIsolatedFileAsyncWithHttpInfo($request);
    }
    
    public function changeIsolatedFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/isolated-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeIsolatedFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeIsolatedFileRequest',
            $asyncRequest = true);
    }

    /**
     * 对口令复杂度检测未通过的主机进行忽略/取消忽略
     *
     * 对口令复杂度检测未通过的主机进行忽略/取消忽略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changePasswordComplexityStatusAsync($request)
    {
        return $this->changePasswordComplexityStatusAsyncWithHttpInfo($request);
    }
    
    public function changePasswordComplexityStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/password-complexity/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangePasswordComplexityStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangePasswordComplexityStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 修改漏洞扫描策略
     *
     * 修改漏洞扫描策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeVulScanPolicyAsync($request)
    {
        return $this->changeVulScanPolicyAsyncWithHttpInfo($request);
    }
    
    public function changeVulScanPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/scan-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulScanPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulScanPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改漏洞的状态
     *
     * 修改漏洞的状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeVulStatusAsync($request)
    {
        return $this->changeVulStatusAsyncWithHttpInfo($request);
    }
    
    public function changeVulStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 创建集群daemonset
     *
     * 创建集群daemonset
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAgentDaemonsetAsync($request)
    {
        return $this->createAgentDaemonsetAsyncWithHttpInfo($request);
    }
    
    public function createAgentDaemonsetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/{cluster_id}/daemonsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAgentDaemonsetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAgentDaemonsetRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义查杀策略
     *
     * 创建自定义查杀策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAntiVirusPolicyAsync($request)
    {
        return $this->createAntiVirusPolicyAsyncWithHttpInfo($request);
    }
    
    public function createAntiVirusPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAntiVirusPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAntiVirusPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建病毒扫描任务
     *
     * 创建病毒扫描任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAntiVirusTaskAsync($request)
    {
        return $this->createAntiVirusTaskAsyncWithHttpInfo($request);
    }
    
    public function createAntiVirusTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAntiVirusTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAntiVirusTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 新建集群防护策略
     *
     * 新建集群防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterProtectionPolicyAsync($request)
    {
        return $this->createClusterProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function createClusterProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateClusterProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateClusterProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 同步集群信息
     *
     * 同步集群信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClustersInfoAsync($request)
    {
        return $this->createClustersInfoAsyncWithHttpInfo($request);
    }
    
    public function createClustersInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/save-clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateClustersInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateClustersInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 容器集群网络添加配置策略
     *
     * 容器集群网络添加配置策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createContainerNetworkPolicyAsync($request)
    {
        return $this->createContainerNetworkPolicyAsyncWithHttpInfo($request);
    }
    
    public function createContainerNetworkPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateContainerNetworkPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateContainerNetworkPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 新增动态端口蜜罐策略
     *
     * 新增动态端口蜜罐策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDecoyPortPolicyAsync($request)
    {
        return $this->createDecoyPortPolicyAsyncWithHttpInfo($request);
    }
    
    public function createDecoyPortPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateDecoyPortPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateDecoyPortPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建全局资产扫描任务
     *
     * 创建全局资产扫描任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGlobalAssetScanTaskAsync($request)
    {
        return $this->createGlobalAssetScanTaskAsyncWithHttpInfo($request);
    }
    
    public function createGlobalAssetScanTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/assign-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateGlobalAssetScanTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateGlobalAssetScanTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建多云集群
     *
     * 创建多云集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMultiCloudClustersAsync($request)
    {
        return $this->createMultiCloudClustersAsyncWithHttpInfo($request);
    }
    
    public function createMultiCloudClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateMultiCloudClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateMultiCloudClustersRequest',
            $asyncRequest = true);
    }

    /**
     * HSS服务创建订单订购配额
     *
     * HSS服务创建订单订购配额，只支持包周期计费模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createQuotasOrderAsync($request)
    {
        return $this->createQuotasOrderAsyncWithHttpInfo($request);
    }
    
    public function createQuotasOrderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/quotas/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateQuotasOrderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateQuotasOrderRequest',
            $asyncRequest = true);
    }

    /**
     * 创建安全组策略
     *
     * 创建安全组策略(云原生网络模型)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityGroupPolicyAsync($request)
    {
        return $this->createSecurityGroupPolicyAsyncWithHttpInfo($request);
    }
    
    public function createSecurityGroupPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/{namespace}/security-group-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateSecurityGroupPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateSecurityGroupPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建漏洞扫描任务
     *
     * 创建漏洞扫描任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVulnerabilityScanTaskAsync($request)
    {
        return $this->createVulnerabilityScanTaskAsyncWithHttpInfo($request);
    }
    
    public function createVulnerabilityScanTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/scan-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateVulnerabilityScanTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateVulnerabilityScanTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除账号
     *
     * 删除账号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAccountAsync($request)
    {
        return $this->deleteAccountAsyncWithHttpInfo($request);
    }
    
    public function deleteAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/setting/account/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 删除集群daemonset
     *
     * 删除集群daemonset
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAgentDaemonsetAsync($request)
    {
        return $this->deleteAgentDaemonsetAsyncWithHttpInfo($request);
    }
    
    public function deleteAgentDaemonsetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/{cluster_id}/daemonsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['invokedService'] !== null) {
            $queryParams['invoked_service'] = $localVarParams['invokedService'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAgentDaemonsetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAgentDaemonsetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除自定义查杀策略
     *
     * 删除自定义查杀策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAntivirusPolicyAsync($request)
    {
        return $this->deleteAntivirusPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteAntivirusPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/policy/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAntivirusPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAntivirusPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除基线白名单
     *
     * 删除基线白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBaselineWhiteListAsync($request)
    {
        return $this->deleteBaselineWhiteListAsyncWithHttpInfo($request);
    }
    
    public function deleteBaselineWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/whitelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteBaselineWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteBaselineWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 删除集群防护策略
     *
     * 删除集群防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterProtectionPolicyAsync($request)
    {
        return $this->deleteClusterProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteClusterProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteClusterProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteClusterProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 容器集群网络删除配置策略
     *
     * 容器集群网络删除配置策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteContainerNetworkPolicyAsync($request)
    {
        return $this->deleteContainerNetworkPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteContainerNetworkPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteContainerNetworkPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteContainerNetworkPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭主机动态端口蜜罐策略
     *
     * 关闭主机动态端口蜜罐策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDecoyPortHostPolicyAsync($request)
    {
        return $this->deleteDecoyPortHostPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteDecoyPortHostPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/host-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteDecoyPortHostPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteDecoyPortHostPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除动态端口蜜罐策略
     *
     * 删除动态端口蜜罐策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDecoyPortPolicyAsync($request)
    {
        return $this->deleteDecoyPortPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteDecoyPortPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteDecoyPortPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteDecoyPortPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除服务器组
     *
     * 删除服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHostsGroupAsync($request)
    {
        return $this->deleteHostsGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteHostsGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteHostsGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteHostsGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除已隔离文件
     *
     * 删除已隔离文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIsolatedFileAsync($request)
    {
        return $this->deleteIsolatedFileAsyncWithHttpInfo($request);
    }
    
    public function deleteIsolatedFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/isolated-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteIsolatedFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteIsolatedFileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除防护策略
     *
     * 删除防护策略：删除策略，已经在使用的防护策略不能删除
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePolicyAsync($request)
    {
        return $this->deletePolicyAsyncWithHttpInfo($request);
    }
    
    public function deletePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeletePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeletePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除防护策略
     *
     * 删除防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProtectionPolicyAsync($request)
    {
        return $this->deleteProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源标签
     *
     * 删除单个资源下的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceInstanceTagAsync($request)
    {
        return $this->deleteResourceInstanceTagAsyncWithHttpInfo($request);
    }
    
    public function deleteResourceInstanceTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteResourceInstanceTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteResourceInstanceTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除安全组策略
     *
     * 删除安全组策略(云原生网络模型)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityGroupPolicyAsync($request)
    {
        return $this->deleteSecurityGroupPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityGroupPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/security-group-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteSecurityGroupPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteSecurityGroupPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 导出病毒扫描结果列表
     *
     * 导出病毒扫描结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportAntiVirusResultAsync($request)
    {
        return $this->exportAntiVirusResultAsyncWithHttpInfo($request);
    }
    
    public function exportAntiVirusResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/result/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severityList'] !== null) {
            $queryParams['severity_list'] = $localVarParams['severityList'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['malwareName'] !== null) {
            $queryParams['malware_name'] = $localVarParams['malwareName'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['exportSize'] !== null) {
            $queryParams['export_size'] = $localVarParams['exportSize'];
        }
        if ($localVarParams['fileHash'] !== null) {
            $queryParams['file_hash'] = $localVarParams['fileHash'];
        }
        if ($localVarParams['taskName'] !== null) {
            $queryParams['task_name'] = $localVarParams['taskName'];
        }
        if ($localVarParams['manualIsolate'] !== null) {
            $queryParams['manual_isolate'] = $localVarParams['manualIsolate'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportAntiVirusResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportAntiVirusResultRequest',
            $asyncRequest = true);
    }

    /**
     * 创建容器导出任务
     *
     * 创建容器导出任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportContainerListAsync($request)
    {
        return $this->exportContainerListAsyncWithHttpInfo($request);
    }
    
    public function exportContainerListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/export-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['exportSize'] !== null) {
            $queryParams['export_size'] = $localVarParams['exportSize'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportContainerListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportContainerListRequest',
            $asyncRequest = true);
    }

    /**
     * 导出漏洞及漏洞影响的主机的相关信息
     *
     * 导出漏洞及漏洞影响的主机的相关信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportVulsAsync($request)
    {
        return $this->exportVulsAsyncWithHttpInfo($request);
    }
    
    public function exportVulsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vul/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['vulName'] !== null) {
            $queryParams['vul_name'] = $localVarParams['vulName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['exportSize'] !== null) {
            $queryParams['export_size'] = $localVarParams['exportSize'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['cveId'] !== null) {
            $queryParams['cve_id'] = $localVarParams['cveId'];
        }
        if ($localVarParams['labelList'] !== null) {
            $queryParams['label_list'] = $localVarParams['labelList'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportVulsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportVulsRequest',
            $asyncRequest = true);
    }

    /**
     * 处置病毒扫描结果
     *
     * 处置病毒扫描结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function handleAntiVirusResultAsync($request)
    {
        return $this->handleAntiVirusResultAsyncWithHttpInfo($request);
    }
    
    public function handleAntiVirusResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/result/operate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\HandleAntiVirusResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\HandleAntiVirusResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询多账号列表
     *
     * 查询多账号列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountsAsync($request)
    {
        return $this->listAccountsAsyncWithHttpInfo($request);
    }
    
    public function listAccountsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/setting/account/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAccountsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAccountsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询agent安装脚本
     *
     * 查询agent安装脚本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAgentInstallScriptAsync($request)
    {
        return $this->listAgentInstallScriptAsyncWithHttpInfo($request);
    }
    
    public function listAgentInstallScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/agent-install-script';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['osArch'] !== null) {
            $queryParams['os_arch'] = $localVarParams['osArch'];
        }
        if ($localVarParams['outsideHost'] !== null) {
            $queryParams['outside_host'] = $localVarParams['outsideHost'];
        }
        if ($localVarParams['outsideGroupId'] !== null) {
            $queryParams['outside_group_id'] = $localVarParams['outsideGroupId'];
        }
        if ($localVarParams['batchInstall'] !== null) {
            $queryParams['batch_install'] = $localVarParams['batchInstall'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAgentInstallScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAgentInstallScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警白名单列表
     *
     * 查询告警白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmWhiteListAsync($request)
    {
        return $this->listAlarmWhiteListAsyncWithHttpInfo($request);
    }
    
    public function listAlarmWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/alarm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hash'] !== null) {
            $queryParams['hash'] = $localVarParams['hash'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAlarmWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAlarmWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询病毒查杀可选服务器列表
     *
     * 查询病毒查杀可选服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAntiVirusHostAsync($request)
    {
        return $this->listAntiVirusHostAsyncWithHttpInfo($request);
    }
    
    public function listAntiVirusHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/host-management/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['scanType'] !== null) {
            $queryParams['scan_type'] = $localVarParams['scanType'];
        }
        if ($localVarParams['startType'] !== null) {
            $queryParams['start_type'] = $localVarParams['startType'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['nextStartTime'] !== null) {
            $queryParams['next_start_time'] = $localVarParams['nextStartTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义查杀策略列表
     *
     * 查询自定义查杀策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAntiVirusPolicyAsync($request)
    {
        return $this->listAntiVirusPolicyAsyncWithHttpInfo($request);
    }
    
    public function listAntiVirusPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询病毒扫描结果列表
     *
     * 查询病毒扫描结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAntiVirusResultAsync($request)
    {
        return $this->listAntiVirusResultAsyncWithHttpInfo($request);
    }
    
    public function listAntiVirusResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severityList'] !== null) {
            $queryParams['severity_list'] = $localVarParams['severityList'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['malwareName'] !== null) {
            $queryParams['malware_name'] = $localVarParams['malwareName'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['fileHash'] !== null) {
            $queryParams['file_hash'] = $localVarParams['fileHash'];
        }
        if ($localVarParams['taskName'] !== null) {
            $queryParams['task_name'] = $localVarParams['taskName'];
        }
        if ($localVarParams['manualIsolate'] !== null) {
            $queryParams['manual_isolate'] = $localVarParams['manualIsolate'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查看病毒扫描任务列表
     *
     * 查看病毒扫描任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAntiVirusTaskAsync($request)
    {
        return $this->listAntiVirusTaskAsyncWithHttpInfo($request);
    }
    
    public function listAntiVirusTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['taskName'] !== null) {
            $queryParams['task_name'] = $localVarParams['taskName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['taskStatus'] !== null) {
            $queryParams['task_status'] = $localVarParams['taskStatus'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['whetherPaidTask'] !== null) {
            $queryParams['whether_paid_task'] = $localVarParams['whetherPaidTask'];
        }
        if ($localVarParams['hostTaskStatus'] !== null) {
            $queryParams['host_task_status'] = $localVarParams['hostTaskStatus'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询病毒扫描历史处置记录列表
     *
     * 查询病毒扫描历史处置记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAntivirusHandleHistoryAsync($request)
    {
        return $this->listAntivirusHandleHistoryAsyncWithHttpInfo($request);
    }
    
    public function listAntivirusHandleHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/handle-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['malwareName'] !== null) {
            $queryParams['malware_name'] = $localVarParams['malwareName'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['severityList'] !== null) {
            $queryParams['severity_list'] = $localVarParams['severityList'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['handleMethod'] !== null) {
            $queryParams['handle_method'] = $localVarParams['handleMethod'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntivirusHandleHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntivirusHandleHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取软件信息的历史变动记录
     *
     * 获取软件信息的历史变动记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppChangeHistoriesAsync($request)
    {
        return $this->listAppChangeHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listAppChangeHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/app/change-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['variationType'] !== null) {
            $queryParams['variation_type'] = $localVarParams['variationType'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppChangeHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppChangeHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询软件列表
     *
     * 查询软件列表，支持通过软件名称查询对应的服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppStatisticsAsync($request)
    {
        return $this->listAppStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listAppStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/app/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询软件的服务器列表
     *
     * 查询软件的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppsAsync($request)
    {
        return $this->listAppsAsyncWithHttpInfo($request);
    }
    
    public function listAppsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['installDir'] !== null) {
            $queryParams['install_dir'] = $localVarParams['installDir'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取自启动项的历史变动记录
     *
     * 获取自启动项的历史变动记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAutoLaunchChangeHistoriesAsync($request)
    {
        return $this->listAutoLaunchChangeHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listAutoLaunchChangeHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/auto-launch/change-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['autoLaunchName'] !== null) {
            $queryParams['auto_launch_name'] = $localVarParams['autoLaunchName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['variationType'] !== null) {
            $queryParams['variation_type'] = $localVarParams['variationType'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchChangeHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchChangeHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自启动项信息
     *
     * 查询自启动信息，支持通过传入自启动名称查询启动类型和服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAutoLaunchStatisticsAsync($request)
    {
        return $this->listAutoLaunchStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listAutoLaunchStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/auto-launch/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自启动项的服务列表
     *
     * 查询自启动项的服务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAutoLaunchsAsync($request)
    {
        return $this->listAutoLaunchsAsyncWithHttpInfo($request);
    }
    
    public function listAutoLaunchsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/auto-launchs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询备份存储库列表
     *
     * 查询备份存储库列表，若进行绑定主机，则需要额外判断，同时满足以下条件：1.存储库状态为“可用”状态；2.备份策略状态为“已启用”；3.存储库有剩余可用备份容量；4.存储库绑定的服务器数量少于256。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBackupVaultsAsync($request)
    {
        return $this->listBackupVaultsAsyncWithHttpInfo($request);
    }
    
    public function listBackupVaultsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/optional/vaults';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['vaultName'] !== null) {
            $queryParams['vault_name'] = $localVarParams['vaultName'];
        }
        if ($localVarParams['vaultId'] !== null) {
            $queryParams['vault_id'] = $localVarParams['vaultId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListBackupVaultsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListBackupVaultsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询基线白名单列表
     *
     * 查询基线白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBaselineWhiteListsAsync($request)
    {
        return $this->listBaselineWhiteListsAsyncWithHttpInfo($request);
    }
    
    public function listBaselineWhiteListsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/whitelists';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['checkRuleName'] !== null) {
            $queryParams['check_rule_name'] = $localVarParams['checkRuleName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['ruleType'] !== null) {
            $queryParams['rule_type'] = $localVarParams['ruleType'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListBaselineWhiteListsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListBaselineWhiteListsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询已拦截IP列表
     *
     * 查询已拦截IP列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBlockedIpAsync($request)
    {
        return $this->listBlockedIpAsyncWithHttpInfo($request);
    }
    
    public function listBlockedIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/blocked-ip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['interceptStatus'] !== null) {
            $queryParams['intercept_status'] = $localVarParams['interceptStatus'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListBlockedIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListBlockedIpRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群配置
     *
     * 获取集群配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCceClusterConfigAsync($request)
    {
        return $this->listCceClusterConfigAsyncWithHttpInfo($request);
    }
    
    public function listCceClusterConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/configs/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListCceClusterConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListCceClusterConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 批量获取容器集群风险信息
     *
     * 批量获取容器集群风险信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCceClusterDetectRiskAsync($request)
    {
        return $this->listCceClusterDetectRiskAsyncWithHttpInfo($request);
    }
    
    public function listCceClusterDetectRiskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/risks/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListCceClusterDetectRiskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListCceClusterDetectRiskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询检测规则列表
     *
     * 查询检测规则列表：查询默认检测规则信息，包含14种检测规则，默认都不开启
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCheckFeatureRuleAsync($request)
    {
        return $this->listCheckFeatureRuleAsyncWithHttpInfo($request);
    }
    
    public function listCheckFeatureRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListCheckFeatureRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListCheckFeatureRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询k8s集群审计日志列表
     *
     * 查询k8s集群审计日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterAuditLogsAsync($request)
    {
        return $this->listClusterAuditLogsAsyncWithHttpInfo($request);
    }
    
    public function listClusterAuditLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/cluster/audit-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['verb'] !== null) {
            $queryParams['verb'] = $localVarParams['verb'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['lineNum'] !== null) {
            $queryParams['line_num'] = $localVarParams['lineNum'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterAuditLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterAuditLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询k8s集群事件列表
     *
     * 查询k8s集群事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterEventLogsAsync($request)
    {
        return $this->listClusterEventLogsAsyncWithHttpInfo($request);
    }
    
    public function listClusterEventLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/cluster/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['eventName'] !== null) {
            $queryParams['event_name'] = $localVarParams['eventName'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['reason'] !== null) {
            $queryParams['reason'] = $localVarParams['reason'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['lineNum'] !== null) {
            $queryParams['line_num'] = $localVarParams['lineNum'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterEventLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterEventLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有集群中告警事件
     *
     * 获取所有集群中告警事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterEventsAsync($request)
    {
        return $this->listClusterEventsAsyncWithHttpInfo($request);
    }
    
    public function listClusterEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 集群防护概览
     *
     * 集群防护概览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectOverviewAsync($request)
    {
        return $this->listClusterProtectOverviewAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群组件防护策略模板列表
     *
     * 查询集群防护策略模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectPolicyTemplatesAsync($request)
    {
        return $this->listClusterProtectPolicyTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectPolicyTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/clusters/protection-policy-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['templateName'] !== null) {
            $queryParams['template_name'] = $localVarParams['templateName'];
        }
        if ($localVarParams['templateType'] !== null) {
            $queryParams['template_type'] = $localVarParams['templateType'];
        }
        if ($localVarParams['targetKind'] !== null) {
            $queryParams['target_kind'] = $localVarParams['targetKind'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['level'] !== null) {
            $queryParams['level'] = $localVarParams['level'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectPolicyTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectPolicyTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群防护默认策略列表
     *
     * 获取集群防护默认策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectionDefaultPolicyAsync($request)
    {
        return $this->listClusterProtectionDefaultPolicyAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectionDefaultPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/default-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionDefaultPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionDefaultPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群防护信息
     *
     * 查询集群防护信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectionInfoAsync($request)
    {
        return $this->listClusterProtectionInfoAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectionInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群所有防护项
     *
     * 获取集群所有防护项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectionItemAsync($request)
    {
        return $this->listClusterProtectionItemAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectionItemAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/protection-item';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionItemResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionItemRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群防护策略列表
     *
     * 获取集群防护策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectionPolicyAsync($request)
    {
        return $this->listClusterProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查看指定策略的详情
     *
     * 查看指定策略的详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterProtectionPolicyDetailAsync($request)
    {
        return $this->listClusterProtectionPolicyDetailAsyncWithHttpInfo($request);
    }
    
    public function listClusterProtectionPolicyDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionPolicyDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterProtectionPolicyDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 获取部分提示信息
     *
     * 获取部分提示信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommonTipsAsync($request)
    {
        return $this->listCommonTipsAsyncWithHttpInfo($request);
    }
    
    public function listCommonTipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/common/tips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListCommonTipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListCommonTipsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器内运行的命令列表
     *
     * 查询容器内运行的命令列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerCmdLogsAsync($request)
    {
        return $this->listContainerCmdLogsAsyncWithHttpInfo($request);
    }
    
    public function listContainerCmdLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/cmd-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['cmd'] !== null) {
            $queryParams['cmd'] = $localVarParams['cmd'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerCmdLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerCmdLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器镜像操作日志
     *
     * 查询容器镜像操作日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerImageLogsAsync($request)
    {
        return $this->listContainerImageLogsAsyncWithHttpInfo($request);
    }
    
    public function listContainerImageLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/image/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['eventName'] !== null) {
            $queryParams['event_name'] = $localVarParams['eventName'];
        }
        if ($localVarParams['sourceIp'] !== null) {
            $queryParams['source_ip'] = $localVarParams['sourceIp'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerImageLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerImageLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器镜像列表
     *
     * 查询容器镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerImagesAsync($request)
    {
        return $this->listContainerImagesAsyncWithHttpInfo($request);
    }
    
    public function listContainerImagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerImagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerImagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器日志列表
     *
     * 查询容器日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerLogsAsync($request)
    {
        return $this->listContainerLogsAsyncWithHttpInfo($request);
    }
    
    public function listContainerLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['podName'] !== null) {
            $queryParams['pod_name'] = $localVarParams['podName'];
        }
        if ($localVarParams['podId'] !== null) {
            $queryParams['pod_id'] = $localVarParams['podId'];
        }
        if ($localVarParams['podIp'] !== null) {
            $queryParams['pod_ip'] = $localVarParams['podIp'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['content'] !== null) {
            $queryParams['content'] = $localVarParams['content'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['lineNum'] !== null) {
            $queryParams['line_num'] = $localVarParams['lineNum'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器防护的集群信息
     *
     * 查询容器防护的集群信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerNetworkClustersAsync($request)
    {
        return $this->listContainerNetworkClustersAsyncWithHttpInfo($request);
    }
    
    public function listContainerNetworkClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/cluster';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNetworkClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNetworkClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器集群VPC网络的节点列表
     *
     * 查询容器集群网络的策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerNetworkNodeListAsync($request)
    {
        return $this->listContainerNetworkNodeListAsyncWithHttpInfo($request);
    }
    
    public function listContainerNetworkNodeListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/node';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['queryField'] !== null) {
            $queryParams['query_field'] = $localVarParams['queryField'];
        }
        if ($localVarParams['queryValue'] !== null) {
            $queryParams['query_value'] = $localVarParams['queryValue'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNetworkNodeListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNetworkNodeListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器集群网络的策略列表
     *
     * 查询容器集群网络的策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerNetworkPolicyAsync($request)
    {
        return $this->listContainerNetworkPolicyAsyncWithHttpInfo($request);
    }
    
    public function listContainerNetworkPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNetworkPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNetworkPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器节点列表
     *
     * 查询容器节点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerNodesAsync($request)
    {
        return $this->listContainerNodesAsyncWithHttpInfo($request);
    }
    
    public function listContainerNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['containerTags'] !== null) {
            $queryParams['container_tags'] = $localVarParams['containerTags'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNodesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNodesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器基本信息列表
     *
     * 查询容器基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainersAsync($request)
    {
        return $this->listContainersAsyncWithHttpInfo($request);
    }
    
    public function listContainersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['podName'] !== null) {
            $queryParams['pod_name'] = $localVarParams['podName'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['clusterContainer'] !== null) {
            $queryParams['cluster_container'] = $localVarParams['clusterContainer'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainersRequest',
            $asyncRequest = true);
    }

    /**
     * 查看动态端口蜜罐策略
     *
     * 查看动态端口蜜罐策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDecoyPortPolicyAsync($request)
    {
        return $this->listDecoyPortPolicyAsyncWithHttpInfo($request);
    }
    
    public function listDecoyPortPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/policy-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListDecoyPortPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListDecoyPortPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 下载导出文件
     *
     * 下载导出文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDownloadExportedFileAsync($request)
    {
        return $this->listDownloadExportedFileAsyncWithHttpInfo($request);
    }
    
    public function listDownloadExportedFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/download/{file_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['fileId'] !== null) {
            $pathParams['file_id'] = $localVarParams['fileId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/zip']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/zip'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListDownloadExportedFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListDownloadExportedFileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警事件历史处置记录列表
     *
     * 查询告警事件历史处置记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventHandleHistoryAsync($request)
    {
        return $this->listEventHandleHistoryAsyncWithHttpInfo($request);
    }
    
    public function listEventHandleHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/handle-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['attackTag'] !== null) {
            $queryParams['attack_tag'] = $localVarParams['attackTag'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['eventClassIds'] !== null) {
            $queryParams['event_class_ids'] = $localVarParams['eventClassIds'];
        }
        if ($localVarParams['eventName'] !== null) {
            $queryParams['event_name'] = $localVarParams['eventName'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListEventHandleHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListEventHandleHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资产全局扫描任务状态
     *
     * 查询资产全局扫描任务状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalAssetScanTaskAsync($request)
    {
        return $this->listGlobalAssetScanTaskAsyncWithHttpInfo($request);
    }
    
    public function listGlobalAssetScanTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/assign-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListGlobalAssetScanTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListGlobalAssetScanTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务器组列表
     *
     * 查询服务器组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostGroupsAsync($request)
    {
        return $this->listHostGroupsAsyncWithHttpInfo($request);
    }
    
    public function listHostGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机静态网页防篡改防护动态
     *
     * 查询主机静态网页防篡改防护动态：展示服务器名称、服务器ip、防护策略、检测时间、防护文件、事件描述信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostProtectHistoryInfoAsync($request)
    {
        return $this->listHostProtectHistoryInfoAsyncWithHttpInfo($request);
    }
    
    public function listHostProtectHistoryInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/static/protect-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['fileOperation'] !== null) {
            $queryParams['file_operation'] = $localVarParams['fileOperation'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostProtectHistoryInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostProtectHistoryInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机动态网页防篡改防护动态
     *
     * 查询主机动态网页防篡改防护动态：包含告警级别、服务器ip、服务器名称、威胁类型、告警时间、攻击源ip、攻击源url信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostRaspProtectHistoryInfoAsync($request)
    {
        return $this->listHostRaspProtectHistoryInfoAsyncWithHttpInfo($request);
    }
    
    public function listHostRaspProtectHistoryInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/rasp/protect-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['alarmLevel'] !== null) {
            $queryParams['alarm_level'] = $localVarParams['alarmLevel'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostRaspProtectHistoryInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostRaspProtectHistoryInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云服务器列表
     *
     * 查询云服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostStatusAsync($request)
    {
        return $this->listHostStatusAsyncWithHttpInfo($request);
    }
    
    public function listHostStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['detectResult'] !== null) {
            $queryParams['detect_result'] = $localVarParams['detectResult'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostStatus'] !== null) {
            $queryParams['host_status'] = $localVarParams['hostStatus'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['ipAddr'] !== null) {
            $queryParams['ip_addr'] = $localVarParams['ipAddr'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['hasIntrusion'] !== null) {
            $queryParams['has_intrusion'] = $localVarParams['hasIntrusion'];
        }
        if ($localVarParams['hasVul'] !== null) {
            $queryParams['has_vul'] = $localVarParams['hasVul'];
        }
        if ($localVarParams['hasBaseline'] !== null) {
            $queryParams['has_baseline'] = $localVarParams['hasBaseline'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['policyGroupId'] !== null) {
            $queryParams['policy_group_id'] = $localVarParams['policyGroupId'];
        }
        if ($localVarParams['policyGroupName'] !== null) {
            $queryParams['policy_group_name'] = $localVarParams['policyGroupName'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['refresh'] !== null) {
            $queryParams['refresh'] = $localVarParams['refresh'];
        }
        if ($localVarParams['getCommonLoginLocations'] !== null) {
            $queryParams['get_common_login_locations'] = $localVarParams['getCommonLoginLocations'];
        }
        if ($localVarParams['aboveVersion'] !== null) {
            $queryParams['above_version'] = $localVarParams['aboveVersion'];
        }
        if ($localVarParams['outsideHost'] !== null) {
            $queryParams['outside_host'] = $localVarParams['outsideHost'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['serverGroup'] !== null) {
            $queryParams['server_group'] = $localVarParams['serverGroup'];
        }
        if ($localVarParams['agentUpgradable'] !== null) {
            $queryParams['agent_upgradable'] = $localVarParams['agentUpgradable'];
        }
        if ($localVarParams['installMode'] !== null) {
            $queryParams['install_mode'] = $localVarParams['installMode'];
        }
        if ($localVarParams['bindingKey'] !== null) {
            $queryParams['binding_key'] = $localVarParams['bindingKey'];
        }
        if ($localVarParams['protectInterrupt'] !== null) {
            $queryParams['protect_interrupt'] = $localVarParams['protectInterrupt'];
        }
        if ($localVarParams['incluster'] !== null) {
            $queryParams['incluster'] = $localVarParams['incluster'];
        }
        if ($localVarParams['protectDegradation'] !== null) {
            $queryParams['protect_degradation'] = $localVarParams['protectDegradation'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单台服务器漏洞信息
     *
     * 查询单台服务器漏洞信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostVulsAsync($request)
    {
        return $this->listHostVulsAsyncWithHttpInfo($request);
    }
    
    public function listHostVulsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/host/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vulName'] !== null) {
            $queryParams['vul_name'] = $localVarParams['vulName'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostVulsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostVulsRequest',
            $asyncRequest = true);
    }

    /**
     * 本地镜像列表查询
     *
     * 本地镜像列表查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageLocalAsync($request)
    {
        return $this->listImageLocalAsyncWithHttpInfo($request);
    }
    
    public function listImageLocalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/local-repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['scanStatus'] !== null) {
            $queryParams['scan_status'] = $localVarParams['scanStatus'];
        }
        if ($localVarParams['localImageType'] !== null) {
            $queryParams['local_image_type'] = $localVarParams['localImageType'];
        }
        if ($localVarParams['imageSize'] !== null) {
            $queryParams['image_size'] = $localVarParams['imageSize'];
        }
        if ($localVarParams['startLatestUpdateTime'] !== null) {
            $queryParams['start_latest_update_time'] = $localVarParams['startLatestUpdateTime'];
        }
        if ($localVarParams['endLatestUpdateTime'] !== null) {
            $queryParams['end_latest_update_time'] = $localVarParams['endLatestUpdateTime'];
        }
        if ($localVarParams['startLatestScanTime'] !== null) {
            $queryParams['start_latest_scan_time'] = $localVarParams['startLatestScanTime'];
        }
        if ($localVarParams['endLatestScanTime'] !== null) {
            $queryParams['end_latest_scan_time'] = $localVarParams['endLatestScanTime'];
        }
        if ($localVarParams['hasVul'] !== null) {
            $queryParams['has_vul'] = $localVarParams['hasVul'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['podId'] !== null) {
            $queryParams['pod_id'] = $localVarParams['podId'];
        }
        if ($localVarParams['podName'] !== null) {
            $queryParams['pod_name'] = $localVarParams['podName'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageLocalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageLocalRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像指定安全配置项的检查项列表
     *
     * 查询镜像指定安全配置项的检查项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageRiskConfigRulesAsync($request)
    {
        return $this->listImageRiskConfigRulesAsyncWithHttpInfo($request);
    }
    
    public function listImageRiskConfigRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/baseline/risk-configs/{check_name}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['resultType'] !== null) {
            $queryParams['result_type'] = $localVarParams['resultType'];
        }
        if ($localVarParams['checkRuleName'] !== null) {
            $queryParams['check_rule_name'] = $localVarParams['checkRuleName'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像安全配置检测结果列表
     *
     * 查询镜像安全配置检测结果列表,当前支持检测CentOS 7、Debian 10、EulerOS和Ubuntu16镜像的系统配置项、SSH应用配置项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageRiskConfigsAsync($request)
    {
        return $this->listImageRiskConfigsAsyncWithHttpInfo($request);
    }
    
    public function listImageRiskConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/baseline/risk-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像的漏洞信息
     *
     * 查询镜像的漏洞信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageVulnerabilitiesAsync($request)
    {
        return $this->listImageVulnerabilitiesAsyncWithHttpInfo($request);
    }
    
    public function listImageVulnerabilitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/{image_id}/vulnerabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
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
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
        }
        if ($localVarParams['repairNecessity'] !== null) {
            $queryParams['repair_necessity'] = $localVarParams['repairNecessity'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageVulnerabilitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageVulnerabilitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询已隔离文件列表
     *
     * 查询已隔离文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIsolatedFileAsync($request)
    {
        return $this->listIsolatedFileAsyncWithHttpInfo($request);
    }
    
    public function listIsolatedFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/isolated-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['fileHash'] !== null) {
            $queryParams['file_hash'] = $localVarParams['fileHash'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['isolationStatus'] !== null) {
            $queryParams['isolation_status'] = $localVarParams['isolationStatus'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListIsolatedFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListIsolatedFileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定中间件的服务器列表
     *
     * 查询指定中间件的服务器列表，通过传入中间件名称参数，返回对应的中间件服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJarPackageHostInfoAsync($request)
    {
        return $this->listJarPackageHostInfoAsyncWithHttpInfo($request);
    }
    
    public function listJarPackageHostInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/midwares/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageHostInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageHostInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询中间件列表
     *
     * 查询中间件列表，支持通过中间件名称查询对应的服务器树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJarPackageStatisticsAsync($request)
    {
        return $this->listJarPackageStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listJarPackageStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/midwares';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询cronjobs基本信息列表
     *
     * 查询cronjobs基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listK8sCronJobsAsync($request)
    {
        return $this->listK8sCronJobsAsyncWithHttpInfo($request);
    }
    
    public function listK8sCronJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/cronjobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['cronjobName'] !== null) {
            $queryParams['cronjob_name'] = $localVarParams['cronjobName'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sCronJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sCronJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询daemonsets基本信息列表
     *
     * 查询daemonsets基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listK8sDaemonSetsAsync($request)
    {
        return $this->listK8sDaemonSetsAsyncWithHttpInfo($request);
    }
    
    public function listK8sDaemonSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/daemonsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['daemonsetName'] !== null) {
            $queryParams['daemonset_name'] = $localVarParams['daemonsetName'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sDaemonSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sDaemonSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询deployment基本信息列表
     *
     * 查询deployment基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listK8sDeploymentsAsync($request)
    {
        return $this->listK8sDeploymentsAsyncWithHttpInfo($request);
    }
    
    public function listK8sDeploymentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/deployments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['deploymentName'] !== null) {
            $queryParams['deployment_name'] = $localVarParams['deploymentName'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sDeploymentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sDeploymentsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询jobs基本信息列表
     *
     * 查询jobs基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listK8sJobsAsync($request)
    {
        return $this->listK8sJobsAsyncWithHttpInfo($request);
    }
    
    public function listK8sJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询pod基本信息列表
     *
     * 查询pod基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listK8sPodsAsync($request)
    {
        return $this->listK8sPodsAsyncWithHttpInfo($request);
    }
    
    public function listK8sPodsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/pods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['podName'] !== null) {
            $queryParams['pod_name'] = $localVarParams['podName'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sPodsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sPodsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询statefulset基本信息列表
     *
     * 查询statefulset基本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listK8sStatefulSetsAsync($request)
    {
        return $this->listK8sStatefulSetsAsyncWithHttpInfo($request);
    }
    
    public function listK8sStatefulSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/statefulsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['statefulsetName'] !== null) {
            $queryParams['statefulset_name'] = $localVarParams['statefulsetName'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $queryParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sStatefulSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListK8sStatefulSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-内核模块的服务器列表
     *
     * 资产管理-资产指纹-内核模块的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKernelModuleHostInfoAsync($request)
    {
        return $this->listKernelModuleHostInfoAsyncWithHttpInfo($request);
    }
    
    public function listKernelModuleHostInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/host/kernel-module';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListKernelModuleHostInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListKernelModuleHostInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-内核模块左侧树
     *
     * 资产管理-资产指纹-内核模块左侧树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKernelModuleStatisticsAsync($request)
    {
        return $this->listKernelModuleStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listKernelModuleStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/statistics/kernel-module';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListKernelModuleStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListKernelModuleStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器Kubernetes集群列表
     *
     * 查询容器Kubernetes集群列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKubernetesClusterDetailsAsync($request)
    {
        return $this->listKubernetesClusterDetailsAsyncWithHttpInfo($request);
    }
    
    public function listKubernetesClusterDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['loadAgentInfo'] !== null) {
            $queryParams['load_agent_info'] = $localVarParams['loadAgentInfo'];
        }
        if ($localVarParams['scene'] !== null) {
            $queryParams['scene'] = $localVarParams['scene'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListKubernetesClusterDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListKubernetesClusterDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器Kubernetes端点列表
     *
     * 查询容器Kubernetes端点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKubernetesEndpointDetailsAsync($request)
    {
        return $this->listKubernetesEndpointDetailsAsyncWithHttpInfo($request);
    }
    
    public function listKubernetesEndpointDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListKubernetesEndpointDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListKubernetesEndpointDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器Kubernetes服务列表
     *
     * 查询容器Kubernetes服务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKubernetesServiceDetailsAsync($request)
    {
        return $this->listKubernetesServiceDetailsAsyncWithHttpInfo($request);
    }
    
    public function listKubernetesServiceDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListKubernetesServiceDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListKubernetesServiceDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询常用登录IP信息
     *
     * 查询常用登录IP信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoginCommonIpAsync($request)
    {
        return $this->listLoginCommonIpAsyncWithHttpInfo($request);
    }
    
    public function listLoginCommonIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/login-common-ip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipAddr'] !== null) {
            $queryParams['ip_addr'] = $localVarParams['ipAddr'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginCommonIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginCommonIpRequest',
            $asyncRequest = true);
    }

    /**
     * 查询常用登录地信息
     *
     * 查询常用登录地信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoginCommonLocationAsync($request)
    {
        return $this->listLoginCommonLocationAsyncWithHttpInfo($request);
    }
    
    public function listLoginCommonLocationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/login-common-location';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['areaCode'] !== null) {
            $queryParams['area_code'] = $localVarParams['areaCode'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginCommonLocationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginCommonLocationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询SSH登录IP白名单列表
     *
     * 查询SSH登录IP白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoginWhiteIpAsync($request)
    {
        return $this->listLoginWhiteIpAsyncWithHttpInfo($request);
    }
    
    public function listLoginWhiteIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/login-white-ip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['whiteIp'] !== null) {
            $queryParams['white_ip'] = $localVarParams['whiteIp'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginWhiteIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginWhiteIpRequest',
            $asyncRequest = true);
    }

    /**
     * 查询登录白名单列表
     *
     * 查询登录白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoginWhiteListAsync($request)
    {
        return $this->listLoginWhiteListAsyncWithHttpInfo($request);
    }
    
    public function listLoginWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['loginIp'] !== null) {
            $queryParams['login_ip'] = $localVarParams['loginIp'];
        }
        if ($localVarParams['loginUserName'] !== null) {
            $queryParams['login_user_name'] = $localVarParams['loginUserName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListLoginWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询多云集群
     *
     * 查询多云集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMultiCloudClustersAsync($request)
    {
        return $this->listMultiCloudClustersAsyncWithHttpInfo($request);
    }
    
    public function listMultiCloudClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListMultiCloudClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListMultiCloudClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群下的namespace
     *
     * 获取集群下的namespace
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNamespacesAsync($request)
    {
        return $this->listNamespacesAsyncWithHttpInfo($request);
    }
    
    public function listNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/namespace';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListNamespacesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询备份恢复任务列表
     *
     * 查询备份恢复任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOperationLogsByVaultNameAsync($request)
    {
        return $this->listOperationLogsByVaultNameAsyncWithHttpInfo($request);
    }
    
    public function listOperationLogsByVaultNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/backup/operation-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListOperationLogsByVaultNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListOperationLogsByVaultNameRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账号组织
     *
     * 查询账号组织
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationTreeAsync($request)
    {
        return $this->listOrganizationTreeAsyncWithHttpInfo($request);
    }
    
    public function listOrganizationTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/setting/account/organization-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isRefresh'] !== null) {
            $queryParams['is_refresh'] = $localVarParams['isRefresh'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListOrganizationTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListOrganizationTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询口令复杂度策略检测报告
     *
     * 查询口令复杂度策略检测报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPasswordComplexityAsync($request)
    {
        return $this->listPasswordComplexityAsyncWithHttpInfo($request);
    }
    
    public function listPasswordComplexityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/password-complexity';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['resultType'] !== null) {
            $queryParams['result_type'] = $localVarParams['resultType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPasswordComplexityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPasswordComplexityRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机策略列表
     *
     * 查询主机策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPoliciesAsync($request)
    {
        return $this->listPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['agentId'] !== null) {
            $queryParams['agent_id'] = $localVarParams['agentId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询策略组列表
     *
     * 查询策略组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyGroupAsync($request)
    {
        return $this->listPolicyGroupAsyncWithHttpInfo($request);
    }
    
    public function listPolicyGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/policy/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['containerMode'] !== null) {
            $queryParams['container_mode'] = $localVarParams['containerMode'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPolicyGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPolicyGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 资产指纹-端口-服务器列表
     *
     * 具备该端口的主机/容器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPortHostAsync($request)
    {
        return $this->listPortHostAsyncWithHttpInfo($request);
    }
    
    public function listPortHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/ports/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询开放端口统计信息
     *
     * 查询开放端口列表，支持通过传入端口或协议类型查询服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPortStatisticsAsync($request)
    {
        return $this->listPortStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listPortStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/port/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['portString'] !== null) {
            $queryParams['port_string'] = $localVarParams['portString'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单服务器的开放端口列表
     *
     * 查询单服务器的开放端口列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPortsAsync($request)
    {
        return $this->listPortsAsyncWithHttpInfo($request);
    }
    
    public function listPortsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/ports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程列表
     *
     * 查询进程列表，通过传入进程路径参数查询对应的服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProcessStatisticsAsync($request)
    {
        return $this->listProcessStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listProcessStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/process/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 资产指纹-进程-服务器列表
     *
     * 具备该进程的主机/容器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProcessesHostAsync($request)
    {
        return $this->listProcessesHostAsyncWithHttpInfo($request);
    }
    
    public function listProcessesHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/processes/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessesHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessesHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户当前项目下所有用过的标签
     *
     * 查询租户当前项目下所有用过的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectTagsAsync($request)
    {
        return $this->listProjectTagsAsyncWithHttpInfo($request);
    }
    
    public function listProjectTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProjectTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProjectTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询勒索病毒的防护策略列表
     *
     * 查询勒索病毒的防护策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectionPolicyAsync($request)
    {
        return $this->listProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function listProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['protectPolicyId'] !== null) {
            $queryParams['protect_policy_id'] = $localVarParams['protectPolicyId'];
        }
        if ($localVarParams['operatingSystem'] !== null) {
            $queryParams['operating_system'] = $localVarParams['operatingSystem'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询勒索防护服务器列表
     *
     * 查询勒索防护服务器列表，与云备份服务配合使用。因此使用勒索相关接口之前确保该局点有云备份服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectionServerAsync($request)
    {
        return $this->listProtectionServerAsyncWithHttpInfo($request);
    }
    
    public function listProtectionServerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/server';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostStatus'] !== null) {
            $queryParams['host_status'] = $localVarParams['hostStatus'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionServerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询防护服务器列表
     *
     * 查询防护服务器列表：查询防护服务器相关数据，包含服务器名称、ip地址、操作系统、服务器组名称、防护策略、防护状态、微服务防护状态、RASP防护状态、RASP攻击数量信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectionServersAsync($request)
    {
        return $this->listProtectionServersAsyncWithHttpInfo($request);
    }
    
    public function listProtectionServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['appStatus'] !== null) {
            $queryParams['app_status'] = $localVarParams['appStatus'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionServersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询导出任务信息
     *
     * 查询导出任务信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueryExportTaskAsync($request)
    {
        return $this->listQueryExportTaskAsyncWithHttpInfo($request);
    }
    
    public function listQueryExportTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/export-task/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListQueryExportTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListQueryExportTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额详情
     *
     * 查询配额详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotasDetailAsync($request)
    {
        return $this->listQuotasDetailAsyncWithHttpInfo($request);
    }
    
    public function listQuotasDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/billing/quotas-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['quotaStatus'] !== null) {
            $queryParams['quota_status'] = $localVarParams['quotaStatus'];
        }
        if ($localVarParams['usedStatus'] !== null) {
            $queryParams['used_status'] = $localVarParams['usedStatus'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListQuotasDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListQuotasDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询勒索防护服务器列表2.0
     *
     * 查询勒索防护服务器列表，与云备份服务配合使用。因此使用勒索相关接口之前确保该局点有云备份服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRansomwareProtectionNodesAsync($request)
    {
        return $this->listRansomwareProtectionNodesAsyncWithHttpInfo($request);
    }
    
    public function listRansomwareProtectionNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['hostStatus'] !== null) {
            $queryParams['host_status'] = $localVarParams['hostStatus'];
        }
        if ($localVarParams['ransomProtectionStatus'] !== null) {
            $queryParams['ransom_protection_status'] = $localVarParams['ransomProtectionStatus'];
        }
        if ($localVarParams['protectPolicyName'] !== null) {
            $queryParams['protect_policy_name'] = $localVarParams['protectPolicyName'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRansomwareProtectionNodesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRansomwareProtectionNodesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用防护事件列表
     *
     * 查询应用防护事件列表：展示防护事件相关信息，包含告警级别、服务器名称、告警名称、告警时间、攻击源ip、攻击源url数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRaspEventsAsync($request)
    {
        return $this->listRaspEventsAsyncWithHttpInfo($request);
    }
    
    public function listRaspEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['attackTag'] !== null) {
            $queryParams['attack_tag'] = $localVarParams['attackTag'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRaspEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRaspEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询防护策略列表
     *
     * 查询防护策略列表：查询创建的防护策略信息，包含防护策略名称、检测规则、关联服务器数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRaspPoliciesAsync($request)
    {
        return $this->listRaspPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listRaspPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRaspPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRaspPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定安全配置项的检查项列表
     *
     * 查询指定安全配置项的检查项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRiskConfigCheckRulesAsync($request)
    {
        return $this->listRiskConfigCheckRulesAsyncWithHttpInfo($request);
    }
    
    public function listRiskConfigCheckRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/risk-config/{check_name}/check-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['resultType'] !== null) {
            $queryParams['result_type'] = $localVarParams['resultType'];
        }
        if ($localVarParams['checkRuleName'] !== null) {
            $queryParams['check_rule_name'] = $localVarParams['checkRuleName'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigCheckRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigCheckRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定安全配置项的受影响服务器列表
     *
     * 查询指定安全配置项的受影响服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRiskConfigHostsAsync($request)
    {
        return $this->listRiskConfigHostsAsyncWithHttpInfo($request);
    }
    
    public function listRiskConfigHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/risk-config/{check_name}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户的服务器安全配置检测结果列表
     *
     * 查询租户的服务器安全配置检测结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRiskConfigsAsync($request)
    {
        return $this->listRiskConfigsAsyncWithHttpInfo($request);
    }
    
    public function listRiskConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/risk-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 查入侵事件列表
     *
     * 查入侵事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityEventsAsync($request)
    {
        return $this->listSecurityEventsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['eventTypes'] !== null) {
            $queryParams['event_types'] = $localVarParams['eventTypes'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['eventClassIds'] !== null) {
            $queryParams['event_class_ids'] = $localVarParams['eventClassIds'];
        }
        if ($localVarParams['severityList'] !== null) {
            $queryParams['severity_list'] = $localVarParams['severityList'];
        }
        if ($localVarParams['attackTag'] !== null) {
            $queryParams['attack_tag'] = $localVarParams['attackTag'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['tagList'] !== null) {
            $queryParams['tag_list'] = $localVarParams['tagList'];
        }
        if ($localVarParams['attCk'] !== null) {
            $queryParams['att_ck'] = $localVarParams['attCk'];
        }
        if ($localVarParams['eventName'] !== null) {
            $queryParams['event_name'] = $localVarParams['eventName'];
        }
        if ($localVarParams['autoBlock'] !== null) {
            $queryParams['auto_block'] = $localVarParams['autoBlock'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云原生网络模式2.0的集群已配置的安全组策略
     *
     * 查询云原生网络模式2.0的集群已配置的安全组策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityGroupPoliciesAsync($request)
    {
        return $this->listSecurityGroupPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityGroupPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/security-group-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityGroupPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityGroupPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业项目下所有的安全组列表
     *
     * 查询企业项目下所有的安全组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityGroupsAsync($request)
    {
        return $this->listSecurityGroupsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/security-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询swr镜像仓库镜像列表
     *
     * 查询swr镜像仓库镜像列表,如果需要从swr同步最新镜像，需要先调用“从swr同步镜像”接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSwrImageRepositoryAsync($request)
    {
        return $this->listSwrImageRepositoryAsyncWithHttpInfo($request);
    }
    
    public function listSwrImageRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/swr-repository';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['latestVersion'] !== null) {
            $queryParams['latest_version'] = $localVarParams['latestVersion'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['scanStatus'] !== null) {
            $queryParams['scan_status'] = $localVarParams['scanStatus'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $queryParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['imageSize'] !== null) {
            $queryParams['image_size'] = $localVarParams['imageSize'];
        }
        if ($localVarParams['startLatestUpdateTime'] !== null) {
            $queryParams['start_latest_update_time'] = $localVarParams['startLatestUpdateTime'];
        }
        if ($localVarParams['endLatestUpdateTime'] !== null) {
            $queryParams['end_latest_update_time'] = $localVarParams['endLatestUpdateTime'];
        }
        if ($localVarParams['startLatestScanTime'] !== null) {
            $queryParams['start_latest_scan_time'] = $localVarParams['startLatestScanTime'];
        }
        if ($localVarParams['endLatestScanTime'] !== null) {
            $queryParams['end_latest_scan_time'] = $localVarParams['endLatestScanTime'];
        }
        if ($localVarParams['hasMaliciousFile'] !== null) {
            $queryParams['has_malicious_file'] = $localVarParams['hasMaliciousFile'];
        }
        if ($localVarParams['hasUnsafeSetting'] !== null) {
            $queryParams['has_unsafe_setting'] = $localVarParams['hasUnsafeSetting'];
        }
        if ($localVarParams['hasVul'] !== null) {
            $queryParams['has_vul'] = $localVarParams['hasVul'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSwrImageRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSwrImageRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询系统用白名单列表
     *
     * 查询系统用户白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSystemUserWhiteListAsync($request)
    {
        return $this->listSystemUserWhiteListAsyncWithHttpInfo($request);
    }
    
    public function listSystemUserWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/userlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['systemUserName'] !== null) {
            $queryParams['system_user_name'] = $localVarParams['systemUserName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSystemUserWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSystemUserWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询双因子主机列表
     *
     * 查询双因子主机列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTwoFactorLoginHostAsync($request)
    {
        return $this->listTwoFactorLoginHostAsyncWithHttpInfo($request);
    }
    
    public function listTwoFactorLoginHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/two-factor-login/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['displayName'] !== null) {
            $queryParams['display_name'] = $localVarParams['displayName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListTwoFactorLoginHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListTwoFactorLoginHostRequest',
            $asyncRequest = true);
    }

    /**
     * 获取账户变动历史信息
     *
     * 获取账户变动历史记录信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserChangeHistoriesAsync($request)
    {
        return $this->listUserChangeHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listUserChangeHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/user/change-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['rootPermission'] !== null) {
            $queryParams['root_permission'] = $localVarParams['rootPermission'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['changeType'] !== null) {
            $queryParams['change_type'] = $localVarParams['changeType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserChangeHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserChangeHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账号信息列表
     *
     * 查询账号信息列表，支持通过传入账号名称参数查询对应的服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserStatisticsAsync($request)
    {
        return $this->listUserStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listUserStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/user/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账号的服务器列表
     *
     * 查询账号的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsersAsync($request)
    {
        return $this->listUsersAsyncWithHttpInfo($request);
    }
    
    public function listUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['loginPermission'] !== null) {
            $queryParams['login_permission'] = $localVarParams['loginPermission'];
        }
        if ($localVarParams['rootPermission'] !== null) {
            $queryParams['root_permission'] = $localVarParams['rootPermission'];
        }
        if ($localVarParams['userGroup'] !== null) {
            $queryParams['user_group'] = $localVarParams['userGroup'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询漏洞历史处置记录列表
     *
     * 查询漏洞历史处置记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulHandleHistoryAsync($request)
    {
        return $this->listVulHandleHistoryAsyncWithHttpInfo($request);
    }
    
    public function listVulHandleHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/handle-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['vulType'] !== null) {
            $queryParams['vul_type'] = $localVarParams['vulType'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulHandleHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulHandleHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个漏洞影响的云服务器信息
     *
     * 查询单个漏洞影响的云服务器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulHostsAsync($request)
    {
        return $this->listVulHostsAsyncWithHttpInfo($request);
    }
    
    public function listVulHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severityLevel'] !== null) {
            $queryParams['severity_level'] = $localVarParams['severityLevel'];
        }
        if ($localVarParams['isAffectBusiness'] !== null) {
            $queryParams['is_affect_business'] = $localVarParams['isAffectBusiness'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询漏洞扫描任务列表
     *
     * 查询漏洞扫描任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulScanTaskAsync($request)
    {
        return $this->listVulScanTaskAsyncWithHttpInfo($request);
    }
    
    public function listVulScanTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/scan-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['scanType'] !== null) {
            $queryParams['scan_type'] = $localVarParams['scanType'];
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['minStartTime'] !== null) {
            $queryParams['min_start_time'] = $localVarParams['minStartTime'];
        }
        if ($localVarParams['maxStartTime'] !== null) {
            $queryParams['max_start_time'] = $localVarParams['maxStartTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询漏洞扫描任务对应的主机列表
     *
     * 查询漏洞扫描任务对应的主机列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulScanTaskHostAsync($request)
    {
        return $this->listVulScanTaskHostAsyncWithHttpInfo($request);
    }
    
    public function listVulScanTaskHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/scan-task/{task_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['scanStatus'] !== null) {
            $queryParams['scan_status'] = $localVarParams['scanStatus'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询漏洞列表
     *
     * 查询漏洞列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulnerabilitiesAsync($request)
    {
        return $this->listVulnerabilitiesAsyncWithHttpInfo($request);
    }
    
    public function listVulnerabilitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/vulnerabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['vulName'] !== null) {
            $queryParams['vul_name'] = $localVarParams['vulName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['cveId'] !== null) {
            $queryParams['cve_id'] = $localVarParams['cveId'];
        }
        if ($localVarParams['labelList'] !== null) {
            $queryParams['label_list'] = $localVarParams['labelList'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 漏洞对应cve信息
     *
     * 漏洞对应cve信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulnerabilityCveAsync($request)
    {
        return $this->listVulnerabilityCveAsyncWithHttpInfo($request);
    }
    
    public function listVulnerabilityCveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/vulnerability/{vul_id}/cve';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['vulId'] !== null) {
            $pathParams['vul_id'] = $localVarParams['vulId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilityCveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilityCveRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弱口令检测结果列表
     *
     * 查询弱口令检测结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWeakPasswordUsersAsync($request)
    {
        return $this->listWeakPasswordUsersAsyncWithHttpInfo($request);
    }
    
    public function listWeakPasswordUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/weak-password-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWeakPasswordUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWeakPasswordUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-左侧WebAppAndService名称树信息
     *
     * 资产管理-资产指纹-左侧WebAppAndService名称树信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebAppAndServiceStatisticsAsync($request)
    {
        return $this->listWebAppAndServiceStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listWebAppAndServiceStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/web-app-and-service-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['catalogue'] !== null) {
            $queryParams['catalogue'] = $localVarParams['catalogue'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebAppAndServiceStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebAppAndServiceStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-右侧WebAppAndService资产信息
     *
     * 资产管理-资产指纹-右侧WebAppAndService资产信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebAppAndServicesAsync($request)
    {
        return $this->listWebAppAndServicesAsyncWithHttpInfo($request);
    }
    
    public function listWebAppAndServicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/web-app-and-services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['catalogue'] !== null) {
            $queryParams['catalogue'] = $localVarParams['catalogue'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['installDir'] !== null) {
            $queryParams['install_dir'] = $localVarParams['installDir'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebAppAndServicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebAppAndServicesRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-Web框架的服务器列表
     *
     * 资产管理-资产指纹-Web框架的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebFrameworkHostInfoAsync($request)
    {
        return $this->listWebFrameworkHostInfoAsyncWithHttpInfo($request);
    }
    
    public function listWebFrameworkHostInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/host/web-framework';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebFrameworkHostInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebFrameworkHostInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-Web框架左侧树
     *
     * 资产管理-资产指纹-Web框架左侧树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebFrameworkStatisticsAsync($request)
    {
        return $this->listWebFrameworkStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listWebFrameworkStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/statistics/web-framework';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebFrameworkStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebFrameworkStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-Web站点的服务器列表
     *
     * 资产管理-资产指纹-Web站点的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebSiteHostInfoAsync($request)
    {
        return $this->listWebSiteHostInfoAsyncWithHttpInfo($request);
    }
    
    public function listWebSiteHostInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/host/web-site';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebSiteHostInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebSiteHostInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-资产指纹-Web站点左侧树
     *
     * 资产管理-资产指纹-Web站点左侧树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebSiteStatisticsAsync($request)
    {
        return $this->listWebSiteStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listWebSiteStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/statistics/web-site';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebSiteStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebSiteStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群下某一命名空间下的工作负载
     *
     * 查询集群下某一命名空间下的工作负载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkLoadsAsync($request)
    {
        return $this->listWorkLoadsAsyncWithHttpInfo($request);
    }
    
    public function listWorkLoadsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/{namespace}/workloads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['workloadType'] !== null) {
            $queryParams['workload_type'] = $localVarParams['workloadType'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWorkLoadsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWorkLoadsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询防护列表
     *
     * 查询防护列表：查询网页防篡改主机防护状态列表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWtpProtectHostAsync($request)
    {
        return $this->listWtpProtectHostAsyncWithHttpInfo($request);
    }
    
    public function listWtpProtectHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['wtpStatus'] !== null) {
            $queryParams['wtp_status'] = $localVarParams['wtpStatus'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWtpProtectHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWtpProtectHostRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑动态端口蜜罐策略
     *
     * 编辑动态端口蜜罐策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyDecoyPortPolicyAsync($request)
    {
        return $this->modifyDecoyPortPolicyAsyncWithHttpInfo($request);
    }
    
    public function modifyDecoyPortPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ModifyDecoyPortPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ModifyDecoyPortPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 解析多云集群的配置文件
     *
     * 解析多云集群的配置文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function parseMultiCloudClusterConfigAsync($request)
    {
        return $this->parseMultiCloudClusterConfigAsyncWithHttpInfo($request);
    }
    
    public function parseMultiCloudClusterConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/config-analyze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ParseMultiCloudClusterConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ParseMultiCloudClusterConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 删除告警白名单
     *
     * 删除告警白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeAlarmWhiteListAsync($request)
    {
        return $this->removeAlarmWhiteListAsyncWithHttpInfo($request);
    }
    
    public function removeAlarmWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/alarm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveAlarmWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveAlarmWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 删除登录白名单
     *
     * 删除登录白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeLoginWhiteListAsync($request)
    {
        return $this->removeLoginWhiteListAsyncWithHttpInfo($request);
    }
    
    public function removeLoginWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveLoginWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveLoginWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 删除多云集群
     *
     * 删除多云集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeMultiCloudClustersAsync($request)
    {
        return $this->removeMultiCloudClustersAsyncWithHttpInfo($request);
    }
    
    public function removeMultiCloudClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveMultiCloudClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveMultiCloudClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 删除系统用户白名单
     *
     * 删除系统用户白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeSystemUserWhiteListAsync($request)
    {
        return $this->removeSystemUserWhiteListAsyncWithHttpInfo($request);
    }
    
    public function removeSystemUserWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/userlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveSystemUserWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RemoveSystemUserWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 采集单主机资产指纹
     *
     * 采集单主机资产指纹
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runHostAssetManualCollectAsync($request)
    {
        return $this->runHostAssetManualCollectAsyncWithHttpInfo($request);
    }
    
    public function runHostAssetManualCollectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/manual-collect/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['type'] !== null) {
            $pathParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RunHostAssetManualCollectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RunHostAssetManualCollectRequest',
            $asyncRequest = true);
    }

    /**
     * 从SWR服务同步镜像列表
     *
     * 从SWR服务同步镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runImageSynchronizeAsync($request)
    {
        return $this->runImageSynchronizeAsyncWithHttpInfo($request);
    }
    
    public function runImageSynchronizeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/synchronize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RunImageSynchronizeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RunImageSynchronizeRequest',
            $asyncRequest = true);
    }

    /**
     * 开启/关闭动态网页防篡改防护
     *
     * 开启/关闭动态网页防篡改防护，下发/清空动态网页防篡改策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setRaspSwitchAsync($request)
    {
        return $this->setRaspSwitchAsyncWithHttpInfo($request);
    }
    
    public function setRaspSwitchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/rasp/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SetRaspSwitchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SetRaspSwitchRequest',
            $asyncRequest = true);
    }

    /**
     * 设置双因子登录配置
     *
     * 设置双因子登录配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setTwoFactorLoginConfigAsync($request)
    {
        return $this->setTwoFactorLoginConfigAsyncWithHttpInfo($request);
    }
    
    public function setTwoFactorLoginConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/two-factor-login/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SetTwoFactorLoginConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SetTwoFactorLoginConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 开启关闭网页防篡改防护
     *
     * 开启/关闭网页防篡改功能防护，下发/清空网页防篡改策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setWtpProtectionStatusInfoAsync($request)
    {
        return $this->setWtpProtectionStatusInfoAsyncWithHttpInfo($request);
    }
    
    public function setWtpProtectionStatusInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/static/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SetWtpProtectionStatusInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SetWtpProtectionStatusInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取部署模板
     *
     * 获取部署模板，在安装Daemonset的时候提供选择
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAgentDaemonsetDeployTemplateAsync($request)
    {
        return $this->showAgentDaemonsetDeployTemplateAsyncWithHttpInfo($request);
    }
    
    public function showAgentDaemonsetDeployTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAgentDaemonsetDeployTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAgentDaemonsetDeployTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群daemonset信息
     *
     * 获取集群daemonset信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAgentDaemonsetDetailInfoAsync($request)
    {
        return $this->showAgentDaemonsetDetailInfoAsyncWithHttpInfo($request);
    }
    
    public function showAgentDaemonsetDetailInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/{cluster_id}/daemonsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAgentDaemonsetDetailInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAgentDaemonsetDetailInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-概览-资产状态-主机Agent状态
     *
     * 资产管理-概览-资产状态-主机Agent状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAgentStatisticsStatusAsync($request)
    {
        return $this->showAgentStatisticsStatusAsyncWithHttpInfo($request);
    }
    
    public function showAgentStatisticsStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/overview/status/agent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAgentStatisticsStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAgentStatisticsStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询“病毒查杀按次计费”开关状态
     *
     * 查询“病毒查杀按次计费”开关状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAntivirusPayPerScanStatusAsync($request)
    {
        return $this->showAntivirusPayPerScanStatusAsyncWithHttpInfo($request);
    }
    
    public function showAntivirusPayPerScanStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/pay-per-scan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAntivirusPayPerScanStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAntivirusPayPerScanStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询病毒查杀统计信息
     *
     * 查询病毒查杀统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAntivirusStatisticAsync($request)
    {
        return $this->showAntivirusStatisticAsyncWithHttpInfo($request);
    }
    
    public function showAntivirusStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAntivirusStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAntivirusStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用防护开启状态
     *
     * 查询应用防护开启状态：查询单台服务器的应用防护功能开启状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppRaspSwitchStatusAsync($request)
    {
        return $this->showAppRaspSwitchStatusAsyncWithHttpInfo($request);
    }
    
    public function showAppRaspSwitchStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/{host_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAppRaspSwitchStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAppRaspSwitchStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 统计资产信息，账号、端口、进程等
     *
     * 资产统计信息，账号、端口、进程等
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetStatisticAsync($request)
    {
        return $this->showAssetStatisticAsyncWithHttpInfo($request);
    }
    
    public function showAssetStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAssetStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAssetStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 查询HSS存储库绑定的备份策略信息
     *
     * 查询HSS存储库绑定的备份策略信息,确保已经购买了勒索防护存储库，可以从cbr云备份服务进行验证，确保已经存在HSS_projectid命名的存储库已经购买
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBackupPolicyInfoAsync($request)
    {
        return $this->showBackupPolicyInfoAsyncWithHttpInfo($request);
    }
    
    public function showBackupPolicyInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/backup/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBackupPolicyInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBackupPolicyInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询基线扫描手动检测结果
     *
     * 查询基线扫描手动检测结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBaselineScanStatusAsync($request)
    {
        return $this->showBaselineScanStatusAsyncWithHttpInfo($request);
    }
    
    public function showBaselineScanStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/scan-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'appcation/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'appcation/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineScanStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineScanStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询基线白名单
     *
     * 查询基线白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBaselineWhiteListAsync($request)
    {
        return $this->showBaselineWhiteListAsyncWithHttpInfo($request);
    }
    
    public function showBaselineWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/whitelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配置检查项检测报告
     *
     * 查询配置检查项检测报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCheckRuleDetailAsync($request)
    {
        return $this->showCheckRuleDetailAsyncWithHttpInfo($request);
    }
    
    public function showCheckRuleDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/check-rule/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['checkType'] !== null) {
            $queryParams['check_type'] = $localVarParams['checkType'];
        }
        if ($localVarParams['checkRuleId'] !== null) {
            $queryParams['check_rule_id'] = $localVarParams['checkRuleId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'appcation/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'appcation/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCheckRuleDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCheckRuleDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群资产统计数量
     *
     * 查询集群资产统计数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterAssetStatisticsAsync($request)
    {
        return $this->showClusterAssetStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showClusterAssetStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster/asset/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowClusterAssetStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowClusterAssetStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群组件防护策略模板
     *
     * 查询集群防护策略模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterProtectPolicyTemplateAsync($request)
    {
        return $this->showClusterProtectPolicyTemplateAsyncWithHttpInfo($request);
    }
    
    public function showClusterProtectPolicyTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/clusters/protection-policy-templates/{policy_template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyTemplateId'] !== null) {
            $pathParams['policy_template_id'] = $localVarParams['policyTemplateId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowClusterProtectPolicyTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowClusterProtectPolicyTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 呈现某一端口详细信息
     *
     * 呈现某一端口详细信息，如本地端口：80                      类型：TCP 危险程度：正常 端口描述：常用于SSH(SecureShell)-远程登录协议，用于安全登录文件传输（SCP，SFTP）及端口重新定向。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommonPortAsync($request)
    {
        return $this->showCommonPortAsyncWithHttpInfo($request);
    }
    
    public function showCommonPortAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/common-port-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['categoty'] !== null) {
            $queryParams['categoty'] = $localVarParams['categoty'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCommonPortResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCommonPortRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器集群网络的网络信息
     *
     * 查询容器集群网络的网络信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showContainerNetworkInfoAsync($request)
    {
        return $this->showContainerNetworkInfoAsyncWithHttpInfo($request);
    }
    
    public function showContainerNetworkInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/network-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowContainerNetworkInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowContainerNetworkInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器节点防护总览数据
     *
     * 查询容器节点防护总览数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showContainerNodeStatisticsAsync($request)
    {
        return $this->showContainerNodeStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showContainerNodeStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/node-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowContainerNodeStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowContainerNodeStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-概览-资产状态-容器节点防护状态
     *
     * 资产管理-概览-资产状态-容器节点防护状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showContainerProtectionStatusAsync($request)
    {
        return $this->showContainerProtectionStatusAsyncWithHttpInfo($request);
    }
    
    public function showContainerProtectionStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/overview/status/container/protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowContainerProtectionStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowContainerProtectionStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查看动态端口蜜罐策略详情
     *
     * 查看动态端口蜜罐策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDecoyPortPolicyDetailsAsync($request)
    {
        return $this->showDecoyPortPolicyDetailsAsyncWithHttpInfo($request);
    }
    
    public function showDecoyPortPolicyDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowDecoyPortPolicyDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowDecoyPortPolicyDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单主机资产指纹采集状态
     *
     * 查询单主机资产指纹采集状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHostAssetManualCollectStatusAsync($request)
    {
        return $this->showHostAssetManualCollectStatusAsyncWithHttpInfo($request);
    }
    
    public function showHostAssetManualCollectStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/manual-collect/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowHostAssetManualCollectStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowHostAssetManualCollectStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-概览-资产状态-Agent状态
     *
     * 资产管理-概览-资产状态-Agent状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHostProtectionStatusAsync($request)
    {
        return $this->showHostProtectionStatusAsyncWithHttpInfo($request);
    }
    
    public function showHostProtectionStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/overview/status/host/protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowHostProtectionStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowHostProtectionStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 容器资产-镜像统计
     *
     * 容器资产-镜像统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImageAssetStatisticsAsync($request)
    {
        return $this->showImageAssetStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showImageAssetStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/asset/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowImageAssetStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowImageAssetStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像配置检查项检测报告
     *
     * 查询镜像配置检查项检测报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImageCheckRuleDetailAsync($request)
    {
        return $this->showImageCheckRuleDetailAsyncWithHttpInfo($request);
    }
    
    public function showImageCheckRuleDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/baseline/check-rule/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['checkType'] !== null) {
            $queryParams['check_type'] = $localVarParams['checkType'];
        }
        if ($localVarParams['checkRuleId'] !== null) {
            $queryParams['check_rule_id'] = $localVarParams['checkRuleId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'appcation/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'appcation/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowImageCheckRuleDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowImageCheckRuleDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器详细信息
     *
     * 查询容器详细信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showK8sContainerDetailAsync($request)
    {
        return $this->showK8sContainerDetailAsyncWithHttpInfo($request);
    }
    
    public function showK8sContainerDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/container/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowK8sContainerDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowK8sContainerDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询pod详细信息
     *
     * 查询pod详细信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showK8sPodDetailAsync($request)
    {
        return $this->showK8sPodDetailAsyncWithHttpInfo($request);
    }
    
    public function showK8sPodDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/{pod_name}/pod/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['podName'] !== null) {
            $pathParams['pod_name'] = $localVarParams['podName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowK8sPodDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowK8sPodDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器Kubernetes端点详情
     *
     * 查询容器Kubernetes端点详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKubernetesEndpointInfoAsync($request)
    {
        return $this->showKubernetesEndpointInfoAsyncWithHttpInfo($request);
    }
    
    public function showKubernetesEndpointInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/endpoint/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowKubernetesEndpointInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowKubernetesEndpointInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容器Kubernetes服务详情
     *
     * 查询容器Kubernetes服务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKubernetesServiceInfoAsync($request)
    {
        return $this->showKubernetesServiceInfoAsyncWithHttpInfo($request);
    }
    
    public function showKubernetesServiceInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/kubernetes/service/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowKubernetesServiceInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowKubernetesServiceInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询导出任务信息-按查询条件
     *
     * 查询导出任务信息-按查询条件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLatestExportTaskByTypeAsync($request)
    {
        return $this->showLatestExportTaskByTypeAsyncWithHttpInfo($request);
    }
    
    public function showLatestExportTaskByTypeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/export-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['exportTaskType'] !== null) {
            $queryParams['export_task_type'] = $localVarParams['exportTaskType'];
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowLatestExportTaskByTypeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowLatestExportTaskByTypeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取多云集群的上传镜像指令
     *
     * 获取多云集群的上传镜像指令
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMultiCloudClusterImageCommandAsync($request)
    {
        return $this->showMultiCloudClusterImageCommandAsyncWithHttpInfo($request);
    }
    
    public function showMultiCloudClusterImageCommandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/image-upload-command';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageRepo'] !== null) {
            $queryParams['image_repo'] = $localVarParams['imageRepo'];
        }
        if ($localVarParams['organization'] !== null) {
            $queryParams['organization'] = $localVarParams['organization'];
        }
        if ($localVarParams['username'] !== null) {
            $queryParams['username'] = $localVarParams['username'];
        }
        if ($localVarParams['password'] !== null) {
            $queryParams['password'] = $localVarParams['password'];
        }
        if ($localVarParams['plugType'] !== null) {
            $queryParams['plug_type'] = $localVarParams['plugType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowMultiCloudClusterImageCommandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowMultiCloudClusterImageCommandRequest',
            $asyncRequest = true);
    }

    /**
     * 获取多云集群的代理安装脚本
     *
     * 获取多云集群的代理安装脚本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMultiCloudClusterProxyScriptAsync($request)
    {
        return $this->showMultiCloudClusterProxyScriptAsyncWithHttpInfo($request);
    }
    
    public function showMultiCloudClusterProxyScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/clusters/{cluster_id}/agent/install-script';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowMultiCloudClusterProxyScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowMultiCloudClusterProxyScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 集群网络策略总览
     *
     * 集群网络策略总览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNetworkStatisticsAsync($request)
    {
        return $this->showNetworkStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showNetworkStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/network-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowNetworkStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowNetworkStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-概览-资产状态-操作系统统计信息
     *
     * 资产管理-概览-资产状态-操作系统统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOsStatisticsInfoAsync($request)
    {
        return $this->showOsStatisticsInfoAsyncWithHttpInfo($request);
    }
    
    public function showOsStatisticsInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/overview/status/os';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowOsStatisticsInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowOsStatisticsInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取页面通知信息
     *
     * 获取页面通知信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPageNoticesAsync($request)
    {
        return $this->showPageNoticesAsyncWithHttpInfo($request);
    }
    
    public function showPageNoticesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/setting/page-notices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['pageLocation'] !== null) {
            $queryParams['page_location'] = $localVarParams['pageLocation'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowPageNoticesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowPageNoticesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询产商品信息
     *
     * 查询产商品信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProductdataOfferingInfosAsync($request)
    {
        return $this->showProductdataOfferingInfosAsyncWithHttpInfo($request);
    }
    
    public function showProductdataOfferingInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/product/productdata/offering-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['siteCode'] !== null) {
            $queryParams['site_code'] = $localVarParams['siteCode'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowProductdataOfferingInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowProductdataOfferingInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 资产管理-概览-资产状态-防护配额统计信息
     *
     * 资产管理-概览-资产状态-防护配额统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotaStatisticsInfoAsync($request)
    {
        return $this->showQuotaStatisticsInfoAsyncWithHttpInfo($request);
    }
    
    public function showQuotaStatisticsInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/asset/overview/status/quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowQuotaStatisticsInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowQuotaStatisticsInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询防护策略详情
     *
     * 查询防护策略详情：查询防护策略配置的相关检测规则信息，包含14种检测规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRaspPolicyDetailAsync($request)
    {
        return $this->showRaspPolicyDetailAsyncWithHttpInfo($request);
    }
    
    public function showRaspPolicyDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/policy/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRaspPolicyDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRaspPolicyDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 防护数据统计
     *
     * 防护数据统计：统计已添加防护服务器的数量以及近七天微服务RASP攻击数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRaspProtectStatisticsAsync($request)
    {
        return $this->showRaspProtectStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showRaspProtectStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRaspProtectStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRaspProtectStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询防护服务器java应用详情
     *
     * 查询防护服务器java应用详情：查询防护服务器的java应用状态列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRaspServerDetailAsync($request)
    {
        return $this->showRaspServerDetailAsyncWithHttpInfo($request);
    }
    
    public function showRaspServerDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/servers/{host_id}/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
        }
        if ($localVarParams['appProtectStatus'] !== null) {
            $queryParams['app_protect_status'] = $localVarParams['appProtectStatus'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRaspServerDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRaspServerDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额信息
     *
     * 查询配额信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceQuotasAsync($request)
    {
        return $this->showResourceQuotasAsyncWithHttpInfo($request);
    }
    
    public function showResourceQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/billing/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowResourceQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowResourceQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定安全配置项的检查结果
     *
     * 查询指定安全配置项的检查结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRiskConfigDetailAsync($request)
    {
        return $this->showRiskConfigDetailAsyncWithHttpInfo($request);
    }
    
    public function showRiskConfigDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/risk-config/{check_name}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRiskConfigDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRiskConfigDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个备份策略信息
     *
     * 查询单个备份策略信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSingleBackupPolicyInfoAsync($request)
    {
        return $this->showSingleBackupPolicyInfoAsyncWithHttpInfo($request);
    }
    
    public function showSingleBackupPolicyInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/backup/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowSingleBackupPolicyInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowSingleBackupPolicyInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询漏洞扫描策略
     *
     * 查询漏洞扫描策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVulScanPolicyAsync($request)
    {
        return $this->showVulScanPolicyAsyncWithHttpInfo($request);
    }
    
    public function showVulScanPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/scan-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulScanPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulScanPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询漏洞管理统计数据
     *
     * 查询漏洞管理统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVulStaticsAsync($request)
    {
        return $this->showVulStaticsAsyncWithHttpInfo($request);
    }
    
    public function showVulStaticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulStaticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulStaticsRequest',
            $asyncRequest = true);
    }

    /**
     * 开启勒索病毒防护
     *
     * 开启勒索病毒防护,请保证该region有cbr云备份服务，勒索服务与云备份服务有关联关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startProtectionAsync($request)
    {
        return $this->startProtectionAsyncWithHttpInfo($request);
    }
    
    public function startProtectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\StartProtectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\StartProtectionRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭勒索病毒防护
     *
     * 关闭勒索病毒防护
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopProtectionAsync($request)
    {
        return $this->stopProtectionAsyncWithHttpInfo($request);
    }
    
    public function stopProtectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\StopProtectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\StopProtectionRequest',
            $asyncRequest = true);
    }

    /**
     * 取消扫描任务
     *
     * 取消扫描任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchAntivirusTaskAsync($request)
    {
        return $this->switchAntivirusTaskAsyncWithHttpInfo($request);
    }
    
    public function switchAntivirusTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchAntivirusTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchAntivirusTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 操作集群防护模式
     *
     * 操作集群防护模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchClusterProtectionModeAsync($request)
    {
        return $this->switchClusterProtectionModeAsyncWithHttpInfo($request);
    }
    
    public function switchClusterProtectionModeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/cluster-protect/switch-mod';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchClusterProtectionModeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchClusterProtectionModeRequest',
            $asyncRequest = true);
    }

    /**
     * 切换防护状态
     *
     * 切换防护状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchContainerProtectStatusAsync($request)
    {
        return $this->switchContainerProtectStatusAsyncWithHttpInfo($request);
    }
    
    public function switchContainerProtectStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/switch-version';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchContainerProtectStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchContainerProtectStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 切换主机动态端口蜜罐策略
     *
     * 切换主机动态端口蜜罐策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchDecoyPortHostPolicyAsync($request)
    {
        return $this->switchDecoyPortHostPolicyAsyncWithHttpInfo($request);
    }
    
    public function switchDecoyPortHostPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/honeypot-port/host-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchDecoyPortHostPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchDecoyPortHostPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 切换防护状态
     *
     * 切换防护状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchHostsProtectStatusAsync($request)
    {
        return $this->switchHostsProtectStatusAsyncWithHttpInfo($request);
    }
    
    public function switchHostsProtectStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/host-management/protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchHostsProtectStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchHostsProtectStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 开启/关闭应用防护，更新防护端口
     *
     * 开启/关闭应用防护，选择开启的防护策略，选择需要防护的服务器，下发防护策略，可传入端口号更新防护端口，关闭防护则清空策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchRaspAsync($request)
    {
        return $this->switchRaspAsyncWithHttpInfo($request);
    }
    
    public function switchRaspAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchRaspResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchRaspRequest',
            $asyncRequest = true);
    }

    /**
     * 同步容器集群最新数据
     *
     * 同步容器集群最新数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncClusterListAsync($request)
    {
        return $this->syncClusterListAsyncWithHttpInfo($request);
    }
    
    public function syncClusterListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/cluster/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SyncClusterListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SyncClusterListRequest',
            $asyncRequest = true);
    }

    /**
     * 同步集群防护事件
     *
     * 同步集群防护事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncClusterProtectionEventAsync($request)
    {
        return $this->syncClusterProtectionEventAsyncWithHttpInfo($request);
    }
    
    public function syncClusterProtectionEventAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/clusters/protection-event-sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SyncClusterProtectionEventResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SyncClusterProtectionEventRequest',
            $asyncRequest = true);
    }

    /**
     * 同步集群下网络节点最新数据
     *
     * 同步集群下容器网络策略最新数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncContainerNetworkNodeAsync($request)
    {
        return $this->syncContainerNetworkNodeAsyncWithHttpInfo($request);
    }
    
    public function syncContainerNetworkNodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/node-sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SyncContainerNetworkNodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SyncContainerNetworkNodeRequest',
            $asyncRequest = true);
    }

    /**
     * 同步集群下容器网络策略最新数据
     *
     * 同步集群下容器网络策略最新数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncContainerNetworkPolicyListAsync($request)
    {
        return $this->syncContainerNetworkPolicyListAsyncWithHttpInfo($request);
    }
    
    public function syncContainerNetworkPolicyListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/policy-sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SyncContainerNetworkPolicyListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SyncContainerNetworkPolicyListRequest',
            $asyncRequest = true);
    }

    /**
     * 同步多云集群的接入状态
     *
     * 同步多云集群的接入状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncMultiCloudClusterStatusAsync($request)
    {
        return $this->syncMultiCloudClusterStatusAsyncWithHttpInfo($request);
    }
    
    public function syncMultiCloudClusterStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/clusters/status-synchronize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SyncMultiCloudClusterStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SyncMultiCloudClusterStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 同步集群下安全组策略最新数据
     *
     * 同步集群下安全组策略最新数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncSecurityGroupPoliciesAsync($request)
    {
        return $this->syncSecurityGroupPoliciesAsyncWithHttpInfo($request);
    }
    
    public function syncSecurityGroupPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/security-group-policy-sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SyncSecurityGroupPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SyncSecurityGroupPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 更新集群daemonset
     *
     * 更新集群daemonset
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAgentDaemonsetAsync($request)
    {
        return $this->updateAgentDaemonsetAsyncWithHttpInfo($request);
    }
    
    public function updateAgentDaemonsetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/clusters/{cluster_id}/daemonsets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateAgentDaemonsetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateAgentDaemonsetRequest',
            $asyncRequest = true);
    }

    /**
     * 修改存储库绑定的备份策略
     *
     * 修改存储库绑定的备份策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBackupPolicyInfoAsync($request)
    {
        return $this->updateBackupPolicyInfoAsyncWithHttpInfo($request);
    }
    
    public function updateBackupPolicyInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/backup/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 容器集群网络更新配置策略
     *
     * 容器集群网络更新配置策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateContainerNetworkPolicyAsync($request)
    {
        return $this->updateContainerNetworkPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateContainerNetworkPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateContainerNetworkPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateContainerNetworkPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 更新多云集群
     *
     * 更新多云集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMultiCloudClustersAsync($request)
    {
        return $this->updateMultiCloudClustersAsyncWithHttpInfo($request);
    }
    
    public function updateMultiCloudClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/kubernetes/multi-cloud/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateMultiCloudClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateMultiCloudClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 修改防护策略
     *
     * 修改防护策略：修改防护策略内容，包含策略名称、相关规则开启状态、防护动作以及检测规则配置，同时给使用该策略的服务器下发新的策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePolicyAsync($request)
    {
        return $this->updatePolicyAsyncWithHttpInfo($request);
    }
    
    public function updatePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/rasp/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdatePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdatePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改勒索防护策略
     *
     * 修改勒索防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProtectionPolicyAsync($request)
    {
        return $this->updateProtectionPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateProtectionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/ransomware/protection/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateProtectionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateProtectionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 更新安全组策略
     *
     * 更新安全组策略(云原生网络模型)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityGroupPolicyAsync($request)
    {
        return $this->updateSecurityGroupPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityGroupPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container-network/{cluster_id}/{namespace}/security-group-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateSecurityGroupPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateSecurityGroupPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改系统用户白名单
     *
     * 修改系统用户白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSystemUserWhiteListAsync($request)
    {
        return $this->updateSystemUserWhiteListAsyncWithHttpInfo($request);
    }
    
    public function updateSystemUserWhiteListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/event/white-list/userlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateSystemUserWhiteListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateSystemUserWhiteListRequest',
            $asyncRequest = true);
    }

    /**
     * 修改“病毒查杀按次计费”开关状态
     *
     * 修改“病毒查杀按次计费”开关状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAntivirusPayPerScanStatusAsync($request)
    {
        return $this->changeAntivirusPayPerScanStatusAsyncWithHttpInfo($request);
    }
    
    public function changeAntivirusPayPerScanStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/pay-per-scan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAntivirusPayPerScanStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAntivirusPayPerScanStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 创建付费病毒扫描任务
     *
     * 创建付费病毒扫描任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAntiVirusPaidTaskAsync($request)
    {
        return $this->createAntiVirusPaidTaskAsyncWithHttpInfo($request);
    }
    
    public function createAntiVirusPaidTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/pay-per-scan/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams['region'] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAntiVirusPaidTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAntiVirusPaidTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询付费病毒查杀服务器列表
     *
     * 查询付费病毒查杀服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAntiVirusPaidHostsAsync($request)
    {
        return $this->listAntiVirusPaidHostsAsyncWithHttpInfo($request);
    }
    
    public function listAntiVirusPaidHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/pay-per-scan/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['scanType'] !== null) {
            $queryParams['scan_type'] = $localVarParams['scanType'];
        }
        if ($localVarParams['startType'] !== null) {
            $queryParams['start_type'] = $localVarParams['startType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusPaidHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAntiVirusPaidHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询病毒查杀免费扫描次数
     *
     * 查询病毒查杀免费扫描次数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAntivirusFreeQuotaAsync($request)
    {
        return $this->showAntivirusFreeQuotaAsyncWithHttpInfo($request);
    }
    
    public function showAntivirusFreeQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/antivirus/pay-per-scan/free-quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAntivirusFreeQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAntivirusFreeQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 白名单策略添加主机
     *
     * 白名单策略添加主机
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAppWhitelistPolicyHostAsync($request)
    {
        return $this->addAppWhitelistPolicyHostAsyncWithHttpInfo($request);
    }
    
    public function addAppWhitelistPolicyHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/host';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddAppWhitelistPolicyHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddAppWhitelistPolicyHostRequest',
            $asyncRequest = true);
    }

    /**
     * 新增进程白名单策略进程
     *
     * 新增进程白名单策略进程
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAppWhitelistPolicyProcessAsync($request)
    {
        return $this->addAppWhitelistPolicyProcessAsyncWithHttpInfo($request);
    }
    
    public function addAppWhitelistPolicyProcessAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/process';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddAppWhitelistPolicyProcessResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddAppWhitelistPolicyProcessRequest',
            $asyncRequest = true);
    }

    /**
     * 修改白名单策略
     *
     * 修改白名单策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAppWhitelistPolicyAsync($request)
    {
        return $this->changeAppWhitelistPolicyAsyncWithHttpInfo($request);
    }
    
    public function changeAppWhitelistPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAppWhitelistPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAppWhitelistPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 标记进程白名单策略识别进程
     *
     * 标记进程白名单策略识别进程
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAppWhitelistPolicyProcessStatusAsync($request)
    {
        return $this->changeAppWhitelistPolicyProcessStatusAsyncWithHttpInfo($request);
    }
    
    public function changeAppWhitelistPolicyProcessStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/process';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAppWhitelistPolicyProcessStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeAppWhitelistPolicyProcessStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 创建白名单策略
     *
     * 创建白名单策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppWhitelistPolicyAsync($request)
    {
        return $this->createAppWhitelistPolicyAsyncWithHttpInfo($request);
    }
    
    public function createAppWhitelistPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAppWhitelistPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateAppWhitelistPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除白名单策略
     *
     * 删除白名单策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppWhitelistPolicyAsync($request)
    {
        return $this->deleteAppWhitelistPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteAppWhitelistPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAppWhitelistPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAppWhitelistPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 白名单策略删除主机
     *
     * 白名单策略删除主机
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppWhitelistPolicyHostAsync($request)
    {
        return $this->deleteAppWhitelistPolicyHostAsyncWithHttpInfo($request);
    }
    
    public function deleteAppWhitelistPolicyHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/host';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAppWhitelistPolicyHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteAppWhitelistPolicyHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单可疑进程
     *
     * 查询进程白名单可疑进程
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppWhitelistEventAsync($request)
    {
        return $this->listAppWhitelistEventAsyncWithHttpInfo($request);
    }
    
    public function listAppWhitelistEventAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/event';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistEventResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistEventRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单可选服务器列表
     *
     * 查询进程白名单可选服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppWhitelistHostStatusAsync($request)
    {
        return $this->listAppWhitelistHostStatusAsyncWithHttpInfo($request);
    }
    
    public function listAppWhitelistHostStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/host-management/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistHostStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistHostStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单策略列表
     *
     * 查询进程白名单策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppWhitelistPolicyAsync($request)
    {
        return $this->listAppWhitelistPolicyAsyncWithHttpInfo($request);
    }
    
    public function listAppWhitelistPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['policyType'] !== null) {
            $queryParams['policy_type'] = $localVarParams['policyType'];
        }
        if ($localVarParams['learningStatus'] !== null) {
            $queryParams['learning_status'] = $localVarParams['learningStatus'];
        }
        if ($localVarParams['intercept'] !== null) {
            $queryParams['intercept'] = $localVarParams['intercept'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单策略关联主机列表
     *
     * 查询进程白名单策略关联主机列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppWhitelistPolicyHostAsync($request)
    {
        return $this->listAppWhitelistPolicyHostAsyncWithHttpInfo($request);
    }
    
    public function listAppWhitelistPolicyHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/host';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['learningStatus'] !== null) {
            $queryParams['learning_status'] = $localVarParams['learningStatus'];
        }
        if ($localVarParams['applyStatus'] !== null) {
            $queryParams['apply_status'] = $localVarParams['applyStatus'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单策略识别进程
     *
     * 查询进程白名单策略识别进程
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppWhitelistPolicyProcessAsync($request)
    {
        return $this->listAppWhitelistPolicyProcessAsyncWithHttpInfo($request);
    }
    
    public function listAppWhitelistPolicyProcessAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/process';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['processStatus'] !== null) {
            $queryParams['process_status'] = $localVarParams['processStatus'];
        }
        if ($localVarParams['processType'] !== null) {
            $queryParams['process_type'] = $localVarParams['processType'];
        }
        if ($localVarParams['processName'] !== null) {
            $queryParams['process_name'] = $localVarParams['processName'];
        }
        if ($localVarParams['processHash'] !== null) {
            $queryParams['process_hash'] = $localVarParams['processHash'];
        }
        if ($localVarParams['processPath'] !== null) {
            $queryParams['process_path'] = $localVarParams['processPath'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['fileSigner'] !== null) {
            $queryParams['file_signer'] = $localVarParams['fileSigner'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyProcessResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyProcessRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单策略进程扩展列表
     *
     * 查询进程白名单策略进程扩展列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppWhitelistPolicyProcessExtendAsync($request)
    {
        return $this->listAppWhitelistPolicyProcessExtendAsyncWithHttpInfo($request);
    }
    
    public function listAppWhitelistPolicyProcessExtendAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/process-extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyProcessExtendResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppWhitelistPolicyProcessExtendRequest',
            $asyncRequest = true);
    }

    /**
     * 统计agent版本不匹配主机数量
     *
     * 统计agent版本不匹配主机数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppWhitelistAgentStaticsAsync($request)
    {
        return $this->showAppWhitelistAgentStaticsAsyncWithHttpInfo($request);
    }
    
    public function showAppWhitelistAgentStaticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/agent/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAppWhitelistAgentStaticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAppWhitelistAgentStaticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询进程白名单策略详情
     *
     * 查询进程白名单策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppWhitelistPolicyAsync($request)
    {
        return $this->showAppWhitelistPolicyAsyncWithHttpInfo($request);
    }
    
    public function showAppWhitelistPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAppWhitelistPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAppWhitelistPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 应用白名单策略
     *
     * 应用白名单策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchAppWhitelistPolicyHostAsync($request)
    {
        return $this->switchAppWhitelistPolicyHostAsyncWithHttpInfo($request);
    }
    
    public function switchAppWhitelistPolicyHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/host';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchAppWhitelistPolicyHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchAppWhitelistPolicyHostRequest',
            $asyncRequest = true);
    }

    /**
     * 操作白名单策略学习状态
     *
     * 操作白名单策略学习状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchAppWhitelistPolicyLearnStatusAsync($request)
    {
        return $this->switchAppWhitelistPolicyLearnStatusAsyncWithHttpInfo($request);
    }
    
    public function switchAppWhitelistPolicyLearnStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/app/{policy_id}/learn';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchAppWhitelistPolicyLearnStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchAppWhitelistPolicyLearnStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询基线检查执行操作时影响的范围
     *
     * 查询基线检查执行操作时影响的范围
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHandleAffectBaselineAsync($request)
    {
        return $this->listHandleAffectBaselineAsyncWithHttpInfo($request);
    }
    
    public function listHandleAffectBaselineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/check-rule/handle-affect-baseline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHandleAffectBaselineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHandleAffectBaselineRequest',
            $asyncRequest = true);
    }

    /**
     * 复制配置检测策略信息
     *
     * 复制配置检测策略信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyBaselinePolicyGroupAsync($request)
    {
        return $this->copyBaselinePolicyGroupAsyncWithHttpInfo($request);
    }
    
    public function copyBaselinePolicyGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/security-checks/policy-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CopyBaselinePolicyGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CopyBaselinePolicyGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询基线检测策略的基线目录信息
     *
     * 查询基线检测策略的基线目录信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBaselineDirectoryAsync($request)
    {
        return $this->showBaselineDirectoryAsyncWithHttpInfo($request);
    }
    
    public function showBaselineDirectoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/baseline/security-checks/directory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['supportOs'] !== null) {
            $queryParams['support_os'] = $localVarParams['supportOs'];
        }
        if ($localVarParams['selectType'] !== null) {
            $queryParams['select_type'] = $localVarParams['selectType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群风险影响的集群资源列表
     *
     * 查询集群风险影响的集群资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterRiskAffectResourcesAsync($request)
    {
        return $this->listClusterRiskAffectResourcesAsyncWithHttpInfo($request);
    }
    
    public function listClusterRiskAffectResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/cluster/risk/{risk_id}/affected-resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['riskId'] !== null) {
            $pathParams['risk_id'] = $localVarParams['riskId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterRiskAffectResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterRiskAffectResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群风险列表
     *
     * 查询集群风险列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterRisksAsync($request)
    {
        return $this->listClusterRisksAsyncWithHttpInfo($request);
    }
    
    public function listClusterRisksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/cluster/risks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['riskType'] !== null) {
            $queryParams['risk_type'] = $localVarParams['riskType'];
        }
        if ($localVarParams['riskStatus'] !== null) {
            $queryParams['risk_status'] = $localVarParams['riskStatus'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['riskName'] !== null) {
            $queryParams['risk_name'] = $localVarParams['riskName'];
        }
        if ($localVarParams['riskLevel'] !== null) {
            $queryParams['risk_level'] = $localVarParams['riskLevel'];
        }
        if ($localVarParams['riskCategory'] !== null) {
            $queryParams['risk_category'] = $localVarParams['riskCategory'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterRisksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListClusterRisksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群扫描统计数据
     *
     * 查询集群扫描统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterScanStatisticsAsync($request)
    {
        return $this->showClusterScanStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showClusterScanStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/cluster/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowClusterScanStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowClusterScanStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量上传文件
     *
     * 批量上传文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUploadFilesAsync($request)
    {
        return $this->batchUploadFilesAsyncWithHttpInfo($request);
    }
    
    public function batchUploadFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/common/files/batch-upload';
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目配置
     *
     * 查询项目配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectConfigsAsync($request)
    {
        return $this->listProjectConfigsAsyncWithHttpInfo($request);
    }
    
    public function listProjectConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProjectConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProjectConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改项目配置
     *
     * 修改项目配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyProjectConfigsAsync($request)
    {
        return $this->modifyProjectConfigsAsyncWithHttpInfo($request);
    }
    
    public function modifyProjectConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ModifyProjectConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ModifyProjectConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 保存用户访问记录
     *
     * 保存用户访问记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveBrowsingHistoryAsync($request)
    {
        return $this->saveBrowsingHistoryAsyncWithHttpInfo($request);
    }
    
    public function saveBrowsingHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/browsing-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SaveBrowsingHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SaveBrowsingHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 删除CI/CD配置
     *
     * 删除CI/CD配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCicdConfigurationsAsync($request)
    {
        return $this->deleteCicdConfigurationsAsyncWithHttpInfo($request);
    }
    
    public function deleteCicdConfigurationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/cicd/configurations/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteCicdConfigurationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteCicdConfigurationsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建镜像安全报告信息导出任务（支持全量/批量导出）
     *
     * 创建镜像安全报告信息导出任务（支持全量/批量导出）,支持导出恶意文件、软件信息、文件信息、敏感信息、软件合规、镜像构建指令风险。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportImageSecurityReportTaskAsync($request)
    {
        return $this->exportImageSecurityReportTaskAsyncWithHttpInfo($request);
    }
    
    public function exportImageSecurityReportTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/security-report/export-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportImageSecurityReportTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportImageSecurityReportTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步任务关联的镜像仓的信息
     *
     * 获取镜像同步任务关联的镜像仓的信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssociateRegistriesAsync($request)
    {
        return $this->listAssociateRegistriesAsyncWithHttpInfo($request);
    }
    
    public function listAssociateRegistriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/image-sync/tasks/{task_id}/registries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['registryName'] !== null) {
            $queryParams['registry_name'] = $localVarParams['registryName'];
        }
        if ($localVarParams['registryType'] !== null) {
            $queryParams['registry_type'] = $localVarParams['registryType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAssociateRegistriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAssociateRegistriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询cicd配置列表
     *
     * 查询cicd配置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCicdConfigurationsAsync($request)
    {
        return $this->listCicdConfigurationsAsyncWithHttpInfo($request);
    }
    
    public function listCicdConfigurationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/cicd/configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['cicdName'] !== null) {
            $queryParams['cicd_name'] = $localVarParams['cicdName'];
        }
        if ($localVarParams['cicdId'] !== null) {
            $queryParams['cicd_id'] = $localVarParams['cicdId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListCicdConfigurationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListCicdConfigurationsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改CI/CD配置
     *
     * 修改CI/CD配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyCicdConfigurationAsync($request)
    {
        return $this->modifyCicdConfigurationAsyncWithHttpInfo($request);
    }
    
    public function modifyCicdConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/cicd/configurations/{cicd_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['cicdId'] !== null) {
            $pathParams['cicd_id'] = $localVarParams['cicdId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ModifyCicdConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ModifyCicdConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询CI/CD配置信息
     *
     * 查询CI/CD配置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCicdConfigurationAsync($request)
    {
        return $this->showCicdConfigurationAsyncWithHttpInfo($request);
    }
    
    public function showCicdConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/image/cicd/configurations/{cicd_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['cicdId'] !== null) {
            $pathParams['cicd_id'] = $localVarParams['cicdId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCicdConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCicdConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 变更文件列表
     *
     * 变更文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFileEventsAsync($request)
    {
        return $this->listFileEventsAsyncWithHttpInfo($request);
    }
    
    public function listFileEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/files/change-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['changeType'] !== null) {
            $queryParams['change_type'] = $localVarParams['changeType'];
        }
        if ($localVarParams['changeCategory'] !== null) {
            $queryParams['change_category'] = $localVarParams['changeCategory'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListFileEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListFileEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 某个服务器变更文件信息
     *
     * 某个服务器变更文件信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFileHostEventDetailsAsync($request)
    {
        return $this->listFileHostEventDetailsAsyncWithHttpInfo($request);
    }
    
    public function listFileHostEventDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{host_id}/files/change-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['changeType'] !== null) {
            $queryParams['change_type'] = $localVarParams['changeType'];
        }
        if ($localVarParams['changeCategory'] !== null) {
            $queryParams['change_category'] = $localVarParams['changeCategory'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListFileHostEventDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListFileHostEventDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 云服务器变更列表
     *
     * 云服务器变更列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFileHostsAsync($request)
    {
        return $this->listFileHostsAsyncWithHttpInfo($request);
    }
    
    public function listFileHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/files/change-host';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListFileHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListFileHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取服务器文件统计信息
     *
     * 获取服务器文件统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFileStatisticAsync($request)
    {
        return $this->showFileStatisticAsyncWithHttpInfo($request);
    }
    
    public function showFileStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/files/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowFileStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowFileStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 获取iac文件风险路径列表
     *
     * 获取iac文件风险路径列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIacFileRiskPathsAsync($request)
    {
        return $this->listIacFileRiskPathsAsyncWithHttpInfo($request);
    }
    
    public function listIacFileRiskPathsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/iac/file/risk/paths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['fileId'] !== null) {
            $queryParams['file_id'] = $localVarParams['fileId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $queryParams['rule_id'] = $localVarParams['ruleId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListIacFileRiskPathsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListIacFileRiskPathsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取iac文件风险列表
     *
     * 获取iac文件风险列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIacFileRisksAsync($request)
    {
        return $this->listIacFileRisksAsyncWithHttpInfo($request);
    }
    
    public function listIacFileRisksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/iac/file/risks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['fileId'] !== null) {
            $queryParams['file_id'] = $localVarParams['fileId'];
        }
        if ($localVarParams['riskName'] !== null) {
            $queryParams['risk_name'] = $localVarParams['riskName'];
        }
        if ($localVarParams['riskLevel'] !== null) {
            $queryParams['risk_level'] = $localVarParams['riskLevel'];
        }
        if ($localVarParams['riskCategory'] !== null) {
            $queryParams['risk_category'] = $localVarParams['riskCategory'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListIacFileRisksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListIacFileRisksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取iac文件列表
     *
     * 获取iac文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIacFilesAsync($request)
    {
        return $this->listIacFilesAsyncWithHttpInfo($request);
    }
    
    public function listIacFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/container/iac/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['scanType'] !== null) {
            $queryParams['scan_type'] = $localVarParams['scanType'];
        }
        if ($localVarParams['fileId'] !== null) {
            $queryParams['file_id'] = $localVarParams['fileId'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['fileType'] !== null) {
            $queryParams['file_type'] = $localVarParams['fileType'];
        }
        if ($localVarParams['risky'] !== null) {
            $queryParams['risky'] = $localVarParams['risky'];
        }
        if ($localVarParams['cicdId'] !== null) {
            $queryParams['cicd_id'] = $localVarParams['cicdId'];
        }
        if ($localVarParams['cicdName'] !== null) {
            $queryParams['cicd_name'] = $localVarParams['cicdName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListIacFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListIacFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建任务
     *
     * 创建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTaskAsync($request)
    {
        return $this->createTaskAsyncWithHttpInfo($request);
    }
    
    public function createTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/common/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询当前任务关联的资源列表
     *
     * 查询当前任务关联的资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskResourcesAsync($request)
    {
        return $this->listTaskResourcesAsyncWithHttpInfo($request);
    }
    
    public function listTaskResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/common/tasks/{task_id}/resources/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务列表
     *
     * 查询任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTasksAsync($request)
    {
        return $this->listTasksAsyncWithHttpInfo($request);
    }
    
    public function listTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/common/tasks/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务统计数据
     *
     * 查询任务统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTaskStatisticsAsync($request)
    {
        return $this->showTaskStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showTaskStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/common/task-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['taskType'] !== null) {
            $queryParams['task_type'] = $localVarParams['taskType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowTaskStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowTaskStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建历史处理的漏洞导出任务
     *
     * 创建历史处理的漏洞导出任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportHandledVulnerabilitiesAsync($request)
    {
        return $this->exportHandledVulnerabilitiesAsyncWithHttpInfo($request);
    }
    
    public function exportHandledVulnerabilitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/history/export-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportHandledVulnerabilitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportHandledVulnerabilitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建漏洞处置历史记录的导出任务
     *
     * 创建漏洞处置历史记录的导出任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportVulHandleHistoryAsync($request)
    {
        return $this->exportVulHandleHistoryAsyncWithHttpInfo($request);
    }
    
    public function exportVulHandleHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/handle-history/export-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportVulHandleHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportVulHandleHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个漏洞影响的容器app信息
     *
     * 查询单个漏洞影响的容器app信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulContainerAppsAsync($request)
    {
        return $this->listVulContainerAppsAsyncWithHttpInfo($request);
    }
    
    public function listVulContainerAppsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/container/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulContainerAppsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulContainerAppsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个漏洞影响的容器信息
     *
     * 查询单个漏洞影响的容器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulContainersAsync($request)
    {
        return $this->listVulContainersAsyncWithHttpInfo($request);
    }
    
    public function listVulContainersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/containers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severityLevel'] !== null) {
            $queryParams['severity_level'] = $localVarParams['severityLevel'];
        }
        if ($localVarParams['minScanTime'] !== null) {
            $queryParams['min_scan_time'] = $localVarParams['minScanTime'];
        }
        if ($localVarParams['maxScanTime'] !== null) {
            $queryParams['max_scan_time'] = $localVarParams['maxScanTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulContainersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulContainersRequest',
            $asyncRequest = true);
    }

    /**
     * 记录用户查看漏洞任务管理页面的最后时间
     *
     * 记录用户查看漏洞任务管理页面的最后时间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function recordUserViewVulTaskAsync($request)
    {
        return $this->recordUserViewVulTaskAsyncWithHttpInfo($request);
    }
    
    public function recordUserViewVulTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/task/user/trace';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RecordUserViewVulTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RecordUserViewVulTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 获取漏洞任务的未读数量
     *
     * 获取漏洞任务的未读数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVulTaskStatisticsAsync($request)
    {
        return $this->showVulTaskStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showVulTaskStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vulnerability/task/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulTaskStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulTaskStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量开启网页防篡改防护
     *
     * 批量开启网页防篡改防护
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStartWebTamperProtectionAsync($request)
    {
        return $this->batchStartWebTamperProtectionAsyncWithHttpInfo($request);
    }
    
    public function batchStartWebTamperProtectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/protection/batch-open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchStartWebTamperProtectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchStartWebTamperProtectionRequest',
            $asyncRequest = true);
    }

    /**
     * 导出网页防篡改主机列表
     *
     * 导出网页防篡改主机列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportWebTamperHostAsync($request)
    {
        return $this->exportWebTamperHostAsyncWithHttpInfo($request);
    }
    
    public function exportWebTamperHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/host/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ExportWebTamperHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ExportWebTamperHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询网页防篡改可选服务器列表
     *
     * 查询网页防篡改可选服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWebTamperHostAsync($request)
    {
        return $this->listWebTamperHostAsyncWithHttpInfo($request);
    }
    
    public function listWebTamperHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/host-management/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['webAppName'] !== null) {
            $queryParams['web_app_name'] = $localVarParams['webAppName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebTamperHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWebTamperHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查看网页防篡改策略信息
     *
     * 查看网页防篡改策略信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWebTamperHostPolicyAsync($request)
    {
        return $this->showWebTamperHostPolicyAsyncWithHttpInfo($request);
    }
    
    public function showWebTamperHostPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/{host_id}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowWebTamperHostPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowWebTamperHostPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询动态网页防篡改的Tomcat bin目录
     *
     * 查询动态网页防篡改的Tomcat bin目录：查询动态网页防篡改功能配置的Tomcat bin目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWebTamperRaspPathAsync($request)
    {
        return $this->showWebTamperRaspPathAsyncWithHttpInfo($request);
    }
    
    public function showWebTamperRaspPathAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/wtp/{host_id}/rasp-path';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowWebTamperRaspPathResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowWebTamperRaspPathRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑网页防篡改策略信息
     *
     * 编辑网页防篡改策略信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWebTamperHostPolicyAsync($request)
    {
        return $this->updateWebTamperHostPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateWebTamperHostPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/webtamper/{host_id}/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateWebTamperHostPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateWebTamperHostPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改动态网页防篡改的Tomcat bin目录
     *
     * 修改动态网页防篡改的Tomcat bin目录：修改动态网页防篡改的Tomcat bin目录，重新下发动态网页防篡改策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWebTamperRaspPathAsync($request)
    {
        return $this->updateWebTamperRaspPathAsyncWithHttpInfo($request);
    }
    
    public function updateWebTamperRaspPathAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/wtp/{host_id}/rasp-path';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateWebTamperRaspPathResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateWebTamperRaspPathRequest',
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