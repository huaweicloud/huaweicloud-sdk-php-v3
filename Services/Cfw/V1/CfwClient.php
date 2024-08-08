<?php

namespace HuaweiCloud\SDK\Cfw\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CfwClient extends Client
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
        $client = new ClientBuilder(new CfwClient(), "GlobalCredentials");
        return $client;
    }


    /**
     * 添加地址组成员
     *
     * 添加地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAddressItem($request)
    {
        return $this->addAddressItemWithHttpInfo($request);
    }

    public function addAddressItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressItemResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressItemRequest');
    }

    /**
     * 添加地址组
     *
     * 添加地址组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAddressSet($request)
    {
        return $this->addAddressSetWithHttpInfo($request);
    }

    public function addAddressSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressSetRequest');
    }

    /**
     * 创建黑白名单规则
     *
     * 创建黑白名单规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addBlackWhiteList($request)
    {
        return $this->addBlackWhiteListWithHttpInfo($request);
    }

    public function addBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddBlackWhiteListRequest');
    }

    /**
     * 添加域名组
     *
     * 添加域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDomainSet($request)
    {
        return $this->addDomainSetWithHttpInfo($request);
    }

    public function addDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainSetRequest');
    }

    /**
     * 添加域名列表
     *
     * 添加域名列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDomains($request)
    {
        return $this->addDomainsWithHttpInfo($request);
    }

    public function addDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/domains/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainsRequest');
    }

    /**
     * 创建日志配置
     *
     * 创建日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addLogConfig($request)
    {
        return $this->addLogConfigWithHttpInfo($request);
    }

    public function addLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddLogConfigRequest');
    }

    /**
     * 新建服务成员
     *
     * 批量添加服务组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addServiceItems($request)
    {
        return $this->addServiceItemsWithHttpInfo($request);
    }

    public function addServiceItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsRequest');
    }

    /**
     * 新建服务组
     *
     * 创建服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addServiceSet($request)
    {
        return $this->addServiceSetWithHttpInfo($request);
    }

    public function addServiceSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceSetRequest');
    }

    /**
     * 批量删除地址组成员
     *
     * 批量删除地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAddressItems($request)
    {
        return $this->batchDeleteAddressItemsWithHttpInfo($request);
    }

    public function batchDeleteAddressItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAddressItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAddressItemsRequest');
    }

    /**
     * 批量删除服务组成员信息
     *
     * 批量删除服务组成员信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteServiceItems($request)
    {
        return $this->batchDeleteServiceItemsWithHttpInfo($request);
    }

    public function batchDeleteServiceItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteServiceItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteServiceItemsRequest');
    }

    /**
     * 取消抓包任务
     *
     * 取消抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelCaptureTask($request)
    {
        return $this->cancelCaptureTaskWithHttpInfo($request);
    }

    public function cancelCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CancelCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CancelCaptureTaskRequest');
    }

    /**
     * 修改东西向防火墙防护状态
     *
     * 东西向防护资源防护开启/关闭
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEastWestFirewallStatus($request)
    {
        return $this->changeEastWestFirewallStatusWithHttpInfo($request);
    }

    public function changeEastWestFirewallStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEastWestFirewallStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEastWestFirewallStatusRequest');
    }

    /**
     * 创建抓包任务
     *
     * 创建抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCaptureTask($request)
    {
        return $this->createCaptureTaskWithHttpInfo($request);
    }

    public function createCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateCaptureTaskRequest');
    }

    /**
     * 创建东西向防火墙
     *
     * 创建东西向防火墙
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEastWestFirewall($request)
    {
        return $this->createEastWestFirewallWithHttpInfo($request);
    }

    public function createEastWestFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateEastWestFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateEastWestFirewallRequest');
    }

    /**
     * 创建防火墙
     *
     * 创建防火墙
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFirewall($request)
    {
        return $this->createFirewallWithHttpInfo($request);
    }

    public function createFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallRequest');
    }

    /**
     * 标签创建接口
     *
     * 创建标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTag($request)
    {
        return $this->createTagWithHttpInfo($request);
    }

    public function createTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/{fw_instance_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateTagResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateTagRequest');
    }

    /**
     * 删除地址组成员
     *
     * 删除地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAddressItem($request)
    {
        return $this->deleteAddressItemWithHttpInfo($request);
    }

    public function deleteAddressItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items/{item_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['itemId'] !== null) {
            $pathParams['item_id'] = $localVarParams['itemId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressItemResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressItemRequest');
    }

    /**
     * 删除地址组
     *
     * 删除地址组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAddressSet($request)
    {
        return $this->deleteAddressSetWithHttpInfo($request);
    }

    public function deleteAddressSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressSetRequest');
    }

    /**
     * 删除黑白名单规则
     *
     * 删除黑白名单规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBlackWhiteList($request)
    {
        return $this->deleteBlackWhiteListWithHttpInfo($request);
    }

    public function deleteBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list/{list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['listId'] !== null) {
            $pathParams['list_id'] = $localVarParams['listId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteBlackWhiteListRequest');
    }

    /**
     * 删除抓包任务
     *
     * 删除抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCaptureTask($request)
    {
        return $this->deleteCaptureTaskWithHttpInfo($request);
    }

    public function deleteCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteCaptureTaskRequest');
    }

    /**
     * 删除域名组
     *
     * 删除域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomainSet($request)
    {
        return $this->deleteDomainSetWithHttpInfo($request);
    }

    public function deleteDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainSetRequest');
    }

    /**
     * 删除域名列表
     *
     * 删除域名列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomains($request)
    {
        return $this->deleteDomainsWithHttpInfo($request);
    }

    public function deleteDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/domains/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainsRequest');
    }

    /**
     * 删除防火墙
     *
     * 删除防火墙，仅按需生效
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFirewall($request)
    {
        return $this->deleteFirewallWithHttpInfo($request);
    }

    public function deleteFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall/{resource_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteFirewallRequest');
    }

    /**
     * 删除服务成员
     *
     * 删除服务组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServiceItem($request)
    {
        return $this->deleteServiceItemWithHttpInfo($request);
    }

    public function deleteServiceItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items/{item_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['itemId'] !== null) {
            $pathParams['item_id'] = $localVarParams['itemId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceItemResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceItemRequest');
    }

    /**
     * 删除服务组
     *
     * 删除服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServiceSet($request)
    {
        return $this->deleteServiceSetWithHttpInfo($request);
    }

    public function deleteServiceSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceSetRequest');
    }

    /**
     * 删除标签
     *
     * 删除标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTag($request)
    {
        return $this->deleteTagWithHttpInfo($request);
    }

    public function deleteTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/{fw_instance_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteTagResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteTagRequest');
    }

    /**
     * 查询访问控制日志
     *
     * 查询访问控制日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessControlLogs($request)
    {
        return $this->listAccessControlLogsWithHttpInfo($request);
    }

    public function listAccessControlLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/access-control';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $queryParams['rule_id'] = $localVarParams['ruleId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['srcPort'] !== null) {
            $queryParams['src_port'] = $localVarParams['srcPort'];
        }
        if ($localVarParams['dstIp'] !== null) {
            $queryParams['dst_ip'] = $localVarParams['dstIp'];
        }
        if ($localVarParams['dstPort'] !== null) {
            $queryParams['dst_port'] = $localVarParams['dstPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['nextDate'] !== null) {
            $queryParams['next_date'] = $localVarParams['nextDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['dstHost'] !== null) {
            $queryParams['dst_host'] = $localVarParams['dstHost'];
        }
        if ($localVarParams['ruleName'] !== null) {
            $queryParams['rule_name'] = $localVarParams['ruleName'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['srcRegionName'] !== null) {
            $queryParams['src_region_name'] = $localVarParams['srcRegionName'];
        }
        if ($localVarParams['dstRegionName'] !== null) {
            $queryParams['dst_region_name'] = $localVarParams['dstRegionName'];
        }
        if ($localVarParams['srcProvinceName'] !== null) {
            $queryParams['src_province_name'] = $localVarParams['srcProvinceName'];
        }
        if ($localVarParams['dstProvinceName'] !== null) {
            $queryParams['dst_province_name'] = $localVarParams['dstProvinceName'];
        }
        if ($localVarParams['srcCityName'] !== null) {
            $queryParams['src_city_name'] = $localVarParams['srcCityName'];
        }
        if ($localVarParams['dstCityName'] !== null) {
            $queryParams['dst_city_name'] = $localVarParams['dstCityName'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAccessControlLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAccessControlLogsRequest');
    }

    /**
     * 查询地址组成员
     *
     * 查询地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressItems($request)
    {
        return $this->listAddressItemsWithHttpInfo($request);
    }

    public function listAddressItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['setId'] !== null) {
            $queryParams['set_id'] = $localVarParams['setId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryAddressSetType'] !== null) {
            $queryParams['query_address_set_type'] = $localVarParams['queryAddressSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressItemsRequest');
    }

    /**
     * 查询地址组详细信息
     *
     * 查询地址组详细
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressSetDetail($request)
    {
        return $this->listAddressSetDetailWithHttpInfo($request);
    }

    public function listAddressSetDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryAddressSetType'] !== null) {
            $queryParams['query_address_set_type'] = $localVarParams['queryAddressSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetDetailRequest');
    }

    /**
     * 查询地址组列表
     *
     * 查询地址组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressSets($request)
    {
        return $this->listAddressSetsWithHttpInfo($request);
    }

    public function listAddressSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryAddressSetType'] !== null) {
            $queryParams['query_address_set_type'] = $localVarParams['queryAddressSetType'];
        }
        if ($localVarParams['addressSetType'] !== null) {
            $queryParams['address_set_type'] = $localVarParams['addressSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetsRequest');
    }

    /**
     * 查询攻击日志
     *
     * 查询攻击日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttackLogs($request)
    {
        return $this->listAttackLogsWithHttpInfo($request);
    }

    public function listAttackLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/attack';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['srcPort'] !== null) {
            $queryParams['src_port'] = $localVarParams['srcPort'];
        }
        if ($localVarParams['dstIp'] !== null) {
            $queryParams['dst_ip'] = $localVarParams['dstIp'];
        }
        if ($localVarParams['dstPort'] !== null) {
            $queryParams['dst_port'] = $localVarParams['dstPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['nextDate'] !== null) {
            $queryParams['next_date'] = $localVarParams['nextDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['attackType'] !== null) {
            $queryParams['attack_type'] = $localVarParams['attackType'];
        }
        if ($localVarParams['attackRule'] !== null) {
            $queryParams['attack_rule'] = $localVarParams['attackRule'];
        }
        if ($localVarParams['level'] !== null) {
            $queryParams['level'] = $localVarParams['level'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['dstHost'] !== null) {
            $queryParams['dst_host'] = $localVarParams['dstHost'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['attackRuleId'] !== null) {
            $queryParams['attack_rule_id'] = $localVarParams['attackRuleId'];
        }
        if ($localVarParams['srcRegionName'] !== null) {
            $queryParams['src_region_name'] = $localVarParams['srcRegionName'];
        }
        if ($localVarParams['dstRegionName'] !== null) {
            $queryParams['dst_region_name'] = $localVarParams['dstRegionName'];
        }
        if ($localVarParams['srcProvinceName'] !== null) {
            $queryParams['src_province_name'] = $localVarParams['srcProvinceName'];
        }
        if ($localVarParams['dstProvinceName'] !== null) {
            $queryParams['dst_province_name'] = $localVarParams['dstProvinceName'];
        }
        if ($localVarParams['srcCityName'] !== null) {
            $queryParams['src_city_name'] = $localVarParams['srcCityName'];
        }
        if ($localVarParams['dstCityName'] !== null) {
            $queryParams['dst_city_name'] = $localVarParams['dstCityName'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAttackLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAttackLogsRequest');
    }

    /**
     * 查询黑白名单列表
     *
     * 查询黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBlackWhiteLists($request)
    {
        return $this->listBlackWhiteListsWithHttpInfo($request);
    }

    public function listBlackWhiteListsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-lists';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['listType'] !== null) {
            $queryParams['list_type'] = $localVarParams['listType'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListBlackWhiteListsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListBlackWhiteListsRequest');
    }

    /**
     * 获取抓包任务结果
     *
     * 获取抓包任务结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCaptureResult($request)
    {
        return $this->listCaptureResultWithHttpInfo($request);
    }

    public function listCaptureResultWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task/capture-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureResultResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureResultRequest');
    }

    /**
     * 查询抓包任务
     *
     * 查询抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCaptureTask($request)
    {
        return $this->listCaptureTaskWithHttpInfo($request);
    }

    public function listCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureTaskRequest');
    }

    /**
     * 查询dns服务器列表
     *
     * 查询dns服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDnsServers($request)
    {
        return $this->listDnsServersWithHttpInfo($request);
    }

    public function listDnsServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dns/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDnsServersResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDnsServersRequest');
    }

    /**
     * 查询域名解析ip地址
     *
     * 测试域名有效性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainParseDetail($request)
    {
        return $this->listDomainParseDetailWithHttpInfo($request);
    }

    public function listDomainParseDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain/parse/{domain_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['domainName'] !== null) {
            $pathParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainParseDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainParseDetailRequest');
    }

    /**
     * 查询域名组列表
     *
     * 查询域名组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainSets($request)
    {
        return $this->listDomainSetsWithHttpInfo($request);
    }

    public function listDomainSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['domainSetType'] !== null) {
            $queryParams['domain_set_type'] = $localVarParams['domainSetType'];
        }
        if ($localVarParams['configStatus'] !== null) {
            $queryParams['config_status'] = $localVarParams['configStatus'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainSetsRequest');
    }

    /**
     * 获取域名组下域名列表
     *
     * 获取域名组下域名列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomains($request)
    {
        return $this->listDomainsWithHttpInfo($request);
    }

    public function listDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/domains/{domain_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_Id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['domainSetId'] !== null) {
            $pathParams['domain_set_id'] = $localVarParams['domainSetId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainsRequest');
    }

    /**
     * 获取东西向防火墙信息
     *
     * 获取东西向防火墙信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEastWestFirewall($request)
    {
        return $this->listEastWestFirewallWithHttpInfo($request);
    }

    public function listEastWestFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEastWestFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEastWestFirewallRequest');
    }

    /**
     * 查询防火墙详细信息
     *
     * 查询防火墙实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFirewallDetail($request)
    {
        return $this->listFirewallDetailWithHttpInfo($request);
    }

    public function listFirewallDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallDetailRequest');
    }

    /**
     * 查询防火墙列表
     *
     * 查询防火墙列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFirewallList($request)
    {
        return $this->listFirewallListWithHttpInfo($request);
    }

    public function listFirewallListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewalls/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallListRequest');
    }

    /**
     * 查询流日志
     *
     * 查询流日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlowLogs($request)
    {
        return $this->listFlowLogsWithHttpInfo($request);
    }

    public function listFlowLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/flow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['srcPort'] !== null) {
            $queryParams['src_port'] = $localVarParams['srcPort'];
        }
        if ($localVarParams['dstIp'] !== null) {
            $queryParams['dst_ip'] = $localVarParams['dstIp'];
        }
        if ($localVarParams['dstPort'] !== null) {
            $queryParams['dst_port'] = $localVarParams['dstPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['nextDate'] !== null) {
            $queryParams['next_date'] = $localVarParams['nextDate'];
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
        if ($localVarParams['dstHost'] !== null) {
            $queryParams['dst_host'] = $localVarParams['dstHost'];
        }
        if ($localVarParams['srcRegionName'] !== null) {
            $queryParams['src_region_name'] = $localVarParams['srcRegionName'];
        }
        if ($localVarParams['dstRegionName'] !== null) {
            $queryParams['dst_region_name'] = $localVarParams['dstRegionName'];
        }
        if ($localVarParams['srcProvinceName'] !== null) {
            $queryParams['src_province_name'] = $localVarParams['srcProvinceName'];
        }
        if ($localVarParams['dstProvinceName'] !== null) {
            $queryParams['dst_province_name'] = $localVarParams['dstProvinceName'];
        }
        if ($localVarParams['srcCityName'] !== null) {
            $queryParams['src_city_name'] = $localVarParams['srcCityName'];
        }
        if ($localVarParams['dstCityName'] !== null) {
            $queryParams['dst_city_name'] = $localVarParams['dstCityName'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFlowLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFlowLogsRequest');
    }

    /**
     * 获取CFW任务执行状态
     *
     * 获取CFW任务执行状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJob($request)
    {
        return $this->listJobWithHttpInfo($request);
    }

    public function listJobWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListJobResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListJobRequest');
    }

    /**
     * 获取日志配置
     *
     * 获取日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogConfig($request)
    {
        return $this->listLogConfigWithHttpInfo($request);
    }

    public function listLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListLogConfigRequest');
    }

    /**
     * 查询防护VPC数
     *
     * 查询防护vpc信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectedVpcs($request)
    {
        return $this->listProtectedVpcsWithHttpInfo($request);
    }

    public function listProtectedVpcsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/vpcs/protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListProtectedVpcsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListProtectedVpcsRequest');
    }

    /**
     * 查询服务成员列表
     *
     * 查询服务组成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceItems($request)
    {
        return $this->listServiceItemsWithHttpInfo($request);
    }

    public function listServiceItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['setId'] !== null) {
            $queryParams['set_id'] = $localVarParams['setId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryServiceSetType'] !== null) {
            $queryParams['query_service_set_type'] = $localVarParams['queryServiceSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceItemsRequest');
    }

    /**
     * 查询服务组详情
     *
     * 查询服务组细节
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceSetDetail($request)
    {
        return $this->listServiceSetDetailWithHttpInfo($request);
    }

    public function listServiceSetDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryServiceSetType'] !== null) {
            $queryParams['query_service_set_type'] = $localVarParams['queryServiceSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetDetailRequest');
    }

    /**
     * 获取服务组列表
     *
     * 获取服务组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceSets($request)
    {
        return $this->listServiceSetsWithHttpInfo($request);
    }

    public function listServiceSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryServiceSetType'] !== null) {
            $queryParams['query_service_set_type'] = $localVarParams['queryServiceSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetsRequest');
    }

    /**
     * 更新地址组信息
     *
     * 更新地址组信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAddressSet($request)
    {
        return $this->updateAddressSetWithHttpInfo($request);
    }

    public function updateAddressSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAddressSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAddressSetRequest');
    }

    /**
     * 更新黑白名单列表
     *
     * 更新黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBlackWhiteList($request)
    {
        return $this->updateBlackWhiteListWithHttpInfo($request);
    }

    public function updateBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list/{list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['listId'] !== null) {
            $pathParams['list_id'] = $localVarParams['listId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateBlackWhiteListRequest');
    }

    /**
     * 更新dns服务器列表
     *
     * 更新dns服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDnsServers($request)
    {
        return $this->updateDnsServersWithHttpInfo($request);
    }

    public function updateDnsServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dns/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDnsServersResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDnsServersRequest');
    }

    /**
     * 更新域名组
     *
     * 更新域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDomainSet($request)
    {
        return $this->updateDomainSetWithHttpInfo($request);
    }

    public function updateDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDomainSetRequest');
    }

    /**
     * 更新日志配置
     *
     * 更新日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogConfig($request)
    {
        return $this->updateLogConfigWithHttpInfo($request);
    }

    public function updateLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateLogConfigRequest');
    }

    /**
     * 修改服务组
     *
     * 更新服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServiceSet($request)
    {
        return $this->updateServiceSetWithHttpInfo($request);
    }

    public function updateServiceSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateServiceSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateServiceSetRequest');
    }

    /**
     * 创建ACL规则
     *
     * 创建ACL规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAclRule($request)
    {
        return $this->addAclRuleWithHttpInfo($request);
    }

    public function addAclRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAclRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAclRuleRequest');
    }

    /**
     * 批量删除Acl规则
     *
     * 批量删除Acl规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAclRules($request)
    {
        return $this->batchDeleteAclRulesWithHttpInfo($request);
    }

    public function batchDeleteAclRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAclRulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAclRulesRequest');
    }

    /**
     * 批量更新规则动作
     *
     * 批量更新规则动作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateAclRuleActions($request)
    {
        return $this->batchUpdateAclRuleActionsWithHttpInfo($request);
    }

    public function batchUpdateAclRuleActionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchUpdateAclRuleActionsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchUpdateAclRuleActionsRequest');
    }

    /**
     * 删除ACL规则
     *
     * 删除ACL规则组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAclRule($request)
    {
        return $this->deleteAclRuleWithHttpInfo($request);
    }

    public function deleteAclRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/{acl_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['aclRuleId'] !== null) {
            $pathParams['acl_rule_id'] = $localVarParams['aclRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleRequest');
    }

    /**
     * 删除规则击中次数
     *
     * 清除规则击中次数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAclRuleHitCount($request)
    {
        return $this->deleteAclRuleHitCountWithHttpInfo($request);
    }

    public function deleteAclRuleHitCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleHitCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleHitCountRequest');
    }

    /**
     * 获取规则击中次数
     *
     * 获取规则击中次数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclRuleHitCount($request)
    {
        return $this->listAclRuleHitCountWithHttpInfo($request);
    }

    public function listAclRuleHitCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRuleHitCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRuleHitCountRequest');
    }

    /**
     * 查询防护规则
     *
     * 查询防护规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclRules($request)
    {
        return $this->listAclRulesWithHttpInfo($request);
    }

    public function listAclRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['actionType'] !== null) {
            $queryParams['action_type'] = $localVarParams['actionType'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['tagsId'] !== null) {
            $queryParams['tags_id'] = $localVarParams['tagsId'];
        }
        if ($localVarParams['source'] !== null) {
            $queryParams['source'] = $localVarParams['source'];
        }
        if ($localVarParams['destination'] !== null) {
            $queryParams['destination'] = $localVarParams['destination'];
        }
        if ($localVarParams['service'] !== null) {
            $queryParams['service'] = $localVarParams['service'];
        }
        if ($localVarParams['application'] !== null) {
            $queryParams['application'] = $localVarParams['application'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRulesRequest');
    }

    /**
     * 查询规则标签
     *
     * 查询规则标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRuleAclTags($request)
    {
        return $this->listRuleAclTagsWithHttpInfo($request);
    }

    public function listRuleAclTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-acl/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListRuleAclTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListRuleAclTagsRequest');
    }

    /**
     * 更新ACL规则
     *
     * 更新ACL规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAclRule($request)
    {
        return $this->updateAclRuleWithHttpInfo($request);
    }

    public function updateAclRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/{acl_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['aclRuleId'] !== null) {
            $pathParams['acl_rule_id'] = $localVarParams['aclRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleRequest');
    }

    /**
     * ACL防护规则优先级设置
     *
     * ACL防护规则优先级设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAclRuleOrder($request)
    {
        return $this->updateAclRuleOrderWithHttpInfo($request);
    }

    public function updateAclRuleOrderWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/order/{acl_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['aclRuleId'] !== null) {
            $pathParams['acl_rule_id'] = $localVarParams['aclRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleOrderResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleOrderRequest');
    }

    /**
     * 弹性IP开启关闭
     *
     * 开启关闭EIP，客户购买EIP后首次开启EIP防护前需使用ListEips同步EIP资产，sync字段设置为1。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEipStatus($request)
    {
        return $this->changeEipStatusWithHttpInfo($request);
    }

    public function changeEipStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEipStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEipStatusRequest');
    }

    /**
     * 查询Eip个数
     *
     * 查询Eip个数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEipCount($request)
    {
        return $this->listEipCountWithHttpInfo($request);
    }

    public function listEipCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip-count/{object_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['objectId'] !== null) {
            $pathParams['object_id'] = $localVarParams['objectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipCountRequest');
    }

    /**
     * 弹性IP列表查询
     *
     * 弹性IP列表查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEips($request)
    {
        return $this->listEipsWithHttpInfo($request);
    }

    public function listEipsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eips/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['sync'] !== null) {
            $queryParams['sync'] = $localVarParams['sync'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['deviceKey'] !== null) {
            $queryParams['device_key'] = $localVarParams['deviceKey'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['fwKeyWord'] !== null) {
            $queryParams['fw_key_word'] = $localVarParams['fwKeyWord'];
        }
        if ($localVarParams['epsId'] !== null) {
            $queryParams['eps_id'] = $localVarParams['epsId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipsRequest');
    }

    /**
     * 切换防护模式
     *
     * 切换防护模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIpsProtectMode($request)
    {
        return $this->changeIpsProtectModeWithHttpInfo($request);
    }

    public function changeIpsProtectModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsProtectModeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsProtectModeRequest');
    }

    /**
     * IPS特性开关操作
     *
     * 切换开关状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIpsSwitchStatus($request)
    {
        return $this->changeIpsSwitchStatusWithHttpInfo($request);
    }

    public function changeIpsSwitchStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsSwitchStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsSwitchStatusRequest');
    }

    /**
     * 查询防护模式
     *
     * 查询防护模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpsProtectMode($request)
    {
        return $this->listIpsProtectModeWithHttpInfo($request);
    }

    public function listIpsProtectModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsProtectModeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsProtectModeRequest');
    }

    /**
     * 查询IPS特性开关状态
     *
     * 查询IPS特性开关状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpsSwitchStatus($request)
    {
        return $this->listIpsSwitchStatusWithHttpInfo($request);
    }

    public function listIpsSwitchStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsSwitchStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsSwitchStatusRequest');
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