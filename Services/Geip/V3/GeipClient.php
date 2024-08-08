<?php

namespace HuaweiCloud\SDK\Geip\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class GeipClient extends Client
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
        $client = new ClientBuilder(new GeipClient(), "GlobalCredentials");
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
    public function addInternetBandwidthTags($request)
    {
        return $this->addInternetBandwidthTagsWithHttpInfo($request);
    }

    public function addInternetBandwidthTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AddInternetBandwidthTagsRequest');
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
    public function batchCreateInternetBandwidth($request)
    {
        return $this->batchCreateInternetBandwidthWithHttpInfo($request);
    }

    public function batchCreateInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateInternetBandwidthRequest');
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
    public function batchCreateInternetBandwidthTags($request)
    {
        return $this->batchCreateInternetBandwidthTagsWithHttpInfo($request);
    }

    public function batchCreateInternetBandwidthTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateInternetBandwidthTagsRequest');
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
    public function batchDeleteInternetBandwidthTags($request)
    {
        return $this->batchDeleteInternetBandwidthTagsWithHttpInfo($request);
    }

    public function batchDeleteInternetBandwidthTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteInternetBandwidthTagsRequest');
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
    public function countInternetBandwidth($request)
    {
        return $this->countInternetBandwidthWithHttpInfo($request);
    }

    public function countInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CountInternetBandwidthRequest');
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
    public function createInternetBandwidth($request)
    {
        return $this->createInternetBandwidthWithHttpInfo($request);
    }

    public function createInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateInternetBandwidthRequest');
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
    public function createUserDisclaimer($request)
    {
        return $this->createUserDisclaimerWithHttpInfo($request);
    }

    public function createUserDisclaimerWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateUserDisclaimerRequest');
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
    public function deleteInternetBandwidth($request)
    {
        return $this->deleteInternetBandwidthWithHttpInfo($request);
    }

    public function deleteInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteInternetBandwidthRequest');
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
    public function deleteInternetBandwidthTag($request)
    {
        return $this->deleteInternetBandwidthTagWithHttpInfo($request);
    }

    public function deleteInternetBandwidthTagWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteInternetBandwidthTagRequest');
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
    public function deleteUserDisclaimer($request)
    {
        return $this->deleteUserDisclaimerWithHttpInfo($request);
    }

    public function deleteUserDisclaimerWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteUserDisclaimerRequest');
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
    public function listAccessSites($request)
    {
        return $this->listAccessSitesWithHttpInfo($request);
    }

    public function listAccessSitesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListAccessSitesRequest');
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
    public function listGeipResourceQuotas($request)
    {
        return $this->listGeipResourceQuotasWithHttpInfo($request);
    }

    public function listGeipResourceQuotasWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipResourceQuotasRequest');
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
    public function listInternetBandwidthCountFilterTags($request)
    {
        return $this->listInternetBandwidthCountFilterTagsWithHttpInfo($request);
    }

    public function listInternetBandwidthCountFilterTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthCountFilterTagsRequest');
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
    public function listInternetBandwidthDomainTags($request)
    {
        return $this->listInternetBandwidthDomainTagsWithHttpInfo($request);
    }

    public function listInternetBandwidthDomainTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthDomainTagsRequest');
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
    public function listInternetBandwidthFilterTags($request)
    {
        return $this->listInternetBandwidthFilterTagsWithHttpInfo($request);
    }

    public function listInternetBandwidthFilterTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthFilterTagsRequest');
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
    public function listInternetBandwidthLimits($request)
    {
        return $this->listInternetBandwidthLimitsWithHttpInfo($request);
    }

    public function listInternetBandwidthLimitsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthLimitsRequest');
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
    public function listInternetBandwidths($request)
    {
        return $this->listInternetBandwidthsWithHttpInfo($request);
    }

    public function listInternetBandwidthsWithHttpInfo($request)
    {
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
            $queryParams['ext-fields'] = $localVarParams['extFields'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListInternetBandwidthsRequest');
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
    public function listSupportMasks($request)
    {
        return $this->listSupportMasksWithHttpInfo($request);
    }

    public function listSupportMasksWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListSupportMasksRequest');
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
    public function showInternetBandwidth($request)
    {
        return $this->showInternetBandwidthWithHttpInfo($request);
    }

    public function showInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowInternetBandwidthRequest');
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
    public function showInternetBandwidthTags($request)
    {
        return $this->showInternetBandwidthTagsWithHttpInfo($request);
    }

    public function showInternetBandwidthTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowInternetBandwidthTagsRequest');
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
    public function showUserDisclaimer($request)
    {
        return $this->showUserDisclaimerWithHttpInfo($request);
    }

    public function showUserDisclaimerWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowUserDisclaimerRequest');
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
    public function updateInternetBandwidth($request)
    {
        return $this->updateInternetBandwidthWithHttpInfo($request);
    }

    public function updateInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateInternetBandwidthRequest');
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
    public function addGeipSegmentTags($request)
    {
        return $this->addGeipSegmentTagsWithHttpInfo($request);
    }

    public function addGeipSegmentTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AddGeipSegmentTagsRequest');
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
    public function addGlobalEipTags($request)
    {
        return $this->addGlobalEipTagsWithHttpInfo($request);
    }

    public function addGlobalEipTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AddGlobalEipTagsRequest');
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
    public function associateGeipSegmentInstance($request)
    {
        return $this->associateGeipSegmentInstanceWithHttpInfo($request);
    }

    public function associateGeipSegmentInstanceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AssociateGeipSegmentInstanceRequest');
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
    public function associateInstance($request)
    {
        return $this->associateInstanceWithHttpInfo($request);
    }

    public function associateInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['bindingInstanceService']] = $localVarParams['bindingInstanceService'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceRequest');
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
    public function attachInternetBandwidth($request)
    {
        return $this->attachInternetBandwidthWithHttpInfo($request);
    }

    public function attachInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\AttachInternetBandwidthRequest');
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
    public function batchAttachGeipSegmentInternetBandwidth($request)
    {
        return $this->batchAttachGeipSegmentInternetBandwidthWithHttpInfo($request);
    }

    public function batchAttachGeipSegmentInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchAttachGeipSegmentInternetBandwidthRequest');
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
    public function batchAttachInternetBandwidth($request)
    {
        return $this->batchAttachInternetBandwidthWithHttpInfo($request);
    }

    public function batchAttachInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchAttachInternetBandwidthRequest');
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
    public function batchCreateGeipSegmentTags($request)
    {
        return $this->batchCreateGeipSegmentTagsWithHttpInfo($request);
    }

    public function batchCreateGeipSegmentTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGeipSegmentTagsRequest');
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
    public function batchCreateGlobalEip($request)
    {
        return $this->batchCreateGlobalEipWithHttpInfo($request);
    }

    public function batchCreateGlobalEipWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipRequest');
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
    public function batchCreateGlobalEipTags($request)
    {
        return $this->batchCreateGlobalEipTagsWithHttpInfo($request);
    }

    public function batchCreateGlobalEipTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipTagsRequest');
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
    public function batchDeleteGeipSegmentTags($request)
    {
        return $this->batchDeleteGeipSegmentTagsWithHttpInfo($request);
    }

    public function batchDeleteGeipSegmentTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteGeipSegmentTagsRequest');
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
    public function batchDeleteGlobalEipTags($request)
    {
        return $this->batchDeleteGlobalEipTagsWithHttpInfo($request);
    }

    public function batchDeleteGlobalEipTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDeleteGlobalEipTagsRequest');
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
    public function batchDetachGeipSegmentInternetBandwidth($request)
    {
        return $this->batchDetachGeipSegmentInternetBandwidthWithHttpInfo($request);
    }

    public function batchDetachGeipSegmentInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDetachGeipSegmentInternetBandwidthRequest');
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
    public function batchDetachInternetBandwidth($request)
    {
        return $this->batchDetachInternetBandwidthWithHttpInfo($request);
    }

    public function batchDetachInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\BatchDetachInternetBandwidthRequest');
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
    public function countGlobalEipSegment($request)
    {
        return $this->countGlobalEipSegmentWithHttpInfo($request);
    }

    public function countGlobalEipSegmentWithHttpInfo($request)
    {
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
            $queryParams['associate_instance.region'] = $localVarParams['associateInstanceRegion'];
        }
        if ($localVarParams['associateInstancePublicBorderGroup'] !== null) {
            $queryParams['associate_instance.public_border_group'] = $localVarParams['associateInstancePublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInstanceSite'] !== null) {
            $queryParams['associate_instance.instance_site'] = $localVarParams['associateInstanceInstanceSite'];
        }
        if ($localVarParams['associateInstanceInstanceType'] !== null) {
            $queryParams['associate_instance.instance_type'] = $localVarParams['associateInstanceInstanceType'];
        }
        if ($localVarParams['associateInstanceInstanceId'] !== null) {
            $queryParams['associate_instance.instance_id'] = $localVarParams['associateInstanceInstanceId'];
        }
        if ($localVarParams['associateInstanceProjectId'] !== null) {
            $queryParams['associate_instance.project_id'] = $localVarParams['associateInstanceProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CountGlobalEipSegmentRequest');
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
    public function countGlobalEips($request)
    {
        return $this->countGlobalEipsWithHttpInfo($request);
    }

    public function countGlobalEipsWithHttpInfo($request)
    {
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
            $queryParams['associate_instance_info.region'] = $localVarParams['associateInstanceInfoRegion'];
        }
        if ($localVarParams['associateInstanceInfoPublicBorderGroup'] !== null) {
            $queryParams['associate_instance_info.public_border_group'] = $localVarParams['associateInstanceInfoPublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInfoInstanceSite'] !== null) {
            $queryParams['associate_instance_info.instance_site'] = $localVarParams['associateInstanceInfoInstanceSite'];
        }
        if ($localVarParams['associateInstanceInfoInstanceType'] !== null) {
            $queryParams['associate_instance_info.instance_type'] = $localVarParams['associateInstanceInfoInstanceType'];
        }
        if ($localVarParams['associateInstanceInfoInstanceId'] !== null) {
            $queryParams['associate_instance_info.instance_id'] = $localVarParams['associateInstanceInfoInstanceId'];
        }
        if ($localVarParams['associateInstanceInfoProjectId'] !== null) {
            $queryParams['associate_instance_info.project_id'] = $localVarParams['associateInstanceInfoProjectId'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CountGlobalEipsRequest');
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
    public function createGlobalEip($request)
    {
        return $this->createGlobalEipWithHttpInfo($request);
    }

    public function createGlobalEipWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequest');
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
    public function createGlobalEipSegment($request)
    {
        return $this->createGlobalEipSegmentWithHttpInfo($request);
    }

    public function createGlobalEipSegmentWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipSegmentRequest');
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
    public function deleteGeipSegmentTag($request)
    {
        return $this->deleteGeipSegmentTagWithHttpInfo($request);
    }

    public function deleteGeipSegmentTagWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGeipSegmentTagRequest');
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
    public function deleteGlobalEip($request)
    {
        return $this->deleteGlobalEipWithHttpInfo($request);
    }

    public function deleteGlobalEipWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipRequest');
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
    public function deleteGlobalEipSegment($request)
    {
        return $this->deleteGlobalEipSegmentWithHttpInfo($request);
    }

    public function deleteGlobalEipSegmentWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipSegmentRequest');
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
    public function deleteGlobalEipTag($request)
    {
        return $this->deleteGlobalEipTagWithHttpInfo($request);
    }

    public function deleteGlobalEipTagWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DeleteGlobalEipTagRequest');
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
    public function detachInternetBandwidth($request)
    {
        return $this->detachInternetBandwidthWithHttpInfo($request);
    }

    public function detachInternetBandwidthWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DetachInternetBandwidthRequest');
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
    public function disassociateGeipSegmentInstance($request)
    {
        return $this->disassociateGeipSegmentInstanceWithHttpInfo($request);
    }

    public function disassociateGeipSegmentInstanceWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DisassociateGeipSegmentInstanceRequest');
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
    public function disassociateInstance($request)
    {
        return $this->disassociateInstanceWithHttpInfo($request);
    }

    public function disassociateInstanceWithHttpInfo($request)
    {
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
            $headerParams[$arr['isReserveGcb']] = $localVarParams['isReserveGcb'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\DisassociateInstanceRequest');
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
    public function listGeipPools($request)
    {
        return $this->listGeipPoolsWithHttpInfo($request);
    }

    public function listGeipPoolsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipPoolsRequest');
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
    public function listGeipSegmentCountFilterTags($request)
    {
        return $this->listGeipSegmentCountFilterTagsWithHttpInfo($request);
    }

    public function listGeipSegmentCountFilterTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentCountFilterTagsRequest');
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
    public function listGeipSegmentDomainTags($request)
    {
        return $this->listGeipSegmentDomainTagsWithHttpInfo($request);
    }

    public function listGeipSegmentDomainTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentDomainTagsRequest');
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
    public function listGeipSegmentFilterTags($request)
    {
        return $this->listGeipSegmentFilterTagsWithHttpInfo($request);
    }

    public function listGeipSegmentFilterTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGeipSegmentFilterTagsRequest');
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
    public function listGlobalEipCountFilterTags($request)
    {
        return $this->listGlobalEipCountFilterTagsWithHttpInfo($request);
    }

    public function listGlobalEipCountFilterTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipCountFilterTagsRequest');
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
    public function listGlobalEipDomainTags($request)
    {
        return $this->listGlobalEipDomainTagsWithHttpInfo($request);
    }

    public function listGlobalEipDomainTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipDomainTagsRequest');
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
    public function listGlobalEipFilterTags($request)
    {
        return $this->listGlobalEipFilterTagsWithHttpInfo($request);
    }

    public function listGlobalEipFilterTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipFilterTagsRequest');
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
    public function listGlobalEipSegments($request)
    {
        return $this->listGlobalEipSegmentsWithHttpInfo($request);
    }

    public function listGlobalEipSegmentsWithHttpInfo($request)
    {
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
            $queryParams['associate_instance.region'] = $localVarParams['associateInstanceRegion'];
        }
        if ($localVarParams['associateInstanceInstanceType'] !== null) {
            $queryParams['associate_instance.instance_type'] = $localVarParams['associateInstanceInstanceType'];
        }
        if ($localVarParams['associateInstancePublicBorderGroup'] !== null) {
            $queryParams['associate_instance.public_border_group'] = $localVarParams['associateInstancePublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInstanceSite'] !== null) {
            $queryParams['associate_instance.instance_site'] = $localVarParams['associateInstanceInstanceSite'];
        }
        if ($localVarParams['associateInstanceInstanceId'] !== null) {
            $queryParams['associate_instance.instance_id'] = $localVarParams['associateInstanceInstanceId'];
        }
        if ($localVarParams['associateInstanceProjectId'] !== null) {
            $queryParams['associate_instance.project_id'] = $localVarParams['associateInstanceProjectId'];
        }
        if ($localVarParams['associateInstanceServiceId'] !== null) {
            $queryParams['associate_instance.service_id'] = $localVarParams['associateInstanceServiceId'];
        }
        if ($localVarParams['associateInstanceServiceType'] !== null) {
            $queryParams['associate_instance.service_type'] = $localVarParams['associateInstanceServiceType'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipSegmentsRequest');
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
    public function listGlobalEips($request)
    {
        return $this->listGlobalEipsWithHttpInfo($request);
    }

    public function listGlobalEipsWithHttpInfo($request)
    {
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
            $queryParams['associate_instance_info.region'] = $localVarParams['associateInstanceInfoRegion'];
        }
        if ($localVarParams['associateInstanceInfoInstanceType'] !== null) {
            $queryParams['associate_instance_info.instance_type'] = $localVarParams['associateInstanceInfoInstanceType'];
        }
        if ($localVarParams['associateInstanceInfoPublicBorderGroup'] !== null) {
            $queryParams['associate_instance_info.public_border_group'] = $localVarParams['associateInstanceInfoPublicBorderGroup'];
        }
        if ($localVarParams['associateInstanceInfoInstanceSite'] !== null) {
            $queryParams['associate_instance_info.instance_site'] = $localVarParams['associateInstanceInfoInstanceSite'];
        }
        if ($localVarParams['associateInstanceInfoInstanceId'] !== null) {
            $queryParams['associate_instance_info.instance_id'] = $localVarParams['associateInstanceInfoInstanceId'];
        }
        if ($localVarParams['associateInstanceInfoProjectId'] !== null) {
            $queryParams['associate_instance_info.project_id'] = $localVarParams['associateInstanceInfoProjectId'];
        }
        if ($localVarParams['associateInstanceInfoServiceId'] !== null) {
            $queryParams['associate_instance_info.service_id'] = $localVarParams['associateInstanceInfoServiceId'];
        }
        if ($localVarParams['associateInstanceInfoServiceType'] !== null) {
            $queryParams['associate_instance_info.service_type'] = $localVarParams['associateInstanceInfoServiceType'];
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListGlobalEipsRequest');
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
    public function showGeipSegmentTags($request)
    {
        return $this->showGeipSegmentTagsWithHttpInfo($request);
    }

    public function showGeipSegmentTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGeipSegmentTagsRequest');
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
    public function showGlobalEip($request)
    {
        return $this->showGlobalEipWithHttpInfo($request);
    }

    public function showGlobalEipWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipRequest');
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
    public function showGlobalEipSegment($request)
    {
        return $this->showGlobalEipSegmentWithHttpInfo($request);
    }

    public function showGlobalEipSegmentWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipSegmentRequest');
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
    public function showGlobalEipTags($request)
    {
        return $this->showGlobalEipTagsWithHttpInfo($request);
    }

    public function showGlobalEipTagsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowGlobalEipTagsRequest');
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
    public function updateGlobalEip($request)
    {
        return $this->updateGlobalEipWithHttpInfo($request);
    }

    public function updateGlobalEipWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateGlobalEipRequest');
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
    public function updateGlobalEipSegment($request)
    {
        return $this->updateGlobalEipSegmentWithHttpInfo($request);
    }

    public function updateGlobalEipSegmentWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\UpdateGlobalEipSegmentRequest');
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
    public function listJobs($request)
    {
        return $this->listJobsWithHttpInfo($request);
    }

    public function listJobsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListJobsRequest');
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
    public function showJobs($request)
    {
        return $this->showJobsWithHttpInfo($request);
    }

    public function showJobsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ShowJobsRequest');
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
    public function listSupportRegions($request)
    {
        return $this->listSupportRegionsWithHttpInfo($request);
    }

    public function listSupportRegionsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListSupportRegionsRequest');
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
    public function listTenantGeipSupportInstances($request)
    {
        return $this->listTenantGeipSupportInstancesWithHttpInfo($request);
    }

    public function listTenantGeipSupportInstancesWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Geip\V3\Model\ListTenantGeipSupportInstancesRequest');
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