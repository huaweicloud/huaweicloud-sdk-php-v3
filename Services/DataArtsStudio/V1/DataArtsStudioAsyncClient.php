<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DataArtsStudioAsyncClient extends Client
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
        return new ClientBuilder(new DataArtsStudioAsyncClient());
    }

    /**
     * 标签关联到资产
     *
     * 标签关联到资产
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTagToAssetAsync($request)
    {
        return $this->addTagToAssetAsyncWithHttpInfo($request);
    }
    
    public function addTagToAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/tags/{term_guid}/assignedentities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['termGuid'] !== null) {
            $pathParams['term_guid'] = $localVarParams['termGuid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddTagToAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddTagToAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 添加工作空间用户
     *
     * 添加工作空间用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addWorkSpaceUsersAsync($request)
    {
        return $this->addWorkSpaceUsersAsyncWithHttpInfo($request);
    }
    
    public function addWorkSpaceUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{workspace_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddWorkSpaceUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddWorkSpaceUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 资产关联分类
     *
     * 将一个分类关联到一个或多个指定guid的资产上
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateClassificationToEntityAsync($request)
    {
        return $this->associateClassificationToEntityAsyncWithHttpInfo($request);
    }
    
    public function associateClassificationToEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/guid/{guid}/classification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['guid'] !== null) {
            $pathParams['guid'] = $localVarParams['guid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AssociateClassificationToEntityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AssociateClassificationToEntityRequest',
            $asyncRequest = true);
    }

    /**
     * 资产关联密级
     *
     * 关联资产到密级，资产关联指定密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateSecurityLevelToEntitieAsync($request)
    {
        return $this->associateSecurityLevelToEntitieAsyncWithHttpInfo($request);
    }
    
    public function associateSecurityLevelToEntitieAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/guid/{guid}/security-level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['securityLevel'] !== null) {
            $queryParams['security_level'] = $localVarParams['securityLevel'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['guid'] !== null) {
            $pathParams['guid'] = $localVarParams['guid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AssociateSecurityLevelToEntitieResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AssociateSecurityLevelToEntitieRequest',
            $asyncRequest = true);
    }

    /**
     * 审核申请
     *
     * 审核申请
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchApproveApplyAsync($request)
    {
        return $this->batchApproveApplyAsyncWithHttpInfo($request);
    }
    
    public function batchApproveApplyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/applys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchApproveApplyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchApproveApplyRequest',
            $asyncRequest = true);
    }

    /**
     * 批量资产关联分类
     *
     * 批量资产关联分类：只支持对数据表的列和OBS对象添加分类
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAssociateClassificationToEntitiesAsync($request)
    {
        return $this->batchAssociateClassificationToEntitiesAsyncWithHttpInfo($request);
    }
    
    public function batchAssociateClassificationToEntitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/classification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchAssociateClassificationToEntitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchAssociateClassificationToEntitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量资产关联密级
     *
     * 批量资产关联密级：单个密级关联到多个资产上
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAssociateSecurityLevelToEntitiesAsync($request)
    {
        return $this->batchAssociateSecurityLevelToEntitiesAsyncWithHttpInfo($request);
    }
    
    public function batchAssociateSecurityLevelToEntitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/security-level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchAssociateSecurityLevelToEntitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchAssociateSecurityLevelToEntitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除规则模板
     *
     * 批量删除规则模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteTemplatesAsync($request)
    {
        return $this->batchDeleteTemplatesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/rule-templates/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量下线
     *
     * 批量下线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchOfflineAsync($request)
    {
        return $this->batchOfflineAsyncWithHttpInfo($request);
    }
    
    public function batchOfflineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/batch-offline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOfflineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOfflineRequest',
            $asyncRequest = true);
    }

    /**
     * 批量发布
     *
     * 批量发布
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchPublishAsync($request)
    {
        return $this->batchPublishAsyncWithHttpInfo($request);
    }
    
    public function batchPublishAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/batch-publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchPublishResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchPublishRequest',
            $asyncRequest = true);
    }

    /**
     * 元数据实时同步接口(邀测)
     *
     * 元数据实时同步接口，支持批量。该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSyncMetadataAsync($request)
    {
        return $this->batchSyncMetadataAsyncWithHttpInfo($request);
    }
    
    public function batchSyncMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/metadata/async-bulk';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchSyncMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchSyncMetadataRequest',
            $asyncRequest = true);
    }

    /**
     * 修改流程架构
     *
     * 修改流程架构
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeCatalogAsync($request)
    {
        return $this->changeCatalogAsyncWithHttpInfo($request);
    }
    
    public function changeCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz/catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 规格变更接口
     *
     * 规格变更接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeResourceAsync($request)
    {
        return $this->changeResourceAsyncWithHttpInfo($request);
    }
    
    public function changeResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/change-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改或删除主题层级
     *
     * 修改或删除主题层级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeSubjectsAsync($request)
    {
        return $this->changeSubjectsAsyncWithHttpInfo($request);
    }
    
    public function changeSubjectsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subject-levels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeSubjectsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeSubjectsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看逆向维度表任务
     *
     * 查看逆向维度表任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkDimensionStatusAsync($request)
    {
        return $this->checkDimensionStatusAsyncWithHttpInfo($request);
    }
    
    public function checkDimensionStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/dimension/database';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckDimensionStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckDimensionStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查看逆向事实表任务
     *
     * 查看逆向事实表任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkFactLogicTableStatusAsync($request)
    {
        return $this->checkFactLogicTableStatusAsyncWithHttpInfo($request);
    }
    
    public function checkFactLogicTableStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/fact-logic-tables/database';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckFactLogicTableStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckFactLogicTableStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 审批单处理
     *
     * 审批驳回/通过，单个或多个 action-id&#x3D;reject/resolve
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmApprovalsAsync($request)
    {
        return $this->confirmApprovalsAsyncWithHttpInfo($request);
    }
    
    public function confirmApprovalsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmApprovalsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmApprovalsRequest',
            $asyncRequest = true);
    }

    /**
     * 处理消息
     *
     * 处理消息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmMessageAsync($request)
    {
        return $this->confirmMessageAsyncWithHttpInfo($request);
    }
    
    public function confirmMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 关系建模统计信息
     *
     * 关系建模统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countAllModelsAsync($request)
    {
        return $this->countAllModelsAsyncWithHttpInfo($request);
    }
    
    public function countAllModelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/models/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountAllModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountAllModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 总览统计信息
     *
     * 总览统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countOverviewsAsync($request)
    {
        return $this->countOverviewsAsyncWithHttpInfo($request);
    }
    
    public function countOverviewsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/definitions/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountOverviewsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountOverviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 标准覆盖率统计信息
     *
     * 标准覆盖率统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countStandardsAsync($request)
    {
        return $this->countStandardsAsyncWithHttpInfo($request);
    }
    
    public function countStandardsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/definitions/statistic/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['bizType'] !== null) {
            $queryParams['biz_type'] = $localVarParams['bizType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountStandardsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountStandardsRequest',
            $asyncRequest = true);
    }

    /**
     * 模型统计信息
     *
     * 模型统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countTableModelsAsync($request)
    {
        return $this->countTableModelsAsyncWithHttpInfo($request);
    }
    
    public function countTableModelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/table-models/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['modelId'] !== null) {
            $queryParams['model_id'] = $localVarParams['modelId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountTableModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountTableModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建应用
     *
     * 创建应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppAsync($request)
    {
        return $this->createAppAsyncWithHttpInfo($request);
    }
    
    public function createAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateAppRequest',
            $asyncRequest = true);
    }

    /**
     * 创建审批人
     *
     * 创建审批人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApproverAsync($request)
    {
        return $this->createApproverAsyncWithHttpInfo($request);
    }
    
    public function createApproverAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApproverResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApproverRequest',
            $asyncRequest = true);
    }

    /**
     * 创建业务指标
     *
     * 创建业务指标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBizMetricAsync($request)
    {
        return $this->createBizMetricAsyncWithHttpInfo($request);
    }
    
    public function createBizMetricAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateBizMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateBizMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 创建流程架构
     *
     * 创建流程架构
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCatalogAsync($request)
    {
        return $this->createCatalogAsyncWithHttpInfo($request);
    }
    
    public function createCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz/catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 创建码表
     *
     * 创建码表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCodeTableAsync($request)
    {
        return $this->createCodeTableAsyncWithHttpInfo($request);
    }
    
    public function createCodeTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCodeTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCodeTableRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据连接
     *
     * 创建数据连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConnectionsAsync($request)
    {
        return $this->createConnectionsAsyncWithHttpInfo($request);
    }
    
    public function createConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建目录
     *
     * 创建目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDirectoryAsync($request)
    {
        return $this->createDirectoryAsyncWithHttpInfo($request);
    }
    
    public function createDirectoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/directorys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDirectoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDirectoryRequest',
            $asyncRequest = true);
    }

    /**
     * 创建环境变量
     *
     * 创建环境变量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFactoryEnvAsync($request)
    {
        return $this->createFactoryEnvAsyncWithHttpInfo($request);
    }
    
    public function createFactoryEnvAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/env';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryEnvResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryEnvRequest',
            $asyncRequest = true);
    }

    /**
     * 创建补数据实例的接口
     *
     * 创建一个补数据实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFactorySupplementDataInstanceAsync($request)
    {
        return $this->createFactorySupplementDataInstanceAsyncWithHttpInfo($request);
    }
    
    public function createFactorySupplementDataInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/supplement-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建工作空间
     *
     * 创建工作空间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createManagerWorkSpaceAsync($request)
    {
        return $this->createManagerWorkSpaceAsyncWithHttpInfo($request);
    }
    
    public function createManagerWorkSpaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/workspaces/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateManagerWorkSpaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateManagerWorkSpaceRequest',
            $asyncRequest = true);
    }

    /**
     * 添加或修改资产
     *
     * 添加或修改资产
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrUpdateAssetAsync($request)
    {
        return $this->createOrUpdateAssetAsyncWithHttpInfo($request);
    }
    
    public function createOrUpdateAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateOrUpdateAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateOrUpdateAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 创建服务目录
     *
     * 创建服务目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createServiceCatalogAsync($request)
    {
        return $this->createServiceCatalogAsyncWithHttpInfo($request);
    }
    
    public function createServiceCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateServiceCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateServiceCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据标准
     *
     * 创建数据标准
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStandardAsync($request)
    {
        return $this->createStandardAsyncWithHttpInfo($request);
    }
    
    public function createStandardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据标准模板
     *
     * 创建数据标准模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStandardTemplateAsync($request)
    {
        return $this->createStandardTemplateAsyncWithHttpInfo($request);
    }
    
    public function createStandardTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建主题
     *
     * 创建主题
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubjectAsync($request)
    {
        return $this->createSubjectAsyncWithHttpInfo($request);
    }
    
    public function createSubjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectRequest',
            $asyncRequest = true);
    }

    /**
     * 创建主题(新)
     *
     * 创建主题(新)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubjectNewAsync($request)
    {
        return $this->createSubjectNewAsyncWithHttpInfo($request);
    }
    
    public function createSubjectNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectNewRequest',
            $asyncRequest = true);
    }

    /**
     * 创建模型实体
     *
     * 创建一个模型实体，包括逻辑实体或物理数据表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTableModelAsync($request)
    {
        return $this->createTableModelAsyncWithHttpInfo($request);
    }
    
    public function createTableModelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/table-model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTableModelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTableModelRequest',
            $asyncRequest = true);
    }

    /**
     * 创建采集任务
     *
     * 创建采集任务
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
        $resourcePath = '/v3/{project_id}/metadata/tasks/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建规则模板
     *
     * 创建规则模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTemplateAsync($request)
    {
        return $this->createTemplateAsyncWithHttpInfo($request);
    }
    
    public function createTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/rule-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 新建模型工作区
     *
     * 新建模型工作区
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkspaceAsync($request)
    {
        return $this->createWorkspaceAsyncWithHttpInfo($request);
    }
    
    public function createWorkspaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateWorkspaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateWorkspaceRequest',
            $asyncRequest = true);
    }

    /**
     * 测试创建数据连接
     *
     * 测试创建数据连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function debugDataconnectionAsync($request)
    {
        return $this->debugDataconnectionAsyncWithHttpInfo($request);
    }
    
    public function debugDataconnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-connections/validation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugDataconnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugDataconnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用
     *
     * 删除应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppAsync($request)
    {
        return $this->deleteAppAsyncWithHttpInfo($request);
    }
    
    public function deleteAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteAppRequest',
            $asyncRequest = true);
    }

    /**
     * 删除审批人
     *
     * 删除审批人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApproverAsync($request)
    {
        return $this->deleteApproverAsyncWithHttpInfo($request);
    }
    
    public function deleteApproverAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['approverIds'] !== null) {
            $queryParams['approver_ids'] = $localVarParams['approverIds'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteApproverResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteApproverRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资产
     *
     * 删除资产
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAssetAsync($request)
    {
        return $this->deleteAssetAsyncWithHttpInfo($request);
    }
    
    public function deleteAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['guid'] !== null) {
            $pathParams['guid'] = $localVarParams['guid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除业务指标
     *
     * 删除业务指标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBizMetricAsync($request)
    {
        return $this->deleteBizMetricAsyncWithHttpInfo($request);
    }
    
    public function deleteBizMetricAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteBizMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteBizMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 删除流程架构
     *
     * 删除流程架构
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCatalogAsync($request)
    {
        return $this->deleteCatalogAsyncWithHttpInfo($request);
    }
    
    public function deleteCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz/catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 移除资产关联的分类
     *
     * 移除资产关联分类：
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClassificationFromEntitiesAsync($request)
    {
        return $this->deleteClassificationFromEntitiesAsyncWithHttpInfo($request);
    }
    
    public function deleteClassificationFromEntitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/guid/{guid}/classification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['guid'] !== null) {
            $pathParams['guid'] = $localVarParams['guid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteClassificationFromEntitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteClassificationFromEntitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除码表
     *
     * 删除码表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCodeTableAsync($request)
    {
        return $this->deleteCodeTableAsyncWithHttpInfo($request);
    }
    
    public function deleteCodeTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteCodeTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteCodeTableRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据连接
     *
     * 删除数据连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDataconnectionAsync($request)
    {
        return $this->deleteDataconnectionAsyncWithHttpInfo($request);
    }
    
    public function deleteDataconnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-connections/{data_connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dataConnectionId'] !== null) {
            $pathParams['data_connection_id'] = $localVarParams['dataConnectionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDataconnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDataconnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除目录
     *
     * 删除目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDirectoryAsync($request)
    {
        return $this->deleteDirectoryAsyncWithHttpInfo($request);
    }
    
    public function deleteDirectoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/directorys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDirectoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDirectoryRequest',
            $asyncRequest = true);
    }

    /**
     * 移除资产关联密级
     *
     * 移除资产关联密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityLevelFromEntityAsync($request)
    {
        return $this->deleteSecurityLevelFromEntityAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityLevelFromEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/guid/{guid}/security-level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['guid'] !== null) {
            $pathParams['guid'] = $localVarParams['guid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityLevelFromEntityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityLevelFromEntityRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除目录
     *
     * 批量删除目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServiceCatalogAsync($request)
    {
        return $this->deleteServiceCatalogAsyncWithHttpInfo($request);
    }
    
    public function deleteServiceCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteServiceCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteServiceCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据标准
     *
     * 删除数据标准
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStandardAsync($request)
    {
        return $this->deleteStandardAsyncWithHttpInfo($request);
    }
    
    public function deleteStandardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteStandardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteStandardRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据标准模板
     *
     * 删除数据标准模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStandardTemplateAsync($request)
    {
        return $this->deleteStandardTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteStandardTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主题
     *
     * 删除主题
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubjectAsync($request)
    {
        return $this->deleteSubjectAsyncWithHttpInfo($request);
    }
    
    public function deleteSubjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSubjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSubjectRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主题(新)
     *
     * 删除主题(新)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubjectNewAsync($request)
    {
        return $this->deleteSubjectNewAsyncWithHttpInfo($request);
    }
    
    public function deleteSubjectNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSubjectNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSubjectNewRequest',
            $asyncRequest = true);
    }

    /**
     * 删除模型实体
     *
     * 删除一个模型实体，包括逻辑实体或物理数据表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTableModelAsync($request)
    {
        return $this->deleteTableModelAsyncWithHttpInfo($request);
    }
    
    public function deleteTableModelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/table-model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteTableModelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteTableModelRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个采集任务
     *
     * 删除单个采集任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTaskInfoAsync($request)
    {
        return $this->deleteTaskInfoAsyncWithHttpInfo($request);
    }
    
    public function deleteTaskInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/metadata/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteTaskInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteTaskInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 删除模型工作区
     *
     * 删除模型工作区
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkspacesAsync($request)
    {
        return $this->deleteWorkspacesAsyncWithHttpInfo($request);
    }
    
    public function deleteWorkspacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteWorkspacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteWorkspacesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除工作空间用户
     *
     * 删除工作空间用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkspaceusersAsync($request)
    {
        return $this->deleteWorkspaceusersAsyncWithHttpInfo($request);
    }
    
    public function deleteWorkspaceusersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{workspace_id}/delete-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteWorkspaceusersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteWorkspaceusersRequest',
            $asyncRequest = true);
    }

    /**
     * 启动、调度、停止采集任务
     *
     * 启动、调度、停止采集任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeTaskActionAsync($request)
    {
        return $this->executeTaskActionAsyncWithHttpInfo($request);
    }
    
    public function executeTaskActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/metadata/tasks/{task_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteTaskActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteTaskActionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询导入结果
     *
     * 查询导入excel的处理结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importResultAsync($request)
    {
        return $this->importResultAsyncWithHttpInfo($request);
    }
    
    public function importResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/catelogs/process-import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['uuid'] !== null) {
            $queryParams['uuid'] = $localVarParams['uuid'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportResultRequest',
            $asyncRequest = true);
    }

    /**
     * 初始化数据标准模板
     *
     * 初始化模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function initializeStandardTemplateAsync($request)
    {
        return $this->initializeStandardTemplateAsyncWithHttpInfo($request);
    }
    
    public function initializeStandardTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/templates/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InitializeStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InitializeStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查找汇总表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找汇总表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAggregationLogicTablesAsync($request)
    {
        return $this->listAggregationLogicTablesAsyncWithHttpInfo($request);
    }
    
    public function listAggregationLogicTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/aggregation-logic-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['syncKey'] !== null) {
            $queryParams['sync_key'] = $localVarParams['syncKey'];
        }
        if ($localVarParams['l3Id'] !== null) {
            $queryParams['l3_id'] = $localVarParams['l3Id'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['bizCatalogId'] !== null) {
            $queryParams['biz_catalog_id'] = $localVarParams['bizCatalogId'];
        }
        if ($localVarParams['autoGenerate'] !== null) {
            $queryParams['auto_generate'] = $localVarParams['autoGenerate'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAggregationLogicTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAggregationLogicTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前目录下的所有类型列表
     *
     * 获取当前目录下的所有类型列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllCatalogListAsync($request)
    {
        return $this->listAllCatalogListAsyncWithHttpInfo($request);
    }
    
    public function listAllCatalogListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllCatalogListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllCatalogListRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数据标准
     *
     * 获取数据标准
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllStandardsAsync($request)
    {
        return $this->listAllStandardsAsyncWithHttpInfo($request);
    }
    
    public function listAllStandardsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['directoryId'] !== null) {
            $queryParams['directory_id'] = $localVarParams['directoryId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllStandardsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllStandardsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前目录下的api列表
     *
     * 获取当前目录下的api列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiCatalogListAsync($request)
    {
        return $this->listApiCatalogListAsyncWithHttpInfo($request);
    }
    
    public function listApiCatalogListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}/apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApiCatalogListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApiCatalogListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定api 应用调用topN
     *
     * 查询指定api 应用调用topN
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiTopNAsync($request)
    {
        return $this->listApiTopNAsyncWithHttpInfo($request);
    }
    
    public function listApiTopNAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apis-top-n/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['topNum'] !== null) {
            $queryParams['top_num'] = $localVarParams['topNum'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApiTopNResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApiTopNRequest',
            $asyncRequest = true);
    }

    /**
     * 获取网关分组
     *
     * 获取网关分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApicGroupsAsync($request)
    {
        return $this->listApicGroupsAsyncWithHttpInfo($request);
    }
    
    public function listApicGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apigw/instances/{apig_instance_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['apigType'] !== null) {
            $queryParams['apig_type'] = $localVarParams['apigType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apigInstanceId'] !== null) {
            $pathParams['apig_instance_id'] = $localVarParams['apigInstanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApicGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApicGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取网关实例
     *
     * 获取网关实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApicInstancesAsync($request)
    {
        return $this->listApicInstancesAsyncWithHttpInfo($request);
    }
    
    public function listApicInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apigw/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['apigType'] !== null) {
            $queryParams['apig_type'] = $localVarParams['apigType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApicInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApicInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询api 服务调用topN
     *
     * 查询api 服务调用topN
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisTopAsync($request)
    {
        return $this->listApisTopAsyncWithHttpInfo($request);
    }
    
    public function listApisTopAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apis-top-n';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['topNum'] !== null) {
            $queryParams['top_num'] = $localVarParams['topNum'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisTopResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisTopRequest',
            $asyncRequest = true);
    }

    /**
     * 查询申请列表
     *
     * 查询申请列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplyAsync($request)
    {
        return $this->listApplyAsyncWithHttpInfo($request);
    }
    
    public function listApplyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/applys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['queryType'] !== null) {
            $queryParams['query_type'] = $localVarParams['queryType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApplyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApplyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询审批人列表
     *
     * 查询审批人列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApproversAsync($request)
    {
        return $this->listApproversAsyncWithHttpInfo($request);
    }
    
    public function listApproversAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['approverName'] !== null) {
            $queryParams['approver_name'] = $localVarParams['approverName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApproversResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApproversRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用列表
     *
     * 查询应用列表
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
        $resourcePath = '/v1/{project_id}/service/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAppsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAppsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询app 服务使用topN
     *
     * 查询app 服务使用topN
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppsTopAsync($request)
    {
        return $this->listAppsTopAsyncWithHttpInfo($request);
    }
    
    public function listAppsTopAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apps-top-n';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['topNum'] !== null) {
            $queryParams['top_num'] = $localVarParams['topNum'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAppsTopResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAppsTopRequest',
            $asyncRequest = true);
    }

    /**
     * 查看指标维度信息
     *
     * 查看指标维度信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBizMetricDimensionsAsync($request)
    {
        return $this->listBizMetricDimensionsAsyncWithHttpInfo($request);
    }
    
    public function listBizMetricDimensionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics/dimensions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricDimensionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricDimensionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看指标指标责任人信息
     *
     * 查看指标指标责任人信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBizMetricOwnersAsync($request)
    {
        return $this->listBizMetricOwnersAsyncWithHttpInfo($request);
    }
    
    public function listBizMetricOwnersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics/owners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricOwnersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricOwnersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询业务指标信息
     *
     * 通过名称、创建者、修改时间分页查找业务指标信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBizMetricsAsync($request)
    {
        return $this->listBizMetricsAsyncWithHttpInfo($request);
    }
    
    public function listBizMetricsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['syncKey'] !== null) {
            $queryParams['sync_key'] = $localVarParams['syncKey'];
        }
        if ($localVarParams['bizCatalogId'] !== null) {
            $queryParams['biz_catalog_id'] = $localVarParams['bizCatalogId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取主题树信息
     *
     * 获取数据资产主题树信息l1，l2，l3
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBusinessAsync($request)
    {
        return $this->listBusinessAsyncWithHttpInfo($request);
    }
    
    public function listBusinessAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subjects/business';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBusinessResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBusinessRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前目录下的目录列表（全量）
     *
     * 获取当前目录下的目录列表（全量）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCatalogListAsync($request)
    {
        return $this->listCatalogListAsyncWithHttpInfo($request);
    }
    
    public function listCatalogListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}/catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogListRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有流程架构目录树
     *
     * 获取所有目录树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCatalogTreeAsync($request)
    {
        return $this->listCatalogTreeAsyncWithHttpInfo($request);
    }
    
    public function listCatalogTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz/catalogs/tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取作业目录
     *
     * 获取作业目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCategoryAsync($request)
    {
        return $this->listCategoryAsyncWithHttpInfo($request);
    }
    
    public function listCategoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams['accept'] = $localVarParams['accept'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCategoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCategoryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数据源中表的字段
     *
     * 获取数据源中表的字段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listColumnsAsync($request)
    {
        return $this->listColumnsAsyncWithHttpInfo($request);
    }
    
    public function listColumnsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{connection_id}/datatables/{table_id}/columns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }
        if ($localVarParams['tableId'] !== null) {
            $pathParams['table_id'] = $localVarParams['tableId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListColumnsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListColumnsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找复合指标
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间、l3Id分页查找复合指标信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCompoundMetricsAsync($request)
    {
        return $this->listCompoundMetricsAsyncWithHttpInfo($request);
    }
    
    public function listCompoundMetricsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/compound-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['dimensionGroup'] !== null) {
            $queryParams['dimension_group'] = $localVarParams['dimensionGroup'];
        }
        if ($localVarParams['atomicIndexId'] !== null) {
            $queryParams['atomic_index_id'] = $localVarParams['atomicIndexId'];
        }
        if ($localVarParams['l3Id'] !== null) {
            $queryParams['l3_id'] = $localVarParams['l3Id'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCompoundMetricsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCompoundMetricsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找业务限定
     *
     * 通过中英文名称、描述、创建者、审核人、限定分组id、修改时间状态分页查找限定信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConditionAsync($request)
    {
        return $this->listConditionAsyncWithHttpInfo($request);
    }
    
    public function listConditionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/conditions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListConditionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListConditionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取对账作业列表
     *
     * 获取对账作业列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConsistencyTaskAsync($request)
    {
        return $this->listConsistencyTaskAsyncWithHttpInfo($request);
    }
    
    public function listConsistencyTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/consistency-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['categoryId'] !== null) {
            $queryParams['category_id'] = $localVarParams['categoryId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['scheduleStatus'] !== null) {
            $queryParams['schedule_status'] = $localVarParams['scheduleStatus'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListConsistencyTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListConsistencyTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 获取实例列表
     *
     * 获取实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataArtsStudioInstancesAsync($request)
    {
        return $this->listDataArtsStudioInstancesAsyncWithHttpInfo($request);
    }
    
    public function listDataArtsStudioInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataArtsStudioInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataArtsStudioInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数据源中的表
     *
     * 获取数据源中的表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataTablesAsync($request)
    {
        return $this->listDataTablesAsyncWithHttpInfo($request);
    }
    
    public function listDataTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{connection_id}/datatables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数据库列表
     *
     * 获取数据库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDatabasesAsync($request)
    {
        return $this->listDatabasesAsyncWithHttpInfo($request);
    }
    
    public function listDatabasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{connection_id}/databases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDatabasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDatabasesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据连接列表
     *
     * 查询数据连接列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataconnectionsAsync($request)
    {
        return $this->listDataconnectionsAsyncWithHttpInfo($request);
    }
    
    public function listDataconnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataconnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataconnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找衍生指标
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间、l3Id分页查找衍生指标信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDerivativeIndexesAsync($request)
    {
        return $this->listDerivativeIndexesAsyncWithHttpInfo($request);
    }
    
    public function listDerivativeIndexesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/derivative-indexs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['dimensionId'] !== null) {
            $queryParams['dimension_id'] = $localVarParams['dimensionId'];
        }
        if ($localVarParams['dimensionGroup'] !== null) {
            $queryParams['dimension_group'] = $localVarParams['dimensionGroup'];
        }
        if ($localVarParams['atomicIndexId'] !== null) {
            $queryParams['atomic_index_id'] = $localVarParams['atomicIndexId'];
        }
        if ($localVarParams['allMetrics'] !== null) {
            $queryParams['all_metrics'] = $localVarParams['allMetrics'];
        }
        if ($localVarParams['dwType'] !== null) {
            $queryParams['dw_type'] = $localVarParams['dwType'];
        }
        if ($localVarParams['l3Id'] !== null) {
            $queryParams['l3_id'] = $localVarParams['l3Id'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDerivativeIndexesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDerivativeIndexesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看维度颗粒度
     *
     * 查询维度颗粒度, 依据tableId查询涉及所有维度，不传tableId查询所有维度组颗粒度
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDimensionGroupsAsync($request)
    {
        return $this->listDimensionGroupsAsyncWithHttpInfo($request);
    }
    
    public function listDimensionGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/dimension/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tableId'] !== null) {
            $queryParams['table_id'] = $localVarParams['tableId'];
        }
        if ($localVarParams['bizType'] !== null) {
            $queryParams['biz_type'] = $localVarParams['bizType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找维度表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找维度表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDimensionLogicTablesAsync($request)
    {
        return $this->listDimensionLogicTablesAsyncWithHttpInfo($request);
    }
    
    public function listDimensionLogicTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/dimension-logic-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['syncKey'] !== null) {
            $queryParams['sync_key'] = $localVarParams['syncKey'];
        }
        if ($localVarParams['l2Id'] !== null) {
            $queryParams['l2_id'] = $localVarParams['l2Id'];
        }
        if ($localVarParams['dimensionId'] !== null) {
            $queryParams['dimension_id'] = $localVarParams['dimensionId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['bizCatalogId'] !== null) {
            $queryParams['biz_catalog_id'] = $localVarParams['bizCatalogId'];
        }
        if ($localVarParams['dimensionType'] !== null) {
            $queryParams['dimension_type'] = $localVarParams['dimensionType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionLogicTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionLogicTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 查找维度
     *
     * 通过中英文名称、描述、创建者、审核人、状态、l3Id、派生指标idList、修改时间分页查找维度信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDimensionsAsync($request)
    {
        return $this->listDimensionsAsyncWithHttpInfo($request);
    }
    
    public function listDimensionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/dimensions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['l2Id'] !== null) {
            $queryParams['l2_id'] = $localVarParams['l2Id'];
        }
        if ($localVarParams['derivativeIds'] !== null) {
            $queryParams['derivative_ids'] = $localVarParams['derivativeIds'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['factLogicId'] !== null) {
            $queryParams['fact_logic_id'] = $localVarParams['factLogicId'];
        }
        if ($localVarParams['dimensionType'] !== null) {
            $queryParams['dimension_type'] = $localVarParams['dimensionType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['bizCatalogId'] !== null) {
            $queryParams['biz_catalog_id'] = $localVarParams['bizCatalogId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有目录
     *
     * 获取所有目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDirectoriesAsync($request)
    {
        return $this->listDirectoriesAsyncWithHttpInfo($request);
    }
    
    public function listDirectoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/directorys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDirectoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDirectoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查找事实表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找事实表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactLogicTablesAsync($request)
    {
        return $this->listFactLogicTablesAsyncWithHttpInfo($request);
    }
    
    public function listFactLogicTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/fact-logic-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['syncKey'] !== null) {
            $queryParams['sync_key'] = $localVarParams['syncKey'];
        }
        if ($localVarParams['l3Id'] !== null) {
            $queryParams['l3_id'] = $localVarParams['l3Id'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['bizCatalogId'] !== null) {
            $queryParams['biz_catalog_id'] = $localVarParams['bizCatalogId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactLogicTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactLogicTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务执行结果列表
     *
     * 获取任务执行结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstancesAsync($request)
    {
        return $this->listInstancesAsyncWithHttpInfo($request);
    }
    
    public function listInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskType'] !== null) {
            $queryParams['task_type'] = $localVarParams['taskType'];
        }
        if ($localVarParams['runStatus'] !== null) {
            $queryParams['run_status'] = $localVarParams['runStatus'];
        }
        if ($localVarParams['notifyStatus'] !== null) {
            $queryParams['notify_status'] = $localVarParams['notifyStatus'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取工作空间列表
     *
     * 获取工作空间列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagerWorkSpacesAsync($request)
    {
        return $this->listManagerWorkSpacesAsyncWithHttpInfo($request);
    }
    
    public function listManagerWorkSpacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/workspaces/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListManagerWorkSpacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListManagerWorkSpacesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询消息列表
     *
     * 查询消息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMessageAsync($request)
    {
        return $this->listMessageAsyncWithHttpInfo($request);
    }
    
    public function listMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['apiName'] !== null) {
            $queryParams['api_name'] = $localVarParams['apiName'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指标关联信息
     *
     * 获取当前指标图谱
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetricRelationsAsync($request)
    {
        return $this->listMetricRelationsAsyncWithHttpInfo($request);
    }
    
    public function listMetricRelationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/metric-relations/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['bizType'] !== null) {
            $queryParams['biz_type'] = $localVarParams['bizType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListMetricRelationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListMetricRelationsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取质量作业列表
     *
     * 获取质量作业列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQualityTaskAsync($request)
    {
        return $this->listQualityTaskAsyncWithHttpInfo($request);
    }
    
    public function listQualityTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/quality-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['categoryId'] !== null) {
            $queryParams['category_id'] = $localVarParams['categoryId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['scheduleStatus'] !== null) {
            $queryParams['schedule_status'] = $localVarParams['scheduleStatus'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 获取质量作业列表V1
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQualityTaskListsAsync($request)
    {
        return $this->listQualityTaskListsAsyncWithHttpInfo($request);
    }
    
    public function listQualityTaskListsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/quality/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['categoryId'] !== null) {
            $queryParams['category_id'] = $localVarParams['categoryId'];
        }
        if ($localVarParams['ruleName'] !== null) {
            $queryParams['rule_name'] = $localVarParams['ruleName'];
        }
        if ($localVarParams['scheduleStatus'] !== null) {
            $queryParams['schedule_status'] = $localVarParams['scheduleStatus'];
        }
        if ($localVarParams['schedulePeriod'] !== null) {
            $queryParams['schedule_period'] = $localVarParams['schedulePeriod'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['resultStatus'] !== null) {
            $queryParams['result_status'] = $localVarParams['resultStatus'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTaskListsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTaskListsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取规则模板列表
     *
     * 分页获取规则模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQualityTemplatesAsync($request)
    {
        return $this->listQualityTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listQualityTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/rule-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['categoryId'] !== null) {
            $queryParams['category_id'] = $localVarParams['categoryId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['systemTemplate'] !== null) {
            $queryParams['system_template'] = $localVarParams['systemTemplate'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 关系
     *
     * 通过名称、等分页查找关系信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRelationsAsync($request)
    {
        return $this->listRelationsAsyncWithHttpInfo($request);
    }
    
    public function listRelationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/relation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListRelationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListRelationsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取schemas
     *
     * 获取schemas,目前只有DWS和采用postgresql驱动的RDS数据源支持schema,请在调用前确认该数据源是否支持schema字段
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
        $resourcePath = '/v2/{project_id}/{connection_id}/schemas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 获取主题层级
     *
     * 获取主题层级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubjectLevelsAsync($request)
    {
        return $this->listSubjectLevelsAsyncWithHttpInfo($request);
    }
    
    public function listSubjectLevelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subject-levels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSubjectLevelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSubjectLevelsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询模型下所有关系
     *
     * 查询模型下所有关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTableModelRelationsAsync($request)
    {
        return $this->listTableModelRelationsAsyncWithHttpInfo($request);
    }
    
    public function listTableModelRelationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/{model_id}/table-model/relation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tableIds'] !== null) {
            $queryParams['table_ids'] = $localVarParams['tableIds'];
        }
        if ($localVarParams['bizType'] !== null) {
            $queryParams['biz_type'] = $localVarParams['bizType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelRelationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelRelationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找模型实体列表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找模型实体信息，包含逻辑实体、表或属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTableModelsAsync($request)
    {
        return $this->listTableModelsAsyncWithHttpInfo($request);
    }
    
    public function listTableModelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/table-model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['syncKey'] !== null) {
            $queryParams['sync_key'] = $localVarParams['syncKey'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['modelId'] !== null) {
            $queryParams['model_id'] = $localVarParams['modelId'];
        }
        if ($localVarParams['bizCatalogId'] !== null) {
            $queryParams['biz_catalog_id'] = $localVarParams['bizCatalogId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取工作空间用户角色
     *
     * 获取工作空间用户角色
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkspaceRolesAsync($request)
    {
        return $this->listWorkspaceRolesAsyncWithHttpInfo($request);
    }
    
    public function listWorkspaceRolesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/users/role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspaceRolesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspaceRolesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取模型
     *
     * 获取模型
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkspacesAsync($request)
    {
        return $this->listWorkspacesAsyncWithHttpInfo($request);
    }
    
    public function listWorkspacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceType'] !== null) {
            $queryParams['workspace_type'] = $localVarParams['workspaceType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['dwType'] !== null) {
            $queryParams['dw_type'] = $localVarParams['dwType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取工作空间用户信息
     *
     * 获取工作空间用户信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkspaceusersAsync($request)
    {
        return $this->listWorkspaceusersAsyncWithHttpInfo($request);
    }
    
    public function listWorkspaceusersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{workspace_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspaceusersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspaceusersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量移动api至新目录
     *
     * 批量移动api至新目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function migrateApiAsync($request)
    {
        return $this->migrateApiAsyncWithHttpInfo($request);
    }
    
    public function migrateApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/apis/batch-move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MigrateApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MigrateApiRequest',
            $asyncRequest = true);
    }

    /**
     * 移动当前目录至新目录
     *
     * 移动当前目录至新目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function migrateCatalogAsync($request)
    {
        return $this->migrateCatalogAsyncWithHttpInfo($request);
    }
    
    public function migrateCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}/move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MigrateCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MigrateCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 修改自定义项
     *
     * 修改自定义项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyCustomizedFieldsAsync($request)
    {
        return $this->modifyCustomizedFieldsAsyncWithHttpInfo($request);
    }
    
    public function modifyCustomizedFieldsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/customized-fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModifyCustomizedFieldsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModifyCustomizedFieldsRequest',
            $asyncRequest = true);
    }

    /**
     * 用户行为分析
     *
     * 用户行为分析
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function parseUserBehaviorAsync($request)
    {
        return $this->parseUserBehaviorAsyncWithHttpInfo($request);
    }
    
    public function parseUserBehaviorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datamap/uba';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ParseUserBehaviorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ParseUserBehaviorRequest',
            $asyncRequest = true);
    }

    /**
     * DataArtsStudio实例一键购买接口
     *
     * DataArtsStudio实例一键购买接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function payForDgcOneKeyAsync($request)
    {
        return $this->payForDgcOneKeyAsyncWithHttpInfo($request);
    }
    
    public function payForDgcOneKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instances/onekey-purchase';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PayForDgcOneKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PayForDgcOneKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 关联属性与数据标准
     *
     * 关联属性与数据标准
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetLinkAttributeAndStandardAsync($request)
    {
        return $this->resetLinkAttributeAndStandardAsyncWithHttpInfo($request);
    }
    
    public function resetLinkAttributeAndStandardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/attribute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResetLinkAttributeAndStandardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResetLinkAttributeAndStandardRequest',
            $asyncRequest = true);
    }

    /**
     * 撤回审批单
     *
     * 撤回审批单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rollbackApprovalAsync($request)
    {
        return $this->rollbackApprovalAsyncWithHttpInfo($request);
    }
    
    public function rollbackApprovalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RollbackApprovalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RollbackApprovalRequest',
            $asyncRequest = true);
    }

    /**
     * 获取审批单
     *
     * 获取审批单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchApprovalsAsync($request)
    {
        return $this->searchApprovalsAsyncWithHttpInfo($request);
    }
    
    public function searchApprovalsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['bizId'] !== null) {
            $queryParams['biz_id'] = $localVarParams['bizId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['approvalStatus'] !== null) {
            $queryParams['approval_status'] = $localVarParams['approvalStatus'];
        }
        if ($localVarParams['approvalStatusDetail'] !== null) {
            $queryParams['approval_status_detail'] = $localVarParams['approvalStatusDetail'];
        }
        if ($localVarParams['approvalType'] !== null) {
            $queryParams['approval_type'] = $localVarParams['approvalType'];
        }
        if ($localVarParams['bizType'] !== null) {
            $queryParams['biz_type'] = $localVarParams['bizType'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchApprovalsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchApprovalsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找原子指标
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找原子指标信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchAtomicIndexesAsync($request)
    {
        return $this->searchAtomicIndexesAsyncWithHttpInfo($request);
    }
    
    public function searchAtomicIndexesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/atomic-indexs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['l3Id'] !== null) {
            $queryParams['l3_id'] = $localVarParams['l3Id'];
        }
        if ($localVarParams['tableId'] !== null) {
            $queryParams['table_id'] = $localVarParams['tableId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAtomicIndexesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAtomicIndexesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API已授权的APP
     *
     * 查询API已授权的APP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchAuthorizeAppAsync($request)
    {
        return $this->searchAuthorizeAppAsyncWithHttpInfo($request);
    }
    
    public function searchAuthorizeAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/authorize/apis/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAuthorizeAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAuthorizeAppRequest',
            $asyncRequest = true);
    }

    /**
     * 查询APP已拥有授权的API
     *
     * 查询APP已拥有授权的API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchBindApiAsync($request)
    {
        return $this->searchBindApiAsyncWithHttpInfo($request);
    }
    
    public function searchBindApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/authorize/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchBindApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchBindApiRequest',
            $asyncRequest = true);
    }

    /**
     * 查询流程架构列表
     *
     * 查询流程架构列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCatalogsAsync($request)
    {
        return $this->searchCatalogsAsyncWithHttpInfo($request);
    }
    
    public function searchCatalogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz/catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCatalogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCatalogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看码表字段值
     *
     * 查看码表字段值
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCodeTableValuesAsync($request)
    {
        return $this->searchCodeTableValuesAsyncWithHttpInfo($request);
    }
    
    public function searchCodeTableValuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables/{id}/values';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTableValuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTableValuesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询码表列表
     *
     * 查询码表列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCodeTablesAsync($request)
    {
        return $this->searchCodeTablesAsyncWithHttpInfo($request);
    }
    
    public function searchCodeTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['approver'] !== null) {
            $queryParams['approver'] = $localVarParams['approver'];
        }
        if ($localVarParams['directoryId'] !== null) {
            $queryParams['directory_id'] = $localVarParams['directoryId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义项
     *
     * 查询自定义项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCustomizedFieldsAsync($request)
    {
        return $this->searchCustomizedFieldsAsyncWithHttpInfo($request);
    }
    
    public function searchCustomizedFieldsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/customized-fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCustomizedFieldsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCustomizedFieldsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数据连接信息
     *
     * 获取指定类型下的数据连接信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDwByTypeAsync($request)
    {
        return $this->searchDwByTypeAsyncWithHttpInfo($request);
    }
    
    public function searchDwByTypeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/atlas/data-warehouses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['forceRefresh'] !== null) {
            $queryParams['force_refresh'] = $localVarParams['forceRefresh'];
        }
        if ($localVarParams['dwType'] !== null) {
            $queryParams['dw_type'] = $localVarParams['dwType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDwByTypeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDwByTypeRequest',
            $asyncRequest = true);
    }

    /**
     * 通过路径获取id
     *
     * 通过路径获取id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchIdByPathAsync($request)
    {
        return $this->searchIdByPathAsyncWithHttpInfo($request);
    }
    
    public function searchIdByPathAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/ids';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchIdByPathResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchIdByPathRequest',
            $asyncRequest = true);
    }

    /**
     * 查找主题列表
     *
     * 通过名称、创建者、责任人、状态、修改时间分页查找主题
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchSubjectAsync($request)
    {
        return $this->searchSubjectAsyncWithHttpInfo($request);
    }
    
    public function searchSubjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectRequest',
            $asyncRequest = true);
    }

    /**
     * 查找主题列表(新)
     *
     * 查找主题(新)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchSubjectNewAsync($request)
    {
        return $this->searchSubjectNewAsyncWithHttpInfo($request);
    }
    
    public function searchSubjectNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectNewRequest',
            $asyncRequest = true);
    }

    /**
     * 查找版本信息
     *
     * 通过名称、创建者、修改时间查找版本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchVersionsAsync($request)
    {
        return $this->searchVersionsAsyncWithHttpInfo($request);
    }
    
    public function searchVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createBy'] !== null) {
            $queryParams['create_by'] = $localVarParams['createBy'];
        }
        if ($localVarParams['bizId'] !== null) {
            $queryParams['biz_id'] = $localVarParams['bizId'];
        }
        if ($localVarParams['bizType'] !== null) {
            $queryParams['biz_type'] = $localVarParams['bizType'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看汇总表详情
     *
     * 通过id查看汇总表的详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAggregationLogicTableByIdAsync($request)
    {
        return $this->showAggregationLogicTableByIdAsyncWithHttpInfo($request);
    }
    
    public function showAggregationLogicTableByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/aggregation-logic-tables/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAggregationLogicTableByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAggregationLogicTableByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定api 仪表板数据详情
     *
     * 查询指定api 仪表板数据详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiDashboardAsync($request)
    {
        return $this->showApiDashboardAsyncWithHttpInfo($request);
    }
    
    public function showApiDashboardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apis-dashboards/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApiDashboardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApiDashboardRequest',
            $asyncRequest = true);
    }

    /**
     * 查询api 仪表板数据详情
     *
     * 查询api 仪表板数据详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApisDashboardAsync($request)
    {
        return $this->showApisDashboardAsyncWithHttpInfo($request);
    }
    
    public function showApisDashboardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apis-dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisDashboardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisDashboardRequest',
            $asyncRequest = true);
    }

    /**
     * 查询api 统计数据详情
     *
     * 查询api 统计数据详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApisDetailAsync($request)
    {
        return $this->showApisDetailAsyncWithHttpInfo($request);
    }
    
    public function showApisDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apis-detail/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询统计用户相关的总览开发指标
     *
     * 查询统计用户相关的总览开发指标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApisOverviewAsync($request)
    {
        return $this->showApisOverviewAsyncWithHttpInfo($request);
    }
    
    public function showApisOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apis-overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用详情
     *
     * 查询应用详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppInfoAsync($request)
    {
        return $this->showAppInfoAsyncWithHttpInfo($request);
    }
    
    public function showAppInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取申请详情
     *
     * 获取申请详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplyDetailAsync($request)
    {
        return $this->showApplyDetailAsyncWithHttpInfo($request);
    }
    
    public function showApplyDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/applys/{apply_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['applyId'] !== null) {
            $pathParams['apply_id'] = $localVarParams['applyId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApplyDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApplyDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询app 仪表板数据详情
     *
     * 查询app 仪表板数据详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppsDashboardAsync($request)
    {
        return $this->showAppsDashboardAsyncWithHttpInfo($request);
    }
    
    public function showAppsDashboardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apps-dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsDashboardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsDashboardRequest',
            $asyncRequest = true);
    }

    /**
     * 查询app 统计数据详情
     *
     * 查询app 统计数据详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppsDetailAsync($request)
    {
        return $this->showAppsDetailAsyncWithHttpInfo($request);
    }
    
    public function showAppsDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apps-detail/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询统计用户相关的总览调用指标
     *
     * 查询统计用户相关的总览调用指标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppsOverviewAsync($request)
    {
        return $this->showAppsOverviewAsyncWithHttpInfo($request);
    }
    
    public function showAppsOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/statistic/apps-overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 查看原子指标详情
     *
     * 通过id获取指标详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAtomicIndexByIdAsync($request)
    {
        return $this->showAtomicIndexByIdAsyncWithHttpInfo($request);
    }
    
    public function showAtomicIndexByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/atomic-indexs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAtomicIndexByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAtomicIndexByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查找流程架构详情
     *
     * 查找流程架构详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBizCatalogDetailAsync($request)
    {
        return $this->showBizCatalogDetailAsyncWithHttpInfo($request);
    }
    
    public function showBizCatalogDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz/catalogs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizCatalogDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizCatalogDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查看指标详情
     *
     * 通过id查看指标的详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBizMetricByIdAsync($request)
    {
        return $this->showBizMetricByIdAsyncWithHttpInfo($request);
    }
    
    public function showBizMetricByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizMetricByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizMetricByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询业务资产
     *
     * 业务资产查询接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBusinessAssetsAsync($request)
    {
        return $this->showBusinessAssetsAsyncWithHttpInfo($request);
    }
    
    public function showBusinessAssetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/business-assets/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取业务资产统计信息
     *
     * 获取业务资产统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBusinessAssetsStatisticAsync($request)
    {
        return $this->showBusinessAssetsStatisticAsyncWithHttpInfo($request);
    }
    
    public function showBusinessAssetsStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/statistic/assets/business-assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务目录
     *
     * 查询服务目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCatalogDetailAsync($request)
    {
        return $this->showCatalogDetailAsyncWithHttpInfo($request);
    }
    
    public function showCatalogDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCatalogDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCatalogDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查看码表详情
     *
     * 通过id查看码表的详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCodeTableByIdAsync($request)
    {
        return $this->showCodeTableByIdAsyncWithHttpInfo($request);
    }
    
    public function showCodeTableByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCodeTableByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCodeTableByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看复合指标详情
     *
     * 通过id获取复合指标详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCompoundMetricByIdAsync($request)
    {
        return $this->showCompoundMetricByIdAsyncWithHttpInfo($request);
    }
    
    public function showCompoundMetricByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/compound-metrics/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCompoundMetricByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCompoundMetricByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看限定详情
     *
     * 通过id查看限定详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConditionByIdAsync($request)
    {
        return $this->showConditionByIdAsyncWithHttpInfo($request);
    }
    
    public function showConditionByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/conditions/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowConditionByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowConditionByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取对账作业详情
     *
     * 获取对账作业详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConsistencyTaskDetailAsync($request)
    {
        return $this->showConsistencyTaskDetailAsyncWithHttpInfo($request);
    }
    
    public function showConsistencyTaskDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/consistency-tasks/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowConsistencyTaskDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowConsistencyTaskDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 资产信息
     *
     * 查询概要
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataProfileAsync($request)
    {
        return $this->showDataProfileAsyncWithHttpInfo($request);
    }
    
    public function showDataProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dwId'] !== null) {
            $queryParams['dw_id'] = $localVarParams['dwId'];
        }
        if ($localVarParams['dbType'] !== null) {
            $queryParams['db_type'] = $localVarParams['dbType'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 资产搜索
     *
     * 资产搜索
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataSetsAsync($request)
    {
        return $this->showDataSetsAsyncWithHttpInfo($request);
    }
    
    public function showDataSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datamap/entities/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个数据连接信息
     *
     * 查询单个数据连接信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataconnectionAsync($request)
    {
        return $this->showDataconnectionAsyncWithHttpInfo($request);
    }
    
    public function showDataconnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-connections/{data_connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dataConnectionId'] !== null) {
            $pathParams['data_connection_id'] = $localVarParams['dataConnectionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataconnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataconnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 查看衍生指标详情
     *
     * 通过id获取衍生详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDerivativeIndexByIdAsync($request)
    {
        return $this->showDerivativeIndexByIdAsyncWithHttpInfo($request);
    }
    
    public function showDerivativeIndexByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/derivative-indexs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDerivativeIndexByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDerivativeIndexByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看维度详情
     *
     * 通过id查看维度详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDimensionByIdAsync($request)
    {
        return $this->showDimensionByIdAsyncWithHttpInfo($request);
    }
    
    public function showDimensionByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/dimensions/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看维度表详情
     *
     * 通过id查看维度表的详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDimensionLogicTableByIdAsync($request)
    {
        return $this->showDimensionLogicTableByIdAsyncWithHttpInfo($request);
    }
    
    public function showDimensionLogicTableByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/dimension-logic-tables/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionLogicTableByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionLogicTableByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询技术资产
     *
     * 查询技术资产
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEntitiesAsync($request)
    {
        return $this->showEntitiesAsyncWithHttpInfo($request);
    }
    
    public function showEntitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowEntitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowEntitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 根据guid获取资产详情
     *
     * 根据表guid可以获取表的详情信息，表的详情信息包含column的信息，也可以根据column的guid直接获取column的信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEntityInfoByGuidAsync($request)
    {
        return $this->showEntityInfoByGuidAsyncWithHttpInfo($request);
    }
    
    public function showEntityInfoByGuidAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['guid'] !== null) {
            $pathParams['guid'] = $localVarParams['guid'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowEntityInfoByGuidResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowEntityInfoByGuidRequest',
            $asyncRequest = true);
    }

    /**
     * 查看事实表详情
     *
     * 通过id查看事实表的详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactLogicTableByIdAsync($request)
    {
        return $this->showFactLogicTableByIdAsyncWithHttpInfo($request);
    }
    
    public function showFactLogicTableByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/fact-logic-tables/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactLogicTableByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactLogicTableByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询环境变量信息
     *
     * 查询环境变量信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactoryEnvAsync($request)
    {
        return $this->showFactoryEnvAsyncWithHttpInfo($request);
    }
    
    public function showFactoryEnvAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/env';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryEnvResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryEnvRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有的补数据实例
     *
     * 查询所有的补数据实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactorySupplementDataAsync($request)
    {
        return $this->showFactorySupplementDataAsyncWithHttpInfo($request);
    }
    
    public function showFactorySupplementDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/supplement-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactorySupplementDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactorySupplementDataRequest',
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
    public function showGlossaryListAsync($request)
    {
        return $this->showGlossaryListAsyncWithHttpInfo($request);
    }
    
    public function showGlossaryListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['createUser'] !== null) {
            $queryParams['create_user'] = $localVarParams['createUser'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['end'] !== null) {
            $queryParams['end'] = $localVarParams['end'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['sortOrder'] !== null) {
            $queryParams['sort_order'] = $localVarParams['sortOrder'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowGlossaryListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowGlossaryListRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务日志
     *
     * 获取任务日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceLogAsync($request)
    {
        return $this->showInstanceLogAsyncWithHttpInfo($request);
    }
    
    public function showInstanceLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/metadata/tasks/{task_id}/{instance_id}/log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceLogRequest',
            $asyncRequest = true);
    }

    /**
     * 获取实例结果
     *
     * 获取实例结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceResultAsync($request)
    {
        return $this->showInstanceResultAsyncWithHttpInfo($request);
    }
    
    public function showInstanceResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/instances/{instance_id}/result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceResultRequest',
            $asyncRequest = true);
    }

    /**
     * 获取消息详情
     *
     * 获取消息详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMessageDetailAsync($request)
    {
        return $this->showMessageDetailAsyncWithHttpInfo($request);
    }
    
    public function showMessageDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/messages/{message_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['messageId'] !== null) {
            $pathParams['message_id'] = $localVarParams['messageId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMessageDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMessageDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指标资产
     *
     * 指标资产查询接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMetricAssetsAsync($request)
    {
        return $this->showMetricAssetsAsyncWithHttpInfo($request);
    }
    
    public function showMetricAssetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/metric-assets/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMetricAssetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMetricAssetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指标资产目录树
     *
     * 查询指标资产目录树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMetricTreeAsync($request)
    {
        return $this->showMetricTreeAsyncWithHttpInfo($request);
    }
    
    public function showMetricTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/metric-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMetricTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMetricTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 通过id获取路径
     *
     * 通过id获取路径
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPathByIdAsync($request)
    {
        return $this->showPathByIdAsyncWithHttpInfo($request);
    }
    
    public function showPathByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}/paths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPathByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPathByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 通过id获取路径对象
     *
     * 通过id获取路径对象
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPathObjectByIdAsync($request)
    {
        return $this->showPathObjectByIdAsyncWithHttpInfo($request);
    }
    
    public function showPathObjectByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}/layerpaths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPathObjectByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPathObjectByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取质量作业详情
     *
     * 获取质量作业详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQualityTaskDetailAsync($request)
    {
        return $this->showQualityTaskDetailAsyncWithHttpInfo($request);
    }
    
    public function showQualityTaskDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/quality-tasks/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowQualityTaskDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowQualityTaskDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查看关系详情
     *
     * 通过id获取关系详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRelationByIdAsync($request)
    {
        return $this->showRelationByIdAsyncWithHttpInfo($request);
    }
    
    public function showRelationByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/relation/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowRelationByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowRelationByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看数据标准详情
     *
     * 通过id获取数据标准详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStandardByIdAsync($request)
    {
        return $this->showStandardByIdAsyncWithHttpInfo($request);
    }
    
    public function showStandardByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据标准模板
     *
     * 查询数据标准模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStandardTemplateAsync($request)
    {
        return $this->showStandardTemplateAsyncWithHttpInfo($request);
    }
    
    public function showStandardTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查看表模型详情
     *
     * 通过id获取模型表详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTableModelByIdAsync($request)
    {
        return $this->showTableModelByIdAsyncWithHttpInfo($request);
    }
    
    public function showTableModelByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/table-model/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['latest'] !== null) {
            $queryParams['latest'] = $localVarParams['latest'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTableModelByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTableModelByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 搜索查询标签分页展示
     *
     * 搜索查询标签分页展示
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTagsAsync($request)
    {
        return $this->showTagsAsyncWithHttpInfo($request);
    }
    
    public function showTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datamap/tags/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询采集任务详情
     *
     * 查询采集任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTaskInfoAsync($request)
    {
        return $this->showTaskInfoAsyncWithHttpInfo($request);
    }
    
    public function showTaskInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/metadata/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTaskInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTaskInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询采集任务列表
     *
     * 查询采集任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTaskListAsync($request)
    {
        return $this->showTaskListAsyncWithHttpInfo($request);
    }
    
    public function showTaskListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/metadata/tasks/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTaskListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTaskListRequest',
            $asyncRequest = true);
    }

    /**
     * 获取技术资产统计信息
     *
     * 获取技术资产统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTechnicalAssetsStatisticAsync($request)
    {
        return $this->showTechnicalAssetsStatisticAsyncWithHttpInfo($request);
    }
    
    public function showTechnicalAssetsStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/statistic/assets/technical-assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTechnicalAssetsStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTechnicalAssetsStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 获取规则模板详情
     *
     * 获取规则模板详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTemplatesDetailAsync($request)
    {
        return $this->showTemplatesDetailAsyncWithHttpInfo($request);
    }
    
    public function showTemplatesDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/rule-templates/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTemplatesDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTemplatesDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 无血缘关系表查询
     *
     * 无血缘关系表查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUnrelatedTableAsync($request)
    {
        return $this->showUnrelatedTableAsyncWithHttpInfo($request);
    }
    
    public function showUnrelatedTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/lineage/search/unrelated/table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowUnrelatedTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowUnrelatedTableRequest',
            $asyncRequest = true);
    }

    /**
     * 获取单个工作空间信息
     *
     * 获取单个工作空间信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkSpaceAsync($request)
    {
        return $this->showWorkSpaceAsyncWithHttpInfo($request);
    }
    
    public function showWorkSpaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/workspaces/{instance_id}/{workspace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkSpaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkSpaceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询模型详情
     *
     * 查询物理模型或逻辑模型的工作区空间详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkspaceDetailByIdAsync($request)
    {
        return $this->showWorkspaceDetailByIdAsyncWithHttpInfo($request);
    }
    
    public function showWorkspaceDetailByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/workspaces/{model_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkspaceDetailByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkspaceDetailByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 停止一个补数据实例
     *
     * 停止一个补数据实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopFactorySupplementDataInstanceAsync($request)
    {
        return $this->stopFactorySupplementDataInstanceAsyncWithHttpInfo($request);
    }
    
    public function stopFactorySupplementDataInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/supplement-data/{instance_name}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $pathParams['instance_name'] = $localVarParams['instanceName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StopFactorySupplementDataInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StopFactorySupplementDataInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用
     *
     * 更新应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppAsync($request)
    {
        return $this->updateAppAsyncWithHttpInfo($request);
    }
    
    public function updateAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateAppRequest',
            $asyncRequest = true);
    }

    /**
     * 更新业务指标
     *
     * 更新业务指标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBizMetricAsync($request)
    {
        return $this->updateBizMetricAsyncWithHttpInfo($request);
    }
    
    public function updateBizMetricAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/biz-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateBizMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateBizMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 更新服务目录
     *
     * 更新服务目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCatalogAsync($request)
    {
        return $this->updateCatalogAsyncWithHttpInfo($request);
    }
    
    public function updateCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/servicecatalogs/{catalog_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['catalogId'] !== null) {
            $pathParams['catalog_id'] = $localVarParams['catalogId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 修改码表
     *
     * 修改码表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCodeTableAsync($request)
    {
        return $this->updateCodeTableAsyncWithHttpInfo($request);
    }
    
    public function updateCodeTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑码表字段值
     *
     * 编辑码表字段值
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCodeTableValuesAsync($request)
    {
        return $this->updateCodeTableValuesAsyncWithHttpInfo($request);
    }
    
    public function updateCodeTableValuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/code-tables/{id}/values';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableValuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableValuesRequest',
            $asyncRequest = true);
    }

    /**
     * 更新数据连接信息
     *
     * 更新数据连接信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDataconnectionAsync($request)
    {
        return $this->updateDataconnectionAsyncWithHttpInfo($request);
    }
    
    public function updateDataconnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-connections/{data_connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dataConnectionId'] !== null) {
            $pathParams['data_connection_id'] = $localVarParams['dataConnectionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataconnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataconnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 修改目录
     *
     * 修改目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDirectoryAsync($request)
    {
        return $this->updateDirectoryAsyncWithHttpInfo($request);
    }
    
    public function updateDirectoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/directorys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDirectoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDirectoryRequest',
            $asyncRequest = true);
    }

    /**
     * 修改作业名称
     *
     * 修改作业名称
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFactoryJobNameAsync($request)
    {
        return $this->updateFactoryJobNameAsyncWithHttpInfo($request);
    }
    
    public function updateFactoryJobNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/jobs/{job_name}/rename';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['host'] !== null) {
            $headerParams['host'] = $localVarParams['host'];
        }
        if ($localVarParams['jobName'] !== null) {
            $pathParams['job_name'] = $localVarParams['jobName'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateFactoryJobNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateFactoryJobNameRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据标准
     *
     * 修改数据标准
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStandardAsync($request)
    {
        return $this->updateStandardAsyncWithHttpInfo($request);
    }
    
    public function updateStandardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据标准模板
     *
     * 修改数据标准模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStandardTemplateAsync($request)
    {
        return $this->updateStandardTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateStandardTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/standards/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主题
     *
     * 修改主题
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubjectAsync($request)
    {
        return $this->updateSubjectAsyncWithHttpInfo($request);
    }
    
    public function updateSubjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主题(新)
     *
     * 修改主题(新)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubjectNewAsync($request)
    {
        return $this->updateSubjectNewAsyncWithHttpInfo($request);
    }
    
    public function updateSubjectNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/design/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectNewRequest',
            $asyncRequest = true);
    }

    /**
     * 更新模型实体
     *
     * 更新一个模型实体，包括逻辑实体或物理数据表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTableModelAsync($request)
    {
        return $this->updateTableModelAsyncWithHttpInfo($request);
    }
    
    public function updateTableModelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/table-model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTableModelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTableModelRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑采集任务
     *
     * 编辑采集任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTaskInfoAsync($request)
    {
        return $this->updateTaskInfoAsyncWithHttpInfo($request);
    }
    
    public function updateTaskInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/metadata/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTaskInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTaskInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 更新规则模板
     *
     * 更新规则模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTemplateAsync($request)
    {
        return $this->updateTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/quality/rule-templates/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑工作空间用户或用户组
     *
     * 编辑工作空间用户或用户组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkSpaceUserOrGroupAsync($request)
    {
        return $this->updateWorkSpaceUserOrGroupAsyncWithHttpInfo($request);
    }
    
    public function updateWorkSpaceUserOrGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{workspace_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkSpaceUserOrGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkSpaceUserOrGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新模型工作区
     *
     * 更新模型工作区
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkspaceAsync($request)
    {
        return $this->updateWorkspaceAsyncWithHttpInfo($request);
    }
    
    public function updateWorkspaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'response']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'response'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkspaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkspaceRequest',
            $asyncRequest = true);
    }

    /**
     * API授权操作(授权/取消授权/申请/续约)
     *
     * API授权操作(授权/取消授权/申请/续约)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function authorizeActionApiToInstanceAsync($request)
    {
        return $this->authorizeActionApiToInstanceAsyncWithHttpInfo($request);
    }
    
    public function authorizeActionApiToInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/authorize/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeActionApiToInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeActionApiToInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 批量授权API
     *
     * 批量授权API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function authorizeApiToInstanceAsync($request)
    {
        return $this->authorizeApiToInstanceAsyncWithHttpInfo($request);
    }
    
    public function authorizeApiToInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/instances/{instance_id}/authorize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeApiToInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeApiToInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建API
     *
     * 创建API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApiAsync($request)
    {
        return $this->createApiAsyncWithHttpInfo($request);
    }
    
    public function createApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApiRequest',
            $asyncRequest = true);
    }

    /**
     * 调试API
     *
     * 调试API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function debugApiAsync($request)
    {
        return $this->debugApiAsyncWithHttpInfo($request);
    }
    
    public function debugApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/instances/{instance_id}/test';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugApiRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除API
     *
     * 批量删除API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApiAsync($request)
    {
        return $this->deleteApiAsyncWithHttpInfo($request);
    }
    
    public function deleteApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteApiRequest',
            $asyncRequest = true);
    }

    /**
     * API操作(下线/停用/恢复)
     *
     * API操作(下线/停用/恢复)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeApiToInstanceAsync($request)
    {
        return $this->executeApiToInstanceAsyncWithHttpInfo($request);
    }
    
    public function executeApiToInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/instances/{instance_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteApiToInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteApiToInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API列表
     *
     * 查询API列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApisAsync($request)
    {
        return $this->listApisAsyncWithHttpInfo($request);
    }
    
    public function listApisAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisRequest',
            $asyncRequest = true);
    }

    /**
     * 查看API不同操作对应的实例信息
     *
     * 查看API不同操作对应的实例信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceListAsync($request)
    {
        return $this->listInstanceListAsyncWithHttpInfo($request);
    }
    
    public function listInstanceListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['showAll'] !== null) {
            $queryParams['show_all'] = $localVarParams['showAll'];
        }
        if ($localVarParams['checkStatus'] !== null) {
            $queryParams['check_status'] = $localVarParams['checkStatus'];
        }
        if ($localVarParams['checkDebug'] !== null) {
            $queryParams['check_debug'] = $localVarParams['checkDebug'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListInstanceListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListInstanceListRequest',
            $asyncRequest = true);
    }

    /**
     * 发布/下线/停用/恢复API
     *
     * 发布/下线/停用/恢复API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishApiAsync($request)
    {
        return $this->publishApiAsyncWithHttpInfo($request);
    }
    
    public function publishApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiRequest',
            $asyncRequest = true);
    }

    /**
     * 发布API
     *
     * 发布API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishApiToInstanceAsync($request)
    {
        return $this->publishApiToInstanceAsyncWithHttpInfo($request);
    }
    
    public function publishApiToInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/instances/{instance_id}/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiToInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiToInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 查看API调试信息
     *
     * 查看API调试信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDebugInfoAsync($request)
    {
        return $this->searchDebugInfoAsyncWithHttpInfo($request);
    }
    
    public function searchDebugInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/debug-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDebugInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDebugInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查看API发布信息
     *
     * 查看API发布信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchPublishInfoAsync($request)
    {
        return $this->searchPublishInfoAsyncWithHttpInfo($request);
    }
    
    public function searchPublishInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}/publish-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchPublishInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchPublishInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API信息
     *
     * 查询API信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiAsync($request)
    {
        return $this->showApiAsyncWithHttpInfo($request);
    }
    
    public function showApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['apiId'] !== null) {
            $pathParams['api_id'] = $localVarParams['apiId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApiRequest',
            $asyncRequest = true);
    }

    /**
     * 更新API
     *
     * 更新API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApiAsync($request)
    {
        return $this->updateApiAsyncWithHttpInfo($request);
    }
    
    public function updateApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/apis/{api_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams['dlm_type'] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateApiRequest',
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