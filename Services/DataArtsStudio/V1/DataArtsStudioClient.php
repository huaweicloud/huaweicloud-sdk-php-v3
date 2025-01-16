<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DataArtsStudioClient extends Client
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
        $client = new ClientBuilder(new DataArtsStudioClient());
        return $client;
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
    public function addDesignEntityTags($request)
    {
        return $this->addDesignEntityTagsWithHttpInfo($request);
    }

    public function addDesignEntityTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddDesignEntityTagsRequest');
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
    public function addTagToAsset($request)
    {
        return $this->addTagToAssetWithHttpInfo($request);
    }

    public function addTagToAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddTagToAssetRequest');
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
    public function addWorkSpaceUsers($request)
    {
        return $this->addWorkSpaceUsersWithHttpInfo($request);
    }

    public function addWorkSpaceUsersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AddWorkSpaceUsersRequest');
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
    public function associateClassificationToEntity($request)
    {
        return $this->associateClassificationToEntityWithHttpInfo($request);
    }

    public function associateClassificationToEntityWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AssociateClassificationToEntityRequest');
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
    public function associateSecurityLevelToEntitie($request)
    {
        return $this->associateSecurityLevelToEntitieWithHttpInfo($request);
    }

    public function associateSecurityLevelToEntitieWithHttpInfo($request)
    {
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
            $queryParams['security-level'] = $localVarParams['securityLevel'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AssociateSecurityLevelToEntitieRequest');
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
    public function authorizeDataConnection($request)
    {
        return $this->authorizeDataConnectionWithHttpInfo($request);
    }

    public function authorizeDataConnectionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeDataConnectionRequest');
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
    public function batchApproveApply($request)
    {
        return $this->batchApproveApplyWithHttpInfo($request);
    }

    public function batchApproveApplyWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchApproveApplyRequest');
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
    public function batchAssociateClassificationToEntities($request)
    {
        return $this->batchAssociateClassificationToEntitiesWithHttpInfo($request);
    }

    public function batchAssociateClassificationToEntitiesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchAssociateClassificationToEntitiesRequest');
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
    public function batchAssociateSecurityLevelToEntities($request)
    {
        return $this->batchAssociateSecurityLevelToEntitiesWithHttpInfo($request);
    }

    public function batchAssociateSecurityLevelToEntitiesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchAssociateSecurityLevelToEntitiesRequest');
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
    public function batchCreateDesignTableModelsFromLogic($request)
    {
        return $this->batchCreateDesignTableModelsFromLogicWithHttpInfo($request);
    }

    public function batchCreateDesignTableModelsFromLogicWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateDesignTableModelsFromLogicRequest');
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
    public function batchCreateSecurityPermissionSetMembers($request)
    {
        return $this->batchCreateSecurityPermissionSetMembersWithHttpInfo($request);
    }

    public function batchCreateSecurityPermissionSetMembersWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateSecurityPermissionSetMembersRequest');
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
    public function batchCreateSecurityPermissionSetPermissions($request)
    {
        return $this->batchCreateSecurityPermissionSetPermissionsWithHttpInfo($request);
    }

    public function batchCreateSecurityPermissionSetPermissionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchCreateSecurityPermissionSetPermissionsRequest');
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
    public function batchDeleteSecurityDataClassificationRule($request)
    {
        return $this->batchDeleteSecurityDataClassificationRuleWithHttpInfo($request);
    }

    public function batchDeleteSecurityDataClassificationRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityDataClassificationRuleRequest');
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
    public function batchDeleteSecurityDynamicMaskingPolicies($request)
    {
        return $this->batchDeleteSecurityDynamicMaskingPoliciesWithHttpInfo($request);
    }

    public function batchDeleteSecurityDynamicMaskingPoliciesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityDynamicMaskingPoliciesRequest');
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
    public function batchDeleteSecurityPermissionSetMembers($request)
    {
        return $this->batchDeleteSecurityPermissionSetMembersWithHttpInfo($request);
    }

    public function batchDeleteSecurityPermissionSetMembersWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityPermissionSetMembersRequest');
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
    public function batchDeleteSecurityPermissionSetPermissions($request)
    {
        return $this->batchDeleteSecurityPermissionSetPermissionsWithHttpInfo($request);
    }

    public function batchDeleteSecurityPermissionSetPermissionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecurityPermissionSetPermissionsRequest');
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
    public function batchDeleteSecuritySecrecyLevels($request)
    {
        return $this->batchDeleteSecuritySecrecyLevelsWithHttpInfo($request);
    }

    public function batchDeleteSecuritySecrecyLevelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteSecuritySecrecyLevelsRequest');
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
    public function batchDeleteTemplates($request)
    {
        return $this->batchDeleteTemplatesWithHttpInfo($request);
    }

    public function batchDeleteTemplatesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchDeleteTemplatesRequest');
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
    public function batchOffline($request)
    {
        return $this->batchOfflineWithHttpInfo($request);
    }

    public function batchOfflineWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOfflineRequest');
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
    public function batchPublish($request)
    {
        return $this->batchPublishWithHttpInfo($request);
    }

    public function batchPublishWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchPublishRequest');
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
    public function batchSyncMetadata($request)
    {
        return $this->batchSyncMetadataWithHttpInfo($request);
    }

    public function batchSyncMetadataWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchSyncMetadataRequest');
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
    public function batchTag($request)
    {
        return $this->batchTagWithHttpInfo($request);
    }

    public function batchTagWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchTagRequest');
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
    public function batchUpdateSecurityDlfDataWareHouses($request)
    {
        return $this->batchUpdateSecurityDlfDataWareHousesWithHttpInfo($request);
    }

    public function batchUpdateSecurityDlfDataWareHousesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchUpdateSecurityDlfDataWareHousesRequest');
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
    public function cancelFactoryPackages($request)
    {
        return $this->cancelFactoryPackagesWithHttpInfo($request);
    }

    public function cancelFactoryPackagesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CancelFactoryPackagesRequest');
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
    public function changeCatalog($request)
    {
        return $this->changeCatalogWithHttpInfo($request);
    }

    public function changeCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeCatalogRequest');
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
    public function changeResource($request)
    {
        return $this->changeResourceWithHttpInfo($request);
    }

    public function changeResourceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeResourceRequest');
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
    public function changeSubjects($request)
    {
        return $this->changeSubjectsWithHttpInfo($request);
    }

    public function changeSubjectsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeSubjectsRequest');
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
    public function checkDimensionStatus($request)
    {
        return $this->checkDimensionStatusWithHttpInfo($request);
    }

    public function checkDimensionStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckDimensionStatusRequest');
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
    public function checkFactLogicTableStatus($request)
    {
        return $this->checkFactLogicTableStatusWithHttpInfo($request);
    }

    public function checkFactLogicTableStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckFactLogicTableStatusRequest');
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
    public function compareDesignVersions($request)
    {
        return $this->compareDesignVersionsWithHttpInfo($request);
    }

    public function compareDesignVersionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CompareDesignVersionsRequest');
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
    public function confirmApprovals($request)
    {
        return $this->confirmApprovalsWithHttpInfo($request);
    }

    public function confirmApprovalsWithHttpInfo($request)
    {
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
            $queryParams['action-id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmApprovalsRequest');
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
    public function confirmMessage($request)
    {
        return $this->confirmMessageWithHttpInfo($request);
    }

    public function confirmMessageWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmMessageRequest');
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
    public function countAllModels($request)
    {
        return $this->countAllModelsWithHttpInfo($request);
    }

    public function countAllModelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountAllModelsRequest');
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
    public function countOverviews($request)
    {
        return $this->countOverviewsWithHttpInfo($request);
    }

    public function countOverviewsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountOverviewsRequest');
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
    public function countStandards($request)
    {
        return $this->countStandardsWithHttpInfo($request);
    }

    public function countStandardsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountStandardsRequest');
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
    public function countTableModels($request)
    {
        return $this->countTableModelsWithHttpInfo($request);
    }

    public function countTableModelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountTableModelsRequest');
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
    public function createApp($request)
    {
        return $this->createAppWithHttpInfo($request);
    }

    public function createAppWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateAppRequest');
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
    public function createApprover($request)
    {
        return $this->createApproverWithHttpInfo($request);
    }

    public function createApproverWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApproverRequest');
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
    public function createBizMetric($request)
    {
        return $this->createBizMetricWithHttpInfo($request);
    }

    public function createBizMetricWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateBizMetricRequest');
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
    public function createCatalog($request)
    {
        return $this->createCatalogWithHttpInfo($request);
    }

    public function createCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCatalogRequest');
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
    public function createCodeTable($request)
    {
        return $this->createCodeTableWithHttpInfo($request);
    }

    public function createCodeTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCodeTableRequest');
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
    public function createConnections($request)
    {
        return $this->createConnectionsWithHttpInfo($request);
    }

    public function createConnectionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateConnectionsRequest');
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
    public function createDesignAggregationLogicTable($request)
    {
        return $this->createDesignAggregationLogicTableWithHttpInfo($request);
    }

    public function createDesignAggregationLogicTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignAggregationLogicTableRequest');
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
    public function createDesignAtomicIndex($request)
    {
        return $this->createDesignAtomicIndexWithHttpInfo($request);
    }

    public function createDesignAtomicIndexWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignAtomicIndexRequest');
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
    public function createDesignCompoundMetric($request)
    {
        return $this->createDesignCompoundMetricWithHttpInfo($request);
    }

    public function createDesignCompoundMetricWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignCompoundMetricRequest');
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
    public function createDesignDerivativeIndex($request)
    {
        return $this->createDesignDerivativeIndexWithHttpInfo($request);
    }

    public function createDesignDerivativeIndexWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignDerivativeIndexRequest');
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
    public function createDesignDimension($request)
    {
        return $this->createDesignDimensionWithHttpInfo($request);
    }

    public function createDesignDimensionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDesignDimensionRequest');
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
    public function createDirectory($request)
    {
        return $this->createDirectoryWithHttpInfo($request);
    }

    public function createDirectoryWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateDirectoryRequest');
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
    public function createFactoryEnv($request)
    {
        return $this->createFactoryEnvWithHttpInfo($request);
    }

    public function createFactoryEnvWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryEnvRequest');
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
    public function createFactoryJob($request)
    {
        return $this->createFactoryJobWithHttpInfo($request);
    }

    public function createFactoryJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactoryJobRequest');
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
    public function createFactorySupplementDataInstance($request)
    {
        return $this->createFactorySupplementDataInstanceWithHttpInfo($request);
    }

    public function createFactorySupplementDataInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequest');
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
    public function createLineageInfo($request)
    {
        return $this->createLineageInfoWithHttpInfo($request);
    }

    public function createLineageInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateLineageInfoRequest');
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
    public function createManagerWorkSpace($request)
    {
        return $this->createManagerWorkSpaceWithHttpInfo($request);
    }

    public function createManagerWorkSpaceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateManagerWorkSpaceRequest');
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
    public function createOrUpdateAsset($request)
    {
        return $this->createOrUpdateAssetWithHttpInfo($request);
    }

    public function createOrUpdateAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateOrUpdateAssetRequest');
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
    public function createOrUpdateEntities($request)
    {
        return $this->createOrUpdateEntitiesWithHttpInfo($request);
    }

    public function createOrUpdateEntitiesWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateOrUpdateEntitiesRequest');
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
    public function createSecurityAssignedQueue($request)
    {
        return $this->createSecurityAssignedQueueWithHttpInfo($request);
    }

    public function createSecurityAssignedQueueWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityAssignedQueueRequest');
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
    public function createSecurityDataClassificationRule($request)
    {
        return $this->createSecurityDataClassificationRuleWithHttpInfo($request);
    }

    public function createSecurityDataClassificationRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDataClassificationRuleRequest');
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
    public function createSecurityDynamicMaskingPolicy($request)
    {
        return $this->createSecurityDynamicMaskingPolicyWithHttpInfo($request);
    }

    public function createSecurityDynamicMaskingPolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityDynamicMaskingPolicyRequest');
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
    public function createSecurityPermissionSet($request)
    {
        return $this->createSecurityPermissionSetWithHttpInfo($request);
    }

    public function createSecurityPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetRequest');
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
    public function createSecurityPermissionSetMember($request)
    {
        return $this->createSecurityPermissionSetMemberWithHttpInfo($request);
    }

    public function createSecurityPermissionSetMemberWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetMemberRequest');
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
    public function createSecurityPermissionSetPermission($request)
    {
        return $this->createSecurityPermissionSetPermissionWithHttpInfo($request);
    }

    public function createSecurityPermissionSetPermissionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecurityPermissionSetPermissionRequest');
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
    public function createSecuritySecrecyLevel($request)
    {
        return $this->createSecuritySecrecyLevelWithHttpInfo($request);
    }

    public function createSecuritySecrecyLevelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSecuritySecrecyLevelRequest');
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
    public function createServiceCatalog($request)
    {
        return $this->createServiceCatalogWithHttpInfo($request);
    }

    public function createServiceCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateServiceCatalogRequest');
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
    public function createStandard($request)
    {
        return $this->createStandardWithHttpInfo($request);
    }

    public function createStandardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardRequest');
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
    public function createStandardTemplate($request)
    {
        return $this->createStandardTemplateWithHttpInfo($request);
    }

    public function createStandardTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardTemplateRequest');
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
    public function createSubject($request)
    {
        return $this->createSubjectWithHttpInfo($request);
    }

    public function createSubjectWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectRequest');
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
    public function createSubjectNew($request)
    {
        return $this->createSubjectNewWithHttpInfo($request);
    }

    public function createSubjectNewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectNewRequest');
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
    public function createTableModel($request)
    {
        return $this->createTableModelWithHttpInfo($request);
    }

    public function createTableModelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTableModelRequest');
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
    public function createTask($request)
    {
        return $this->createTaskWithHttpInfo($request);
    }

    public function createTaskWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTaskRequest');
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
    public function createTemplate($request)
    {
        return $this->createTemplateWithHttpInfo($request);
    }

    public function createTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateTemplateRequest');
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
    public function createWorkspace($request)
    {
        return $this->createWorkspaceWithHttpInfo($request);
    }

    public function createWorkspaceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateWorkspaceRequest');
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
    public function debugDataconnection($request)
    {
        return $this->debugDataconnectionWithHttpInfo($request);
    }

    public function debugDataconnectionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugDataconnectionRequest');
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
    public function debugSecurityDlfDataWareHouses($request)
    {
        return $this->debugSecurityDlfDataWareHousesWithHttpInfo($request);
    }

    public function debugSecurityDlfDataWareHousesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugSecurityDlfDataWareHousesRequest');
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
    public function deleteApp($request)
    {
        return $this->deleteAppWithHttpInfo($request);
    }

    public function deleteAppWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteAppRequest');
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
    public function deleteApprover($request)
    {
        return $this->deleteApproverWithHttpInfo($request);
    }

    public function deleteApproverWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteApproverRequest');
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
    public function deleteAsset($request)
    {
        return $this->deleteAssetWithHttpInfo($request);
    }

    public function deleteAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteAssetRequest');
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
    public function deleteBizMetric($request)
    {
        return $this->deleteBizMetricWithHttpInfo($request);
    }

    public function deleteBizMetricWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteBizMetricRequest');
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
    public function deleteCatalog($request)
    {
        return $this->deleteCatalogWithHttpInfo($request);
    }

    public function deleteCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteCatalogRequest');
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
    public function deleteClassificationFromEntities($request)
    {
        return $this->deleteClassificationFromEntitiesWithHttpInfo($request);
    }

    public function deleteClassificationFromEntitiesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteClassificationFromEntitiesRequest');
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
    public function deleteCodeTable($request)
    {
        return $this->deleteCodeTableWithHttpInfo($request);
    }

    public function deleteCodeTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteCodeTableRequest');
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
    public function deleteDataconnection($request)
    {
        return $this->deleteDataconnectionWithHttpInfo($request);
    }

    public function deleteDataconnectionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDataconnectionRequest');
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
    public function deleteDesignAggregationLogicTable($request)
    {
        return $this->deleteDesignAggregationLogicTableWithHttpInfo($request);
    }

    public function deleteDesignAggregationLogicTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignAggregationLogicTableRequest');
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
    public function deleteDesignAtomicIndex($request)
    {
        return $this->deleteDesignAtomicIndexWithHttpInfo($request);
    }

    public function deleteDesignAtomicIndexWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignAtomicIndexRequest');
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
    public function deleteDesignCompoundMetric($request)
    {
        return $this->deleteDesignCompoundMetricWithHttpInfo($request);
    }

    public function deleteDesignCompoundMetricWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignCompoundMetricRequest');
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
    public function deleteDesignDerivativeIndex($request)
    {
        return $this->deleteDesignDerivativeIndexWithHttpInfo($request);
    }

    public function deleteDesignDerivativeIndexWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDerivativeIndexRequest');
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
    public function deleteDesignDimension($request)
    {
        return $this->deleteDesignDimensionWithHttpInfo($request);
    }

    public function deleteDesignDimensionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDimensionRequest');
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
    public function deleteDesignDimensionLogicTable($request)
    {
        return $this->deleteDesignDimensionLogicTableWithHttpInfo($request);
    }

    public function deleteDesignDimensionLogicTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignDimensionLogicTableRequest');
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
    public function deleteDesignFactLogicTable($request)
    {
        return $this->deleteDesignFactLogicTableWithHttpInfo($request);
    }

    public function deleteDesignFactLogicTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignFactLogicTableRequest');
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
    public function deleteDesignLatestApproval($request)
    {
        return $this->deleteDesignLatestApprovalWithHttpInfo($request);
    }

    public function deleteDesignLatestApprovalWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDesignLatestApprovalRequest');
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
    public function deleteDirectory($request)
    {
        return $this->deleteDirectoryWithHttpInfo($request);
    }

    public function deleteDirectoryWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteDirectoryRequest');
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
    public function deleteEntity($request)
    {
        return $this->deleteEntityWithHttpInfo($request);
    }

    public function deleteEntityWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteEntityRequest');
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
    public function deleteSecurityAssignedQueue($request)
    {
        return $this->deleteSecurityAssignedQueueWithHttpInfo($request);
    }

    public function deleteSecurityAssignedQueueWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityAssignedQueueRequest');
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
    public function deleteSecurityDataClassificationRule($request)
    {
        return $this->deleteSecurityDataClassificationRuleWithHttpInfo($request);
    }

    public function deleteSecurityDataClassificationRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityDataClassificationRuleRequest');
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
    public function deleteSecurityLevelFromEntity($request)
    {
        return $this->deleteSecurityLevelFromEntityWithHttpInfo($request);
    }

    public function deleteSecurityLevelFromEntityWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityLevelFromEntityRequest');
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
    public function deleteSecurityPermissionSet($request)
    {
        return $this->deleteSecurityPermissionSetWithHttpInfo($request);
    }

    public function deleteSecurityPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecurityPermissionSetRequest');
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
    public function deleteSecuritySecrecyLevel($request)
    {
        return $this->deleteSecuritySecrecyLevelWithHttpInfo($request);
    }

    public function deleteSecuritySecrecyLevelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSecuritySecrecyLevelRequest');
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
    public function deleteServiceCatalog($request)
    {
        return $this->deleteServiceCatalogWithHttpInfo($request);
    }

    public function deleteServiceCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteServiceCatalogRequest');
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
    public function deleteStandard($request)
    {
        return $this->deleteStandardWithHttpInfo($request);
    }

    public function deleteStandardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteStandardRequest');
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
    public function deleteStandardTemplate($request)
    {
        return $this->deleteStandardTemplateWithHttpInfo($request);
    }

    public function deleteStandardTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteStandardTemplateRequest');
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
    public function deleteSubject($request)
    {
        return $this->deleteSubjectWithHttpInfo($request);
    }

    public function deleteSubjectWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSubjectRequest');
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
    public function deleteSubjectNew($request)
    {
        return $this->deleteSubjectNewWithHttpInfo($request);
    }

    public function deleteSubjectNewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteSubjectNewRequest');
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
    public function deleteTableModel($request)
    {
        return $this->deleteTableModelWithHttpInfo($request);
    }

    public function deleteTableModelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteTableModelRequest');
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
    public function deleteTaskInfo($request)
    {
        return $this->deleteTaskInfoWithHttpInfo($request);
    }

    public function deleteTaskInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteTaskInfoRequest');
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
    public function deleteWorkspaces($request)
    {
        return $this->deleteWorkspacesWithHttpInfo($request);
    }

    public function deleteWorkspacesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteWorkspacesRequest');
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
    public function deleteWorkspaceusers($request)
    {
        return $this->deleteWorkspaceusersWithHttpInfo($request);
    }

    public function deleteWorkspaceusersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteWorkspaceusersRequest');
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
    public function deployFactoryPackages($request)
    {
        return $this->deployFactoryPackagesWithHttpInfo($request);
    }

    public function deployFactoryPackagesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeployFactoryPackagesRequest');
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
    public function executeTaskAction($request)
    {
        return $this->executeTaskActionWithHttpInfo($request);
    }

    public function executeTaskActionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteTaskActionRequest');
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
    public function exportDesignModelTableDdl($request)
    {
        return $this->exportDesignModelTableDdlWithHttpInfo($request);
    }

    public function exportDesignModelTableDdlWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignModelTableDdlRequest');
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
    public function exportDesignModels($request)
    {
        return $this->exportDesignModelsWithHttpInfo($request);
    }

    public function exportDesignModelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignModelsRequest');
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
    public function exportDesignResult($request)
    {
        return $this->exportDesignResultWithHttpInfo($request);
    }

    public function exportDesignResultWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDesignResultRequest');
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
    public function importCatalogs($request)
    {
        return $this->importCatalogsWithHttpInfo($request);
    }

    public function importCatalogsWithHttpInfo($request)
    {
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
            $queryParams['action-id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['skipExist'] !== null) {
            $queryParams['skip-exist'] = $localVarParams['skipExist'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportCatalogsRequest');
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
    public function importLineage($request)
    {
        return $this->importLineageWithHttpInfo($request);
    }

    public function importLineageWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportLineageRequest');
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
    public function importModels($request)
    {
        return $this->importModelsWithHttpInfo($request);
    }

    public function importModelsWithHttpInfo($request)
    {
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
            $queryParams['action-id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['modelId'] !== null) {
            $queryParams['model_id'] = $localVarParams['modelId'];
        }
        if ($localVarParams['directoryId'] !== null) {
            $queryParams['directory_id'] = $localVarParams['directoryId'];
        }
        if ($localVarParams['skipExist'] !== null) {
            $queryParams['skip-exist'] = $localVarParams['skipExist'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportModelsRequest');
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
    public function importResult($request)
    {
        return $this->importResultWithHttpInfo($request);
    }

    public function importResultWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportResultRequest');
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
    public function initializeStandardTemplate($request)
    {
        return $this->initializeStandardTemplateWithHttpInfo($request);
    }

    public function initializeStandardTemplateWithHttpInfo($request)
    {
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
            $queryParams['action-id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['workspace'] !== null) {
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InitializeStandardTemplateRequest');
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
    public function listAggregationLogicTables($request)
    {
        return $this->listAggregationLogicTablesWithHttpInfo($request);
    }

    public function listAggregationLogicTablesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAggregationLogicTablesRequest');
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
    public function listAllCatalogList($request)
    {
        return $this->listAllCatalogListWithHttpInfo($request);
    }

    public function listAllCatalogListWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllCatalogListRequest');
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
    public function listAllStandards($request)
    {
        return $this->listAllStandardsWithHttpInfo($request);
    }

    public function listAllStandardsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllStandardsRequest');
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
    public function listAllTables($request)
    {
        return $this->listAllTablesWithHttpInfo($request);
    }

    public function listAllTablesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllTablesRequest');
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
    public function listApiCatalogList($request)
    {
        return $this->listApiCatalogListWithHttpInfo($request);
    }

    public function listApiCatalogListWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApiCatalogListRequest');
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
    public function listApiTopN($request)
    {
        return $this->listApiTopNWithHttpInfo($request);
    }

    public function listApiTopNWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApiTopNRequest');
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
    public function listApicGroups($request)
    {
        return $this->listApicGroupsWithHttpInfo($request);
    }

    public function listApicGroupsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApicGroupsRequest');
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
    public function listApicInstances($request)
    {
        return $this->listApicInstancesWithHttpInfo($request);
    }

    public function listApicInstancesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApicInstancesRequest');
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
    public function listApisTop($request)
    {
        return $this->listApisTopWithHttpInfo($request);
    }

    public function listApisTopWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisTopRequest');
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
    public function listApply($request)
    {
        return $this->listApplyWithHttpInfo($request);
    }

    public function listApplyWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApplyRequest');
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
    public function listApprovers($request)
    {
        return $this->listApproversWithHttpInfo($request);
    }

    public function listApproversWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApproversRequest');
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
    public function listApps($request)
    {
        return $this->listAppsWithHttpInfo($request);
    }

    public function listAppsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAppsRequest');
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
    public function listAppsTop($request)
    {
        return $this->listAppsTopWithHttpInfo($request);
    }

    public function listAppsTopWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAppsTopRequest');
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
    public function listBizMetricDimensions($request)
    {
        return $this->listBizMetricDimensionsWithHttpInfo($request);
    }

    public function listBizMetricDimensionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricDimensionsRequest');
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
    public function listBizMetricOwners($request)
    {
        return $this->listBizMetricOwnersWithHttpInfo($request);
    }

    public function listBizMetricOwnersWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricOwnersRequest');
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
    public function listBizMetrics($request)
    {
        return $this->listBizMetricsWithHttpInfo($request);
    }

    public function listBizMetricsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricsRequest');
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
    public function listBusiness($request)
    {
        return $this->listBusinessWithHttpInfo($request);
    }

    public function listBusinessWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBusinessRequest');
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
    public function listCatalogList($request)
    {
        return $this->listCatalogListWithHttpInfo($request);
    }

    public function listCatalogListWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogListRequest');
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
    public function listCatalogTree($request)
    {
        return $this->listCatalogTreeWithHttpInfo($request);
    }

    public function listCatalogTreeWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCatalogTreeRequest');
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
    public function listCategory($request)
    {
        return $this->listCategoryWithHttpInfo($request);
    }

    public function listCategoryWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['accept'] !== null) {
            $headerParams[$arr['accept']] = $localVarParams['accept'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCategoryRequest');
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
    public function listColumns($request)
    {
        return $this->listColumnsWithHttpInfo($request);
    }

    public function listColumnsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListColumnsRequest');
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
    public function listCompoundMetrics($request)
    {
        return $this->listCompoundMetricsWithHttpInfo($request);
    }

    public function listCompoundMetricsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCompoundMetricsRequest');
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
    public function listCondition($request)
    {
        return $this->listConditionWithHttpInfo($request);
    }

    public function listConditionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListConditionRequest');
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
    public function listConsistencyTask($request)
    {
        return $this->listConsistencyTaskWithHttpInfo($request);
    }

    public function listConsistencyTaskWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListConsistencyTaskRequest');
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
    public function listDataArtsStudioInstances($request)
    {
        return $this->listDataArtsStudioInstancesWithHttpInfo($request);
    }

    public function listDataArtsStudioInstancesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataArtsStudioInstancesRequest');
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
    public function listDataServiceInstancesDetail($request)
    {
        return $this->listDataServiceInstancesDetailWithHttpInfo($request);
    }

    public function listDataServiceInstancesDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstancesDetailRequest');
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
    public function listDataServiceInstancesOverview($request)
    {
        return $this->listDataServiceInstancesOverviewWithHttpInfo($request);
    }

    public function listDataServiceInstancesOverviewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceInstancesOverviewRequest');
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
    public function listDataServiceMarketApis($request)
    {
        return $this->listDataServiceMarketApisWithHttpInfo($request);
    }

    public function listDataServiceMarketApisWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataServiceMarketApisRequest');
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
    public function listDataTables($request)
    {
        return $this->listDataTablesWithHttpInfo($request);
    }

    public function listDataTablesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataTablesRequest');
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
    public function listDatabases($request)
    {
        return $this->listDatabasesWithHttpInfo($request);
    }

    public function listDatabasesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDatabasesRequest');
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
    public function listDataconnections($request)
    {
        return $this->listDataconnectionsWithHttpInfo($request);
    }

    public function listDataconnectionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDataconnectionsRequest');
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
    public function listDerivativeIndexes($request)
    {
        return $this->listDerivativeIndexesWithHttpInfo($request);
    }

    public function listDerivativeIndexesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDerivativeIndexesRequest');
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
    public function listDimensionGroups($request)
    {
        return $this->listDimensionGroupsWithHttpInfo($request);
    }

    public function listDimensionGroupsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionGroupsRequest');
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
    public function listDimensionLogicTables($request)
    {
        return $this->listDimensionLogicTablesWithHttpInfo($request);
    }

    public function listDimensionLogicTablesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionLogicTablesRequest');
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
    public function listDimensions($request)
    {
        return $this->listDimensionsWithHttpInfo($request);
    }

    public function listDimensionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionsRequest');
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
    public function listDirectories($request)
    {
        return $this->listDirectoriesWithHttpInfo($request);
    }

    public function listDirectoriesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDirectoriesRequest');
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
    public function listFactLogicTables($request)
    {
        return $this->listFactLogicTablesWithHttpInfo($request);
    }

    public function listFactLogicTablesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactLogicTablesRequest');
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
    public function listFactoryAlarmInfo($request)
    {
        return $this->listFactoryAlarmInfoWithHttpInfo($request);
    }

    public function listFactoryAlarmInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryAlarmInfoRequest');
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
    public function listFactoryJobInstancesByName($request)
    {
        return $this->listFactoryJobInstancesByNameWithHttpInfo($request);
    }

    public function listFactoryJobInstancesByNameWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryJobInstancesByNameRequest');
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
    public function listFactoryJobs($request)
    {
        return $this->listFactoryJobsWithHttpInfo($request);
    }

    public function listFactoryJobsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryJobsRequest');
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
    public function listFactoryReleasePackages($request)
    {
        return $this->listFactoryReleasePackagesWithHttpInfo($request);
    }

    public function listFactoryReleasePackagesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryReleasePackagesRequest');
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
    public function listFactoryTaskCompletion($request)
    {
        return $this->listFactoryTaskCompletionWithHttpInfo($request);
    }

    public function listFactoryTaskCompletionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryTaskCompletionRequest');
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
    public function listFactoryTaskOverview($request)
    {
        return $this->listFactoryTaskOverviewWithHttpInfo($request);
    }

    public function listFactoryTaskOverviewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactoryTaskOverviewRequest');
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
    public function listInstances($request)
    {
        return $this->listInstancesWithHttpInfo($request);
    }

    public function listInstancesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListInstancesRequest');
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
    public function listManagerWorkSpaces($request)
    {
        return $this->listManagerWorkSpacesWithHttpInfo($request);
    }

    public function listManagerWorkSpacesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListManagerWorkSpacesRequest');
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
    public function listMessage($request)
    {
        return $this->listMessageWithHttpInfo($request);
    }

    public function listMessageWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListMessageRequest');
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
    public function listMetricRelations($request)
    {
        return $this->listMetricRelationsWithHttpInfo($request);
    }

    public function listMetricRelationsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListMetricRelationsRequest');
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
    public function listQualityTask($request)
    {
        return $this->listQualityTaskWithHttpInfo($request);
    }

    public function listQualityTaskWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTaskRequest');
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
    public function listQualityTaskLists($request)
    {
        return $this->listQualityTaskListsWithHttpInfo($request);
    }

    public function listQualityTaskListsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTaskListsRequest');
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
    public function listQualityTemplates($request)
    {
        return $this->listQualityTemplatesWithHttpInfo($request);
    }

    public function listQualityTemplatesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListQualityTemplatesRequest');
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
    public function listRelations($request)
    {
        return $this->listRelationsWithHttpInfo($request);
    }

    public function listRelationsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListRelationsRequest');
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
    public function listSchemas($request)
    {
        return $this->listSchemasWithHttpInfo($request);
    }

    public function listSchemasWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSchemasRequest');
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
    public function listSecurityAssignedQueues($request)
    {
        return $this->listSecurityAssignedQueuesWithHttpInfo($request);
    }

    public function listSecurityAssignedQueuesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityAssignedQueuesRequest');
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
    public function listSecurityDataClassificationRuleGroups($request)
    {
        return $this->listSecurityDataClassificationRuleGroupsWithHttpInfo($request);
    }

    public function listSecurityDataClassificationRuleGroupsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataClassificationRuleGroupsRequest');
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
    public function listSecurityDataClassificationRules($request)
    {
        return $this->listSecurityDataClassificationRulesWithHttpInfo($request);
    }

    public function listSecurityDataClassificationRulesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDataClassificationRulesRequest');
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
    public function listSecurityDatasourceActions($request)
    {
        return $this->listSecurityDatasourceActionsWithHttpInfo($request);
    }

    public function listSecurityDatasourceActionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceActionsRequest');
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
    public function listSecurityDatasourceConfigurations($request)
    {
        return $this->listSecurityDatasourceConfigurationsWithHttpInfo($request);
    }

    public function listSecurityDatasourceConfigurationsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceConfigurationsRequest');
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
    public function listSecurityDatasourceUrls($request)
    {
        return $this->listSecurityDatasourceUrlsWithHttpInfo($request);
    }

    public function listSecurityDatasourceUrlsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDatasourceUrlsRequest');
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
    public function listSecurityDlfDataWareHouses($request)
    {
        return $this->listSecurityDlfDataWareHousesWithHttpInfo($request);
    }

    public function listSecurityDlfDataWareHousesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDlfDataWareHousesRequest');
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
    public function listSecurityDynamicMaskingPolicies($request)
    {
        return $this->listSecurityDynamicMaskingPoliciesWithHttpInfo($request);
    }

    public function listSecurityDynamicMaskingPoliciesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityDynamicMaskingPoliciesRequest');
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
    public function listSecurityMemberSyncTasks($request)
    {
        return $this->listSecurityMemberSyncTasksWithHttpInfo($request);
    }

    public function listSecurityMemberSyncTasksWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityMemberSyncTasksRequest');
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
    public function listSecurityPermissionSetMembers($request)
    {
        return $this->listSecurityPermissionSetMembersWithHttpInfo($request);
    }

    public function listSecurityPermissionSetMembersWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetMembersRequest');
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
    public function listSecurityPermissionSetPermissions($request)
    {
        return $this->listSecurityPermissionSetPermissionsWithHttpInfo($request);
    }

    public function listSecurityPermissionSetPermissionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetPermissionsRequest');
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
    public function listSecurityPermissionSets($request)
    {
        return $this->listSecurityPermissionSetsWithHttpInfo($request);
    }

    public function listSecurityPermissionSetsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityPermissionSetsRequest');
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
    public function listSecurityRoleActions($request)
    {
        return $this->listSecurityRoleActionsWithHttpInfo($request);
    }

    public function listSecurityRoleActionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecurityRoleActionsRequest');
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
    public function listSecuritySecrecyLevels($request)
    {
        return $this->listSecuritySecrecyLevelsWithHttpInfo($request);
    }

    public function listSecuritySecrecyLevelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySecrecyLevelsRequest');
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
    public function listSecuritySensitiveDataOverviews($request)
    {
        return $this->listSecuritySensitiveDataOverviewsWithHttpInfo($request);
    }

    public function listSecuritySensitiveDataOverviewsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSecuritySensitiveDataOverviewsRequest');
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
    public function listSubjectLevels($request)
    {
        return $this->listSubjectLevelsWithHttpInfo($request);
    }

    public function listSubjectLevelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSubjectLevelsRequest');
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
    public function listTableModelRelations($request)
    {
        return $this->listTableModelRelationsWithHttpInfo($request);
    }

    public function listTableModelRelationsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelRelationsRequest');
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
    public function listTableModels($request)
    {
        return $this->listTableModelsWithHttpInfo($request);
    }

    public function listTableModelsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelsRequest');
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
    public function listWorkspaceRoles($request)
    {
        return $this->listWorkspaceRolesWithHttpInfo($request);
    }

    public function listWorkspaceRolesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspaceRolesRequest');
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
    public function listWorkspaces($request)
    {
        return $this->listWorkspacesWithHttpInfo($request);
    }

    public function listWorkspacesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesRequest');
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
    public function listWorkspacesForUser($request)
    {
        return $this->listWorkspacesForUserWithHttpInfo($request);
    }

    public function listWorkspacesForUserWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesForUserRequest');
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
    public function listWorkspaceusers($request)
    {
        return $this->listWorkspaceusersWithHttpInfo($request);
    }

    public function listWorkspaceusersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspaceusersRequest');
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
    public function migrateApi($request)
    {
        return $this->migrateApiWithHttpInfo($request);
    }

    public function migrateApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MigrateApiRequest');
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
    public function migrateCatalog($request)
    {
        return $this->migrateCatalogWithHttpInfo($request);
    }

    public function migrateCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MigrateCatalogRequest');
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
    public function modifyCustomizedFields($request)
    {
        return $this->modifyCustomizedFieldsWithHttpInfo($request);
    }

    public function modifyCustomizedFieldsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModifyCustomizedFieldsRequest');
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
    public function parseUserBehavior($request)
    {
        return $this->parseUserBehaviorWithHttpInfo($request);
    }

    public function parseUserBehaviorWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ParseUserBehaviorRequest');
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
    public function payForDgcOneKey($request)
    {
        return $this->payForDgcOneKeyWithHttpInfo($request);
    }

    public function payForDgcOneKeyWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PayForDgcOneKeyRequest');
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
    public function removeDesignEntityTags($request)
    {
        return $this->removeDesignEntityTagsWithHttpInfo($request);
    }

    public function removeDesignEntityTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RemoveDesignEntityTagsRequest');
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
    public function removeDesignQualityInfos($request)
    {
        return $this->removeDesignQualityInfosWithHttpInfo($request);
    }

    public function removeDesignQualityInfosWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RemoveDesignQualityInfosRequest');
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
    public function renewDataProfile($request)
    {
        return $this->renewDataProfileWithHttpInfo($request);
    }

    public function renewDataProfileWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RenewDataProfileRequest');
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
    public function resetLinkAttributeAndStandard($request)
    {
        return $this->resetLinkAttributeAndStandardWithHttpInfo($request);
    }

    public function resetLinkAttributeAndStandardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResetLinkAttributeAndStandardRequest');
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
    public function retryFactoryJobInstance($request)
    {
        return $this->retryFactoryJobInstanceWithHttpInfo($request);
    }

    public function retryFactoryJobInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceRequest');
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
    public function rollbackApproval($request)
    {
        return $this->rollbackApprovalWithHttpInfo($request);
    }

    public function rollbackApprovalWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RollbackApprovalRequest');
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
    public function searchApprovals($request)
    {
        return $this->searchApprovalsWithHttpInfo($request);
    }

    public function searchApprovalsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchApprovalsRequest');
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
    public function searchAtomicIndexes($request)
    {
        return $this->searchAtomicIndexesWithHttpInfo($request);
    }

    public function searchAtomicIndexesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAtomicIndexesRequest');
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
    public function searchAuthorizeApp($request)
    {
        return $this->searchAuthorizeAppWithHttpInfo($request);
    }

    public function searchAuthorizeAppWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAuthorizeAppRequest');
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
    public function searchBindApi($request)
    {
        return $this->searchBindApiWithHttpInfo($request);
    }

    public function searchBindApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchBindApiRequest');
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
    public function searchCatalogs($request)
    {
        return $this->searchCatalogsWithHttpInfo($request);
    }

    public function searchCatalogsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCatalogsRequest');
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
    public function searchCodeTableValues($request)
    {
        return $this->searchCodeTableValuesWithHttpInfo($request);
    }

    public function searchCodeTableValuesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTableValuesRequest');
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
    public function searchCodeTables($request)
    {
        return $this->searchCodeTablesWithHttpInfo($request);
    }

    public function searchCodeTablesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTablesRequest');
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
    public function searchCustomizedFields($request)
    {
        return $this->searchCustomizedFieldsWithHttpInfo($request);
    }

    public function searchCustomizedFieldsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCustomizedFieldsRequest');
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
    public function searchDesignLatestApprovalDiff($request)
    {
        return $this->searchDesignLatestApprovalDiffWithHttpInfo($request);
    }

    public function searchDesignLatestApprovalDiffWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDesignLatestApprovalDiffRequest');
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
    public function searchDwByType($request)
    {
        return $this->searchDwByTypeWithHttpInfo($request);
    }

    public function searchDwByTypeWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDwByTypeRequest');
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
    public function searchFieldsForRelation($request)
    {
        return $this->searchFieldsForRelationWithHttpInfo($request);
    }

    public function searchFieldsForRelationWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchFieldsForRelationRequest');
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
    public function searchIdByPath($request)
    {
        return $this->searchIdByPathWithHttpInfo($request);
    }

    public function searchIdByPathWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchIdByPathRequest');
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
    public function searchSgcComputeDimensions($request)
    {
        return $this->searchSgcComputeDimensionsWithHttpInfo($request);
    }

    public function searchSgcComputeDimensionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSgcComputeDimensionsRequest');
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
    public function searchSubject($request)
    {
        return $this->searchSubjectWithHttpInfo($request);
    }

    public function searchSubjectWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectRequest');
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
    public function searchSubjectNew($request)
    {
        return $this->searchSubjectNewWithHttpInfo($request);
    }

    public function searchSubjectNewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectNewRequest');
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
    public function searchVersions($request)
    {
        return $this->searchVersionsWithHttpInfo($request);
    }

    public function searchVersionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchVersionsRequest');
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
    public function setFactoryJobTags($request)
    {
        return $this->setFactoryJobTagsWithHttpInfo($request);
    }

    public function setFactoryJobTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['host'] !== null) {
            $headerParams[$arr['host']] = $localVarParams['host'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SetFactoryJobTagsRequest');
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
    public function showAggregationLogicTableById($request)
    {
        return $this->showAggregationLogicTableByIdWithHttpInfo($request);
    }

    public function showAggregationLogicTableByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAggregationLogicTableByIdRequest');
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
    public function showApiDashboard($request)
    {
        return $this->showApiDashboardWithHttpInfo($request);
    }

    public function showApiDashboardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApiDashboardRequest');
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
    public function showApisDashboard($request)
    {
        return $this->showApisDashboardWithHttpInfo($request);
    }

    public function showApisDashboardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisDashboardRequest');
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
    public function showApisDetail($request)
    {
        return $this->showApisDetailWithHttpInfo($request);
    }

    public function showApisDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisDetailRequest');
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
    public function showApisOverview($request)
    {
        return $this->showApisOverviewWithHttpInfo($request);
    }

    public function showApisOverviewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApisOverviewRequest');
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
    public function showAppInfo($request)
    {
        return $this->showAppInfoWithHttpInfo($request);
    }

    public function showAppInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppInfoRequest');
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
    public function showApplyDetail($request)
    {
        return $this->showApplyDetailWithHttpInfo($request);
    }

    public function showApplyDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApplyDetailRequest');
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
    public function showAppsDashboard($request)
    {
        return $this->showAppsDashboardWithHttpInfo($request);
    }

    public function showAppsDashboardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsDashboardRequest');
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
    public function showAppsDetail($request)
    {
        return $this->showAppsDetailWithHttpInfo($request);
    }

    public function showAppsDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsDetailRequest');
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
    public function showAppsOverview($request)
    {
        return $this->showAppsOverviewWithHttpInfo($request);
    }

    public function showAppsOverviewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAppsOverviewRequest');
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
    public function showAtomicIndexById($request)
    {
        return $this->showAtomicIndexByIdWithHttpInfo($request);
    }

    public function showAtomicIndexByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAtomicIndexByIdRequest');
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
    public function showBizCatalogDetail($request)
    {
        return $this->showBizCatalogDetailWithHttpInfo($request);
    }

    public function showBizCatalogDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizCatalogDetailRequest');
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
    public function showBizMetricById($request)
    {
        return $this->showBizMetricByIdWithHttpInfo($request);
    }

    public function showBizMetricByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizMetricByIdRequest');
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
    public function showBusinessAssets($request)
    {
        return $this->showBusinessAssetsWithHttpInfo($request);
    }

    public function showBusinessAssetsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsRequest');
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
    public function showBusinessAssetsStatistic($request)
    {
        return $this->showBusinessAssetsStatisticWithHttpInfo($request);
    }

    public function showBusinessAssetsStatisticWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsStatisticRequest');
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
    public function showBusinessAssetsTree($request)
    {
        return $this->showBusinessAssetsTreeWithHttpInfo($request);
    }

    public function showBusinessAssetsTreeWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBusinessAssetsTreeRequest');
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
    public function showCatalogDetail($request)
    {
        return $this->showCatalogDetailWithHttpInfo($request);
    }

    public function showCatalogDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCatalogDetailRequest');
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
    public function showCodeTableById($request)
    {
        return $this->showCodeTableByIdWithHttpInfo($request);
    }

    public function showCodeTableByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCodeTableByIdRequest');
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
    public function showCompoundMetricById($request)
    {
        return $this->showCompoundMetricByIdWithHttpInfo($request);
    }

    public function showCompoundMetricByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCompoundMetricByIdRequest');
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
    public function showConditionById($request)
    {
        return $this->showConditionByIdWithHttpInfo($request);
    }

    public function showConditionByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowConditionByIdRequest');
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
    public function showConsistencyTaskDetail($request)
    {
        return $this->showConsistencyTaskDetailWithHttpInfo($request);
    }

    public function showConsistencyTaskDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowConsistencyTaskDetailRequest');
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
    public function showDataDetail($request)
    {
        return $this->showDataDetailWithHttpInfo($request);
    }

    public function showDataDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataDetailRequest');
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
    public function showDataPreview($request)
    {
        return $this->showDataPreviewWithHttpInfo($request);
    }

    public function showDataPreviewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataPreviewRequest');
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
    public function showDataProfile($request)
    {
        return $this->showDataProfileWithHttpInfo($request);
    }

    public function showDataProfileWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataProfileRequest');
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
    public function showDataServiceInstance($request)
    {
        return $this->showDataServiceInstanceWithHttpInfo($request);
    }

    public function showDataServiceInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataServiceInstanceRequest');
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
    public function showDataSets($request)
    {
        return $this->showDataSetsWithHttpInfo($request);
    }

    public function showDataSetsWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataSetsRequest');
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
    public function showDataconnection($request)
    {
        return $this->showDataconnectionWithHttpInfo($request);
    }

    public function showDataconnectionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDataconnectionRequest');
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
    public function showDatamapLineage($request)
    {
        return $this->showDatamapLineageWithHttpInfo($request);
    }

    public function showDatamapLineageWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDatamapLineageRequest');
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
    public function showDerivativeIndexById($request)
    {
        return $this->showDerivativeIndexByIdWithHttpInfo($request);
    }

    public function showDerivativeIndexByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDerivativeIndexByIdRequest');
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
    public function showDesignOperationResult($request)
    {
        return $this->showDesignOperationResultWithHttpInfo($request);
    }

    public function showDesignOperationResultWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDesignOperationResultRequest');
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
    public function showDimensionById($request)
    {
        return $this->showDimensionByIdWithHttpInfo($request);
    }

    public function showDimensionByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionByIdRequest');
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
    public function showDimensionLogicTableById($request)
    {
        return $this->showDimensionLogicTableByIdWithHttpInfo($request);
    }

    public function showDimensionLogicTableByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionLogicTableByIdRequest');
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
    public function showEntities($request)
    {
        return $this->showEntitiesWithHttpInfo($request);
    }

    public function showEntitiesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowEntitiesRequest');
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
    public function showEntityInfoByGuid($request)
    {
        return $this->showEntityInfoByGuidWithHttpInfo($request);
    }

    public function showEntityInfoByGuidWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowEntityInfoByGuidRequest');
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
    public function showFactLogicTableById($request)
    {
        return $this->showFactLogicTableByIdWithHttpInfo($request);
    }

    public function showFactLogicTableByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactLogicTableByIdRequest');
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
    public function showFactoryEnv($request)
    {
        return $this->showFactoryEnvWithHttpInfo($request);
    }

    public function showFactoryEnvWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryEnvRequest');
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
    public function showFactoryPackageDetail($request)
    {
        return $this->showFactoryPackageDetailWithHttpInfo($request);
    }

    public function showFactoryPackageDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactoryPackageDetailRequest');
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
    public function showFactorySupplementData($request)
    {
        return $this->showFactorySupplementDataWithHttpInfo($request);
    }

    public function showFactorySupplementDataWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowFactorySupplementDataRequest');
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
    public function showGlossaryList($request)
    {
        return $this->showGlossaryListWithHttpInfo($request);
    }

    public function showGlossaryListWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowGlossaryListRequest');
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
    public function showInstanceInfos($request)
    {
        return $this->showInstanceInfosWithHttpInfo($request);
    }

    public function showInstanceInfosWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceInfosRequest');
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
    public function showInstanceLog($request)
    {
        return $this->showInstanceLogWithHttpInfo($request);
    }

    public function showInstanceLogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceLogRequest');
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
    public function showInstanceResult($request)
    {
        return $this->showInstanceResultWithHttpInfo($request);
    }

    public function showInstanceResultWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowInstanceResultRequest');
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
    public function showLineage($request)
    {
        return $this->showLineageWithHttpInfo($request);
    }

    public function showLineageWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowLineageRequest');
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
    public function showLineageBulk($request)
    {
        return $this->showLineageBulkWithHttpInfo($request);
    }

    public function showLineageBulkWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowLineageBulkRequest');
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
    public function showMessageDetail($request)
    {
        return $this->showMessageDetailWithHttpInfo($request);
    }

    public function showMessageDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMessageDetailRequest');
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
    public function showMetricAssets($request)
    {
        return $this->showMetricAssetsWithHttpInfo($request);
    }

    public function showMetricAssetsWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMetricAssetsRequest');
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
    public function showMetricTree($request)
    {
        return $this->showMetricTreeWithHttpInfo($request);
    }

    public function showMetricTreeWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowMetricTreeRequest');
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
    public function showNodes($request)
    {
        return $this->showNodesWithHttpInfo($request);
    }

    public function showNodesWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowNodesRequest');
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
    public function showPathById($request)
    {
        return $this->showPathByIdWithHttpInfo($request);
    }

    public function showPathByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPathByIdRequest');
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
    public function showPathObjectById($request)
    {
        return $this->showPathObjectByIdWithHttpInfo($request);
    }

    public function showPathObjectByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPathObjectByIdRequest');
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
    public function showQualityTaskDetail($request)
    {
        return $this->showQualityTaskDetailWithHttpInfo($request);
    }

    public function showQualityTaskDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowQualityTaskDetailRequest');
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
    public function showQueues($request)
    {
        return $this->showQueuesWithHttpInfo($request);
    }

    public function showQueuesWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowQueuesRequest');
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
    public function showRelationById($request)
    {
        return $this->showRelationByIdWithHttpInfo($request);
    }

    public function showRelationByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowRelationByIdRequest');
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
    public function showSecurityDataClassificationRule($request)
    {
        return $this->showSecurityDataClassificationRuleWithHttpInfo($request);
    }

    public function showSecurityDataClassificationRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDataClassificationRuleRequest');
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
    public function showSecurityDataClassificationRuleGroup($request)
    {
        return $this->showSecurityDataClassificationRuleGroupWithHttpInfo($request);
    }

    public function showSecurityDataClassificationRuleGroupWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDataClassificationRuleGroupRequest');
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
    public function showSecurityDynamicMaskingPolicy($request)
    {
        return $this->showSecurityDynamicMaskingPolicyWithHttpInfo($request);
    }

    public function showSecurityDynamicMaskingPolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityDynamicMaskingPolicyRequest');
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
    public function showSecurityMemberSyncTask($request)
    {
        return $this->showSecurityMemberSyncTaskWithHttpInfo($request);
    }

    public function showSecurityMemberSyncTaskWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityMemberSyncTaskRequest');
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
    public function showSecurityPermissionSet($request)
    {
        return $this->showSecurityPermissionSetWithHttpInfo($request);
    }

    public function showSecurityPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecurityPermissionSetRequest');
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
    public function showSecuritySecrecyLevel($request)
    {
        return $this->showSecuritySecrecyLevelWithHttpInfo($request);
    }

    public function showSecuritySecrecyLevelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowSecuritySecrecyLevelRequest');
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
    public function showStandardById($request)
    {
        return $this->showStandardByIdWithHttpInfo($request);
    }

    public function showStandardByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardByIdRequest');
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
    public function showStandardTemplate($request)
    {
        return $this->showStandardTemplateWithHttpInfo($request);
    }

    public function showStandardTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardTemplateRequest');
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
    public function showTableData($request)
    {
        return $this->showTableDataWithHttpInfo($request);
    }

    public function showTableDataWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTableDataRequest');
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
    public function showTableModelById($request)
    {
        return $this->showTableModelByIdWithHttpInfo($request);
    }

    public function showTableModelByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTableModelByIdRequest');
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
    public function showTags($request)
    {
        return $this->showTagsWithHttpInfo($request);
    }

    public function showTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['instance']] = $localVarParams['instance'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTagsRequest');
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
    public function showTaskInfo($request)
    {
        return $this->showTaskInfoWithHttpInfo($request);
    }

    public function showTaskInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTaskInfoRequest');
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
    public function showTaskList($request)
    {
        return $this->showTaskListWithHttpInfo($request);
    }

    public function showTaskListWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTaskListRequest');
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
    public function showTechnicalAssetsStatistic($request)
    {
        return $this->showTechnicalAssetsStatisticWithHttpInfo($request);
    }

    public function showTechnicalAssetsStatisticWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTechnicalAssetsStatisticRequest');
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
    public function showTemplatesDetail($request)
    {
        return $this->showTemplatesDetailWithHttpInfo($request);
    }

    public function showTemplatesDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowTemplatesDetailRequest');
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
    public function showUnrelatedTable($request)
    {
        return $this->showUnrelatedTableWithHttpInfo($request);
    }

    public function showUnrelatedTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowUnrelatedTableRequest');
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
    public function showWorkSpace($request)
    {
        return $this->showWorkSpaceWithHttpInfo($request);
    }

    public function showWorkSpaceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkSpaceRequest');
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
    public function showWorkspaceDetailById($request)
    {
        return $this->showWorkspaceDetailByIdWithHttpInfo($request);
    }

    public function showWorkspaceDetailByIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkspaceDetailByIdRequest');
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
    public function stopFactorySupplementDataInstance($request)
    {
        return $this->stopFactorySupplementDataInstanceWithHttpInfo($request);
    }

    public function stopFactorySupplementDataInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StopFactorySupplementDataInstanceRequest');
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
    public function updateApp($request)
    {
        return $this->updateAppWithHttpInfo($request);
    }

    public function updateAppWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateAppRequest');
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
    public function updateBizMetric($request)
    {
        return $this->updateBizMetricWithHttpInfo($request);
    }

    public function updateBizMetricWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateBizMetricRequest');
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
    public function updateCatalog($request)
    {
        return $this->updateCatalogWithHttpInfo($request);
    }

    public function updateCatalogWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCatalogRequest');
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
    public function updateCodeTable($request)
    {
        return $this->updateCodeTableWithHttpInfo($request);
    }

    public function updateCodeTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableRequest');
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
    public function updateCodeTableValues($request)
    {
        return $this->updateCodeTableValuesWithHttpInfo($request);
    }

    public function updateCodeTableValuesWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableValuesRequest');
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
    public function updateDataconnection($request)
    {
        return $this->updateDataconnectionWithHttpInfo($request);
    }

    public function updateDataconnectionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDataconnectionRequest');
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
    public function updateDesignAggregationLogicTable($request)
    {
        return $this->updateDesignAggregationLogicTableWithHttpInfo($request);
    }

    public function updateDesignAggregationLogicTableWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignAggregationLogicTableRequest');
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
    public function updateDesignAtomicIndex($request)
    {
        return $this->updateDesignAtomicIndexWithHttpInfo($request);
    }

    public function updateDesignAtomicIndexWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignAtomicIndexRequest');
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
    public function updateDesignCompoundMetric($request)
    {
        return $this->updateDesignCompoundMetricWithHttpInfo($request);
    }

    public function updateDesignCompoundMetricWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignCompoundMetricRequest');
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
    public function updateDesignDerivativeIndex($request)
    {
        return $this->updateDesignDerivativeIndexWithHttpInfo($request);
    }

    public function updateDesignDerivativeIndexWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDerivativeIndexRequest');
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
    public function updateDesignDimension($request)
    {
        return $this->updateDesignDimensionWithHttpInfo($request);
    }

    public function updateDesignDimensionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignDimensionRequest');
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
    public function updateDesignTableQuality($request)
    {
        return $this->updateDesignTableQualityWithHttpInfo($request);
    }

    public function updateDesignTableQualityWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDesignTableQualityRequest');
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
    public function updateDirectory($request)
    {
        return $this->updateDirectoryWithHttpInfo($request);
    }

    public function updateDirectoryWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateDirectoryRequest');
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
    public function updateFactoryJobName($request)
    {
        return $this->updateFactoryJobNameWithHttpInfo($request);
    }

    public function updateFactoryJobNameWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['host'] !== null) {
            $headerParams[$arr['host']] = $localVarParams['host'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateFactoryJobNameRequest');
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
    public function updateSecurityAssignedQueue($request)
    {
        return $this->updateSecurityAssignedQueueWithHttpInfo($request);
    }

    public function updateSecurityAssignedQueueWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityAssignedQueueRequest');
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
    public function updateSecurityDataClassificationRule($request)
    {
        return $this->updateSecurityDataClassificationRuleWithHttpInfo($request);
    }

    public function updateSecurityDataClassificationRuleWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDataClassificationRuleRequest');
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
    public function updateSecurityDynamicMaskingPolicy($request)
    {
        return $this->updateSecurityDynamicMaskingPolicyWithHttpInfo($request);
    }

    public function updateSecurityDynamicMaskingPolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityDynamicMaskingPolicyRequest');
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
    public function updateSecurityPermissionSet($request)
    {
        return $this->updateSecurityPermissionSetWithHttpInfo($request);
    }

    public function updateSecurityPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityPermissionSetRequest');
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
    public function updateSecurityPermissionSetPermission($request)
    {
        return $this->updateSecurityPermissionSetPermissionWithHttpInfo($request);
    }

    public function updateSecurityPermissionSetPermissionWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityPermissionSetPermissionRequest');
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
    public function updateSecurityRuleEnableStatus($request)
    {
        return $this->updateSecurityRuleEnableStatusWithHttpInfo($request);
    }

    public function updateSecurityRuleEnableStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecurityRuleEnableStatusRequest');
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
    public function updateSecuritySecrecyLevel($request)
    {
        return $this->updateSecuritySecrecyLevelWithHttpInfo($request);
    }

    public function updateSecuritySecrecyLevelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSecuritySecrecyLevelRequest');
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
    public function updateStandard($request)
    {
        return $this->updateStandardWithHttpInfo($request);
    }

    public function updateStandardWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardRequest');
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
    public function updateStandardTemplate($request)
    {
        return $this->updateStandardTemplateWithHttpInfo($request);
    }

    public function updateStandardTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardTemplateRequest');
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
    public function updateSubject($request)
    {
        return $this->updateSubjectWithHttpInfo($request);
    }

    public function updateSubjectWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectRequest');
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
    public function updateSubjectNew($request)
    {
        return $this->updateSubjectNewWithHttpInfo($request);
    }

    public function updateSubjectNewWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectNewRequest');
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
    public function updateTableModel($request)
    {
        return $this->updateTableModelWithHttpInfo($request);
    }

    public function updateTableModelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTableModelRequest');
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
    public function updateTaskInfo($request)
    {
        return $this->updateTaskInfoWithHttpInfo($request);
    }

    public function updateTaskInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTaskInfoRequest');
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
    public function updateTemplate($request)
    {
        return $this->updateTemplateWithHttpInfo($request);
    }

    public function updateTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateTemplateRequest');
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
    public function updateWorkSpaceUserOrGroup($request)
    {
        return $this->updateWorkSpaceUserOrGroupWithHttpInfo($request);
    }

    public function updateWorkSpaceUserOrGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkSpaceUserOrGroupRequest');
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
    public function updateWorkspace($request)
    {
        return $this->updateWorkspaceWithHttpInfo($request);
    }

    public function updateWorkspaceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkspaceRequest');
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
    public function authorizeActionApiToInstance($request)
    {
        return $this->authorizeActionApiToInstanceWithHttpInfo($request);
    }

    public function authorizeActionApiToInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeActionApiToInstanceRequest');
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
    public function authorizeApiToInstance($request)
    {
        return $this->authorizeApiToInstanceWithHttpInfo($request);
    }

    public function authorizeApiToInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AuthorizeApiToInstanceRequest');
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
    public function createApi($request)
    {
        return $this->createApiWithHttpInfo($request);
    }

    public function createApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApiRequest');
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
    public function debugApi($request)
    {
        return $this->debugApiWithHttpInfo($request);
    }

    public function debugApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DebugApiRequest');
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
    public function deleteApi($request)
    {
        return $this->deleteApiWithHttpInfo($request);
    }

    public function deleteApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DeleteApiRequest');
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
    public function executeApiToInstance($request)
    {
        return $this->executeApiToInstanceWithHttpInfo($request);
    }

    public function executeApiToInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExecuteApiToInstanceRequest');
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
    public function exportDataServiceExcel($request)
    {
        return $this->exportDataServiceExcelWithHttpInfo($request);
    }

    public function exportDataServiceExcelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceExcelRequest');
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
    public function exportDataServiceExcelTemplate($request)
    {
        return $this->exportDataServiceExcelTemplateWithHttpInfo($request);
    }

    public function exportDataServiceExcelTemplateWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceExcelTemplateRequest');
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
    public function exportDataServiceZip($request)
    {
        return $this->exportDataServiceZipWithHttpInfo($request);
    }

    public function exportDataServiceZipWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ExportDataServiceZipRequest');
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
    public function importDataServiceExcel($request)
    {
        return $this->importDataServiceExcelWithHttpInfo($request);
    }

    public function importDataServiceExcelWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataServiceExcelRequest');
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
    public function listApis($request)
    {
        return $this->listApisWithHttpInfo($request);
    }

    public function listApisWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['xReturnPublishMessages'] !== null) {
            $headerParams[$arr['xReturnPublishMessages']] = $localVarParams['xReturnPublishMessages'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisRequest');
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
    public function listInstanceList($request)
    {
        return $this->listInstanceListWithHttpInfo($request);
    }

    public function listInstanceListWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListInstanceListRequest');
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
    public function publishApiToInstance($request)
    {
        return $this->publishApiToInstanceWithHttpInfo($request);
    }

    public function publishApiToInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiToInstanceRequest');
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
    public function searchDebugInfo($request)
    {
        return $this->searchDebugInfoWithHttpInfo($request);
    }

    public function searchDebugInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDebugInfoRequest');
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
    public function searchPublishInfo($request)
    {
        return $this->searchPublishInfoWithHttpInfo($request);
    }

    public function searchPublishInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchPublishInfoRequest');
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
    public function showApi($request)
    {
        return $this->showApiWithHttpInfo($request);
    }

    public function showApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowApiRequest');
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
    public function updateApi($request)
    {
        return $this->updateApiWithHttpInfo($request);
    }

    public function updateApiWithHttpInfo($request)
    {
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
            $headerParams[$arr['workspace']] = $localVarParams['workspace'];
        }
        if ($localVarParams['dlmType'] !== null) {
            $headerParams[$arr['dlmType']] = $localVarParams['dlmType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateApiRequest');
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