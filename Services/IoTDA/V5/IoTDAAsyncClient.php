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
        return new ClientBuilder(new IoTDAAsyncClient());
    }

    /**
     * 生成接入凭证
     * 接入凭证是用于客户端使用AMQP等协议与平台建链的一个认证凭据。只保留一条记录，如果重复调用只会重置接入凭证，使得之前的失效。
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
        $resourcePath = '/{project_id}/auth/accesscode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台创建一个AMQP队列。每个租户只能创建100个队列，若超过规格，则创建失败，若队列名称与已有的队列名称相同，则创建失败。
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
        $resourcePath = '/{project_id}/amqp-queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中的AMQP队列信息列表。可通过队列名称作模糊查询，支持分页。
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
        $resourcePath = '/{project_id}/amqp-queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台上删除指定AMQP队列。若当前队列正在使用，则会删除失败。
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
        $resourcePath = '/{project_id}/amqp-queues/{queue_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中指定队列的详细信息。
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
        $resourcePath = '/{project_id}/amqp-queues/{queue_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口创建资源空间。
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
        $resourcePath = '/{project_id}/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 删除指定资源空间。删除资源空间属于高危操作，删除资源空间后，该空间下的产品、设备等资源将不可用，请谨慎操作！
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
        $resourcePath = '/{project_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口查询指定资源空间详情。
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
        $resourcePath = '/{project_id}/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口查询资源空间列表。
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
        $resourcePath = '/{project_id}/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 下发异步设备命令
     * 设备的产品模型中定义了物联网平台可向设备下发的命令，应用服务器可调用此接口向指定设备下发异步命令，以实现对设备的控制。平台负责将命令发送给设备，并将设备执行命令结果异步通知应用服务器。 命令执行结果支持灵活的数据流转，应用服务器通过调用物联网平台的创建规则触发条件（Resource:device.command.status，Event:update）、创建规则动作并激活规则后，当命令状态变更时，物联网平台会根据规则将结果发送到规则指定的服务器，如用户自定义的HTTP服务器，AMQP服务器，以及华为云的其他储存服务器等, 详情参考[设备命令状态变更通知](https://support.huaweicloud.com/api-iothub/iot_06_v5_01212.html)。注意：此接口适用于NB设备异步命令下发，暂不支持其他协议类型设备命令下发。
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
        $resourcePath = '/{project_id}/devices/{device_id}/async-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询指定id的命令
     * 物联网平台可查询指定id的命令。
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
        $resourcePath = '/{project_id}/devices/{device_id}/async-commands/{command_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 创建批量任务
     * 应用服务器可调用此接口为创建批量处理任务，对多个设备进行批量操作。当前支持批量软固件升级、批量创建设备、批量删除设备、批量冻结设备、批量解冻设备、批量创建命令任务。
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
        $resourcePath = '/{project_id}/batchtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询批量任务列表
     * 应用服务器可调用此接口查询物联网平台中批量任务列表，每一个任务又包括具体的任务内容、任务状态、任务完成情况统计等。
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
        $resourcePath = '/{project_id}/batchtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询批量任务
     * 应用服务器可调用此接口查询物联网平台中指定批量任务的信息，包括任务内容、任务状态、任务完成情况统计以及子任务列表等。
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
        $resourcePath = '/{project_id}/batchtasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 删除批量任务文件
     * 应用服务器可调用此接口删除批量任务文件。
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
        $resourcePath = '/{project_id}/batchtask-files/{file_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskFileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批量任务文件列表
     * 应用服务器可调用此接口查询批量任务文件列表。
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
        $resourcePath = '/{project_id}/batchtask-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTaskFilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTaskFilesRequest',
            $asyncRequest = true);
    }

    /**
     * 上传批量任务文件
     * 应用服务器可调用此接口上传批量任务文件，用于创建批量任务。当前支持批量创建设备任务、批量删除设备任务、批量冻结设备任务、批量解冻设备任务的文件上传。 - [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)   - [批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)   - [批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)   - [批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadBatchTaskFileAsync($request)
    {
        return $this->uploadBatchTaskFileAsyncWithHttpInfo($request);
    }
    
    public function uploadBatchTaskFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/batchtask-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
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
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\UploadBatchTaskFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UploadBatchTaskFileRequest',
            $asyncRequest = true);
    }

    /**
     * 上传设备CA证书
     * 应用服务器可调用此接口在物联网平台上传设备的CA证书
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
        $resourcePath = '/{project_id}/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 验证设备CA证书
     * 应用服务器可调用此接口在物联网平台验证设备的CA证书，目的是为了验证用户持有设备CA证书的私钥
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
        $resourcePath = '/{project_id}/certificates/{certificate_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台删除设备的CA证书
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
        $resourcePath = '/{project_id}/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台获取设备的CA证书列表
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
        $resourcePath = '/{project_id}/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 下发设备命令
     * 设备的产品模型中定义了物联网平台可向设备下发的命令，应用服务器可调用此接口向指定设备下发命令，以实现对设备的同步控制。平台负责将命令以同步方式发送给设备，并将设备执行命令结果同步返回, 如果设备没有响应，平台会返回给应用服务器超时，平台超时间是20秒。注意：此接口适用于MQTT设备同步命令下发，暂不支持NB-IoT设备命令下发。
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
        $resourcePath = '/{project_id}/devices/{device_id}/commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 添加设备组
     * 应用服务器可调用此接口新建设备组，一个华为云账号下最多可有1,000个分组，包括父分组和子分组。设备组的最大层级关系不超过5层，即群组形成的关系树最大深度不超过5。
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
        $resourcePath = '/{project_id}/device-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口管理设备组中的设备。单个设备组内最多添加20,000个设备，一个设备最多可以被添加到10个设备组中。
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
        $resourcePath = '/{project_id}/device-group/{group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口删除指定设备组，如果该设备组存在子设备组或者该设备组中存在设备，必须先删除子设备组并将设备从该设备组移除，才能删除该设备组。
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
        $resourcePath = '/{project_id}/device-group/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中的设备组信息列表。
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
        $resourcePath = '/{project_id}/device-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询指定设备组详情。
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
        $resourcePath = '/{project_id}/device-group/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询指定设备组下的设备列表。
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
        $resourcePath = '/{project_id}/device-group/{group_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改物联网平台中指定设备组。
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
        $resourcePath = '/{project_id}/device-group/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台创建一个设备，仅在创建后设备才可以接入物联网平台。  - 该接口支持使用gateway_id参数指定在父设备下创建一个子设备，并且支持多级子设备，当前最大支持二级子设备。 - 该接口同时还支持对设备进行初始配置，接口会读取创建设备请求参数product_id对应的产品详情，如果产品的属性有定义默认值，则会将该属性默认值写入该设备的设备影子中。 - 用户还可以使用创建设备请求参数shadow字段为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以shadow字段中设置的属性值为准写入到设备影子中。
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
        $resourcePath = '/{project_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 删除设备
     * 应用服务器可调用此接口在物联网平台上删除指定设备。若设备下连接了非直连设备，则必须把设备下的非直连设备都删除后，才能删除该设备。
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
        $resourcePath = '/{project_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口冻结设备，设备冻结后不能再连接上线，可以通过解冻设备接口解除设备冻结。注意，当前仅支持冻结与平台直连的设备。
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
        $resourcePath = '/{project_id}/devices/{device_id}/freeze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询设备列表
     * 应用服务器可调用此接口查询物联网平台中的设备信息列表。
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
        $resourcePath = '/{project_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口重置设备密钥，携带指定密钥时平台将设备密钥重置为指定的密钥，不携带密钥时平台将自动生成一个新的随机密钥返回。
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
        $resourcePath = '/{project_id}/devices/{device_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询设备
     * 应用服务器可调用此接口查询物联网平台中指定设备的详细信息。
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
        $resourcePath = '/{project_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口解冻设备，解除冻结后，设备可以连接上线。
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
        $resourcePath = '/{project_id}/devices/{device_id}/unfreeze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改物联网平台中指定设备的基本信息。
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
        $resourcePath = '/{project_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询设备影子数据
     * 应用服务器可调用此接口查询指定设备的设备影子信息，包括对设备的期望属性信息（desired区）和设备最新上报的属性信息（reported区）。  设备影子介绍： 设备影子是一个用于存储和检索设备当前状态信息的JSON文档。 - 每个设备有且只有一个设备影子，由设备ID唯一标识 - 设备影子仅保存最近一次设备的上报数据和预期数据 - 无论该设备是否在线，都可以通过该影子获取和设置设备的属性 - 设备上线或者设备上报属性时，如果desired区和reported区存在差异，则将差异部分下发给设备，配置的预期属性需在产品模型中定义且method具有可写属性“W”才可下发
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
        $resourcePath = '/{project_id}/devices/{device_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口配置设备影子的预期属性（desired区），当设备上线或者设备上报属性时把属性下发给设备。  设备影子介绍： 设备影子是一个用于存储和检索设备当前状态信息的JSON文档。 - 每个设备有且只有一个设备影子，由设备ID唯一标识 - 设备影子仅保存最近一次设备的上报数据和预期数据 - 无论该设备是否在线，都可以通过该影子获取和设置设备的属性 - 设备上线或者设备上报属性时，如果desired区和reported区存在差异，则将差异部分下发给设备，配置的预期属性需在产品模型中定义且method具有可写属性“W”才可下发
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
        $resourcePath = '/{project_id}/devices/{device_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 下发设备消息
     * 物联网平台可向设备下发消息，应用服务器可调用此接口向指定设备下发消息，以实现对设备的控制。应用将消息下发给平台后，平台返回应用响应结果，平台再将消息发送给设备。注意：此接口适用于MQTT设备消息下发，暂不支持其他协议接入的设备消息下发。
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
        $resourcePath = '/{project_id}/devices/{device_id}/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 查询设备消息
     * 物联网平台可查询指定设备下的消息，平台为每个设备默认最多保存20条消息，超过20条后， 后续的消息会替换下发最早的消息。
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
        $resourcePath = '/{project_id}/devices/{device_id}/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 物联网平台可查询指定消息id的消息。
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
        $resourcePath = '/{project_id}/devices/{device_id}/messages/{message_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 创建产品
     * 应用服务器可调用此接口创建产品。
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
        $resourcePath = '/{project_id}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口删除已导入物联网平台的指定产品模型。
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
        $resourcePath = '/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询已导入物联网平台的产品模型信息列表，了解产品模型的概要信息。
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
        $resourcePath = '/{project_id}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询已导入物联网平台的指定产品模型详细信息，包括产品模型的服务、属性、命令等。
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
        $resourcePath = '/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改已导入物联网平台的指定产品模型，包括产品模型的服务、属性、命令等。
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
        $resourcePath = '/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 设备的产品模型中定义了物联网平台可向设备下发的属性，应用服务器可调用此接口查询指定设备下属性。注意：此接口适用于MQTT设备，暂不支持NB-IoT设备。
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
        $resourcePath = '/{project_id}/devices/{device_id}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 设备的产品模型中定义了物联网平台可向设备下发的属性，应用服务器可调用此接口向指定设备下属性。平台负责将属性以同步方式发送给设备，并将设备执行属性结果同步返回。注意：此接口适用于MQTT设备，暂不支持NB-IoT设备。
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
        $resourcePath = '/{project_id}/devices/{device_id}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 创建规则触发条件
     * 应用服务器可调用此接口在物联网平台创建一条规则触发条件。
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
        $resourcePath = '/{project_id}/routing-rule/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台创建一条规则动作。
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
        $resourcePath = '/{project_id}/routing-rule/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口删除物联网平台中的指定规则条件。
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
        $resourcePath = '/{project_id}/routing-rule/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口删除物联网平台中的指定规则动作。
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
        $resourcePath = '/{project_id}/routing-rule/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中设置的规则条件列表。
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
        $resourcePath = '/{project_id}/routing-rule/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中设置的规则动作列表。
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
        $resourcePath = '/{project_id}/routing-rule/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中指定规则条件的配置信息。
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
        $resourcePath = '/{project_id}/routing-rule/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中指定规则动作的配置信息。
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
        $resourcePath = '/{project_id}/routing-rule/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改物联网平台中指定规则条件的配置参数。
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
        $resourcePath = '/{project_id}/routing-rule/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改物联网平台中指定规则动作的配置。
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
        $resourcePath = '/{project_id}/routing-rule/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改物联网平台中指定规则的状态，激活或者去激活规则。
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
        $resourcePath = '/{project_id}/rules/{rule_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口在物联网平台创建一条规则。
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
        $resourcePath = '/{project_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口删除物联网平台中的指定规则。
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
        $resourcePath = '/{project_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中设置的规则列表。
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
        $resourcePath = '/{project_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口查询物联网平台中指定规则的配置信息。
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
        $resourcePath = '/{project_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口修改物联网平台中指定规则的配置。
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
        $resourcePath = '/{project_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 按标签查询资源
     * 应用服务器可调用此接口查询绑定了指定标签的资源。当前支持标签的资源有Device(设备)。
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
        $resourcePath = '/{project_id}/tags/query-resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口为指定资源绑定标签。当前支持标签的资源有Device(设备)。
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
        $resourcePath = '/{project_id}/tags/bind-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
     * 应用服务器可调用此接口为指定资源解绑标签。当前支持标签的资源有Device(设备)。
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
        $resourcePath = '/{project_id}/tags/unbind-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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