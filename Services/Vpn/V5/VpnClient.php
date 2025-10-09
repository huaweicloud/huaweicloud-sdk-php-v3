<?php

namespace HuaweiCloud\SDK\Vpn\V5;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class VpnClient extends Client
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
        $client = new ClientBuilder(new VpnClient());
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
    public function checkClientCaCertificate($request)
    {
        return $this->checkClientCaCertificateWithHttpInfo($request);
    }

    public function checkClientCaCertificateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CheckClientCaCertificateRequest');
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
    public function deleteClientCa($request)
    {
        return $this->deleteClientCaWithHttpInfo($request);
    }

    public function deleteClientCaWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteClientCaRequest');
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
    public function importClientCa($request)
    {
        return $this->importClientCaWithHttpInfo($request);
    }

    public function importClientCaWithHttpInfo($request)
    {
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
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ImportClientCaRequest');
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
    public function showClientCa($request)
    {
        return $this->showClientCaWithHttpInfo($request);
    }

    public function showClientCaWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowClientCaRequest');
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
    public function updateClientCa($request)
    {
        return $this->updateClientCaWithHttpInfo($request);
    }

    public function updateClientCaWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateClientCaRequest');
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
    public function createConnectionMonitor($request)
    {
        return $this->createConnectionMonitorWithHttpInfo($request);
    }

    public function createConnectionMonitorWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateConnectionMonitorRequest');
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
    public function deleteConnectionMonitor($request)
    {
        return $this->deleteConnectionMonitorWithHttpInfo($request);
    }

    public function deleteConnectionMonitorWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteConnectionMonitorRequest');
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
    public function listConnectionMonitors($request)
    {
        return $this->listConnectionMonitorsWithHttpInfo($request);
    }

    public function listConnectionMonitorsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListConnectionMonitorsRequest');
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
    public function showConnectionMonitor($request)
    {
        return $this->showConnectionMonitorWithHttpInfo($request);
    }

    public function showConnectionMonitorWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowConnectionMonitorRequest');
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
    public function createCgw($request)
    {
        return $this->createCgwWithHttpInfo($request);
    }

    public function createCgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateCgwRequest');
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
    public function deleteCgw($request)
    {
        return $this->deleteCgwWithHttpInfo($request);
    }

    public function deleteCgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteCgwRequest');
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
    public function listCgws($request)
    {
        return $this->listCgwsWithHttpInfo($request);
    }

    public function listCgwsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListCgwsRequest');
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
    public function showCgw($request)
    {
        return $this->showCgwWithHttpInfo($request);
    }

    public function showCgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowCgwRequest');
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
    public function updateCgw($request)
    {
        return $this->updateCgwWithHttpInfo($request);
    }

    public function updateCgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateCgwRequest');
    }

    /**
     * 创建P2C VPN网关
     *
     * 创建终端入云VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createP2cVgw($request)
    {
        return $this->createP2cVgwWithHttpInfo($request);
    }

    public function createP2cVgwWithHttpInfo($request)
    {
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
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateP2cVgwResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateP2cVgwRequest');
    }

    /**
     * 删除P2C VPN网关
     *
     * 根据P2C VPN网关ID，删除指定的VPN网关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteP2cVgw($request)
    {
        return $this->deleteP2cVgwWithHttpInfo($request);
    }

    public function deleteP2cVgwWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteP2cVgwResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteP2cVgwRequest');
    }

    /**
     * 断开P2C VPN网关连接
     *
     * 断开P2C VPN网关连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteP2cVgwConnection($request)
    {
        return $this->deleteP2cVgwConnectionWithHttpInfo($request);
    }

    public function deleteP2cVgwConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/connections/{connection_id}/disconnect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteP2cVgwConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteP2cVgwConnectionRequest');
    }

    /**
     * 删除指定任务的记录
     *
     * delete resource job
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteP2cVpnGatewayJob($request)
    {
        return $this->deleteP2cVpnGatewayJobWithHttpInfo($request);
    }

    public function deleteP2cVpnGatewayJobWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteP2cVpnGatewayJobResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteP2cVpnGatewayJobRequest');
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
    public function listP2cVgwAvailabilityZones($request)
    {
        return $this->listP2cVgwAvailabilityZonesWithHttpInfo($request);
    }

    public function listP2cVgwAvailabilityZonesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwAvailabilityZonesRequest');
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
    public function listP2cVgwConnections($request)
    {
        return $this->listP2cVgwConnectionsWithHttpInfo($request);
    }

    public function listP2cVgwConnectionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwConnectionsRequest');
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
    public function listP2cVgws($request)
    {
        return $this->listP2cVgwsWithHttpInfo($request);
    }

    public function listP2cVgwsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVgwsRequest');
    }

    /**
     * 查询资源任务列表
     *
     * list resource jobs
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listP2cVpnGatewayJobs($request)
    {
        return $this->listP2cVpnGatewayJobsWithHttpInfo($request);
    }

    public function listP2cVpnGatewayJobsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVpnGatewayJobsResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListP2cVpnGatewayJobsRequest');
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
    public function showP2cVgw($request)
    {
        return $this->showP2cVgwWithHttpInfo($request);
    }

    public function showP2cVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowP2cVgwRequest');
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
    public function updateP2cVgw($request)
    {
        return $this->updateP2cVgwWithHttpInfo($request);
    }

    public function updateP2cVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateP2cVgwRequest');
    }

    /**
     * 升级VPN资源
     *
     * upgrade VPN resource
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeP2cVpnGateway($request)
    {
        return $this->upgradeP2cVpnGatewayWithHttpInfo($request);
    }

    public function upgradeP2cVpnGatewayWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpgradeP2cVpnGatewayResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpgradeP2cVpnGatewayRequest');
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
    public function batchCreateResourceTags($request)
    {
        return $this->batchCreateResourceTagsWithHttpInfo($request);
    }

    public function batchCreateResourceTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateResourceTagsRequest');
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
    public function batchDeleteResourceTags($request)
    {
        return $this->batchDeleteResourceTagsWithHttpInfo($request);
    }

    public function batchDeleteResourceTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchDeleteResourceTagsRequest');
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
    public function countResourcesByTags($request)
    {
        return $this->countResourcesByTagsWithHttpInfo($request);
    }

    public function countResourcesByTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CountResourcesByTagsRequest');
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
    public function listProjectTags($request)
    {
        return $this->listProjectTagsWithHttpInfo($request);
    }

    public function listProjectTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListProjectTagsRequest');
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
    public function listResourcesByTags($request)
    {
        return $this->listResourcesByTagsWithHttpInfo($request);
    }

    public function listResourcesByTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListResourcesByTagsRequest');
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
    public function showResourceTags($request)
    {
        return $this->showResourceTagsWithHttpInfo($request);
    }

    public function showResourceTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowResourceTagsRequest');
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
    public function createVpnAccessPolicy($request)
    {
        return $this->createVpnAccessPolicyWithHttpInfo($request);
    }

    public function createVpnAccessPolicyWithHttpInfo($request)
    {
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
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnAccessPolicyRequest');
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
    public function deleteVpnAccessPolicy($request)
    {
        return $this->deleteVpnAccessPolicyWithHttpInfo($request);
    }

    public function deleteVpnAccessPolicyWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnAccessPolicyRequest');
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
    public function listVpnAccessPolicies($request)
    {
        return $this->listVpnAccessPoliciesWithHttpInfo($request);
    }

    public function listVpnAccessPoliciesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnAccessPoliciesRequest');
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
    public function showVpnAccessPolicy($request)
    {
        return $this->showVpnAccessPolicyWithHttpInfo($request);
    }

    public function showVpnAccessPolicyWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnAccessPolicyRequest');
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
    public function updateVpnAccessPolicy($request)
    {
        return $this->updateVpnAccessPolicyWithHttpInfo($request);
    }

    public function updateVpnAccessPolicyWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnAccessPolicyRequest');
    }

    /**
     * 批量创建VPN连接
     *
     * 同时创建1-2条VPN连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateVpnConnection($request)
    {
        return $this->batchCreateVpnConnectionWithHttpInfo($request);
    }

    public function batchCreateVpnConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-connections/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateVpnConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateVpnConnectionRequest');
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
    public function createVpnConnection($request)
    {
        return $this->createVpnConnectionWithHttpInfo($request);
    }

    public function createVpnConnectionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnConnectionRequest');
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
    public function deleteVpnConnection($request)
    {
        return $this->deleteVpnConnectionWithHttpInfo($request);
    }

    public function deleteVpnConnectionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnConnectionRequest');
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
    public function listVpnConnections($request)
    {
        return $this->listVpnConnectionsWithHttpInfo($request);
    }

    public function listVpnConnectionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnConnectionsRequest');
    }

    /**
     * 重置VPN连接
     *
     * 根据连接ID，重置指定VPN连接
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetVpnConnection($request)
    {
        return $this->resetVpnConnectionWithHttpInfo($request);
    }

    public function resetVpnConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-connection/{vpn_connection_id}/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ResetVpnConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ResetVpnConnectionRequest');
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
    public function showVpnConnection($request)
    {
        return $this->showVpnConnectionWithHttpInfo($request);
    }

    public function showVpnConnectionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionRequest');
    }

    /**
     * 查询VPN连接日志
     *
     * 根据连接ID，查询指定的VPN连接日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnConnectionLog($request)
    {
        return $this->showVpnConnectionLogWithHttpInfo($request);
    }

    public function showVpnConnectionLogWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-connection/{vpn_connection_id}/log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionLogResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionLogRequest');
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
    public function updateVpnConnection($request)
    {
        return $this->updateVpnConnectionWithHttpInfo($request);
    }

    public function updateVpnConnectionWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnConnectionRequest');
    }

    /**
     * 删除VPN连接日志配置
     *
     * 删除VPN连接日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpnConnectionsLogConfig($request)
    {
        return $this->deleteVpnConnectionsLogConfigWithHttpInfo($request);
    }

    public function deleteVpnConnectionsLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/log-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnConnectionsLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnConnectionsLogConfigRequest');
    }

    /**
     * 查询VPN连接日志配置
     *
     * 查询VPN连接日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnConnectionsLogConfig($request)
    {
        return $this->showVpnConnectionsLogConfigWithHttpInfo($request);
    }

    public function showVpnConnectionsLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/log-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionsLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnConnectionsLogConfigRequest');
    }

    /**
     * 更新VPN连接日志配置
     *
     * 更新VPN连接日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpnConnectionsLogConfig($request)
    {
        return $this->updateVpnConnectionsLogConfigWithHttpInfo($request);
    }

    public function updateVpnConnectionsLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/p2c-vpn-gateways/{p2c_vgw_id}/log-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnConnectionsLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnConnectionsLogConfigRequest');
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
    public function createVgw($request)
    {
        return $this->createVgwWithHttpInfo($request);
    }

    public function createVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVgwRequest');
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
    public function deleteVgw($request)
    {
        return $this->deleteVgwWithHttpInfo($request);
    }

    public function deleteVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVgwRequest');
    }

    /**
     * 删除指定任务的记录
     *
     * delete resource job
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpnGatewayJob($request)
    {
        return $this->deleteVpnGatewayJobWithHttpInfo($request);
    }

    public function deleteVpnGatewayJobWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-gateways/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnGatewayJobResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnGatewayJobRequest');
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
    public function listAvailabilityZones($request)
    {
        return $this->listAvailabilityZonesWithHttpInfo($request);
    }

    public function listAvailabilityZonesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListAvailabilityZonesRequest');
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
    public function listExtendedAvailabilityZones($request)
    {
        return $this->listExtendedAvailabilityZonesWithHttpInfo($request);
    }

    public function listExtendedAvailabilityZonesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListExtendedAvailabilityZonesRequest');
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
    public function listVgws($request)
    {
        return $this->listVgwsWithHttpInfo($request);
    }

    public function listVgwsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVgwsRequest');
    }

    /**
     * 查询资源任务列表
     *
     * list resource jobs
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpnGatewayJobs($request)
    {
        return $this->listVpnGatewayJobsWithHttpInfo($request);
    }

    public function listVpnGatewayJobsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-gateways/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnGatewayJobsResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnGatewayJobsRequest');
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
    public function showVgw($request)
    {
        return $this->showVgwWithHttpInfo($request);
    }

    public function showVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVgwRequest');
    }

    /**
     * 查询VPN网关路由表
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpnGatewayRoutingTable($request)
    {
        return $this->showVpnGatewayRoutingTableWithHttpInfo($request);
    }

    public function showVpnGatewayRoutingTableWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}/routing-table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['isIncludeNexthopResource'] !== null) {
            $queryParams['is_include_nexthop_resource'] = $localVarParams['isIncludeNexthopResource'];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnGatewayRoutingTableResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnGatewayRoutingTableRequest');
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
    public function updatePostpaidVgwSpecification($request)
    {
        return $this->updatePostpaidVgwSpecificationWithHttpInfo($request);
    }

    public function updatePostpaidVgwSpecificationWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdatePostpaidVgwSpecificationRequest');
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
    public function updateVgw($request)
    {
        return $this->updateVgwWithHttpInfo($request);
    }

    public function updateVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVgwRequest');
    }

    /**
     * 升级VPN资源
     *
     * upgrade VPN resource
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeVpnGateway($request)
    {
        return $this->upgradeVpnGatewayWithHttpInfo($request);
    }

    public function upgradeVpnGatewayWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vpn-gateways/{vgw_id}/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\UpgradeVpnGatewayResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpgradeVpnGatewayRequest');
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
    public function createVgwCertificate($request)
    {
        return $this->createVgwCertificateWithHttpInfo($request);
    }

    public function createVgwCertificateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVgwCertificateRequest');
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
    public function showVpnGatewayCertificate($request)
    {
        return $this->showVpnGatewayCertificateWithHttpInfo($request);
    }

    public function showVpnGatewayCertificateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnGatewayCertificateRequest');
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
    public function updateVgwCertificate($request)
    {
        return $this->updateVgwCertificateWithHttpInfo($request);
    }

    public function updateVgwCertificateWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVgwCertificateRequest');
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
    public function showQuotasInfo($request)
    {
        return $this->showQuotasInfoWithHttpInfo($request);
    }

    public function showQuotasInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowQuotasInfoRequest');
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
    public function createVpnServer($request)
    {
        return $this->createVpnServerWithHttpInfo($request);
    }

    public function createVpnServerWithHttpInfo($request)
    {
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
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnServerRequest');
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
    public function exportClientConfig($request)
    {
        return $this->exportClientConfigWithHttpInfo($request);
    }

    public function exportClientConfigWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Vpn\V5\Model\ExportClientConfigResponse',
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ExportClientConfigRequest');
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
    public function listVpnServersByProject($request)
    {
        return $this->listVpnServersByProjectWithHttpInfo($request);
    }

    public function listVpnServersByProjectWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnServersByProjectRequest');
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
    public function listVpnServersByVgw($request)
    {
        return $this->listVpnServersByVgwWithHttpInfo($request);
    }

    public function listVpnServersByVgwWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnServersByVgwRequest');
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
    public function updateVpnServer($request)
    {
        return $this->updateVpnServerWithHttpInfo($request);
    }

    public function updateVpnServerWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnServerRequest');
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
    public function batchCreateVpnUsers($request)
    {
        return $this->batchCreateVpnUsersWithHttpInfo($request);
    }

    public function batchCreateVpnUsersWithHttpInfo($request)
    {
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
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchCreateVpnUsersRequest');
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
    public function batchDeleteVpnUsers($request)
    {
        return $this->batchDeleteVpnUsersWithHttpInfo($request);
    }

    public function batchDeleteVpnUsersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\BatchDeleteVpnUsersRequest');
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
    public function createVpnUser($request)
    {
        return $this->createVpnUserWithHttpInfo($request);
    }

    public function createVpnUserWithHttpInfo($request)
    {
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
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnUserRequest');
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
    public function deleteVpnUser($request)
    {
        return $this->deleteVpnUserWithHttpInfo($request);
    }

    public function deleteVpnUserWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnUserRequest');
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
    public function listVpnUsers($request)
    {
        return $this->listVpnUsersWithHttpInfo($request);
    }

    public function listVpnUsersWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUsersRequest');
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
    public function resetVpnUserPassword($request)
    {
        return $this->resetVpnUserPasswordWithHttpInfo($request);
    }

    public function resetVpnUserPasswordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ResetVpnUserPasswordRequest');
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
    public function showVpnUser($request)
    {
        return $this->showVpnUserWithHttpInfo($request);
    }

    public function showVpnUserWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnUserRequest');
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
    public function updateVpnUser($request)
    {
        return $this->updateVpnUserWithHttpInfo($request);
    }

    public function updateVpnUserWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserRequest');
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
    public function updateVpnUserPassword($request)
    {
        return $this->updateVpnUserPasswordWithHttpInfo($request);
    }

    public function updateVpnUserPasswordWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserPasswordRequest');
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
    public function addVpnUsersToGroup($request)
    {
        return $this->addVpnUsersToGroupWithHttpInfo($request);
    }

    public function addVpnUsersToGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\AddVpnUsersToGroupRequest');
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
    public function createVpnUserGroup($request)
    {
        return $this->createVpnUserGroupWithHttpInfo($request);
    }

    public function createVpnUserGroupWithHttpInfo($request)
    {
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
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\CreateVpnUserGroupRequest');
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
    public function deleteVpnUserGroup($request)
    {
        return $this->deleteVpnUserGroupWithHttpInfo($request);
    }

    public function deleteVpnUserGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\DeleteVpnUserGroupRequest');
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
    public function listVpnUserGroups($request)
    {
        return $this->listVpnUserGroupsWithHttpInfo($request);
    }

    public function listVpnUserGroupsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUserGroupsRequest');
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
    public function listVpnUsersInGroup($request)
    {
        return $this->listVpnUsersInGroupWithHttpInfo($request);
    }

    public function listVpnUsersInGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ListVpnUsersInGroupRequest');
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
    public function removeVpnUsersFromGroup($request)
    {
        return $this->removeVpnUsersFromGroupWithHttpInfo($request);
    }

    public function removeVpnUsersFromGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\RemoveVpnUsersFromGroupRequest');
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
    public function showVpnUserGroup($request)
    {
        return $this->showVpnUserGroupWithHttpInfo($request);
    }

    public function showVpnUserGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\ShowVpnUserGroupRequest');
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
    public function updateVpnUserGroup($request)
    {
        return $this->updateVpnUserGroupWithHttpInfo($request);
    }

    public function updateVpnUserGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Vpn\V5\Model\UpdateVpnUserGroupRequest');
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