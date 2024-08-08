<?php

namespace HuaweiCloud\SDK\Geip\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class GeipAsyncClient extends Client
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
       $client = new ClientBuilder(new GeipAsyncClient(), "GlobalCredentials");
       return $client;
    }

    /**
     * 添加全域公网带宽标签
     *
     * 添加全域公网带宽标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addInternetBandwidthTagsAsync($request)
    {
        return $this->addInternetBandwidthTagsAsyncWithHttpInfo($request);
    }
    
    public function addInternetBandwidthTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\AddInternetBandwidthTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AddInternetBandwidthTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建全域公网带宽
     *
     * 批量创建全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateInternetBandwidthAsync($request)
    {
        return $this->batchCreateInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function batchCreateInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加全域公网带宽标签
     *
     * 批量添加全域公网带宽标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateInternetBandwidthTagsAsync($request)
    {
        return $this->batchCreateInternetBandwidthTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateInternetBandwidthTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateInternetBandwidthTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateInternetBandwidthTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除全域公网带宽标签
     *
     * 批量删除全域公网带宽标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteInternetBandwidthTagsAsync($request)
    {
        return $this->batchDeleteInternetBandwidthTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteInternetBandwidthTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteInternetBandwidthTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteInternetBandwidthTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域公网带宽个数
     *
     * 查询全域公网带宽个数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countInternetBandwidthAsync($request)
    {
        return $this->countInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function countInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CountInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CountInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 创建全域公网带宽
     *
     * 创建全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInternetBandwidthAsync($request)
    {
        return $this->createInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function createInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CreateInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 创建租户签署免责条款
     *
     * 创建租户签署免责条款
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createUserDisclaimerAsync($request)
    {
        return $this->createUserDisclaimerAsyncWithHttpInfo($request);
    }
    
    public function createUserDisclaimerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/user-disclaimer-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CreateUserDisclaimerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateUserDisclaimerRequest',
            $asyncRequest = true);
    }

    /**
     * 删除全域公网带宽
     *
     * 删除全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInternetBandwidthAsync($request)
    {
        return $this->deleteInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function deleteInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths/{internet_bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['internetBandwidthId'] !== null) {
            $pathParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 删除全域公网带宽标签
     *
     * 删除全域公网带宽标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInternetBandwidthTagAsync($request)
    {
        return $this->deleteInternetBandwidthTagAsyncWithHttpInfo($request);
    }
    
    public function deleteInternetBandwidthTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/{resource_id}/tags/{tag_key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['tagKey'] !== null) {
            $pathParams['tag_key'] = $localVarParams['tagKey'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteInternetBandwidthTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteInternetBandwidthTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除租户撤销免责条款
     *
     * 删除租户撤销免责条款
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteUserDisclaimerAsync($request)
    {
        return $this->deleteUserDisclaimerAsyncWithHttpInfo($request);
    }
    
    public function deleteUserDisclaimerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/user-disclaimer-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteUserDisclaimerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteUserDisclaimerRequest',
            $asyncRequest = true);
    }

    /**
     * 查询接入点列表
     *
     * 查询接入点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessSitesAsync($request)
    {
        return $this->listAccessSitesAsyncWithHttpInfo($request);
    }
    
    public function listAccessSitesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/access-sites';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['proxyRegion'] !== null) {
            $queryParams['proxy_region'] = $localVarParams['proxyRegion'];
        }
        if ($localVarParams['iecAzCode'] !== null) {
            $queryParams['iec_az_code'] = $localVarParams['iecAzCode'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListAccessSitesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListAccessSitesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户全域弹性公网IP配额
     *
     * 查询租户全域弹性公网IP配额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGeipResourceQuotasAsync($request)
    {
        return $this->listGeipResourceQuotasAsyncWithHttpInfo($request);
    }
    
    public function listGeipResourceQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipResourceQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipResourceQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表数目
     *
     * 查询资源实例列表数目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInternetBandwidthCountFilterTagsAsync($request)
    {
        return $this->listInternetBandwidthCountFilterTagsAsyncWithHttpInfo($request);
    }
    
    public function listInternetBandwidthCountFilterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthCountFilterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthCountFilterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域公网带宽项目标签
     *
     * 查询全域公网带宽项目标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInternetBandwidthDomainTagsAsync($request)
    {
        return $this->listInternetBandwidthDomainTagsAsyncWithHttpInfo($request);
    }
    
    public function listInternetBandwidthDomainTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthDomainTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthDomainTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表
     *
     * 查询资源实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInternetBandwidthFilterTagsAsync($request)
    {
        return $this->listInternetBandwidthFilterTagsAsyncWithHttpInfo($request);
    }
    
    public function listInternetBandwidthFilterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthFilterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthFilterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 全域公网带宽限制列表
     *
     * 查询全域公网带宽限制列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInternetBandwidthLimitsAsync($request)
    {
        return $this->listInternetBandwidthLimitsAsyncWithHttpInfo($request);
    }
    
    public function listInternetBandwidthLimitsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidth-limits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['chargeMode'] !== null) {
            $queryParams['charge_mode'] = $localVarParams['chargeMode'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthLimitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthLimitsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域公网带宽列表
     *
     * 查询全域公网带宽列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInternetBandwidthsAsync($request)
    {
        return $this->listInternetBandwidthsAsyncWithHttpInfo($request);
    }
    
    public function listInternetBandwidthsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['extFields'] !== null) {
            $queryParams['ext_fields'] = $localVarParams['extFields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP段支持的掩码列表
     *
     * 查询全域弹性公网IP段支持的掩码列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSupportMasksAsync($request)
    {
        return $this->listSupportMasksAsyncWithHttpInfo($request);
    }
    
    public function listSupportMasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/support-masks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['mask'] !== null) {
            $queryParams['mask'] = $localVarParams['mask'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListSupportMasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListSupportMasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域公网带宽详情
     *
     * 查询全域公网带宽详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInternetBandwidthAsync($request)
    {
        return $this->showInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function showInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths/{internet_bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['internetBandwidthId'] !== null) {
            $pathParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域公网带宽标签
     *
     * 查询全域公网带宽标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInternetBandwidthTagsAsync($request)
    {
        return $this->showInternetBandwidthTagsAsyncWithHttpInfo($request);
    }
    
    public function showInternetBandwidthTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/internet-bandwidth/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowInternetBandwidthTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowInternetBandwidthTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户签署免责条款详情
     *
     * 查询租户签署免责条款详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserDisclaimerAsync($request)
    {
        return $this->showUserDisclaimerAsyncWithHttpInfo($request);
    }
    
    public function showUserDisclaimerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/user-disclaimer-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowUserDisclaimerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowUserDisclaimerRequest',
            $asyncRequest = true);
    }

    /**
     * 更新全域公网带宽
     *
     * 更新全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInternetBandwidthAsync($request)
    {
        return $this->updateInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function updateInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/internet-bandwidths/{internet_bandwidth_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['internetBandwidthId'] !== null) {
            $pathParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 添加全域弹性公网IP段标签
     *
     * 添加全域弹性公网IP段的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addGeipSegmentTagsAsync($request)
    {
        return $this->addGeipSegmentTagsAsyncWithHttpInfo($request);
    }
    
    public function addGeipSegmentTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\AddGeipSegmentTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AddGeipSegmentTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 添加全域弹性公网IP标签
     *
     * 添加全域弹性公网IP的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addGlobalEipTagsAsync($request)
    {
        return $this->addGlobalEipTagsAsyncWithHttpInfo($request);
    }
    
    public function addGlobalEipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\AddGlobalEipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AddGlobalEipTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 全域弹性公网IP段绑定后端实例
     *
     * 全域弹性公网IP段绑定后端实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateGeipSegmentInstanceAsync($request)
    {
        return $this->associateGeipSegmentInstanceAsyncWithHttpInfo($request);
    }
    
    public function associateGeipSegmentInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/{global_eip_segment_id}/associate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipSegmentId'] !== null) {
            $pathParams['global_eip_segment_id'] = $localVarParams['globalEipSegmentId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\AssociateGeipSegmentInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AssociateGeipSegmentInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定后端实例
     *
     * 绑定后端实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateInstanceAsync($request)
    {
        return $this->associateInstanceAsyncWithHttpInfo($request);
    }
    
    public function associateInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}/associate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['bindingInstanceService'] !== null) {
            $headerParams['binding_instance_service'] = $localVarParams['bindingInstanceService'];
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定全域公网带宽
     *
     * 绑定全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachInternetBandwidthAsync($request)
    {
        return $this->attachInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function attachInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}/attach-internet-bandwidth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\AttachInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AttachInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 全域弹性公网IP段批量绑定全域公网带宽
     *
     * 全域弹性公网IP段批量绑定全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAttachGeipSegmentInternetBandwidthAsync($request)
    {
        return $this->batchAttachGeipSegmentInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function batchAttachGeipSegmentInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/batch-attach-internet-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchAttachGeipSegmentInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchAttachGeipSegmentInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 批量绑定全域公网带宽
     *
     * 批量绑定全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAttachInternetBandwidthAsync($request)
    {
        return $this->batchAttachInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function batchAttachInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/batch-attach-internet-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchAttachInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchAttachInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加全域弹性公网IP段标签
     *
     * 批量添加全域弹性公网IP段的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateGeipSegmentTagsAsync($request)
    {
        return $this->batchCreateGeipSegmentTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateGeipSegmentTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGeipSegmentTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGeipSegmentTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量创建全域弹性公网IP
     *
     * 批量创建全域弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateGlobalEipAsync($request)
    {
        return $this->batchCreateGlobalEipAsyncWithHttpInfo($request);
    }
    
    public function batchCreateGlobalEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加全域弹性公网IP标签
     *
     * 批量添加全域弹性公网IP的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateGlobalEipTagsAsync($request)
    {
        return $this->batchCreateGlobalEipTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateGlobalEipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除全域弹性公网IP段标签
     *
     * 批量删除全域弹性公网IP段的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteGeipSegmentTagsAsync($request)
    {
        return $this->batchDeleteGeipSegmentTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteGeipSegmentTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteGeipSegmentTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteGeipSegmentTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除全域弹性公网IP标签
     *
     * 批量删除全域弹性公网IP的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteGlobalEipTagsAsync($request)
    {
        return $this->batchDeleteGlobalEipTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteGlobalEipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteGlobalEipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteGlobalEipTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 全域弹性公网IP段批量解绑全域公网带宽
     *
     * 全域弹性公网IP段批量解绑全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDetachGeipSegmentInternetBandwidthAsync($request)
    {
        return $this->batchDetachGeipSegmentInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function batchDetachGeipSegmentInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/batch-detach-internet-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDetachGeipSegmentInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDetachGeipSegmentInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 批量解绑全域公网带宽
     *
     * 批量解绑全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDetachInternetBandwidthAsync($request)
    {
        return $this->batchDetachInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function batchDetachInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/batch-detach-internet-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDetachInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDetachInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP段个数
     *
     * 查询全域弹性公网IP段个数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countGlobalEipSegmentAsync($request)
    {
        return $this->countGlobalEipSegmentAsyncWithHttpInfo($request);
    }
    
    public function countGlobalEipSegmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['internetBandwidthId'] !== null) {
            $queryParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['geipPoolName'] !== null) {
            $queryParams['geip_pool_name'] = $localVarParams['geipPoolName'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['cidr'] !== null) {
            $queryParams['cidr'] = $localVarParams['cidr'];
        }
        if ($localVarParams['cidrV6'] !== null) {
            $queryParams['cidr_v6'] = $localVarParams['cidrV6'];
        }
        if ($localVarParams['freezen'] !== null) {
            $queryParams['freezen'] = $localVarParams['freezen'];
        }
        if ($localVarParams['internetBandwidthIsNull'] !== null) {
            $queryParams['internet_bandwidth_is_null'] = $localVarParams['internetBandwidthIsNull'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['associateInstanceRegion'] !== null) {
            $queryParams['associate_instance_region'] = $localVarParams['associateInstanceRegion'];
        }
        if ($localVarParams['associateInstancePublicBorderGroup'] !== null) {
            $queryParams['associate_instance_public_border_group'] = $localVarParams['associateInstancePublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInstanceSite'] !== null) {
            $queryParams['associate_instance_instance_site'] = $localVarParams['associateInstanceInstanceSite'];
        }
        if ($localVarParams['associateInstanceInstanceType'] !== null) {
            $queryParams['associate_instance_instance_type'] = $localVarParams['associateInstanceInstanceType'];
        }
        if ($localVarParams['associateInstanceInstanceId'] !== null) {
            $queryParams['associate_instance_instance_id'] = $localVarParams['associateInstanceInstanceId'];
        }
        if ($localVarParams['associateInstanceProjectId'] !== null) {
            $queryParams['associate_instance_project_id'] = $localVarParams['associateInstanceProjectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CountGlobalEipSegmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CountGlobalEipSegmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP个数
     *
     * 查询全域弹性公网IP个数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countGlobalEipsAsync($request)
    {
        return $this->countGlobalEipsAsyncWithHttpInfo($request);
    }
    
    public function countGlobalEipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['internetBandwidthId'] !== null) {
            $queryParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['geipPoolName'] !== null) {
            $queryParams['geip_pool_name'] = $localVarParams['geipPoolName'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['ipAddress'] !== null) {
            $queryParams['ip_address'] = $localVarParams['ipAddress'];
        }
        if ($localVarParams['ipv6Address'] !== null) {
            $queryParams['ipv6_address'] = $localVarParams['ipv6Address'];
        }
        if ($localVarParams['freezen'] !== null) {
            $queryParams['freezen'] = $localVarParams['freezen'];
        }
        if ($localVarParams['polluted'] !== null) {
            $queryParams['polluted'] = $localVarParams['polluted'];
        }
        if ($localVarParams['internetBandwidthIsNull'] !== null) {
            $queryParams['internet_bandwidth_is_null'] = $localVarParams['internetBandwidthIsNull'];
        }
        if ($localVarParams['gcbBandwidthIsNull'] !== null) {
            $queryParams['gcb_bandwidth_is_null'] = $localVarParams['gcbBandwidthIsNull'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['associateInstanceInfoRegion'] !== null) {
            $queryParams['associate_instance_info_region'] = $localVarParams['associateInstanceInfoRegion'];
        }
        if ($localVarParams['associateInstanceInfoPublicBorderGroup'] !== null) {
            $queryParams['associate_instance_info_public_border_group'] = $localVarParams['associateInstanceInfoPublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInfoInstanceSite'] !== null) {
            $queryParams['associate_instance_info_instance_site'] = $localVarParams['associateInstanceInfoInstanceSite'];
        }
        if ($localVarParams['associateInstanceInfoInstanceType'] !== null) {
            $queryParams['associate_instance_info_instance_type'] = $localVarParams['associateInstanceInfoInstanceType'];
        }
        if ($localVarParams['associateInstanceInfoInstanceId'] !== null) {
            $queryParams['associate_instance_info_instance_id'] = $localVarParams['associateInstanceInfoInstanceId'];
        }
        if ($localVarParams['associateInstanceInfoProjectId'] !== null) {
            $queryParams['associate_instance_info_project_id'] = $localVarParams['associateInstanceInfoProjectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CountGlobalEipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CountGlobalEipsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建全域弹性公网IP
     *
     * 创建全域弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGlobalEipAsync($request)
    {
        return $this->createGlobalEipAsyncWithHttpInfo($request);
    }
    
    public function createGlobalEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequest',
            $asyncRequest = true);
    }

    /**
     * 创建全域弹性公网IP段
     *
     * 创建全域弹性公网IP段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGlobalEipSegmentAsync($request)
    {
        return $this->createGlobalEipSegmentAsyncWithHttpInfo($request);
    }
    
    public function createGlobalEipSegmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipSegmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipSegmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除全域弹性公网IP段标签
     *
     * 删除全域弹性公网IP段的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGeipSegmentTagAsync($request)
    {
        return $this->deleteGeipSegmentTagAsyncWithHttpInfo($request);
    }
    
    public function deleteGeipSegmentTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/{resource_id}/tags/{tag_key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['tagKey'] !== null) {
            $pathParams['tag_key'] = $localVarParams['tagKey'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGeipSegmentTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGeipSegmentTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除全域弹性公网IP
     *
     * 删除全域弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGlobalEipAsync($request)
    {
        return $this->deleteGlobalEipAsyncWithHttpInfo($request);
    }
    
    public function deleteGlobalEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipRequest',
            $asyncRequest = true);
    }

    /**
     * 删除全域弹性公网IP段
     *
     * 删除全域弹性公网IP段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGlobalEipSegmentAsync($request)
    {
        return $this->deleteGlobalEipSegmentAsyncWithHttpInfo($request);
    }
    
    public function deleteGlobalEipSegmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/{global_eip_segment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipSegmentId'] !== null) {
            $pathParams['global_eip_segment_id'] = $localVarParams['globalEipSegmentId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipSegmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipSegmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除全域弹性公网IP标签
     *
     * 删除全域弹性公网IP的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGlobalEipTagAsync($request)
    {
        return $this->deleteGlobalEipTagAsyncWithHttpInfo($request);
    }
    
    public function deleteGlobalEipTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/{resource_id}/tags/{tag_key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['tagKey'] !== null) {
            $pathParams['tag_key'] = $localVarParams['tagKey'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipTagRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑全域公网带宽
     *
     * 解绑全域公网带宽
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachInternetBandwidthAsync($request)
    {
        return $this->detachInternetBandwidthAsyncWithHttpInfo($request);
    }
    
    public function detachInternetBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}/detach-internet-bandwidth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['forceUnbind'] !== null) {
            $queryParams['force_unbind'] = $localVarParams['forceUnbind'];
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DetachInternetBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DetachInternetBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 全域弹性公网IP段解绑后端实例
     *
     * 全域弹性公网IP段解绑后端实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateGeipSegmentInstanceAsync($request)
    {
        return $this->disassociateGeipSegmentInstanceAsyncWithHttpInfo($request);
    }
    
    public function disassociateGeipSegmentInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/{global_eip_segment_id}/disassociate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipSegmentId'] !== null) {
            $pathParams['global_eip_segment_id'] = $localVarParams['globalEipSegmentId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DisassociateGeipSegmentInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DisassociateGeipSegmentInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑后端实例
     *
     * 解绑后端实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateInstanceAsync($request)
    {
        return $this->disassociateInstanceAsyncWithHttpInfo($request);
    }
    
    public function disassociateInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}/disassociate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['isReserveGcb'] !== null) {
            $headerParams['is_reserve_gcb'] = $localVarParams['isReserveGcb'];
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\DisassociateInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DisassociateInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP池列表
     *
     * 查询全域弹性公网IP池列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGeipPoolsAsync($request)
    {
        return $this->listGeipPoolsAsyncWithHttpInfo($request);
    }
    
    public function listGeipPoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/geip-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipPoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipPoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表数目
     *
     * 查询资源实例列表的数目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGeipSegmentCountFilterTagsAsync($request)
    {
        return $this->listGeipSegmentCountFilterTagsAsyncWithHttpInfo($request);
    }
    
    public function listGeipSegmentCountFilterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentCountFilterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentCountFilterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP段项目标签
     *
     * 查询全域弹性公网IP段的项目标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGeipSegmentDomainTagsAsync($request)
    {
        return $this->listGeipSegmentDomainTagsAsyncWithHttpInfo($request);
    }
    
    public function listGeipSegmentDomainTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentDomainTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentDomainTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表
     *
     * 查询资源实例的列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGeipSegmentFilterTagsAsync($request)
    {
        return $this->listGeipSegmentFilterTagsAsyncWithHttpInfo($request);
    }
    
    public function listGeipSegmentFilterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentFilterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentFilterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表数目
     *
     * 查询资源实例列表数目
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalEipCountFilterTagsAsync($request)
    {
        return $this->listGlobalEipCountFilterTagsAsyncWithHttpInfo($request);
    }
    
    public function listGlobalEipCountFilterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipCountFilterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipCountFilterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP项目标签
     *
     * 查询全域弹性公网IP的项目标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalEipDomainTagsAsync($request)
    {
        return $this->listGlobalEipDomainTagsAsyncWithHttpInfo($request);
    }
    
    public function listGlobalEipDomainTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipDomainTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipDomainTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例列表
     *
     * 查询资源实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalEipFilterTagsAsync($request)
    {
        return $this->listGlobalEipFilterTagsAsyncWithHttpInfo($request);
    }
    
    public function listGlobalEipFilterTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipFilterTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipFilterTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP段列表
     *
     * 查询全域弹性公网IP段列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalEipSegmentsAsync($request)
    {
        return $this->listGlobalEipSegmentsAsyncWithHttpInfo($request);
    }
    
    public function listGlobalEipSegmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['internetBandwidthId'] !== null) {
            $queryParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['geipPoolName'] !== null) {
            $queryParams['geip_pool_name'] = $localVarParams['geipPoolName'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['cidr'] !== null) {
            $queryParams['cidr'] = $localVarParams['cidr'];
        }
        if ($localVarParams['cidrV6'] !== null) {
            $queryParams['cidr_v6'] = $localVarParams['cidrV6'];
        }
        if ($localVarParams['freezen'] !== null) {
            $queryParams['freezen'] = $localVarParams['freezen'];
        }
        if ($localVarParams['internetBandwidthIsNull'] !== null) {
            $queryParams['internet_bandwidth_is_null'] = $localVarParams['internetBandwidthIsNull'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['associateInstanceRegion'] !== null) {
            $queryParams['associate_instance_region'] = $localVarParams['associateInstanceRegion'];
        }
        if ($localVarParams['associateInstanceInstanceType'] !== null) {
            $queryParams['associate_instance_instance_type'] = $localVarParams['associateInstanceInstanceType'];
        }
        if ($localVarParams['associateInstancePublicBorderGroup'] !== null) {
            $queryParams['associate_instance_public_border_group'] = $localVarParams['associateInstancePublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInstanceSite'] !== null) {
            $queryParams['associate_instance_instance_site'] = $localVarParams['associateInstanceInstanceSite'];
        }
        if ($localVarParams['associateInstanceInstanceId'] !== null) {
            $queryParams['associate_instance_instance_id'] = $localVarParams['associateInstanceInstanceId'];
        }
        if ($localVarParams['associateInstanceProjectId'] !== null) {
            $queryParams['associate_instance_project_id'] = $localVarParams['associateInstanceProjectId'];
        }
        if ($localVarParams['associateInstanceServiceId'] !== null) {
            $queryParams['associate_instance_service_id'] = $localVarParams['associateInstanceServiceId'];
        }
        if ($localVarParams['associateInstanceServiceType'] !== null) {
            $queryParams['associate_instance_service_type'] = $localVarParams['associateInstanceServiceType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipSegmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipSegmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP列表
     *
     * 查询全域弹性公网IP列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalEipsAsync($request)
    {
        return $this->listGlobalEipsAsyncWithHttpInfo($request);
    }
    
    public function listGlobalEipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['internetBandwidthId'] !== null) {
            $queryParams['internet_bandwidth_id'] = $localVarParams['internetBandwidthId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameLike'] !== null) {
            $queryParams['name_like'] = $localVarParams['nameLike'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['geipPoolName'] !== null) {
            $queryParams['geip_pool_name'] = $localVarParams['geipPoolName'];
        }
        if ($localVarParams['isp'] !== null) {
            $queryParams['isp'] = $localVarParams['isp'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['ipAddress'] !== null) {
            $queryParams['ip_address'] = $localVarParams['ipAddress'];
        }
        if ($localVarParams['ipv6Address'] !== null) {
            $queryParams['ipv6_address'] = $localVarParams['ipv6Address'];
        }
        if ($localVarParams['freezen'] !== null) {
            $queryParams['freezen'] = $localVarParams['freezen'];
        }
        if ($localVarParams['polluted'] !== null) {
            $queryParams['polluted'] = $localVarParams['polluted'];
        }
        if ($localVarParams['internetBandwidthIsNull'] !== null) {
            $queryParams['internet_bandwidth_is_null'] = $localVarParams['internetBandwidthIsNull'];
        }
        if ($localVarParams['gcbBandwidthIsNull'] !== null) {
            $queryParams['gcb_bandwidth_is_null'] = $localVarParams['gcbBandwidthIsNull'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['associateInstanceInfoRegion'] !== null) {
            $queryParams['associate_instance_info_region'] = $localVarParams['associateInstanceInfoRegion'];
        }
        if ($localVarParams['associateInstanceInfoInstanceType'] !== null) {
            $queryParams['associate_instance_info_instance_type'] = $localVarParams['associateInstanceInfoInstanceType'];
        }
        if ($localVarParams['associateInstanceInfoPublicBorderGroup'] !== null) {
            $queryParams['associate_instance_info_public_border_group'] = $localVarParams['associateInstanceInfoPublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInfoInstanceSite'] !== null) {
            $queryParams['associate_instance_info_instance_site'] = $localVarParams['associateInstanceInfoInstanceSite'];
        }
        if ($localVarParams['associateInstanceInfoInstanceId'] !== null) {
            $queryParams['associate_instance_info_instance_id'] = $localVarParams['associateInstanceInfoInstanceId'];
        }
        if ($localVarParams['associateInstanceInfoProjectId'] !== null) {
            $queryParams['associate_instance_info_project_id'] = $localVarParams['associateInstanceInfoProjectId'];
        }
        if ($localVarParams['associateInstanceInfoServiceId'] !== null) {
            $queryParams['associate_instance_info_service_id'] = $localVarParams['associateInstanceInfoServiceId'];
        }
        if ($localVarParams['associateInstanceInfoServiceType'] !== null) {
            $queryParams['associate_instance_info_service_type'] = $localVarParams['associateInstanceInfoServiceType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP段标签
     *
     * 查询全域弹性公网IP段的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGeipSegmentTagsAsync($request)
    {
        return $this->showGeipSegmentTagsAsyncWithHttpInfo($request);
    }
    
    public function showGeipSegmentTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip-segment/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGeipSegmentTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGeipSegmentTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP详情
     *
     * 查询全域弹性公网IP详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGlobalEipAsync($request)
    {
        return $this->showGlobalEipAsyncWithHttpInfo($request);
    }
    
    public function showGlobalEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP段详情
     *
     * 查询全域弹性公网IP段详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGlobalEipSegmentAsync($request)
    {
        return $this->showGlobalEipSegmentAsyncWithHttpInfo($request);
    }
    
    public function showGlobalEipSegmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/{global_eip_segment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['globalEipSegmentId'] !== null) {
            $pathParams['global_eip_segment_id'] = $localVarParams['globalEipSegmentId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipSegmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipSegmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全域弹性公网IP标签
     *
     * 查询全域弹性公网IP的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGlobalEipTagsAsync($request)
    {
        return $this->showGlobalEipTagsAsyncWithHttpInfo($request);
    }
    
    public function showGlobalEipTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/global-eip/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新全域弹性公网IP信息
     *
     * 更新全域弹性公网IP信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGlobalEipAsync($request)
    {
        return $this->updateGlobalEipAsyncWithHttpInfo($request);
    }
    
    public function updateGlobalEipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/{global_eip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipId'] !== null) {
            $pathParams['global_eip_id'] = $localVarParams['globalEipId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateGlobalEipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateGlobalEipRequest',
            $asyncRequest = true);
    }

    /**
     * 更新全域弹性公网IP段
     *
     * 更新全域弹性公网IP段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGlobalEipSegmentAsync($request)
    {
        return $this->updateGlobalEipSegmentAsyncWithHttpInfo($request);
    }
    
    public function updateGlobalEipSegmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eip-segments/{global_eip_segment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['globalEipSegmentId'] !== null) {
            $pathParams['global_eip_segment_id'] = $localVarParams['globalEipSegmentId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateGlobalEipSegmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateGlobalEipSegmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Job列表
     *
     * 查询Job列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobsAsync($request)
    {
        return $this->listJobsAsyncWithHttpInfo($request);
    }
    
    public function listJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Job详情
     *
     * 查询Job详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobsAsync($request)
    {
        return $this->showJobsAsyncWithHttpInfo($request);
    }
    
    public function showJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ShowJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 全域弹性公网IP支持绑定的Region限制
     *
     * 全域弹性公网IP支持绑定的Region限制
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSupportRegionsAsync($request)
    {
        return $this->listSupportRegionsAsyncWithHttpInfo($request);
    }
    
    public function listSupportRegionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/geip/support-regions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['instanceType'] !== null) {
            $queryParams['instance_type'] = $localVarParams['instanceType'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $queryParams['access_site'] = $localVarParams['accessSite'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['remoteEndpoint'] !== null) {
            $queryParams['remote_endpoint'] = $localVarParams['remoteEndpoint'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListSupportRegionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListSupportRegionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定站点允许绑定的Region信息
     *
     * console通过此接口获取指定pop点的全域弹性公网IP允许绑定的region实例信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTenantGeipSupportInstancesAsync($request)
    {
        return $this->listTenantGeipSupportInstancesAsyncWithHttpInfo($request);
    }
    
    public function listTenantGeipSupportInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{domain_id}/global-eips/support-instances/{access_site}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fields'] !== null) {
            $queryParams['fields'] = $localVarParams['fields'];
        }
        if ($localVarParams['accessSite'] !== null) {
            $pathParams['access_site'] = $localVarParams['accessSite'];
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
            $responseType='\HuaweiCloud\SDK\Geip\V3\Model\ListTenantGeipSupportInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListTenantGeipSupportInstancesRequest',
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