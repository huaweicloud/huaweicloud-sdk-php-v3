<?php

namespace HuaweiCloud\SDK\IoTDA\V5;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IoTDAAsyncClient extends Client
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
        $client = new ClientBuilder(new IoTDAAsyncClient());
        $client->withDerivedAuthServiceName("iotdm");
        return $client;
    }

    /**
     * 生成接入凭证
     *
     * 接入凭证是用于客户端使用AMQP等协议与平台建链的一个认证凭据。只保留一条记录，如果重复调用只会重置接入凭证，使得之前的失效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccessCodeAsync($request)
    {
        return $this->createAccessCodeAsyncWithHttpInfo($request);
    }
    
    public function createAccessCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/auth/accesscode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateAccessCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateAccessCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 创建AMQP队列
     *
     * 应用服务器可调用此接口在物联网平台创建一个AMQP队列。每个租户只能创建100个队列，若超过规格，则创建失败，若队列名称与已有的队列名称相同，则创建失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addQueueAsync($request)
    {
        return $this->addQueueAsyncWithHttpInfo($request);
    }
    
    public function addQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/amqp-queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 查询AMQP列表
     *
     * 应用服务器可调用此接口查询物联网平台中的AMQP队列信息列表。可通过队列名称作模糊查询，支持分页。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowQueueAsync($request)
    {
        return $this->batchShowQueueAsyncWithHttpInfo($request);
    }
    
    public function batchShowQueueAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/amqp-queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\BatchShowQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\BatchShowQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 删除AMQP队列
     *
     * 应用服务器可调用此接口在物联网平台上删除指定AMQP队列。若当前队列正在使用，则会删除失败。
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
        $resourcePath = '/v5/iot/{project_id}/amqp-queues/{queue_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['queueId'] !== null) {
            $pathParams['queue_id'] = $localVarParams['queueId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个AMQP队列
     *
     * 应用服务器可调用此接口查询物联网平台中指定队列的详细信息。
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
        $resourcePath = '/v5/iot/{project_id}/amqp-queues/{queue_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['queueId'] !== null) {
            $pathParams['queue_id'] = $localVarParams['queueId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowQueueResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowQueueRequest',
            $asyncRequest = true);
    }

    /**
     * 创建资源空间
     *
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口创建资源空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addApplicationAsync($request)
    {
        return $this->addApplicationAsyncWithHttpInfo($request);
    }
    
    public function addApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源空间
     *
     * 删除指定资源空间。删除资源空间属于高危操作，删除资源空间后，该空间下的产品、设备等资源将不可用，请谨慎操作！
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
        $resourcePath = '/v5/iot/{project_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源空间
     *
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口查询指定资源空间详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplicationAsync($request)
    {
        return $this->showApplicationAsyncWithHttpInfo($request);
    }
    
    public function showApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源空间列表
     *
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口查询资源空间列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplicationsAsync($request)
    {
        return $this->showApplicationsAsyncWithHttpInfo($request);
    }
    
    public function showApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['defaultApp'] !== null) {
            $queryParams['default_app'] = $localVarParams['defaultApp'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowApplicationsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新资源空间
     *
     * 应用服务器可以调用此接口更新资源空间的名称
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
        $resourcePath = '/v5/iot/{project_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 统计设备下的历史命令总数
     *
     * 统计设备下的历史命令总数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countAsyncHistoryCommandsAsync($request)
    {
        return $this->countAsyncHistoryCommandsAsyncWithHttpInfo($request);
    }
    
    public function countAsyncHistoryCommandsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/async-commands-history/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['commandName'] !== null) {
            $queryParams['command_name'] = $localVarParams['commandName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CountAsyncHistoryCommandsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CountAsyncHistoryCommandsRequest',
            $asyncRequest = true);
    }

    /**
     * 下发异步设备命令
     *
     * 设备的产品模型中定义了物联网平台可向设备下发的命令，应用服务器可调用此接口向指定设备下发异步命令，以实现对设备的控制。平台负责将命令发送给设备，并将设备执行命令结果异步通知应用服务器。 命令执行结果支持灵活的数据流转，应用服务器通过调用物联网平台的创建规则触发条件（Resource:device.command.status，Event:update）、创建规则动作并激活规则后，当命令状态变更时，物联网平台会根据规则将结果发送到规则指定的服务器，如用户自定义的HTTP服务器，AMQP服务器，以及华为云的其他储存服务器等, 详情参考[[设备命令状态变更通知](https://support.huaweicloud.com/api-iothub/iot_06_v5_01212.html)](tag:hws)[[设备命令状态变更通知](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_01212.html)](tag:hws_hk)。
     * 注意：
     * - 此接口适用于NB设备异步命令下发，暂不支持其他协议类型设备命令下发。
     * - 此接口仅支持单个设备异步命令下发，如需多个设备异步命令下发，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAsyncCommandAsync($request)
    {
        return $this->createAsyncCommandAsyncWithHttpInfo($request);
    }
    
    public function createAsyncCommandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/async-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateAsyncCommandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateAsyncCommandRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备下队列中的命令
     *
     * 查询设备下队列中的命令（处理中的命令），包含PENDING、SENT、DELIVERED三种状态，注意：DELIVERED状态的命令经过系统设定的一段时间（具体以系统配置为准）仍然没有更新，就会从队列中移除，变为历史命令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAsyncCommandsAsync($request)
    {
        return $this->listAsyncCommandsAsyncWithHttpInfo($request);
    }
    
    public function listAsyncCommandsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/async-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
        if ($localVarParams['commandName'] !== null) {
            $queryParams['command_name'] = $localVarParams['commandName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListAsyncCommandsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListAsyncCommandsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备下的历史命令
     *
     * 查询设备下发的历史异步命令，包含EXPIRED、SUCCESSFUL、FAILED、TIMEOUT、DELIVERED五种状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAsyncHistoryCommandsAsync($request)
    {
        return $this->listAsyncHistoryCommandsAsyncWithHttpInfo($request);
    }
    
    public function listAsyncHistoryCommandsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/async-commands-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
        if ($localVarParams['commandName'] !== null) {
            $queryParams['command_name'] = $localVarParams['commandName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListAsyncHistoryCommandsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListAsyncHistoryCommandsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定id的命令
     *
     * 物联网平台可查询指定id的命令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAsyncDeviceCommandAsync($request)
    {
        return $this->showAsyncDeviceCommandAsyncWithHttpInfo($request);
    }
    
    public function showAsyncDeviceCommandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/async-commands/{command_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
        }
        if ($localVarParams['commandId'] !== null) {
            $pathParams['command_id'] = $localVarParams['commandId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowAsyncDeviceCommandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowAsyncDeviceCommandRequest',
            $asyncRequest = true);
    }

    /**
     * 新建数据流转积压策略
     *
     * 应用服务器可调用此接口在物联网平台创建数据流转积压策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRoutingBacklogPolicyAsync($request)
    {
        return $this->createRoutingBacklogPolicyAsyncWithHttpInfo($request);
    }
    
    public function createRoutingBacklogPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/backlog-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingBacklogPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingBacklogPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据流转积压策略
     *
     * 应用服务器可调用此接口在物联网平台删除指定数据流转积压策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRoutingBacklogPolicyAsync($request)
    {
        return $this->deleteRoutingBacklogPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteRoutingBacklogPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/backlog-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingBacklogPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingBacklogPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据流转积压策略列表
     *
     * 应用服务器可调用此接口查询在物联网平台设置的数据流转积压策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoutingBacklogPolicyAsync($request)
    {
        return $this->listRoutingBacklogPolicyAsyncWithHttpInfo($request);
    }
    
    public function listRoutingBacklogPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/backlog-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingBacklogPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingBacklogPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据流转积压策略
     *
     * 应用服务器可调用此接口在物联网平台查询指定数据流转积压策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRoutingBacklogPolicyAsync($request)
    {
        return $this->showRoutingBacklogPolicyAsyncWithHttpInfo($request);
    }
    
    public function showRoutingBacklogPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/backlog-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingBacklogPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingBacklogPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据流转积压策略
     *
     * 应用服务器可调用此接口在物联网平台修改指定数据流转积压策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoutingBacklogPolicyAsync($request)
    {
        return $this->updateRoutingBacklogPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateRoutingBacklogPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/backlog-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingBacklogPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingBacklogPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建批量任务
     *
     * 应用服务器可调用此接口为创建批量处理任务，对多个设备进行批量操作。当前支持批量软固件升级、批量创建设备、批量删除设备、批量冻结设备、批量解冻设备、批量创建命令、批量创建消息任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBatchTaskAsync($request)
    {
        return $this->createBatchTaskAsyncWithHttpInfo($request);
    }
    
    public function createBatchTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateBatchTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateBatchTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除批量任务
     *
     * 应用服务器可调用此接口删除物联网平台中已经完成（状态为成功，失败，部分成功，已停止）的批量任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBatchTaskAsync($request)
    {
        return $this->deleteBatchTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteBatchTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批量任务列表
     *
     * 应用服务器可调用此接口查询物联网平台中批量任务列表，每一个任务又包括具体的任务内容、任务状态、任务完成情况统计等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBatchTasksAsync($request)
    {
        return $this->listBatchTasksAsyncWithHttpInfo($request);
    }
    
    public function listBatchTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['taskType'] !== null) {
            $queryParams['task_type'] = $localVarParams['taskType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 重试批量任务
     *
     * 应用服务器可调用此接口重试批量任务，目前只支持task_type为firmwareUpgrade，softwareUpgrade。如果task_id对应任务已经成功、停止、正在停止、等待中或初始化中，则不可以调用该接口。如果请求Body为{}，则调用该接口后会重新执行所有状态为失败、失败待重试和已停止的子任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryBatchTaskAsync($request)
    {
        return $this->retryBatchTaskAsyncWithHttpInfo($request);
    }
    
    public function retryBatchTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtasks/{task_id}/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\RetryBatchTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\RetryBatchTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批量任务
     *
     * 应用服务器可调用此接口查询物联网平台中指定批量任务的信息，包括任务内容、任务状态、任务完成情况统计以及子任务列表等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBatchTaskAsync($request)
    {
        return $this->showBatchTaskAsyncWithHttpInfo($request);
    }
    
    public function showBatchTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskDetailStatus'] !== null) {
            $queryParams['task_detail_status'] = $localVarParams['taskDetailStatus'];
        }
        if ($localVarParams['target'] !== null) {
            $queryParams['target'] = $localVarParams['target'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowBatchTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowBatchTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 停止批量任务
     *
     * 应用服务器可调用此接口停止批量任务，目前只支持task_type为firmwareUpgrade，softwareUpgrade。如果task_id对应任务已经完成（成功、失败、部分成功，已经停止）或正在停止中，则不可以调用该接口。如果请求Body为{}，则调用该接口后会停止所有正在执行中、等待中和失败待重试状态的子任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopBatchTaskAsync($request)
    {
        return $this->stopBatchTaskAsyncWithHttpInfo($request);
    }
    
    public function stopBatchTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtasks/{task_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\StopBatchTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\StopBatchTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除批量任务文件
     *
     * 应用服务器可调用此接口删除批量任务文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBatchTaskFileAsync($request)
    {
        return $this->deleteBatchTaskFileAsyncWithHttpInfo($request);
    }
    
    public function deleteBatchTaskFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtask-files/{file_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['fileId'] !== null) {
            $pathParams['file_id'] = $localVarParams['fileId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskFileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批量任务文件列表
     *
     * 应用服务器可调用此接口查询批量任务文件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBatchTaskFilesAsync($request)
    {
        return $this->listBatchTaskFilesAsyncWithHttpInfo($request);
    }
    
    public function listBatchTaskFilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtask-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTaskFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTaskFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建网桥
     *
     * 应用服务器可调用此接口在物联网平台创建一个网桥，仅在创建后的网桥才可以接入物联网平台。
     * - 一个实例最多支持20个网桥。
     * - 仅**标准版实例、企业版实例**支持该接口调用，基础版不支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addBridgeAsync($request)
    {
        return $this->addBridgeAsyncWithHttpInfo($request);
    }
    
    public function addBridgeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/bridges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddBridgeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddBridgeRequest',
            $asyncRequest = true);
    }

    /**
     * 删除网桥
     *
     * 应用服务器可调用此接口在物联网平台上删除指定网桥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBridgeAsync($request)
    {
        return $this->deleteBridgeAsyncWithHttpInfo($request);
    }
    
    public function deleteBridgeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/bridges/{bridge_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['bridgeId'] !== null) {
            $pathParams['bridge_id'] = $localVarParams['bridgeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBridgeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBridgeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询网桥列表
     *
     * 应用服务器可调用此接口在物联网平台查询网桥列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBridgesAsync($request)
    {
        return $this->listBridgesAsyncWithHttpInfo($request);
    }
    
    public function listBridgesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/bridges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBridgesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBridgesRequest',
            $asyncRequest = true);
    }

    /**
     * 重置网桥密钥
     *
     * 应用服务器可调用此接口在物联网平台上重置网桥密钥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetBridgeSecretAsync($request)
    {
        return $this->resetBridgeSecretAsyncWithHttpInfo($request);
    }
    
    public function resetBridgeSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/bridges/{bridge_id}/reset-secret';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['bridgeId'] !== null) {
            $pathParams['bridge_id'] = $localVarParams['bridgeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetBridgeSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetBridgeSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 下发广播消息
     *
     * 应用服务器可调用此接口向订阅了指定Topic的所有在线设备发布广播消息。应用将广播消息下发给平台后，平台会先返回应用响应结果，再将消息广播给设备。
     * 注意：
     * - 此接口只适用于使用MQTT协议接入的设备。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function broadcastMessageAsync($request)
    {
        return $this->broadcastMessageAsyncWithHttpInfo($request);
    }
    
    public function broadcastMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/broadcast-messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\BroadcastMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\BroadcastMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 上传设备CA证书
     *
     * 应用服务器可调用此接口在物联网平台上传设备CA证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCertificateAsync($request)
    {
        return $this->addCertificateAsyncWithHttpInfo($request);
    }
    
    public function addCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['spAuthToken'] !== null) {
            $headerParams['sp_auth_token'] = $localVarParams['spAuthToken'];
        }
        if ($localVarParams['stageAuthToken'] !== null) {
            $headerParams['stage_auth_token'] = $localVarParams['stageAuthToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 验证设备CA证书
     *
     * 应用服务器可调用此接口在物联网平台验证设备的CA证书，目的是为了验证用户持有设备CA证书的私钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkCertificateAsync($request)
    {
        return $this->checkCertificateAsyncWithHttpInfo($request);
    }
    
    public function checkCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/certificates/{certificate_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['spAuthToken'] !== null) {
            $headerParams['sp_auth_token'] = $localVarParams['spAuthToken'];
        }
        if ($localVarParams['stageAuthToken'] !== null) {
            $headerParams['stage_auth_token'] = $localVarParams['stageAuthToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CheckCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CheckCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备CA证书
     *
     * 应用服务器可调用此接口在物联网平台删除设备CA证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCertificateAsync($request)
    {
        return $this->deleteCertificateAsyncWithHttpInfo($request);
    }
    
    public function deleteCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['spAuthToken'] !== null) {
            $headerParams['sp_auth_token'] = $localVarParams['spAuthToken'];
        }
        if ($localVarParams['stageAuthToken'] !== null) {
            $headerParams['stage_auth_token'] = $localVarParams['stageAuthToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取设备CA证书列表
     *
     * 应用服务器可调用此接口在物联网平台获取设备CA证书列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCertificatesAsync($request)
    {
        return $this->listCertificatesAsyncWithHttpInfo($request);
    }
    
    public function listCertificatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['spAuthToken'] !== null) {
            $headerParams['sp_auth_token'] = $localVarParams['spAuthToken'];
        }
        if ($localVarParams['stageAuthToken'] !== null) {
            $headerParams['stage_auth_token'] = $localVarParams['stageAuthToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListCertificatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListCertificatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询CA证书
     *
     * 应用服务器可调用此接口在物联网平台查询CA证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCertificateAsync($request)
    {
        return $this->showCertificateAsyncWithHttpInfo($request);
    }
    
    public function showCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['spAuthToken'] !== null) {
            $headerParams['sp_auth_token'] = $localVarParams['spAuthToken'];
        }
        if ($localVarParams['stageAuthToken'] !== null) {
            $headerParams['stage_auth_token'] = $localVarParams['stageAuthToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 更新CA证书
     *
     * 应用服务器可调用此接口在物联网平台上更新CA证书。仅标准版实例、企业版实例支持该接口调用，基础版不支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCertificateAsync($request)
    {
        return $this->updateCertificateAsyncWithHttpInfo($request);
    }
    
    public function updateCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 下发设备命令
     *
     * 设备的产品模型中定义了物联网平台可向设备下发的命令，应用服务器可调用此接口向指定设备下发命令，以实现对设备的同步控制。平台负责将命令以同步方式发送给设备，并将设备执行命令结果同步返回, 如果设备没有响应，平台会返回给应用服务器超时，平台超时时间是20秒。如果命令下发需要超过20秒，建议采用[[消息下发](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[消息下发](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk)。
     * 注意：
     * - 此接口适用于MQTT设备同步命令下发，暂不支持NB-IoT设备命令下发。
     * - 此接口仅支持单个设备同步命令下发，如需多个设备同步命令下发，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCommandAsync($request)
    {
        return $this->createCommandAsyncWithHttpInfo($request);
    }
    
    public function createCommandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateCommandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateCommandRequest',
            $asyncRequest = true);
    }

    /**
     * 创建设备鉴权模板
     *
     * 应用服务器可调用此接口在物联网平台创建一个设备鉴权模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeviceAuthenticationTemplateAsync($request)
    {
        return $this->createDeviceAuthenticationTemplateAsyncWithHttpInfo($request);
    }
    
    public function createDeviceAuthenticationTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authentication-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDeviceAuthenticationTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDeviceAuthenticationTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备鉴权模板
     *
     * 应用服务器可调用此接口在物联网平台上删除指定设备鉴权模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceAuthenticationTemplateAsync($request)
    {
        return $this->deleteDeviceAuthenticationTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceAuthenticationTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authentication-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceAuthenticationTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceAuthenticationTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备鉴权模板列表
     *
     * 应用服务器可调用此接口在物联网平台查询设备鉴权模板列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceAuthenticationTemplatesAsync($request)
    {
        return $this->listDeviceAuthenticationTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listDeviceAuthenticationTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authentication-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateName'] !== null) {
            $queryParams['template_name'] = $localVarParams['templateName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceAuthenticationTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceAuthenticationTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备鉴权模板详情
     *
     * 应用服务器可调用此接口在物联网平台查询指定设备鉴权模板ID的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceAuthenticationTemplateAsync($request)
    {
        return $this->showDeviceAuthenticationTemplateAsyncWithHttpInfo($request);
    }
    
    public function showDeviceAuthenticationTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authentication-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceAuthenticationTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceAuthenticationTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 修改设备鉴权模板
     *
     * 应用服务器可调用此接口在物联网平台上修改指定设备鉴权模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceAuthenticationTemplateAsync($request)
    {
        return $this->updateDeviceAuthenticationTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceAuthenticationTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authentication-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceAuthenticationTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceAuthenticationTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义鉴权
     *
     * 应用服务器可调用此接口在物联网平台创建一个自定义鉴权。自定义鉴权是指用户可以通过函数服务自定义实现鉴权逻辑，以对接入平台的设备进行身份认证。
     * - 单个实例最大可配置10个自定义鉴权
     * - 仅标准版实例、企业版实例支持该接口调用，基础版不支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeviceAuthorizerAsync($request)
    {
        return $this->createDeviceAuthorizerAsyncWithHttpInfo($request);
    }
    
    public function createDeviceAuthorizerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authorizers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDeviceAuthorizerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDeviceAuthorizerRequest',
            $asyncRequest = true);
    }

    /**
     * 删除自定义鉴权
     *
     * 应用服务器可调用此接口在物联网平台上删除指定自定义鉴权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceAuthorizerAsync($request)
    {
        return $this->deleteDeviceAuthorizerAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceAuthorizerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authorizers/{authorizer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['authorizerId'] !== null) {
            $pathParams['authorizer_id'] = $localVarParams['authorizerId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceAuthorizerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceAuthorizerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义鉴权列表
     *
     * 应用服务器可调用此接口在物联网平台查询自定义鉴权列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceAuthorizersAsync($request)
    {
        return $this->listDeviceAuthorizersAsyncWithHttpInfo($request);
    }
    
    public function listDeviceAuthorizersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authorizers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorizerName'] !== null) {
            $queryParams['authorizer_name'] = $localVarParams['authorizerName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceAuthorizersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceAuthorizersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义鉴权详情
     *
     * 应用服务器可调用此接口在物联网平台查询指定自定义鉴权ID的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceAuthorizerAsync($request)
    {
        return $this->showDeviceAuthorizerAsyncWithHttpInfo($request);
    }
    
    public function showDeviceAuthorizerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authorizers/{authorizer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['authorizerId'] !== null) {
            $pathParams['authorizer_id'] = $localVarParams['authorizerId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceAuthorizerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceAuthorizerRequest',
            $asyncRequest = true);
    }

    /**
     * 更新指定id的自定义鉴权
     *
     * 应用服务器可调用此接口在物联网平台更新指定id的自定义鉴权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceAuthorizerAsync($request)
    {
        return $this->updateDeviceAuthorizerAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceAuthorizerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-authorizers/{authorizer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['authorizerId'] !== null) {
            $pathParams['authorizer_id'] = $localVarParams['authorizerId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceAuthorizerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceAuthorizerRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备证书
     *
     * 应用服务器可调用此接口在物联网平台删除一个设备证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceCertificateAsync($request)
    {
        return $this->deleteDeviceCertificateAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用指定设备证书的设备列表
     *
     * 应用服务器可调用此接口在物联网平台查询使用指定设备证书的设备列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceByDeviceCertificateAsync($request)
    {
        return $this->listDeviceByDeviceCertificateAsyncWithHttpInfo($request);
    }
    
    public function listDeviceByDeviceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-certificates/{certificate_id}/list-device';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceByDeviceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceByDeviceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备证书列表
     *
     * 应用服务器可调用此接口在物联网平台查询设备证书列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceCertificateAsync($request)
    {
        return $this->listDeviceCertificateAsyncWithHttpInfo($request);
    }
    
    public function listDeviceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['commonName'] !== null) {
            $queryParams['common_name'] = $localVarParams['commonName'];
        }
        if ($localVarParams['fingerprint'] !== null) {
            $queryParams['fingerprint'] = $localVarParams['fingerprint'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备证书
     *
     * 应用服务器可调用此接口在物联网平台更新一个设备证书状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceCertificateAsync($request)
    {
        return $this->showDeviceCertificateAsyncWithHttpInfo($request);
    }
    
    public function showDeviceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 更新设备证书
     *
     * 应用服务器可调用此接口在物联网平台更新一个设备证书状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceCertificateAsync($request)
    {
        return $this->updateDeviceCertificateAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 添加设备组
     *
     * 应用服务器可调用此接口新建设备组，一个华为云账号下最多可有1,000个设备组，包括父设备组和子设备组。设备组的最大层级关系不超过5层，即群组形成的关系树最大深度不超过5。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDeviceGroupAsync($request)
    {
        return $this->addDeviceGroupAsyncWithHttpInfo($request);
    }
    
    public function addDeviceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddDeviceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddDeviceGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 管理设备组中的设备
     *
     * 应用服务器可调用此接口管理设备组中的设备。单个设备组内最多添加20,000个设备，一个设备最多可以被添加到10个设备组中。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrDeleteDeviceInGroupAsync($request)
    {
        return $this->createOrDeleteDeviceInGroupAsyncWithHttpInfo($request);
    }
    
    public function createOrDeleteDeviceInGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group/{group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $queryParams['device_id'] = $localVarParams['deviceId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOrDeleteDeviceInGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOrDeleteDeviceInGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备组
     *
     * 应用服务器可调用此接口删除指定设备组，如果该设备组存在子设备组或者该设备组中存在设备，必须先删除子设备组并将设备从该设备组移除，才能删除该设备组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceGroupAsync($request)
    {
        return $this->deleteDeviceGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备组列表
     *
     * 应用服务器可调用此接口查询物联网平台中的设备组信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceGroupsAsync($request)
    {
        return $this->listDeviceGroupsAsyncWithHttpInfo($request);
    }
    
    public function listDeviceGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['lastModifiedTime'] !== null) {
            $queryParams['last_modified_time'] = $localVarParams['lastModifiedTime'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['groupType'] !== null) {
            $queryParams['group_type'] = $localVarParams['groupType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备组
     *
     * 应用服务器可调用此接口查询指定设备组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceGroupAsync($request)
    {
        return $this->showDeviceGroupAsyncWithHttpInfo($request);
    }
    
    public function showDeviceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备组设备列表
     *
     * 应用服务器可调用此接口查询指定设备组下的设备列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDevicesInGroupAsync($request)
    {
        return $this->showDevicesInGroupAsyncWithHttpInfo($request);
    }
    
    public function showDevicesInGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group/{group_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDevicesInGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDevicesInGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 修改设备组
     *
     * 应用服务器可调用此接口修改物联网平台中指定设备组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceGroupAsync($request)
    {
        return $this->updateDeviceGroupAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-group/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建设备
     *
     * 应用服务器可调用此接口在物联网平台创建一个设备，仅在创建后设备才可以接入物联网平台。
     * 
     * - 该接口支持使用gateway_id参数指定在父设备下创建一个子设备，并且支持多级子设备，当前最大支持二级子设备。
     * - 该接口同时还支持对设备进行初始配置，接口会读取创建设备请求参数product_id对应的产品详情，如果产品的属性有定义默认值，则会将该属性默认值写入该设备的设备影子中。
     * - 用户还可以使用创建设备请求参数shadow字段为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以shadow字段中设置的属性值为准写入到设备影子中。
     * - 该接口仅支持创建单个设备，如需批量注册设备，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDeviceAsync($request)
    {
        return $this->addDeviceAsyncWithHttpInfo($request);
    }
    
    public function addDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改设备网关
     *
     * 应用服务器可调用此接口在物联网平台修改子设备网关。
     * - 只允许子设备修改网关。
     * - 目标网关必须和当前设备在同一个资源空间。
     * - 网关id不能和当前子设备网关id相同。
     * - 设备如果有下级子设备，则不允许切换网关。
     * - 支持多级子设备，当前最大支持二级子设备。
     * - 该接口仅支持创建单个设备切换网关，如需批量切换设备网关，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeGatewayAsync($request)
    {
        return $this->changeGatewayAsyncWithHttpInfo($request);
    }
    
    public function changeGatewayAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/change-gateway';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ChangeGatewayResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ChangeGatewayRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备
     *
     * 应用服务器可调用此接口在物联网平台上删除指定设备。若设备下连接了非直连设备，则必须把设备下的非直连设备都删除后，才能删除该设备。该接口仅支持删除单个设备，如需批量删除设备，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceAsync($request)
    {
        return $this->deleteDeviceAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 冻结设备
     *
     * 应用服务器可调用此接口冻结设备，设备冻结后不能再连接上线，可以通过解冻设备接口解除设备冻结。注意，当前仅支持冻结与平台直连的设备。该接口仅支持冻结单个设备，如需批量冻结设备，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function freezeDeviceAsync($request)
    {
        return $this->freezeDeviceAsyncWithHttpInfo($request);
    }
    
    public function freezeDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/freeze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\FreezeDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\FreezeDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定设备加入的设备组列表
     *
     * 应用服务器可调用此接口查询物联网平台中的某个设备加入的设备组信息列表。仅标准版实例、企业版实例支持该接口调用，基础版不支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceGroupsByDeviceAsync($request)
    {
        return $this->listDeviceGroupsByDeviceAsyncWithHttpInfo($request);
    }
    
    public function listDeviceGroupsByDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/list-device-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceGroupsByDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceGroupsByDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备列表
     *
     * 应用服务器可调用此接口查询物联网平台中的设备信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevicesAsync($request)
    {
        return $this->listDevicesAsyncWithHttpInfo($request);
    }
    
    public function listDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['gatewayId'] !== null) {
            $queryParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['isCascadeQuery'] !== null) {
            $queryParams['is_cascade_query'] = $localVarParams['isCascadeQuery'];
        }
        if ($localVarParams['nodeId'] !== null) {
            $queryParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['deviceName'] !== null) {
            $queryParams['device_name'] = $localVarParams['deviceName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDevicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDevicesRequest',
            $asyncRequest = true);
    }

    /**
     * 重置设备密钥
     *
     * 应用服务器可调用此接口重置设备密钥，携带指定密钥时平台将设备密钥重置为指定的密钥，不携带密钥时平台将自动生成一个新的随机密钥返回。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetDeviceSecretAsync($request)
    {
        return $this->resetDeviceSecretAsyncWithHttpInfo($request);
    }
    
    public function resetDeviceSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionId'] !== null) {
            $queryParams['action_id'] = $localVarParams['actionId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetDeviceSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetDeviceSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 重置设备指纹
     *
     * 应用服务器可调用此接口重置设备指纹。携带指定设备指纹时将之重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetFingerprintAsync($request)
    {
        return $this->resetFingerprintAsyncWithHttpInfo($request);
    }
    
    public function resetFingerprintAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/reset-fingerprint';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetFingerprintResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetFingerprintRequest',
            $asyncRequest = true);
    }

    /**
     * 灵活搜索设备列表
     *
     * #### 接口说明
     * 
     * 应用服务器使用SQL语句调用该接口，灵活的搜索所需要的设备资源列表
     * 
     * #### 限制
     * 
     * - 仅**标准版实例、企业版实例**支持该接口调用，基础版不支持。
     * - 单账号调用该接口的 TPS 限制最大为1/S(每秒1次请求数)
     * 
     * #### 类SQL语法使用说明
     * 
     * 类SQL语句有select、from、where(可选)、order by(可选)、limit子句(可选)组成，长度限制为400个字符。子句里的内容大小写敏感，SQL语句的关键字大小写不敏感。
     * 
     * 示例：
     * 
     * &#x60;&#x60;&#x60;
     * select * from device where device_id &#x3D; &#39;as********&#39; limit 0,5
     * &#x60;&#x60;&#x60;
     * 
     * ##### SELECT子句
     * 
     * &#x60;&#x60;&#x60;
     * select [field]/[count(*)/count(1)] from device
     * &#x60;&#x60;&#x60;
     * 
     * 其中field为需要获取的字段，请参考响应参数字段名称，也可填*，获取所有字段。
     * 
     * 如果需要统计搜索的设备个数，请填count(*)或者count(1).
     * 
     * ##### FROM子句
     * 
     * &#x60;&#x60;&#x60;
     * from device
     * &#x60;&#x60;&#x60;
     * 
     * from后为要查询的资源名，当前支持\&quot;device\&quot;
     * 
     * ##### WHERE子句(可选)
     * 
     * &#x60;&#x60;&#x60;
     * WHERE [condition1] AND [condition2]
     * &#x60;&#x60;&#x60;
     * 
     * 最多支持5个condition，不支持嵌套；支持的检索字段请参见下面的**搜索条件字段说明**和**支持的运算符**章节
     * 
     * 连接词支持AND、OR，优先级参考标准SQL语法，默认AND优先级高于OR。
     * 
     * ##### LIMIT子句(可选)
     * 
     * &#x60;&#x60;&#x60;
     * limit [offset,] rows
     * &#x60;&#x60;&#x60;
     * 
     * offset标识搜索的偏移量，rows标识返回搜索结果的最大行数，例如：
     * 
     * - limit n ;示例(select * from device limit 10)
     * 
     * 最大返回n条结果数据
     * 
     * - limit m,n; 示例(select * from device limit 20,10)
     * 搜索偏移量为m，最大返回n条结果数据
     * 
     * ###### 限制
     * 
     * offset 最大 500， rows最大50，如果不填写limit子句，默认为limit 10
     * 
     * ##### ORDER BY子句(可选)
     * 
     * 用于实现自定义排序，当前支持自定义排序的字段为：\&quot;marker\&quot;。
     * 
     * &#x60;&#x60;&#x60;
     * order by marker [asc]/[desc]
     * &#x60;&#x60;&#x60;
     * 
     * 子句不填写时默认逻辑为随机排序
     * 
     * #### 搜索条件字段说明
     * 
     * | 字段名      | 类型   | 说明             | 取值范围                                                     |
     * | :---------- | :----- | :--------------- | :----------------------------------------------------------- |
     * | app_id      | string | 资源空间ID       | 长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。 |
     * | device_id   | string | 设备ID           | 长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。 |
     * | gateway_id  | string | 网关ID           | 长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。 |
     * | product_id  | string | 设备关联的产品ID | 长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。 |
     * | device_name | string | 设备名称         | 长度不超过256，只允许中文、字母、数字、以及_?&#39;#().,&amp;%@!-等字符的组合符。 |
     * | node_id     | string | 设备标识码       | 长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合 |
     * | status      | string | 设备的状态       | ONLINE(在线)、OFFLINE(离线)、ABNORMAL(异常)、INACTIVE(未激活)、FROZEN(冻结) |
     * | node_type   | string | 设备节点类型     | GATEWAY(直连设备或网关)、ENDPOINT(非直连设备)                |
     * | tag_key     | string | 标签键           | 长度不超过64，只允许中文、字母、数字、以及_.-等字符的组合。  |
     * | tag_value   | string | 标签值           | 长度不超过128，只允许中文、字母、数字、以及_.-等字符的组合。 |
     * | sw_version  | string | 软件版本         | 长度不超过64，只允许字母、数字、下划线（_）、连接符（-）、英文点(.)的组合。 |
     * | fw_version  | string | 固件版本         | 长度不超过64，只允许字母、数字、下划线（_）、连接符（-）、英文点(.)的组合。 |
     * | group_id    | string | 群组Id           | 长度不超过36，十六进制字符串和连接符（-）的组合              |
     * | create_time | string | 设备注册时间     | 格式：yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;，如：2015-06-06T12:10:10.000Z |
     * | marker      | string | 结果记录ID       | 长度为24的十六进制字符串，如ffffffffffffffffffffffff         |
     * 
     * #### 支持的运算符
     * 
     * | 运算符  | 支持的字段                               |
     * | ------- | ---------------------------------------- |
     * | &#x3D;       | 所有                                     |
     * | !&#x3D;      | 所有                                     |
     * | &gt;       | create_time、marker                      |
     * | &lt;       | create_time、marker                      |
     * | like    | device_name、node_id、tag_key、tag_value |
     * | in      | 除tag_key、tag_value以外字段             |
     * | not  in | 除tag_key、tag_value以外字段             |
     * 
     * #### SQL 限制
     * 
     * - like: 只支持前缀匹配，不支持后缀匹配或者通配符匹配。前缀匹配不得少于4个字符，且不能包含任何特殊字符(只允许中文、字母、数字、下划线（_）、连接符（-）). 前缀后必须跟上\&quot;%\&quot;结尾。
     * - 不支持除了count(*)/count(1)以外的其他任何函数。
     * - 不支持其他SQL用法，如嵌套SQL、union、join、别名(Alias)等用法
     * - SQL长度限制为400个字符，单个请求条件最大支持5个。
     * - 不支持\&quot;null\&quot;和空字符串等条件值匹配
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDevicesAsync($request)
    {
        return $this->searchDevicesAsyncWithHttpInfo($request);
    }
    
    public function searchDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/search/query-devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\SearchDevicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\SearchDevicesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备
     *
     * 应用服务器可调用此接口查询物联网平台中指定设备的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceAsync($request)
    {
        return $this->showDeviceAsyncWithHttpInfo($request);
    }
    
    public function showDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 解冻设备
     *
     * 应用服务器可调用此接口解冻设备，解除冻结后，设备可以连接上线。该接口仅支持解冻单个设备，如需批量解冻设备，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unfreezeDeviceAsync($request)
    {
        return $this->unfreezeDeviceAsyncWithHttpInfo($request);
    }
    
    public function unfreezeDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/unfreeze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UnfreezeDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UnfreezeDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改设备
     *
     * 应用服务器可调用此接口修改物联网平台中指定设备的基本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceAsync($request)
    {
        return $this->updateDeviceAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建设备代理
     *
     * 应用服务器可调用此接口在物联网平台创建一个动态设备代理规则，用于子设备自主选择网关设备上线和上报消息，即代理组下的任意网关下的子设备均可以通过代理组里其他设备上线([[网关更新子设备状态](https://support.huaweicloud.com/api-iothub/iot_06_v5_3022.html)](tag:hws) [[网关更新子设备状态](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_3022.html)](tag:hws_hk))然后进行数据上报([[网关批量设备属性上报](https://support.huaweicloud.com/api-iothub/iot_06_v5_3006.html)](tag:hws) [[网关更新子设备状态](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_3006.html)](tag:hws_hk))。
     * - 单实例最多可以配置10个设备代理
     * - 单账号调用该接口的 TPS 限制最大为1/S(每秒1次请求数)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeviceProxyAsync($request)
    {
        return $this->createDeviceProxyAsyncWithHttpInfo($request);
    }
    
    public function createDeviceProxyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-proxies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDeviceProxyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDeviceProxyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备代理
     *
     * 应用服务器可调用此接口在物联网平台上删除指定设备代理。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceProxyAsync($request)
    {
        return $this->deleteDeviceProxyAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceProxyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-proxies/{proxy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['proxyId'] !== null) {
            $pathParams['proxy_id'] = $localVarParams['proxyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceProxyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceProxyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备代理列表
     *
     * 应用服务器可调用此接口查询物联网平台中的设备代理列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceProxiesAsync($request)
    {
        return $this->listDeviceProxiesAsyncWithHttpInfo($request);
    }
    
    public function listDeviceProxiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-proxies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['proxyName'] !== null) {
            $queryParams['proxy_name'] = $localVarParams['proxyName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceProxiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceProxiesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备代理详情
     *
     * 应用服务器可调用此接口查询物联网平台中指定设备代理的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceProxyAsync($request)
    {
        return $this->showDeviceProxyAsyncWithHttpInfo($request);
    }
    
    public function showDeviceProxyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-proxies/{proxy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['proxyId'] !== null) {
            $pathParams['proxy_id'] = $localVarParams['proxyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceProxyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceProxyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改设备代理
     *
     * 应用服务器可调用此接口修改物联网平台中指定设备代理的基本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceProxyAsync($request)
    {
        return $this->updateDeviceProxyAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceProxyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-proxies/{proxy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['proxyId'] !== null) {
            $pathParams['proxy_id'] = $localVarParams['proxyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceProxyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceProxyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备影子数据
     *
     * 应用服务器可调用此接口删除指定设备的设备影子信息，包括对设备的期望属性信息（desired区）和设备最新上报的属性信息（reported区）中的所有数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceShadowAsync($request)
    {
        return $this->deleteDeviceShadowAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceShadowAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceShadowResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceShadowRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备影子数据
     *
     * 应用服务器可调用此接口查询指定设备的设备影子信息，包括对设备的期望属性信息（desired区）和设备最新上报的属性信息（reported区）。
     * 
     * 设备影子介绍：
     * 设备影子是一个用于存储和检索设备当前状态信息的JSON文档。
     * - 每个设备有且只有一个设备影子，由设备ID唯一标识
     * - 设备影子用于存储设备上报的(状态)属性和应用程序期望的设备(状态)属性
     * - 无论该设备是否在线，都可以通过该影子获取和设置设备的属性
     * - 设备上线或者设备上报属性时，如果desired区和reported区存在差异，则将差异部分下发给设备，配置的预期属性需在产品模型中定义且method具有可写属性“W”才可下发
     * 
     * 限制：
     * 设备影子JSON文档中的key不允许特殊字符：点(.)、dollar符号($)、空char(十六进制的ASCII码为00)。如果包含了以上特殊字符则无法正常刷新影子文档。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceShadowAsync($request)
    {
        return $this->showDeviceShadowAsyncWithHttpInfo($request);
    }
    
    public function showDeviceShadowAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceShadowResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceShadowRequest',
            $asyncRequest = true);
    }

    /**
     * 配置设备影子预期数据
     *
     * 应用服务器可调用此接口配置设备影子的预期属性（desired区），当设备上线或者设备上报属性时把属性下发给设备。
     * 
     * 设备影子介绍：
     * 设备影子是一个用于存储和检索设备当前状态信息的JSON文档。
     * - 每个设备有且只有一个设备影子，由设备ID唯一标识
     * - 设备影子用于存储设备上报的(状态)属性和应用程序期望的设备(状态)属性
     * - 无论该设备是否在线，都可以通过该影子获取和设置设备的属性
     * - 设备上线或者设备上报属性时，如果desired区和reported区存在差异，则将差异部分下发给设备，配置的预期属性需在产品模型中定义且method具有可写属性“W”才可下发
     * - 该接口仅支持配置单个设备的设备影子的预期数据，如需多个设备的设备影子配置，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * 限制：
     * 设备影子JSON文档中的key不允许特殊字符：点(.)、dollar符号($)、空char(十六进制的ASCII码为00)。如果包含了以上特殊字符则无法正常刷新影子文档。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceShadowDesiredDataAsync($request)
    {
        return $this->updateDeviceShadowDesiredDataAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceShadowDesiredDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceShadowDesiredDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceShadowDesiredDataRequest',
            $asyncRequest = true);
    }

    /**
     * 添加域配置
     *
     * 应用服务器可调用此接口在物联网平台上添加域配置，域配置配额上限为：1个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDomainConfigurationAsync($request)
    {
        return $this->createDomainConfigurationAsyncWithHttpInfo($request);
    }
    
    public function createDomainConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/domain-configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDomainConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDomainConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除域配置
     *
     * 应用服务器可调用此接口在物联网平台删除域配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomainConfigurationAsync($request)
    {
        return $this->deleteDomainConfigurationAsyncWithHttpInfo($request);
    }
    
    public function deleteDomainConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/domain-configurations/{configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['configurationId'] !== null) {
            $pathParams['configuration_id'] = $localVarParams['configurationId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDomainConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDomainConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 获取域配置列表
     *
     * 应用服务器可调用此接口在物联网平台获取域配置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainConfigurationsAsync($request)
    {
        return $this->listDomainConfigurationsAsyncWithHttpInfo($request);
    }
    
    public function listDomainConfigurationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/domain-configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDomainConfigurationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDomainConfigurationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询域配置
     *
     * 应用服务器可调用此接口在物联网平台查询域配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainConfigurationAsync($request)
    {
        return $this->showDomainConfigurationAsyncWithHttpInfo($request);
    }
    
    public function showDomainConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/domain-configurations/{configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['configurationId'] !== null) {
            $pathParams['configuration_id'] = $localVarParams['configurationId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDomainConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDomainConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新域配置
     *
     * 应用服务器可调用此接口在物联网平台上更新域配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDomainConfigurationAsync($request)
    {
        return $this->updateDomainConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateDomainConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/domain-configurations/{configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['configurationId'] !== null) {
            $pathParams['configuration_id'] = $localVarParams['configurationId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDomainConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDomainConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 创建导出任务
     *
     * 应用服务器可调用此接口创建资源导出任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createExportTaskAsync($request)
    {
        return $this->createExportTaskAsyncWithHttpInfo($request);
    }
    
    public function createExportTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/export-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateExportTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateExportTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除导出任务
     *
     * 应用服务器可调用此接口删除在平台创建的导出任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteExportTaskAsync($request)
    {
        return $this->deleteExportTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteExportTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/export-tasks/{export_task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['exportTaskId'] !== null) {
            $pathParams['export_task_id'] = $localVarParams['exportTaskId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteExportTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteExportTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询导出任务列表
     *
     * 应用服务器可调用此接口查询已创建的导出任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExportTasksAsync($request)
    {
        return $this->listExportTasksAsyncWithHttpInfo($request);
    }
    
    public function listExportTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/export-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceCondition'] !== null) {
            $queryParams['resource_condition'] = $localVarParams['resourceCondition'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListExportTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListExportTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 下载导出文件
     *
     * 应用服务器可调用此接口下载已经完成的导出任务生成的文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showExportTaskAsync($request)
    {
        return $this->showExportTaskAsyncWithHttpInfo($request);
    }
    
    public function showExportTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/export-tasks/{export_task_id}/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['exportTaskId'] !== null) {
            $pathParams['export_task_id'] = $localVarParams['exportTaskId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowExportTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowExportTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 新建数据流转流控策略
     *
     * 应用服务器可调用此接口在物联网平台创建数据流转流控策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRoutingFlowControlPolicyAsync($request)
    {
        return $this->createRoutingFlowControlPolicyAsyncWithHttpInfo($request);
    }
    
    public function createRoutingFlowControlPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/flowcontrol-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingFlowControlPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingFlowControlPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数据流转流控策略
     *
     * 应用服务器可调用此接口在物联网平台删除指定数据流转流控策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRoutingFlowControlPolicyAsync($request)
    {
        return $this->deleteRoutingFlowControlPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteRoutingFlowControlPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/flowcontrol-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingFlowControlPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingFlowControlPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据流转流控策略列表
     *
     * 应用服务器可调用此接口查询在物联网平台设置的数据流转流控策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoutingFlowControlPolicyAsync($request)
    {
        return $this->listRoutingFlowControlPolicyAsyncWithHttpInfo($request);
    }
    
    public function listRoutingFlowControlPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/flowcontrol-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scopeValue'] !== null) {
            $queryParams['scope_value'] = $localVarParams['scopeValue'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingFlowControlPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingFlowControlPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数据流转流控策略
     *
     * 应用服务器可调用此接口在物联网平台查询指定数据流转流控策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRoutingFlowControlPolicyAsync($request)
    {
        return $this->showRoutingFlowControlPolicyAsyncWithHttpInfo($request);
    }
    
    public function showRoutingFlowControlPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/flowcontrol-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingFlowControlPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingFlowControlPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改数据流转流控策略
     *
     * 应用服务器可调用此接口在物联网平台修改指定数据流转流控策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoutingFlowControlPolicyAsync($request)
    {
        return $this->updateRoutingFlowControlPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateRoutingFlowControlPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/flowcontrol-policy/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingFlowControlPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingFlowControlPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建编解码函数
     *
     * 提供创建编解码函数的功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFunctionsAsync($request)
    {
        return $this->addFunctionsAsyncWithHttpInfo($request);
    }
    
    public function addFunctionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/product-functions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddFunctionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddFunctionsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除编解码函数
     *
     * 提供删除编解码函数的功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFunctionsAsync($request)
    {
        return $this->deleteFunctionsAsyncWithHttpInfo($request);
    }
    
    public function deleteFunctionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/product-functions/{function_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['functionId'] !== null) {
            $pathParams['function_id'] = $localVarParams['functionId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteFunctionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteFunctionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询编解码函数
     *
     * 提供查询编解码函数的功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFunctionsAsync($request)
    {
        return $this->listFunctionsAsyncWithHttpInfo($request);
    }
    
    public function listFunctionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/product-functions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['productId'] !== null) {
            $queryParams['product_id'] = $localVarParams['productId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListFunctionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListFunctionsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建鸿蒙软总线
     *
     * 应用服务器可调用此接口新建鸿蒙软总线。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addHarmonySoftBusAsync($request)
    {
        return $this->addHarmonySoftBusAsyncWithHttpInfo($request);
    }
    
    public function addHarmonySoftBusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/harmony-soft-bus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddHarmonySoftBusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddHarmonySoftBusRequest',
            $asyncRequest = true);
    }

    /**
     * 同步鸿蒙软总线信息
     *
     * 应用服务器可调用此接口向组内设备同步鸿蒙软总线信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSyncHarmonySoftBusAsync($request)
    {
        return $this->createSyncHarmonySoftBusAsyncWithHttpInfo($request);
    }
    
    public function createSyncHarmonySoftBusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/harmony-soft-bus/{bus_id}/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['busId'] !== null) {
            $pathParams['bus_id'] = $localVarParams['busId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateSyncHarmonySoftBusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateSyncHarmonySoftBusRequest',
            $asyncRequest = true);
    }

    /**
     * 删除鸿蒙软总线
     *
     * 应用服务器可调用此接口删除指定鸿蒙软总线。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHarmonySoftBusAsync($request)
    {
        return $this->deleteHarmonySoftBusAsyncWithHttpInfo($request);
    }
    
    public function deleteHarmonySoftBusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/harmony-soft-bus/{bus_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['busId'] !== null) {
            $pathParams['bus_id'] = $localVarParams['busId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteHarmonySoftBusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteHarmonySoftBusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询鸿蒙软总线列表
     *
     * 应用服务器可调用此接口查询鸿蒙软总线列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHarmonySoftBusAsync($request)
    {
        return $this->listHarmonySoftBusAsyncWithHttpInfo($request);
    }
    
    public function listHarmonySoftBusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/harmony-soft-bus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListHarmonySoftBusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListHarmonySoftBusRequest',
            $asyncRequest = true);
    }

    /**
     * 重置鸿蒙软总线秘钥
     *
     * 应用服务器可调用此接口重置鸿蒙软总线秘钥, 重置后状态变为未同步需要用户调用同步接口想组内设备同步最新秘钥。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetHarmonySoftBusKeyAsync($request)
    {
        return $this->resetHarmonySoftBusKeyAsyncWithHttpInfo($request);
    }
    
    public function resetHarmonySoftBusKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/harmony-soft-bus/{bus_id}/reset-bus-key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['busId'] !== null) {
            $pathParams['bus_id'] = $localVarParams['busId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetHarmonySoftBusKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetHarmonySoftBusKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询鸿蒙软总线
     *
     * 应用服务器可调用此接口查询指定ID的鸿蒙软总线。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHarmonySoftBusAsync($request)
    {
        return $this->showHarmonySoftBusAsyncWithHttpInfo($request);
    }
    
    public function showHarmonySoftBusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/harmony-soft-bus/{bus_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['busId'] !== null) {
            $pathParams['bus_id'] = $localVarParams['busId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowHarmonySoftBusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowHarmonySoftBusRequest',
            $asyncRequest = true);
    }

    /**
     * 下发设备消息
     *
     * 物联网平台可向设备下发消息，应用服务器可调用此接口向指定设备下发消息，以实现对设备的控制。应用将消息下发给平台后，平台返回应用响应结果，平台再将消息发送给设备。平台返回应用响应结果不一定是设备接收结果，建议用户应用通过订阅[[设备消息状态变更通知](https://support.huaweicloud.com/api-iothub/iot_06_v5_01203.html)](tag:hws)[[设备消息状态变更通知](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_01203.html)](tag:hws_hk)，订阅后平台会将设备接收结果推送给订阅的应用。
     * 注意：
     * - 此接口适用于MQTT设备消息下发，暂不支持其他协议接入的设备消息下发。
     * - 此接口仅支持单个设备消息下发，如需多个设备消息下发，请参见 [[创建批量任务](https://support.huaweicloud.com/api-iothub/iot_06_v5_0045.html)](tag:hws)[[创建批量任务](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0045.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMessageAsync($request)
    {
        return $this->createMessageAsyncWithHttpInfo($request);
    }
    
    public function createMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定消息id的消息
     *
     * 应用服务器可调用此接口删除平台下发给设备的指定消息id的消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceMessageAsync($request)
    {
        return $this->deleteDeviceMessageAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/messages/{message_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
        }
        if ($localVarParams['messageId'] !== null) {
            $pathParams['message_id'] = $localVarParams['messageId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备消息
     *
     * 应用服务器可调用此接口查询平台下发给设备的消息，平台为每个设备默认最多保存20条消息，超过20条后， 后续的消息会替换下发最早的消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceMessagesAsync($request)
    {
        return $this->listDeviceMessagesAsyncWithHttpInfo($request);
    }
    
    public function listDeviceMessagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceMessagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceMessagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定消息id的消息
     *
     * 应用服务器可调用此接口查询平台下发给设备的指定消息id的消息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceMessageAsync($request)
    {
        return $this->showDeviceMessageAsyncWithHttpInfo($request);
    }
    
    public function showDeviceMessageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/messages/{message_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
        }
        if ($localVarParams['messageId'] !== null) {
            $pathParams['message_id'] = $localVarParams['messageId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceMessageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceMessageRequest',
            $asyncRequest = true);
    }

    /**
     * 创建OTA模块
     *
     * 用户可调用此接口创建产品的OTA模块,同一产品下最多自定义10个OTA模块。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOtaModuleAsync($request)
    {
        return $this->createOtaModuleAsyncWithHttpInfo($request);
    }
    
    public function createOtaModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/modules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOtaModuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOtaModuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除OTA模块
     *
     * 用户可调用此接口删除产品对应的OTA模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOtaModuleAsync($request)
    {
        return $this->deleteOtaModuleAsyncWithHttpInfo($request);
    }
    
    public function deleteOtaModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['moduleId'] !== null) {
            $pathParams['module_id'] = $localVarParams['moduleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteOtaModuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteOtaModuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询OTA模块列表
     *
     * 用户可调用此接口查询指定产品的OTA模块列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOtaModulesAsync($request)
    {
        return $this->listOtaModulesAsyncWithHttpInfo($request);
    }
    
    public function listOtaModulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/modules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['productId'] !== null) {
            $queryParams['product_id'] = $localVarParams['productId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListOtaModulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListOtaModulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询OTA模块详情
     *
     * 用户可调用此接口查询OTA模块详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOtaModuleAsync($request)
    {
        return $this->showOtaModuleAsyncWithHttpInfo($request);
    }
    
    public function showOtaModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['moduleId'] !== null) {
            $pathParams['module_id'] = $localVarParams['moduleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowOtaModuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowOtaModuleRequest',
            $asyncRequest = true);
    }

    /**
     * 修改OTA模块
     *
     * 用户可调用此接口修改对应的OTA模块的别名和描述。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateOtaModuleAsync($request)
    {
        return $this->updateOtaModuleAsyncWithHttpInfo($request);
    }
    
    public function updateOtaModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['moduleId'] !== null) {
            $pathParams['module_id'] = $localVarParams['moduleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateOtaModuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateOtaModuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建OTA升级包
     *
     * 用户可调用此接口创建升级包关联OBS对象
     * 使用前提：使用该API需要您授权设备接入服务(IoTDA)的实例访问对象存储服务(OBS)以及 密钥管理服务(KMS Administrator)的权限。在“[[统一身份认证服务（IAM）](https://console.huaweicloud.com/iam)](tag:hws)[[统一身份认证服务（IAM）](https://console-intl.huaweicloud.com/iam)](tag:hws_hk) - 委托”中将委托名称为iotda_admin_trust的委托授权KMS Administrator和OBS OperateAccess
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOtaPackageAsync($request)
    {
        return $this->createOtaPackageAsyncWithHttpInfo($request);
    }
    
    public function createOtaPackageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/packages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOtaPackageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOtaPackageRequest',
            $asyncRequest = true);
    }

    /**
     * 删除OTA升级包
     *
     * 用户可调用此接口删除关联OBS对象的升级包信息，不会删除OBS上对象
     * 使用前提：使用该API需要您授权设备接入服务(IoTDA)的实例访问对象存储服务(OBS)以及 密钥管理服务(KMS Administrator)的权限。在“[[统一身份认证服务（IAM）](https://console.huaweicloud.com/iam)](tag:hws)[[统一身份认证服务（IAM）](https://console-intl.huaweicloud.com/iam)](tag:hws_hk) - 委托”中将委托名称为iotda_admin_trust的委托授权KMS Administrator和OBS OperateAccess
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOtaPackageAsync($request)
    {
        return $this->deleteOtaPackageAsyncWithHttpInfo($request);
    }
    
    public function deleteOtaPackageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/packages/{package_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['packageId'] !== null) {
            $pathParams['package_id'] = $localVarParams['packageId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteOtaPackageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteOtaPackageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询OTA升级包列表
     *
     * 用户可调用此接口查询关联OBS对象的升级包列表
     * 使用前提：使用该API需要您授权设备接入服务(IoTDA)的实例访问对象存储服务(OBS)以及 密钥管理服务(KMS Administrator)的权限。在“[[统一身份认证服务（IAM）](https://console.huaweicloud.com/iam)](tag:hws)[[统一身份认证服务（IAM）](https://console-intl.huaweicloud.com/iam)](tag:hws_hk) - 委托”中将委托名称为iotda_admin_trust的委托授权KMS Administrator和OBS OperateAccess
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOtaPackageInfoAsync($request)
    {
        return $this->listOtaPackageInfoAsyncWithHttpInfo($request);
    }
    
    public function listOtaPackageInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/packages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['packageType'] !== null) {
            $queryParams['package_type'] = $localVarParams['packageType'];
        }
        if ($localVarParams['productId'] !== null) {
            $queryParams['product_id'] = $localVarParams['productId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListOtaPackageInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListOtaPackageInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取OTA升级包详情
     *
     * 用户可调用此接口查询关联OBS对象的升级包详情
     * 使用前提：使用该API需要您授权设备接入服务(IoTDA)的实例访问对象存储服务(OBS)以及 密钥管理服务(KMS Administrator)的权限。在“[[统一身份认证服务（IAM）](https://console.huaweicloud.com/iam)](tag:hws)[[统一身份认证服务（IAM）](https://console-intl.huaweicloud.com/iam)](tag:hws_hk) - 委托”中将委托名称为iotda_admin_trust的委托授权KMS Administrator和OBS OperateAccess
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOtaPackageAsync($request)
    {
        return $this->showOtaPackageAsyncWithHttpInfo($request);
    }
    
    public function showOtaPackageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/ota-upgrades/packages/{package_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['packageId'] !== null) {
            $pathParams['package_id'] = $localVarParams['packageId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowOtaPackageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowOtaPackageRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定设备策略
     *
     * 应用服务器可调用此接口在物联网平台上为批量设备绑定目标策略，目前支持绑定目标类型为：设备、产品，当目标类型为产品时，该产品下所有设备都会生效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function bindDevicePolicyAsync($request)
    {
        return $this->bindDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function bindDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies/{policy_id}/bind';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\BindDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\BindDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建设备策略
     *
     * 应用服务器可调用此接口在物联网平台创建一个策略，该策略需要绑定到设备和产品下才能生效。
     * - 一个实例最多能创建50个设备策略。
     * - 仅**标准版实例、企业版实例**支持该接口调用，基础版不支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDevicePolicyAsync($request)
    {
        return $this->createDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function createDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备策略
     *
     * 应用服务器可调用此接口在物联网平台上删除指定策略，注意：删除策略同时会解绑该策略下所有绑定对象。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDevicePolicyAsync($request)
    {
        return $this->deleteDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备策略列表
     *
     * 应用服务器可调用此接口在物联网平台查询策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevicePoliciesAsync($request)
    {
        return $this->listDevicePoliciesAsyncWithHttpInfo($request);
    }
    
    public function listDevicePoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDevicePoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDevicePoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备策略详情
     *
     * 应用服务器可调用此接口在物联网平台查询指定策略ID的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDevicePolicyAsync($request)
    {
        return $this->showDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function showDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备策略绑定的目标列表
     *
     * 应用服务器可调用此接口在物联网平台上查询指定策略ID下绑定的目标列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTargetsInDevicePolicyAsync($request)
    {
        return $this->showTargetsInDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function showTargetsInDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies/{policy_id}/list-targets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowTargetsInDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowTargetsInDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑设备策略
     *
     * 应用服务器可调用此接口在物联网平台上解除指定策略下绑定的目标对象。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unbindDevicePolicyAsync($request)
    {
        return $this->unbindDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function unbindDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies/{policy_id}/unbind';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UnbindDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UnbindDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 更新设备策略信息
     *
     * 应用服务器可调用此接口在物联网平台更新策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDevicePolicyAsync($request)
    {
        return $this->updateDevicePolicyAsyncWithHttpInfo($request);
    }
    
    public function updateDevicePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/device-policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDevicePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDevicePolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建产品
     *
     * 应用服务器可调用此接口创建产品。此接口仅创建了产品，没有创建和安装插件，如果需要对数据进行编解码，还需要在平台开发和安装插件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProductAsync($request)
    {
        return $this->createProductAsyncWithHttpInfo($request);
    }
    
    public function createProductAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateProductResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateProductRequest',
            $asyncRequest = true);
    }

    /**
     * 删除产品
     *
     * 应用服务器可调用此接口删除已导入物联网平台的指定产品模型。此接口仅删除了产品，未删除关联的插件，在产品下存在设备时，该产品不允许删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProductAsync($request)
    {
        return $this->deleteProductAsyncWithHttpInfo($request);
    }
    
    public function deleteProductAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteProductResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteProductRequest',
            $asyncRequest = true);
    }

    /**
     * 查询产品列表
     *
     * 应用服务器可调用此接口查询已导入物联网平台的产品模型信息列表，了解产品模型的概要信息。
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
        $resourcePath = '/v5/iot/{project_id}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['productName'] !== null) {
            $queryParams['product_name'] = $localVarParams['productName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListProductsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListProductsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询产品
     *
     * 应用服务器可调用此接口查询已导入物联网平台的指定产品模型详细信息，包括产品模型的服务、属性、命令等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProductAsync($request)
    {
        return $this->showProductAsyncWithHttpInfo($request);
    }
    
    public function showProductAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowProductResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowProductRequest',
            $asyncRequest = true);
    }

    /**
     * 修改产品
     *
     * 应用服务器可调用此接口修改已导入物联网平台的指定产品模型，包括产品模型的服务、属性、命令等。此接口仅修改了产品，未修改和安装插件，如果修改了产品中的service定义，且在平台中有对应的插件，请修改并重新安装插件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProductAsync($request)
    {
        return $this->updateProductAsyncWithHttpInfo($request);
    }
    
    public function updateProductAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateProductResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateProductRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备属性
     *
     * 设备的产品模型中定义了物联网平台可向设备下发的属性，应用服务器可调用此接口向设备发送指令用以查询设备的实时属性, 并由设备将属性查询的结果同步返回给应用服务器。
     * 注意：此接口适用于MQTT设备，暂不支持NB-IoT设备。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPropertiesAsync($request)
    {
        return $this->listPropertiesAsyncWithHttpInfo($request);
    }
    
    public function listPropertiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $queryParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListPropertiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListPropertiesRequest',
            $asyncRequest = true);
    }

    /**
     * 修改设备属性
     *
     * 设备的产品模型中定义了物联网平台可向设备下发的属性，应用服务器可调用此接口向指定设备下发属性。平台负责将属性以同步方式发送给设备，并将设备执行属性结果同步返回。
     * 注意：此接口适用于MQTT设备，暂不支持NB-IoT设备。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePropertiesAsync($request)
    {
        return $this->updatePropertiesAsyncWithHttpInfo($request);
    }
    
    public function updatePropertiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/devices/{device_id}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $pathParams['device_id'] = $localVarParams['deviceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdatePropertiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdatePropertiesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建预调配模板
     *
     * 应用服务器可调用此接口在物联网平台创建一个预调配模板。用户的设备未在平台注册时，可以通过预调配模板在设备首次接入物联网平台时将设备信息自动注册到物联网平台。
     * - 该预调配模板至少需要绑定到一个设备CA证书下才能生效。
     * - 一个实例最多可有10个预调配模板。
     * - 仅标准版实例、企业版实例支持该接口调用，基础版不支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProvisioningTemplateAsync($request)
    {
        return $this->createProvisioningTemplateAsyncWithHttpInfo($request);
    }
    
    public function createProvisioningTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/provisioning-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateProvisioningTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateProvisioningTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除预调配模板
     *
     * 应用服务器可调用此接口在物联网平台上删除指定预调配模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProvisioningTemplateAsync($request)
    {
        return $this->deleteProvisioningTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteProvisioningTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/provisioning-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteProvisioningTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteProvisioningTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询预调配模板列表
     *
     * 应用服务器可调用此接口在物联网平台查询预调配模板列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProvisioningTemplatesAsync($request)
    {
        return $this->listProvisioningTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listProvisioningTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/provisioning-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateName'] !== null) {
            $queryParams['template_name'] = $localVarParams['templateName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListProvisioningTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListProvisioningTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询预调配模板详情
     *
     * 应用服务器可调用此接口在物联网平台查询指定预调配模板ID的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProvisioningTemplateAsync($request)
    {
        return $this->showProvisioningTemplateAsyncWithHttpInfo($request);
    }
    
    public function showProvisioningTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/provisioning-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowProvisioningTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowProvisioningTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 更新指定id的预调配模板信息
     *
     * 应用服务器可调用此接口在物联网平台更新指定id的预调配模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProvisioningTemplateAsync($request)
    {
        return $this->updateProvisioningTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateProvisioningTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/provisioning-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateProvisioningTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateProvisioningTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建规则触发条件
     *
     * 应用服务器可调用此接口在物联网平台创建一条规则触发条件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRoutingRuleAsync($request)
    {
        return $this->createRoutingRuleAsyncWithHttpInfo($request);
    }
    
    public function createRoutingRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建规则动作
     *
     * 应用服务器可调用此接口在物联网平台创建一条规则动作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRuleActionAsync($request)
    {
        return $this->createRuleActionAsyncWithHttpInfo($request);
    }
    
    public function createRuleActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRuleActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRuleActionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除规则触发条件
     *
     * 应用服务器可调用此接口删除物联网平台中的指定规则条件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRoutingRuleAsync($request)
    {
        return $this->deleteRoutingRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteRoutingRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除规则动作
     *
     * 应用服务器可调用此接口删除物联网平台中的指定规则动作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRuleActionAsync($request)
    {
        return $this->deleteRuleActionAsyncWithHttpInfo($request);
    }
    
    public function deleteRuleActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['actionId'] !== null) {
            $pathParams['action_id'] = $localVarParams['actionId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRuleActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRuleActionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则条件列表
     *
     * 应用服务器可调用此接口查询物联网平台中设置的规则条件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoutingRulesAsync($request)
    {
        return $this->listRoutingRulesAsyncWithHttpInfo($request);
    }
    
    public function listRoutingRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['event'] !== null) {
            $queryParams['event'] = $localVarParams['event'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['ruleName'] !== null) {
            $queryParams['rule_name'] = $localVarParams['ruleName'];
        }
        if ($localVarParams['active'] !== null) {
            $queryParams['active'] = $localVarParams['active'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则动作列表
     *
     * 应用服务器可调用此接口查询物联网平台中设置的规则动作列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRuleActionsAsync($request)
    {
        return $this->listRuleActionsAsyncWithHttpInfo($request);
    }
    
    public function listRuleActionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleId'] !== null) {
            $queryParams['rule_id'] = $localVarParams['ruleId'];
        }
        if ($localVarParams['channel'] !== null) {
            $queryParams['channel'] = $localVarParams['channel'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRuleActionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRuleActionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则条件
     *
     * 应用服务器可调用此接口查询物联网平台中指定规则条件的配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRoutingRuleAsync($request)
    {
        return $this->showRoutingRuleAsyncWithHttpInfo($request);
    }
    
    public function showRoutingRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则动作
     *
     * 应用服务器可调用此接口查询物联网平台中指定规则动作的配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRuleActionAsync($request)
    {
        return $this->showRuleActionAsyncWithHttpInfo($request);
    }
    
    public function showRuleActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['actionId'] !== null) {
            $pathParams['action_id'] = $localVarParams['actionId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRuleActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRuleActionRequest',
            $asyncRequest = true);
    }

    /**
     * 修改规则触发条件
     *
     * 应用服务器可调用此接口修改物联网平台中指定规则条件的配置参数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoutingRuleAsync($request)
    {
        return $this->updateRoutingRuleAsyncWithHttpInfo($request);
    }
    
    public function updateRoutingRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 修改规则动作
     *
     * 应用服务器可调用此接口修改物联网平台中指定规则动作的配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRuleActionAsync($request)
    {
        return $this->updateRuleActionAsyncWithHttpInfo($request);
    }
    
    public function updateRuleActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/routing-rule/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['actionId'] !== null) {
            $pathParams['action_id'] = $localVarParams['actionId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRuleActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRuleActionRequest',
            $asyncRequest = true);
    }

    /**
     * 修改规则状态
     *
     * 应用服务器可调用此接口修改物联网平台中指定规则的状态，激活或者去激活规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeRuleStatusAsync($request)
    {
        return $this->changeRuleStatusAsyncWithHttpInfo($request);
    }
    
    public function changeRuleStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/rules/{rule_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ChangeRuleStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ChangeRuleStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 创建规则
     *
     * 应用服务器可调用此接口在物联网平台创建一条规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRuleAsync($request)
    {
        return $this->createRuleAsyncWithHttpInfo($request);
    }
    
    public function createRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除规则
     *
     * 应用服务器可调用此接口删除物联网平台中的指定规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRuleAsync($request)
    {
        return $this->deleteRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则列表
     *
     * 应用服务器可调用此接口查询物联网平台中设置的规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRulesAsync($request)
    {
        return $this->listRulesAsyncWithHttpInfo($request);
    }
    
    public function listRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['ruleType'] !== null) {
            $queryParams['rule_type'] = $localVarParams['ruleType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规则
     *
     * 应用服务器可调用此接口查询物联网平台中指定规则的配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRuleAsync($request)
    {
        return $this->showRuleAsyncWithHttpInfo($request);
    }
    
    public function showRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 修改规则
     *
     * 应用服务器可调用此接口修改物联网平台中指定规则的配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRuleAsync($request)
    {
        return $this->updateRuleAsyncWithHttpInfo($request);
    }
    
    public function updateRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建或更新安全态势感知配置
     *
     * #### 接口说明
     * 应用服务器调用该接口创建安全态势感知配置。
     * #### 限制
     * #### 目前支持的安全配置项有：
     * 
     * | 配置名              | 默认告警级别 |   默认安全级别   | 设备维度 | 平台检测/设备上报 | 配置结构体   | 说明        |
     * | :------------------ | :----------- | :--------------- | :------- | :---------------- | :----------------- | :-----------|
     * | DEVICE_MEMORY_CHECK | CRITICAL  | ADVANCE_SECURITY | 是       | 设备上报          | [{\&quot;key\&quot;:\&quot;memory_threshold\&quot;,\&quot;value\&quot;:80},{\&quot;key\&quot;:\&quot;report_period\&quot;,\&quot;value\&quot;:1}] | 设备内存泄漏检测，report_period：上报周期单位(小时) 取值范围[1, 24]；memory_threshold内存检测阈值百分比，取值范围：[1, 100] |
     * | DEVICE_PORT_CHECK   | CRITICAL     | ADVANCE_SECURITY | 是       | 设备上报          | [{\&quot;key\&quot;:\&quot;safety_ports\&quot;,\&quot;value\&quot;:[80,8080]},{\&quot;key\&quot;:\&quot;report_period\&quot;,\&quot;value\&quot;:1}] | 设备异常端口检测，report_period：上报周期单位(小时) 取值范围[1, 24]；safety_ports：安全端口白名单，数组，取值范围:[1, 65535] |
     * | DEVICE_CPU_USAGE_CHECK | CRITICAL  | ADVANCE_SECURITY | 是       | 设备上报          | [{\&quot;key\&quot;:\&quot;cpu_usage_threshold\&quot;,\&quot;value\&quot;:80},{\&quot;key\&quot;:\&quot;report_period\&quot;,\&quot;value\&quot;:1}] | 设备CPU使用率检测，report_period：上报周期单位(小时) 取值范围[1, 24]；cpu_usage_threshold：CPU检测阈值百分比，取值范围：[1, 100] |
     * | DEVICE_DISK_SPACE_CHECK | CRITICAL  | ADVANCE_SECURITY | 是       | 设备上报          | [{\&quot;key\&quot;:\&quot;disk_space_threshold\&quot;,\&quot;value\&quot;:80},{\&quot;key\&quot;:\&quot;report_period\&quot;,\&quot;value\&quot;:1}] | 设备磁盘使用率检测，report_period：上报周期单位(小时) 取值范围[1, 24]；disk_space_threshold：磁盘检测阈值百分比，取值范围：[1, 100] |
     * | DEVICE_BATTERY_PERCENTAGE_CHECK | CRITICAL  | ADVANCE_SECURITY | 是       | 设备上报          | [{\&quot;key\&quot;:\&quot;battery_percentage_threshold\&quot;,\&quot;value\&quot;:20},{\&quot;key\&quot;:\&quot;report_period\&quot;,\&quot;value\&quot;:1}] | 设备电池电量检测，report_period：上报周期单位(小时) 取值范围[1, 24]；battery_percentage_threshold：电池检测阈值百分比，取值范围：[1, 100] |
     * | DEVICE_LOGIN_LOCAL_CHECK | MINOR  | BASIC_SECURITY | 是       | 设备上报          | NA | 设备本地登录检测 |
     * | DEVICE_MALICIOUS_IP_CHECK | MINOR  | BASIC_SECURITY | 是       | 设备上报          | {\&quot;key\&quot;:\&quot;safety_ips\&quot;,\&quot;value\&quot;:[\&quot;192.168.0.0/16\&quot;]} | 设备恶意ip检测 |
     * | DEVICE_LOGIN_BRUTE_FORCE_CHECK | MINOR  | BASIC_SECURITY | 是       | 设备上报          | NA | 设备暴力破解登录检测 |
     * | DEVICE_FILE_TAMPER_CHECK | MINOR  | BASIC_SECURITY | 是       | 设备上报          | NA | 设备本地文件篡改检测 |
     * | INSECURE_TLS_PROTOCOL_CHECK | MAJOR  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备使用不安全的TLS协议接入检测 |
     * | INSECURE_CIPHER_SUITE_CHECK | MAJOR  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备使用不安全TLS加密套件接入检测 |
     * | CONNECT_MULTIPLE_TIMES_CHECK | CRITICAL  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备单位时间内多次建链检测 |
     * | SECRET_COMPLEXITY_CHECK | MAJOR  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备弱密码检测 |
     * | TLS_CONNECT_CHECK | MINOR  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备是否使用TLS加密通讯协议检测 |
     * | DEVICE_AUTH_FAIL_CHECK | CRITICAL  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备鉴权失败检测 |
     * | DEVICE_OFFLINE_CHECK | CRITICAL  | ULTIMATE_SECURITY | 是       | 平台检测          | NA | 设备异常离线检测 |
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityProfileAsync($request)
    {
        return $this->createSecurityProfileAsyncWithHttpInfo($request);
    }
    
    public function createSecurityProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/security-profiles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateSecurityProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateSecurityProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除某个具体id的安全态势感知配置信息
     *
     * 应用服务器可调用此接口删除某个具体id的安全态势感知配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityProfileAsync($request)
    {
        return $this->deleteSecurityProfileAsyncWithHttpInfo($request);
    }
    
    public function deleteSecurityProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/security-profiles/{profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['profileId'] !== null) {
            $pathParams['profile_id'] = $localVarParams['profileId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteSecurityProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteSecurityProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询安全态势感知配置信息列表
     *
     * 接口说明：应用服务器调用该接口查询安全态势感知配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityProfilesAsync($request)
    {
        return $this->listSecurityProfilesAsyncWithHttpInfo($request);
    }
    
    public function listSecurityProfilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/security-profiles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['securityType'] !== null) {
            $queryParams['security_type'] = $localVarParams['securityType'];
        }
        if ($localVarParams['targetType'] !== null) {
            $queryParams['target_type'] = $localVarParams['targetType'];
        }
        if ($localVarParams['targetId'] !== null) {
            $queryParams['target_id'] = $localVarParams['targetId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListSecurityProfilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListSecurityProfilesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询某个具体id的安全态势感知配置详情
     *
     * 应用服务器可调用此接口查询某个具体id的安全态势感知配置详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityProfileAsync($request)
    {
        return $this->showSecurityProfileAsyncWithHttpInfo($request);
    }
    
    public function showSecurityProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/security-profiles/{profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['profileId'] !== null) {
            $pathParams['profile_id'] = $localVarParams['profileId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowSecurityProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowSecurityProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 更新某个具体id的安全态势感知配置信息
     *
     * 应用服务器可调用此接口更新某个具体id的安全态势感知配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityProfileAsync($request)
    {
        return $this->updateSecurityProfileAsyncWithHttpInfo($request);
    }
    
    public function updateSecurityProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/security-profiles/{profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['profileId'] !== null) {
            $pathParams['profile_id'] = $localVarParams['profileId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateSecurityProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateSecurityProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 添加服务器证书
     *
     * 应用服务器可调用此接口在物联网平台上添加服务器证书，服务器证书配额限制为：2个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createServerCertificateAsync($request)
    {
        return $this->createServerCertificateAsyncWithHttpInfo($request);
    }
    
    public function createServerCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/server-certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateServerCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateServerCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除服务端证书
     *
     * 应用服务器可调用此接口在物联网平台删除服务器证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServerCertificateAsync($request)
    {
        return $this->deleteServerCertificateAsyncWithHttpInfo($request);
    }
    
    public function deleteServerCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/server-certificates/{server_certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['serverCertificateId'] !== null) {
            $pathParams['server_certificate_id'] = $localVarParams['serverCertificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteServerCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteServerCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取服务器证书列表
     *
     * 应用服务器可调用此接口在物联网平台上获取服务器证书列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServerCertificateAsync($request)
    {
        return $this->listServerCertificateAsyncWithHttpInfo($request);
    }
    
    public function listServerCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/server-certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListServerCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListServerCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务器证书
     *
     * 应用服务器可调用此接口在物联网平台查询服务器证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServerCertificateAsync($request)
    {
        return $this->showServerCertificateAsyncWithHttpInfo($request);
    }
    
    public function showServerCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/server-certificates/{server_certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['serverCertificateId'] !== null) {
            $pathParams['server_certificate_id'] = $localVarParams['serverCertificateId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowServerCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowServerCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 按标签查询资源
     *
     * 应用服务器可调用此接口查询绑定了指定标签的资源。当前支持标签的资源有Device(设备)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourcesByTagsAsync($request)
    {
        return $this->listResourcesByTagsAsyncWithHttpInfo($request);
    }
    
    public function listResourcesByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tags/query-resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListResourcesByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListResourcesByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定标签
     *
     * 应用服务器可调用此接口为指定资源绑定标签。当前支持标签的资源有Device(设备)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagDeviceAsync($request)
    {
        return $this->tagDeviceAsyncWithHttpInfo($request);
    }
    
    public function tagDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tags/bind-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\TagDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\TagDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑标签
     *
     * 应用服务器可调用此接口为指定资源解绑标签。当前支持标签的资源有Device(设备)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagDeviceAsync($request)
    {
        return $this->untagDeviceAsyncWithHttpInfo($request);
    }
    
    public function untagDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tags/unbind-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UntagDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UntagDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建设备隧道
     *
     * 用户可以通过该接口创建隧道（WebSocket协议），应用服务器和设备可以通过该隧道进行数据传输。
     * 
     * - 该API接口在基础版不支持。
     * - 该API调用后平台会向对应的MQTT/MQTTS设备下发隧道地址及密钥，同时给应用服务器也返回隧道地址及密钥，设备可以通过该地址及密钥创建WebSocket协议连接。
     * - 一个设备无法创建多个隧道。
     * - 具体应用可见“设备远程登录”功能，请参见[[设备远程登录](https://support.huaweicloud.com/usermanual-iothub/iot_01_00301.html)](tag:hws)[[设备远程登录](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_00301.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addTunnelAsync($request)
    {
        return $this->addTunnelAsyncWithHttpInfo($request);
    }
    
    public function addTunnelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tunnels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddTunnelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddTunnelRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭设备隧道
     *
     * 应用服务器可通过该接口关闭某个设备隧道。关闭后可以再次连接。
     * - 该API接口在基础版不支持。
     * - 具体应用可见“设备远程登录”功能，请参见[[设备远程登录](https://support.huaweicloud.com/usermanual-iothub/iot_01_00301.html)](tag:hws)[[设备远程登录](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_00301.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function closeDeviceTunnelAsync($request)
    {
        return $this->closeDeviceTunnelAsyncWithHttpInfo($request);
    }
    
    public function closeDeviceTunnelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tunnels/{tunnel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['tunnelId'] !== null) {
            $pathParams['tunnel_id'] = $localVarParams['tunnelId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\CloseDeviceTunnelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CloseDeviceTunnelRequest',
            $asyncRequest = true);
    }

    /**
     * 删除设备隧道
     *
     * 用户可通过该接口删除某个设备隧道。删除后该通道不存在，无法再次连接。
     * - 该API接口在基础版不支持。
     * - 具体应用可见“设备远程登录”功能，请参见[[设备远程登录](https://support.huaweicloud.com/usermanual-iothub/iot_01_00301.html)](tag:hws)[[设备远程登录](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_00301.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceTunnelAsync($request)
    {
        return $this->deleteDeviceTunnelAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceTunnelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tunnels/{tunnel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['tunnelId'] !== null) {
            $pathParams['tunnel_id'] = $localVarParams['tunnelId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceTunnelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceTunnelRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备所有隧道
     *
     * 用户可通过该接口查询某项目下的所有设备隧道，以实现对设备管理。应用服务器可通过此接口向平台查询设备隧道建立的情况。
     * - 该API接口在基础版不支持。
     * - 具体应用可见“设备远程登录”功能，请参见[[设备远程登录](https://support.huaweicloud.com/usermanual-iothub/iot_01_00301.html)](tag:hws)[[设备远程登录](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_00301.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceTunnelsAsync($request)
    {
        return $this->listDeviceTunnelsAsyncWithHttpInfo($request);
    }
    
    public function listDeviceTunnelsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tunnels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['deviceId'] !== null) {
            $queryParams['device_id'] = $localVarParams['deviceId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $headerParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceTunnelsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceTunnelsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备隧道
     *
     * 用户可通过该接口查询某项目中的某个设备隧道，查看该设备隧道的信息与连接情况。应用服务器可调用此接口向平台查询设备隧道建立情况。
     * - 该API接口在基础版不支持。
     * - 具体应用可见“设备远程登录”功能，请参见[[设备远程登录](https://support.huaweicloud.com/usermanual-iothub/iot_01_00301.html)](tag:hws)[[设备远程登录](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_00301.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceTunnelAsync($request)
    {
        return $this->showDeviceTunnelAsyncWithHttpInfo($request);
    }
    
    public function showDeviceTunnelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/tunnels/{tunnel_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['tunnelId'] !== null) {
            $pathParams['tunnel_id'] = $localVarParams['tunnelId'];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceTunnelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceTunnelRequest',
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