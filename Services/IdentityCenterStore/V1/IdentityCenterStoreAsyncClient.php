<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IdentityCenterStoreAsyncClient extends Client
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
        $client = new ClientBuilder(new IdentityCenterStoreAsyncClient());
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
    public function createGroupAsync($request)
    {
        return $this->createGroupAsyncWithHttpInfo($request);
    }
    
    public function createGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateGroupRequest',
            $asyncRequest = true);
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
    public function deleteGroupAsync($request)
    {
        return $this->deleteGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteGroupRequest',
            $asyncRequest = true);
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
    public function describeGroupAsync($request)
    {
        return $this->describeGroupAsyncWithHttpInfo($request);
    }
    
    public function describeGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeGroupRequest',
            $asyncRequest = true);
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
    public function getGroupIdAsync($request)
    {
        return $this->getGroupIdAsyncWithHttpInfo($request);
    }
    
    public function getGroupIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetGroupIdRequest',
            $asyncRequest = true);
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
    public function listGroupsAsync($request)
    {
        return $this->listGroupsAsyncWithHttpInfo($request);
    }
    
    public function listGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupsRequest',
            $asyncRequest = true);
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
    public function updateGroupAsync($request)
    {
        return $this->updateGroupAsyncWithHttpInfo($request);
    }
    
    public function updateGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UpdateGroupRequest',
            $asyncRequest = true);
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
    public function createGroupMembershipAsync($request)
    {
        return $this->createGroupMembershipAsyncWithHttpInfo($request);
    }
    
    public function createGroupMembershipAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateGroupMembershipRequest',
            $asyncRequest = true);
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
    public function deleteGroupMembershipAsync($request)
    {
        return $this->deleteGroupMembershipAsyncWithHttpInfo($request);
    }
    
    public function deleteGroupMembershipAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteGroupMembershipRequest',
            $asyncRequest = true);
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
    public function describeGroupMembershipAsync($request)
    {
        return $this->describeGroupMembershipAsyncWithHttpInfo($request);
    }
    
    public function describeGroupMembershipAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeGroupMembershipRequest',
            $asyncRequest = true);
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
    public function getGroupMembershipIdAsync($request)
    {
        return $this->getGroupMembershipIdAsyncWithHttpInfo($request);
    }
    
    public function getGroupMembershipIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetGroupMembershipIdRequest',
            $asyncRequest = true);
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
    public function isMemberInGroupsAsync($request)
    {
        return $this->isMemberInGroupsAsyncWithHttpInfo($request);
    }
    
    public function isMemberInGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IsMemberInGroupsRequest',
            $asyncRequest = true);
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
    public function listGroupMembershipsAsync($request)
    {
        return $this->listGroupMembershipsAsyncWithHttpInfo($request);
    }
    
    public function listGroupMembershipsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupMembershipsRequest',
            $asyncRequest = true);
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
    public function listGroupMembershipsForMemberAsync($request)
    {
        return $this->listGroupMembershipsForMemberAsyncWithHttpInfo($request);
    }
    
    public function listGroupMembershipsForMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListGroupMembershipsForMemberRequest',
            $asyncRequest = true);
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
    public function createUserAsync($request)
    {
        return $this->createUserAsyncWithHttpInfo($request);
    }
    
    public function createUserAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\CreateUserRequest',
            $asyncRequest = true);
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
    public function deleteUserAsync($request)
    {
        return $this->deleteUserAsyncWithHttpInfo($request);
    }
    
    public function deleteUserAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DeleteUserRequest',
            $asyncRequest = true);
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
    public function describeUserAsync($request)
    {
        return $this->describeUserAsyncWithHttpInfo($request);
    }
    
    public function describeUserAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\DescribeUserRequest',
            $asyncRequest = true);
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
    public function getUserIdAsync($request)
    {
        return $this->getUserIdAsyncWithHttpInfo($request);
    }
    
    public function getUserIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\GetUserIdRequest',
            $asyncRequest = true);
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
    public function listUsersAsync($request)
    {
        return $this->listUsersAsyncWithHttpInfo($request);
    }
    
    public function listUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ListUsersRequest',
            $asyncRequest = true);
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
    public function updateUserAsync($request)
    {
        return $this->updateUserAsyncWithHttpInfo($request);
    }
    
    public function updateUserAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UpdateUserRequest',
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