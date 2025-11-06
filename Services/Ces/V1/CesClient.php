<?php

namespace HuaweiCloud\SDK\Ces\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CesClient extends Client
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
        $client = new ClientBuilder(new CesClient());
        return $client;
    }


    /**
     * 批量查询监控数据
     *
     * 批量查询指定时间范围内指定指标的指定粒度的监控数据，目前最多支持500指标的批量查询。 对于不同的period取值和查询的指标数量，默认的最大查询区间(to-from)不同。 规则为\&quot;指标数量*(to-from)/监控周期&lt;&#x3D;3000\&quot;，若超出阈值，会自动调整from以满足规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchListMetricData($request)
    {
        return $this->batchListMetricDataWithHttpInfo($request);
    }

    public function batchListMetricDataWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/batch-query-metric-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\BatchListMetricDataResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\BatchListMetricDataRequest');
    }

    /**
     * 创建告警规则（V1）
     *
     * 创建一条告警规则。创建告警规则V1接口只支持配置单资源单策略规则，建议使用“[创建告警规则（推荐）](CreateAlarmRules.xml)”与前端功能配套使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlarm($request)
    {
        return $this->createAlarmWithHttpInfo($request);
    }

    public function createAlarmWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmRequest');
    }

    /**
     * 创建自定义告警模板
     *
     * 创建自定义告警模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlarmTemplate($request)
    {
        return $this->createAlarmTemplateWithHttpInfo($request);
    }

    public function createAlarmTemplateWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarm-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\CreateAlarmTemplateRequest');
    }

    /**
     * 上报事件
     *
     * 上报自定义事件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEvents($request)
    {
        return $this->createEventsWithHttpInfo($request);
    }

    public function createEventsWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\CreateEventsResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\CreateEventsRequest');
    }

    /**
     * 添加监控数据
     *
     * 添加一条或多条指标监控数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMetricData($request)
    {
        return $this->createMetricDataWithHttpInfo($request);
    }

    public function createMetricDataWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/metric-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\CreateMetricDataResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\CreateMetricDataRequest');
    }

    /**
     * 创建资源分组
     *
     * 创建资源分组，资源分组支持将各类资源按照业务集中进行分组管理，可以从分组角度查看监控与告警信息，以提升运维效率。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceGroup($request)
    {
        return $this->createResourceGroupWithHttpInfo($request);
    }

    public function createResourceGroupWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/resource-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\CreateResourceGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\CreateResourceGroupRequest');
    }

    /**
     * 删除告警规则
     *
     * 删除一条告警规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlarm($request)
    {
        return $this->deleteAlarmWithHttpInfo($request);
    }

    public function deleteAlarmWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarms/{alarm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\DeleteAlarmResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\DeleteAlarmRequest');
    }

    /**
     * 删除自定义告警模板
     *
     * 根据ID删除自定义告警模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlarmTemplate($request)
    {
        return $this->deleteAlarmTemplateWithHttpInfo($request);
    }

    public function deleteAlarmTemplateWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarm-template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\DeleteAlarmTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\DeleteAlarmTemplateRequest');
    }

    /**
     * 删除资源分组
     *
     * 删除一条资源分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceGroup($request)
    {
        return $this->deleteResourceGroupWithHttpInfo($request);
    }

    public function deleteResourceGroupWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/resource-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\DeleteResourceGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\DeleteResourceGroupRequest');
    }

    /**
     * 查询告警历史
     *
     * 查询告警历史列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmHistories($request)
    {
        return $this->listAlarmHistoriesWithHttpInfo($request);
    }

    public function listAlarmHistoriesWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarm-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['alarmId'] !== null) {
            $queryParams['alarm_id'] = $localVarParams['alarmId'];
        }
        if ($localVarParams['alarmName'] !== null) {
            $queryParams['alarm_name'] = $localVarParams['alarmName'];
        }
        if ($localVarParams['alarmStatus'] !== null) {
            $queryParams['alarm_status'] = $localVarParams['alarmStatus'];
        }
        if ($localVarParams['alarmLevel'] !== null) {
            $queryParams['alarm_level'] = $localVarParams['alarmLevel'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmHistoriesResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmHistoriesRequest');
    }

    /**
     * 查询自定义告警模板列表
     *
     * 查询自定义告警模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmTemplates($request)
    {
        return $this->listAlarmTemplatesWithHttpInfo($request);
    }

    public function listAlarmTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarm-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmTemplateId'] !== null) {
            $queryParams['alarmTemplateId'] = $localVarParams['alarmTemplateId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['dname'] !== null) {
            $queryParams['dname'] = $localVarParams['dname'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmTemplatesRequest');
    }

    /**
     * 查询告警规则列表（V1）
     *
     * 查询告警规则列表，可以指定分页条件限制结果数量，可以指定排序规则。告警规则V1接口只支持配置单资源单策略规则，建议使用“[查询告警规则列表（推荐）](CreateAlarmRules.xml)”与前端功能配套使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarms($request)
    {
        return $this->listAlarmsWithHttpInfo($request);
    }

    public function listAlarmsWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmsResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmsRequest');
    }

    /**
     * 查询某一事件监控详情
     *
     * 根据事件监控名称，查询该事件发生的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventDetail($request)
    {
        return $this->listEventDetailWithHttpInfo($request);
    }

    public function listEventDetailWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/event/{event_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['subEventType'] !== null) {
            $queryParams['sub_event_type'] = $localVarParams['subEventType'];
        }
        if ($localVarParams['eventSource'] !== null) {
            $queryParams['event_source'] = $localVarParams['eventSource'];
        }
        if ($localVarParams['eventLevel'] !== null) {
            $queryParams['event_level'] = $localVarParams['eventLevel'];
        }
        if ($localVarParams['eventUser'] !== null) {
            $queryParams['event_user'] = $localVarParams['eventUser'];
        }
        if ($localVarParams['eventState'] !== null) {
            $queryParams['event_state'] = $localVarParams['eventState'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['eventName'] !== null) {
            $pathParams['event_name'] = $localVarParams['eventName'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListEventDetailResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListEventDetailRequest');
    }

    /**
     * 查询事件监控列表
     *
     * 查询事件监控列表，包括系统事件和自定义事件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEvents($request)
    {
        return $this->listEventsWithHttpInfo($request);
    }

    public function listEventsWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['subEventType'] !== null) {
            $queryParams['sub_event_type'] = $localVarParams['subEventType'];
        }
        if ($localVarParams['eventName'] !== null) {
            $queryParams['event_name'] = $localVarParams['eventName'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListEventsResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListEventsRequest');
    }

    /**
     * 查询指标列表
     *
     * 查询系统当前可监控指标列表，可以指定指标命名空间、指标名称、维度、排序方式，起始记录和最大记录条数过滤查询结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetrics($request)
    {
        return $this->listMetricsWithHttpInfo($request);
    }

    public function listMetricsWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dim0'] !== null) {
            $queryParams['dim.0'] = $localVarParams['dim0'];
        }
        if ($localVarParams['dim1'] !== null) {
            $queryParams['dim.1'] = $localVarParams['dim1'];
        }
        if ($localVarParams['dim2'] !== null) {
            $queryParams['dim.2'] = $localVarParams['dim2'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['metricName'] !== null) {
            $queryParams['metric_name'] = $localVarParams['metricName'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListMetricsResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListMetricsRequest');
    }

    /**
     * 查询所有资源分组
     *
     * 查询所创建的所有资源分组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceGroup($request)
    {
        return $this->listResourceGroupWithHttpInfo($request);
    }

    public function listResourceGroupWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/resource-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ListResourceGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ListResourceGroupRequest');
    }

    /**
     * 查询单条告警规则信息
     *
     * 根据告警ID查询告警规则信息。告警规则V1接口只支持配置单资源单策略规则，建议使用“[查询告警规则列表（推荐）](ListAlarmRules.xml)”、“[查询告警规则资源列表](ListAlarmRuleResources.xml)”与前端功能配套使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlarm($request)
    {
        return $this->showAlarmWithHttpInfo($request);
    }

    public function showAlarmWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarms/{alarm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ShowAlarmResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ShowAlarmRequest');
    }

    /**
     * 查询主机配置数据
     *
     * 查询指定时间范围指定事件类型的主机配置数据，可以通过参数指定需要查询的数据维度。注意：该接口提供给HANA场景下SAP Monitor查询主机配置数据，其他场景下查不到主机配置数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEventData($request)
    {
        return $this->showEventDataWithHttpInfo($request);
    }

    public function showEventDataWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/event-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['dim0'] !== null) {
            $queryParams['dim.0'] = $localVarParams['dim0'];
        }
        if ($localVarParams['dim1'] !== null) {
            $queryParams['dim.1'] = $localVarParams['dim1'];
        }
        if ($localVarParams['dim2'] !== null) {
            $queryParams['dim.2'] = $localVarParams['dim2'];
        }
        if ($localVarParams['dim3'] !== null) {
            $queryParams['dim.3'] = $localVarParams['dim3'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ShowEventDataResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ShowEventDataRequest');
    }

    /**
     * 查询监控数据
     *
     * 查询指定时间范围指定指标的指定粒度的监控数据，可以通过参数指定需要查询的数据维度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMetricData($request)
    {
        return $this->showMetricDataWithHttpInfo($request);
    }

    public function showMetricDataWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/metric-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['metricName'] !== null) {
            $queryParams['metric_name'] = $localVarParams['metricName'];
        }
        if ($localVarParams['dim0'] !== null) {
            $queryParams['dim.0'] = $localVarParams['dim0'];
        }
        if ($localVarParams['dim1'] !== null) {
            $queryParams['dim.1'] = $localVarParams['dim1'];
        }
        if ($localVarParams['dim2'] !== null) {
            $queryParams['dim.2'] = $localVarParams['dim2'];
        }
        if ($localVarParams['dim3'] !== null) {
            $queryParams['dim.3'] = $localVarParams['dim3'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ShowMetricDataResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ShowMetricDataRequest');
    }

    /**
     * 查询配额
     *
     * 查询用户可以创建的资源配额总数及当前使用量，当前仅有告警规则一种资源类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotas($request)
    {
        return $this->showQuotasWithHttpInfo($request);
    }

    public function showQuotasWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ShowQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ShowQuotasRequest');
    }

    /**
     * 查询资源分组下的资源
     *
     * 根据资源分组ID查询资源分组下的资源。此接口已过时，建议使用v2接口 “[查询资源分组下指定服务类别特定维度的资源列表](ListResourceGroupsServicesResources.xml)”
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceGroup($request)
    {
        return $this->showResourceGroupWithHttpInfo($request);
    }

    public function showResourceGroupWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/resource-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['dname'] !== null) {
            $queryParams['dname'] = $localVarParams['dname'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\ShowResourceGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\ShowResourceGroupRequest');
    }

    /**
     * 修改告警规则
     *
     * 修改告警规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarm($request)
    {
        return $this->updateAlarmWithHttpInfo($request);
    }

    public function updateAlarmWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarms/{alarm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateAlarmResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateAlarmRequest');
    }

    /**
     * 启停告警规则
     *
     * 启动或停止一条告警规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmAction($request)
    {
        return $this->updateAlarmActionWithHttpInfo($request);
    }

    public function updateAlarmActionWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarms/{alarm_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateAlarmActionResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateAlarmActionRequest');
    }

    /**
     * 更新自定义告警模板
     *
     * 更新自定义告警模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmTemplate($request)
    {
        return $this->updateAlarmTemplateWithHttpInfo($request);
    }

    public function updateAlarmTemplateWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/alarm-template/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateAlarmTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateAlarmTemplateRequest');
    }

    /**
     * 更新资源分组
     *
     * 更新资源分组，资源分组支持将各类资源按照业务集中进行分组管理，可以从分组角度查看监控与告警信息，以提升运维效率。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateResourceGroup($request)
    {
        return $this->updateResourceGroupWithHttpInfo($request);
    }

    public function updateResourceGroupWithHttpInfo($request)
    {
        $resourcePath = '/V1.0/{project_id}/resource-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateResourceGroupResponse',
            $requestType='\HuaweiCloud\SDK\Ces\V1\Model\UpdateResourceGroupRequest');
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