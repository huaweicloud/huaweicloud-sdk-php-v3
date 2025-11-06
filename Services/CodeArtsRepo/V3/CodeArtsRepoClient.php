<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsRepoClient extends Client
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
        $client = new ClientBuilder(new CodeArtsRepoClient());
        return $client;
    }


    /**
     * 创建提交
     *
     * 能够一次提交位于不同目录的多个文件，目录不存在时，能自动创建目录。支持强制覆盖选项，当选择强制覆盖标志为true时，忽略冲突，强制提交。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCommit($request)
    {
        return $this->createCommitWithHttpInfo($request);
    }

    public function createCommitWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{repo_id}/repository/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateCommitRequest');
    }

    /**
     * 查询某个仓库的提交信息
     *
     * 根据仓库短ID获取提交信息，支持根据文件路径，查询这个路径下所有的commits列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommits($request)
    {
        return $this->listCommitsWithHttpInfo($request);
    }

    public function listCommitsWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{repo_id}/repository/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
        }
        if ($localVarParams['since'] !== null) {
            $queryParams['since'] = $localVarParams['since'];
        }
        if ($localVarParams['until'] !== null) {
            $queryParams['until'] = $localVarParams['until'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['all'] !== null) {
            $queryParams['all'] = $localVarParams['all'];
        }
        if ($localVarParams['withStats'] !== null) {
            $queryParams['with_stats'] = $localVarParams['withStats'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }
        if ($localVarParams['repoId'] !== null) {
            $pathParams['repo_id'] = $localVarParams['repoId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListCommitsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListCommitsRequest');
    }

    /**
     * 查询某个仓库的提交差异信息
     *
     * 根据commit id查询提交差异信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDiffCommit($request)
    {
        return $this->showDiffCommitWithHttpInfo($request);
    }

    public function showDiffCommitWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{repo_id}/repository/commits/{sha}/diff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sha'] !== null) {
            $pathParams['sha'] = $localVarParams['sha'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowDiffCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowDiffCommitRequest');
    }

    /**
     * 查询某个仓库的特定提交信息
     *
     * 获取由commit id或分支或标记的名称标识的特定提交。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSingleCommit($request)
    {
        return $this->showSingleCommitWithHttpInfo($request);
    }

    public function showSingleCommitWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{repo_id}/repository/commits/{sha}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['stats'] !== null) {
            $queryParams['stats'] = $localVarParams['stats'];
        }
        if ($localVarParams['repoId'] !== null) {
            $pathParams['repo_id'] = $localVarParams['repoId'];
        }
        if ($localVarParams['sha'] !== null) {
            $pathParams['sha'] = $localVarParams['sha'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowSingleCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowSingleCommitRequest');
    }

    /**
     * 创建MR检视意见
     *
     * 创建MR检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMergeRequestDiscussion($request)
    {
        return $this->createMergeRequestDiscussionWithHttpInfo($request);
    }

    public function createMergeRequestDiscussionWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge_requests/{merge_request_iid}/discussions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $pathParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateMergeRequestDiscussionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateMergeRequestDiscussionRequest');
    }

    /**
     * 回复MR检视意见
     *
     * 回复MR检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMergeRequestDiscussionNote($request)
    {
        return $this->createMergeRequestDiscussionNoteWithHttpInfo($request);
    }

    public function createMergeRequestDiscussionNoteWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge_requests/{merge_request_iid}/discussions/{discussion_id}/notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $pathParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($localVarParams['discussionId'] !== null) {
            $pathParams['discussion_id'] = $localVarParams['discussionId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateMergeRequestDiscussionNoteResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateMergeRequestDiscussionNoteRequest');
    }

    /**
     * 获取检视意见设置
     *
     * 获取检视意见设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReviewSetting($request)
    {
        return $this->showReviewSettingWithHttpInfo($request);
    }

    public function showReviewSettingWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/review_setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowReviewSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowReviewSettingRequest');
    }

    /**
     * 查询某个仓库的文件信息
     *
     * 获取仓库中文件的信息，如名称、大小、内容。请注意，文件内容是Base64编码的。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFilesByQuery($request)
    {
        return $this->listFilesByQueryWithHttpInfo($request);
    }

    public function listFilesByQueryWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{repo_id}/repository/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['repoId'] !== null) {
            $pathParams['repo_id'] = $localVarParams['repoId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListFilesByQueryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListFilesByQueryRequest');
    }

    /**
     * 查询某个仓库的文件信息
     *
     * 获取仓库中文件的信息，如名称、大小、内容。请注意，文件内容是Base64编码的。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFile($request)
    {
        return $this->showFileWithHttpInfo($request);
    }

    public function showFileWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{repo_id}/repository/files/{file_path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['repoId'] !== null) {
            $pathParams['repo_id'] = $localVarParams['repoId'];
        }
        if ($localVarParams['filePath'] !== null) {
            $pathParams['file_path'] = $localVarParams['filePath'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowFileRequest');
    }

    /**
     * 获取项目下所有仓库信息
     *
     * 获取仓库列表 模糊查询支持范围,如果未传入project_id，则支持按仓库名或项目名模糊查询，否则，只按仓库名模糊匹配。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getAllRepositoryByProjectId($request)
    {
        return $this->getAllRepositoryByProjectIdWithHttpInfo($request);
    }

    public function getAllRepositoryByProjectIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/projects/{project_uuid}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['projectUuid'] !== null) {
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetAllRepositoryByProjectIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetAllRepositoryByProjectIdRequest');
    }

    /**
     * 获取一个项目下可以设置为公开状态的仓库列表
     *
     * 获取一个项目下可以设置为公开状态的仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getProductTemplates($request)
    {
        return $this->getProductTemplatesWithHttpInfo($request);
    }

    public function getProductTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/projects/{project_uuid}/repositories/template_status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectUuid'] !== null) {
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetProductTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetProductTemplatesRequest');
    }

    /**
     * 获取一个项目下可以设置为公开状态的仓库列表
     *
     * 获取一个项目下可以设置为公开状态的仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProductTwoTemplates($request)
    {
        return $this->listProductTwoTemplatesWithHttpInfo($request);
    }

    public function listProductTwoTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{project_uuid}/repositories/template-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectUuid'] !== null) {
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListProductTwoTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListProductTwoTemplatesRequest');
    }

    /**
     * 校验指定项目下的仓库名
     *
     * 一般创建仓库时调用。通过传入项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。,仓库名，来判断仓库是否重名。仓库存在result:false,仓库不存在result:true。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryNameExist($request)
    {
        return $this->showRepositoryNameExistWithHttpInfo($request);
    }

    public function showRepositoryNameExistWithHttpInfo($request)
    {
        $resourcePath = '/v1/projects/{project_uuid}/repositories/validation/{repository_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryNameExistResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryNameExistRequest');
    }

    /**
     * 添加仓库成员
     *
     * 添加仓库成员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addRepoMembers($request)
    {
        return $this->addRepoMembersWithHttpInfo($request);
    }

    public function addRepoMembersWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddRepoMembersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddRepoMembersRequest');
    }

    /**
     * 删除仓库成员
     *
     * 删除仓库成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepoMember($request)
    {
        return $this->deleteRepoMemberWithHttpInfo($request);
    }

    public function deleteRepoMemberWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteRepoMemberResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteRepoMemberRequest');
    }

    /**
     * 获取仓库所有成员记录
     *
     * 获取仓库成员列表,可通过关键字搜索某成员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepoMembers($request)
    {
        return $this->listRepoMembersWithHttpInfo($request);
    }

    public function listRepoMembersWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subject'] !== null) {
            $queryParams['subject'] = $localVarParams['subject'];
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListRepoMembersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListRepoMembersRequest');
    }

    /**
     * 设置成员在仓库中的角色
     *
     * 给仓库中成员设置仓库的操作权限，
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setRepoRole($request)
    {
        return $this->setRepoRoleWithHttpInfo($request);
    }

    public function setRepoRoleWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\SetRepoRoleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\SetRepoRoleRequest');
    }

    /**
     * 添加部署密钥
     *
     * 添加部署密钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDeployKey($request)
    {
        return $this->addDeployKeyWithHttpInfo($request);
    }

    public function addDeployKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_id}/deploy_keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddDeployKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddDeployKeyRequest');
    }

    /**
     * 添加部署密钥
     *
     * 添加部署密钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDeployKeyV2($request)
    {
        return $this->addDeployKeyV2WithHttpInfo($request);
    }

    public function addDeployKeyV2WithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/deploy-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddDeployKeyV2Response',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddDeployKeyV2Request');
    }

    /**
     * 新建保护分支
     *
     * 新建保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addProtectBranchV2($request)
    {
        return $this->addProtectBranchV2WithHttpInfo($request);
    }

    public function addProtectBranchV2WithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/branch/{branch_name}/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['branchName'] !== null) {
            $pathParams['branch_name'] = $localVarParams['branchName'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddProtectBranchV2Response',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddProtectBranchV2Request');
    }

    /**
     * 新建标签
     *
     * 新建标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTagV2($request)
    {
        return $this->addTagV2WithHttpInfo($request);
    }

    public function addTagV2WithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddTagV2Response',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddTagV2Request');
    }

    /**
     * 创建仓库
     *
     * 用指定的名称在指定项目上创建仓库。传入参数：仓库名、模板id、是否导入项目成员、归属项目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepository($request)
    {
        return $this->createRepositoryWithHttpInfo($request);
    }

    public function createRepositoryWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateRepositoryRequest');
    }

    /**
     * 删除仓库部署密钥
     *
     * 删除仓库部署密钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeployKey($request)
    {
        return $this->deleteDeployKeyWithHttpInfo($request);
    }

    public function deleteDeployKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_id}/deploy_keys/{key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyId'] !== null) {
            $pathParams['key_id'] = $localVarParams['keyId'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteDeployKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteDeployKeyRequest');
    }

    /**
     * 删除仓库部署密钥
     *
     * 删除仓库部署密钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeployKeyV2($request)
    {
        return $this->deleteDeployKeyV2WithHttpInfo($request);
    }

    public function deleteDeployKeyV2WithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/deploy-keys/{key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyId'] !== null) {
            $pathParams['key_id'] = $localVarParams['keyId'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteDeployKeyV2Response',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteDeployKeyV2Request');
    }

    /**
     * 删除仓库
     *
     * 根据仓库32位uuid删除指定的仓库
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
        $resourcePath = '/v1/repositories/{repository_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteRepositoryRequest');
    }

    /**
     * 查询项目下的某个仓库
     *
     * 不建议再使用,建议使用/{repository_uuid}/status
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getRepositoryByProjectId($request)
    {
        return $this->getRepositoryByProjectIdWithHttpInfo($request);
    }

    public function getRepositoryByProjectIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetRepositoryByProjectIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetRepositoryByProjectIdRequest');
    }

    /**
     * 获取公开示例模板列表
     *
     * 获取公开示例模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getTemplates($request)
    {
        return $this->getTemplatesWithHttpInfo($request);
    }

    public function getTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/repository_templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['platform'] !== null) {
            $queryParams['platform'] = $localVarParams['platform'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
        }
        if ($localVarParams['pipeline'] !== null) {
            $queryParams['pipeline'] = $localVarParams['pipeline'];
        }
        if ($localVarParams['entertype'] !== null) {
            $queryParams['entertype'] = $localVarParams['entertype'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['dateorder'] !== null) {
            $queryParams['dateorder'] = $localVarParams['dateorder'];
        }
        if ($localVarParams['usedtimeorder'] !== null) {
            $queryParams['usedtimeorder'] = $localVarParams['usedtimeorder'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\GetTemplatesRequest');
    }

    /**
     * 获取仓库分支列表
     *
     * 获取仓库分支列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBranchesByRepositoryId($request)
    {
        return $this->listBranchesByRepositoryIdWithHttpInfo($request);
    }

    public function listBranchesByRepositoryIdWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }
        if ($localVarParams['match'] !== null) {
            $queryParams['match'] = $localVarParams['match'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListBranchesByRepositoryIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListBranchesByRepositoryIdRequest');
    }

    /**
     * 获取仓库上一次的提交统计信息
     *
     * 获取仓库上一次的提交统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommitStatistics($request)
    {
        return $this->listCommitStatisticsWithHttpInfo($request);
    }

    public function listCommitStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_id}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['branchName'] !== null) {
            $queryParams['branch_name'] = $localVarParams['branchName'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListCommitStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListCommitStatisticsRequest');
    }

    /**
     * 获取一个仓库下特定分支指定文件内容
     *
     * 获取一个仓库下特定分支指定文件内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFiles($request)
    {
        return $this->listFilesWithHttpInfo($request);
    }

    public function listFilesWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/branch/{branch_name}/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($localVarParams['branchName'] !== null) {
            $pathParams['branch_name'] = $localVarParams['branchName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListFilesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListFilesRequest');
    }

    /**
     * 获取变更文件
     *
     * 获取变更文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeChanges($request)
    {
        return $this->listMergeChangesWithHttpInfo($request);
    }

    public function listMergeChangesWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge-requests/{merge_request_iid}/changes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['ignoreWhitespaceChange'] !== null) {
            $queryParams['ignore_whitespace_change'] = $localVarParams['ignoreWhitespaceChange'];
        }
        if ($localVarParams['forceEncode'] !== null) {
            $queryParams['force_encode'] = $localVarParams['forceEncode'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['commitId'] !== null) {
            $queryParams['commit_id'] = $localVarParams['commitId'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $pathParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeChangesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeChangesRequest');
    }

    /**
     * 获取变更文件列表
     *
     * 获取变更文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeChangesTrees($request)
    {
        return $this->listMergeChangesTreesWithHttpInfo($request);
    }

    public function listMergeChangesTreesWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge-requests/{merge_request_iid}/changes-trees';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['commitId'] !== null) {
            $queryParams['commit_id'] = $localVarParams['commitId'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $pathParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeChangesTreesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeChangesTreesRequest');
    }

    /**
     * 获取仓库合并请求列表
     *
     * 获取仓库合并请求列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequest($request)
    {
        return $this->listMergeRequestWithHttpInfo($request);
    }

    public function listMergeRequestWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge_request';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeRequestRequest');
    }

    /**
     * 根据仓库短ID和合并请求短ID获取检视人信息
     *
     * 根据仓库短ID和合并请求短ID获取检视人信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestReviewers($request)
    {
        return $this->listMergeRequestReviewersWithHttpInfo($request);
    }

    public function listMergeRequestReviewersWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge-requests/{merge_request_iid}/approval-reviewers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $pathParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeRequestReviewersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListMergeRequestReviewersRequest');
    }

    /**
     * 获取关联工作项信息
     *
     * 获取关联工作项信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRelatedCommits($request)
    {
        return $this->listRelatedCommitsWithHttpInfo($request);
    }

    public function listRelatedCommitsWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_uuid}/related-commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListRelatedCommitsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListRelatedCommitsRequest');
    }

    /**
     * 查看仓库的创建状态
     *
     * 获取仓库状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryStatus($request)
    {
        return $this->listRepositoryStatusWithHttpInfo($request);
    }

    public function listRepositoryStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListRepositoryStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListRepositoryStatusRequest');
    }

    /**
     * 获取分支目录下的文件
     *
     * 获取分支目录下的文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubfiles($request)
    {
        return $this->listSubfilesWithHttpInfo($request);
    }

    public function listSubfilesWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/branch/{branch_name}/sub-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($localVarParams['branchName'] !== null) {
            $pathParams['branch_name'] = $localVarParams['branchName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListSubfilesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListSubfilesRequest');
    }

    /**
     * 设置仓库是公开状态还是私有状态
     *
     * 设置仓库是公开状态还是私有状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTemplatesTwo($request)
    {
        return $this->listTemplatesTwoWithHttpInfo($request);
    }

    public function listTemplatesTwoWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_uuid}/template-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListTemplatesTwoResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListTemplatesTwoRequest');
    }

    /**
     * 获取公开示例模板列表
     *
     * 获取公开示例模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTwoTemplates($request)
    {
        return $this->listTwoTemplatesWithHttpInfo($request);
    }

    public function listTwoTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/repository-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['platform'] !== null) {
            $queryParams['platform'] = $localVarParams['platform'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
        }
        if ($localVarParams['pipeline'] !== null) {
            $queryParams['pipeline'] = $localVarParams['pipeline'];
        }
        if ($localVarParams['enterType'] !== null) {
            $queryParams['enter_type'] = $localVarParams['enterType'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['dateOrder'] !== null) {
            $queryParams['date_order'] = $localVarParams['dateOrder'];
        }
        if ($localVarParams['usedTimeOrder'] !== null) {
            $queryParams['used_time_order'] = $localVarParams['usedTimeOrder'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListTwoTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListTwoTemplatesRequest');
    }

    /**
     * 设置仓库是公开状态还是私有状态
     *
     * 设置仓库是公开状态还是私有状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function shareTemplates($request)
    {
        return $this->shareTemplatesWithHttpInfo($request);
    }

    public function shareTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/template_status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShareTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShareTemplatesRequest');
    }

    /**
     * 查询某仓库对应的分支
     *
     * 根据仓库id获取指定仓库的分支列表.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBranchesByRepositoryId($request)
    {
        return $this->showBranchesByRepositoryIdWithHttpInfo($request);
    }

    public function showBranchesByRepositoryIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_id}/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowBranchesByRepositoryIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowBranchesByRepositoryIdRequest');
    }

    /**
     * 查询某仓库的标签列表
     *
     * 查询指定仓库对应的分支。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBranchesByTwoRepositoryId($request)
    {
        return $this->showBranchesByTwoRepositoryIdWithHttpInfo($request);
    }

    public function showBranchesByTwoRepositoryIdWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowBranchesByTwoRepositoryIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowBranchesByTwoRepositoryIdRequest');
    }

    /**
     * 根据组名和仓库名查询某仓库某分支对应的提交
     *
     * 根据仓库组名、仓库名和分支获取提交列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitsByBranch($request)
    {
        return $this->showCommitsByBranchWithHttpInfo($request);
    }

    public function showCommitsByBranchWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{group_name}/{repository_name}/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
        }
        if ($localVarParams['groupName'] !== null) {
            $pathParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowCommitsByBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowCommitsByBranchRequest');
    }

    /**
     * 根据仓库id查询仓库某分支对应的提交，提供更多可选参数
     *
     * 根据仓库id查询仓库某分支对应的提交.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitsByRepoId($request)
    {
        return $this->showCommitsByRepoIdWithHttpInfo($request);
    }

    public function showCommitsByRepoIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_id}/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['author'] !== null) {
            $queryParams['author'] = $localVarParams['author'];
        }
        if ($localVarParams['beginDate'] !== null) {
            $queryParams['begin_date'] = $localVarParams['beginDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['message'] !== null) {
            $queryParams['message'] = $localVarParams['message'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
        }
        if ($localVarParams['statFormat'] !== null) {
            $queryParams['stat_format'] = $localVarParams['statFormat'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowCommitsByRepoIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowCommitsByRepoIdRequest');
    }

    /**
     * 修改被流水线引用的仓库状态
     *
     * 修改被流水线引用的仓库状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHasPipeline($request)
    {
        return $this->showHasPipelineWithHttpInfo($request);
    }

    public function showHasPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/pipeline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowHasPipelineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowHasPipelineRequest');
    }

    /**
     * 获取一个仓库下特定分支的图片文件
     *
     * 获取一个仓库下特定分支的图片文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImageBlob($request)
    {
        return $this->showImageBlobWithHttpInfo($request);
    }

    public function showImageBlobWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/branch/{branch_name}/image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($localVarParams['branchName'] !== null) {
            $pathParams['branch_name'] = $localVarParams['branchName'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowImageBlobResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowImageBlobRequest');
    }

    /**
     * 判断用户是否有仓库的管理员权限
     *
     * 判断用户是否有仓库的管理员权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMaster($request)
    {
        return $this->showMasterWithHttpInfo($request);
    }

    public function showMasterWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/master';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowMasterResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowMasterRequest');
    }

    /**
     * 获取仓库合并请求详情
     *
     * 获取仓库合并请求详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequest($request)
    {
        return $this->showMergeRequestWithHttpInfo($request);
    }

    public function showMergeRequestWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge_request/{merge_request_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestId'] !== null) {
            $pathParams['merge_request_id'] = $localVarParams['mergeRequestId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowMergeRequestRequest');
    }

    /**
     * 根据仓库名组名获取仓库短id，用以拼接与commitid对应提交详情页面url
     *
     * 获取仓库短id,用于获取仓库详情页面url
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepoId($request)
    {
        return $this->showRepoIdWithHttpInfo($request);
    }

    public function showRepoIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/repoid';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $queryParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepoIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepoIdRequest');
    }

    /**
     * 下载仓库
     *
     * 按照指定格式下载仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryArchive($request)
    {
        return $this->showRepositoryArchiveWithHttpInfo($request);
    }

    public function showRepositoryArchiveWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_uuid}/archive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sha'] !== null) {
            $queryParams['sha'] = $localVarParams['sha'];
        }
        if ($localVarParams['format'] !== null) {
            $queryParams['format'] = $localVarParams['format'];
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryArchiveResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryArchiveRequest');
    }

    /**
     * 查询某个仓库的详细信息
     *
     * 根据仓库UUID(由CreateRepository接口返回)获取仓库信息仓库信息。返回 包含id，name，组名，仓库访问URL。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryByUuid($request)
    {
        return $this->showRepositoryByUuidWithHttpInfo($request);
    }

    public function showRepositoryByUuidWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryByUuidResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryByUuidRequest');
    }

    /**
     * 仓库统计
     *
     * 根据仓库短id，查询仓库的代码提交记录统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryStatistics($request)
    {
        return $this->showRepositoryStatisticsWithHttpInfo($request);
    }

    public function showRepositoryStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_id}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowRepositoryStatisticsRequest');
    }

    /**
     * 获取代码提交行数
     *
     * 获取指定日期内代码仓指定分支的代码提交行数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticCommit($request)
    {
        return $this->showStatisticCommitWithHttpInfo($request);
    }

    public function showStatisticCommitWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/commit_lines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
        }
        if ($localVarParams['beginDate'] !== null) {
            $queryParams['begin_date'] = $localVarParams['beginDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowStatisticCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowStatisticCommitRequest');
    }

    /**
     * 获取代码提交行数
     *
     * 获取指定日期内代码仓指定分支的代码提交行数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticCommitV3($request)
    {
        return $this->showStatisticCommitV3WithHttpInfo($request);
    }

    public function showStatisticCommitV3WithHttpInfo($request)
    {
        $resourcePath = '/v3/repositories/{repository_id}/commit-lines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
        }
        if ($localVarParams['beginDate'] !== null) {
            $queryParams['begin_date'] = $localVarParams['beginDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowStatisticCommitV3Response',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowStatisticCommitV3Request');
    }

    /**
     * 获取仓库统计数据
     *
     * 获取仓库统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticalData($request)
    {
        return $this->showStatisticalDataWithHttpInfo($request);
    }

    public function showStatisticalDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{repository_uuid}/statistic-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryUuid'] !== null) {
            $pathParams['repository_uuid'] = $localVarParams['repositoryUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowStatisticalDataResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowStatisticalDataRequest');
    }

    /**
     * 合并请求代码审核
     *
     * 合并请求代码审核
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestApprovalState($request)
    {
        return $this->updateMergeRequestApprovalStateWithHttpInfo($request);
    }

    public function updateMergeRequestApprovalStateWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/merge-requests/{merge_request_iid}/approval';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $pathParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\UpdateMergeRequestApprovalStateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\UpdateMergeRequestApprovalStateRequest');
    }

    /**
     * 添加ssh key
     *
     * 添加ssh key
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSshKey($request)
    {
        return $this->addSshKeyWithHttpInfo($request);
    }

    public function addSshKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/users/sshkey';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddSshKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddSshKeyRequest');
    }

    /**
     * 删除用户公钥
     *
     * 删除用户公钥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSShkey($request)
    {
        return $this->deleteSShkeyWithHttpInfo($request);
    }

    public function deleteSShkeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/users/sshkey/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteSShkeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteSShkeyRequest');
    }

    /**
     * 获取ssh key列表
     *
     * 获取ssh key列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSshKeys($request)
    {
        return $this->listSshKeysWithHttpInfo($request);
    }

    public function listSshKeysWithHttpInfo($request)
    {
        $resourcePath = '/v1/users/sshkey';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListSshKeysResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListSshKeysRequest');
    }

    /**
     * 检验私钥是否有拉取代码的权限
     *
     * 检验私钥是否有拉取代码的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPrivateKeyVerify($request)
    {
        return $this->showPrivateKeyVerifyWithHttpInfo($request);
    }

    public function showPrivateKeyVerifyWithHttpInfo($request)
    {
        $resourcePath = '/v1/users/sshkey/privatekey/verify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowPrivateKeyVerifyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowPrivateKeyVerifyRequest');
    }

    /**
     * https账号密码校验
     *
     * 判断用户使用 https 上传/下载代码时输入的用户名和密码是否合法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function validateHttpsInfo($request)
    {
        return $this->validateHttpsInfoWithHttpInfo($request);
    }

    public function validateHttpsInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/user/{iam_user_uuid}/validateHttpsInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iamUserUuid'] !== null) {
            $pathParams['iam_user_uuid'] = $localVarParams['iamUserUuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ValidateHttpsInfoResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ValidateHttpsInfoRequest');
    }

    /**
     * https账号密码校验
     *
     * 判断用户使用 https 上传/下载代码时输入的用户名和密码是否合法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function validateHttpsInfoV2($request)
    {
        return $this->validateHttpsInfoV2WithHttpInfo($request);
    }

    public function validateHttpsInfoV2WithHttpInfo($request)
    {
        $resourcePath = '/v2/user/{iam_user_uuid}/validate-https-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iamUserUuid'] !== null) {
            $pathParams['iam_user_uuid'] = $localVarParams['iamUserUuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ValidateHttpsInfoV2Response',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ValidateHttpsInfoV2Request');
    }

    /**
     * 创建分支
     *
     * 根据仓库id在指定仓库中创建分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNewBranch($request)
    {
        return $this->createNewBranchWithHttpInfo($request);
    }

    public function createNewBranchWithHttpInfo($request)
    {
        $resourcePath = '/v2/repositories/{repository_id}/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateNewBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateNewBranchRequest');
    }

    /**
     * 分支关联工作项
     *
     * 分支关联工作项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateIssues($request)
    {
        return $this->associateIssuesWithHttpInfo($request);
    }

    public function associateIssuesWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/issues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AssociateIssuesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AssociateIssuesRequest');
    }

    /**
     * 创建项目、仓库
     *
     * 创建项目后，创建仓库组由后台生成方式 传入参数：仓库名、模板id、是否导入项目成员、归属项目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectAndRepositories($request)
    {
        return $this->createProjectAndRepositoriesWithHttpInfo($request);
    }

    public function createProjectAndRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateProjectAndRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateProjectAndRepositoriesRequest');
    }

    /**
     * 创建项目并fork仓库
     *
     * 创建仓库后fork仓库 传入参数：仓库名、是否导入项目成员、归属项目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectAndforkRepositories($request)
    {
        return $this->createProjectAndforkRepositoriesWithHttpInfo($request);
    }

    public function createProjectAndforkRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/repositories/fork';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateProjectAndforkRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CreateProjectAndforkRepositoriesRequest');
    }

    /**
     * 查询用户的所有仓库
     *
     * 获取用户的所有仓库信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserAllRepositories($request)
    {
        return $this->listUserAllRepositoriesWithHttpInfo($request);
    }

    public function listUserAllRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListUserAllRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListUserAllRepositoriesRequest');
    }

    /**
     * 查询项目下的所有仓库
     *
     * 获取仓库列表,模糊查询支持范围,如果未传入project uuid，则支持按仓库名或项目名模糊查询，否则，只按仓库名模糊匹配
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAllRepositoryByTwoProjectId($request)
    {
        return $this->showAllRepositoryByTwoProjectIdWithHttpInfo($request);
    }

    public function showAllRepositoryByTwoProjectIdWithHttpInfo($request)
    {
        $resourcePath = '/v2/projects/{project_uuid}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['projectUuid'] !== null) {
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowAllRepositoryByTwoProjectIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ShowAllRepositoryByTwoProjectIdRequest');
    }

    /**
     * 为指定仓库添加hook
     *
     * 提交代码自动触发编译构建，添加仓库钩子
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addHooks($request)
    {
        return $this->addHooksWithHttpInfo($request);
    }

    public function addHooksWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{group_name}/{repository_name}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupName'] !== null) {
            $pathParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddHooksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\AddHooksRequest');
    }

    /**
     * 删除指定仓库的 hook
     *
     * 提交代码自动触发编译构建，删除仓库钩子
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHooks($request)
    {
        return $this->deleteHooksWithHttpInfo($request);
    }

    public function deleteHooksWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{group_name}/{repository_name}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupName'] !== null) {
            $pathParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteHooksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DeleteHooksRequest');
    }

    /**
     * 查询指定仓库的webhook
     *
     * 获取仓库webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHooks($request)
    {
        return $this->listHooksWithHttpInfo($request);
    }

    public function listHooksWithHttpInfo($request)
    {
        $resourcePath = '/v1/repositories/{group_name}/{repository_name}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hookId'] !== null) {
            $queryParams['hook_id'] = $localVarParams['hookId'];
        }
        if ($localVarParams['groupName'] !== null) {
            $pathParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListHooksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ListHooksRequest');
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