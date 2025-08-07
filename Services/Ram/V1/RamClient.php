<?php

namespace HuaweiCloud\SDK\Ram\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class RamClient extends Client
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
        $client = new ClientBuilder(new RamClient(), "GlobalCredentials");
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
    public function associateResourceSharePermission($request)
    {
        return $this->associateResourceSharePermissionWithHttpInfo($request);
    }

    public function associateResourceSharePermissionWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\AssociateResourceSharePermissionRequest');
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
    public function disassociateResourceSharePermission($request)
    {
        return $this->disassociateResourceSharePermissionWithHttpInfo($request);
    }

    public function disassociateResourceSharePermissionWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DisassociateResourceSharePermissionRequest');
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
    public function listResourceSharePermissions($request)
    {
        return $this->listResourceSharePermissionsWithHttpInfo($request);
    }

    public function listResourceSharePermissionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceSharePermissionsRequest');
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
    public function listQuota($request)
    {
        return $this->listQuotaWithHttpInfo($request);
    }

    public function listQuotaWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListQuotaRequest');
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
    public function listResourceTypes($request)
    {
        return $this->listResourceTypesWithHttpInfo($request);
    }

    public function listResourceTypesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceTypesRequest');
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
    public function disableOrganizationShare($request)
    {
        return $this->disableOrganizationShareWithHttpInfo($request);
    }

    public function disableOrganizationShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DisableOrganizationShareRequest');
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
    public function enableOrganizationShare($request)
    {
        return $this->enableOrganizationShareWithHttpInfo($request);
    }

    public function enableOrganizationShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\EnableOrganizationShareRequest');
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
    public function showOrganizationShare($request)
    {
        return $this->showOrganizationShareWithHttpInfo($request);
    }

    public function showOrganizationShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ShowOrganizationShareRequest');
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
    public function listPermissionVersions($request)
    {
        return $this->listPermissionVersionsWithHttpInfo($request);
    }

    public function listPermissionVersionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListPermissionVersionsRequest');
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
    public function listPermissions($request)
    {
        return $this->listPermissionsWithHttpInfo($request);
    }

    public function listPermissionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListPermissionsRequest');
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
    public function showPermission($request)
    {
        return $this->showPermissionWithHttpInfo($request);
    }

    public function showPermissionWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ShowPermissionRequest');
    }

    /**
     * 检索资源使用者并去除其中的重复项
     *
     * 检索您正在共享资源的不同使用者或被共享资源给您的不同使用者并去除其中的重复项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDistinctPrincipals($request)
    {
        return $this->searchDistinctPrincipalsWithHttpInfo($request);
    }

    public function searchDistinctPrincipalsWithHttpInfo($request)
    {
        $resourcePath = '/v1/shared-principals/search-distinct-principal';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchDistinctPrincipalsResponse',
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchDistinctPrincipalsRequest');
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
    public function searchSharedPrincipals($request)
    {
        return $this->searchSharedPrincipalsWithHttpInfo($request);
    }

    public function searchSharedPrincipalsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchSharedPrincipalsRequest');
    }

    /**
     * 检索共享的资源并去除其中的重复项
     *
     * 检索您添加到资源共享或被共享给您的不同资源并去除其中的重复项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDistinctSharedResources($request)
    {
        return $this->searchDistinctSharedResourcesWithHttpInfo($request);
    }

    public function searchDistinctSharedResourcesWithHttpInfo($request)
    {
        $resourcePath = '/v1/shared-resources/search-distinct-resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $responseType='\HuaweiCloud\SDK\Ram\V1\Model\SearchDistinctSharedResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchDistinctSharedResourcesRequest');
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
    public function searchSharedResources($request)
    {
        return $this->searchSharedResourcesWithHttpInfo($request);
    }

    public function searchSharedResourcesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchSharedResourcesRequest');
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
    public function createResourceShare($request)
    {
        return $this->createResourceShareWithHttpInfo($request);
    }

    public function createResourceShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\CreateResourceShareRequest');
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
    public function deleteResourceShare($request)
    {
        return $this->deleteResourceShareWithHttpInfo($request);
    }

    public function deleteResourceShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DeleteResourceShareRequest');
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
    public function searchResourceShares($request)
    {
        return $this->searchResourceSharesWithHttpInfo($request);
    }

    public function searchResourceSharesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceSharesRequest');
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
    public function updateResourceShare($request)
    {
        return $this->updateResourceShareWithHttpInfo($request);
    }

    public function updateResourceShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\UpdateResourceShareRequest');
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
    public function associateResourceShare($request)
    {
        return $this->associateResourceShareWithHttpInfo($request);
    }

    public function associateResourceShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\AssociateResourceShareRequest');
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
    public function disassociateResourceShare($request)
    {
        return $this->disassociateResourceShareWithHttpInfo($request);
    }

    public function disassociateResourceShareWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\DisassociateResourceShareRequest');
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
    public function searchResourceShareAssociations($request)
    {
        return $this->searchResourceShareAssociationsWithHttpInfo($request);
    }

    public function searchResourceShareAssociationsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareAssociationsRequest');
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
    public function acceptResourceShareInvitation($request)
    {
        return $this->acceptResourceShareInvitationWithHttpInfo($request);
    }

    public function acceptResourceShareInvitationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\AcceptResourceShareInvitationRequest');
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
    public function rejectResourceShareInvitation($request)
    {
        return $this->rejectResourceShareInvitationWithHttpInfo($request);
    }

    public function rejectResourceShareInvitationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\RejectResourceShareInvitationRequest');
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
    public function searchResourceShareInvitation($request)
    {
        return $this->searchResourceShareInvitationWithHttpInfo($request);
    }

    public function searchResourceShareInvitationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareInvitationRequest');
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
    public function batchCreateResourceShareTags($request)
    {
        return $this->batchCreateResourceShareTagsWithHttpInfo($request);
    }

    public function batchCreateResourceShareTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\BatchCreateResourceShareTagsRequest');
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
    public function batchDeleteResourceShareTags($request)
    {
        return $this->batchDeleteResourceShareTagsWithHttpInfo($request);
    }

    public function batchDeleteResourceShareTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\BatchDeleteResourceShareTagsRequest');
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
    public function listResourceShareTags($request)
    {
        return $this->listResourceShareTagsWithHttpInfo($request);
    }

    public function listResourceShareTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceShareTagsRequest');
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
    public function listResourceSharesByTags($request)
    {
        return $this->listResourceSharesByTagsWithHttpInfo($request);
    }

    public function listResourceSharesByTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\ListResourceSharesByTagsRequest');
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
    public function searchResourceShareCountByTags($request)
    {
        return $this->searchResourceShareCountByTagsWithHttpInfo($request);
    }

    public function searchResourceShareCountByTagsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\Ram\V1\Model\SearchResourceShareCountByTagsRequest');
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