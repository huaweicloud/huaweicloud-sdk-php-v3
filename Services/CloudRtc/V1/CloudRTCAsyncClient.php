<?php

namespace HuaweiCloud\SDK\CloudRTC\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CloudRTCAsyncClient extends Client
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
        return new ClientBuilder(new CloudRTCAsyncClient(), "GlobalCredentials");
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
    public function listRtcAbnormalEventAsync($request)
    {
        return $this->listRtcAbnormalEventAsyncWithHttpInfo($request);
    }
    
    public function listRtcAbnormalEventAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventRequest',
            $asyncRequest = true);
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
    public function listRtcEventAsync($request)
    {
        return $this->listRtcEventAsyncWithHttpInfo($request);
    }
    
    public function listRtcEventAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcEventRequest',
            $asyncRequest = true);
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
    public function listRtcAbnormalEventDimensionAsync($request)
    {
        return $this->listRtcAbnormalEventDimensionAsyncWithHttpInfo($request);
    }
    
    public function listRtcAbnormalEventDimensionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventDimensionRequest',
            $asyncRequest = true);
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
    public function listRtcAbnormalEventsAsync($request)
    {
        return $this->listRtcAbnormalEventsAsyncWithHttpInfo($request);
    }
    
    public function listRtcAbnormalEventsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcAbnormalEventsRequest',
            $asyncRequest = true);
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
    public function listRtcClientQosDetailsAsync($request)
    {
        return $this->listRtcClientQosDetailsAsyncWithHttpInfo($request);
    }
    
    public function listRtcClientQosDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcClientQosDetailsRequest',
            $asyncRequest = true);
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
    public function listRtcHistoryQualityAsync($request)
    {
        return $this->listRtcHistoryQualityAsyncWithHttpInfo($request);
    }
    
    public function listRtcHistoryQualityAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryQualityRequest',
            $asyncRequest = true);
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
    public function listRtcHistoryScaleAsync($request)
    {
        return $this->listRtcHistoryScaleAsyncWithHttpInfo($request);
    }
    
    public function listRtcHistoryScaleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryScaleRequest',
            $asyncRequest = true);
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
    public function listRtcHistoryUsageAsync($request)
    {
        return $this->listRtcHistoryUsageAsyncWithHttpInfo($request);
    }
    
    public function listRtcHistoryUsageAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcHistoryUsageRequest',
            $asyncRequest = true);
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
    public function listRtcRealtimeNetworkAsync($request)
    {
        return $this->listRtcRealtimeNetworkAsyncWithHttpInfo($request);
    }
    
    public function listRtcRealtimeNetworkAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeNetworkRequest',
            $asyncRequest = true);
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
    public function listRtcRealtimeQualityAsync($request)
    {
        return $this->listRtcRealtimeQualityAsyncWithHttpInfo($request);
    }
    
    public function listRtcRealtimeQualityAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeQualityRequest',
            $asyncRequest = true);
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
    public function listRtcRealtimeScaleAsync($request)
    {
        return $this->listRtcRealtimeScaleAsyncWithHttpInfo($request);
    }
    
    public function listRtcRealtimeScaleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeScaleRequest',
            $asyncRequest = true);
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
    public function listRtcRealtimeScaleDimensionAsync($request)
    {
        return $this->listRtcRealtimeScaleDimensionAsyncWithHttpInfo($request);
    }
    
    public function listRtcRealtimeScaleDimensionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRealtimeScaleDimensionRequest',
            $asyncRequest = true);
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
    public function listRtcRoomListAsync($request)
    {
        return $this->listRtcRoomListAsyncWithHttpInfo($request);
    }
    
    public function listRtcRoomListAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcRoomListRequest',
            $asyncRequest = true);
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
    public function listRtcUserListAsync($request)
    {
        return $this->listRtcUserListAsyncWithHttpInfo($request);
    }
    
    public function listRtcUserListAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CloudRTC\V1\Model\ListRtcUserListRequest',
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