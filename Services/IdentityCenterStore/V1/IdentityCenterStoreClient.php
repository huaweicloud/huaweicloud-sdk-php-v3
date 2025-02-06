<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IdentityCenterStoreClient extends Client
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
        $client = new ClientBuilder(new IdentityCenterStoreClient());
        return $client;
    }


    /**
     * 创建用户组
     *
     * 在指定的身份源中创建一个IAM身份中心用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGroup($request)
    {
        return $this->createGroupWithHttpInfo($request);
    }

    public function createGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateGroupResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateGroupRequest');
    }

    /**
     * 删除用户组
     *
     * 根据用户组ID，删除对应的IAM身份中心用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGroup($request)
    {
        return $this->deleteGroupWithHttpInfo($request);
    }

    public function deleteGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteGroupResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteGroupRequest');
    }

    /**
     * 查询用户组详情
     *
     * 根据用户组ID，查询IAM身份中心用户组的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeGroup($request)
    {
        return $this->describeGroupWithHttpInfo($request);
    }

    public function describeGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeGroupResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeGroupRequest');
    }

    /**
     * 查询用户组ID
     *
     * 根据显示名或外部身份源ID，以精确匹配的方式查询用户组ID。显示名和外部身份源ID两种查询方式二选一，不支持同时传入。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getGroupId($request)
    {
        return $this->getGroupIdWithHttpInfo($request);
    }

    public function getGroupIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/groups/retrieve-group-id';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetGroupIdResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetGroupIdRequest');
    }

    /**
     * 列出用户组
     *
     * 查询指定身份源下的IAM身份中心用户组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroups($request)
    {
        return $this->listGroupsWithHttpInfo($request);
    }

    public function listGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['displayName'] !== null) {
            $queryParams['display_name'] = $localVarParams['displayName'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupsResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupsRequest');
    }

    /**
     * 更新用户组
     *
     * 根据用户组ID，更新对应IAM身份中心用户组的属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroup($request)
    {
        return $this->updateGroupWithHttpInfo($request);
    }

    public function updateGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UpdateGroupResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UpdateGroupRequest');
    }

    /**
     * 绑定用户和组
     *
     * 将用户添加到用户组中，用户和用户组必须在同一身份源下。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGroupMembership($request)
    {
        return $this->createGroupMembershipWithHttpInfo($request);
    }

    public function createGroupMembershipWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/group-memberships';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateGroupMembershipResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateGroupMembershipRequest');
    }

    /**
     * 解绑用户和组
     *
     * 根据关联关系ID解绑用户和用户组，也就是将用户移出用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGroupMembership($request)
    {
        return $this->deleteGroupMembershipWithHttpInfo($request);
    }

    public function deleteGroupMembershipWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/group-memberships/{membership_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['membershipId'] !== null) {
            $pathParams['membership_id'] = $localVarParams['membershipId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteGroupMembershipResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteGroupMembershipRequest');
    }

    /**
     * 查询绑定关系详情
     *
     * 根据关联关系ID，查询此关联关系的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeGroupMembership($request)
    {
        return $this->describeGroupMembershipWithHttpInfo($request);
    }

    public function describeGroupMembershipWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/group-memberships/{membership_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['membershipId'] !== null) {
            $pathParams['membership_id'] = $localVarParams['membershipId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeGroupMembershipResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeGroupMembershipRequest');
    }

    /**
     * 查询绑定关系ID
     *
     * 根据用户ID和用户组ID，查询对应的关联关系ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getGroupMembershipId($request)
    {
        return $this->getGroupMembershipIdWithHttpInfo($request);
    }

    public function getGroupMembershipIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/group-memberships/retrieve-group-membership-id';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetGroupMembershipIdResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetGroupMembershipIdRequest');
    }

    /**
     * 查询用户是否为用户组成员
     *
     * 根据用户ID和用户组ID列表，查询用户是否为用户组的成员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function isMemberInGroups($request)
    {
        return $this->isMemberInGroupsWithHttpInfo($request);
    }

    public function isMemberInGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/is-member-in-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IsMemberInGroupsResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IsMemberInGroupsRequest');
    }

    /**
     * 列出组中的用户
     *
     * 根据用户组ID，列出用户组中的用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMemberships($request)
    {
        return $this->listGroupMembershipsWithHttpInfo($request);
    }

    public function listGroupMembershipsWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/group-memberships';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupMembershipsResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupMembershipsRequest');
    }

    /**
     * 列出用户加入的组
     *
     * 根据用户ID，列出用户加入的用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupMembershipsForMember($request)
    {
        return $this->listGroupMembershipsForMemberWithHttpInfo($request);
    }

    public function listGroupMembershipsForMemberWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/group-memberships-for-member';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupMembershipsForMemberResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupMembershipsForMemberRequest');
    }

    /**
     * 创建用户
     *
     * 在指定的身份源中创建一个IAM身份中心用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createUser($request)
    {
        return $this->createUserWithHttpInfo($request);
    }

    public function createUserWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateUserResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateUserRequest');
    }

    /**
     * 删除用户
     *
     * 根据用户ID，删除对应的IAM身份中心用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteUser($request)
    {
        return $this->deleteUserWithHttpInfo($request);
    }

    public function deleteUserWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteUserResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteUserRequest');
    }

    /**
     * 查询用户详情
     *
     * 根据用户ID，查询对应IAM身份中心用户的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeUser($request)
    {
        return $this->describeUserWithHttpInfo($request);
    }

    public function describeUserWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeUserResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeUserRequest');
    }

    /**
     * 查询用户ID
     *
     * 根据用户名或外部身份源ID，以精确匹配的方式查询用户ID。用户名和外部身份源ID两种查询方式二选一，不支持同时传入。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getUserId($request)
    {
        return $this->getUserIdWithHttpInfo($request);
    }

    public function getUserIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/users/retrieve-user-id';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetUserIdResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetUserIdRequest');
    }

    /**
     * 列出用户
     *
     * 查询指定身份源下的IAM身份中心用户列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsers($request)
    {
        return $this->listUsersWithHttpInfo($request);
    }

    public function listUsersWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListUsersResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListUsersRequest');
    }

    /**
     * 更新用户
     *
     * 根据用户ID，更新对应IAM身份中心用户的属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateUser($request)
    {
        return $this->updateUserWithHttpInfo($request);
    }

    public function updateUserWithHttpInfo($request)
    {
        $resourcePath = '/v1/identity-stores/{identity_store_id}/users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['identityStoreId'] !== null) {
            $pathParams['identity_store_id'] = $localVarParams['identityStoreId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UpdateUserResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UpdateUserRequest');
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