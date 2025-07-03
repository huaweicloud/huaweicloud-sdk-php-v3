<?php

namespace HuaweiCloud\SDK\Apm\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ApmClient extends Client
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
        $client = new ClientBuilder(new ApmClient());
        return $client;
    }


    /**
     * 创建aksk
     *
     * 创建aksk。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAkSk($request)
    {
        return $this->createAkSkWithHttpInfo($request);
    }

    public function createAkSkWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\CreateAkSkResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\CreateAkSkRequest');
    }

    /**
     * 删除aksk
     *
     * 删除aksk。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAkSk($request)
    {
        return $this->deleteAkSkWithHttpInfo($request);
    }

    public function deleteAkSkWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/access-keys/{ak}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ak'] !== null) {
            $pathParams['ak'] = $localVarParams['ak'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAkSkResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAkSkRequest');
    }

    /**
     * 查询租户的aksk
     *
     * 查询租户的aksk。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAkSks($request)
    {
        return $this->showAkSksWithHttpInfo($request);
    }

    public function showAkSksWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowAkSksResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowAkSksRequest');
    }

    /**
     * 查询告警列表
     *
     * 查询系统中存在的告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmData($request)
    {
        return $this->listAlarmDataWithHttpInfo($request);
    }

    public function listAlarmDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/alarm/data/get-alarm-data-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListAlarmDataResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAlarmDataRequest');
    }

    /**
     * 查询告警消息列表
     *
     * 查询单个告警的触发详情与历史。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmNotify($request)
    {
        return $this->listAlarmNotifyWithHttpInfo($request);
    }

    public function listAlarmNotifyWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/alarm/data/get-alarm-notify-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListAlarmNotifyResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAlarmNotifyRequest');
    }

    /**
     * 更改实例的采集状态
     *
     * 改变指定实例的采集状态：开启和关闭。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAgentStatus($request)
    {
        return $this->changeAgentStatusWithHttpInfo($request);
    }

    public function changeAgentStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/agent-mgr/change-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ChangeAgentStatusResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ChangeAgentStatusRequest');
    }

    /**
     * 删除agent
     *
     * 删除agent
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAgent($request)
    {
        return $this->deleteAgentWithHttpInfo($request);
    }

    public function deleteAgentWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/agent-mgr/delete-agent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAgentResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAgentRequest');
    }

    /**
     * 获取ak/sk
     *
     * 获取该用户创建的ak/sk列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAkSk($request)
    {
        return $this->listAkSkWithHttpInfo($request);
    }

    public function listAkSkWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/systemmng/get-ak-sk-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListAkSkResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAkSkRequest');
    }

    /**
     * 查询应用列表
     *
     * 该接口用于查询对应用户下的应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBusiness($request)
    {
        return $this->listBusinessWithHttpInfo($request);
    }

    public function listBusinessWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/business/get-business-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListBusinessResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListBusinessRequest');
    }

    /**
     * 查询监控项列表
     *
     * 查询监控项列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvMonitorItem($request)
    {
        return $this->listEnvMonitorItemWithHttpInfo($request);
    }

    public function listEnvMonitorItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/monitor-item-mgr/get-env-monitor-item-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvMonitorItemResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvMonitorItemRequest');
    }

    /**
     * 保存监控项
     *
     * 保存监控项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveMonitorItemConfig($request)
    {
        return $this->saveMonitorItemConfigWithHttpInfo($request);
    }

    public function saveMonitorItemConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/monitor-item-mgr/save-monitor-item-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SaveMonitorItemConfigResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SaveMonitorItemConfigRequest');
    }

    /**
     * 查询应用下所有探针
     *
     * 该接口用于搜索应用下所有探针情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchAgent($request)
    {
        return $this->searchAgentWithHttpInfo($request);
    }

    public function searchAgentWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/agent-mgr/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SearchAgentResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchAgentRequest');
    }

    /**
     * 对指定区域下的组件和环境及其探针情况进行搜索
     *
     * 对指定区域下的组件和环境及其探针情况进行搜索。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchApplication($request)
    {
        return $this->searchApplicationWithHttpInfo($request);
    }

    public function searchApplicationWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/app-mgr/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SearchApplicationResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchApplicationRequest');
    }

    /**
     * 查询master地址
     *
     * 根据region名称获取该region下的master服务podlb地址信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMasterAddress($request)
    {
        return $this->showMasterAddressWithHttpInfo($request);
    }

    public function showMasterAddressWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/systemmng/get-master-address';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['regionName'] !== null) {
            $queryParams['region_name'] = $localVarParams['regionName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMasterAddressResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMasterAddressRequest');
    }

    /**
     * 根据组件id删除指定的组件
     *
     * 该接口用于删除指定的组件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApp($request)
    {
        return $this->deleteAppWithHttpInfo($request);
    }

    public function deleteAppWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/apps/delete-app/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAppResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAppRequest');
    }

    /**
     * 获取组件下的环境列表
     *
     * 获取组件下的环境列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppEnvs($request)
    {
        return $this->listAppEnvsWithHttpInfo($request);
    }

    public function listAppEnvsWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/envs/get-app-envs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListAppEnvsResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAppEnvsRequest');
    }

    /**
     * 获取组件列表
     *
     * 获取组件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApps($request)
    {
        return $this->listAppsWithHttpInfo($request);
    }

    public function listAppsWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/apps/get-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['businessId'] !== null) {
            $queryParams['business_id'] = $localVarParams['businessId'];
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListAppsResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAppsRequest');
    }

    /**
     * 查询环境标签
     *
     * 查询环境标签接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvTags($request)
    {
        return $this->listEnvTagsWithHttpInfo($request);
    }

    public function listEnvTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/tag/get-env-tag-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvTagsResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvTagsRequest');
    }

    /**
     * 查询单个应用的详情
     *
     * 查询单个应用的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBusinessDetail($request)
    {
        return $this->showBusinessDetailWithHttpInfo($request);
    }

    public function showBusinessDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/business/get-business-detail/{business_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['businessId'] !== null) {
            $pathParams['business_id'] = $localVarParams['businessId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowBusinessDetailResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowBusinessDetailRequest');
    }

    /**
     * 查询子应用详情
     *
     * 查询单个子应用详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSubBusinessDetail($request)
    {
        return $this->showSubBusinessDetailWithHttpInfo($request);
    }

    public function showSubBusinessDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/sub-business/get-sub-business-detail/{sub_business_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['subBusinessId'] !== null) {
            $pathParams['sub_business_id'] = $localVarParams['subBusinessId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSubBusinessDetailResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSubBusinessDetailRequest');
    }

    /**
     * 获取应用树
     *
     * 获取应用树。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTopologyTree($request)
    {
        return $this->showTopologyTreeWithHttpInfo($request);
    }

    public function showTopologyTreeWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/cmdb/topology-trees/get-topology-trees';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['businessId'] !== null) {
            $queryParams['business_id'] = $localVarParams['businessId'];
        }
        if ($localVarParams['envTagId'] !== null) {
            $queryParams['env_tag_id'] = $localVarParams['envTagId'];
        }
        if ($localVarParams['envKeyword'] !== null) {
            $queryParams['env_keyword'] = $localVarParams['envKeyword'];
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTopologyTreeResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTopologyTreeRequest');
    }

    /**
     * 
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlameLineTree($request)
    {
        return $this->showFlameLineTreeWithHttpInfo($request);
    }

    public function showFlameLineTreeWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/profiling/flame-line-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowFlameLineTreeResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowFlameLineTreeRequest');
    }

    /**
     * 查询开通的region
     *
     * 该接口用于查询用户开通的region信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOpenRegion($request)
    {
        return $this->listOpenRegionWithHttpInfo($request);
    }

    public function listOpenRegionWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/region/get-opened-region';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListOpenRegionResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListOpenRegionRequest');
    }

    /**
     * 查询所有的支持的region
     *
     * 查询所有的支持的region信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSupportedRegion($request)
    {
        return $this->listSupportedRegionWithHttpInfo($request);
    }

    public function listSupportedRegionWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/region/get-all-supported-region';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListSupportedRegionResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListSupportedRegionRequest');
    }

    /**
     * 查询应用全局拓扑图
     *
     * 查询应用级别全局拓扑图信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchBusinessTopology($request)
    {
        return $this->searchBusinessTopologyWithHttpInfo($request);
    }

    public function searchBusinessTopologyWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/topology/business-search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SearchBusinessTopologyResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchBusinessTopologyRequest');
    }

    /**
     * 查询组件环境拓扑图
     *
     * 查询组件环境级别全局拓扑图信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchEnvTopology($request)
    {
        return $this->searchEnvTopologyWithHttpInfo($request);
    }

    public function searchEnvTopologyWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/topology/env-search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SearchEnvTopologyResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchEnvTopologyRequest');
    }

    /**
     * 创建链路追踪应用
     *
     * 创建链路追踪应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBusiness($request)
    {
        return $this->createBusinessWithHttpInfo($request);
    }

    public function createBusinessWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/tracing/business/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\CreateBusinessResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\CreateBusinessRequest');
    }

    /**
     * 获取链路追踪应用接入地址
     *
     * 获取链路追踪应用接入地址
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccessPoint($request)
    {
        return $this->showAccessPointWithHttpInfo($request);
    }

    public function showAccessPointWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/tracing/access/get-access-point/{business_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['businessId'] !== null) {
            $pathParams['business_id'] = $localVarParams['businessId'];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowAccessPointResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowAccessPointRequest');
    }

    /**
     * 获取链路追踪应用的token
     *
     * 获取链路追踪应用的token
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showToken($request)
    {
        return $this->showTokenWithHttpInfo($request);
    }

    public function showTokenWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/tracing/business/token/{business_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['businessId'] !== null) {
            $pathParams['business_id'] = $localVarParams['businessId'];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTokenResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTokenRequest');
    }

    /**
     * 查询URL跟踪Region环境列表
     *
     * 查询所选Region下设置了URL跟踪的环境列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBusinessEnv($request)
    {
        return $this->listBusinessEnvWithHttpInfo($request);
    }

    public function listBusinessEnvWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/transaction/business-env';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListBusinessEnvResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListBusinessEnvRequest');
    }

    /**
     * 查询URL跟踪视图列表
     *
     * 查询当前被调用的URL跟踪视图列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchTransaction($request)
    {
        return $this->searchTransactionWithHttpInfo($request);
    }

    public function searchTransactionWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/transaction/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SearchTransactionResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchTransactionRequest');
    }

    /**
     * 查询URL跟踪配置列表
     *
     * 查询已配置好的URL跟踪配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchTransactionConfig($request)
    {
        return $this->searchTransactionConfigWithHttpInfo($request);
    }

    public function searchTransactionConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/transaction/transaction-config-search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\SearchTransactionConfigResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchTransactionConfigRequest');
    }

    /**
     * 查询URL跟踪视图详情
     *
     * 查询某条URL跟踪视图详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTransactionDetail($request)
    {
        return $this->showTransactionDetailWithHttpInfo($request);
    }

    public function showTransactionDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/transaction/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTransactionDetailResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTransactionDetailRequest');
    }

    /**
     * 获取实例信息列表
     *
     * 获取实例信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvInstances($request)
    {
        return $this->listEnvInstancesWithHttpInfo($request);
    }

    public function listEnvInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/mainview/get-env-instance-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvInstancesResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvInstancesRequest');
    }

    /**
     * 获取原始数据详情
     *
     * 获取原始数据详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClobDetail($request)
    {
        return $this->showClobDetailWithHttpInfo($request);
    }

    public function showClobDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/metric/get-clob-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowClobDetailResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowClobDetailRequest');
    }

    /**
     * 获取监控项信息
     *
     * 获取监控项信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnvMonitorItems($request)
    {
        return $this->showEnvMonitorItemsWithHttpInfo($request);
    }

    public function showEnvMonitorItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/mainview/get-env-monitor-item-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowEnvMonitorItemsResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowEnvMonitorItemsRequest');
    }

    /**
     * 获取event的详情
     *
     * 获取event的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEventDetail($request)
    {
        return $this->showEventDetailWithHttpInfo($request);
    }

    public function showEventDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/trace/get-event-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['trace_id'] = $localVarParams['traceId'];
        }
        if ($localVarParams['spanId'] !== null) {
            $queryParams['span_id'] = $localVarParams['spanId'];
        }
        if ($localVarParams['eventId'] !== null) {
            $queryParams['event_id'] = $localVarParams['eventId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowEventDetailResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowEventDetailRequest');
    }

    /**
     * 获取一个监控项的详情
     *
     * 获取一个监控项的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMonitorItemDetail($request)
    {
        return $this->showMonitorItemDetailWithHttpInfo($request);
    }

    public function showMonitorItemDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/apm-service/monitor-item-mgr/get-monitor-item-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['monitorItemId'] !== null) {
            $queryParams['monitor_item_id'] = $localVarParams['monitorItemId'];
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMonitorItemDetailResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMonitorItemDetailRequest');
    }

    /**
     * 查询监控项配置信息
     *
     * 查询监控项配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMonitorItemViewConfig($request)
    {
        return $this->showMonitorItemViewConfigWithHttpInfo($request);
    }

    public function showMonitorItemViewConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/config/get-monitor-item-view-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['envId'] !== null) {
            $queryParams['env_id'] = $localVarParams['envId'];
        }
        if ($localVarParams['collectorId'] !== null) {
            $queryParams['collector_id'] = $localVarParams['collectorId'];
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMonitorItemViewConfigResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMonitorItemViewConfigRequest');
    }

    /**
     * 获取原始数据表格
     *
     * 获取原始数据表格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRawTable($request)
    {
        return $this->showRawTableWithHttpInfo($request);
    }

    public function showRawTableWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/metric/raw-table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowRawTableResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowRawTableRequest');
    }

    /**
     * 查询span数据
     *
     * span数据查询接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSpanSearch($request)
    {
        return $this->showSpanSearchWithHttpInfo($request);
    }

    public function showSpanSearchWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/trace/span-search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSpanSearchResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSpanSearchRequest');
    }

    /**
     * 获取汇总表格数据
     *
     * 获取汇总表格数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSumTable($request)
    {
        return $this->showSumTableWithHttpInfo($request);
    }

    public function showSumTableWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/metric/sum-table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSumTableResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSumTableRequest');
    }

    /**
     * 调用链拓扑图
     *
     * 调用链拓扑图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTopology($request)
    {
        return $this->showTopologyWithHttpInfo($request);
    }

    public function showTopologyWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/trace/topology';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['trace_id'] = $localVarParams['traceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTopologyResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTopologyRequest');
    }

    /**
     * 获取一个trace的所有调用链数据
     *
     * 获取一个trace的所有调用链数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTraceEvents($request)
    {
        return $this->showTraceEventsWithHttpInfo($request);
    }

    public function showTraceEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/trace/get-trace-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['trace_id'] = $localVarParams['traceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTraceEventsResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTraceEventsRequest');
    }

    /**
     * 获取趋势图
     *
     * 获取趋势图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrend($request)
    {
        return $this->showTrendWithHttpInfo($request);
    }

    public function showTrendWithHttpInfo($request)
    {
        $resourcePath = '/v1/apm2/openapi/view/metric/trend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xBusinessId'] !== null) {
            $headerParams[$arr['xBusinessId']] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTrendResponse',
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTrendRequest');
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