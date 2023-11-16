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
        return new ClientBuilder(new DataArtsStudioClient());
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
     * 审核申请
     *
     * 审核申请
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
     * 批量下线
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOfflineRequest');
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
     * 修改流程架构
     *
     * 修改流程架构
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
     * 修改或删除主题层级
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ChangeSubjectsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckDimensionStatusRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CheckFactLogicTableStatusRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConfirmApprovalsRequest');
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
     * 关系建模统计信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountAllModelsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountOverviewsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountStandardsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CountTableModelsRequest');
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
     * 创建审批人
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateApproverRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateBizMetricRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateCatalogRequest');
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
     * 创建目录
     *
     * 创建目录
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
     * 创建补数据实例的接口
     *
     * 创建一个补数据实例
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
     * 创建服务目录
     *
     * 创建服务目录
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
     * 创建数据标准
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateStandardTemplateRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateSubjectNewRequest');
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
     * 新建模型工作区
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
     * 删除应用
     *
     * 删除应用
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
     * 删除审批人
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
     * 删除业务指标
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
     * 删除流程架构
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
     * 删除码表
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
     * 删除目录
     *
     * 删除目录
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
     * 批量删除目录
     *
     * 批量删除目录
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
     * 删除数据标准
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
     * 删除数据标准模板
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
     * 删除主题
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
     * 删除主题(新)
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
     * 删除模型实体
     *
     * 删除一个模型实体，包括逻辑实体或物理数据表。
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
     * 删除模型工作区
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
     * 查询导入结果
     *
     * 查询导入excel的处理结果
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportResultRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InitializeStandardTemplateRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAggregationLogicTablesRequest');
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
     * 获取数据标准
     *
     * 获取数据标准
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListAllStandardsRequest');
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
     * 查询指定api 应用调用topN
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
     * 获取网关分组
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
     * 获取网关实例
     *
     * 获取网关实例
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
     * 查询api 服务调用topN
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
     * 查询申请列表
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
     * 查询审批人列表
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApproversRequest');
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
     * 查询app 服务使用topN
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
     * 查看指标维度信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricDimensionsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricOwnersRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBizMetricsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListBusinessRequest');
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
     * 获取所有目录树
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
     * 通过中英文名称、创建者、审核人、状态、修改时间、l3Id分页查找复合指标信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListCompoundMetricsRequest');
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
     * 通过中英文名称、创建者、审核人、状态、修改时间、l3Id分页查找衍生指标信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDerivativeIndexesRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionGroupsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionLogicTablesRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDimensionsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListDirectoriesRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListFactLogicTablesRequest');
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
     * 查询消息列表
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
     * 获取当前指标图谱
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
     * 关系
     *
     * 通过名称、等分页查找关系信息
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
     * 获取主题层级
     *
     * 获取主题层级
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListSubjectLevelsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableModelRelationsRequest');
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
     * 获取模型
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListWorkspacesRequest');
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
     * 批量移动api至新目录
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
     * 移动当前目录至新目录
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
     * 修改自定义项
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
     * 关联属性与数据标准
     *
     * 关联属性与数据标准
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResetLinkAttributeAndStandardRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RollbackApprovalRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchApprovalsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchAtomicIndexesRequest');
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
     * 查询APP已拥有授权的API
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
     * 查询流程架构列表
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCatalogsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTableValuesRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCodeTablesRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchCustomizedFieldsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchDwByTypeRequest');
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
     * 查找主题列表
     *
     * 通过名称、创建者、责任人、状态、修改时间分页查找主题
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchSubjectNewRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SearchVersionsRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAggregationLogicTableByIdRequest');
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
     * 查询api 仪表板数据详情
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
     * 查询api 统计数据详情
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
     * 查询统计用户相关的总览开发指标
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
     * 查询应用详情
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
     * 获取申请详情
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
     * 查询app 仪表板数据详情
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
     * 查询app 统计数据详情
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
     * 查询统计用户相关的总览调用指标
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
     * 通过id获取指标详情信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowAtomicIndexByIdRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowBizCatalogDetailRequest');
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
     * 查询服务目录
     *
     * 查询服务目录
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
     * 通过id查看码表的详情信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCodeTableByIdRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowCompoundMetricByIdRequest');
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
     * 查看衍生指标详情
     *
     * 通过id获取衍生详情信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDerivativeIndexByIdRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowDimensionByIdRequest');
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
     * 通过id查看事实表的详情信息
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
     * 查询所有的补数据实例
     *
     * 查询所有的补数据实例
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
     * 获取消息详情
     *
     * 获取消息详情
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
     * 通过id获取路径
     *
     * 通过id获取路径
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
     * 通过id获取路径对象
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
     * 查看关系详情
     *
     * 通过id获取关系详情信息
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowRelationByIdRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardByIdRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowStandardTemplateRequest');
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
     * 查询物理模型或逻辑模型的工作区空间详情
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowWorkspaceDetailByIdRequest');
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StopFactorySupplementDataInstanceRequest');
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
     * 更新业务指标
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateBizMetricRequest');
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
     * 修改码表
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateCodeTableRequest');
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
     * 修改目录
     *
     * 修改目录
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
     * 修改数据标准
     *
     * 修改数据标准
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateStandardTemplateRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectRequest');
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateSubjectNewRequest');
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
     * 更新模型工作区
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
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateWorkspaceRequest');
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
     * 批量授权API
     *
     * 批量授权API
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
     * 创建API
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
     * 调试API
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
     * 批量删除API
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
     * API操作(下线/停用/恢复)
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
     * 查询API列表
     *
     * 查询API列表
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisResponse',
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListApisRequest');
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
     * 发布/下线/停用/恢复API
     *
     * 发布/下线/停用/恢复API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishApi($request)
    {
        return $this->publishApiWithHttpInfo($request);
    }

    public function publishApiWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiResponse',
            $requestType='\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublishApiRequest');
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
     * 查看API调试信息
     *
     * 查看API调试信息
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
     * 查看API发布信息
     *
     * 查看API发布信息
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
     * 查询API信息
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
     * 更新API
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