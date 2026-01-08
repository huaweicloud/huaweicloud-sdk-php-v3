<?php

namespace HuaweiCloud\SDK\Cloudtest\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CloudtestAsyncClient extends Client
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
        $client = new ClientBuilder(new CloudtestAsyncClient());
        return $client;
    }

    /**
     * 设置用例结果
     *
     * 设置用例结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCaseResultFourAsync($request)
    {
        return $this->addCaseResultFourAsyncWithHttpInfo($request);
    }
    
    public function addCaseResultFourAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{version_uri}/testcases/{case_uri}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $pathParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['caseUri'] !== null) {
            $pathParams['case_uri'] = $localVarParams['caseUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddCaseResultFourResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddCaseResultFourRequest',
            $asyncRequest = true);
    }

    /**
     * 新增用例评论
     *
     * 新增用例评论
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTestCaseCommentAsync($request)
    {
        return $this->addTestCaseCommentAsyncWithHttpInfo($request);
    }
    
    public function addTestCaseCommentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/{testcase_id}/comments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseCommentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseCommentRequest',
            $asyncRequest = true);
    }

    /**
     * 初始化用例执行记录
     *
     * 初始化用例执行记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTestCaseResultLogAsync($request)
    {
        return $this->addTestCaseResultLogAsyncWithHttpInfo($request);
    }
    
    public function addTestCaseResultLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{version_uri}/testcases/{case_uri}/results/init';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $pathParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['caseUri'] !== null) {
            $pathParams['case_uri'] = $localVarParams['caseUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseResultLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseResultLogRequest',
            $asyncRequest = true);
    }

    /**
     * 添加需求/缺陷和多个用例关联关系
     *
     * 添加需求/缺陷和多个用例关联关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddRelationsByOneCaseAsync($request)
    {
        return $this->batchAddRelationsByOneCaseAsyncWithHttpInfo($request);
    }
    
    public function batchAddRelationsByOneCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testrelation/v4/workitems/{workitem_id}/relations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workitemId'] !== null) {
            $pathParams['workitem_id'] = $localVarParams['workitemId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchAddRelationsByOneCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchAddRelationsByOneCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 向迭代中添加资源
     *
     * 向迭代中添加资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddResourcesForIteratorAsync($request)
    {
        return $this->batchAddResourcesForIteratorAsyncWithHttpInfo($request);
    }
    
    public function batchAddResourcesForIteratorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/iterators/{iterator_id}/testcases/batch-add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iteratorId'] !== null) {
            $pathParams['iterator_id'] = $localVarParams['iteratorId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchAddResourcesForIteratorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchAddResourcesForIteratorRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除自定义测试服务类型用例
     *
     * 批量删除自定义测试服务类型用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteTestCaseAsync($request)
    {
        return $this->batchDeleteTestCaseAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcases/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除用例
     *
     * 批量删除用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteTestCasesAsync($request)
    {
        return $this->batchDeleteTestCasesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteTestCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/testcases/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isAsync'] !== null) {
            $queryParams['is_async'] = $localVarParams['isAsync'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteTestCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteTestCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 根据测试报告uri列表，删除测试报告
     *
     * 根据测试报告uri列表，删除测试报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteTestReportAsync($request)
    {
        return $this->batchDeleteTestReportAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteTestReportAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testreport/v4/{project_id}/test-reports/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteTestReportResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteTestReportRequest',
            $asyncRequest = true);
    }

    /**
     * 从迭代中批量移除用例
     *
     * 从迭代中批量移除用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRemoveTestCasesFromIteratorAsync($request)
    {
        return $this->batchRemoveTestCasesFromIteratorAsyncWithHttpInfo($request);
    }
    
    public function batchRemoveTestCasesFromIteratorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/iterators/{iterator_id}/testcases/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iteratorId'] !== null) {
            $pathParams['iterator_id'] = $localVarParams['iteratorId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchRemoveTestCasesFromIteratorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchRemoveTestCasesFromIteratorRequest',
            $asyncRequest = true);
    }

    /**
     * 在不同分支或者迭代下批量修改用例
     *
     * 在不同分支或者迭代下批量修改用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateTestCasesInDiffVersionAsync($request)
    {
        return $this->batchUpdateTestCasesInDiffVersionAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateTestCasesInDiffVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/batch/update/testcases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchUpdateTestCasesInDiffVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchUpdateTestCasesInDiffVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新用例属性
     *
     * 批量更新用例属性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateVersionTestCasesAsync($request)
    {
        return $this->batchUpdateVersionTestCasesAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateVersionTestCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/batch-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchUpdateVersionTestCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchUpdateVersionTestCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 检查项目权限
     *
     * 检查项目权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkPermissionAsync($request)
    {
        return $this->checkPermissionAsyncWithHttpInfo($request);
    }
    
    public function checkPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/permission/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 新增迭代
     *
     * 新增迭代
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIteratorAsync($request)
    {
        return $this->createIteratorAsyncWithHttpInfo($request);
    }
    
    public function createIteratorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/iterators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['branchUri'] !== null) {
            $queryParams['branch_uri'] = $localVarParams['branchUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateIteratorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateIteratorRequest',
            $asyncRequest = true);
    }

    /**
     * 项目下创建计划
     *
     * 项目下创建计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPlanAsync($request)
    {
        return $this->createPlanAsyncWithHttpInfo($request);
    }
    
    public function createPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreatePlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreatePlanRequest',
            $asyncRequest = true);
    }

    /**
     * 新增分支
     *
     * 新增分支
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectBranchAsync($request)
    {
        return $this->createProjectBranchAsyncWithHttpInfo($request);
    }
    
    public function createProjectBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateProjectBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateProjectBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 添加一个用例和多个需求/缺陷关联关系
     *
     * 添加一个用例和多个需求/缺陷关联关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRelationsByOneCaseAsync($request)
    {
        return $this->createRelationsByOneCaseAsyncWithHttpInfo($request);
    }
    
    public function createRelationsByOneCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testrelation/v4/testcases/{case_id}/relations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['caseId'] !== null) {
            $pathParams['case_id'] = $localVarParams['caseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateRelationsByOneCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateRelationsByOneCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 保存单个自定义报表
     *
     * 保存单个自定义报表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createReportAsync($request)
    {
        return $this->createReportAsyncWithHttpInfo($request);
    }
    
    public function createReportAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/versions/{version_id}/custom-reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateReportResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateReportRequest',
            $asyncRequest = true);
    }

    /**
     * 生成资源URI
     *
     * 生成资源URI
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceUriAsync($request)
    {
        return $this->createResourceUriAsyncWithHttpInfo($request);
    }
    
    public function createResourceUriAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/resource-uri';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateResourceUriResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateResourceUriRequest',
            $asyncRequest = true);
    }

    /**
     * 新测试类型服务注册
     *
     * 通过接口CreateService注册成为自定义服务。 注册完成后界面将会出现此自定义测试类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createServiceAsync($request)
    {
        return $this->createServiceAsyncWithHttpInfo($request);
    }
    
    public function createServiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateServiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateServiceRequest',
            $asyncRequest = true);
    }

    /**
     * 初始化测试任务执行记录
     *
     * 初始化测试任务执行记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTaskDefaultResultAsync($request)
    {
        return $this->createTaskDefaultResultAsyncWithHttpInfo($request);
    }
    
    public function createTaskDefaultResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/tasks/{task_uri}/results/init';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskUri'] !== null) {
            $pathParams['task_uri'] = $localVarParams['taskUri'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTaskDefaultResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTaskDefaultResultRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义测试服务类型用例
     *
     * 创建自定义测试服务类型用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTestCaseAsync($request)
    {
        return $this->createTestCaseAsyncWithHttpInfo($request);
    }
    
    public function createTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 计划中批量添加测试用例
     *
     * 计划中批量添加测试用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTestCaseInPlanAsync($request)
    {
        return $this->createTestCaseInPlanAsyncWithHttpInfo($request);
    }
    
    public function createTestCaseInPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/plans/{plan_id}/testcases/batch-add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTestCaseInPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTestCaseInPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 新增用户自定义URL关键字
     *
     * 新增用户自定义URL关键字
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createUserDefinedUrlKeyWordAsync($request)
    {
        return $this->createUserDefinedUrlKeyWordAsyncWithHttpInfo($request);
    }
    
    public function createUserDefinedUrlKeyWordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/basic-aw';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateUserDefinedUrlKeyWordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateUserDefinedUrlKeyWordRequest',
            $asyncRequest = true);
    }

    /**
     * 在分支或者测试计划下创建用例
     *
     * 在分支或者测试计划下创建用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVersionTestCaseAsync($request)
    {
        return $this->createVersionTestCaseAsyncWithHttpInfo($request);
    }
    
    public function createVersionTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/versions/{version_id}/testcases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateVersionTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateVersionTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 融合版本删除单个basicAw
     *
     * 融合版本删除单个basicAw
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBasicAwByIdAsync($request)
    {
        return $this->deleteBasicAwByIdAsyncWithHttpInfo($request);
    }
    
    public function deleteBasicAwByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/basic-aw/{aw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['awId'] !== null) {
            $pathParams['aw_id'] = $localVarParams['awId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteBasicAwByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteBasicAwByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除附件
     *
     * 删除附件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCacheFileAsync($request)
    {
        return $this->deleteCacheFileAsyncWithHttpInfo($request);
    }
    
    public function deleteCacheFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/resources/temp-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['uri'] !== null) {
            $queryParams['uri'] = $localVarParams['uri'];
        }
        if ($localVarParams['parentUri'] !== null) {
            $queryParams['parent_uri'] = $localVarParams['parentUri'];
        }
        if ($localVarParams['bakUp'] !== null) {
            $queryParams['bak_up'] = $localVarParams['bakUp'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteCacheFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteCacheFileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除因子
     *
     * 删除因子
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFacotrByIdAsync($request)
    {
        return $this->deleteFacotrByIdAsyncWithHttpInfo($request);
    }
    
    public function deleteFacotrByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/factor/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteFacotrByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteFacotrByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除一个用例和多个需求/缺陷关联关系
     *
     * 删除一个用例和多个需求/缺陷关联关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRelationsByOneCaseAsync($request)
    {
        return $this->deleteRelationsByOneCaseAsyncWithHttpInfo($request);
    }
    
    public function deleteRelationsByOneCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testrelation/v4/testcases/{case_id}/relations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['caseId'] !== null) {
            $pathParams['case_id'] = $localVarParams['caseId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteRelationsByOneCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteRelationsByOneCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 删除已注册服务
     *
     * 删除已注册服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServiceAsync($request)
    {
        return $this->deleteServiceAsyncWithHttpInfo($request);
    }
    
    public function deleteServiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/services/{service_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteServiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteServiceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除用例评论
     *
     * 删除用例评论
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTestCaseCommentAsync($request)
    {
        return $this->deleteTestCaseCommentAsyncWithHttpInfo($request);
    }
    
    public function deleteTestCaseCommentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/{testcase_id}/comments/{comment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['versionUri'] !== null) {
            $queryParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
        }
        if ($localVarParams['commentId'] !== null) {
            $pathParams['comment_id'] = $localVarParams['commentId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteTestCaseCommentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteTestCaseCommentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除测试报告自定义模块
     *
     * 删除测试报告自定义模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTestReportCustomDetailByUriAsync($request)
    {
        return $this->deleteTestReportCustomDetailByUriAsyncWithHttpInfo($request);
    }
    
    public function deleteTestReportCustomDetailByUriAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{version_uri}/test-reports/{report_uri}/custom-infos/{custom_info_uri}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $pathParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['reportUri'] !== null) {
            $pathParams['report_uri'] = $localVarParams['reportUri'];
        }
        if ($localVarParams['customInfoUri'] !== null) {
            $pathParams['custom_info_uri'] = $localVarParams['customInfoUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteTestReportCustomDetailByUriResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteTestReportCustomDetailByUriRequest',
            $asyncRequest = true);
    }

    /**
     * 下载图片
     *
     * 下载图片
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadStepImageNewAsync($request)
    {
        return $this->downloadStepImageNewAsyncWithHttpInfo($request);
    }
    
    public function downloadStepImageNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/image/{parent}/{sub}/{file_name}/{file_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['parent'] !== null) {
            $pathParams['parent'] = $localVarParams['parent'];
        }
        if ($localVarParams['sub'] !== null) {
            $pathParams['sub'] = $localVarParams['sub'];
        }
        if ($localVarParams['fileName'] !== null) {
            $pathParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['fileType'] !== null) {
            $pathParams['file_type'] = $localVarParams['fileType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/octet-stream'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DownloadStepImageNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DownloadStepImageNewRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警统计数据
     *
     * 查询告警统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmStatisticsUsingAsync($request)
    {
        return $this->listAlarmStatisticsUsingAsyncWithHttpInfo($request);
    }
    
    public function listAlarmStatisticsUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/dashboards/alarm/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAlarmStatisticsUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAlarmStatisticsUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警组列表
     *
     * 查询告警组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlertGroupsByConditionAsync($request)
    {
        return $this->listAlertGroupsByConditionAsyncWithHttpInfo($request);
    }
    
    public function listAlertGroupsByConditionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/alert/group/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAlertGroupsByConditionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAlertGroupsByConditionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警模板
     *
     * 查询告警模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlertTemplatesAsync($request)
    {
        return $this->listAlertTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listAlertTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/alert-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAlertTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAlertTemplatesRequest',
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
    public function listAllBranchesAsync($request)
    {
        return $this->listAllBranchesAsyncWithHttpInfo($request);
    }
    
    public function listAllBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务告警信息
     *
     * 查询任务告警信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllConfigItemByTypeAsync($request)
    {
        return $this->listAllConfigItemByTypeAsyncWithHttpInfo($request);
    }
    
    public function listAllConfigItemByTypeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/service/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllConfigItemByTypeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllConfigItemByTypeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目下所有迭代计划
     *
     * 查询项目下所有迭代计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllIteratorsAsync($request)
    {
        return $this->listAllIteratorsAsyncWithHttpInfo($request);
    }
    
    public function listAllIteratorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/projects/{project_id}/iterator-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllIteratorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllIteratorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例列表
     *
     * 查询用例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllTestCasesAsync($request)
    {
        return $this->listAllTestCasesAsyncWithHttpInfo($request);
    }
    
    public function listAllTestCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllTestCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAllTestCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询附件列表
     *
     * 查询附件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttachmentsAsync($request)
    {
        return $this->listAttachmentsAsyncWithHttpInfo($request);
    }
    
    public function listAttachmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/resources/{resource_uri}/attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['resourceUri'] !== null) {
            $pathParams['resource_uri'] = $localVarParams['resourceUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAttachmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAttachmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前局点功能是否开启
     *
     * 获取当前局点功能是否开启
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailableConfigAsync($request)
    {
        return $this->listAvailableConfigAsyncWithHttpInfo($request);
    }
    
    public function listAvailableConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/available/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAvailableConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListAvailableConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id获取单个basicAW信息
     *
     * 根据id获取单个basicAW信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBasicAwAsync($request)
    {
        return $this->listBasicAwAsyncWithHttpInfo($request);
    }
    
    public function listBasicAwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/basic-aw/{aw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['awId'] !== null) {
            $pathParams['aw_id'] = $localVarParams['awId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListBasicAwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListBasicAwRequest',
            $asyncRequest = true);
    }

    /**
     * 分页获取工程BasicAW详细信息列表（含目录）
     *
     * 分页获取工程BasicAW列表（含目录）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBasicAwInfoListSupportsSearchAsync($request)
    {
        return $this->listBasicAwInfoListSupportsSearchAsyncWithHttpInfo($request);
    }
    
    public function listBasicAwInfoListSupportsSearchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/aw-cata/aw-info-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListBasicAwInfoListSupportsSearchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListBasicAwInfoListSupportsSearchRequest',
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
        $resourcePath = '/v1/{project_id}/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量获取用例状态
     *
     * 批量获取用例状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCasesStatusAsync($request)
    {
        return $this->listCasesStatusAsyncWithHttpInfo($request);
    }
    
    public function listCasesStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/querycasestatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['testServiceId'] !== null) {
            $queryParams['test_service_id'] = $localVarParams['testServiceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListCasesStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListCasesStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询当前租户可见的第三方服务列表
     *
     * 查询当前租户可见的第三方服务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainVisibleServicesAsync($request)
    {
        return $this->listDomainVisibleServicesAsyncWithHttpInfo($request);
    }
    
    public function listDomainVisibleServicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/visible-services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListDomainVisibleServicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListDomainVisibleServicesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询需求树
     *
     * 查询需求树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIssueTreeAsync($request)
    {
        return $this->listIssueTreeAsyncWithHttpInfo($request);
    }
    
    public function listIssueTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/versions/{version_id}/issue-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIssueTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIssueTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询迭代关联的需求列表或树
     *
     * 查询迭代关联的需求列表或树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIteratorIssueTreeAsync($request)
    {
        return $this->listIteratorIssueTreeAsyncWithHttpInfo($request);
    }
    
    public function listIteratorIssueTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/iterators/{iterator_id}/issues/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['iteratorId'] !== null) {
            $pathParams['iterator_id'] = $localVarParams['iteratorId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIteratorIssueTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIteratorIssueTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询迭代计划列表，包含统计信息
     *
     * 查询迭代计划列表，包含统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIteratorsAsync($request)
    {
        return $this->listIteratorsAsyncWithHttpInfo($request);
    }
    
    public function listIteratorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/iterators/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIteratorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIteratorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询迭代计划列表，包含统计信息，对版本强校验
     *
     * 查询迭代计划列表，包含统计信息，对版本强校验
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIteratorsInfoAsync($request)
    {
        return $this->listIteratorsInfoAsyncWithHttpInfo($request);
    }
    
    public function listIteratorsInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/iterators/info/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIteratorsInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListIteratorsInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仪表盘折线图数据
     *
     * 查询仪表盘折线图数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLinesUsingAsync($request)
    {
        return $this->listLinesUsingAsyncWithHttpInfo($request);
    }
    
    public function listLinesUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/projects/{service_id}/dashboards/lines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListLinesUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListLinesUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 仪表盘根据测试服务ID获取MsgInfo详细信息
     *
     * 成功返回MsgInfo的详细信息列表，返回值为Model的List
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMsgInfosUsingAsync($request)
    {
        return $this->listMsgInfosUsingAsyncWithHttpInfo($request);
    }
    
    public function listMsgInfosUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/projects/{service_id}/dashboards/alarm/msgs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListMsgInfosUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListMsgInfosUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取责任人是自己的测试用例
     *
     * 获取责任人是自己的测试用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOwnTestCasesAsync($request)
    {
        return $this->listOwnTestCasesAsyncWithHttpInfo($request);
    }
    
    public function listOwnTestCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/current-user/testcases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListOwnTestCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListOwnTestCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目字段配置
     *
     * 查询项目字段配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectFieldConfigsAsync($request)
    {
        return $this->listProjectFieldConfigsAsyncWithHttpInfo($request);
    }
    
    public function listProjectFieldConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/projects/{project_id}/field-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListProjectFieldConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListProjectFieldConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目测试用例自定义字段列表
     *
     * 获取项目测试用例自定义字段列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectTestCaseFieldsAsync($request)
    {
        return $this->listProjectTestCaseFieldsAsyncWithHttpInfo($request);
    }
    
    public function listProjectTestCaseFieldsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcase/field/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListProjectTestCaseFieldsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListProjectTestCaseFieldsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取工程关联的公共aw信息和公共aw所属公共aw库信息
     *
     * 获取工程关联的公共aw信息和公共aw所属公共aw库信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublicLibAndAwsAsync($request)
    {
        return $this->listPublicLibAndAwsAsyncWithHttpInfo($request);
    }
    
    public function listPublicLibAndAwsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/project/{project_id}/public_aw_lib_and_aws';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListPublicLibAndAwsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListPublicLibAndAwsRequest',
            $asyncRequest = true);
    }

    /**
     * 页面报表展示
     *
     * 页面报表展示
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listReportsAsync($request)
    {
        return $this->listReportsAsyncWithHttpInfo($request);
    }
    
    public function listReportsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testreport/v4/{project_id}/versions/{version_id}/custom-reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListReportsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListReportsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取资源池列表
     *
     * 获取资源池列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourcePoolsAsync($request)
    {
        return $this->listResourcePoolsAsyncWithHttpInfo($request);
    }
    
    public function listResourcePoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testexecutor/v4/{project_id}/resource-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListResourcePoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListResourcePoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仪表盘散点图数据
     *
     * 查询仪表盘散点图数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScattersUsingAsync($request)
    {
        return $this->listScattersUsingAsyncWithHttpInfo($request);
    }
    
    public function listScattersUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/projects/{service_id}/dashboards/scatters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListScattersUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListScattersUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询subTestCase阻塞任务数据
     *
     * 成功返回子任务用例数据积压信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubTaskCaseOverstockUsingAsync($request)
    {
        return $this->listSubTaskCaseOverstockUsingAsyncWithHttpInfo($request);
    }
    
    public function listSubTaskCaseOverstockUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/dashboard/statistic/block';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['executorType'] !== null) {
            $queryParams['executor_type'] = $localVarParams['executorType'];
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['locationId'] !== null) {
            $queryParams['location_id'] = $localVarParams['locationId'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListSubTaskCaseOverstockUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListSubTaskCaseOverstockUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取测试套关联用例详情
     *
     * 获取测试套关联用例详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskAssignCasesAsync($request)
    {
        return $this->listTaskAssignCasesAsyncWithHttpInfo($request);
    }
    
    public function listTaskAssignCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/tasks/{task_id}/testcases/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskAssignCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskAssignCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单次测试套执行的详细结果
     *
     * 查询单次测试套执行的详细结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskResultsDetailAsync($request)
    {
        return $this->listTaskResultsDetailAsyncWithHttpInfo($request);
    }
    
    public function listTaskResultsDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_uuid}/tasks/{task_uri}/results/{result_uri}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['result'] !== null) {
            $queryParams['result'] = $localVarParams['result'];
        }
        if ($localVarParams['projectUuid'] !== null) {
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($localVarParams['taskUri'] !== null) {
            $pathParams['task_uri'] = $localVarParams['taskUri'];
        }
        if ($localVarParams['resultUri'] !== null) {
            $pathParams['result_uri'] = $localVarParams['resultUri'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskResultsDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskResultsDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例关联的测试任务列表
     *
     * 查询用例关联的测试任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskTestCasesAsync($request)
    {
        return $this->listTaskTestCasesAsyncWithHttpInfo($request);
    }
    
    public function listTaskTestCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/tasks/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskTestCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskTestCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询测试任务列表
     *
     * 查询测试任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTasksAsync($request)
    {
        return $this->listTasksAsyncWithHttpInfo($request);
    }
    
    public function listTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/versions/{version_id}/tasks/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例评论
     *
     * 查询用例评论
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestCaseCommentsAsync($request)
    {
        return $this->listTestCaseCommentsAsyncWithHttpInfo($request);
    }
    
    public function listTestCaseCommentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/{testcase_id}/comments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $queryParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCaseCommentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCaseCommentsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例修改历史记录
     *
     * 查询用例修改历史记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestCaseHistoriesAsync($request)
    {
        return $this->listTestCaseHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listTestCaseHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/testcases/{testcase_id}/histories/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCaseHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCaseHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取用例脚本详细信息
     *
     * 获取用例脚本详细信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestCaseScriptDetailAsync($request)
    {
        return $this->listTestCaseScriptDetailAsyncWithHttpInfo($request);
    }
    
    public function listTestCaseScriptDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/testcase/{tmss_case_uri}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['tmssCaseUri'] !== null) {
            $pathParams['tmss_case_uri'] = $localVarParams['tmssCaseUri'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCaseScriptDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCaseScriptDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例列表
     *
     * 查询用例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestCasesAsync($request)
    {
        return $this->listTestCasesAsyncWithHttpInfo($request);
    }
    
    public function listTestCasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/testcases/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCasesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询需求下的用例列表
     *
     * 查询需求下的用例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestCasesByIssueAsync($request)
    {
        return $this->listTestCasesByIssueAsyncWithHttpInfo($request);
    }
    
    public function listTestCasesByIssueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testrelation/v4/{project_id}/issues/{issue_id}/testcases/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['issueId'] !== null) {
            $pathParams['issue_id'] = $localVarParams['issueId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCasesByIssueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestCasesByIssueRequest',
            $asyncRequest = true);
    }

    /**
     * 根据查询条件获取测试报告列表
     *
     * 根据查询条件获取测试报告列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestReportsByConditionAsync($request)
    {
        return $this->listTestReportsByConditionAsyncWithHttpInfo($request);
    }
    
    public function listTestReportsByConditionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testreport/v4/{project_id}/test-reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['own'] !== null) {
            $queryParams['own'] = $localVarParams['own'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestReportsByConditionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestReportsByConditionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取测试类型列表
     *
     * 获取测试类型列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestTypesAsync($request)
    {
        return $this->listTestTypesAsyncWithHttpInfo($request);
    }
    
    public function listTestTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/test-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目下关联了需求的用例列表
     *
     * 查询项目下关联了需求的用例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestcasesByProjectIssuesRelationAsync($request)
    {
        return $this->listTestcasesByProjectIssuesRelationAsyncWithHttpInfo($request);
    }
    
    public function listTestcasesByProjectIssuesRelationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/issues/testcases/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestcasesByProjectIssuesRelationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestcasesByProjectIssuesRelationRequest',
            $asyncRequest = true);
    }

    /**
     * 获取租户订单已用资源信息
     *
     * 获取租户订单已用资源信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsageInfosAsync($request)
    {
        return $this->listUsageInfosAsyncWithHttpInfo($request);
    }
    
    public function listUsageInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/domain/usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUsageInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUsageInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户DNS映射
     *
     * 查询用户DNS映射
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserDnsMappingAsync($request)
    {
        return $this->listUserDnsMappingAsyncWithHttpInfo($request);
    }
    
    public function listUserDnsMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/dns-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUserDnsMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUserDnsMappingRequest',
            $asyncRequest = true);
    }

    /**
     * ListUserPackageUsage
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserPackageUsageAsync($request)
    {
        return $this->listUserPackageUsageAsyncWithHttpInfo($request);
    }
    
    public function listUserPackageUsageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/package-usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUserPackageUsageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUserPackageUsageRequest',
            $asyncRequest = true);
    }

    /**
     * ListUserPopupInfo
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserPopupInfoAsync($request)
    {
        return $this->listUserPopupInfoAsyncWithHttpInfo($request);
    }
    
    public function listUserPopupInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/package-charge/popup';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUserPopupInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUserPopupInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询仪表盘用户的看板
     *
     * 查询仪表盘用户的看板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsingGetAsync($request)
    {
        return $this->listUsingGetAsyncWithHttpInfo($request);
    }
    
    public function listUsingGetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/projects/{service_id}/dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageNumber'] !== null) {
            $queryParams['page_number'] = $localVarParams['pageNumber'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUsingGetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListUsingGetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全局变量参数列表V4
     *
     * 查询全局变量参数列表V4
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVariablesAsync($request)
    {
        return $this->listVariablesAsyncWithHttpInfo($request);
    }
    
    public function listVariablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListVariablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListVariablesRequest',
            $asyncRequest = true);
    }

    /**
     * 从迭代中移除需求
     *
     * 从迭代中移除需求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeIssuesFromIteratorAsync($request)
    {
        return $this->removeIssuesFromIteratorAsyncWithHttpInfo($request);
    }
    
    public function removeIssuesFromIteratorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/iterators/{iterator_id}/issues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['iteratorId'] !== null) {
            $pathParams['iterator_id'] = $localVarParams['iteratorId'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\RemoveIssuesFromIteratorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\RemoveIssuesFromIteratorRequest',
            $asyncRequest = true);
    }

    /**
     * 批量执行测试用例
     *
     * 批量执行测试用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runTestCaseAsync($request)
    {
        return $this->runTestCaseAsyncWithHttpInfo($request);
    }
    
    public function runTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcases/execution';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\RunTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\RunTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 保存任务配置
     *
     * 保存任务配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveTaskSettingAsync($request)
    {
        return $this->saveTaskSettingAsyncWithHttpInfo($request);
    }
    
    public function saveTaskSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/task/settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\SaveTaskSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\SaveTaskSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 创建测试报告自定义模块
     *
     * 创建测试报告自定义模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveTestReportCustomDetailAsync($request)
    {
        return $this->saveTestReportCustomDetailAsyncWithHttpInfo($request);
    }
    
    public function saveTestReportCustomDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{version_uri}/test-reports/{report_uri}/custom-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $pathParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['reportUri'] !== null) {
            $pathParams['report_uri'] = $localVarParams['reportUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\SaveTestReportCustomDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\SaveTestReportCustomDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 设置测试套结果
     *
     * 设置测试套结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setTaskResultAsync($request)
    {
        return $this->setTaskResultAsyncWithHttpInfo($request);
    }
    
    public function setTaskResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_uuid}/tasks/{task_uri}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskUri'] !== null) {
            $pathParams['task_uri'] = $localVarParams['taskUri'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\SetTaskResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\SetTaskResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务配置
     *
     * 查询任务配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAllConfigValueByTypeAndKeyAsync($request)
    {
        return $this->showAllConfigValueByTypeAndKeyAsyncWithHttpInfo($request);
    }
    
    public function showAllConfigValueByTypeAndKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/service/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['key'] !== null) {
            $queryParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAllConfigValueByTypeAndKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAllConfigValueByTypeAndKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取特性树V5
     *
     * 获取目录\\特性树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAllFeatureChildrenAsync($request)
    {
        return $this->showAllFeatureChildrenAsyncWithHttpInfo($request);
    }
    
    public function showAllFeatureChildrenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v5/features/{feature_id}/children';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['featureId'] !== null) {
            $pathParams['feature_id'] = $localVarParams['featureId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAllFeatureChildrenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAllFeatureChildrenRequest',
            $asyncRequest = true);
    }

    /**
     * 获取用例历史执行数据
     *
     * 获取用例历史执行数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiTestcaseHistoriesAsync($request)
    {
        return $this->showApiTestcaseHistoriesAsyncWithHttpInfo($request);
    }
    
    public function showApiTestcaseHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/api-testcases/{testcase_id}/execute-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $queryParams['plan_id'] = $localVarParams['planId'];
        }
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowApiTestcaseHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowApiTestcaseHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取资产列表
     *
     * 获取资产列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetAsync($request)
    {
        return $this->showAssetAsyncWithHttpInfo($request);
    }
    
    public function showAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 获取资产树列表
     *
     * 获取资产树列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetTreeAsync($request)
    {
        return $this->showAssetTreeAsyncWithHttpInfo($request);
    }
    
    public function showAssetTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset-tree/{asset_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAssetTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowAssetTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取测试报告的模板设置
     *
     * 获取测试报告的模板设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBackgroundInfoAsync($request)
    {
        return $this->showBackgroundInfoAsyncWithHttpInfo($request);
    }
    
    public function showBackgroundInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/background';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowBackgroundInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowBackgroundInfoRequest',
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
        $resourcePath = '/GT3KServer/v4/branches/{branch_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['branchId'] !== null) {
            $pathParams['branch_id'] = $localVarParams['branchId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例结果
     *
     * 查询用例结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCaseResultAsync($request)
    {
        return $this->showCaseResultAsyncWithHttpInfo($request);
    }
    
    public function showCaseResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{version_uri}/testcases/{case_uri}/results/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $pathParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['caseUri'] !== null) {
            $pathParams['case_uri'] = $localVarParams['caseUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowCaseResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowCaseResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户测试并发套餐状态
     *
     * 查询租户测试并发套餐状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConcurrencyPackageUsingAsync($request)
    {
        return $this->showConcurrencyPackageUsingAsyncWithHttpInfo($request);
    }
    
    public function showConcurrencyPackageUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/echotest/concurrency/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $queryParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['testType'] !== null) {
            $queryParams['test_type'] = $localVarParams['testType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowConcurrencyPackageUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowConcurrencyPackageUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户免责声明
     *
     * 查询用户免责声明
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDisclaimerRecordAsync($request)
    {
        return $this->showDisclaimerRecordAsyncWithHttpInfo($request);
    }
    
    public function showDisclaimerRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/disclaimer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowDisclaimerRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowDisclaimerRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 根据domainId获取加密的testbirdkey
     *
     * 根据domainId获取加密的testbirdkey
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainInfoAsync($request)
    {
        return $this->showDomainInfoAsyncWithHttpInfo($request);
    }
    
    public function showDomainInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/user-info/domain';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowDomainInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowDomainInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户在线拨测套餐状态
     *
     * 查询租户在线拨测套餐状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEchoTestPackageUsingAsync($request)
    {
        return $this->showEchoTestPackageUsingAsyncWithHttpInfo($request);
    }
    
    public function showEchoTestPackageUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/package/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowEchoTestPackageUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowEchoTestPackageUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定表的内容
     *
     * 查询指定表的内容
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEtlDataAsync($request)
    {
        return $this->showEtlDataAsyncWithHttpInfo($request);
    }
    
    public function showEtlDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/testhub/etl/query-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowEtlDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowEtlDataRequest',
            $asyncRequest = true);
    }

    /**
     * 根据目录查询因子
     *
     * 根据目录查询因子
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactorByAssetIdAsync($request)
    {
        return $this->showFactorByAssetIdAsyncWithHttpInfo($request);
    }
    
    public function showFactorByAssetIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/factor/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFactorByAssetIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFactorByAssetIdRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id获取因子
     *
     * 根据id获取因子
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFactorByIdAsync($request)
    {
        return $this->showFactorByIdAsyncWithHttpInfo($request);
    }
    
    public function showFactorByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/factor/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFactorByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFactorByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取目录\\特性树
     *
     * 获取目录\\特性树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFeatureChildrenAsync($request)
    {
        return $this->showFeatureChildrenAsyncWithHttpInfo($request);
    }
    
    public function showFeatureChildrenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/features/{feature_id}/children';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['featureId'] !== null) {
            $pathParams['feature_id'] = $localVarParams['featureId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFeatureChildrenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFeatureChildrenRequest',
            $asyncRequest = true);
    }

    /**
     * 查询限时免费用户免责声明记录
     *
     * 查询限时免费用户免责声明记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFreeDeclarationAsync($request)
    {
        return $this->showFreeDeclarationAsyncWithHttpInfo($request);
    }
    
    public function showFreeDeclarationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/free-declaration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFreeDeclarationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowFreeDeclarationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警模板名称是否重复
     *
     * 查询告警模板名称是否重复
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIfTaskNameRepeatAsync($request)
    {
        return $this->showIfTaskNameRepeatAsyncWithHttpInfo($request);
    }
    
    public function showIfTaskNameRepeatAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/alert-templates/name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIfTaskNameRepeatResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIfTaskNameRepeatRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警组用户名是否重复
     *
     * 查询告警组用户名是否重复
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIfUserNameRepeatAsync($request)
    {
        return $this->showIfUserNameRepeatAsyncWithHttpInfo($request);
    }
    
    public function showIfUserNameRepeatAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{service_id}/alert/user/name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIfUserNameRepeatResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIfUserNameRepeatRequest',
            $asyncRequest = true);
    }

    /**
     * 查询某个测试计划下的需求树
     *
     * 查询某个测试计划下的需求列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIssuesByPlanIdAsync($request)
    {
        return $this->showIssuesByPlanIdAsyncWithHttpInfo($request);
    }
    
    public function showIssuesByPlanIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/plans/{plan_id}/issues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIssuesByPlanIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIssuesByPlanIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询缺陷相关联测试计划
     *
     * 查询缺陷相关联测试计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIteratorByDefectAsync($request)
    {
        return $this->showIteratorByDefectAsyncWithHttpInfo($request);
    }
    
    public function showIteratorByDefectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/defects/{defect_id}/iterators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['defectId'] !== null) {
            $pathParams['defect_id'] = $localVarParams['defectId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIteratorByDefectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIteratorByDefectRequest',
            $asyncRequest = true);
    }

    /**
     * 查询迭代计划详情，包含统计信息
     *
     * 查询迭代计划详情，包含统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIteratorDetailAsync($request)
    {
        return $this->showIteratorDetailAsyncWithHttpInfo($request);
    }
    
    public function showIteratorDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/iterators/{iterator_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['iteratorId'] !== null) {
            $pathParams['iterator_id'] = $localVarParams['iteratorId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIteratorDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowIteratorDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id获取脑图对象
     *
     * 根据id获取脑图对象
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindMapByIdAsync($request)
    {
        return $this->showMindMapByIdAsyncWithHttpInfo($request);
    }
    
    public function showMindMapByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/mindmaps/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindMapByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindMapByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取脑图对象V3
     *
     * 根据条件分页获取脑图对象V3
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindmapByPageAsync($request)
    {
        return $this->showMindmapByPageAsyncWithHttpInfo($request);
    }
    
    public function showMindmapByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/mindmaps/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 获取脑图创建人V2
     *
     * 获取脑图创建人V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindmapCreatorNameAsync($request)
    {
        return $this->showMindmapCreatorNameAsyncWithHttpInfo($request);
    }
    
    public function showMindmapCreatorNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/mindmap-creator-name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapCreatorNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapCreatorNameRequest',
            $asyncRequest = true);
    }

    /**
     * 查询运行面板信息
     *
     * 成功返回运行面板信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOperationalDataCurrentMonthUsingAsync($request)
    {
        return $this->showOperationalDataCurrentMonthUsingAsyncWithHttpInfo($request);
    }
    
    public function showOperationalDataCurrentMonthUsingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/projects/{service_id}/dashboard/run-panel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowOperationalDataCurrentMonthUsingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowOperationalDataCurrentMonthUsingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询某测试计划下的操作历史
     *
     * 查询某测试计划下的操作历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlanJournalsAsync($request)
    {
        return $this->showPlanJournalsAsyncWithHttpInfo($request);
    }
    
    public function showPlanJournalsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/plans/{plan_id}/journals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowPlanJournalsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowPlanJournalsRequest',
            $asyncRequest = true);
    }

    /**
     * 项目下查询测试计划列表v2
     *
     * 项目下查询测试计划列表v2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlanListAsync($request)
    {
        return $this->showPlanListAsyncWithHttpInfo($request);
    }
    
    public function showPlanListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/projects/{project_id}/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['currentStage'] !== null) {
            $queryParams['current_stage'] = $localVarParams['currentStage'];
        }
        if ($localVarParams['branchUri'] !== null) {
            $queryParams['branch_uri'] = $localVarParams['branchUri'];
        }
        if ($localVarParams['queryAllVersion'] !== null) {
            $queryParams['query_all_version'] = $localVarParams['queryAllVersion'];
        }
        if ($localVarParams['fixVersionIds'] !== null) {
            $queryParams['fix_version_ids'] = $localVarParams['fixVersionIds'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowPlanListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowPlanListRequest',
            $asyncRequest = true);
    }

    /**
     * 项目下查询测试计划列表
     *
     * 项目下查询测试计划列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlansAsync($request)
    {
        return $this->showPlansAsyncWithHttpInfo($request);
    }
    
    public function showPlansAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['currentStage'] !== null) {
            $queryParams['current_stage'] = $localVarParams['currentStage'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowPlansResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowPlansRequest',
            $asyncRequest = true);
    }

    /**
     * 获取异步进度
     *
     * 获取异步进度
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProgressAsync($request)
    {
        return $this->showProgressAsyncWithHttpInfo($request);
    }
    
    public function showProgressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/progress/{operation_uri}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['operationUri'] !== null) {
            $pathParams['operation_uri'] = $localVarParams['operationUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowProgressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowProgressRequest',
            $asyncRequest = true);
    }

    /**
     * 查询质量报告看板统计信息
     *
     * 查询质量报告看板统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectDataDashboardAsync($request)
    {
        return $this->showProjectDataDashboardAsyncWithHttpInfo($request);
    }
    
    public function showProjectDataDashboardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/data-dashboard/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowProjectDataDashboardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowProjectDataDashboardRequest',
            $asyncRequest = true);
    }

    /**
     * 用户获取自己当前已经注册的服务
     *
     * 用户获取自己当前已经注册的服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRegisterServiceAsync($request)
    {
        return $this->showRegisterServiceAsyncWithHttpInfo($request);
    }
    
    public function showRegisterServiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowRegisterServiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowRegisterServiceRequest',
            $asyncRequest = true);
    }

    /**
     * 实时计算单个自定义报表
     *
     * 实时计算单个自定义报表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReportAsync($request)
    {
        return $this->showReportAsyncWithHttpInfo($request);
    }
    
    public function showReportAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{plan_id}/custom-reports/generate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowReportResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowReportRequest',
            $asyncRequest = true);
    }

    /**
     * 质量报告需求测试情况统计
     *
     * 质量报告需求测试情况统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRequirementsOverviewAsync($request)
    {
        return $this->showRequirementsOverviewAsyncWithHttpInfo($request);
    }
    
    public function showRequirementsOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/testreport/v4/{project_id}/versions/{version_id}/requirements/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowRequirementsOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowRequirementsOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取评审对象V2
     *
     * 根据条件分页获取评审对象V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReviewByPageAsync($request)
    {
        return $this->showReviewByPageAsyncWithHttpInfo($request);
    }
    
    public function showReviewByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/reviews/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowReviewByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowReviewByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取场景对象V2
     *
     * 根据条件分页获取场景对象V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSceneByPageAsync($request)
    {
        return $this->showSceneByPageAsyncWithHttpInfo($request);
    }
    
    public function showSceneByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/scenes/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowSceneByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowSceneByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 根据脑图id查询统计数目
     *
     * 根据脑图id查询统计数目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticByIdAsync($request)
    {
        return $this->showStatisticByIdAsyncWithHttpInfo($request);
    }
    
    public function showStatisticByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/statistics/{mindmap_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['mindmapId'] !== null) {
            $pathParams['mindmap_id'] = $localVarParams['mindmapId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowStatisticByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowStatisticByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 根据入参动态查询系统配置中的信息
     *
     * 根据入参动态查询系统配置中的信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSystemConfigsAsync($request)
    {
        return $this->showSystemConfigsAsyncWithHttpInfo($request);
    }
    
    public function showSystemConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/system-config/find-all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowSystemConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowSystemConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取模板V2
     *
     * 获取模板V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTemplateByIdAsync($request)
    {
        return $this->showTemplateByIdAsyncWithHttpInfo($request);
    }
    
    public function showTemplateByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/templates/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTemplateByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTemplateByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取模板V3
     *
     * 根据条件分页获取模板V3
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTemplateByPageAsync($request)
    {
        return $this->showTemplateByPageAsyncWithHttpInfo($request);
    }
    
    public function showTemplateByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/templates/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTemplateByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTemplateByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用例详情
     *
     * 查询用例详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestCaseAsync($request)
    {
        return $this->showTestCaseAsyncWithHttpInfo($request);
    }
    
    public function showTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/testcases/{testcase_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['versionUri'] !== null) {
            $queryParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['projectUuid'] !== null) {
            $queryParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($localVarParams['taskUri'] !== null) {
            $queryParams['task_uri'] = $localVarParams['taskUri'];
        }
        if ($localVarParams['refresh'] !== null) {
            $queryParams['refresh'] = $localVarParams['refresh'];
        }
        if ($localVarParams['isRecycle'] !== null) {
            $queryParams['is_recycle'] = $localVarParams['isRecycle'];
        }
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户用例关联缺陷的统计信息
     *
     * 查询用户用例关联缺陷的统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestCaseAndDefectInfoAsync($request)
    {
        return $this->showTestCaseAndDefectInfoAsyncWithHttpInfo($request);
    }
    
    public function showTestCaseAndDefectInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/testcases/defect-info/list-by-creation-time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseAndDefectInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseAndDefectInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取测试用例详情
     *
     * 获取测试用例详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestCaseDetailAsync($request)
    {
        return $this->showTestCaseDetailAsyncWithHttpInfo($request);
    }
    
    public function showTestCaseDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcases/{testcase_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 通过用例编号获取测试用例详情
     *
     * 通过用例编号获取测试用例详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestCaseDetailV2Async($request)
    {
        return $this->showTestCaseDetailV2AsyncWithHttpInfo($request);
    }
    
    public function showTestCaseDetailV2AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcase';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['testcaseNumber'] !== null) {
            $queryParams['testcase_number'] = $localVarParams['testcaseNumber'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseDetailV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseDetailV2Request',
            $asyncRequest = true);
    }

    /**
     * 根据用例查询评审记录
     *
     * 根据用例查询评审记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestCaseReviewsAsync($request)
    {
        return $this->showTestCaseReviewsAsyncWithHttpInfo($request);
    }
    
    public function showTestCaseReviewsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/testcases/{testcase_uri}/review';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $queryParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['testcaseUri'] !== null) {
            $pathParams['testcase_uri'] = $localVarParams['testcaseUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseReviewsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCaseReviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 版本测试用例变更统计（只统计分支，不统计基线）
     *
     * 版本测试用例变更统计（只统计分支，不统计基线）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestCasesChangeStatisticsAsync($request)
    {
        return $this->showTestCasesChangeStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showTestCasesChangeStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/versions/{version_id}/testcases/change-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCasesChangeStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestCasesChangeStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取测试用例对象V2
     *
     * 根据条件分页获取测试用例对象V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestcaseByPageAsync($request)
    {
        return $this->showTestcaseByPageAsyncWithHttpInfo($request);
    }
    
    public function showTestcaseByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/testcases/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestcaseByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestcaseByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取测试点对象V2
     *
     * 根据条件分页获取测试点对象V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestpointByPageAsync($request)
    {
        return $this->showTestpointByPageAsyncWithHttpInfo($request);
    }
    
    public function showTestpointByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/testpoints/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestpointByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestpointByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 获取租户订单信息
     *
     * 获取租户订单信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserAccessInfoAsync($request)
    {
        return $this->showUserAccessInfoAsyncWithHttpInfo($request);
    }
    
    public function showUserAccessInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/domain/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowUserAccessInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowUserAccessInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询时段内用例的执行情况
     *
     * 查询时段内用例的执行情况
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserExecuteTestCaseInfoAsync($request)
    {
        return $this->showUserExecuteTestCaseInfoAsyncWithHttpInfo($request);
    }
    
    public function showUserExecuteTestCaseInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/testcases/execute-info/statistic-by-user';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowUserExecuteTestCaseInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowUserExecuteTestCaseInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 修改关键字信息接口
     *
     * 修改关键字信息接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBasicAwByIdAsync($request)
    {
        return $this->updateBasicAwByIdAsyncWithHttpInfo($request);
    }
    
    public function updateBasicAwByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/basic-aw/{aw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['awId'] !== null) {
            $pathParams['aw_id'] = $localVarParams['awId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateBasicAwByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateBasicAwByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 修改测试计划
     *
     * 修改测试计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIteratorAsync($request)
    {
        return $this->updateIteratorAsyncWithHttpInfo($request);
    }
    
    public function updateIteratorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/iterators/{iterator_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iteratorId'] !== null) {
            $pathParams['iterator_id'] = $localVarParams['iteratorId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateIteratorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateIteratorRequest',
            $asyncRequest = true);
    }

    /**
     * 更新已注册服务
     *
     * 更新已注册服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServiceAsync($request)
    {
        return $this->updateServiceAsyncWithHttpInfo($request);
    }
    
    public function updateServiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/services/{service_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateServiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateServiceRequest',
            $asyncRequest = true);
    }

    /**
     * 更新自定义测试服务类型用例
     *
     * 更新自定义测试服务类型用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTestCaseAsync($request)
    {
        return $this->updateTestCaseAsyncWithHttpInfo($request);
    }
    
    public function updateTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcases/{testcase_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 更新tmss用例和用例脚本
     *
     * 更新tmss用例和用例脚本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTestCaseAndScriptAsync($request)
    {
        return $this->updateTestCaseAndScriptAsyncWithHttpInfo($request);
    }
    
    public function updateTestCaseAndScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/testcase/{tmss_case_uri}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['turnOnAwmapping'] !== null) {
            $queryParams['turn_on_awmapping'] = $localVarParams['turnOnAwmapping'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['tmssCaseUri'] !== null) {
            $pathParams['tmss_case_uri'] = $localVarParams['tmssCaseUri'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseAndScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseAndScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 修改用例评论
     *
     * 修改用例评论
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTestCaseCommentAsync($request)
    {
        return $this->updateTestCaseCommentAsyncWithHttpInfo($request);
    }
    
    public function updateTestCaseCommentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/{project_id}/testcases/{testcase_id}/comments/{comment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['testcaseId'] !== null) {
            $pathParams['testcase_id'] = $localVarParams['testcaseId'];
        }
        if ($localVarParams['commentId'] !== null) {
            $pathParams['comment_id'] = $localVarParams['commentId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseCommentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseCommentRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新测试用例结果
     *
     * 批量更新测试用例结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTestCaseResultAsync($request)
    {
        return $this->updateTestCaseResultAsyncWithHttpInfo($request);
    }
    
    public function updateTestCaseResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/testcases/result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestCaseResultRequest',
            $asyncRequest = true);
    }

    /**
     * 修改测试报告自定义模块
     *
     * 修改测试报告自定义模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTestReportCustomDetailByUriAsync($request)
    {
        return $this->updateTestReportCustomDetailByUriAsyncWithHttpInfo($request);
    }
    
    public function updateTestReportCustomDetailByUriAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/versions/{version_uri}/test-reports/{report_uri}/custom-infos/{custom_info_uri}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionUri'] !== null) {
            $pathParams['version_uri'] = $localVarParams['versionUri'];
        }
        if ($localVarParams['reportUri'] !== null) {
            $pathParams['report_uri'] = $localVarParams['reportUri'];
        }
        if ($localVarParams['customInfoUri'] !== null) {
            $pathParams['custom_info_uri'] = $localVarParams['customInfoUri'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestReportCustomDetailByUriResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateTestReportCustomDetailByUriRequest',
            $asyncRequest = true);
    }

    /**
     * 更新用户DNS映射
     *
     * 更新用户DNS映射，执行器自定义映射
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateUserDnsMappingAsync($request)
    {
        return $this->updateUserDnsMappingAsyncWithHttpInfo($request);
    }
    
    public function updateUserDnsMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/dns-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateUserDnsMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateUserDnsMappingRequest',
            $asyncRequest = true);
    }

    /**
     * 在分支或者测试计划下修改用例
     *
     * 在分支或者测试计划下修改用例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVersionTestCaseAsync($request)
    {
        return $this->updateVersionTestCaseAsyncWithHttpInfo($request);
    }
    
    public function updateVersionTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/GT3KServer/v4/testcases/{case_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['caseId'] !== null) {
            $pathParams['case_id'] = $localVarParams['caseId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateVersionTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateVersionTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 上传附件
     *
     * 上传附件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadCacheFileAsync($request)
    {
        return $this->uploadCacheFileAsyncWithHttpInfo($request);
    }
    
    public function uploadCacheFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/resources/temp-attachments';
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
        if ($localVarParams['override'] !== null) {
            $queryParams['override'] = $localVarParams['override'];
        }
        if ($localVarParams['parentType'] !== null) {
            $queryParams['parent_type'] = $localVarParams['parentType'];
        }
        if ($localVarParams['parentUri'] !== null) {
            $queryParams['parent_uri'] = $localVarParams['parentUri'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UploadCacheFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UploadCacheFileRequest',
            $asyncRequest = true);
    }

    /**
     * 通过导入仓库中的文件生成接口测试套
     *
     * 通过导入仓库中的文件生成接口测试套
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApiTestSuiteByRepoFileAsync($request)
    {
        return $this->createApiTestSuiteByRepoFileAsyncWithHttpInfo($request);
    }
    
    public function createApiTestSuiteByRepoFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/projects/{project_id}/repository/testsuites';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateApiTestSuiteByRepoFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateApiTestSuiteByRepoFileRequest',
            $asyncRequest = true);
    }

    /**
     * 获取环境参数分组列表
     *
     * 获取环境参数分组列表
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
        $resourcePath = '/v1/projects/{project_id}/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListEnvironmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListEnvironmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 上传测试步骤图片
     *
     * 对外API
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadStepImgAsync($request)
    {
        return $this->uploadStepImgAsyncWithHttpInfo($request);
    }
    
    public function uploadStepImgAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_id}/images/upload';
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UploadStepImgResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UploadStepImgRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除因子
     *
     * 批量删除因子
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteFacotrByIdsAsync($request)
    {
        return $this->batchDeleteFacotrByIdsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteFacotrByIdsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/factor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteFacotrByIdsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchDeleteFacotrByIdsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量查询用例V3
     *
     * 批量查询用例V3
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowTestCaseAsync($request)
    {
        return $this->batchShowTestCaseAsyncWithHttpInfo($request);
    }
    
    public function batchShowTestCaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/testcases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchShowTestCaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\BatchShowTestCaseRequest',
            $asyncRequest = true);
    }

    /**
     * 新增资产树节点
     *
     * 新增资产树节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAssetTreeAsync($request)
    {
        return $this->createAssetTreeAsyncWithHttpInfo($request);
    }
    
    public function createAssetTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset-tree/{asset_id}/{parent_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['parentId'] !== null) {
            $pathParams['parent_id'] = $localVarParams['parentId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateAssetTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateAssetTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 备份脑图V2
     *
     * 备份脑图V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBackupMindmapAsync($request)
    {
        return $this->createBackupMindmapAsyncWithHttpInfo($request);
    }
    
    public function createBackupMindmapAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/mindmap-backups/backup';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateBackupMindmapResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateBackupMindmapRequest',
            $asyncRequest = true);
    }

    /**
     * 保存模板V2
     *
     * 保存模板V2
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
        $resourcePath = '/v2/{project_id}/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateTemplateRequest',
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
        $resourcePath = '/v1/{project_id}/asset/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资产树节点
     *
     * 删除资产树节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAssetTreeAsync($request)
    {
        return $this->deleteAssetTreeAsyncWithHttpInfo($request);
    }
    
    public function deleteAssetTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset-tree/{asset_id}/{parent_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['parentId'] !== null) {
            $pathParams['parent_id'] = $localVarParams['parentId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteAssetTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteAssetTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id删除脑图备份V2
     *
     * 根据id删除脑图备份V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMindmapBackupByIdAsync($request)
    {
        return $this->deleteMindmapBackupByIdAsyncWithHttpInfo($request);
    }
    
    public function deleteMindmapBackupByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/mindmap-backups/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteMindmapBackupByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteMindmapBackupByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除脑图回收站V2
     *
     * 删除脑图回收站V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMindmapRecycleByIdAsync($request)
    {
        return $this->deleteMindmapRecycleByIdAsyncWithHttpInfo($request);
    }
    
    public function deleteMindmapRecycleByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/mindmap-recycles/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteMindmapRecycleByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteMindmapRecycleByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除模板V2
     *
     * 删除模板V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplateByIdAsync($request)
    {
        return $this->deleteTemplateByIdAsyncWithHttpInfo($request);
    }
    
    public function deleteTemplateByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/templates/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteTemplateByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DeleteTemplateByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 下载资产模板
     *
     * 下载资产模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadAssetTemplateAsync($request)
    {
        return $this->downloadAssetTemplateAsyncWithHttpInfo($request);
    }
    
    public function downloadAssetTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DownloadAssetTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\DownloadAssetTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 因子库导出
     *
     * 因子库导出
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportFactorAsync($request)
    {
        return $this->exportFactorAsyncWithHttpInfo($request);
    }
    
    public function exportFactorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset/{asset_id}/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ExportFactorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ExportFactorRequest',
            $asyncRequest = true);
    }

    /**
     * 资产导入
     *
     * 资产导入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importAssetAsync($request)
    {
        return $this->importAssetAsyncWithHttpInfo($request);
    }
    
    public function importAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset/import';
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ImportAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ImportAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 因子导入
     *
     * 因子导入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importFactorAsync($request)
    {
        return $this->importFactorAsyncWithHttpInfo($request);
    }
    
    public function importFactorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset/{asset_id}/import';
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ImportFactorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ImportFactorRequest',
            $asyncRequest = true);
    }

    /**
     * 获取默认模板V2
     *
     * 获取默认模板V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDefaultTemplateByPageAsync($request)
    {
        return $this->showDefaultTemplateByPageAsyncWithHttpInfo($request);
    }
    
    public function showDefaultTemplateByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/templates/templates-default';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowDefaultTemplateByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowDefaultTemplateByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id获取脑图备份V2
     *
     * 根据id获取脑图备份V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindmapBackupByIdAsync($request)
    {
        return $this->showMindmapBackupByIdAsyncWithHttpInfo($request);
    }
    
    public function showMindmapBackupByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/mindmap-backups/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapBackupByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapBackupByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取脑图备份对象V3
     *
     * 根据条件分页获取脑图备份对象V3
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindmapBackupByPageAsync($request)
    {
        return $this->showMindmapBackupByPageAsyncWithHttpInfo($request);
    }
    
    public function showMindmapBackupByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/mindmap-backups/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapBackupByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapBackupByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id获取回收站脑图对象V2
     *
     * 根据id获取回收站脑图对象V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindmapRecycleByIdAsync($request)
    {
        return $this->showMindmapRecycleByIdAsyncWithHttpInfo($request);
    }
    
    public function showMindmapRecycleByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/mindmap-recycles/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapRecycleByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapRecycleByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件分页获取回收站脑图对象V3
     *
     * 根据条件分页获取回收站脑图对象V3
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMindmapRecycleByPageAsync($request)
    {
        return $this->showMindmapRecycleByPageAsyncWithHttpInfo($request);
    }
    
    public function showMindmapRecycleByPageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/mindmap-recycles/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapRecycleByPageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowMindmapRecycleByPageRequest',
            $asyncRequest = true);
    }

    /**
     * 根据id获取测试用例对象V2
     *
     * 根据id获取测试用例对象V2
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTestcaseByIdAsync($request)
    {
        return $this->showTestcaseByIdAsyncWithHttpInfo($request);
    }
    
    public function showTestcaseByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/testcases/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestcaseByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ShowTestcaseByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 修改资产树节点
     *
     * 修改资产树节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAssetTreeAsync($request)
    {
        return $this->updateAssetTreeAsyncWithHttpInfo($request);
    }
    
    public function updateAssetTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/asset-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateAssetTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateAssetTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 脑图名称编辑
     *
     * 脑图名称编辑
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMindmapNameAsync($request)
    {
        return $this->updateMindmapNameAsyncWithHttpInfo($request);
    }
    
    public function updateMindmapNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/mindmaps/{id}/name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateMindmapNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\UpdateMindmapNameRequest',
            $asyncRequest = true);
    }

    /**
     * 添加目录信息
     *
     * 添加目录信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFeatureAsync($request)
    {
        return $this->addFeatureAsyncWithHttpInfo($request);
    }
    
    public function addFeatureAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddFeatureResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\AddFeatureRequest',
            $asyncRequest = true);
    }

    /**
     * 根据测试用例URI或用例编号查询测试用例对应的测试计划
     *
     * 根据测试用例URI或用例编号查询测试用例对应的测试计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTestcasePlansAsync($request)
    {
        return $this->listTestcasePlansAsyncWithHttpInfo($request);
    }
    
    public function listTestcasePlansAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_uuid}/branch/{branch_uri}/testcases/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['branchUri'] !== null) {
            $pathParams['branch_uri'] = $localVarParams['branchUri'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestcasePlansResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTestcasePlansRequest',
            $asyncRequest = true);
    }

    /**
     * 根据任务uri查询测试任务执行历史
     *
     * 根据任务uri查询测试任务执行历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskResultsAsync($request)
    {
        return $this->listTaskResultsAsyncWithHttpInfo($request);
    }
    
    public function listTaskResultsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{project_uuid}/tasks/{task_uri}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['iteratorUri'] !== null) {
            $queryParams['iterator_uri'] = $localVarParams['iteratorUri'];
        }
        if ($localVarParams['pageNo'] !== null) {
            $queryParams['page_no'] = $localVarParams['pageNo'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['releaseDev'] !== null) {
            $queryParams['release_dev'] = $localVarParams['releaseDev'];
        }
        if ($localVarParams['projectUuid'] !== null) {
            $pathParams['project_uuid'] = $localVarParams['projectUuid'];
        }
        if ($localVarParams['taskUri'] !== null) {
            $pathParams['task_uri'] = $localVarParams['taskUri'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskResultsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cloudtest\V1\Model\ListTaskResultsRequest',
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