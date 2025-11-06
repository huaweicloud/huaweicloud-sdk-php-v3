<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4;

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
     * 创建提交信息
     *
     * 创建提交信息
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateCommitRequest');
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
    public function createCommitRevert($request)
    {
        return $this->createCommitRevertWithHttpInfo($request);
    }

    public function createCommitRevertWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateCommitRevertResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateCommitRevertRequest');
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
    public function listCommitAssociatedRefs($request)
    {
        return $this->listCommitAssociatedRefsWithHttpInfo($request);
    }

    public function listCommitAssociatedRefsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitAssociatedRefsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitAssociatedRefsRequest');
    }

    /**
     * 查看提交列表
     *
     * 查看提交列表
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
        $resourcePath = '/v4/repositories/{repository_id}/repository/commit-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['message'] !== null) {
            $queryParams['message'] = $localVarParams['message'];
        }
        if ($localVarParams['author'] !== null) {
            $queryParams['author'] = $localVarParams['author'];
        }
        if ($localVarParams['orderByDate'] !== null) {
            $queryParams['order_by_date'] = $localVarParams['orderByDate'];
        }
        if ($localVarParams['follow'] !== null) {
            $queryParams['follow'] = $localVarParams['follow'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitsRequest');
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
    public function showCommit($request)
    {
        return $this->showCommitWithHttpInfo($request);
    }

    public function showCommitWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitRequest');
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
    public function showCommitDiffMetadata($request)
    {
        return $this->showCommitDiffMetadataWithHttpInfo($request);
    }

    public function showCommitDiffMetadataWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitDiffMetadataResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitDiffMetadataRequest');
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
    public function showCommitFileDiff($request)
    {
        return $this->showCommitFileDiffWithHttpInfo($request);
    }

    public function showCommitFileDiffWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitFileDiffResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitFileDiffRequest');
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
    public function showDiffCommit($request)
    {
        return $this->showDiffCommitWithHttpInfo($request);
    }

    public function showDiffCommitWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowDiffCommitResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowDiffCommitRequest');
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
    public function createMergeRequestDiscussion($request)
    {
        return $this->createMergeRequestDiscussionWithHttpInfo($request);
    }

    public function createMergeRequestDiscussionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestDiscussionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestDiscussionRequest');
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
    public function createMergeRequestDiscussionResponse($request)
    {
        return $this->createMergeRequestDiscussionResponseWithHttpInfo($request);
    }

    public function createMergeRequestDiscussionResponseWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestDiscussionResponseResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestDiscussionResponseRequest');
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
    public function createReviewSetting($request)
    {
        return $this->createReviewSettingWithHttpInfo($request);
    }

    public function createReviewSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateReviewSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateReviewSettingRequest');
    }

    /**
     * 删除合并请求检视意见
     *
     * 删除合并请求检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMergeRequestDiscussion($request)
    {
        return $this->deleteMergeRequestDiscussionWithHttpInfo($request);
    }

    public function deleteMergeRequestDiscussionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestDiscussionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestDiscussionRequest');
    }

    /**
     * 获取代码页单个提交下检视意见列表
     *
     * 获取代码页单个提交下检视意见列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommitDiscussions($request)
    {
        return $this->listCommitDiscussionsWithHttpInfo($request);
    }

    public function listCommitDiscussionsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/commits/{sha}/discussions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitDiscussionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitDiscussionsRequest');
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
    public function listDefaultReviewCategories($request)
    {
        return $this->listDefaultReviewCategoriesWithHttpInfo($request);
    }

    public function listDefaultReviewCategoriesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListDefaultReviewCategoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListDefaultReviewCategoriesRequest');
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
    public function listMergeRequestDiscussions($request)
    {
        return $this->listMergeRequestDiscussionsWithHttpInfo($request);
    }

    public function listMergeRequestDiscussionsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestDiscussionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestDiscussionsRequest');
    }

    /**
     * 获取合并请求动态列表
     *
     * 获取合并请求动态列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestSystemNotes($request)
    {
        return $this->listMergeRequestSystemNotesWithHttpInfo($request);
    }

    public function listMergeRequestSystemNotesWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/system-notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestSystemNotesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestSystemNotesRequest');
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
    public function listProjectNoteRequiredAttributes($request)
    {
        return $this->listProjectNoteRequiredAttributesWithHttpInfo($request);
    }

    public function listProjectNoteRequiredAttributesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectNoteRequiredAttributesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectNoteRequiredAttributesRequest');
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
    public function listRepositoryReviewAuthors($request)
    {
        return $this->listRepositoryReviewAuthorsWithHttpInfo($request);
    }

    public function listRepositoryReviewAuthorsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryReviewAuthorsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryReviewAuthorsRequest');
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
    public function listRepositoryReviews($request)
    {
        return $this->listRepositoryReviewsWithHttpInfo($request);
    }

    public function listRepositoryReviewsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryReviewsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryReviewsRequest');
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
    public function showGroupNoteRequiredAttributes($request)
    {
        return $this->showGroupNoteRequiredAttributesWithHttpInfo($request);
    }

    public function showGroupNoteRequiredAttributesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupNoteRequiredAttributesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupNoteRequiredAttributesRequest');
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
    public function showGroupReviewSettings($request)
    {
        return $this->showGroupReviewSettingsWithHttpInfo($request);
    }

    public function showGroupReviewSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupReviewSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupReviewSettingsRequest');
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
    public function showMergeRequestDiscussion($request)
    {
        return $this->showMergeRequestDiscussionWithHttpInfo($request);
    }

    public function showMergeRequestDiscussionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestDiscussionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestDiscussionRequest');
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
    public function showNoteRequiredAttributes($request)
    {
        return $this->showNoteRequiredAttributesWithHttpInfo($request);
    }

    public function showNoteRequiredAttributesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowNoteRequiredAttributesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowNoteRequiredAttributesRequest');
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
    public function showProjectReviewSettings($request)
    {
        return $this->showProjectReviewSettingsWithHttpInfo($request);
    }

    public function showProjectReviewSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectReviewSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectReviewSettingsRequest');
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowReviewSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowReviewSettingRequest');
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
    public function updateGroupNoteRequiredAttributes($request)
    {
        return $this->updateGroupNoteRequiredAttributesWithHttpInfo($request);
    }

    public function updateGroupNoteRequiredAttributesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupNoteRequiredAttributesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupNoteRequiredAttributesRequest');
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
    public function updateGroupReviewSettings($request)
    {
        return $this->updateGroupReviewSettingsWithHttpInfo($request);
    }

    public function updateGroupReviewSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupReviewSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupReviewSettingsRequest');
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
    public function updateMergeRequestDiscussion($request)
    {
        return $this->updateMergeRequestDiscussionWithHttpInfo($request);
    }

    public function updateMergeRequestDiscussionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestDiscussionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestDiscussionRequest');
    }

    /**
     * 更新合并请求检视意见中除评论内容以外的信息
     *
     * 更新合并请求检视意见中除评论内容以外的信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMergeRequestDiscussionInfo($request)
    {
        return $this->updateMergeRequestDiscussionInfoWithHttpInfo($request);
    }

    public function updateMergeRequestDiscussionInfoWithHttpInfo($request)
    {
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
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestDiscussionInfoResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestDiscussionInfoRequest');
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
    public function updateNoteRequiredAttributes($request)
    {
        return $this->updateNoteRequiredAttributesWithHttpInfo($request);
    }

    public function updateNoteRequiredAttributesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateNoteRequiredAttributesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateNoteRequiredAttributesRequest');
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
    public function updateProjectNoteRequiredAttributes($request)
    {
        return $this->updateProjectNoteRequiredAttributesWithHttpInfo($request);
    }

    public function updateProjectNoteRequiredAttributesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectNoteRequiredAttributesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectNoteRequiredAttributesRequest');
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
    public function updateProjectReviewSettings($request)
    {
        return $this->updateProjectReviewSettingsWithHttpInfo($request);
    }

    public function updateProjectReviewSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectReviewSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectReviewSettingsRequest');
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
    public function createFile($request)
    {
        return $this->createFileWithHttpInfo($request);
    }

    public function createFileWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateFileRequest');
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
    public function deleteFile($request)
    {
        return $this->deleteFileWithHttpInfo($request);
    }

    public function deleteFileWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteFileRequest');
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
    public function downloadBlobsRaw($request)
    {
        return $this->downloadBlobsRawWithHttpInfo($request);
    }

    public function downloadBlobsRawWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DownloadBlobsRawResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DownloadBlobsRawRequest');
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
    public function listFileBlameLines($request)
    {
        return $this->listFileBlameLinesWithHttpInfo($request);
    }

    public function listFileBlameLinesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListFileBlameLinesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListFileBlameLinesRequest');
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
    public function listFileUpperTreeEntries($request)
    {
        return $this->listFileUpperTreeEntriesWithHttpInfo($request);
    }

    public function listFileUpperTreeEntriesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListFileUpperTreeEntriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListFileUpperTreeEntriesRequest');
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
    public function listFiles($request)
    {
        return $this->listFilesWithHttpInfo($request);
    }

    public function listFilesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListFilesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListFilesRequest');
    }

    /**
     * 查看文件树
     *
     * 查看文件树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogsTree($request)
    {
        return $this->listLogsTreeWithHttpInfo($request);
    }

    public function listLogsTreeWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/repository/logs-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListLogsTreeResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListLogsTreeRequest');
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
    public function listTrees($request)
    {
        return $this->listTreesWithHttpInfo($request);
    }

    public function listTreesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTreesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTreesRequest');
    }

    /**
     * 文件重命名
     *
     * 文件重命名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function renameFile($request)
    {
        return $this->renameFileWithHttpInfo($request);
    }

    public function renameFileWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/repository/rename-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RenameFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RenameFileRequest');
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
    public function showFile($request)
    {
        return $this->showFileWithHttpInfo($request);
    }

    public function showFileWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowFileRequest');
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
    public function showFileContent($request)
    {
        return $this->showFileContentWithHttpInfo($request);
    }

    public function showFileContentWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowFileContentResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowFileContentRequest');
    }

    /**
     * 获取仓库单个文件内容
     *
     * 获取仓库单个文件内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFileRaw($request)
    {
        return $this->showFileRawWithHttpInfo($request);
    }

    public function showFileRawWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/repository/files/raw';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowFileRawResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowFileRawRequest');
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
    public function showReadmeFile($request)
    {
        return $this->showReadmeFileWithHttpInfo($request);
    }

    public function showReadmeFileWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowReadmeFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowReadmeFileRequest');
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
    public function updateFile($request)
    {
        return $this->updateFileWithHttpInfo($request);
    }

    public function updateFileWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateFileResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateFileRequest');
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
    public function associateGroupUserGroup($request)
    {
        return $this->associateGroupUserGroupWithHttpInfo($request);
    }

    public function associateGroupUserGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AssociateGroupUserGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AssociateGroupUserGroupRequest');
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
    public function createGroup($request)
    {
        return $this->createGroupWithHttpInfo($request);
    }

    public function createGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateGroupRequest');
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
    public function deleteGroup($request)
    {
        return $this->deleteGroupWithHttpInfo($request);
    }

    public function deleteGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteGroupRequest');
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
    public function listGroupAddableMembers($request)
    {
        return $this->listGroupAddableMembersWithHttpInfo($request);
    }

    public function listGroupAddableMembersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupAddableMembersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupAddableMembersRequest');
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
    public function listGroupAddableUserGroups($request)
    {
        return $this->listGroupAddableUserGroupsWithHttpInfo($request);
    }

    public function listGroupAddableUserGroupsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupAddableUserGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupAddableUserGroupsRequest');
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
    public function listGroupMembers($request)
    {
        return $this->listGroupMembersWithHttpInfo($request);
    }

    public function listGroupMembersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMembersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMembersRequest');
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
    public function listGroupPermissionResources($request)
    {
        return $this->listGroupPermissionResourcesWithHttpInfo($request);
    }

    public function listGroupPermissionResourcesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupPermissionResourcesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupPermissionResourcesRequest');
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
    public function listGroupSubgroupsAndRepositories($request)
    {
        return $this->listGroupSubgroupsAndRepositoriesWithHttpInfo($request);
    }

    public function listGroupSubgroupsAndRepositoriesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupSubgroupsAndRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupSubgroupsAndRepositoriesRequest');
    }

    /**
     * 组织下查询成员组列表
     *
     * 组织下查询成员组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupUserGroups($request)
    {
        return $this->listGroupUserGroupsWithHttpInfo($request);
    }

    public function listGroupUserGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/user-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupUserGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupUserGroupsRequest');
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
    public function listGroups($request)
    {
        return $this->listGroupsWithHttpInfo($request);
    }

    public function listGroupsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupsRequest');
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
    public function listManageableGroups($request)
    {
        return $this->listManageableGroupsWithHttpInfo($request);
    }

    public function listManageableGroupsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListManageableGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListManageableGroupsRequest');
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
    public function showGroup($request)
    {
        return $this->showGroupWithHttpInfo($request);
    }

    public function showGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupRequest');
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
    public function showGroupGeneralPolicy($request)
    {
        return $this->showGroupGeneralPolicyWithHttpInfo($request);
    }

    public function showGroupGeneralPolicyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupGeneralPolicyRequest');
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
    public function showGroupInheritSetting($request)
    {
        return $this->showGroupInheritSettingWithHttpInfo($request);
    }

    public function showGroupInheritSettingWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/inherit-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupInheritSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupInheritSettingRequest');
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
    public function showGroupPermissionInheritEnabled($request)
    {
        return $this->showGroupPermissionInheritEnabledWithHttpInfo($request);
    }

    public function showGroupPermissionInheritEnabledWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupPermissionInheritEnabledResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupPermissionInheritEnabledRequest');
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
    public function showGroupSettingsInheritCfg($request)
    {
        return $this->showGroupSettingsInheritCfgWithHttpInfo($request);
    }

    public function showGroupSettingsInheritCfgWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupSettingsInheritCfgResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupSettingsInheritCfgRequest');
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
    public function showGroupWatermark($request)
    {
        return $this->showGroupWatermarkWithHttpInfo($request);
    }

    public function showGroupWatermarkWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupWatermarkResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupWatermarkRequest');
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
    public function showGroupsGeneralPolicy($request)
    {
        return $this->showGroupsGeneralPolicyWithHttpInfo($request);
    }

    public function showGroupsGeneralPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/general-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupsGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupsGeneralPolicyRequest');
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
    public function showGroupsInherit($request)
    {
        return $this->showGroupsInheritWithHttpInfo($request);
    }

    public function showGroupsInheritWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupsInheritResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupsInheritRequest');
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
    public function transferGroup($request)
    {
        return $this->transferGroupWithHttpInfo($request);
    }

    public function transferGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\TransferGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\TransferGroupRequest');
    }

    /**
     * 更新代码组的基本设置信息
     *
     * 更新代码组的基本设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupGeneralPolicy($request)
    {
        return $this->updateGroupGeneralPolicyWithHttpInfo($request);
    }

    public function updateGroupGeneralPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/general-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupGeneralPolicyRequest');
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
    public function updateGroupWatermark($request)
    {
        return $this->updateGroupWatermarkWithHttpInfo($request);
    }

    public function updateGroupWatermarkWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupWatermarkResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupWatermarkRequest');
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
    public function addRepositoryMembers($request)
    {
        return $this->addRepositoryMembersWithHttpInfo($request);
    }

    public function addRepositoryMembersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddRepositoryMembersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddRepositoryMembersRequest');
    }

    /**
     * 获取代码组下成员组列表
     *
     * 获取代码组下成员组列表(保护分支保护Tags设置中使用)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupProtectedRefsUserGroups($request)
    {
        return $this->listGroupProtectedRefsUserGroupsWithHttpInfo($request);
    }

    public function listGroupProtectedRefsUserGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/protected-refs/user-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupProtectedRefsUserGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupProtectedRefsUserGroupsRequest');
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
    public function listMembers($request)
    {
        return $this->listMembersWithHttpInfo($request);
    }

    public function listMembersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMembersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMembersRequest');
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
    public function listProductPermissionResourcesGrantedUsers($request)
    {
        return $this->listProductPermissionResourcesGrantedUsersWithHttpInfo($request);
    }

    public function listProductPermissionResourcesGrantedUsersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProductPermissionResourcesGrantedUsersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProductPermissionResourcesGrantedUsersRequest');
    }

    /**
     * 获取项目下成员组列表
     *
     * 获取项目下成员组列表(保护分支保护Tags设置中使用)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectProtectedRefsUserGroups($request)
    {
        return $this->listProjectProtectedRefsUserGroupsWithHttpInfo($request);
    }

    public function listProjectProtectedRefsUserGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/protected-refs/user-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectProtectedRefsUserGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectProtectedRefsUserGroupsRequest');
    }

    /**
     * 获取仓库下成员组列表
     *
     * 获取仓库下成员组列表(保护分支保护Tags设置中使用)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryProtectedRefsUserGroups($request)
    {
        return $this->listRepositoryProtectedRefsUserGroupsWithHttpInfo($request);
    }

    public function listRepositoryProtectedRefsUserGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/protected-refs/user-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryProtectedRefsUserGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryProtectedRefsUserGroupsRequest');
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
    public function listRepositoryUserGroups($request)
    {
        return $this->listRepositoryUserGroupsWithHttpInfo($request);
    }

    public function listRepositoryUserGroupsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryUserGroupsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryUserGroupsRequest');
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
    public function approvalMergeRequest($request)
    {
        return $this->approvalMergeRequestWithHttpInfo($request);
    }

    public function approvalMergeRequestWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ApprovalMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ApprovalMergeRequestRequest');
    }

    /**
     * Cherry pick合并请求
     *
     * Cherry pick合并请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCherryPickMergeRequest($request)
    {
        return $this->createCherryPickMergeRequestWithHttpInfo($request);
    }

    public function createCherryPickMergeRequestWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/cherry-pick';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateCherryPickMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateCherryPickMergeRequestRequest');
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
    public function createGroupMergeRequestApproverSetting($request)
    {
        return $this->createGroupMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function createGroupMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateGroupMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateGroupMergeRequestApproverSettingRequest');
    }

    /**
     * 创建代码组合并请求模板
     *
     * 创建代码组合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGroupMergeRequestTemplate($request)
    {
        return $this->createGroupMergeRequestTemplateWithHttpInfo($request);
    }

    public function createGroupMergeRequestTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/merge-requests/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateGroupMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateGroupMergeRequestTemplateRequest');
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
    public function createMergeRequest($request)
    {
        return $this->createMergeRequestWithHttpInfo($request);
    }

    public function createMergeRequestWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestRequest');
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
    public function createMergeRequestApproverSetting($request)
    {
        return $this->createMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function createMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestApproverSettingRequest');
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
    public function createMergeRequestTemplate($request)
    {
        return $this->createMergeRequestTemplateWithHttpInfo($request);
    }

    public function createMergeRequestTemplateWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateMergeRequestTemplateRequest');
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
    public function createProjectMergeRequestApproverSetting($request)
    {
        return $this->createProjectMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function createProjectMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectMergeRequestApproverSettingRequest');
    }

    /**
     * 创建项目合并请求模板
     *
     * 创建项目合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectMergeRequestTemplate($request)
    {
        return $this->createProjectMergeRequestTemplateWithHttpInfo($request);
    }

    public function createProjectMergeRequestTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/merge-requests/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectMergeRequestTemplateRequest');
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
    public function deleteGroupMergeRequestApproverSetting($request)
    {
        return $this->deleteGroupMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function deleteGroupMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteGroupMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteGroupMergeRequestApproverSettingRequest');
    }

    /**
     * 删除代码组合并请求模板
     *
     * 删除代码组合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGroupMergeRequestTemplate($request)
    {
        return $this->deleteGroupMergeRequestTemplateWithHttpInfo($request);
    }

    public function deleteGroupMergeRequestTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteGroupMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteGroupMergeRequestTemplateRequest');
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
    public function deleteMergeRequestApproverSetting($request)
    {
        return $this->deleteMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function deleteMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestApproverSettingRequest');
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
    public function deleteMergeRequestTemplate($request)
    {
        return $this->deleteMergeRequestTemplateWithHttpInfo($request);
    }

    public function deleteMergeRequestTemplateWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestTemplateRequest');
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
    public function deleteMergeRequestVote($request)
    {
        return $this->deleteMergeRequestVoteWithHttpInfo($request);
    }

    public function deleteMergeRequestVoteWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestVoteResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteMergeRequestVoteRequest');
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
    public function deleteProjectMergeRequestApproverSetting($request)
    {
        return $this->deleteProjectMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function deleteProjectMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProjectMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProjectMergeRequestApproverSettingRequest');
    }

    /**
     * 删除项目合并请求模板
     *
     * 删除项目合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProjectMergeRequestTemplate($request)
    {
        return $this->deleteProjectMergeRequestTemplateWithHttpInfo($request);
    }

    public function deleteProjectMergeRequestTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProjectMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProjectMergeRequestTemplateRequest');
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
    public function importMergeRequest($request)
    {
        return $this->importMergeRequestWithHttpInfo($request);
    }

    public function importMergeRequestWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ImportMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ImportMergeRequestRequest');
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
    public function listCommitAssociatedMergeRequests($request)
    {
        return $this->listCommitAssociatedMergeRequestsWithHttpInfo($request);
    }

    public function listCommitAssociatedMergeRequestsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitAssociatedMergeRequestsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCommitAssociatedMergeRequestsRequest');
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
    public function listDiscussionTemplates($request)
    {
        return $this->listDiscussionTemplatesWithHttpInfo($request);
    }

    public function listDiscussionTemplatesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListDiscussionTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListDiscussionTemplatesRequest');
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
    public function listGroupMergeRequestApproverSettings($request)
    {
        return $this->listGroupMergeRequestApproverSettingsWithHttpInfo($request);
    }

    public function listGroupMergeRequestApproverSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestApproverSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestApproverSettingsRequest');
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
    public function listGroupMergeRequestCanBeAssignedReviewers($request)
    {
        return $this->listGroupMergeRequestCanBeAssignedReviewersWithHttpInfo($request);
    }

    public function listGroupMergeRequestCanBeAssignedReviewersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestCanBeAssignedReviewersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestCanBeAssignedReviewersRequest');
    }

    /**
     * 获取代码组合并请求模板列表
     *
     * 获取代码组合并请求模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMergeRequestTemplates($request)
    {
        return $this->listGroupMergeRequestTemplatesWithHttpInfo($request);
    }

    public function listGroupMergeRequestTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/merge-requests/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestTemplatesRequest');
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
    public function listGroupMergeRequestValidAssignedCandidates($request)
    {
        return $this->listGroupMergeRequestValidAssignedCandidatesWithHttpInfo($request);
    }

    public function listGroupMergeRequestValidAssignedCandidatesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestValidAssignedCandidatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupMergeRequestValidAssignedCandidatesRequest');
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
    public function listMergeRequestApproverSettings($request)
    {
        return $this->listMergeRequestApproverSettingsWithHttpInfo($request);
    }

    public function listMergeRequestApproverSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestApproverSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestApproverSettingsRequest');
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
    public function listMergeRequestApprovers($request)
    {
        return $this->listMergeRequestApproversWithHttpInfo($request);
    }

    public function listMergeRequestApproversWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestApproversResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestApproversRequest');
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
    public function listMergeRequestChanges($request)
    {
        return $this->listMergeRequestChangesWithHttpInfo($request);
    }

    public function listMergeRequestChangesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestChangesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestChangesRequest');
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
    public function listMergeRequestChangesTrees($request)
    {
        return $this->listMergeRequestChangesTreesWithHttpInfo($request);
    }

    public function listMergeRequestChangesTreesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestChangesTreesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestChangesTreesRequest');
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
    public function listMergeRequestCommits($request)
    {
        return $this->listMergeRequestCommitsWithHttpInfo($request);
    }

    public function listMergeRequestCommitsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestCommitsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestCommitsRequest');
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
    public function listMergeRequestConflictFiles($request)
    {
        return $this->listMergeRequestConflictFilesWithHttpInfo($request);
    }

    public function listMergeRequestConflictFilesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestConflictFilesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestConflictFilesRequest');
    }

    /**
     * 获取合并请求评价列表
     *
     * 获取合并请求评价列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestEvaluations($request)
    {
        return $this->listMergeRequestEvaluationsWithHttpInfo($request);
    }

    public function listMergeRequestEvaluationsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/evaluations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestEvaluationsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestEvaluationsRequest');
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
    public function listMergeRequestParticipants($request)
    {
        return $this->listMergeRequestParticipantsWithHttpInfo($request);
    }

    public function listMergeRequestParticipantsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestParticipantsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestParticipantsRequest');
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
    public function listMergeRequestReviewers($request)
    {
        return $this->listMergeRequestReviewersWithHttpInfo($request);
    }

    public function listMergeRequestReviewersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestReviewersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestReviewersRequest');
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
    public function listMergeRequestTemplates($request)
    {
        return $this->listMergeRequestTemplatesWithHttpInfo($request);
    }

    public function listMergeRequestTemplatesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestTemplatesRequest');
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
    public function listMergeRequestValidAssignedCandidates($request)
    {
        return $this->listMergeRequestValidAssignedCandidatesWithHttpInfo($request);
    }

    public function listMergeRequestValidAssignedCandidatesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestValidAssignedCandidatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestValidAssignedCandidatesRequest');
    }

    /**
     * 获取文件变更历史版本列表
     *
     * 获取文件变更历史版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMergeRequestVersions($request)
    {
        return $this->listMergeRequestVersionsWithHttpInfo($request);
    }

    public function listMergeRequestVersionsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/merge-requests/{merge_request_iid}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestVersionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListMergeRequestVersionsRequest');
    }

    /**
     * 获取个人首页mr列表
     *
     * 获取个人首页mr列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPersonalMergeRequests($request)
    {
        return $this->listPersonalMergeRequestsWithHttpInfo($request);
    }

    public function listPersonalMergeRequestsWithHttpInfo($request)
    {
        $resourcePath = '/v4/merge-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['labels'] !== null) {
            $queryParams['labels'] = $localVarParams['labels'];
        }
        if ($localVarParams['createdBefore'] !== null) {
            $queryParams['created_before'] = $localVarParams['createdBefore'];
        }
        if ($localVarParams['createdAfter'] !== null) {
            $queryParams['created_after'] = $localVarParams['createdAfter'];
        }
        if ($localVarParams['updatedAfter'] !== null) {
            $queryParams['updated_after'] = $localVarParams['updatedAfter'];
        }
        if ($localVarParams['updatedBefore'] !== null) {
            $queryParams['updated_before'] = $localVarParams['updatedBefore'];
        }
        if ($localVarParams['view'] !== null) {
            $queryParams['view'] = $localVarParams['view'];
        }
        if ($localVarParams['authorId'] !== null) {
            $queryParams['author_id'] = $localVarParams['authorId'];
        }
        if ($localVarParams['scope'] !== null) {
            $queryParams['scope'] = $localVarParams['scope'];
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
        if ($localVarParams['wip'] !== null) {
            $queryParams['wip'] = $localVarParams['wip'];
        }
        if ($localVarParams['mergedBy'] !== null) {
            $queryParams['merged_by'] = $localVarParams['mergedBy'];
        }
        if ($localVarParams['mergedAfter'] !== null) {
            $queryParams['merged_after'] = $localVarParams['mergedAfter'];
        }
        if ($localVarParams['mergedBefore'] !== null) {
            $queryParams['merged_before'] = $localVarParams['mergedBefore'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['onlyCount'] !== null) {
            $queryParams['only_count'] = $localVarParams['onlyCount'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPersonalMergeRequestsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPersonalMergeRequestsRequest');
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
    public function listProjectMergeRequestApproverSettings($request)
    {
        return $this->listProjectMergeRequestApproverSettingsWithHttpInfo($request);
    }

    public function listProjectMergeRequestApproverSettingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestApproverSettingsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestApproverSettingsRequest');
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
    public function listProjectMergeRequestCanBeAssignedReviewers($request)
    {
        return $this->listProjectMergeRequestCanBeAssignedReviewersWithHttpInfo($request);
    }

    public function listProjectMergeRequestCanBeAssignedReviewersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestCanBeAssignedReviewersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestCanBeAssignedReviewersRequest');
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
    public function listProjectMergeRequestCanBeAssignedUsers($request)
    {
        return $this->listProjectMergeRequestCanBeAssignedUsersWithHttpInfo($request);
    }

    public function listProjectMergeRequestCanBeAssignedUsersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestCanBeAssignedUsersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestCanBeAssignedUsersRequest');
    }

    /**
     * 获取项目合并请求模板列表
     *
     * 获取项目合并请求模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectMergeRequestTemplates($request)
    {
        return $this->listProjectMergeRequestTemplatesWithHttpInfo($request);
    }

    public function listProjectMergeRequestTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/merge-requests/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectMergeRequestTemplatesRequest');
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
    public function listRepositoryMergeRequests($request)
    {
        return $this->listRepositoryMergeRequestsWithHttpInfo($request);
    }

    public function listRepositoryMergeRequestsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryMergeRequestsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryMergeRequestsRequest');
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
    public function mergeMergeRequest($request)
    {
        return $this->mergeMergeRequestWithHttpInfo($request);
    }

    public function mergeMergeRequestWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeMergeRequestRequest');
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
    public function rebaseMergeRequestForOpenApi($request)
    {
        return $this->rebaseMergeRequestForOpenApiWithHttpInfo($request);
    }

    public function rebaseMergeRequestForOpenApiWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RebaseMergeRequestForOpenApiResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RebaseMergeRequestForOpenApiRequest');
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
    public function resolveMergeRequestConflicts($request)
    {
        return $this->resolveMergeRequestConflictsWithHttpInfo($request);
    }

    public function resolveMergeRequestConflictsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ResolveMergeRequestConflictsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ResolveMergeRequestConflictsRequest');
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
    public function reviewMergeRequest($request)
    {
        return $this->reviewMergeRequestWithHttpInfo($request);
    }

    public function reviewMergeRequestWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ReviewMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ReviewMergeRequestRequest');
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
    public function showActualHeadPipeline($request)
    {
        return $this->showActualHeadPipelineWithHttpInfo($request);
    }

    public function showActualHeadPipelineWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowActualHeadPipelineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowActualHeadPipelineRequest');
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
    public function showAverageEvaluation($request)
    {
        return $this->showAverageEvaluationWithHttpInfo($request);
    }

    public function showAverageEvaluationWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowAverageEvaluationResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowAverageEvaluationRequest');
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
    public function showBranchConflict($request)
    {
        return $this->showBranchConflictWithHttpInfo($request);
    }

    public function showBranchConflictWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowBranchConflictResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowBranchConflictRequest');
    }

    /**
     * 获取代码页单个提交下文件的检视意见
     *
     * 获取代码页单个提交下文件的检视意见
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCommitCommentsByLine($request)
    {
        return $this->showCommitCommentsByLineWithHttpInfo($request);
    }

    public function showCommitCommentsByLineWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/commits/{sha}/comments-by-line';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitCommentsByLineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitCommentsByLineRequest');
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
    public function showGroupMergeRequestSetting($request)
    {
        return $this->showGroupMergeRequestSettingWithHttpInfo($request);
    }

    public function showGroupMergeRequestSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupMergeRequestSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupMergeRequestSettingRequest');
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
    public function showMergeRequestCommentsByLine($request)
    {
        return $this->showMergeRequestCommentsByLineWithHttpInfo($request);
    }

    public function showMergeRequestCommentsByLineWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestCommentsByLineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestCommentsByLineRequest');
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
    public function showMergeRequestDetail($request)
    {
        return $this->showMergeRequestDetailWithHttpInfo($request);
    }

    public function showMergeRequestDetailWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestDetailResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestDetailRequest');
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
    public function showMergeRequestSetting($request)
    {
        return $this->showMergeRequestSettingWithHttpInfo($request);
    }

    public function showMergeRequestSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestSettingRequest');
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
    public function showMergeRequestTemplate($request)
    {
        return $this->showMergeRequestTemplateWithHttpInfo($request);
    }

    public function showMergeRequestTemplateWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestTemplateRequest');
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
    public function showMergeRequestVotesDetail($request)
    {
        return $this->showMergeRequestVotesDetailWithHttpInfo($request);
    }

    public function showMergeRequestVotesDetailWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestVotesDetailResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeRequestVotesDetailRequest');
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
    public function showMergeableStateOuter($request)
    {
        return $this->showMergeableStateOuterWithHttpInfo($request);
    }

    public function showMergeableStateOuterWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeableStateOuterResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowMergeableStateOuterRequest');
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
    public function showProjectMergeRequestSetting($request)
    {
        return $this->showProjectMergeRequestSettingWithHttpInfo($request);
    }

    public function showProjectMergeRequestSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectMergeRequestSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectMergeRequestSettingRequest');
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
    public function showRepositoryMergeRequestsStatistic($request)
    {
        return $this->showRepositoryMergeRequestsStatisticWithHttpInfo($request);
    }

    public function showRepositoryMergeRequestsStatisticWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryMergeRequestsStatisticResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryMergeRequestsStatisticRequest');
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
    public function updateGroupMergeRequestApproverSetting($request)
    {
        return $this->updateGroupMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function updateGroupMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupMergeRequestApproverSettingRequest');
    }

    /**
     * 更新代码组合并请求模板
     *
     * 更新代码组合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupMergeRequestTemplate($request)
    {
        return $this->updateGroupMergeRequestTemplateWithHttpInfo($request);
    }

    public function updateGroupMergeRequestTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupMergeRequestTemplateRequest');
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
    public function updateMergeRequest($request)
    {
        return $this->updateMergeRequestWithHttpInfo($request);
    }

    public function updateMergeRequestWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestRequest');
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
    public function updateMergeRequestApproverSetting($request)
    {
        return $this->updateMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function updateMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestApproverSettingRequest');
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
    public function updateMergeRequestApprovers($request)
    {
        return $this->updateMergeRequestApproversWithHttpInfo($request);
    }

    public function updateMergeRequestApproversWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestApproversResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestApproversRequest');
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
    public function updateMergeRequestReviewers($request)
    {
        return $this->updateMergeRequestReviewersWithHttpInfo($request);
    }

    public function updateMergeRequestReviewersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestReviewersResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestReviewersRequest');
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
    public function updateMergeRequestSetting($request)
    {
        return $this->updateMergeRequestSettingWithHttpInfo($request);
    }

    public function updateMergeRequestSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestSettingRequest');
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
    public function updateMergeRequestTemplate($request)
    {
        return $this->updateMergeRequestTemplateWithHttpInfo($request);
    }

    public function updateMergeRequestTemplateWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestTemplateRequest');
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
    public function updateMergeRequestVote($request)
    {
        return $this->updateMergeRequestVoteWithHttpInfo($request);
    }

    public function updateMergeRequestVoteWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestVoteResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateMergeRequestVoteRequest');
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
    public function updateProjectMergeRequestApproverSetting($request)
    {
        return $this->updateProjectMergeRequestApproverSettingWithHttpInfo($request);
    }

    public function updateProjectMergeRequestApproverSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectMergeRequestApproverSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectMergeRequestApproverSettingRequest');
    }

    /**
     * 更新项目合并请求模板
     *
     * 更新项目合并请求模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectMergeRequestTemplate($request)
    {
        return $this->updateProjectMergeRequestTemplateWithHttpInfo($request);
    }

    public function updateProjectMergeRequestTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/merge-requests/template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectMergeRequestTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectMergeRequestTemplateRequest');
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
    public function batchDeleteRepositoryFilePushPermissions($request)
    {
        return $this->batchDeleteRepositoryFilePushPermissionsWithHttpInfo($request);
    }

    public function batchDeleteRepositoryFilePushPermissionsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteRepositoryFilePushPermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteRepositoryFilePushPermissionsRequest');
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
    public function batchUpdateRepositoryFilePushPermissions($request)
    {
        return $this->batchUpdateRepositoryFilePushPermissionsWithHttpInfo($request);
    }

    public function batchUpdateRepositoryFilePushPermissionsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchUpdateRepositoryFilePushPermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchUpdateRepositoryFilePushPermissionsRequest');
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
    public function createFilePushPermission($request)
    {
        return $this->createFilePushPermissionWithHttpInfo($request);
    }

    public function createFilePushPermissionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateFilePushPermissionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateFilePushPermissionRequest');
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
    public function listRepositoryFilePushPermissions($request)
    {
        return $this->listRepositoryFilePushPermissionsWithHttpInfo($request);
    }

    public function listRepositoryFilePushPermissionsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryFilePushPermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryFilePushPermissionsRequest');
    }

    /**
     * 查询仓库权限矩阵配置
     *
     * 查询仓库权限矩阵配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryResourcePermissions($request)
    {
        return $this->listRepositoryResourcePermissionsWithHttpInfo($request);
    }

    public function listRepositoryResourcePermissionsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repository/{repository_id}/permissions/{resource_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceName'] !== null) {
            $pathParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryResourcePermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryResourcePermissionsRequest');
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
    public function showRepositoryPermissionInheritEnabled($request)
    {
        return $this->showRepositoryPermissionInheritEnabledWithHttpInfo($request);
    }

    public function showRepositoryPermissionInheritEnabledWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryPermissionInheritEnabledResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryPermissionInheritEnabledRequest');
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
    public function updateRepositoryPermissionInheritEnabled($request)
    {
        return $this->updateRepositoryPermissionInheritEnabledWithHttpInfo($request);
    }

    public function updateRepositoryPermissionInheritEnabledWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryPermissionInheritEnabledResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryPermissionInheritEnabledRequest');
    }

    /**
     * 更新仓库权限矩阵配置
     *
     * 更新仓库权限矩阵配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryResourcePermissions($request)
    {
        return $this->updateRepositoryResourcePermissionsWithHttpInfo($request);
    }

    public function updateRepositoryResourcePermissionsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repository/{repository_id}/permissions/{resource_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceName'] !== null) {
            $pathParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryResourcePermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryResourcePermissionsRequest');
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
    public function listLatestPipelineJobs($request)
    {
        return $this->listLatestPipelineJobsWithHttpInfo($request);
    }

    public function listLatestPipelineJobsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListLatestPipelineJobsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListLatestPipelineJobsRequest');
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
    public function listPipelineJobs($request)
    {
        return $this->listPipelineJobsWithHttpInfo($request);
    }

    public function listPipelineJobsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPipelineJobsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPipelineJobsRequest');
    }

    /**
     * 工作项关联的提交信息
     *
     * 工作项关联的提交信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listItemCommits($request)
    {
        return $this->listItemCommitsWithHttpInfo($request);
    }

    public function listItemCommitsWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/items/{item_id}/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['itemId'] !== null) {
            $pathParams['item_id'] = $localVarParams['itemId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListItemCommitsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListItemCommitsRequest');
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
    public function listProjectSubgroupsAndRepositories($request)
    {
        return $this->listProjectSubgroupsAndRepositoriesWithHttpInfo($request);
    }

    public function listProjectSubgroupsAndRepositoriesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectSubgroupsAndRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectSubgroupsAndRepositoriesRequest');
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
    public function showProjectGeneralPolicy($request)
    {
        return $this->showProjectGeneralPolicyWithHttpInfo($request);
    }

    public function showProjectGeneralPolicyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectGeneralPolicyRequest');
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
    public function showProjectMemberSetting($request)
    {
        return $this->showProjectMemberSettingWithHttpInfo($request);
    }

    public function showProjectMemberSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectMemberSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectMemberSettingRequest');
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
    public function showProjectSettingsInheritCfg($request)
    {
        return $this->showProjectSettingsInheritCfgWithHttpInfo($request);
    }

    public function showProjectSettingsInheritCfgWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectSettingsInheritCfgResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectSettingsInheritCfgRequest');
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
    public function showProjectWatermark($request)
    {
        return $this->showProjectWatermarkWithHttpInfo($request);
    }

    public function showProjectWatermarkWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectWatermarkResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectWatermarkRequest');
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
    public function showProjectsGeneralPolicy($request)
    {
        return $this->showProjectsGeneralPolicyWithHttpInfo($request);
    }

    public function showProjectsGeneralPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/general-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectsGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectsGeneralPolicyRequest');
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
    public function showResourcePermissions($request)
    {
        return $this->showResourcePermissionsWithHttpInfo($request);
    }

    public function showResourcePermissionsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowResourcePermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowResourcePermissionsRequest');
    }

    /**
     * 更新项目的基本设置信息
     *
     * 更新项目的基本设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProjectGeneralPolicy($request)
    {
        return $this->updateProjectGeneralPolicyWithHttpInfo($request);
    }

    public function updateProjectGeneralPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/general-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectGeneralPolicyRequest');
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
    public function updateProjectSettingsInheritCfg($request)
    {
        return $this->updateProjectSettingsInheritCfgWithHttpInfo($request);
    }

    public function updateProjectSettingsInheritCfgWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectSettingsInheritCfgResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectSettingsInheritCfgRequest');
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
    public function updateProjectWatermark($request)
    {
        return $this->updateProjectWatermarkWithHttpInfo($request);
    }

    public function updateProjectWatermarkWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectWatermarkResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectWatermarkRequest');
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
    public function batchCreateProtectedBranch($request)
    {
        return $this->batchCreateProtectedBranchWithHttpInfo($request);
    }

    public function batchCreateProtectedBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchCreateProtectedBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchCreateProtectedBranchRequest');
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
    public function batchCreateProtectedTags($request)
    {
        return $this->batchCreateProtectedTagsWithHttpInfo($request);
    }

    public function batchCreateProtectedTagsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchCreateProtectedTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchCreateProtectedTagsRequest');
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
    public function batchDeleteProtectedBranches($request)
    {
        return $this->batchDeleteProtectedBranchesWithHttpInfo($request);
    }

    public function batchDeleteProtectedBranchesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteProtectedBranchesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteProtectedBranchesRequest');
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
    public function batchDeleteProtectedTags($request)
    {
        return $this->batchDeleteProtectedTagsWithHttpInfo($request);
    }

    public function batchDeleteProtectedTagsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteProtectedTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteProtectedTagsRequest');
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
    public function batchUpdateProtectedBranches($request)
    {
        return $this->batchUpdateProtectedBranchesWithHttpInfo($request);
    }

    public function batchUpdateProtectedBranchesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchUpdateProtectedBranchesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchUpdateProtectedBranchesRequest');
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
    public function batchUpdateProtectedTags($request)
    {
        return $this->batchUpdateProtectedTagsWithHttpInfo($request);
    }

    public function batchUpdateProtectedTagsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchUpdateProtectedTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchUpdateProtectedTagsRequest');
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
    public function createProjectProtectedBranches($request)
    {
        return $this->createProjectProtectedBranchesWithHttpInfo($request);
    }

    public function createProjectProtectedBranchesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectProtectedBranchesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectProtectedBranchesRequest');
    }

    /**
     * 创建项目下的保护tag
     *
     * 创建项目下的保护tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectProtectedTags($request)
    {
        return $this->createProjectProtectedTagsWithHttpInfo($request);
    }

    public function createProjectProtectedTagsWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/protected-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectProtectedTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateProjectProtectedTagsRequest');
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
    public function deleteProtectedBranch($request)
    {
        return $this->deleteProtectedBranchWithHttpInfo($request);
    }

    public function deleteProtectedBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProtectedBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProtectedBranchRequest');
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
    public function deleteProtectedTag($request)
    {
        return $this->deleteProtectedTagWithHttpInfo($request);
    }

    public function deleteProtectedTagWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProtectedTagResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteProtectedTagRequest');
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
    public function listProjectProtectedBranches($request)
    {
        return $this->listProjectProtectedBranchesWithHttpInfo($request);
    }

    public function listProjectProtectedBranchesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectProtectedBranchesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectProtectedBranchesRequest');
    }

    /**
     * 获取指定项目的保护tag详情
     *
     * 获取指定项目的保护tag详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectProtectedTags($request)
    {
        return $this->listProjectProtectedTagsWithHttpInfo($request);
    }

    public function listProjectProtectedTagsWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/protected-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectProtectedTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectProtectedTagsRequest');
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
    public function listProtectedBranches($request)
    {
        return $this->listProtectedBranchesWithHttpInfo($request);
    }

    public function listProtectedBranchesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProtectedBranchesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProtectedBranchesRequest');
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
    public function listProtectedTags($request)
    {
        return $this->listProtectedTagsWithHttpInfo($request);
    }

    public function listProtectedTagsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProtectedTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProtectedTagsRequest');
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
    public function showProtectedBranch($request)
    {
        return $this->showProtectedBranchWithHttpInfo($request);
    }

    public function showProtectedBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProtectedBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProtectedBranchRequest');
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
    public function showProtectedTag($request)
    {
        return $this->showProtectedTagWithHttpInfo($request);
    }

    public function showProtectedTagWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProtectedTagResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProtectedTagRequest');
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
    public function updateProtectedBranch($request)
    {
        return $this->updateProtectedBranchWithHttpInfo($request);
    }

    public function updateProtectedBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProtectedBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProtectedBranchRequest');
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
    public function updateProtectedTag($request)
    {
        return $this->updateProtectedTagWithHttpInfo($request);
    }

    public function updateProtectedTagWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProtectedTagResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProtectedTagRequest');
    }

    /**
     * 批量删除分支
     *
     * 批量删除分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteBranch($request)
    {
        return $this->batchDeleteBranchWithHttpInfo($request);
    }

    public function batchDeleteBranchWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/branches/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchDeleteBranchRequest');
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
    public function createBranch($request)
    {
        return $this->createBranchWithHttpInfo($request);
    }

    public function createBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateBranchRequest');
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
    public function createTag($request)
    {
        return $this->createTagWithHttpInfo($request);
    }

    public function createTagWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateTagResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateTagRequest');
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
    public function deleteBranch($request)
    {
        return $this->deleteBranchWithHttpInfo($request);
    }

    public function deleteBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteBranchRequest');
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
    public function deleteTag($request)
    {
        return $this->deleteTagWithHttpInfo($request);
    }

    public function deleteTagWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteTagResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteTagRequest');
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
    public function listBranches($request)
    {
        return $this->listBranchesWithHttpInfo($request);
    }

    public function listBranchesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListBranchesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListBranchesRequest');
    }

    /**
     * 查看分支/tag列表
     *
     * 查看分支/tag列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRefsList($request)
    {
        return $this->listRefsListWithHttpInfo($request);
    }

    public function listRefsListWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/repository/refs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRefsListResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRefsListRequest');
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
    public function listTags($request)
    {
        return $this->listTagsWithHttpInfo($request);
    }

    public function listTagsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTagsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTagsRequest');
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
    public function showBranch($request)
    {
        return $this->showBranchWithHttpInfo($request);
    }

    public function showBranchWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowBranchResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowBranchRequest');
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
    public function showTag($request)
    {
        return $this->showTagWithHttpInfo($request);
    }

    public function showTagWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowTagResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowTagRequest');
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
    public function updateBranchName($request)
    {
        return $this->updateBranchNameWithHttpInfo($request);
    }

    public function updateBranchNameWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateBranchNameResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateBranchNameRequest');
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
    public function addSubmodule($request)
    {
        return $this->addSubmoduleWithHttpInfo($request);
    }

    public function addSubmoduleWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddSubmoduleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddSubmoduleRequest');
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
    public function addTrustedIpAddress($request)
    {
        return $this->addTrustedIpAddressWithHttpInfo($request);
    }

    public function addTrustedIpAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddTrustedIpAddressResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddTrustedIpAddressRequest');
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
    public function associateRemoteMirror($request)
    {
        return $this->associateRemoteMirrorWithHttpInfo($request);
    }

    public function associateRemoteMirrorWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AssociateRemoteMirrorResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AssociateRemoteMirrorRequest');
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
    public function associateRepositoryUserGroup($request)
    {
        return $this->associateRepositoryUserGroupWithHttpInfo($request);
    }

    public function associateRepositoryUserGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AssociateRepositoryUserGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AssociateRepositoryUserGroupRequest');
    }

    /**
     * 批量检查仓库名
     *
     * 批量检查仓库名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchValidateRepoNames($request)
    {
        return $this->batchValidateRepoNamesWithHttpInfo($request);
    }

    public function batchValidateRepoNamesWithHttpInfo($request)
    {
        $resourcePath = '/v4/repository-names/validations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchValidateRepoNamesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchValidateRepoNamesRequest');
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
    public function createDir($request)
    {
        return $this->createDirWithHttpInfo($request);
    }

    public function createDirWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateDirResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateDirRequest');
    }

    /**
     * 创建仓库提交规则
     *
     * 创建仓库提交规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepositoryCommitRule($request)
    {
        return $this->createRepositoryCommitRuleWithHttpInfo($request);
    }

    public function createRepositoryCommitRuleWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateRepositoryCommitRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateRepositoryCommitRuleRequest');
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
    public function createRepositoryLabel($request)
    {
        return $this->createRepositoryLabelWithHttpInfo($request);
    }

    public function createRepositoryLabelWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateRepositoryLabelResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateRepositoryLabelRequest');
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
    public function createRepositorySystemLabels($request)
    {
        return $this->createRepositorySystemLabelsWithHttpInfo($request);
    }

    public function createRepositorySystemLabelsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateRepositorySystemLabelsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CreateRepositorySystemLabelsRequest');
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
    public function deleteRepositoryLabel($request)
    {
        return $this->deleteRepositoryLabelWithHttpInfo($request);
    }

    public function deleteRepositoryLabelWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteRepositoryLabelResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteRepositoryLabelRequest');
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
    public function deleteTrustedIpAddress($request)
    {
        return $this->deleteTrustedIpAddressWithHttpInfo($request);
    }

    public function deleteTrustedIpAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteTrustedIpAddressResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteTrustedIpAddressRequest');
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
    public function downloadArchive($request)
    {
        return $this->downloadArchiveWithHttpInfo($request);
    }

    public function downloadArchiveWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DownloadArchiveResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DownloadArchiveRequest');
    }

    /**
     * 触发仓库统计任务
     *
     * 触发仓库统计任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeRepositoryStatistics($request)
    {
        return $this->executeRepositoryStatisticsWithHttpInfo($request);
    }

    public function executeRepositoryStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/repository/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ExecuteRepositoryStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ExecuteRepositoryStatisticsRequest');
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
    public function listCurrentUserRepositories($request)
    {
        return $this->listCurrentUserRepositoriesWithHttpInfo($request);
    }

    public function listCurrentUserRepositoriesWithHttpInfo($request)
    {
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
        if ($localVarParams['archived'] !== null) {
            $queryParams['archived'] = $localVarParams['archived'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
        }
        if ($localVarParams['starred'] !== null) {
            $queryParams['starred'] = $localVarParams['starred'];
        }
        if ($localVarParams['membership'] !== null) {
            $queryParams['membership'] = $localVarParams['membership'];
        }
        if ($localVarParams['userCreated'] !== null) {
            $queryParams['user_created'] = $localVarParams['userCreated'];
        }
        if ($localVarParams['includeAbnormal'] !== null) {
            $queryParams['include_abnormal'] = $localVarParams['includeAbnormal'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCurrentUserRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListCurrentUserRepositoriesRequest');
    }

    /**
     * 获取代码组下仓库列表
     *
     * 获取代码组下仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupRepositories($request)
    {
        return $this->listGroupRepositoriesWithHttpInfo($request);
    }

    public function listGroupRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupRepositoriesRequest');
    }

    /**
     * 获取当前用户最近提交动态列表
     *
     * 查询当前最近前N条提交动态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPersonalRecentPushEvents($request)
    {
        return $this->listPersonalRecentPushEventsWithHttpInfo($request);
    }

    public function listPersonalRecentPushEventsWithHttpInfo($request)
    {
        $resourcePath = '/v4/user/recent-push-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPersonalRecentPushEventsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPersonalRecentPushEventsRequest');
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
    public function listPersonalRepositoryImportRecords($request)
    {
        return $this->listPersonalRepositoryImportRecordsWithHttpInfo($request);
    }

    public function listPersonalRepositoryImportRecordsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPersonalRepositoryImportRecordsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListPersonalRepositoryImportRecordsRequest');
    }

    /**
     * 获取项目下仓库列表
     *
     * 获取项目下仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectRepositories($request)
    {
        return $this->listProjectRepositoriesWithHttpInfo($request);
    }

    public function listProjectRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectRepositoriesRequest');
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
    public function listRepositoryCommitRules($request)
    {
        return $this->listRepositoryCommitRulesWithHttpInfo($request);
    }

    public function listRepositoryCommitRulesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryCommitRulesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryCommitRulesRequest');
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
    public function listRepositoryContributors($request)
    {
        return $this->listRepositoryContributorsWithHttpInfo($request);
    }

    public function listRepositoryContributorsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryContributorsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryContributorsRequest');
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
    public function listRepositoryEvents($request)
    {
        return $this->listRepositoryEventsWithHttpInfo($request);
    }

    public function listRepositoryEventsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryEventsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryEventsRequest');
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
    public function listRepositoryForks($request)
    {
        return $this->listRepositoryForksWithHttpInfo($request);
    }

    public function listRepositoryForksWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryForksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryForksRequest');
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
    public function listRepositoryLabels($request)
    {
        return $this->listRepositoryLabelsWithHttpInfo($request);
    }

    public function listRepositoryLabelsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryLabelsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryLabelsRequest');
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
    public function listRepositoryLanguages($request)
    {
        return $this->listRepositoryLanguagesWithHttpInfo($request);
    }

    public function listRepositoryLanguagesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryLanguagesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryLanguagesRequest');
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
    public function listRepositoryTemplates($request)
    {
        return $this->listRepositoryTemplatesWithHttpInfo($request);
    }

    public function listRepositoryTemplatesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryTemplatesRequest');
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
    public function listSubmodules($request)
    {
        return $this->listSubmodulesWithHttpInfo($request);
    }

    public function listSubmodulesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListSubmodulesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListSubmodulesRequest');
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
    public function listTrustedIpAddresses($request)
    {
        return $this->listTrustedIpAddressesWithHttpInfo($request);
    }

    public function listTrustedIpAddressesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTrustedIpAddressesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTrustedIpAddressesRequest');
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
    public function lockRepository($request)
    {
        return $this->lockRepositoryWithHttpInfo($request);
    }

    public function lockRepositoryWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LockRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LockRepositoryRequest');
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
    public function removeDeployKey($request)
    {
        return $this->removeDeployKeyWithHttpInfo($request);
    }

    public function removeDeployKeyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveDeployKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveDeployKeyRequest');
    }

    /**
     * 删除子仓库部署密钥
     *
     * 将该该仓库的部署密钥从子模组中删除
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeDeployKeyFromSubmodules($request)
    {
        return $this->removeDeployKeyFromSubmodulesWithHttpInfo($request);
    }

    public function removeDeployKeyFromSubmodulesWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/deploy-keys/{key_id}/submodules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveDeployKeyFromSubmodulesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveDeployKeyFromSubmodulesRequest');
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
    public function showBlobs($request)
    {
        return $this->showBlobsWithHttpInfo($request);
    }

    public function showBlobsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowBlobsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowBlobsRequest');
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
    public function showCommitStatistics($request)
    {
        return $this->showCommitStatisticsWithHttpInfo($request);
    }

    public function showCommitStatisticsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowCommitStatisticsRequest');
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
    public function showDiffLines($request)
    {
        return $this->showDiffLinesWithHttpInfo($request);
    }

    public function showDiffLinesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowDiffLinesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowDiffLinesRequest');
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
    public function showLastPushEventInRepository($request)
    {
        return $this->showLastPushEventInRepositoryWithHttpInfo($request);
    }

    public function showLastPushEventInRepositoryWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowLastPushEventInRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowLastPushEventInRepositoryRequest');
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
    public function showNotificationSubscription($request)
    {
        return $this->showNotificationSubscriptionWithHttpInfo($request);
    }

    public function showNotificationSubscriptionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowNotificationSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowNotificationSubscriptionRequest');
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
    public function showNotificationSubscriptionsStatus($request)
    {
        return $this->showNotificationSubscriptionsStatusWithHttpInfo($request);
    }

    public function showNotificationSubscriptionsStatusWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowNotificationSubscriptionsStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowNotificationSubscriptionsStatusRequest');
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
    public function showRefCompare($request)
    {
        return $this->showRefCompareWithHttpInfo($request);
    }

    public function showRefCompareWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRefCompareResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRefCompareRequest');
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
    public function showRemoteMirror($request)
    {
        return $this->showRemoteMirrorWithHttpInfo($request);
    }

    public function showRemoteMirrorWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRemoteMirrorResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRemoteMirrorRequest');
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
    public function showRepository($request)
    {
        return $this->showRepositoryWithHttpInfo($request);
    }

    public function showRepositoryWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryRequest');
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
    public function showRepositoryGeneralCommitRule($request)
    {
        return $this->showRepositoryGeneralCommitRuleWithHttpInfo($request);
    }

    public function showRepositoryGeneralCommitRuleWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryGeneralCommitRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryGeneralCommitRuleRequest');
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
    public function showRepositoryGeneralPolicy($request)
    {
        return $this->showRepositoryGeneralPolicyWithHttpInfo($request);
    }

    public function showRepositoryGeneralPolicyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryGeneralPolicyRequest');
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
    public function showRepositoryInheritSetting($request)
    {
        return $this->showRepositoryInheritSettingWithHttpInfo($request);
    }

    public function showRepositoryInheritSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryInheritSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryInheritSettingRequest');
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
    public function showRepositoryInheritSettingSource($request)
    {
        return $this->showRepositoryInheritSettingSourceWithHttpInfo($request);
    }

    public function showRepositoryInheritSettingSourceWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryInheritSettingSourceResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryInheritSettingSourceRequest');
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
    public function showRepositoryStatisticsStatus($request)
    {
        return $this->showRepositoryStatisticsStatusWithHttpInfo($request);
    }

    public function showRepositoryStatisticsStatusWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryStatisticsStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryStatisticsStatusRequest');
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
    public function showRepositoryStatisticsSummary($request)
    {
        return $this->showRepositoryStatisticsSummaryWithHttpInfo($request);
    }

    public function showRepositoryStatisticsSummaryWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryStatisticsSummaryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryStatisticsSummaryRequest');
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
    public function showRepositoryWatermark($request)
    {
        return $this->showRepositoryWatermarkWithHttpInfo($request);
    }

    public function showRepositoryWatermarkWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryWatermarkResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryWatermarkRequest');
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
    public function showUserRefPermission($request)
    {
        return $this->showUserRefPermissionWithHttpInfo($request);
    }

    public function showUserRefPermissionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowUserRefPermissionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowUserRefPermissionRequest');
    }

    /**
     * 启动仓库加速
     *
     * 启动仓库加速
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startHouseKeeping($request)
    {
        return $this->startHouseKeepingWithHttpInfo($request);
    }

    public function startHouseKeepingWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/housekeeping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StartHouseKeepingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StartHouseKeepingRequest');
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
    public function startRemoteMirrorSynchronization($request)
    {
        return $this->startRemoteMirrorSynchronizationWithHttpInfo($request);
    }

    public function startRemoteMirrorSynchronizationWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StartRemoteMirrorSynchronizationResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StartRemoteMirrorSynchronizationRequest');
    }

    /**
     * 仓库部署密钥同步到子仓
     *
     * 将该仓库的部署密钥同步到所有的子模组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncDeployKeyToSubmodules($request)
    {
        return $this->syncDeployKeyToSubmodulesWithHttpInfo($request);
    }

    public function syncDeployKeyToSubmodulesWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/deploy-keys/{key_id}/submodules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\SyncDeployKeyToSubmodulesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\SyncDeployKeyToSubmodulesRequest');
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
    public function unlockRepository($request)
    {
        return $this->unlockRepositoryWithHttpInfo($request);
    }

    public function unlockRepositoryWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UnlockRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UnlockRepositoryRequest');
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
    public function updateNotificationSubscription($request)
    {
        return $this->updateNotificationSubscriptionWithHttpInfo($request);
    }

    public function updateNotificationSubscriptionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateNotificationSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateNotificationSubscriptionRequest');
    }

    /**
     * 修改仓库提交规则
     *
     * 修改仓库提交规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryCommitRule($request)
    {
        return $this->updateRepositoryCommitRuleWithHttpInfo($request);
    }

    public function updateRepositoryCommitRuleWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/commit-rules/{commit_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['commitRuleId'] !== null) {
            $pathParams['commit_rule_id'] = $localVarParams['commitRuleId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryCommitRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryCommitRuleRequest');
    }

    /**
     * 修改仓库通用提交规则
     *
     * 修改仓库通用提交规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryGeneralCommitRule($request)
    {
        return $this->updateRepositoryGeneralCommitRuleWithHttpInfo($request);
    }

    public function updateRepositoryGeneralCommitRuleWithHttpInfo($request)
    {
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
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryGeneralCommitRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryGeneralCommitRuleRequest');
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
    public function updateRepositoryGeneralPolicy($request)
    {
        return $this->updateRepositoryGeneralPolicyWithHttpInfo($request);
    }

    public function updateRepositoryGeneralPolicyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryGeneralPolicyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryGeneralPolicyRequest');
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
    public function updateRepositoryInheritSetting($request)
    {
        return $this->updateRepositoryInheritSettingWithHttpInfo($request);
    }

    public function updateRepositoryInheritSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryInheritSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryInheritSettingRequest');
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
    public function updateRepositoryLabel($request)
    {
        return $this->updateRepositoryLabelWithHttpInfo($request);
    }

    public function updateRepositoryLabelWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryLabelResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryLabelRequest');
    }

    /**
     * 更新仓库镜像信息
     *
     * 更新仓库镜像信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepositoryRemoteMirror($request)
    {
        return $this->updateRepositoryRemoteMirrorWithHttpInfo($request);
    }

    public function updateRepositoryRemoteMirrorWithHttpInfo($request)
    {
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryRemoteMirrorResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryRemoteMirrorRequest');
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
    public function updateRepositoryWatermark($request)
    {
        return $this->updateRepositoryWatermarkWithHttpInfo($request);
    }

    public function updateRepositoryWatermarkWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryWatermarkResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryWatermarkRequest');
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
    public function updateTrustedIpAddress($request)
    {
        return $this->updateTrustedIpAddressWithHttpInfo($request);
    }

    public function updateTrustedIpAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateTrustedIpAddressResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateTrustedIpAddressRequest');
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
    public function addTenantTrustedIpAddress($request)
    {
        return $this->addTenantTrustedIpAddressWithHttpInfo($request);
    }

    public function addTenantTrustedIpAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddTenantTrustedIpAddressResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddTenantTrustedIpAddressRequest');
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
    public function deleteTenantTrustedIpAddress($request)
    {
        return $this->deleteTenantTrustedIpAddressWithHttpInfo($request);
    }

    public function deleteTenantTrustedIpAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteTenantTrustedIpAddressResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteTenantTrustedIpAddressRequest');
    }

    /**
     * 租户仓库列表
     *
     * 租户下所有占用资源的仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportTenantRepositories($request)
    {
        return $this->exportTenantRepositoriesWithHttpInfo($request);
    }

    public function exportTenantRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v4/tenant/repositories/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ExportTenantRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ExportTenantRepositoriesRequest');
    }

    /**
     * 租户仓库列表
     *
     * 租户下所有占用资源的仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTenantRepositories($request)
    {
        return $this->listTenantRepositoriesWithHttpInfo($request);
    }

    public function listTenantRepositoriesWithHttpInfo($request)
    {
        $resourcePath = '/v4/tenant/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repositoryName'] !== null) {
            $queryParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['memberNumber'] !== null) {
            $queryParams['member_number'] = $localVarParams['memberNumber'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['createdAfter'] !== null) {
            $queryParams['created_after'] = $localVarParams['createdAfter'];
        }
        if ($localVarParams['createdBefore'] !== null) {
            $queryParams['created_before'] = $localVarParams['createdBefore'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTenantRepositoriesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTenantRepositoriesRequest');
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
    public function listTenantTrustedIpAddresses($request)
    {
        return $this->listTenantTrustedIpAddressesWithHttpInfo($request);
    }

    public function listTenantTrustedIpAddressesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTenantTrustedIpAddressesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListTenantTrustedIpAddressesRequest');
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
    public function updateTenantTrustedIpAddress($request)
    {
        return $this->updateTenantTrustedIpAddressWithHttpInfo($request);
    }

    public function updateTenantTrustedIpAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateTenantTrustedIpAddressResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateTenantTrustedIpAddressRequest');
    }

    /**
     * 校验部署密钥在上层代码组或项目是否配置
     *
     * 校验部署密钥在上层代码组或项目是否配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkDeployKey($request)
    {
        return $this->checkDeployKeyWithHttpInfo($request);
    }

    public function checkDeployKeyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CheckDeployKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CheckDeployKeyRequest');
    }

    /**
     * 校验代码组部署密钥在上层代码组或项目是否配置
     *
     * 校验代码组部署密钥在上层代码组或项目是否配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkGroupDeployKey($request)
    {
        return $this->checkGroupDeployKeyWithHttpInfo($request);
    }

    public function checkGroupDeployKeyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CheckGroupDeployKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CheckGroupDeployKeyRequest');
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
    public function listBranchRelatedWorkItems($request)
    {
        return $this->listBranchRelatedWorkItemsWithHttpInfo($request);
    }

    public function listBranchRelatedWorkItemsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListBranchRelatedWorkItemsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListBranchRelatedWorkItemsRequest');
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
    public function listGroupDeployKeys($request)
    {
        return $this->listGroupDeployKeysWithHttpInfo($request);
    }

    public function listGroupDeployKeysWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupDeployKeysResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupDeployKeysRequest');
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
    public function listProjectDeployKeys($request)
    {
        return $this->listProjectDeployKeysWithHttpInfo($request);
    }

    public function listProjectDeployKeysWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectDeployKeysResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectDeployKeysRequest');
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
    public function listRepositoryDeployKeys($request)
    {
        return $this->listRepositoryDeployKeysWithHttpInfo($request);
    }

    public function listRepositoryDeployKeysWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryDeployKeysResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryDeployKeysRequest');
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
    public function listRepositoryWorkItems($request)
    {
        return $this->listRepositoryWorkItemsWithHttpInfo($request);
    }

    public function listRepositoryWorkItemsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryWorkItemsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryWorkItemsRequest');
    }

    /**
     * 获取代码组下E2E设置信息
     *
     * 获取代码组下E2E设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupE2eSetting($request)
    {
        return $this->showGroupE2eSettingWithHttpInfo($request);
    }

    public function showGroupE2eSettingWithHttpInfo($request)
    {
        $resourcePath = '/v4/groups/{group_id}/e2e-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupE2eSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupE2eSettingRequest');
    }

    /**
     * 获取项目下E2E设置信息
     *
     * 获取项目下E2E设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectE2eSetting($request)
    {
        return $this->showProjectE2eSettingWithHttpInfo($request);
    }

    public function showProjectE2eSettingWithHttpInfo($request)
    {
        $resourcePath = '/v4/projects/{project_id}/e2e-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectE2eSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectE2eSettingRequest');
    }

    /**
     * 获取仓库下E2E设置信息
     *
     * 获取仓库下E2E设置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepositoryE2eSetting($request)
    {
        return $this->showRepositoryE2eSettingWithHttpInfo($request);
    }

    public function showRepositoryE2eSettingWithHttpInfo($request)
    {
        $resourcePath = '/v4/repositories/{repository_id}/e2e-setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['takeEffect'] !== null) {
            $queryParams['take_effect'] = $localVarParams['takeEffect'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryE2eSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryE2eSettingRequest');
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
    public function addSshKey($request)
    {
        return $this->addSshKeyWithHttpInfo($request);
    }

    public function addSshKeyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddSshKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddSshKeyRequest');
    }

    /**
     * 获取当前用户指定的代码组列表中的权限
     *
     * 获取当前用户指定的代码组列表中的权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchValidateUserGroupPermissions($request)
    {
        return $this->batchValidateUserGroupPermissionsWithHttpInfo($request);
    }

    public function batchValidateUserGroupPermissionsWithHttpInfo($request)
    {
        $resourcePath = '/v4/user/groups/group-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchValidateUserGroupPermissionsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\BatchValidateUserGroupPermissionsRequest');
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
    public function deleteSshKey($request)
    {
        return $this->deleteSshKeyWithHttpInfo($request);
    }

    public function deleteSshKeyWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteSshKeyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DeleteSshKeyRequest');
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
    public function listImpersonationTokens($request)
    {
        return $this->listImpersonationTokensWithHttpInfo($request);
    }

    public function listImpersonationTokensWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListImpersonationTokensResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListImpersonationTokensRequest');
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
    public function listUserGpgKeys($request)
    {
        return $this->listUserGpgKeysWithHttpInfo($request);
    }

    public function listUserGpgKeysWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListUserGpgKeysResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListUserGpgKeysRequest');
    }

    /**
     * 获取当前用户的密钥列表
     *
     * 获取当前用户的密钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserKeys($request)
    {
        return $this->listUserKeysWithHttpInfo($request);
    }

    public function listUserKeysWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListUserKeysResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListUserKeysRequest');
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
    public function sendUserEmailVerifyCode($request)
    {
        return $this->sendUserEmailVerifyCodeWithHttpInfo($request);
    }

    public function sendUserEmailVerifyCodeWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\SendUserEmailVerifyCodeResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\SendUserEmailVerifyCodeRequest');
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
    public function showHttpsPasswordSetting($request)
    {
        return $this->showHttpsPasswordSettingWithHttpInfo($request);
    }

    public function showHttpsPasswordSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowHttpsPasswordSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowHttpsPasswordSettingRequest');
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
    public function showUserEmails($request)
    {
        return $this->showUserEmailsWithHttpInfo($request);
    }

    public function showUserEmailsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowUserEmailsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowUserEmailsRequest');
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
    public function updateHttpsPasswordSetting($request)
    {
        return $this->updateHttpsPasswordSettingWithHttpInfo($request);
    }

    public function updateHttpsPasswordSettingWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateHttpsPasswordSettingResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateHttpsPasswordSettingRequest');
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
    public function updateUserEmails($request)
    {
        return $this->updateUserEmailsWithHttpInfo($request);
    }

    public function updateUserEmailsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateUserEmailsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateUserEmailsRequest');
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
    public function addGroupWebhook($request)
    {
        return $this->addGroupWebhookWithHttpInfo($request);
    }

    public function addGroupWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddGroupWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddGroupWebhookRequest');
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
    public function addProjectWebhook($request)
    {
        return $this->addProjectWebhookWithHttpInfo($request);
    }

    public function addProjectWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddProjectWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddProjectWebhookRequest');
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
    public function addRepositoryWebhook($request)
    {
        return $this->addRepositoryWebhookWithHttpInfo($request);
    }

    public function addRepositoryWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddRepositoryWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\AddRepositoryWebhookRequest');
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
    public function listGroupWebhookLogs($request)
    {
        return $this->listGroupWebhookLogsWithHttpInfo($request);
    }

    public function listGroupWebhookLogsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupWebhookLogsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupWebhookLogsRequest');
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
    public function listGroupWebhooks($request)
    {
        return $this->listGroupWebhooksWithHttpInfo($request);
    }

    public function listGroupWebhooksWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupWebhooksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListGroupWebhooksRequest');
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
    public function listProjectWebhookLogs($request)
    {
        return $this->listProjectWebhookLogsWithHttpInfo($request);
    }

    public function listProjectWebhookLogsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectWebhookLogsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectWebhookLogsRequest');
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
    public function listProjectWebhooks($request)
    {
        return $this->listProjectWebhooksWithHttpInfo($request);
    }

    public function listProjectWebhooksWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectWebhooksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListProjectWebhooksRequest');
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
    public function listRepositoryWebhookLogs($request)
    {
        return $this->listRepositoryWebhookLogsWithHttpInfo($request);
    }

    public function listRepositoryWebhookLogsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryWebhookLogsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryWebhookLogsRequest');
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
    public function listRepositoryWebhooks($request)
    {
        return $this->listRepositoryWebhooksWithHttpInfo($request);
    }

    public function listRepositoryWebhooksWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryWebhooksResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ListRepositoryWebhooksRequest');
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
    public function removeGroupWebhook($request)
    {
        return $this->removeGroupWebhookWithHttpInfo($request);
    }

    public function removeGroupWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveGroupWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveGroupWebhookRequest');
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
    public function removeProjectWebhook($request)
    {
        return $this->removeProjectWebhookWithHttpInfo($request);
    }

    public function removeProjectWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveProjectWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveProjectWebhookRequest');
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
    public function removeRepositoryWebhook($request)
    {
        return $this->removeRepositoryWebhookWithHttpInfo($request);
    }

    public function removeRepositoryWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveRepositoryWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RemoveRepositoryWebhookRequest');
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
    public function showGroupWebhook($request)
    {
        return $this->showGroupWebhookWithHttpInfo($request);
    }

    public function showGroupWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupWebhookRequest');
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
    public function showGroupWebhookLog($request)
    {
        return $this->showGroupWebhookLogWithHttpInfo($request);
    }

    public function showGroupWebhookLogWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupWebhookLogResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowGroupWebhookLogRequest');
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
    public function showProjectWebhook($request)
    {
        return $this->showProjectWebhookWithHttpInfo($request);
    }

    public function showProjectWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectWebhookRequest');
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
    public function showProjectWebhookLog($request)
    {
        return $this->showProjectWebhookLogWithHttpInfo($request);
    }

    public function showProjectWebhookLogWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectWebhookLogResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowProjectWebhookLogRequest');
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
    public function showRepositoryWebhook($request)
    {
        return $this->showRepositoryWebhookWithHttpInfo($request);
    }

    public function showRepositoryWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryWebhookRequest');
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
    public function showRepositoryWebhookLog($request)
    {
        return $this->showRepositoryWebhookLogWithHttpInfo($request);
    }

    public function showRepositoryWebhookLogWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryWebhookLogResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ShowRepositoryWebhookLogRequest');
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
    public function updateGroupWebhook($request)
    {
        return $this->updateGroupWebhookWithHttpInfo($request);
    }

    public function updateGroupWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateGroupWebhookRequest');
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
    public function updateProjectWebhook($request)
    {
        return $this->updateProjectWebhookWithHttpInfo($request);
    }

    public function updateProjectWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateProjectWebhookRequest');
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
    public function updateRepositoryWebhook($request)
    {
        return $this->updateRepositoryWebhookWithHttpInfo($request);
    }

    public function updateRepositoryWebhookWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryWebhookResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UpdateRepositoryWebhookRequest');
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