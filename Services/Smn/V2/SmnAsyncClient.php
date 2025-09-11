<?php

namespace HuaweiCloud\SDK\Smn\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SmnAsyncClient extends Client
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
        $client = new ClientBuilder(new SmnAsyncClient());
        return $client;
    }

    /**
     * 订阅
     *
     * 为指定Topic添加一个订阅者，如果订阅者的状态为未确认，则向订阅者发送一个确认的消息。待订阅者进行ConfirmSubscription确认后，该订阅者才能收到Topic发布的消息。单Topic默认可添加10000个订阅者，高并发场景下，可能会出现订阅者数量超过10000仍添加成功的情况，此为正常现象。接口是幂等的，如果添加已存在的订阅者，则返回成功，且status code为200，否则status code为201。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSubscriptionAsync($request)
    {
        return $this->addSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function addSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\AddSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\AddSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 导入订阅
     *
     * 为指定的Topic添加订阅者，订阅者信息来源为订阅用户列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addSubscriptionFromSubscriptionUserAsync($request)
    {
        return $this->addSubscriptionFromSubscriptionUserAsyncWithHttpInfo($request);
    }
    
    public function addSubscriptionFromSubscriptionUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/subscriptions/from-subscription-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\AddSubscriptionFromSubscriptionUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\AddSubscriptionFromSubscriptionUserRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加删除资源标签
     *
     * 为指定实例批量添加或删除标签。一个资源上最多有10个标签。
     * 此接口为幂等接口：创建时如果请求体中存在重复key则报错。
     * 创建时，不允许重复key，如果数据库存在就覆盖。
     * 删除时，如果删除的标签不存在，默认处理成功，删除时不对标签字符集范围做校验。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateOrDeleteResourceTagsAsync($request)
    {
        return $this->batchCreateOrDeleteResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateOrDeleteResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\BatchCreateOrDeleteResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchCreateOrDeleteResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建订阅过滤策略
     *
     * 创建订阅者的消息过滤策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateSubscriptionsFilterPolicesAsync($request)
    {
        return $this->batchCreateSubscriptionsFilterPolicesAsyncWithHttpInfo($request);
    }
    
    public function batchCreateSubscriptionsFilterPolicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/subscriptions/filter_polices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\BatchCreateSubscriptionsFilterPolicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchCreateSubscriptionsFilterPolicesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除订阅
     *
     * 批量删除订阅，每个订阅终端的删除结果在响应体中依次展示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSubscriptionsAsync($request)
    {
        return $this->batchDeleteSubscriptionsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSubscriptionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除指定主题的订阅
     *
     * 批量删除指定主题的订阅，每个订阅终端的删除结果在响应体中依次展示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSubscriptionsByTopicAsync($request)
    {
        return $this->batchDeleteSubscriptionsByTopicAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSubscriptionsByTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsByTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsByTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除订阅过滤策略
     *
     * 删除订阅者的消息过滤策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSubscriptionsFilterPolicesAsync($request)
    {
        return $this->batchDeleteSubscriptionsFilterPolicesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteSubscriptionsFilterPolicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/subscriptions/filter_polices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsFilterPolicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsFilterPolicesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新订阅过滤策略
     *
     * 更新订阅者的消息过滤策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateSubscriptionsFilterPolicesAsync($request)
    {
        return $this->batchUpdateSubscriptionsFilterPolicesAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateSubscriptionsFilterPolicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/subscriptions/filter_polices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\BatchUpdateSubscriptionsFilterPolicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchUpdateSubscriptionsFilterPolicesRequest',
            $asyncRequest = true);
    }

    /**
     * 取消订阅
     *
     * 删除指定的订阅者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelSubscriptionAsync($request)
    {
        return $this->cancelSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function cancelSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/subscriptions/{subscription_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['subscriptionUrn'] !== null) {
            $pathParams['subscription_urn'] = $localVarParams['subscriptionUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CancelSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CancelSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 确认订阅
     *
     * 确认订阅主题消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmSubscriptionAsync($request)
    {
        return $this->confirmSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function confirmSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/rest/v2/notifications/subscription/confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $queryParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['endpoint'] !== null) {
            $queryParams['endpoint'] = $localVarParams['endpoint'];
        }
        if ($localVarParams['token'] !== null) {
            $queryParams['token'] = $localVarParams['token'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ConfirmSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ConfirmSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定云日志
     *
     * 为指定Topic绑定一个云日志，用于记录主题消息发送状态等信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogtankAsync($request)
    {
        return $this->createLogtankAsyncWithHttpInfo($request);
    }
    
    public function createLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/logtanks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 创建消息模板
     *
     * 创建一个模板，用户可以按照模板去发送消息，这样可以减少请求的数据量。
     * 单用户默认可创建100个消息模板，高并发场景下，可能会出现消息模板数量超过100仍创建成功的情况，此为正常现象。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMessageTemplateAsync($request)
    {
        return $this->createMessageTemplateAsyncWithHttpInfo($request);
    }
    
    public function createMessageTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/message_template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateMessageTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateMessageTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建通知策略
     *
     * 创建通知策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNotifyPolicyAsync($request)
    {
        return $this->createNotifyPolicyAsyncWithHttpInfo($request);
    }
    
    public function createNotifyPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/notify-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateNotifyPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateNotifyPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 添加资源标签
     *
     * 一个资源上最多有10个标签。此接口为幂等接口：创建时，如果创建的标签已经存在（key相同），则覆盖。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceTagAsync($request)
    {
        return $this->createResourceTagAsyncWithHttpInfo($request);
    }
    
    public function createResourceTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateResourceTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateResourceTagRequest',
            $asyncRequest = true);
    }

    /**
     * 创建主题
     *
     * 创建Topic，单用户默认配额为3000。高并发场景下，可能会出现Topic数量超过3000仍创建成功的情况，此为正常现象。
     * 接口是幂等的，接口调用返回成功时，若已存在同名的Topic，返回的status code为200，否则返回的status code为201
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTopicAsync($request)
    {
        return $this->createTopicAsyncWithHttpInfo($request);
    }
    
    public function createTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑云日志
     *
     * 解绑指定Topic绑定的云日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogtankAsync($request)
    {
        return $this->deleteLogtankAsyncWithHttpInfo($request);
    }
    
    public function deleteLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/logtanks/{logtank_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 删除消息模板
     *
     * 删除消息模板。删除模板之前的消息请求都可以使用该模板发送，删除之后无法再使用该模板发送消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMessageTemplateAsync($request)
    {
        return $this->deleteMessageTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteMessageTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/message_template/{message_template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['messageTemplateId'] !== null) {
            $pathParams['message_template_id'] = $localVarParams['messageTemplateId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteMessageTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteMessageTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除通知策略
     *
     * 删除通知策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNotifyPolicyAsync($request)
    {
        return $this->deleteNotifyPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteNotifyPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/notify-policy/{notify_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['notifyPolicyId'] !== null) {
            $pathParams['notify_policy_id'] = $localVarParams['notifyPolicyId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteNotifyPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteNotifyPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源标签
     *
     * 幂等接口：删除时，不对标签做校验。删除的key不存在报404，key不能为空或者空字符串。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceTagAsync($request)
    {
        return $this->deleteResourceTagAsyncWithHttpInfo($request);
    }
    
    public function deleteResourceTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteResourceTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteResourceTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定主题的订阅
     *
     * 删除指定主题的订阅
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubscriptionsByTopicAsync($request)
    {
        return $this->deleteSubscriptionsByTopicAsyncWithHttpInfo($request);
    }
    
    public function deleteSubscriptionsByTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/subscriptions/{subscription_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['subscriptionUrn'] !== null) {
            $pathParams['subscription_urn'] = $localVarParams['subscriptionUrn'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteSubscriptionsByTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteSubscriptionsByTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主题
     *
     * 删除主题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTopicAsync($request)
    {
        return $this->deleteTopicAsyncWithHttpInfo($request);
    }
    
    public function deleteTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定名称的主题策略
     *
     * 删除指定名称的主题策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTopicAttributeByNameAsync($request)
    {
        return $this->deleteTopicAttributeByNameAsyncWithHttpInfo($request);
    }
    
    public function deleteTopicAttributeByNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/attributes/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicAttributeByNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicAttributeByNameRequest',
            $asyncRequest = true);
    }

    /**
     * 删除所有主题策略
     *
     * 删除所有主题策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTopicAttributesAsync($request)
    {
        return $this->deleteTopicAttributesAsyncWithHttpInfo($request);
    }
    
    public function deleteTopicAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 下载证书
     *
     * 下载http消息校验证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadHttpCertAsync($request)
    {
        return $this->downloadHttpCertAsyncWithHttpInfo($request);
    }
    
    public function downloadHttpCertAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/smn/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DownloadHttpCertResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DownloadHttpCertRequest',
            $asyncRequest = true);
    }

    /**
     * 查询授权云服务列表
     *
     * 查询授权云服务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudServiceAsync($request)
    {
        return $this->listCloudServiceAsyncWithHttpInfo($request);
    }
    
    public function listCloudServiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/notifications/cloud_service';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListCloudServiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListCloudServiceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云日志
     *
     * 查询指定Topic绑定的云日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogtankAsync($request)
    {
        return $this->listLogtankAsyncWithHttpInfo($request);
    }
    
    public function listLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/logtanks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 查询消息模板详情
     *
     * 查询模板详情，包括模板内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMessageTemplateDetailsAsync($request)
    {
        return $this->listMessageTemplateDetailsAsyncWithHttpInfo($request);
    }
    
    public function listMessageTemplateDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/message_template/{message_template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['messageTemplateId'] !== null) {
            $pathParams['message_template_id'] = $localVarParams['messageTemplateId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListMessageTemplateDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListMessageTemplateDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询消息模板列表
     *
     * 分页查询模板列表，模板列表按照创建时间进行升序排列。分页查询可以指定offset以及limit。如果不存在模板，则返回空列表。额外的查询参数分别有message_template_name和protocol。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMessageTemplatesAsync($request)
    {
        return $this->listMessageTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listMessageTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/message_template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['messageTemplateName'] !== null) {
            $queryParams['message_template_name'] = $localVarParams['messageTemplateName'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListMessageTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListMessageTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目标签
     *
     * 查询租户在指定Region和实例类型的所有标签集合。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectTagsAsync($request)
    {
        return $this->listProjectTagsAsyncWithHttpInfo($request);
    }
    
    public function listProjectTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListProjectTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListProjectTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询协议列表
     *
     * 查询SMN支持的协议列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtocolsAsync($request)
    {
        return $this->listProtocolsAsyncWithHttpInfo($request);
    }
    
    public function listProtocolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/notifications/protocols';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListProtocolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListProtocolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例
     *
     * 使用标签过滤实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceInstancesAsync($request)
    {
        return $this->listResourceInstancesAsyncWithHttpInfo($request);
    }
    
    public function listResourceInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListResourceInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListResourceInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源标签
     *
     * 查询指定实例的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceTagsAsync($request)
    {
        return $this->listResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function listResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订阅者列表
     *
     * 分页返回请求者的所有的订阅列表，订阅列表按照订阅创建时间进行升序排列。分页查询可以指定offset以及limit。如果订阅者不存在，返回空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubscriptionsAsync($request)
    {
        return $this->listSubscriptionsAsyncWithHttpInfo($request);
    }
    
    public function listSubscriptionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['endpoint'] !== null) {
            $queryParams['endpoint'] = $localVarParams['endpoint'];
        }
        if ($localVarParams['fuzzyRemark'] !== null) {
            $queryParams['fuzzy_remark'] = $localVarParams['fuzzyRemark'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListSubscriptionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListSubscriptionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定Topic的订阅者列表
     *
     * 分页获取特定Topic的订阅列表，订阅列表按照订阅创建时间进行升序排列。分页查询可以指定offset以及limit。如果指定Topic不存在订阅者，返回空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubscriptionsByTopicAsync($request)
    {
        return $this->listSubscriptionsByTopicAsyncWithHttpInfo($request);
    }
    
    public function listSubscriptionsByTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fuzzyRemark'] !== null) {
            $queryParams['fuzzy_remark'] = $localVarParams['fuzzyRemark'];
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListSubscriptionsByTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListSubscriptionsByTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主题策略
     *
     * 查询主题的策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopicAttributesAsync($request)
    {
        return $this->listTopicAttributesAsyncWithHttpInfo($request);
    }
    
    public function listTopicAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主题详情
     *
     * 查询Topic的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopicDetailsAsync($request)
    {
        return $this->listTopicDetailsAsyncWithHttpInfo($request);
    }
    
    public function listTopicDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主题的发送详情
     *
     * 查询Topic的发送数据详情，最多支持查询31天内所有计量数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopicMessageStatisticsAsync($request)
    {
        return $this->listTopicMessageStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listTopicMessageStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicMessageStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicMessageStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主题列表
     *
     * 分页查询Topic列表，Topic列表按照Topic创建时间进行降序排列。分页查询可以指定offset以及limit。如果不存在Topic，则返回空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopicsAsync($request)
    {
        return $this->listTopicsAsyncWithHttpInfo($request);
    }
    
    public function listTopicsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
        }
        if ($localVarParams['topicId'] !== null) {
            $queryParams['topic_id'] = $localVarParams['topicId'];
        }
        if ($localVarParams['fuzzyDisplayName'] !== null) {
            $queryParams['fuzzy_display_name'] = $localVarParams['fuzzyDisplayName'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询SMN API V2版本信息
     *
     * 查询SMN API V2版本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVersionAsync($request)
    {
        return $this->listVersionAsyncWithHttpInfo($request);
    }
    
    public function listVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询SMN支持的API版本号信息
     *
     * 查询SMN开放API支持的版本号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVersionsAsync($request)
    {
        return $this->listVersionsAsyncWithHttpInfo($request);
    }
    
    public function listVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 发布探测消息
     *
     * 基于主题发送http/https探测消息，探测当前http/https 终端是否可用，SMN出口是否能够正常访问该终端。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishHttpDetectAsync($request)
    {
        return $this->publishHttpDetectAsyncWithHttpInfo($request);
    }
    
    public function publishHttpDetectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/detection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\PublishHttpDetectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\PublishHttpDetectRequest',
            $asyncRequest = true);
    }

    /**
     * 消息发布
     *
     * 将消息发送给Topic的所有订阅端点。当返回消息ID时，该消息已被保存并开始尝试将其推送给Topic的订阅者。为确保您的消息能够成功推送到各个订阅者，请确保您的消息内容符合当地法律法规要求。
     * 三种消息发送方式
     * 
     * message
     * 
     * message_structure
     * 
     * message_template_name
     * 
     * 只需要设置其中一个，如果同时设置，生效的优先级为
     * message_structure &gt; message_template_name &gt; message。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishMessageAsync($request)
    {
        return $this->publishMessageAsyncWithHttpInfo($request);
    }
    
    public function publishMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\PublishMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\PublishMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 获取http探测结果
     *
     * 根据http探测发送返回的task_id查询探测结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHttpDetectResultAsync($request)
    {
        return $this->showHttpDetectResultAsyncWithHttpInfo($request);
    }
    
    public function showHttpDetectResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/detection/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ShowHttpDetectResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ShowHttpDetectResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询通知策略
     *
     * 查询通知策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotifyPolicyAsync($request)
    {
        return $this->showNotifyPolicyAsyncWithHttpInfo($request);
    }
    
    public function showNotifyPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/notify-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ShowNotifyPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ShowNotifyPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 取消订阅
     *
     * 取消订阅主题
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unsubscribeSubscriptionAsync($request)
    {
        return $this->unsubscribeSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function unsubscribeSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/rest/v2/notifications/subscription/unsubscribe';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['subscriptionUrn'] !== null) {
            $queryParams['subscription_urn'] = $localVarParams['subscriptionUrn'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UnsubscribeSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UnsubscribeSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新云日志
     *
     * 更新指定Topic绑定的云日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogtankAsync($request)
    {
        return $this->updateLogtankAsyncWithHttpInfo($request);
    }
    
    public function updateLogtankAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/logtanks/{logtank_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateLogtankResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateLogtankRequest',
            $asyncRequest = true);
    }

    /**
     * 更新消息模板
     *
     * 修改消息模板的内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMessageTemplateAsync($request)
    {
        return $this->updateMessageTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateMessageTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/message_template/{message_template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['messageTemplateId'] !== null) {
            $pathParams['message_template_id'] = $localVarParams['messageTemplateId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateMessageTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateMessageTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 修改通知策略
     *
     * 修改通知策略，该接口仅支持全量修改，不支持部分修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNotifyPolicyAsync($request)
    {
        return $this->updateNotifyPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateNotifyPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/notify-policy/{notify_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['notifyPolicyId'] !== null) {
            $pathParams['notify_policy_id'] = $localVarParams['notifyPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateNotifyPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateNotifyPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 更新订阅者
     *
     * 更新订阅者备注。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubscriptionAsync($request)
    {
        return $this->updateSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function updateSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/subscriptions/{subscription_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['subscriptionUrn'] !== null) {
            $pathParams['subscription_urn'] = $localVarParams['subscriptionUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新主题
     *
     * 更新显示名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTopicAsync($request)
    {
        return $this->updateTopicAsyncWithHttpInfo($request);
    }
    
    public function updateTopicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateTopicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateTopicRequest',
            $asyncRequest = true);
    }

    /**
     * 更新主题策略
     *
     * 更新主题的策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTopicAttributeAsync($request)
    {
        return $this->updateTopicAttributeAsyncWithHttpInfo($request);
    }
    
    public function updateTopicAttributeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/topics/{topic_urn}/attributes/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateTopicAttributeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateTopicAttributeRequest',
            $asyncRequest = true);
    }

    /**
     * 创建Application
     *
     * 创建平台应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApplicationAsync($request)
    {
        return $this->createApplicationAsyncWithHttpInfo($request);
    }
    
    public function createApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除Application
     *
     * 删除平台应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationAsync($request)
    {
        return $this->deleteApplicationAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications/{application_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationUrn'] !== null) {
            $pathParams['application_urn'] = $localVarParams['applicationUrn'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Application属性
     *
     * 获取应用平台属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationAttributesAsync($request)
    {
        return $this->listApplicationAttributesAsyncWithHttpInfo($request);
    }
    
    public function listApplicationAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications/{application_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationUrn'] !== null) {
            $pathParams['application_urn'] = $localVarParams['applicationUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Application
     *
     * 查询应用平台列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationsAsync($request)
    {
        return $this->listApplicationsAsyncWithHttpInfo($request);
    }
    
    public function listApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['platform'] !== null) {
            $queryParams['platform'] = $localVarParams['platform'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationsRequest',
            $asyncRequest = true);
    }

    /**
     * App消息发布
     *
     * 将消息直发给endpoint设备。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishAppMessageAsync($request)
    {
        return $this->publishAppMessageAsyncWithHttpInfo($request);
    }
    
    public function publishAppMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/endpoints/{endpoint_urn}/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endpointUrn'] !== null) {
            $pathParams['endpoint_urn'] = $localVarParams['endpointUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\PublishAppMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\PublishAppMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 更新Application
     *
     * 更新应用平台。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationAsync($request)
    {
        return $this->updateApplicationAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications/{application_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationUrn'] !== null) {
            $pathParams['application_urn'] = $localVarParams['applicationUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 创建Application endpoint
     *
     * 创建应用平台的endpoint终端。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApplicationEndpointAsync($request)
    {
        return $this->createApplicationEndpointAsyncWithHttpInfo($request);
    }
    
    public function createApplicationEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications/{application_urn}/endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationUrn'] !== null) {
            $pathParams['application_urn'] = $localVarParams['applicationUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\CreateApplicationEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateApplicationEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 删除Application endpoint
     *
     * 删除设备。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationEndpointAsync($request)
    {
        return $this->deleteApplicationEndpointAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/endpoints/{endpoint_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endpointUrn'] !== null) {
            $pathParams['endpoint_urn'] = $localVarParams['endpointUrn'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteApplicationEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteApplicationEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Application的Endpoint属性
     *
     * 获取endpoint的属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationEndpointAttributesAsync($request)
    {
        return $this->listApplicationEndpointAttributesAsyncWithHttpInfo($request);
    }
    
    public function listApplicationEndpointAttributesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/endpoints/{endpoint_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endpointUrn'] !== null) {
            $pathParams['endpoint_urn'] = $localVarParams['endpointUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationEndpointAttributesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationEndpointAttributesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Application的Endpoint列表
     *
     * 查询平台的endpoint列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationEndpointsAsync($request)
    {
        return $this->listApplicationEndpointsAsyncWithHttpInfo($request);
    }
    
    public function listApplicationEndpointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/applications/{application_urn}/endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['token'] !== null) {
            $queryParams['token'] = $localVarParams['token'];
        }
        if ($localVarParams['userData'] !== null) {
            $queryParams['user_data'] = $localVarParams['userData'];
        }
        if ($localVarParams['applicationUrn'] !== null) {
            $pathParams['application_urn'] = $localVarParams['applicationUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationEndpointsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationEndpointsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新Application endpoint
     *
     * 更新设备属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationEndpointAsync($request)
    {
        return $this->updateApplicationEndpointAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notifications/endpoints/{endpoint_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endpointUrn'] !== null) {
            $pathParams['endpoint_urn'] = $localVarParams['endpointUrn'];
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
            $responseType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateApplicationEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateApplicationEndpointRequest',
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