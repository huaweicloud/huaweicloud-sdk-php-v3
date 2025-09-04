<?php

namespace HuaweiCloud\SDK\IoTEdge\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IoTEdgeClient extends Client
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
        $client = new ClientBuilder(new IoTEdgeClient());
        return $client;
    }


    /**
     * 创建边缘节点
     *
     * 创建边缘节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEdgeNode($request)
    {
        return $this->createEdgeNodeWithHttpInfo($request);
    }

    public function createEdgeNodeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeNodeResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeNodeRequest');
    }

    /**
     * 生成边缘节点安装命令
     *
     * 生成边缘节点安装命令，命令有效时间30分钟，超过后需要重新生成
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstallCmd($request)
    {
        return $this->createInstallCmdWithHttpInfo($request);
    }

    public function createInstallCmdWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/install';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['arch'] !== null) {
            $queryParams['arch'] = $localVarParams['arch'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateInstallCmdResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateInstallCmdRequest');
    }

    /**
     * 删除边缘节点
     *
     * 删除指定边缘节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEdgeNode($request)
    {
        return $this->deleteEdgeNodeWithHttpInfo($request);
    }

    public function deleteEdgeNodeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['deleteExternalNode'] !== null) {
            $queryParams['delete_external_node'] = $localVarParams['deleteExternalNode'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeNodeResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeNodeRequest');
    }

    /**
     * 查询边缘节点列表
     *
     * 查询边缘节点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEdgeNodes($request)
    {
        return $this->listEdgeNodesWithHttpInfo($request);
    }

    public function listEdgeNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['spaceId'] !== null) {
            $queryParams['space_id'] = $localVarParams['spaceId'];
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListEdgeNodesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListEdgeNodesRequest');
    }

    /**
     * 查询边缘节点详情
     *
     * 查询边缘节点详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEdgeNode($request)
    {
        return $this->showEdgeNodeWithHttpInfo($request);
    }

    public function showEdgeNodeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeNodeResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeNodeRequest');
    }

    /**
     * 查询边缘节点下的主机详情
     *
     * 查询边缘节点下的主机详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEdgeNodeHostsInfo($request)
    {
        return $this->showEdgeNodeHostsInfoWithHttpInfo($request);
    }

    public function showEdgeNodeHostsInfoWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeNodeHostsInfoResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeNodeHostsInfoRequest');
    }

    /**
     * 修改边缘节点
     *
     * 修改边缘节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEdgeNode($request)
    {
        return $this->updateEdgeNodeWithHttpInfo($request);
    }

    public function updateEdgeNodeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeNodeResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeNodeRequest');
    }

    /**
     * 设备控制释放
     *
     * 设备控制释放
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeDeviceControlsRelease($request)
    {
        return $this->executeDeviceControlsReleaseWithHttpInfo($request);
    }

    public function executeDeviceControlsReleaseWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}/controls/release';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ExecuteDeviceControlsReleaseResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ExecuteDeviceControlsReleaseRequest');
    }

    /**
     * 设备控制设置
     *
     * 设备控制设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeDeviceControlsSet($request)
    {
        return $this->executeDeviceControlsSetWithHttpInfo($request);
    }

    public function executeDeviceControlsSetWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}/controls/set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ExecuteDeviceControlsSetResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ExecuteDeviceControlsSetRequest');
    }

    /**
     * 获取属性执行中的控制
     *
     * 获取属性执行中的控制
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPropertyActiveControls($request)
    {
        return $this->listPropertyActiveControlsWithHttpInfo($request);
    }

    public function listPropertyActiveControlsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}/active-controls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['property'] !== null) {
            $queryParams['property'] = $localVarParams['property'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListPropertyActiveControlsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListPropertyActiveControlsRequest');
    }

    /**
     * 设备控制默认值
     *
     * 设备控制默认值
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setDeviceControlDefaultValues($request)
    {
        return $this->setDeviceControlDefaultValuesWithHttpInfo($request);
    }

    public function setDeviceControlDefaultValuesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices/controls/default-values';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\SetDeviceControlDefaultValuesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\SetDeviceControlDefaultValuesRequest');
    }

    /**
     * 添加设备
     *
     * 添加设备
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
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
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddDeviceResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddDeviceRequest');
    }

    /**
     * 删除设备
     *
     * 删除设备
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
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
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDeviceResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDeviceRequest');
    }

    /**
     * 查询设备列表
     *
     * 查询设备列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
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
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['gatewayId'] !== null) {
            $queryParams['gateway_id'] = $localVarParams['gatewayId'];
        }
        if ($localVarParams['deviceName'] !== null) {
            $queryParams['device_name'] = $localVarParams['deviceName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListDevicesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListDevicesRequest');
    }

    /**
     * 获取协议配置
     *
     * 获取协议配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProductConfig($request)
    {
        return $this->showProductConfigWithHttpInfo($request);
    }

    public function showProductConfigWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/protocol-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['protocolType'] !== null) {
            $queryParams['protocol_type'] = $localVarParams['protocolType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowProductConfigResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowProductConfigRequest');
    }

    /**
     * 修改设备
     *
     * 修改设备
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
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
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDeviceResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDeviceRequest');
    }

    /**
     * 添加应用配置模板
     *
     * 添加应用配置模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAppConfigsTemplates($request)
    {
        return $this->addAppConfigsTemplatesWithHttpInfo($request);
    }

    public function addAppConfigsTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/apps/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddAppConfigsTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddAppConfigsTemplatesRequest');
    }

    /**
     * 导入标准应用配置模板
     *
     * 导入标准应用配置模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addGeneralAppConfigsTemplate($request)
    {
        return $this->addGeneralAppConfigsTemplateWithHttpInfo($request);
    }

    public function addGeneralAppConfigsTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/apps/configs/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddGeneralAppConfigsTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddGeneralAppConfigsTemplateRequest');
    }

    /**
     * 查询应用配置模板列表
     *
     * 查询应用配置模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListAppConfigsTemplates($request)
    {
        return $this->batchListAppConfigsTemplatesWithHttpInfo($request);
    }

    public function batchListAppConfigsTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/apps/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListAppConfigsTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListAppConfigsTemplatesRequest');
    }

    /**
     * 删除应用配置模板
     *
     * 删除应用配置模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppConfigsTemplate($request)
    {
        return $this->deleteAppConfigsTemplateWithHttpInfo($request);
    }

    public function deleteAppConfigsTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/apps/configs/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tplId'] !== null) {
            $pathParams['tpl_id'] = $localVarParams['tplId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteAppConfigsTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteAppConfigsTemplateRequest');
    }

    /**
     * 查询应用配置模板详情
     *
     * 查询应用配置模板详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppConfigsTemplate($request)
    {
        return $this->showAppConfigsTemplateWithHttpInfo($request);
    }

    public function showAppConfigsTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/apps/configs/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tplId'] !== null) {
            $pathParams['tpl_id'] = $localVarParams['tplId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowAppConfigsTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowAppConfigsTemplateRequest');
    }

    /**
     * 查询应用列表
     *
     * 查询应用列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListEdgeApps($request)
    {
        return $this->batchListEdgeAppsWithHttpInfo($request);
    }

    public function batchListEdgeAppsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $queryParams['edge_app_id'] = $localVarParams['edgeAppId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['functionType'] !== null) {
            $queryParams['function_type'] = $localVarParams['functionType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListEdgeAppsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListEdgeAppsRequest');
    }

    /**
     * 创建应用
     *
     * 创建应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEdgeApp($request)
    {
        return $this->createEdgeAppWithHttpInfo($request);
    }

    public function createEdgeAppWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeAppResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeAppRequest');
    }

    /**
     * 删除应用
     *
     * 删除应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEdgeApp($request)
    {
        return $this->deleteEdgeAppWithHttpInfo($request);
    }

    public function deleteEdgeAppWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeAppResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeAppRequest');
    }

    /**
     * 查询应用
     *
     * 查询应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEdgeApp($request)
    {
        return $this->showEdgeAppWithHttpInfo($request);
    }

    public function showEdgeAppWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeAppResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeAppRequest');
    }

    /**
     * 查询应用版本列表
     *
     * 查询应用版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListEdgeAppVersions($request)
    {
        return $this->batchListEdgeAppVersionsWithHttpInfo($request);
    }

    public function batchListEdgeAppVersionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['aiCardType'] !== null) {
            $queryParams['ai_card_type'] = $localVarParams['aiCardType'];
        }
        if ($localVarParams['arch'] !== null) {
            $queryParams['arch'] = $localVarParams['arch'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListEdgeAppVersionsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListEdgeAppVersionsRequest');
    }

    /**
     * 创建应用版本
     *
     * 创建应用版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEdgeApplicationVersion($request)
    {
        return $this->createEdgeApplicationVersionWithHttpInfo($request);
    }

    public function createEdgeApplicationVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeApplicationVersionResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeApplicationVersionRequest');
    }

    /**
     * 删除应用版本
     *
     * 删除应用版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEdgeApplicationVersion($request)
    {
        return $this->deleteEdgeApplicationVersionWithHttpInfo($request);
    }

    public function deleteEdgeApplicationVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeApplicationVersionResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeApplicationVersionRequest');
    }

    /**
     * 查询应用版本详情
     *
     * 查询应用版本详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEdgeApplicationVersion($request)
    {
        return $this->showEdgeApplicationVersionWithHttpInfo($request);
    }

    public function showEdgeApplicationVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeApplicationVersionResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeApplicationVersionRequest');
    }

    /**
     * 修改应用版本
     *
     * 修改应用版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEdgeApplicationVersion($request)
    {
        return $this->updateEdgeApplicationVersionWithHttpInfo($request);
    }

    public function updateEdgeApplicationVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeApplicationVersionResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeApplicationVersionRequest');
    }

    /**
     * 更新应用版本状态
     *
     * 更新应用版本状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEdgeApplicationVersionState($request)
    {
        return $this->updateEdgeApplicationVersionStateWithHttpInfo($request);
    }

    public function updateEdgeApplicationVersionStateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-apps/{edge_app_id}/versions/{version}/state';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeAppId'] !== null) {
            $pathParams['edge_app_id'] = $localVarParams['edgeAppId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeApplicationVersionStateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeApplicationVersionStateRequest');
    }

    /**
     * 查询数据源配置列表
     *
     * 查询数据源配置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListDcDs($request)
    {
        return $this->batchListDcDsWithHttpInfo($request);
    }

    public function batchListDcDsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['moduleId'] !== null) {
            $queryParams['module_id'] = $localVarParams['moduleId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'count', 'page_info', 'datasources']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'count', 'page_info', 'datasources'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcDsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcDsRequest');
    }

    /**
     * 创建数据源配置
     *
     * 用户通过Console接口在指定边缘节点上创建数据源配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDs($request)
    {
        return $this->createDsWithHttpInfo($request);
    }

    public function createDsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateDsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateDsRequest');
    }

    /**
     * 删除数据源配置
     *
     * 删除数据源配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDcDs($request)
    {
        return $this->deleteDcDsWithHttpInfo($request);
    }

    public function deleteDcDsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcDsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcDsRequest');
    }

    /**
     * 查询数据源配置
     *
     * 查询数据源配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDcDs($request)
    {
        return $this->showDcDsWithHttpInfo($request);
    }

    public function showDcDsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'ds_id', 'config', 'name', 'edge_node_id', 'module_id', 'tpl_id', 'quality_report', 'edge_app_name', 'connection_info', 'module_state', 'count', 'create_time', 'update_time', 'synchronized', 'synchronized_time']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'ds_id', 'config', 'name', 'edge_node_id', 'module_id', 'tpl_id', 'quality_report', 'edge_app_name', 'connection_info', 'module_state', 'count', 'create_time', 'update_time', 'synchronized', 'synchronized_time'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowDcDsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowDcDsRequest');
    }

    /**
     * 下发数采配置
     *
     * 下发数采配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function synchronizeDcConfigs($request)
    {
        return $this->synchronizeDcConfigsWithHttpInfo($request);
    }

    public function synchronizeDcConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/synchronize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\SynchronizeDcConfigsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\SynchronizeDcConfigsRequest');
    }

    /**
     * 修改数据源配置
     *
     * 修改数据源配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDcDs($request)
    {
        return $this->updateDcDsWithHttpInfo($request);
    }

    public function updateDcDsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'ds_id', 'config', 'name', 'edge_node_id', 'module_id', 'tpl_id', 'quality_report', 'edge_app_name', 'connection_info', 'module_state', 'count', 'create_time', 'update_time', 'synchronized', 'synchronized_time']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'ds_id', 'config', 'name', 'edge_node_id', 'module_id', 'tpl_id', 'quality_report', 'edge_app_name', 'connection_info', 'module_state', 'count', 'create_time', 'update_time', 'synchronized', 'synchronized_time'],
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDcDsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDcDsRequest');
    }

    /**
     * 查数采连接子设备列表
     *
     * 查询数采连接下子设备列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListDcDevices($request)
    {
        return $this->batchListDcDevicesWithHttpInfo($request);
    }

    public function batchListDcDevicesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'count', 'page_info', 'devices']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'count', 'page_info', 'devices'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcDevicesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcDevicesRequest');
    }

    /**
     * 查询点位表配置列表
     *
     * 查询点位表配置列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListDcPoints($request)
    {
        return $this->batchListDcPointsWithHttpInfo($request);
    }

    public function batchListDcPointsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pointId'] !== null) {
            $queryParams['point_id'] = $localVarParams['pointId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['property'] !== null) {
            $queryParams['property'] = $localVarParams['property'];
        }
        if ($localVarParams['deviceId'] !== null) {
            $queryParams['device_id'] = $localVarParams['deviceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'count', 'page_info', 'points']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'count', 'page_info', 'points'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcPointsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcPointsRequest');
    }

    /**
     * 创建点位表配置
     *
     * 用户通过Console接口在指定边缘节点上点位表配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDcPoint($request)
    {
        return $this->createDcPointWithHttpInfo($request);
    }

    public function createDcPointWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'point_id', 'name', 'collection_config', 'device_id', 'property', 'data_type', 'ds_id', 'processing_config', 'create_time', 'update_time']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'point_id', 'name', 'collection_config', 'device_id', 'property', 'data_type', 'ds_id', 'processing_config', 'create_time', 'update_time'],
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateDcPointResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateDcPointRequest');
    }

    /**
     * 删除点位表配置
     *
     * 删除点位表配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDcPoint($request)
    {
        return $this->deleteDcPointWithHttpInfo($request);
    }

    public function deleteDcPointWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/{point_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['property'] !== null) {
            $queryParams['property'] = $localVarParams['property'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($localVarParams['pointId'] !== null) {
            $pathParams['point_id'] = $localVarParams['pointId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcPointResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcPointRequest');
    }

    /**
     * 批量删除点位表配置
     *
     * 批量删除点位表配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDcPoints($request)
    {
        return $this->deleteDcPointsWithHttpInfo($request);
    }

    public function deleteDcPointsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcPointsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcPointsRequest');
    }

    /**
     * 查询点位表配置详情
     *
     * 查询点位表配置详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDcPoint($request)
    {
        return $this->showDcPointWithHttpInfo($request);
    }

    public function showDcPointWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/{point_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['property'] !== null) {
            $queryParams['property'] = $localVarParams['property'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($localVarParams['pointId'] !== null) {
            $pathParams['point_id'] = $localVarParams['pointId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'point_id', 'name', 'collection_config', 'device_id', 'property', 'data_type', 'ds_id', 'processing_config', 'create_time', 'update_time']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'point_id', 'name', 'collection_config', 'device_id', 'property', 'data_type', 'ds_id', 'processing_config', 'create_time', 'update_time'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowDcPointResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowDcPointRequest');
    }

    /**
     * 修改点位表配置
     *
     * 修改点位表配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDcPoint($request)
    {
        return $this->updateDcPointWithHttpInfo($request);
    }

    public function updateDcPointWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/{point_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($localVarParams['pointId'] !== null) {
            $pathParams['point_id'] = $localVarParams['pointId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'point_id', 'name', 'collection_config', 'device_id', 'property', 'data_type', 'ds_id', 'processing_config', 'create_time', 'update_time']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'point_id', 'name', 'collection_config', 'device_id', 'property', 'data_type', 'ds_id', 'processing_config', 'create_time', 'update_time'],
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDcPointResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDcPointRequest');
    }

    /**
     * 在指定节点上创建外部实体
     *
     * 用户通过在指定边缘节点上设置外部实体的接入信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createExternalEntity($request)
    {
        return $this->createExternalEntityWithHttpInfo($request);
    }

    public function createExternalEntityWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/externals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateExternalEntityResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateExternalEntityRequest');
    }

    /**
     * 删除指定节点下外部实体
     *
     * 删除节点下外部实体
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteExternalEntity($request)
    {
        return $this->deleteExternalEntityWithHttpInfo($request);
    }

    public function deleteExternalEntityWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/externals/{external_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['externalId'] !== null) {
            $pathParams['external_id'] = $localVarParams['externalId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteExternalEntityResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteExternalEntityRequest');
    }

    /**
     * 查询指定边缘节点下的外部实体
     *
     * 用户在指定边缘节点上查询外部实体列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExternalEntity($request)
    {
        return $this->listExternalEntityWithHttpInfo($request);
    }

    public function listExternalEntityWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/externals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListExternalEntityResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListExternalEntityRequest');
    }

    /**
     * 修改节点下指定的外部实体信息
     *
     * 用户通过在指定边缘节点上修改指定外部实体的接入信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateExternalEntity($request)
    {
        return $this->updateExternalEntityWithHttpInfo($request);
    }

    public function updateExternalEntityWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/externals/{external_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['externalId'] !== null) {
            $pathParams['external_id'] = $localVarParams['externalId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateExternalEntityResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateExternalEntityRequest');
    }

    /**
     * 查询边缘模块列表
     *
     * 用户通过Console接口查询指定边缘节点上边缘模块列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListModules($request)
    {
        return $this->batchListModulesWithHttpInfo($request);
    }

    public function batchListModulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appType'] !== null) {
            $queryParams['app_type'] = $localVarParams['appType'];
        }
        if ($localVarParams['functionType'] !== null) {
            $queryParams['function_type'] = $localVarParams['functionType'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListModulesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListModulesRequest');
    }

    /**
     * 创建边缘模块
     *
     * 用户通过Console接口在指定边缘节点上创建边缘模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createModule($request)
    {
        return $this->createModuleWithHttpInfo($request);
    }

    public function createModuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateModuleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateModuleRequest');
    }

    /**
     * 删除边缘模块
     *
     * 用户通过过Console接口在指定边缘节点上删除边缘模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteModule($request)
    {
        return $this->deleteModuleWithHttpInfo($request);
    }

    public function deleteModuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteModuleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteModuleRequest');
    }

    /**
     * 代理边缘模块消息
     *
     * iotedge通过该接口透明代理用户到模块的请求
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function invokeModuleMsg($request)
    {
        return $this->invokeModuleMsgWithHttpInfo($request);
    }

    public function invokeModuleMsgWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/proxy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\InvokeModuleMsgResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\InvokeModuleMsgRequest');
    }

    /**
     * 查询边缘模块
     *
     * 用户通过Console接口查询指定边缘节点上指定边缘模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showModule($request)
    {
        return $this->showModuleWithHttpInfo($request);
    }

    public function showModuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowModuleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowModuleRequest');
    }

    /**
     * 修改边缘模块
     *
     * 用户通过Console接口查询指定边缘节点上指定边缘模块
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateModule($request)
    {
        return $this->updateModuleWithHttpInfo($request);
    }

    public function updateModuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleRequest');
    }

    /**
     * 修改边缘模块状态
     *
     * 用户通过Console接口启停数采连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateModuleState($request)
    {
        return $this->updateModuleStateWithHttpInfo($request);
    }

    public function updateModuleStateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/state';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleStateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleStateRequest');
    }

    /**
     * 获取模块影子
     *
     * 获取模块影子信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showModuleShadow($request)
    {
        return $this->showModuleShadowWithHttpInfo($request);
    }

    public function showModuleShadowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowModuleShadowResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowModuleShadowRequest');
    }

    /**
     * 更新模块影子
     *
     * 更新模块影子信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateModuleShadow($request)
    {
        return $this->updateModuleShadowWithHttpInfo($request);
    }

    public function updateModuleShadowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleShadowResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleShadowRequest');
    }

    /**
     * 查询边缘路由列表
     *
     * 用户在指定边缘节点上查询边缘路由列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoutes($request)
    {
        return $this->listRoutesWithHttpInfo($request);
    }

    public function listRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['parsed'] !== null) {
            $queryParams['parsed'] = $localVarParams['parsed'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListRoutesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListRoutesRequest');
    }

    /**
     * 设置边缘路由
     *
     * 用户通过在指定边缘节点上设置边缘路由
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoutes($request)
    {
        return $this->updateRoutesWithHttpInfo($request);
    }

    public function updateRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateRoutesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateRoutesRequest');
    }

    /**
     * 导入标准数采模板
     *
     * 导入标准数采模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addGeneralOtTemplate($request)
    {
        return $this->addGeneralOtTemplateWithHttpInfo($request);
    }

    public function addGeneralOtTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/ots/data-sources/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddGeneralOtTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddGeneralOtTemplateRequest');
    }

    /**
     * 添加数采模板
     *
     * 添加数采模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addOtTemplates($request)
    {
        return $this->addOtTemplatesWithHttpInfo($request);
    }

    public function addOtTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddOtTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddOtTemplatesRequest');
    }

    /**
     * 查询数采模板列表
     *
     * 查询数采模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListOtTemplates($request)
    {
        return $this->batchListOtTemplatesWithHttpInfo($request);
    }

    public function batchListOtTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'count', 'page_info', 'templates']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'count', 'page_info', 'templates'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListOtTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListOtTemplatesRequest');
    }

    /**
     * 删除数采模板
     *
     * 删除数采模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOtTemplate($request)
    {
        return $this->deleteOtTemplateWithHttpInfo($request);
    }

    public function deleteOtTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/ots/data-sources/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tplId'] !== null) {
            $pathParams['tpl_id'] = $localVarParams['tplId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteOtTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteOtTemplateRequest');
    }

    /**
     * 查询数采模板详情
     *
     * 查询数采模板详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOtTemplate($request)
    {
        return $this->showOtTemplateWithHttpInfo($request);
    }

    public function showOtTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/templates/ots/data-sources/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tplId'] !== null) {
            $pathParams['tpl_id'] = $localVarParams['tplId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'tpl_id', 'name', 'description', 'datasource_meta', 'point_meta', 'create_time', 'update_time']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'tpl_id', 'name', 'description', 'datasource_meta', 'point_meta', 'create_time', 'update_time'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowOtTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowOtTemplateRequest');
    }

    /**
     * 批量导入点位表
     *
     * 用户通过Console接口在指定边缘节点上点位表配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importPoints($request)
    {
        return $this->importPointsWithHttpInfo($request);
    }

    public function importPointsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/import-points';
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
        if ($localVarParams['updateType'] !== null) {
            $queryParams['update_type'] = $localVarParams['updateType'];
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ImportPointsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ImportPointsRequest');
    }

    /**
     * 查询点位表模板文件
     *
     * 查询点位表模板文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPointTemplate($request)
    {
        return $this->showPointTemplateWithHttpInfo($request);
    }

    public function showPointTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/download-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowPointTemplateResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowPointTemplateRequest');
    }

    /**
     * 查询点位表模板文件
     *
     * 查询点位表模板文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoints($request)
    {
        return $this->showPointsWithHttpInfo($request);
    }

    public function showPointsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/export-points';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['dsId'] !== null) {
            $pathParams['ds_id'] = $localVarParams['dsId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowPointsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowPointsRequest');
    }

    /**
     * 创建调度计划
     *
     * 用户通过北向接口在指定边缘节点上创建调度计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSchedule($request)
    {
        return $this->createScheduleWithHttpInfo($request);
    }

    public function createScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateScheduleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateScheduleRequest');
    }

    /**
     * 删除调度计划
     *
     * 用户通过北向接口删除边缘节点上调度计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSchedule($request)
    {
        return $this->deleteScheduleWithHttpInfo($request);
    }

    public function deleteScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteScheduleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteScheduleRequest');
    }

    /**
     * 更新调度计划，机机接口，全量更新字段
     *
     * 用户通过北向接口修改边缘节点上调度计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSchedule($request)
    {
        return $this->updateScheduleWithHttpInfo($request);
    }

    public function updateScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{edge_node_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['edgeNodeId'] !== null) {
            $pathParams['edge_node_id'] = $localVarParams['edgeNodeId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateScheduleResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateScheduleRequest');
    }

    /**
     * 批量确认南向3rdIA配置项
     *
     * 南向3rdIA对下发的配置项进行批量确认
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchConfirmConfigsNew($request)
    {
        return $this->batchConfirmConfigsNewWithHttpInfo($request);
    }

    public function batchConfirmConfigsNewWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/batch-confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nodeId'] !== null) {
            $pathParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['iaId'] !== null) {
            $pathParams['ia_id'] = $localVarParams['iaId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchConfirmConfigsNewResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchConfirmConfigsNewRequest');
    }

    /**
     * 批量导入南向3rdIA配置项
     *
     * 批量导入南向3rdIA配置项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchImportConfigs($request)
    {
        return $this->batchImportConfigsWithHttpInfo($request);
    }

    public function batchImportConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/batch-import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nodeId'] !== null) {
            $pathParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['iaId'] !== null) {
            $pathParams['ia_id'] = $localVarParams['iaId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchImportConfigsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchImportConfigsRequest');
    }

    /**
     * 删除南向3rdIA配置项
     *
     * 删除南向3rdIA配置项
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIaConfig($request)
    {
        return $this->deleteIaConfigWithHttpInfo($request);
    }

    public function deleteIaConfigWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nodeId'] !== null) {
            $pathParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['iaId'] !== null) {
            $pathParams['ia_id'] = $localVarParams['iaId'];
        }
        if ($localVarParams['configId'] !== null) {
            $pathParams['config_id'] = $localVarParams['configId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteIaConfigResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteIaConfigRequest');
    }

    /**
     * 查询南向3rdIA配置项列表
     *
     * 查询南向3rdIA配置项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIaConfigs($request)
    {
        return $this->listIaConfigsWithHttpInfo($request);
    }

    public function listIaConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['nodeId'] !== null) {
            $pathParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['iaId'] !== null) {
            $pathParams['ia_id'] = $localVarParams['iaId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListIaConfigsResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListIaConfigsRequest');
    }

    /**
     * 查询南向3rdIA配置项详情
     *
     * 查询南向3rdIA配置项详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIaConfig($request)
    {
        return $this->showIaConfigWithHttpInfo($request);
    }

    public function showIaConfigWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nodeId'] !== null) {
            $pathParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['iaId'] !== null) {
            $pathParams['ia_id'] = $localVarParams['iaId'];
        }
        if ($localVarParams['configId'] !== null) {
            $pathParams['config_id'] = $localVarParams['configId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowIaConfigResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowIaConfigRequest');
    }

    /**
     * 创建&amp;更新南向3rdIA配置项信息
     *
     * 创建&amp;更新南向3rdIA配置项信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIaConfig($request)
    {
        return $this->updateIaConfigWithHttpInfo($request);
    }

    public function updateIaConfigWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nodeId'] !== null) {
            $pathParams['node_id'] = $localVarParams['nodeId'];
        }
        if ($localVarParams['iaId'] !== null) {
            $pathParams['ia_id'] = $localVarParams['iaId'];
        }
        if ($localVarParams['configId'] !== null) {
            $pathParams['config_id'] = $localVarParams['configId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateIaConfigResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateIaConfigRequest');
    }

    /**
     * 授权北向NA信息到边缘节点
     *
     * 批量授权北向NA信息到边缘节点。
     * 已授权的边缘节点上的南向IA应用，可以通过部署在边缘节点上的api网关访问北向NA提供的接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAssociateNaToNodes($request)
    {
        return $this->batchAssociateNaToNodesWithHttpInfo($request);
    }

    public function batchAssociateNaToNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/nas/{na_id}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['naId'] !== null) {
            $pathParams['na_id'] = $localVarParams['naId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchAssociateNaToNodesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchAssociateNaToNodesRequest');
    }

    /**
     * 删除北向NA信息
     *
     * 删除北向NA信息，如果有边缘节点已分配该NA信息，会通知到该边缘节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNa($request)
    {
        return $this->deleteNaWithHttpInfo($request);
    }

    public function deleteNaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/nas/{na_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['naId'] !== null) {
            $pathParams['na_id'] = $localVarParams['naId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteNaResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteNaRequest');
    }

    /**
     * 查询该北向NA信息的已分配节点
     *
     * 查询该北向NA信息的已分配节点
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNaAuthorizedNodes($request)
    {
        return $this->listNaAuthorizedNodesWithHttpInfo($request);
    }

    public function listNaAuthorizedNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/nas/{na_id}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['naId'] !== null) {
            $pathParams['na_id'] = $localVarParams['naId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListNaAuthorizedNodesResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListNaAuthorizedNodesRequest');
    }

    /**
     * 查询北向NA信息列表
     *
     * 查询北向NA信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNas($request)
    {
        return $this->listNasWithHttpInfo($request);
    }

    public function listNasWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/nas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListNasResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListNasRequest');
    }

    /**
     * 查询北向NA信息详情
     *
     * 查询北向NA信息详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNa($request)
    {
        return $this->showNaWithHttpInfo($request);
    }

    public function showNaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/nas/{na_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['naId'] !== null) {
            $pathParams['na_id'] = $localVarParams['naId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowNaResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowNaRequest');
    }

    /**
     * 创建&amp;更新北向NA信息
     *
     * 创建&amp;更新北向NA信息，当更新北向NA信息时，会通知到已分配该北向NA的所有边缘节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNa($request)
    {
        return $this->updateNaWithHttpInfo($request);
    }

    public function updateNaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/nas/{na_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['naId'] !== null) {
            $pathParams['na_id'] = $localVarParams['naId'];
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
            $responseType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateNaResponse',
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateNaRequest');
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