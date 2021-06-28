<?php

namespace HuaweiCloud\SDK\IoTDA\V5;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IoTDAClient extends Client
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
        return new ClientBuilder(new IoTDAClient());
    }


    /**
     * 生成接入凭证
     * 接入凭证是用于客户端使用AMQP等协议与平台建链的一个认证凭据。只保留一条记录，如果重复调用只会重置接入凭证，使得之前的失效。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccessCode($request)
    {
        return $this->createAccessCodeWithHttpInfo($request);
    }

    public function createAccessCodeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateAccessCodeRequest');
    }

    /**
     * 创建AMQP队列
     * 应用服务器可调用此接口在物联网平台创建一个AMQP队列。每个租户只能创建100个队列，若超过规格，则创建失败，若队列名称与已有的队列名称相同，则创建失败。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addQueue($request)
    {
        return $this->addQueueWithHttpInfo($request);
    }

    public function addQueueWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddQueueRequest');
    }

    /**
     * 查询AMQP列表
     * 应用服务器可调用此接口查询物联网平台中的AMQP队列信息列表。可通过队列名称作模糊查询，支持分页。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowQueue($request)
    {
        return $this->batchShowQueueWithHttpInfo($request);
    }

    public function batchShowQueueWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\BatchShowQueueRequest');
    }

    /**
     * 删除AMQP队列
     * 应用服务器可调用此接口在物联网平台上删除指定AMQP队列。若当前队列正在使用，则会删除失败。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteQueue($request)
    {
        return $this->deleteQueueWithHttpInfo($request);
    }

    public function deleteQueueWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteQueueRequest');
    }

    /**
     * 查询单个AMQP队列
     * 应用服务器可调用此接口查询物联网平台中指定队列的详细信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQueue($request)
    {
        return $this->showQueueWithHttpInfo($request);
    }

    public function showQueueWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowQueueRequest');
    }

    /**
     * 创建资源空间
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口创建资源空间。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addApplication($request)
    {
        return $this->addApplicationWithHttpInfo($request);
    }

    public function addApplicationWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddApplicationRequest');
    }

    /**
     * 删除资源空间
     * 删除指定资源空间。删除资源空间属于高危操作，删除资源空间后，该空间下的产品、设备等资源将不可用，请谨慎操作！
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteApplicationRequest');
    }

    /**
     * 查询资源空间
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口查询指定资源空间详情。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplication($request)
    {
        return $this->showApplicationWithHttpInfo($request);
    }

    public function showApplicationWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowApplicationRequest');
    }

    /**
     * 查询资源空间列表
     * 资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。应用服务器可以调用此接口查询资源空间列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplications($request)
    {
        return $this->showApplicationsWithHttpInfo($request);
    }

    public function showApplicationsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowApplicationsRequest');
    }

    /**
     * 下发异步设备命令
     * 设备的产品模型中定义了物联网平台可向设备下发的命令，应用服务器可调用此接口向指定设备下发异步命令，以实现对设备的控制。平台负责将命令发送给设备，并将设备执行命令结果异步通知应用服务器。 命令执行结果支持灵活的数据流转，应用服务器通过调用物联网平台的创建规则触发条件（Resource:device.command.status，Event:update）、创建规则动作并激活规则后，当命令状态变更时，物联网平台会根据规则将结果发送到规则指定的服务器，如用户自定义的HTTP服务器，AMQP服务器，以及华为云的其他储存服务器等, 详情参考[设备命令状态变更通知](https://support.huaweicloud.com/api-iothub/iot_06_v5_01212.html)。注意：此接口适用于NB设备异步命令下发，暂不支持其他协议类型设备命令下发。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAsyncCommand($request)
    {
        return $this->createAsyncCommandWithHttpInfo($request);
    }

    public function createAsyncCommandWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateAsyncCommandRequest');
    }

    /**
     * 查询指定id的命令
     * 物联网平台可查询指定id的命令。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAsyncDeviceCommand($request)
    {
        return $this->showAsyncDeviceCommandWithHttpInfo($request);
    }

    public function showAsyncDeviceCommandWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowAsyncDeviceCommandRequest');
    }

    /**
     * 创建批量任务
     * 应用服务器可调用此接口为创建批量处理任务，对多个设备进行批量操作。当前支持批量软固件升级、批量创建设备、批量删除设备、批量冻结设备、批量解冻设备、批量创建命令任务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBatchTask($request)
    {
        return $this->createBatchTaskWithHttpInfo($request);
    }

    public function createBatchTaskWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateBatchTaskRequest');
    }

    /**
     * 查询批量任务列表
     * 应用服务器可调用此接口查询物联网平台中批量任务列表，每一个任务又包括具体的任务内容、任务状态、任务完成情况统计等。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBatchTasks($request)
    {
        return $this->listBatchTasksWithHttpInfo($request);
    }

    public function listBatchTasksWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTasksRequest');
    }

    /**
     * 查询批量任务
     * 应用服务器可调用此接口查询物联网平台中指定批量任务的信息，包括任务内容、任务状态、任务完成情况统计以及子任务列表等。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBatchTask($request)
    {
        return $this->showBatchTaskWithHttpInfo($request);
    }

    public function showBatchTaskWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowBatchTaskRequest');
    }

    /**
     * 删除批量任务文件
     * 应用服务器可调用此接口删除批量任务文件。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBatchTaskFile($request)
    {
        return $this->deleteBatchTaskFileWithHttpInfo($request);
    }

    public function deleteBatchTaskFileWithHttpInfo($request)
    {
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteBatchTaskFileRequest');
    }

    /**
     * 查询批量任务文件列表
     * 应用服务器可调用此接口查询批量任务文件列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBatchTaskFiles($request)
    {
        return $this->listBatchTaskFilesWithHttpInfo($request);
    }

    public function listBatchTaskFilesWithHttpInfo($request)
    {
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListBatchTaskFilesRequest');
    }

    /**
     * 上传批量任务文件
     * 应用服务器可调用此接口上传批量任务文件，用于创建批量任务。当前支持批量创建设备任务、批量删除设备任务、批量冻结设备任务、批量解冻设备任务的文件上传。 - [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)   - [批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)   - [批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)   - [批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadBatchTaskFile($request)
    {
        return $this->uploadBatchTaskFileWithHttpInfo($request);
    }

    public function uploadBatchTaskFileWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v5/iot/{project_id}/batchtask-files';
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UploadBatchTaskFileRequest');
    }

    /**
     * 上传设备CA证书
     * 应用服务器可调用此接口在物联网平台上传设备的CA证书
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCertificate($request)
    {
        return $this->addCertificateWithHttpInfo($request);
    }

    public function addCertificateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddCertificateRequest');
    }

    /**
     * 验证设备CA证书
     * 应用服务器可调用此接口在物联网平台验证设备的CA证书，目的是为了验证用户持有设备CA证书的私钥
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkCertificate($request)
    {
        return $this->checkCertificateWithHttpInfo($request);
    }

    public function checkCertificateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CheckCertificateRequest');
    }

    /**
     * 删除设备CA证书
     * 应用服务器可调用此接口在物联网平台删除设备的CA证书
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCertificate($request)
    {
        return $this->deleteCertificateWithHttpInfo($request);
    }

    public function deleteCertificateWithHttpInfo($request)
    {
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteCertificateRequest');
    }

    /**
     * 获取设备CA证书列表
     * 应用服务器可调用此接口在物联网平台获取设备的CA证书列表
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCertificates($request)
    {
        return $this->listCertificatesWithHttpInfo($request);
    }

    public function listCertificatesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListCertificatesRequest');
    }

    /**
     * 下发设备命令
     * 设备的产品模型中定义了物联网平台可向设备下发的命令，应用服务器可调用此接口向指定设备下发命令，以实现对设备的同步控制。平台负责将命令以同步方式发送给设备，并将设备执行命令结果同步返回, 如果设备没有响应，平台会返回给应用服务器超时，平台超时间是20秒。注意：此接口适用于MQTT设备同步命令下发，暂不支持NB-IoT设备命令下发。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCommand($request)
    {
        return $this->createCommandWithHttpInfo($request);
    }

    public function createCommandWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateCommandRequest');
    }

    /**
     * 添加设备组
     * 应用服务器可调用此接口新建设备组，一个华为云账号下最多可有1,000个分组，包括父分组和子分组。设备组的最大层级关系不超过5层，即群组形成的关系树最大深度不超过5。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDeviceGroup($request)
    {
        return $this->addDeviceGroupWithHttpInfo($request);
    }

    public function addDeviceGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddDeviceGroupRequest');
    }

    /**
     * 管理设备组中的设备
     * 应用服务器可调用此接口管理设备组中的设备。单个设备组内最多添加20,000个设备，一个设备最多可以被添加到10个设备组中。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrDeleteDeviceInGroup($request)
    {
        return $this->createOrDeleteDeviceInGroupWithHttpInfo($request);
    }

    public function createOrDeleteDeviceInGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateOrDeleteDeviceInGroupRequest');
    }

    /**
     * 删除设备组
     * 应用服务器可调用此接口删除指定设备组，如果该设备组存在子设备组或者该设备组中存在设备，必须先删除子设备组并将设备从该设备组移除，才能删除该设备组。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeviceGroup($request)
    {
        return $this->deleteDeviceGroupWithHttpInfo($request);
    }

    public function deleteDeviceGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceGroupRequest');
    }

    /**
     * 查询设备组列表
     * 应用服务器可调用此接口查询物联网平台中的设备组信息列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceGroups($request)
    {
        return $this->listDeviceGroupsWithHttpInfo($request);
    }

    public function listDeviceGroupsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceGroupsRequest');
    }

    /**
     * 查询设备组
     * 应用服务器可调用此接口查询指定设备组详情。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceGroup($request)
    {
        return $this->showDeviceGroupWithHttpInfo($request);
    }

    public function showDeviceGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceGroupRequest');
    }

    /**
     * 查询设备组设备列表
     * 应用服务器可调用此接口查询指定设备组下的设备列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDevicesInGroup($request)
    {
        return $this->showDevicesInGroupWithHttpInfo($request);
    }

    public function showDevicesInGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDevicesInGroupRequest');
    }

    /**
     * 修改设备组
     * 应用服务器可调用此接口修改物联网平台中指定设备组。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceGroup($request)
    {
        return $this->updateDeviceGroupWithHttpInfo($request);
    }

    public function updateDeviceGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceGroupRequest');
    }

    /**
     * 创建设备
     * 应用服务器可调用此接口在物联网平台创建一个设备，仅在创建后设备才可以接入物联网平台。  - 该接口支持使用gateway_id参数指定在父设备下创建一个子设备，并且支持多级子设备，当前最大支持二级子设备。 - 该接口同时还支持对设备进行初始配置，接口会读取创建设备请求参数product_id对应的产品详情，如果产品的属性有定义默认值，则会将该属性默认值写入该设备的设备影子中。 - 用户还可以使用创建设备请求参数shadow字段为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以shadow字段中设置的属性值为准写入到设备影子中。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDevice($request)
    {
        return $this->addDeviceWithHttpInfo($request);
    }

    public function addDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\AddDeviceRequest');
    }

    /**
     * 删除设备
     * 应用服务器可调用此接口在物联网平台上删除指定设备。若设备下连接了非直连设备，则必须把设备下的非直连设备都删除后，才能删除该设备。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDevice($request)
    {
        return $this->deleteDeviceWithHttpInfo($request);
    }

    public function deleteDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteDeviceRequest');
    }

    /**
     * 冻结设备
     * 应用服务器可调用此接口冻结设备，设备冻结后不能再连接上线，可以通过解冻设备接口解除设备冻结。注意，当前仅支持冻结与平台直连的设备。
     *
     * @param $request 请求对象
     * @return response
     */
    public function freezeDevice($request)
    {
        return $this->freezeDeviceWithHttpInfo($request);
    }

    public function freezeDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\FreezeDeviceRequest');
    }

    /**
     * 查询设备列表
     * 应用服务器可调用此接口查询物联网平台中的设备信息列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevices($request)
    {
        return $this->listDevicesWithHttpInfo($request);
    }

    public function listDevicesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDevicesRequest');
    }

    /**
     * 重置设备密钥
     * 应用服务器可调用此接口重置设备密钥，携带指定密钥时平台将设备密钥重置为指定的密钥，不携带密钥时平台将自动生成一个新的随机密钥返回。
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetDeviceSecret($request)
    {
        return $this->resetDeviceSecretWithHttpInfo($request);
    }

    public function resetDeviceSecretWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ResetDeviceSecretRequest');
    }

    /**
     * 查询设备
     * 应用服务器可调用此接口查询物联网平台中指定设备的详细信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDevice($request)
    {
        return $this->showDeviceWithHttpInfo($request);
    }

    public function showDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceRequest');
    }

    /**
     * 解冻设备
     * 应用服务器可调用此接口解冻设备，解除冻结后，设备可以连接上线。
     *
     * @param $request 请求对象
     * @return response
     */
    public function unfreezeDevice($request)
    {
        return $this->unfreezeDeviceWithHttpInfo($request);
    }

    public function unfreezeDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UnfreezeDeviceRequest');
    }

    /**
     * 修改设备
     * 应用服务器可调用此接口修改物联网平台中指定设备的基本信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDevice($request)
    {
        return $this->updateDeviceWithHttpInfo($request);
    }

    public function updateDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceRequest');
    }

    /**
     * 查询设备影子数据
     * 应用服务器可调用此接口查询指定设备的设备影子信息，包括对设备的期望属性信息（desired区）和设备最新上报的属性信息（reported区）。  设备影子介绍： 设备影子是一个用于存储和检索设备当前状态信息的JSON文档。 - 每个设备有且只有一个设备影子，由设备ID唯一标识 - 设备影子仅保存最近一次设备的上报数据和预期数据 - 无论该设备是否在线，都可以通过该影子获取和设置设备的属性 - 设备上线或者设备上报属性时，如果desired区和reported区存在差异，则将差异部分下发给设备，配置的预期属性需在产品模型中定义且method具有可写属性“W”才可下发
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceShadow($request)
    {
        return $this->showDeviceShadowWithHttpInfo($request);
    }

    public function showDeviceShadowWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceShadowRequest');
    }

    /**
     * 配置设备影子预期数据
     * 应用服务器可调用此接口配置设备影子的预期属性（desired区），当设备上线或者设备上报属性时把属性下发给设备。  设备影子介绍： 设备影子是一个用于存储和检索设备当前状态信息的JSON文档。 - 每个设备有且只有一个设备影子，由设备ID唯一标识 - 设备影子仅保存最近一次设备的上报数据和预期数据 - 无论该设备是否在线，都可以通过该影子获取和设置设备的属性 - 设备上线或者设备上报属性时，如果desired区和reported区存在差异，则将差异部分下发给设备，配置的预期属性需在产品模型中定义且method具有可写属性“W”才可下发
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceShadowDesiredData($request)
    {
        return $this->updateDeviceShadowDesiredDataWithHttpInfo($request);
    }

    public function updateDeviceShadowDesiredDataWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateDeviceShadowDesiredDataRequest');
    }

    /**
     * 下发设备消息
     * 物联网平台可向设备下发消息，应用服务器可调用此接口向指定设备下发消息，以实现对设备的控制。应用将消息下发给平台后，平台返回应用响应结果，平台再将消息发送给设备。注意：此接口适用于MQTT设备消息下发，暂不支持其他协议接入的设备消息下发。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMessage($request)
    {
        return $this->createMessageWithHttpInfo($request);
    }

    public function createMessageWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateMessageRequest');
    }

    /**
     * 查询设备消息
     * 物联网平台可查询指定设备下的消息，平台为每个设备默认最多保存20条消息，超过20条后， 后续的消息会替换下发最早的消息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeviceMessages($request)
    {
        return $this->listDeviceMessagesWithHttpInfo($request);
    }

    public function listDeviceMessagesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListDeviceMessagesRequest');
    }

    /**
     * 查询指定消息id的消息
     * 物联网平台可查询指定消息id的消息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceMessage($request)
    {
        return $this->showDeviceMessageWithHttpInfo($request);
    }

    public function showDeviceMessageWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowDeviceMessageRequest');
    }

    /**
     * 创建产品
     * 应用服务器可调用此接口创建产品。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProduct($request)
    {
        return $this->createProductWithHttpInfo($request);
    }

    public function createProductWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateProductRequest');
    }

    /**
     * 删除产品
     * 应用服务器可调用此接口删除已导入物联网平台的指定产品模型。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProduct($request)
    {
        return $this->deleteProductWithHttpInfo($request);
    }

    public function deleteProductWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteProductRequest');
    }

    /**
     * 查询产品列表
     * 应用服务器可调用此接口查询已导入物联网平台的产品模型信息列表，了解产品模型的概要信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProducts($request)
    {
        return $this->listProductsWithHttpInfo($request);
    }

    public function listProductsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListProductsRequest');
    }

    /**
     * 查询产品
     * 应用服务器可调用此接口查询已导入物联网平台的指定产品模型详细信息，包括产品模型的服务、属性、命令等。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProduct($request)
    {
        return $this->showProductWithHttpInfo($request);
    }

    public function showProductWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowProductRequest');
    }

    /**
     * 修改产品
     * 应用服务器可调用此接口修改已导入物联网平台的指定产品模型，包括产品模型的服务、属性、命令等。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProduct($request)
    {
        return $this->updateProductWithHttpInfo($request);
    }

    public function updateProductWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateProductRequest');
    }

    /**
     * 查询设备属性
     * 设备的产品模型中定义了物联网平台可向设备下发的属性，应用服务器可调用此接口查询指定设备下属性。注意：此接口适用于MQTT设备，暂不支持NB-IoT设备。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProperties($request)
    {
        return $this->listPropertiesWithHttpInfo($request);
    }

    public function listPropertiesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListPropertiesRequest');
    }

    /**
     * 修改设备属性
     * 设备的产品模型中定义了物联网平台可向设备下发的属性，应用服务器可调用此接口向指定设备下属性。平台负责将属性以同步方式发送给设备，并将设备执行属性结果同步返回。注意：此接口适用于MQTT设备，暂不支持NB-IoT设备。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProperties($request)
    {
        return $this->updatePropertiesWithHttpInfo($request);
    }

    public function updatePropertiesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdatePropertiesRequest');
    }

    /**
     * 创建规则触发条件
     * 应用服务器可调用此接口在物联网平台创建一条规则触发条件。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRoutingRule($request)
    {
        return $this->createRoutingRuleWithHttpInfo($request);
    }

    public function createRoutingRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRoutingRuleRequest');
    }

    /**
     * 创建规则动作
     * 应用服务器可调用此接口在物联网平台创建一条规则动作。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRuleAction($request)
    {
        return $this->createRuleActionWithHttpInfo($request);
    }

    public function createRuleActionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRuleActionRequest');
    }

    /**
     * 删除规则触发条件
     * 应用服务器可调用此接口删除物联网平台中的指定规则条件。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRoutingRule($request)
    {
        return $this->deleteRoutingRuleWithHttpInfo($request);
    }

    public function deleteRoutingRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRoutingRuleRequest');
    }

    /**
     * 删除规则动作
     * 应用服务器可调用此接口删除物联网平台中的指定规则动作。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRuleAction($request)
    {
        return $this->deleteRuleActionWithHttpInfo($request);
    }

    public function deleteRuleActionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRuleActionRequest');
    }

    /**
     * 查询规则条件列表
     * 应用服务器可调用此接口查询物联网平台中设置的规则条件列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoutingRules($request)
    {
        return $this->listRoutingRulesWithHttpInfo($request);
    }

    public function listRoutingRulesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRoutingRulesRequest');
    }

    /**
     * 查询规则动作列表
     * 应用服务器可调用此接口查询物联网平台中设置的规则动作列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRuleActions($request)
    {
        return $this->listRuleActionsWithHttpInfo($request);
    }

    public function listRuleActionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRuleActionsRequest');
    }

    /**
     * 查询规则条件
     * 应用服务器可调用此接口查询物联网平台中指定规则条件的配置信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRoutingRule($request)
    {
        return $this->showRoutingRuleWithHttpInfo($request);
    }

    public function showRoutingRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRoutingRuleRequest');
    }

    /**
     * 查询规则动作
     * 应用服务器可调用此接口查询物联网平台中指定规则动作的配置信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRuleAction($request)
    {
        return $this->showRuleActionWithHttpInfo($request);
    }

    public function showRuleActionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRuleActionRequest');
    }

    /**
     * 修改规则触发条件
     * 应用服务器可调用此接口修改物联网平台中指定规则条件的配置参数。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoutingRule($request)
    {
        return $this->updateRoutingRuleWithHttpInfo($request);
    }

    public function updateRoutingRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRoutingRuleRequest');
    }

    /**
     * 修改规则动作
     * 应用服务器可调用此接口修改物联网平台中指定规则动作的配置。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRuleAction($request)
    {
        return $this->updateRuleActionWithHttpInfo($request);
    }

    public function updateRuleActionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRuleActionRequest');
    }

    /**
     * 修改规则状态
     * 应用服务器可调用此接口修改物联网平台中指定规则的状态，激活或者去激活规则。
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeRuleStatus($request)
    {
        return $this->changeRuleStatusWithHttpInfo($request);
    }

    public function changeRuleStatusWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ChangeRuleStatusRequest');
    }

    /**
     * 创建规则
     * 应用服务器可调用此接口在物联网平台创建一条规则。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRule($request)
    {
        return $this->createRuleWithHttpInfo($request);
    }

    public function createRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\CreateRuleRequest');
    }

    /**
     * 删除规则
     * 应用服务器可调用此接口删除物联网平台中的指定规则。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRule($request)
    {
        return $this->deleteRuleWithHttpInfo($request);
    }

    public function deleteRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\DeleteRuleRequest');
    }

    /**
     * 查询规则列表
     * 应用服务器可调用此接口查询物联网平台中设置的规则列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRules($request)
    {
        return $this->listRulesWithHttpInfo($request);
    }

    public function listRulesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListRulesRequest');
    }

    /**
     * 查询规则
     * 应用服务器可调用此接口查询物联网平台中指定规则的配置信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRule($request)
    {
        return $this->showRuleWithHttpInfo($request);
    }

    public function showRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ShowRuleRequest');
    }

    /**
     * 修改规则
     * 应用服务器可调用此接口修改物联网平台中指定规则的配置。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRule($request)
    {
        return $this->updateRuleWithHttpInfo($request);
    }

    public function updateRuleWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UpdateRuleRequest');
    }

    /**
     * 按标签查询资源
     * 应用服务器可调用此接口查询绑定了指定标签的资源。当前支持标签的资源有Device(设备)。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourcesByTags($request)
    {
        return $this->listResourcesByTagsWithHttpInfo($request);
    }

    public function listResourcesByTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\ListResourcesByTagsRequest');
    }

    /**
     * 绑定标签
     * 应用服务器可调用此接口为指定资源绑定标签。当前支持标签的资源有Device(设备)。
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagDevice($request)
    {
        return $this->tagDeviceWithHttpInfo($request);
    }

    public function tagDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\TagDeviceRequest');
    }

    /**
     * 解绑标签
     * 应用服务器可调用此接口为指定资源解绑标签。当前支持标签的资源有Device(设备)。
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagDevice($request)
    {
        return $this->untagDeviceWithHttpInfo($request);
    }

    public function untagDeviceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\IoTDA\V5\Model\UntagDeviceRequest');
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
        $collectionFormats = null,
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
        $collectionFormats,
        $requestType);
    }
}