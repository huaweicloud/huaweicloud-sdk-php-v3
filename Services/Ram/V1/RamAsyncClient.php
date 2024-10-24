<?php

namespace HuaweiCloud\SDK\Ram\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class RamAsyncClient extends Client
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
        $client = new ClientBuilder(new RamAsyncClient(), "GlobalCredentials");
        return $client;
    }

    /**
     * 绑定或替换共享资源权限
     *
     * 为资源共享实例中包含的资源类型绑定或替换共享资源权限。 对于资源共享实例中的每一种资源类型，您可以设置唯一权限。仅当资源共享实例中当前没有该资源类型的资源时，您才能绑定新的共享资源权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateResourceSharePermissionAsync($request)
    {
        return $this->associateResourceSharePermissionAsyncWithHttpInfo($request);
    }
    
    public function associateResourceSharePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/associate-permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\AssociateResourceSharePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\AssociateResourceSharePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 移除共享资源权限
     *
     * 移除资源共享实例绑定的共享资源权限。权限更改立即生效。只有当目前资源共享实例中没有绑定相关资源类型时，您才能从资源共享实例中移除共享资源权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateResourceSharePermissionAsync($request)
    {
        return $this->disassociateResourceSharePermissionAsyncWithHttpInfo($request);
    }
    
    public function disassociateResourceSharePermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/disassociate-permission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\DisassociateResourceSharePermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DisassociateResourceSharePermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 检索绑定的共享资源权限
     *
     * 检索资源共享实例关联的共享资源权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceSharePermissionsAsync($request)
    {
        return $this->listResourceSharePermissionsAsyncWithHttpInfo($request);
    }
    
    public function listResourceSharePermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/associated-permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['permissionName'] !== null) {
            $queryParams['permission_name'] = $localVarParams['permissionName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceSharePermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceSharePermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源共享的配额
     *
     * 查询当前账号的资源共享配额信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotaAsync($request)
    {
        return $this->listQuotaAsyncWithHttpInfo($request);
    }
    
    public function listQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 检索云服务资源类型
     *
     * 查询已对接云服务的资源类型和区域等信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceTypesAsync($request)
    {
        return $this->listResourceTypesAsyncWithHttpInfo($request);
    }
    
    public function listResourceTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭与组织共享
     *
     * 关闭与组织共享资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableOrganizationShareAsync($request)
    {
        return $this->disableOrganizationShareAsyncWithHttpInfo($request);
    }
    
    public function disableOrganizationShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/organization-share/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\DisableOrganizationShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DisableOrganizationShareRequest',
            $asyncRequest = true);
    }

    /**
     * 启用与组织共享
     *
     * 启用与组织共享资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableOrganizationShareAsync($request)
    {
        return $this->enableOrganizationShareAsyncWithHttpInfo($request);
    }
    
    public function enableOrganizationShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/organization-share/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\EnableOrganizationShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\EnableOrganizationShareRequest',
            $asyncRequest = true);
    }

    /**
     * 检索是否启用与组织共享
     *
     * 检索是否启用与组织共享资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationShareAsync($request)
    {
        return $this->showOrganizationShareAsyncWithHttpInfo($request);
    }
    
    public function showOrganizationShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/organization-share';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ShowOrganizationShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ShowOrganizationShareRequest',
            $asyncRequest = true);
    }

    /**
     * 获取权限的所有版本
     *
     * 获取权限的所有版本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionVersionsAsync($request)
    {
        return $this->listPermissionVersionsAsyncWithHttpInfo($request);
    }
    
    public function listPermissionVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/permissions/{permission_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['permissionId'] !== null) {
            $pathParams['permission_id'] = $localVarParams['permissionId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListPermissionVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListPermissionVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 检索共享资源权限列表
     *
     * 检索指定资源类型的共享资源权限列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionsAsync($request)
    {
        return $this->listPermissionsAsyncWithHttpInfo($request);
    }
    
    public function listPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['permissionType'] !== null) {
            $queryParams['permission_type'] = $localVarParams['permissionType'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListPermissionsRequest',
            $asyncRequest = true);
    }

    /**
     * 检索资源共享权限内容
     *
     * 检索指定资源类型的共享资源指定版本的权限内容，如果不指定权限版本，则返回默认版本的权限内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPermissionAsync($request)
    {
        return $this->showPermissionAsyncWithHttpInfo($request);
    }
    
    public function showPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/permissions/{permission_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['permissionVersion'] !== null) {
            $queryParams['permission_version'] = $localVarParams['permissionVersion'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['permissionId'] !== null) {
            $pathParams['permission_id'] = $localVarParams['permissionId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ShowPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ShowPermissionRequest',
            $asyncRequest = true);
    }

    /**
     * 检索资源使用者
     *
     * 检索共享资源的使用者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchSharedPrincipalsAsync($request)
    {
        return $this->searchSharedPrincipalsAsyncWithHttpInfo($request);
    }
    
    public function searchSharedPrincipalsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/shared-principals/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchSharedPrincipalsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchSharedPrincipalsRequest',
            $asyncRequest = true);
    }

    /**
     * 检索共享的资源
     *
     * 检索您共享的或共享给您的资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchSharedResourcesAsync($request)
    {
        return $this->searchSharedResourcesAsyncWithHttpInfo($request);
    }
    
    public function searchSharedResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/shared-resources/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchSharedResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchSharedResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 创建资源共享实例
     *
     * 创建一个资源共享实例。您可以指定需要共享的资源列表，资源使用者列表，以及授予资源使用者的权限列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceShareAsync($request)
    {
        return $this->createResourceShareAsyncWithHttpInfo($request);
    }
    
    public function createResourceShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\CreateResourceShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\CreateResourceShareRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源共享实例
     *
     * 删除指定的资源共享实例。此操作不会删除实体资源，仅停止向其他账号共享资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceShareAsync($request)
    {
        return $this->deleteResourceShareAsyncWithHttpInfo($request);
    }
    
    public function deleteResourceShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\DeleteResourceShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DeleteResourceShareRequest',
            $asyncRequest = true);
    }

    /**
     * 检索资源共享实例
     *
     * 检索您创建的或者共享给您的资源共享实例详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchResourceSharesAsync($request)
    {
        return $this->searchResourceSharesAsyncWithHttpInfo($request);
    }
    
    public function searchResourceSharesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceSharesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceSharesRequest',
            $asyncRequest = true);
    }

    /**
     * 更新资源共享实例
     *
     * 修改资源共享实例的特定属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateResourceShareAsync($request)
    {
        return $this->updateResourceShareAsyncWithHttpInfo($request);
    }
    
    public function updateResourceShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\UpdateResourceShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\UpdateResourceShareRequest',
            $asyncRequest = true);
    }

    /**
     * 绑定资源使用者和共享资源
     *
     * 向资源共享实例绑定指定的资源使用者列表或共享资源列表。对于新增的共享资源，有权访问此资源共享实例的资源使用者获得该共享资源的访问权限。对于新增的资源使用者，获得对此资源共享实例中共享资源的访问权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateResourceShareAsync($request)
    {
        return $this->associateResourceShareAsyncWithHttpInfo($request);
    }
    
    public function associateResourceShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/associate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\AssociateResourceShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\AssociateResourceShareRequest',
            $asyncRequest = true);
    }

    /**
     * 移除资源使用者或共享资源
     *
     * 将指定的资源使用者或共享资源从指定的资源共享实例中移除。资源使用者也可以从指定的资源共享实例中主动退出。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateResourceShareAsync($request)
    {
        return $this->disassociateResourceShareAsyncWithHttpInfo($request);
    }
    
    public function disassociateResourceShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/disassociate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\DisassociateResourceShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DisassociateResourceShareRequest',
            $asyncRequest = true);
    }

    /**
     * 检索绑定的资源使用者和共享资源
     *
     * 检索您拥有的资源共享实例中绑定的共享资源和资源使用者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchResourceShareAssociationsAsync($request)
    {
        return $this->searchResourceShareAssociationsAsyncWithHttpInfo($request);
    }
    
    public function searchResourceShareAssociationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-share-associations/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareAssociationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareAssociationsRequest',
            $asyncRequest = true);
    }

    /**
     * 接受共享邀请
     *
     * 接受来自其他账号的资源共享邀请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptResourceShareInvitationAsync($request)
    {
        return $this->acceptResourceShareInvitationAsyncWithHttpInfo($request);
    }
    
    public function acceptResourceShareInvitationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-share-invitations/{resource_share_invitation_id}/accept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareInvitationId'] !== null) {
            $pathParams['resource_share_invitation_id'] = $localVarParams['resourceShareInvitationId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\AcceptResourceShareInvitationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\AcceptResourceShareInvitationRequest',
            $asyncRequest = true);
    }

    /**
     * 拒绝共享邀请
     *
     * 拒绝来自其他账号的资源共享邀请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rejectResourceShareInvitationAsync($request)
    {
        return $this->rejectResourceShareInvitationAsyncWithHttpInfo($request);
    }
    
    public function rejectResourceShareInvitationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-share-invitations/{resource_share_invitation_id}/reject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareInvitationId'] !== null) {
            $pathParams['resource_share_invitation_id'] = $localVarParams['resourceShareInvitationId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\RejectResourceShareInvitationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\RejectResourceShareInvitationRequest',
            $asyncRequest = true);
    }

    /**
     * 检索共享邀请
     *
     * 通过条件检索资源共享邀请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchResourceShareInvitationAsync($request)
    {
        return $this->searchResourceShareInvitationAsyncWithHttpInfo($request);
    }
    
    public function searchResourceShareInvitationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-share-invitations/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareInvitationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareInvitationRequest',
            $asyncRequest = true);
    }

    /**
     * 资源共享实例增加标签
     *
     * 资源共享实例增加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateResourceShareTagsAsync($request)
    {
        return $this->batchCreateResourceShareTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateResourceShareTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\BatchCreateResourceShareTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\BatchCreateResourceShareTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资源共享实例的标签
     *
     * 删除资源共享实例指定的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteResourceShareTagsAsync($request)
    {
        return $this->batchDeleteResourceShareTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteResourceShareTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/{resource_share_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['resourceShareId'] !== null) {
            $pathParams['resource_share_id'] = $localVarParams['resourceShareId'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\BatchDeleteResourceShareTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\BatchDeleteResourceShareTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询已使用的标签列表
     *
     * 查询资源共享实例已使用标签的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceShareTagsAsync($request)
    {
        return $this->listResourceShareTagsAsyncWithHttpInfo($request);
    }
    
    public function listResourceShareTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceShareTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceShareTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 根据标签信息查询实例列表
     *
     * 根据标签信息查询资源共享实例列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceSharesByTagsAsync($request)
    {
        return $this->listResourceSharesByTagsAsyncWithHttpInfo($request);
    }
    
    public function listResourceSharesByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceSharesByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceSharesByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 根据标签信息查询实例数量
     *
     * 根据标签信息查询资源共享实例数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchResourceShareCountByTagsAsync($request)
    {
        return $this->searchResourceShareCountByTagsAsyncWithHttpInfo($request);
    }
    
    public function searchResourceShareCountByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/resource-shares/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareCountByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareCountByTagsRequest',
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