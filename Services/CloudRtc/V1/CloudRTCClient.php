<?php

namespace HuaweiCloud\SDK\CloudRTC\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CloudRTCClient extends Client
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
        $client = new ClientBuilder(new CloudRTCClient(), "GlobalCredentials");
        return $client;
    }


    /**
     * 查询用户异常体验事件接口
     *
     * 查询指定APP下通话的异常明细数据。可查询5天内的数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcAbnormalEvent($request)
    {
        return $this->listRtcAbnormalEventWithHttpInfo($request);
    }

    public function listRtcAbnormalEventWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/client/abnormalevent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventRequest');
    }

    /**
     * 查询详情事件接口
     *
     * 查询指定APP下通话的异常明细数据。可查询5天内的数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcEvent($request)
    {
        return $this->listRtcEventWithHttpInfo($request);
    }

    public function listRtcEventWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/client/event';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcEventResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcEventRequest');
    }

    /**
     * 查询异常事件用户分布
     *
     * 查询指定APP下指定时间内的通话异常明细数据分布情况。
     * 
     * 最大查询跨度1天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcAbnormalEventDimension($request)
    {
        return $this->listRtcAbnormalEventDimensionWithHttpInfo($request);
    }

    public function listRtcAbnormalEventDimensionWithHttpInfo($request)
    {
        $resourcePath = '/v1/rtc/data/abnormal-event/dimension';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['dimension'] !== null) {
            $queryParams['dimension'] = $localVarParams['dimension'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventDimensionResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventDimensionRequest');
    }

    /**
     * 查询用户异常体验事件
     *
     * 查询指定APP下通话的异常明细数据。
     * 
     * 最大查询跨度1天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcAbnormalEvents($request)
    {
        return $this->listRtcAbnormalEventsWithHttpInfo($request);
    }

    public function listRtcAbnormalEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/rtc/data/abnormal-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['uid'] !== null) {
            $queryParams['uid'] = $localVarParams['uid'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventsResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventsRequest');
    }

    /**
     * 查询用户通话指标
     *
     * 查询用户通话质量指标数据。
     * 
     * 可查询5天内的数据，mid 不为null，查询实时数据时，查询起止时间不超过24个小时，每次查询单个用户时，支持跨天查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcClientQosDetails($request)
    {
        return $this->listRtcClientQosDetailsWithHttpInfo($request);
    }

    public function listRtcClientQosDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/client/qos/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['peerId'] !== null) {
            $queryParams['peer_id'] = $localVarParams['peerId'];
        }
        if ($localVarParams['streamId'] !== null) {
            $queryParams['stream_id'] = $localVarParams['streamId'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['mid'] !== null) {
            $queryParams['mid'] = $localVarParams['mid'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['timeType'] !== null) {
            $queryParams['time_type'] = $localVarParams['timeType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcClientQosDetailsResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcClientQosDetailsRequest');
    }

    /**
     * 查询历史质量
     *
     * 查询质量指标过去每天的体验数据，可查询最近31天的数据。当天未结束，无法查询到当天的体验数据。
     * 
     * 最大查询跨度31天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcHistoryQuality($request)
    {
        return $this->listRtcHistoryQualityWithHttpInfo($request);
    }

    public function listRtcHistoryQualityWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/history/quality';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryQualityResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryQualityRequest');
    }

    /**
     * 查询历史规模
     *
     * 查询指标过去每天的规模数量，可查询最近31天的数据。当天未结束，无法查到当天的房间数与用户数。
     * 
     * 最大查询跨度31天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcHistoryScale($request)
    {
        return $this->listRtcHistoryScaleWithHttpInfo($request);
    }

    public function listRtcHistoryScaleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/history/scale';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryScaleResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryScaleRequest');
    }

    /**
     * 查询用量
     *
     * 查询过去的某一时间段内各种业务的用量数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcHistoryUsage($request)
    {
        return $this->listRtcHistoryUsageWithHttpInfo($request);
    }

    public function listRtcHistoryUsageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/history/usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryUsageResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryUsageRequest');
    }

    /**
     * 查询实时网络
     *
     * 获取实时网络数据相关指标在某一时间段内每分钟的统计数据。
     * 
     * 最大查询跨度1天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcRealtimeNetwork($request)
    {
        return $this->listRtcRealtimeNetworkWithHttpInfo($request);
    }

    public function listRtcRealtimeNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/realtime/network';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['sdkType'] !== null) {
            $queryParams['sdk_type'] = $localVarParams['sdkType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeNetworkResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeNetworkRequest');
    }

    /**
     * 查询实时质量数据
     *
     * 获取实时质量数据的相关指标在某一时间段内每分钟的统计数据。
     * 
     * 最大查询跨度1天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcRealtimeQuality($request)
    {
        return $this->listRtcRealtimeQualityWithHttpInfo($request);
    }

    public function listRtcRealtimeQualityWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/realtime/quality';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['sdkType'] !== null) {
            $queryParams['sdk_type'] = $localVarParams['sdkType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeQualityResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeQualityRequest');
    }

    /**
     * 查询实时规模
     *
     * 获取规模相关的指标在某一时间段内每分钟的统计数据。
     * 
     * 最大查询跨度1天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcRealtimeScale($request)
    {
        return $this->listRtcRealtimeScaleWithHttpInfo($request);
    }

    public function listRtcRealtimeScaleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/realtime/scale';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeScaleResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeScaleRequest');
    }

    /**
     * 查询实时规模分布
     *
     * 对规模相关的数据，根据指定维度按在线用户数排名，获取规模相关的指标在指定维度下的统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcRealtimeScaleDimension($request)
    {
        return $this->listRtcRealtimeScaleDimensionWithHttpInfo($request);
    }

    public function listRtcRealtimeScaleDimensionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/realtime/scale/dimension';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['metric'] !== null) {
            $queryParams['metric'] = $localVarParams['metric'];
        }
        if ($localVarParams['dimension'] !== null) {
            $queryParams['dimension'] = $localVarParams['dimension'];
        }
        if ($localVarParams['time'] !== null) {
            $queryParams['time'] = $localVarParams['time'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeScaleDimensionResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeScaleDimensionRequest');
    }

    /**
     * 查询房间列表
     *
     * 指定事件范围查询这段期间创建的房间列表。
     * 
     * 最大查询跨度90天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcRoomList($request)
    {
        return $this->listRtcRoomListWithHttpInfo($request);
    }

    public function listRtcRoomListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/rooms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRoomListResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRoomListRequest');
    }

    /**
     * 查询用户列表
     *
     * 指定事件范围查询这段期间加入房间的用户列表。
     * 
     * 最大查询跨度90天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRtcUserList($request)
    {
        return $this->listRtcUserListWithHttpInfo($request);
    }

    public function listRtcUserListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/rtc/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['uid'] !== null) {
            $queryParams['uid'] = $localVarParams['uid'];
        }
        if ($localVarParams['nickname'] !== null) {
            $queryParams['nickname'] = $localVarParams['nickname'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcUserListResponse',
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcUserListRequest');
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