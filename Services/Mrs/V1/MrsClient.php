<?php

namespace HuaweiCloud\SDK\Mrs\V1;

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
     * 批量添加集群标签
     *
     * 为指定集群批量添加标签。
     * 
     * 一个集群上最多有10个标签。
     * 
     * 此接口为幂等接口：
     * 
     * - 创建时，同一个集群不允许重复key，如果数据库存在就覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateClusterTags($request)
    {
        return $this->batchCreateClusterTagsWithHttpInfo($request);
    }

    public function batchCreateClusterTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\BatchCreateClusterTagsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\BatchCreateClusterTagsRequest');
    }

    /**
     * 批量删除集群标签
     *
     * 为指定集群批量删除标签。
     * 
     * 一个集群上最多有10个标签。
     * 
     * 此接口为幂等接口：
     * 
     * -
     * 删除时，如果删除的标签不存在，默认处理成功，删除时不对标签字符集范围做校验。Key长度36个unicode字符，value为43个unicode字符。删除时tags结构体不能缺失，key不能为空，或者空字符串。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteClusterTags($request)
    {
        return $this->batchDeleteClusterTagsWithHttpInfo($request);
    }

    public function batchDeleteClusterTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\BatchDeleteClusterTagsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\BatchDeleteClusterTagsRequest');
    }

    /**
     * 新增作业并执行（废弃）
     *
     * 如需使用作业管理接口请参考apiv2接口使用，本接口后续不再进行维护。
     * 在MRS集群中新增一个作业，并执行作业。该接口不兼容Sahara。
     * 集群ID可参考[查询集群列表](https://support.huaweicloud.com/api-mrs/ListClusters.html)接口获取。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAndExecuteJob($request)
    {
        return $this->createAndExecuteJobWithHttpInfo($request);
    }

    public function createAndExecuteJobWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/jobs/submit-job';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateAndExecuteJobResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateAndExecuteJobRequest');
    }

    /**
     * 创建集群并执行作业
     *
     * 创建一个MRS集群，并在集群中提交一个作业。该接口不兼容Sahara。
     * 支持同一时间并发创建10个集群。
     * 使用接口前，您需要先获取下的资源信息。
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
        $resourcePath = '/v1.1/{project_id}/run-job-flow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateClusterResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateClusterRequest');
    }

    /**
     * 给指定集群添加标签
     *
     * 为特定的集群添加一个tag。
     * 一个集群上最多有10个标签，此接口为幂等接口。添加标签时，如果创建的标签已经存在（key相同），则覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterTag($request)
    {
        return $this->createClusterTagWithHttpInfo($request);
    }

    public function createClusterTagWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateClusterTagResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateClusterTagRequest');
    }

    /**
     * 配置弹性伸缩规则
     *
     * 对弹性伸缩规则进行编辑。
     * 
     * 在创建集群并执行作业接口中也可以创建弹性伸缩规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingPolicy($request)
    {
        return $this->createScalingPolicyWithHttpInfo($request);
    }

    public function createScalingPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/autoscaling-policy/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateScalingPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\CreateScalingPolicyRequest');
    }

    /**
     * 删除集群
     *
     * 数据完成处理分析后或者集群运行异常无法提供服务时可删除集群服务。该接口兼容Sahara。
     * 
     * 处于如下状态的集群不允许删除：
     * - scaling-out：扩容中
     * - scaling-in：缩容中
     * - starting：启动中
     * - terminating：删除中
     * - terminated：已删除
     * - failed：失败
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCluster($request)
    {
        return $this->deleteClusterWithHttpInfo($request);
    }

    public function deleteClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\DeleteClusterResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\DeleteClusterRequest');
    }

    /**
     * 删除指定集群的标签
     *
     * 删除特定集群的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterTag($request)
    {
        return $this->deleteClusterTagWithHttpInfo($request);
    }

    public function deleteClusterTagWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\DeleteClusterTagResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\DeleteClusterTagRequest');
    }

    /**
     * 删除作业执行对象（废弃）
     *
     * 如需使用作业管理接口请参考apiv2接口使用，本接口后续不再进行维护。
     * 删除指定的作业执行对象。该接口兼容Sahara。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteJobExecution($request)
    {
        return $this->deleteJobExecutionWithHttpInfo($request);
    }

    public function deleteJobExecutionWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/job-executions/{job_execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\DeleteJobExecutionResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\DeleteJobExecutionRequest');
    }

    /**
     * 查询所有标签
     *
     * 查询租户在指定Region下的所有标签集合 。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllTags($request)
    {
        return $this->listAllTagsWithHttpInfo($request);
    }

    public function listAllTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListAllTagsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListAllTagsRequest');
    }

    /**
     * 查询指定集群的标签
     *
     * 查询指定集群的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterTags($request)
    {
        return $this->listClusterTagsWithHttpInfo($request);
    }

    public function listClusterTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListClusterTagsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListClusterTagsRequest');
    }

    /**
     * 查询集群列表
     *
     * 查看用户创建的集群列表信息。该接口不兼容Sahara。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusters($request)
    {
        return $this->listClustersWithHttpInfo($request);
    }

    public function listClustersWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/cluster_infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['pageSize'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['currentPage'] !== null) {
            $queryParams['currentPage'] = $localVarParams['currentPage'];
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['clusterName'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['clusterState'] !== null) {
            $queryParams['clusterState'] = $localVarParams['clusterState'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterpriseProjectId'] = $localVarParams['enterpriseProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListClustersResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListClustersRequest');
    }

    /**
     * 查询特定标签的集群列表
     *
     * 使用标签过滤集群。
     * 
     * 集群默认按照创建时间倒序，集群tag也按照创建时间倒序。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClustersByTags($request)
    {
        return $this->listClustersByTagsWithHttpInfo($request);
    }

    public function listClustersByTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json-1', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListClustersByTagsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListClustersByTagsRequest');
    }

    /**
     * 查询作业exe对象列表（废弃）
     *
     * 如需使用作业管理接口请参考apiv2接口使用，本接口后续不再进行维护。
     * 查询所有作业的exe对象列表。该接口不兼容Sahara。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExecuteJob($request)
    {
        return $this->listExecuteJobWithHttpInfo($request);
    }

    public function listExecuteJobWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/job-exes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['currentPage'] !== null) {
            $queryParams['current_page'] = $localVarParams['currentPage'];
        }
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListExecuteJobResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListExecuteJobRequest');
    }

    /**
     * 查询主机列表
     *
     * 该接口用于查询输入集群的主机列表详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHosts($request)
    {
        return $this->listHostsWithHttpInfo($request);
    }

    public function listHostsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/clusters/{cluster_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['pageSize'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['currentPage'] !== null) {
            $queryParams['currentPage'] = $localVarParams['currentPage'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListHostsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListHostsRequest');
    }

    /**
     * 查询集群详情
     *
     * 查看指定集群的详细信息。该接口不兼容Sahara。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterDetails($request)
    {
        return $this->showClusterDetailsWithHttpInfo($request);
    }

    public function showClusterDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/cluster_infos/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ShowClusterDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ShowClusterDetailsRequest');
    }

    /**
     * 查询作业exe对象详情（废弃）
     *
     * 如需使用作业管理接口请参考apiv2接口使用，本接口后续不再进行维护。
     * 查询指定作业的exe对象详细信息。该接口不兼容Sahara。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobExes($request)
    {
        return $this->showJobExesWithHttpInfo($request);
    }

    public function showJobExesWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/job-exes/{job_exe_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobExeId'] !== null) {
            $pathParams['job_exe_id'] = $localVarParams['jobExeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ShowJobExesResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ShowJobExesRequest');
    }

    /**
     * 调整集群节点
     *
     * 创建集群后，扩容/缩容集群Core节点或者Task节点。MRS集群创建成功后不支持调整Master节点数量，即不支持扩缩容Master节点。该接口不兼容Sahara。
     * 处于running状态的集群才允许扩容/缩容，其他状态则不允许扩容/缩容。 集群状态和集群ID可参考[查询集群列表](https://support.huaweicloud.com/api-mrs/ListClusters.html)接口获取。 本章节的接口只支持流式集群、分析集群和混合集群，不支持自定义集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterScaling($request)
    {
        return $this->updateClusterScalingWithHttpInfo($request);
    }

    public function updateClusterScalingWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/cluster_infos/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\UpdateClusterScalingResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\UpdateClusterScalingRequest');
    }

    /**
     * 查询可用区信息
     *
     * 在创建集群时，需要配置实例所在的可用区ID，可通过该接口查询可用区的ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailableZones($request)
    {
        return $this->listAvailableZonesWithHttpInfo($request);
    }

    public function listAvailableZonesWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{region_id}/available-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['regionId'] !== null) {
            $pathParams['region_id'] = $localVarParams['regionId'];
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
            $responseType='\HuaweiCloud\SDK\Mrs\V1\Model\ListAvailableZonesResponse',
            $requestType='\HuaweiCloud\SDK\Mrs\V1\Model\ListAvailableZonesRequest');
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