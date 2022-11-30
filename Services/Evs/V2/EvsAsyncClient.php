<?php

namespace HuaweiCloud\SDK\Evs\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class EvsAsyncClient extends Client
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
        return new ClientBuilder(new EvsAsyncClient());
    }

    /**
     * 为指定云硬盘批量添加标签
     *
     * 为指定云硬盘批量添加标签。
     * 
     * 添加标签时，如果云硬盘的标签已存在相同key，则会覆盖已有标签。
     * 单个云硬盘最多支持创建10个标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateVolumeTagsAsync($request)
    {
        return $this->batchCreateVolumeTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateVolumeTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/{volume_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\BatchCreateVolumeTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\BatchCreateVolumeTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 为指定云硬盘批量删除标签
     *
     * 为指定云硬盘批量删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteVolumeTagsAsync($request)
    {
        return $this->batchDeleteVolumeTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteVolumeTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/cloudvolumes/{volume_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\BatchDeleteVolumeTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\BatchDeleteVolumeTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 接受云硬盘过户
     *
     * 通过云硬盘过户记录ID以及身份认证密钥来接受云硬盘过户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderAcceptVolumeTransferAsync($request)
    {
        return $this->cinderAcceptVolumeTransferAsyncWithHttpInfo($request);
    }
    
    public function cinderAcceptVolumeTransferAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-volume-transfer/{transfer_id}/accept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['transferId'] !== null) {
            $pathParams['transfer_id'] = $localVarParams['transferId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderAcceptVolumeTransferResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderAcceptVolumeTransferRequest',
            $asyncRequest = true);
    }

    /**
     * 创建云硬盘过户
     *
     * 指定云硬盘来创建云硬盘过户记录，创建成功后，会返回过户记录ID以及身份认证密钥。
     * 云硬盘在过户过程中的状态变化如下：创建云硬盘过户后，云硬盘状态由“available”变为“awaiting-transfer”。当云硬盘过户被接收后，云硬盘状态变为“available”。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderCreateVolumeTransferAsync($request)
    {
        return $this->cinderCreateVolumeTransferAsyncWithHttpInfo($request);
    }
    
    public function cinderCreateVolumeTransferAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-volume-transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderCreateVolumeTransferResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderCreateVolumeTransferRequest',
            $asyncRequest = true);
    }

    /**
     * 删除云硬盘过户
     *
     * 当云硬盘过户未被接受时，您可以删除云硬盘过户记录，接受后则无法执行删除操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderDeleteVolumeTransferAsync($request)
    {
        return $this->cinderDeleteVolumeTransferAsyncWithHttpInfo($request);
    }
    
    public function cinderDeleteVolumeTransferAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-volume-transfer/{transfer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['transferId'] !== null) {
            $pathParams['transfer_id'] = $localVarParams['transferId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderDeleteVolumeTransferResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderDeleteVolumeTransferRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有的可用分区信息
     *
     * 查询所有的可用分区信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderListAvailabilityZonesAsync($request)
    {
        return $this->cinderListAvailabilityZonesAsyncWithHttpInfo($request);
    }
    
    public function cinderListAvailabilityZonesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-availability-zone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListAvailabilityZonesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户的详细配额
     *
     * 查询租户的详细配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderListQuotasAsync($request)
    {
        return $this->cinderListQuotasAsyncWithHttpInfo($request);
    }
    
    public function cinderListQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-quota-sets/{target_project_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['usage'] !== null) {
            $queryParams['usage'] = $localVarParams['usage'];
        }
        if ($localVarParams['targetProjectId'] !== null) {
            $pathParams['target_project_id'] = $localVarParams['targetProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云硬盘过户记录列表概要
     *
     * 查询当前租户下所有云硬盘的过户记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderListVolumeTransfersAsync($request)
    {
        return $this->cinderListVolumeTransfersAsyncWithHttpInfo($request);
    }
    
    public function cinderListVolumeTransfersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-volume-transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListVolumeTransfersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListVolumeTransfersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云硬盘类型列表
     *
     * 查询云硬盘类型列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderListVolumeTypesAsync($request)
    {
        return $this->cinderListVolumeTypesAsyncWithHttpInfo($request);
    }
    
    public function cinderListVolumeTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListVolumeTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderListVolumeTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个云硬盘过户记录详情
     *
     * 查询单个云硬盘的过户记录详情，比如过户记录创建时间、ID以及名称等信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cinderShowVolumeTransferAsync($request)
    {
        return $this->cinderShowVolumeTransferAsyncWithHttpInfo($request);
    }
    
    public function cinderShowVolumeTransferAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/os-volume-transfer/{transfer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['transferId'] !== null) {
            $pathParams['transfer_id'] = $localVarParams['transferId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CinderShowVolumeTransferResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CinderShowVolumeTransferRequest',
            $asyncRequest = true);
    }

    /**
     * 创建云硬盘快照
     *
     * 创建云硬盘快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSnapshotAsync($request)
    {
        return $this->createSnapshotAsyncWithHttpInfo($request);
    }
    
    public function createSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudsnapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CreateSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CreateSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 创建云硬盘
     *
     * 创建按需或包周期云硬盘。
     * 在创建包周期云硬盘的场景下：
     * - 如果您需要查看订单可用的优惠券，请参考\&quot;[查询订单可用优惠券](https://support.huaweicloud.com/api-oce/zh-cn_topic_0092953630.html)\&quot;。
     * - 如果您需要支付订单，请参考\&quot;[支付包周期产品订单](https://support.huaweicloud.com/api-oce/zh-cn_topic_0075746561.html)\&quot;。
     * - 如果您需要查询订单的资源开通详情，请参考\&quot;[查询订单的资源开通详情](https://support.huaweicloud.com/api-oce/api_order_00001.html)\&quot;。
     * - 如果您需要退订该包周期资源，请参考“[退订包周期资源](https://support.huaweicloud.com/api-oce/zh-cn_topic_0082522030.html)”。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVolumeAsync($request)
    {
        return $this->createVolumeAsyncWithHttpInfo($request);
    }
    
    public function createVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/cloudvolumes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 删除云硬盘快照
     *
     * 删除云硬盘快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSnapshotAsync($request)
    {
        return $this->deleteSnapshotAsyncWithHttpInfo($request);
    }
    
    public function deleteSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudsnapshots/{snapshot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\DeleteSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\DeleteSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 删除云硬盘
     *
     * 删除一个云硬盘。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVolumeAsync($request)
    {
        return $this->deleteVolumeAsyncWithHttpInfo($request);
    }
    
    public function deleteVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/{volume_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\DeleteVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\DeleteVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云硬盘快照详情列表
     *
     * 查询云硬盘快照详细列表信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshotsAsync($request)
    {
        return $this->listSnapshotsAsyncWithHttpInfo($request);
    }
    
    public function listSnapshotsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudsnapshots/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['volumeId'] !== null) {
            $queryParams['volume_id'] = $localVarParams['volumeId'];
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['dedicatedStorageName'] !== null) {
            $queryParams['dedicated_storage_name'] = $localVarParams['dedicatedStorageName'];
        }
        if ($localVarParams['dedicatedStorageId'] !== null) {
            $queryParams['dedicated_storage_id'] = $localVarParams['dedicatedStorageId'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ListSnapshotsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ListSnapshotsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取云硬盘资源的所有标签
     *
     * 获取某个租户的所有云硬盘资源的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVolumeTagsAsync($request)
    {
        return $this->listVolumeTagsAsyncWithHttpInfo($request);
    }
    
    public function listVolumeTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ListVolumeTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ListVolumeTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有云硬盘详情
     *
     * 查询所有云硬盘的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVolumesAsync($request)
    {
        return $this->listVolumesAsyncWithHttpInfo($request);
    }
    
    public function listVolumesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['metadata'] !== null) {
            $queryParams['metadata'] = $localVarParams['metadata'];
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
        }
        if ($localVarParams['multiattach'] !== null) {
            $queryParams['multiattach'] = $localVarParams['multiattach'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['dedicatedStorageId'] !== null) {
            $queryParams['dedicated_storage_id'] = $localVarParams['dedicatedStorageId'];
        }
        if ($localVarParams['dedicatedStorageName'] !== null) {
            $queryParams['dedicated_storage_name'] = $localVarParams['dedicatedStorageName'];
        }
        if ($localVarParams['volumeTypeId'] !== null) {
            $queryParams['volume_type_id'] = $localVarParams['volumeTypeId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['ids'] !== null) {
            $queryParams['ids'] = $localVarParams['ids'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['serverId'] !== null) {
            $queryParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ListVolumesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ListVolumesRequest',
            $asyncRequest = true);
    }

    /**
     * 通过标签查询云硬盘资源实例详情
     *
     * 通过标签查询云硬盘资源实例详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVolumesByTagsAsync($request)
    {
        return $this->listVolumesByTagsAsyncWithHttpInfo($request);
    }
    
    public function listVolumesByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ListVolumesByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ListVolumesByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 扩容云硬盘
     *
     * 对按需或者包周期云硬盘进行扩容。
     * 在扩容包周期云硬盘的场景下：
     * - 如果您需要查看订单可用的优惠券，请参考\&quot;[查询订单可用优惠券](https://support.huaweicloud.com/api-oce/zh-cn_topic_0092953630.html)\&quot;。
     * - 如果您需要支付订单，请参考\&quot;[支付包周期产品订单](https://support.huaweicloud.com/api-oce/zh-cn_topic_0075746561.html)\&quot;。
     * - 如果您需要查询订单的资源开通详情，请参考\&quot;[查询订单的资源开通详情](https://support.huaweicloud.com/api-oce/api_order_00001.html)\&quot;。
     * - 如果您需要退订该包周期资源，请参考“[退订包周期资源](https://support.huaweicloud.com/api-oce/zh-cn_topic_0082522030.html)”。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeVolumeAsync($request)
    {
        return $this->resizeVolumeAsyncWithHttpInfo($request);
    }
    
    public function resizeVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/cloudvolumes/{volume_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ResizeVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ResizeVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 回滚快照到云硬盘
     *
     * 将快照数据回滚到云硬盘。支持企业项目授权功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rollbackSnapshotAsync($request)
    {
        return $this->rollbackSnapshotAsyncWithHttpInfo($request);
    }
    
    public function rollbackSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudsnapshots/{snapshot_id}/rollback';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\RollbackSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\RollbackSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 查询job的状态
     *
     * 查询Job的执行状态。
     * 可用于查询创建云硬盘，扩容云硬盘，删除云硬盘等API的执行状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobAsync($request)
    {
        return $this->showJobAsyncWithHttpInfo($request);
    }
    
    public function showJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ShowJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ShowJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个云硬盘快照详情
     *
     * 查询单个云硬盘快照信息。支持企业项目授权功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSnapshotAsync($request)
    {
        return $this->showSnapshotAsyncWithHttpInfo($request);
    }
    
    public function showSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudsnapshots/{snapshot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ShowSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ShowSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单个云硬盘详情
     *
     * 查询单个云硬盘的详细信息。支持企业项目授权功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVolumeAsync($request)
    {
        return $this->showVolumeAsyncWithHttpInfo($request);
    }
    
    public function showVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/{volume_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ShowVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ShowVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云硬盘标签
     *
     * 查询指定云硬盘的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVolumeTagsAsync($request)
    {
        return $this->showVolumeTagsAsyncWithHttpInfo($request);
    }
    
    public function showVolumeTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/{volume_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ShowVolumeTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ShowVolumeTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新云硬盘快照
     *
     * 更新云硬盘快照。支持企业项目授权功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSnapshotAsync($request)
    {
        return $this->updateSnapshotAsyncWithHttpInfo($request);
    }
    
    public function updateSnapshotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudsnapshots/{snapshot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\UpdateSnapshotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\UpdateSnapshotRequest',
            $asyncRequest = true);
    }

    /**
     * 更新云硬盘
     *
     * 更新一个云硬盘的名称和描述。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVolumeAsync($request)
    {
        return $this->updateVolumeAsyncWithHttpInfo($request);
    }
    
    public function updateVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudvolumes/{volume_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\UpdateVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\UpdateVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询接口版本信息列表
     *
     * 查询接口版本信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVersionsAsync($request)
    {
        return $this->listVersionsAsyncWithHttpInfo($request);
    }
    
    public function listVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ListVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ListVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询API接口的版本信息
     *
     * 查询接口的指定版本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVersionAsync($request)
    {
        return $this->showVersionAsyncWithHttpInfo($request);
    }
    
    public function showVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\Evs\V2\Model\ShowVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Evs\V2\Model\ShowVersionRequest',
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