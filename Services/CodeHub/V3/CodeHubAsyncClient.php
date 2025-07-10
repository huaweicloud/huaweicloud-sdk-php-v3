<?php

namespace HuaweiCloud\SDK\CodeHub\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeHubAsyncClient extends Client
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
        $client = new ClientBuilder(new CodeHubAsyncClient());
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
    public function createCommitAsync($request)
    {
        return $this->createCommitAsyncWithHttpInfo($request);
    }
    
    public function createCommitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateCommitRequest',
            $asyncRequest = true);
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
    public function listCommitsAsync($request)
    {
        return $this->listCommitsAsyncWithHttpInfo($request);
    }
    
    public function listCommitsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListCommitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListCommitsRequest',
            $asyncRequest = true);
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
    public function showDiffCommitAsync($request)
    {
        return $this->showDiffCommitAsyncWithHttpInfo($request);
    }
    
    public function showDiffCommitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowDiffCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowDiffCommitRequest',
            $asyncRequest = true);
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
    public function showSingleCommitAsync($request)
    {
        return $this->showSingleCommitAsyncWithHttpInfo($request);
    }
    
    public function showSingleCommitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowSingleCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowSingleCommitRequest',
            $asyncRequest = true);
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
    public function createMergeRequestDiscussionAsync($request)
    {
        return $this->createMergeRequestDiscussionAsyncWithHttpInfo($request);
    }
    
    public function createMergeRequestDiscussionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateMergeRequestDiscussionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateMergeRequestDiscussionRequest',
            $asyncRequest = true);
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
    public function createMergeRequestDiscussionNoteAsync($request)
    {
        return $this->createMergeRequestDiscussionNoteAsyncWithHttpInfo($request);
    }
    
    public function createMergeRequestDiscussionNoteAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateMergeRequestDiscussionNoteResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateMergeRequestDiscussionNoteRequest',
            $asyncRequest = true);
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
    public function showReviewSettingAsync($request)
    {
        return $this->showReviewSettingAsyncWithHttpInfo($request);
    }
    
    public function showReviewSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowReviewSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowReviewSettingRequest',
            $asyncRequest = true);
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
    public function listFilesByQueryAsync($request)
    {
        return $this->listFilesByQueryAsyncWithHttpInfo($request);
    }
    
    public function listFilesByQueryAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListFilesByQueryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListFilesByQueryRequest',
            $asyncRequest = true);
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
    public function showFileAsync($request)
    {
        return $this->showFileAsyncWithHttpInfo($request);
    }
    
    public function showFileAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowFileRequest',
            $asyncRequest = true);
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
    public function getAllRepositoryByProjectIdAsync($request)
    {
        return $this->getAllRepositoryByProjectIdAsyncWithHttpInfo($request);
    }
    
    public function getAllRepositoryByProjectIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetAllRepositoryByProjectIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetAllRepositoryByProjectIdRequest',
            $asyncRequest = true);
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
    public function getProductTemplatesAsync($request)
    {
        return $this->getProductTemplatesAsyncWithHttpInfo($request);
    }
    
    public function getProductTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetProductTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetProductTemplatesRequest',
            $asyncRequest = true);
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
    public function listProductTwoTemplatesAsync($request)
    {
        return $this->listProductTwoTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listProductTwoTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListProductTwoTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListProductTwoTemplatesRequest',
            $asyncRequest = true);
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
    public function showRepositoryNameExistAsync($request)
    {
        return $this->showRepositoryNameExistAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryNameExistAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryNameExistResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryNameExistRequest',
            $asyncRequest = true);
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
    public function addRepoMembersAsync($request)
    {
        return $this->addRepoMembersAsyncWithHttpInfo($request);
    }
    
    public function addRepoMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddRepoMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddRepoMembersRequest',
            $asyncRequest = true);
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
    public function deleteRepoMemberAsync($request)
    {
        return $this->deleteRepoMemberAsyncWithHttpInfo($request);
    }
    
    public function deleteRepoMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteRepoMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteRepoMemberRequest',
            $asyncRequest = true);
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
    public function listRepoMembersAsync($request)
    {
        return $this->listRepoMembersAsyncWithHttpInfo($request);
    }
    
    public function listRepoMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListRepoMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListRepoMembersRequest',
            $asyncRequest = true);
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
    public function setRepoRoleAsync($request)
    {
        return $this->setRepoRoleAsyncWithHttpInfo($request);
    }
    
    public function setRepoRoleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\SetRepoRoleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\SetRepoRoleRequest',
            $asyncRequest = true);
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
    public function addDeployKeyAsync($request)
    {
        return $this->addDeployKeyAsyncWithHttpInfo($request);
    }
    
    public function addDeployKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddDeployKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddDeployKeyRequest',
            $asyncRequest = true);
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
    public function addDeployKeyV2Async($request)
    {
        return $this->addDeployKeyV2AsyncWithHttpInfo($request);
    }
    
    public function addDeployKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddDeployKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddDeployKeyV2Request',
            $asyncRequest = true);
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
    public function addProtectBranchV2Async($request)
    {
        return $this->addProtectBranchV2AsyncWithHttpInfo($request);
    }
    
    public function addProtectBranchV2AsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddProtectBranchV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddProtectBranchV2Request',
            $asyncRequest = true);
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
    public function addTagV2Async($request)
    {
        return $this->addTagV2AsyncWithHttpInfo($request);
    }
    
    public function addTagV2AsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddTagV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddTagV2Request',
            $asyncRequest = true);
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
    public function createRepositoryAsync($request)
    {
        return $this->createRepositoryAsyncWithHttpInfo($request);
    }
    
    public function createRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateRepositoryRequest',
            $asyncRequest = true);
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
    public function deleteDeployKeyAsync($request)
    {
        return $this->deleteDeployKeyAsyncWithHttpInfo($request);
    }
    
    public function deleteDeployKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteDeployKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteDeployKeyRequest',
            $asyncRequest = true);
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
    public function deleteDeployKeyV2Async($request)
    {
        return $this->deleteDeployKeyV2AsyncWithHttpInfo($request);
    }
    
    public function deleteDeployKeyV2AsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteDeployKeyV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteDeployKeyV2Request',
            $asyncRequest = true);
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
    public function deleteRepositoryAsync($request)
    {
        return $this->deleteRepositoryAsyncWithHttpInfo($request);
    }
    
    public function deleteRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteRepositoryRequest',
            $asyncRequest = true);
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
    public function getRepositoryByProjectIdAsync($request)
    {
        return $this->getRepositoryByProjectIdAsyncWithHttpInfo($request);
    }
    
    public function getRepositoryByProjectIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetRepositoryByProjectIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetRepositoryByProjectIdRequest',
            $asyncRequest = true);
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
    public function getTemplatesAsync($request)
    {
        return $this->getTemplatesAsyncWithHttpInfo($request);
    }
    
    public function getTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\GetTemplatesRequest',
            $asyncRequest = true);
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
    public function listBranchesByRepositoryIdAsync($request)
    {
        return $this->listBranchesByRepositoryIdAsyncWithHttpInfo($request);
    }
    
    public function listBranchesByRepositoryIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListBranchesByRepositoryIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListBranchesByRepositoryIdRequest',
            $asyncRequest = true);
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
    public function listCommitStatisticsAsync($request)
    {
        return $this->listCommitStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listCommitStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListCommitStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListCommitStatisticsRequest',
            $asyncRequest = true);
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
    public function listFilesAsync($request)
    {
        return $this->listFilesAsyncWithHttpInfo($request);
    }
    
    public function listFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListFilesRequest',
            $asyncRequest = true);
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
    public function listMergeChangesAsync($request)
    {
        return $this->listMergeChangesAsyncWithHttpInfo($request);
    }
    
    public function listMergeChangesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeChangesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeChangesRequest',
            $asyncRequest = true);
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
    public function listMergeChangesTreesAsync($request)
    {
        return $this->listMergeChangesTreesAsyncWithHttpInfo($request);
    }
    
    public function listMergeChangesTreesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeChangesTreesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeChangesTreesRequest',
            $asyncRequest = true);
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
    public function listMergeRequestAsync($request)
    {
        return $this->listMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeRequestRequest',
            $asyncRequest = true);
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
    public function listMergeRequestReviewersAsync($request)
    {
        return $this->listMergeRequestReviewersAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestReviewersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeRequestReviewersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListMergeRequestReviewersRequest',
            $asyncRequest = true);
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
    public function listRelatedCommitsAsync($request)
    {
        return $this->listRelatedCommitsAsyncWithHttpInfo($request);
    }
    
    public function listRelatedCommitsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListRelatedCommitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListRelatedCommitsRequest',
            $asyncRequest = true);
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
    public function listRepositoryStatusAsync($request)
    {
        return $this->listRepositoryStatusAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListRepositoryStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListRepositoryStatusRequest',
            $asyncRequest = true);
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
    public function listSubfilesAsync($request)
    {
        return $this->listSubfilesAsyncWithHttpInfo($request);
    }
    
    public function listSubfilesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListSubfilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListSubfilesRequest',
            $asyncRequest = true);
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
    public function listTemplatesTwoAsync($request)
    {
        return $this->listTemplatesTwoAsyncWithHttpInfo($request);
    }
    
    public function listTemplatesTwoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListTemplatesTwoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListTemplatesTwoRequest',
            $asyncRequest = true);
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
    public function listTwoTemplatesAsync($request)
    {
        return $this->listTwoTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listTwoTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListTwoTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListTwoTemplatesRequest',
            $asyncRequest = true);
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
    public function shareTemplatesAsync($request)
    {
        return $this->shareTemplatesAsyncWithHttpInfo($request);
    }
    
    public function shareTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShareTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShareTemplatesRequest',
            $asyncRequest = true);
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
    public function showBranchesByRepositoryIdAsync($request)
    {
        return $this->showBranchesByRepositoryIdAsyncWithHttpInfo($request);
    }
    
    public function showBranchesByRepositoryIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowBranchesByRepositoryIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowBranchesByRepositoryIdRequest',
            $asyncRequest = true);
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
    public function showBranchesByTwoRepositoryIdAsync($request)
    {
        return $this->showBranchesByTwoRepositoryIdAsyncWithHttpInfo($request);
    }
    
    public function showBranchesByTwoRepositoryIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowBranchesByTwoRepositoryIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowBranchesByTwoRepositoryIdRequest',
            $asyncRequest = true);
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
    public function showCommitsByBranchAsync($request)
    {
        return $this->showCommitsByBranchAsyncWithHttpInfo($request);
    }
    
    public function showCommitsByBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowCommitsByBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowCommitsByBranchRequest',
            $asyncRequest = true);
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
    public function showCommitsByRepoIdAsync($request)
    {
        return $this->showCommitsByRepoIdAsyncWithHttpInfo($request);
    }
    
    public function showCommitsByRepoIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowCommitsByRepoIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowCommitsByRepoIdRequest',
            $asyncRequest = true);
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
    public function showHasPipelineAsync($request)
    {
        return $this->showHasPipelineAsyncWithHttpInfo($request);
    }
    
    public function showHasPipelineAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowHasPipelineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowHasPipelineRequest',
            $asyncRequest = true);
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
    public function showImageBlobAsync($request)
    {
        return $this->showImageBlobAsyncWithHttpInfo($request);
    }
    
    public function showImageBlobAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowImageBlobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowImageBlobRequest',
            $asyncRequest = true);
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
    public function showMasterAsync($request)
    {
        return $this->showMasterAsyncWithHttpInfo($request);
    }
    
    public function showMasterAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowMasterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowMasterRequest',
            $asyncRequest = true);
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
    public function showMergeRequestAsync($request)
    {
        return $this->showMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowMergeRequestRequest',
            $asyncRequest = true);
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
    public function showRepoIdAsync($request)
    {
        return $this->showRepoIdAsyncWithHttpInfo($request);
    }
    
    public function showRepoIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepoIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepoIdRequest',
            $asyncRequest = true);
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
    public function showRepositoryArchiveAsync($request)
    {
        return $this->showRepositoryArchiveAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryArchiveAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryArchiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryArchiveRequest',
            $asyncRequest = true);
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
    public function showRepositoryByUuidAsync($request)
    {
        return $this->showRepositoryByUuidAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryByUuidAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryByUuidResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryByUuidRequest',
            $asyncRequest = true);
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
    public function showRepositoryStatisticsAsync($request)
    {
        return $this->showRepositoryStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowRepositoryStatisticsRequest',
            $asyncRequest = true);
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
    public function showStatisticCommitAsync($request)
    {
        return $this->showStatisticCommitAsyncWithHttpInfo($request);
    }
    
    public function showStatisticCommitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowStatisticCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowStatisticCommitRequest',
            $asyncRequest = true);
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
    public function showStatisticCommitV3Async($request)
    {
        return $this->showStatisticCommitV3AsyncWithHttpInfo($request);
    }
    
    public function showStatisticCommitV3AsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowStatisticCommitV3Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowStatisticCommitV3Request',
            $asyncRequest = true);
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
    public function showStatisticalDataAsync($request)
    {
        return $this->showStatisticalDataAsyncWithHttpInfo($request);
    }
    
    public function showStatisticalDataAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowStatisticalDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowStatisticalDataRequest',
            $asyncRequest = true);
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
    public function updateMergeRequestApprovalStateAsync($request)
    {
        return $this->updateMergeRequestApprovalStateAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestApprovalStateAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\UpdateMergeRequestApprovalStateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\UpdateMergeRequestApprovalStateRequest',
            $asyncRequest = true);
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
    public function addSshKeyAsync($request)
    {
        return $this->addSshKeyAsyncWithHttpInfo($request);
    }
    
    public function addSshKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddSshKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddSshKeyRequest',
            $asyncRequest = true);
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
    public function deleteSShkeyAsync($request)
    {
        return $this->deleteSShkeyAsyncWithHttpInfo($request);
    }
    
    public function deleteSShkeyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteSShkeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteSShkeyRequest',
            $asyncRequest = true);
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
    public function listSshKeysAsync($request)
    {
        return $this->listSshKeysAsyncWithHttpInfo($request);
    }
    
    public function listSshKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListSshKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListSshKeysRequest',
            $asyncRequest = true);
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
    public function showPrivateKeyVerifyAsync($request)
    {
        return $this->showPrivateKeyVerifyAsyncWithHttpInfo($request);
    }
    
    public function showPrivateKeyVerifyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowPrivateKeyVerifyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowPrivateKeyVerifyRequest',
            $asyncRequest = true);
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
    public function validateHttpsInfoAsync($request)
    {
        return $this->validateHttpsInfoAsyncWithHttpInfo($request);
    }
    
    public function validateHttpsInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ValidateHttpsInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ValidateHttpsInfoRequest',
            $asyncRequest = true);
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
    public function validateHttpsInfoV2Async($request)
    {
        return $this->validateHttpsInfoV2AsyncWithHttpInfo($request);
    }
    
    public function validateHttpsInfoV2AsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ValidateHttpsInfoV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ValidateHttpsInfoV2Request',
            $asyncRequest = true);
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
    public function createNewBranchAsync($request)
    {
        return $this->createNewBranchAsyncWithHttpInfo($request);
    }
    
    public function createNewBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateNewBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateNewBranchRequest',
            $asyncRequest = true);
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
    public function associateIssuesAsync($request)
    {
        return $this->associateIssuesAsyncWithHttpInfo($request);
    }
    
    public function associateIssuesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AssociateIssuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AssociateIssuesRequest',
            $asyncRequest = true);
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
    public function createProjectAndRepositoriesAsync($request)
    {
        return $this->createProjectAndRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function createProjectAndRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateProjectAndRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateProjectAndRepositoriesRequest',
            $asyncRequest = true);
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
    public function createProjectAndforkRepositoriesAsync($request)
    {
        return $this->createProjectAndforkRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function createProjectAndforkRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateProjectAndforkRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\CreateProjectAndforkRepositoriesRequest',
            $asyncRequest = true);
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
    public function listUserAllRepositoriesAsync($request)
    {
        return $this->listUserAllRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listUserAllRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListUserAllRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListUserAllRepositoriesRequest',
            $asyncRequest = true);
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
    public function showAllRepositoryByTwoProjectIdAsync($request)
    {
        return $this->showAllRepositoryByTwoProjectIdAsyncWithHttpInfo($request);
    }
    
    public function showAllRepositoryByTwoProjectIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowAllRepositoryByTwoProjectIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ShowAllRepositoryByTwoProjectIdRequest',
            $asyncRequest = true);
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
    public function addHooksAsync($request)
    {
        return $this->addHooksAsyncWithHttpInfo($request);
    }
    
    public function addHooksAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddHooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\AddHooksRequest',
            $asyncRequest = true);
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
    public function deleteHooksAsync($request)
    {
        return $this->deleteHooksAsyncWithHttpInfo($request);
    }
    
    public function deleteHooksAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteHooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\DeleteHooksRequest',
            $asyncRequest = true);
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
    public function listHooksAsync($request)
    {
        return $this->listHooksAsyncWithHttpInfo($request);
    }
    
    public function listHooksAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListHooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V3\Model\ListHooksRequest',
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