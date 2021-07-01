<?php

namespace HuaweiCloud\SDK\Live\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class LiveClient extends Client
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
        return new ClientBuilder(new LiveClient());
    }


    /**
     * 查询播放带宽趋势接口
     * 查询播放域名带宽数据。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBandwidthDetail($request)
    {
        return $this->listBandwidthDetailWithHttpInfo($request);
    }

    public function listBandwidthDetailWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/bandwidth/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomains'] !== null) {
            $queryParams['play_domains'] = $localVarParams['playDomains'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListBandwidthDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListBandwidthDetailRequest');
    }

    /**
     * 查询播放带宽峰值接口
     * 查询指定时间范围内播放带宽峰值。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainBandwidthPeak($request)
    {
        return $this->listDomainBandwidthPeakWithHttpInfo($request);
    }

    public function listDomainBandwidthPeakWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/bandwidth/peak';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomains'] !== null) {
            $queryParams['play_domains'] = $localVarParams['playDomains'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListDomainBandwidthPeakResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListDomainBandwidthPeakRequest');
    }

    /**
     * 查询播放流量趋势接口
     * 查询播放域名流量数据。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainTrafficDetail($request)
    {
        return $this->listDomainTrafficDetailWithHttpInfo($request);
    }

    public function listDomainTrafficDetailWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/traffic/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomains'] !== null) {
            $queryParams['play_domains'] = $localVarParams['playDomains'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListDomainTrafficDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListDomainTrafficDetailRequest');
    }

    /**
     * 查询播放流量汇总接口
     * 查询指定时间范围内流量汇总量。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainTrafficSummary($request)
    {
        return $this->listDomainTrafficSummaryWithHttpInfo($request);
    }

    public function listDomainTrafficSummaryWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/traffic/summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomains'] !== null) {
            $queryParams['play_domains'] = $localVarParams['playDomains'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListDomainTrafficSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListDomainTrafficSummaryRequest');
    }

    /**
     * 查询历史推流列表接口
     * 查询历史推流列表。  最大查询跨度1天，最大查询周期7天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHistoryStreams($request)
    {
        return $this->listHistoryStreamsWithHttpInfo($request);
    }

    public function listHistoryStreamsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/history/streams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListHistoryStreamsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListHistoryStreamsRequest');
    }

    /**
     * 查询直播拉流HTTP状态码接口
     * 查询直播拉流HTTP状态码接口。  获取加速域名1分钟粒度的HTTP返回码  最大查询跨度不能超过24小时，最大查询周期7天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQueryHttpCode($request)
    {
        return $this->listQueryHttpCodeWithHttpInfo($request);
    }

    public function listQueryHttpCodeWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/httpcodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomains'] !== null) {
            $queryParams['play_domains'] = $localVarParams['playDomains'];
        }
        if ($localVarParams['code'] !== null) {
            $queryParams['code'] = $localVarParams['code'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListQueryHttpCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListQueryHttpCodeRequest');
    }

    /**
     * 查询录制用量接口
     * 查询直播租户每小时录制的最大并发数，计算1小时内每分钟的并发总路数，取最大值做为统计值。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordData($request)
    {
        return $this->listRecordDataWithHttpInfo($request);
    }

    public function listRecordDataWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/record';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListRecordDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListRecordDataRequest');
    }

    /**
     * 查询截图用量接口
     * 查询直播域名每小时的截图数量。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotData($request)
    {
        return $this->listSnapshotDataWithHttpInfo($request);
    }

    public function listSnapshotDataWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/snapshot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publishDomain'] !== null) {
            $queryParams['publish_domain'] = $localVarParams['publishDomain'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListSnapshotDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListSnapshotDataRequest');
    }

    /**
     * 查询转码用量接口
     * 查询直播域名每小时的转码时长数据。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTranscodeData($request)
    {
        return $this->listTranscodeDataWithHttpInfo($request);
    }

    public function listTranscodeDataWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/transcode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publishDomain'] !== null) {
            $queryParams['publish_domain'] = $localVarParams['publishDomain'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListTranscodeDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListTranscodeDataRequest');
    }

    /**
     * 查询观众趋势接口
     * 查询观众趋势。  最大查询跨度7天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsersOfStream($request)
    {
        return $this->listUsersOfStreamWithHttpInfo($request);
    }

    public function listUsersOfStreamWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/user';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomain'] !== null) {
            $queryParams['play_domain'] = $localVarParams['playDomain'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListUsersOfStreamResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListUsersOfStreamRequest');
    }

    /**
     * 查询域名维度推流路数接口
     * 查询域名维度推流路数接口。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStreamCount($request)
    {
        return $this->showStreamCountWithHttpInfo($request);
    }

    public function showStreamCountWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/stream-count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publishDomains'] !== null) {
            $queryParams['publish_domains'] = $localVarParams['publishDomains'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ShowStreamCountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ShowStreamCountRequest');
    }

    /**
     * 查询播放画像信息接口
     * 查询播放画像信息。  最大查询跨度1天，最大查询周期31天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStreamPortrait($request)
    {
        return $this->showStreamPortraitWithHttpInfo($request);
    }

    public function showStreamPortraitWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/stream-portraits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomain'] !== null) {
            $queryParams['play_domain'] = $localVarParams['playDomain'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['time'] !== null) {
            $queryParams['time'] = $localVarParams['time'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ShowStreamPortraitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ShowStreamPortraitRequest');
    }

    /**
     * 查询上行带宽数据接口
     * 查询上行带宽数据。  最大查询跨度31天，最大查询周期90天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUpBandwidth($request)
    {
        return $this->showUpBandwidthWithHttpInfo($request);
    }

    public function showUpBandwidthWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/up-bandwidth/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publishDomains'] !== null) {
            $queryParams['publish_domains'] = $localVarParams['publishDomains'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ShowUpBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ShowUpBandwidthRequest');
    }

    /**
     * 查询推流码率数据接口
     * 查询推流监控码率数据接口。  最大查询跨度6小时，最大查询周期7天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSingleStreamBitrate($request)
    {
        return $this->listSingleStreamBitrateWithHttpInfo($request);
    }

    public function listSingleStreamBitrateWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/stream/bitrate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListSingleStreamBitrateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListSingleStreamBitrateRequest');
    }

    /**
     * 查询推流帧率数据接口
     * 查询推流帧率数据接口。  最大查询跨度6小时，最大查询周期7天。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSingleStreamFramerate($request)
    {
        return $this->listSingleStreamFramerateWithHttpInfo($request);
    }

    public function listSingleStreamFramerateWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/stats/stream/framerate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
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
            $responseType='\HuaweiCloud\SDK\Live\V2\Model\ListSingleStreamFramerateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V2\Model\ListSingleStreamFramerateRequest');
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
        $collectionFormats = null,
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
        $collectionFormats,
        $requestType);
    }
}