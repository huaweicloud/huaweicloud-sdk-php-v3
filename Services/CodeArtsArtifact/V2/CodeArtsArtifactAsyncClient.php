<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsArtifactAsyncClient extends Client
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
        $client = new ClientBuilder(new CodeArtsArtifactAsyncClient());
        return $client;
    }

    /**
     * 批量删除回收站
     *
     * 批量删除回收站
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteTrashesAsync($request)
    {
        return $this->batchDeleteTrashesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteTrashesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/trashes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\BatchDeleteTrashesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\BatchDeleteTrashesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量还原回收站
     *
     * 批量还原回收站
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRestoreRepoAsync($request)
    {
        return $this->batchRestoreRepoAsyncWithHttpInfo($request);
    }
    
    public function batchRestoreRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/trashes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\BatchRestoreRepoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\BatchRestoreRepoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建非maven仓库
     *
     * 创建非maven仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createArtifactoryAsync($request)
    {
        return $this->createArtifactoryAsyncWithHttpInfo($request);
    }
    
    public function createArtifactoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/artifact/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateArtifactoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateArtifactoryRequest',
            $asyncRequest = true);
    }

    /**
     * 关注组件/取消关注组件
     *
     * 关注组件/取消关注组件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAttentionAsync($request)
    {
        return $this->createAttentionAsyncWithHttpInfo($request);
    }
    
    public function createAttentionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/attention';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateAttentionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateAttentionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建docker仓库
     *
     * 创建docker仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDockerRepositoriesAsync($request)
    {
        return $this->createDockerRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function createDockerRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateDockerRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateDockerRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建maven仓库
     *
     * 创建maven仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMavenRepoAsync($request)
    {
        return $this->createMavenRepoAsyncWithHttpInfo($request);
    }
    
    public function createMavenRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/maven/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateMavenRepoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateMavenRepoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建项目关联仓库
     *
     * 创建项目管理关联仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectRelatedRepositoryAsync($request)
    {
        return $this->createProjectRelatedRepositoryAsyncWithHttpInfo($request);
    }
    
    public function createProjectRelatedRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/maven/project/repository';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateProjectRelatedRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateProjectRelatedRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 非maven删除文件
     *
     * 非maven删除文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteArtifactFileAsync($request)
    {
        return $this->deleteArtifactFileAsyncWithHttpInfo($request);
    }
    
    public function deleteArtifactFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DeleteArtifactFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DeleteArtifactFileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库到回收站
     *
     * 删除仓库到回收站
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepositoryAsync($request)
    {
        return $this->deleteRepositoryAsyncWithHttpInfo($request);
    }
    
    public function deleteRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DeleteRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DeleteRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仓库详情，不会去统计仓库下的制品数量
     *
     * 查询仓库详情，不会去统计仓库下的制品数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllRepositoriesAsync($request)
    {
        return $this->listAllRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listAllRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/{tenant_id}/{project_id}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['qname'] !== null) {
            $queryParams['qname'] = $localVarParams['qname'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['format'] !== null) {
            $queryParams['format'] = $localVarParams['format'];
        }
        if ($localVarParams['formatList'] !== null) {
            $queryParams['format_list'] = $localVarParams['formatList'];
        }
        if ($localVarParams['isRecycleBin'] !== null) {
            $queryParams['is_recycle_bin'] = $localVarParams['isRecycleBin'];
        }
        if ($localVarParams['isNeedPaging'] !== null) {
            $queryParams['is_need_paging'] = $localVarParams['isNeedPaging'];
        }
        if ($localVarParams['inProject'] !== null) {
            $queryParams['in_project'] = $localVarParams['inProject'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListAllRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListAllRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仓库文件详情
     *
     * 查询仓库文件详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listArtifactoryComponentAsync($request)
    {
        return $this->listArtifactoryComponentAsyncWithHttpInfo($request);
    }
    
    public function listArtifactoryComponentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/{tenant_id}/{project_id}/{repo_name}/file-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['format'] !== null) {
            $queryParams['format'] = $localVarParams['format'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['repoName'] !== null) {
            $pathParams['repo_name'] = $localVarParams['repoName'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListArtifactoryComponentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListArtifactoryComponentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询存储容量趋势
     *
     * 查询存储容量趋势
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listArtifactoryStorageStatisticAsync($request)
    {
        return $this->listArtifactoryStorageStatisticAsyncWithHttpInfo($request);
    }
    
    public function listArtifactoryStorageStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/{tenant_id}/{project_id}/storageinfo/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repo'] !== null) {
            $queryParams['repo'] = $localVarParams['repo'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListArtifactoryStorageStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListArtifactoryStorageStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 查询关注列表
     *
     * 查询关注列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttentionsAsync($request)
    {
        return $this->listAttentionsAsyncWithHttpInfo($request);
    }
    
    public function listAttentionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/attention/artifacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListAttentionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListAttentionsRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑仓库
     *
     * 编辑仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyRepositoryAsync($request)
    {
        return $this->modifyRepositoryAsyncWithHttpInfo($request);
    }
    
    public function modifyRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/repositories/tab/{tab_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tabId'] !== null) {
            $pathParams['tab_id'] = $localVarParams['tabId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ModifyRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ModifyRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 重置用户密码
     *
     * 重置用户密码
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetUserPasswordAsync($request)
    {
        return $this->resetUserPasswordAsyncWithHttpInfo($request);
    }
    
    public function resetUserPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/maven/users/me';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ResetUserPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ResetUserPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 统筹搜索
     *
     * 统筹搜索
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchArtifactsAsync($request)
    {
        return $this->searchArtifactsAsyncWithHttpInfo($request);
    }
    
    public function searchArtifactsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/tree/repos/artifacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SearchArtifactsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SearchArtifactsRequest',
            $asyncRequest = true);
    }

    /**
     * 通过checksum搜索文件
     *
     * 通过checksum搜索文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchByChecksumAsync($request)
    {
        return $this->searchByChecksumAsyncWithHttpInfo($request);
    }
    
    public function searchByChecksumAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/search/checksum';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['checksum'] !== null) {
            $queryParams['checksum'] = $localVarParams['checksum'];
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['format'] !== null) {
            $queryParams['format'] = $localVarParams['format'];
        }
        if ($localVarParams['inProject'] !== null) {
            $queryParams['in_project'] = $localVarParams['inProject'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SearchByChecksumResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SearchByChecksumRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仓库或文件的审计日志信息
     *
     * 查询仓库或文件的审计日志信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAuditAsync($request)
    {
        return $this->showAuditAsyncWithHttpInfo($request);
    }
    
    public function showAuditAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/{tenant_id}/{project_id}/{module}/{repo}/audit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['module'] !== null) {
            $pathParams['module'] = $localVarParams['module'];
        }
        if ($localVarParams['repo'] !== null) {
            $pathParams['repo'] = $localVarParams['repo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowAuditResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowAuditRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仓库文件夹目录
     *
     * 查询仓库文件夹目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFileTreeAsync($request)
    {
        return $this->showFileTreeAsyncWithHttpInfo($request);
    }
    
    public function showFileTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/{tenant_id}/{project_id}/{repo_name}/file-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['isRecycleBin'] !== null) {
            $queryParams['is_recycle_bin'] = $localVarParams['isRecycleBin'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['repoName'] !== null) {
            $pathParams['repo_name'] = $localVarParams['repoName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowFileTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowFileTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户Maven仓库列表和账号密码
     *
     * 查询租户Maven仓库列表和账号密码，支持跨租户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMavenInfoAsync($request)
    {
        return $this->showMavenInfoAsyncWithHttpInfo($request);
    }
    
    public function showMavenInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/maven/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policy'] !== null) {
            $queryParams['policy'] = $localVarParams['policy'];
        }
        if ($localVarParams['access'] !== null) {
            $queryParams['access'] = $localVarParams['access'];
        }
        if ($localVarParams['default'] !== null) {
            $queryParams['default'] = $localVarParams['default'];
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowMavenInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowMavenInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目管理关联仓库
     *
     * 查询项目管理关联仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectListAsync($request)
    {
        return $this->showProjectListAsyncWithHttpInfo($request);
    }
    
    public function showProjectListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/maven/repository/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowProjectListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowProjectListRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下文件版本信息列表
     *
     * 获取项目下文件版本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectReleaseFilesAsync($request)
    {
        return $this->showProjectReleaseFilesAsyncWithHttpInfo($request);
    }
    
    public function showProjectReleaseFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/release/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowProjectReleaseFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowProjectReleaseFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下文件版本信息列表
     *
     * 获取项目下文件版本信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReleaseProjectFilesAsync($request)
    {
        return $this->showReleaseProjectFilesAsyncWithHttpInfo($request);
    }
    
    public function showReleaseProjectFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/devreposerver/v2/release/{project_id}/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowReleaseProjectFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowReleaseProjectFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个仓库详细信息，会去统计仓库下的制品数量
     *
     * 查询单个仓库详细信息，会去统计仓库下的制品数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryAsync($request)
    {
        return $this->showRepositoryAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/{tenant_id}/{project_id}/{repo_id}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['repoId'] !== null) {
            $pathParams['repo_id'] = $localVarParams['repoId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库信息
     *
     * 查看仓库信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryInfoAsync($request)
    {
        return $this->showRepositoryInfoAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/repositories/{repo_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repoId'] !== null) {
            $pathParams['repo_id'] = $localVarParams['repoId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowRepositoryInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowRepositoryInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 仓库用量查询
     *
     * 仓库用量查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStorageAsync($request)
    {
        return $this->showStorageAsyncWithHttpInfo($request);
    }
    
    public function showStorageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['formatList'] !== null) {
            $queryParams['format_list'] = $localVarParams['formatList'];
        }
        if ($localVarParams['inProject'] !== null) {
            $queryParams['in_project'] = $localVarParams['inProject'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowStorageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowStorageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户在项目下的权限
     *
     * 查询用户在项目下的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserPrivilegesAsync($request)
    {
        return $this->showUserPrivilegesAsyncWithHttpInfo($request);
    }
    
    public function showUserPrivilegesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v3/user/{project_id}/privileges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowUserPrivilegesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowUserPrivilegesRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑非maven仓库信息
     *
     * 编辑非maven仓库信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateArtifactoryAsync($request)
    {
        return $this->updateArtifactoryAsyncWithHttpInfo($request);
    }
    
    public function updateArtifactoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/cloudartifact/v5/artifact/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\UpdateArtifactoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\UpdateArtifactoryRequest',
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