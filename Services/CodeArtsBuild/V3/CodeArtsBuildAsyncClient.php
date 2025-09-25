<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsBuildAsyncClient extends Client
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
        $client = new ClientBuilder(new CodeArtsBuildAsyncClient());
        return $client;
    }

    /**
     * 批量删除构建任务
     *
     * 批量删除构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteBuildJobsAsync($request)
    {
        return $this->batchDeleteBuildJobsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteBuildJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BatchDeleteBuildJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BatchDeleteBuildJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建构建任务
     *
     * 创建构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBuildJobAsync($request)
    {
        return $this->createBuildJobAsyncWithHttpInfo($request);
    }
    
    public function createBuildJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建构建模板
     *
     * 创建构建模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTemplatesAsync($request)
    {
        return $this->createTemplatesAsyncWithHttpInfo($request);
    }
    
    public function createTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/templates/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除构建任务
     *
     * 删除构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBuildJobAsync($request)
    {
        return $this->deleteBuildJobAsyncWithHttpInfo($request);
    }
    
    public function deleteBuildJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteBuildJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteBuildJobRequest',
            $asyncRequest = true);
    }

    /**
     * 删除构建模板
     *
     * 删除构建模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplatesAsync($request)
    {
        return $this->deleteTemplatesAsyncWithHttpInfo($request);
    }
    
    public function deleteTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/templates/{uuid}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 禁用构建任务
     *
     * 禁用构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableBuildJobAsync($request)
    {
        return $this->disableBuildJobAsyncWithHttpInfo($request);
    }
    
    public function disableBuildJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableBuildJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableBuildJobRequest',
            $asyncRequest = true);
    }

    /**
     * 取消通知
     *
     * 取消通知
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableNoticeAsync($request)
    {
        return $this->disableNoticeAsyncWithHttpInfo($request);
    }
    
    public function disableNoticeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/notice/{job_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['noticeType'] !== null) {
            $queryParams['notice_type'] = $localVarParams['noticeType'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableNoticeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableNoticeRequest',
            $asyncRequest = true);
    }

    /**
     * 下载全量构建日志
     *
     * 下载全量构建日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadBuildLogAsync($request)
    {
        return $this->downloadBuildLogAsyncWithHttpInfo($request);
    }
    
    public function downloadBuildLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{record_id}/download-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logLevel'] !== null) {
            $queryParams['log_level'] = $localVarParams['logLevel'];
        }
        if ($localVarParams['recordId'] !== null) {
            $pathParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildLogRequest',
            $asyncRequest = true);
    }

    /**
     * KeyStore文件下载
     *
     * 下载指定租户下的KeyStore文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadKeystoreAsync($request)
    {
        return $this->downloadKeystoreAsyncWithHttpInfo($request);
    }
    
    public function downloadKeystoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/keystore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadKeystoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadKeystoreRequest',
            $asyncRequest = true);
    }

    /**
     * 下载构建实时日志
     *
     * 下载构建实时日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadRealTimeLogAsync($request)
    {
        return $this->downloadRealTimeLogAsyncWithHttpInfo($request);
    }
    
    public function downloadRealTimeLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/{build_no}/real-time-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['length'] !== null) {
            $queryParams['length'] = $localVarParams['length'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadRealTimeLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadRealTimeLogRequest',
            $asyncRequest = true);
    }

    /**
     * 下载构建步骤日志
     *
     * 下载构建步骤日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadTaskLogAsync($request)
    {
        return $this->downloadTaskLogAsyncWithHttpInfo($request);
    }
    
    public function downloadTaskLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/{record_id}/task-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskName'] !== null) {
            $queryParams['task_name'] = $localVarParams['taskName'];
        }
        if ($localVarParams['logLevel'] !== null) {
            $queryParams['log_level'] = $localVarParams['logLevel'];
        }
        if ($localVarParams['recordId'] !== null) {
            $pathParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadTaskLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadTaskLogRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复构建任务
     *
     * 恢复构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableBuildJobAsync($request)
    {
        return $this->enableBuildJobAsyncWithHttpInfo($request);
    }
    
    public function enableBuildJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/recover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EnableBuildJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EnableBuildJobRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务构建记录列表
     *
     * 获取任务构建记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBuildInfoRecordAsync($request)
    {
        return $this->listBuildInfoRecordAsyncWithHttpInfo($request);
    }
    
    public function listBuildInfoRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/build-info-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildInfoRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildInfoRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建任务详情
     *
     * 获取构建任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobConfigAsync($request)
    {
        return $this->listJobConfigAsyncWithHttpInfo($request);
    }
    
    public function listJobConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['getAllParams'] !== null) {
            $queryParams['get_all_params'] = $localVarParams['getAllParams'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJobConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJobConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询通知
     *
     * 查询通知
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNoticeAsync($request)
    {
        return $this->listNoticeAsyncWithHttpInfo($request);
    }
    
    public function listNoticeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/notice/{job_id}/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListNoticeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListNoticeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询构建模板
     *
     * 查询构建模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTemplatesAsync($request)
    {
        return $this->listTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/templates/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 执行构建任务
     *
     * 执行构建任务,可传自定义参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runJobAsync($request)
    {
        return $this->runJobAsyncWithHttpInfo($request);
    }
    
    public function runJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/build';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RunJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RunJobRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建历史详情信息接口
     *
     * 获取构建历史详情信息接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHistoryDetailsAsync($request)
    {
        return $this->showHistoryDetailsAsyncWithHttpInfo($request);
    }
    
    public function showHistoryDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/{build_number}/history-details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNumber'] !== null) {
            $pathParams['build_number'] = $localVarParams['buildNumber'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowHistoryDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowHistoryDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看项目下用户的构建任务列表
     *
     * 查看项目下用户的构建任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobListByProjectIdAsync($request)
    {
        return $this->showJobListByProjectIdAsyncWithHttpInfo($request);
    }
    
    public function showJobListByProjectIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobListByProjectIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobListByProjectIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查看任务运行状态
     *
     * 查看任务运行状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobStatusAsync($request)
    {
        return $this->showJobStatusAsyncWithHttpInfo($request);
    }
    
    public function showJobStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 根据开始时间和结束时间查看构建任务的构建成功率
     *
     * 根据开始时间和结束时间查看构建任务的构建成功率
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobSuccessRatioAsync($request)
    {
        return $this->showJobSuccessRatioAsyncWithHttpInfo($request);
    }
    
    public function showJobSuccessRatioAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/success-ratio';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobSuccessRatioResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobSuccessRatioRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定代码仓库最近一次成功的构建历史
     *
     * 查询指定代码仓库最近一次成功的构建历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLastHistoryAsync($request)
    {
        return $this->showLastHistoryAsyncWithHttpInfo($request);
    }
    
    public function showLastHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{project_id}/last-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowLastHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowLastHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查看构建任务的构建历史列表
     *
     * 查看构建任务的构建历史列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showListHistoryAsync($request)
    {
        return $this->showListHistoryAsyncWithHttpInfo($request);
    }
    
    public function showListHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowListHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowListHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 根据开始时间和结束时间查看构建任务的构建历史列表
     *
     * 根据开始时间和结束时间查看构建任务的构建历史列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showListPeriodHistoryAsync($request)
    {
        return $this->showListPeriodHistoryAsyncWithHttpInfo($request);
    }
    
    public function showListPeriodHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/period-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowListPeriodHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowListPeriodHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建产物详情信息
     *
     * 获取构建产物详情信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOutputInfoAsync($request)
    {
        return $this->showOutputInfoAsyncWithHttpInfo($request);
    }
    
    public function showOutputInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/{build_no}/output-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowOutputInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowOutputInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建记录信息
     *
     * 获取构建记录信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordDetailAsync($request)
    {
        return $this->showRecordDetailAsyncWithHttpInfo($request);
    }
    
    public function showRecordDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/jobs/{job_id}/{build_no}/record-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRecordDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRecordDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 停止构建任务
     *
     * 停止构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopBuildJobAsync($request)
    {
        return $this->stopBuildJobAsyncWithHttpInfo($request);
    }
    
    public function stopBuildJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/{build_no}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopBuildJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopBuildJobRequest',
            $asyncRequest = true);
    }

    /**
     * 更新构建任务
     *
     * 更新构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBuildJobAsync($request)
    {
        return $this->updateBuildJobAsyncWithHttpInfo($request);
    }
    
    public function updateBuildJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateBuildJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateBuildJobRequest',
            $asyncRequest = true);
    }

    /**
     * 更新通知
     *
     * 更新通知
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNoticeAsync($request)
    {
        return $this->updateNoticeAsyncWithHttpInfo($request);
    }
    
    public function updateNoticeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/notice/{job_id}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNoticeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNoticeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目列表
     *
     * 获取项目列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRelatedProjectInfoAsync($request)
    {
        return $this->listRelatedProjectInfoAsyncWithHttpInfo($request);
    }
    
    public function listRelatedProjectInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/project/related-page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRelatedProjectInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRelatedProjectInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查内置执行机规格
     *
     * 查内置执行机规格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAvailableInnerSpecAsync($request)
    {
        return $this->showAvailableInnerSpecAsyncWithHttpInfo($request);
    }
    
    public function showAvailableInnerSpecAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/resource/spec';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['arch'] !== null) {
            $queryParams['arch'] = $localVarParams['arch'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowAvailableInnerSpecResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowAvailableInnerSpecRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户状态
     *
     * 查询租户状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainStatusAsync($request)
    {
        return $this->showDomainStatusAsyncWithHttpInfo($request);
    }
    
    public function showDomainStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDomainStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDomainStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 获取套餐临期信息
     *
     * 获取套餐临期信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPackageSpecCountDownAsync($request)
    {
        return $this->showPackageSpecCountDownAsyncWithHttpInfo($request);
    }
    
    public function showPackageSpecCountDownAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/resource/countdown';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowPackageSpecCountDownResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowPackageSpecCountDownRequest',
            $asyncRequest = true);
    }

    /**
     * 获取用户权限
     *
     * 获取用户权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectPermissionAsync($request)
    {
        return $this->showProjectPermissionAsyncWithHttpInfo($request);
    }
    
    public function showProjectPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/user-permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowProjectPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowProjectPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前用户的项目信息列表
     *
     * 获取当前用户的项目信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRelatedProjectAsync($request)
    {
        return $this->showRelatedProjectAsyncWithHttpInfo($request);
    }
    
    public function showRelatedProjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/project/related';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRelatedProjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRelatedProjectRequest',
            $asyncRequest = true);
    }

    /**
     * 获取租户任务总数和成功率接口
     *
     * 获取租户任务总数和成功率接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSummaryBuildJobInfoAsync($request)
    {
        return $this->showSummaryBuildJobInfoAsyncWithHttpInfo($request);
    }
    
    public function showSummaryBuildJobInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/job-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowSummaryBuildJobInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowSummaryBuildJobInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询当前租户（计费）类型
     *
     * 查询当前租户（计费）类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserChargeTypeAsync($request)
    {
        return $this->showUserChargeTypeAsyncWithHttpInfo($request);
    }
    
    public function showUserChargeTypeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/charge-type';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserChargeTypeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserChargeTypeRequest',
            $asyncRequest = true);
    }

    /**
     * 当前用户所在项目所属租户的包周期每月时长是否超额
     *
     * 当前用户所在项目所属租户的包周期每月时长是否超额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserOverPackageQuotaAsync($request)
    {
        return $this->showUserOverPackageQuotaAsyncWithHttpInfo($request);
    }
    
    public function showUserOverPackageQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/package/quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserOverPackageQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserOverPackageQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 创建构建任务分组
     *
     * 创建构建任务分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createJobGroupAsync($request)
    {
        return $this->createJobGroupAsyncWithHttpInfo($request);
    }
    
    public function createJobGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/group/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateJobGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateJobGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除分组
     *
     * 删除分组
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
        $resourcePath = '/v1/job/{project_id}/group/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分组树
     *
     * 查询分组树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupTreeAsync($request)
    {
        return $this->listGroupTreeAsyncWithHttpInfo($request);
    }
    
    public function listGroupTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/group/tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListGroupTreeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListGroupTreeRequest',
            $asyncRequest = true);
    }

    /**
     * 移动构建任务至指定分组
     *
     * 移动构建任务至指定分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function moveGroupAsync($request)
    {
        return $this->moveGroupAsyncWithHttpInfo($request);
    }
    
    public function moveGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/group/move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\MoveGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\MoveGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 交换分组顺序
     *
     * 交换分组顺序
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchedPacketAsync($request)
    {
        return $this->switchedPacketAsyncWithHttpInfo($request);
    }
    
    public function switchedPacketAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/group/swap';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceGroupId'] !== null) {
            $queryParams['source_group_id'] = $localVarParams['sourceGroupId'];
        }
        if ($localVarParams['targetGroupId'] !== null) {
            $queryParams['target_group_id'] = $localVarParams['targetGroupId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SwitchedPacketResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SwitchedPacketRequest',
            $asyncRequest = true);
    }

    /**
     * 修改分组信息
     *
     * 修改分组信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateJobGroupAsync($request)
    {
        return $this->updateJobGroupAsyncWithHttpInfo($request);
    }
    
    public function updateJobGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/group/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateJobGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateJobGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 获取dockerfileTemplate
     *
     * 获取dockerfileTemplate
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDockerfileTemplateAsync($request)
    {
        return $this->showDockerfileTemplateAsyncWithHttpInfo($request);
    }
    
    public function showDockerfileTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/image/dockerfile-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDockerfileTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDockerfileTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像模板列表
     *
     * 获取镜像模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImageTemplateListAsync($request)
    {
        return $this->showImageTemplateListAsyncWithHttpInfo($request);
    }
    
    public function showImageTemplateListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/image/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowImageTemplateListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowImageTemplateListRequest',
            $asyncRequest = true);
    }

    /**
     * 收藏任务
     *
     * 收藏任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFavouriteTaskAsync($request)
    {
        return $this->addFavouriteTaskAsyncWithHttpInfo($request);
    }
    
    public function addFavouriteTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/follow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddFavouriteTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddFavouriteTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 任务是否使用项目级权限
     *
     * 任务是否使用项目级权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function applyProjectPermissionAsync($request)
    {
        return $this->applyProjectPermissionAsyncWithHttpInfo($request);
    }
    
    public function applyProjectPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/project/permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ApplyProjectPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ApplyProjectPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改任务权限
     *
     * 批量修改任务权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateJobRolePermissionAsync($request)
    {
        return $this->batchUpdateJobRolePermissionAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateJobRolePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/permissions/batch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BatchUpdateJobRolePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BatchUpdateJobRolePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 检查任务数量是否上限
     *
     * 检查任务数量是否上限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkJobCountIsTopLimitAsync($request)
    {
        return $this->checkJobCountIsTopLimitAsyncWithHttpInfo($request);
    }
    
    public function checkJobCountIsTopLimitAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/check/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobCountIsTopLimitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobCountIsTopLimitRequest',
            $asyncRequest = true);
    }

    /**
     * 是否已开启内网安全访问
     *
     * 是否已开启内网安全访问。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkJobInternalAsync($request)
    {
        return $this->checkJobInternalAsyncWithHttpInfo($request);
    }
    
    public function checkJobInternalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/permission/internal';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobInternalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobInternalRequest',
            $asyncRequest = true);
    }

    /**
     * 查看项目下任务名是否存在
     *
     * 查看项目下任务名是否存在
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkJobNameIsExistsAsync($request)
    {
        return $this->checkJobNameIsExistsAsyncWithHttpInfo($request);
    }
    
    public function checkJobNameIsExistsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/check/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobNameIsExistsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobNameIsExistsRequest',
            $asyncRequest = true);
    }

    /**
     * 检查webhook地址参数
     *
     * 检查webhook地址参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkWebhookUrlAsync($request)
    {
        return $this->checkWebhookUrlAsyncWithHttpInfo($request);
    }
    
    public function checkWebhookUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/check/webhook-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckWebhookUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckWebhookUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 清空回收站中的任务
     *
     * 清空回收站中的任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function clearRecyclingJobsAsync($request)
    {
        return $this->clearRecyclingJobsAsyncWithHttpInfo($request);
    }
    
    public function clearRecyclingJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/recycling-empty';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ClearRecyclingJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ClearRecyclingJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 复制构建任务
     *
     * 复制构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyJobAsync($request)
    {
        return $this->copyJobAsyncWithHttpInfo($request);
    }
    
    public function copyJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/copy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CopyJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CopyJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建构建任务
     *
     * 创建构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNewJobAsync($request)
    {
        return $this->createNewJobAsyncWithHttpInfo($request);
    }
    
    public function createNewJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateNewJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateNewJobRequest',
            $asyncRequest = true);
    }

    /**
     * 删除回收站中的任务
     *
     * 删除回收站中的任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRecyclingJobsAsync($request)
    {
        return $this->deleteRecyclingJobsAsyncWithHttpInfo($request);
    }
    
    public function deleteRecyclingJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/recycling-deletion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteRecyclingJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteRecyclingJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除任务
     *
     * 删除任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTheJobAsync($request)
    {
        return $this->deleteTheJobAsyncWithHttpInfo($request);
    }
    
    public function deleteTheJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTheJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTheJobRequest',
            $asyncRequest = true);
    }

    /**
     * 禁用任务
     *
     * 禁用任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableTheJobAsync($request)
    {
        return $this->disableTheJobAsyncWithHttpInfo($request);
    }
    
    public function disableTheJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableTheJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableTheJobRequest',
            $asyncRequest = true);
    }

    /**
     * 执行构建
     *
     * 执行构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeJobAsync($request)
    {
        return $this->executeJobAsyncWithHttpInfo($request);
    }
    
    public function executeJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/execute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ExecuteJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ExecuteJobRequest',
            $asyncRequest = true);
    }

    /**
     * 详情页获取构建参数
     *
     * 详情页获取构建参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBuildParameterAsync($request)
    {
        return $this->listBuildParameterAsyncWithHttpInfo($request);
    }
    
    public function listBuildParameterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/{build_no}/history-parameters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildParameterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildParameterRequest',
            $asyncRequest = true);
    }

    /**
     * 查询私有依赖仓库列表
     *
     * 查询私有依赖仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndPointsAsync($request)
    {
        return $this->listEndPointsAsyncWithHttpInfo($request);
    }
    
    public function listEndPointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/nexus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListEndPointsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListEndPointsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看用户全部的构建任务列表
     *
     * 查看用户全部的构建任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobAsync($request)
    {
        return $this->listJobAsyncWithHttpInfo($request);
    }
    
    public function listJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['sortOrder'] !== null) {
            $queryParams['sort_order'] = $localVarParams['sortOrder'];
        }
        if ($localVarParams['creatorId'] !== null) {
            $queryParams['creator_id'] = $localVarParams['creatorId'];
        }
        if ($localVarParams['buildStatus'] !== null) {
            $queryParams['build_status'] = $localVarParams['buildStatus'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目任务列表
     *
     * 查询项目任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectJobsAsync($request)
    {
        return $this->listProjectJobsAsyncWithHttpInfo($request);
    }
    
    public function listProjectJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{project_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['sortOrder'] !== null) {
            $queryParams['sort_order'] = $localVarParams['sortOrder'];
        }
        if ($localVarParams['creatorId'] !== null) {
            $queryParams['creator_id'] = $localVarParams['creatorId'];
        }
        if ($localVarParams['buildStatus'] !== null) {
            $queryParams['build_status'] = $localVarParams['buildStatus'];
        }
        if ($localVarParams['byGroup'] !== null) {
            $queryParams['by_group'] = $localVarParams['byGroup'];
        }
        if ($localVarParams['groupPathId'] !== null) {
            $queryParams['group_path_id'] = $localVarParams['groupPathId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListProjectJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListProjectJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看回收站中删除的构建任务列表
     *
     * 查看回收站中删除的构建任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecyclingJobAsync($request)
    {
        return $this->listRecyclingJobAsyncWithHttpInfo($request);
    }
    
    public function listRecyclingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/recycling-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecyclingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecyclingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 获取修改历史
     *
     * 获取修改历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUpdateJobHistoryAsync($request)
    {
        return $this->listUpdateJobHistoryAsyncWithHttpInfo($request);
    }
    
    public function listUpdateJobHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListUpdateJobHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListUpdateJobHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 取消收藏任务
     *
     * 取消收藏任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removerFavouriteTaskAsync($request)
    {
        return $this->removerFavouriteTaskAsyncWithHttpInfo($request);
    }
    
    public function removerFavouriteTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/unfollow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RemoverFavouriteTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RemoverFavouriteTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复回收站中的任务
     *
     * 恢复回收站中的任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreRecyclingJobsAsync($request)
    {
        return $this->restoreRecyclingJobsAsyncWithHttpInfo($request);
    }
    
    public function restoreRecyclingJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/recycling-restoration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RestoreRecyclingJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RestoreRecyclingJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 设置回收站中的任务保留时间
     *
     * 设置回收站中的任务保留时间,该接口需要租户账号才能访问，租户子账号无权限访问。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setKeepTimeAsync($request)
    {
        return $this->setKeepTimeAsyncWithHttpInfo($request);
    }
    
    public function setKeepTimeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/keep-time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SetKeepTimeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SetKeepTimeRequest',
            $asyncRequest = true);
    }

    /**
     * 根据持续构建名称，获取任务构建状态、百分比、剩余时间
     *
     * 根据持续构建名称，获取任务构建状态、百分比、剩余时间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildDetailsAsync($request)
    {
        return $this->showBuildDetailsAsyncWithHttpInfo($request);
    }
    
    public function showBuildDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/{build_no}/build-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑页获取参数类型的接口
     *
     * 编辑页获取参数类型的接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildParamsListAsync($request)
    {
        return $this->showBuildParamsListAsyncWithHttpInfo($request);
    }
    
    public function showBuildParamsListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/build-params';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildParamsListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildParamsListRequest',
            $asyncRequest = true);
    }

    /**
     * 复制任务名
     *
     * 复制任务名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCopyNameAsync($request)
    {
        return $this->showCopyNameAsyncWithHttpInfo($request);
    }
    
    public function showCopyNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/copy-name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowCopyNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowCopyNameRequest',
            $asyncRequest = true);
    }

    /**
     * 获取编译构建默认参数
     *
     * 获取编译构建默认参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDefaultBuildParametersAsync($request)
    {
        return $this->showDefaultBuildParametersAsyncWithHttpInfo($request);
    }
    
    public function showDefaultBuildParametersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/default-parameters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDefaultBuildParametersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDefaultBuildParametersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取当前项目默认角色权限矩阵信息
     *
     * 获取当前项目默认角色权限矩阵信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDefaultProjectPermissionAsync($request)
    {
        return $this->showDefaultProjectPermissionAsyncWithHttpInfo($request);
    }
    
    public function showDefaultProjectPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/project/default-permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDefaultProjectPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDefaultProjectPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务是否已禁用
     *
     * 查询任务是否已禁用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDisableAsync($request)
    {
        return $this->showDisableAsyncWithHttpInfo($request);
    }
    
    public function showDisableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/check/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDisableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDisableRequest',
            $asyncRequest = true);
    }

    /**
     * 查询跨租户场景下其他租户的状态
     *
     * 查询跨租户场景下其他租户的状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainsStatusesAsync($request)
    {
        return $this->showDomainsStatusesAsyncWithHttpInfo($request);
    }
    
    public function showDomainsStatusesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/domain/domains-statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDomainsStatusesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDomainsStatusesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建任务详情
     *
     * 获取构建任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobConfigAsync($request)
    {
        return $this->showJobConfigAsyncWithHttpInfo($request);
    }
    
    public function showJobConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['getAllParams'] !== null) {
            $queryParams['get_all_params'] = $localVarParams['getAllParams'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建任务配置的对比差异
     *
     * 获取构建任务配置的对比差异
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobConfigDiffAsync($request)
    {
        return $this->showJobConfigDiffAsyncWithHttpInfo($request);
    }
    
    public function showJobConfigDiffAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/diff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['revisedlNo'] !== null) {
            $queryParams['revisedl_no'] = $localVarParams['revisedlNo'];
        }
        if ($localVarParams['originalNo'] !== null) {
            $queryParams['original_no'] = $localVarParams['originalNo'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobConfigDiffResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobConfigDiffRequest',
            $asyncRequest = true);
    }

    /**
     * 查看构建任务构建信息
     *
     * 查看构建任务构建信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobInfoAsync($request)
    {
        return $this->showJobInfoAsyncWithHttpInfo($request);
    }
    
    public function showJobInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取通知信息
     *
     * 获取通知信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobNoticeConfigInfoAsync($request)
    {
        return $this->showJobNoticeConfigInfoAsyncWithHttpInfo($request);
    }
    
    public function showJobNoticeConfigInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/notice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobNoticeConfigInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobNoticeConfigInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 流水线查看构建任务信息
     *
     * 流水线查看构建任务信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobPipelineInfoAsync($request)
    {
        return $this->showJobPipelineInfoAsyncWithHttpInfo($request);
    }
    
    public function showJobPipelineInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/pipeline-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['all'] !== null) {
            $queryParams['all'] = $localVarParams['all'];
        }
        if ($localVarParams['checkParamUsed'] !== null) {
            $queryParams['check_param_used'] = $localVarParams['checkParamUsed'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobPipelineInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobPipelineInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建任务的角色权限矩阵信息
     *
     * 获取构建任务的角色权限矩阵信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobRolePermissionAsync($request)
    {
        return $this->showJobRolePermissionAsyncWithHttpInfo($request);
    }
    
    public function showJobRolePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/permission/role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobRolePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobRolePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询任务状态
     *
     * 查询任务状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobStepStatusAsync($request)
    {
        return $this->showJobStepStatusAsyncWithHttpInfo($request);
    }
    
    public function showJobStepStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildNo'] !== null) {
            $queryParams['build_no'] = $localVarParams['buildNo'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobStepStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobStepStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查看系统预定义参数
     *
     * 查看系统预定义参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobSystemParametersAsync($request)
    {
        return $this->showJobSystemParametersAsyncWithHttpInfo($request);
    }
    
    public function showJobSystemParametersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/system-parameters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobSystemParametersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobSystemParametersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务权限矩阵
     *
     * 获取任务权限矩阵
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectJobPermissionAsync($request)
    {
        return $this->showProjectJobPermissionAsyncWithHttpInfo($request);
    }
    
    public function showProjectJobPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowProjectJobPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowProjectJobPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 查看任务是否在构建
     *
     * 查看任务是否在构建
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRunningStatusAsync($request)
    {
        return $this->showRunningStatusAsyncWithHttpInfo($request);
    }
    
    public function showRunningStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/running-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRunningStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRunningStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 停止构建任务v1
     *
     * 停止构建任务v1
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopTheJobAsync($request)
    {
        return $this->stopTheJobAsyncWithHttpInfo($request);
    }
    
    public function stopTheJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildNo'] !== null) {
            $queryParams['build_no'] = $localVarParams['buildNo'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopTheJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopTheJobRequest',
            $asyncRequest = true);
    }

    /**
     * 更新构建任务
     *
     * 更新构建任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNewJobAsync($request)
    {
        return $this->updateNewJobAsyncWithHttpInfo($request);
    }
    
    public function updateNewJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNewJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNewJobRequest',
            $asyncRequest = true);
    }

    /**
     * 更新通知配置
     *
     * 更新通知配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNewNoticeNewAsync($request)
    {
        return $this->updateNewNoticeNewAsyncWithHttpInfo($request);
    }
    
    public function updateNewNoticeNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/{job_id}/notice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNewNoticeNewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNewNoticeNewRequest',
            $asyncRequest = true);
    }

    /**
     * 添加文件权限
     *
     * 添加文件权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addKeystorePermissionAsync($request)
    {
        return $this->addKeystorePermissionAsyncWithHttpInfo($request);
    }
    
    public function addKeystorePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/permission/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddKeystorePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddKeystorePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除文件管理文件
     *
     * 删除文件管理文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKeystoreAsync($request)
    {
        return $this->deleteKeystoreAsyncWithHttpInfo($request);
    }
    
    public function deleteKeystoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/{keystore_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keystoreId'] !== null) {
            $pathParams['keystore_id'] = $localVarParams['keystoreId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteKeystoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteKeystoreRequest',
            $asyncRequest = true);
    }

    /**
     * 文件管理删除权限
     *
     * 文件管理删除权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKeystorePermissionAsync($request)
    {
        return $this->deleteKeystorePermissionAsyncWithHttpInfo($request);
    }
    
    public function deleteKeystorePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/permission/{permission_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['permissionId'] !== null) {
            $pathParams['permission_id'] = $localVarParams['permissionId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteKeystorePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteKeystorePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 文件管理文件下载
     *
     * 文件管理文件下载
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadKeystoreByNameAsync($request)
    {
        return $this->downloadKeystoreByNameAsyncWithHttpInfo($request);
    }
    
    public function downloadKeystoreByNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadKeystoreByNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadKeystoreByNameRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户可使用文件
     *
     * 查询用户可使用文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKeystoreAsync($request)
    {
        return $this->listKeystoreAsyncWithHttpInfo($request);
    }
    
    public function listKeystoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户下文件列表
     *
     * 查询租户下文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKeystoreSearchAsync($request)
    {
        return $this->listKeystoreSearchAsyncWithHttpInfo($request);
    }
    
    public function listKeystoreSearchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['search'] !== null) {
            $queryParams['search'] = $localVarParams['search'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreSearchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreSearchRequest',
            $asyncRequest = true);
    }

    /**
     * 文件管理查询权限
     *
     * 文件管理查询权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKeystorePermissionAsync($request)
    {
        return $this->showKeystorePermissionAsyncWithHttpInfo($request);
    }
    
    public function showKeystorePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/permission/{keystore_id}/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['keystoreId'] !== null) {
            $pathParams['keystore_id'] = $localVarParams['keystoreId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowKeystorePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowKeystorePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新文件信息
     *
     * 更新文件信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKeystoreAsync($request)
    {
        return $this->updateKeystoreAsyncWithHttpInfo($request);
    }
    
    public function updateKeystoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/update/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateKeystoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateKeystoreRequest',
            $asyncRequest = true);
    }

    /**
     * 配置文件权限
     *
     * 配置文件权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKeystorePermissionAsync($request)
    {
        return $this->updateKeystorePermissionAsyncWithHttpInfo($request);
    }
    
    public function updateKeystorePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/permission/edit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateKeystorePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateKeystorePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 上传文件
     *
     * 上传文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadKeystoreAsync($request)
    {
        return $this->uploadKeystoreAsyncWithHttpInfo($request);
    }
    
    public function uploadKeystoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/keystore/upload';
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UploadKeystoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UploadKeystoreRequest',
            $asyncRequest = true);
    }

    /**
     * 下载全量构建日志
     *
     * 下载全量构建日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadBuildFullLogAsync($request)
    {
        return $this->downloadBuildFullLogAsyncWithHttpInfo($request);
    }
    
    public function downloadBuildFullLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/log/{record_id}/download-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logLevel'] !== null) {
            $queryParams['log_level'] = $localVarParams['logLevel'];
        }
        if ($localVarParams['compress'] !== null) {
            $queryParams['compress'] = $localVarParams['compress'];
        }
        if ($localVarParams['recordId'] !== null) {
            $pathParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildFullLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildFullLogRequest',
            $asyncRequest = true);
    }

    /**
     * 获取运行全量日志
     *
     * 获取运行全量日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadBuildRealTimeLogAsync($request)
    {
        return $this->downloadBuildRealTimeLogAsyncWithHttpInfo($request);
    }
    
    public function downloadBuildRealTimeLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/log/{job_id}/{build_no}/real-time-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startOffset'] !== null) {
            $queryParams['start_offset'] = $localVarParams['startOffset'];
        }
        if ($localVarParams['endOffset'] !== null) {
            $queryParams['end_offset'] = $localVarParams['endOffset'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildRealTimeLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildRealTimeLogRequest',
            $asyncRequest = true);
    }

    /**
     * 任务执行后获取构建日志
     *
     * 任务执行后获取构建日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showActionIInfoAsync($request)
    {
        return $this->showActionIInfoAsyncWithHttpInfo($request);
    }
    
    public function showActionIInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/log/stage/page';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $queryParams['build_no'] = $localVarParams['buildNo'];
        }
        if ($localVarParams['startOffset'] !== null) {
            $queryParams['start_offset'] = $localVarParams['startOffset'];
        }
        if ($localVarParams['endOffset'] !== null) {
            $queryParams['end_offset'] = $localVarParams['endOffset'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowActionIInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowActionIInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 下载构建日志(待下线)
     *
     * 下载构建日志(待下线)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadLogByRecordIdAsync($request)
    {
        return $this->downloadLogByRecordIdAsyncWithHttpInfo($request);
    }
    
    public function downloadLogByRecordIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{record_id}/download-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadLogByRecordIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadLogByRecordIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建记录的有向无环图(待下线)
     *
     * 获取构建记录的有向无环图(待下线)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlowGraphAsync($request)
    {
        return $this->showFlowGraphAsyncWithHttpInfo($request);
    }
    
    public function showFlowGraphAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{build_flow_record_id}/flow-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildFlowRecordId'] !== null) {
            $pathParams['build_flow_record_id'] = $localVarParams['buildFlowRecordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowFlowGraphResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowFlowGraphRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建记录信息(待下线)
     *
     * 获取构建记录信息(待下线)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordInfoAsync($request)
    {
        return $this->showRecordInfoAsyncWithHttpInfo($request);
    }
    
    public function showRecordInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/{job_id}/{build_no}/record-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRecordInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRecordInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 停止构建任务(待下线)
     *
     * 停止构建任务(待下线)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopJobAsync($request)
    {
        return $this->stopJobAsyncWithHttpInfo($request);
    }
    
    public function stopJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/jobs/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopJobRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定工程的简要构建信息
     *
     * 获取指定工程的简要构建信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBriefRecordAsync($request)
    {
        return $this->listBriefRecordAsyncWithHttpInfo($request);
    }
    
    public function listBriefRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/brief';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBriefRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBriefRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务构建记录列表v1
     *
     * 获取任务构建记录列表v1
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBuildInfoRecordByJobIdAsync($request)
    {
        return $this->listBuildInfoRecordByJobIdAsyncWithHttpInfo($request);
    }
    
    public function listBuildInfoRecordByJobIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{job_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildInfoRecordByJobIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildInfoRecordByJobIdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定工程的构建记录列表
     *
     * 获取指定工程的构建记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordsAsync($request)
    {
        return $this->listRecordsAsyncWithHttpInfo($request);
    }
    
    public function listRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{build_project_id}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['triggers'] !== null) {
            $queryParams['triggers'] = $localVarParams['triggers'];
        }
        if ($localVarParams['branches'] !== null) {
            $queryParams['branches'] = $localVarParams['branches'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['fromDate'] !== null) {
            $queryParams['from_date'] = $localVarParams['fromDate'];
        }
        if ($localVarParams['toDate'] !== null) {
            $queryParams['to_date'] = $localVarParams['toDate'];
        }
        if ($localVarParams['buildProjectId'] !== null) {
            $pathParams['build_project_id'] = $localVarParams['buildProjectId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务构建记录列表
     *
     * 获取任务构建记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildInfoRecordAsync($request)
    {
        return $this->showBuildInfoRecordAsyncWithHttpInfo($request);
    }
    
    public function showBuildInfoRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{job_id}/{build_no}/build-info-record';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildInfoRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildInfoRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定构建记录详情
     *
     * 查询指定构建记录详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildRecordAsync($request)
    {
        return $this->showBuildRecordAsyncWithHttpInfo($request);
    }
    
    public function showBuildRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{record_id}/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建记录的构建脚本
     *
     * 获取构建记录的构建脚本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildRecordBuildScriptAsync($request)
    {
        return $this->showBuildRecordBuildScriptAsyncWithHttpInfo($request);
    }
    
    public function showBuildRecordBuildScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{record_id}/build-script';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['record_id'] = $localVarParams['recordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordBuildScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordBuildScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建记录的有向无环图
     *
     * 获取构建记录的有向无环图
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildRecordFlowGraphAsync($request)
    {
        return $this->showBuildRecordFlowGraphAsyncWithHttpInfo($request);
    }
    
    public function showBuildRecordFlowGraphAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{build_flow_record_id}/flow-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildFlowRecordId'] !== null) {
            $pathParams['build_flow_record_id'] = $localVarParams['buildFlowRecordId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordFlowGraphResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordFlowGraphRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务各阶段信息
     *
     * 获取任务各阶段信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBuildRecordFullStagesAsync($request)
    {
        return $this->showBuildRecordFullStagesAsyncWithHttpInfo($request);
    }
    
    public function showBuildRecordFullStagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{record_id}/full-stages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cascade'] !== null) {
            $queryParams['cascade'] = $localVarParams['cascade'];
        }
        if ($localVarParams['recordId'] !== null) {
            $pathParams['record_id'] = $localVarParams['recordId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'result', 'status']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'result', 'status'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordFullStagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordFullStagesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取构建记录信息
     *
     * 获取构建记录信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobBuildRecordDetailAsync($request)
    {
        return $this->showJobBuildRecordDetailAsyncWithHttpInfo($request);
    }
    
    public function showJobBuildRecordDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{job_id}/{build_no}/record-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $pathParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildRecordDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildRecordDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 构建历史页获取构建次数
     *
     * 构建历史页获取构建次数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobTotalAsync($request)
    {
        return $this->showJobTotalAsyncWithHttpInfo($request);
    }
    
    public function showJobTotalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/record/{build_project_id}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fromDate'] !== null) {
            $queryParams['from_date'] = $localVarParams['fromDate'];
        }
        if ($localVarParams['toDate'] !== null) {
            $queryParams['to_date'] = $localVarParams['toDate'];
        }
        if ($localVarParams['buildProjectId'] !== null) {
            $pathParams['build_project_id'] = $localVarParams['buildProjectId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobTotalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobTotalRequest',
            $asyncRequest = true);
    }

    /**
     * 获取单元测试覆盖率报告压缩包
     *
     * 获取单元测试覆盖率报告压缩包
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadJunitCoverageZipAsync($request)
    {
        return $this->downloadJunitCoverageZipAsyncWithHttpInfo($request);
    }
    
    public function downloadJunitCoverageZipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/junit/coverage/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $queryParams['build_no'] = $localVarParams['buildNo'];
        }
        if ($localVarParams['rootId'] !== null) {
            $queryParams['root_id'] = $localVarParams['rootId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadJunitCoverageZipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadJunitCoverageZipRequest',
            $asyncRequest = true);
    }

    /**
     * 获取单元测试覆盖率报告列表
     *
     * 获取单元测试覆盖率报告列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJunitCoverageSummaryAsync($request)
    {
        return $this->listJunitCoverageSummaryAsyncWithHttpInfo($request);
    }
    
    public function listJunitCoverageSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/junit/coverage/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['buildNo'] !== null) {
            $queryParams['build_no'] = $localVarParams['buildNo'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJunitCoverageSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJunitCoverageSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取该任务所有分支信息
     *
     * 获取该任务所有分支信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepoBranchAsync($request)
    {
        return $this->listRepoBranchAsyncWithHttpInfo($request);
    }
    
    public function listRepoBranchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $queryParams['repository_name'] = $localVarParams['repositoryName'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRepoBranchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRepoBranchRequest',
            $asyncRequest = true);
    }

    /**
     * 查看仓库
     *
     * 查看仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryAsync($request)
    {
        return $this->listRepositoryAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/{job_id}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询构建成功率
     *
     * 查询构建成功率
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobBuildSuccessRatioAsync($request)
    {
        return $this->showJobBuildSuccessRatioAsyncWithHttpInfo($request);
    }
    
    public function showJobBuildSuccessRatioAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/ratio';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $queryParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['branch'] !== null) {
            $queryParams['branch'] = $localVarParams['branch'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'result', 'status']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'result', 'status'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildSuccessRatioResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildSuccessRatioRequest',
            $asyncRequest = true);
    }

    /**
     * 洞察构建时长
     *
     * 洞察构建时长
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobBuildTimeAsync($request)
    {
        return $this->showJobBuildTimeAsyncWithHttpInfo($request);
    }
    
    public function showJobBuildTimeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $queryParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['branch'] !== null) {
            $queryParams['branch'] = $localVarParams['branch'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildTimeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildTimeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取覆盖率接口
     *
     * 获取覆盖率接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReportSummaryAsync($request)
    {
        return $this->showReportSummaryAsyncWithHttpInfo($request);
    }
    
    public function showReportSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/report/{job_id}/summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildNo'] !== null) {
            $queryParams['build_no'] = $localVarParams['buildNo'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowReportSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowReportSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 收藏自定义模板
     *
     * 收藏自定义模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFavouriteCustomTemplateAsync($request)
    {
        return $this->addFavouriteCustomTemplateAsyncWithHttpInfo($request);
    }
    
    public function addFavouriteCustomTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/custom/{uuid}/follow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddFavouriteCustomTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddFavouriteCustomTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 收藏官方模板
     *
     * 收藏官方模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFavouriteOfficialTemplateAsync($request)
    {
        return $this->addFavouriteOfficialTemplateAsyncWithHttpInfo($request);
    }
    
    public function addFavouriteOfficialTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/official/{uuid}/follow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddFavouriteOfficialTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\AddFavouriteOfficialTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建构建模板
     *
     * 创建构建模板
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
        $resourcePath = '/v1/template/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除构建模板
     *
     * 删除构建模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplateAsync($request)
    {
        return $this->deleteTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/{uuid}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 根据条件查询特定模板
     *
     * 根据条件查询特定模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomTemplateAsync($request)
    {
        return $this->listCustomTemplateAsyncWithHttpInfo($request);
    }
    
    public function listCustomTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/custom';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListCustomTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListCustomTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询官方模版
     *
     * 查询官方模版
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOfficialTemplateAsync($request)
    {
        return $this->listOfficialTemplateAsyncWithHttpInfo($request);
    }
    
    public function listOfficialTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/officialtemplates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListOfficialTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListOfficialTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取官方推荐模板
     *
     * 获取官方推荐模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecommendOfficialTemplateAsync($request)
    {
        return $this->listRecommendOfficialTemplateAsyncWithHttpInfo($request);
    }
    
    public function listRecommendOfficialTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/recommend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecommendOfficialTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecommendOfficialTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 取消收藏自定义模板
     *
     * 取消收藏自定义模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removerFavouriteCustomTemplateAsync($request)
    {
        return $this->removerFavouriteCustomTemplateAsyncWithHttpInfo($request);
    }
    
    public function removerFavouriteCustomTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/custom/{uuid}/unfollow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RemoverFavouriteCustomTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RemoverFavouriteCustomTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 取消收藏官方模板
     *
     * 取消收藏官方模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removerFavouriteOfficialTemplateAsync($request)
    {
        return $this->removerFavouriteOfficialTemplateAsyncWithHttpInfo($request);
    }
    
    public function removerFavouriteOfficialTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/official/{uuid}/unfollow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RemoverFavouriteOfficialTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RemoverFavouriteOfficialTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 保存模板使用记录
     *
     * 保存模板使用记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveTemplateUsedInfoAsync($request)
    {
        return $this->saveTemplateUsedInfoAsyncWithHttpInfo($request);
    }
    
    public function saveTemplateUsedInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/used-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SaveTemplateUsedInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SaveTemplateUsedInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 根据模板uuid查询特定模板
     *
     * 根据模板uuid查询特定模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTemplateAsync($request)
    {
        return $this->showTemplateAsyncWithHttpInfo($request);
    }
    
    public function showTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/{uuid}/custom';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['uuid'] = $localVarParams['uuid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取代码化构建默认模板
     *
     * 获取代码化构建默认模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showYamlTemplateAsync($request)
    {
        return $this->showYamlTemplateAsyncWithHttpInfo($request);
    }
    
    public function showYamlTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/template/{job_id}/default-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['defaultHost'] !== null) {
            $queryParams['default_host'] = $localVarParams['defaultHost'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowYamlTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowYamlTemplateRequest',
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