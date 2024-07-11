<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsDeployAsyncClient extends Client
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
        return new ClientBuilder(new CodeArtsDeployAsyncClient());
    }

    /**
     * 创建分组
     *
     * 创建分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppGroupsAsync($request)
    {
        return $this->createAppGroupsAsyncWithHttpInfo($request);
    }
    
    public function createAppGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/applications/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateAppGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateAppGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除分组
     *
     * 删除分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppGroupsAsync($request)
    {
        return $this->deleteAppGroupsAsyncWithHttpInfo($request);
    }
    
    public function deleteAppGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/applications/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteAppGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteAppGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分组列表
     *
     * 查询分组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppGroupsAsync($request)
    {
        return $this->listAppGroupsAsyncWithHttpInfo($request);
    }
    
    public function listAppGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/applications/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListAppGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListAppGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 移动分组
     *
     * 往上或者往下移动单个分组,用来在页面上调整分组位置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function moveAppGroupsAsync($request)
    {
        return $this->moveAppGroupsAsyncWithHttpInfo($request);
    }
    
    public function moveAppGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/applications/groups/swap';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\MoveAppGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\MoveAppGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 移动应用至指定分组
     *
     * 将应用移动至指定分组（支持批量）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function moveAppToGroupAsync($request)
    {
        return $this->moveAppToGroupAsyncWithHttpInfo($request);
    }
    
    public function moveAppToGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/applications/groups/move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\MoveAppToGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\MoveAppToGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 修改分组
     *
     * 修改分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppGroupsAsync($request)
    {
        return $this->updateAppGroupsAsyncWithHttpInfo($request);
    }
    
    public function updateAppGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/applications/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateAppGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateAppGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改应用权限
     *
     * 批量修改应用权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateApplicationPermissionsAsync($request)
    {
        return $this->batchUpdateApplicationPermissionsAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateApplicationPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/applications/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchUpdateApplicationPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchUpdateApplicationPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量配置应用下鉴权级别
     *
     * 批量配置应用下鉴权级别为项目级或实例级。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdatePermissionLevelAsync($request)
    {
        return $this->batchUpdatePermissionLevelAsyncWithHttpInfo($request);
    }
    
    public function batchUpdatePermissionLevelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/applications/permission-level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchUpdatePermissionLevelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchUpdatePermissionLevelRequest',
            $asyncRequest = true);
    }

    /**
     * 查询当前用户是否有项目下创建应用权限
     *
     * 查询当前用户是否有项目下创建应用权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkCanCreateAsync($request)
    {
        return $this->checkCanCreateAsyncWithHttpInfo($request);
    }
    
    public function checkCanCreateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/creatable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['project_id'] = $localVarParams['projectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CheckCanCreateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CheckCanCreateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用实例级/项目级权限矩阵
     *
     * 查询应用实例级/项目级权限矩阵，传递app_id时，查询应用实例级权限矩阵；未传app_id，传递project_id时，查询应用项目级权限矩阵。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationPermissionsAsync($request)
    {
        return $this->listApplicationPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listApplicationPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/applications/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListApplicationPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListApplicationPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除项目下应用
     *
     * 批量删除项目下应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAppAsync($request)
    {
        return $this->batchDeleteAppAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/applications/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchDeleteAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchDeleteAppRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目下是否存在同名应用
     *
     * 查询项目下是否存在同名应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkIsDuplicateAppNameAsync($request)
    {
        return $this->checkIsDuplicateAppNameAsyncWithHttpInfo($request);
    }
    
    public function checkIsDuplicateAppNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CheckIsDuplicateAppNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CheckIsDuplicateAppNameRequest',
            $asyncRequest = true);
    }

    /**
     * 复制应用
     *
     * 复制应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyApplicationAsync($request)
    {
        return $this->copyApplicationAsyncWithHttpInfo($request);
    }
    
    public function copyApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{app_id}/duplicate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CopyApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CopyApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 新建应用
     *
     * 新建应用。
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
        $resourcePath = '/v1/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateAppRequest',
            $asyncRequest = true);
    }

    /**
     * 通过模板新建应用
     *
     * 通过模板新建应用。该接口于2024年09月30日后不再维护，推荐使用新版CreateApp接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeployTaskByTemplateAsync($request)
    {
        return $this->createDeployTaskByTemplateAsyncWithHttpInfo($request);
    }
    
    public function createDeployTaskByTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/template-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeployTaskByTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeployTaskByTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用
     *
     * 根据应用id删除应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationAsync($request)
    {
        return $this->deleteApplicationAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用
     *
     * 根据部署任务id删除应用。该接口于2024年09月30日后不再维护，推荐使用新版DeleteApplication接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeployTaskAsync($request)
    {
        return $this->deleteDeployTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteDeployTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeployTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeployTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用列表
     *
     * 查询项目下应用列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllAppAsync($request)
    {
        return $this->listAllAppAsyncWithHttpInfo($request);
    }
    
    public function listAllAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListAllAppResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListAllAppRequest',
            $asyncRequest = true);
    }

    /**
     * 根据开始时间和结束时间查询项目下指定应用的历史部署记录列表
     *
     * 根据开始时间和结束时间查询项目下指定应用的历史部署记录列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeployTaskHistoryByDateAsync($request)
    {
        return $this->listDeployTaskHistoryByDateAsyncWithHttpInfo($request);
    }
    
    public function listDeployTaskHistoryByDateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/task/{id}/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTaskHistoryByDateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTaskHistoryByDateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用列表
     *
     * 查询项目下应用列表。该接口于2024年09月30日后不再维护，推荐使用新版ListAllApp接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeployTasksAsync($request)
    {
        return $this->listDeployTasksAsyncWithHttpInfo($request);
    }
    
    public function listDeployTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/tasks/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用详情
     *
     * 根据应用id获取应用详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppDetailByIdAsync($request)
    {
        return $this->showAppDetailByIdAsyncWithHttpInfo($request);
    }
    
    public function showAppDetailByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{app_id}/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowAppDetailByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowAppDetailByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用详情
     *
     * 根据部署任务id获取应用详情。该接口于2024年09月30日后不再维护，推荐使用新版ShowAppDetailById接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeployTaskDetailAsync($request)
    {
        return $this->showDeployTaskDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeployTaskDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeployTaskDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeployTaskDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询部署记录的执行参数
     *
     * 查询部署记录的执行参数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showExecutionParamsAsync($request)
    {
        return $this->showExecutionParamsAsyncWithHttpInfo($request);
    }
    
    public function showExecutionParamsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/history/tasks/{task_id}/params';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['recordId'] !== null) {
            $queryParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowExecutionParamsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowExecutionParamsRequest',
            $asyncRequest = true);
    }

    /**
     * 部署应用
     *
     * 根据部署任务id部署应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startDeployTaskAsync($request)
    {
        return $this->startDeployTaskAsyncWithHttpInfo($request);
    }
    
    public function startDeployTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/{task_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StartDeployTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StartDeployTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 禁用/取消禁用应用
     *
     * 禁用/取消禁用应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppDisableStatusAsync($request)
    {
        return $this->updateAppDisableStatusAsyncWithHttpInfo($request);
    }
    
    public function updateAppDisableStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{app_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateAppDisableStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateAppDisableStatusRequest',
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
    public function updateAppInfoAsync($request)
    {
        return $this->updateAppInfoAsyncWithHttpInfo($request);
    }
    
    public function updateAppInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateAppInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateAppInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 应用下创建环境
     *
     * 应用下创建环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnvironmentAsync($request)
    {
        return $this->createEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function createEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用下的环境
     *
     * 删除应用下的环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnvironmentAsync($request)
    {
        return $this->deleteEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function deleteEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 环境下删除主机
     *
     * 环境下删除主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHostFromEnvironmentAsync($request)
    {
        return $this->deleteHostFromEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function deleteHostFromEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments/{environment_id}/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteHostFromEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteHostFromEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 环境下导入主机
     *
     * 环境下导入主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importHostToEnvironmentAsync($request)
    {
        return $this->importHostToEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function importHostToEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments/{environment_id}/hosts/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ImportHostToEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ImportHostToEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询环境内的主机列表
     *
     * 查询环境内的主机列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvironmentHostsAsync($request)
    {
        return $this->listEnvironmentHostsAsyncWithHttpInfo($request);
    }
    
    public function listEnvironmentHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments/{environment_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyField'] !== null) {
            $queryParams['key_field'] = $localVarParams['keyField'];
        }
        if ($localVarParams['asProxy'] !== null) {
            $queryParams['as_proxy'] = $localVarParams['asProxy'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListEnvironmentHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListEnvironmentHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用下环境列表
     *
     * 查询应用下环境列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvironmentsAsync($request)
    {
        return $this->listEnvironmentsAsyncWithHttpInfo($request);
    }
    
    public function listEnvironmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListEnvironmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListEnvironmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询环境详情
     *
     * 查询环境详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnvironmentDetailAsync($request)
    {
        return $this->showEnvironmentDetailAsyncWithHttpInfo($request);
    }
    
    public function showEnvironmentDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowEnvironmentDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowEnvironmentDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 应用下编辑环境
     *
     * 应用下编辑环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEnvironmentAsync($request)
    {
        return $this->updateEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function updateEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询环境权限
     *
     * 查询环境权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvironmentPermissionsAsync($request)
    {
        return $this->listEnvironmentPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listEnvironmentPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/applications/{application_id}/environments/{environment_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListEnvironmentPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListEnvironmentPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑环境权限
     *
     * 编辑环境权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEnvironmentPermissionAsync($request)
    {
        return $this->updateEnvironmentPermissionAsyncWithHttpInfo($request);
    }
    
    public function updateEnvironmentPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/applications/{application_id}/environments/{environment_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateEnvironmentPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateEnvironmentPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除主机集群下的主机
     *
     * 批量删除主机集群下的主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteHostsAsync($request)
    {
        return $this->batchDeleteHostsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchDeleteHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\BatchDeleteHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量复制主机至目标主机集群
     *
     * 批量复制主机至目标主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyHostsToTargetAsync($request)
    {
        return $this->copyHostsToTargetAsyncWithHttpInfo($request);
    }
    
    public function copyHostsToTargetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts/replication';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CopyHostsToTargetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CopyHostsToTargetRequest',
            $asyncRequest = true);
    }

    /**
     * 新建主机
     *
     * 在指定主机集群下新建主机。该接口于2024年09月30日后不再维护，推荐使用新版CreateHost接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeploymentHostAsync($request)
    {
        return $this->createDeploymentHostAsyncWithHttpInfo($request);
    }
    
    public function createDeploymentHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentHostRequest',
            $asyncRequest = true);
    }

    /**
     * 新建主机
     *
     * 在指定主机集群下新建主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHostAsync($request)
    {
        return $this->createHostAsyncWithHttpInfo($request);
    }
    
    public function createHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateHostRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主机
     *
     * 根据主机id删除主机。该接口于2024年9月30日后不再维护。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeploymentHostAsync($request)
    {
        return $this->deleteDeploymentHostAsyncWithHttpInfo($request);
    }
    
    public function deleteDeploymentHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentHostRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主机集群下主机
     *
     * 根据主机id删除主机集群下主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHostAsync($request)
    {
        return $this->deleteHostAsyncWithHttpInfo($request);
    }
    
    public function deleteHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机列表
     *
     * 根据主机集群id查询指定主机集群下的主机列表。该接口于2024年09月30日后不再维护，推荐使用新版ListNewHosts接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostsAsync($request)
    {
        return $this->listHostsAsyncWithHttpInfo($request);
    }
    
    public function listHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['asProxy'] !== null) {
            $queryParams['as_proxy'] = $localVarParams['asProxy'];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['withAuth'] !== null) {
            $queryParams['with_auth'] = $localVarParams['withAuth'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机列表
     *
     * 根据主机集群id查询指定主机集群下的主机列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNewHostsAsync($request)
    {
        return $this->listNewHostsAsyncWithHttpInfo($request);
    }
    
    public function listNewHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyField'] !== null) {
            $queryParams['key_field'] = $localVarParams['keyField'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $queryParams['environment_id'] = $localVarParams['environmentId'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['asProxy'] !== null) {
            $queryParams['as_proxy'] = $localVarParams['asProxy'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListNewHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListNewHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机详情
     *
     * 根据主机id查询主机详情。该接口于2024年09月30日后不再维护，推荐使用新版ShowHostDetail接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeploymentHostDetailAsync($request)
    {
        return $this->showDeploymentHostDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeploymentHostDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentHostDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentHostDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机详情
     *
     * 根据主机id查询主机详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHostDetailAsync($request)
    {
        return $this->showHostDetailAsyncWithHttpInfo($request);
    }
    
    public function showHostDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowHostDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowHostDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主机
     *
     * 根据主机id修改主机信息。该接口于2024年9月30日后不再维护。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeploymentHostAsync($request)
    {
        return $this->updateDeploymentHostAsyncWithHttpInfo($request);
    }
    
    public function updateDeploymentHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentHostRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑主机集群下主机信息
     *
     * 根据主机id编辑主机集群下主机信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHostInfoAsync($request)
    {
        return $this->updateHostInfoAsyncWithHttpInfo($request);
    }
    
    public function updateHostInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateHostInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateHostInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 新建主机集群
     *
     * 在项目下新建主机集群。该接口于2024年09月30日后不再维护，推荐使用新版CreateHostCluster接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeploymentGroupAsync($request)
    {
        return $this->createDeploymentGroupAsyncWithHttpInfo($request);
    }
    
    public function createDeploymentGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 新建主机集群
     *
     * 在项目下新建主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHostClusterAsync($request)
    {
        return $this->createHostClusterAsyncWithHttpInfo($request);
    }
    
    public function createHostClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateHostClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateHostClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主机集群
     *
     * 根据主机集群id删除主机集群。该接口于2024年9月30日后不再维护。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeploymentGroupAsync($request)
    {
        return $this->deleteDeploymentGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteDeploymentGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主机集群
     *
     * 根据主机集群id删除主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHostClusterAsync($request)
    {
        return $this->deleteHostClusterAsyncWithHttpInfo($request);
    }
    
    public function deleteHostClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteHostClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteHostClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群关联环境信息
     *
     * 查询主机集群关联环境信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssociateEnvironmentsInfosAsync($request)
    {
        return $this->listAssociateEnvironmentsInfosAsyncWithHttpInfo($request);
    }
    
    public function listAssociateEnvironmentsInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}/environments/infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListAssociateEnvironmentsInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListAssociateEnvironmentsInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群列表
     *
     * 按条件查询主机集群列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostClustersAsync($request)
    {
        return $this->listHostClustersAsyncWithHttpInfo($request);
    }
    
    public function listHostClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['os'] !== null) {
            $queryParams['os'] = $localVarParams['os'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['isProxyMode'] !== null) {
            $queryParams['is_proxy_mode'] = $localVarParams['isProxyMode'];
        }
        if ($localVarParams['slaveClusterId'] !== null) {
            $queryParams['slave_cluster_id'] = $localVarParams['slaveClusterId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用下环境基本信息列表
     *
     * 查询应用下环境基本信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostGroupBaseInfosAsync($request)
    {
        return $this->listHostGroupBaseInfosAsyncWithHttpInfo($request);
    }
    
    public function listHostGroupBaseInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/applications/{application_id}/host-groups/base/infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectUuid'] !== null) {
            $queryParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($localVarParams['os'] !== null) {
            $queryParams['os'] = $localVarParams['os'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupBaseInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupBaseInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群列表
     *
     * 按条件查询主机集群列表。该接口于2024年09月30日后不再维护，推荐使用新版ListHostClusters接口。
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
        $resourcePath = '/v2/host-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['regionName'] !== null) {
            $queryParams['region_name'] = $localVarParams['regionName'];
        }
        if ($localVarParams['os'] !== null) {
            $queryParams['os'] = $localVarParams['os'];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群详情
     *
     * 根据主机集群id查询主机集群详情。该接口于2024年09月30日后不再维护，推荐使用新版ShowHostClusterDetail接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeploymentGroupDetailAsync($request)
    {
        return $this->showDeploymentGroupDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeploymentGroupDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentGroupDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentGroupDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群详情
     *
     * 根据主机集群id查询主机集群详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHostClusterDetailAsync($request)
    {
        return $this->showHostClusterDetailAsyncWithHttpInfo($request);
    }
    
    public function showHostClusterDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowHostClusterDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowHostClusterDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主机集群
     *
     * 根据主机集群id修改主机集群信息。该接口于2024年9月30日后不再维护。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeploymentGroupAsync($request)
    {
        return $this->updateDeploymentGroupAsyncWithHttpInfo($request);
    }
    
    public function updateDeploymentGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑主机集群
     *
     * 编辑主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHostClusterAsync($request)
    {
        return $this->updateHostClusterAsyncWithHttpInfo($request);
    }
    
    public function updateHostClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateHostClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateHostClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 判断当前用户在项目下是否有权限创建主机集群
     *
     * 判断当前用户在项目下是否有权限创建主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkWhetherHostGroupCanBeCreatedAsync($request)
    {
        return $this->checkWhetherHostGroupCanBeCreatedAsyncWithHttpInfo($request);
    }
    
    public function checkWhetherHostGroupCanBeCreatedAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/host-groups/creatable/{project_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CheckWhetherHostGroupCanBeCreatedResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CheckWhetherHostGroupCanBeCreatedRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群权限矩阵
     *
     * 根据主机集群id查询主机集群权限矩阵。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostGroupPermissionsAsync($request)
    {
        return $this->listHostGroupPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listHostGroupPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主机集群权限矩阵
     *
     * 根据主机集群id修改主机集群权限矩阵。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHostGroupPermissionsAsync($request)
    {
        return $this->updateHostGroupPermissionsAsyncWithHttpInfo($request);
    }
    
    public function updateHostGroupPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateHostGroupPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateHostGroupPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定应用的应用部署成功率
     *
     * 获取指定应用的应用部署成功率。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskSuccessRateAsync($request)
    {
        return $this->listTaskSuccessRateAsyncWithHttpInfo($request);
    }
    
    public function listTaskSuccessRateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/tasks/metrics/success-rate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListTaskSuccessRateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListTaskSuccessRateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定项目的应用部署成功率
     *
     * 获取指定项目的应用部署成功率。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectSuccessRateAsync($request)
    {
        return $this->showProjectSuccessRateAsyncWithHttpInfo($request);
    }
    
    public function showProjectSuccessRateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/metrics/success-rate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowProjectSuccessRateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowProjectSuccessRateRequest',
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