<?php

namespace HuaweiCloud\SDK\IoTEdge\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IoTEdgeAsyncClient extends Client
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
        $client = new ClientBuilder(new IoTEdgeAsyncClient());
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
    public function createEdgeNodeAsync($request)
    {
        return $this->createEdgeNodeAsyncWithHttpInfo($request);
    }
    
    public function createEdgeNodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeNodeRequest',
            $asyncRequest = true);
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
    public function createInstallCmdAsync($request)
    {
        return $this->createInstallCmdAsyncWithHttpInfo($request);
    }
    
    public function createInstallCmdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/install';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateInstallCmdRequest',
            $asyncRequest = true);
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
    public function deleteEdgeNodeAsync($request)
    {
        return $this->deleteEdgeNodeAsyncWithHttpInfo($request);
    }
    
    public function deleteEdgeNodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeNodeRequest',
            $asyncRequest = true);
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
    public function listEdgeNodesAsync($request)
    {
        return $this->listEdgeNodesAsyncWithHttpInfo($request);
    }
    
    public function listEdgeNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListEdgeNodesRequest',
            $asyncRequest = true);
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
    public function showEdgeNodeAsync($request)
    {
        return $this->showEdgeNodeAsyncWithHttpInfo($request);
    }
    
    public function showEdgeNodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeNodeRequest',
            $asyncRequest = true);
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
    public function showEdgeNodeHostsInfoAsync($request)
    {
        return $this->showEdgeNodeHostsInfoAsyncWithHttpInfo($request);
    }
    
    public function showEdgeNodeHostsInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeNodeHostsInfoRequest',
            $asyncRequest = true);
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
    public function updateEdgeNodeAsync($request)
    {
        return $this->updateEdgeNodeAsyncWithHttpInfo($request);
    }
    
    public function updateEdgeNodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeNodeRequest',
            $asyncRequest = true);
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
    public function executeDeviceControlsReleaseAsync($request)
    {
        return $this->executeDeviceControlsReleaseAsyncWithHttpInfo($request);
    }
    
    public function executeDeviceControlsReleaseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}/controls/release';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ExecuteDeviceControlsReleaseRequest',
            $asyncRequest = true);
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
    public function executeDeviceControlsSetAsync($request)
    {
        return $this->executeDeviceControlsSetAsyncWithHttpInfo($request);
    }
    
    public function executeDeviceControlsSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}/controls/set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ExecuteDeviceControlsSetRequest',
            $asyncRequest = true);
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
    public function listPropertyActiveControlsAsync($request)
    {
        return $this->listPropertyActiveControlsAsyncWithHttpInfo($request);
    }
    
    public function listPropertyActiveControlsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}/active-controls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListPropertyActiveControlsRequest',
            $asyncRequest = true);
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
    public function setDeviceControlDefaultValuesAsync($request)
    {
        return $this->setDeviceControlDefaultValuesAsyncWithHttpInfo($request);
    }
    
    public function setDeviceControlDefaultValuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices/controls/default-values';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\SetDeviceControlDefaultValuesRequest',
            $asyncRequest = true);
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
    public function addDeviceAsync($request)
    {
        return $this->addDeviceAsyncWithHttpInfo($request);
    }
    
    public function addDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddDeviceRequest',
            $asyncRequest = true);
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
    public function deleteDeviceAsync($request)
    {
        return $this->deleteDeviceAsyncWithHttpInfo($request);
    }
    
    public function deleteDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDeviceRequest',
            $asyncRequest = true);
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
    public function listDevicesAsync($request)
    {
        return $this->listDevicesAsyncWithHttpInfo($request);
    }
    
    public function listDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListDevicesRequest',
            $asyncRequest = true);
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
    public function showProductConfigAsync($request)
    {
        return $this->showProductConfigAsyncWithHttpInfo($request);
    }
    
    public function showProductConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/protocol-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowProductConfigRequest',
            $asyncRequest = true);
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
    public function updateDeviceAsync($request)
    {
        return $this->updateDeviceAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/devices/{device_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDeviceRequest',
            $asyncRequest = true);
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
    public function addAppConfigsTemplatesAsync($request)
    {
        return $this->addAppConfigsTemplatesAsyncWithHttpInfo($request);
    }
    
    public function addAppConfigsTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/apps/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddAppConfigsTemplatesRequest',
            $asyncRequest = true);
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
    public function addGeneralAppConfigsTemplateAsync($request)
    {
        return $this->addGeneralAppConfigsTemplateAsyncWithHttpInfo($request);
    }
    
    public function addGeneralAppConfigsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/apps/configs/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddGeneralAppConfigsTemplateRequest',
            $asyncRequest = true);
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
    public function batchListAppConfigsTemplatesAsync($request)
    {
        return $this->batchListAppConfigsTemplatesAsyncWithHttpInfo($request);
    }
    
    public function batchListAppConfigsTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/apps/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListAppConfigsTemplatesRequest',
            $asyncRequest = true);
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
    public function deleteAppConfigsTemplateAsync($request)
    {
        return $this->deleteAppConfigsTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteAppConfigsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/apps/configs/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteAppConfigsTemplateRequest',
            $asyncRequest = true);
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
    public function showAppConfigsTemplateAsync($request)
    {
        return $this->showAppConfigsTemplateAsyncWithHttpInfo($request);
    }
    
    public function showAppConfigsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/apps/configs/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowAppConfigsTemplateRequest',
            $asyncRequest = true);
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
    public function batchListEdgeAppsAsync($request)
    {
        return $this->batchListEdgeAppsAsyncWithHttpInfo($request);
    }
    
    public function batchListEdgeAppsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListEdgeAppsRequest',
            $asyncRequest = true);
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
    public function createEdgeAppAsync($request)
    {
        return $this->createEdgeAppAsyncWithHttpInfo($request);
    }
    
    public function createEdgeAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeAppRequest',
            $asyncRequest = true);
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
    public function deleteEdgeAppAsync($request)
    {
        return $this->deleteEdgeAppAsyncWithHttpInfo($request);
    }
    
    public function deleteEdgeAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeAppRequest',
            $asyncRequest = true);
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
    public function showEdgeAppAsync($request)
    {
        return $this->showEdgeAppAsyncWithHttpInfo($request);
    }
    
    public function showEdgeAppAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeAppRequest',
            $asyncRequest = true);
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
    public function batchListEdgeAppVersionsAsync($request)
    {
        return $this->batchListEdgeAppVersionsAsyncWithHttpInfo($request);
    }
    
    public function batchListEdgeAppVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListEdgeAppVersionsRequest',
            $asyncRequest = true);
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
    public function createEdgeApplicationVersionAsync($request)
    {
        return $this->createEdgeApplicationVersionAsyncWithHttpInfo($request);
    }
    
    public function createEdgeApplicationVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateEdgeApplicationVersionRequest',
            $asyncRequest = true);
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
    public function deleteEdgeApplicationVersionAsync($request)
    {
        return $this->deleteEdgeApplicationVersionAsyncWithHttpInfo($request);
    }
    
    public function deleteEdgeApplicationVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteEdgeApplicationVersionRequest',
            $asyncRequest = true);
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
    public function showEdgeApplicationVersionAsync($request)
    {
        return $this->showEdgeApplicationVersionAsyncWithHttpInfo($request);
    }
    
    public function showEdgeApplicationVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowEdgeApplicationVersionRequest',
            $asyncRequest = true);
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
    public function updateEdgeApplicationVersionAsync($request)
    {
        return $this->updateEdgeApplicationVersionAsyncWithHttpInfo($request);
    }
    
    public function updateEdgeApplicationVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeApplicationVersionRequest',
            $asyncRequest = true);
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
    public function updateEdgeApplicationVersionStateAsync($request)
    {
        return $this->updateEdgeApplicationVersionStateAsyncWithHttpInfo($request);
    }
    
    public function updateEdgeApplicationVersionStateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-apps/{edge_app_id}/versions/{version}/state';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateEdgeApplicationVersionStateRequest',
            $asyncRequest = true);
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
    public function batchListDcDsAsync($request)
    {
        return $this->batchListDcDsAsyncWithHttpInfo($request);
    }
    
    public function batchListDcDsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcDsRequest',
            $asyncRequest = true);
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
    public function createDsAsync($request)
    {
        return $this->createDsAsyncWithHttpInfo($request);
    }
    
    public function createDsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateDsRequest',
            $asyncRequest = true);
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
    public function deleteDcDsAsync($request)
    {
        return $this->deleteDcDsAsyncWithHttpInfo($request);
    }
    
    public function deleteDcDsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcDsRequest',
            $asyncRequest = true);
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
    public function showDcDsAsync($request)
    {
        return $this->showDcDsAsyncWithHttpInfo($request);
    }
    
    public function showDcDsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowDcDsRequest',
            $asyncRequest = true);
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
    public function synchronizeDcConfigsAsync($request)
    {
        return $this->synchronizeDcConfigsAsyncWithHttpInfo($request);
    }
    
    public function synchronizeDcConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/synchronize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\SynchronizeDcConfigsRequest',
            $asyncRequest = true);
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
    public function updateDcDsAsync($request)
    {
        return $this->updateDcDsAsyncWithHttpInfo($request);
    }
    
    public function updateDcDsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDcDsRequest',
            $asyncRequest = true);
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
    public function batchListDcDevicesAsync($request)
    {
        return $this->batchListDcDevicesAsyncWithHttpInfo($request);
    }
    
    public function batchListDcDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/devices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcDevicesRequest',
            $asyncRequest = true);
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
    public function batchListDcPointsAsync($request)
    {
        return $this->batchListDcPointsAsyncWithHttpInfo($request);
    }
    
    public function batchListDcPointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListDcPointsRequest',
            $asyncRequest = true);
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
    public function createDcPointAsync($request)
    {
        return $this->createDcPointAsyncWithHttpInfo($request);
    }
    
    public function createDcPointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateDcPointRequest',
            $asyncRequest = true);
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
    public function deleteDcPointAsync($request)
    {
        return $this->deleteDcPointAsyncWithHttpInfo($request);
    }
    
    public function deleteDcPointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/{point_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcPointRequest',
            $asyncRequest = true);
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
    public function deleteDcPointsAsync($request)
    {
        return $this->deleteDcPointsAsyncWithHttpInfo($request);
    }
    
    public function deleteDcPointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteDcPointsRequest',
            $asyncRequest = true);
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
    public function showDcPointAsync($request)
    {
        return $this->showDcPointAsyncWithHttpInfo($request);
    }
    
    public function showDcPointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/{point_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowDcPointRequest',
            $asyncRequest = true);
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
    public function updateDcPointAsync($request)
    {
        return $this->updateDcPointAsyncWithHttpInfo($request);
    }
    
    public function updateDcPointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/points/{point_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateDcPointRequest',
            $asyncRequest = true);
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
    public function createExternalEntityAsync($request)
    {
        return $this->createExternalEntityAsyncWithHttpInfo($request);
    }
    
    public function createExternalEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/externals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateExternalEntityRequest',
            $asyncRequest = true);
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
    public function deleteExternalEntityAsync($request)
    {
        return $this->deleteExternalEntityAsyncWithHttpInfo($request);
    }
    
    public function deleteExternalEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/externals/{external_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteExternalEntityRequest',
            $asyncRequest = true);
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
    public function listExternalEntityAsync($request)
    {
        return $this->listExternalEntityAsyncWithHttpInfo($request);
    }
    
    public function listExternalEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/externals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListExternalEntityRequest',
            $asyncRequest = true);
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
    public function updateExternalEntityAsync($request)
    {
        return $this->updateExternalEntityAsyncWithHttpInfo($request);
    }
    
    public function updateExternalEntityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/externals/{external_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateExternalEntityRequest',
            $asyncRequest = true);
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
    public function batchListModulesAsync($request)
    {
        return $this->batchListModulesAsyncWithHttpInfo($request);
    }
    
    public function batchListModulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListModulesRequest',
            $asyncRequest = true);
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
    public function createModuleAsync($request)
    {
        return $this->createModuleAsyncWithHttpInfo($request);
    }
    
    public function createModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateModuleRequest',
            $asyncRequest = true);
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
    public function deleteModuleAsync($request)
    {
        return $this->deleteModuleAsyncWithHttpInfo($request);
    }
    
    public function deleteModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteModuleRequest',
            $asyncRequest = true);
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
    public function invokeModuleMsgAsync($request)
    {
        return $this->invokeModuleMsgAsyncWithHttpInfo($request);
    }
    
    public function invokeModuleMsgAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/proxy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\InvokeModuleMsgRequest',
            $asyncRequest = true);
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
    public function showModuleAsync($request)
    {
        return $this->showModuleAsyncWithHttpInfo($request);
    }
    
    public function showModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowModuleRequest',
            $asyncRequest = true);
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
    public function updateModuleAsync($request)
    {
        return $this->updateModuleAsyncWithHttpInfo($request);
    }
    
    public function updateModuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleRequest',
            $asyncRequest = true);
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
    public function updateModuleStateAsync($request)
    {
        return $this->updateModuleStateAsyncWithHttpInfo($request);
    }
    
    public function updateModuleStateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/state';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleStateRequest',
            $asyncRequest = true);
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
    public function showModuleShadowAsync($request)
    {
        return $this->showModuleShadowAsyncWithHttpInfo($request);
    }
    
    public function showModuleShadowAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowModuleShadowRequest',
            $asyncRequest = true);
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
    public function updateModuleShadowAsync($request)
    {
        return $this->updateModuleShadowAsyncWithHttpInfo($request);
    }
    
    public function updateModuleShadowAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/modules/{module_id}/shadow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateModuleShadowRequest',
            $asyncRequest = true);
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
    public function listRoutesAsync($request)
    {
        return $this->listRoutesAsyncWithHttpInfo($request);
    }
    
    public function listRoutesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListRoutesRequest',
            $asyncRequest = true);
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
    public function updateRoutesAsync($request)
    {
        return $this->updateRoutesAsyncWithHttpInfo($request);
    }
    
    public function updateRoutesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateRoutesRequest',
            $asyncRequest = true);
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
    public function addGeneralOtTemplateAsync($request)
    {
        return $this->addGeneralOtTemplateAsyncWithHttpInfo($request);
    }
    
    public function addGeneralOtTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/ots/data-sources/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddGeneralOtTemplateRequest',
            $asyncRequest = true);
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
    public function addOtTemplatesAsync($request)
    {
        return $this->addOtTemplatesAsyncWithHttpInfo($request);
    }
    
    public function addOtTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\AddOtTemplatesRequest',
            $asyncRequest = true);
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
    public function batchListOtTemplatesAsync($request)
    {
        return $this->batchListOtTemplatesAsyncWithHttpInfo($request);
    }
    
    public function batchListOtTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/ots/data-sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchListOtTemplatesRequest',
            $asyncRequest = true);
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
    public function deleteOtTemplateAsync($request)
    {
        return $this->deleteOtTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteOtTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/ots/data-sources/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteOtTemplateRequest',
            $asyncRequest = true);
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
    public function showOtTemplateAsync($request)
    {
        return $this->showOtTemplateAsyncWithHttpInfo($request);
    }
    
    public function showOtTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/templates/ots/data-sources/{tpl_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowOtTemplateRequest',
            $asyncRequest = true);
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
    public function importPointsAsync($request)
    {
        return $this->importPointsAsyncWithHttpInfo($request);
    }
    
    public function importPointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/import-points';
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ImportPointsRequest',
            $asyncRequest = true);
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
    public function showPointTemplateAsync($request)
    {
        return $this->showPointTemplateAsyncWithHttpInfo($request);
    }
    
    public function showPointTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/download-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowPointTemplateRequest',
            $asyncRequest = true);
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
    public function showPointsAsync($request)
    {
        return $this->showPointsAsyncWithHttpInfo($request);
    }
    
    public function showPointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/ots/data-sources/{ds_id}/export-points';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowPointsRequest',
            $asyncRequest = true);
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
    public function createScheduleAsync($request)
    {
        return $this->createScheduleAsyncWithHttpInfo($request);
    }
    
    public function createScheduleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateScheduleRequest',
            $asyncRequest = true);
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
    public function deleteScheduleAsync($request)
    {
        return $this->deleteScheduleAsyncWithHttpInfo($request);
    }
    
    public function deleteScheduleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteScheduleRequest',
            $asyncRequest = true);
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
    public function updateScheduleAsync($request)
    {
        return $this->updateScheduleAsyncWithHttpInfo($request);
    }
    
    public function updateScheduleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{edge_node_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateScheduleRequest',
            $asyncRequest = true);
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
    public function batchConfirmConfigsNewAsync($request)
    {
        return $this->batchConfirmConfigsNewAsyncWithHttpInfo($request);
    }
    
    public function batchConfirmConfigsNewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/batch-confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchConfirmConfigsNewRequest',
            $asyncRequest = true);
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
    public function batchImportConfigsAsync($request)
    {
        return $this->batchImportConfigsAsyncWithHttpInfo($request);
    }
    
    public function batchImportConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/batch-import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchImportConfigsRequest',
            $asyncRequest = true);
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
    public function deleteIaConfigAsync($request)
    {
        return $this->deleteIaConfigAsyncWithHttpInfo($request);
    }
    
    public function deleteIaConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteIaConfigRequest',
            $asyncRequest = true);
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
    public function listIaConfigsAsync($request)
    {
        return $this->listIaConfigsAsyncWithHttpInfo($request);
    }
    
    public function listIaConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListIaConfigsRequest',
            $asyncRequest = true);
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
    public function showIaConfigAsync($request)
    {
        return $this->showIaConfigAsyncWithHttpInfo($request);
    }
    
    public function showIaConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowIaConfigRequest',
            $asyncRequest = true);
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
    public function updateIaConfigAsync($request)
    {
        return $this->updateIaConfigAsyncWithHttpInfo($request);
    }
    
    public function updateIaConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/edge-nodes/{node_id}/ias/{ia_id}/configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateIaConfigRequest',
            $asyncRequest = true);
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
    public function batchAssociateNaToNodesAsync($request)
    {
        return $this->batchAssociateNaToNodesAsyncWithHttpInfo($request);
    }
    
    public function batchAssociateNaToNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/nas/{na_id}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\BatchAssociateNaToNodesRequest',
            $asyncRequest = true);
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
    public function deleteNaAsync($request)
    {
        return $this->deleteNaAsyncWithHttpInfo($request);
    }
    
    public function deleteNaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/nas/{na_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\DeleteNaRequest',
            $asyncRequest = true);
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
    public function listNaAuthorizedNodesAsync($request)
    {
        return $this->listNaAuthorizedNodesAsyncWithHttpInfo($request);
    }
    
    public function listNaAuthorizedNodesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/nas/{na_id}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListNaAuthorizedNodesRequest',
            $asyncRequest = true);
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
    public function listNasAsync($request)
    {
        return $this->listNasAsyncWithHttpInfo($request);
    }
    
    public function listNasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/nas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ListNasRequest',
            $asyncRequest = true);
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
    public function showNaAsync($request)
    {
        return $this->showNaAsyncWithHttpInfo($request);
    }
    
    public function showNaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/nas/{na_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\ShowNaRequest',
            $asyncRequest = true);
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
    public function updateNaAsync($request)
    {
        return $this->updateNaAsyncWithHttpInfo($request);
    }
    
    public function updateNaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{project_id}/nas/{na_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateNaRequest',
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