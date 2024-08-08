<?php

namespace HuaweiCloud\SDK\Smn\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SmnClient extends Client
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
        $client = new ClientBuilder(new SmnClient());
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
    public function addSubscription($request)
    {
        return $this->addSubscriptionWithHttpInfo($request);
    }

    public function addSubscriptionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\AddSubscriptionRequest');
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
    public function addSubscriptionFromSubscriptionUser($request)
    {
        return $this->addSubscriptionFromSubscriptionUserWithHttpInfo($request);
    }

    public function addSubscriptionFromSubscriptionUserWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\AddSubscriptionFromSubscriptionUserRequest');
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
    public function batchCreateOrDeleteResourceTags($request)
    {
        return $this->batchCreateOrDeleteResourceTagsWithHttpInfo($request);
    }

    public function batchCreateOrDeleteResourceTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchCreateOrDeleteResourceTagsRequest');
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
    public function batchCreateSubscriptionsFilterPolices($request)
    {
        return $this->batchCreateSubscriptionsFilterPolicesWithHttpInfo($request);
    }

    public function batchCreateSubscriptionsFilterPolicesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchCreateSubscriptionsFilterPolicesRequest');
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
    public function batchDeleteSubscriptionsFilterPolices($request)
    {
        return $this->batchDeleteSubscriptionsFilterPolicesWithHttpInfo($request);
    }

    public function batchDeleteSubscriptionsFilterPolicesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchDeleteSubscriptionsFilterPolicesRequest');
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
    public function batchUpdateSubscriptionsFilterPolices($request)
    {
        return $this->batchUpdateSubscriptionsFilterPolicesWithHttpInfo($request);
    }

    public function batchUpdateSubscriptionsFilterPolicesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\BatchUpdateSubscriptionsFilterPolicesRequest');
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
    public function cancelSubscription($request)
    {
        return $this->cancelSubscriptionWithHttpInfo($request);
    }

    public function cancelSubscriptionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CancelSubscriptionRequest');
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
    public function createLogtank($request)
    {
        return $this->createLogtankWithHttpInfo($request);
    }

    public function createLogtankWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateLogtankRequest');
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
    public function createMessageTemplate($request)
    {
        return $this->createMessageTemplateWithHttpInfo($request);
    }

    public function createMessageTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateMessageTemplateRequest');
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
    public function createResourceTag($request)
    {
        return $this->createResourceTagWithHttpInfo($request);
    }

    public function createResourceTagWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateResourceTagRequest');
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
    public function createTopic($request)
    {
        return $this->createTopicWithHttpInfo($request);
    }

    public function createTopicWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateTopicRequest');
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
    public function deleteLogtank($request)
    {
        return $this->deleteLogtankWithHttpInfo($request);
    }

    public function deleteLogtankWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteLogtankRequest');
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
    public function deleteMessageTemplate($request)
    {
        return $this->deleteMessageTemplateWithHttpInfo($request);
    }

    public function deleteMessageTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteMessageTemplateRequest');
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
    public function deleteResourceTag($request)
    {
        return $this->deleteResourceTagWithHttpInfo($request);
    }

    public function deleteResourceTagWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteResourceTagRequest');
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
    public function deleteTopic($request)
    {
        return $this->deleteTopicWithHttpInfo($request);
    }

    public function deleteTopicWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicRequest');
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
    public function deleteTopicAttributeByName($request)
    {
        return $this->deleteTopicAttributeByNameWithHttpInfo($request);
    }

    public function deleteTopicAttributeByNameWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicAttributeByNameRequest');
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
    public function deleteTopicAttributes($request)
    {
        return $this->deleteTopicAttributesWithHttpInfo($request);
    }

    public function deleteTopicAttributesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteTopicAttributesRequest');
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
    public function listLogtank($request)
    {
        return $this->listLogtankWithHttpInfo($request);
    }

    public function listLogtankWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListLogtankRequest');
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
    public function listMessageTemplateDetails($request)
    {
        return $this->listMessageTemplateDetailsWithHttpInfo($request);
    }

    public function listMessageTemplateDetailsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListMessageTemplateDetailsRequest');
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
    public function listMessageTemplates($request)
    {
        return $this->listMessageTemplatesWithHttpInfo($request);
    }

    public function listMessageTemplatesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListMessageTemplatesRequest');
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
    public function listProjectTags($request)
    {
        return $this->listProjectTagsWithHttpInfo($request);
    }

    public function listProjectTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListProjectTagsRequest');
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
    public function listResourceInstances($request)
    {
        return $this->listResourceInstancesWithHttpInfo($request);
    }

    public function listResourceInstancesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListResourceInstancesRequest');
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
    public function listResourceTags($request)
    {
        return $this->listResourceTagsWithHttpInfo($request);
    }

    public function listResourceTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListResourceTagsRequest');
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
    public function listSubscriptions($request)
    {
        return $this->listSubscriptionsWithHttpInfo($request);
    }

    public function listSubscriptionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListSubscriptionsRequest');
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
    public function listSubscriptionsByTopic($request)
    {
        return $this->listSubscriptionsByTopicWithHttpInfo($request);
    }

    public function listSubscriptionsByTopicWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListSubscriptionsByTopicRequest');
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
    public function listTopicAttributes($request)
    {
        return $this->listTopicAttributesWithHttpInfo($request);
    }

    public function listTopicAttributesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicAttributesRequest');
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
    public function listTopicDetails($request)
    {
        return $this->listTopicDetailsWithHttpInfo($request);
    }

    public function listTopicDetailsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicDetailsRequest');
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
    public function listTopics($request)
    {
        return $this->listTopicsWithHttpInfo($request);
    }

    public function listTopicsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListTopicsRequest');
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
    public function listVersion($request)
    {
        return $this->listVersionWithHttpInfo($request);
    }

    public function listVersionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListVersionRequest');
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
    public function listVersions($request)
    {
        return $this->listVersionsWithHttpInfo($request);
    }

    public function listVersionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListVersionsRequest');
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
    public function publishHttpDetect($request)
    {
        return $this->publishHttpDetectWithHttpInfo($request);
    }

    public function publishHttpDetectWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\PublishHttpDetectRequest');
    }

    /**
     * 消息发布
     *
     * 将消息发送给Topic的所有订阅端点。当返回消息ID时，该消息已被保存并开始尝试将其推送给Topic的订阅者。三种消息发送方式
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
    public function publishMessage($request)
    {
        return $this->publishMessageWithHttpInfo($request);
    }

    public function publishMessageWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\PublishMessageRequest');
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
    public function showHttpDetectResult($request)
    {
        return $this->showHttpDetectResultWithHttpInfo($request);
    }

    public function showHttpDetectResultWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ShowHttpDetectResultRequest');
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
    public function updateLogtank($request)
    {
        return $this->updateLogtankWithHttpInfo($request);
    }

    public function updateLogtankWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateLogtankRequest');
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
    public function updateMessageTemplate($request)
    {
        return $this->updateMessageTemplateWithHttpInfo($request);
    }

    public function updateMessageTemplateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateMessageTemplateRequest');
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
    public function updateSubscription($request)
    {
        return $this->updateSubscriptionWithHttpInfo($request);
    }

    public function updateSubscriptionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateSubscriptionRequest');
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
    public function updateTopic($request)
    {
        return $this->updateTopicWithHttpInfo($request);
    }

    public function updateTopicWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateTopicRequest');
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
    public function updateTopicAttribute($request)
    {
        return $this->updateTopicAttributeWithHttpInfo($request);
    }

    public function updateTopicAttributeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateTopicAttributeRequest');
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
    public function createApplication($request)
    {
        return $this->createApplicationWithHttpInfo($request);
    }

    public function createApplicationWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateApplicationRequest');
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
    public function deleteApplication($request)
    {
        return $this->deleteApplicationWithHttpInfo($request);
    }

    public function deleteApplicationWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteApplicationRequest');
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
    public function listApplicationAttributes($request)
    {
        return $this->listApplicationAttributesWithHttpInfo($request);
    }

    public function listApplicationAttributesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationAttributesRequest');
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
    public function listApplications($request)
    {
        return $this->listApplicationsWithHttpInfo($request);
    }

    public function listApplicationsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationsRequest');
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
    public function publishAppMessage($request)
    {
        return $this->publishAppMessageWithHttpInfo($request);
    }

    public function publishAppMessageWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\PublishAppMessageRequest');
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
    public function updateApplication($request)
    {
        return $this->updateApplicationWithHttpInfo($request);
    }

    public function updateApplicationWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateApplicationRequest');
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
    public function createApplicationEndpoint($request)
    {
        return $this->createApplicationEndpointWithHttpInfo($request);
    }

    public function createApplicationEndpointWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\CreateApplicationEndpointRequest');
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
    public function deleteApplicationEndpoint($request)
    {
        return $this->deleteApplicationEndpointWithHttpInfo($request);
    }

    public function deleteApplicationEndpointWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\DeleteApplicationEndpointRequest');
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
    public function listApplicationEndpointAttributes($request)
    {
        return $this->listApplicationEndpointAttributesWithHttpInfo($request);
    }

    public function listApplicationEndpointAttributesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationEndpointAttributesRequest');
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
    public function listApplicationEndpoints($request)
    {
        return $this->listApplicationEndpointsWithHttpInfo($request);
    }

    public function listApplicationEndpointsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\ListApplicationEndpointsRequest');
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
    public function updateApplicationEndpoint($request)
    {
        return $this->updateApplicationEndpointWithHttpInfo($request);
    }

    public function updateApplicationEndpointWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Smn\V2\Model\UpdateApplicationEndpointRequest');
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