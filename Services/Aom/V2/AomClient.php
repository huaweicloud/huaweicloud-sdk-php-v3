<?php

namespace HuaweiCloud\SDK\Aom\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class AomClient extends Client
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
        return new ClientBuilder(new AomClient());
    }


    /**
     * 新增告警行动规则
     *
     * 新增告警行动规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addActionRule($request)
    {
        return $this->addActionRuleWithHttpInfo($request);
    }

    public function addActionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/action-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\AddActionRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\AddActionRuleRequest');
    }

    /**
     * 添加阈值规则
     *
     * 该接口用于添加一条阈值规则。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAlarmRule($request)
    {
        return $this->addAlarmRuleWithHttpInfo($request);
    }

    public function addAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\AddAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\AddAlarmRuleRequest');
    }

    /**
     * 新增一条事件类告警规则
     *
     * 新增一条事件类告警规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addEvent2alarmRule($request)
    {
        return $this->addEvent2alarmRuleWithHttpInfo($request);
    }

    public function addEvent2alarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/event2alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\AddEvent2alarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\AddEvent2alarmRuleRequest');
    }

    /**
     * 添加监控数据
     *
     * 该接口用于向服务端添加一条或多条监控数据。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addMetricData($request)
    {
        return $this->addMetricDataWithHttpInfo($request);
    }

    public function addMetricDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ams/report/metricdata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\AddMetricDataResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\AddMetricDataRequest');
    }

    /**
     * 新增静默规则
     *
     * 新增静默规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addMuteRules($request)
    {
        return $this->addMuteRulesWithHttpInfo($request);
    }

    public function addMuteRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/mute-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\AddMuteRulesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\AddMuteRulesRequest');
    }

    /**
     * 添加或修改服务发现规则
     *
     * 该接口用于添加或修改一条或多条服务发现规则。同一projectid下可添加的规则上限为100条。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addOrUpdateServiceDiscoveryRules($request)
    {
        return $this->addOrUpdateServiceDiscoveryRulesWithHttpInfo($request);
    }

    public function addOrUpdateServiceDiscoveryRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/inv/servicediscoveryrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\AddOrUpdateServiceDiscoveryRulesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\AddOrUpdateServiceDiscoveryRulesRequest');
    }

    /**
     * 统计事件告警信息
     *
     * 该接口用于分段统计指定条件下的事件、告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countEvents($request)
    {
        return $this->countEventsWithHttpInfo($request);
    }

    public function countEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/events/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\CountEventsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\CountEventsRequest');
    }

    /**
     * 删除告警行动规则
     *
     * 删除告警行动规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteActionRule($request)
    {
        return $this->deleteActionRuleWithHttpInfo($request);
    }

    public function deleteActionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/action-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteActionRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteActionRuleRequest');
    }

    /**
     * 删除阈值规则
     *
     * 该接口用于删除阈值规则。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlarmRule($request)
    {
        return $this->deleteAlarmRuleWithHttpInfo($request);
    }

    public function deleteAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-rules/{alarm_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmRuleId'] !== null) {
            $pathParams['alarm_rule_id'] = $localVarParams['alarmRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteAlarmRuleRequest');
    }

    /**
     * 批量删除阈值规则
     *
     * 批量删除阈值规则[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlarmRules($request)
    {
        return $this->deleteAlarmRulesWithHttpInfo($request);
    }

    public function deleteAlarmRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-rules/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteAlarmRulesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteAlarmRulesRequest');
    }

    /**
     * 删除事件类告警规则
     *
     * 删除一条事件类告警规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEvent2alarmRule($request)
    {
        return $this->deleteEvent2alarmRuleWithHttpInfo($request);
    }

    public function deleteEvent2alarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/event2alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteEvent2alarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteEvent2alarmRuleRequest');
    }

    /**
     * 删除静默规则
     *
     * 删除静默规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMuteRules($request)
    {
        return $this->deleteMuteRulesWithHttpInfo($request);
    }

    public function deleteMuteRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/mute-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteMuteRulesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteMuteRulesRequest');
    }

    /**
     * 删除服务发现规则
     *
     * 该接口用于删除服务发现规则。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteserviceDiscoveryRules($request)
    {
        return $this->deleteserviceDiscoveryRulesWithHttpInfo($request);
    }

    public function deleteserviceDiscoveryRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/inv/servicediscoveryrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appRulesIds'] !== null) {
            $queryParams['appRulesIds'] = $localVarParams['appRulesIds'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteserviceDiscoveryRulesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeleteserviceDiscoveryRulesRequest');
    }

    /**
     * 获取告警行动规则列表
     *
     * 获取告警行动规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listActionRule($request)
    {
        return $this->listActionRuleWithHttpInfo($request);
    }

    public function listActionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/action-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListActionRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListActionRuleRequest');
    }

    /**
     * 查询集群主机安装的ICAgent信息
     *
     * 该接口用于查询集群主机安装的ICAgent信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAgents($request)
    {
        return $this->listAgentsWithHttpInfo($request);
    }

    public function listAgentsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/{cluster_id}/{namespace}/agents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListAgentsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListAgentsRequest');
    }

    /**
     * 查询阈值规则列表
     *
     * 该接口用于查询阈值规则列表。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmRule($request)
    {
        return $this->listAlarmRuleWithHttpInfo($request);
    }

    public function listAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListAlarmRuleRequest');
    }

    /**
     * 查询事件类告警规则列表
     *
     * 查询事件类告警规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEvent2alarmRule($request)
    {
        return $this->listEvent2alarmRuleWithHttpInfo($request);
    }

    public function listEvent2alarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/event2alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListEvent2alarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListEvent2alarmRuleRequest');
    }

    /**
     * 查询事件告警信息
     *
     * 该接口用于查询对应用户的事件、告警。
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
        $resourcePath = '/v2/{project_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListEventsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListEventsRequest');
    }

    /**
     * 查询日志
     *
     * 该接口用于查询不同维度(例如集群、IP、应用等)下的日志内容，支持分页查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogItems($request)
    {
        return $this->listLogItemsWithHttpInfo($request);
    }

    public function listLogItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/als/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListLogItemsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListLogItemsRequest');
    }

    /**
     * 查询指标
     *
     * 该接口用于查询系统当前可监控的指标列表，可以指定指标命名空间、指标名称、维度、所属资源的编号（格式为：resType_resId），分页查询的起始位置和返回的最大记录条数。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetricItems($request)
    {
        return $this->listMetricItemsWithHttpInfo($request);
    }

    public function listMetricItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ams/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListMetricItemsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListMetricItemsRequest');
    }

    /**
     * 获取静默规则列表
     *
     * 获取静默规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMuteRule($request)
    {
        return $this->listMuteRuleWithHttpInfo($request);
    }

    public function listMuteRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/mute-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListMuteRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListMuteRuleRequest');
    }

    /**
     * 获取告警发送结果
     *
     * 获取告警发送结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotifiedHistories($request)
    {
        return $this->listNotifiedHistoriesWithHttpInfo($request);
    }

    public function listNotifiedHistoriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-notified-histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventSn'] !== null) {
            $queryParams['event_sn'] = $localVarParams['eventSn'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListNotifiedHistoriesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListNotifiedHistoriesRequest');
    }

    /**
     * 查询aom2.0相关云服务授权信息
     *
     * 该接口用于查询aom2.0相关云服务授权信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissions($request)
    {
        return $this->listPermissionsWithHttpInfo($request);
    }

    public function listPermissionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/auth/grant';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListPermissionsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListPermissionsRequest');
    }

    /**
     * 查询时序数据
     *
     * 该接口用于查询指定时间范围内的监控时序数据，可以通过参数指定需要查询的数据维度，数据周期等。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSample($request)
    {
        return $this->listSampleWithHttpInfo($request);
    }

    public function listSampleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/samples';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fillValue'] !== null) {
            $queryParams['fill_value'] = $localVarParams['fillValue'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListSampleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListSampleRequest');
    }

    /**
     * 查询时间序列
     *
     * 该接口用于查询系统当前可监控的时间序列列表，可以指定时间序列命名空间、名称、维度、所属资源的编号（格式为：resType_resId），分页查询的起始位置和返回的最大记录条数。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSeries($request)
    {
        return $this->listSeriesWithHttpInfo($request);
    }

    public function listSeriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/series';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListSeriesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListSeriesRequest');
    }

    /**
     * 查询系统中已有服务发现规则
     *
     * 该接口用于查询系统当前已存在的服务发现规则。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceDiscoveryRules($request)
    {
        return $this->listServiceDiscoveryRulesWithHttpInfo($request);
    }

    public function listServiceDiscoveryRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/inv/servicediscoveryrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListServiceDiscoveryRulesResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListServiceDiscoveryRulesRequest');
    }

    /**
     * 上报事件告警信息
     *
     * 该接口用于上报对应用户的事件、告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pushEvents($request)
    {
        return $this->pushEventsWithHttpInfo($request);
    }

    public function pushEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/push/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xEnterprisePrjectId'] !== null) {
            $headerParams[$arr['xEnterprisePrjectId']] = $localVarParams['xEnterprisePrjectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\PushEventsResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\PushEventsRequest');
    }

    /**
     * 通过规则名称获取告警行动规则
     *
     * 通过规则名称获取告警行动规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showActionRule($request)
    {
        return $this->showActionRuleWithHttpInfo($request);
    }

    public function showActionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/action-rules/{rule_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleName'] !== null) {
            $pathParams['rule_name'] = $localVarParams['ruleName'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ShowActionRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ShowActionRuleRequest');
    }

    /**
     * 查询单条阈值规则
     *
     * 该接口用于查询单条阈值规则。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlarmRule($request)
    {
        return $this->showAlarmRuleWithHttpInfo($request);
    }

    public function showAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-rules/{alarm_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['alarmRuleId'] !== null) {
            $pathParams['alarm_rule_id'] = $localVarParams['alarmRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ShowAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ShowAlarmRuleRequest');
    }

    /**
     * 查询监控数据
     *
     * 该接口用于查询指定时间范围内指标的监控数据，可以通过参数指定需要查询的数据维度，数据周期等。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMetricsData($request)
    {
        return $this->showMetricsDataWithHttpInfo($request);
    }

    public function showMetricsDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ams/metricdata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fillValue'] !== null) {
            $queryParams['fillValue'] = $localVarParams['fillValue'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ShowMetricsDataResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ShowMetricsDataRequest');
    }

    /**
     * 修改告警行动规则
     *
     * 修改告警行动规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateActionRule($request)
    {
        return $this->updateActionRuleWithHttpInfo($request);
    }

    public function updateActionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/action-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateActionRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateActionRuleRequest');
    }

    /**
     * 修改阈值规则
     *
     * 该接口用于修改一条阈值规则。[（当前接口未上线墨西哥城二、圣地亚哥、圣保罗一）](tag:hws,hws_hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmRule($request)
    {
        return $this->updateAlarmRuleWithHttpInfo($request);
    }

    public function updateAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alarm-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateAlarmRuleRequest');
    }

    /**
     * 更新事件类告警规则
     *
     * 更新事件类告警规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEventRule($request)
    {
        return $this->updateEventRuleWithHttpInfo($request);
    }

    public function updateEventRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/event2alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateEventRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateEventRuleRequest');
    }

    /**
     * 修改静默规则
     *
     * 修改静默规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMuteRule($request)
    {
        return $this->updateMuteRuleWithHttpInfo($request);
    }

    public function updateMuteRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/alert/mute-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateMuteRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\UpdateMuteRuleRequest');
    }

    /**
     * 新增Prometheus实例
     *
     * 该接口用于新增Prometheus实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPromInstance($request)
    {
        return $this->createPromInstanceWithHttpInfo($request);
    }

    public function createPromInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/prometheus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\CreatePromInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\CreatePromInstanceRequest');
    }

    /**
     * 创建Prometheus实例的预聚合规则
     *
     * 该接口用于给Prometheus实例创建预聚合规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecordingRule($request)
    {
        return $this->createRecordingRuleWithHttpInfo($request);
    }

    public function createRecordingRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/{prometheus_instance}/aom/api/v1/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['prometheusInstance'] !== null) {
            $pathParams['prometheus_instance'] = $localVarParams['prometheusInstance'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\CreateRecordingRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\CreateRecordingRuleRequest');
    }

    /**
     * 卸载托管Prometheus实例
     *
     * 该接口用于卸载托管Prometheus实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePromInstance($request)
    {
        return $this->deletePromInstanceWithHttpInfo($request);
    }

    public function deletePromInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/prometheus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['promId'] !== null) {
            $queryParams['prom_id'] = $localVarParams['promId'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\DeletePromInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\DeletePromInstanceRequest');
    }

    /**
     * 获取Prometheus实例调用凭证
     *
     * 该接口用于获取Prometheus实例调用凭证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessCode($request)
    {
        return $this->listAccessCodeWithHttpInfo($request);
    }

    public function listAccessCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/access-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListAccessCodeResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListAccessCodeRequest');
    }

    /**
     * 瞬时数据查询
     *
     * 该接口用于查询PromQL(Prometheus Query Language)在特定时间点下的计算结果。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstantQueryAomPromGet($request)
    {
        return $this->listInstantQueryAomPromGetWithHttpInfo($request);
    }

    public function listInstantQueryAomPromGetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }
        if ($localVarParams['time'] !== null) {
            $queryParams['time'] = $localVarParams['time'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListInstantQueryAomPromGetResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListInstantQueryAomPromGetRequest');
    }

    /**
     * 瞬时数据查询
     *
     * 该接口用于查询PromQL(Prometheus Query Language) 在特定时间点下的计算结果。（注：接口目前开放的region为：北京四、上海一和广州）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstantQueryAomPromPost($request)
    {
        return $this->listInstantQueryAomPromPostWithHttpInfo($request);
    }

    public function listInstantQueryAomPromPostWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }
        if ($localVarParams['time'] !== null) {
            $queryParams['time'] = $localVarParams['time'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListInstantQueryAomPromPostResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListInstantQueryAomPromPostRequest');
    }

    /**
     * 查询标签值
     *
     * 该接口用于查询带有指定标签的时间序列列表。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLabelValuesAomPromGet($request)
    {
        return $this->listLabelValuesAomPromGetWithHttpInfo($request);
    }

    public function listLabelValuesAomPromGetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/label/{label_name}/values';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['labelName'] !== null) {
            $pathParams['label_name'] = $localVarParams['labelName'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListLabelValuesAomPromGetResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListLabelValuesAomPromGetRequest');
    }

    /**
     * 获取标签名列表
     *
     * 该接口用于获取标签名列表。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLabelsAomPromGet($request)
    {
        return $this->listLabelsAomPromGetWithHttpInfo($request);
    }

    public function listLabelsAomPromGetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListLabelsAomPromGetResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListLabelsAomPromGetRequest');
    }

    /**
     * 获取标签名列表
     *
     * 该接口用于获取标签名列表。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLabelsAomPromPost($request)
    {
        return $this->listLabelsAomPromPostWithHttpInfo($request);
    }

    public function listLabelsAomPromPostWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListLabelsAomPromPostResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListLabelsAomPromPostRequest');
    }

    /**
     * 元数据查询
     *
     * 该接口用于查询序列及序列标签的元数据。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetadataAomPromGet($request)
    {
        return $this->listMetadataAomPromGetWithHttpInfo($request);
    }

    public function listMetadataAomPromGetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListMetadataAomPromGetResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListMetadataAomPromGetRequest');
    }

    /**
     * 查询Prometheus实例
     *
     * 该接口用于查询Prometheus实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPromInstance($request)
    {
        return $this->listPromInstanceWithHttpInfo($request);
    }

    public function listPromInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/prometheus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['promId'] !== null) {
            $queryParams['prom_id'] = $localVarParams['promId'];
        }
        if ($localVarParams['promType'] !== null) {
            $queryParams['prom_type'] = $localVarParams['promType'];
        }
        if ($localVarParams['cceClusterEnable'] !== null) {
            $queryParams['cce_cluster_enable'] = $localVarParams['cceClusterEnable'];
        }
        if ($localVarParams['promStatus'] !== null) {
            $queryParams['prom_status'] = $localVarParams['promStatus'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListPromInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListPromInstanceRequest');
    }

    /**
     * 区间数据查询
     *
     * 该接口用于查询PromQL(Prometheus Query Language)在一段时间返回内的计算结果。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRangeQueryAomPromGet($request)
    {
        return $this->listRangeQueryAomPromGetWithHttpInfo($request);
    }

    public function listRangeQueryAomPromGetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/query_range';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['end'] !== null) {
            $queryParams['end'] = $localVarParams['end'];
        }
        if ($localVarParams['step'] !== null) {
            $queryParams['step'] = $localVarParams['step'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListRangeQueryAomPromGetResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListRangeQueryAomPromGetRequest');
    }

    /**
     * 区间数据查询
     *
     * 该接口用于查询PromQL(Prometheus Query Language)在一段时间返回内的计算结果。（注：接口目前开放的region为：北京四、上海一和广州）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRangeQueryAomPromPost($request)
    {
        return $this->listRangeQueryAomPromPostWithHttpInfo($request);
    }

    public function listRangeQueryAomPromPostWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/aom/api/v1/query_range';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['query'] !== null) {
            $queryParams['query'] = $localVarParams['query'];
        }
        if ($localVarParams['start'] !== null) {
            $queryParams['start'] = $localVarParams['start'];
        }
        if ($localVarParams['end'] !== null) {
            $queryParams['end'] = $localVarParams['end'];
        }
        if ($localVarParams['step'] !== null) {
            $queryParams['step'] = $localVarParams['step'];
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
            $responseType='\HuaweiCloud\SDK\Aom\V2\Model\ListRangeQueryAomPromPostResponse',
            $requestType='\HuaweiCloud\SDK\Aom\V2\Model\ListRangeQueryAomPromPostRequest');
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