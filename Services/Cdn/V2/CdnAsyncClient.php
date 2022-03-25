<?php

namespace HuaweiCloud\SDK\Cdn\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CdnAsyncClient extends Client
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
        return new ClientBuilder(new CdnAsyncClient());
    }

    /**
     * 查询域名统计区域运营商数据
     * - 支持查询90天内的数据。 - 支持多指标同时查询，不超过5个。 - 最多同时指定20个域名。 - 起始时间和结束时间需要同时指定，左闭右开，毫秒级时间戳，必须为5分钟整时刻点，如：0分、5分、10分、15分等，如果传的不是5分钟时刻点，返回数据可能与预期不一致。统一用开始时间表示一个时间段，如：2019-01-24 20:15:00 表示取 [20:15:00, 20:20:00)的统计数据，且左闭右开。 - action取值：location_detail,location_summary
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainLocationStatsAsync($request)
    {
        return $this->showDomainLocationStatsAsyncWithHttpInfo($request);
    }
    
    public function showDomainLocationStatsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/cdn/statistics/domain-location-stats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['statType'] !== null) {
            $queryParams['stat_type'] = $localVarParams['statType'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
        }
        if ($localVarParams['country'] !== null) {
            $queryParams['country'] = $localVarParams['country'];
        }
        if ($localVarParams['province'] !== null) {
            $queryParams['province'] = $localVarParams['province'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['groupBy'] !== null) {
            $queryParams['group_by'] = $localVarParams['groupBy'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cdn\V2\Model\ShowDomainLocationStatsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cdn\V2\Model\ShowDomainLocationStatsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询域名统计基础数据
     * - 支持查询90天内的数据。 - 支持多指标同时查询，不超过5个。 - 最多同时指定20个域名。 - 起始时间和结束时间需要同时指定，左闭右开，毫秒级时间戳，必须为5分钟整时刻点，如：0分、5分、10分、15分等，如果传的不是5分钟时刻点，返回数据可能与预期不一致。统一用开始时间表示一个时间段，如：2019-01-24 20:15:00 表示取 [20:15:00, 20:20:00)的统计数据，且左闭右开。 - action取值：detail,summary
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainStatsAsync($request)
    {
        return $this->showDomainStatsAsyncWithHttpInfo($request);
    }
    
    public function showDomainStatsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/cdn/statistics/domain-stats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['statType'] !== null) {
            $queryParams['stat_type'] = $localVarParams['statType'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
        }
        if ($localVarParams['groupBy'] !== null) {
            $queryParams['group_by'] = $localVarParams['groupBy'];
        }
        if ($localVarParams['serviceArea'] !== null) {
            $queryParams['service_area'] = $localVarParams['serviceArea'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cdn\V2\Model\ShowDomainStatsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cdn\V2\Model\ShowDomainStatsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询TOP100 URL明细
     * - 查询TOP100 URL明细。 - 支持查询90天内的数据。 - 查询跨度不能超过31天。 - 起始时间和结束时间，左闭右开，需要同时指定。如查询2021-10-24 00:00:00 到 2021-10-25 00:00:00 的数据，表示取 [2021-10-24 00:00:00, 2021-10-25 00:00:00)的统计数据。 - 开始时间、结束时间必须传毫秒级时间戳，且必须为凌晨0点整时刻点，如果传的不是凌晨0点整时刻点，返回数据可能与预期不一致。 - 流量类指标单位统一为Byte（字节）、请求数类指标单位统一为次数。用于查询指定域名、指定统计指标的明细数据。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTopUrlAsync($request)
    {
        return $this->showTopUrlAsyncWithHttpInfo($request);
    }
    
    public function showTopUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/cdn/statistics/top-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['statType'] !== null) {
            $queryParams['stat_type'] = $localVarParams['statType'];
        }
        if ($localVarParams['serviceArea'] !== null) {
            $queryParams['service_area'] = $localVarParams['serviceArea'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cdn\V2\Model\ShowTopUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Cdn\V2\Model\ShowTopUrlRequest',
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