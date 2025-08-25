<?php

namespace HuaweiCloud\SDK\CodeHub\V4;

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
     * 创建分支
     *
     * 创建分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBranchAsync($request)
    {
        return $this->createBranchAsyncWithHttpInfo($request);
    }
    
    public function createBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 删除分支
     *
     * 删除分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBranchAsync($request)
    {
        return $this->deleteBranchAsyncWithHttpInfo($request);
    }
    
    public function deleteBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 获取分支列表
     *
     * 获取分支列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBranchesAsync($request)
    {
        return $this->listBranchesAsyncWithHttpInfo($request);
    }
    
    public function listBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['branchType'] !== null) {
            $queryParams['branch_type'] = $localVarParams['branchType'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['queryView'] !== null) {
            $queryParams['query_view'] = $localVarParams['queryView'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取分支详情
     *
     * 获取分支详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBranchAsync($request)
    {
        return $this->showBranchAsyncWithHttpInfo($request);
    }
    
    public function showBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 分支重命名
     *
     * 分支重命名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBranchNameAsync($request)
    {
        return $this->updateBranchNameAsyncWithHttpInfo($request);
    }
    
    public function updateBranchNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateBranchNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateBranchNameRequest',
            $asyncRequest = true);
    }

    /**
     * 创建提交信息
     *
     * 创建提交信息
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
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateCommitRequest',
            $asyncRequest = true);
    }

    /**
     * 回退提交
     *
     * 回退提交
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCommitRevertAsync($request)
    {
        return $this->createCommitRevertAsyncWithHttpInfo($request);
    }
    
    public function createCommitRevertAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits/{sha}/revert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sha'] !== null) {
            $pathParams['sha'] = $localVarParams['sha'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateCommitRevertResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateCommitRevertRequest',
            $asyncRequest = true);
    }

    /**
     * 根据提交ID查询分支、标签列表
     *
     * 根据提交ID查询分支、标签列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommitAssociatedRefsAsync($request)
    {
        return $this->listCommitAssociatedRefsAsyncWithHttpInfo($request);
    }
    
    public function listCommitAssociatedRefsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits/{sha}/refs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListCommitAssociatedRefsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListCommitAssociatedRefsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取特定提交信息
     *
     * 获取特定提交信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitAsync($request)
    {
        return $this->showCommitAsyncWithHttpInfo($request);
    }
    
    public function showCommitAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['stats'] !== null) {
            $queryParams['stats'] = $localVarParams['stats'];
        }
        if ($localVarParams['showCodeChanges'] !== null) {
            $queryParams['show_code_changes'] = $localVarParams['showCodeChanges'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitRequest',
            $asyncRequest = true);
    }

    /**
     * 获取commit引入的文件变更元数据
     *
     * 获取commit引入的文件变更元数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitDiffMetadataAsync($request)
    {
        return $this->showCommitDiffMetadataAsyncWithHttpInfo($request);
    }
    
    public function showCommitDiffMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits/diff-metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitDiffMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitDiffMetadataRequest',
            $asyncRequest = true);
    }

    /**
     * 获取commit引入的指定文件的变更内容
     *
     * 获取commit引入的指定文件的变更内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitFileDiffAsync($request)
    {
        return $this->showCommitFileDiffAsyncWithHttpInfo($request);
    }
    
    public function showCommitFileDiffAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits/file-diff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['oldPath'] !== null) {
            $queryParams['old_path'] = $localVarParams['oldPath'];
        }
        if ($localVarParams['ignoreWhitespaceChange'] !== null) {
            $queryParams['ignore_whitespace_change'] = $localVarParams['ignoreWhitespaceChange'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitFileDiffResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitFileDiffRequest',
            $asyncRequest = true);
    }

    /**
     * 获取提交差异
     *
     * 获取提交差异
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
        $resourcePath = '/v4/repositories/{repository_id}/repository/commits/diff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['ignoreWhitespaceChange'] !== null) {
            $queryParams['ignore_whitespace_change'] = $localVarParams['ignoreWhitespaceChange'];
        }
        if ($localVarParams['notStatistic'] !== null) {
            $queryParams['not_statistic'] = $localVarParams['notStatistic'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowDiffCommitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowDiffCommitRequest',
            $asyncRequest = true);
    }

    /**
     * 创建合并请求检视意见
     *
     * 创建合并请求检视意见
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
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/discussions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestDiscussionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestDiscussionRequest',
            $asyncRequest = true);
    }

    /**
     * 回复合并请求检视意见
     *
     * 回复合并请求检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMergeRequestDiscussionResponseAsync($request)
    {
        return $this->createMergeRequestDiscussionResponseAsyncWithHttpInfo($request);
    }
    
    public function createMergeRequestDiscussionResponseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/discussions/{discussion_id}/notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestDiscussionResponseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestDiscussionResponseRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/更新检视意见设置
     *
     * 创建/更新检视意见设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createReviewSettingAsync($request)
    {
        return $this->createReviewSettingAsyncWithHttpInfo($request);
    }
    
    public function createReviewSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/review-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateReviewSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateReviewSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取默认的检视意见分类
     *
     * 获取默认的检视意见分类
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDefaultReviewCategoriesAsync($request)
    {
        return $this->listDefaultReviewCategoriesAsyncWithHttpInfo($request);
    }
    
    public function listDefaultReviewCategoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/default-review-categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListDefaultReviewCategoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListDefaultReviewCategoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求检视意见列表
     *
     * 获取合并请求检视意见列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestDiscussionsAsync($request)
    {
        return $this->listMergeRequestDiscussionsAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestDiscussionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/discussions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['unresolved'] !== null) {
            $queryParams['unresolved'] = $localVarParams['unresolved'];
        }
        if ($localVarParams['authorId'] !== null) {
            $queryParams['author_id'] = $localVarParams['authorId'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestDiscussionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestDiscussionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目检视意见必填项
     *
     * 获取项目检视意见必填项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectNoteRequiredAttributesAsync($request)
    {
        return $this->listProjectNoteRequiredAttributesAsyncWithHttpInfo($request);
    }
    
    public function listProjectNoteRequiredAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/setting/note-required-attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectNoteRequiredAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectNoteRequiredAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下检视意见作者列表
     *
     * 获取仓库下检视意见作者列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryReviewAuthorsAsync($request)
    {
        return $this->listRepositoryReviewAuthorsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryReviewAuthorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/review-authors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['noteableType'] !== null) {
            $queryParams['noteable_type'] = $localVarParams['noteableType'];
        }
        if ($localVarParams['resolvedStatus'] !== null) {
            $queryParams['resolved_status'] = $localVarParams['resolvedStatus'];
        }
        if ($localVarParams['reviewersFilter'] !== null) {
            $queryParams['reviewers_filter'] = $localVarParams['reviewersFilter'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryReviewAuthorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryReviewAuthorsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库检视意见列表
     *
     * 获取仓库检视意见列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryReviewsAsync($request)
    {
        return $this->listRepositoryReviewsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryReviewsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/reviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['noteableType'] !== null) {
            $queryParams['noteable_type'] = $localVarParams['noteableType'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['onlyCount'] !== null) {
            $queryParams['only_count'] = $localVarParams['onlyCount'];
        }
        if ($localVarParams['reviewCategories'] !== null) {
            $queryParams['review_categories'] = $localVarParams['reviewCategories'];
        }
        if ($localVarParams['reviewModules'] !== null) {
            $queryParams['review_modules'] = $localVarParams['reviewModules'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['assigneeId'] !== null) {
            $queryParams['assignee_id'] = $localVarParams['assigneeId'];
        }
        if ($localVarParams['proposerId'] !== null) {
            $queryParams['proposer_id'] = $localVarParams['proposerId'];
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
        }
        if ($localVarParams['includeReply'] !== null) {
            $queryParams['include_reply'] = $localVarParams['includeReply'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryReviewsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryReviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组检视意见必填项
     *
     * 获取代码组检视意见必填项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupNoteRequiredAttributesAsync($request)
    {
        return $this->showGroupNoteRequiredAttributesAsyncWithHttpInfo($request);
    }
    
    public function showGroupNoteRequiredAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/setting/note-required-attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupNoteRequiredAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupNoteRequiredAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组检视意见设置(不含必填项)
     *
     * 获取代码组检视意见设置(不含必填项)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupReviewSettingsAsync($request)
    {
        return $this->showGroupReviewSettingsAsyncWithHttpInfo($request);
    }
    
    public function showGroupReviewSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/review-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupReviewSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupReviewSettingsRequest',
            $asyncRequest = true);
    }

    /**
     * 根据discussion_id获取合并请求检视意见
     *
     * 根据discussion_id获取合并请求检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequestDiscussionAsync($request)
    {
        return $this->showMergeRequestDiscussionAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestDiscussionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/discussions/{discussion_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestDiscussionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestDiscussionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库检视意见必填项
     *
     * 获取仓库检视意见必填项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNoteRequiredAttributesAsync($request)
    {
        return $this->showNoteRequiredAttributesAsyncWithHttpInfo($request);
    }
    
    public function showNoteRequiredAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/setting/note-required-attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowNoteRequiredAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowNoteRequiredAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目检视意见设置(不含必填项)
     *
     * 获取项目检视意见设置(不含必填项)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectReviewSettingsAsync($request)
    {
        return $this->showProjectReviewSettingsAsyncWithHttpInfo($request);
    }
    
    public function showProjectReviewSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/review-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectReviewSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectReviewSettingsRequest',
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
        $resourcePath = '/v4/repositories/{repository_id}/review-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['withDefaultReviewCategories'] !== null) {
            $queryParams['with_default_review_categories'] = $localVarParams['withDefaultReviewCategories'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowReviewSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowReviewSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/更新代码组检视意见必填项
     *
     * 创建/更新代码组检视意见必填项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupNoteRequiredAttributesAsync($request)
    {
        return $this->updateGroupNoteRequiredAttributesAsyncWithHttpInfo($request);
    }
    
    public function updateGroupNoteRequiredAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/setting/note-required-attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupNoteRequiredAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupNoteRequiredAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/更新代码组检视意见设置(不含必填项)
     *
     * 创建/更新代码组检视意见设置(不含必填项)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupReviewSettingsAsync($request)
    {
        return $this->updateGroupReviewSettingsAsyncWithHttpInfo($request);
    }
    
    public function updateGroupReviewSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/review-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupReviewSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupReviewSettingsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求检视意见
     *
     * 更新合并请求检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestDiscussionAsync($request)
    {
        return $this->updateMergeRequestDiscussionAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestDiscussionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/discussions/{discussion_id}/notes/{note_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['noteId'] !== null) {
            $pathParams['note_id'] = $localVarParams['noteId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestDiscussionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestDiscussionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/更新仓库检视意见必填项
     *
     * 创建/更新仓库检视意见必填项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNoteRequiredAttributesAsync($request)
    {
        return $this->updateNoteRequiredAttributesAsyncWithHttpInfo($request);
    }
    
    public function updateNoteRequiredAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/setting/note-required-attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateNoteRequiredAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateNoteRequiredAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/更新项目检视意见必填项
     *
     * 创建/更新项目检视意见必填项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectNoteRequiredAttributesAsync($request)
    {
        return $this->updateProjectNoteRequiredAttributesAsyncWithHttpInfo($request);
    }
    
    public function updateProjectNoteRequiredAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/setting/note-required-attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectNoteRequiredAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectNoteRequiredAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/更新项目检视意见设置(不含必填项)
     *
     * 创建/更新项目检视意见设置(不含必填项)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectReviewSettingsAsync($request)
    {
        return $this->updateProjectReviewSettingsAsyncWithHttpInfo($request);
    }
    
    public function updateProjectReviewSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/review-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectReviewSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectReviewSettingsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建文件
     *
     * 创建文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFileAsync($request)
    {
        return $this->createFileAsyncWithHttpInfo($request);
    }
    
    public function createFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateFileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除文件
     *
     * 删除文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFileAsync($request)
    {
        return $this->deleteFileAsyncWithHttpInfo($request);
    }
    
    public function deleteFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['authorName'] !== null) {
            $queryParams['author_name'] = $localVarParams['authorName'];
        }
        if ($localVarParams['branch'] !== null) {
            $queryParams['branch'] = $localVarParams['branch'];
        }
        if ($localVarParams['commitMessage'] !== null) {
            $queryParams['commit_message'] = $localVarParams['commitMessage'];
        }
        if ($localVarParams['authorEmail'] !== null) {
            $queryParams['author_email'] = $localVarParams['authorEmail'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteFileRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库单个文件内容(下载单个文件)
     *
     * 获取仓库单个文件内容(下载单个文件)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadBlobsRawAsync($request)
    {
        return $this->downloadBlobsRawAsyncWithHttpInfo($request);
    }
    
    public function downloadBlobsRawAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/blobs/{blob_id}/raw';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['blobId'] !== null) {
            $pathParams['blob_id'] = $localVarParams['blobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DownloadBlobsRawResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DownloadBlobsRawRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件追溯信息
     *
     * 获取文件追溯信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFileBlameLinesAsync($request)
    {
        return $this->listFileBlameLinesAsyncWithHttpInfo($request);
    }
    
    public function listFileBlameLinesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/blame';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sha'] !== null) {
            $queryParams['sha'] = $localVarParams['sha'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListFileBlameLinesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListFileBlameLinesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前文件上级树结构
     *
     * 获取当前文件上级树结构
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFileUpperTreeEntriesAsync($request)
    {
        return $this->listFileUpperTreeEntriesAsyncWithHttpInfo($request);
    }
    
    public function listFileUpperTreeEntriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/upper-files-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListFileUpperTreeEntriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListFileUpperTreeEntriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定分支下所有的文件列表
     *
     * 获取指定分支下所有的文件列表
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
        $resourcePath = '/v4/repositories/{repository_id}/repository/file-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看文件属性与内容
     *
     * 查看文件属性与内容
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
        $resourcePath = '/v4/repositories/{repository_id}/repository/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowFileRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件内容
     *
     * 获取文件内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFileContentAsync($request)
    {
        return $this->showFileContentAsyncWithHttpInfo($request);
    }
    
    public function showFileContentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/file-content';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sha'] !== null) {
            $queryParams['sha'] = $localVarParams['sha'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowFileContentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowFileContentRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库默认分支的Readme文件内容
     *
     * 获取仓库默认分支的Readme文件内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReadmeFileAsync($request)
    {
        return $this->showReadmeFileAsyncWithHttpInfo($request);
    }
    
    public function showReadmeFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/readme-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowReadmeFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowReadmeFileRequest',
            $asyncRequest = true);
    }

    /**
     * 更新文件内容
     *
     * 修改仓库ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFileAsync($request)
    {
        return $this->updateFileAsyncWithHttpInfo($request);
    }
    
    public function updateFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateFileRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除仓库文件推送权限
     *
     * 批量删除仓库文件推送权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteRepositoryFilePushPermissionsAsync($request)
    {
        return $this->batchDeleteRepositoryFilePushPermissionsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteRepositoryFilePushPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/file-push-permissions/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchDeleteRepositoryFilePushPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchDeleteRepositoryFilePushPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新仓库文件推送权限
     *
     * 批量更新仓库文件推送权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateRepositoryFilePushPermissionsAsync($request)
    {
        return $this->batchUpdateRepositoryFilePushPermissionsAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateRepositoryFilePushPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/file-push-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchUpdateRepositoryFilePushPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchUpdateRepositoryFilePushPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建仓库文件推送权限
     *
     * 创建仓库文件推送权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFilePushPermissionAsync($request)
    {
        return $this->createFilePushPermissionAsyncWithHttpInfo($request);
    }
    
    public function createFilePushPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/file-push-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateFilePushPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateFilePushPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库文件推送权限列表
     *
     * 获取仓库文件推送权限列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryFilePushPermissionsAsync($request)
    {
        return $this->listRepositoryFilePushPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryFilePushPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/file-push-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryFilePushPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryFilePushPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 关联代码组与成员组
     *
     * 关联代码组与成员组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateGroupUserGroupAsync($request)
    {
        return $this->associateGroupUserGroupAsyncWithHttpInfo($request);
    }
    
    public function associateGroupUserGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/groups/{group_id}/user-group/{user_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['userGroupId'] !== null) {
            $pathParams['user_group_id'] = $localVarParams['userGroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AssociateGroupUserGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AssociateGroupUserGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建代码组
     *
     * 创建代码组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGroupAsync($request)
    {
        return $this->createGroupAsyncWithHttpInfo($request);
    }
    
    public function createGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除代码组
     *
     * 删除代码组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGroupAsync($request)
    {
        return $this->deleteGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下可添加的成员列表
     *
     * 获取代码组下可添加的成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupAddableMembersAsync($request)
    {
        return $this->listGroupAddableMembersAsyncWithHttpInfo($request);
    }
    
    public function listGroupAddableMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/members/addable-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupAddableMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupAddableMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下可添加的成员组
     *
     * 获取代码组下可添加的成员组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupAddableUserGroupsAsync($request)
    {
        return $this->listGroupAddableUserGroupsAsyncWithHttpInfo($request);
    }
    
    public function listGroupAddableUserGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/user-groups/addable-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupAddableUserGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupAddableUserGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下可添加的成员列表
     *
     * 获取代码组下可添加的成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMembersAsync($request)
    {
        return $this->listGroupMembersAsyncWithHttpInfo($request);
    }
    
    public function listGroupMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/members/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }
        if ($localVarParams['joinWay'] !== null) {
            $queryParams['join_way'] = $localVarParams['joinWay'];
        }
        if ($localVarParams['accessLevel'] !== null) {
            $queryParams['access_level'] = $localVarParams['accessLevel'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组权限资源点列表
     *
     * 获取代码组权限资源点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupPermissionResourcesAsync($request)
    {
        return $this->listGroupPermissionResourcesAsyncWithHttpInfo($request);
    }
    
    public function listGroupPermissionResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/permissions/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scope'] !== null) {
            $queryParams['scope'] = $localVarParams['scope'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupPermissionResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupPermissionResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下的子代码组和仓库列表
     *
     * 获取代码组下的子代码组和仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupSubgroupsAndRepositoriesAsync($request)
    {
        return $this->listGroupSubgroupsAndRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listGroupSubgroupsAndRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/subgroups-and-repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['archived'] !== null) {
            $queryParams['archived'] = $localVarParams['archived'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupSubgroupsAndRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupSubgroupsAndRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组列表
     *
     * 获取代码组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupsAsync($request)
    {
        return $this->listGroupsAsyncWithHttpInfo($request);
    }
    
    public function listGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['allAvailable'] !== null) {
            $queryParams['all_available'] = $localVarParams['allAvailable'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['starred'] !== null) {
            $queryParams['starred'] = $localVarParams['starred'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['owned'] !== null) {
            $queryParams['owned'] = $localVarParams['owned'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取用户的个人访问令牌
     *
     * 获取用户的个人访问令牌
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImpersonationTokensAsync($request)
    {
        return $this->listImpersonationTokensAsyncWithHttpInfo($request);
    }
    
    public function listImpersonationTokensAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/users/impersonation-tokens';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListImpersonationTokensResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListImpersonationTokensRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下成员列表
     *
     * 获取项目下成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProductPermissionResourcesGrantedUsersAsync($request)
    {
        return $this->listProductPermissionResourcesGrantedUsersAsyncWithHttpInfo($request);
    }
    
    public function listProductPermissionResourcesGrantedUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProductPermissionResourcesGrantedUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProductPermissionResourcesGrantedUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下的代码组和仓库列表
     *
     * 获取项目下的代码组和仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectSubgroupsAndRepositoriesAsync($request)
    {
        return $this->listProjectSubgroupsAndRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listProjectSubgroupsAndRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/subgroups-and-repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['archived'] !== null) {
            $queryParams['archived'] = $localVarParams['archived'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectSubgroupsAndRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectSubgroupsAndRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组信息
     *
     * 获取代码组信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupAsync($request)
    {
        return $this->showGroupAsyncWithHttpInfo($request);
    }
    
    public function showGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定代码组的基本设置信息
     *
     * 获取指定代码组的基本设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupGeneralPolicyAsync($request)
    {
        return $this->showGroupGeneralPolicyAsyncWithHttpInfo($request);
    }
    
    public function showGroupGeneralPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/policies/general';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupGeneralPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupGeneralPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组继承权限设置开关
     *
     * 获取代码组继承权限设置开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupPermissionInheritEnabledAsync($request)
    {
        return $this->showGroupPermissionInheritEnabledAsyncWithHttpInfo($request);
    }
    
    public function showGroupPermissionInheritEnabledAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/permission-inherit-enabled';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupPermissionInheritEnabledResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupPermissionInheritEnabledRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组继承设置项
     *
     * 获取代码组继承设置项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupSettingsInheritCfgAsync($request)
    {
        return $this->showGroupSettingsInheritCfgAsyncWithHttpInfo($request);
    }
    
    public function showGroupSettingsInheritCfgAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/settings-inherit-cfg';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupSettingsInheritCfgResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupSettingsInheritCfgRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组水印设置
     *
     * 获取代码组水印设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupWatermarkAsync($request)
    {
        return $this->showGroupWatermarkAsyncWithHttpInfo($request);
    }
    
    public function showGroupWatermarkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupWatermarkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupWatermarkRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组的继承设置
     *
     * 获取代码组的继承设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupsInheritAsync($request)
    {
        return $this->showGroupsInheritAsyncWithHttpInfo($request);
    }
    
    public function showGroupsInheritAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/inherit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['settingType'] !== null) {
            $queryParams['setting_type'] = $localVarParams['settingType'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupsInheritResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupsInheritRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定项目的基本设置信息
     *
     * 获取指定项目的基本设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectGeneralPolicyAsync($request)
    {
        return $this->showProjectGeneralPolicyAsyncWithHttpInfo($request);
    }
    
    public function showProjectGeneralPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/policies/general';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectGeneralPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectGeneralPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目成员设置
     *
     * 获取项目成员设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectMemberSettingAsync($request)
    {
        return $this->showProjectMemberSettingAsyncWithHttpInfo($request);
    }
    
    public function showProjectMemberSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/member-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectMemberSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectMemberSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取资源点对应的角色和权限
     *
     * 获取资源点对应的角色和权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourcePermissionsAsync($request)
    {
        return $this->showResourcePermissionsAsyncWithHttpInfo($request);
    }
    
    public function showResourcePermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/permissions-resources/{resource_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowResourcePermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowResourcePermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 移交代码组
     *
     * 移交代码组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function transferGroupAsync($request)
    {
        return $this->transferGroupAsyncWithHttpInfo($request);
    }
    
    public function transferGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\TransferGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\TransferGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新代码组水印设置
     *
     * 更新代码组水印设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupWatermarkAsync($request)
    {
        return $this->updateGroupWatermarkAsyncWithHttpInfo($request);
    }
    
    public function updateGroupWatermarkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupWatermarkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupWatermarkRequest',
            $asyncRequest = true);
    }

    /**
     * 创建仓库标签
     *
     * 创建仓库标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepositoryLabelAsync($request)
    {
        return $this->createRepositoryLabelAsyncWithHttpInfo($request);
    }
    
    public function createRepositoryLabelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateRepositoryLabelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateRepositoryLabelRequest',
            $asyncRequest = true);
    }

    /**
     * 创建仓库系统标签
     *
     * 创建仓库系统标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepositorySystemLabelsAsync($request)
    {
        return $this->createRepositorySystemLabelsAsyncWithHttpInfo($request);
    }
    
    public function createRepositorySystemLabelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/system-labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateRepositorySystemLabelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateRepositorySystemLabelsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库标签
     *
     * 删除仓库标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepositoryLabelAsync($request)
    {
        return $this->deleteRepositoryLabelAsyncWithHttpInfo($request);
    }
    
    public function deleteRepositoryLabelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/label';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteRepositoryLabelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteRepositoryLabelRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库标签列表
     *
     * 获取仓库标签列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryLabelsAsync($request)
    {
        return $this->listRepositoryLabelsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryLabelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['includeExpired'] !== null) {
            $queryParams['include_expired'] = $localVarParams['includeExpired'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryLabelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryLabelsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改仓库标签
     *
     * 修改仓库标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryLabelAsync($request)
    {
        return $this->updateRepositoryLabelAsyncWithHttpInfo($request);
    }
    
    public function updateRepositoryLabelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/label';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryLabelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryLabelRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加仓库成员
     *
     * 批量添加仓库成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addRepositoryMembersAsync($request)
    {
        return $this->addRepositoryMembersAsyncWithHttpInfo($request);
    }
    
    public function addRepositoryMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddRepositoryMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddRepositoryMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库成员列表
     *
     * 获取仓库成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMembersAsync($request)
    {
        return $this->listMembersAsyncWithHttpInfo($request);
    }
    
    public function listMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['permission'] !== null) {
            $queryParams['permission'] = $localVarParams['permission'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取成员组列表
     *
     * 获取成员组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryUserGroupsAsync($request)
    {
        return $this->listRepositoryUserGroupsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryUserGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/user-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryUserGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryUserGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 审核合并请求
     *
     * 审核合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function approvalMergeRequestAsync($request)
    {
        return $this->approvalMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function approvalMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/approval';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ApprovalMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ApprovalMergeRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 创建代码组合并请求审核设置
     *
     * 创建代码组合并请求审核设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGroupMergeRequestApproverSettingAsync($request)
    {
        return $this->createGroupMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function createGroupMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/approver-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateGroupMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateGroupMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 创建合并请求
     *
     * 创建合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMergeRequestAsync($request)
    {
        return $this->createMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function createMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 创建合并请求审核设置
     *
     * 创建合并请求审核设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMergeRequestApproverSettingAsync($request)
    {
        return $this->createMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function createMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/approver-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 创建合并请求模板
     *
     * 创建合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMergeRequestTemplateAsync($request)
    {
        return $this->createMergeRequestTemplateAsyncWithHttpInfo($request);
    }
    
    public function createMergeRequestTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateMergeRequestTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建项目合并请求审核设置
     *
     * 创建项目合并请求审核设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectMergeRequestApproverSettingAsync($request)
    {
        return $this->createProjectMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function createProjectMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/approver-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateProjectMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateProjectMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 删除代码组合并请求审核配置
     *
     * 删除代码组合并请求审核配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGroupMergeRequestApproverSettingAsync($request)
    {
        return $this->deleteGroupMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function deleteGroupMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/approver-settings/{setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['settingId'] !== null) {
            $pathParams['setting_id'] = $localVarParams['settingId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteGroupMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteGroupMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 删除合并请求审核配置
     *
     * 删除合并请求审核配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMergeRequestApproverSettingAsync($request)
    {
        return $this->deleteMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function deleteMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/approver-settings/{setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['settingId'] !== null) {
            $pathParams['setting_id'] = $localVarParams['settingId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 删除合并请求模板
     *
     * 删除合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMergeRequestTemplateAsync($request)
    {
        return $this->deleteMergeRequestTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteMergeRequestTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteMergeRequestTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteMergeRequestTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除合并请求打分
     *
     * 删除合并请求打分
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMergeRequestVoteAsync($request)
    {
        return $this->deleteMergeRequestVoteAsyncWithHttpInfo($request);
    }
    
    public function deleteMergeRequestVoteAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/vote';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteMergeRequestVoteResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteMergeRequestVoteRequest',
            $asyncRequest = true);
    }

    /**
     * 删除项目合并请求审核配置
     *
     * 删除项目合并请求审核配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProjectMergeRequestApproverSettingAsync($request)
    {
        return $this->deleteProjectMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function deleteProjectMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/approver-settings/{setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['settingId'] !== null) {
            $pathParams['setting_id'] = $localVarParams['settingId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteProjectMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteProjectMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 导入合并请求
     *
     * 导入合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importMergeRequestAsync($request)
    {
        return $this->importMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function importMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/import-merge-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ImportMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ImportMergeRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 获取检视意见模板列表
     *
     * 获取检视意见模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDiscussionTemplatesAsync($request)
    {
        return $this->listDiscussionTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listDiscussionTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/discussion/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isDefault'] !== null) {
            $queryParams['is_default'] = $localVarParams['isDefault'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListDiscussionTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListDiscussionTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组合并请求审核设置列表
     *
     * 获取代码组合并请求审核设置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMergeRequestApproverSettingsAsync($request)
    {
        return $this->listGroupMergeRequestApproverSettingsAsyncWithHttpInfo($request);
    }
    
    public function listGroupMergeRequestApproverSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/approver-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMergeRequestApproverSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMergeRequestApproverSettingsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组检视人
     *
     * 获取代码组检视人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMergeRequestCanBeAssignedReviewersAsync($request)
    {
        return $this->listGroupMergeRequestCanBeAssignedReviewersAsyncWithHttpInfo($request);
    }
    
    public function listGroupMergeRequestCanBeAssignedReviewersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/merge-requests/reviewers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMergeRequestCanBeAssignedReviewersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMergeRequestCanBeAssignedReviewersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组审核人或合并人
     *
     * 获取代码组审核人或合并人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMergeRequestValidAssignedCandidatesAsync($request)
    {
        return $this->listGroupMergeRequestValidAssignedCandidatesAsyncWithHttpInfo($request);
    }
    
    public function listGroupMergeRequestValidAssignedCandidatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/merge-requests/assignee-candidates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMergeRequestValidAssignedCandidatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupMergeRequestValidAssignedCandidatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求审核设置列表
     *
     * 获取合并请求审核设置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestApproverSettingsAsync($request)
    {
        return $this->listMergeRequestApproverSettingsAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestApproverSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/approver-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['targetType'] !== null) {
            $queryParams['target_type'] = $localVarParams['targetType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestApproverSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestApproverSettingsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求审核人列表
     *
     * 获取合并请求审核人列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestApproversAsync($request)
    {
        return $this->listMergeRequestApproversAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestApproversAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/approval-approvers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
        }
        if ($localVarParams['sourceBranch'] !== null) {
            $queryParams['source_branch'] = $localVarParams['sourceBranch'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $queryParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($localVarParams['targetRepositoryId'] !== null) {
            $queryParams['target_repository_id'] = $localVarParams['targetRepositoryId'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestApproversResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestApproversRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求文件变更列表
     *
     * 获取合并请求文件变更列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestChangesAsync($request)
    {
        return $this->listMergeRequestChangesAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestChangesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/changes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ignoreWhitespaceChange'] !== null) {
            $queryParams['ignore_whitespace_change'] = $localVarParams['ignoreWhitespaceChange'];
        }
        if ($localVarParams['forceEncode'] !== null) {
            $queryParams['force_encode'] = $localVarParams['forceEncode'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['fromDiffId'] !== null) {
            $queryParams['from_diff_id'] = $localVarParams['fromDiffId'];
        }
        if ($localVarParams['toDiffId'] !== null) {
            $queryParams['to_diff_id'] = $localVarParams['toDiffId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestChangesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestChangesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求文件变更列表树
     *
     * 获取合并请求文件变更列表树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestChangesTreesAsync($request)
    {
        return $this->listMergeRequestChangesTreesAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestChangesTreesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/changes-trees';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['approvalUserId'] !== null) {
            $queryParams['approval_user_id'] = $localVarParams['approvalUserId'];
        }
        if ($localVarParams['commitId'] !== null) {
            $queryParams['commit_id'] = $localVarParams['commitId'];
        }
        if ($localVarParams['fromDiffId'] !== null) {
            $queryParams['from_diff_id'] = $localVarParams['fromDiffId'];
        }
        if ($localVarParams['toDiffId'] !== null) {
            $queryParams['to_diff_id'] = $localVarParams['toDiffId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestChangesTreesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestChangesTreesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求commit列表
     *
     * 获取合并请求commit列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestCommitsAsync($request)
    {
        return $this->listMergeRequestCommitsAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestCommitsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestCommitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestCommitsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有的冲突文件
     *
     * 获取所有的冲突文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestConflictFilesAsync($request)
    {
        return $this->listMergeRequestConflictFilesAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestConflictFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/conflict-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hideContent'] !== null) {
            $queryParams['hide_content'] = $localVarParams['hideContent'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestConflictFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestConflictFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求检视人列表
     *
     * 获取合并请求检视人列表
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
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/approval-reviewers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
        }
        if ($localVarParams['sourceBranch'] !== null) {
            $queryParams['source_branch'] = $localVarParams['sourceBranch'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $queryParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($localVarParams['targetRepositoryId'] !== null) {
            $queryParams['target_repository_id'] = $localVarParams['targetRepositoryId'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestReviewersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestReviewersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求模板列表
     *
     * 获取合并请求模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestTemplatesAsync($request)
    {
        return $this->listMergeRequestTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['templateName'] !== null) {
            $queryParams['template_name'] = $localVarParams['templateName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取可选的合并请求检视人
     *
     * 获取可选的合并请求检视人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestValidAssignedCandidatesAsync($request)
    {
        return $this->listMergeRequestValidAssignedCandidatesAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestValidAssignedCandidatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/assignee-candidates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
        }
        if ($localVarParams['mergeRequestIid'] !== null) {
            $queryParams['merge_request_iid'] = $localVarParams['mergeRequestIid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['searchByNameList'] !== null) {
            $queryParams['search_by_name_list'] = $localVarParams['searchByNameList'];
        }
        if ($localVarParams['targetProjectId'] !== null) {
            $queryParams['target_project_id'] = $localVarParams['targetProjectId'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['mode'] !== null) {
            $queryParams['mode'] = $localVarParams['mode'];
        }
        if ($localVarParams['onlyDevelopers'] !== null) {
            $queryParams['only_developers'] = $localVarParams['onlyDevelopers'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestValidAssignedCandidatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestValidAssignedCandidatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目合并请求审核设置列表
     *
     * 获取项目合并请求审核设置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectMergeRequestApproverSettingsAsync($request)
    {
        return $this->listProjectMergeRequestApproverSettingsAsyncWithHttpInfo($request);
    }
    
    public function listProjectMergeRequestApproverSettingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/approver-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectMergeRequestApproverSettingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectMergeRequestApproverSettingsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目检视人
     *
     * 获取代码组检视人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectMergeRequestCanBeAssignedReviewersAsync($request)
    {
        return $this->listProjectMergeRequestCanBeAssignedReviewersAsyncWithHttpInfo($request);
    }
    
    public function listProjectMergeRequestCanBeAssignedReviewersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/merge-requests/reviewers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectMergeRequestCanBeAssignedReviewersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectMergeRequestCanBeAssignedReviewersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目审核人或合并人
     *
     * 获取代码组审核人或合并人
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectMergeRequestCanBeAssignedUsersAsync($request)
    {
        return $this->listProjectMergeRequestCanBeAssignedUsersAsyncWithHttpInfo($request);
    }
    
    public function listProjectMergeRequestCanBeAssignedUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/merge-requests/assignee-candidates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectMergeRequestCanBeAssignedUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectMergeRequestCanBeAssignedUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库MR列表
     *
     * 获取仓库MR列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryMergeRequestsAsync($request)
    {
        return $this->listRepositoryMergeRequestsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryMergeRequestsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['authorId'] !== null) {
            $queryParams['author_id'] = $localVarParams['authorId'];
        }
        if ($localVarParams['sourceBranch'] !== null) {
            $queryParams['source_branch'] = $localVarParams['sourceBranch'];
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['sourceRepositoryId'] !== null) {
            $queryParams['source_repository_id'] = $localVarParams['sourceRepositoryId'];
        }
        if ($localVarParams['onlyCount'] !== null) {
            $queryParams['only_count'] = $localVarParams['onlyCount'];
        }
        if ($localVarParams['labels'] !== null) {
            $queryParams['labels'] = $localVarParams['labels'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryMergeRequestsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryMergeRequestsRequest',
            $asyncRequest = true);
    }

    /**
     * 合入合并请求
     *
     * 合入合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function mergeMergeRequestAsync($request)
    {
        return $this->mergeMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function mergeMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/merge';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\MergeMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\MergeMergeRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 变基合并请求
     *
     * 变基合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rebaseMergeRequestForOpenApiAsync($request)
    {
        return $this->rebaseMergeRequestForOpenApiAsyncWithHttpInfo($request);
    }
    
    public function rebaseMergeRequestForOpenApiAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/rebase';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\RebaseMergeRequestForOpenApiResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\RebaseMergeRequestForOpenApiRequest',
            $asyncRequest = true);
    }

    /**
     * 在线解决合并请求冲突
     *
     * 在线解决合并请求冲突
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resolveMergeRequestConflictsAsync($request)
    {
        return $this->resolveMergeRequestConflictsAsyncWithHttpInfo($request);
    }
    
    public function resolveMergeRequestConflictsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/resolve-conflicts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ResolveMergeRequestConflictsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ResolveMergeRequestConflictsRequest',
            $asyncRequest = true);
    }

    /**
     * 检视合并请求
     *
     * 检视合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reviewMergeRequestAsync($request)
    {
        return $this->reviewMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function reviewMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/approval-review';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ReviewMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ReviewMergeRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求关联的最新流水线
     *
     * 获取合并请求关联的最新流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showActualHeadPipelineAsync($request)
    {
        return $this->showActualHeadPipelineAsyncWithHttpInfo($request);
    }
    
    public function showActualHeadPipelineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/actual-head-pipeline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowActualHeadPipelineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowActualHeadPipelineRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求的平均评价
     *
     * 获取合并请求的平均评价
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAverageEvaluationAsync($request)
    {
        return $this->showAverageEvaluationAsyncWithHttpInfo($request);
    }
    
    public function showAverageEvaluationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/average-evaluation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowAverageEvaluationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowAverageEvaluationRequest',
            $asyncRequest = true);
    }

    /**
     * 获取分支代码冲突
     *
     * 获取分支代码冲突
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBranchConflictAsync($request)
    {
        return $this->showBranchConflictAsyncWithHttpInfo($request);
    }
    
    public function showBranchConflictAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/conflict';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceRepositoryId'] !== null) {
            $queryParams['source_repository_id'] = $localVarParams['sourceRepositoryId'];
        }
        if ($localVarParams['sourceBranch'] !== null) {
            $queryParams['source_branch'] = $localVarParams['sourceBranch'];
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
        }
        if ($localVarParams['targetRepositoryId'] !== null) {
            $queryParams['target_repository_id'] = $localVarParams['targetRepositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowBranchConflictResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowBranchConflictRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组合并请求设置
     *
     * 获取代码组合并请求设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupMergeRequestSettingAsync($request)
    {
        return $this->showGroupMergeRequestSettingAsyncWithHttpInfo($request);
    }
    
    public function showGroupMergeRequestSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/merge-requests/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupMergeRequestSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupMergeRequestSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求文件变更页单个文件下的检视意见
     *
     * 获取合并请求文件变更页单个文件下的检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequestCommentsByLineAsync($request)
    {
        return $this->showMergeRequestCommentsByLineAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestCommentsByLineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/comments-by-line';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['line'] !== null) {
            $queryParams['line'] = $localVarParams['line'];
        }
        if ($localVarParams['withCommitComments'] !== null) {
            $queryParams['with_commit_comments'] = $localVarParams['withCommitComments'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['baseSha'] !== null) {
            $queryParams['base_sha'] = $localVarParams['baseSha'];
        }
        if ($localVarParams['startSha'] !== null) {
            $queryParams['start_sha'] = $localVarParams['startSha'];
        }
        if ($localVarParams['headSha'] !== null) {
            $queryParams['head_sha'] = $localVarParams['headSha'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestCommentsByLineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestCommentsByLineRequest',
            $asyncRequest = true);
    }

    /**
     * 获取MR详情
     *
     * 获取MR详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequestDetailAsync($request)
    {
        return $this->showMergeRequestDetailAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库合并请求设置
     *
     * 获取仓库合并请求设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequestSettingAsync($request)
    {
        return $this->showMergeRequestSettingAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取单个合并请求模板
     *
     * 获取单个合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequestTemplateAsync($request)
    {
        return $this->showMergeRequestTemplateAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求打分
     *
     * 获取合并请求打分
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeRequestVotesDetailAsync($request)
    {
        return $this->showMergeRequestVotesDetailAsyncWithHttpInfo($request);
    }
    
    public function showMergeRequestVotesDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/votes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestVotesDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeRequestVotesDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求的可合入状态。
     *
     * 获取合并请求的可合入状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMergeableStateOuterAsync($request)
    {
        return $this->showMergeableStateOuterAsyncWithHttpInfo($request);
    }
    
    public function showMergeableStateOuterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/mergeable-state-out';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeableStateOuterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowMergeableStateOuterRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目合并请求设置
     *
     * 获取项目合并请求设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectMergeRequestSettingAsync($request)
    {
        return $this->showProjectMergeRequestSettingAsyncWithHttpInfo($request);
    }
    
    public function showProjectMergeRequestSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/merge-requests/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectMergeRequestSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectMergeRequestSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新代码组合并请求审核设置
     *
     * 更新代码组合并请求审核设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupMergeRequestApproverSettingAsync($request)
    {
        return $this->updateGroupMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function updateGroupMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/approver-settings/{setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['settingId'] !== null) {
            $pathParams['setting_id'] = $localVarParams['settingId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求
     *
     * 更新合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestAsync($request)
    {
        return $this->updateMergeRequestAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求审核设置
     *
     * 更新合并请求审核设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestApproverSettingAsync($request)
    {
        return $this->updateMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/approver-settings/{setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['settingId'] !== null) {
            $pathParams['setting_id'] = $localVarParams['settingId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求的审核人列表
     *
     * 更新合并请求的审核人列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestApproversAsync($request)
    {
        return $this->updateMergeRequestApproversAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestApproversAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/approval-approvers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestApproversResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestApproversRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求的检视人列表
     *
     * 更新合并请求的检视人列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestReviewersAsync($request)
    {
        return $this->updateMergeRequestReviewersAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestReviewersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/approval-reviewers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestReviewersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestReviewersRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库合并请求设置
     *
     * 更新仓库合并请求设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestSettingAsync($request)
    {
        return $this->updateMergeRequestSettingAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求模板
     *
     * 更新合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestTemplateAsync($request)
    {
        return $this->updateMergeRequestTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 更新合并请求打分
     *
     * 更新合并请求打分
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestVoteAsync($request)
    {
        return $this->updateMergeRequestVoteAsyncWithHttpInfo($request);
    }
    
    public function updateMergeRequestVoteAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/vote';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestVoteResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateMergeRequestVoteRequest',
            $asyncRequest = true);
    }

    /**
     * 更新项目合并请求审核设置
     *
     * 更新项目合并请求审核设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectMergeRequestApproverSettingAsync($request)
    {
        return $this->updateProjectMergeRequestApproverSettingAsyncWithHttpInfo($request);
    }
    
    public function updateProjectMergeRequestApproverSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/approver-settings/{setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['settingId'] !== null) {
            $pathParams['setting_id'] = $localVarParams['settingId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectMergeRequestApproverSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectMergeRequestApproverSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取提交关联的合并请求
     *
     * 获取提交关联的合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommitAssociatedMergeRequestsAsync($request)
    {
        return $this->listCommitAssociatedMergeRequestsAsyncWithHttpInfo($request);
    }
    
    public function listCommitAssociatedMergeRequestsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/commits/{sha}/merge-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListCommitAssociatedMergeRequestsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListCommitAssociatedMergeRequestsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库合并请求统计数据
     *
     * 获取仓库合并请求统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryMergeRequestsStatisticAsync($request)
    {
        return $this->showRepositoryMergeRequestsStatisticAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryMergeRequestsStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iids'] !== null) {
            $queryParams['iids'] = $localVarParams['iids'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryMergeRequestsStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryMergeRequestsStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 获取合并请求参与者
     *
     * 获取合并请求参与者
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestParticipantsAsync($request)
    {
        return $this->listMergeRequestParticipantsAsyncWithHttpInfo($request);
    }
    
    public function listMergeRequestParticipantsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/participants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestParticipantsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListMergeRequestParticipantsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仓库权限配置信息
     *
     * 查询仓库权限配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryPermissionInheritEnabledAsync($request)
    {
        return $this->showRepositoryPermissionInheritEnabledAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryPermissionInheritEnabledAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/permission-inherit-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryPermissionInheritEnabledResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryPermissionInheritEnabledRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库权限继承配置
     *
     * 更新仓库权限继承配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryPermissionInheritEnabledAsync($request)
    {
        return $this->updateRepositoryPermissionInheritEnabledAsyncWithHttpInfo($request);
    }
    
    public function updateRepositoryPermissionInheritEnabledAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/permission-inherit-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryPermissionInheritEnabledResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryPermissionInheritEnabledRequest',
            $asyncRequest = true);
    }

    /**
     * 获取流水线的关联的最新任务
     *
     * 获取流水线的关联的最新任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLatestPipelineJobsAsync($request)
    {
        return $this->listLatestPipelineJobsAsyncWithHttpInfo($request);
    }
    
    public function listLatestPipelineJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/pipelines/{pipeline_id}/latest-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListLatestPipelineJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListLatestPipelineJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取流水线的关联的任务列表
     *
     * 获取流水线的关联的任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPipelineJobsAsync($request)
    {
        return $this->listPipelineJobsAsyncWithHttpInfo($request);
    }
    
    public function listPipelineJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/pipelines/{pipeline_id}/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListPipelineJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListPipelineJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目继承设置项
     *
     * 获取项目继承设置项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectSettingsInheritCfgAsync($request)
    {
        return $this->showProjectSettingsInheritCfgAsyncWithHttpInfo($request);
    }
    
    public function showProjectSettingsInheritCfgAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/settings-inherit-cfg';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectSettingsInheritCfgResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectSettingsInheritCfgRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目水印设置
     *
     * 获取项目水印设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectWatermarkAsync($request)
    {
        return $this->showProjectWatermarkAsyncWithHttpInfo($request);
    }
    
    public function showProjectWatermarkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectWatermarkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectWatermarkRequest',
            $asyncRequest = true);
    }

    /**
     * 更新项目继承设置项
     *
     * 更新项目继承设置项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectSettingsInheritCfgAsync($request)
    {
        return $this->updateProjectSettingsInheritCfgAsyncWithHttpInfo($request);
    }
    
    public function updateProjectSettingsInheritCfgAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/settings-inherit-cfg';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectSettingsInheritCfgResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectSettingsInheritCfgRequest',
            $asyncRequest = true);
    }

    /**
     * 更新项目水印设置
     *
     * 更新项目水印设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectWatermarkAsync($request)
    {
        return $this->updateProjectWatermarkAsyncWithHttpInfo($request);
    }
    
    public function updateProjectWatermarkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectWatermarkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectWatermarkRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建仓库保护分支
     *
     * 批量创建仓库保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateProtectedBranchAsync($request)
    {
        return $this->batchCreateProtectedBranchAsyncWithHttpInfo($request);
    }
    
    public function batchCreateProtectedBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchCreateProtectedBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchCreateProtectedBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除仓库保护分支
     *
     * 批量删除仓库保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteProtectedBranchesAsync($request)
    {
        return $this->batchDeleteProtectedBranchesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteProtectedBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branches/bulk-deletion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchDeleteProtectedBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchDeleteProtectedBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新仓库保护分支
     *
     * 批量更新仓库保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateProtectedBranchesAsync($request)
    {
        return $this->batchUpdateProtectedBranchesAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateProtectedBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchUpdateProtectedBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchUpdateProtectedBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建项目下保护分支
     *
     * 创建项目下保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectProtectedBranchesAsync($request)
    {
        return $this->createProjectProtectedBranchesAsyncWithHttpInfo($request);
    }
    
    public function createProjectProtectedBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/protected-branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateProjectProtectedBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateProjectProtectedBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库保护分支
     *
     * 删除仓库保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProtectedBranchAsync($request)
    {
        return $this->deleteProtectedBranchAsyncWithHttpInfo($request);
    }
    
    public function deleteProtectedBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteProtectedBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteProtectedBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下保护分支列表
     *
     * 获取项目下保护分支列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectProtectedBranchesAsync($request)
    {
        return $this->listProjectProtectedBranchesAsyncWithHttpInfo($request);
    }
    
    public function listProjectProtectedBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/protected-branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['userActions'] !== null) {
            $queryParams['user_actions'] = $localVarParams['userActions'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectProtectedBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectProtectedBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库保护分支列表
     *
     * 获取仓库保护分支列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectedBranchesAsync($request)
    {
        return $this->listProtectedBranchesAsyncWithHttpInfo($request);
    }
    
    public function listProtectedBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProtectedBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProtectedBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库保护分支
     *
     * 获取仓库保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProtectedBranchAsync($request)
    {
        return $this->showProtectedBranchAsyncWithHttpInfo($request);
    }
    
    public function showProtectedBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProtectedBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProtectedBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库保护分支
     *
     * 更新仓库保护分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProtectedBranchAsync($request)
    {
        return $this->updateProtectedBranchAsyncWithHttpInfo($request);
    }
    
    public function updateProtectedBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProtectedBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProtectedBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建仓库保护Tag
     *
     * 批量创建仓库保护Tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateProtectedTagsAsync($request)
    {
        return $this->batchCreateProtectedTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateProtectedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchCreateProtectedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchCreateProtectedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除仓库保护Tag
     *
     * 批量删除仓库保护Tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteProtectedTagsAsync($request)
    {
        return $this->batchDeleteProtectedTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteProtectedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tags/bulk-deletion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchDeleteProtectedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchDeleteProtectedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新仓库保护Tag
     *
     * 批量更新仓库保护Tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateProtectedTagsAsync($request)
    {
        return $this->batchUpdateProtectedTagsAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateProtectedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchUpdateProtectedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\BatchUpdateProtectedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库保护Tag
     *
     * 删除仓库保护Tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProtectedTagAsync($request)
    {
        return $this->deleteProtectedTagAsyncWithHttpInfo($request);
    }
    
    public function deleteProtectedTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteProtectedTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteProtectedTagRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库保护Tag列表
     *
     * 获取仓库保护Tag列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectedTagsAsync($request)
    {
        return $this->listProtectedTagsAsyncWithHttpInfo($request);
    }
    
    public function listProtectedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProtectedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProtectedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库保护Tag
     *
     * 获取仓库保护Tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProtectedTagAsync($request)
    {
        return $this->showProtectedTagAsyncWithHttpInfo($request);
    }
    
    public function showProtectedTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProtectedTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProtectedTagRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库保护Tag
     *
     * 更新仓库保护Tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProtectedTagAsync($request)
    {
        return $this->updateProtectedTagAsyncWithHttpInfo($request);
    }
    
    public function updateProtectedTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/protected-tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProtectedTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProtectedTagRequest',
            $asyncRequest = true);
    }

    /**
     * 创建子模块
     *
     * 创建子模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSubmoduleAsync($request)
    {
        return $this->addSubmoduleAsyncWithHttpInfo($request);
    }
    
    public function addSubmoduleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/submodules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddSubmoduleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddSubmoduleRequest',
            $asyncRequest = true);
    }

    /**
     * 添加仓库ip白名单
     *
     * 添加仓库ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTrustedIpAddressAsync($request)
    {
        return $this->addTrustedIpAddressAsyncWithHttpInfo($request);
    }
    
    public function addTrustedIpAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{id}/trusted-ip-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddTrustedIpAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddTrustedIpAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 将普通仓库与远程镜像关联
     *
     * 将普通仓库与远程镜像关联
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateRemoteMirrorAsync($request)
    {
        return $this->associateRemoteMirrorAsyncWithHttpInfo($request);
    }
    
    public function associateRemoteMirrorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/remote-mirror/associate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AssociateRemoteMirrorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AssociateRemoteMirrorRequest',
            $asyncRequest = true);
    }

    /**
     * 关联仓库与成员组
     *
     * 关联仓库与成员组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateRepositoryUserGroupAsync($request)
    {
        return $this->associateRepositoryUserGroupAsyncWithHttpInfo($request);
    }
    
    public function associateRepositoryUserGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/repositories/{repository_id}/user-group/{user_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['userGroupId'] !== null) {
            $pathParams['user_group_id'] = $localVarParams['userGroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AssociateRepositoryUserGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AssociateRepositoryUserGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建指定分支下的目录
     *
     * 创建指定分支下的目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDirAsync($request)
    {
        return $this->createDirAsyncWithHttpInfo($request);
    }
    
    public function createDirAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/dir';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateDirResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateDirRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库ip白名单
     *
     * 删除仓库ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrustedIpAddressAsync($request)
    {
        return $this->deleteTrustedIpAddressAsyncWithHttpInfo($request);
    }
    
    public function deleteTrustedIpAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{id}/trusted-ip-addresses/{ip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['ipId'] !== null) {
            $pathParams['ip_id'] = $localVarParams['ipId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteTrustedIpAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteTrustedIpAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 仓库下载
     *
     * 仓库下载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadArchiveAsync($request)
    {
        return $this->downloadArchiveAsyncWithHttpInfo($request);
    }
    
    public function downloadArchiveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/archive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['archiveFormat'] !== null) {
            $queryParams['archive_format'] = $localVarParams['archiveFormat'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DownloadArchiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DownloadArchiveRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前登录用户仓库
     *
     * 获取当前登录用户仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCurrentUserRepositoriesAsync($request)
    {
        return $this->listCurrentUserRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listCurrentUserRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListCurrentUserRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListCurrentUserRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下当前用户有管理权限的代码组列表
     *
     * 获取项目下当前用户有管理权限的代码组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManageableGroupsAsync($request)
    {
        return $this->listManageableGroupsAsyncWithHttpInfo($request);
    }
    
    public function listManageableGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/manageable-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scope'] !== null) {
            $queryParams['scope'] = $localVarParams['scope'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListManageableGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListManageableGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看当前用户仓库导入任务列表
     *
     * 查看当前用户仓库导入任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPersonalRepositoryImportRecordsAsync($request)
    {
        return $this->listPersonalRepositoryImportRecordsAsyncWithHttpInfo($request);
    }
    
    public function listPersonalRepositoryImportRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/repository-import-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sourceType'] !== null) {
            $queryParams['source_type'] = $localVarParams['sourceType'];
        }
        if ($localVarParams['createdAfter'] !== null) {
            $queryParams['created_after'] = $localVarParams['createdAfter'];
        }
        if ($localVarParams['createdBefore'] !== null) {
            $queryParams['created_before'] = $localVarParams['createdBefore'];
        }
        if ($localVarParams['finishedAfter'] !== null) {
            $queryParams['finished_after'] = $localVarParams['finishedAfter'];
        }
        if ($localVarParams['finishedBefore'] !== null) {
            $queryParams['finished_before'] = $localVarParams['finishedBefore'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListPersonalRepositoryImportRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListPersonalRepositoryImportRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库提交规则
     *
     * 查看仓库提交规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryCommitRulesAsync($request)
    {
        return $this->listRepositoryCommitRulesAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryCommitRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/commit-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryCommitRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryCommitRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库贡献者列表
     *
     * 获取仓库贡献者列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryContributorsAsync($request)
    {
        return $this->listRepositoryContributorsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryContributorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/contributors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['refName'] !== null) {
            $queryParams['ref_name'] = $localVarParams['refName'];
        }
        if ($localVarParams['skipMerge'] !== null) {
            $queryParams['skip_merge'] = $localVarParams['skipMerge'];
        }
        if ($localVarParams['author'] !== null) {
            $queryParams['author'] = $localVarParams['author'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryContributorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryContributorsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库动态
     *
     * 获取仓库动态（当前仅开放推送动态）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryEventsAsync($request)
    {
        return $this->listRepositoryEventsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorId'] !== null) {
            $queryParams['author_id'] = $localVarParams['authorId'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['before'] !== null) {
            $queryParams['before'] = $localVarParams['before'];
        }
        if ($localVarParams['after'] !== null) {
            $queryParams['after'] = $localVarParams['after'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库Fork列表
     *
     * 获取仓库Fork列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryForksAsync($request)
    {
        return $this->listRepositoryForksAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryForksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/forks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryForksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryForksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库默认分支语言统计
     *
     * 获取仓库默认分支语言统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryLanguagesAsync($request)
    {
        return $this->listRepositoryLanguagesAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryLanguagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/languages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryLanguagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryLanguagesRequest',
            $asyncRequest = true);
    }

    /**
     * 模板仓列表
     *
     * 模板仓列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryTemplatesAsync($request)
    {
        return $this->listRepositoryTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repository-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['platform'] !== null) {
            $queryParams['platform'] = $localVarParams['platform'];
        }
        if ($localVarParams['pipeline'] !== null) {
            $queryParams['pipeline'] = $localVarParams['pipeline'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['enterType'] !== null) {
            $queryParams['enter_type'] = $localVarParams['enterType'];
        }
        if ($localVarParams['dateOrder'] !== null) {
            $queryParams['date_order'] = $localVarParams['dateOrder'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库指定分支或者标签子模块列表
     *
     * 获取仓库指定分支或者标签子模块列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubmodulesAsync($request)
    {
        return $this->listSubmodulesAsyncWithHttpInfo($request);
    }
    
    public function listSubmodulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/submodules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListSubmodulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListSubmodulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看分支文件列表
     *
     * 查看分支文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTreesAsync($request)
    {
        return $this->listTreesAsyncWithHttpInfo($request);
    }
    
    public function listTreesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/trees';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['recursive'] !== null) {
            $queryParams['recursive'] = $localVarParams['recursive'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTreesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTreesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库ip白名单
     *
     * 获取仓库ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrustedIpAddressesAsync($request)
    {
        return $this->listTrustedIpAddressesAsyncWithHttpInfo($request);
    }
    
    public function listTrustedIpAddressesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{id}/trusted-ip-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTrustedIpAddressesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTrustedIpAddressesRequest',
            $asyncRequest = true);
    }

    /**
     * 锁定仓库
     *
     * 锁定仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function lockRepositoryAsync($request)
    {
        return $this->lockRepositoryAsyncWithHttpInfo($request);
    }
    
    public function lockRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/repositories/{repository_id}/lock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\LockRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\LockRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库部署秘钥
     *
     * 删除仓库部署秘钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeDeployKeyAsync($request)
    {
        return $this->removeDeployKeyAsyncWithHttpInfo($request);
    }
    
    public function removeDeployKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/deploy-keys/{key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['keyId'] !== null) {
            $pathParams['key_id'] = $localVarParams['keyId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveDeployKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveDeployKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件内容
     *
     * 获取文件内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBlobsAsync($request)
    {
        return $this->showBlobsAsyncWithHttpInfo($request);
    }
    
    public function showBlobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/blobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['blobId'] !== null) {
            $queryParams['blob_id'] = $localVarParams['blobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowBlobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowBlobsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库指定分支的提交统计信息
     *
     * 获取仓库指定分支的提交统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitStatisticsAsync($request)
    {
        return $this->showCommitStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showCommitStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/commit-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowCommitStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 按行数查询提交文件内容
     *
     * 按行数查询提交文件内容，最大显示行数为1000行
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDiffLinesAsync($request)
    {
        return $this->showDiffLinesAsyncWithHttpInfo($request);
    }
    
    public function showDiffLinesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/diff-lines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['commitId'] !== null) {
            $queryParams['commit_id'] = $localVarParams['commitId'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['end'] !== null) {
            $queryParams['end'] = $localVarParams['end'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowDiffLinesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowDiffLinesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库最近推送事件
     *
     * 获取仓库最近推送事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLastPushEventInRepositoryAsync($request)
    {
        return $this->showLastPushEventInRepositoryAsyncWithHttpInfo($request);
    }
    
    public function showLastPushEventInRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/last-push-event';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowLastPushEventInRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowLastPushEventInRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库通知设置
     *
     * 获取仓库通知设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotificationSubscriptionAsync($request)
    {
        return $this->showNotificationSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function showNotificationSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/notification-subscriptions/subscription';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowNotificationSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowNotificationSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库通知设置启用状态
     *
     * 获取仓库通知设置启用状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotificationSubscriptionsStatusAsync($request)
    {
        return $this->showNotificationSubscriptionsStatusAsyncWithHttpInfo($request);
    }
    
    public function showNotificationSubscriptionsStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/notification-subscriptions/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowNotificationSubscriptionsStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowNotificationSubscriptionsStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 分支、tags、提交对比
     *
     * 分支、tags、提交对比
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRefCompareAsync($request)
    {
        return $this->showRefCompareAsyncWithHttpInfo($request);
    }
    
    public function showRefCompareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/compare';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['compareType'] !== null) {
            $queryParams['compare_type'] = $localVarParams['compareType'];
        }
        if ($localVarParams['targetId'] !== null) {
            $queryParams['target_id'] = $localVarParams['targetId'];
        }
        if ($localVarParams['straight'] !== null) {
            $queryParams['straight'] = $localVarParams['straight'];
        }
        if ($localVarParams['ignoreWhitespaceChange'] !== null) {
            $queryParams['ignore_whitespace_change'] = $localVarParams['ignoreWhitespaceChange'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['onlyCount'] !== null) {
            $queryParams['only_count'] = $localVarParams['onlyCount'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['additionalFields'] !== null) {
            $queryParams['additional_fields'] = $localVarParams['additionalFields'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRefCompareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRefCompareRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库镜像详情
     *
     * 获取仓库镜像详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRemoteMirrorAsync($request)
    {
        return $this->showRemoteMirrorAsyncWithHttpInfo($request);
    }
    
    public function showRemoteMirrorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/remote-mirror';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRemoteMirrorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRemoteMirrorRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库详情
     *
     * 获取仓库详情
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
        $resourcePath = '/v4/repositories/{repository_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库通用提交规则
     *
     * 查看仓库通用提交规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryGeneralCommitRuleAsync($request)
    {
        return $this->showRepositoryGeneralCommitRuleAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryGeneralCommitRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/general-commit-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryGeneralCommitRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryGeneralCommitRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库通用策略
     *
     * 查看仓库通用策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryGeneralPolicyAsync($request)
    {
        return $this->showRepositoryGeneralPolicyAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryGeneralPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/general-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryGeneralPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryGeneralPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库继承设置
     *
     * 查看仓库继承设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryInheritSettingAsync($request)
    {
        return $this->showRepositoryInheritSettingAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryInheritSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/inherit-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryInheritSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryInheritSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库继承设置源
     *
     * 查看仓库继承设置源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryInheritSettingSourceAsync($request)
    {
        return $this->showRepositoryInheritSettingSourceAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryInheritSettingSourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/inherit-setting-source';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryInheritSettingSourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryInheritSettingSourceRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库统计任务状态
     *
     * 获取仓库统计任务状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryStatisticsStatusAsync($request)
    {
        return $this->showRepositoryStatisticsStatusAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryStatisticsStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/statistics-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryStatisticsStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryStatisticsStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库统计摘要
     *
     * 获取仓库统计摘要
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryStatisticsSummaryAsync($request)
    {
        return $this->showRepositoryStatisticsSummaryAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryStatisticsSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/statistics-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryStatisticsSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryStatisticsSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库水印设置
     *
     * 获取仓库水印设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryWatermarkAsync($request)
    {
        return $this->showRepositoryWatermarkAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryWatermarkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryWatermarkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryWatermarkRequest',
            $asyncRequest = true);
    }

    /**
     * 获取CR仓库用户分支或标签级权限
     *
     * 获取CR仓库用户分支或标签级权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserRefPermissionAsync($request)
    {
        return $this->showUserRefPermissionAsyncWithHttpInfo($request);
    }
    
    public function showUserRefPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/user-ref-permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['targetRef'] !== null) {
            $queryParams['target_ref'] = $localVarParams['targetRef'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['changeRequestIid'] !== null) {
            $queryParams['change_request_iid'] = $localVarParams['changeRequestIid'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowUserRefPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowUserRefPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 启动仓库镜像同步
     *
     * 启动仓库镜像同步
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startRemoteMirrorSynchronizationAsync($request)
    {
        return $this->startRemoteMirrorSynchronizationAsyncWithHttpInfo($request);
    }
    
    public function startRemoteMirrorSynchronizationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/remote-mirror';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\StartRemoteMirrorSynchronizationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\StartRemoteMirrorSynchronizationRequest',
            $asyncRequest = true);
    }

    /**
     * 解锁仓库
     *
     * 解锁仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unlockRepositoryAsync($request)
    {
        return $this->unlockRepositoryAsyncWithHttpInfo($request);
    }
    
    public function unlockRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/repositories/{repository_id}/unlock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UnlockRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UnlockRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 修改仓库通知设置
     *
     * 修改仓库通知设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNotificationSubscriptionAsync($request)
    {
        return $this->updateNotificationSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function updateNotificationSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/notification-subscriptions/subscription';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateNotificationSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateNotificationSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 修改仓库通用策略
     *
     * 修改仓库通用策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryGeneralPolicyAsync($request)
    {
        return $this->updateRepositoryGeneralPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateRepositoryGeneralPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/general-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryGeneralPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryGeneralPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改仓库继承设置
     *
     * 修改仓库继承设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryInheritSettingAsync($request)
    {
        return $this->updateRepositoryInheritSettingAsyncWithHttpInfo($request);
    }
    
    public function updateRepositoryInheritSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/inherit-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryInheritSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryInheritSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库水印设置
     *
     * 更新仓库水印设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryWatermarkAsync($request)
    {
        return $this->updateRepositoryWatermarkAsyncWithHttpInfo($request);
    }
    
    public function updateRepositoryWatermarkAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryWatermarkResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryWatermarkRequest',
            $asyncRequest = true);
    }

    /**
     * 修改仓库ip白名单
     *
     * 修改仓库ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTrustedIpAddressAsync($request)
    {
        return $this->updateTrustedIpAddressAsyncWithHttpInfo($request);
    }
    
    public function updateTrustedIpAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{id}/trusted-ip-addresses/{ip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['ipId'] !== null) {
            $pathParams['ip_id'] = $localVarParams['ipId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateTrustedIpAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateTrustedIpAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 创建标签
     *
     * 创建标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTagAsync($request)
    {
        return $this->createTagAsyncWithHttpInfo($request);
    }
    
    public function createTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CreateTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除标签
     *
     * 删除标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTagAsync($request)
    {
        return $this->deleteTagAsyncWithHttpInfo($request);
    }
    
    public function deleteTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteTagRequest',
            $asyncRequest = true);
    }

    /**
     * 获取标签列表
     *
     * 获取标签列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagsAsync($request)
    {
        return $this->listTagsAsyncWithHttpInfo($request);
    }
    
    public function listTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看标签详情
     *
     * 查看标签详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTagAsync($request)
    {
        return $this->showTagAsyncWithHttpInfo($request);
    }
    
    public function showTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/repository/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowTagRequest',
            $asyncRequest = true);
    }

    /**
     * 添加租户ip白名单
     *
     * 添加租户ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTenantTrustedIpAddressAsync($request)
    {
        return $this->addTenantTrustedIpAddressAsyncWithHttpInfo($request);
    }
    
    public function addTenantTrustedIpAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/tenant/trusted-ip-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddTenantTrustedIpAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddTenantTrustedIpAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 删除租户ip白名单
     *
     * 删除租户ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTenantTrustedIpAddressAsync($request)
    {
        return $this->deleteTenantTrustedIpAddressAsyncWithHttpInfo($request);
    }
    
    public function deleteTenantTrustedIpAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/tenant/trusted-ip-addresses/{ip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipId'] !== null) {
            $pathParams['ip_id'] = $localVarParams['ipId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteTenantTrustedIpAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteTenantTrustedIpAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 获取租户ip白名单
     *
     * 获取租户ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTenantTrustedIpAddressesAsync($request)
    {
        return $this->listTenantTrustedIpAddressesAsyncWithHttpInfo($request);
    }
    
    public function listTenantTrustedIpAddressesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/tenant/trusted-ip-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTenantTrustedIpAddressesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListTenantTrustedIpAddressesRequest',
            $asyncRequest = true);
    }

    /**
     * 修改租户ip白名单
     *
     * 修改租户ip白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTenantTrustedIpAddressAsync($request)
    {
        return $this->updateTenantTrustedIpAddressAsyncWithHttpInfo($request);
    }
    
    public function updateTenantTrustedIpAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/tenant/trusted-ip-addresses/{ip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipId'] !== null) {
            $pathParams['ip_id'] = $localVarParams['ipId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateTenantTrustedIpAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateTenantTrustedIpAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 校验部署秘钥在上层代码组或项目是否配置
     *
     * 校验部署秘钥在上层代码组或项目是否配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkDeployKeyAsync($request)
    {
        return $this->checkDeployKeyAsyncWithHttpInfo($request);
    }
    
    public function checkDeployKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/deploy-keys/check-key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CheckDeployKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CheckDeployKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 校验代码组部署秘钥在上层代码组或项目是否配置
     *
     * 校验代码组部署秘钥在上层代码组或项目是否配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkGroupDeployKeyAsync($request)
    {
        return $this->checkGroupDeployKeyAsyncWithHttpInfo($request);
    }
    
    public function checkGroupDeployKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/deploy-keys/check-key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\CheckGroupDeployKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\CheckGroupDeployKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下指定分支的关联工作项列表
     *
     * 获取仓库下指定分支的关联工作项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBranchRelatedWorkItemsAsync($request)
    {
        return $this->listBranchRelatedWorkItemsAsyncWithHttpInfo($request);
    }
    
    public function listBranchRelatedWorkItemsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/branch/work-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListBranchRelatedWorkItemsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListBranchRelatedWorkItemsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下部署密钥列表
     *
     * 获取代码组下部署密钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupDeployKeysAsync($request)
    {
        return $this->listGroupDeployKeysAsyncWithHttpInfo($request);
    }
    
    public function listGroupDeployKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/deploy-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupDeployKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupDeployKeysRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下部署密钥列表
     *
     * 获取项目下部署密钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectDeployKeysAsync($request)
    {
        return $this->listProjectDeployKeysAsyncWithHttpInfo($request);
    }
    
    public function listProjectDeployKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/deploy-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectDeployKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectDeployKeysRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下部署密钥列表
     *
     * 获取仓库下部署密钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryDeployKeysAsync($request)
    {
        return $this->listRepositoryDeployKeysAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryDeployKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/deploy-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryDeployKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryDeployKeysRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下工作项列表
     *
     * 获取仓库下工作项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryWorkItemsAsync($request)
    {
        return $this->listRepositoryWorkItemsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryWorkItemsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/work-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $queryParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['isIpd'] !== null) {
            $queryParams['is_ipd'] = $localVarParams['isIpd'];
        }
        if ($localVarParams['subject'] !== null) {
            $queryParams['subject'] = $localVarParams['subject'];
        }
        if ($localVarParams['targetBranch'] !== null) {
            $queryParams['target_branch'] = $localVarParams['targetBranch'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryWorkItemsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryWorkItemsRequest',
            $asyncRequest = true);
    }

    /**
     * 添加ssh公钥
     *
     * 添加ssh公钥
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
        $resourcePath = '/v4/user/keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddSshKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddSshKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除ssh公钥
     *
     * 删除ssh公钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSshKeyAsync($request)
    {
        return $this->deleteSshKeyAsyncWithHttpInfo($request);
    }
    
    public function deleteSshKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/keys/{key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteSshKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\DeleteSshKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前用户的gpg_key列表
     *
     * 获取当前用户的gpg_key列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserGpgKeysAsync($request)
    {
        return $this->listUserGpgKeysAsyncWithHttpInfo($request);
    }
    
    public function listUserGpgKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/gpg-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListUserGpgKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListUserGpgKeysRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前用户的秘钥列表
     *
     * 获取当前用户的秘钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserKeysAsync($request)
    {
        return $this->listUserKeysAsyncWithHttpInfo($request);
    }
    
    public function listUserKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListUserKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListUserKeysRequest',
            $asyncRequest = true);
    }

    /**
     * 发送邮箱验证码
     *
     * 发送邮箱验证码
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendUserEmailVerifyCodeAsync($request)
    {
        return $this->sendUserEmailVerifyCodeAsyncWithHttpInfo($request);
    }
    
    public function sendUserEmailVerifyCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/email-verify-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\SendUserEmailVerifyCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\SendUserEmailVerifyCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取https的验证方式
     *
     * 获取https的验证方式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHttpsPasswordSettingAsync($request)
    {
        return $this->showHttpsPasswordSettingAsyncWithHttpInfo($request);
    }
    
    public function showHttpsPasswordSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/https-password-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowHttpsPasswordSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowHttpsPasswordSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取用户相关邮箱信息
     *
     * 获取用户相关邮箱信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserEmailsAsync($request)
    {
        return $this->showUserEmailsAsyncWithHttpInfo($request);
    }
    
    public function showUserEmailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/emails';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowUserEmailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowUserEmailsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改https的验证方式
     *
     * 修改https的验证方式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHttpsPasswordSettingAsync($request)
    {
        return $this->updateHttpsPasswordSettingAsyncWithHttpInfo($request);
    }
    
    public function updateHttpsPasswordSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/https-password-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateHttpsPasswordSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateHttpsPasswordSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新邮箱
     *
     * 更新邮箱
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateUserEmailsAsync($request)
    {
        return $this->updateUserEmailsAsyncWithHttpInfo($request);
    }
    
    public function updateUserEmailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/user/emails';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateUserEmailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateUserEmailsRequest',
            $asyncRequest = true);
    }

    /**
     * 添加代码组下Webhook
     *
     * 添加代码组下Webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addGroupWebhookAsync($request)
    {
        return $this->addGroupWebhookAsyncWithHttpInfo($request);
    }
    
    public function addGroupWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddGroupWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddGroupWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 添加项目下Webhook
     *
     * 添加项目下Webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addProjectWebhookAsync($request)
    {
        return $this->addProjectWebhookAsyncWithHttpInfo($request);
    }
    
    public function addProjectWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddProjectWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddProjectWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 添加仓库下Webhook
     *
     * 添加仓库下Webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addRepositoryWebhookAsync($request)
    {
        return $this->addRepositoryWebhookAsyncWithHttpInfo($request);
    }
    
    public function addRepositoryWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddRepositoryWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\AddRepositoryWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下指定Webhook的日志列表
     *
     * 获取代码组下指定Webhook的日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupWebhookLogsAsync($request)
    {
        return $this->listGroupWebhookLogsAsyncWithHttpInfo($request);
    }
    
    public function listGroupWebhookLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks/{hook_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $queryParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['uuid'] !== null) {
            $queryParams['uuid'] = $localVarParams['uuid'];
        }
        if ($localVarParams['createdAfter'] !== null) {
            $queryParams['created_after'] = $localVarParams['createdAfter'];
        }
        if ($localVarParams['createdBefore'] !== null) {
            $queryParams['created_before'] = $localVarParams['createdBefore'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupWebhookLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupWebhookLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下Webhook列表
     *
     * 获取代码组下Webhook列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupWebhooksAsync($request)
    {
        return $this->listGroupWebhooksAsyncWithHttpInfo($request);
    }
    
    public function listGroupWebhooksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupWebhooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListGroupWebhooksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下指定Webhook的日志列表
     *
     * 获取项目下指定Webhook的日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectWebhookLogsAsync($request)
    {
        return $this->listProjectWebhookLogsAsyncWithHttpInfo($request);
    }
    
    public function listProjectWebhookLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks/{hook_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['repositoryId'] !== null) {
            $queryParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['uuid'] !== null) {
            $queryParams['uuid'] = $localVarParams['uuid'];
        }
        if ($localVarParams['createdAfter'] !== null) {
            $queryParams['created_after'] = $localVarParams['createdAfter'];
        }
        if ($localVarParams['createdBefore'] !== null) {
            $queryParams['created_before'] = $localVarParams['createdBefore'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectWebhookLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectWebhookLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下Webhook列表
     *
     * 获取项目下Webhook列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectWebhooksAsync($request)
    {
        return $this->listProjectWebhooksAsyncWithHttpInfo($request);
    }
    
    public function listProjectWebhooksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectWebhooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListProjectWebhooksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下指定Webhook的日志列表
     *
     * 获取仓库下指定Webhook的日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryWebhookLogsAsync($request)
    {
        return $this->listRepositoryWebhookLogsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryWebhookLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks/{hook_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['uuid'] !== null) {
            $queryParams['uuid'] = $localVarParams['uuid'];
        }
        if ($localVarParams['createdAfter'] !== null) {
            $queryParams['created_after'] = $localVarParams['createdAfter'];
        }
        if ($localVarParams['createdBefore'] !== null) {
            $queryParams['created_before'] = $localVarParams['createdBefore'];
        }
        if ($localVarParams['repositoryId'] !== null) {
            $pathParams['repository_id'] = $localVarParams['repositoryId'];
        }
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryWebhookLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryWebhookLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下Webhook列表
     *
     * 获取仓库下Webhook列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryWebhooksAsync($request)
    {
        return $this->listRepositoryWebhooksAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryWebhooksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryWebhooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ListRepositoryWebhooksRequest',
            $asyncRequest = true);
    }

    /**
     * 删除代码组下单个Webhook
     *
     * 删除代码组下单个Webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeGroupWebhookAsync($request)
    {
        return $this->removeGroupWebhookAsyncWithHttpInfo($request);
    }
    
    public function removeGroupWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveGroupWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveGroupWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 删除项目下单个Webhook
     *
     * 删除项目下单个Webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeProjectWebhookAsync($request)
    {
        return $this->removeProjectWebhookAsyncWithHttpInfo($request);
    }
    
    public function removeProjectWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveProjectWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveProjectWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库下单个Webhook
     *
     * 删除仓库下单个Webhook
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeRepositoryWebhookAsync($request)
    {
        return $this->removeRepositoryWebhookAsyncWithHttpInfo($request);
    }
    
    public function removeRepositoryWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveRepositoryWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\RemoveRepositoryWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下单个Webhook数据
     *
     * 获取代码组下单个Webhook数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupWebhookAsync($request)
    {
        return $this->showGroupWebhookAsyncWithHttpInfo($request);
    }
    
    public function showGroupWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码组下指定Webhook的指定日志详情
     *
     * 获取代码组下指定Webhook的指定日志详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupWebhookLogAsync($request)
    {
        return $this->showGroupWebhookLogAsyncWithHttpInfo($request);
    }
    
    public function showGroupWebhookLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks/{hook_id}/logs/{log_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }
        if ($localVarParams['logId'] !== null) {
            $pathParams['log_id'] = $localVarParams['logId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupWebhookLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowGroupWebhookLogRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下单个Webhook数据
     *
     * 获取项目下单个Webhook数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectWebhookAsync($request)
    {
        return $this->showProjectWebhookAsyncWithHttpInfo($request);
    }
    
    public function showProjectWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下指定Webhook的指定日志详情
     *
     * 获取项目下指定Webhook的指定日志详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectWebhookLogAsync($request)
    {
        return $this->showProjectWebhookLogAsyncWithHttpInfo($request);
    }
    
    public function showProjectWebhookLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks/{hook_id}/logs/{log_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }
        if ($localVarParams['logId'] !== null) {
            $pathParams['log_id'] = $localVarParams['logId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectWebhookLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowProjectWebhookLogRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下单个Webhook数据
     *
     * 获取仓库下单个Webhook数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryWebhookAsync($request)
    {
        return $this->showRepositoryWebhookAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库下指定Webhook的指定日志详情
     *
     * 获取仓库下指定Webhook的指定日志详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryWebhookLogAsync($request)
    {
        return $this->showRepositoryWebhookLogAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryWebhookLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks/{hook_id}/logs/{log_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
        }
        if ($localVarParams['logId'] !== null) {
            $pathParams['log_id'] = $localVarParams['logId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryWebhookLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\ShowRepositoryWebhookLogRequest',
            $asyncRequest = true);
    }

    /**
     * 更新代码组下单个Webhook数据
     *
     * 更新代码组下单个Webhook数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupWebhookAsync($request)
    {
        return $this->updateGroupWebhookAsyncWithHttpInfo($request);
    }
    
    public function updateGroupWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/groups/{group_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateGroupWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 更新项目下单个Webhook数据
     *
     * 更新项目下单个Webhook数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectWebhookAsync($request)
    {
        return $this->updateProjectWebhookAsyncWithHttpInfo($request);
    }
    
    public function updateProjectWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/projects/{project_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateProjectWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库下单个Webhook数据
     *
     * 更新仓库下单个Webhook数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryWebhookAsync($request)
    {
        return $this->updateRepositoryWebhookAsyncWithHttpInfo($request);
    }
    
    public function updateRepositoryWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/repositories/{repository_id}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeHub\V4\Model\UpdateRepositoryWebhookRequest',
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