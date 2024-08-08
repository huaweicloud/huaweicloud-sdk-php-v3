<?php

namespace HuaweiCloud\SDK\Dli\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class DliAsyncClient extends Client
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
       $client = new ClientBuilder(new DliAsyncClient());
       return $client;
    }

    /**
     * 关联队列到弹性资源池
     *
     * 关联队列到弹性资源池
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateQueueToElasticResourcePoolAsync($request)
    {
        return $this->associateQueueToElasticResourcePoolAsyncWithHttpInfo($request);
    }
    
    public function associateQueueToElasticResourcePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools/{elastic_resource_pool_name}/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['elasticResourcePoolName'] !== null) {
            $pathParams['elastic_resource_pool_name'] = $localVarParams['elasticResourcePoolName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\AssociateQueueToElasticResourcePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\AssociateQueueToElasticResourcePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定队列
     *
     * 该API用于在已创建的增强型跨源中绑定队列。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateQueueToEnhancedConnectionAsync($request)
    {
        return $this->associateQueueToEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function associateQueueToEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}/associate-queue';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\AssociateQueueToEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\AssociateQueueToEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除队列定时扩缩容计划
     *
     * 该API用于批量删除队列定时扩缩容计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteQueuePlansAsync($request)
    {
        return $this->batchDeleteQueuePlansAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteQueuePlansAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/queues/{queue_name}/plans/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\BatchDeleteQueuePlansResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\BatchDeleteQueuePlansRequest',
            $asyncRequest = true);
    }

    /**
     * 创建跨源认证
     *
     * 该API用于创建跨源认证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAuthInfoAsync($request)
    {
        return $this->createAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function createAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/auth-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建地址连通性请求
     *
     * 创建地址连通性请求API接口，往指定集群发送地址连通性测试请求，并将测试地址插入表内
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConnectivityTaskAsync($request)
    {
        return $this->createConnectivityTaskAsyncWithHttpInfo($request);
    }
    
    public function createConnectivityTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}/connection-test';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateConnectivityTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateConnectivityTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建经典型跨源连接
     *
     * 该API用于创建与其他服务的经典型跨源连接。
     * 说明：
     * 如果需要了解Console界面的使用方法，可参考经典型跨源连接。
     * 系统default队列不支持创建跨源连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDatasourceConnectionAsync($request)
    {
        return $this->createDatasourceConnectionAsyncWithHttpInfo($request);
    }
    
    public function createDatasourceConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource-connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateDatasourceConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateDatasourceConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建DLI委托
     *
     * 创建DLI委托
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDliAgencyAsync($request)
    {
        return $this->createDliAgencyAsyncWithHttpInfo($request);
    }
    
    public function createDliAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/agency';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateDliAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateDliAgencyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建弹性资源池
     *
     * 创建弹性资源池
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createElasticResourcePoolAsync($request)
    {
        return $this->createElasticResourcePoolAsyncWithHttpInfo($request);
    }
    
    public function createElasticResourcePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateElasticResourcePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateElasticResourcePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 创建增强型跨源连接
     *
     * 该API用于创建与其他服务的增强型跨源连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnhancedConnectionAsync($request)
    {
        return $this->createEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function createEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建路由
     *
     * 该API用于创建跨源需要的路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnhancedConnectionRoutesAsync($request)
    {
        return $this->createEnhancedConnectionRoutesAsyncWithHttpInfo($request);
    }
    
    public function createEnhancedConnectionRoutesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateEnhancedConnectionRoutesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateEnhancedConnectionRoutesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建DLI全局变量
     *
     * 创建全局变量。全局变量用于替换SQL作业中的敏感数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGlobalVariableAsync($request)
    {
        return $this->createGlobalVariableAsyncWithHttpInfo($request);
    }
    
    public function createGlobalVariableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateGlobalVariableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateGlobalVariableRequest',
            $asyncRequest = true);
    }

    /**
     * 创建跨源认证
     *
     * 该API用于创建跨源认证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createJobAuthInfoAsync($request)
    {
        return $this->createJobAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function createJobAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datasource/auth-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateJobAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateJobAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建队列
     *
     * 该API用于创建队列，该队列将会绑定用户指定的计算资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createQueueAsync($request)
    {
        return $this->createQueueAsyncWithHttpInfo($request);
    }
    
    public function createQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 创建队列定时扩缩容计划
     *
     * 创建队列定时扩缩容计划接口，对指定的队列创建定时规格变更计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createQueuePlanAsync($request)
    {
        return $this->createQueuePlanAsyncWithHttpInfo($request);
    }
    
    public function createQueuePlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/queues/{queue_name}/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateQueuePlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateQueuePlanRequest',
            $asyncRequest = true);
    }

    /**
     * 新增队列属性
     *
     * 该接口用于增加队列属性, 一次可增加多个属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createQueuePropertyAsync($request)
    {
        return $this->createQueuePropertyAsyncWithHttpInfo($request);
    }
    
    public function createQueuePropertyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/queues/{queue_name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateQueuePropertyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateQueuePropertyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建路由
     *
     * 该API用于创建跨源需要的路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRouteToEnhancedConnectionAsync($request)
    {
        return $this->createRouteToEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function createRouteToEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datasource/enhanced-connections/{connection_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateRouteToEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateRouteToEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除跨源认证
     *
     * 该API用于删除跨源认证信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAuthInfoAsync($request)
    {
        return $this->deleteAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function deleteAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/auth-infos/{auth_info_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authInfoName'] !== null) {
            $pathParams['auth_info_name'] = $localVarParams['authInfoName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 删除经典型跨源连接
     *
     * 该API用于删除已创建的经典型跨源连接。
     * 说明：
     * 创建中的连接，无法删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDatasourceConnectionAsync($request)
    {
        return $this->deleteDatasourceConnectionAsyncWithHttpInfo($request);
    }
    
    public function deleteDatasourceConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource-connection/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteDatasourceConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteDatasourceConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除弹性资源池
     *
     * 删除弹性资源池
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteElasticResourcePoolAsync($request)
    {
        return $this->deleteElasticResourcePoolAsyncWithHttpInfo($request);
    }
    
    public function deleteElasticResourcePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools/{elastic_resource_pool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['elasticResourcePoolName'] !== null) {
            $pathParams['elastic_resource_pool_name'] = $localVarParams['elasticResourcePoolName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteElasticResourcePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteElasticResourcePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 删除增强型跨源连接
     *
     * 该API用于删除已创建的增强型跨源连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnhancedConnectionAsync($request)
    {
        return $this->deleteEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function deleteEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除路由
     *
     * 该API用于删除跨源需要的路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnhancedConnectionRoutesAsync($request)
    {
        return $this->deleteEnhancedConnectionRoutesAsyncWithHttpInfo($request);
    }
    
    public function deleteEnhancedConnectionRoutesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}/routes/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteEnhancedConnectionRoutesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteEnhancedConnectionRoutesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除DLI全局变量
     *
     * 删除全局变量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGlobalVariableAsync($request)
    {
        return $this->deleteGlobalVariableAsyncWithHttpInfo($request);
    }
    
    public function deleteGlobalVariableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/variables/{var_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['varName'] !== null) {
            $pathParams['var_name'] = $localVarParams['varName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteGlobalVariableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteGlobalVariableRequest',
            $asyncRequest = true);
    }

    /**
     * 删除跨源认证
     *
     * 该API用于删除跨源认证信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteJobAuthInfoAsync($request)
    {
        return $this->deleteJobAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function deleteJobAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datasource/auth-infos/{auth_info_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authInfoName'] !== null) {
            $pathParams['auth_info_name'] = $localVarParams['authInfoName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteJobAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteJobAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 删除组内资源包
     *
     * 该API用于删除某个project某个分组下的资源包
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteJobResourceAsync($request)
    {
        return $this->deleteJobResourceAsyncWithHttpInfo($request);
    }
    
    public function deleteJobResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources/{resource_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['group'] !== null) {
            $queryParams['group'] = $localVarParams['group'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $pathParams['resource_name'] = $localVarParams['resourceName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteJobResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteJobResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除队列
     *
     * 该API用于删除指定队列。
     * 说明：
     * 若指定队列正在执行任务，则不允许删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteQueueAsync($request)
    {
        return $this->deleteQueueAsyncWithHttpInfo($request);
    }
    
    public function deleteQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 单个删除队列定时扩缩容计划
     *
     * 该API用于删除指定ID的队列定时扩缩容计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteQueuePlanAsync($request)
    {
        return $this->deleteQueuePlanAsyncWithHttpInfo($request);
    }
    
    public function deleteQueuePlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/queues/{queue_name}/plans/{plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteQueuePlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteQueuePlanRequest',
            $asyncRequest = true);
    }

    /**
     * 删除队列的属性
     *
     * 该接口用于删除队列的属性，一次可删除多个属性值。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteQueuePropertyAsync($request)
    {
        return $this->deleteQueuePropertyAsyncWithHttpInfo($request);
    }
    
    public function deleteQueuePropertyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/queues/{queue_name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteQueuePropertyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteQueuePropertyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除路由
     *
     * 该API用于删除跨源需要的路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRouteFromEnhancedConnectionAsync($request)
    {
        return $this->deleteRouteFromEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function deleteRouteFromEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datasource/enhanced-connections/{connection_id}/routes/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteRouteFromEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteRouteFromEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑队列
     *
     * 该API用于在增强型跨源中解绑已绑定的队列。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateQueueFromEnhancedConnectionAsync($request)
    {
        return $this->disassociateQueueFromEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function disassociateQueueFromEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}/disassociate-queue';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DisassociateQueueFromEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DisassociateQueueFromEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取跨源认证列表
     *
     * 该API用于查询跨源认证信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuthInfoAsync($request)
    {
        return $this->listAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function listAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/auth-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authInfoName'] !== null) {
            $queryParams['auth_info_name'] = $localVarParams['authInfoName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查看赋权对象的用者权限信息
     *
     * 获取对象赋权用户的权限信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuthorizationPrivilegesAsync($request)
    {
        return $this->listAuthorizationPrivilegesAsyncWithHttpInfo($request);
    }
    
    public function listAuthorizationPrivilegesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/authorization/privileges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['object'] !== null) {
            $queryParams['object'] = $localVarParams['object'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListAuthorizationPrivilegesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListAuthorizationPrivilegesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目下所有catalog信息
     *
     * 该API获取指定项目下所有catalog信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCatalogsAsync($request)
    {
        return $this->listCatalogsAsyncWithHttpInfo($request);
    }
    
    public function listCatalogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListCatalogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListCatalogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查看数据库的使用者
     *
     * 该API用于查询可以使用的指定队列的所有用户名称。
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
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListDatabaseUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListDatabaseUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询经典型跨源连接列表
     *
     * 该API用于查询该用户已创建的经典型跨源连接列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDatasourceConnectionsAsync($request)
    {
        return $this->listDatasourceConnectionsAsyncWithHttpInfo($request);
    }
    
    public function listDatasourceConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource-connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListDatasourceConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListDatasourceConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性资源池所属队列
     *
     * 查询弹性资源池所属队列
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listElasticResourcePoolQueuesAsync($request)
    {
        return $this->listElasticResourcePoolQueuesAsyncWithHttpInfo($request);
    }
    
    public function listElasticResourcePoolQueuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools/{elastic_resource_pool_name}/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['queueName'] !== null) {
            $queryParams['queue_name'] = $localVarParams['queueName'];
        }
        if ($localVarParams['elasticResourcePoolName'] !== null) {
            $pathParams['elastic_resource_pool_name'] = $localVarParams['elasticResourcePoolName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListElasticResourcePoolQueuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListElasticResourcePoolQueuesRequest',
            $asyncRequest = true);
    }

    /**
     * 弹性资源池扩缩容历史记录
     *
     * 查询当前弹性资源池扩缩容历史记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listElasticResourcePoolScaleRecordsAsync($request)
    {
        return $this->listElasticResourcePoolScaleRecordsAsyncWithHttpInfo($request);
    }
    
    public function listElasticResourcePoolScaleRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools/{elastic_resource_pool_name}/scale-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['elasticResourcePoolName'] !== null) {
            $pathParams['elastic_resource_pool_name'] = $localVarParams['elasticResourcePoolName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListElasticResourcePoolScaleRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListElasticResourcePoolScaleRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有弹性资源池
     *
     * 查询所有弹性资源池
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listElasticResourcePoolsAsync($request)
    {
        return $this->listElasticResourcePoolsAsyncWithHttpInfo($request);
    }
    
    public function listElasticResourcePoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListElasticResourcePoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListElasticResourcePoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询增强型跨源连接列表
     *
     * 该API用于查询该用户已创建的增强型跨源连接列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnhancedConnectionsAsync($request)
    {
        return $this->listEnhancedConnectionsAsyncWithHttpInfo($request);
    }
    
    public function listEnhancedConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListEnhancedConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListEnhancedConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询DLI全局变量列表
     *
     * 查询全局变量列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalVariablesAsync($request)
    {
        return $this->listGlobalVariablesAsyncWithHttpInfo($request);
    }
    
    public function listGlobalVariablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListGlobalVariablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListGlobalVariablesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询增强型跨源授权信息
     *
     * 该API用于查询跨源认证信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobAuthInfosAsync($request)
    {
        return $this->listJobAuthInfosAsyncWithHttpInfo($request);
    }
    
    public function listJobAuthInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datasource/auth-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authInfoName'] !== null) {
            $queryParams['auth_info_name'] = $localVarParams['authInfoName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListJobAuthInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListJobAuthInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查看分组资源列表
     *
     * 该API用于查看某个project下的所有资源，其中包含Group。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobResourcesAsync($request)
    {
        return $this->listJobResourcesAsyncWithHttpInfo($request);
    }
    
    public function listJobResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['kind'] !== null) {
            $queryParams['kind'] = $localVarParams['kind'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListJobResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListJobResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看队列定时扩缩容计划
     *
     * 查看队列定时扩缩容计划接口，列出指定队列定时规格变更计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueuePlansAsync($request)
    {
        return $this->listQueuePlansAsyncWithHttpInfo($request);
    }
    
    public function listQueuePlansAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/queues/{queue_name}/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueuePlansResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueuePlansRequest',
            $asyncRequest = true);
    }

    /**
     * 获取队列属性
     *
     * 获取队列配置的属性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueuePropertiesAsync($request)
    {
        return $this->listQueuePropertiesAsyncWithHttpInfo($request);
    }
    
    public function listQueuePropertiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/queues/{queue_name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueuePropertiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueuePropertiesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看队列的使用者
     *
     * 该API用于查询可以使用的指定队列的所有用户名称。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueueUsersAsync($request)
    {
        return $this->listQueueUsersAsyncWithHttpInfo($request);
    }
    
    public function listQueueUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueueUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueueUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有队列
     *
     * 该API用于列出该project下所有的队列。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueuesAsync($request)
    {
        return $this->listQueuesAsyncWithHttpInfo($request);
    }
    
    public function listQueuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueType'] !== null) {
            $queryParams['queue_type'] = $localVarParams['queueType'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['withChargeInfo'] !== null) {
            $queryParams['with_charge_info'] = $localVarParams['withChargeInfo'];
        }
        if ($localVarParams['withPriv'] !== null) {
            $queryParams['with_priv'] = $localVarParams['withPriv'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListQueuesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看表的用户权限
     *
     * 该API用于查询指定用户在表上的权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTablePrivilegesAsync($request)
    {
        return $this->listTablePrivilegesAsyncWithHttpInfo($request);
    }
    
    public function listTablePrivilegesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}/users/{user_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['userName'] !== null) {
            $pathParams['user_name'] = $localVarParams['userName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListTablePrivilegesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListTablePrivilegesRequest',
            $asyncRequest = true);
    }

    /**
     * 查看表的使用者
     *
     * 该API用于查看有权访问指定表或表的列的所有用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTableUsersAsync($request)
    {
        return $this->listTableUsersAsyncWithHttpInfo($request);
    }
    
    public function listTableUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListTableUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListTableUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 队列赋权
     *
     * 该API用于与其他用户共享指定的队列，可以给用户赋使用指定的队列的权限或者收回使用权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerAuthorizedQueueAsync($request)
    {
        return $this->registerAuthorizedQueueAsyncWithHttpInfo($request);
    }
    
    public function registerAuthorizedQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/user-authorization';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RegisterAuthorizedQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RegisterAuthorizedQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 数据赋权（用户、项目）
     *
     * 该API用于将DLI资源权限赋给、回收、更新指定的其他用户或项目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runAuthorizationActionAsync($request)
    {
        return $this->runAuthorizationActionAsyncWithHttpInfo($request);
    }
    
    public function runAuthorizationActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/authorization';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RunAuthorizationActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RunAuthorizationActionRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定/解绑catalog映射信息
     *
     * 该API创建DLI绑定/解绑到lakeformation等服务的元数据目录（CATALOG）相关信息。
     * 包含DLI侧CATALOG名称、外部CATALOG名称和类型，类型为预留字段，当前只支持lakeformation。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runCatalogActionAsync($request)
    {
        return $this->runCatalogActionAsyncWithHttpInfo($request);
    }
    
    public function runCatalogActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/catalogs/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RunCatalogActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RunCatalogActionRequest',
            $asyncRequest = true);
    }

    /**
     * 数据赋权（用户）
     *
     * 该API用于将数据库或数据表的数据权限赋给指定的其他用户。
     * 说明：
     * 被赋权用户所在用户组的所属区域需具有Tenant Guest权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runDataAuthorizationActionAsync($request)
    {
        return $this->runDataAuthorizationActionAsyncWithHttpInfo($request);
    }
    
    public function runDataAuthorizationActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/user-authorization';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RunDataAuthorizationActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RunDataAuthorizationActionRequest',
            $asyncRequest = true);
    }

    /**
     * 重启/扩容/缩容队列
     *
     * 该功能用于重新启动队列、扩容队列、缩容队列。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runQueueActionAsync($request)
    {
        return $this->runQueueActionAsyncWithHttpInfo($request);
    }
    
    public function runQueueActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RunQueueActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RunQueueActionRequest',
            $asyncRequest = true);
    }

    /**
     * 描述catalog信息
     *
     * 该API用于描述DLI catalog详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCatalogAsync($request)
    {
        return $this->showCatalogAsyncWithHttpInfo($request);
    }
    
    public function showCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/catalogs/{catalog_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['catalogName'] !== null) {
            $pathParams['catalog_name'] = $localVarParams['catalogName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowCatalogRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定地址连通性测试详情
     *
     * 该API用于在连通性测试提交后查询连通性结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConnectivityTaskAsync($request)
    {
        return $this->showConnectivityTaskAsyncWithHttpInfo($request);
    }
    
    public function showConnectivityTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}/connection-test/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowConnectivityTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowConnectivityTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询经典型跨源连接
     *
     * 该API用于查询该用户指定的已创建的经典型跨源连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDatasourceConnectionAsync($request)
    {
        return $this->showDatasourceConnectionAsyncWithHttpInfo($request);
    }
    
    public function showDatasourceConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource-connection/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowDatasourceConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowDatasourceConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取dli委托信息
     *
     * 获取dli委托信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDliAgencyAsync($request)
    {
        return $this->showDliAgencyAsyncWithHttpInfo($request);
    }
    
    public function showDliAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/agency';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowDliAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowDliAgencyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询增强型跨源连接
     *
     * 该API用于查询该用户指定的已创建的增强型跨源连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnhancedConnectionAsync($request)
    {
        return $this->showEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function showEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询增强型跨源授权信息
     *
     * 该API用于查询增强型跨源连接授权的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnhancedConnectionPrivilegeAsync($request)
    {
        return $this->showEnhancedConnectionPrivilegeAsyncWithHttpInfo($request);
    }
    
    public function showEnhancedConnectionPrivilegeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}/privileges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowEnhancedConnectionPrivilegeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowEnhancedConnectionPrivilegeRequest',
            $asyncRequest = true);
    }

    /**
     * 查看组内资源包
     *
     * 该API用于查看某个project某个分组下的具体资源信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobResourceAsync($request)
    {
        return $this->showJobResourceAsyncWithHttpInfo($request);
    }
    
    public function showJobResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources/{resource_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['group'] !== null) {
            $queryParams['group'] = $localVarParams['group'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowJobResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowJobResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询队列详情
     *
     * 该API用于列出该project下指定的队列详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQueueAsync($request)
    {
        return $this->showQueueAsyncWithHttpInfo($request);
    }
    
    public function showQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额
     *
     * 该API用于获取用户配额信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotaAsync($request)
    {
        return $this->showQuotaAsyncWithHttpInfo($request);
    }
    
    public function showQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 更新跨源认证
     *
     * 该API用于更新跨源认证信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAuthInfoAsync($request)
    {
        return $this->updateAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function updateAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/auth-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 修改弹性资源池信息
     *
     * 修改弹性资源池信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateElasticResourcePoolAsync($request)
    {
        return $this->updateElasticResourcePoolAsyncWithHttpInfo($request);
    }
    
    public function updateElasticResourcePoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools/{elastic_resource_pool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['elasticResourcePoolName'] !== null) {
            $pathParams['elastic_resource_pool_name'] = $localVarParams['elasticResourcePoolName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolRequest',
            $asyncRequest = true);
    }

    /**
     * 修改弹性资源池关联的队列优先级
     *
     * 设置弹性资源池指定队列的扩缩容策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateElasticResourcePoolQueueAsync($request)
    {
        return $this->updateElasticResourcePoolQueueAsyncWithHttpInfo($request);
    }
    
    public function updateElasticResourcePoolQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/elastic-resource-pools/{elastic_resource_pool_name}/queues/{queue_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['elasticResourcePoolName'] !== null) {
            $pathParams['elastic_resource_pool_name'] = $localVarParams['elasticResourcePoolName'];
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 修改增强型跨源主机信息
     *
     * 该API用于在跨源中修改数据源主机信息，仅支持全量覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEnhancedConnectionAsync($request)
    {
        return $this->updateEnhancedConnectionAsyncWithHttpInfo($request);
    }
    
    public function updateEnhancedConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/datasource/enhanced-connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateEnhancedConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateEnhancedConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 修改DLI全局变量
     *
     * 修改全局变量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGlobalVariableAsync($request)
    {
        return $this->updateGlobalVariableAsyncWithHttpInfo($request);
    }
    
    public function updateGlobalVariableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/variables/{var_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['varName'] !== null) {
            $pathParams['var_name'] = $localVarParams['varName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateGlobalVariableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateGlobalVariableRequest',
            $asyncRequest = true);
    }

    /**
     * 更新跨源认证
     *
     * 该API用于更新跨源认证信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateJobAuthInfoAsync($request)
    {
        return $this->updateJobAuthInfoAsyncWithHttpInfo($request);
    }
    
    public function updateJobAuthInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/datasource/auth-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateJobAuthInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateJobAuthInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 修改组或者资源包拥有者
     *
     * 用于修改程序包的owner。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateJobResourceOwnerAsync($request)
    {
        return $this->updateJobResourceOwnerAsyncWithHttpInfo($request);
    }
    
    public function updateJobResourceOwnerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources/owner';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateJobResourceOwnerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateJobResourceOwnerRequest',
            $asyncRequest = true);
    }

    /**
     * 修改队列网段
     *
     * 该功能用于修改包年包月队列网段。
     * 说明：
     * 如果待修改网段的队列中有正在提交或正在运行的作业，或者改队列已经绑定了增强型跨源，将不支持修改网段操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateQueueCidrAsync($request)
    {
        return $this->updateQueueCidrAsyncWithHttpInfo($request);
    }
    
    public function updateQueueCidrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/queues/{queue_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateQueueCidrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateQueueCidrRequest',
            $asyncRequest = true);
    }

    /**
     * 修改队列定时扩缩容计划
     *
     * 该API用于修改指定ID的队列定时扩缩容计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateQueuePlanAsync($request)
    {
        return $this->updateQueuePlanAsyncWithHttpInfo($request);
    }
    
    public function updateQueuePlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/queues/{queue_name}/plans/{plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['planId'] !== null) {
            $pathParams['plan_id'] = $localVarParams['planId'];
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateQueuePlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateQueuePlanRequest',
            $asyncRequest = true);
    }

    /**
     * 更新队列属性
     *
     * 更新队列属性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateQueuePropertyAsync($request)
    {
        return $this->updateQueuePropertyAsyncWithHttpInfo($request);
    }
    
    public function updateQueuePropertyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/queues/{queue_name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $pathParams['queue_name'] = $localVarParams['queueName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateQueuePropertyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateQueuePropertyRequest',
            $asyncRequest = true);
    }

    /**
     * 上传file类型分组资源
     *
     * 该API用于在project下上传file类型模块。
     * 说明： 上传同名file模块时，新模块将会覆盖旧模块。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadFileJobResourcesAsync($request)
    {
        return $this->uploadFileJobResourcesAsyncWithHttpInfo($request);
    }
    
    public function uploadFileJobResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UploadFileJobResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UploadFileJobResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 上传jar类型分组资源
     *
     * 该API用于在project下上传jar类型分组资源。
     * 说明：上传同名资源模块时，新模块将会覆盖旧模块。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadJarJobResourcesAsync($request)
    {
        return $this->uploadJarJobResourcesAsyncWithHttpInfo($request);
    }
    
    public function uploadJarJobResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources/jars';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UploadJarJobResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UploadJarJobResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 上传分组资源
     *
     * 该API用于上传分组资源到某个project下。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadJobResourcesAsync($request)
    {
        return $this->uploadJobResourcesAsyncWithHttpInfo($request);
    }
    
    public function uploadJobResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UploadJobResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UploadJobResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 上传pyfile类型分组资源
     *
     * 该API用于在project下的上传pyfile类型模块。
     * 说明： 上传同名pyfile类型模块时，新模块将会覆盖旧模块。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadPythonFileJobResourcesAsync($request)
    {
        return $this->uploadPythonFileJobResourcesAsyncWithHttpInfo($request);
    }
    
    public function uploadPythonFileJobResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/resources/pyfiles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UploadPythonFileJobResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UploadPythonFileJobResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除Flink作业
     *
     * 批量删除任何状态的作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteFlinkJobsAsync($request)
    {
        return $this->batchDeleteFlinkJobsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteFlinkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\BatchDeleteFlinkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\BatchDeleteFlinkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量运行Flink作业
     *
     * 触发批量运行Flink作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRunFlinkJobsAsync($request)
    {
        return $this->batchRunFlinkJobsAsyncWithHttpInfo($request);
    }
    
    public function batchRunFlinkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/run';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\BatchRunFlinkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\BatchRunFlinkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量停止Flink作业
     *
     * 批量停止正在运行的Flink作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStopFlinkJobsAsync($request)
    {
        return $this->batchStopFlinkJobsAsyncWithHttpInfo($request);
    }
    
    public function batchStopFlinkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\BatchStopFlinkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\BatchStopFlinkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 新建Flink Jar作业
     *
     * 用户自定义作业目前支持jar格式，运行在独享集群中。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFlinkJarJobAsync($request)
    {
        return $this->createFlinkJarJobAsyncWithHttpInfo($request);
    }
    
    public function createFlinkJarJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/flink-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkJarJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkJarJobRequest',
            $asyncRequest = true);
    }

    /**
     * 新建Flink SQL作业
     *
     * 通过POST方式，提交流式SQL作业，请求体为JSON格式。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFlinkSqlJobAsync($request)
    {
        return $this->createFlinkSqlJobAsyncWithHttpInfo($request);
    }
    
    public function createFlinkSqlJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/sql-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkSqlJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkSqlJobRequest',
            $asyncRequest = true);
    }

    /**
     * 生成flink SQL作业的静态流图
     *
     * 生成flink SQL作业的静态流图
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFlinkSqlJobGraphAsync($request)
    {
        return $this->createFlinkSqlJobGraphAsyncWithHttpInfo($request);
    }
    
    public function createFlinkSqlJobGraphAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/streaming/jobs/{job_id}/gen-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkSqlJobGraphResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkSqlJobGraphRequest',
            $asyncRequest = true);
    }

    /**
     * 新建Flink作业模板
     *
     * 在DLI服务中新建一个Flink作业模板，最多100个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFlinkSqlJobTemplateAsync($request)
    {
        return $this->createFlinkSqlJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function createFlinkSqlJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/job-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkSqlJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateFlinkSqlJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建IEF消息通道
     *
     * 该API用于创建IEF消息通道
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIefMessageChannelAsync($request)
    {
        return $this->createIefMessageChannelAsyncWithHttpInfo($request);
    }
    
    public function createIefMessageChannelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/edgesrv/message-channel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateIefMessageChannelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateIefMessageChannelRequest',
            $asyncRequest = true);
    }

    /**
     * IEF系统事件上报
     *
     * 该API用于处理IEF系统事件上报
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIefSystemEventsAsync($request)
    {
        return $this->createIefSystemEventsAsyncWithHttpInfo($request);
    }
    
    public function createIefSystemEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/edgesrv/system-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateIefSystemEventsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateIefSystemEventsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除作业
     *
     * 删除任何状态的作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFlinkJobAsync($request)
    {
        return $this->deleteFlinkJobAsyncWithHttpInfo($request);
    }
    
    public function deleteFlinkJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteFlinkJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteFlinkJobRequest',
            $asyncRequest = true);
    }

    /**
     * 删除Flink作业模板
     *
     * 删除一个Flink作业模板，即使当前模板正在被作业使用，也允许删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFlinkSqlJobTemplateAsync($request)
    {
        return $this->deleteFlinkSqlJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteFlinkSqlJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/job-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteFlinkSqlJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteFlinkSqlJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 触发Flink作业保存点
     *
     * 触发Flink作业保存点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeFlinkJobSavepointAsync($request)
    {
        return $this->executeFlinkJobSavepointAsyncWithHttpInfo($request);
    }
    
    public function executeFlinkJobSavepointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/{job_id}/savepoint';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ExecuteFlinkJobSavepointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ExecuteFlinkJobSavepointRequest',
            $asyncRequest = true);
    }

    /**
     * flink作业导出
     *
     * 通过POST方式，导出flink作业，请求体为JSON格式。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportFlinkJobsAsync($request)
    {
        return $this->exportFlinkJobsAsyncWithHttpInfo($request);
    }
    
    public function exportFlinkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ExportFlinkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ExportFlinkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 导入Flink作业保存点
     *
     * 导入Flink作业保存点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importFlinkJobSavepointAsync($request)
    {
        return $this->importFlinkJobSavepointAsyncWithHttpInfo($request);
    }
    
    public function importFlinkJobSavepointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/{job_id}/import-savepoint';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ImportFlinkJobSavepointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ImportFlinkJobSavepointRequest',
            $asyncRequest = true);
    }

    /**
     * flink作业导入
     *
     * 通过POST方式，导入flink作业，请求体为JSON格式。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importFlinkJobsAsync($request)
    {
        return $this->importFlinkJobsAsyncWithHttpInfo($request);
    }
    
    public function importFlinkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ImportFlinkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ImportFlinkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Flink作业列表
     *
     * 查询当前用户的作业列表，可以根据作业ID作为ID，查询大于ID或小于ID的限定条数的作业，默认查询全部状态的作业，也可以设定运行中或其他状态条件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlinkJobsAsync($request)
    {
        return $this->listFlinkJobsAsyncWithHttpInfo($request);
    }
    
    public function listFlinkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['queueName'] !== null) {
            $queryParams['queue_name'] = $localVarParams['queueName'];
        }
        if ($localVarParams['rootJobId'] !== null) {
            $queryParams['root_job_id'] = $localVarParams['rootJobId'];
        }
        if ($localVarParams['showDetail'] !== null) {
            $queryParams['show_detail'] = $localVarParams['showDetail'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['sysEnterpriseProjectName'] !== null) {
            $queryParams['sys_enterprise_project_name'] = $localVarParams['sysEnterpriseProjectName'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListFlinkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListFlinkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Flink作业模板列表
     *
     * 查询Flink作业模板列表。当前只支持查询用户自定义模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlinkSqlJobTemplatesAsync($request)
    {
        return $this->listFlinkSqlJobTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listFlinkSqlJobTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/job-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListFlinkSqlJobTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListFlinkSqlJobTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * OBS授权给DLI服务
     *
     * 用户主动授权OBS桶的操作权限给DLI服务, 用于保存用户作业的checkpoint、作业的运行日志等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerBucketAsync($request)
    {
        return $this->registerBucketAsyncWithHttpInfo($request);
    }
    
    public function registerBucketAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/dli/obs-authorize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RegisterBucketResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RegisterBucketRequest',
            $asyncRequest = true);
    }

    /**
     * 边缘Flink作业Action状态回调
     *
     * 该API用于处理IEF Flink作业action回调信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runIefJobActionCallBackAsync($request)
    {
        return $this->runIefJobActionCallBackAsyncWithHttpInfo($request);
    }
    
    public function runIefJobActionCallBackAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/edgesrv/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\RunIefJobActionCallBackResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\RunIefJobActionCallBackRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Flink作业详情
     *
     * 查看一个Flink作业的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlinkJobAsync($request)
    {
        return $this->showFlinkJobAsyncWithHttpInfo($request);
    }
    
    public function showFlinkJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowFlinkJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowFlinkJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Flink作业执行计划
     *
     * 查询Flink作业执行计划。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlinkJobExecutionGraphAsync($request)
    {
        return $this->showFlinkJobExecutionGraphAsyncWithHttpInfo($request);
    }
    
    public function showFlinkJobExecutionGraphAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/{job_id}/execute-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowFlinkJobExecutionGraphResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowFlinkJobExecutionGraphRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Flink作业监控信息
     *
     * 查询Flink作业监控信息, 支持同时查询多个Flink作业的监控信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlinkMetricAsync($request)
    {
        return $this->showFlinkMetricAsyncWithHttpInfo($request);
    }
    
    public function showFlinkMetricAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/jobs/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowFlinkMetricResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowFlinkMetricRequest',
            $asyncRequest = true);
    }

    /**
     * 更新Flink Jar作业
     *
     * 更新用户自定义作业，目前支持jar格式，运行在独享集群中。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlinkJarJobAsync($request)
    {
        return $this->updateFlinkJarJobAsyncWithHttpInfo($request);
    }
    
    public function updateFlinkJarJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/flink-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkJarJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkJarJobRequest',
            $asyncRequest = true);
    }

    /**
     * 边缘Flink作业状态信息上报
     *
     * 该API用于处理边缘Flink作业状态上报信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlinkJobStatusReportAsync($request)
    {
        return $this->updateFlinkJobStatusReportAsyncWithHttpInfo($request);
    }
    
    public function updateFlinkJobStatusReportAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/edgesrv/job-report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkJobStatusReportResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkJobStatusReportRequest',
            $asyncRequest = true);
    }

    /**
     * 更新Flink SQL作业
     *
     * Stream SQL的语法扩展了Apache Flink SQL。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlinkSqlJobAsync($request)
    {
        return $this->updateFlinkSqlJobAsyncWithHttpInfo($request);
    }
    
    public function updateFlinkSqlJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/sql-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkSqlJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkSqlJobRequest',
            $asyncRequest = true);
    }

    /**
     * 更新Flink作业模板
     *
     * 对DLI服务中已有的Flink作业模板进行更新。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlinkSqlJobTemplateAsync($request)
    {
        return $this->updateFlinkSqlJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateFlinkSqlJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/streaming/job-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkSqlJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateFlinkSqlJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 取消批处理作业
     *
     * 该API用于取消批处理作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelSparkJobAsync($request)
    {
        return $this->cancelSparkJobAsyncWithHttpInfo($request);
    }
    
    public function cancelSparkJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batches/{batch_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['batchId'] !== null) {
            $pathParams['batch_id'] = $localVarParams['batchId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CancelSparkJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CancelSparkJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建批处理作业
     *
     * 该API用于在某个队列上创建作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSparkJobAsync($request)
    {
        return $this->createSparkJobAsyncWithHttpInfo($request);
    }
    
    public function createSparkJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSparkJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSparkJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建作业模板
     *
     * 该API用于创建作业模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSparkJobTemplateAsync($request)
    {
        return $this->createSparkJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function createSparkJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSparkJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSparkJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业模板列表
     *
     * 该API用于查询作业模板列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSparkJobTemplatesAsync($request)
    {
        return $this->listSparkJobTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listSparkJobTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['currentPage'] !== null) {
            $queryParams['current_page'] = $localVarParams['currentPage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListSparkJobTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListSparkJobTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批处理作业列表
     *
     * 该API用于查询Project下某队列批处理作业的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSparkJobsAsync($request)
    {
        return $this->listSparkJobsAsyncWithHttpInfo($request);
    }
    
    public function listSparkJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterName'] !== null) {
            $queryParams['cluster_name'] = $localVarParams['clusterName'];
        }
        if ($localVarParams['end'] !== null) {
            $queryParams['end'] = $localVarParams['end'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['jobName'] !== null) {
            $queryParams['job_name'] = $localVarParams['jobName'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['queueName'] !== null) {
            $queryParams['queue_name'] = $localVarParams['queueName'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListSparkJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListSparkJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批处理作业详情
     *
     * 该API用于根据批处理作业的id查询作业详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSparkJobAsync($request)
    {
        return $this->showSparkJobAsyncWithHttpInfo($request);
    }
    
    public function showSparkJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batches/{batch_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['batchId'] !== null) {
            $pathParams['batch_id'] = $localVarParams['batchId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批处理作业日志
     *
     * 该API用于查询批处理作业的后台日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSparkJobLogAsync($request)
    {
        return $this->showSparkJobLogAsyncWithHttpInfo($request);
    }
    
    public function showSparkJobLogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batches/{batch_id}/log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['index'] !== null) {
            $queryParams['index'] = $localVarParams['index'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['batchId'] !== null) {
            $pathParams['batch_id'] = $localVarParams['batchId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobLogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobLogRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批处理作业状态
     *
     * 该API用于查询批处理作业的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSparkJobStatusAsync($request)
    {
        return $this->showSparkJobStatusAsyncWithHttpInfo($request);
    }
    
    public function showSparkJobStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.0/{project_id}/batches/{batch_id}/state';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['batchId'] !== null) {
            $pathParams['batch_id'] = $localVarParams['batchId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 获取作业模板
     *
     * 该API用于获取作业模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSparkJobTemplateAsync($request)
    {
        return $this->showSparkJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function showSparkJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSparkJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 修改作业模板
     *
     * 该API用于修改作业模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSparkJobTemplateAsync($request)
    {
        return $this->updateSparkJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateSparkJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateSparkJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateSparkJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除SQL模板
     *
     * 该API用于批量删除SQL模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSqlJobTemplatesAsync($request)
    {
        return $this->batchDeleteSqlJobTemplatesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSqlJobTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/sqls-deletion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\BatchDeleteSqlJobTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\BatchDeleteSqlJobTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 取消作业
     *
     * 该API用于取消已经提交的作业，若作业已经执行结束或失败则无法取消。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelSqlJobAsync($request)
    {
        return $this->cancelSqlJobAsyncWithHttpInfo($request);
    }
    
    public function cancelSqlJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CancelSqlJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CancelSqlJobRequest',
            $asyncRequest = true);
    }

    /**
     * 检查SQL语法
     *
     * 该API用于检查SQL语法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkSqlAsync($request)
    {
        return $this->checkSqlAsyncWithHttpInfo($request);
    }
    
    public function checkSqlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/check-sql';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CheckSqlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CheckSqlRequest',
            $asyncRequest = true);
    }

    /**
     * 提交SQL作业
     *
     * 该API用于通过执行SQL语句的方式向队列提交作业。
     * 
     * 作业包含以下类型：DDL、DCL、IMPORT、QUERY和INSERT。其中，IMPORT与导入数据的功能一致，区别仅在于实现方式不同。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSqlJobAsync($request)
    {
        return $this->createSqlJobAsyncWithHttpInfo($request);
    }
    
    public function createSqlJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/submit-job';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSqlJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSqlJobRequest',
            $asyncRequest = true);
    }

    /**
     * 存储指定SQL语句
     *
     * 该API用于存储指定的SQL语句，后续可以重复使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSqlJobTemplateAsync($request)
    {
        return $this->createSqlJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function createSqlJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/sqls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSqlJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateSqlJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 导出查询结果
     *
     * 该API用于将SQL语句的查询结果导出到OBS对象存储中，只支持导出“QUERY”类型作业的查询结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportSqlJobResultAsync($request)
    {
        return $this->exportSqlJobResultAsyncWithHttpInfo($request);
    }
    
    public function exportSqlJobResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/{job_id}/export-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ExportSqlJobResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ExportSqlJobResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查看所有SQL模板
     *
     * 该API用查看用户保存的所有SQL模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSqlJobTemplatesAsync($request)
    {
        return $this->listSqlJobTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listSqlJobTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/sqls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListSqlJobTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListSqlJobTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有作业
     *
     * 该API用于查询当前工程下面的所有作业的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSqlJobsAsync($request)
    {
        return $this->listSqlJobsAsyncWithHttpInfo($request);
    }
    
    public function listSqlJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['currentPage'] !== null) {
            $queryParams['current_page'] = $localVarParams['currentPage'];
        }
        if ($localVarParams['dbName'] !== null) {
            $queryParams['db_name'] = $localVarParams['dbName'];
        }
        if ($localVarParams['end'] !== null) {
            $queryParams['end'] = $localVarParams['end'];
        }
        if ($localVarParams['engineType'] !== null) {
            $queryParams['engine_type'] = $localVarParams['engineType'];
        }
        if ($localVarParams['jobStatus'] !== null) {
            $queryParams['job_status'] = $localVarParams['jobStatus'];
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['queueName'] !== null) {
            $queryParams['queue_name'] = $localVarParams['queueName'];
        }
        if ($localVarParams['sqlPattern'] !== null) {
            $queryParams['sql_pattern'] = $localVarParams['sqlPattern'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['tableName'] !== null) {
            $queryParams['table_name'] = $localVarParams['tableName'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListSqlJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListSqlJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 预览SQL作业查询结果
     *
     * 该API用于在执行SQL查询语句的作业完成后，查看该作业执行的结果。目前仅支持查看“QUERY”类型作业的执行结果。
     * 该API只能查看前1000条的结果记录，若要查看全部的结果记录，需要先导出查询结果再进行查看。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function previewSqlJobResultAsync($request)
    {
        return $this->previewSqlJobResultAsyncWithHttpInfo($request);
    }
    
    public function previewSqlJobResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/{job_id}/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queueName'] !== null) {
            $queryParams['queue_name'] = $localVarParams['queueName'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\PreviewSqlJobResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\PreviewSqlJobResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业详细信息
     *
     * 该API用于查询作业的详细信息，如作业的databasename、tablename、file size和export mode等信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSqlJobDetailAsync($request)
    {
        return $this->showSqlJobDetailAsyncWithHttpInfo($request);
    }
    
    public function showSqlJobDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/{job_id}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSqlJobDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSqlJobDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业执行进度信息
     *
     * 该API用于获取作业执行进度信息，如果作业正在执行，可以获取到子作业的信息，如果作业刚开始或者已经结束，不可以获取到子作业信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSqlJobProgressAsync($request)
    {
        return $this->showSqlJobProgressAsyncWithHttpInfo($request);
    }
    
    public function showSqlJobProgressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/jobs/{job_id}/progress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSqlJobProgressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSqlJobProgressRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业状态
     *
     * 该API用于在作业提交后查询作业状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSqlJobStatusAsync($request)
    {
        return $this->showSqlJobStatusAsyncWithHttpInfo($request);
    }
    
    public function showSqlJobStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/{job_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSqlJobStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowSqlJobStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 更新SQL模板
     *
     * 该API用于更新SQL模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSqlJobTemplateAsync($request)
    {
        return $this->updateSqlJobTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateSqlJobTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/sqls/{sql_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sqlId'] !== null) {
            $pathParams['sql_id'] = $localVarParams['sqlId'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateSqlJobTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateSqlJobTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数据库
     *
     * 该API用于新增数据库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDatabaseAsync($request)
    {
        return $this->createDatabaseAsyncWithHttpInfo($request);
    }
    
    public function createDatabaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateDatabaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateDatabaseRequest',
            $asyncRequest = true);
    }

    /**
     * 创建表
     *
     * 该API用于创建新的表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTableAsync($request)
    {
        return $this->createTableAsyncWithHttpInfo($request);
    }
    
    public function createTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\CreateTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\CreateTableRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据库
     *
     * 该API用于删除空数据库，若待删除的数据库中存在表，则需先删除其中的所有表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDatabaseAsync($request)
    {
        return $this->deleteDatabaseAsyncWithHttpInfo($request);
    }
    
    public function deleteDatabaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['async'] !== null) {
            $queryParams['async'] = $localVarParams['async'];
        }
        if ($localVarParams['cascade'] !== null) {
            $queryParams['cascade'] = $localVarParams['cascade'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteDatabaseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteDatabaseRequest',
            $asyncRequest = true);
    }

    /**
     * 删除表
     *
     * 该API用于删除指定的表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTableAsync($request)
    {
        return $this->deleteTableAsyncWithHttpInfo($request);
    }
    
    public function deleteTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['async'] !== null) {
            $queryParams['async'] = $localVarParams['async'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\DeleteTableRequest',
            $asyncRequest = true);
    }

    /**
     * 导出表数据
     *
     * 该API用于将SQL语句的查询结果导出到OBS对象存储中，只支持导出“QUERY”类型作业的查询结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportTableAsync($request)
    {
        return $this->exportTableAsyncWithHttpInfo($request);
    }
    
    public function exportTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/export-table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ExportTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ExportTableRequest',
            $asyncRequest = true);
    }

    /**
     * 导入数据
     *
     * 该API用于将数据从文件导入DLI或OBS表，目前仅支持将OBS上的数据导入DLI或OBS中。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importTableAsync($request)
    {
        return $this->importTableAsyncWithHttpInfo($request);
    }
    
    public function importTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/jobs/import-table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ImportTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ImportTableRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有数据库
     *
     * 该API用于查询出所有的数据库信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDatabasesAsync($request)
    {
        return $this->listDatabasesAsyncWithHttpInfo($request);
    }
    
    public function listDatabasesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['withPriv'] !== null) {
            $queryParams['with_priv'] = $localVarParams['withPriv'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListDatabasesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListDatabasesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取分区信息列表
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartitionsAsync($request)
    {
        return $this->listPartitionsAsyncWithHttpInfo($request);
    }
    
    public function listPartitionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}/partitions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListPartitionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListPartitionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有SQL样例模板
     *
     * 该API用于查询所有SQL样例模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSqlSampleTemplatesAsync($request)
    {
        return $this->listSqlSampleTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listSqlSampleTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/sqls/sample';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListSqlSampleTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListSqlSampleTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有表
     *
     * 该API用于查询指定数据库下符合过滤条件的或所有的表信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTablesAsync($request)
    {
        return $this->listTablesAsyncWithHttpInfo($request);
    }
    
    public function listTablesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['currentPage'] !== null) {
            $queryParams['current_page'] = $localVarParams['currentPage'];
        }
        if ($localVarParams['keyword'] !== null) {
            $queryParams['keyword'] = $localVarParams['keyword'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['tableType'] !== null) {
            $queryParams['table_type'] = $localVarParams['tableType'];
        }
        if ($localVarParams['withDetail'] !== null) {
            $queryParams['with_detail'] = $localVarParams['withDetail'];
        }
        if ($localVarParams['withPriv'] !== null) {
            $queryParams['with_priv'] = $localVarParams['withPriv'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ListTablesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ListTablesRequest',
            $asyncRequest = true);
    }

    /**
     * 预览表内容
     *
     * 该API用于用于预览表中前10行的内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function previewTableAsync($request)
    {
        return $this->previewTableAsyncWithHttpInfo($request);
    }
    
    public function previewTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['mode'] !== null) {
            $queryParams['mode'] = $localVarParams['mode'];
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\PreviewTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\PreviewTableRequest',
            $asyncRequest = true);
    }

    /**
     * 描述表信息
     *
     * 该API用于描述指定表的元数据信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTableAsync($request)
    {
        return $this->showTableAsyncWithHttpInfo($request);
    }
    
    public function showTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\ShowTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\ShowTableRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据库用户
     *
     * 用于修改数据库的owner。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDatabaseOwnerAsync($request)
    {
        return $this->updateDatabaseOwnerAsyncWithHttpInfo($request);
    }
    
    public function updateDatabaseOwnerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/owner';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateDatabaseOwnerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateDatabaseOwnerRequest',
            $asyncRequest = true);
    }

    /**
     * 修改表用户
     *
     * 用于修改表的owner。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTableOwnerAsync($request)
    {
        return $this->updateTableOwnerAsyncWithHttpInfo($request);
    }
    
    public function updateTableOwnerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{project_id}/databases/{database_name}/tables/{table_name}/owner';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['databaseName'] !== null) {
            $pathParams['database_name'] = $localVarParams['databaseName'];
        }
        if ($localVarParams['tableName'] !== null) {
            $pathParams['table_name'] = $localVarParams['tableName'];
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
            $responseType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateTableOwnerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Dli\V1\Model\UpdateTableOwnerRequest',
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