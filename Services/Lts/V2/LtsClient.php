<?php

namespace HuaweiCloud\SDK\Lts\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class LtsClient extends Client
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
        return new ClientBuilder(new LtsClient());
    }


    /**
     * 创建日志接入
     *
     * 创建日志接入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccessConfig($request)
    {
        return $this->createAccessConfigWithHttpInfo($request);
    }

    public function createAccessConfigWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/access-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateAccessConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateAccessConfigRequest');
    }

    /**
     * 新建跨账号日志接入
     *
     * 新建跨账号日志接入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAgencyAccess($request)
    {
        return $this->createAgencyAccessWithHttpInfo($request);
    }

    public function createAgencyAccessWithHttpInfo($request)
    {
        $resourcePath = '/v2.0/{project_id}/lts/createAgencyAccess';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateAgencyAccessResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateAgencyAccessRequest');
    }

    /**
     * 创建仪表盘
     *
     * 创建仪表盘
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDashBoard($request)
    {
        return $this->createDashBoardWithHttpInfo($request);
    }

    public function createDashBoardWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/dashboard';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateDashBoardResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateDashBoardRequest');
    }

    /**
     * 创建仪表盘分组
     *
     * 创建仪表盘分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDashboardGroup($request)
    {
        return $this->createDashboardGroupWithHttpInfo($request);
    }

    public function createDashboardGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/dashboard-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateDashboardGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateDashboardGroupRequest');
    }

    /**
     * 创建主机组
     *
     * 创建主机组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHostGroup($request)
    {
        return $this->createHostGroupWithHttpInfo($request);
    }

    public function createHostGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/host-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateHostGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateHostGroupRequest');
    }

    /**
     * 创建关键词告警规则
     *
     * 该接口用于创建关键词告警，目前每个帐户最多可以创建共200个关键词告警与SQL告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createKeywordsAlarmRule($request)
    {
        return $this->createKeywordsAlarmRuleWithHttpInfo($request);
    }

    public function createKeywordsAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/keywords-alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateKeywordsAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateKeywordsAlarmRuleRequest');
    }

    /**
     * 创建日志转储（旧版）
     *
     * 该接口用于将指定的一个或多个日志流的日志转储到OBS服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogDumpObs($request)
    {
        return $this->createLogDumpObsWithHttpInfo($request);
    }

    public function createLogDumpObsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/log-dump/obs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogDumpObsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogDumpObsRequest');
    }

    /**
     * 创建日志组
     *
     * 该接口用于创建一个日志组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogGroup($request)
    {
        return $this->createLogGroupWithHttpInfo($request);
    }

    public function createLogGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogGroupRequest');
    }

    /**
     * 创建日志流
     *
     * 该接口用于创建某个指定日志组下的日志流
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogStream($request)
    {
        return $this->createLogStreamWithHttpInfo($request);
    }

    public function createLogStreamWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogStreamResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogStreamRequest');
    }

    /**
     * 向指定流创建索引
     *
     * 向指定流创建索引
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogStreamIndex($request)
    {
        return $this->createLogStreamIndexWithHttpInfo($request);
    }

    public function createLogStreamIndexWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/groups/{group_id}/stream/{stream_id}/index/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['streamId'] !== null) {
            $pathParams['stream_id'] = $localVarParams['streamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogStreamIndexResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateLogStreamIndexRequest');
    }

    /**
     * 创建消息模板
     *
     * 该接口用于创建通知模板，目前每个帐户最多可以创建共100个通知模板，创建后名称不可修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNotificationTemplate($request)
    {
        return $this->createNotificationTemplateWithHttpInfo($request);
    }

    public function createNotificationTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/events/notification/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateNotificationTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateNotificationTemplateRequest');
    }

    /**
     * 添加快速查询
     *
     * 添加快速查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSearchCriterias($request)
    {
        return $this->createSearchCriteriasWithHttpInfo($request);
    }

    public function createSearchCriteriasWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/groups/{group_id}/topics/{topic_id}/search-criterias';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topicId'] !== null) {
            $pathParams['topic_id'] = $localVarParams['topicId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateSearchCriteriasResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateSearchCriteriasRequest');
    }

    /**
     * 通过结构化模板创建结构化配置（新）
     *
     * 该接口通过结构化模板创建结构化配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStructConfig($request)
    {
        return $this->createStructConfigWithHttpInfo($request);
    }

    public function createStructConfigWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/struct/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateStructConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateStructConfigRequest');
    }

    /**
     * 创建结构化配置
     *
     * 该接口用于创建指定日志流下的结构化配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStructTemplate($request)
    {
        return $this->createStructTemplateWithHttpInfo($request);
    }

    public function createStructTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/struct/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateStructTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateStructTemplateRequest');
    }

    /**
     * 
     *
     * 添加标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTags($request)
    {
        return $this->createTagsWithHttpInfo($request);
    }

    public function createTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateTagsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateTagsRequest');
    }

    /**
     * 创建日志转储（新版）
     *
     * 该接口用于创建OBS转储，DIS转储，DMS转储。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTransfer($request)
    {
        return $this->createTransferWithHttpInfo($request);
    }

    public function createTransferWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateTransferResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequest');
    }

    /**
     * 创建日志收藏
     *
     * 创建日志收藏
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createfavorite($request)
    {
        return $this->createfavoriteWithHttpInfo($request);
    }

    public function createfavoriteWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/lts/favorite';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreatefavoriteResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreatefavoriteRequest');
    }

    /**
     * 删除日志接入
     *
     * 删除日志接入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAccessConfig($request)
    {
        return $this->deleteAccessConfigWithHttpInfo($request);
    }

    public function deleteAccessConfigWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/access-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteAccessConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteAccessConfigRequest');
    }

    /**
     * 删除活动告警
     *
     * 该接口用于删除活动告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteActiveAlarms($request)
    {
        return $this->deleteActiveAlarmsWithHttpInfo($request);
    }

    public function deleteActiveAlarmsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/alarms/sql-alarm/clear';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteActiveAlarmsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteActiveAlarmsRequest');
    }

    /**
     * 删除仪表盘
     *
     * 删除仪表盘
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDashboard($request)
    {
        return $this->deleteDashboardWithHttpInfo($request);
    }

    public function deleteDashboardWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/dashboard';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['isDeleteCharts'] !== null) {
            $queryParams['is_delete_charts'] = $localVarParams['isDeleteCharts'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteDashboardResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteDashboardRequest');
    }

    /**
     * 删除主机组
     *
     * 删除主机组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHostGroup($request)
    {
        return $this->deleteHostGroupWithHttpInfo($request);
    }

    public function deleteHostGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/host-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteHostGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteHostGroupRequest');
    }

    /**
     * 删除关键词告警规则
     *
     * 该接口用于删除关键词告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKeywordsAlarmRule($request)
    {
        return $this->deleteKeywordsAlarmRuleWithHttpInfo($request);
    }

    public function deleteKeywordsAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/keywords-alarm-rule/{keywords_alarm_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keywordsAlarmRuleId'] !== null) {
            $pathParams['keywords_alarm_rule_id'] = $localVarParams['keywordsAlarmRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteKeywordsAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteKeywordsAlarmRuleRequest');
    }

    /**
     * 删除日志组
     *
     * 该接口用于删除指定日志组。当日志组中的日志流配置了日志转储，需要取消日志转储后才可删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogGroup($request)
    {
        return $this->deleteLogGroupWithHttpInfo($request);
    }

    public function deleteLogGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteLogGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteLogGroupRequest');
    }

    /**
     * 删除日志流
     *
     * 该接口用于删除指定日志组下的指定日志流。当该日志流配置了日志转储，需要取消日志转储后才可删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogStream($request)
    {
        return $this->deleteLogStreamWithHttpInfo($request);
    }

    public function deleteLogStreamWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams/{log_stream_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $pathParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteLogStreamResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteLogStreamRequest');
    }

    /**
     * 删除消息模板
     *
     * 该接口用于删除通知模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNotificationTemplate($request)
    {
        return $this->deleteNotificationTemplateWithHttpInfo($request);
    }

    public function deleteNotificationTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/events/notification/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteNotificationTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteNotificationTemplateRequest');
    }

    /**
     * 删除快速查询
     *
     * 删除快速查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSearchCriterias($request)
    {
        return $this->deleteSearchCriteriasWithHttpInfo($request);
    }

    public function deleteSearchCriteriasWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/groups/{group_id}/topics/{topic_id}/search-criterias';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['topicId'] !== null) {
            $pathParams['topic_id'] = $localVarParams['topicId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteSearchCriteriasResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteSearchCriteriasRequest');
    }

    /**
     * 删除结构化配置
     *
     * 该接口用于删除指定日志流下的结构化配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStructTemplate($request)
    {
        return $this->deleteStructTemplateWithHttpInfo($request);
    }

    public function deleteStructTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/struct/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteStructTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteStructTemplateRequest');
    }

    /**
     * 删除日志转储
     *
     * 该接口用于删除OBS转储，DIS转储，DMS转储。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTransfer($request)
    {
        return $this->deleteTransferWithHttpInfo($request);
    }

    public function deleteTransferWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logTransferId'] !== null) {
            $queryParams['log_transfer_id'] = $localVarParams['logTransferId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteTransferResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteTransferRequest');
    }

    /**
     * 取消收藏
     *
     * 取消收藏
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletefavorite($request)
    {
        return $this->deletefavoriteWithHttpInfo($request);
    }

    public function deletefavoriteWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/lts/favorite/{fav_res_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['favResId'] !== null) {
            $pathParams['fav_res_id'] = $localVarParams['favResId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeletefavoriteResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeletefavoriteRequest');
    }

    /**
     * 关闭超额采集开关
     *
     * 该接口用于将超额采集日志功能关闭。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableLogCollection($request)
    {
        return $this->disableLogCollectionWithHttpInfo($request);
    }

    public function disableLogCollectionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/collection/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DisableLogCollectionResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DisableLogCollectionRequest');
    }

    /**
     * 打开超额采集开关
     *
     * 该接口用于将超额采集日志功能打开。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableLogCollection($request)
    {
        return $this->enableLogCollectionWithHttpInfo($request);
    }

    public function enableLogCollectionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/collection/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\EnableLogCollectionResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\EnableLogCollectionRequest');
    }

    /**
     * 查询日志接入
     *
     * 查询日志接入列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessConfig($request)
    {
        return $this->listAccessConfigWithHttpInfo($request);
    }

    public function listAccessConfigWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/access-config-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListAccessConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListAccessConfigRequest');
    }

    /**
     * 查询活动或历史告警列表
     *
     * 该接口用于查询告警列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listActiveOrHistoryAlarms($request)
    {
        return $this->listActiveOrHistoryAlarmsWithHttpInfo($request);
    }

    public function listActiveOrHistoryAlarmsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/alarms/sql-alarm/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListActiveOrHistoryAlarmsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListActiveOrHistoryAlarmsRequest');
    }

    /**
     * 查询结构化模板简略列表
     *
     * 该接口用于查询结构化模板简略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBreifStructTemplate($request)
    {
        return $this->listBreifStructTemplateWithHttpInfo($request);
    }

    public function listBreifStructTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/struct/customtemplate/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListBreifStructTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListBreifStructTemplateRequest');
    }

    /**
     * 查询日志流图表
     *
     * 该接口用于查询日志流图表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCharts($request)
    {
        return $this->listChartsWithHttpInfo($request);
    }

    public function listChartsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams/{log_stream_id}/charts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $pathParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListChartsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListChartsRequest');
    }

    /**
     * 获取快速查询
     *
     * 获取快速查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCriterias($request)
    {
        return $this->listCriteriasWithHttpInfo($request);
    }

    public function listCriteriasWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/groups/{group_id}/topics/{topic_id}/search-criterias';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['searchType'] !== null) {
            $queryParams['search_type'] = $localVarParams['searchType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['topicId'] !== null) {
            $pathParams['topic_id'] = $localVarParams['topicId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListCriteriasResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListCriteriasRequest');
    }

    /**
     * 查询用户历史sql
     *
     * 查询用户历史sql
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHistorySql($request)
    {
        return $this->listHistorySqlWithHttpInfo($request);
    }

    public function listHistorySqlWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/history-sql';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $queryParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListHistorySqlResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListHistorySqlRequest');
    }

    /**
     * 查询主机信息
     *
     * 查询主机列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHost($request)
    {
        return $this->listHostWithHttpInfo($request);
    }

    public function listHostWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/host-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListHostResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListHostRequest');
    }

    /**
     * 查询主机组
     *
     * 查询主机组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostGroup($request)
    {
        return $this->listHostGroupWithHttpInfo($request);
    }

    public function listHostGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/host-group-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListHostGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListHostGroupRequest');
    }

    /**
     * 查询关键词告警规则
     *
     * 该接口用于查询关键词告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKeywordsAlarmRules($request)
    {
        return $this->listKeywordsAlarmRulesWithHttpInfo($request);
    }

    public function listKeywordsAlarmRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/keywords-alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListKeywordsAlarmRulesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListKeywordsAlarmRulesRequest');
    }

    /**
     * 查询账号下所有日志组
     *
     * 该接口用于查询账号下所有日志组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogGroups($request)
    {
        return $this->listLogGroupsWithHttpInfo($request);
    }

    public function listLogGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogGroupsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogGroupsRequest');
    }

    /**
     * 查询日志直方图
     *
     * 查询关键词搜索条数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogHistogram($request)
    {
        return $this->listLogHistogramWithHttpInfo($request);
    }

    public function listLogHistogramWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/keyword-count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogHistogramResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogHistogramRequest');
    }

    /**
     * 查询指定日志组下的所有日志流
     *
     * 该接口用于查询指定日志组下的所有日志流信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogStream($request)
    {
        return $this->listLogStreamWithHttpInfo($request);
    }

    public function listLogStreamWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogStreamResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogStreamRequest');
    }

    /**
     * 查询日志流信息
     *
     * 该接口用于查询LTS日志流信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogStreams($request)
    {
        return $this->listLogStreamsWithHttpInfo($request);
    }

    public function listLogStreamsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/log-streams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupName'] !== null) {
            $queryParams['log_group_name'] = $localVarParams['logGroupName'];
        }
        if ($localVarParams['logStreamName'] !== null) {
            $queryParams['log_stream_name'] = $localVarParams['logStreamName'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogStreamsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogStreamsRequest');
    }

    /**
     * 查询日志
     *
     * 该接口用于查询指定日志流下的日志内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogs($request)
    {
        return $this->listLogsWithHttpInfo($request);
    }

    public function listLogsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams/{log_stream_id}/content/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $pathParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListLogsRequest');
    }

    /**
     * 预览消息模板邮件格式
     *
     * 该接口用于预览通知模板邮件格式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotificationTemplate($request)
    {
        return $this->listNotificationTemplateWithHttpInfo($request);
    }

    public function listNotificationTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/events/notification/templates/view';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListNotificationTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListNotificationTemplateRequest');
    }

    /**
     * 查询消息模板
     *
     * 该接口用于查询通知模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotificationTemplates($request)
    {
        return $this->listNotificationTemplatesWithHttpInfo($request);
    }

    public function listNotificationTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/events/notification/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListNotificationTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListNotificationTemplatesRequest');
    }

    /**
     * 查询SMN主题
     *
     * 该接口用于查询SMN主题
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotificationTopics($request)
    {
        return $this->listNotificationTopicsWithHttpInfo($request);
    }

    public function listNotificationTopicsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/notifications/topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListNotificationTopicsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListNotificationTopicsRequest');
    }

    /**
     * 查询日志组下所有快速查询
     *
     * 查询日志组下所有快速查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueryAllSearchCriterias($request)
    {
        return $this->listQueryAllSearchCriteriasWithHttpInfo($request);
    }

    public function listQueryAllSearchCriteriasWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/lts/groups/{group_id}/search-criterias';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListQueryAllSearchCriteriasResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListQueryAllSearchCriteriasRequest');
    }

    /**
     * 查询结构化日志
     *
     * 该接口用于查询指定日志流下的结构化日志内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueryStructuredLogs($request)
    {
        return $this->listQueryStructuredLogsWithHttpInfo($request);
    }

    public function listQueryStructuredLogsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams/{log_stream_id}/struct-content/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $pathParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListQueryStructuredLogsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListQueryStructuredLogsRequest');
    }

    /**
     * 查询结构化模板
     *
     * 该接口用于查询结构化模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStructTemplate($request)
    {
        return $this->listStructTemplateWithHttpInfo($request);
    }

    public function listStructTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/struct/customtemplate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListStructTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListStructTemplateRequest');
    }

    /**
     * 查询结构化日志（新版）
     *
     * 该接口用于查询指定日志流下的结构化日志内容（新版）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStructuredLogsWithTimeRange($request)
    {
        return $this->listStructuredLogsWithTimeRangeWithHttpInfo($request);
    }

    public function listStructuredLogsWithTimeRangeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/streams/{log_stream_id}/struct-content/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logStreamId'] !== null) {
            $pathParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListStructuredLogsWithTimeRangeResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListStructuredLogsWithTimeRangeRequest');
    }

    /**
     * 按时间段统计查询资源
     *
     * 按时间段统计查询资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTimeLineTrafficStatistics($request)
    {
        return $this->listTimeLineTrafficStatisticsWithHttpInfo($request);
    }

    public function listTimeLineTrafficStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/timeline-traffic-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['timezone'] !== null) {
            $queryParams['timezone'] = $localVarParams['timezone'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListTimeLineTrafficStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListTimeLineTrafficStatisticsRequest');
    }

    /**
     * 统计top n的日志组或日志流流量
     *
     * 统计top n的日志组或日志流流量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopnTrafficStatistics($request)
    {
        return $this->listTopnTrafficStatisticsWithHttpInfo($request);
    }

    public function listTopnTrafficStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/topn-traffic-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListTopnTrafficStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListTopnTrafficStatisticsRequest');
    }

    /**
     * 查询日志转储
     *
     * 该接口用于查询OBS转储，DIS转储，DMS转储配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTransfers($request)
    {
        return $this->listTransfersWithHttpInfo($request);
    }

    public function listTransfersWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logTransferType'] !== null) {
            $queryParams['log_transfer_type'] = $localVarParams['logTransferType'];
        }
        if ($localVarParams['logGroupName'] !== null) {
            $queryParams['log_group_name'] = $localVarParams['logGroupName'];
        }
        if ($localVarParams['logStreamName'] !== null) {
            $queryParams['log_stream_name'] = $localVarParams['logStreamName'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListTransfersResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListTransfersRequest');
    }

    /**
     * 注册DMS kafka实例
     *
     * 该接口用于注册DMS kafka实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerDmsKafkaInstance($request)
    {
        return $this->registerDmsKafkaInstanceWithHttpInfo($request);
    }

    public function registerDmsKafkaInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/dms/kafka-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\RegisterDmsKafkaInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\RegisterDmsKafkaInstanceRequest');
    }

    /**
     * 获取日志汇聚开关
     *
     * 只能由管理员或者委托管理员调用    获取日志汇聚开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAdminConfig($request)
    {
        return $this->showAdminConfigWithHttpInfo($request);
    }

    public function showAdminConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/lts/log-converge-config/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowAdminConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowAdminConfigRequest');
    }

    /**
     * 获取组织成员汇聚配置
     *
     * 只能由组织管理员或者委托管理员调用    获取组织成员汇聚配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLogConvergeConfig($request)
    {
        return $this->showLogConvergeConfigWithHttpInfo($request);
    }

    public function showLogConvergeConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/lts/log-converge-config/{member_account_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['memberAccountId'] !== null) {
            $pathParams['member_account_id'] = $localVarParams['memberAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowLogConvergeConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowLogConvergeConfigRequest');
    }

    /**
     * 获取组织成员日志组日志流
     *
     * 只能由管理员或者委托管理员调用，获取组织成员日志组日志流
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMemberGroupAndStream($request)
    {
        return $this->showMemberGroupAndStreamWithHttpInfo($request);
    }

    public function showMemberGroupAndStreamWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/lts/{member_account_id}/all-streams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['memberAccountId'] !== null) {
            $pathParams['member_account_id'] = $localVarParams['memberAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowMemberGroupAndStreamResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowMemberGroupAndStreamRequest');
    }

    /**
     * 查询单个消息模板
     *
     * 该接口用于查询单个通知模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotificationTemplate($request)
    {
        return $this->showNotificationTemplateWithHttpInfo($request);
    }

    public function showNotificationTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/events/notification/template/{template_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['templateName'] !== null) {
            $pathParams['template_name'] = $localVarParams['templateName'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowNotificationTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowNotificationTemplateRequest');
    }

    /**
     * 查询结构化配置
     *
     * 该接口用于查询指定日志流下的结构化配置内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStructTemplate($request)
    {
        return $this->showStructTemplateWithHttpInfo($request);
    }

    public function showStructTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/struct/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['logGroupId'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $queryParams['logStreamId'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateRequest');
    }

    /**
     * 修改日志接入
     *
     * 修改日志接入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAccessConfig($request)
    {
        return $this->updateAccessConfigWithHttpInfo($request);
    }

    public function updateAccessConfigWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/access-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateAccessConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateAccessConfigRequest');
    }

    /**
     * 修改主机组
     *
     * 修改主机组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHostGroup($request)
    {
        return $this->updateHostGroupWithHttpInfo($request);
    }

    public function updateHostGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/host-group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateHostGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateHostGroupRequest');
    }

    /**
     * 修改关键词告警规则
     *
     * 该接口用于修改关键词告警。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKeywordsAlarmRule($request)
    {
        return $this->updateKeywordsAlarmRuleWithHttpInfo($request);
    }

    public function updateKeywordsAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/keywords-alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateKeywordsAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateKeywordsAlarmRuleRequest');
    }

    /**
     * 更新汇聚配置
     *
     * 只能由管理员或者委托管理员 ,更新汇聚配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogConvergeConfig($request)
    {
        return $this->updateLogConvergeConfigWithHttpInfo($request);
    }

    public function updateLogConvergeConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/lts/log-converge-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateLogConvergeConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateLogConvergeConfigRequest');
    }

    /**
     * 修改日志组
     *
     * 该接口用于修改指定日志组下的日志存储时长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogGroup($request)
    {
        return $this->updateLogGroupWithHttpInfo($request);
    }

    public function updateLogGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateLogGroupResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateLogGroupRequest');
    }

    /**
     * 修改日志流
     *
     * 该接口用于修改指定日志流下的日志存储时长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogStream($request)
    {
        return $this->updateLogStreamWithHttpInfo($request);
    }

    public function updateLogStreamWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/groups/{log_group_id}/streams-ttl/{log_stream_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logGroupId'] !== null) {
            $pathParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logStreamId'] !== null) {
            $pathParams['log_stream_id'] = $localVarParams['logStreamId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateLogStreamResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateLogStreamRequest');
    }

    /**
     * 修改消息模板
     *
     * 该接口用于修改通知模板,根据名称进行修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNotificationTemplate($request)
    {
        return $this->updateNotificationTemplateWithHttpInfo($request);
    }

    public function updateNotificationTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/{domain_id}/lts/events/notification/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateNotificationTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateNotificationTemplateRequest');
    }

    /**
     * 通过结构化模板修改结构化配置（新）
     *
     * 该接口通过结构化模板修改结构化配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStructConfig($request)
    {
        return $this->updateStructConfigWithHttpInfo($request);
    }

    public function updateStructConfigWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/lts/struct/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateStructConfigResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateStructConfigRequest');
    }

    /**
     * 修改结构化配置
     *
     * 该接口用于修改指定日志流下的结构化配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStructTemplate($request)
    {
        return $this->updateStructTemplateWithHttpInfo($request);
    }

    public function updateStructTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/struct/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateStructTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateStructTemplateRequest');
    }

    /**
     * 修改日志汇聚开关
     *
     * 只能由管理员或者委托管理员调用     修改日志汇聚开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSwitch($request)
    {
        return $this->updateSwitchWithHttpInfo($request);
    }

    public function updateSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/lts/log-converge-config/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logConvergeSwitch'] !== null) {
            $queryParams['log_converge_switch'] = $localVarParams['logConvergeSwitch'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateSwitchResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateSwitchRequest');
    }

    /**
     * 更新日志转储
     *
     * 该接口用于更新OBS转储，DIS转储，DMS转储。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTransfer($request)
    {
        return $this->updateTransferWithHttpInfo($request);
    }

    public function updateTransferWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/transfers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateTransferResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateTransferRequest');
    }

    /**
     * 创建接入规则
     *
     * 该接口用于创建aom日志接入lts规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAomMappingRules($request)
    {
        return $this->createAomMappingRulesWithHttpInfo($request);
    }

    public function createAomMappingRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/aom-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isBatch'] !== null) {
            $queryParams['isBatch'] = $localVarParams['isBatch'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateAomMappingRulesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateAomMappingRulesRequest');
    }

    /**
     * 删除接入规则
     *
     * 该接口用于删除lts接入规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAomMappingRules($request)
    {
        return $this->deleteAomMappingRulesWithHttpInfo($request);
    }

    public function deleteAomMappingRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/aom-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteAomMappingRulesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteAomMappingRulesRequest');
    }

    /**
     * 查询单个接入规则
     *
     * 该接口用于查询单个aom日志接入lts
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAomMappingRule($request)
    {
        return $this->showAomMappingRuleWithHttpInfo($request);
    }

    public function showAomMappingRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/aom-mapping/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowAomMappingRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowAomMappingRuleRequest');
    }

    /**
     * 查询所有接入规则
     *
     * 该接口用于查询aom日志所有接入lts规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAomMappingRules($request)
    {
        return $this->showAomMappingRulesWithHttpInfo($request);
    }

    public function showAomMappingRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/aom-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ShowAomMappingRulesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ShowAomMappingRulesRequest');
    }

    /**
     * 修改接入规则
     *
     * 该接口用于修改接入规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAomMappingRules($request)
    {
        return $this->updateAomMappingRulesWithHttpInfo($request);
    }

    public function updateAomMappingRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/aom-mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateAomMappingRulesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateAomMappingRulesRequest');
    }

    /**
     * 创建SQL告警规则
     *
     * 该接口用于创建SQL告警，目前每个帐户最多可以创建共200个关键词告警与SQL告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSqlAlarmRule($request)
    {
        return $this->createSqlAlarmRuleWithHttpInfo($request);
    }

    public function createSqlAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/sql-alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\CreateSqlAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\CreateSqlAlarmRuleRequest');
    }

    /**
     * 删除SQL告警规则
     *
     * 该接口用于删除SQL告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSqlAlarmRule($request)
    {
        return $this->deleteSqlAlarmRuleWithHttpInfo($request);
    }

    public function deleteSqlAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/sql-alarm-rule/{sql_alarm_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sqlAlarmRuleId'] !== null) {
            $pathParams['sql_alarm_rule_id'] = $localVarParams['sqlAlarmRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteSqlAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\DeleteSqlAlarmRuleRequest');
    }

    /**
     * 查询SQL告警规则
     *
     * 该接口用于查询SQL告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSqlAlarmRules($request)
    {
        return $this->listSqlAlarmRulesWithHttpInfo($request);
    }

    public function listSqlAlarmRulesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/sql-alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\ListSqlAlarmRulesResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\ListSqlAlarmRulesRequest');
    }

    /**
     * 切换告警规则状态
     *
     * 改变告警规则状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmRuleStatus($request)
    {
        return $this->updateAlarmRuleStatusWithHttpInfo($request);
    }

    public function updateAlarmRuleStatusWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateAlarmRuleStatusResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateAlarmRuleStatusRequest');
    }

    /**
     * 修改SQL告警规则
     *
     * 该接口用于修改SQL告警
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSqlAlarmRule($request)
    {
        return $this->updateSqlAlarmRuleWithHttpInfo($request);
    }

    public function updateSqlAlarmRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/lts/alarms/sql-alarm-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateSqlAlarmRuleResponse',
            $requestType='\HuaweiCloud\SDK\Lts\V2\Model\UpdateSqlAlarmRuleRequest');
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