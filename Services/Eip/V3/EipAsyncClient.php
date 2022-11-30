<?php

namespace HuaweiCloud\SDK\Eip\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class EipAsyncClient extends Client
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
        return new ClientBuilder(new EipAsyncClient());
    }

    /**
     * 查询公共池列表
     *
     * 查询公共池列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommonPoolsAsync($request)
    {
        return $this->listCommonPoolsAsyncWithHttpInfo($request);
    }
    
    public function listCommonPoolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicip-pools/common-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ListCommonPoolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ListCommonPoolsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询公共池分组列表
     *
     * 查询公共池分组列表，包含名称和位置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublicBorderGroupsAsync($request)
    {
        return $this->listPublicBorderGroupsAsyncWithHttpInfo($request);
    }
    
    public function listPublicBorderGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/public-border-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ListPublicBorderGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ListPublicBorderGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定租户下的共享带宽类型列表
     *
     * 查询指定租户下的共享带宽类型列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listShareBandwidthTypesAsync($request)
    {
        return $this->listShareBandwidthTypesAsyncWithHttpInfo($request);
    }
    
    public function listShareBandwidthTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/share-bandwidth-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['bandwidthType'] !== null) {
            $queryParams['bandwidth_type'] = $localVarParams['bandwidthType'];
        }
        if ($localVarParams['nameEn'] !== null) {
            $queryParams['name_en'] = $localVarParams['nameEn'];
        }
        if ($localVarParams['nameZh'] !== null) {
            $queryParams['name_zh'] = $localVarParams['nameZh'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ListShareBandwidthTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ListShareBandwidthTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定弹性公网IP
     *
     * 绑定弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associatePublicipsAsync($request)
    {
        return $this->associatePublicipsAsyncWithHttpInfo($request);
    }
    
    public function associatePublicipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicips/{publicip_id}/associate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\AssociatePublicipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\AssociatePublicipsRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑弹性公网IP
     *
     * 解绑弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociatePublicipsAsync($request)
    {
        return $this->disassociatePublicipsAsyncWithHttpInfo($request);
    }
    
    public function disassociatePublicipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicips/{publicip_id}/disassociate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\DisassociatePublicipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\DisassociatePublicipsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询公网IP池列表
     *
     * 全量查询公网IP池列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublicipPoolAsync($request)
    {
        return $this->listPublicipPoolAsyncWithHttpInfo($request);
    }
    
    public function listPublicipPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicip-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ListPublicipPoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ListPublicipPoolRequest',
            $asyncRequest = true);
    }

    /**
     * 全量查询弹性公网IP列表
     *
     * 查询弹性公网IP列表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublicipsAsync($request)
    {
        return $this->listPublicipsAsyncWithHttpInfo($request);
    }
    
    public function listPublicipsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
        if ($localVarParams['publicIpAddress'] !== null) {
            $queryParams['public_ip_address'] = $localVarParams['publicIpAddress'];
        }
        if ($localVarParams['publicIpAddressLike'] !== null) {
            $queryParams['public_ip_address_like'] = $localVarParams['publicIpAddressLike'];
        }
        if ($localVarParams['publicIpv6Address'] !== null) {
            $queryParams['public_ipv6_address'] = $localVarParams['publicIpv6Address'];
        }
        if ($localVarParams['publicIpv6AddressLike'] !== null) {
            $queryParams['public_ipv6_address_like'] = $localVarParams['publicIpv6AddressLike'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['networkType'] !== null) {
            $queryParams['network_type'] = $localVarParams['networkType'];
        }
        if ($localVarParams['publicipPoolName'] !== null) {
            $queryParams['publicip_pool_name'] = $localVarParams['publicipPoolName'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['aliasLike'] !== null) {
            $queryParams['alias_like'] = $localVarParams['aliasLike'];
        }
        if ($localVarParams['alias'] !== null) {
            $queryParams['alias'] = $localVarParams['alias'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['vnicPrivateIpAddress'] !== null) {
            $queryParams['vnic_private_ip_address'] = $localVarParams['vnicPrivateIpAddress'];
        }
        if ($localVarParams['vnicPrivateIpAddressLike'] !== null) {
            $queryParams['vnic_private_ip_address_like'] = $localVarParams['vnicPrivateIpAddressLike'];
        }
        if ($localVarParams['vnicDeviceId'] !== null) {
            $queryParams['vnic_device_id'] = $localVarParams['vnicDeviceId'];
        }
        if ($localVarParams['vnicDeviceOwner'] !== null) {
            $queryParams['vnic_device_owner'] = $localVarParams['vnicDeviceOwner'];
        }
        if ($localVarParams['vnicVpcId'] !== null) {
            $queryParams['vnic_vpc_id'] = $localVarParams['vnicVpcId'];
        }
        if ($localVarParams['vnicPortId'] !== null) {
            $queryParams['vnic_port_id'] = $localVarParams['vnicPortId'];
        }
        if ($localVarParams['vnicDeviceOwnerPrefixlike'] !== null) {
            $queryParams['vnic_device_owner_prefixlike'] = $localVarParams['vnicDeviceOwnerPrefixlike'];
        }
        if ($localVarParams['vnicInstanceType'] !== null) {
            $queryParams['vnic_instance_type'] = $localVarParams['vnicInstanceType'];
        }
        if ($localVarParams['vnicInstanceId'] !== null) {
            $queryParams['vnic_instance_id'] = $localVarParams['vnicInstanceId'];
        }
        if ($localVarParams['bandwidthId'] !== null) {
            $queryParams['bandwidth_id'] = $localVarParams['bandwidthId'];
        }
        if ($localVarParams['bandwidthName'] !== null) {
            $queryParams['bandwidth_name'] = $localVarParams['bandwidthName'];
        }
        if ($localVarParams['bandwidthNameLike'] !== null) {
            $queryParams['bandwidth_name_like'] = $localVarParams['bandwidthNameLike'];
        }
        if ($localVarParams['bandwidthSize'] !== null) {
            $queryParams['bandwidth_size'] = $localVarParams['bandwidthSize'];
        }
        if ($localVarParams['bandwidthShareType'] !== null) {
            $queryParams['bandwidth_share_type'] = $localVarParams['bandwidthShareType'];
        }
        if ($localVarParams['bandwidthChargeMode'] !== null) {
            $queryParams['bandwidth_charge_mode'] = $localVarParams['bandwidthChargeMode'];
        }
        if ($localVarParams['billingInfo'] !== null) {
            $queryParams['billing_info'] = $localVarParams['billingInfo'];
        }
        if ($localVarParams['billingMode'] !== null) {
            $queryParams['billing_mode'] = $localVarParams['billingMode'];
        }
        if ($localVarParams['associateInstanceType'] !== null) {
            $queryParams['associate_instance_type'] = $localVarParams['associateInstanceType'];
        }
        if ($localVarParams['associateInstanceId'] !== null) {
            $queryParams['associate_instance_id'] = $localVarParams['associateInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
        }
        if ($localVarParams['allowShareBandwidthTypeAny'] !== null) {
            $queryParams['allow_share_bandwidth_type_any'] = $localVarParams['allowShareBandwidthTypeAny'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ListPublicipsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ListPublicipsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性公网IP详情
     *
     * 查询弹性公网IP详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPublicipAsync($request)
    {
        return $this->showPublicipAsyncWithHttpInfo($request);
    }
    
    public function showPublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicips/{publicip_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ShowPublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ShowPublicipRequest',
            $asyncRequest = true);
    }

    /**
     * 查询公网IP池详情
     *
     * 查询公网IP池详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPublicipPoolAsync($request)
    {
        return $this->showPublicipPoolAsyncWithHttpInfo($request);
    }
    
    public function showPublicipPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicip-pools/{publicip_pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['publicipPoolId'] !== null) {
            $pathParams['publicip_pool_id'] = $localVarParams['publicipPoolId'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\ShowPublicipPoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\ShowPublicipPoolRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定弹性公网IP
     *
     * 绑定弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAssociatePublicipAsync($request)
    {
        return $this->updateAssociatePublicipAsyncWithHttpInfo($request);
    }
    
    public function updateAssociatePublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicips/{publicip_id}/associate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\UpdateAssociatePublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\UpdateAssociatePublicipRequest',
            $asyncRequest = true);
    }

    /**
     * 解绑弹性公网IP
     *
     * 解绑弹性公网IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDisassociatePublicipAsync($request)
    {
        return $this->updateDisassociatePublicipAsyncWithHttpInfo($request);
    }
    
    public function updateDisassociatePublicipAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/{project_id}/eip/publicips/{publicip_id}/disassociate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publicipId'] !== null) {
            $pathParams['publicip_id'] = $localVarParams['publicipId'];
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
            $responseType='\HuaweiCloud\SDK\Eip\V3\Model\UpdateDisassociatePublicipResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Eip\V3\Model\UpdateDisassociatePublicipRequest',
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