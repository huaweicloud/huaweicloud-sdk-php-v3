<?php

namespace HuaweiCloud\SDK\Eg\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class EgClient extends Client
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
        $client = new ClientBuilder(new EgClient());
        return $client;
    }


    /**
     * 预校验指定事件源发布事件成功
     *
     * 发布事件到事件源成功需要有订阅等条件，预先校验。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkPutEvents($request)
    {
        return $this->checkPutEventsWithHttpInfo($request);
    }

    public function checkPutEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/events/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CheckPutEventsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CheckPutEventsRequest');
    }

    /**
     * 创建服务委托
     *
     * 按照业务场景，一键创建服务委托授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAgencies($request)
    {
        return $this->createAgenciesWithHttpInfo($request);
    }

    public function createAgenciesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-agencies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateAgenciesResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateAgenciesRequest');
    }

    /**
     * 创建自定义事件通道
     *
     * 创建自定义事件通道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createChannel($request)
    {
        return $this->createChannelWithHttpInfo($request);
    }

    public function createChannelWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateChannelResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateChannelRequest');
    }

    /**
     * 创建目标连接
     *
     * 创建目标连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConnection($request)
    {
        return $this->createConnectionWithHttpInfo($request);
    }

    public function createConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateConnectionRequest');
    }

    /**
     * 创建访问端点
     *
     * 创建访问端点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEndpoint($request)
    {
        return $this->createEndpointWithHttpInfo($request);
    }

    public function createEndpointWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEndpointResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEndpointRequest');
    }

    /**
     * 创建自定义事件模型
     *
     * 创建自定义事件模型
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEventSchema($request)
    {
        return $this->createEventSchemaWithHttpInfo($request);
    }

    public function createEventSchemaWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventSchemaResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventSchemaRequest');
    }

    /**
     * 创建自定义事件模型版本
     *
     * 创建自定义事件模型版本，版本号后台自动生成
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEventSchemaVersion($request)
    {
        return $this->createEventSchemaVersionWithHttpInfo($request);
    }

    public function createEventSchemaVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventSchemaVersionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventSchemaVersionRequest');
    }

    /**
     * 创建自定义事件源
     *
     * 创建用户自定义类型的事件源，只能指定自定义通道，不能指定系统通道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEventSource($request)
    {
        return $this->createEventSourceWithHttpInfo($request);
    }

    public function createEventSourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventSourceResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventSourceRequest');
    }

    /**
     * 创建事件流
     *
     * 创建事件流。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEventStreaming($request)
    {
        return $this->createEventStreamingWithHttpInfo($request);
    }

    public function createEventStreamingWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eventstreamings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventStreamingResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateEventStreamingRequest');
    }

    /**
     * 创建事件订阅
     *
     * 创建事件订阅。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubscription($request)
    {
        return $this->createSubscriptionWithHttpInfo($request);
    }

    public function createSubscriptionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateSubscriptionRequest');
    }

    /**
     * 创建事件订阅目标
     *
     * 创建单个事件订阅目标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubscriptionTarget($request)
    {
        return $this->createSubscriptionTargetWithHttpInfo($request);
    }

    public function createSubscriptionTargetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}/targets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\CreateSubscriptionTargetResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\CreateSubscriptionTargetRequest');
    }

    /**
     * 删除自定义事件通道
     *
     * 删除指定自定义事件通道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteChannel($request)
    {
        return $this->deleteChannelWithHttpInfo($request);
    }

    public function deleteChannelWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/channels/{channel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['channelId'] !== null) {
            $pathParams['channel_id'] = $localVarParams['channelId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteChannelResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteChannelRequest');
    }

    /**
     * 删除目标连接
     *
     * 删除目标连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConnection($request)
    {
        return $this->deleteConnectionWithHttpInfo($request);
    }

    public function deleteConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteConnectionRequest');
    }

    /**
     * 删除访问端点
     *
     * 删除访问端点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEndpoint($request)
    {
        return $this->deleteEndpointWithHttpInfo($request);
    }

    public function deleteEndpointWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/endpoints/{endpoint_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEndpointResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEndpointRequest');
    }

    /**
     * 删除事件模型
     *
     * 删除事件模型
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEventSchema($request)
    {
        return $this->deleteEventSchemaWithHttpInfo($request);
    }

    public function deleteEventSchemaWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventSchemaResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventSchemaRequest');
    }

    /**
     * 删除事件模型版本
     *
     * 删除事件模型指定版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEventSchemaVersion($request)
    {
        return $this->deleteEventSchemaVersionWithHttpInfo($request);
    }

    public function deleteEventSchemaVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventSchemaVersionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventSchemaVersionRequest');
    }

    /**
     * 删除自定义事件源
     *
     * 删除指定的自定义事件源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEventSource($request)
    {
        return $this->deleteEventSourceWithHttpInfo($request);
    }

    public function deleteEventSourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/sources/{source_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceId'] !== null) {
            $pathParams['source_id'] = $localVarParams['sourceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventSourceResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventSourceRequest');
    }

    /**
     * 删除事件流
     *
     * 删除事件流。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEventStreaming($request)
    {
        return $this->deleteEventStreamingWithHttpInfo($request);
    }

    public function deleteEventStreamingWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eventstreamings/{eventstreaming_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventstreamingId'] !== null) {
            $pathParams['eventstreaming_id'] = $localVarParams['eventstreamingId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventStreamingResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteEventStreamingRequest');
    }

    /**
     * 删除事件订阅
     *
     * 删除事件订阅。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubscription($request)
    {
        return $this->deleteSubscriptionWithHttpInfo($request);
    }

    public function deleteSubscriptionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteSubscriptionRequest');
    }

    /**
     * 删除事件订阅目标
     *
     * 删除事件订阅目标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubscriptionTarget($request)
    {
        return $this->deleteSubscriptionTargetWithHttpInfo($request);
    }

    public function deleteSubscriptionTargetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}/targets/{target_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
        }
        if ($localVarParams['targetId'] !== null) {
            $pathParams['target_id'] = $localVarParams['targetId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteSubscriptionTargetResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DeleteSubscriptionTargetRequest');
    }

    /**
     * 事件模型自动发现
     *
     * 事件模型自动发现
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function discoverEventSchemaFromData($request)
    {
        return $this->discoverEventSchemaFromDataWithHttpInfo($request);
    }

    public function discoverEventSchemaFromDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schema-discover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\DiscoverEventSchemaFromDataResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\DiscoverEventSchemaFromDataRequest');
    }

    /**
     * 操作事件订阅
     *
     * 操作事件订阅，支持启用、禁用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeSubscriptionOperation($request)
    {
        return $this->executeSubscriptionOperationWithHttpInfo($request);
    }

    public function executeSubscriptionOperationWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/operation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ExecuteSubscriptionOperationResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ExecuteSubscriptionOperationRequest');
    }

    /**
     * 查询服务委托
     *
     * 查询服务委托。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAgencies($request)
    {
        return $this->listAgenciesWithHttpInfo($request);
    }

    public function listAgenciesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-agencies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListAgenciesResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListAgenciesRequest');
    }

    /**
     * 查询事件通道列表
     *
     * 查询事件通道列表，包括系统通道和自定义通道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listChannels($request)
    {
        return $this->listChannelsWithHttpInfo($request);
    }

    public function listChannelsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListChannelsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListChannelsRequest');
    }

    /**
     * 查询目标连接列表
     *
     * 查询目标连接列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConnections($request)
    {
        return $this->listConnectionsWithHttpInfo($request);
    }

    public function listConnectionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListConnectionsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListConnectionsRequest');
    }

    /**
     * 查询访问端点
     *
     * 查询访问端点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEndpoints($request)
    {
        return $this->listEndpointsWithHttpInfo($request);
    }

    public function listEndpointsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
        }
        if ($localVarParams['subnetId'] !== null) {
            $queryParams['subnet_id'] = $localVarParams['subnetId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListEndpointsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListEndpointsRequest');
    }

    /**
     * 查询事件模型列表
     *
     * 查询事件模型列表，包括系统事件模型和自定义事件模型
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventSchema($request)
    {
        return $this->listEventSchemaWithHttpInfo($request);
    }

    public function listEventSchemaWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventSchemaResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventSchemaRequest');
    }

    /**
     * 查询事件模型版本列表
     *
     * 查询事件模型版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventSchemaVersions($request)
    {
        return $this->listEventSchemaVersionsWithHttpInfo($request);
    }

    public function listEventSchemaVersionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventSchemaVersionsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventSchemaVersionsRequest');
    }

    /**
     * 查询事件源列表
     *
     * 支持条件查询，如可以指定事件通道ID来查询某个事件通道下的所有事件源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventSources($request)
    {
        return $this->listEventSourcesWithHttpInfo($request);
    }

    public function listEventSourcesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['channelId'] !== null) {
            $queryParams['channel_id'] = $localVarParams['channelId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
        }
        if ($localVarParams['fuzzyLabel'] !== null) {
            $queryParams['fuzzy_label'] = $localVarParams['fuzzyLabel'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventSourcesResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventSourcesRequest');
    }

    /**
     * 查询事件流列表
     *
     * 查询事件流列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventStreaming($request)
    {
        return $this->listEventStreamingWithHttpInfo($request);
    }

    public function listEventStreamingWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eventstreamings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventStreamingResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventStreamingRequest');
    }

    /**
     * 查询事件目标分类
     *
     * 查询预置的事件目标分类，获取每个事件目标分类的字段定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventTarget($request)
    {
        return $this->listEventTargetWithHttpInfo($request);
    }

    public function listEventTargetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/target-catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['fuzzyLabel'] !== null) {
            $queryParams['fuzzy_label'] = $localVarParams['fuzzyLabel'];
        }
        if ($localVarParams['supportTypes'] !== null) {
            $queryParams['support_types'] = $localVarParams['supportTypes'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventTargetResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListEventTargetRequest');
    }

    /**
     * 查询事件通道监控指标数据
     *
     * 查询事件通道监控指标数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPubMetrics($request)
    {
        return $this->listPubMetricsWithHttpInfo($request);
    }

    public function listPubMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/metrics/pub';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['channelId'] !== null) {
            $queryParams['channel_id'] = $localVarParams['channelId'];
        }
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['sourceName'] !== null) {
            $queryParams['source_name'] = $localVarParams['sourceName'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListPubMetricsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListPubMetricsRequest');
    }

    /**
     * 查询配额
     *
     * 查询当前租户的配额，未特殊配置过的会返回默认配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotas($request)
    {
        return $this->listQuotasWithHttpInfo($request);
    }

    public function listQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListQuotasRequest');
    }

    /**
     * 查询事件订阅监控指标数据
     *
     * 查询事件订阅监控指标数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubMetrics($request)
    {
        return $this->listSubMetricsWithHttpInfo($request);
    }

    public function listSubMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/metrics/sub';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['subscriptionId'] !== null) {
            $queryParams['subscription_id'] = $localVarParams['subscriptionId'];
        }
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['targetId'] !== null) {
            $queryParams['target_id'] = $localVarParams['targetId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListSubMetricsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListSubMetricsRequest');
    }

    /**
     * 查询事件订阅列表
     *
     * 查询事件订阅列表，支持指定事件通道。
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
        $resourcePath = '/v1/{project_id}/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['channelId'] !== null) {
            $queryParams['channel_id'] = $localVarParams['channelId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['fuzzyName'] !== null) {
            $queryParams['fuzzy_name'] = $localVarParams['fuzzyName'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $queryParams['connection_id'] = $localVarParams['connectionId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListSubscriptionsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListSubscriptionsRequest');
    }

    /**
     * 查询事件追踪列表
     *
     * 查询事件追踪列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTracedEvents($request)
    {
        return $this->listTracedEventsWithHttpInfo($request);
    }

    public function listTracedEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/traced-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['eventId'] !== null) {
            $queryParams['event_id'] = $localVarParams['eventId'];
        }
        if ($localVarParams['sourceName'] !== null) {
            $queryParams['source_name'] = $localVarParams['sourceName'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['subscriptionName'] !== null) {
            $queryParams['subscription_name'] = $localVarParams['subscriptionName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['channelId'] !== null) {
            $queryParams['channel_id'] = $localVarParams['channelId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListTracedEventsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListTracedEventsRequest');
    }

    /**
     * 查询单个函数的EG触发器
     *
     * 查询触发器，支持指定函数urn，一个以函数urn为目标的订阅为一个触发器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTriggers($request)
    {
        return $this->listTriggersWithHttpInfo($request);
    }

    public function listTriggersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscription-triggers/{func_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['funcUrn'] !== null) {
            $pathParams['func_urn'] = $localVarParams['funcUrn'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListTriggersResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListTriggersRequest');
    }

    /**
     * 查询单个函数流的EG触发器
     *
     * 查询触发器，支持指定函数流id，一个以函数流id为目标的订阅为一个触发器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkflowTriggers($request)
    {
        return $this->listWorkflowTriggersWithHttpInfo($request);
    }

    public function listWorkflowTriggersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscription-triggers/workflow/{workflow_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListWorkflowTriggersResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListWorkflowTriggersRequest');
    }

    /**
     * 发布事件到事件通道
     *
     * 发布事件到事件通道，仅供调试使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putEvents($request)
    {
        return $this->putEventsWithHttpInfo($request);
    }

    public function putEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/channels/{channel_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['channelId'] !== null) {
            $pathParams['channel_id'] = $localVarParams['channelId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\PutEventsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\PutEventsRequest');
    }

    /**
     * 发布官方事件到事件通道
     *
     * 发布官方事件到事件通道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putOfficialEvents($request)
    {
        return $this->putOfficialEventsWithHttpInfo($request);
    }

    public function putOfficialEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/official/sources/{source_name}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceName'] !== null) {
            $pathParams['source_name'] = $localVarParams['sourceName'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\PutOfficialEventsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\PutOfficialEventsRequest');
    }

    /**
     * 操作事件流
     *
     * 操作事件流。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resumeEventStreaming($request)
    {
        return $this->resumeEventStreamingWithHttpInfo($request);
    }

    public function resumeEventStreamingWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eventstreamings/operate/{eventstreaming_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventstreamingId'] !== null) {
            $pathParams['eventstreaming_id'] = $localVarParams['eventstreamingId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ResumeEventStreamingResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ResumeEventStreamingRequest');
    }

    /**
     * 查询事件通道详情
     *
     * 查询指定事件通道详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfChannel($request)
    {
        return $this->showDetailOfChannelWithHttpInfo($request);
    }

    public function showDetailOfChannelWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/channels/{channel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['channelId'] !== null) {
            $pathParams['channel_id'] = $localVarParams['channelId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfChannelResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfChannelRequest');
    }

    /**
     * 查询目标连接详情
     *
     * 查询目标连接详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfConnection($request)
    {
        return $this->showDetailOfConnectionWithHttpInfo($request);
    }

    public function showDetailOfConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfConnectionRequest');
    }

    /**
     * 查询发送事件的内容
     *
     * 根据事件ID查询事件详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfEvent($request)
    {
        return $this->showDetailOfEventWithHttpInfo($request);
    }

    public function showDetailOfEventWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/events/detail/{trace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['traceId'] !== null) {
            $pathParams['trace_id'] = $localVarParams['traceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventRequest');
    }

    /**
     * 查询事件模型详情
     *
     * 查询事件模型详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfEventSchema($request)
    {
        return $this->showDetailOfEventSchemaWithHttpInfo($request);
    }

    public function showDetailOfEventSchemaWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventSchemaResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventSchemaRequest');
    }

    /**
     * 查询事件模型版本详情
     *
     * 查询事件模型指定版本详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfEventSchemaVersion($request)
    {
        return $this->showDetailOfEventSchemaVersionWithHttpInfo($request);
    }

    public function showDetailOfEventSchemaVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventSchemaVersionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventSchemaVersionRequest');
    }

    /**
     * 查询事件源详情
     *
     * 查询事件源详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfEventSource($request)
    {
        return $this->showDetailOfEventSourceWithHttpInfo($request);
    }

    public function showDetailOfEventSourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/sources/{source_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceId'] !== null) {
            $pathParams['source_id'] = $localVarParams['sourceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventSourceResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventSourceRequest');
    }

    /**
     * 事件轨迹详情
     *
     * 事件轨迹详情，展示事件源到投递目标的投递情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfEventTrace($request)
    {
        return $this->showDetailOfEventTraceWithHttpInfo($request);
    }

    public function showDetailOfEventTraceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/events/trace/detail/{trace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['channelId'] !== null) {
            $queryParams['channel_id'] = $localVarParams['channelId'];
        }
        if ($localVarParams['traceId'] !== null) {
            $pathParams['trace_id'] = $localVarParams['traceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventTraceResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfEventTraceRequest');
    }

    /**
     * 查询事件订阅详情
     *
     * 查询事件订阅详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfSubscription($request)
    {
        return $this->showDetailOfSubscriptionWithHttpInfo($request);
    }

    public function showDetailOfSubscriptionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfSubscriptionRequest');
    }

    /**
     * 查询事件订阅目标详情
     *
     * 查询事件订阅目标详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDetailOfSubscriptionTarget($request)
    {
        return $this->showDetailOfSubscriptionTargetWithHttpInfo($request);
    }

    public function showDetailOfSubscriptionTargetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}/targets/{target_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
        }
        if ($localVarParams['targetId'] !== null) {
            $pathParams['target_id'] = $localVarParams['targetId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfSubscriptionTargetResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowDetailOfSubscriptionTargetRequest');
    }

    /**
     * 查询事件流详情
     *
     * 查询事件流详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEventStreaming($request)
    {
        return $this->showEventStreamingWithHttpInfo($request);
    }

    public function showEventStreamingWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eventstreamings/{eventstreaming_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventstreamingId'] !== null) {
            $pathParams['eventstreaming_id'] = $localVarParams['eventstreamingId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowEventStreamingResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowEventStreamingRequest');
    }

    /**
     * 查询事件示例列表
     *
     * 查询事件示例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showListOfEventSample($request)
    {
        return $this->showListOfEventSampleWithHttpInfo($request);
    }

    public function showListOfEventSampleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/samples';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['eventTypeName'] !== null) {
            $queryParams['event_type_name'] = $localVarParams['eventTypeName'];
        }
        if ($localVarParams['eventSourceId'] !== null) {
            $queryParams['event_source_id'] = $localVarParams['eventSourceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ShowListOfEventSampleResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ShowListOfEventSampleRequest');
    }

    /**
     * 更新自定义事件通道
     *
     * 更新自定义事件通道定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateChannel($request)
    {
        return $this->updateChannelWithHttpInfo($request);
    }

    public function updateChannelWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/channels/{channel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['channelId'] !== null) {
            $pathParams['channel_id'] = $localVarParams['channelId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateChannelResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateChannelRequest');
    }

    /**
     * 更新目标连接
     *
     * 更新目标连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateConnection($request)
    {
        return $this->updateConnectionWithHttpInfo($request);
    }

    public function updateConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateConnectionRequest');
    }

    /**
     * 更新访问端点
     *
     * 更新访问端点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEndpoint($request)
    {
        return $this->updateEndpointWithHttpInfo($request);
    }

    public function updateEndpointWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/endpoints/{endpoint_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEndpointResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEndpointRequest');
    }

    /**
     * 更新自定义事件模型
     *
     * 更新自定义事件模型定义
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEventSchema($request)
    {
        return $this->updateEventSchemaWithHttpInfo($request);
    }

    public function updateEventSchemaWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schemas/{schema_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['schemaId'] !== null) {
            $pathParams['schema_id'] = $localVarParams['schemaId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEventSchemaResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEventSchemaRequest');
    }

    /**
     * 更新自定义事件源
     *
     * 更新自定义事件源定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEventSource($request)
    {
        return $this->updateEventSourceWithHttpInfo($request);
    }

    public function updateEventSourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/sources/{source_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceId'] !== null) {
            $pathParams['source_id'] = $localVarParams['sourceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEventSourceResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEventSourceRequest');
    }

    /**
     * 更新事件流
     *
     * 更新事件流。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEventStreaming($request)
    {
        return $this->updateEventStreamingWithHttpInfo($request);
    }

    public function updateEventStreamingWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eventstreamings/{eventstreaming_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventstreamingId'] !== null) {
            $pathParams['eventstreaming_id'] = $localVarParams['eventstreamingId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEventStreamingResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateEventStreamingRequest');
    }

    /**
     * 更新事件订阅
     *
     * 更新事件订阅定义。
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
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateSubscriptionRequest');
    }

    /**
     * 更新事件订阅源
     *
     * 更新事件订阅源定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubscriptionSource($request)
    {
        return $this->updateSubscriptionSourceWithHttpInfo($request);
    }

    public function updateSubscriptionSourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}/sources/{source_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
        }
        if ($localVarParams['sourceId'] !== null) {
            $pathParams['source_id'] = $localVarParams['sourceId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateSubscriptionSourceResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateSubscriptionSourceRequest');
    }

    /**
     * 更新事件订阅目标
     *
     * 更新事件订阅目标定义。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubscriptionTarget($request)
    {
        return $this->updateSubscriptionTargetWithHttpInfo($request);
    }

    public function updateSubscriptionTargetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/{subscription_id}/targets/{target_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
        }
        if ($localVarParams['targetId'] !== null) {
            $pathParams['target_id'] = $localVarParams['targetId'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateSubscriptionTargetResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\UpdateSubscriptionTargetRequest');
    }

    /**
     * 获取API版本列表
     *
     * 获取服务支持的API版本列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersions($request)
    {
        return $this->listApiVersionsWithHttpInfo($request);
    }

    public function listApiVersionsWithHttpInfo($request)
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListApiVersionsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListApiVersionsRequest');
    }

    /**
     * 获取obs桶列表
     *
     * 获取obs桶列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listObsBuckets($request)
    {
        return $this->listObsBucketsWithHttpInfo($request);
    }

    public function listObsBucketsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/obsbuckets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
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
            $responseType='\HuaweiCloud\SDK\Eg\V1\Model\ListObsBucketsResponse',
            $requestType='\HuaweiCloud\SDK\Eg\V1\Model\ListObsBucketsRequest');
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