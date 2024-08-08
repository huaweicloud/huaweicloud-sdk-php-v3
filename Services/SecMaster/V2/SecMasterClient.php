<?php

namespace HuaweiCloud\SDK\SecMaster\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SecMasterClient extends Client
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
        $client = new ClientBuilder(new SecMasterClient());
        return $client;
    }


    /**
     * 批量查询指标结果
     *
     * 批量查询指标结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSearchMetricHits($request)
    {
        return $this->batchSearchMetricHitsWithHttpInfo($request);
    }

    public function batchSearchMetricHitsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/sa/metrics/hits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['timespan'] !== null) {
            $queryParams['timespan'] = $localVarParams['timespan'];
        }
        if ($localVarParams['cache'] !== null) {
            $queryParams['cache'] = $localVarParams['cache'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\BatchSearchMetricHitsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\BatchSearchMetricHitsRequest');
    }

    /**
     * 更新告警
     *
     * 编辑告警，根据实际修改的属性更新，未修改的列不更新
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAlert($request)
    {
        return $this->changeAlertWithHttpInfo($request);
    }

    public function changeAlertWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/alerts/{alert_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['alertId'] !== null) {
            $pathParams['alert_id'] = $localVarParams['alertId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ChangeAlertResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ChangeAlertRequest');
    }

    /**
     * 更新事件
     *
     * 编辑事件，根据实际修改的属性更新，未修改的列不更新
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIncident($request)
    {
        return $this->changeIncidentWithHttpInfo($request);
    }

    public function changeIncidentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/incidents/{incident_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ChangeIncidentResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ChangeIncidentRequest');
    }

    /**
     * 操作剧本实例
     *
     * 操作剧本实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changePlaybookInstance($request)
    {
        return $this->changePlaybookInstanceWithHttpInfo($request);
    }

    public function changePlaybookInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/instances/{instance_id}/operation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ChangePlaybookInstanceResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ChangePlaybookInstanceRequest');
    }

    /**
     * 克隆剧本及版本
     *
     * 克隆剧本及版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyPlaybookVersion($request)
    {
        return $this->copyPlaybookVersionWithHttpInfo($request);
    }

    public function copyPlaybookVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/clone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CopyPlaybookVersionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CopyPlaybookVersionRequest');
    }

    /**
     * 创建告警
     *
     * 创建告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlert($request)
    {
        return $this->createAlertWithHttpInfo($request);
    }

    public function createAlertWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/alerts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateAlertResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateAlertRequest');
    }

    /**
     * 创建告警规则
     *
     * Create alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlertRule($request)
    {
        return $this->createAlertRuleWithHttpInfo($request);
    }

    public function createAlertRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateAlertRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateAlertRuleRequest');
    }

    /**
     * 模拟告警规则
     *
     * Simulate alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlertRuleSimulation($request)
    {
        return $this->createAlertRuleSimulationWithHttpInfo($request);
    }

    public function createAlertRuleSimulationWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/simulation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateAlertRuleSimulationResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateAlertRuleSimulationRequest');
    }

    /**
     * 告警转事件
     *
     * 告警转事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBatchOrderAlerts($request)
    {
        return $this->createBatchOrderAlertsWithHttpInfo($request);
    }

    public function createBatchOrderAlertsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/alerts/batch-order';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateBatchOrderAlertsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateBatchOrderAlertsRequest');
    }

    /**
     * 关联Dataobject
     *
     * 关联Dataobject
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDataobjectRelations($request)
    {
        return $this->createDataobjectRelationsWithHttpInfo($request);
    }

    public function createDataobjectRelationsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/{dataclass_type}/{data_object_id}/{related_dataclass_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['dataclassType'] !== null) {
            $pathParams['dataclass_type'] = $localVarParams['dataclassType'];
        }
        if ($localVarParams['dataObjectId'] !== null) {
            $pathParams['data_object_id'] = $localVarParams['dataObjectId'];
        }
        if ($localVarParams['relatedDataclassType'] !== null) {
            $pathParams['related_dataclass_type'] = $localVarParams['relatedDataclassType'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateDataobjectRelationsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateDataobjectRelationsRequest');
    }

    /**
     * 创建数据空间
     *
     * 创建数据空间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDataspace($request)
    {
        return $this->createDataspaceWithHttpInfo($request);
    }

    public function createDataspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/dataspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateDataspaceResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateDataspaceRequest');
    }

    /**
     * 创建事件
     *
     * 创建事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIncident($request)
    {
        return $this->createIncidentWithHttpInfo($request);
    }

    public function createIncidentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/incidents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIncidentResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIncidentRequest');
    }

    /**
     * 创建威胁情报
     *
     * 创建威胁情报
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIndicator($request)
    {
        return $this->createIndicatorWithHttpInfo($request);
    }

    public function createIndicatorWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/indicators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorRequest');
    }

    /**
     * 创建数据管道
     *
     * 创建数据管道
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPipe($request)
    {
        return $this->createPipeWithHttpInfo($request);
    }

    public function createPipeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/pipes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePipeResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePipeRequest');
    }

    /**
     * 创建剧本
     *
     * 创建剧本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPlaybook($request)
    {
        return $this->createPlaybookWithHttpInfo($request);
    }

    public function createPlaybookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookRequest');
    }

    /**
     * 创建剧本动作
     *
     * 创建剧本动作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPlaybookAction($request)
    {
        return $this->createPlaybookActionWithHttpInfo($request);
    }

    public function createPlaybookActionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookActionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookActionRequest');
    }

    /**
     * 审核剧本
     *
     * 审核剧本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPlaybookApprove($request)
    {
        return $this->createPlaybookApproveWithHttpInfo($request);
    }

    public function createPlaybookApproveWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/approval';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookApproveResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookApproveRequest');
    }

    /**
     * 创建剧本规则
     *
     * 创建剧本规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPlaybookRule($request)
    {
        return $this->createPlaybookRuleWithHttpInfo($request);
    }

    public function createPlaybookRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookRuleRequest');
    }

    /**
     * 创建剧本版本
     *
     * 创建剧本版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPlaybookVersion($request)
    {
        return $this->createPlaybookVersionWithHttpInfo($request);
    }

    public function createPlaybookVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/{playbook_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['playbookId'] !== null) {
            $pathParams['playbook_id'] = $localVarParams['playbookId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookVersionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePlaybookVersionRequest');
    }

    /**
     * 安全云脑按需订购
     *
     * 开通安全云脑按需服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPostPaidOrder($request)
    {
        return $this->createPostPaidOrderWithHttpInfo($request);
    }

    public function createPostPaidOrderWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subscriptions/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePostPaidOrderResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreatePostPaidOrderRequest');
    }

    /**
     * 新建工作空间
     *
     * 在使用安全云脑的基线检查、告警管理、安全分析、安全编排等功能前，需要创建工作空间，它可以将资源划分为各个不同的工作场景，避免资源冗余查找不便，影响日常使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkspace($request)
    {
        return $this->createWorkspaceWithHttpInfo($request);
    }

    public function createWorkspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateWorkspaceResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\CreateWorkspaceRequest');
    }

    /**
     * 删除告警
     *
     * 删除告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlert($request)
    {
        return $this->deleteAlertWithHttpInfo($request);
    }

    public function deleteAlertWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/alerts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteAlertResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteAlertRequest');
    }

    /**
     * 删除告警规则
     *
     * Delete alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlertRule($request)
    {
        return $this->deleteAlertRuleWithHttpInfo($request);
    }

    public function deleteAlertRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteAlertRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteAlertRuleRequest');
    }

    /**
     * 取消关联Dataobject
     *
     * 取消关联Dataobject
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDataobjectRelations($request)
    {
        return $this->deleteDataobjectRelationsWithHttpInfo($request);
    }

    public function deleteDataobjectRelationsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/{dataclass_type}/{data_object_id}/{related_dataclass_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['dataclassType'] !== null) {
            $pathParams['dataclass_type'] = $localVarParams['dataclassType'];
        }
        if ($localVarParams['dataObjectId'] !== null) {
            $pathParams['data_object_id'] = $localVarParams['dataObjectId'];
        }
        if ($localVarParams['relatedDataclassType'] !== null) {
            $pathParams['related_dataclass_type'] = $localVarParams['relatedDataclassType'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteDataobjectRelationsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteDataobjectRelationsRequest');
    }

    /**
     * 删除事件
     *
     * 删除事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIncident($request)
    {
        return $this->deleteIncidentWithHttpInfo($request);
    }

    public function deleteIncidentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/incidents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteIncidentResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteIncidentRequest');
    }

    /**
     * 删除威胁情报
     *
     * 删除威胁情报
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIndicator($request)
    {
        return $this->deleteIndicatorWithHttpInfo($request);
    }

    public function deleteIndicatorWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/indicators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteIndicatorResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeleteIndicatorRequest');
    }

    /**
     * 删除剧本
     *
     * 删除剧本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePlaybook($request)
    {
        return $this->deletePlaybookWithHttpInfo($request);
    }

    public function deletePlaybookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/{playbook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['playbookId'] !== null) {
            $pathParams['playbook_id'] = $localVarParams['playbookId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookRequest');
    }

    /**
     * 删除剧本动作
     *
     * 删除剧本动作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePlaybookAction($request)
    {
        return $this->deletePlaybookActionWithHttpInfo($request);
    }

    public function deletePlaybookActionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
        }
        if ($localVarParams['actionId'] !== null) {
            $pathParams['action_id'] = $localVarParams['actionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookActionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookActionRequest');
    }

    /**
     * 删除剧本规则
     *
     * 删除剧本规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePlaybookRule($request)
    {
        return $this->deletePlaybookRuleWithHttpInfo($request);
    }

    public function deletePlaybookRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookRuleRequest');
    }

    /**
     * 删除剧本版本
     *
     * 删除剧本版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePlaybookVersion($request)
    {
        return $this->deletePlaybookVersionWithHttpInfo($request);
    }

    public function deletePlaybookVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookVersionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DeletePlaybookVersionRequest');
    }

    /**
     * 停用告警规则
     *
     * Disable alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableAlertRule($request)
    {
        return $this->disableAlertRuleWithHttpInfo($request);
    }

    public function disableAlertRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\DisableAlertRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\DisableAlertRuleRequest');
    }

    /**
     * 启用告警规则
     *
     * Enable alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableAlertRule($request)
    {
        return $this->enableAlertRuleWithHttpInfo($request);
    }

    public function enableAlertRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\EnableAlertRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\EnableAlertRuleRequest');
    }

    /**
     * 告警规则总览
     *
     * List alert rule metrics
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlertRuleMetrics($request)
    {
        return $this->listAlertRuleMetricsWithHttpInfo($request);
    }

    public function listAlertRuleMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'status']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'status'],
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRuleMetricsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRuleMetricsRequest');
    }

    /**
     * 列出告警规则模板
     *
     * List alert rule templates
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlertRuleTemplates($request)
    {
        return $this->listAlertRuleTemplatesWithHttpInfo($request);
    }

    public function listAlertRuleTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRuleTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRuleTemplatesRequest');
    }

    /**
     * 列出告警规则
     *
     * List alert rules
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlertRules($request)
    {
        return $this->listAlertRulesWithHttpInfo($request);
    }

    public function listAlertRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['pipeId'] !== null) {
            $queryParams['pipe_id'] = $localVarParams['pipeId'];
        }
        if ($localVarParams['ruleName'] !== null) {
            $queryParams['rule_name'] = $localVarParams['ruleName'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $queryParams['rule_id'] = $localVarParams['ruleId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRulesResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRulesRequest');
    }

    /**
     * 搜索告警列表
     *
     * 搜索告警列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlerts($request)
    {
        return $this->listAlertsWithHttpInfo($request);
    }

    public function listAlertsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/alerts/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertsRequest');
    }

    /**
     * 查询数据类列表
     *
     * 查询数据类列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataclass($request)
    {
        return $this->listDataclassWithHttpInfo($request);
    }

    public function listDataclassWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/dataclasses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['businessCode'] !== null) {
            $queryParams['business_code'] = $localVarParams['businessCode'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['isBuiltIn'] !== null) {
            $queryParams['is_built_in'] = $localVarParams['isBuiltIn'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListDataclassResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListDataclassRequest');
    }

    /**
     * 查询字段列表
     *
     * 查询字段列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataclassFields($request)
    {
        return $this->listDataclassFieldsWithHttpInfo($request);
    }

    public function listDataclassFieldsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/dataclasses/{dataclass_id}/fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['isBuiltIn'] !== null) {
            $queryParams['is_built_in'] = $localVarParams['isBuiltIn'];
        }
        if ($localVarParams['fieldCategory'] !== null) {
            $queryParams['field_category'] = $localVarParams['fieldCategory'];
        }
        if ($localVarParams['mapping'] !== null) {
            $queryParams['mapping'] = $localVarParams['mapping'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['dataclassId'] !== null) {
            $pathParams['dataclass_id'] = $localVarParams['dataclassId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListDataclassFieldsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListDataclassFieldsRequest');
    }

    /**
     * 查询关联Dataobject列表
     *
     * 查询关联Dataobject列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDataobjectRelations($request)
    {
        return $this->listDataobjectRelationsWithHttpInfo($request);
    }

    public function listDataobjectRelationsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/{dataclass_type}/{data_object_id}/{related_dataclass_type}/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['dataclassType'] !== null) {
            $pathParams['dataclass_type'] = $localVarParams['dataclassType'];
        }
        if ($localVarParams['dataObjectId'] !== null) {
            $pathParams['data_object_id'] = $localVarParams['dataObjectId'];
        }
        if ($localVarParams['relatedDataclassType'] !== null) {
            $pathParams['related_dataclass_type'] = $localVarParams['relatedDataclassType'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListDataobjectRelationsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListDataobjectRelationsRequest');
    }

    /**
     * 搜索事件列表
     *
     * 搜索事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIncidents($request)
    {
        return $this->listIncidentsWithHttpInfo($request);
    }

    public function listIncidentsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/incidents/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListIncidentsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListIncidentsRequest');
    }

    /**
     * 查询威胁情报列表
     *
     * 查询威胁情报列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIndicators($request)
    {
        return $this->listIndicatorsWithHttpInfo($request);
    }

    public function listIndicatorsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/indicators/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListIndicatorsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListIndicatorsRequest');
    }

    /**
     * 查询剧本动作
     *
     * 查询剧本动作列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlaybookActions($request)
    {
        return $this->listPlaybookActionsWithHttpInfo($request);
    }

    public function listPlaybookActionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookActionsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookActionsRequest');
    }

    /**
     * 查询剧本审核结果
     *
     * 查询剧本审核结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlaybookApproves($request)
    {
        return $this->listPlaybookApprovesWithHttpInfo($request);
    }

    public function listPlaybookApprovesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/approval';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['approveType'] !== null) {
            $queryParams['approve_type'] = $localVarParams['approveType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookApprovesResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookApprovesRequest');
    }

    /**
     * 查询剧本实例审计日志
     *
     * 查询剧本实例审计日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlaybookAuditLogs($request)
    {
        return $this->listPlaybookAuditLogsWithHttpInfo($request);
    }

    public function listPlaybookAuditLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/instances/auditlogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookAuditLogsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookAuditLogsRequest');
    }

    /**
     * 查询剧本实例列表
     *
     * 查询剧本实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlaybookInstances($request)
    {
        return $this->listPlaybookInstancesWithHttpInfo($request);
    }

    public function listPlaybookInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['playbookName'] !== null) {
            $queryParams['playbook_name'] = $localVarParams['playbookName'];
        }
        if ($localVarParams['dataclassName'] !== null) {
            $queryParams['dataclass_name'] = $localVarParams['dataclassName'];
        }
        if ($localVarParams['dataobjectName'] !== null) {
            $queryParams['dataobject_name'] = $localVarParams['dataobjectName'];
        }
        if ($localVarParams['triggerType'] !== null) {
            $queryParams['trigger_type'] = $localVarParams['triggerType'];
        }
        if ($localVarParams['fromDate'] !== null) {
            $queryParams['from_date'] = $localVarParams['fromDate'];
        }
        if ($localVarParams['toDate'] !== null) {
            $queryParams['to_date'] = $localVarParams['toDate'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookInstancesResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookInstancesRequest');
    }

    /**
     * 查询剧本版本列表
     *
     * 查询剧本版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlaybookVersions($request)
    {
        return $this->listPlaybookVersionsWithHttpInfo($request);
    }

    public function listPlaybookVersionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/{playbook_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['versionType'] !== null) {
            $queryParams['version_type'] = $localVarParams['versionType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['playbookId'] !== null) {
            $pathParams['playbook_id'] = $localVarParams['playbookId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookVersionsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybookVersionsRequest');
    }

    /**
     * 查询剧本列表
     *
     * 查询剧本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlaybooks($request)
    {
        return $this->listPlaybooksWithHttpInfo($request);
    }

    public function listPlaybooksWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['searchTxt'] !== null) {
            $queryParams['search_txt'] = $localVarParams['searchTxt'];
        }
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['dataclassName'] !== null) {
            $queryParams['dataclass_name'] = $localVarParams['dataclassName'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybooksResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListPlaybooksRequest');
    }

    /**
     * 查询流程列表
     *
     * 查询流程列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkflows($request)
    {
        return $this->listWorkflowsWithHttpInfo($request);
    }

    public function listWorkflowsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/workflows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['sortby'] !== null) {
            $queryParams['sortby'] = $localVarParams['sortby'];
        }
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['lastVersion'] !== null) {
            $queryParams['last_version'] = $localVarParams['lastVersion'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['dataclassId'] !== null) {
            $queryParams['dataclass_id'] = $localVarParams['dataclassId'];
        }
        if ($localVarParams['dataclassName'] !== null) {
            $queryParams['dataclass_name'] = $localVarParams['dataclassName'];
        }
        if ($localVarParams['aopType'] !== null) {
            $queryParams['aop_type'] = $localVarParams['aopType'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListWorkflowsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListWorkflowsRequest');
    }

    /**
     * 工作空间列表查询
     *
     * 工作空间列表查询:可通过工作空间名称、工作空间描述、创建时间等条件对租户的工作空间进行筛选。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkspaces($request)
    {
        return $this->listWorkspacesWithHttpInfo($request);
    }

    public function listWorkspacesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['viewBindId'] !== null) {
            $queryParams['view_bind_id'] = $localVarParams['viewBindId'];
        }
        if ($localVarParams['viewBindName'] !== null) {
            $queryParams['view_bind_name'] = $localVarParams['viewBindName'];
        }
        if ($localVarParams['createTimeStart'] !== null) {
            $queryParams['create_time_start'] = $localVarParams['createTimeStart'];
        }
        if ($localVarParams['createTimeEnd'] !== null) {
            $queryParams['create_time_end'] = $localVarParams['createTimeEnd'];
        }
        if ($localVarParams['isView'] !== null) {
            $queryParams['is_view'] = $localVarParams['isView'];
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
        }
        if ($localVarParams['normalProjectId'] !== null) {
            $queryParams['normal_project_id'] = $localVarParams['normalProjectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListWorkspacesResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ListWorkspacesRequest');
    }

    /**
     * 搜索基线检查结果列表
     *
     * 搜索基线检查结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchBaseline($request)
    {
        return $this->searchBaselineWithHttpInfo($request);
    }

    public function searchBaselineWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workspaces/{workspace_id}/sa/baseline/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\SearchBaselineResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\SearchBaselineRequest');
    }

    /**
     * 获取告警详情
     *
     * 获取告警详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlert($request)
    {
        return $this->showAlertWithHttpInfo($request);
    }

    public function showAlertWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/alerts/{alert_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['alertId'] !== null) {
            $pathParams['alert_id'] = $localVarParams['alertId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRequest');
    }

    /**
     * 查看告警规则
     *
     * 查看告警规则 Get alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlertRule($request)
    {
        return $this->showAlertRuleWithHttpInfo($request);
    }

    public function showAlertRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRuleRequest');
    }

    /**
     * 查看告警规则模板
     *
     * List alert rule templates
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlertRuleTemplate($request)
    {
        return $this->showAlertRuleTemplateWithHttpInfo($request);
    }

    public function showAlertRuleTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRuleTemplateResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRuleTemplateRequest');
    }

    /**
     * 获取事件详情
     *
     * 获取事件详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIncident($request)
    {
        return $this->showIncidentWithHttpInfo($request);
    }

    public function showIncidentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/incidents/{incident_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowIncidentResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowIncidentRequest');
    }

    /**
     * 查询威胁情报详情
     *
     * 查询威胁情报详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIndicatorDetail($request)
    {
        return $this->showIndicatorDetailWithHttpInfo($request);
    }

    public function showIndicatorDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/indicators/{indicator_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['indicatorId'] !== null) {
            $pathParams['indicator_id'] = $localVarParams['indicatorId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowIndicatorDetailResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowIndicatorDetailRequest');
    }

    /**
     * 查询剧本详情
     *
     * 查询剧本详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybook($request)
    {
        return $this->showPlaybookWithHttpInfo($request);
    }

    public function showPlaybookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/{playbook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['playbookId'] !== null) {
            $pathParams['playbook_id'] = $localVarParams['playbookId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookRequest');
    }

    /**
     * 查询剧本实例详情
     *
     * Show playbook instance
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybookInstance($request)
    {
        return $this->showPlaybookInstanceWithHttpInfo($request);
    }

    public function showPlaybookInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookInstanceResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookInstanceRequest');
    }

    /**
     * 剧本运行监控
     *
     * 剧本运行监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybookMonitors($request)
    {
        return $this->showPlaybookMonitorsWithHttpInfo($request);
    }

    public function showPlaybookMonitorsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/{playbook_id}/monitor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['versionQueryType'] !== null) {
            $queryParams['version_query_type'] = $localVarParams['versionQueryType'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['playbookId'] !== null) {
            $pathParams['playbook_id'] = $localVarParams['playbookId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookMonitorsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookMonitorsRequest');
    }

    /**
     * 查询剧本规则详情
     *
     * 查询剧本规则详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybookRule($request)
    {
        return $this->showPlaybookRuleWithHttpInfo($request);
    }

    public function showPlaybookRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookRuleRequest');
    }

    /**
     * 剧本数据统计
     *
     * 剧本统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybookStatistics($request)
    {
        return $this->showPlaybookStatisticsWithHttpInfo($request);
    }

    public function showPlaybookStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookStatisticsRequest');
    }

    /**
     * 查询剧本拓扑关系
     *
     * 查询剧本拓扑关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybookTopology($request)
    {
        return $this->showPlaybookTopologyWithHttpInfo($request);
    }

    public function showPlaybookTopologyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/instances/{instance_id}/topology';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookTopologyResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookTopologyRequest');
    }

    /**
     * 查询剧本版本详情
     *
     * Show playbook version version
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPlaybookVersion($request)
    {
        return $this->showPlaybookVersionWithHttpInfo($request);
    }

    public function showPlaybookVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookVersionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\ShowPlaybookVersionRequest');
    }

    /**
     * 更新告警规则
     *
     * Update alert rule
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlertRule($request)
    {
        return $this->updateAlertRuleWithHttpInfo($request);
    }

    public function updateAlertRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/siem/alert-rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdateAlertRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdateAlertRuleRequest');
    }

    /**
     * 更新威胁情报
     *
     * 更新威胁情报
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIndicator($request)
    {
        return $this->updateIndicatorWithHttpInfo($request);
    }

    public function updateIndicatorWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/indicators/{indicator_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['indicatorId'] !== null) {
            $pathParams['indicator_id'] = $localVarParams['indicatorId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdateIndicatorResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdateIndicatorRequest');
    }

    /**
     * 修改剧本
     *
     * 修改剧本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePlaybook($request)
    {
        return $this->updatePlaybookWithHttpInfo($request);
    }

    public function updatePlaybookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/{playbook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['playbookId'] !== null) {
            $pathParams['playbook_id'] = $localVarParams['playbookId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookRequest');
    }

    /**
     * 更新剧本动作
     *
     * 更新剧本动作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePlaybookAction($request)
    {
        return $this->updatePlaybookActionWithHttpInfo($request);
    }

    public function updatePlaybookActionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/actions/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
        }
        if ($localVarParams['actionId'] !== null) {
            $pathParams['action_id'] = $localVarParams['actionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookActionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookActionRequest');
    }

    /**
     * 更新剧本规则
     *
     * 更新剧本规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePlaybookRule($request)
    {
        return $this->updatePlaybookRuleWithHttpInfo($request);
    }

    public function updatePlaybookRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookRuleResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookRuleRequest');
    }

    /**
     * 更新剧本版本
     *
     * 更新剧本版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePlaybookVersion($request)
    {
        return $this->updatePlaybookVersionWithHttpInfo($request);
    }

    public function updatePlaybookVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/soc/playbooks/versions/{version_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
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
            $responseType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookVersionResponse',
            $requestType='\HuaweiCloud\SDK\SecMaster\V2\Model\UpdatePlaybookVersionRequest');
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