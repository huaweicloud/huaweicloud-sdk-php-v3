<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IdentityCenterSCIMAsyncClient extends Client
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
        $client = new ClientBuilder(new IdentityCenterSCIMAsyncClient(), "IdentityCenterSCIMCredentials");
        return $client;
    }

    /**
     * 创建用户组
     *
     * 使用SCIM协议，同步用户组到IAM身份中心。
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - displayName、schemas为必填项
     * - 在单个请求中最多可以添加100个成员
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
        $resourcePath = '/{tenant_id}/scim/v2/Groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\CreateGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\CreateGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除用户组
     *
     * 删除现有用户组。
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
        $resourcePath = '/{tenant_id}/scim/v2/Groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\DeleteGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\DeleteGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户组详情
     *
     * 查询现有用户组的详情信息。
     * 暂不支持
     * IAM身份中心暂不支持此API操作的以下方面。
     * - 查询用户组详情接口和列出用户组接口返回空成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getGroupAsync($request)
    {
        return $this->getGroupAsyncWithHttpInfo($request);
    }
    
    public function getGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{tenant_id}/scim/v2/Groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 列出用户组
     *
     * 对现有用户组列表执行筛选查询，最多只能返回50个结果。
     * 暂不支持
     * IAM身份中心暂不支持此API操作的以下方面。
     * - 查询用户组详情接口和列出用户组接口返回空成员列表
     * 
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - 目前，列出用户组接口最多只能返回50个结果
     * - 支持的筛选器组合：(displayName)、(id)。请注意，使用id作为单个过滤器虽然有效，但应避免使用，因为已经有一个查询用户组详情接口可用
     * - 过滤器中支持的比较运算符：eq
     * - 必须按如下方式指定筛选器：&lt;filterAttribute&gt; eq \&quot;&lt;filterValue&gt;\&quot;
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
        $resourcePath = '/{tenant_id}/scim/v2/Groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ListGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ListGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 部分更新用户组
     *
     * 修改现有用户组的部分属性，和管理用户组中的用户。
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - 请求中只允许使用displayName、 members和externalId属性
     * - 单个请求中最多允许100个成员更改
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function patchGroupAsync($request)
    {
        return $this->patchGroupAsyncWithHttpInfo($request);
    }
    
    public function patchGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{tenant_id}/scim/v2/Groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务提供商配置
     *
     * 查询IAM身份中心的SCIM相关配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function serviceProviderConfigAsync($request)
    {
        return $this->serviceProviderConfigAsyncWithHttpInfo($request);
    }
    
    public function serviceProviderConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{tenant_id}/scim/v2/ServiceProviderConfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ServiceProviderConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ServiceProviderConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 创建用户
     *
     * 使用SCIM协议，同步用户到IAM身份中心。
     * 暂不支持
     * IAM身份中心暂不支持此API操作的以下方面。
     * - ims、photos、x509Certificates、entitlements和password属性
     * - manager的displayName子属性
     * - emails、addresses和phoneNumbers的display子属性
     * 
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - 必须填写userName、displayName、schemas属性，name属性中的familyName、givenName子属性，emails属性中的value、primary、type子属性
     * - addresses可以包含字母、重音字符、符号、数字、标点符号、空格（正常和不换行）
     * - 我们不支持多值属性中的多个值（例如emails,addresses,phoneNumbers）。只允许单个值
     * - emails属性值必须标记为primary
     * - 不能指定groups字段
     * - userName字段可以包含字母、数字和部分符号_+&#x3D;,.@-
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
        $resourcePath = '/{tenant_id}/scim/v2/Users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\CreateUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\CreateUserRequest',
            $asyncRequest = true);
    }

    /**
     * 删除用户
     *
     * 删除现有用户。
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
        $resourcePath = '/{tenant_id}/scim/v2/Users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\DeleteUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\DeleteUserRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户详情
     *
     * 查询现有用户的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getUserAsync($request)
    {
        return $this->getUserAsyncWithHttpInfo($request);
    }
    
    public function getUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{tenant_id}/scim/v2/Users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\GetUserRequest',
            $asyncRequest = true);
    }

    /**
     * 列出用户
     *
     * 对现有用户列表执行筛选查询，最多只能返回50个结果。
     * 暂不支持
     * IAM身份中心不支持此API操作的以下方面。
     * - startIndex,attributes,excludedAttributes（虽在SCIM协议中列出）
     * 
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - 目前，列出用户接口最多只能返回50个结果
     * - 支持的筛选器组合：(userName)、(id)。请注意，使用id作为单个过滤器虽然有效，但应避免使用，因为已经有一个查询用户详情接口可用
     * - 过滤器中支持的比较运算符：eq
     * - 必须按如下方式指定筛选器：&lt;filterAttribute&gt; eq \&quot;&lt;filterValue&gt;\&quot;
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
        $resourcePath = '/{tenant_id}/scim/v2/Users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ListUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ListUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 部分更新用户
     *
     * 修改现有用户的部分属性。
     * 暂不支持
     * IAM身份中心暂不支持此API操作的以下方面。
     * - 对userName或active属性执行多个PATCH操作
     * - ims、photos、x509Certificates、entitlements和password属性
     * - manager的displayName子属性
     * - emails、addresses和phoneNumbers的display子属性
     * 
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - 支持的操作是add、replace和remove
     * - 必须指定操作
     * - remove操作需要指定属性路径
     * - add和replace操作需要指定属性的值
     * - 仅允许修改userName、active、externalId、displayName、nickName、profileUrl、title、userType、preferredLanguage、locale、timezone、name、enterprise、emails、addresses和phoneNumbers属性
     * - 过滤器中仅支持eq运算符
     * - userName或active属性不支持remove操作
     * - 我们不支持多值属性中的多个值（例如emails,addresses,phoneNumbers）。这些属性中的每一个都只允许有一个值
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function patchUserAsync($request)
    {
        return $this->patchUserAsyncWithHttpInfo($request);
    }
    
    public function patchUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{tenant_id}/scim/v2/Users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PatchUserRequest',
            $asyncRequest = true);
    }

    /**
     * 更新用户
     *
     * 更新现有用户。
     * 暂不支持
     * IAM身份中心暂不支持此API操作的以下方面。
     * - ims、photos、x509Certificates、entitlements和password属性
     * - manager的displayName子属性
     * - emails、addresses和phoneNumbers的display子属性
     * 
     * 约束条件
     * IAM身份中心对此API操作具有以下约束。
     * - 必须填写userName、displayName、schemas属性，name属性中的familyName、givenName子属性，emails属性中的value、primary、type子属性
     * - addresses可以包含字母、重音字符、符号、数字、标点符号、空格（正常和不换行）
     * - 我们不支持多值属性中的多个值（例如emails,addresses,phoneNumbers）
     * - emails属性值必须标记为primary
     * - 不能指定groups属性
     * - userName字段可以包含字母、数字和部分符号_+&#x3D;,.@-
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putUserAsync($request)
    {
        return $this->putUserAsyncWithHttpInfo($request);
    }
    
    public function putUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{tenant_id}/scim/v2/Users/{user_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PutUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PutUserRequest',
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