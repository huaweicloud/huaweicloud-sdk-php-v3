<?php

namespace HuaweiCloud\SDK\Mrs\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class MrsClient extends Client
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
        return new ClientBuilder(new MrsClient());
    }


    /**
     * 批量删除作业
     *
     * 在MRS集群中批量删除作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteJobs($request)
    {
        return $this->batchDeleteJobsWithHttpInfo($request);
    }

    public function batchDeleteJobsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/job-executions/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\BatchDeleteJobsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\BatchDeleteJobsRequest');
    }

    /**
     * 创建弹性伸缩策略
     *
     * 创建弹性伸缩策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAutoScalingPolicy($request)
    {
        return $this->createAutoScalingPolicyWithHttpInfo($request);
    }

    public function createAutoScalingPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/autoscaling-policy/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateAutoScalingPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateAutoScalingPolicyRequest');
    }

    /**
     * 创建集群
     *
     * 创建一个MRS集群。使用接口前，您需要先获取下的资源信息。
     * - 通过VPC创建或查询VPC、子网
     * - 通过ECS创建或查询密钥对
     * - 通过[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)获取区域信息
     * - 参考[MRS服务支持的组件](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)获取MRS版本及对应版本支持的组件信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCluster($request)
    {
        return $this->createClusterWithHttpInfo($request);
    }

    public function createClusterWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateClusterResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateClusterRequest');
    }

    /**
     * 新增并执行作业
     *
     * 在MRS集群中新增并提交一个作业。
     * 
     * 需要先在集群详情页的“概览”页签，单击“IAM用户同步”右侧的“同步”进行IAM用户同步，然后再通过该接口提交作业。
     * 
     * 如需使用OBS加密功能，请先参考“MRS用户指南 &gt; 管理现有集群 &gt; 作业管理 &gt; 使用OBS加密数据运行作业”页面进行相关配置后，再调用API接口运行作业。
     * 
     * 所有示例中涉及的OBS路径、样例文件及终端节点和AKSK，请提前准备并在提交请求时根据实际情况替换。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createExecuteJob($request)
    {
        return $this->createExecuteJobWithHttpInfo($request);
    }

    public function createExecuteJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/job-executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateExecuteJobResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateExecuteJobRequest');
    }

    /**
     * 删除弹性伸缩策略
     *
     * 删除弹性伸缩策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAutoScalingPolicy($request)
    {
        return $this->deleteAutoScalingPolicyWithHttpInfo($request);
    }

    public function deleteAutoScalingPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/autoscaling-policy/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\DeleteAutoScalingPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\DeleteAutoScalingPolicyRequest');
    }

    /**
     * 创建集群并提交作业
     *
     * 创建一个MRS集群并提交作业，并支持作业完成后删除集群，支持MRS 1.8.9及以上集群版本使用。使用接口前，您需要先获取下的资源信息。
     * - 通过VPC创建或查询VPC、子网
     * - 通过ECS创建或查询密钥对
     * - 通过[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)获取区域信息
     * - 参考[MRS服务支持的组件](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)获取MRS版本及对应版本支持的组件信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runJobFlow($request)
    {
        return $this->runJobFlowWithHttpInfo($request);
    }

    public function runJobFlowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/run-job-flow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\RunJobFlowResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\RunJobFlowRequest');
    }

    /**
     * 查询用户（组）与IAM委托的映射关系
     *
     * 获取用户（组）与IAM委托之间的映射关系的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAgencyMapping($request)
    {
        return $this->showAgencyMappingWithHttpInfo($request);
    }

    public function showAgencyMappingWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/agency-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowAgencyMappingResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowAgencyMappingRequest');
    }

    /**
     * 查看弹性伸缩策略
     *
     * 查看指定集群的所有的弹性伸缩策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoScalingPolicy($request)
    {
        return $this->showAutoScalingPolicyWithHttpInfo($request);
    }

    public function showAutoScalingPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/autoscaling-policy/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowAutoScalingPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowAutoScalingPolicyRequest');
    }

    /**
     * 查询作业列表信息
     *
     * 在MRS指定集群中查询作业列表信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobExeListNew($request)
    {
        return $this->showJobExeListNewWithHttpInfo($request);
    }

    public function showJobExeListNewWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/job-executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['user'] !== null) {
            $queryParams['user'] = $localVarParams['user'];
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['jobState'] !== null) {
            $queryParams['job_state'] = $localVarParams['jobState'];
        }
        if ($localVarParams['jobResult'] !== null) {
            $queryParams['job_result'] = $localVarParams['jobResult'];
        }
        if ($localVarParams['queue'] !== null) {
            $queryParams['queue'] = $localVarParams['queue'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['submittedTimeBegin'] !== null) {
            $queryParams['submitted_time_begin'] = $localVarParams['submittedTimeBegin'];
        }
        if ($localVarParams['submittedTimeEnd'] !== null) {
            $queryParams['submitted_time_end'] = $localVarParams['submittedTimeEnd'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowJobExeListNewResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowJobExeListNewRequest');
    }

    /**
     * 查询单个作业信息
     *
     * 在MRS集群中查询指定作业的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSingleJobExe($request)
    {
        return $this->showSingleJobExeWithHttpInfo($request);
    }

    public function showSingleJobExeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/job-executions/{job_execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobExecutionId'] !== null) {
            $pathParams['job_execution_id'] = $localVarParams['jobExecutionId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowSingleJobExeResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowSingleJobExeRequest');
    }

    /**
     * 获取SQL结果
     *
     * 在MRS集群中查询SparkSql和SparkScript两种类型作业的SQL语句运行完成后返回的查询结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSqlResultWithJob($request)
    {
        return $this->showSqlResultWithJobWithHttpInfo($request);
    }

    public function showSqlResultWithJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/job-executions/{job_execution_id}/sql-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobExecutionId'] !== null) {
            $pathParams['job_execution_id'] = $localVarParams['jobExecutionId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowSqlResultWithJobResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowSqlResultWithJobRequest');
    }

    /**
     * 终止作业
     *
     * 在MRS集群中终止指定作业。
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
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/job-executions/{job_execution_id}/kill';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobExecutionId'] !== null) {
            $pathParams['job_execution_id'] = $localVarParams['jobExecutionId'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\StopJobResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\StopJobRequest');
    }

    /**
     * 更新用户（组）与IAM委托的映射关系
     *
     * 更新用户（组）与IAM委托之间的映射关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAgencyMapping($request)
    {
        return $this->updateAgencyMappingWithHttpInfo($request);
    }

    public function updateAgencyMappingWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/agency-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateAgencyMappingResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateAgencyMappingRequest');
    }

    /**
     * 更新弹性伸缩策略
     *
     * 更新弹性伸缩策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAutoScalingPolicy($request)
    {
        return $this->updateAutoScalingPolicyWithHttpInfo($request);
    }

    public function updateAutoScalingPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/autoscaling-policy/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateAutoScalingPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateAutoScalingPolicyRequest');
    }

    /**
     * 修改集群名称
     *
     * 修改集群名称
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterName($request)
    {
        return $this->updateClusterNameWithHttpInfo($request);
    }

    public function updateClusterNameWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/cluster-name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateClusterNameResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateClusterNameRequest');
    }

    /**
     * 集群添加组件
     *
     * 集群添加组件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addComponent($request)
    {
        return $this->addComponentWithHttpInfo($request);
    }

    public function addComponentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/components';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\AddComponentResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\AddComponentRequest');
    }

    /**
     * 扩容集群
     *
     * 对MRS集群进行扩容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function expandCluster($request)
    {
        return $this->expandClusterWithHttpInfo($request);
    }

    public function expandClusterWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/expand';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ExpandClusterResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ExpandClusterRequest');
    }

    /**
     * 缩容集群
     *
     * 对MRS集群进行缩容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function shrinkCluster($request)
    {
        return $this->shrinkClusterWithHttpInfo($request);
    }

    public function shrinkClusterWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/shrink';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShrinkClusterResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShrinkClusterRequest');
    }

    /**
     * 创建数据连接
     *
     * 创建数据连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDataConnector($request)
    {
        return $this->createDataConnectorWithHttpInfo($request);
    }

    public function createDataConnectorWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/data-connectors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateDataConnectorResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\CreateDataConnectorRequest');
    }

    /**
     * 删除数据连接
     *
     * 删除数据连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDataConnector($request)
    {
        return $this->deleteDataConnectorWithHttpInfo($request);
    }

    public function deleteDataConnectorWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/data-connectors/{connector_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectorId'] !== null) {
            $pathParams['connector_id'] = $localVarParams['connectorId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\DeleteDataConnectorResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\DeleteDataConnectorRequest');
    }

    /**
     * 查询数据连接列表
     *
     * 查询数据连接列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataConnector($request)
    {
        return $this->listDataConnectorWithHttpInfo($request);
    }

    public function listDataConnectorWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/data-connectors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectorId'] !== null) {
            $queryParams['connector_id'] = $localVarParams['connectorId'];
        }
        if ($localVarParams['sourceType'] !== null) {
            $queryParams['source_type'] = $localVarParams['sourceType'];
        }
        if ($localVarParams['connectorName'] !== null) {
            $queryParams['connector_name'] = $localVarParams['connectorName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['available'] !== null) {
            $queryParams['available'] = $localVarParams['available'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ListDataConnectorResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ListDataConnectorRequest');
    }

    /**
     * 更新数据连接
     *
     * 更新数据连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDataConnector($request)
    {
        return $this->updateDataConnectorWithHttpInfo($request);
    }

    public function updateDataConnectorWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/data-connectors/{connector_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectorId'] !== null) {
            $pathParams['connector_id'] = $localVarParams['connectorId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateDataConnectorResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\UpdateDataConnectorRequest');
    }

    /**
     * 获取指定目录文件列表
     *
     * 在MRS集群中获取指定目录文件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHdfsFileList($request)
    {
        return $this->showHdfsFileListWithHttpInfo($request);
    }

    public function showHdfsFileListWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowHdfsFileListResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowHdfsFileListRequest');
    }

    /**
     * 取消SQL执行任务
     *
     * 在MRS集群中取消一条SQL的执行任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelSql($request)
    {
        return $this->cancelSqlWithHttpInfo($request);
    }

    public function cancelSqlWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/sql-execution/{sql_id}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['sqlId'] !== null) {
            $pathParams['sql_id'] = $localVarParams['sqlId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\CancelSqlResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\CancelSqlRequest');
    }

    /**
     * 提交SQL语句
     *
     * 在MRS集群中提交并执行一条SQL语句。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeSql($request)
    {
        return $this->executeSqlWithHttpInfo($request);
    }

    public function executeSqlWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/sql-execution';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ExecuteSqlResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ExecuteSqlRequest');
    }

    /**
     * 查询SQL结果
     *
     * 在MRS集群中查询一条SQL的执行结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSqlResult($request)
    {
        return $this->showSqlResultWithHttpInfo($request);
    }

    public function showSqlResultWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/sql-execution/{sql_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['sqlId'] !== null) {
            $pathParams['sql_id'] = $localVarParams['sqlId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowSqlResultResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowSqlResultRequest');
    }

    /**
     * 展示MRS版本列表
     *
     * 展示MRS版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMrsVersionList($request)
    {
        return $this->showMrsVersionListWithHttpInfo($request);
    }

    public function showMrsVersionListWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/metadata/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowMrsVersionListResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V2\Model\ShowMrsVersionListRequest');
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