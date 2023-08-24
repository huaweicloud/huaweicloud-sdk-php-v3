<?php

namespace HuaweiCloud\SDK\Er\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ErClient extends Client
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
        return new ClientBuilder(new ErClient());
    }


    /**
     * 创建路由关联
     *
     * 每个连接只能关联到一张路由表。通过创建关联将连接关联到路由表，从该连接收到的报文会用被关联的路由表进行路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateRouteTable($request)
    {
        return $this->associateRouteTableWithHttpInfo($request);
    }

    public function associateRouteTableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}/associate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\AssociateRouteTableResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\AssociateRouteTableRequest');
    }

    /**
     * 删除路由关联
     *
     * 解绑连接和路由表的关联关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateRouteTable($request)
    {
        return $this->disassociateRouteTableWithHttpInfo($request);
    }

    public function disassociateRouteTableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}/disassociate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DisassociateRouteTableResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DisassociateRouteTableRequest');
    }

    /**
     * 查询路由关联列表
     *
     * 查询路由关联列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssociations($request)
    {
        return $this->listAssociationsWithHttpInfo($request);
    }

    public function listAssociationsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}/associations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $queryParams['attachment_id'] = $localVarParams['attachmentId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListAssociationsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListAssociationsRequest');
    }

    /**
     * 接受共享连接创建
     *
     * 接受共享连接创建
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptAttachment($request)
    {
        return $this->acceptAttachmentWithHttpInfo($request);
    }

    public function acceptAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/attachments/{attachment_id}/accept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $pathParams['attachment_id'] = $localVarParams['attachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\AcceptAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\AcceptAttachmentRequest');
    }

    /**
     * 查询连接列表
     *
     * 查询企业路由器实例下的连接列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttachments($request)
    {
        return $this->listAttachmentsWithHttpInfo($request);
    }

    public function listAttachmentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListAttachmentsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListAttachmentsRequest');
    }

    /**
     * 拒绝共享连接创建
     *
     * 拒绝共享连接创建
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rejectAttachment($request)
    {
        return $this->rejectAttachmentWithHttpInfo($request);
    }

    public function rejectAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/attachments/{attachment_id}/reject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $pathParams['attachment_id'] = $localVarParams['attachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\RejectAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\RejectAttachmentRequest');
    }

    /**
     * 查询连接详情
     *
     * 查询连接详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAttachment($request)
    {
        return $this->showAttachmentWithHttpInfo($request);
    }

    public function showAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/attachments/{attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $pathParams['attachment_id'] = $localVarParams['attachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowAttachmentRequest');
    }

    /**
     * 更新连接基本信息
     *
     * 修改连接基本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAttachment($request)
    {
        return $this->updateAttachmentWithHttpInfo($request);
    }

    public function updateAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/attachments/{attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $pathParams['attachment_id'] = $localVarParams['attachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\UpdateAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\UpdateAttachmentRequest');
    }

    /**
     * 查询可用区列表
     *
     * 查询支持创建企业路由器实例的可用区列表，当可用区状态为available时，表示可以创建企业路由器实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailabilityZone($request)
    {
        return $this->listAvailabilityZoneWithHttpInfo($request);
    }

    public function listAvailabilityZoneWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/availability-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListAvailabilityZoneResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListAvailabilityZoneRequest');
    }

    /**
     * 更新企业路由器的可用区信息
     *
     * 更新企业路由器的可用区信息，企业路由器实例状态为available的时候才能更新。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAvailabilityZone($request)
    {
        return $this->changeAvailabilityZoneWithHttpInfo($request);
    }

    public function changeAvailabilityZoneWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/instances/{er_id}/change-availability-zone-ids';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ChangeAvailabilityZoneResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ChangeAvailabilityZoneRequest');
    }

    /**
     * 创建企业路由器
     *
     * 创建企业路由器实例，如果使能默认关联路由表或使能默认传递路由表，那么系统会默认创建一张路由表，作为默认关联路由表或默认传递路由表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnterpriseRouter($request)
    {
        return $this->createEnterpriseRouterWithHttpInfo($request);
    }

    public function createEnterpriseRouterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\CreateEnterpriseRouterResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\CreateEnterpriseRouterRequest');
    }

    /**
     * 删除企业路由器
     *
     * 删除企业路由器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnterpriseRouter($request)
    {
        return $this->deleteEnterpriseRouterWithHttpInfo($request);
    }

    public function deleteEnterpriseRouterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/instances/{er_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DeleteEnterpriseRouterResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DeleteEnterpriseRouterRequest');
    }

    /**
     * 查询企业路由器列表
     *
     * 查询企业路由器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseRouters($request)
    {
        return $this->listEnterpriseRoutersWithHttpInfo($request);
    }

    public function listEnterpriseRoutersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['ownedBySelf'] !== null) {
            $queryParams['owned_by_self'] = $localVarParams['ownedBySelf'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListEnterpriseRoutersResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListEnterpriseRoutersRequest');
    }

    /**
     * 查询企业路由器详情
     *
     * 查询企业路由器详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnterpriseRouter($request)
    {
        return $this->showEnterpriseRouterWithHttpInfo($request);
    }

    public function showEnterpriseRouterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/instances/{er_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowEnterpriseRouterResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowEnterpriseRouterRequest');
    }

    /**
     * 更新企业路由器
     *
     * 更新企业路由器基本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEnterpriseRouter($request)
    {
        return $this->updateEnterpriseRouterWithHttpInfo($request);
    }

    public function updateEnterpriseRouterWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/instances/{er_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\UpdateEnterpriseRouterResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\UpdateEnterpriseRouterRequest');
    }

    /**
     * 创建流日志
     *
     * 给ER实例创建流日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFlowLog($request)
    {
        return $this->createFlowLogWithHttpInfo($request);
    }

    public function createFlowLogWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\CreateFlowLogResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\CreateFlowLogRequest');
    }

    /**
     * 删除流日志
     *
     * 删除流日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFlowLog($request)
    {
        return $this->deleteFlowLogWithHttpInfo($request);
    }

    public function deleteFlowLogWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs/{flow_log_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['flowLogId'] !== null) {
            $pathParams['flow_log_id'] = $localVarParams['flowLogId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DeleteFlowLogResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DeleteFlowLogRequest');
    }

    /**
     * 关闭流日志
     *
     * 关闭流日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableFlowLog($request)
    {
        return $this->disableFlowLogWithHttpInfo($request);
    }

    public function disableFlowLogWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs/{flow_log_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['flowLogId'] !== null) {
            $pathParams['flow_log_id'] = $localVarParams['flowLogId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DisableFlowLogResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DisableFlowLogRequest');
    }

    /**
     * 开启流日志
     *
     * 开启流日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableFlowLog($request)
    {
        return $this->enableFlowLogWithHttpInfo($request);
    }

    public function enableFlowLogWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs/{flow_log_id}/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['flowLogId'] !== null) {
            $pathParams['flow_log_id'] = $localVarParams['flowLogId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\EnableFlowLogResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\EnableFlowLogRequest');
    }

    /**
     * 查询流日志列表
     *
     * 查询企业路由器实例下的流日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlowLogs($request)
    {
        return $this->listFlowLogsWithHttpInfo($request);
    }

    public function listFlowLogsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListFlowLogsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListFlowLogsRequest');
    }

    /**
     * 查询流日志详情
     *
     * 查询流日志详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlowLog($request)
    {
        return $this->showFlowLogWithHttpInfo($request);
    }

    public function showFlowLogWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs/{flow_log_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['flowLogId'] !== null) {
            $pathParams['flow_log_id'] = $localVarParams['flowLogId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowFlowLogResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowFlowLogRequest');
    }

    /**
     * 更新流日志基本信息
     *
     * 更新流日志基本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlowLog($request)
    {
        return $this->updateFlowLogWithHttpInfo($request);
    }

    public function updateFlowLogWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/flow-logs/{flow_log_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['flowLogId'] !== null) {
            $pathParams['flow_log_id'] = $localVarParams['flowLogId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\UpdateFlowLogResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\UpdateFlowLogRequest');
    }

    /**
     * 删除路由传播
     *
     * 解绑连接和路由表的传播关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disablePropagation($request)
    {
        return $this->disablePropagationWithHttpInfo($request);
    }

    public function disablePropagationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}/disable-propagations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DisablePropagationResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DisablePropagationRequest');
    }

    /**
     * 创建路由传播
     *
     * 每个连接可以和多个路由表建立传播关系，从该连接学习到的路由会应用到具有传播关系的路由表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enablePropagation($request)
    {
        return $this->enablePropagationWithHttpInfo($request);
    }

    public function enablePropagationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}/enable-propagations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\EnablePropagationResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\EnablePropagationRequest');
    }

    /**
     * 查询路由传播列表
     *
     * 查询路由传播列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPropagations($request)
    {
        return $this->listPropagationsWithHttpInfo($request);
    }

    public function listPropagationsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}/propagations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $queryParams['attachment_id'] = $localVarParams['attachmentId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListPropagationsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListPropagationsRequest');
    }

    /**
     * 查询配额
     *
     * 查询租户各类资源的使用情况，如企业路由器的使用量，VPC连接的使用量等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuotas($request)
    {
        return $this->showQuotasWithHttpInfo($request);
    }

    public function showQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['erId'] !== null) {
            $queryParams['erId'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $queryParams['routeTableId'] = $localVarParams['routeTableId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpcId'] = $localVarParams['vpcId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowQuotasRequest');
    }

    /**
     * 创建静态路由
     *
     * 创建静态路由
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStaticRoute($request)
    {
        return $this->createStaticRouteWithHttpInfo($request);
    }

    public function createStaticRouteWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/route-tables/{route_table_id}/static-routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\CreateStaticRouteResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\CreateStaticRouteRequest');
    }

    /**
     * 删除静态路由
     *
     * 删除静态路由
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStaticRoute($request)
    {
        return $this->deleteStaticRouteWithHttpInfo($request);
    }

    public function deleteStaticRouteWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/route-tables/{route_table_id}/static-routes/{route_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
        }
        if ($localVarParams['routeId'] !== null) {
            $pathParams['route_id'] = $localVarParams['routeId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DeleteStaticRouteResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DeleteStaticRouteRequest');
    }

    /**
     * 查询有效路由列表
     *
     * 查询有效的路由列表，支持分页查询能力
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEffectiveRoutes($request)
    {
        return $this->listEffectiveRoutesWithHttpInfo($request);
    }

    public function listEffectiveRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/route-tables/{route_table_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['destination'] !== null) {
            $queryParams['destination'] = $localVarParams['destination'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListEffectiveRoutesResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListEffectiveRoutesRequest');
    }

    /**
     * 查询静态路由列表
     *
     * 查询静态路由列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStaticRoutes($request)
    {
        return $this->listStaticRoutesWithHttpInfo($request);
    }

    public function listStaticRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/route-tables/{route_table_id}/static-routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['destination'] !== null) {
            $queryParams['destination'] = $localVarParams['destination'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $queryParams['attachment_id'] = $localVarParams['attachmentId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListStaticRoutesResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListStaticRoutesRequest');
    }

    /**
     * 查询静态路由详情
     *
     * 查询静态路由详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStaticRoute($request)
    {
        return $this->showStaticRouteWithHttpInfo($request);
    }

    public function showStaticRouteWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/route-tables/{route_table_id}/static-routes/{route_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
        }
        if ($localVarParams['routeId'] !== null) {
            $pathParams['route_id'] = $localVarParams['routeId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowStaticRouteResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowStaticRouteRequest');
    }

    /**
     * 更新静态路由
     *
     * 更新静态路由
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStaticRoute($request)
    {
        return $this->updateStaticRouteWithHttpInfo($request);
    }

    public function updateStaticRouteWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/route-tables/{route_table_id}/static-routes/{route_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
        }
        if ($localVarParams['routeId'] !== null) {
            $pathParams['route_id'] = $localVarParams['routeId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\UpdateStaticRouteResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\UpdateStaticRouteRequest');
    }

    /**
     * 创建路由表
     *
     * 路由表是企业路由器收发报文的依据，包含了连接的关联关系，传播关系以及路由信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRouteTable($request)
    {
        return $this->createRouteTableWithHttpInfo($request);
    }

    public function createRouteTableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\CreateRouteTableResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\CreateRouteTableRequest');
    }

    /**
     * 删除路由表
     *
     * 删除路由表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRouteTable($request)
    {
        return $this->deleteRouteTableWithHttpInfo($request);
    }

    public function deleteRouteTableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DeleteRouteTableResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DeleteRouteTableRequest');
    }

    /**
     * 查询路由表列表
     *
     * 查询路由表列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRouteTables($request)
    {
        return $this->listRouteTablesWithHttpInfo($request);
    }

    public function listRouteTablesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['isDefaultPropagationTable'] !== null) {
            $queryParams['is_default_propagation_table'] = $localVarParams['isDefaultPropagationTable'];
        }
        if ($localVarParams['isDefaultAssociationTable'] !== null) {
            $queryParams['is_default_association_table'] = $localVarParams['isDefaultAssociationTable'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListRouteTablesResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListRouteTablesRequest');
    }

    /**
     * 查询路由表详情
     *
     * 查询路由表详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRouteTable($request)
    {
        return $this->showRouteTableWithHttpInfo($request);
    }

    public function showRouteTableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowRouteTableResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowRouteTableRequest');
    }

    /**
     * 更新路由表信息
     *
     * 更新路由表基本信息，如名称，描述等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRouteTable($request)
    {
        return $this->updateRouteTableWithHttpInfo($request);
    }

    public function updateRouteTableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/route-tables/{route_table_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['routeTableId'] !== null) {
            $pathParams['route_table_id'] = $localVarParams['routeTableId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\UpdateRouteTableResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\UpdateRouteTableRequest');
    }

    /**
     * 批量添加删除资源标签
     *
     * - 为指定实例批量添加或删除标签
     * - 标签管理服务需要使用该接口批量管理实例的标签。
     * - 一个资源上最多有10个标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateResourceTags($request)
    {
        return $this->batchCreateResourceTagsWithHttpInfo($request);
    }

    public function batchCreateResourceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\BatchCreateResourceTagsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\BatchCreateResourceTagsRequest');
    }

    /**
     * 创建资源标签
     *
     * 为特定类型的资源创建标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceTag($request)
    {
        return $this->createResourceTagWithHttpInfo($request);
    }

    public function createResourceTagWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\CreateResourceTagResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\CreateResourceTagRequest');
    }

    /**
     * 删除资源标签
     *
     * 删除特定类型资源的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceTag($request)
    {
        return $this->deleteResourceTagWithHttpInfo($request);
    }

    public function deleteResourceTagWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/{resource_type}/{resource_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DeleteResourceTagResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DeleteResourceTagRequest');
    }

    /**
     * 查询项目标签
     *
     * 查询特定类型资源的标签集合。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectTags($request)
    {
        return $this->listProjectTagsWithHttpInfo($request);
    }

    public function listProjectTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListProjectTagsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListProjectTagsRequest');
    }

    /**
     * 查询资源标签
     *
     * 查询特定类型资源的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceTag($request)
    {
        return $this->showResourceTagWithHttpInfo($request);
    }

    public function showResourceTagWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowResourceTagResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowResourceTagRequest');
    }

    /**
     * 创建VPC连接
     *
     * 给ER实例创建VPC连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVpcAttachment($request)
    {
        return $this->createVpcAttachmentWithHttpInfo($request);
    }

    public function createVpcAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/vpc-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xClientToken'] !== null) {
            $headerParams[$arr['xClientToken']] = $localVarParams['xClientToken'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\CreateVpcAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\CreateVpcAttachmentRequest');
    }

    /**
     * 删除VPC连接
     *
     * 删除VPC连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVpcAttachment($request)
    {
        return $this->deleteVpcAttachmentWithHttpInfo($request);
    }

    public function deleteVpcAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/vpc-attachments/{vpc_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['vpcAttachmentId'] !== null) {
            $pathParams['vpc_attachment_id'] = $localVarParams['vpcAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\DeleteVpcAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\DeleteVpcAttachmentRequest');
    }

    /**
     * 查询VPC连接列表
     *
     * 查询企业路由器实例下的VPC连接列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVpcAttachments($request)
    {
        return $this->listVpcAttachmentsWithHttpInfo($request);
    }

    public function listVpcAttachmentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/vpc-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ListVpcAttachmentsResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ListVpcAttachmentsRequest');
    }

    /**
     * 查询VPC连接详情
     *
     * 查询VPC连接详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpcAttachment($request)
    {
        return $this->showVpcAttachmentWithHttpInfo($request);
    }

    public function showVpcAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/vpc-attachments/{vpc_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['vpcAttachmentId'] !== null) {
            $pathParams['vpc_attachment_id'] = $localVarParams['vpcAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\ShowVpcAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\ShowVpcAttachmentRequest');
    }

    /**
     * 更新VPC连接基本信息
     *
     * 修改VPC连接基本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpcAttachment($request)
    {
        return $this->updateVpcAttachmentWithHttpInfo($request);
    }

    public function updateVpcAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/enterprise-router/{er_id}/vpc-attachments/{vpc_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['erId'] !== null) {
            $pathParams['er_id'] = $localVarParams['erId'];
        }
        if ($localVarParams['vpcAttachmentId'] !== null) {
            $pathParams['vpc_attachment_id'] = $localVarParams['vpcAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Er\V3\Model\UpdateVpcAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Er\V3\Model\UpdateVpcAttachmentRequest');
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