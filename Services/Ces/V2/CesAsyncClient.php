<?php

namespace HuaweiCloud\SDK\Ces\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CesAsyncClient extends Client
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
        return new ClientBuilder(new CesAsyncClient());
    }

    /**
     * 批量增加告警规则资源
     *
     * 批量增加告警规则资源(资源分组类型的告警规则不支持)，资源分组类型的修改请使用资源分组管理相关接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAlarmRuleResourcesAsync($request)
    {
        return $this->addAlarmRuleResourcesAsyncWithHttpInfo($request);
    }
    
    public function addAlarmRuleResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/{alarm_id}/resources/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\AddAlarmRuleResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\AddAlarmRuleResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 自定义资源分组批量增加关联资源
     *
     * 给自定义资源分组,即类型为手动添加的资源分组,批量增加关联资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateResourcesAsync($request)
    {
        return $this->batchCreateResourcesAsyncWithHttpInfo($request);
    }
    
    public function batchCreateResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups/{group_id}/resources/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchCreateResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchCreateResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除告警规则
     *
     * 批量删除告警规则V2接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAlarmRulesAsync($request)
    {
        return $this->batchDeleteAlarmRulesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteAlarmRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteAlarmRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteAlarmRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除自定义告警模板
     *
     * 批量删除自定义告警模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAlarmTemplatesAsync($request)
    {
        return $this->batchDeleteAlarmTemplatesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteAlarmTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-templates/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteAlarmTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteAlarmTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除告警通知屏蔽规则
     *
     * 批量删除告警通知屏蔽规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteNotificationMasksAsync($request)
    {
        return $this->batchDeleteNotificationMasksAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteNotificationMasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notification-masks/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteNotificationMasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteNotificationMasksRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除一键告警
     *
     * 批量删除一键告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteOneClickAlarmsAsync($request)
    {
        return $this->batchDeleteOneClickAlarmsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteOneClickAlarmsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteOneClickAlarmsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteOneClickAlarmsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除资源分组
     *
     * 批量删除资源分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteResourceGroupsAsync($request)
    {
        return $this->batchDeleteResourceGroupsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteResourceGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteResourceGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteResourceGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 自定义资源分组批量删除关联资源
     *
     * 给自定义资源分组,即类型为手动添加的资源分组,批量删除关联资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteResourcesAsync($request)
    {
        return $this->batchDeleteResourcesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups/{group_id}/resources/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchDeleteResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量启停告警规则
     *
     * 批量启停告警规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchEnableAlarmRulesAsync($request)
    {
        return $this->batchEnableAlarmRulesAsyncWithHttpInfo($request);
    }
    
    public function batchEnableAlarmRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchEnableAlarmRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchEnableAlarmRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改告警通知屏蔽规则的屏蔽时间
     *
     * 批量修改告警通知屏蔽规则的屏蔽时间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateNotificationMaskTimeAsync($request)
    {
        return $this->batchUpdateNotificationMaskTimeAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateNotificationMaskTimeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notification-masks/batch-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateNotificationMaskTimeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateNotificationMaskTimeRequest',
            $asyncRequest = true);
    }

    /**
     * 批量设置告警通知屏蔽规则
     *
     * 批量设置告警通知屏蔽规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateNotificationMasksAsync($request)
    {
        return $this->batchUpdateNotificationMasksAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateNotificationMasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notification-masks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateNotificationMasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateNotificationMasksRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改一键告警关联告警规则策略的启用状态
     *
     * 批量修改一键告警关联告警规则策略的启用状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateOneClickAlarmPoliciesEnabledStateAsync($request)
    {
        return $this->batchUpdateOneClickAlarmPoliciesEnabledStateAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateOneClickAlarmPoliciesEnabledStateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms/{one_click_alarm_id}/alarms/{alarm_id}/policies/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['oneClickAlarmId'] !== null) {
            $pathParams['one_click_alarm_id'] = $localVarParams['oneClickAlarmId'];
        }
        if ($localVarParams['alarmId'] !== null) {
            $pathParams['alarm_id'] = $localVarParams['alarmId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateOneClickAlarmPoliciesEnabledStateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateOneClickAlarmPoliciesEnabledStateRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改一键告警关联告警规则的启用状态
     *
     * 批量修改一键告警关联告警规则的启用状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateOneClickAlarmsEnabledStateAsync($request)
    {
        return $this->batchUpdateOneClickAlarmsEnabledStateAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateOneClickAlarmsEnabledStateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms/{one_click_alarm_id}/alarm-rules/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['oneClickAlarmId'] !== null) {
            $pathParams['one_click_alarm_id'] = $localVarParams['oneClickAlarmId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateOneClickAlarmsEnabledStateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateOneClickAlarmsEnabledStateRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新监控视图
     *
     * 批量更新监控视图
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateWidgetsAsync($request)
    {
        return $this->batchUpdateWidgetsAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateWidgetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/widgets/batch-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateWidgetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\BatchUpdateWidgetsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建告警规则
     *
     * 创建告警规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlarmRulesAsync($request)
    {
        return $this->createAlarmRulesAsyncWithHttpInfo($request);
    }
    
    public function createAlarmRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\CreateAlarmRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\CreateAlarmRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建自定义告警模板
     *
     * 创建自定义告警模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlarmTemplateAsync($request)
    {
        return $this->createAlarmTemplateAsyncWithHttpInfo($request);
    }
    
    public function createAlarmTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\CreateAlarmTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\CreateAlarmTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/复制/批量创建监控视图到指定的监控看板
     *
     * 创建/复制/批量创建监控视图到指定的监控看板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDashboardWidgetsAsync($request)
    {
        return $this->createDashboardWidgetsAsyncWithHttpInfo($request);
    }
    
    public function createDashboardWidgetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/dashboards/{dashboard_id}/widgets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dashboardId'] !== null) {
            $pathParams['dashboard_id'] = $localVarParams['dashboardId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\CreateDashboardWidgetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\CreateDashboardWidgetsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建一键告警
     *
     * 创建一键告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOneClickAlarmAsync($request)
    {
        return $this->createOneClickAlarmAsyncWithHttpInfo($request);
    }
    
    public function createOneClickAlarmAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\CreateOneClickAlarmResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\CreateOneClickAlarmRequest',
            $asyncRequest = true);
    }

    /**
     * 创建/复制监控看板
     *
     * 创建/复制监控看板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOneDashboardAsync($request)
    {
        return $this->createOneDashboardAsyncWithHttpInfo($request);
    }
    
    public function createOneDashboardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\CreateOneDashboardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\CreateOneDashboardRequest',
            $asyncRequest = true);
    }

    /**
     * 创建资源分组
     *
     * 创建资源分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceGroupAsync($request)
    {
        return $this->createResourceGroupAsyncWithHttpInfo($request);
    }
    
    public function createResourceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\CreateResourceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\CreateResourceGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除告警规则资源
     *
     * 批量删除告警规则资源（资源分组类型的告警规则不支持），资源分组类型的修改请使用资源分组管理相关接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlarmRuleResourcesAsync($request)
    {
        return $this->deleteAlarmRuleResourcesAsyncWithHttpInfo($request);
    }
    
    public function deleteAlarmRuleResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/{alarm_id}/resources/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\DeleteAlarmRuleResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\DeleteAlarmRuleResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除监控看板
     *
     * 批量删除监控看板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDashboardsAsync($request)
    {
        return $this->deleteDashboardsAsyncWithHttpInfo($request);
    }
    
    public function deleteDashboardsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/dashboards/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\DeleteDashboardsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\DeleteDashboardsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定监控视图
     *
     * 删除指定监控视图
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOneWidgetAsync($request)
    {
        return $this->deleteOneWidgetAsyncWithHttpInfo($request);
    }
    
    public function deleteOneWidgetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/widgets/{widget_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['widgetId'] !== null) {
            $pathParams['widget_id'] = $localVarParams['widgetId'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\DeleteOneWidgetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\DeleteOneWidgetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机监控维度指标信息
     *
     * 根据ECS/BMS资源ID查询磁盘、挂载点、进程、显卡、RAID控制器维度指标信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAgentDimensionInfoAsync($request)
    {
        return $this->listAgentDimensionInfoAsyncWithHttpInfo($request);
    }
    
    public function listAgentDimensionInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/agent-dimensions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dimName'] !== null) {
            $queryParams['dim_name'] = $localVarParams['dimName'];
        }
        if ($localVarParams['dimValue'] !== null) {
            $queryParams['dim_value'] = $localVarParams['dimValue'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAgentDimensionInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAgentDimensionInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警记录列表
     *
     * 查询告警记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmHistoriesAsync($request)
    {
        return $this->listAlarmHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listAlarmHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['alarm_id'] = $localVarParams['alarmId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['level'] !== null) {
            $queryParams['level'] = $localVarParams['level'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmHistoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmHistoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警规则策略列表
     *
     * 根据告警规则ID查询策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmRulePoliciesAsync($request)
    {
        return $this->listAlarmRulePoliciesAsyncWithHttpInfo($request);
    }
    
    public function listAlarmRulePoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/{alarm_id}/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmRulePoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmRulePoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警规则资源列表
     *
     * 根据告警规则ID查询告警规则资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmRuleResourcesAsync($request)
    {
        return $this->listAlarmRuleResourcesAsyncWithHttpInfo($request);
    }
    
    public function listAlarmRuleResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/{alarm_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmRuleResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmRuleResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警规则列表
     *
     * 查询告警规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmRulesAsync($request)
    {
        return $this->listAlarmRulesAsyncWithHttpInfo($request);
    }
    
    public function listAlarmRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['alarm_id'] = $localVarParams['alarmId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警模板关联的告警规则列表
     *
     * 查询告警模板关联的告警规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmTemplateAssociationAlarmsAsync($request)
    {
        return $this->listAlarmTemplateAssociationAlarmsAsyncWithHttpInfo($request);
    }
    
    public function listAlarmTemplateAssociationAlarmsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-templates/{template_id}/association-alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmTemplateAssociationAlarmsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmTemplateAssociationAlarmsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警模板列表
     *
     * 查询告警模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmTemplatesAsync($request)
    {
        return $this->listAlarmTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listAlarmTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['dimName'] !== null) {
            $queryParams['dim_name'] = $localVarParams['dimName'];
        }
        if ($localVarParams['templateType'] !== null) {
            $queryParams['template_type'] = $localVarParams['templateType'];
        }
        if ($localVarParams['templateName'] !== null) {
            $queryParams['template_name'] = $localVarParams['templateName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListAlarmTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询CES指定项目指定资源类型标签列表
     *
     * 查询CES指定项目指定资源类型标签列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCesTargetProjectTagsAsync($request)
    {
        return $this->listCesTargetProjectTagsAsyncWithHttpInfo($request);
    }
    
    public function listCesTargetProjectTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListCesTargetProjectTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListCesTargetProjectTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询监控看板列表
     *
     * 查询监控看板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDashboardInfosAsync($request)
    {
        return $this->listDashboardInfosAsyncWithHttpInfo($request);
    }
    
    public function listDashboardInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseId'] !== null) {
            $queryParams['enterprise_id'] = $localVarParams['enterpriseId'];
        }
        if ($localVarParams['isFavorite'] !== null) {
            $queryParams['is_favorite'] = $localVarParams['isFavorite'];
        }
        if ($localVarParams['dashboardName'] !== null) {
            $queryParams['dashboard_name'] = $localVarParams['dashboardName'];
        }
        if ($localVarParams['dashboardId'] !== null) {
            $queryParams['dashboard_id'] = $localVarParams['dashboardId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListDashboardInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListDashboardInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定监控看板下的监控视图列表
     *
     * 查询指定监控看板下的监控视图列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDashboardWidgetsAsync($request)
    {
        return $this->listDashboardWidgetsAsyncWithHttpInfo($request);
    }
    
    public function listDashboardWidgetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/dashboards/{dashboard_id}/widgets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dashboardId'] !== null) {
            $pathParams['dashboard_id'] = $localVarParams['dashboardId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListDashboardWidgetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListDashboardWidgetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警通知屏蔽资源列表
     *
     * 查询告警通知屏蔽资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotificationMaskResourcesAsync($request)
    {
        return $this->listNotificationMaskResourcesAsyncWithHttpInfo($request);
    }
    
    public function listNotificationMaskResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notification-masks/{notification_mask_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['notificationMaskId'] !== null) {
            $pathParams['notification_mask_id'] = $localVarParams['notificationMaskId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListNotificationMaskResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListNotificationMaskResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警通知屏蔽列表
     *
     * 批量查询指定类型的通知屏蔽规则，目前最多支持100个通知屏蔽规则的批量查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotificationMasksAsync($request)
    {
        return $this->listNotificationMasksAsyncWithHttpInfo($request);
    }
    
    public function listNotificationMasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notification-masks/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListNotificationMasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListNotificationMasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询一键告警关联告警规则列表
     *
     * 查询一键告警关联告警规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOneClickAlarmRulesAsync($request)
    {
        return $this->listOneClickAlarmRulesAsyncWithHttpInfo($request);
    }
    
    public function listOneClickAlarmRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms/{one_click_alarm_id}/alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['oneClickAlarmId'] !== null) {
            $pathParams['one_click_alarm_id'] = $localVarParams['oneClickAlarmId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListOneClickAlarmRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListOneClickAlarmRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询一键告警列表
     *
     * 查询一键告警列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOneClickAlarmsAsync($request)
    {
        return $this->listOneClickAlarmsAsyncWithHttpInfo($request);
    }
    
    public function listOneClickAlarmsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListOneClickAlarmsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListOneClickAlarmsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源分组列表
     *
     * 查询资源分组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceGroupsAsync($request)
    {
        return $this->listResourceGroupsAsyncWithHttpInfo($request);
    }
    
    public function listResourceGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListResourceGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListResourceGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源分组下指定服务类别特定维度的资源列表
     *
     * 查询资源分组下指定服务类别特定维度的资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceGroupsServicesResourcesAsync($request)
    {
        return $this->listResourceGroupsServicesResourcesAsyncWithHttpInfo($request);
    }
    
    public function listResourceGroupsServicesResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups/{group_id}/services/{service}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dimName'] !== null) {
            $queryParams['dim_name'] = $localVarParams['dimName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['dimValue'] !== null) {
            $queryParams['dim_value'] = $localVarParams['dimValue'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['service'] !== null) {
            $pathParams['service'] = $localVarParams['service'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ListResourceGroupsServicesResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ListResourceGroupsServicesResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询告警模板详情
     *
     * 查询告警模板详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlarmTemplateAsync($request)
    {
        return $this->showAlarmTemplateAsyncWithHttpInfo($request);
    }
    
    public function showAlarmTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ShowAlarmTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ShowAlarmTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定资源分组详情
     *
     * 查询指定资源分组详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceGroupAsync($request)
    {
        return $this->showResourceGroupAsyncWithHttpInfo($request);
    }
    
    public function showResourceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ShowResourceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ShowResourceGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定监控视图信息
     *
     * 查询指定监控视图信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWidgetAsync($request)
    {
        return $this->showWidgetAsyncWithHttpInfo($request);
    }
    
    public function showWidgetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/widgets/{widget_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['widgetId'] !== null) {
            $pathParams['widget_id'] = $localVarParams['widgetId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\ShowWidgetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\ShowWidgetRequest',
            $asyncRequest = true);
    }

    /**
     * 修改告警规则告警通知信息
     *
     * 修改告警规则告警通知信息，告警策略&amp;资源请使用对应接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmNotificationsAsync($request)
    {
        return $this->updateAlarmNotificationsAsyncWithHttpInfo($request);
    }
    
    public function updateAlarmNotificationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/{alarm_id}/notifications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateAlarmNotificationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateAlarmNotificationsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改告警规则策略(全量修改)
     *
     * 修改告警规则策略(全量修改)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmRulePoliciesAsync($request)
    {
        return $this->updateAlarmRulePoliciesAsyncWithHttpInfo($request);
    }
    
    public function updateAlarmRulePoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarms/{alarm_id}/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'text/plain; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain; charset=utf-8'],
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateAlarmRulePoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateAlarmRulePoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 修改自定义告警模板
     *
     * 修改自定义告警模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmTemplateAsync($request)
    {
        return $this->updateAlarmTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateAlarmTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/alarm-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateAlarmTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateAlarmTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 修改监控看板
     *
     * 修改监控看板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDashboardAsync($request)
    {
        return $this->updateDashboardAsyncWithHttpInfo($request);
    }
    
    public function updateDashboardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/dashboards/{dashboard_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dashboardId'] !== null) {
            $pathParams['dashboard_id'] = $localVarParams['dashboardId'];
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
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateDashboardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateDashboardRequest',
            $asyncRequest = true);
    }

    /**
     * 修改告警通知屏蔽规则
     *
     * 修改告警通知屏蔽规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNotificationMaskAsync($request)
    {
        return $this->updateNotificationMaskAsyncWithHttpInfo($request);
    }
    
    public function updateNotificationMaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/notification-masks/{notification_mask_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['notificationMaskId'] !== null) {
            $pathParams['notification_mask_id'] = $localVarParams['notificationMaskId'];
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
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateNotificationMaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateNotificationMaskRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改开启状态的一键告警关联告警规则的告警通知
     *
     * 批量修改开启状态的一键告警关联告警规则的告警通知
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateOneClickAlarmNotificationsAsync($request)
    {
        return $this->updateOneClickAlarmNotificationsAsyncWithHttpInfo($request);
    }
    
    public function updateOneClickAlarmNotificationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/one-click-alarms/{one_click_alarm_id}/notifications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['oneClickAlarmId'] !== null) {
            $pathParams['one_click_alarm_id'] = $localVarParams['oneClickAlarmId'];
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
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateOneClickAlarmNotificationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateOneClickAlarmNotificationsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改资源分组
     *
     * 修改资源分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateResourceGroupAsync($request)
    {
        return $this->updateResourceGroupAsyncWithHttpInfo($request);
    }
    
    public function updateResourceGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/resource-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
                ['application/json', 'text/plain; charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateResourceGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ces\V2\Model\UpdateResourceGroupRequest',
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