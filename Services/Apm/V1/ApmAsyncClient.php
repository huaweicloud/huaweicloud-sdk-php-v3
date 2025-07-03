<?php

namespace HuaweiCloud\SDK\Apm\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ApmAsyncClient extends Client
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
        $client = new ClientBuilder(new ApmAsyncClient());
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
    public function createAkSkAsync($request)
    {
        return $this->createAkSkAsyncWithHttpInfo($request);
    }
    
    public function createAkSkAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\CreateAkSkRequest',
            $asyncRequest = true);
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
    public function deleteAkSkAsync($request)
    {
        return $this->deleteAkSkAsyncWithHttpInfo($request);
    }
    
    public function deleteAkSkAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAkSkRequest',
            $asyncRequest = true);
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
    public function showAkSksAsync($request)
    {
        return $this->showAkSksAsyncWithHttpInfo($request);
    }
    
    public function showAkSksAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowAkSksRequest',
            $asyncRequest = true);
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
    public function listAlarmDataAsync($request)
    {
        return $this->listAlarmDataAsyncWithHttpInfo($request);
    }
    
    public function listAlarmDataAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAlarmDataRequest',
            $asyncRequest = true);
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
    public function listAlarmNotifyAsync($request)
    {
        return $this->listAlarmNotifyAsyncWithHttpInfo($request);
    }
    
    public function listAlarmNotifyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAlarmNotifyRequest',
            $asyncRequest = true);
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
    public function changeAgentStatusAsync($request)
    {
        return $this->changeAgentStatusAsyncWithHttpInfo($request);
    }
    
    public function changeAgentStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ChangeAgentStatusRequest',
            $asyncRequest = true);
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
    public function deleteAgentAsync($request)
    {
        return $this->deleteAgentAsyncWithHttpInfo($request);
    }
    
    public function deleteAgentAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAgentRequest',
            $asyncRequest = true);
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
    public function listAkSkAsync($request)
    {
        return $this->listAkSkAsyncWithHttpInfo($request);
    }
    
    public function listAkSkAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAkSkRequest',
            $asyncRequest = true);
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
    public function listBusinessAsync($request)
    {
        return $this->listBusinessAsyncWithHttpInfo($request);
    }
    
    public function listBusinessAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListBusinessRequest',
            $asyncRequest = true);
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
    public function listEnvMonitorItemAsync($request)
    {
        return $this->listEnvMonitorItemAsyncWithHttpInfo($request);
    }
    
    public function listEnvMonitorItemAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvMonitorItemRequest',
            $asyncRequest = true);
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
    public function saveMonitorItemConfigAsync($request)
    {
        return $this->saveMonitorItemConfigAsyncWithHttpInfo($request);
    }
    
    public function saveMonitorItemConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SaveMonitorItemConfigRequest',
            $asyncRequest = true);
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
    public function searchAgentAsync($request)
    {
        return $this->searchAgentAsyncWithHttpInfo($request);
    }
    
    public function searchAgentAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchAgentRequest',
            $asyncRequest = true);
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
    public function searchApplicationAsync($request)
    {
        return $this->searchApplicationAsyncWithHttpInfo($request);
    }
    
    public function searchApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchApplicationRequest',
            $asyncRequest = true);
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
    public function showMasterAddressAsync($request)
    {
        return $this->showMasterAddressAsyncWithHttpInfo($request);
    }
    
    public function showMasterAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMasterAddressRequest',
            $asyncRequest = true);
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
    public function deleteAppAsync($request)
    {
        return $this->deleteAppAsyncWithHttpInfo($request);
    }
    
    public function deleteAppAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\DeleteAppRequest',
            $asyncRequest = true);
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
    public function listAppEnvsAsync($request)
    {
        return $this->listAppEnvsAsyncWithHttpInfo($request);
    }
    
    public function listAppEnvsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAppEnvsRequest',
            $asyncRequest = true);
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
    public function listAppsAsync($request)
    {
        return $this->listAppsAsyncWithHttpInfo($request);
    }
    
    public function listAppsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListAppsRequest',
            $asyncRequest = true);
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
    public function listEnvTagsAsync($request)
    {
        return $this->listEnvTagsAsyncWithHttpInfo($request);
    }
    
    public function listEnvTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvTagsRequest',
            $asyncRequest = true);
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
    public function showBusinessDetailAsync($request)
    {
        return $this->showBusinessDetailAsyncWithHttpInfo($request);
    }
    
    public function showBusinessDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowBusinessDetailRequest',
            $asyncRequest = true);
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
    public function showSubBusinessDetailAsync($request)
    {
        return $this->showSubBusinessDetailAsyncWithHttpInfo($request);
    }
    
    public function showSubBusinessDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSubBusinessDetailRequest',
            $asyncRequest = true);
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
    public function showTopologyTreeAsync($request)
    {
        return $this->showTopologyTreeAsyncWithHttpInfo($request);
    }
    
    public function showTopologyTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTopologyTreeRequest',
            $asyncRequest = true);
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
    public function showFlameLineTreeAsync($request)
    {
        return $this->showFlameLineTreeAsyncWithHttpInfo($request);
    }
    
    public function showFlameLineTreeAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowFlameLineTreeRequest',
            $asyncRequest = true);
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
    public function listOpenRegionAsync($request)
    {
        return $this->listOpenRegionAsyncWithHttpInfo($request);
    }
    
    public function listOpenRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListOpenRegionRequest',
            $asyncRequest = true);
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
    public function listSupportedRegionAsync($request)
    {
        return $this->listSupportedRegionAsyncWithHttpInfo($request);
    }
    
    public function listSupportedRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListSupportedRegionRequest',
            $asyncRequest = true);
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
    public function searchBusinessTopologyAsync($request)
    {
        return $this->searchBusinessTopologyAsyncWithHttpInfo($request);
    }
    
    public function searchBusinessTopologyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchBusinessTopologyRequest',
            $asyncRequest = true);
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
    public function searchEnvTopologyAsync($request)
    {
        return $this->searchEnvTopologyAsyncWithHttpInfo($request);
    }
    
    public function searchEnvTopologyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchEnvTopologyRequest',
            $asyncRequest = true);
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
    public function createBusinessAsync($request)
    {
        return $this->createBusinessAsyncWithHttpInfo($request);
    }
    
    public function createBusinessAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\CreateBusinessRequest',
            $asyncRequest = true);
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
    public function showAccessPointAsync($request)
    {
        return $this->showAccessPointAsyncWithHttpInfo($request);
    }
    
    public function showAccessPointAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowAccessPointRequest',
            $asyncRequest = true);
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
    public function showTokenAsync($request)
    {
        return $this->showTokenAsyncWithHttpInfo($request);
    }
    
    public function showTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTokenRequest',
            $asyncRequest = true);
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
    public function listBusinessEnvAsync($request)
    {
        return $this->listBusinessEnvAsyncWithHttpInfo($request);
    }
    
    public function listBusinessEnvAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListBusinessEnvRequest',
            $asyncRequest = true);
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
    public function searchTransactionAsync($request)
    {
        return $this->searchTransactionAsyncWithHttpInfo($request);
    }
    
    public function searchTransactionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchTransactionRequest',
            $asyncRequest = true);
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
    public function searchTransactionConfigAsync($request)
    {
        return $this->searchTransactionConfigAsyncWithHttpInfo($request);
    }
    
    public function searchTransactionConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\SearchTransactionConfigRequest',
            $asyncRequest = true);
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
    public function showTransactionDetailAsync($request)
    {
        return $this->showTransactionDetailAsyncWithHttpInfo($request);
    }
    
    public function showTransactionDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTransactionDetailRequest',
            $asyncRequest = true);
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
    public function listEnvInstancesAsync($request)
    {
        return $this->listEnvInstancesAsyncWithHttpInfo($request);
    }
    
    public function listEnvInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ListEnvInstancesRequest',
            $asyncRequest = true);
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
    public function showClobDetailAsync($request)
    {
        return $this->showClobDetailAsyncWithHttpInfo($request);
    }
    
    public function showClobDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowClobDetailRequest',
            $asyncRequest = true);
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
    public function showEnvMonitorItemsAsync($request)
    {
        return $this->showEnvMonitorItemsAsyncWithHttpInfo($request);
    }
    
    public function showEnvMonitorItemsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowEnvMonitorItemsRequest',
            $asyncRequest = true);
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
    public function showEventDetailAsync($request)
    {
        return $this->showEventDetailAsyncWithHttpInfo($request);
    }
    
    public function showEventDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowEventDetailRequest',
            $asyncRequest = true);
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
    public function showMonitorItemDetailAsync($request)
    {
        return $this->showMonitorItemDetailAsyncWithHttpInfo($request);
    }
    
    public function showMonitorItemDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMonitorItemDetailRequest',
            $asyncRequest = true);
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
    public function showMonitorItemViewConfigAsync($request)
    {
        return $this->showMonitorItemViewConfigAsyncWithHttpInfo($request);
    }
    
    public function showMonitorItemViewConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowMonitorItemViewConfigRequest',
            $asyncRequest = true);
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
    public function showRawTableAsync($request)
    {
        return $this->showRawTableAsyncWithHttpInfo($request);
    }
    
    public function showRawTableAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowRawTableRequest',
            $asyncRequest = true);
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
    public function showSpanSearchAsync($request)
    {
        return $this->showSpanSearchAsyncWithHttpInfo($request);
    }
    
    public function showSpanSearchAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSpanSearchRequest',
            $asyncRequest = true);
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
    public function showSumTableAsync($request)
    {
        return $this->showSumTableAsyncWithHttpInfo($request);
    }
    
    public function showSumTableAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowSumTableRequest',
            $asyncRequest = true);
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
    public function showTopologyAsync($request)
    {
        return $this->showTopologyAsyncWithHttpInfo($request);
    }
    
    public function showTopologyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTopologyRequest',
            $asyncRequest = true);
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
    public function showTraceEventsAsync($request)
    {
        return $this->showTraceEventsAsyncWithHttpInfo($request);
    }
    
    public function showTraceEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTraceEventsRequest',
            $asyncRequest = true);
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
    public function showTrendAsync($request)
    {
        return $this->showTrendAsyncWithHttpInfo($request);
    }
    
    public function showTrendAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_business_id'] = $localVarParams['xBusinessId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Apm\V1\Model\ShowTrendRequest',
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