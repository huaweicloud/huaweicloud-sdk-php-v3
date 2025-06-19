<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsBuildClient extends Client
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
        $client = new ClientBuilder(new CodeArtsBuildClient());
        return $client;
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
    public function createBuildJob($request)
    {
        return $this->createBuildJobWithHttpInfo($request);
    }

    public function createBuildJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobRequest');
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
    public function createTemplates($request)
    {
        return $this->createTemplatesWithHttpInfo($request);
    }

    public function createTemplatesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplatesRequest');
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
    public function deleteBuildJob($request)
    {
        return $this->deleteBuildJobWithHttpInfo($request);
    }

    public function deleteBuildJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteBuildJobRequest');
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
    public function deleteTemplates($request)
    {
        return $this->deleteTemplatesWithHttpInfo($request);
    }

    public function deleteTemplatesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTemplatesRequest');
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
    public function disableBuildJob($request)
    {
        return $this->disableBuildJobWithHttpInfo($request);
    }

    public function disableBuildJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableBuildJobRequest');
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
    public function disableNotice($request)
    {
        return $this->disableNoticeWithHttpInfo($request);
    }

    public function disableNoticeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableNoticeRequest');
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
    public function downloadBuildLog($request)
    {
        return $this->downloadBuildLogWithHttpInfo($request);
    }

    public function downloadBuildLogWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadBuildLogRequest');
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
    public function downloadKeystore($request)
    {
        return $this->downloadKeystoreWithHttpInfo($request);
    }

    public function downloadKeystoreWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadKeystoreRequest');
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
    public function downloadRealTimeLog($request)
    {
        return $this->downloadRealTimeLogWithHttpInfo($request);
    }

    public function downloadRealTimeLogWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadRealTimeLogRequest');
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
    public function downloadTaskLog($request)
    {
        return $this->downloadTaskLogWithHttpInfo($request);
    }

    public function downloadTaskLogWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadTaskLogRequest');
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
    public function enableBuildJob($request)
    {
        return $this->enableBuildJobWithHttpInfo($request);
    }

    public function enableBuildJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\EnableBuildJobRequest');
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
    public function listBuildInfoRecord($request)
    {
        return $this->listBuildInfoRecordWithHttpInfo($request);
    }

    public function listBuildInfoRecordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildInfoRecordRequest');
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
    public function listJobConfig($request)
    {
        return $this->listJobConfigWithHttpInfo($request);
    }

    public function listJobConfigWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJobConfigRequest');
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
    public function listNotice($request)
    {
        return $this->listNoticeWithHttpInfo($request);
    }

    public function listNoticeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListNoticeRequest');
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
    public function listTemplates($request)
    {
        return $this->listTemplatesWithHttpInfo($request);
    }

    public function listTemplatesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListTemplatesRequest');
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
    public function runJob($request)
    {
        return $this->runJobWithHttpInfo($request);
    }

    public function runJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RunJobRequest');
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
    public function showHistoryDetails($request)
    {
        return $this->showHistoryDetailsWithHttpInfo($request);
    }

    public function showHistoryDetailsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowHistoryDetailsRequest');
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
    public function showJobListByProjectId($request)
    {
        return $this->showJobListByProjectIdWithHttpInfo($request);
    }

    public function showJobListByProjectIdWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobListByProjectIdRequest');
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
    public function showJobStatus($request)
    {
        return $this->showJobStatusWithHttpInfo($request);
    }

    public function showJobStatusWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobStatusRequest');
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
    public function showJobSuccessRatio($request)
    {
        return $this->showJobSuccessRatioWithHttpInfo($request);
    }

    public function showJobSuccessRatioWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobSuccessRatioRequest');
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
    public function showLastHistory($request)
    {
        return $this->showLastHistoryWithHttpInfo($request);
    }

    public function showLastHistoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowLastHistoryRequest');
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
    public function showListHistory($request)
    {
        return $this->showListHistoryWithHttpInfo($request);
    }

    public function showListHistoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowListHistoryRequest');
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
    public function showListPeriodHistory($request)
    {
        return $this->showListPeriodHistoryWithHttpInfo($request);
    }

    public function showListPeriodHistoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowListPeriodHistoryRequest');
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
    public function showOutputInfo($request)
    {
        return $this->showOutputInfoWithHttpInfo($request);
    }

    public function showOutputInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowOutputInfoRequest');
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
    public function showRecordDetail($request)
    {
        return $this->showRecordDetailWithHttpInfo($request);
    }

    public function showRecordDetailWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRecordDetailRequest');
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
    public function stopBuildJob($request)
    {
        return $this->stopBuildJobWithHttpInfo($request);
    }

    public function stopBuildJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopBuildJobRequest');
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
    public function updateBuildJob($request)
    {
        return $this->updateBuildJobWithHttpInfo($request);
    }

    public function updateBuildJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateBuildJobRequest');
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
    public function updateNotice($request)
    {
        return $this->updateNoticeWithHttpInfo($request);
    }

    public function updateNoticeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNoticeRequest');
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
    public function listRelatedProjectInfo($request)
    {
        return $this->listRelatedProjectInfoWithHttpInfo($request);
    }

    public function listRelatedProjectInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRelatedProjectInfoRequest');
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
    public function showProjectPermission($request)
    {
        return $this->showProjectPermissionWithHttpInfo($request);
    }

    public function showProjectPermissionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowProjectPermissionRequest');
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
    public function showRelatedProject($request)
    {
        return $this->showRelatedProjectWithHttpInfo($request);
    }

    public function showRelatedProjectWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRelatedProjectRequest');
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
    public function showSummaryBuildJobInfo($request)
    {
        return $this->showSummaryBuildJobInfoWithHttpInfo($request);
    }

    public function showSummaryBuildJobInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowSummaryBuildJobInfoRequest');
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
    public function showUserOverPackageQuota($request)
    {
        return $this->showUserOverPackageQuotaWithHttpInfo($request);
    }

    public function showUserOverPackageQuotaWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserOverPackageQuotaRequest');
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
    public function showDockerfileTemplate($request)
    {
        return $this->showDockerfileTemplateWithHttpInfo($request);
    }

    public function showDockerfileTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDockerfileTemplateRequest');
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
    public function showImageTemplateList($request)
    {
        return $this->showImageTemplateListWithHttpInfo($request);
    }

    public function showImageTemplateListWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowImageTemplateListRequest');
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
    public function checkJobCountIsTopLimit($request)
    {
        return $this->checkJobCountIsTopLimitWithHttpInfo($request);
    }

    public function checkJobCountIsTopLimitWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobCountIsTopLimitRequest');
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
    public function checkJobNameIsExists($request)
    {
        return $this->checkJobNameIsExistsWithHttpInfo($request);
    }

    public function checkJobNameIsExistsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckJobNameIsExistsRequest');
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
    public function checkWebhookUrl($request)
    {
        return $this->checkWebhookUrlWithHttpInfo($request);
    }

    public function checkWebhookUrlWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CheckWebhookUrlRequest');
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
    public function clearRecyclingJobs($request)
    {
        return $this->clearRecyclingJobsWithHttpInfo($request);
    }

    public function clearRecyclingJobsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ClearRecyclingJobsRequest');
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
    public function copyJob($request)
    {
        return $this->copyJobWithHttpInfo($request);
    }

    public function copyJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CopyJobRequest');
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
    public function deleteRecyclingJobs($request)
    {
        return $this->deleteRecyclingJobsWithHttpInfo($request);
    }

    public function deleteRecyclingJobsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteRecyclingJobsRequest');
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
    public function deleteTheJob($request)
    {
        return $this->deleteTheJobWithHttpInfo($request);
    }

    public function deleteTheJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTheJobRequest');
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
    public function disableTheJob($request)
    {
        return $this->disableTheJobWithHttpInfo($request);
    }

    public function disableTheJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DisableTheJobRequest');
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
    public function executeJob($request)
    {
        return $this->executeJobWithHttpInfo($request);
    }

    public function executeJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ExecuteJobRequest');
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
    public function listBuildParameter($request)
    {
        return $this->listBuildParameterWithHttpInfo($request);
    }

    public function listBuildParameterWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildParameterRequest');
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
    public function listJob($request)
    {
        return $this->listJobWithHttpInfo($request);
    }

    public function listJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJobRequest');
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
    public function listProjectJobs($request)
    {
        return $this->listProjectJobsWithHttpInfo($request);
    }

    public function listProjectJobsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListProjectJobsRequest');
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
    public function listRecyclingJob($request)
    {
        return $this->listRecyclingJobWithHttpInfo($request);
    }

    public function listRecyclingJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecyclingJobRequest');
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
    public function listUpdateJobHistory($request)
    {
        return $this->listUpdateJobHistoryWithHttpInfo($request);
    }

    public function listUpdateJobHistoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListUpdateJobHistoryRequest');
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
    public function restoreRecyclingJobs($request)
    {
        return $this->restoreRecyclingJobsWithHttpInfo($request);
    }

    public function restoreRecyclingJobsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RestoreRecyclingJobsRequest');
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
    public function setKeepTime($request)
    {
        return $this->setKeepTimeWithHttpInfo($request);
    }

    public function setKeepTimeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\SetKeepTimeRequest');
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
    public function showBuildParamsList($request)
    {
        return $this->showBuildParamsListWithHttpInfo($request);
    }

    public function showBuildParamsListWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildParamsListRequest');
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
    public function showCopyName($request)
    {
        return $this->showCopyNameWithHttpInfo($request);
    }

    public function showCopyNameWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowCopyNameRequest');
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
    public function showDefaultBuildParameters($request)
    {
        return $this->showDefaultBuildParametersWithHttpInfo($request);
    }

    public function showDefaultBuildParametersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDefaultBuildParametersRequest');
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
    public function showDefaultProjectPermission($request)
    {
        return $this->showDefaultProjectPermissionWithHttpInfo($request);
    }

    public function showDefaultProjectPermissionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDefaultProjectPermissionRequest');
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
    public function showDisable($request)
    {
        return $this->showDisableWithHttpInfo($request);
    }

    public function showDisableWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowDisableRequest');
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
    public function showJobConfig($request)
    {
        return $this->showJobConfigWithHttpInfo($request);
    }

    public function showJobConfigWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobConfigRequest');
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
    public function showJobConfigDiff($request)
    {
        return $this->showJobConfigDiffWithHttpInfo($request);
    }

    public function showJobConfigDiffWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobConfigDiffRequest');
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
    public function showJobInfo($request)
    {
        return $this->showJobInfoWithHttpInfo($request);
    }

    public function showJobInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobInfoRequest');
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
    public function showJobNoticeConfigInfo($request)
    {
        return $this->showJobNoticeConfigInfoWithHttpInfo($request);
    }

    public function showJobNoticeConfigInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobNoticeConfigInfoRequest');
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
    public function showJobRolePermission($request)
    {
        return $this->showJobRolePermissionWithHttpInfo($request);
    }

    public function showJobRolePermissionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobRolePermissionRequest');
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
    public function showJobStepStatus($request)
    {
        return $this->showJobStepStatusWithHttpInfo($request);
    }

    public function showJobStepStatusWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobStepStatusRequest');
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
    public function showJobSystemParameters($request)
    {
        return $this->showJobSystemParametersWithHttpInfo($request);
    }

    public function showJobSystemParametersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobSystemParametersRequest');
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
    public function showRunningStatus($request)
    {
        return $this->showRunningStatusWithHttpInfo($request);
    }

    public function showRunningStatusWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRunningStatusRequest');
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
    public function updateNewJob($request)
    {
        return $this->updateNewJobWithHttpInfo($request);
    }

    public function updateNewJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\UpdateNewJobRequest');
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
    public function deleteKeystore($request)
    {
        return $this->deleteKeystoreWithHttpInfo($request);
    }

    public function deleteKeystoreWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteKeystoreRequest');
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
    public function deleteKeystorePermission($request)
    {
        return $this->deleteKeystorePermissionWithHttpInfo($request);
    }

    public function deleteKeystorePermissionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteKeystorePermissionRequest');
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
    public function downloadKeystoreByName($request)
    {
        return $this->downloadKeystoreByNameWithHttpInfo($request);
    }

    public function downloadKeystoreByNameWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadKeystoreByNameRequest');
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
    public function listKeystore($request)
    {
        return $this->listKeystoreWithHttpInfo($request);
    }

    public function listKeystoreWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreRequest');
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
    public function listKeystoreSearch($request)
    {
        return $this->listKeystoreSearchWithHttpInfo($request);
    }

    public function listKeystoreSearchWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListKeystoreSearchRequest');
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
    public function showKeystorePermission($request)
    {
        return $this->showKeystorePermissionWithHttpInfo($request);
    }

    public function showKeystorePermissionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowKeystorePermissionRequest');
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
    public function downloadLogByRecordId($request)
    {
        return $this->downloadLogByRecordIdWithHttpInfo($request);
    }

    public function downloadLogByRecordIdWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadLogByRecordIdRequest');
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
    public function showFlowGraph($request)
    {
        return $this->showFlowGraphWithHttpInfo($request);
    }

    public function showFlowGraphWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowFlowGraphRequest');
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
    public function showRecordInfo($request)
    {
        return $this->showRecordInfoWithHttpInfo($request);
    }

    public function showRecordInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowRecordInfoRequest');
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
    public function stopJob($request)
    {
        return $this->stopJobWithHttpInfo($request);
    }

    public function stopJobWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\StopJobRequest');
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
    public function listBriefRecord($request)
    {
        return $this->listBriefRecordWithHttpInfo($request);
    }

    public function listBriefRecordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBriefRecordRequest');
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
    public function listBuildInfoRecordByJobId($request)
    {
        return $this->listBuildInfoRecordByJobIdWithHttpInfo($request);
    }

    public function listBuildInfoRecordByJobIdWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListBuildInfoRecordByJobIdRequest');
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
    public function listRecords($request)
    {
        return $this->listRecordsWithHttpInfo($request);
    }

    public function listRecordsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecordsRequest');
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
    public function showBuildInfoRecord($request)
    {
        return $this->showBuildInfoRecordWithHttpInfo($request);
    }

    public function showBuildInfoRecordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildInfoRecordRequest');
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
    public function showBuildRecord($request)
    {
        return $this->showBuildRecordWithHttpInfo($request);
    }

    public function showBuildRecordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordRequest');
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
    public function showBuildRecordBuildScript($request)
    {
        return $this->showBuildRecordBuildScriptWithHttpInfo($request);
    }

    public function showBuildRecordBuildScriptWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordBuildScriptRequest');
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
    public function showBuildRecordFlowGraph($request)
    {
        return $this->showBuildRecordFlowGraphWithHttpInfo($request);
    }

    public function showBuildRecordFlowGraphWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordFlowGraphRequest');
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
    public function showBuildRecordFullStages($request)
    {
        return $this->showBuildRecordFullStagesWithHttpInfo($request);
    }

    public function showBuildRecordFullStagesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowBuildRecordFullStagesRequest');
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
    public function showJobBuildRecordDetail($request)
    {
        return $this->showJobBuildRecordDetailWithHttpInfo($request);
    }

    public function showJobBuildRecordDetailWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildRecordDetailRequest');
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
    public function showJobTotal($request)
    {
        return $this->showJobTotalWithHttpInfo($request);
    }

    public function showJobTotalWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobTotalRequest');
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
    public function downloadJunitCoverageZip($request)
    {
        return $this->downloadJunitCoverageZipWithHttpInfo($request);
    }

    public function downloadJunitCoverageZipWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DownloadJunitCoverageZipRequest');
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
    public function listJunitCoverageSummary($request)
    {
        return $this->listJunitCoverageSummaryWithHttpInfo($request);
    }

    public function listJunitCoverageSummaryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJunitCoverageSummaryRequest');
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
    public function listRepoBranch($request)
    {
        return $this->listRepoBranchWithHttpInfo($request);
    }

    public function listRepoBranchWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRepoBranchRequest');
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
    public function listRepository($request)
    {
        return $this->listRepositoryWithHttpInfo($request);
    }

    public function listRepositoryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRepositoryRequest');
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
    public function showJobBuildSuccessRatio($request)
    {
        return $this->showJobBuildSuccessRatioWithHttpInfo($request);
    }

    public function showJobBuildSuccessRatioWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildSuccessRatioRequest');
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
    public function showJobBuildTime($request)
    {
        return $this->showJobBuildTimeWithHttpInfo($request);
    }

    public function showJobBuildTimeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildTimeRequest');
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
    public function showReportSummary($request)
    {
        return $this->showReportSummaryWithHttpInfo($request);
    }

    public function showReportSummaryWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowReportSummaryRequest');
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
    public function deleteTemplate($request)
    {
        return $this->deleteTemplateWithHttpInfo($request);
    }

    public function deleteTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\DeleteTemplateRequest');
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
    public function listCustomTemplate($request)
    {
        return $this->listCustomTemplateWithHttpInfo($request);
    }

    public function listCustomTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListCustomTemplateRequest');
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
    public function listOfficialTemplate($request)
    {
        return $this->listOfficialTemplateWithHttpInfo($request);
    }

    public function listOfficialTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListOfficialTemplateRequest');
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
    public function listRecommendOfficialTemplate($request)
    {
        return $this->listRecommendOfficialTemplateWithHttpInfo($request);
    }

    public function listRecommendOfficialTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecommendOfficialTemplateRequest');
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
    public function showYamlTemplate($request)
    {
        return $this->showYamlTemplateWithHttpInfo($request);
    }

    public function showYamlTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowYamlTemplateRequest');
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