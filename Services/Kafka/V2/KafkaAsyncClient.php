<?php

namespace HuaweiCloud\SDK\Kafka\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class KafkaAsyncClient extends Client
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
        return new ClientBuilder(new KafkaAsyncClient());
    }

    /**
     * 批量添加或删除实例标签
     *
     * 批量添加或删除实例标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateOrDeleteKafkaTagAsync($request)
    {
        return $this->batchCreateOrDeleteKafkaTagAsyncWithHttpInfo($request);
    }
    
    public function batchCreateOrDeleteKafkaTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/{instance_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchCreateOrDeleteKafkaTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchCreateOrDeleteKafkaTagRequest',
            $asyncRequest = true);
    }

    /**
     * Kafka实例批量删除Group
     *
     * 该接口用于向Kafka实例批量删除Group。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteGroupAsync($request)
    {
        return $this->batchDeleteGroupAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/groups/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchDeleteGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchDeleteGroupRequest',
            $asyncRequest = true);
    }

    /**
     * Kafka实例批量删除Topic
     *
     * 该接口用于向Kafka实例批量删除Topic。批量删除多个Topic时，部分删除成功，部分失败，此时接口返回删除成功，并在返回中显示删除失败的Topic信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteInstanceTopicAsync($request)
    {
        return $this->batchDeleteInstanceTopicAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteInstanceTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/topics/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchDeleteInstanceTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchDeleteInstanceTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除用户
     *
     * 批量删除Kafka实例的用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteInstanceUsersAsync($request)
    {
        return $this->batchDeleteInstanceUsersAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteInstanceUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchDeleteInstanceUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchDeleteInstanceUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量重启或删除实例
     *
     * 批量重启或删除实例。
     * 
     * 在实例重启过程中，客户端的生产与消费消息等请求会被拒绝。
     * 
     * 实例删除后，实例中原有的数据将被删除，且没有备份，请谨慎操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRestartOrDeleteInstancesAsync($request)
    {
        return $this->batchRestartOrDeleteInstancesAsyncWithHttpInfo($request);
    }
    
    public function batchRestartOrDeleteInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchRestartOrDeleteInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\BatchRestartOrDeleteInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭kafka manager
     *
     * 关闭kafka manager，相应的原来开放出的management相关接口也将不可用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function closeKafkaManagerAsync($request)
    {
        return $this->closeKafkaManagerAsyncWithHttpInfo($request);
    }
    
    public function closeKafkaManagerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/instances/{instance_id}/management';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CloseKafkaManagerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CloseKafkaManagerRequest',
            $asyncRequest = true);
    }

    /**
     * 创建实例的转储节点
     *
     * 创建实例的转储节点。
     * 
     * **当前通过调用API，只支持按需实例创建转储节点。**
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConnectorAsync($request)
    {
        return $this->createConnectorAsyncWithHttpInfo($request);
    }
    
    public function createConnectorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/connector';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateConnectorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateConnectorRequest',
            $asyncRequest = true);
    }

    /**
     * 创建关闭实例转储节点的订单
     *
     * 创建删除实例转储节点的订单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeleteConnectorOrderAsync($request)
    {
        return $this->createDeleteConnectorOrderAsyncWithHttpInfo($request);
    }
    
    public function createDeleteConnectorOrderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/instances/{instance_id}/delete-connector-order';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateDeleteConnectorOrderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateDeleteConnectorOrderRequest',
            $asyncRequest = true);
    }

    /**
     * 创建实例
     *
     * 创建实例。
     * 
     * 该接口支持创建按需和包周期两种计费方式的实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceByEngineAsync($request)
    {
        return $this->createInstanceByEngineAsyncWithHttpInfo($request);
    }
    
    public function createInstanceByEngineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{engine}/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['engine'] !== null) {
            $pathParams['engine'] = $localVarParams['engine'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceByEngineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceByEngineRequest',
            $asyncRequest = true);
    }

    /**
     * Kafka实例创建Topic
     *
     * 该接口用于向Kafka实例创建Topic。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceTopicAsync($request)
    {
        return $this->createInstanceTopicAsyncWithHttpInfo($request);
    }
    
    public function createInstanceTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 创建用户
     *
     * 创建Kafka实例的用户，用户可连接开启SASL的Kafka实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceUserAsync($request)
    {
        return $this->createInstanceUserAsyncWithHttpInfo($request);
    }
    
    public function createInstanceUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceUserRequest',
            $asyncRequest = true);
    }

    /**
     * 创建消费组
     *
     * 实例创建消费组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createKafkaConsumerGroupAsync($request)
    {
        return $this->createKafkaConsumerGroupAsyncWithHttpInfo($request);
    }
    
    public function createKafkaConsumerGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/instances/{instance_id}/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateKafkaConsumerGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateKafkaConsumerGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 新增Kafka实例指定Topic分区
     *
     * 新增Kafka实例指定Topic分区。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPartitionAsync($request)
    {
        return $this->createPartitionAsyncWithHttpInfo($request);
    }
    
    public function createPartitionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}/partitions-reassignment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreatePartitionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreatePartitionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建实例
     *
     * [创建按需计费类型的Kafka实例。](tag:sbc,hk_sbc,cmcc)[创建kafka实例。](tag:otc)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPostPaidInstanceAsync($request)
    {
        return $this->createPostPaidInstanceAsyncWithHttpInfo($request);
    }
    
    public function createPostPaidInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreatePostPaidInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreatePostPaidInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * Kafka实例开始分区重平衡任务
     *
     * 该接口用于向Kafka实例提交分区重平衡任务，若成功则返回重平衡任务的job id。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createReassignmentTaskAsync($request)
    {
        return $this->createReassignmentTaskAsyncWithHttpInfo($request);
    }
    
    public function createReassignmentTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/kafka/{project_id}/instances/{instance_id}/reassign';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateReassignmentTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateReassignmentTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建转储任务
     *
     * 创建转储任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSinkTaskAsync($request)
    {
        return $this->createSinkTaskAsyncWithHttpInfo($request);
    }
    
    public function createSinkTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/connectors/{connector_id}/sink-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateSinkTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\CreateSinkTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除后台任务管理中的指定记录
     *
     * 删除后台任务管理中的指定记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBackgroundTaskAsync($request)
    {
        return $this->deleteBackgroundTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteBackgroundTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteBackgroundTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteBackgroundTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭实例转储节点
     *
     * 关闭实例转储节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConnectorAsync($request)
    {
        return $this->deleteConnectorAsyncWithHttpInfo($request);
    }
    
    public function deleteConnectorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/instances/{instance_id}/delete-connector';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteConnectorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteConnectorRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定的实例
     *
     * 删除指定的实例，释放该实例的所有资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceAsync($request)
    {
        return $this->deleteInstanceAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceAsyncWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除单个转储任务
     *
     * 删除单个转储任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSinkTaskAsync($request)
    {
        return $this->deleteSinkTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteSinkTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/connectors/{connector_id}/sink-tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteSinkTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\DeleteSinkTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可用区信息
     *
     * 在创建实例时，需要配置实例所在的可用区ID，可通过该接口查询可用区的ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailableZonesAsync($request)
    {
        return $this->listAvailableZonesAsyncWithHttpInfo($request);
    }
    
    public function listAvailableZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/available-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListAvailableZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListAvailableZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例的后台任务列表
     *
     * 查询实例的后台任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBackgroundTasksAsync($request)
    {
        return $this->listBackgroundTasksAsyncWithHttpInfo($request);
    }
    
    public function listBackgroundTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListBackgroundTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListBackgroundTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询产品规格列表
     *
     * 查询产品规格列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEngineProductsAsync($request)
    {
        return $this->listEngineProductsAsyncWithHttpInfo($request);
    }
    
    public function listEngineProductsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{engine}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['productId'] !== null) {
            $queryParams['product_id'] = $localVarParams['productId'];
        }
        if ($localVarParams['engine'] !== null) {
            $pathParams['engine'] = $localVarParams['engine'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListEngineProductsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListEngineProductsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有消费组
     *
     * 查询所有消费组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceConsumerGroupsAsync($request)
    {
        return $this->listInstanceConsumerGroupsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceConsumerGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['group'] !== null) {
            $queryParams['group'] = $localVarParams['group'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListInstanceConsumerGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListInstanceConsumerGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * Kafka实例查询Topic
     *
     * 该接口用于查询指定Kafka实例的Topic详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceTopicsAsync($request)
    {
        return $this->listInstanceTopicsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceTopicsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListInstanceTopicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListInstanceTopicsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有实例列表
     *
     * 查询租户的实例列表，支持按照条件查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstancesAsync($request)
    {
        return $this->listInstancesAsyncWithHttpInfo($request);
    }
    
    public function listInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['engine'] !== null) {
            $queryParams['engine'] = $localVarParams['engine'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['includeFailure'] !== null) {
            $queryParams['include_failure'] = $localVarParams['includeFailure'];
        }
        if ($localVarParams['exactMatchName'] !== null) {
            $queryParams['exact_match_name'] = $localVarParams['exactMatchName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询产品规格列表
     *
     * 在创建kafka实例时，需要配置订购的产品ID（即product_id），可通过该接口查询产品规格。
     * 
     * 例如，要订购按需计费、基准带宽为100MB的kafka实例，可从接口响应消息中，查找Hourly的消息体，然后找到bandwidth为100MB的记录对应的product_id，该product_id的值即是创建上述kafka实例时需要配置的产品ID。
     * 
     * 同时，unavailable_zones字段表示资源不足的可用区列表，如果为空，则表示所有可用区都有资源，如果不为空，则表示字段值的可用区没有资源。所以必须确保您购买的资源所在的可用区有资源，不在该字段列表内。
     * 
     * [例如，响应消息中bandwidth字段为1200MB的记录，unavailable_zones字段包含cn-east-2b、cn-east-2a和cn-east-2d，表示在华东-上海2的可用区1、可用区2、可用区3都没有该资源。](tag:hws)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProductsAsync($request)
    {
        return $this->listProductsAsyncWithHttpInfo($request);
    }
    
    public function listProductsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['engine'] !== null) {
            $queryParams['engine'] = $localVarParams['engine'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListProductsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询转储任务列表
     *
     * 查询转储任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSinkTasksAsync($request)
    {
        return $this->listSinkTasksAsyncWithHttpInfo($request);
    }
    
    public function listSinkTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/connectors/{connector_id}/sink-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListSinkTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListSinkTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Topic的分区列表
     *
     * 查询Topic的分区列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopicPartitionsAsync($request)
    {
        return $this->listTopicPartitionsAsyncWithHttpInfo($request);
    }
    
    public function listTopicPartitionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/instances/{instance_id}/topics/{topic}/partitions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListTopicPartitionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListTopicPartitionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Topic的当前生产者列表
     *
     * 查询Topic的当前生产者列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopicProducersAsync($request)
    {
        return $this->listTopicProducersAsyncWithHttpInfo($request);
    }
    
    public function listTopicProducersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/instances/{instance_id}/topics/{topic}/producers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ListTopicProducersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ListTopicProducersRequest',
            $asyncRequest = true);
    }

    /**
     * 重置Manager密码
     *
     * 重置Manager密码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetManagerPasswordAsync($request)
    {
        return $this->resetManagerPasswordAsyncWithHttpInfo($request);
    }
    
    public function resetManagerPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/kafka-manager-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetManagerPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetManagerPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 重置消费组消费进度到指定位置
     *
     * Kafka实例不支持在线重置消费进度。在执行重置消费进度之前，必须停止被重置消费组客户端。
     * 
     * 停止待重置消费组客户端，然后等待一段时间（即ConsumerConfig.SESSION_TIMEOUT_MS_CONFIG配置的时间，默认为1000毫秒）后，服务端才认为此消费组客户端已下线。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetMessageOffsetAsync($request)
    {
        return $this->resetMessageOffsetAsyncWithHttpInfo($request);
    }
    
    public function resetMessageOffsetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/groups/{group}/reset-message-offset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['group'] !== null) {
            $pathParams['group'] = $localVarParams['group'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetMessageOffsetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetMessageOffsetRequest',
            $asyncRequest = true);
    }

    /**
     * 重置密码
     *
     * 重置密码。
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
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 重置用户密码
     *
     * 重置用户密码
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetUserPasswrodAsync($request)
    {
        return $this->resetUserPasswrodAsyncWithHttpInfo($request);
    }
    
    public function resetUserPasswrodAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/users/{user_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['userName'] !== null) {
            $pathParams['user_name'] = $localVarParams['userName'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetUserPasswrodResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ResetUserPasswrodRequest',
            $asyncRequest = true);
    }

    /**
     * 实例规格变更
     *
     * 实例规格变更。[当前通过调用API，只支持按需实例进行实例规格变更。](tag:hws,hws_hk,ctc,cmcc,hws_eu)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeEngineInstanceAsync($request)
    {
        return $this->resizeEngineInstanceAsyncWithHttpInfo($request);
    }
    
    public function resizeEngineInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{engine}/{project_id}/instances/{instance_id}/extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['engine'] !== null) {
            $pathParams['engine'] = $localVarParams['engine'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ResizeEngineInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ResizeEngineInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 实例规格变更
     *
     * 实例规格变更。[当前通过调用API，只支持按需实例进行实例规格变更。](tag:hws,hws_hk,ctc,cmcc,hws_eu)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeInstanceAsync($request)
    {
        return $this->resizeInstanceAsyncWithHttpInfo($request);
    }
    
    public function resizeInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ResizeInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ResizeInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 重启Manager
     *
     * 重启Manager。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartManagerAsync($request)
    {
        return $this->restartManagerAsyncWithHttpInfo($request);
    }
    
    public function restartManagerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/restart-kafka-manager';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\RestartManagerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\RestartManagerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询后台任务管理中的指定记录
     *
     * 查询后台任务管理中的指定记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBackgroundTaskAsync($request)
    {
        return $this->showBackgroundTaskAsyncWithHttpInfo($request);
    }
    
    public function showBackgroundTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowBackgroundTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowBackgroundTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例在CES的监控层级关系
     *
     * 查询实例在CES的监控层级关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCesHierarchyAsync($request)
    {
        return $this->showCesHierarchyAsyncWithHttpInfo($request);
    }
    
    public function showCesHierarchyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/ces-hierarchy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowCesHierarchyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowCesHierarchyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Kafka集群元数据信息
     *
     * 查询Kafka集群元数据信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterAsync($request)
    {
        return $this->showClusterAsyncWithHttpInfo($request);
    }
    
    public function showClusterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/cluster';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowClusterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowClusterRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Kafka实例的协调器信息
     *
     * 查询Kafka实例的协调器信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCoordinatorsAsync($request)
    {
        return $this->showCoordinatorsAsyncWithHttpInfo($request);
    }
    
    public function showCoordinatorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/coordinators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowCoordinatorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowCoordinatorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例的扩容规格列表
     *
     * 查询实例的扩容规格列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEngineInstanceExtendProductInfoAsync($request)
    {
        return $this->showEngineInstanceExtendProductInfoAsyncWithHttpInfo($request);
    }
    
    public function showEngineInstanceExtendProductInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{engine}/{project_id}/instances/{instance_id}/extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['engine'] !== null) {
            $pathParams['engine'] = $localVarParams['engine'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowEngineInstanceExtendProductInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowEngineInstanceExtendProductInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询消费组信息
     *
     * 查询消费组信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGroupsAsync($request)
    {
        return $this->showGroupsAsyncWithHttpInfo($request);
    }
    
    public function showGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/groups/{group}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['group'] !== null) {
            $pathParams['group'] = $localVarParams['group'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定实例
     *
     * 查询指定实例的详细信息。
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例的扩容规格列表
     *
     * 查询实例的扩容规格列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceExtendProductInfoAsync($request)
    {
        return $this->showInstanceExtendProductInfoAsyncWithHttpInfo($request);
    }
    
    public function showInstanceExtendProductInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['engine'] !== null) {
            $queryParams['engine'] = $localVarParams['engine'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceExtendProductInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceExtendProductInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询消息
     *
     * 查询消息的偏移量和消息内容。
     * 先根据时间戳查询消息的偏移量，再根据偏移量查询消息内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceMessagesAsync($request)
    {
        return $this->showInstanceMessagesAsyncWithHttpInfo($request);
    }
    
    public function showInstanceMessagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topic'] !== null) {
            $queryParams['topic'] = $localVarParams['topic'];
        }
        if ($localVarParams['asc'] !== null) {
            $queryParams['asc'] = $localVarParams['asc'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['download'] !== null) {
            $queryParams['download'] = $localVarParams['download'];
        }
        if ($localVarParams['messageOffset'] !== null) {
            $queryParams['message_offset'] = $localVarParams['messageOffset'];
        }
        if ($localVarParams['partition'] !== null) {
            $queryParams['partition'] = $localVarParams['partition'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceMessagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceMessagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Kafka实例Topic详细信息
     *
     * 查询Kafka实例Topic详细信息。(单个实例调用不要超过1s一次)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceTopicDetailAsync($request)
    {
        return $this->showInstanceTopicDetailAsyncWithHttpInfo($request);
    }
    
    public function showInstanceTopicDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户列表
     *
     * 查询用户列表。
     * 
     * Kafka实例开启SASL功能时，才支持多用户管理的功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceUsersAsync($request)
    {
        return $this->showInstanceUsersAsyncWithHttpInfo($request);
    }
    
    public function showInstanceUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目标签
     *
     * 查询项目标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKafkaProjectTagsAsync($request)
    {
        return $this->showKafkaProjectTagsAsyncWithHttpInfo($request);
    }
    
    public function showKafkaProjectTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowKafkaProjectTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowKafkaProjectTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例标签
     *
     * 查询实例标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKafkaTagsAsync($request)
    {
        return $this->showKafkaTagsAsyncWithHttpInfo($request);
    }
    
    public function showKafkaTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/kafka/{instance_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowKafkaTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowKafkaTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询topic的磁盘存储情况
     *
     * 查询topic在Broker上磁盘占用情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKafkaTopicPartitionDiskusageAsync($request)
    {
        return $this->showKafkaTopicPartitionDiskusageAsyncWithHttpInfo($request);
    }
    
    public function showKafkaTopicPartitionDiskusageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/topics/diskusage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['minSize'] !== null) {
            $queryParams['min_size'] = $localVarParams['minSize'];
        }
        if ($localVarParams['top'] !== null) {
            $queryParams['top'] = $localVarParams['top'];
        }
        if ($localVarParams['percentage'] !== null) {
            $queryParams['percentage'] = $localVarParams['percentage'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowKafkaTopicPartitionDiskusageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowKafkaTopicPartitionDiskusageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询维护时间窗时间段
     *
     * 查询维护时间窗开始时间和结束时间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMaintainWindowsAsync($request)
    {
        return $this->showMaintainWindowsAsyncWithHttpInfo($request);
    }
    
    public function showMaintainWindowsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/instances/maintain-windows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowMaintainWindowsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowMaintainWindowsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分区指定时间段的消息
     *
     * 查询分区指定时间段的消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMessagesAsync($request)
    {
        return $this->showMessagesAsyncWithHttpInfo($request);
    }
    
    public function showMessagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['partition'] !== null) {
            $queryParams['partition'] = $localVarParams['partition'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowMessagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowMessagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分区最早消息的位置
     *
     * 查询分区最早消息的位置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPartitionBeginningMessageAsync($request)
    {
        return $this->showPartitionBeginningMessageAsyncWithHttpInfo($request);
    }
    
    public function showPartitionBeginningMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}/partitions/{partition}/beginning-message';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }
        if ($localVarParams['partition'] !== null) {
            $pathParams['partition'] = $localVarParams['partition'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowPartitionBeginningMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowPartitionBeginningMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分区最新消息的位置
     *
     * 查询分区最新消息的位置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPartitionEndMessageAsync($request)
    {
        return $this->showPartitionEndMessageAsyncWithHttpInfo($request);
    }
    
    public function showPartitionEndMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}/partitions/{partition}/end-message';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }
        if ($localVarParams['partition'] !== null) {
            $pathParams['partition'] = $localVarParams['partition'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowPartitionEndMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowPartitionEndMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分区指定偏移量的消息
     *
     * 查询分区指定偏移量的消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPartitionMessageAsync($request)
    {
        return $this->showPartitionMessageAsyncWithHttpInfo($request);
    }
    
    public function showPartitionMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}/partitions/{partition}/message';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['messageOffset'] !== null) {
            $queryParams['message_offset'] = $localVarParams['messageOffset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
        }
        if ($localVarParams['partition'] !== null) {
            $pathParams['partition'] = $localVarParams['partition'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowPartitionMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowPartitionMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个转储任务
     *
     * 查询单个转储任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSinkTaskDetailAsync($request)
    {
        return $this->showSinkTaskDetailAsyncWithHttpInfo($request);
    }
    
    public function showSinkTaskDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/connectors/{connector_id}/sink-tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicInfo'] !== null) {
            $queryParams['topic_info'] = $localVarParams['topicInfo'];
        }
        if ($localVarParams['connectorId'] !== null) {
            $pathParams['connector_id'] = $localVarParams['connectorId'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户权限
     *
     * 查询用户权限。
     * 
     * Kafka实例开启SASL功能时，才支持多用户管理的功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTopicAccessPolicyAsync($request)
    {
        return $this->showTopicAccessPolicyAsyncWithHttpInfo($request);
    }
    
    public function showTopicAccessPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instances/{instance_id}/topics/{topic_name}/accesspolicy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topicName'] !== null) {
            $pathParams['topic_name'] = $localVarParams['topicName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowTopicAccessPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\ShowTopicAccessPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改实例信息
     *
     * 修改实例信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceAsync($request)
    {
        return $this->updateInstanceAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceAsyncWithHttpInfo($request){
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 开启或关闭实例自动创建topic功能
     *
     * 开启或关闭实例自动创建topic功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceAutoCreateTopicAsync($request)
    {
        return $this->updateInstanceAutoCreateTopicAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceAutoCreateTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/autotopic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceAutoCreateTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceAutoCreateTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 修改实例跨VPC访问的内网IP
     *
     * 修改实例跨VPC访问的内网IP。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceCrossVpcIpAsync($request)
    {
        return $this->updateInstanceCrossVpcIpAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceCrossVpcIpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/crossvpc/modify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceCrossVpcIpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceCrossVpcIpRequest',
            $asyncRequest = true);
    }

    /**
     * 修改Kafka实例Topic
     *
     * 修改Kafka实例Topic
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceTopicAsync($request)
    {
        return $this->updateInstanceTopicAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 修改转储任务的配额
     *
     * 修改转储任务的配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSinkTaskQuotaAsync($request)
    {
        return $this->updateSinkTaskQuotaAsyncWithHttpInfo($request);
    }
    
    public function updateSinkTaskQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/connectors/{connector_id}/sink-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateSinkTaskQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateSinkTaskQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 设置用户权限
     *
     * 设置用户权限。
     * 
     * Kafka实例开启SASL功能时，才支持多用户管理的功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTopicAccessPolicyAsync($request)
    {
        return $this->updateTopicAccessPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateTopicAccessPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instances/{instance_id}/topics/accesspolicy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateTopicAccessPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateTopicAccessPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改Kafka实例Topic分区的副本
     *
     * 修改Kafka实例Topic分区的副本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTopicReplicaAsync($request)
    {
        return $this->updateTopicReplicaAsyncWithHttpInfo($request);
    }
    
    public function updateTopicReplicaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/management/topics/{topic}/replicas-reassignment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topic'] !== null) {
            $pathParams['topic'] = $localVarParams['topic'];
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
            $responseType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateTopicReplicaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Kafka\V2\Model\UpdateTopicReplicaRequest',
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