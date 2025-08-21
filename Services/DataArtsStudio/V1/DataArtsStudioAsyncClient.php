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
        $client = new ClientBuilder(new DataArtsStudioAsyncClient());
        return $client;
    }

    /**
     * 审批通过工单
     *
     * 审批通过工单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptSecurityApplicationAsync($request)
    {
        return $this->acceptSecurityApplicationAsyncWithHttpInfo($request);
    }
    
    public function acceptSecurityApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-approve/approve/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AcceptSecurityApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AcceptSecurityApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 添加标签
     *
     * 根据资产（表或属性）的ID给资产打上标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDesignEntityTagsAsync($request)
    {
        return $this->addDesignEntityTagsAsyncWithHttpInfo($request);
    }
    
    public function addDesignEntityTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/{entity_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['attrId'] !== null) {
            $queryParams['attr_id'] = $localVarParams['attrId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['entityId'] !== null) {
            $pathParams['entity_id'] = $localVarParams['entityId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddDesignEntityTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddDesignEntityTagsRequest',
            $asyncRequest = true);
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
     * 提交表权限申请
     *
     * 提交表权限申请
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function applySecurityTableAuthorityAsync($request)
    {
        return $this->applySecurityTableAuthorityAsyncWithHttpInfo($request);
    }
    
    public function applySecurityTableAuthorityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-application/table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApplySecurityTableAuthorityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApplySecurityTableAuthorityRequest',
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
     * 数据连接跨空间授权
     *
     * 数据连接跨空间授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function authorizeDataConnectionAsync($request)
    {
        return $this->authorizeDataConnectionAsyncWithHttpInfo($request);
    }
    
    public function authorizeDataConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datasources/authorize_datasource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dataConnectionId'] !== null) {
            $queryParams['data_connection_id'] = $localVarParams['dataConnectionId'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeDataConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeDataConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 审核申请
     *
     * 审核申请。
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
     * 批量审批通过工单
     *
     * 批量审批通过工单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchApproveSecurityApplicationsAsync($request)
    {
        return $this->batchApproveSecurityApplicationsAsyncWithHttpInfo($request);
    }
    
    public function batchApproveSecurityApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/openapi/permission-approve/batch-approve';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchApproveSecurityApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchApproveSecurityApplicationsRequest',
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
     * 转换逻辑模型为物理模型
     *
     * 转换逻辑模型为物理模型，转换成功则显示转换后的目标模型信息。
     * 异常：目标模型信息的“id”等属性为null时，则需要调用《获取操作结果》接口查看具体报错信息：GET https://{endpoint}/v1/{project_id}/design/operation-results?operation_type&#x3D;TRANSFORM_LOGIC_MODEL&amp;operation_id&#x3D;{model_id}，其中{model_id}为本接口的路径参数。
     * 约束与限制：
     * 1、target_model_id与target_model_name不对应时，target_model_id优先级高于target_model_name。
     * 2、target_model_id与dw_type不对应时，会找不到模型，提示：模型不存在。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateDesignTableModelsFromLogicAsync($request)
    {
        return $this->batchCreateDesignTableModelsFromLogicAsyncWithHttpInfo($request);
    }
    
    public function batchCreateDesignTableModelsFromLogicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/design/workspaces/{model_id}/transform';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateDesignTableModelsFromLogicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateDesignTableModelsFromLogicRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加权限集成员
     *
     * 批量添加权限集成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateSecurityPermissionSetMembersAsync($request)
    {
        return $this->batchCreateSecurityPermissionSetMembersAsyncWithHttpInfo($request);
    }
    
    public function batchCreateSecurityPermissionSetMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/members/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateSecurityPermissionSetMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateSecurityPermissionSetMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加权限集的权限
     *
     * 批量添加权限集的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateSecurityPermissionSetPermissionsAsync($request)
    {
        return $this->batchCreateSecurityPermissionSetPermissionsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateSecurityPermissionSetPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/permissions/batch-append';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateSecurityPermissionSetPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateSecurityPermissionSetPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除识别规则接口
     *
     * 批量删除识别规则接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSecurityDataClassificationRuleAsync($request)
    {
        return $this->batchDeleteSecurityDataClassificationRuleAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSecurityDataClassificationRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityDataClassificationRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityDataClassificationRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除动态脱敏策略
     *
     * 批量删除动态脱敏策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSecurityDynamicMaskingPoliciesAsync($request)
    {
        return $this->batchDeleteSecurityDynamicMaskingPoliciesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSecurityDynamicMaskingPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/masking/dynamic/policies/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityDynamicMaskingPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityDynamicMaskingPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除权限集成员
     *
     * 批量删除权限集成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSecurityPermissionSetMembersAsync($request)
    {
        return $this->batchDeleteSecurityPermissionSetMembersAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSecurityPermissionSetMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/members/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityPermissionSetMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityPermissionSetMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 删除权限集的权限
     *
     * 删除权限集的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSecurityPermissionSetPermissionsAsync($request)
    {
        return $this->batchDeleteSecurityPermissionSetPermissionsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSecurityPermissionSetPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/permissions/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityPermissionSetPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityPermissionSetPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除资源权限策略
     *
     * 批量删除资源权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSecurityResourcePermissionPoliciesAsync($request)
    {
        return $this->batchDeleteSecurityResourcePermissionPoliciesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSecurityResourcePermissionPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-resource/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityResourcePermissionPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityResourcePermissionPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除密级
     *
     * 批量删除密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSecuritySecrecyLevelsAsync($request)
    {
        return $this->batchDeleteSecuritySecrecyLevelsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSecuritySecrecyLevelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/secrecy-level/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecuritySecrecyLevelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecuritySecrecyLevelsRequest',
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
     * 批量下线。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOfflineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOfflineRequest',
            $asyncRequest = true);
    }

    /**
     * 批量发布
     *
     * 批量发布。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchPublishResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchPublishRequest',
            $asyncRequest = true);
    }

    /**
     * 批量驳回工单
     *
     * 批量驳回工单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRejectSecurityApplicationsAsync($request)
    {
        return $this->batchRejectSecurityApplicationsAsyncWithHttpInfo($request);
    }
    
    public function batchRejectSecurityApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/openapi/permission-approve/batch-reject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchRejectSecurityApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchRejectSecurityApplicationsRequest',
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
     * 批量打标签(邀测)
     *
     * 批量给资产打标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchTagAsync($request)
    {
        return $this->batchTagAsyncWithHttpInfo($request);
    }
    
    public function batchTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities/guids/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchTagRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新数据开发连接细粒度认证状态
     *
     * 批量更新数据开发连接细粒度认证状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateSecurityDlfDataWareHousesAsync($request)
    {
        return $this->batchUpdateSecurityDlfDataWareHousesAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateSecurityDlfDataWareHousesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/fgac/dlf/datawarehouses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchUpdateSecurityDlfDataWareHousesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchUpdateSecurityDlfDataWareHousesRequest',
            $asyncRequest = true);
    }

    /**
     * 撤销任务包
     *
     * 撤销任务包
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelFactoryPackagesAsync($request)
    {
        return $this->cancelFactoryPackagesAsyncWithHttpInfo($request);
    }
    
    public function cancelFactoryPackagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/release-packages/unpack';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CancelFactoryPackagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CancelFactoryPackagesRequest',
            $asyncRequest = true);
    }

    /**
     * 修改流程架构
     *
     * 修改流程架构。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 修改或删除主题层级。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 查看逆向维度表任务。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckDimensionStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckDimensionStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查看逆向事实表任务
     *
     * 查看逆向事实表任务。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckFactLogicTableStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckFactLogicTableStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 组合识别规则测试
     *
     * 组合识别规则测试
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkSecurityDataClassificationCombineRuleAsync($request)
    {
        return $this->checkSecurityDataClassificationCombineRuleAsyncWithHttpInfo($request);
    }
    
    public function checkSecurityDataClassificationCombineRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckSecurityDataClassificationCombineRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckSecurityDataClassificationCombineRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 比较版本信息
     *
     * 通过两个版本id，比较两者差异。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function compareDesignVersionsAsync($request)
    {
        return $this->compareDesignVersionsAsyncWithHttpInfo($request);
    }
    
    public function compareDesignVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/design/versions/compare';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CompareDesignVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CompareDesignVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 审批单处理
     *
     * 审批驳回/通过，单个或多个action-id&#x3D;reject/resolve。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 对收到的通知消息进行确认，可以在指定的时间范围内选择何时进行处理。
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
     * 关系建模页面，外层的统计信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountAllModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountAllModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 总览统计信息
     *
     * 总览统计信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountOverviewsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountOverviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 标准覆盖率统计信息
     *
     * 查看某个数据标准在所有模型字段中的覆盖率，即使用该标准的字段占总字段的百分比。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountStandardsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountStandardsRequest',
            $asyncRequest = true);
    }

    /**
     * 模型统计信息
     *
     * 单个模型中的统计信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountTableModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountTableModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建应用
     *
     * 创建应用。
     * 支持创建APP， IAM应用。
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
     * 创建审批人。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
     * 创建业务指标。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateBizMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateBizMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 创建流程架构
     *
     * 创建流程架构。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 创建码表
     *
     * 创建码表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 新建汇总表
     *
     * 根据入参，手动创建汇总表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDesignAggregationLogicTableAsync($request)
    {
        return $this->createDesignAggregationLogicTableAsyncWithHttpInfo($request);
    }
    
    public function createDesignAggregationLogicTableAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignAggregationLogicTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignAggregationLogicTableRequest',
            $asyncRequest = true);
    }

    /**
     * 新建原子指标
     *
     * 新建单个原子指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDesignAtomicIndexAsync($request)
    {
        return $this->createDesignAtomicIndexAsyncWithHttpInfo($request);
    }
    
    public function createDesignAtomicIndexAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignAtomicIndexResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignAtomicIndexRequest',
            $asyncRequest = true);
    }

    /**
     * 新建复合指标
     *
     * 根据参数，新建复合指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDesignCompoundMetricAsync($request)
    {
        return $this->createDesignCompoundMetricAsyncWithHttpInfo($request);
    }
    
    public function createDesignCompoundMetricAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignCompoundMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignCompoundMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 新建衍生指标
     *
     * 根据参数，新建衍生指标指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDesignDerivativeIndexAsync($request)
    {
        return $this->createDesignDerivativeIndexAsyncWithHttpInfo($request);
    }
    
    public function createDesignDerivativeIndexAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignDerivativeIndexResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignDerivativeIndexRequest',
            $asyncRequest = true);
    }

    /**
     * 新建维度
     *
     * 根据参数新建维度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDesignDimensionAsync($request)
    {
        return $this->createDesignDimensionAsyncWithHttpInfo($request);
    }
    
    public function createDesignDimensionAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignDimensionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignDimensionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建目录
     *
     * 创建目录（数据标准、码表）。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 创建作业
     *
     * 创建作业
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFactoryJobAsync($request)
    {
        return $this->createFactoryJobAsyncWithHttpInfo($request);
    }
    
    public function createFactoryJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryJobRequest',
            $asyncRequest = true);
    }

    /**
     * 待发布包发布
     *
     * 待发布包发布
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFactoryPendingItemsPackageAsync($request)
    {
        return $this->createFactoryPendingItemsPackageAsyncWithHttpInfo($request);
    }
    
    public function createFactoryPendingItemsPackageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/pending-items/package';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryPendingItemsPackageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryPendingItemsPackageRequest',
            $asyncRequest = true);
    }

    /**
     * 创建补数据实例
     *
     * 创建补数据实例
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
     * 创建血缘信息
     *
     * 创建血缘信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLineageInfoAsync($request)
    {
        return $this->createLineageInfoAsyncWithHttpInfo($request);
    }
    
    public function createLineageInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/lineage/lineage-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateLineageInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateLineageInfoRequest',
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
     * 创建或修改资产(邀测)
     *
     * 创建或修改资产，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrUpdateEntitiesAsync($request)
    {
        return $this->createOrUpdateEntitiesAsyncWithHttpInfo($request);
    }
    
    public function createOrUpdateEntitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateOrUpdateEntitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateOrUpdateEntitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 分配队列资源给指定空间
     *
     * 分配队列资源给指定空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityAssignedQueueAsync($request)
    {
        return $this->createSecurityAssignedQueueAsyncWithHttpInfo($request);
    }
    
    public function createSecurityAssignedQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission/queue/assigned-source';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityAssignedQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityAssignedQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 创建组合识别规则
     *
     * 创建组合识别规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityDataClassificationCombineRuleAsync($request)
    {
        return $this->createSecurityDataClassificationCombineRuleAsyncWithHttpInfo($request);
    }
    
    public function createSecurityDataClassificationCombineRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/combine';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationCombineRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationCombineRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建识别规则
     *
     * 创建识别规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityDataClassificationRuleAsync($request)
    {
        return $this->createSecurityDataClassificationRuleAsyncWithHttpInfo($request);
    }
    
    public function createSecurityDataClassificationRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建规则分组接口
     *
     * 创建规则分组接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityDataClassificationRuleGroupAsync($request)
    {
        return $this->createSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function createSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationRuleGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据脱敏策略
     *
     * 创建动态数据脱敏策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityDynamicMaskingPolicyAsync($request)
    {
        return $this->createSecurityDynamicMaskingPolicyAsyncWithHttpInfo($request);
    }
    
    public function createSecurityDynamicMaskingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/masking/dynamic/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDynamicMaskingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDynamicMaskingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建权限集
     *
     * 创建权限集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityPermissionSetAsync($request)
    {
        return $this->createSecurityPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function createSecurityPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 添加权限集成员
     *
     * 添加权限集成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityPermissionSetMemberAsync($request)
    {
        return $this->createSecurityPermissionSetMemberAsyncWithHttpInfo($request);
    }
    
    public function createSecurityPermissionSetMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 添加权限集的权限
     *
     * 添加权限集的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityPermissionSetPermissionAsync($request)
    {
        return $this->createSecurityPermissionSetPermissionAsyncWithHttpInfo($request);
    }
    
    public function createSecurityPermissionSetPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建空间资源权限策略
     *
     * 创建空间资源权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityResourcePermissionPolicyAsync($request)
    {
        return $this->createSecurityResourcePermissionPolicyAsyncWithHttpInfo($request);
    }
    
    public function createSecurityResourcePermissionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityResourcePermissionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityResourcePermissionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建密级
     *
     * 创建密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecuritySecrecyLevelAsync($request)
    {
        return $this->createSecuritySecrecyLevelAsyncWithHttpInfo($request);
    }
    
    public function createSecuritySecrecyLevelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/secrecy-level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecuritySecrecyLevelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecuritySecrecyLevelRequest',
            $asyncRequest = true);
    }

    /**
     * 创建服务目录
     *
     * 创建服务目录。 根目录编号为0。
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
     * 创建数据标准。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据标准模板
     *
     * 创建当前工作空间下的数据标准模板自定义项。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建主题
     *
     * 创建主题。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectRequest',
            $asyncRequest = true);
    }

    /**
     * 创建主题(新)
     *
     * 创建主题(新)。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectNewRequest',
            $asyncRequest = true);
    }

    /**
     * 创建表模型
     *
     * 在关系建模中创建一个表模型，包括逻辑实体和物理表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 新建模型工作区。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 测试数据开发连接细粒度连通性
     *
     * 测试数据开发连接细粒度连通性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function debugSecurityDlfDataWareHousesAsync($request)
    {
        return $this->debugSecurityDlfDataWareHousesAsyncWithHttpInfo($request);
    }
    
    public function debugSecurityDlfDataWareHousesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/fgac/dlf/datawarehouses/{dw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['dwId'] !== null) {
            $pathParams['dw_id'] = $localVarParams['dwId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugSecurityDlfDataWareHousesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugSecurityDlfDataWareHousesRequest',
            $asyncRequest = true);
    }

    /**
     * 驳回工单
     *
     * 驳回工单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function declineSecurityApplicationAsync($request)
    {
        return $this->declineSecurityApplicationAsyncWithHttpInfo($request);
    }
    
    public function declineSecurityApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-approve/reject/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeclineSecurityApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeclineSecurityApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用
     *
     * 删除应用。
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
     * 删除审批人。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
     * 删除业务指标。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除流程架构。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除码表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除汇总表
     *
     * 批量删除汇总表，只能删除状态为草稿、已线下、已驳回的表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignAggregationLogicTableAsync($request)
    {
        return $this->deleteDesignAggregationLogicTableAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignAggregationLogicTableAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignAggregationLogicTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignAggregationLogicTableRequest',
            $asyncRequest = true);
    }

    /**
     * 删除原子指标
     *
     * 批量删除原子指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignAtomicIndexAsync($request)
    {
        return $this->deleteDesignAtomicIndexAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignAtomicIndexAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignAtomicIndexResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignAtomicIndexRequest',
            $asyncRequest = true);
    }

    /**
     * 删除复合指标
     *
     * 根据ID集合删除复合指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignCompoundMetricAsync($request)
    {
        return $this->deleteDesignCompoundMetricAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignCompoundMetricAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignCompoundMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignCompoundMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 删除衍生指标
     *
     * 根据衍生指标ID，删除衍生指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignDerivativeIndexAsync($request)
    {
        return $this->deleteDesignDerivativeIndexAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignDerivativeIndexAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDerivativeIndexResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDerivativeIndexRequest',
            $asyncRequest = true);
    }

    /**
     * 删除维度
     *
     * 根据传入的维度ID，删除维度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignDimensionAsync($request)
    {
        return $this->deleteDesignDimensionAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignDimensionAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'data'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDimensionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDimensionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除维度表
     *
     * 根据维度表ID，删除维度表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignDimensionLogicTableAsync($request)
    {
        return $this->deleteDesignDimensionLogicTableAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignDimensionLogicTableAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDimensionLogicTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDimensionLogicTableRequest',
            $asyncRequest = true);
    }

    /**
     * 删除事实表
     *
     * 根据ID集合删除事实表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignFactLogicTableAsync($request)
    {
        return $this->deleteDesignFactLogicTableAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignFactLogicTableAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignFactLogicTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignFactLogicTableRequest',
            $asyncRequest = true);
    }

    /**
     * 删除实体下展
     *
     * 当已发布的实体被编辑时，其会生成下展，该接口用于删除实体的下展信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDesignLatestApprovalAsync($request)
    {
        return $this->deleteDesignLatestApprovalAsyncWithHttpInfo($request);
    }
    
    public function deleteDesignLatestApprovalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/business/{biz_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['bizId'] !== null) {
            $pathParams['biz_id'] = $localVarParams['bizId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignLatestApprovalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignLatestApprovalRequest',
            $asyncRequest = true);
    }

    /**
     * 删除目录
     *
     * 删除目录（数据标准、码表）。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除资产(邀测)
     *
     * 根据guid删除资产。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEntityAsync($request)
    {
        return $this->deleteEntityAsyncWithHttpInfo($request);
    }
    
    public function deleteEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities/guid/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteEntityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteEntityRequest',
            $asyncRequest = true);
    }

    /**
     * 删除当前空间下分配的队列资源
     *
     * 删除当前空间下分配的队列资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityAssignedQueueAsync($request)
    {
        return $this->deleteSecurityAssignedQueueAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityAssignedQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission/queue/assigned-source/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityAssignedQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityAssignedQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 删除识别规则
     *
     * 删除识别规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityDataClassificationRuleAsync($request)
    {
        return $this->deleteSecurityDataClassificationRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityDataClassificationRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityDataClassificationRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityDataClassificationRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除规则分组接口
     *
     * 删除规则分组接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityDataClassificationRuleGroupAsync($request)
    {
        return $this->deleteSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/group/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityDataClassificationRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityDataClassificationRuleGroupRequest',
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
     * 删除权限集
     *
     * 删除权限集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityPermissionSetAsync($request)
    {
        return $this->deleteSecurityPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定的id的密级
     *
     * 删除指定的id的密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecuritySecrecyLevelAsync($request)
    {
        return $this->deleteSecuritySecrecyLevelAsyncWithHttpInfo($request);
    }
    
    public function deleteSecuritySecrecyLevelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/secrecy-level/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecuritySecrecyLevelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecuritySecrecyLevelRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除目录
     *
     * 批量删除服务目录。
     * 删除目录的同时会删除其下的所有子目录，不支持删除带有API的目录。
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
     * 删除数据标准。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除数据标准模板。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除主题。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除主题(新)。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除表模型
     *
     * 在关系建模中删除一个表模型及其属性，包括逻辑实体和物理表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 删除模型工作区。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 发布任务包
     *
     * 发布任务包
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deployFactoryPackagesAsync($request)
    {
        return $this->deployFactoryPackagesAsyncWithHttpInfo($request);
    }
    
    public function deployFactoryPackagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/release-packages/deploy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeployFactoryPackagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeployFactoryPackagesRequest',
            $asyncRequest = true);
    }

    /**
     * 执行数据安全诊断
     *
     * 执行数据安全诊断。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeSecurityDiagnoseAsync($request)
    {
        return $this->executeSecurityDiagnoseAsyncWithHttpInfo($request);
    }
    
    public function executeSecurityDiagnoseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/diagnose/rescan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteSecurityDiagnoseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteSecurityDiagnoseRequest',
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
     * 导出模型中表的DDL语句
     *
     * 根据模型ID导出指定表的DDL语句。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportDesignModelTableDdlAsync($request)
    {
        return $this->exportDesignModelTableDdlAsyncWithHttpInfo($request);
    }
    
    public function exportDesignModelTableDdlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/workspaces/{model_id}/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tbNames'] !== null) {
            $queryParams['tb_names'] = $localVarParams['tbNames'];
        }
        if ($localVarParams['withDb'] !== null) {
            $queryParams['with_db'] = $localVarParams['withDb'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignModelTableDdlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignModelTableDdlRequest',
            $asyncRequest = true);
    }

    /**
     * 导出业务数据
     *
     * 根据请求参数，导出业务数据，可以导出：码表、数据标准、原子指标、衍生指标、复合指标、汇总表、业务指标、主题、流程、逻辑模型、物理模型、维度、事实表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportDesignModelsAsync($request)
    {
        return $this->exportDesignModelsAsyncWithHttpInfo($request);
    }
    
    public function exportDesignModelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/export-model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取excel导出结果
     *
     * 根据请求导出业务数据（/export-model）时返回的uuid，获取excel导出结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportDesignResultAsync($request)
    {
        return $this->exportDesignResultAsyncWithHttpInfo($request);
    }
    
    public function exportDesignResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/export-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignResultRequest',
            $asyncRequest = true);
    }

    /**
     * 导入主题
     *
     * 用于导入主题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importCatalogsAsync($request)
    {
        return $this->importCatalogsAsyncWithHttpInfo($request);
    }
    
    public function importCatalogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/catalogs/action';
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
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['skipExist'] !== null) {
            $queryParams['skip_exist'] = $localVarParams['skipExist'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportCatalogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportCatalogsRequest',
            $asyncRequest = true);
    }

    /**
     * 导入血缘(邀测)
     *
     * 血缘导入接口，一次性获取所有作业算子的血缘。该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importDataMapLineageAsync($request)
    {
        return $this->importDataMapLineageAsyncWithHttpInfo($request);
    }
    
    public function importDataMapLineageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/lineage/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataMapLineageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataMapLineageRequest',
            $asyncRequest = true);
    }

    /**
     * 血缘导入
     *
     * 血缘查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importLineageAsync($request)
    {
        return $this->importLineageAsyncWithHttpInfo($request);
    }
    
    public function importLineageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/lineage/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportLineageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportLineageRequest',
            $asyncRequest = true);
    }

    /**
     * 导入模型，关系建模，维度建模，码表，业务指标以及流程架构
     *
     * 导入模型，关系建模，维度建模，码表，业务指标以及流程架构。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importModelsAsync($request)
    {
        return $this->importModelsAsyncWithHttpInfo($request);
    }
    
    public function importModelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/models/action';
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
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['modelId'] !== null) {
            $queryParams['model_id'] = $localVarParams['modelId'];
        }
        if ($localVarParams['directoryId'] !== null) {
            $queryParams['directory_id'] = $localVarParams['directoryId'];
        }
        if ($localVarParams['skipExist'] !== null) {
            $queryParams['skip_exist'] = $localVarParams['skipExist'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportModelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportModelsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询导入结果
     *
     * 查询导入excel的处理结果（其中参数uuid获取为：/design/models/action或/design/catalogs/action接口返回结果）。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportResultRequest',
            $asyncRequest = true);
    }

    /**
     * 导入预置分类
     *
     * 导入预置分类。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importSecurityBuiltinCategoryGroupsAsync($request)
    {
        return $this->importSecurityBuiltinCategoryGroupsAsyncWithHttpInfo($request);
    }
    
    public function importSecurityBuiltinCategoryGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-category/import-builtin-category';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportSecurityBuiltinCategoryGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportSecurityBuiltinCategoryGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 初始化数据标准模板
     *
     * 初始化数据标准模板。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InitializeStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InitializeStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查找汇总表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找汇总表信息，中英文名称支持模糊查询。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAggregationLogicTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAggregationLogicTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前目录下的所有类型列表
     *
     * 获取当前目录下所有类型列表（包括api和目录，均以目录的数据格式形式展示）。
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
     * 获取数据标准集合
     *
     * 根据查询条件分页获取数据标准集合，按修改时间降序排序。
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
        if ($localVarParams['needPath'] !== null) {
            $queryParams['need_path'] = $localVarParams['needPath'];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllStandardsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllStandardsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询多种类型的表信息
     *
     * 从信息架构中查询多种类型的表信息，包括逻辑实体、物理表、维度表、事实表、汇总表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllTablesAsync($request)
    {
        return $this->listAllTablesAsyncWithHttpInfo($request);
    }
    
    public function listAllTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/all-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['bizCatalogIdList'] !== null) {
            $queryParams['biz_catalog_id_list'] = $localVarParams['bizCatalogIdList'];
        }
        if ($localVarParams['bizTypeList'] !== null) {
            $queryParams['biz_type_list'] = $localVarParams['bizTypeList'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前目录下的api列表
     *
     * 获取当前目录下的api列表。
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
     * 查询指定api 应用调用topN。
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
     * 获取网关分组。
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
     * 获取网关实例(专享版)
     *
     * 获取网关实例(专享版)。
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
     * 查询api 服务调用topN。
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
     * 查询申请列表。
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
     * 查询审批人列表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApproversResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApproversRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用列表
     *
     * 查询应用列表。
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
     * 查询app 服务使用topN。
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
     * 查看指标维度信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricDimensionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricDimensionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看指标责任人信息
     *
     * 查看指标责任人信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricOwnersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricOwnersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询业务指标信息
     *
     * 通过名称、创建者、修改时间分页查找业务指标信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取主题树信息
     *
     * 获取数据资产主题树信息l1，l2，l3。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBusinessResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBusinessRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前目录下的目录列表（全量）
     *
     * 获取当前目录下的目录列表（全量数据，不分页，推荐仅用于生成目录树等无法分页的场景）。
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
     * 获取所有目录树。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 空间资产目录树(邀测)
     *
     * 获取某空间下资产目录树。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCategoriesTreeAsync($request)
    {
        return $this->listCategoriesTreeAsyncWithHttpInfo($request);
    }
    
    public function listCategoriesTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/datamap/categories/workspace/{workspace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCategoriesTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCategoriesTreeRequest',
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
     * 通过中英文名称、创建者、审核人、状态、修改时间、l3Id分页查找复合指标信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCompoundMetricsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCompoundMetricsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找业务限定
     *
     * 通过中英文名称、描述、创建者、审核人、限定分组id、修改时间状态分页查找限定信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 查询数据服务集群访问日志列表
     *
     * 查询数据服务集群访问日志列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataServiceInstanceAccesslogsAsync($request)
    {
        return $this->listDataServiceInstanceAccesslogsAsyncWithHttpInfo($request);
    }
    
    public function listDataServiceInstanceAccesslogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/instances/{instance_id}/accesslog';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isApi'] !== null) {
            $queryParams['is_api'] = $localVarParams['isApi'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstanceAccesslogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstanceAccesslogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群详情信息列表
     *
     * 查询集群详情信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataServiceInstancesDetailAsync($request)
    {
        return $this->listDataServiceInstancesDetailAsyncWithHttpInfo($request);
    }
    
    public function listDataServiceInstancesDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createUser'] !== null) {
            $queryParams['create_user'] = $localVarParams['createUser'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstancesDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstancesDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群概览信息列表
     *
     * 查询集群概览信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataServiceInstancesOverviewAsync($request)
    {
        return $this->listDataServiceInstancesOverviewAsyncWithHttpInfo($request);
    }
    
    public function listDataServiceInstancesOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/instances/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createUser'] !== null) {
            $queryParams['create_user'] = $localVarParams['createUser'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstancesOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstancesOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务目录API列表
     *
     * 查询服务目录API列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataServiceMarketApisAsync($request)
    {
        return $this->listDataServiceMarketApisAsyncWithHttpInfo($request);
    }
    
    public function listDataServiceMarketApisAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/market';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceMarketApisResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceMarketApisRequest',
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
     * 通过中英文名称、创建者、审核人、状态、修改时间、l3Id分页查找衍生指标信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDerivativeIndexesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDerivativeIndexesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数仓分层信息
     *
     * 获取数仓分层信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDesignDataLayersAsync($request)
    {
        return $this->listDesignDataLayersAsyncWithHttpInfo($request);
    }
    
    public function listDesignDataLayersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/design/data-layers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDesignDataLayersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDesignDataLayersRequest',
            $asyncRequest = true);
    }

    /**
     * 查看维度颗粒度
     *
     * 查询维度颗粒度，依据tableId查询涉及所有维度，不传tableId查询所有维度组颗粒度。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找维度表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找维度表信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionLogicTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionLogicTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 查找维度
     *
     * 通过中英文名称、描述、创建者、审核人、状态、l3Id、衍生指标idList、修改时间分页查找维度信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有目录
     *
     * 获取所有目录(数据标准、码表)。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDirectoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDirectoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量获取资产信息(邀测)
     *
     * 批量获取资产信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEntityDetailsAsync($request)
    {
        return $this->listEntityDetailsAsyncWithHttpInfo($request);
    }
    
    public function listEntityDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities/guids';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListEntityDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListEntityDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找事实表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找事实表信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactLogicTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactLogicTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警通知记录
     *
     * 查询告警通知记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryAlarmInfoAsync($request)
    {
        return $this->listFactoryAlarmInfoAsyncWithHttpInfo($request);
    }
    
    public function listFactoryAlarmInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/alarm-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryAlarmInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryAlarmInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定作业的实例列表
     *
     * 查询指定作业的实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryJobInstancesByNameAsync($request)
    {
        return $this->listFactoryJobInstancesByNameAsyncWithHttpInfo($request);
    }
    
    public function listFactoryJobInstancesByNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/jobs/{job_name}/instances/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['minPlanTime'] !== null) {
            $queryParams['min_plan_time'] = $localVarParams['minPlanTime'];
        }
        if ($localVarParams['maxPlanTime'] !== null) {
            $queryParams['max_plan_time'] = $localVarParams['maxPlanTime'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['forceSuccess'] !== null) {
            $queryParams['force_success'] = $localVarParams['forceSuccess'];
        }
        if ($localVarParams['ignoreSuccess'] !== null) {
            $queryParams['ignore_success'] = $localVarParams['ignoreSuccess'];
        }
        if ($localVarParams['instanceType'] !== null) {
            $queryParams['instance_type'] = $localVarParams['instanceType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['jobName'] !== null) {
            $pathParams['job_name'] = $localVarParams['jobName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryJobInstancesByNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryJobInstancesByNameRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业列表
     *
     * 查询作业列表清单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryJobsAsync($request)
    {
        return $this->listFactoryJobsAsyncWithHttpInfo($request);
    }
    
    public function listFactoryJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询待发布包列表
     *
     * 查询待发布包列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryPendingItemsAsync($request)
    {
        return $this->listFactoryPendingItemsAsyncWithHttpInfo($request);
    }
    
    public function listFactoryPendingItemsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/pending-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['submitUserName'] !== null) {
            $queryParams['submit_user_name'] = $localVarParams['submitUserName'];
        }
        if ($localVarParams['itemName'] !== null) {
            $queryParams['item_name'] = $localVarParams['itemName'];
        }
        if ($localVarParams['updateType'] !== null) {
            $queryParams['update_type'] = $localVarParams['updateType'];
        }
        if ($localVarParams['taskType'] !== null) {
            $queryParams['task_type'] = $localVarParams['taskType'];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryPendingItemsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryPendingItemsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询发布包列表
     *
     * 查询发布包列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryReleasePackagesAsync($request)
    {
        return $this->listFactoryReleasePackagesAsyncWithHttpInfo($request);
    }
    
    public function listFactoryReleasePackagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/release-packages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryReleasePackagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryReleasePackagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询脚本列表
     *
     * 此接口用来查询脚本列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryScriptsAsync($request)
    {
        return $this->listFactoryScriptsAsyncWithHttpInfo($request);
    }
    
    public function listFactoryScriptsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/scripts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scriptName'] !== null) {
            $queryParams['script_name'] = $localVarParams['scriptName'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryScriptsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryScriptsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务完成情况
     *
     * 查询任务完成情况
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryTaskCompletionAsync($request)
    {
        return $this->listFactoryTaskCompletionAsyncWithHttpInfo($request);
    }
    
    public function listFactoryTaskCompletionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/monitor/task-completion-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryTaskCompletionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryTaskCompletionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例运行状态
     *
     * 查询实例运行状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFactoryTaskOverviewAsync($request)
    {
        return $this->listFactoryTaskOverviewAsyncWithHttpInfo($request);
    }
    
    public function listFactoryTaskOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/monitor/task-statistics-overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isOwn'] !== null) {
            $queryParams['is_own'] = $localVarParams['isOwn'];
        }
        if ($localVarParams['queryDays'] !== null) {
            $queryParams['query_days'] = $localVarParams['queryDays'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryTaskOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryTaskOverviewRequest',
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
     * 获取目录下逻辑实体(邀测)
     *
     * 获取主题目录下逻辑实体。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogicEntitiesAsync($request)
    {
        return $this->listLogicEntitiesAsyncWithHttpInfo($request);
    }
    
    public function listLogicEntitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/datamap/logicentitys/guid/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListLogicEntitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListLogicEntitiesRequest',
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
     * 查询审核中心的通知消息列表。与申请不同，通知类消息，无法驳回，仅能在指定的时间范围内作出处理。
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
     * 获取当前指标图谱。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 查询关系
     *
     * 通过关系名称(支持模糊查询)、创建人、开始时间、结束时间等分页查找关系信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 获取工单列表
     *
     * 获取工单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityApprovalsAsync($request)
    {
        return $this->listSecurityApprovalsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityApprovalsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/openapi/permission-approve/approvals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['proposerName'] !== null) {
            $queryParams['proposer_name'] = $localVarParams['proposerName'];
        }
        if ($localVarParams['approvalId'] !== null) {
            $queryParams['approval_id'] = $localVarParams['approvalId'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['statusList'] !== null) {
            $queryParams['status_list'] = $localVarParams['statusList'];
        }
        if ($localVarParams['applicationStartTime'] !== null) {
            $queryParams['application_start_time'] = $localVarParams['applicationStartTime'];
        }
        if ($localVarParams['applicationEndTime'] !== null) {
            $queryParams['application_end_time'] = $localVarParams['applicationEndTime'];
        }
        if ($localVarParams['orderByDesc'] !== null) {
            $queryParams['order_by_desc'] = $localVarParams['orderByDesc'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityApprovalsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityApprovalsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询当前空间下分配的队列资源
     *
     * 查询当前空间下分配的队列资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityAssignedQueuesAsync($request)
    {
        return $this->listSecurityAssignedQueuesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityAssignedQueuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission/queue/assigned-source';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityAssignedQueuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityAssignedQueuesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据分类列表
     *
     * 查询数据分类列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDataCategoriesAsync($request)
    {
        return $this->listSecurityDataCategoriesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDataCategoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-category';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataCategoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataCategoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则组列表
     *
     * 查询规则组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDataClassificationRuleGroupsAsync($request)
    {
        return $this->listSecurityDataClassificationRuleGroupsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDataClassificationRuleGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['desc'] !== null) {
            $queryParams['desc'] = $localVarParams['desc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataClassificationRuleGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataClassificationRuleGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询识别规则列表
     *
     * 查询识别规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDataClassificationRulesAsync($request)
    {
        return $this->listSecurityDataClassificationRulesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDataClassificationRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['secrecyLevel'] !== null) {
            $queryParams['secrecy_level'] = $localVarParams['secrecyLevel'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['enable'] !== null) {
            $queryParams['enable'] = $localVarParams['enable'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['desc'] !== null) {
            $queryParams['desc'] = $localVarParams['desc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataClassificationRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataClassificationRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据操作信息
     *
     * 查询数据操作信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDatasourceActionsAsync($request)
    {
        return $this->listSecurityDatasourceActionsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDatasourceActionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/datasource/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['parentPermissionSetId'] !== null) {
            $queryParams['parent_permission_set_id'] = $localVarParams['parentPermissionSetId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['schemaName'] !== null) {
            $queryParams['schema_name'] = $localVarParams['schemaName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['columnName'] !== null) {
            $queryParams['column_name'] = $localVarParams['columnName'];
        }
        if ($localVarParams['url'] !== null) {
            $queryParams['url'] = $localVarParams['url'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceActionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceActionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据源可配置权限
     *
     * 查询数据源可配置权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDatasourceConfigurationsAsync($request)
    {
        return $this->listSecurityDatasourceConfigurationsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDatasourceConfigurationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/datasource/configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceConfigurationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceConfigurationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询url信息
     *
     * 查询url信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDatasourceUrlsAsync($request)
    {
        return $this->listSecurityDatasourceUrlsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDatasourceUrlsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/datasource/urls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['parentPermissionSetId'] !== null) {
            $queryParams['parent_permission_set_id'] = $localVarParams['parentPermissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceUrlsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceUrlsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据开发细粒度连接列表（全量）
     *
     * 查询数据开发细粒度连接列表（全量）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDlfDataWareHousesAsync($request)
    {
        return $this->listSecurityDlfDataWareHousesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDlfDataWareHousesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/fgac/dlf/datawarehouses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDlfDataWareHousesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDlfDataWareHousesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询动态数据脱敏策略列表
     *
     * 查询动态数据脱敏策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityDynamicMaskingPoliciesAsync($request)
    {
        return $this->listSecurityDynamicMaskingPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityDynamicMaskingPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/masking/dynamic/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDynamicMaskingPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDynamicMaskingPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询我的权限
     *
     * 查询我的权限、空间账号权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityMemberPermissionAsync($request)
    {
        return $this->listSecurityMemberPermissionAsyncWithHttpInfo($request);
    }
    
    public function listSecurityMemberPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-governance/my-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['expireStatus'] !== null) {
            $queryParams['expire_status'] = $localVarParams['expireStatus'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户同步列表
     *
     * 查询用户同步列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityMemberSyncTasksAsync($request)
    {
        return $this->listSecurityMemberSyncTasksAsyncWithHttpInfo($request);
    }
    
    public function listSecurityMemberSyncTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/member-sync-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterType'] !== null) {
            $queryParams['cluster_type'] = $localVarParams['clusterType'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['scheduleStatus'] !== null) {
            $queryParams['schedule_status'] = $localVarParams['scheduleStatus'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberSyncTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberSyncTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户表权限清单
     *
     * 查询用户表权限清单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityMemberTablePermissionAsync($request)
    {
        return $this->listSecurityMemberTablePermissionAsyncWithHttpInfo($request);
    }
    
    public function listSecurityMemberTablePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/member-permission/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['feature'] !== null) {
            $queryParams['feature'] = $localVarParams['feature'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['schemaName'] !== null) {
            $queryParams['schema_name'] = $localVarParams['schemaName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['fuzzyTableName'] !== null) {
            $queryParams['fuzzy_table_name'] = $localVarParams['fuzzyTableName'];
        }
        if ($localVarParams['workspaceIds'] !== null) {
            $queryParams['workspace_ids'] = $localVarParams['workspaceIds'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberTablePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberTablePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集成员列表
     *
     * 查询权限集成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityPermissionSetMembersAsync($request)
    {
        return $this->listSecurityPermissionSetMembersAsyncWithHttpInfo($request);
    }
    
    public function listSecurityPermissionSetMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['memberName'] !== null) {
            $queryParams['member_name'] = $localVarParams['memberName'];
        }
        if ($localVarParams['memberType'] !== null) {
            $queryParams['member_type'] = $localVarParams['memberType'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集的权限列表
     *
     * 查询权限集的权限列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityPermissionSetPermissionsAsync($request)
    {
        return $this->listSecurityPermissionSetPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityPermissionSetPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionType'] !== null) {
            $queryParams['permission_type'] = $localVarParams['permissionType'];
        }
        if ($localVarParams['permissionAction'] !== null) {
            $queryParams['permission_action'] = $localVarParams['permissionAction'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['columnName'] !== null) {
            $queryParams['column_name'] = $localVarParams['columnName'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集列表
     *
     * 查询权限集列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityPermissionSetsAsync($request)
    {
        return $this->listSecurityPermissionSetsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityPermissionSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['typeFilter'] !== null) {
            $queryParams['type_filter'] = $localVarParams['typeFilter'];
        }
        if ($localVarParams['managerId'] !== null) {
            $queryParams['manager_id'] = $localVarParams['managerId'];
        }
        if ($localVarParams['managerName'] !== null) {
            $queryParams['manager_name'] = $localVarParams['managerName'];
        }
        if ($localVarParams['managerType'] !== null) {
            $queryParams['manager_type'] = $localVarParams['managerType'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['syncStatus'] !== null) {
            $queryParams['sync_status'] = $localVarParams['syncStatus'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询空间资源权限策略列表
     *
     * 查询空间资源权限策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityResourcePermissionsAsync($request)
    {
        return $this->listSecurityResourcePermissionsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityResourcePermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['memberName'] !== null) {
            $queryParams['member_name'] = $localVarParams['memberName'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityResourcePermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityResourcePermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询角色对一组库、表的权限交集
     *
     * 查询角色对一组库、表的权限交集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityRoleActionsAsync($request)
    {
        return $this->listSecurityRoleActionsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityRoleActionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/datasource/role/batch-actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityRoleActionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityRoleActionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取密级
     *
     * 获取密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecuritySecrecyLevelsAsync($request)
    {
        return $this->listSecuritySecrecyLevelsAsyncWithHttpInfo($request);
    }
    
    public function listSecuritySecrecyLevelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/secrecy-level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['desc'] !== null) {
            $queryParams['desc'] = $localVarParams['desc'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySecrecyLevelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySecrecyLevelsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询敏感数据发现详情
     *
     * 查询敏感数据发现详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecuritySensitiveDataDetailsAsync($request)
    {
        return $this->listSecuritySensitiveDataDetailsAsyncWithHttpInfo($request);
    }
    
    public function listSecuritySensitiveDataDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/sensitive-data/result/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['findStartTime'] !== null) {
            $queryParams['find_start_time'] = $localVarParams['findStartTime'];
        }
        if ($localVarParams['findEndTime'] !== null) {
            $queryParams['find_end_time'] = $localVarParams['findEndTime'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['orderByAsc'] !== null) {
            $queryParams['order_by_asc'] = $localVarParams['orderByAsc'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/xml'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySensitiveDataDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySensitiveDataDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询敏感数据发现概览结果(以分类和密级为单位)
     *
     * 查询敏感数据发现概览结果(以分类和密级为单位)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecuritySensitiveDataOverviewsAsync($request)
    {
        return $this->listSecuritySensitiveDataOverviewsAsyncWithHttpInfo($request);
    }
    
    public function listSecuritySensitiveDataOverviewsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/sensitive-data/result/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['datasource'] !== null) {
            $queryParams['datasource'] = $localVarParams['datasource'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $queryParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['schemaName'] !== null) {
            $queryParams['schema_name'] = $localVarParams['schemaName'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySensitiveDataOverviewsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySensitiveDataOverviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取表权限审批人列表
     *
     * 获取表权限审批人列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityTableApproversAsync($request)
    {
        return $this->listSecurityTableApproversAsyncWithHttpInfo($request);
    }
    
    public function listSecurityTableApproversAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-application/table/approvers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityTableApproversResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityTableApproversRequest',
            $asyncRequest = true);
    }

    /**
     * 查询不合理的权限配置
     *
     * 查询不合理的权限配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityUnreasonablePermissionsAsync($request)
    {
        return $this->listSecurityUnreasonablePermissionsAsyncWithHttpInfo($request);
    }
    
    public function listSecurityUnreasonablePermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/diagnose/unreasonable-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['diagnoseId'] !== null) {
            $queryParams['diagnose_id'] = $localVarParams['diagnoseId'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityUnreasonablePermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityUnreasonablePermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户对表的权限
     *
     * 查询用户对表的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityUserTablePermissionAsync($request)
    {
        return $this->listSecurityUserTablePermissionAsyncWithHttpInfo($request);
    }
    
    public function listSecurityUserTablePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-application/user-table-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityUserTablePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityUserTablePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取主题层级
     *
     * 获取主题层级。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSubjectLevelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSubjectLevelsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询模型下所有关系
     *
     * 查询模型下所有关系。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelRelationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelRelationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找表模型列表
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找关系建模中的表模型信息，包括逻辑实体、物理表和其属性。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 获取当前空间下的全部模型信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定用户所有的工作空间集合
     *
     * 获取指定用户所有的工作空间集合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkspacesForUserAsync($request)
    {
        return $this->listWorkspacesForUserAsyncWithHttpInfo($request);
    }
    
    public function listWorkspacesForUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/{instance_id}/workspaces/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesForUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesForUserRequest',
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
     * 批量移动api至新目录。
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
     * 移动当前目录至新目录。
     * 移动目录的的同时会移动其下的所有子目录与api。
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
     * 修改自定义项（包括表自定义项、属性自定义项、主题自定义项、业务指标自定义项）。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
     * 创建或更新安全管理员
     *
     * 创建或更新安全管理员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifySecurityAdminAsync($request)
    {
        return $this->modifySecurityAdminAsyncWithHttpInfo($request);
    }
    
    public function modifySecurityAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/admin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModifySecurityAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModifySecurityAdminRequest',
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
     * 删除标签
     *
     * 根据资产（表或属性）的ID删除资产标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeDesignEntityTagsAsync($request)
    {
        return $this->removeDesignEntityTagsAsyncWithHttpInfo($request);
    }
    
    public function removeDesignEntityTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/{entity_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['attrId'] !== null) {
            $queryParams['attr_id'] = $localVarParams['attrId'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['entityId'] !== null) {
            $pathParams['entity_id'] = $localVarParams['entityId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RemoveDesignEntityTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RemoveDesignEntityTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 清空质量规则
     *
     * 清空表的质量规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeDesignQualityInfosAsync($request)
    {
        return $this->removeDesignQualityInfosAsyncWithHttpInfo($request);
    }
    
    public function removeDesignQualityInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/{table_id}/qualities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tableType'] !== null) {
            $queryParams['table_type'] = $localVarParams['tableType'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['tableId'] !== null) {
            $pathParams['table_id'] = $localVarParams['tableId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RemoveDesignQualityInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RemoveDesignQualityInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 指定字段采集概要
     *
     * 指定字段采集概要信息接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function renewDataProfileAsync($request)
    {
        return $this->renewDataProfileAsyncWithHttpInfo($request);
    }
    
    public function renewDataProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/profile/columns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RenewDataProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RenewDataProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 关联属性与数据标准
     *
     * 关联属性与数据标准。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 重跑作业实例
     *
     * 支持重跑作业实例以及上下游的作业实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryFactoryJobInstanceAsync($request)
    {
        return $this->retryFactoryJobInstanceAsyncWithHttpInfo($request);
    }
    
    public function retryFactoryJobInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/jobs/{job_name}/instances/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['jobName'] !== null) {
            $pathParams['job_name'] = $localVarParams['jobName'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 撤回审批单
     *
     * 撤回审批单。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 获取审批单。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchApprovalsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchApprovalsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找原子指标
     *
     * 通过中英文名称、创建者、审核人、状态、修改时间分页查找原子指标信息看，中英文名称支持模糊查询。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAtomicIndexesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAtomicIndexesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API已授权的APP
     *
     * 查询API已授权的APP。
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
     * 查询APP已拥有授权的API。
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
     * 查询流程架构列表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCatalogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCatalogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看码表字段值
     *
     * 查看码表字段值。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTableValuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTableValuesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询码表列表
     *
     * 查询码表列表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义项
     *
     * 查询自定义项（包括表自定义项、属性自定义项、主题自定义项、业务指标自定义项）。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCustomizedFieldsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCustomizedFieldsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取下展信息与已发布实体的差异
     *
     * 当已发布的实体被编辑时，其会生成下展，该接口用于获取下展信息与已发布实体的差异。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDesignLatestApprovalDiffAsync($request)
    {
        return $this->searchDesignLatestApprovalDiffAsyncWithHttpInfo($request);
    }
    
    public function searchDesignLatestApprovalDiffAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/approvals/business/{biz_id}/diff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['bizId'] !== null) {
            $pathParams['biz_id'] = $localVarParams['bizId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDesignLatestApprovalDiffResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDesignLatestApprovalDiffRequest',
            $asyncRequest = true);
    }

    /**
     * 获取数据连接信息
     *
     * 获取指定类型下的数据连接信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDwByTypeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDwByTypeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询目的表和字段(待下线)
     *
     * 查询目的表和字段(待下线)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchFieldsForRelationAsync($request)
    {
        return $this->searchFieldsForRelationAsyncWithHttpInfo($request);
    }
    
    public function searchFieldsForRelationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/{model_id}/table-model/relation/fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchFieldsForRelationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchFieldsForRelationRequest',
            $asyncRequest = true);
    }

    /**
     * 通过路径获取id
     *
     * 通过路径获取id。
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
     * 获取计算维度成本列表信息
     *
     * 获取计算维度成本列表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchSgcComputeDimensionsAsync($request)
    {
        return $this->searchSgcComputeDimensionsAsyncWithHttpInfo($request);
    }
    
    public function searchSgcComputeDimensionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/costmgmt/{instance_id}/{workspace_id}/compute-dimension';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['nodeCreatorName'] !== null) {
            $queryParams['node_creator_name'] = $localVarParams['nodeCreatorName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['nodeType'] !== null) {
            $queryParams['node_type'] = $localVarParams['nodeType'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSgcComputeDimensionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSgcComputeDimensionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查找主题列表
     *
     * 通过名称（支持模糊查询）、创建者、责任人、状态、修改时间分页查找主题。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectRequest',
            $asyncRequest = true);
    }

    /**
     * 查找主题列表(新)
     *
     * 查找主题(新)。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectNewRequest',
            $asyncRequest = true);
    }

    /**
     * 查找版本信息
     *
     * 通过名称、创建者、修改时间查找版本信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 设置作业标签
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setFactoryJobTagsAsync($request)
    {
        return $this->setFactoryJobTagsAsyncWithHttpInfo($request);
    }
    
    public function setFactoryJobTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/jobs/{job_name}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SetFactoryJobTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SetFactoryJobTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看汇总表详情
     *
     * 通过ID查看汇总表的详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAggregationLogicTableByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAggregationLogicTableByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定api 仪表板数据详情
     *
     * 查询指定api 仪表板数据详情。
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
     * 查询api 仪表板数据详情。
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
     * 查询api 统计数据详情。
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
     * 查询统计用户相关的总览开发指标。
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
     * 查询应用详情。
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
     * 获取申请详情。
     * 此功能仅用作信息详情展示，不用做业务处理，因此不展示编号等后台参数。
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
     * 查询app 仪表板数据详情。
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
     * 查询app 统计数据详情。
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
     * 查询统计用户相关的总览调用指标。
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
     * 通过ID获取原子指标详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAtomicIndexByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAtomicIndexByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查找流程架构详情
     *
     * 查找流程架构详情。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizCatalogDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizCatalogDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查看指标详情
     *
     * 通过ID查看指标的详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 查询业务资产目录树
     *
     * 逐级查询业务资产目录树,包含数据规范同步过来的业务对象和逻辑实体。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBusinessAssetsTreeAsync($request)
    {
        return $this->showBusinessAssetsTreeAsyncWithHttpInfo($request);
    }
    
    public function showBusinessAssetsTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/business-assets/tree/subnode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['guid'] !== null) {
            $queryParams['guid'] = $localVarParams['guid'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务目录
     *
     * 查询服务目录。
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
     * 通过ID查看码表的详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCodeTableByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCodeTableByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看复合指标详情
     *
     * 通过ID获取复合指标详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCompoundMetricByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCompoundMetricByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看限定详情
     *
     * 通过ID查看限定详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 资产详情(邀测)
     *
     * 资产详情接口，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataDetailAsync($request)
    {
        return $this->showDataDetailAsyncWithHttpInfo($request);
    }
    
    public function showDataDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities/guid/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ignoreRelationships'] !== null) {
            $queryParams['ignore_relationships'] = $localVarParams['ignoreRelationships'];
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 表数据预览
     *
     * 表数据预览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataPreviewAsync($request)
    {
        return $this->showDataPreviewAsyncWithHttpInfo($request);
    }
    
    public function showDataPreviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/entities/guid/{guid}/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dataConnectionId'] !== null) {
            $queryParams['data_connection_id'] = $localVarParams['dataConnectionId'];
        }
        if ($localVarParams['dataType'] !== null) {
            $queryParams['data_type'] = $localVarParams['dataType'];
        }
        if ($localVarParams['database'] !== null) {
            $queryParams['database'] = $localVarParams['database'];
        }
        if ($localVarParams['schema'] !== null) {
            $queryParams['schema'] = $localVarParams['schema'];
        }
        if ($localVarParams['table'] !== null) {
            $queryParams['table'] = $localVarParams['table'];
        }
        if ($localVarParams['datasourceWorkspaceId'] !== null) {
            $queryParams['datasource_workspace_id'] = $localVarParams['datasourceWorkspaceId'];
        }
        if ($localVarParams['partitionsCondition'] !== null) {
            $queryParams['partitions_condition'] = $localVarParams['partitionsCondition'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataPreviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataPreviewRequest',
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
     * 查询集群详情信息
     *
     * 查询集群详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataServiceInstanceAsync($request)
    {
        return $this->showDataServiceInstanceAsyncWithHttpInfo($request);
    }
    
    public function showDataServiceInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataServiceInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataServiceInstanceRequest',
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
     * 资产血缘(邀测)
     *
     * 资产血缘接口，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDatamapLineageAsync($request)
    {
        return $this->showDatamapLineageAsyncWithHttpInfo($request);
    }
    
    public function showDatamapLineageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/datamap/lineage/guid/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['relationshipTypes'] !== null) {
            $queryParams['relationship_types'] = $localVarParams['relationshipTypes'];
        }
        if ($localVarParams['relationshipTypeCategories'] !== null) {
            $queryParams['relationship_type_categories'] = $localVarParams['relationshipTypeCategories'];
        }
        if ($localVarParams['relatedEntityTypes'] !== null) {
            $queryParams['related_entity_types'] = $localVarParams['relatedEntityTypes'];
        }
        if ($localVarParams['extendProcessDataFlow'] !== null) {
            $queryParams['extend_process_data_flow'] = $localVarParams['extendProcessDataFlow'];
        }
        if ($localVarParams['includeParentEntity'] !== null) {
            $queryParams['include_parent_entity'] = $localVarParams['includeParentEntity'];
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDatamapLineageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDatamapLineageRequest',
            $asyncRequest = true);
    }

    /**
     * 查看衍生指标详情
     *
     * 通过ID获取衍生详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDerivativeIndexByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDerivativeIndexByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取操作结果
     *
     * 获取批量操作的结果，如逻辑模型转物理模型和逆向数据库操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDesignOperationResultAsync($request)
    {
        return $this->showDesignOperationResultAsyncWithHttpInfo($request);
    }
    
    public function showDesignOperationResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/design/operation-results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['operationType'] !== null) {
            $queryParams['operation_type'] = $localVarParams['operationType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['operationId'] !== null) {
            $queryParams['operation_id'] = $localVarParams['operationId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDesignOperationResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDesignOperationResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查看维度详情
     *
     * 通过ID查看维度详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看维度表详情
     *
     * 通过ID查看维度表的详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 通过ID查看事实表的详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 全局搜索
     *
     * 全局搜索
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactoryFullTextAsync($request)
    {
        return $this->showFactoryFullTextAsyncWithHttpInfo($request);
    }
    
    public function showFactoryFullTextAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['searchText'] !== null) {
            $queryParams['search_text'] = $localVarParams['searchText'];
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['scriptType'] !== null) {
            $queryParams['script_type'] = $localVarParams['scriptType'];
        }
        if ($localVarParams['nodeType'] !== null) {
            $queryParams['node_type'] = $localVarParams['nodeType'];
        }
        if ($localVarParams['newSaveOrCommit'] !== null) {
            $queryParams['new_save_or_commit'] = $localVarParams['newSaveOrCommit'];
        }
        if ($localVarParams['owners'] !== null) {
            $queryParams['owners'] = $localVarParams['owners'];
        }
        if ($localVarParams['docTypes'] !== null) {
            $queryParams['doc_types'] = $localVarParams['docTypes'];
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
        if ($localVarParams['ifQueryParameters'] !== null) {
            $queryParams['if_query_parameters'] = $localVarParams['ifQueryParameters'];
        }
        if ($localVarParams['matchType'] !== null) {
            $queryParams['match_type'] = $localVarParams['matchType'];
        }
        if ($localVarParams['scheduleState'] !== null) {
            $queryParams['schedule_state'] = $localVarParams['scheduleState'];
        }
        if ($localVarParams['isExact'] !== null) {
            $queryParams['is_exact'] = $localVarParams['isExact'];
        }
        if ($localVarParams['exactField'] !== null) {
            $queryParams['exact_field'] = $localVarParams['exactField'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryFullTextResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryFullTextRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定发布包详情
     *
     * 查询指定发布包详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactoryPackageDetailAsync($request)
    {
        return $this->showFactoryPackageDetailAsyncWithHttpInfo($request);
    }
    
    public function showFactoryPackageDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/factory/release-packages/{package_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['packageId'] !== null) {
            $pathParams['package_id'] = $localVarParams['packageId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryPackageDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryPackageDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询补数据实例
     *
     * 查询补数据实例
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
     * 产出信息(邀测)
     *
     * 查询表相关的作业算子运行实例信息，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceInfosAsync($request)
    {
        return $this->showInstanceInfosAsyncWithHttpInfo($request);
    }
    
    public function showInstanceInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/node/{task_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceInfosRequest',
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
     * 血缘查询
     *
     * 血缘查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLineageAsync($request)
    {
        return $this->showLineageAsyncWithHttpInfo($request);
    }
    
    public function showLineageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/entities/{guid}/lineage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['depth'] !== null) {
            $queryParams['depth'] = $localVarParams['depth'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowLineageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowLineageRequest',
            $asyncRequest = true);
    }

    /**
     * 批量血缘(邀测)
     *
     * 批量血缘接口，根据作业算子分页批量查询血缘。该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLineageBulkAsync($request)
    {
        return $this->showLineageBulkAsyncWithHttpInfo($request);
    }
    
    public function showLineageBulkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/lineage/bulk';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowLineageBulkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowLineageBulkRequest',
            $asyncRequest = true);
    }

    /**
     * 获取消息详情
     *
     * 获取消息详情。此功能仅用作信息详情展示，不用做业务处理，因此不展示编号等后台参数。
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
     * 表关联作业算子列表(邀测)
     *
     * 查询表相关的作业算子列表，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNodesAsync($request)
    {
        return $this->showNodesAsyncWithHttpInfo($request);
    }
    
    public function showNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/table/{guid}/node';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowNodesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowNodesRequest',
            $asyncRequest = true);
    }

    /**
     * 通过id获取路径
     *
     * 通过id获取路径。
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
     * 通过目录id获取路径对象。
     * 通过目录id获取从根目录至当前目录链路上每一层的路径信息。
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
     * 获取队列(邀测)
     *
     * 队列列表，展示10条数据，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQueuesAsync($request)
    {
        return $this->showQueuesAsyncWithHttpInfo($request);
    }
    
    public function showQueuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities/queue';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowQueuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowQueuesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看关系详情
     *
     * 通过ID获取关系详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowRelationByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowRelationByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看安全管理员
     *
     * 查看安全管理员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityAdminAsync($request)
    {
        return $this->showSecurityAdminAsyncWithHttpInfo($request);
    }
    
    public function showSecurityAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/admin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityAdminRequest',
            $asyncRequest = true);
    }

    /**
     * 查询特定识别规则
     *
     * 查询特定识别规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityDataClassificationRuleAsync($request)
    {
        return $this->showSecurityDataClassificationRuleAsyncWithHttpInfo($request);
    }
    
    public function showSecurityDataClassificationRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDataClassificationRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDataClassificationRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则组
     *
     * 查询规则组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityDataClassificationRuleGroupAsync($request)
    {
        return $this->showSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function showSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/group/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDataClassificationRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDataClassificationRuleGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据源防护模块诊断结果
     *
     * 查询数据源防护模块诊断结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityDatasourceProtectionDiagnoseResultAsync($request)
    {
        return $this->showSecurityDatasourceProtectionDiagnoseResultAsyncWithHttpInfo($request);
    }
    
    public function showSecurityDatasourceProtectionDiagnoseResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/diagnose/datasource-protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDatasourceProtectionDiagnoseResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDatasourceProtectionDiagnoseResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询某个脱敏策略的详细信息
     *
     * 查询某个脱敏策略的详细信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityDynamicMaskingPolicyAsync($request)
    {
        return $this->showSecurityDynamicMaskingPolicyAsyncWithHttpInfo($request);
    }
    
    public function showSecurityDynamicMaskingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/masking/dynamic/policies/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDynamicMaskingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDynamicMaskingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个用户同步任务
     *
     * 查询单个用户同步任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityMemberSyncTaskAsync($request)
    {
        return $this->showSecurityMemberSyncTaskAsyncWithHttpInfo($request);
    }
    
    public function showSecurityMemberSyncTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/member-sync-tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityMemberSyncTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityMemberSyncTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询未进行静态脱敏任务的表信息
     *
     * 查询未进行静态脱敏任务的表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityNoMaskingTableResultAsync($request)
    {
        return $this->showSecurityNoMaskingTableResultAsyncWithHttpInfo($request);
    }
    
    public function showSecurityNoMaskingTableResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/diagnose/masking-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['diagnoseId'] !== null) {
            $queryParams['diagnose_id'] = $localVarParams['diagnoseId'];
        }
        if ($localVarParams['datasourceType'] !== null) {
            $queryParams['datasource_type'] = $localVarParams['datasourceType'];
        }
        if ($localVarParams['database'] !== null) {
            $queryParams['database'] = $localVarParams['database'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityNoMaskingTableResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityNoMaskingTableResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据权限控制模块诊断结果
     *
     * 查询数据权限控制模块诊断结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityPermissionManagementDiagnoseResultAsync($request)
    {
        return $this->showSecurityPermissionManagementDiagnoseResultAsyncWithHttpInfo($request);
    }
    
    public function showSecurityPermissionManagementDiagnoseResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/diagnose/permission-management';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityPermissionManagementDiagnoseResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityPermissionManagementDiagnoseResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集
     *
     * 查询权限集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityPermissionSetAsync($request)
    {
        return $this->showSecurityPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function showSecurityPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个资源权限策略
     *
     * 查询单个资源权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityResourcePermissionPolicyAsync($request)
    {
        return $this->showSecurityResourcePermissionPolicyAsyncWithHttpInfo($request);
    }
    
    public function showSecurityResourcePermissionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-resource/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityResourcePermissionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityResourcePermissionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 根据指定的id查询密级
     *
     * 根据指定的id查询密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecuritySecrecyLevelAsync($request)
    {
        return $this->showSecuritySecrecyLevelAsyncWithHttpInfo($request);
    }
    
    public function showSecuritySecrecyLevelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/secrecy-level/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecuritySecrecyLevelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecuritySecrecyLevelRequest',
            $asyncRequest = true);
    }

    /**
     * 查询敏感数据保护模块诊断结果
     *
     * 查询敏感数据保护模块诊断结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecuritySensitiveDataDiagnoseResultAsync($request)
    {
        return $this->showSecuritySensitiveDataDiagnoseResultAsyncWithHttpInfo($request);
    }
    
    public function showSecuritySensitiveDataDiagnoseResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/diagnose/sensitive-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecuritySensitiveDataDiagnoseResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecuritySensitiveDataDiagnoseResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查看数据标准详情
     *
     * 通过ID获取数据标准详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据标准模板
     *
     * 查询当前工作空间下的数据标准模板。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 数据预览(邀测)
     *
     * 表数据预览，展示10条数据，该接口功能处于邀测阶段，后续将随功能公测将逐步开放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTableDataAsync($request)
    {
        return $this->showTableDataAsyncWithHttpInfo($request);
    }
    
    public function showTableDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/datamap/entities/guid/{guid}/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dataConnectionId'] !== null) {
            $queryParams['data_connection_id'] = $localVarParams['dataConnectionId'];
        }
        if ($localVarParams['sourceType'] !== null) {
            $queryParams['source_type'] = $localVarParams['sourceType'];
        }
        if ($localVarParams['database'] !== null) {
            $queryParams['database'] = $localVarParams['database'];
        }
        if ($localVarParams['schema'] !== null) {
            $queryParams['schema'] = $localVarParams['schema'];
        }
        if ($localVarParams['table'] !== null) {
            $queryParams['table'] = $localVarParams['table'];
        }
        if ($localVarParams['queue'] !== null) {
            $queryParams['queue'] = $localVarParams['queue'];
        }
        if ($localVarParams['instance'] !== null) {
            $headerParams['instance'] = $localVarParams['instance'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTableDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTableDataRequest',
            $asyncRequest = true);
    }

    /**
     * 查看表模型详情
     *
     * 通过ID获取模型表详情信息。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 查询物理模型或逻辑模型的工作区空间详情。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['modelId'] !== null) {
            $pathParams['model_id'] = $localVarParams['modelId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkspaceDetailByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkspaceDetailByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 停止补数据实例
     *
     * 停止补数据实例
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StopFactorySupplementDataInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StopFactorySupplementDataInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 撤回工单申请
     *
     * 撤回工单申请
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unpublishSecurityApplicationAsync($request)
    {
        return $this->unpublishSecurityApplicationAsyncWithHttpInfo($request);
    }
    
    public function unpublishSecurityApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-application/applications/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UnpublishSecurityApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UnpublishSecurityApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用
     *
     * 更新应用。
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
     * 更新业务指标。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 更新服务目录。
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
     * 修改码表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 编辑码表字段值。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 开启数据服务集群LTS日志转储
     *
     * 开启数据服务集群LTS日志转储。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDataServiceInstanceLtsLogAsync($request)
    {
        return $this->updateDataServiceInstanceLtsLogAsyncWithHttpInfo($request);
    }
    
    public function updateDataServiceInstanceLtsLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/instances/{instance_id}/lts-log-dump';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataServiceInstanceLtsLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataServiceInstanceLtsLogRequest',
            $asyncRequest = true);
    }

    /**
     * 开启数据服务集群OBS日志转储
     *
     * 开启数据服务集群OBS日志转储。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDataServiceInstanceObsLogAsync($request)
    {
        return $this->updateDataServiceInstanceObsLogAsyncWithHttpInfo($request);
    }
    
    public function updateDataServiceInstanceObsLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/instances/{instance_id}/obs-log-dump';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataServiceInstanceObsLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataServiceInstanceObsLogRequest',
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
     * 更新汇总表
     *
     * 更新汇总表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignAggregationLogicTableAsync($request)
    {
        return $this->updateDesignAggregationLogicTableAsyncWithHttpInfo($request);
    }
    
    public function updateDesignAggregationLogicTableAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignAggregationLogicTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignAggregationLogicTableRequest',
            $asyncRequest = true);
    }

    /**
     * 更新原子指标
     *
     * 更新单个原子指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignAtomicIndexAsync($request)
    {
        return $this->updateDesignAtomicIndexAsyncWithHttpInfo($request);
    }
    
    public function updateDesignAtomicIndexAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignAtomicIndexResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignAtomicIndexRequest',
            $asyncRequest = true);
    }

    /**
     * 更新复合指标
     *
     * 根据参数，更新复合指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignCompoundMetricAsync($request)
    {
        return $this->updateDesignCompoundMetricAsyncWithHttpInfo($request);
    }
    
    public function updateDesignCompoundMetricAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignCompoundMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignCompoundMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 修改或删除数仓分层
     *
     * 修改或删除数仓分层
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignDataLayersAsync($request)
    {
        return $this->updateDesignDataLayersAsyncWithHttpInfo($request);
    }
    
    public function updateDesignDataLayersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/design/data-layers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDataLayersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDataLayersRequest',
            $asyncRequest = true);
    }

    /**
     * 更新衍生指标
     *
     * 根据传入参数，更新衍生指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignDerivativeIndexAsync($request)
    {
        return $this->updateDesignDerivativeIndexAsyncWithHttpInfo($request);
    }
    
    public function updateDesignDerivativeIndexAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDerivativeIndexResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDerivativeIndexRequest',
            $asyncRequest = true);
    }

    /**
     * 更新维度
     *
     * 根据参数，更新维度信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignDimensionAsync($request)
    {
        return $this->updateDesignDimensionAsyncWithHttpInfo($request);
    }
    
    public function updateDesignDimensionAsyncWithHttpInfo($request){
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
        if ($localVarParams['workspace'] !== null) {
            $headerParams['workspace'] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDimensionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDimensionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新表的异常数据输出配置
     *
     * 更新表的异常数据输出配置，包括是否生成异常数据、设置异常数据数据库或Schema、设置异常表表前缀/表后缀。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDesignTableQualityAsync($request)
    {
        return $this->updateDesignTableQualityAsyncWithHttpInfo($request);
    }
    
    public function updateDesignTableQualityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/design/{table_id}/qualities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['tableId'] !== null) {
            $pathParams['table_id'] = $localVarParams['tableId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignTableQualityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignTableQualityRequest',
            $asyncRequest = true);
    }

    /**
     * 修改目录
     *
     * 修改目录（数据标准、码表）。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 修改资产指定属性
     *
     * 修改资产指定属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEntityAttributeAsync($request)
    {
        return $this->updateEntityAttributeAsyncWithHttpInfo($request);
    }
    
    public function updateEntityAttributeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/asset/guid/{guid}/attribute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['attrName'] !== null) {
            $queryParams['attr_name'] = $localVarParams['attrName'];
        }
        if ($localVarParams['attrValue'] !== null) {
            $queryParams['attr_value'] = $localVarParams['attrValue'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateEntityAttributeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateEntityAttributeRequest',
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
     * 修改当前空间下分配的队列资源
     *
     * 修改当前空间下分配的队列资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityAssignedQueueAsync($request)
    {
        return $this->updateSecurityAssignedQueueAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityAssignedQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission/queue/assigned-source/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityAssignedQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityAssignedQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 修改组合识别规则
     *
     * 修改组合识别规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityDataClassificationCombineRuleAsync($request)
    {
        return $this->updateSecurityDataClassificationCombineRuleAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityDataClassificationCombineRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/combine/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationCombineRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationCombineRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 修改识别规则接口
     *
     * 修改识别规则接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityDataClassificationRuleAsync($request)
    {
        return $this->updateSecurityDataClassificationRuleAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityDataClassificationRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 修改规则分组接口
     *
     * 修改规则分组接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityDataClassificationRuleGroupAsync($request)
    {
        return $this->updateSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityDataClassificationRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/group/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationRuleGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新动态数据脱敏策略
     *
     * 更新动态数据脱敏策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityDynamicMaskingPolicyAsync($request)
    {
        return $this->updateSecurityDynamicMaskingPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityDynamicMaskingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/masking/dynamic/policies/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDynamicMaskingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDynamicMaskingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 批量变更权限有效期
     *
     * 批量变更权限有效期
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityMemberPermissionExpireTimeAsync($request)
    {
        return $this->updateSecurityMemberPermissionExpireTimeAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityMemberPermissionExpireTimeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-governance/batch-update-expire-time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityMemberPermissionExpireTimeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityMemberPermissionExpireTimeRequest',
            $asyncRequest = true);
    }

    /**
     * 更新权限集
     *
     * 更新权限集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityPermissionSetAsync($request)
    {
        return $this->updateSecurityPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 更新权限集的权限
     *
     * 更新权限集的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityPermissionSetPermissionAsync($request)
    {
        return $this->updateSecurityPermissionSetPermissionAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityPermissionSetPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-sets/{permission_set_id}/permissions/{permission_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
        }
        if ($localVarParams['permissionId'] !== null) {
            $pathParams['permission_id'] = $localVarParams['permissionId'];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityPermissionSetPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityPermissionSetPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新空间资源权限策略
     *
     * 更新空间资源权限策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityResourcePermissionPolicyAsync($request)
    {
        return $this->updateSecurityResourcePermissionPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityResourcePermissionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/permission-resource/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityResourcePermissionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityResourcePermissionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改识别规则状态接口
     *
     * 修改识别规则状态接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityRuleEnableStatusAsync($request)
    {
        return $this->updateSecurityRuleEnableStatusAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityRuleEnableStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/rule/switch-status/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityRuleEnableStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityRuleEnableStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 根据指定的id修改密级
     *
     * 根据指定的id修改密级
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecuritySecrecyLevelAsync($request)
    {
        return $this->updateSecuritySecrecyLevelAsyncWithHttpInfo($request);
    }
    
    public function updateSecuritySecrecyLevelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/security/data-classification/secrecy-level/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecuritySecrecyLevelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecuritySecrecyLevelRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据标准
     *
     * 修改数据标准。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
     * 修改数据标准模板。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 修改主题。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 修改主题(新)。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 更新表模型
     *
     * 在关系建模中更新一个表模型及其属性，包括逻辑实体和物理表。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * 更新模型工作区。
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
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
     * - API主动授权：  API审核人可发起，API主动授权成功后，在有效期内，APP即可访问该API。API授权包含授权和续约两部分功能。
     * * 授权：授权会给予APP在有效期内访问API的权利。
     * * 续约：续约会更新授权有效期，仅支持延长有效期，不能减少。
     * - API解除授权：  API审核人可发起，解除API对APP的授权关系。解除授权后，APP将不再能够调用该API。API解除已授权的APP关系，需要为APP预留至少2天的准备时间。
     * - APP解除授权：  APP所有者可发起，解除API对APP的授权关系。解除授权后，APP将不再能够调用该API。APP解除自己的授权关系，无需预留准备时间。
     * - APP申请授权：  APP所有者可发起，APP申请API后，待API的审核人完成审核，APP即可访问该API。授权会给予APP在有效期内访问API的权利，需要API审核。
     * - APP申请续约：  APP所有者可发起，续约会更新授权有效期，仅支持延长有效期，不能减少，需要API审核。
     * &gt; * 申请自己的API推荐采用API主动授权/续约，无需审核。
     * &gt; * 自己的应用推荐采用APP解除授权，无需预留准备时间。
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
     * 批量授权API(专享版)
     *
     * APP创建成功后，还不能访问API，如果想要访问某个API，需要将该API授权给APP。API主动授权成功后，在有效期内，APP即可访问该API。
     * API授权包含授权和续约两部分功能。
     * - 授权：授权会给予APP在有效期内访问API的权利。
     * - 续约：续约会更新授权有效期，仅支持延长有效期，不能减少。
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
     * 创建API。
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
     * 调试API。
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
     * 批量删除API。
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
     * - 下线API。将已发布的API下线。下线后，所有授权关系都会被解除，API将无法再被调用。
     * - 停用API。将已发布的API临时下线。下线后，授权关系会保留，停用期间API将无法再被调用。
     * - 恢复API。将已停用的API恢复使用。恢复后， API重新提供调用。
     * &gt; * 恢复请求的发起者若非审核人，需要API的审核人完成申请的审核。
     * &gt; * 下线/停用请求的发起者，必须为API的审核人。
     * &gt; * 下线/停用功能需要为已授权的应用预留充分的准备时间，需至少提前2天发起请求。若需要立即执行下线/停用，需要发起请求后，无有效的授权应用或是有效的授权应用均处理完消息（立即执行，或定期后完成执行）。
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
     * 导出包含API信息的excel文件
     *
     * 导出包含API信息的excel文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportDataServiceExcelAsync($request)
    {
        return $this->exportDataServiceExcelAsyncWithHttpInfo($request);
    }
    
    public function exportDataServiceExcelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/export/excel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceExcelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceExcelRequest',
            $asyncRequest = true);
    }

    /**
     * 下载excel模板
     *
     * 下载excel模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportDataServiceExcelTemplateAsync($request)
    {
        return $this->exportDataServiceExcelTemplateAsyncWithHttpInfo($request);
    }
    
    public function exportDataServiceExcelTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/export/excel-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceExcelTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceExcelTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 全量导出包含API的excel压缩文件
     *
     * 全量导出包含API的excel压缩文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportDataServiceZipAsync($request)
    {
        return $this->exportDataServiceZipAsyncWithHttpInfo($request);
    }
    
    public function exportDataServiceZipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/export/zip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceZipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceZipRequest',
            $asyncRequest = true);
    }

    /**
     * 导入包含API信息的excel文件
     *
     * 导入包含API信息的excel文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importDataServiceExcelAsync($request)
    {
        return $this->importDataServiceExcelAsyncWithHttpInfo($request);
    }
    
    public function importDataServiceExcelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/service/import/excel';
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
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'job_id']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'job_id'],
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataServiceExcelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataServiceExcelRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API列表
     *
     * 查询API列表。
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['createUser'] !== null) {
            $queryParams['create_user'] = $localVarParams['createUser'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['apiType'] !== null) {
            $queryParams['api_type'] = $localVarParams['apiType'];
        }
        if ($localVarParams['publishStatus'] !== null) {
            $queryParams['publish_status'] = $localVarParams['publishStatus'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
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
        if ($localVarParams['xReturnPublishMessages'] !== null) {
            $headerParams['x_return_publish_messages'] = $localVarParams['xReturnPublishMessages'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
     * 查看API不同操作对应的实例信息(专享版)
     *
     * 查看API不同操作对应的实例信息。
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
     * 发布API
     *
     * 发布API。API只有发布后，才能够被调用。API发布时，可以将API发送至指定网关。
     * - 共享版，必须发送至API网关共享版。
     * - 专享版，可以依据自身需要，选择将API发送至API网关专享版、ROMA-APIC、或不发布网关。
     * &gt; 发布请求的发起者若非审核人，需要API的审核人完成申请的审核。
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
     * 查看API调试信息(专享版)
     *
     * 查看API在不同集群上的调试信息。
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
     * 查看API发布信息(专享版)
     *
     * 查看API在不同集群上的发布信息。
     * API在集群上进行过操作后会存在发布信息，例如调试、注册类发布等。
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
     * 查询API信息。
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
     * 更新API。
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