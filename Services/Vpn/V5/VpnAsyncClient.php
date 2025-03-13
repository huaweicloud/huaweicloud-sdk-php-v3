<?php

namespace HuaweiCloud\SDK\Vpn\V5;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class VpnAsyncClient extends Client
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
        $client = new ClientBuilder(new VpnAsyncClient());
        return $client;
    }

    /**
     * 校验客户端CA
     *
     * 创建服务端时，可以先调用客户端CA的预校验API，检查CA的合法性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkClientCaCertificateAsync($request)
    {
        return $this->checkClientCaCertificateAsyncWithHttpInfo($request);
    }
    
    public function checkClientCaCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/client-ca-certificates/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CheckClientCaCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CheckClientCaCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除客户端的CA证书
     *
     * 删除客户端CA证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClientCaAsync($request)
    {
        return $this->deleteClientCaAsyncWithHttpInfo($request);
    }
    
    public function deleteClientCaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/client-ca-certificates/{client_ca_certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['clientCaCertificateId'] !== null) {
            $pathParams['client_ca_certificate_id'] = $localVarParams['clientCaCertificateId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteClientCaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteClientCaRequest',
            $asyncRequest = true);
    }

    /**
     * 导入客户端 CA 证书
     *
     * 导入客户端 CA 证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importClientCaAsync($request)
    {
        return $this->importClientCaAsyncWithHttpInfo($request);
    }
    
    public function importClientCaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/client-ca-certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams['x_client_token'] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ImportClientCaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ImportClientCaRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户端的CA证书
     *
     * 查询客户端CA证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClientCaAsync($request)
    {
        return $this->showClientCaAsyncWithHttpInfo($request);
    }
    
    public function showClientCaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/client-ca-certificates/{client_ca_certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['clientCaCertificateId'] !== null) {
            $pathParams['client_ca_certificate_id'] = $localVarParams['clientCaCertificateId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowClientCaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowClientCaRequest',
            $asyncRequest = true);
    }

    /**
     * 修改客户端的CA证书
     *
     * 修改客户端CA证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClientCaAsync($request)
    {
        return $this->updateClientCaAsyncWithHttpInfo($request);
    }
    
    public function updateClientCaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/client-ca-certificates/{client_ca_certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['clientCaCertificateId'] !== null) {
            $pathParams['client_ca_certificate_id'] = $localVarParams['clientCaCertificateId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateClientCaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateClientCaRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPN连接监控
     *
     * 创建VPN连接监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConnectionMonitorAsync($request)
    {
        return $this->createConnectionMonitorAsyncWithHttpInfo($request);
    }
    
    public function createConnectionMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/connection-monitors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateConnectionMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateConnectionMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPN连接监控
     *
     * 根据VPN连接监控的ID，删除指定的VPN连接监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConnectionMonitorAsync($request)
    {
        return $this->deleteConnectionMonitorAsyncWithHttpInfo($request);
    }
    
    public function deleteConnectionMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/connection-monitors/{connection_monitor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionMonitorId'] !== null) {
            $pathParams['connection_monitor_id'] = $localVarParams['connectionMonitorId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteConnectionMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteConnectionMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN连接监控列表
     *
     * 查询VPN连接监控列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConnectionMonitorsAsync($request)
    {
        return $this->listConnectionMonitorsAsyncWithHttpInfo($request);
    }
    
    public function listConnectionMonitorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/connection-monitors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnConnectionId'] !== null) {
            $queryParams['vpn_connection_id'] = $localVarParams['vpnConnectionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListConnectionMonitorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListConnectionMonitorsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN连接监控
     *
     * 根据VPN连接监控的ID,查询指定的VPN连接监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConnectionMonitorAsync($request)
    {
        return $this->showConnectionMonitorAsyncWithHttpInfo($request);
    }
    
    public function showConnectionMonitorAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/connection-monitors/{connection_monitor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['connectionMonitorId'] !== null) {
            $pathParams['connection_monitor_id'] = $localVarParams['connectionMonitorId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowConnectionMonitorResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowConnectionMonitorRequest',
            $asyncRequest = true);
    }

    /**
     * 创建对端网关
     *
     * 创建租户用于与VPN网关相连的对端网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCgwAsync($request)
    {
        return $this->createCgwAsyncWithHttpInfo($request);
    }
    
    public function createCgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/customer-gateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateCgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateCgwRequest',
            $asyncRequest = true);
    }

    /**
     * 删除对端网关
     *
     * 根据对端网关ID，删除指定的对端网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCgwAsync($request)
    {
        return $this->deleteCgwAsyncWithHttpInfo($request);
    }
    
    public function deleteCgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/customer-gateways/{customer_gateway_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['customerGatewayId'] !== null) {
            $pathParams['customer_gateway_id'] = $localVarParams['customerGatewayId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteCgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteCgwRequest',
            $asyncRequest = true);
    }

    /**
     * 查询对端网关列表
     *
     * 查询对端网关列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCgwsAsync($request)
    {
        return $this->listCgwsAsyncWithHttpInfo($request);
    }
    
    public function listCgwsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/customer-gateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cgwId'] !== null) {
            $queryParams['cgw_id'] = $localVarParams['cgwId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListCgwsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListCgwsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询对端网关
     *
     * 根据对端网关ID，查询指定的对端网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCgwAsync($request)
    {
        return $this->showCgwAsyncWithHttpInfo($request);
    }
    
    public function showCgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/customer-gateways/{customer_gateway_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['customerGatewayId'] !== null) {
            $pathParams['customer_gateway_id'] = $localVarParams['customerGatewayId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowCgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowCgwRequest',
            $asyncRequest = true);
    }

    /**
     * 更新对端网关
     *
     * 根据对端网关ID，更新指定的对端网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCgwAsync($request)
    {
        return $this->updateCgwAsyncWithHttpInfo($request);
    }
    
    public function updateCgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/customer-gateways/{customer_gateway_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['customerGatewayId'] !== null) {
            $pathParams['customer_gateway_id'] = $localVarParams['customerGatewayId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateCgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateCgwRequest',
            $asyncRequest = true);
    }

    /**
     * 查询P2C VPN网关可用区
     *
     * 查询P2C VPN网关可用区
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listP2cVgwAvailabilityZonesAsync($request)
    {
        return $this->listP2cVgwAvailabilityZonesAsyncWithHttpInfo($request);
    }
    
    public function listP2cVgwAvailabilityZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/availability-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwAvailabilityZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询P2C VPN网关连接信息列表
     *
     * List p2c vpn gateway connections
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listP2cVgwConnectionsAsync($request)
    {
        return $this->listP2cVgwConnectionsAsyncWithHttpInfo($request);
    }
    
    public function listP2cVgwConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['p2cVgwId'] !== null) {
            $pathParams['p2c_vgw_id'] = $localVarParams['p2cVgwId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询P2C VPN网关列表
     *
     * 查询P2C VPN网关列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listP2cVgwsAsync($request)
    {
        return $this->listP2cVgwsAsyncWithHttpInfo($request);
    }
    
    public function listP2cVgwsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询P2C VPN网关
     *
     * 根据P2C VPN网关ID，查询指定的VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showP2cVgwAsync($request)
    {
        return $this->showP2cVgwAsyncWithHttpInfo($request);
    }
    
    public function showP2cVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['p2cVgwId'] !== null) {
            $pathParams['p2c_vgw_id'] = $localVarParams['p2cVgwId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowP2cVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowP2cVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 更新P2C VPN网关
     *
     * 根据P2C VPN网关ID，更新指定的P2C VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateP2cVgwAsync($request)
    {
        return $this->updateP2cVgwAsyncWithHttpInfo($request);
    }
    
    public function updateP2cVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['p2cVgwId'] !== null) {
            $pathParams['p2c_vgw_id'] = $localVarParams['p2cVgwId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateP2cVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateP2cVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加资源标签
     *
     * 为指定实例批量添加标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateResourceTagsAsync($request)
    {
        return $this->batchCreateResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除资源标签
     *
     * 为指定实例批量删除标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteResourceTagsAsync($request)
    {
        return $this->batchDeleteResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchDeleteResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchDeleteResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例数量
     *
     * 根据标签查询资源实例数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countResourcesByTagsAsync($request)
    {
        return $this->countResourcesByTagsAsyncWithHttpInfo($request);
    }
    
    public function countResourcesByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CountResourcesByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CountResourcesByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目标签
     *
     * 查询租户在指定项目中指定资源类型下的所有标签
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
        $resourcePath = '/v5/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListProjectTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListProjectTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表
     *
     * 根据标签查询资源实例列表
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
        $resourcePath = '/v5/{project_id}/{resource_type}/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListResourcesByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListResourcesByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源标签
     *
     * 查询指定实例的标签信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceTagsAsync($request)
    {
        return $this->showResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function showResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPN访问策略
     *
     * 创建VPN访问策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpnAccessPolicyAsync($request)
    {
        return $this->createVpnAccessPolicyAsyncWithHttpInfo($request);
    }
    
    public function createVpnAccessPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/access-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams['x_client_token'] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnAccessPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnAccessPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPN访问策略
     *
     * 删除VPN访问策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpnAccessPolicyAsync($request)
    {
        return $this->deleteVpnAccessPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteVpnAccessPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/access-policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnAccessPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnAccessPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN访问策略列表
     *
     * 查询VPN访问策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnAccessPoliciesAsync($request)
    {
        return $this->listVpnAccessPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listVpnAccessPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/access-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnAccessPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnAccessPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN访问策略
     *
     * 查询VPN访问策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnAccessPolicyAsync($request)
    {
        return $this->showVpnAccessPolicyAsyncWithHttpInfo($request);
    }
    
    public function showVpnAccessPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/access-policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnAccessPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnAccessPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改VPN访问策略
     *
     * 修改VPN访问策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnAccessPolicyAsync($request)
    {
        return $this->updateVpnAccessPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateVpnAccessPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/access-policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnAccessPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnAccessPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPN连接
     *
     * 创建VPN连接，连接VPN网关与对端网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpnConnectionAsync($request)
    {
        return $this->createVpnConnectionAsyncWithHttpInfo($request);
    }
    
    public function createVpnConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPN连接
     *
     * 根据连接ID，删除指定的VPN连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpnConnectionAsync($request)
    {
        return $this->deleteVpnConnectionAsyncWithHttpInfo($request);
    }
    
    public function deleteVpnConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-connection/{vpn_connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnConnectionId'] !== null) {
            $pathParams['vpn_connection_id'] = $localVarParams['vpnConnectionId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN连接列表
     *
     * 查询VPN连接列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnConnectionsAsync($request)
    {
        return $this->listVpnConnectionsAsyncWithHttpInfo($request);
    }
    
    public function listVpnConnectionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnId'] !== null) {
            $queryParams['vpn_id'] = $localVarParams['vpnId'];
        }
        if ($localVarParams['eipId'] !== null) {
            $queryParams['eip_id'] = $localVarParams['eipId'];
        }
        if ($localVarParams['vgwIp'] !== null) {
            $queryParams['vgw_ip'] = $localVarParams['vgwIp'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnConnectionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnConnectionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN连接
     *
     * 根据连接ID，查询指定的VPN连接的参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnConnectionAsync($request)
    {
        return $this->showVpnConnectionAsyncWithHttpInfo($request);
    }
    
    public function showVpnConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-connection/{vpn_connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnConnectionId'] !== null) {
            $pathParams['vpn_connection_id'] = $localVarParams['vpnConnectionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新VPN连接
     *
     * 根据连接ID，更新指定的VPN连接的参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnConnectionAsync($request)
    {
        return $this->updateVpnConnectionAsyncWithHttpInfo($request);
    }
    
    public function updateVpnConnectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-connection/{vpn_connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnConnectionId'] !== null) {
            $pathParams['vpn_connection_id'] = $localVarParams['vpnConnectionId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnConnectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnConnectionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPN网关
     *
     * 创建一个VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVgwAsync($request)
    {
        return $this->createVgwAsyncWithHttpInfo($request);
    }
    
    public function createVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPN网关
     *
     * 根据VPN网关ID，删除指定的VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVgwAsync($request)
    {
        return $this->deleteVgwAsyncWithHttpInfo($request);
    }
    
    public function deleteVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN网关可用区
     *
     * 查询VPN网关可用区
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailabilityZonesAsync($request)
    {
        return $this->listAvailabilityZonesAsyncWithHttpInfo($request);
    }
    
    public function listAvailabilityZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/availability-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListAvailabilityZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN网关可用区
     *
     * 查询VPN网关可用区
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExtendedAvailabilityZonesAsync($request)
    {
        return $this->listExtendedAvailabilityZonesAsyncWithHttpInfo($request);
    }
    
    public function listExtendedAvailabilityZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5.1/{project_id}/vpn-gateways/availability-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListExtendedAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListExtendedAvailabilityZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN网关列表
     *
     * 查询VPN网关列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVgwsAsync($request)
    {
        return $this->listVgwsAsyncWithHttpInfo($request);
    }
    
    public function listVgwsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVgwsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVgwsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN网关
     *
     * 根据VPN网关ID，查询指定的VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVgwAsync($request)
    {
        return $this->showVgwAsyncWithHttpInfo($request);
    }
    
    public function showVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 修改网关规格
     *
     * 对单个网关规格进行修改，可以升配或降配
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePostpaidVgwSpecificationAsync($request)
    {
        return $this->updatePostpaidVgwSpecificationAsyncWithHttpInfo($request);
    }
    
    public function updatePostpaidVgwSpecificationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}/update-specification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdatePostpaidVgwSpecificationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdatePostpaidVgwSpecificationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新VPN网关
     *
     * 根据VPN网关ID，更新指定的VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVgwAsync($request)
    {
        return $this->updateVgwAsyncWithHttpInfo($request);
    }
    
    public function updateVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 导入VPN网关证书
     *
     * 导入租户VPN网关所使用的证书，包括签名证书、签名私钥、加密证书、加密私钥和CA证书链。当前只支持国密证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVgwCertificateAsync($request)
    {
        return $this->createVgwCertificateAsyncWithHttpInfo($request);
    }
    
    public function createVgwCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}/certificate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVgwCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVgwCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN网关证书
     *
     * 根据VPN网关ID，查询所指定的VPN网关证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnGatewayCertificateAsync($request)
    {
        return $this->showVpnGatewayCertificateAsyncWithHttpInfo($request);
    }
    
    public function showVpnGatewayCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}/certificate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnGatewayCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnGatewayCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 更新VPN网关证书
     *
     * 更新租户VPN网关所使用的证书，包括签名证书、签名私钥、加密证书、加密私钥和CA证书链。当前只支持国密证书
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVgwCertificateAsync($request)
    {
        return $this->updateVgwCertificateAsyncWithHttpInfo($request);
    }
    
    public function updateVgwCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}/certificate/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vgwId'] !== null) {
            $pathParams['vgw_id'] = $localVarParams['vgwId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVgwCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVgwCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定租户配额
     *
     * 查询指定租户的配额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotasInfoAsync($request)
    {
        return $this->showQuotasInfoAsyncWithHttpInfo($request);
    }
    
    public function showQuotasInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowQuotasInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowQuotasInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建一个VPN 服务端
     *
     * 创建一个VPN 服务端
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpnServerAsync($request)
    {
        return $this->createVpnServerAsyncWithHttpInfo($request);
    }
    
    public function createVpnServerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/vpn-servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams['x_client_token'] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['p2cVgwId'] !== null) {
            $pathParams['p2c_vgw_id'] = $localVarParams['p2cVgwId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnServerRequest',
            $asyncRequest = true);
    }

    /**
     * 导出服务端对应的客户端配置信息
     *
     * 导出客户端配置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportClientConfigAsync($request)
    {
        return $this->exportClientConfigAsyncWithHttpInfo($request);
    }
    
    public function exportClientConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/client-config/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ExportClientConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ExportClientConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户下的所有服务端信息
     *
     * 查询租户下的所有服务端信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnServersByProjectAsync($request)
    {
        return $this->listVpnServersByProjectAsyncWithHttpInfo($request);
    }
    
    public function listVpnServersByProjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/vpn-servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnServersByProjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnServersByProjectRequest',
            $asyncRequest = true);
    }

    /**
     * 查询一个网关下的服务端信息
     *
     * 查询一个网关下的服务端信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnServersByVgwAsync($request)
    {
        return $this->listVpnServersByVgwAsyncWithHttpInfo($request);
    }
    
    public function listVpnServersByVgwAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/vpn-servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['p2cVgwId'] !== null) {
            $pathParams['p2c_vgw_id'] = $localVarParams['p2cVgwId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnServersByVgwResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnServersByVgwRequest',
            $asyncRequest = true);
    }

    /**
     * 更新指定VPN 服务端
     *
     * 更新指定VPN 服务端
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnServerAsync($request)
    {
        return $this->updateVpnServerAsyncWithHttpInfo($request);
    }
    
    public function updateVpnServerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnServerRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建VPN用户
     *
     * 批量创建P2C VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateVpnUsersAsync($request)
    {
        return $this->batchCreateVpnUsersAsyncWithHttpInfo($request);
    }
    
    public function batchCreateVpnUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams['x_client_token'] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateVpnUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateVpnUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除VPN用户
     *
     * 批量删除P2C VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteVpnUsersAsync($request)
    {
        return $this->batchDeleteVpnUsersAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteVpnUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchDeleteVpnUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchDeleteVpnUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPN用户
     *
     * 创建VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpnUserAsync($request)
    {
        return $this->createVpnUserAsyncWithHttpInfo($request);
    }
    
    public function createVpnUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams['x_client_token'] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnUserRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPN用户
     *
     * 删除VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpnUserAsync($request)
    {
        return $this->deleteVpnUserAsyncWithHttpInfo($request);
    }
    
    public function deleteVpnUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnUserRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN用户列表
     *
     * 查询VPN用户列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnUsersAsync($request)
    {
        return $this->listVpnUsersAsyncWithHttpInfo($request);
    }
    
    public function listVpnUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 重置VPN用户密码
     *
     * 重置VPN用户密码
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetVpnUserPasswordAsync($request)
    {
        return $this->resetVpnUserPasswordAsyncWithHttpInfo($request);
    }
    
    public function resetVpnUserPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/{user_id}/reset-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ResetVpnUserPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ResetVpnUserPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN用户
     *
     * 查询VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnUserAsync($request)
    {
        return $this->showVpnUserAsyncWithHttpInfo($request);
    }
    
    public function showVpnUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnUserRequest',
            $asyncRequest = true);
    }

    /**
     * 修改VPN用户
     *
     * 修改VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnUserAsync($request)
    {
        return $this->updateVpnUserAsyncWithHttpInfo($request);
    }
    
    public function updateVpnUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserRequest',
            $asyncRequest = true);
    }

    /**
     * 修改VPN用户密码
     *
     * 修改VPN用户密码
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnUserPasswordAsync($request)
    {
        return $this->updateVpnUserPasswordAsyncWithHttpInfo($request);
    }
    
    public function updateVpnUserPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/users/{user_id}/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 添加VPN用户到组
     *
     * 添加VPN用户到组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addVpnUsersToGroupAsync($request)
    {
        return $this->addVpnUsersToGroupAsyncWithHttpInfo($request);
    }
    
    public function addVpnUsersToGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups/{group_id}/add-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\AddVpnUsersToGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\AddVpnUsersToGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建VPN用户组
     *
     * 创建VPN用户组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpnUserGroupAsync($request)
    {
        return $this->createVpnUserGroupAsyncWithHttpInfo($request);
    }
    
    public function createVpnUserGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams['x_client_token'] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnUserGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnUserGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除VPN用户组
     *
     * 删除VPN用户组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpnUserGroupAsync($request)
    {
        return $this->deleteVpnUserGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteVpnUserGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnUserGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnUserGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN用户组列表
     *
     * 查询VPN用户组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnUserGroupsAsync($request)
    {
        return $this->listVpnUserGroupsAsyncWithHttpInfo($request);
    }
    
    public function listVpnUserGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUserGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUserGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询组内VPN用户
     *
     * 查询组内VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnUsersInGroupAsync($request)
    {
        return $this->listVpnUsersInGroupAsyncWithHttpInfo($request);
    }
    
    public function listVpnUsersInGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups/{group_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUsersInGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUsersInGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除组内VPN用户
     *
     * 删除组内VPN用户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeVpnUsersFromGroupAsync($request)
    {
        return $this->removeVpnUsersFromGroupAsyncWithHttpInfo($request);
    }
    
    public function removeVpnUsersFromGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups/{group_id}/remove-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\RemoveVpnUsersFromGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\RemoveVpnUsersFromGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询VPN用户组
     *
     * 查询VPN用户组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnUserGroupAsync($request)
    {
        return $this->showVpnUserGroupAsyncWithHttpInfo($request);
    }
    
    public function showVpnUserGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnUserGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnUserGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 修改VPN用户组
     *
     * 修改VPN用户组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnUserGroupAsync($request)
    {
        return $this->updateVpnUserGroupAsyncWithHttpInfo($request);
    }
    
    public function updateVpnUserGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/vpn-servers/{vpn_server_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vpnServerId'] !== null) {
            $pathParams['vpn_server_id'] = $localVarParams['vpnServerId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserGroupRequest',
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