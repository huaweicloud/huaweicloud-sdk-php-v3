<?php

namespace HuaweiCloud\SDK\Dws\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DwsAsyncClient extends Client
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
        $client = new ClientBuilder(new DwsAsyncClient());
        return $client;
    }

    /**
     * 添加工作负载队列的绑定用户
     *
     * 添加工作负载队列的绑定用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addQueueUserListAsync($request)
    {
        return $this->addQueueUserListAsyncWithHttpInfo($request);
    }
    
    public function addQueueUserListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues/{queue_name}/users/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\AddQueueUserListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\AddQueueUserListRequest',
            $asyncRequest = true);
    }

    /**
     * 设置跨区域备份配置
     *
     * 该接口用于设置跨区域备份配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSnapshotCrossRegionPolicyAsync($request)
    {
        return $this->addSnapshotCrossRegionPolicyAsyncWithHttpInfo($request);
    }
    
    public function addSnapshotCrossRegionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/snapshots/cross-region-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\AddSnapshotCrossRegionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\AddSnapshotCrossRegionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 添加工作负载计划阶段
     *
     * 添加工作负载计划阶段。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addWorkloadPlanStageAsync($request)
    {
        return $this->addWorkloadPlanStageAsyncWithHttpInfo($request);
    }
    
    public function addWorkloadPlanStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/stages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\AddWorkloadPlanStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\AddWorkloadPlanStageRequest',
            $asyncRequest = true);
    }

    /**
     * 添加工作负载队列
     *
     * 添加工作负载队列
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addWorkloadQueueAsync($request)
    {
        return $this->addWorkloadQueueAsyncWithHttpInfo($request);
    }
    
    public function addWorkloadQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\AddWorkloadQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\AddWorkloadQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 集群绑定EIP
     *
     * 集群绑定Eip
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateEipAsync($request)
    {
        return $this->associateEipAsyncWithHttpInfo($request);
    }
    
    public function associateEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/eips/{eip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['eipId'] !== null) {
            $pathParams['eip_id'] = $localVarParams['eipId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\AssociateEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\AssociateEipRequest',
            $asyncRequest = true);
    }

    /**
     * 集群绑定ELB
     *
     * 集群绑定Elb接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateElbAsync($request)
    {
        return $this->associateElbAsyncWithHttpInfo($request);
    }
    
    public function associateElbAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/elbs/{elb_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['elbId'] !== null) {
            $pathParams['elb_id'] = $localVarParams['elbId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\AssociateElbResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\AssociateElbRequest',
            $asyncRequest = true);
    }

    /**
     * 批量增加CN节点
     *
     * 当用户集群创建后，实际需要的CN数量会随着业务需求而发生变化，因此管理CN节点功能的实现使用户可以根据实际需求动态调整集群CN数量。
     * - 增删CN节点过程中不允许执行其他运维操作。
     * - 增删CN节点过程中需要停止业务操作，建议在业务低峰期或业务中断情况下进行操作。
     * - 增删CN节点时发生故障且回滚失败，需要用户登录后台进行处理，处理方案请参见《故障排除》中的“集群使用&gt;增删CN回滚失败”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateClusterCnAsync($request)
    {
        return $this->batchCreateClusterCnAsyncWithHttpInfo($request);
    }
    
    public function batchCreateClusterCnAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/cns/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\BatchCreateClusterCnResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\BatchCreateClusterCnRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加标签
     *
     * 为指定集群批量添加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateResourceTagAsync($request)
    {
        return $this->batchCreateResourceTagAsyncWithHttpInfo($request);
    }
    
    public function batchCreateResourceTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/tags/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\BatchCreateResourceTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\BatchCreateResourceTagRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除CN节点
     *
     * 当用户集群创建后，实际需要的CN数量会随着业务需求而发生变化，因此管理CN节点功能的实现使用户可以根据实际需求动态调整集群CN数量。
     * - 增删CN节点过程中不允许执行其他运维操作。
     * - 增删CN节点过程中需要停止业务操作，建议在业务低峰期或业务中断情况下进行操作。
     * - 增删CN节点时发生故障且回滚失败，需要用户登录后台进行处理，处理方案请参见《故障排除》中的“集群使用&gt;增删CN回滚失败”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteClusterCnAsync($request)
    {
        return $this->batchDeleteClusterCnAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteClusterCnAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/cns/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\BatchDeleteClusterCnResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\BatchDeleteClusterCnRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除标签
     *
     * 为指定集群批量删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteResourceTagAsync($request)
    {
        return $this->batchDeleteResourceTagAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteResourceTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/tags/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\BatchDeleteResourceTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\BatchDeleteResourceTagRequest',
            $asyncRequest = true);
    }

    /**
     * 解除只读
     *
     * 当集群进入只读状态时，无法进行数据库相关操作，用户可以在管理控制台解除集群的只读状态。触发只读状态可能是由于磁盘使用率过高，因此需要对集群数据进行清理或扩容。
     * - 解除只读支持1.7.2及以上版本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelReadonlyClusterAsync($request)
    {
        return $this->cancelReadonlyClusterAsyncWithHttpInfo($request);
    }
    
    public function cancelReadonlyClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/cancel-readonly';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CancelReadonlyClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CancelReadonlyClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 修改集群安全组
     *
     * 该接口用于修改集群安全组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeSecurityGroupAsync($request)
    {
        return $this->changeSecurityGroupAsyncWithHttpInfo($request);
    }
    
    public function changeSecurityGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/security-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ChangeSecurityGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ChangeSecurityGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建集群前检查
     *
     * 创建集群前预检查
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkClusterAsync($request)
    {
        return $this->checkClusterAsyncWithHttpInfo($request);
    }
    
    public function checkClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cluster-precheck';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CheckClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CheckClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 检查容灾名称
     *
     * 该接口用于查询容灾名称是否可用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkDisasterNameAsync($request)
    {
        return $this->checkDisasterNameAsyncWithHttpInfo($request);
    }
    
    public function checkDisasterNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/check-name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['drName'] !== null) {
            $queryParams['dr_name'] = $localVarParams['drName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['standbyRegion'] !== null) {
            $queryParams['standby_region'] = $localVarParams['standbyRegion'];
        }
        if ($localVarParams['standbyProjectId'] !== null) {
            $queryParams['standby_project_id'] = $localVarParams['standbyProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CheckDisasterNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CheckDisasterNameRequest',
            $asyncRequest = true);
    }

    /**
     * 用户恢复表名检测
     *
     * 该接口用于用户恢复表名检测
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkTableRestoreAsync($request)
    {
        return $this->checkTableRestoreAsyncWithHttpInfo($request);
    }
    
    public function checkTableRestoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/snapshots/{snapshot_id}/table-restore-check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CheckTableRestoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CheckTableRestoreRequest',
            $asyncRequest = true);
    }

    /**
     * 物理集群转换到逻辑集群
     *
     * 逻辑集群-物理集群转换到逻辑集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function convertToLogicalClusterAsync($request)
    {
        return $this->convertToLogicalClusterAsyncWithHttpInfo($request);
    }
    
    public function convertToLogicalClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/convert-to-logical-cluster/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ConvertToLogicalClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ConvertToLogicalClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 复制快照
     *
     * 该接口用于复制一个自动快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copySnapshotAsync($request)
    {
        return $this->copySnapshotAsyncWithHttpInfo($request);
    }
    
    public function copySnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/snapshots/{snapshot_id}/linked-copy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CopySnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CopySnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 创建告警订阅
     *
     * 创建告警订阅
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlarmSubAsync($request)
    {
        return $this->createAlarmSubAsyncWithHttpInfo($request);
    }
    
    public function createAlarmSubAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-subs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateAlarmSubResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateAlarmSubRequest',
            $asyncRequest = true);
    }

    /**
     * 创建集群
     *
     * 该接口用于创建集群。
     * 集群必须要运行在VPC之内，创建集群前，您需要先创建VPC，并获取VPC和子网的id。
     * 该接口为异步接口，创建集群需要10～15分钟。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterAsync($request)
    {
        return $this->createClusterAsyncWithHttpInfo($request);
    }
    
    public function createClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 申请域名
     *
     * 为指定集群申请域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterDnsAsync($request)
    {
        return $this->createClusterDnsAsyncWithHttpInfo($request);
    }
    
    public function createClusterDnsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/dns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterDnsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterDnsRequest',
            $asyncRequest = true);
    }

    /**
     * V2创建集群
     *
     * 该接口用于创建集群。
     * 集群必须要运行在VPC之内，创建集群前，您需要先创建VPC，并获取VPC和子网的id。
     * 该接口为异步接口，创建集群需要10～15分钟。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterV2Async($request)
    {
        return $this->createClusterV2AsyncWithHttpInfo($request);
    }
    
    public function createClusterV2AsyncWithHttpInfo($request){
        $collection_formats = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterV2Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterV2Request',
            $asyncRequest = true);
    }

    /**
     * 设置资源管理
     *
     * 设置资源管理。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClusterWorkloadAsync($request)
    {
        return $this->createClusterWorkloadAsyncWithHttpInfo($request);
    }
    
    public function createClusterWorkloadAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterWorkloadResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateClusterWorkloadRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据源
     *
     * 该接口用于创建一个数据源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDataSourceAsync($request)
    {
        return $this->createDataSourceAsyncWithHttpInfo($request);
    }
    
    public function createDataSourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ext-data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateDataSourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateDataSourceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建容灾
     *
     * 该接口用于创建集群间容灾。
     * 集群处于可用状态或者非均衡状态才可进行创建容灾操作。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDisasterRecoveryAsync($request)
    {
        return $this->createDisasterRecoveryAsyncWithHttpInfo($request);
    }
    
    public function createDisasterRecoveryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recoveries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateDisasterRecoveryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateDisasterRecoveryRequest',
            $asyncRequest = true);
    }

    /**
     * 创建订阅事件
     *
     * 添加订阅的事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEventSubAsync($request)
    {
        return $this->createEventSubAsyncWithHttpInfo($request);
    }
    
    public function createEventSubAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/event-subs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateEventSubResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateEventSubRequest',
            $asyncRequest = true);
    }

    /**
     * 创建逻辑集群
     *
     * 逻辑集群-创建逻辑集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogicalClusterAsync($request)
    {
        return $this->createLogicalClusterAsyncWithHttpInfo($request);
    }
    
    public function createLogicalClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateLogicalClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateLogicalClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 添加逻辑集群定时增删计划
     *
     * 此接口用于添加逻辑集群定时增删计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogicalClusterPlanAsync($request)
    {
        return $this->createLogicalClusterPlanAsyncWithHttpInfo($request);
    }
    
    public function createLogicalClusterPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/logical-cluster-plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateLogicalClusterPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateLogicalClusterPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 创建快照
     *
     * 该接口用于为指定集群创建快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSnapshotAsync($request)
    {
        return $this->createSnapshotAsyncWithHttpInfo($request);
    }
    
    public function createSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/snapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 添加快照策略
     *
     * 该接口用于设置快照策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSnapshotPolicyAsync($request)
    {
        return $this->createSnapshotPolicyAsyncWithHttpInfo($request);
    }
    
    public function createSnapshotPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/snapshot-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateSnapshotPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateSnapshotPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 添加工作负载计划
     *
     * 添加工作负载计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkloadPlanAsync($request)
    {
        return $this->createWorkloadPlanAsyncWithHttpInfo($request);
    }
    
    public function createWorkloadPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\CreateWorkloadPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\CreateWorkloadPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 删除告警订阅
     *
     * 删除订阅的告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlarmSubAsync($request)
    {
        return $this->deleteAlarmSubAsyncWithHttpInfo($request);
    }
    
    public function deleteAlarmSubAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-subs/{alarm_sub_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmSubId'] !== null) {
            $pathParams['alarm_sub_id'] = $localVarParams['alarmSubId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteAlarmSubResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteAlarmSubRequest',
            $asyncRequest = true);
    }

    /**
     * 删除集群
     *
     * 此接口用于删除集群。集群删除后将释放此集群的所有资源，包括客户数据。为了安全起见，请在删除集群前为这个集群创建快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterAsync($request)
    {
        return $this->deleteClusterAsyncWithHttpInfo($request);
    }
    
    public function deleteClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 删除集群域名
     *
     * 删除指定集群域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterDnsAsync($request)
    {
        return $this->deleteClusterDnsAsyncWithHttpInfo($request);
    }
    
    public function deleteClusterDnsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/dns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteClusterDnsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteClusterDnsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除节点
     *
     * 此接口用于删除节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterNodesAsync($request)
    {
        return $this->deleteClusterNodesAsyncWithHttpInfo($request);
    }
    
    public function deleteClusterNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/nodes/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteClusterNodesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteClusterNodesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据源
     *
     * 该接口用于删除一个数据源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDataSourceAsync($request)
    {
        return $this->deleteDataSourceAsyncWithHttpInfo($request);
    }
    
    public function deleteDataSourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ext-data-sources/{ext_data_source_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['extDataSourceId'] !== null) {
            $pathParams['ext_data_source_id'] = $localVarParams['extDataSourceId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteDataSourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteDataSourceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除容灾
     *
     * 该接口用于删除容灾操作。
     * 容灾状态为“创建失败”、“未启动”、“启动失败”、“已停止”、“停止失败”和“异常”时可以执行删除容灾操作。
     * 删除后，将无法进行数据同步，且不可恢复，请谨慎操作。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDisasterRecoveryAsync($request)
    {
        return $this->deleteDisasterRecoveryAsyncWithHttpInfo($request);
    }
    
    public function deleteDisasterRecoveryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteDisasterRecoveryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteDisasterRecoveryRequest',
            $asyncRequest = true);
    }

    /**
     * 删除集群V2
     *
     * 此接口用于删除集群。集群删除后将释放此集群的所有资源，包括客户数据。为了安全起见，请在删除集群前为这个集群创建快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDwsClusterAsync($request)
    {
        return $this->deleteDwsClusterAsyncWithHttpInfo($request);
    }
    
    public function deleteDwsClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keepLastManualBackup'] !== null) {
            $queryParams['keep_last_manual_backup'] = $localVarParams['keepLastManualBackup'];
        }
        if ($localVarParams['releaseEipType'] !== null) {
            $queryParams['release_eip_type'] = $localVarParams['releaseEipType'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteDwsClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteDwsClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 删除订阅事件
     *
     * 删除订阅的事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEventSubAsync($request)
    {
        return $this->deleteEventSubAsyncWithHttpInfo($request);
    }
    
    public function deleteEventSubAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/event-subs/{event_sub_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventSubId'] !== null) {
            $pathParams['event_sub_id'] = $localVarParams['eventSubId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteEventSubResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteEventSubRequest',
            $asyncRequest = true);
    }

    /**
     * 删除逻辑集群
     *
     * 此接口用于删除逻辑集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogicalClusterAsync($request)
    {
        return $this->deleteLogicalClusterAsyncWithHttpInfo($request);
    }
    
    public function deleteLogicalClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/{logical_cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['logicalClusterId'] !== null) {
            $pathParams['logical_cluster_id'] = $localVarParams['logicalClusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteLogicalClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteLogicalClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 删除逻辑集群定时增删计划
     *
     * 此接口用于删除逻辑集群定时增删计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogicalClusterPlanAsync($request)
    {
        return $this->deleteLogicalClusterPlanAsyncWithHttpInfo($request);
    }
    
    public function deleteLogicalClusterPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/logical-cluster-plans/{plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteLogicalClusterPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteLogicalClusterPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 删除工作负载队列的绑定用户
     *
     * 删除工作负载队列的绑定用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteQueueUserListAsync($request)
    {
        return $this->deleteQueueUserListAsyncWithHttpInfo($request);
    }
    
    public function deleteQueueUserListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues/{queue_name}/users/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteQueueUserListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteQueueUserListRequest',
            $asyncRequest = true);
    }

    /**
     * 删除快照
     *
     * 该接口用于删除一个指定手动快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSnapshotAsync($request)
    {
        return $this->deleteSnapshotAsyncWithHttpInfo($request);
    }
    
    public function deleteSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/snapshots/{snapshot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 删除跨区域备份配置
     *
     * 该接口用于删除跨区域备份配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSnapshotCrossRegionPolicyAsync($request)
    {
        return $this->deleteSnapshotCrossRegionPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteSnapshotCrossRegionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/snapshots/cross-region-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteSnapshotCrossRegionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteSnapshotCrossRegionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除快照策略
     *
     * 该接口用于删除一个快照策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSnapshotPolicyAsync($request)
    {
        return $this->deleteSnapshotPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteSnapshotPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/snapshot-policies/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteSnapshotPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteSnapshotPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除工作负载计划
     *
     * 删除工作负载计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkloadPlanAsync($request)
    {
        return $this->deleteWorkloadPlanAsyncWithHttpInfo($request);
    }
    
    public function deleteWorkloadPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteWorkloadPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteWorkloadPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 删除工作负载计划阶段
     *
     * 删除工作负载计划删除工作负载计划阶段。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkloadPlanStageAsync($request)
    {
        return $this->deleteWorkloadPlanStageAsyncWithHttpInfo($request);
    }
    
    public function deleteWorkloadPlanStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/stages/{stage_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
        }
        if ($localVarParams['stageId'] !== null) {
            $pathParams['stage_id'] = $localVarParams['stageId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteWorkloadPlanStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteWorkloadPlanStageRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源池
     *
     * 该接口用于删除资源池。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkloadQueueAsync($request)
    {
        return $this->deleteWorkloadQueueAsyncWithHttpInfo($request);
    }
    
    public function deleteWorkloadQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logicalClusterName'] !== null) {
            $queryParams['logical_cluster_name'] = $localVarParams['logicalClusterName'];
        }
        if ($localVarParams['workloadQueueName'] !== null) {
            $queryParams['workload_queue_name'] = $localVarParams['workloadQueueName'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteWorkloadQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DeleteWorkloadQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 停用逻辑集群定时增删计划
     *
     * 停用逻辑集群定时增删计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableLogicalClusterPlanAsync($request)
    {
        return $this->disableLogicalClusterPlanAsyncWithHttpInfo($request);
    }
    
    public function disableLogicalClusterPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/logical-cluster-plans/{plan_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DisableLogicalClusterPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DisableLogicalClusterPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭云服务日志
     *
     * 该接口用于关闭集群LTS云日志服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableLtsLogsAsync($request)
    {
        return $this->disableLtsLogsAsyncWithHttpInfo($request);
    }
    
    public function disableLtsLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/lts-logs/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DisableLtsLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DisableLtsLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 集群解绑EIP
     *
     * 集群解绑Eip
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateEipAsync($request)
    {
        return $this->disassociateEipAsyncWithHttpInfo($request);
    }
    
    public function disassociateEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/eips/{eip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['eipId'] !== null) {
            $pathParams['eip_id'] = $localVarParams['eipId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DisassociateEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DisassociateEipRequest',
            $asyncRequest = true);
    }

    /**
     * 集群解绑ELB
     *
     * 集群解绑Elb接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateElbAsync($request)
    {
        return $this->disassociateElbAsyncWithHttpInfo($request);
    }
    
    public function disassociateElbAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/elbs/{elb_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['elbId'] !== null) {
            $pathParams['elb_id'] = $localVarParams['elbId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\DisassociateElbResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\DisassociateElbRequest',
            $asyncRequest = true);
    }

    /**
     * 切换逻辑集群开关
     *
     * 此接口用于切换逻辑集群开关，仅用于控制逻辑集群相关功能模块是否在页面展示。在集群已经是逻辑集群的场景下，修改该接口无任何作用及影响。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableLogicalClusterAsync($request)
    {
        return $this->enableLogicalClusterAsyncWithHttpInfo($request);
    }
    
    public function enableLogicalClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\EnableLogicalClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\EnableLogicalClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 启用逻辑集群定时增删计划
     *
     * 启用逻辑集群定时增删计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableLogicalClusterPlanAsync($request)
    {
        return $this->enableLogicalClusterPlanAsyncWithHttpInfo($request);
    }
    
    public function enableLogicalClusterPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/logical-cluster-plans/{plan_id}/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\EnableLogicalClusterPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\EnableLogicalClusterPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 开启云服务日志
     *
     * 该接口用于开启集群LTS云日志服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableLtsLogsAsync($request)
    {
        return $this->enableLtsLogsAsyncWithHttpInfo($request);
    }
    
    public function enableLtsLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/lts-logs/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\EnableLtsLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\EnableLtsLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 下发集群升级相关操作
     *
     * 下发集群升级相关操作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeClusterUpgradeActionAsync($request)
    {
        return $this->executeClusterUpgradeActionAsyncWithHttpInfo($request);
    }
    
    public function executeClusterUpgradeActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/upgrade-management/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ExecuteClusterUpgradeActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ExecuteClusterUpgradeActionRequest',
            $asyncRequest = true);
    }

    /**
     * 执行运维用户操作
     *
     * 进行数据库运维账户操作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeDatabaseOmUserActionAsync($request)
    {
        return $this->executeDatabaseOmUserActionAsyncWithHttpInfo($request);
    }
    
    public function executeDatabaseOmUserActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/om-user/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ExecuteDatabaseOmUserActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ExecuteDatabaseOmUserActionRequest',
            $asyncRequest = true);
    }

    /**
     * 下发重分布
     *
     * 该接口用于集群扩容后将老节点数据均匀分布到新扩节点的数据重分布操作，数据“重分布”后将大大提升业务响应速率。
     * 重分布功能DWS 2.0 8.1.1.200及以上集群版本支持。
     * 离线调度重分布模式在8.2.0及以上版本将不再支持。
     * 只有在扩容之后，集群任务信息为“待重分布”状态时才能手动使用“重分布”功能，其他时段该功能不可使用。
     * 在扩容阶段也可以选择重分布模式等高级配置，详情参见设置高级配置。
     * 重分布队列的排序依据表的relpage大小进行，为确保relpage大小正确，建议在重分布之前对需要重分布的表执行analyze操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeRedistributionClusterAsync($request)
    {
        return $this->executeRedistributionClusterAsyncWithHttpInfo($request);
    }
    
    public function executeRedistributionClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/redistribution';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ExecuteRedistributionClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ExecuteRedistributionClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 磁盘扩容
     *
     * 随着客户业务的发展，磁盘空间往往最先出现资源瓶颈，在其他资源尚且充足的情况下，通过磁盘扩容可快速缓解存储资源瓶颈现象，操作过程中无需暂停业务，并且不会造成CPU、内存等资源浪费。
     * - 磁盘扩容功能仅8.1.1.203及以上版本支持，并且创建集群规格需要为云数仓SSD云盘或实时数仓类型。
     * - 按需+折扣套餐包消费模式下，存储扩容后超出折扣套餐包部分将按需收费。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function expandInstanceStorageAsync($request)
    {
        return $this->expandInstanceStorageAsyncWithHttpInfo($request);
    }
    
    public function expandInstanceStorageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/expand-instance-storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ExpandInstanceStorageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ExpandInstanceStorageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警配置
     *
     * 查询告警配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmConfigsAsync($request)
    {
        return $this->listAlarmConfigsAsyncWithHttpInfo($request);
    }
    
    public function listAlarmConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警详情列表
     *
     * 查询告警详情列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmDetailAsync($request)
    {
        return $this->listAlarmDetailAsyncWithHttpInfo($request);
    }
    
    public function listAlarmDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['timeZone'] !== null) {
            $queryParams['time_zone'] = $localVarParams['timeZone'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警统计列表
     *
     * 查询告警统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmStatisticAsync($request)
    {
        return $this->listAlarmStatisticAsyncWithHttpInfo($request);
    }
    
    public function listAlarmStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['timeZone'] !== null) {
            $queryParams['time_zone'] = $localVarParams['timeZone'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警订阅列表
     *
     * 查询订阅告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmSubsAsync($request)
    {
        return $this->listAlarmSubsAsyncWithHttpInfo($request);
    }
    
    public function listAlarmSubsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-subs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmSubsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAlarmSubsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询日志记录
     *
     * 查询审计日志记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuditLogAsync($request)
    {
        return $this->listAuditLogAsyncWithHttpInfo($request);
    }
    
    public function listAuditLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/audit-log-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAuditLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAuditLogRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可用区列表
     *
     * 在创建实例时，需要配置实例所在的可用区ID，可通过该接口查询可用区的ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailabilityZonesAsync($request)
    {
        return $this->listAvailabilityZonesAsyncWithHttpInfo($request);
    }
    
    public function listAvailabilityZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/availability-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAvailabilityZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可用容灾集群列表
     *
     * 该接口用于查询可用的容灾集群列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailableDisasterClustersAsync($request)
    {
        return $this->listAvailableDisasterClustersAsyncWithHttpInfo($request);
    }
    
    public function listAvailableDisasterClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery-clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['primaryClusterId'] !== null) {
            $queryParams['primary_cluster_id'] = $localVarParams['primaryClusterId'];
        }
        if ($localVarParams['primarySpecId'] !== null) {
            $queryParams['primary_spec_id'] = $localVarParams['primarySpecId'];
        }
        if ($localVarParams['primaryClusterDnNum'] !== null) {
            $queryParams['primary_cluster_dn_num'] = $localVarParams['primaryClusterDnNum'];
        }
        if ($localVarParams['standbyRegion'] !== null) {
            $queryParams['standby_region'] = $localVarParams['standbyRegion'];
        }
        if ($localVarParams['standbyProjectId'] !== null) {
            $queryParams['standby_project_id'] = $localVarParams['standbyProjectId'];
        }
        if ($localVarParams['standbyAzCode'] !== null) {
            $queryParams['standby_az_code'] = $localVarParams['standbyAzCode'];
        }
        if ($localVarParams['drType'] !== null) {
            $queryParams['dr_type'] = $localVarParams['drType'];
        }
        if ($localVarParams['datastoreType'] !== null) {
            $queryParams['datastore_type'] = $localVarParams['datastoreType'];
        }
        if ($localVarParams['datastoreVersion'] !== null) {
            $queryParams['datastore_version'] = $localVarParams['datastoreVersion'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListAvailableDisasterClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListAvailableDisasterClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群CN节点
     *
     * 查询集群的CN节点列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterCnAsync($request)
    {
        return $this->listClusterCnAsyncWithHttpInfo($request);
    }
    
    public function listClusterCnAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/cns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterCnResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterCnRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群参数组
     *
     * 查询集群所关联的参数组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterConfigurationsAsync($request)
    {
        return $this->listClusterConfigurationsAsyncWithHttpInfo($request);
    }
    
    public function listClusterConfigurationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterConfigurationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterConfigurationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群参数配置
     *
     * 查询集群所关联的参数组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterConfigurationsParameterAsync($request)
    {
        return $this->listClusterConfigurationsParameterAsyncWithHttpInfo($request);
    }
    
    public function listClusterConfigurationsParameterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/configurations/{configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['configurationId'] !== null) {
            $pathParams['configuration_id'] = $localVarParams['configurationId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterConfigurationsParameterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterConfigurationsParameterRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群详情
     *
     * 该接口用于查询集群详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterDetailsAsync($request)
    {
        return $this->listClusterDetailsAsyncWithHttpInfo($request);
    }
    
    public function listClusterDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询节点列表
     *
     * 查询节点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterNodesAsync($request)
    {
        return $this->listClusterNodesAsyncWithHttpInfo($request);
    }
    
    public function listClusterNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['deleted'] !== null) {
            $queryParams['deleted'] = $localVarParams['deleted'];
        }
        if ($localVarParams['nodeIds'] !== null) {
            $queryParams['node_ids'] = $localVarParams['nodeIds'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['filterBy'] !== null) {
            $queryParams['filter_by'] = $localVarParams['filterBy'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterNodesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterNodesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询合适的缩容数
     *
     * 查询合适的缩容数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterScaleInNumbersAsync($request)
    {
        return $this->listClusterScaleInNumbersAsyncWithHttpInfo($request);
    }
    
    public function listClusterScaleInNumbersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/shrink-numbers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterScaleInNumbersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterScaleInNumbersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群快照列表
     *
     * 该接口用于查询集群快照列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterSnapshotsAsync($request)
    {
        return $this->listClusterSnapshotsAsyncWithHttpInfo($request);
    }
    
    public function listClusterSnapshotsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/snapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterSnapshotsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterSnapshotsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群标签
     *
     * 查询指定集群的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterTagsAsync($request)
    {
        return $this->listClusterTagsAsyncWithHttpInfo($request);
    }
    
    public function listClusterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源管理
     *
     * 查询资管管理开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterWorkloadAsync($request)
    {
        return $this->listClusterWorkloadAsyncWithHttpInfo($request);
    }
    
    public function listClusterWorkloadAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterWorkloadResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClusterWorkloadRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群列表
     *
     * 该接口用于查询并显示集群列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClustersAsync($request)
    {
        return $this->listClustersAsyncWithHttpInfo($request);
    }
    
    public function listClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询参数修改审计记录
     *
     * 查询参数修改审计记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConfigurationsAuditRecordsAsync($request)
    {
        return $this->listConfigurationsAuditRecordsAsyncWithHttpInfo($request);
    }
    
    public function listConfigurationsAuditRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/configurations/audit-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionTime'] !== null) {
            $queryParams['action_time'] = $localVarParams['actionTime'];
        }
        if ($localVarParams['filterBy'] !== null) {
            $queryParams['filter_by'] = $localVarParams['filterBy'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListConfigurationsAuditRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListConfigurationsAuditRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据源
     *
     * 该接口用于查询数据源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataSourceAsync($request)
    {
        return $this->listDataSourceAsyncWithHttpInfo($request);
    }
    
    public function listDataSourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ext-data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListDataSourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListDataSourceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有数据库用户/角色
     *
     * 查询所有数据库用户/角色
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDatabaseUsersAsync($request)
    {
        return $this->listDatabaseUsersAsyncWithHttpInfo($request);
    }
    
    public function listDatabaseUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListDatabaseUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListDatabaseUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容灾列表
     *
     * 该接口用于查询容灾列表。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDisasterRecoverAsync($request)
    {
        return $this->listDisasterRecoverAsyncWithHttpInfo($request);
    }
    
    public function listDisasterRecoverAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recoveries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListDisasterRecoverResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListDisasterRecoverRequest',
            $asyncRequest = true);
    }

    /**
     * 查询专属分布式存储池列表
     *
     * 获取专属分布式存储池列表，只包括用户开通的SSD专属资源池信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDssPoolsAsync($request)
    {
        return $this->listDssPoolsAsyncWithHttpInfo($request);
    }
    
    public function listDssPoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dss-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListDssPoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListDssPoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群可绑定的ELB列表
     *
     * 查询集群可以关联的Elb列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listElbsAsync($request)
    {
        return $this->listElbsAsyncWithHttpInfo($request);
    }
    
    public function listElbsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/elbs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListElbsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListElbsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询事件配置
     *
     * 查询事件配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventSpecsAsync($request)
    {
        return $this->listEventSpecsAsyncWithHttpInfo($request);
    }
    
    public function listEventSpecsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/event-specs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specName'] !== null) {
            $queryParams['spec_name'] = $localVarParams['specName'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['sourceType'] !== null) {
            $queryParams['source_type'] = $localVarParams['sourceType'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListEventSpecsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListEventSpecsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订阅事件
     *
     * 查询订阅的事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventSubsAsync($request)
    {
        return $this->listEventSubsAsyncWithHttpInfo($request);
    }
    
    public function listEventSubsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/event-subs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListEventSubsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListEventSubsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询事件列表
     *
     * 查询事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventsAsync($request)
    {
        return $this->listEventsAsyncWithHttpInfo($request);
    }
    
    public function listEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListEventsRequest',
            $asyncRequest = true);
    }

    /**
     * openApi查询磁盘信息
     *
     * openApi查询磁盘信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostDiskAsync($request)
    {
        return $this->listHostDiskAsyncWithHttpInfo($request);
    }
    
    public function listHostDiskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dms/disk';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $queryParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListHostDiskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListHostDiskRequest',
            $asyncRequest = true);
    }

    /**
     * openapi获取网卡状态
     *
     * openapi获取网卡状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostNetAsync($request)
    {
        return $this->listHostNetAsyncWithHttpInfo($request);
    }
    
    public function listHostNetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dms/net';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $queryParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListHostNetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListHostNetRequest',
            $asyncRequest = true);
    }

    /**
     * openApi查询主机概览
     *
     * openApi查询主机概览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostOverviewAsync($request)
    {
        return $this->listHostOverviewAsyncWithHttpInfo($request);
    }
    
    public function listHostOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dms/host-overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $queryParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListHostOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListHostOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 查询job进度
     *
     * 查询job进度信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobDetailsAsync($request)
    {
        return $this->listJobDetailsAsyncWithHttpInfo($request);
    }
    
    public function listJobDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/job/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListJobDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListJobDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询逻辑集群定时增删计划
     *
     * 此接口用于查询逻辑集群定时增删计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogicalClusterPlansAsync($request)
    {
        return $this->listLogicalClusterPlansAsyncWithHttpInfo($request);
    }
    
    public function listLogicalClusterPlansAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/logical-cluster-plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterPlansResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterPlansRequest',
            $asyncRequest = true);
    }

    /**
     * 查询逻辑集群可用ring环节点信息
     *
     * 查询逻辑集群可用ring环节点信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogicalClusterRingsAsync($request)
    {
        return $this->listLogicalClusterRingsAsyncWithHttpInfo($request);
    }
    
    public function listLogicalClusterRingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/rings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterRingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterRingsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询逻辑集群任务信息
     *
     * 逻辑集群-查询逻辑集群任务信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogicalClusterTasksAsync($request)
    {
        return $this->listLogicalClusterTasksAsyncWithHttpInfo($request);
    }
    
    public function listLogicalClusterTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['logicalClusterName'] !== null) {
            $queryParams['logical_cluster_name'] = $localVarParams['logicalClusterName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询逻辑集群磁盘信息
     *
     * 逻辑集群-查询逻辑集群磁盘信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogicalClusterVolumesAsync($request)
    {
        return $this->listLogicalClusterVolumesAsyncWithHttpInfo($request);
    }
    
    public function listLogicalClusterVolumesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/volumes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterVolumesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClusterVolumesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询逻辑集群列表
     *
     * 逻辑集群-查询逻辑集群列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogicalClustersAsync($request)
    {
        return $this->listLogicalClustersAsyncWithHttpInfo($request);
    }
    
    public function listLogicalClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListLogicalClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 获取LTS日志列表
     *
     * 获取LTS日志列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLtsLogsAsync($request)
    {
        return $this->listLtsLogsAsyncWithHttpInfo($request);
    }
    
    public function listLtsLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/lts-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListLtsLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListLtsLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群使用指标列表
     *
     * 查询集群使用指标列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetricsAsync($request)
    {
        return $this->listMetricsAsyncWithHttpInfo($request);
    }
    
    public function listMetricsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/dms/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListMetricsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListMetricsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定指标相关采集数据
     *
     * 获取指定指标相关采集数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetricsDataAsync($request)
    {
        return $this->listMetricsDataAsyncWithHttpInfo($request);
    }
    
    public function listMetricsDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/dms/metrics/{metric_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['metricName'] !== null) {
            $pathParams['metric_name'] = $localVarParams['metricName'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListMetricsDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListMetricsDataRequest',
            $asyncRequest = true);
    }

    /**
     * openApi查询历史监控数据
     *
     * openApi查询历史监控数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMonitorIndicatorDataAsync($request)
    {
        return $this->listMonitorIndicatorDataAsyncWithHttpInfo($request);
    }
    
    public function listMonitorIndicatorDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dms/metric-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['function'] !== null) {
            $queryParams['function'] = $localVarParams['function'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['indicatorName'] !== null) {
            $queryParams['indicator_name'] = $localVarParams['indicatorName'];
        }
        if ($localVarParams['dim0'] !== null) {
            $queryParams['dim0'] = $localVarParams['dim0'];
        }
        if ($localVarParams['dim1'] !== null) {
            $queryParams['dim1'] = $localVarParams['dim1'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListMonitorIndicatorDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListMonitorIndicatorDataRequest',
            $asyncRequest = true);
    }

    /**
     * openApi查询性能监控指标
     *
     * openApi查询性能监控指标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMonitorIndicatorsAsync($request)
    {
        return $this->listMonitorIndicatorsAsyncWithHttpInfo($request);
    }
    
    public function listMonitorIndicatorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dms/metric-data/indicators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListMonitorIndicatorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListMonitorIndicatorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询节点类型
     *
     * 该接口用于查询所有GaussDB(DWS)服务支持的节点类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNodeTypesAsync($request)
    {
        return $this->listNodeTypesAsyncWithHttpInfo($request);
    }
    
    public function listNodeTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/node-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListNodeTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListNodeTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看计划执行日志
     *
     * 查看计划执行日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlanExecLogsAsync($request)
    {
        return $this->listPlanExecLogsAsyncWithHttpInfo($request);
    }
    
    public function listPlanExecLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListPlanExecLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListPlanExecLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询SQL列表
     *
     * 该接口用于查询实时SQL列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueriesAsync($request)
    {
        return $this->listQueriesAsyncWithHttpInfo($request);
    }
    
    public function listQueriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/dms/queries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListQueriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListQueriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额
     *
     * 查询单租户在GaussDB(DWS)服务下的配额信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotasAsync($request)
    {
        return $this->listQuotasAsyncWithHttpInfo($request);
    }
    
    public function listQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群模式空间信息
     *
     * 查询集群模式空间信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSchemasAsync($request)
    {
        return $this->listSchemasAsyncWithHttpInfo($request);
    }
    
    public function listSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/databases/{database_name}/schemas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['keywords'] !== null) {
            $queryParams['keywords'] = $localVarParams['keywords'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 获取跨区域快照可用region
     *
     * 该接口用于获取跨区域快照可用region
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotCrossRegionAsync($request)
    {
        return $this->listSnapshotCrossRegionAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotCrossRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/snapshots/cross-regions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotCrossRegionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotCrossRegionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有跨区域快照配置
     *
     * 该接口用于查询所有跨区域快照配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotCrossRegionPolicyAsync($request)
    {
        return $this->listSnapshotCrossRegionPolicyAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotCrossRegionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/snapshots/cross-region-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotCrossRegionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotCrossRegionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询快照详情
     *
     * 该接口用于使用快照ID查询快照详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotDetailsAsync($request)
    {
        return $this->listSnapshotDetailsAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/snapshots/{snapshot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询快照策略
     *
     * 查询快照策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotPolicyAsync($request)
    {
        return $this->listSnapshotPolicyAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/snapshot-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 快照统计信息
     *
     * 快照统计信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotStatisticsAsync($request)
    {
        return $this->listSnapshotStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/snapshots/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询快照列表
     *
     * 该接口用于查询快照列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotsAsync($request)
    {
        return $this->listSnapshotsAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/snapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListSnapshotsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源统计信息列表
     *
     * 查询当前可用资源数量，其中包括“可用集群和总集群（个）”、“可用节点和总节点（个）”、“总容量（GB）”。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStatisticsAsync($request)
    {
        return $this->listStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询表倾斜或脏页率信息
     *
     * 该接口用于查询表倾斜或脏页率信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTablesStatisticAsync($request)
    {
        return $this->listTablesStatisticAsyncWithHttpInfo($request);
    }
    
    public function listTablesStatisticAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/dms/tables/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['rateType'] !== null) {
            $queryParams['rate_type'] = $localVarParams['rateType'];
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
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['value'] !== null) {
            $queryParams['value'] = $localVarParams['value'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListTablesStatisticResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListTablesStatisticRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目标签
     *
     * 查询项目标签列表。
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
        $resourcePath = '/v1.0/{project_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群拓扑ring环节点信息
     *
     * 查询集群拓扑ring环节点信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopoRingsAsync($request)
    {
        return $this->listTopoRingsAsyncWithHttpInfo($request);
    }
    
    public function listTopoRingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/topo/rings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListTopoRingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListTopoRingsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群可升级的目标版本
     *
     * 获取集群可升级的目标版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUpdatableVersionAsync($request)
    {
        return $this->listUpdatableVersionAsyncWithHttpInfo($request);
    }
    
    public function listUpdatableVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/upgrade-management/avail-versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListUpdatableVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListUpdatableVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取集群升级记录
     *
     * 通过此api获取当前集群升级记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUpdateRecordAsync($request)
    {
        return $this->listUpdateRecordAsyncWithHttpInfo($request);
    }
    
    public function listUpdateRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/upgrade-management/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListUpdateRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListUpdateRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源管理计划列表
     *
     * 查询集群中所有资源管理计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkloadPlansAsync($request)
    {
        return $this->listWorkloadPlansAsyncWithHttpInfo($request);
    }
    
    public function listWorkloadPlansAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logicalClusterName'] !== null) {
            $queryParams['logical_cluster_name'] = $localVarParams['logicalClusterName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListWorkloadPlansResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListWorkloadPlansRequest',
            $asyncRequest = true);
    }

    /**
     * 查询工作负载队列
     *
     * 查询工作负载队列
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkloadQueueAsync($request)
    {
        return $this->listWorkloadQueueAsyncWithHttpInfo($request);
    }
    
    public function listWorkloadQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logicalClusterName'] !== null) {
            $queryParams['logical_cluster_name'] = $localVarParams['logicalClusterName'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListWorkloadQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListWorkloadQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 获得工作负载队列的绑定用户列表
     *
     * 获得工作负载队列的绑定用户列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkloadQueueUsersAsync($request)
    {
        return $this->listWorkloadQueueUsersAsyncWithHttpInfo($request);
    }
    
    public function listWorkloadQueueUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues/{queue_name}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ListWorkloadQueueUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ListWorkloadQueueUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 停止容灾
     *
     * 该接口用于停止容灾操作。
     * 容灾状态为“运行中”和“停止失败”时可以执行停止容灾操作。
     * 停止后，将无法进行数据同步，请谨慎操作。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pauseDisasterRecoveryAsync($request)
    {
        return $this->pauseDisasterRecoveryAsyncWithHttpInfo($request);
    }
    
    public function pauseDisasterRecoveryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}/pause';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\PauseDisasterRecoveryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\PauseDisasterRecoveryRequest',
            $asyncRequest = true);
    }

    /**
     * 重置密码
     *
     * 此接口用于重置集群管理员密码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetPasswordAsync($request)
    {
        return $this->resetPasswordAsyncWithHttpInfo($request);
    }
    
    public function resetPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/reset-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ResetPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ResetPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 扩容集群调整集群大小
     *
     * 此接口用于扩容集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeClusterAsync($request)
    {
        return $this->resizeClusterAsyncWithHttpInfo($request);
    }
    
    public function resizeClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ResizeClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ResizeClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 从空闲节点扩容
     *
     * 此接口用于从空闲节点扩容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeClusterWithExistedNodesAsync($request)
    {
        return $this->resizeClusterWithExistedNodesAsyncWithHttpInfo($request);
    }
    
    public function resizeClusterWithExistedNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/resize-with-existed-nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ResizeClusterWithExistedNodesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ResizeClusterWithExistedNodesRequest',
            $asyncRequest = true);
    }

    /**
     * 重启集群
     *
     * 此接口用于重启集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartClusterAsync($request)
    {
        return $this->restartClusterAsyncWithHttpInfo($request);
    }
    
    public function restartClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\RestartClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\RestartClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 重启逻辑集群
     *
     * 此接口用于重启逻辑集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartLogicalClusterAsync($request)
    {
        return $this->restartLogicalClusterAsyncWithHttpInfo($request);
    }
    
    public function restartLogicalClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/{logical_cluster_id}/restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['logicalClusterId'] !== null) {
            $pathParams['logical_cluster_id'] = $localVarParams['logicalClusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\RestartLogicalClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\RestartLogicalClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复集群
     *
     * 该接口用于使用快照恢复集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreClusterAsync($request)
    {
        return $this->restoreClusterAsyncWithHttpInfo($request);
    }
    
    public function restoreClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/snapshots/{snapshot_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复容灾
     *
     * 该接口用于主备集群进行异常切换，备集群恢复可用状态后进行的容灾恢复操作。
     * 容灾恢复仅8.1.2及以上集群版本支持。
     * 容灾恢复会删除灾备集群数据与新生产集群重新建立容灾关系。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreDisasterAsync($request)
    {
        return $this->restoreDisasterAsyncWithHttpInfo($request);
    }
    
    public function restoreDisasterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}/recovery';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreDisasterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreDisasterRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复重分布
     *
     * 此接口用于恢复暂停状态下的重分布操作,仅支持DWS2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreRedistributionAsync($request)
    {
        return $this->restoreRedistributionAsyncWithHttpInfo($request);
    }
    
    public function restoreRedistributionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/redistribution/recovery';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreRedistributionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreRedistributionRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复表
     *
     * 该接口用于恢复表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreTableAsync($request)
    {
        return $this->restoreTableAsyncWithHttpInfo($request);
    }
    
    public function restoreTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/snapshots/{snapshot_id}/table-restore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\RestoreTableRequest',
            $asyncRequest = true);
    }

    /**
     * 保存集群描述信息
     *
     * 保存集群描述信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveClusterDescriptionInfoAsync($request)
    {
        return $this->saveClusterDescriptionInfoAsyncWithHttpInfo($request);
    }
    
    public function saveClusterDescriptionInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/description';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\SaveClusterDescriptionInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\SaveClusterDescriptionInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群规格详情
     *
     * 查询集群使用的规格详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterFlavorAsync($request)
    {
        return $this->showClusterFlavorAsyncWithHttpInfo($request);
    }
    
    public function showClusterFlavorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/flavor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowClusterFlavorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowClusterFlavorRequest',
            $asyncRequest = true);
    }

    /**
     * 查询重分布详情
     *
     * 该接口用于查看当前集群的重分布模式、重分布进度、数据表重分布详情等监控信息。
     * 查看重分布详情功能DWS 2.0 8.1.1.200及以上集群版本支持，其中数据表重分布进度详情仅DWS 2.0 8.2.1及以上集群版本支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterRedistributionAsync($request)
    {
        return $this->showClusterRedistributionAsyncWithHttpInfo($request);
    }
    
    public function showClusterRedistributionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/redistribution';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['dbName'] !== null) {
            $queryParams['db_name'] = $localVarParams['dbName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowClusterRedistributionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowClusterRedistributionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询集群列表V2
     *
     * 该接口用于查询并显示集群列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClustersAsync($request)
    {
        return $this->showClustersAsyncWithHttpInfo($request);
    }
    
    public function showClustersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowClustersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowClustersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据库对象权限
     *
     * 查询数据库对象权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDatabaseAuthorityAsync($request)
    {
        return $this->showDatabaseAuthorityAsyncWithHttpInfo($request);
    }
    
    public function showDatabaseAuthorityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/authority';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['database'] !== null) {
            $queryParams['database'] = $localVarParams['database'];
        }
        if ($localVarParams['schema'] !== null) {
            $queryParams['schema'] = $localVarParams['schema'];
        }
        if ($localVarParams['table'] !== null) {
            $queryParams['table'] = $localVarParams['table'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDatabaseAuthorityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDatabaseAuthorityRequest',
            $asyncRequest = true);
    }

    /**
     * 获得集群运维账户状态
     *
     * 获得数据库运维账户状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDatabaseOmUserStatusAsync($request)
    {
        return $this->showDatabaseOmUserStatusAsyncWithHttpInfo($request);
    }
    
    public function showDatabaseOmUserStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/om-user/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDatabaseOmUserStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDatabaseOmUserStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定用户信息
     *
     * 查询指定用户信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDatabaseUserAsync($request)
    {
        return $this->showDatabaseUserAsyncWithHttpInfo($request);
    }
    
    public function showDatabaseUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/users/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDatabaseUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDatabaseUserRequest',
            $asyncRequest = true);
    }

    /**
     * 查询容灾详情
     *
     * 该接口用于查询单个容灾详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDisasterDetailAsync($request)
    {
        return $this->showDisasterDetailAsyncWithHttpInfo($request);
    }
    
    public function showDisasterDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDisasterDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDisasterDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 容灾-查询容灾进度详情
     *
     * 该接口用于查询容灾进度详情信息操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDisasterProgressAsync($request)
    {
        return $this->showDisasterProgressAsyncWithHttpInfo($request);
    }
    
    public function showDisasterProgressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/disaster-recovery/{disaster_recovery_id}/show-progress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDisasterProgressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowDisasterProgressRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个实例
     *
     * 查询单个实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceAsync($request)
    {
        return $this->showInstanceAsyncWithHttpInfo($request);
    }
    
    public function showInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询SQL执行信息
     *
     * 查询SQL执行信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQueryDetailAsync($request)
    {
        return $this->showQueryDetailAsyncWithHttpInfo($request);
    }
    
    public function showQueryDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/dms/queries/{query_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ctime'] !== null) {
            $queryParams['ctime'] = $localVarParams['ctime'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['queryId'] !== null) {
            $pathParams['query_id'] = $localVarParams['queryId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowQueryDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowQueryDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源统计
     *
     * 该接口用于查询资源统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceStatisticsAsync($request)
    {
        return $this->showResourceStatisticsAsyncWithHttpInfo($request);
    }
    
    public function showResourceStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/resource-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowResourceStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowResourceStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询某个工作负载计划详细信息
     *
     * 查询某个工作负载计划详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkloadPlanAsync($request)
    {
        return $this->showWorkloadPlanAsyncWithHttpInfo($request);
    }
    
    public function showWorkloadPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowWorkloadPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowWorkloadPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 查询工作负载计划阶段详细信息
     *
     * 查询工作负载计划阶段详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkloadPlanStageAsync($request)
    {
        return $this->showWorkloadPlanStageAsyncWithHttpInfo($request);
    }
    
    public function showWorkloadPlanStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/stages/{stage_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
        }
        if ($localVarParams['stageId'] !== null) {
            $pathParams['stage_id'] = $localVarParams['stageId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowWorkloadPlanStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowWorkloadPlanStageRequest',
            $asyncRequest = true);
    }

    /**
     * 获得工作负载队列详细信息
     *
     * 获得工作负载队列详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkloadQueueAsync($request)
    {
        return $this->showWorkloadQueueAsyncWithHttpInfo($request);
    }
    
    public function showWorkloadQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues/{queue_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logicalClusterName'] !== null) {
            $queryParams['logical_cluster_name'] = $localVarParams['logicalClusterName'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShowWorkloadQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShowWorkloadQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 集群缩容
     *
     * 该接口用于缩容集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function shrinkClusterAsync($request)
    {
        return $this->shrinkClusterAsyncWithHttpInfo($request);
    }
    
    public function shrinkClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/cluster-shrink';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\ShrinkClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\ShrinkClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 启动集群
     *
     * 集群管理-启动集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startClusterAsync($request)
    {
        return $this->startClusterAsyncWithHttpInfo($request);
    }
    
    public function startClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\StartClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\StartClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 启动容灾
     *
     * 该接口用于启动容灾操作。
     * 容灾状态为“未启动”、“启动失败”和“已停止”时可以执行启动容灾操作。
     * 启动容灾后，生产集群和灾备集群将无法进行恢复、扩容、升级、重启、节点替换、更新密码等操作，此外，灾备集群将无法进行备份操作，请谨慎操作。
     * 当容灾启动后，如果灾备集群容灾正常运行且容灾处于恢复状态中，此状态的集群会计费。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startDisasterRecoveryAsync($request)
    {
        return $this->startDisasterRecoveryAsyncWithHttpInfo($request);
    }
    
    public function startDisasterRecoveryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\StartDisasterRecoveryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\StartDisasterRecoveryRequest',
            $asyncRequest = true);
    }

    /**
     * 启动工作负载计划
     *
     * 启动工作负载计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startWorkloadPlanAsync($request)
    {
        return $this->startWorkloadPlanAsyncWithHttpInfo($request);
    }
    
    public function startWorkloadPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\StartWorkloadPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\StartWorkloadPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 停止集群
     *
     * 集群管理-停止集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopClusterAsync($request)
    {
        return $this->stopClusterAsyncWithHttpInfo($request);
    }
    
    public function stopClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\StopClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\StopClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 暂停重分布
     *
     * 该接口用于暂停运行状态下的重分布操作，重分布暂停状态可设置重分布优先级，修改重分布并发数等操作。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopRedistributionAsync($request)
    {
        return $this->stopRedistributionAsyncWithHttpInfo($request);
    }
    
    public function stopRedistributionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/redistribution/suspend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\StopRedistributionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\StopRedistributionRequest',
            $asyncRequest = true);
    }

    /**
     * 停止工作负载计划
     *
     * 停止工作负载计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopWorkloadPlanAsync($request)
    {
        return $this->stopWorkloadPlanAsyncWithHttpInfo($request);
    }
    
    public function stopWorkloadPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\StopWorkloadPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\StopWorkloadPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 容灾异常切换
     *
     * 该接口用于容灾异常场景下进行主备集群切换操作。
     * “异常切换”按钮用于容灾异常或者生产集群故障情况下主备切换操作。
     * 容灾异常切换仅8.1.2及以上集群版本支持。
     * 异常切换会将灾备集群升为主，若原生产集群故障后存在部分数据未同步到灾备集群，那灾备集群升主后将缺少这些数据，切换时请确认容灾最后同步时间，谨慎操作。
     * 仅支持DWS 2.0集群
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchFailoverDisasterAsync($request)
    {
        return $this->switchFailoverDisasterAsyncWithHttpInfo($request);
    }
    
    public function switchFailoverDisasterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}/failover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchFailoverDisasterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchFailoverDisasterRequest',
            $asyncRequest = true);
    }

    /**
     * 主备恢复
     *
     * 当集群状态为“非均衡”时会出现某些节点主实例增多，从而负载压力较大。这种情况下集群状态是正常的，但整体性能要低于均衡状态。可进行集群主备恢复操作将集群状态切换为“可用“状态。
     * - 集群主备恢复仅8.1.1.202及以上版本支持。
     * - 集群主备恢复将会短暂中断业务，中断时间根据用户自身业务量所决定，建议用户在业务低峰期执行此操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchOverClusterAsync($request)
    {
        return $this->switchOverClusterAsyncWithHttpInfo($request);
    }
    
    public function switchOverClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/switchover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchOverClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchOverClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 切换工作负载计划阶段
     *
     * 切换工作负载计划阶段。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchPlanStageAsync($request)
    {
        return $this->switchPlanStageAsyncWithHttpInfo($request);
    }
    
    public function switchPlanStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/plans/{plan_id}/stage-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchPlanStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchPlanStageRequest',
            $asyncRequest = true);
    }

    /**
     * 灾备切换
     *
     * 该接口用于容灾进行灾备切换操作。
     * “灾备切换”按钮用于在容灾正常情况下主备倒换操作。
     * 容灾状态为“运行中”时可以执行灾备切换操作。
     * 灾备切换需要一定时间，在此期间，原生产集群将可不用。
     * 不同场景下进行灾备切换，RPO（Recovery Point Object，灾难发生后，系统和数据必须恢复到的时间点要求。）说明如下：
     * 生产集群在“可用”的状态下，RPO&#x3D;0。
     * 生产集群在“不可用”的状态下，无法保证RPO&#x3D;0，但数据至少可恢复到生产集群“最近容灾成功时间”。
     * 仅支持DWS 2.0集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchoverDisasterRecoveryAsync($request)
    {
        return $this->switchoverDisasterRecoveryAsyncWithHttpInfo($request);
    }
    
    public function switchoverDisasterRecoveryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}/switchover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchoverDisasterRecoveryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\SwitchoverDisasterRecoveryRequest',
            $asyncRequest = true);
    }

    /**
     * 同步IAM用户到数据库
     *
     * 同步IAM用户到数据库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncIamUsersAsync($request)
    {
        return $this->syncIamUsersAsyncWithHttpInfo($request);
    }
    
    public function syncIamUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/sync-iam-user';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\SyncIamUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\SyncIamUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 更新告警订阅
     *
     * 更新订阅的告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmSubAsync($request)
    {
        return $this->updateAlarmSubAsyncWithHttpInfo($request);
    }
    
    public function updateAlarmSubAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-subs/{alarm_sub_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmSubId'] !== null) {
            $pathParams['alarm_sub_id'] = $localVarParams['alarmSubId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateAlarmSubResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateAlarmSubRequest',
            $asyncRequest = true);
    }

    /**
     * 修改集群域名
     *
     * 为指定集群修改域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterDnsAsync($request)
    {
        return $this->updateClusterDnsAsyncWithHttpInfo($request);
    }
    
    public function updateClusterDnsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/dns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateClusterDnsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateClusterDnsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改集群参数配置
     *
     * 修改集群使用的参数配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateConfigurationAsync($request)
    {
        return $this->updateConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/configurations/{configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['configurationId'] !== null) {
            $pathParams['configuration_id'] = $localVarParams['configurationId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新数据源
     *
     * 该接口用于更新一个数据源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDataSourceAsync($request)
    {
        return $this->updateDataSourceAsyncWithHttpInfo($request);
    }
    
    public function updateDataSourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ext-data-sources/{ext_data_source_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['extDataSourceId'] !== null) {
            $pathParams['ext_data_source_id'] = $localVarParams['extDataSourceId'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDataSourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDataSourceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据库对象权限
     *
     * 修改数据库对象权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDatabaseAuthorityAsync($request)
    {
        return $this->updateDatabaseAuthorityAsyncWithHttpInfo($request);
    }
    
    public function updateDatabaseAuthorityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/authority';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDatabaseAuthorityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDatabaseAuthorityRequest',
            $asyncRequest = true);
    }

    /**
     * 修改指定用户信息
     *
     * 修改指定用户信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDatabaseUserInfoAsync($request)
    {
        return $this->updateDatabaseUserInfoAsyncWithHttpInfo($request);
    }
    
    public function updateDatabaseUserInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/db-manager/users/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDatabaseUserInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDatabaseUserInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 更新容灾配置
     *
     * 该接口用于更新容灾配置操作。
     * 容灾状态为“未启动”或“已停止”时，可以执行容灾配置修改操作。
     * 新的配置在容灾重新启动后生效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDisasterInfoAsync($request)
    {
        return $this->updateDisasterInfoAsyncWithHttpInfo($request);
    }
    
    public function updateDisasterInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/disaster-recovery/{disaster_recovery_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['disasterRecoveryId'] !== null) {
            $pathParams['disaster_recovery_id'] = $localVarParams['disasterRecoveryId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDisasterInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateDisasterInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 更新订阅事件
     *
     * 更新订阅事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEventSubAsync($request)
    {
        return $this->updateEventSubAsyncWithHttpInfo($request);
    }
    
    public function updateEventSubAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/event-subs/{event_sub_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventSubId'] !== null) {
            $pathParams['event_sub_id'] = $localVarParams['eventSubId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateEventSubResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateEventSubRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑逻辑集群
     *
     * 此接口用于编辑修改逻辑集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogicalClusterAsync($request)
    {
        return $this->updateLogicalClusterAsyncWithHttpInfo($request);
    }
    
    public function updateLogicalClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/logical-clusters/{logical_cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['logicalClusterId'] !== null) {
            $pathParams['logical_cluster_id'] = $localVarParams['logicalClusterId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateLogicalClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateLogicalClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑逻辑集群增删计划
     *
     * 此接口用于编辑修改编辑逻辑集群增删计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogicalClusterPlanAsync($request)
    {
        return $this->updateLogicalClusterPlanAsyncWithHttpInfo($request);
    }
    
    public function updateLogicalClusterPlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/clusters/{cluster_id}/logical-cluster-plans/{plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateLogicalClusterPlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateLogicalClusterPlanRequest',
            $asyncRequest = true);
    }

    /**
     * 修改运维时间窗
     *
     * 您可以根据业务需求，设置可维护时间段。建议将可维护时间段设置在业务低峰期，避免业务在维护过程中异常中断。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMaintenanceWindowAsync($request)
    {
        return $this->updateMaintenanceWindowAsyncWithHttpInfo($request);
    }
    
    public function updateMaintenanceWindowAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/maintenance-window';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateMaintenanceWindowResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateMaintenanceWindowRequest',
            $asyncRequest = true);
    }

    /**
     * 更新工作负载队列资源配置信息
     *
     * 更新工作负载队列资源配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateQueueResourcesAsync($request)
    {
        return $this->updateQueueResourcesAsyncWithHttpInfo($request);
    }
    
    public function updateQueueResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/workload/queues/{queue_name}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateQueueResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateQueueResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 更新模式空间限额
     *
     * 更新模式空间限额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSchemasAsync($request)
    {
        return $this->updateSchemasAsyncWithHttpInfo($request);
    }
    
    public function updateSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/clusters/{cluster_id}/databases/{database_name}/schemas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dws\V2\Model\UpdateSchemasRequest',
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