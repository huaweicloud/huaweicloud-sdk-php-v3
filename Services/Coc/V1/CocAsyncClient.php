<?php

namespace HuaweiCloud\SDK\Coc\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CocAsyncClient extends Client
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
        $client = new ClientBuilder(new CocAsyncClient());
        return $client;
    }

    /**
     * 创建改密计划
     *
     * 创建改密计划
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPasswordChangePlanAsync($request)
    {
        return $this->createPasswordChangePlanAsyncWithHttpInfo($request);
    }
    
    public function createPasswordChangePlanAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/account-mgmt/accounts/password-change-plan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreatePasswordChangePlanResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreatePasswordChangePlanRequest',
            $asyncRequest = true);
    }

    /**
     * 主机密码重置
     *
     * 主机密码重置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetAccountPasswordAsync($request)
    {
        return $this->resetAccountPasswordAsyncWithHttpInfo($request);
    }
    
    public function resetAccountPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/account-mgmt/accounts/password/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ResetAccountPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ResetAccountPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 回写改密结果
     *
     * 回写改密结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAccountPasswordAsync($request)
    {
        return $this->updateAccountPasswordAsyncWithHttpInfo($request);
    }
    
    public function updateAccountPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/account-mgmt/accounts/password/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateAccountPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateAccountPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 批量清除告警
     *
     * 清除告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function clearAlarmAsync($request)
    {
        return $this->clearAlarmAsyncWithHttpInfo($request);
    }
    
    public function clearAlarmAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/alarm-mgmt/alarms/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ClearAlarmResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ClearAlarmRequest',
            $asyncRequest = true);
    }

    /**
     * 自动处理告警
     *
     * 自动处理告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function handleAlarmAsync($request)
    {
        return $this->handleAlarmAsyncWithHttpInfo($request);
    }
    
    public function handleAlarmAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/alarm-mgmt/alarm/{alarm_id}/auto-process';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmId'] !== null) {
            $pathParams['alarm_id'] = $localVarParams['alarmId'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\HandleAlarmResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\HandleAlarmRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警工单历史
     *
     * 查询告警工单历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmHandleHistoriesAsync($request)
    {
        return $this->listAlarmHandleHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listAlarmHandleHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/alarm-mgmt/alarm/{alarm_id}/handle-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['alarmId'] !== null) {
            $pathParams['alarm_id'] = $localVarParams['alarmId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListAlarmHandleHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListAlarmHandleHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Alarm
     *
     * Get alarm info by id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlarmAsync($request)
    {
        return $this->showAlarmAsyncWithHttpInfo($request);
    }
    
    public function showAlarmAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/alarm-mgmt/alarm/{alarm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmId'] !== null) {
            $pathParams['alarm_id'] = $localVarParams['alarmId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowAlarmResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowAlarmRequest',
            $asyncRequest = true);
    }

    /**
     * 批量告警转事件
     *
     * 批量告警转事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function transferAlarmToIncidentAsync($request)
    {
        return $this->transferAlarmToIncidentAsyncWithHttpInfo($request);
    }
    
    public function transferAlarmToIncidentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/alarm-mgmt/alarms-linked-incident';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\TransferAlarmToIncidentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\TransferAlarmToIncidentRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建应用视图
     *
     * 批量创建应用视图
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateApplicationViewAsync($request)
    {
        return $this->batchCreateApplicationViewAsyncWithHttpInfo($request);
    }
    
    public function batchCreateApplicationViewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/application-view/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequest',
            $asyncRequest = true);
    }

    /**
     * UpdateChange 更新变更单
     *
     * UpdateChange 更新变更单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateChangeAsync($request)
    {
        return $this->updateChangeAsyncWithHttpInfo($request);
    }
    
    public function updateChangeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/changes/{change_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['changeId'] !== null) {
            $pathParams['change_id'] = $localVarParams['changeId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateChangeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateChangeRequest',
            $asyncRequest = true);
    }

    /**
     * HandleIncident 处理事件单
     *
     * HandleIncident 处理事件单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function handleIncidentAsync($request)
    {
        return $this->handleIncidentAsyncWithHttpInfo($request);
    }
    
    public function handleIncidentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/incidents/{incident_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['incidentId'] !== null) {
            $pathParams['incident_id'] = $localVarParams['incidentId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\HandleIncidentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\HandleIncidentRequest',
            $asyncRequest = true);
    }

    /**
     * ListIncidents 查询事件单列表
     *
     * ListIncidents 查询事件单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIncidentsAsync($request)
    {
        return $this->listIncidentsAsyncWithHttpInfo($request);
    }
    
    public function listIncidentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/incidents/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListIncidentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListIncidentsRequest',
            $asyncRequest = true);
    }

    /**
     * ListIncidentsHistories 获取事件单历史
     *
     * ListIncidentsHistories  获取事件单历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIncidentsHistoriesAsync($request)
    {
        return $this->listIncidentsHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listIncidentsHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/incidents/{incident_id}/histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['incidentId'] !== null) {
            $pathParams['incident_id'] = $localVarParams['incidentId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListIncidentsHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListIncidentsHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * ShowIncidentTask 获取事件任务
     *
     * ShowIncidentTask 获取事件任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIncidentTaskAsync($request)
    {
        return $this->showIncidentTaskAsyncWithHttpInfo($request);
    }
    
    public function showIncidentTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/incidents/{incident_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['incidentId'] !== null) {
            $pathParams['incident_id'] = $localVarParams['incidentId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowIncidentTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowIncidentTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 获取节点合规性报告
     *
     * 分页获取节点合规性报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceCompliantAsync($request)
    {
        return $this->listInstanceCompliantAsyncWithHttpInfo($request);
    }
    
    public function listInstanceCompliantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/patch/instance/compliant';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['eip'] !== null) {
            $queryParams['eip'] = $localVarParams['eip'];
        }
        if ($localVarParams['operatingSystem'] !== null) {
            $queryParams['operating_system'] = $localVarParams['operatingSystem'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['group'] !== null) {
            $queryParams['group'] = $localVarParams['group'];
        }
        if ($localVarParams['compliantStatus'] !== null) {
            $queryParams['compliant_status'] = $localVarParams['compliantStatus'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['reportScene'] !== null) {
            $queryParams['report_scene'] = $localVarParams['reportScene'];
        }
        if ($localVarParams['cceInfoId'] !== null) {
            $queryParams['cce_info_id'] = $localVarParams['cceInfoId'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListInstanceCompliantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListInstanceCompliantRequest',
            $asyncRequest = true);
    }

    /**
     * 分页获取节点补丁详情
     *
     * 分页获取节点补丁详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstancePatchItemsAsync($request)
    {
        return $this->showInstancePatchItemsAsyncWithHttpInfo($request);
    }
    
    public function showInstancePatchItemsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/patch/instance/compliant/{instance_compliant_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['title'] !== null) {
            $queryParams['title'] = $localVarParams['title'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['patchStatus'] !== null) {
            $queryParams['patch_status'] = $localVarParams['patchStatus'];
        }
        if ($localVarParams['classification'] !== null) {
            $queryParams['classification'] = $localVarParams['classification'];
        }
        if ($localVarParams['severityLevel'] !== null) {
            $queryParams['severity_level'] = $localVarParams['severityLevel'];
        }
        if ($localVarParams['complianceLevel'] !== null) {
            $queryParams['compliance_level'] = $localVarParams['complianceLevel'];
        }
        if ($localVarParams['instanceCompliantId'] !== null) {
            $pathParams['instance_compliant_id'] = $localVarParams['instanceCompliantId'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowInstancePatchItemsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowInstancePatchItemsRequest',
            $asyncRequest = true);
    }

    /**
     * 支持用户自主接入告警数据
     *
     * 支持租户将自开发的监控系统按照标准化集成至COC，集成后告警会按照标准格式上报至COC告警中心
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createReportCustomEventAsync($request)
    {
        return $this->createReportCustomEventAsyncWithHttpInfo($request);
    }
    
    public function createReportCustomEventAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/event/huawei/custom/{integration_key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['integrationKey'] !== null) {
            $pathParams['integration_key'] = $localVarParams['integrationKey'];
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
                ['application/json; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateReportCustomEventResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateReportCustomEventRequest',
            $asyncRequest = true);
    }

    /**
     * 取消诊断任务
     *
     * 取消诊断任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelDiagnosisTaskAsync($request)
    {
        return $this->cancelDiagnosisTaskAsyncWithHttpInfo($request);
    }
    
    public function cancelDiagnosisTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks/{task_id}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CancelDiagnosisTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CancelDiagnosisTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 提交诊断任务
     *
     * 提交诊断任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDiagnosisTaskAsync($request)
    {
        return $this->createDiagnosisTaskAsyncWithHttpInfo($request);
    }
    
    public function createDiagnosisTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateDiagnosisTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateDiagnosisTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询诊断记录
     *
     * 查询诊断记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDiagnosisTasksAsync($request)
    {
        return $this->listDiagnosisTasksAsyncWithHttpInfo($request);
    }
    
    public function listDiagnosisTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['pageIndex'] !== null) {
            $queryParams['page_index'] = $localVarParams['pageIndex'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListDiagnosisTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListDiagnosisTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 重试诊断任务
     *
     * 重试诊断任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryDiagnosisTaskAsync($request)
    {
        return $this->retryDiagnosisTaskAsyncWithHttpInfo($request);
    }
    
    public function retryDiagnosisTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks/{task_id}/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\RetryDiagnosisTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\RetryDiagnosisTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定诊断记录下的指定诊断步骤的详情
     *
     * 查询指定诊断记录下的指定诊断步骤的详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDiagnosisNodeAsync($request)
    {
        return $this->showDiagnosisNodeAsyncWithHttpInfo($request);
    }
    
    public function showDiagnosisNodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks/{task_id}/node/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['code'] !== null) {
            $pathParams['code'] = $localVarParams['code'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowDiagnosisNodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowDiagnosisNodeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询批量诊断任务的结果概要
     *
     * 查询诊断任务的结果概要
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDiagnosisSummaryAsync($request)
    {
        return $this->showDiagnosisSummaryAsyncWithHttpInfo($request);
    }
    
    public function showDiagnosisSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks/{task_id}/summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowDiagnosisSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowDiagnosisSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个诊断任务详情
     *
     * 查询单个诊断任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDiagnosisTaskAsync($request)
    {
        return $this->showDiagnosisTaskAsyncWithHttpInfo($request);
    }
    
    public function showDiagnosisTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/diagnosis/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowDiagnosisTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowDiagnosisTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义作业
     *
     * 创建自定义作业
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDocumentAsync($request)
    {
        return $this->createDocumentAsyncWithHttpInfo($request);
    }
    
    public function createDocumentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除自定义作业
     *
     * 删除自定义作业
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDocumentAsync($request)
    {
        return $this->deleteDocumentAsyncWithHttpInfo($request);
    }
    
    public function deleteDocumentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/documents/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteDocumentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteDocumentRequest',
            $asyncRequest = true);
    }

    /**
     * 执行自定义作业
     *
     * 执行自定义作业
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeDocumentAsync($request)
    {
        return $this->executeDocumentAsyncWithHttpInfo($request);
    }
    
    public function executeDocumentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/documents/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义作业详情
     *
     * 查询自定义作业详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDocumentAsync($request)
    {
        return $this->getDocumentAsyncWithHttpInfo($request);
    }
    
    public function getDocumentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/documents/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['documentType'] !== null) {
            $queryParams['document_type'] = $localVarParams['documentType'];
        }
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetDocumentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetDocumentRequest',
            $asyncRequest = true);
    }

    /**
     * 获取原子能力详细
     *
     * 获取原子能力详细
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDocumentAtomicInfoAsync($request)
    {
        return $this->getDocumentAtomicInfoAsyncWithHttpInfo($request);
    }
    
    public function getDocumentAtomicInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/atomics/{atomic_unique_key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['atomicUniqueKey'] !== null) {
            $pathParams['atomic_unique_key'] = $localVarParams['atomicUniqueKey'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetDocumentAtomicInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetDocumentAtomicInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 获取原子能力列表
     *
     * 获取原子能力列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDocumentAtomicsAsync($request)
    {
        return $this->listDocumentAtomicsAsyncWithHttpInfo($request);
    }
    
    public function listDocumentAtomicsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/atomics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListDocumentAtomicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListDocumentAtomicsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询自定义作业列表
     *
     * 查询自定义作业列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDocumentsAsync($request)
    {
        return $this->listDocumentsAsyncWithHttpInfo($request);
    }
    
    public function listDocumentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['documentType'] !== null) {
            $queryParams['document_type'] = $localVarParams['documentType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListDocumentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListDocumentsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改自定义作业
     *
     * 修改自定义作业
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDocumentAsync($request)
    {
        return $this->updateDocumentAsyncWithHttpInfo($request);
    }
    
    public function updateDocumentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/documents/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateDocumentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateDocumentRequest',
            $asyncRequest = true);
    }

    /**
     * Prometheus事件接入
     *
     * Prometheus事件接入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createReportPrometheusEventAsync($request)
    {
        return $this->createReportPrometheusEventAsyncWithHttpInfo($request);
    }
    
    public function createReportPrometheusEventAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/event/prometheus/{integration_key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['integrationKey'] !== null) {
            $pathParams['integration_key'] = $localVarParams['integrationKey'];
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
                ['application/json; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateReportPrometheusEventResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateReportPrometheusEventRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业工单详情
     *
     * 查询作业工单详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getExecutionAsync($request)
    {
        return $this->getExecutionAsyncWithHttpInfo($request);
    }
    
    public function getExecutionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/executions/{execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetExecutionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetExecutionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询工单步骤批次实例
     *
     * 查询工单步骤批次实例，如脚本分批操作里的ECS实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExecutionInstancesAsync($request)
    {
        return $this->listExecutionInstancesAsyncWithHttpInfo($request);
    }
    
    public function listExecutionInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/executions/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['executionStepId'] !== null) {
            $queryParams['execution_step_id'] = $localVarParams['executionStepId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询工单步骤详情
     *
     * 查询工单步骤详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExecutionStepsAsync($request)
    {
        return $this->listExecutionStepsAsyncWithHttpInfo($request);
    }
    
    public function listExecutionStepsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/executions/{execution_id}/steps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['executionStepIdList'] !== null) {
            $queryParams['execution_step_id_list'] = $localVarParams['executionStepIdList'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionStepsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionStepsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询作业工单列表
     *
     * 查询作业工单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExecutionsAsync($request)
    {
        return $this->listExecutionsAsyncWithHttpInfo($request);
    }
    
    public function listExecutionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['documentName'] !== null) {
            $queryParams['document_name'] = $localVarParams['documentName'];
        }
        if ($localVarParams['documentId'] !== null) {
            $queryParams['document_id'] = $localVarParams['documentId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['excludeChildExecutions'] !== null) {
            $queryParams['exclude_child_executions'] = $localVarParams['excludeChildExecutions'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionsRequest',
            $asyncRequest = true);
    }

    /**
     * 操作工单
     *
     * 操作工单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function operateExecutionAsync($request)
    {
        return $this->operateExecutionAsyncWithHttpInfo($request);
    }
    
    public function operateExecutionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\OperateExecutionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\OperateExecutionRequest',
            $asyncRequest = true);
    }

    /**
     * 搜索变更工单子单
     *
     * 搜索变更工单子单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubTicketsAsync($request)
    {
        return $this->listSubTicketsAsyncWithHttpInfo($request);
    }
    
    public function listSubTicketsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/tickets/{ticket_id}/list-sub-tickets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['ticketId'] !== null) {
            $pathParams['ticket_id'] = $localVarParams['ticketId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListSubTicketsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListSubTicketsRequest',
            $asyncRequest = true);
    }

    /**
     * 工单操作
     *
     * 变更单审批、撤销以及问题单的所有操作均通过此接口完成。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeTicketActionAsync($request)
    {
        return $this->executeTicketActionAsyncWithHttpInfo($request);
    }
    
    public function executeTicketActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ExecuteTicketActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ExecuteTicketActionRequest',
            $asyncRequest = true);
    }

    /**
     * 搜索工单历史
     *
     * List Histories
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTicketOperationHistoriesAsync($request)
    {
        return $this->listTicketOperationHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listTicketOperationHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/list-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListTicketOperationHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListTicketOperationHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 搜索工单
     *
     * List ticket
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTicketsAsync($request)
    {
        return $this->listTicketsAsyncWithHttpInfo($request);
    }
    
    public function listTicketsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/list-tickets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListTicketsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListTicketsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Ticket
     *
     * Get Ticket info by id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTicketInfoAsync($request)
    {
        return $this->showTicketInfoAsyncWithHttpInfo($request);
    }
    
    public function showTicketInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/tickets/{ticket_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['ticketId'] !== null) {
            $pathParams['ticket_id'] = $localVarParams['ticketId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowTicketInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowTicketInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 删除变更单
     *
     * 删除变更单，当变更单为撤销状态下，变更单可进行删除操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTicketInfoAsync($request)
    {
        return $this->deleteTicketInfoAsyncWithHttpInfo($request);
    }
    
    public function deleteTicketInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/tickets/{ticket_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['ticketId'] !== null) {
            $pathParams['ticket_id'] = $localVarParams['ticketId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteTicketInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteTicketInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 变更单状态修改
     *
     * 变更单状态修改，请求路径中的ticket_type为固定值change，且ticket_id传递变更单单号。此接口可操作变更开始、变更结束、变更取消和添加变更结果操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTicketAsync($request)
    {
        return $this->updateTicketAsyncWithHttpInfo($request);
    }
    
    public function updateTicketAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/tickets/{ticket_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['ticketId'] !== null) {
            $pathParams['ticket_id'] = $localVarParams['ticketId'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateTicketResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateTicketRequest',
            $asyncRequest = true);
    }

    /**
     * CreateExternalIncident 创建事件单
     *
     * CreateExternalIncident 创建事件单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCocIncidentAsync($request)
    {
        return $this->createCocIncidentAsyncWithHttpInfo($request);
    }
    
    public function createCocIncidentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/incident/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateCocIncidentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateCocIncidentRequest',
            $asyncRequest = true);
    }

    /**
     * 上传附件
     *
     * 上传附件，创建事件单的场景下，如需上传附件，需要先调用该接口将文件上传到obs。上传成功时，该接口将返回文档唯一id。支持文件类型：.jpg,.png,.docx,.txt,.pdf，且文本大小不超10M
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createExternalCocAttachmentAsync($request)
    {
        return $this->createExternalCocAttachmentAsyncWithHttpInfo($request);
    }
    
    public function createExternalCocAttachmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/incident/attachments';
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateExternalCocAttachmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateExternalCocAttachmentRequest',
            $asyncRequest = true);
    }

    /**
     * HandleCocIncident处理事件单
     *
     * HandleCocIncident 处理事件单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function handleCocIncidentAsync($request)
    {
        return $this->handleCocIncidentAsyncWithHttpInfo($request);
    }
    
    public function handleCocIncidentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/incident/handle';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\HandleCocIncidentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\HandleCocIncidentRequest',
            $asyncRequest = true);
    }

    /**
     * GetCocTicketOperationHistories 获取事件单历史
     *
     * ListCocTicketOperationHistories  获取事件单历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCocTicketOperationHistoriesAsync($request)
    {
        return $this->listCocTicketOperationHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listCocTicketOperationHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/{ticket_type}/list-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListCocTicketOperationHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListCocTicketOperationHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询简易版事件单列表
     *
     * 该接口可分页查询到事件单列表信息，分页参数为limit与offset。该接口不支持对事件单进行除分页参数外的条件过滤，且返回的列表字段相对简单，只有事件单标题、事件单单号、描述信息、工单状态、事件级别、企业项目ID、事件单来源、创建人及责任人。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIncidentSimpleTicketsAsync($request)
    {
        return $this->listIncidentSimpleTicketsAsyncWithHttpInfo($request);
    }
    
    public function listIncidentSimpleTicketsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/incident-tickets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListIncidentSimpleTicketsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListIncidentSimpleTicketsRequest',
            $asyncRequest = true);
    }

    /**
     * GetCocIncidentDetail 获取事件单详细
     *
     * ShowCocIncidentDetail  获取事件单详细
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCocIncidentDetailAsync($request)
    {
        return $this->showCocIncidentDetailAsyncWithHttpInfo($request);
    }
    
    public function showCocIncidentDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/incident/{incident_num}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['incidentNum'] !== null) {
            $pathParams['incident_num'] = $localVarParams['incidentNum'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowCocIncidentDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowCocIncidentDetailRequest',
            $asyncRequest = true);
    }

    /**
     * CreateExternalIssues 创建问题单
     *
     * CreateExternalIssues 创建问题单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCocIssuesAsync($request)
    {
        return $this->createCocIssuesAsyncWithHttpInfo($request);
    }
    
    public function createCocIssuesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/issues/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateCocIssuesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateCocIssuesRequest',
            $asyncRequest = true);
    }

    /**
     * GetCocIssuesDetail 获取事件单详细
     *
     * ShowCocIssuesDetail  获取事件单详细
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCocIssuesDetailAsync($request)
    {
        return $this->showCocIssuesDetailAsyncWithHttpInfo($request);
    }
    
    public function showCocIssuesDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/issues/{ticket_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketId'] !== null) {
            $pathParams['ticket_id'] = $localVarParams['ticketId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowCocIssuesDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowCocIssuesDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 上传附件
     *
     * 上传附件，创建工单（事件单、变更单、问题单）的场景下，如需上传附件，需要先调用该接口将文件上传到obs。上传成功时，该接口将返回文档唯一id。支持文件类型：.jpg,.png,.docx,.txt,.pdf，且文本大小不超10M。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAttachmentAsync($request)
    {
        return $this->createAttachmentAsyncWithHttpInfo($request);
    }
    
    public function createAttachmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/attachments';
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
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateAttachmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateAttachmentRequest',
            $asyncRequest = true);
    }

    /**
     * 新建工单
     *
     * 创建变更单或问题单的接口，通过路径参数ticket_type区分需要创建的工单类型。ticket_type为change表示要创建变更单，ticket_type为issues_mgmt为创建问题单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTicketAsync($request)
    {
        return $this->createTicketAsyncWithHttpInfo($request);
    }
    
    public function createTicketAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/tickets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['body'] !== null) {
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateTicketResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateTicketRequest',
            $asyncRequest = true);
    }

    /**
     * 下载附件
     *
     * 附件下载操作需基于已上传的附件资源。上传附件时，需调用/v1/{ticket_type}/attachments接口完成上传；成功上传后，可从接口响应中获取doc_id参数。下载附件时，凭借此doc_id再次调用/v1/{ticket_type}/attachments接口，即可获取已上传的对应附件资源，实现附件全生命周期管理。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadAttachmentAsync($request)
    {
        return $this->downloadAttachmentAsyncWithHttpInfo($request);
    }
    
    public function downloadAttachmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{ticket_type}/attachments/{doc_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ticketType'] !== null) {
            $pathParams['ticket_type'] = $localVarParams['ticketType'];
        }
        if ($localVarParams['docId'] !== null) {
            $pathParams['doc_id'] = $localVarParams['docId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\DownloadAttachmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\DownloadAttachmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询COC可授权单列表
     *
     * 查询COC可授权单列表（变更单号、事件单号、warroom和告警）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuthorizableTicketsExternalAsync($request)
    {
        return $this->listAuthorizableTicketsExternalAsyncWithHttpInfo($request);
    }
    
    public function listAuthorizableTicketsExternalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/list/authorizable-tickets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListAuthorizableTicketsExternalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListAuthorizableTicketsExternalRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户各种资源总数
     *
     * 查询用户各种资源总数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countMultiResourcesAsync($request)
    {
        return $this->countMultiResourcesAsyncWithHttpInfo($request);
    }
    
    public function countMultiResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/multi-count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vendor'] !== null) {
            $queryParams['vendor'] = $localVarParams['vendor'];
        }
        if ($localVarParams['viewId'] !== null) {
            $queryParams['view_id'] = $localVarParams['viewId'];
        }
        if ($localVarParams['isResource'] !== null) {
            $queryParams['is_resource'] = $localVarParams['isResource'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CountMultiResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CountMultiResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户所有资源
     *
     * 查询用户所有资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceAsync($request)
    {
        return $this->listResourceAsyncWithHttpInfo($request);
    }
    
    public function listResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['provider'] !== null) {
            $queryParams['provider'] = $localVarParams['provider'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['resourceIdList'] !== null) {
            $queryParams['resource_id_list'] = $localVarParams['resourceIdList'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['azId'] !== null) {
            $queryParams['az_id'] = $localVarParams['azId'];
        }
        if ($localVarParams['ipType'] !== null) {
            $queryParams['ip_type'] = $localVarParams['ipType'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['agentState'] !== null) {
            $queryParams['agent_state'] = $localVarParams['agentState'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['tagKey'] !== null) {
            $queryParams['tag_key'] = $localVarParams['tagKey'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $queryParams['component_id'] = $localVarParams['componentId'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $queryParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['cceClusterId'] !== null) {
            $queryParams['cce_cluster_id'] = $localVarParams['cceClusterId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['epId'] !== null) {
            $queryParams['ep_id'] = $localVarParams['epId'];
        }
        if ($localVarParams['isDelegated'] !== null) {
            $queryParams['is_delegated'] = $localVarParams['isDelegated'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 从RMS同步用户所有资源
     *
     * 从RMS同步用户所有资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncResourceAsync($request)
    {
        return $this->syncResourceAsyncWithHttpInfo($request);
    }
    
    public function syncResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resources/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\SyncResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\SyncResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源标签列表
     *
     * 查询资源标签列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScriptResourceTagsAsync($request)
    {
        return $this->listScriptResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function listScriptResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/script/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新资源标签
     *
     * 更新资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateResourceTagsAsync($request)
    {
        return $this->updateResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function updateResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/script/{resource_type}/{resource_id}/tags/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 新建定时运维
     *
     * Create Scheduled Task
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScheduledTaskAsync($request)
    {
        return $this->createScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function createScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除ScheduledTask
     *
     * Delete scheduled task by id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScheduledTaskAsync($request)
    {
        return $this->deleteScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 禁用ScheduledTask
     *
     * Disable scheduled task by id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableScheduledTaskAsync($request)
    {
        return $this->disableScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function disableScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task/{task_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\DisableScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\DisableScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 启用ScheduledTask
     *
     * Enable scheduled task by id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableScheduledTaskAsync($request)
    {
        return $this->enableScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function enableScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task/{task_id}/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\EnableScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\EnableScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询ScheduledTask列表
     *
     * Get ScheduledTask infos
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScheduledTaskAsync($request)
    {
        return $this->listScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function listScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['taskName'] !== null) {
            $queryParams['task_name'] = $localVarParams['taskName'];
        }
        if ($localVarParams['scheduledType'] !== null) {
            $queryParams['scheduled_type'] = $localVarParams['scheduledType'];
        }
        if ($localVarParams['taskType'] !== null) {
            $queryParams['task_type'] = $localVarParams['taskType'];
        }
        if ($localVarParams['associatedTaskType'] !== null) {
            $queryParams['associated_task_type'] = $localVarParams['associatedTaskType'];
        }
        if ($localVarParams['riskLevel'] !== null) {
            $queryParams['risk_level'] = $localVarParams['riskLevel'];
        }
        if ($localVarParams['createdBy'] !== null) {
            $queryParams['created_by'] = $localVarParams['createdBy'];
        }
        if ($localVarParams['reviewer'] !== null) {
            $queryParams['reviewer'] = $localVarParams['reviewer'];
        }
        if ($localVarParams['reviewerUserName'] !== null) {
            $queryParams['reviewer_user_name'] = $localVarParams['reviewerUserName'];
        }
        if ($localVarParams['approveStatus'] !== null) {
            $queryParams['approve_status'] = $localVarParams['approveStatus'];
        }
        if ($localVarParams['lastExecutionStatus'] !== null) {
            $queryParams['last_execution_status'] = $localVarParams['lastExecutionStatus'];
        }
        if ($localVarParams['lastExecutionStartTime'] !== null) {
            $queryParams['last_execution_start_time'] = $localVarParams['lastExecutionStartTime'];
        }
        if ($localVarParams['lastExecutionEndTime'] !== null) {
            $queryParams['last_execution_end_time'] = $localVarParams['lastExecutionEndTime'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询定时运维历史记录
     *
     * get scheduled task history list
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScheduledTaskHistoryAsync($request)
    {
        return $this->listScheduledTaskHistoryAsyncWithHttpInfo($request);
    }
    
    public function listScheduledTaskHistoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['startedStartTime'] !== null) {
            $queryParams['started_start_time'] = $localVarParams['startedStartTime'];
        }
        if ($localVarParams['startedEndTime'] !== null) {
            $queryParams['started_end_time'] = $localVarParams['startedEndTime'];
        }
        if ($localVarParams['finishedStartTime'] !== null) {
            $queryParams['finished_start_time'] = $localVarParams['finishedStartTime'];
        }
        if ($localVarParams['finishedEndTime'] !== null) {
            $queryParams['finished_end_time'] = $localVarParams['finishedEndTime'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListScheduledTaskHistoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListScheduledTaskHistoryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询ScheduledTask
     *
     * Get ScheduledTask info by id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showScheduledTaskAsync($request)
    {
        return $this->showScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function showScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ShowScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ShowScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 修改ScheduledTask
     *
     * Update ScheduledTask
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateScheduledTaskAsync($request)
    {
        return $this->updateScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function updateScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/schedule/task/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 展示批次详情
     *
     * 查询：批次详情，分页获取批次中的实例列表。
     * 过滤条件：分页参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getScriptJobBatchAsync($request)
    {
        return $this->getScriptJobBatchAsyncWithHttpInfo($request);
    }
    
    public function getScriptJobBatchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/script/orders/{execute_uuid}/batches/{batch_index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['batchIndex'] !== null) {
            $pathParams['batch_index'] = $localVarParams['batchIndex'];
        }
        if ($localVarParams['executeUuid'] !== null) {
            $pathParams['execute_uuid'] = $localVarParams['executeUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptJobBatchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptJobBatchRequest',
            $asyncRequest = true);
    }

    /**
     * 展示脚本工单基本信息
     *
     * 查询执行：基本信息
     * 执行类型、执行名称、创建人、创建时间、结束时间、执行状态、标签（脚本id，脚本名，执行脚本参数，执行用户，超时时长、成功率阈值）
     * 
     * 不同的任务类型消费标签中的不同key
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getScriptJobInfoAsync($request)
    {
        return $this->getScriptJobInfoAsyncWithHttpInfo($request);
    }
    
    public function getScriptJobInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/script/orders/{execute_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['executeUuid'] !== null) {
            $pathParams['execute_uuid'] = $localVarParams['executeUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptJobInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptJobInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 展示实例状态统计信息
     *
     * 查询：实例状态统计信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getScriptJobStatisticsAsync($request)
    {
        return $this->getScriptJobStatisticsAsyncWithHttpInfo($request);
    }
    
    public function getScriptJobStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/script/orders/{execute_uuid}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['executeUuid'] !== null) {
            $pathParams['execute_uuid'] = $localVarParams['executeUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptJobStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptJobStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 展示批次列表
     *
     * 查询：批次列表
     * 返回：批次index、批次标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScriptJobBatchesAsync($request)
    {
        return $this->listScriptJobBatchesAsyncWithHttpInfo($request);
    }
    
    public function listScriptJobBatchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/script/orders/{execute_uuid}/batches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['executeUuid'] !== null) {
            $pathParams['execute_uuid'] = $localVarParams['executeUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptJobBatchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptJobBatchesRequest',
            $asyncRequest = true);
    }

    /**
     * 展示工单列表
     *
     * 查询作业工单列表，分页查询
     * 过滤：创建时间开始，创建时间结束、创建人
     * 返回：id、脚本名称、区域、创建人、创建时间、结束时间、总耗时、状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScriptJobsAsync($request)
    {
        return $this->listScriptJobsAsyncWithHttpInfo($request);
    }
    
    public function listScriptJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/script/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 操作脚本工单
     *
     * 操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function operateScriptJobAsync($request)
    {
        return $this->operateScriptJobAsyncWithHttpInfo($request);
    }
    
    public function operateScriptJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/script/orders/{execute_uuid}/operation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['executeUuid'] !== null) {
            $pathParams['execute_uuid'] = $localVarParams['executeUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\OperateScriptJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\OperateScriptJobRequest',
            $asyncRequest = true);
    }

    /**
     * 审批待审批的脚本
     *
     * 功能：审批脚本。
     * 约束条件：只有创建脚本填写了审批人，脚本为待审批状态才能审批。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptScriptAsync($request)
    {
        return $this->acceptScriptAsyncWithHttpInfo($request);
    }
    
    public function acceptScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts/{script_uuid}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\AcceptScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\AcceptScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 评估脚本风险等级
     *
     * 根据作业内容，对作业评估风险，返回相关分析的结果和信息，结果仅供参考。
     * 高危命令指影响系统或服务的正常运行，或造成系统特殊文件被恶意删除或修改命令。 高危命令检测通过校验规则正则匹配脚本内容中是否包含高危命令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkScriptRiskAsync($request)
    {
        return $this->checkScriptRiskAsyncWithHttpInfo($request);
    }
    
    public function checkScriptRiskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/analyze-job';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CheckScriptRiskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CheckScriptRiskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建脚本
     *
     * 创建作业脚本：自定义脚本
     * - 脚本有标签属性，表示是高危脚本。创建时候不需要对脚本进行是否是高危的二次校验。
     * - 进行租户隔离；北向接口创建的脚本，审批人字段不填写，默认不需要审批
     * - 约束条件：
     * - 脚本名称：同一租户下，脚本名称不能重复，最大字符64个字符，支持中文+字母+数字+下划线。
     * - 脚本内容最大100kb。
     * - 脚本参数个数最多20个。
     * - 脚本描述：最大256个字符。
     * - 单个参数的参数名称 64个字符，只支持字母+数字+下划线。
     * - 单个参数的值最大1024个字符，正则表达式如下：^((?!\\.{2,})[a-zA-Z0-9_\\-/\\.\\*\\x20\\?:\&quot;,&#x3D;+@\\\\\\[\\{\\]\\}])*$。
     * - 审批人最多支持5人。
     * - 脚本输出的日志总量只支持1MB。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScriptAsync($request)
    {
        return $this->createScriptAsyncWithHttpInfo($request);
    }
    
    public function createScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 删除自定义脚本
     *
     * 删除作业脚本：自定义脚本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScriptAsync($request)
    {
        return $this->deleteScriptAsyncWithHttpInfo($request);
    }
    
    public function deleteScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts/{script_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\DeleteScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 执行自定义脚本
     *
     * 执行脚本
     * 
     * 脚本入参、超时时间、执行用户、资源受限
     * 脚本入参支持20个。
     * 单次下发的机器支持200个。
     * 单次批次内机器数量最大10个。
     * 最大批次数量为20批。
     * 脚本输出的日志总量只支持1MB。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeScriptAsync($request)
    {
        return $this->executeScriptAsyncWithHttpInfo($request);
    }
    
    public function executeScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts/{script_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ExecuteScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ExecuteScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 获取自定义脚本详情
     *
     * 获取脚本详情
     * 约束条件：
     * 只能查询自定义脚本详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getScriptAsync($request)
    {
        return $this->getScriptAsyncWithHttpInfo($request);
    }
    
    public function getScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts/{script_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 获取自动分批结果
     *
     * 根据分批策略获取分批结果，只支持自动分批：
     * 规则如下：
     * 1.单个批次的所有实例必须属于同一个区域；
     * * 2.单个批次的所有实例必须属于同一个可用区；
     * * 3.单个批次的所有实例必须属于同一个应用；
     * * 4.单个批次内同一分组下的实例不超过50%（除分组下仅以一个实例的情况外）；
     * * 5.前三批每批节点数量不超过10。
     * * 6.每批次实例数量不超过10。
     * 
     * 总机器数量为200。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstancesBatchAsync($request)
    {
        return $this->listInstancesBatchAsyncWithHttpInfo($request);
    }
    
    public function listInstancesBatchAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/batches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListInstancesBatchResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListInstancesBatchRequest',
            $asyncRequest = true);
    }

    /**
     * 查询脚本列表
     *
     * 作业脚本列表：自定义脚本
     * 
     * limit最大为100
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScriptsAsync($request)
    {
        return $this->listScriptsAsyncWithHttpInfo($request);
    }
    
    public function listScriptsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['creator'] !== null) {
            $queryParams['creator'] = $localVarParams['creator'];
        }
        if ($localVarParams['riskLevel'] !== null) {
            $queryParams['risk_level'] = $localVarParams['riskLevel'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListScriptsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改脚本
     *
     * 修改作业脚本：自定义脚本
     * 约束条件：
     * 脚本名称：同一租户下，脚本名称不能重复，最大字符64个字符，支持中文+字母+数字+下划线。
     * 脚本内容最大4096个字符。
     * 脚本参数个数最多20个。
     * 脚本描述：最大256个字符。
     * 单个参数的参数名称 64个字符，只支持字母+数字+下划线。
     * 单个参数的值最大1024个字符，正则表达式如下：^((?!.{2,})[a-zA-Z0-9_-/.*\\x20?:\&quot;,&#x3D;+@\\[{]}])*$。
     * 修改的脚本如果有审批人，在修改之后，需要再次选择审批人，查询审批
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateScriptAsync($request)
    {
        return $this->updateScriptAsyncWithHttpInfo($request);
    }
    
    public function updateScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/scripts/{script_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\UpdateScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 执行公共脚本
     *
     * 执行公共脚本
     * 脚本入参、超时时间、执行用户、资源受限
     * 脚本入参支持20个。
     * 单次下发的机器支持200个。
     * 单次批次内机器数量最大10个。
     * 最大批次数量为20批。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executePublicScriptAsync($request)
    {
        return $this->executePublicScriptAsyncWithHttpInfo($request);
    }
    
    public function executePublicScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/public-scripts/{script_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ExecutePublicScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ExecutePublicScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 展示公共脚本详情
     *
     * 展示公共脚本详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getPublicScriptAsync($request)
    {
        return $this->getPublicScriptAsyncWithHttpInfo($request);
    }
    
    public function getPublicScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/public-scripts/{script_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
        }
        if ($localVarParams['scriptUuid'] !== null) {
            $pathParams['script_uuid'] = $localVarParams['scriptUuid'];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\GetPublicScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\GetPublicScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 获取公共脚本列表
     *
     * 获取公共脚本列表，分页逻辑：采用limit+marker方式，提高分页效率。用自增id作为marker参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublicScriptsAsync($request)
    {
        return $this->listPublicScriptsAsyncWithHttpInfo($request);
    }
    
    public function listPublicScriptsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/job/public-scripts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['riskLevel'] !== null) {
            $queryParams['risk_level'] = $localVarParams['riskLevel'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xUserProfile'] !== null) {
            $headerParams['x_user_profile'] = $localVarParams['xUserProfile'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListPublicScriptsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListPublicScriptsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建租户区WarRoom
     *
     * 创建租户区WarRoom
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWarRoomAsync($request)
    {
        return $this->createWarRoomAsyncWithHttpInfo($request);
    }
    
    public function createWarRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/warrooms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\CreateWarRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\CreateWarRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户区WarRoom信息列表
     *
     * 查询租户区WarRoom信息列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWarRoomsAsync($request)
    {
        return $this->listWarRoomsAsyncWithHttpInfo($request);
    }
    
    public function listWarRoomsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/external/warrooms/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Coc\V1\Model\ListWarRoomsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Coc\V1\Model\ListWarRoomsRequest',
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