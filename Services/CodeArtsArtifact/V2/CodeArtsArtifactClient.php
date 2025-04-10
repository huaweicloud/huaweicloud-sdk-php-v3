<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsArtifactClient extends Client
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
        $client = new ClientBuilder(new CodeArtsArtifactClient());
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
    public function batchDeleteTrashes($request)
    {
        return $this->batchDeleteTrashesWithHttpInfo($request);
    }

    public function batchDeleteTrashesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\BatchDeleteTrashesRequest');
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
    public function batchRestoreRepo($request)
    {
        return $this->batchRestoreRepoWithHttpInfo($request);
    }

    public function batchRestoreRepoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\BatchRestoreRepoRequest');
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
    public function createArtifactory($request)
    {
        return $this->createArtifactoryWithHttpInfo($request);
    }

    public function createArtifactoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateArtifactoryRequest');
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
    public function createAttention($request)
    {
        return $this->createAttentionWithHttpInfo($request);
    }

    public function createAttentionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateAttentionRequest');
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
    public function createDockerRepositories($request)
    {
        return $this->createDockerRepositoriesWithHttpInfo($request);
    }

    public function createDockerRepositoriesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateDockerRepositoriesRequest');
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
    public function createMavenRepo($request)
    {
        return $this->createMavenRepoWithHttpInfo($request);
    }

    public function createMavenRepoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateMavenRepoRequest');
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
    public function createProjectRelatedRepository($request)
    {
        return $this->createProjectRelatedRepositoryWithHttpInfo($request);
    }

    public function createProjectRelatedRepositoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\CreateProjectRelatedRepositoryRequest');
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
    public function deleteArtifactFile($request)
    {
        return $this->deleteArtifactFileWithHttpInfo($request);
    }

    public function deleteArtifactFileWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DeleteArtifactFileRequest');
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
    public function deleteRepository($request)
    {
        return $this->deleteRepositoryWithHttpInfo($request);
    }

    public function deleteRepositoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DeleteRepositoryRequest');
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
    public function listAllRepositories($request)
    {
        return $this->listAllRepositoriesWithHttpInfo($request);
    }

    public function listAllRepositoriesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListAllRepositoriesRequest');
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
    public function listArtifactoryComponent($request)
    {
        return $this->listArtifactoryComponentWithHttpInfo($request);
    }

    public function listArtifactoryComponentWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListArtifactoryComponentRequest');
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
    public function listArtifactoryStorageStatistic($request)
    {
        return $this->listArtifactoryStorageStatisticWithHttpInfo($request);
    }

    public function listArtifactoryStorageStatisticWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListArtifactoryStorageStatisticRequest');
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
    public function listAttentions($request)
    {
        return $this->listAttentionsWithHttpInfo($request);
    }

    public function listAttentionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ListAttentionsRequest');
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
    public function modifyRepository($request)
    {
        return $this->modifyRepositoryWithHttpInfo($request);
    }

    public function modifyRepositoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ModifyRepositoryRequest');
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
    public function resetUserPassword($request)
    {
        return $this->resetUserPasswordWithHttpInfo($request);
    }

    public function resetUserPasswordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ResetUserPasswordRequest');
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
    public function searchArtifacts($request)
    {
        return $this->searchArtifactsWithHttpInfo($request);
    }

    public function searchArtifactsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SearchArtifactsRequest');
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
    public function searchByChecksum($request)
    {
        return $this->searchByChecksumWithHttpInfo($request);
    }

    public function searchByChecksumWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SearchByChecksumRequest');
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
    public function showAudit($request)
    {
        return $this->showAuditWithHttpInfo($request);
    }

    public function showAuditWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowAuditRequest');
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
    public function showFileTree($request)
    {
        return $this->showFileTreeWithHttpInfo($request);
    }

    public function showFileTreeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowFileTreeRequest');
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
    public function showMavenInfo($request)
    {
        return $this->showMavenInfoWithHttpInfo($request);
    }

    public function showMavenInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowMavenInfoRequest');
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
    public function showProjectList($request)
    {
        return $this->showProjectListWithHttpInfo($request);
    }

    public function showProjectListWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowProjectListRequest');
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
    public function showProjectReleaseFiles($request)
    {
        return $this->showProjectReleaseFilesWithHttpInfo($request);
    }

    public function showProjectReleaseFilesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowProjectReleaseFilesRequest');
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
    public function showReleaseProjectFiles($request)
    {
        return $this->showReleaseProjectFilesWithHttpInfo($request);
    }

    public function showReleaseProjectFilesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowReleaseProjectFilesRequest');
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
    public function showRepository($request)
    {
        return $this->showRepositoryWithHttpInfo($request);
    }

    public function showRepositoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowRepositoryRequest');
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
    public function showRepositoryInfo($request)
    {
        return $this->showRepositoryInfoWithHttpInfo($request);
    }

    public function showRepositoryInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowRepositoryInfoRequest');
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
    public function showStorage($request)
    {
        return $this->showStorageWithHttpInfo($request);
    }

    public function showStorageWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowStorageRequest');
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
    public function showUserPrivileges($request)
    {
        return $this->showUserPrivilegesWithHttpInfo($request);
    }

    public function showUserPrivilegesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ShowUserPrivilegesRequest');
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
    public function updateArtifactory($request)
    {
        return $this->updateArtifactoryWithHttpInfo($request);
    }

    public function updateArtifactoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\UpdateArtifactoryRequest');
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