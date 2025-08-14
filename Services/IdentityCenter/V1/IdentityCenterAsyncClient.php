<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IdentityCenterAsyncClient extends Client
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
        $client = new ClientBuilder(new IdentityCenterAsyncClient(), "GlobalCredentials");
        return $client;
    }

    /**
     * 创建账户分配
     *
     * 使用指定的权限集为指定账户分配对应主体的访问权限，主体可为IdentityCenter用户或IdentityCenter用户组。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccountAssignmentAsync($request)
    {
        return $this->createAccountAssignmentAsyncWithHttpInfo($request);
    }
    
    public function createAccountAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateAccountAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateAccountAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除账号分配
     *
     * 使用指定的权限集从指定的账号删除主体的访问权限，主体可为IAM身份中心用户或用户组。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAccountAssignmentAsync($request)
    {
        return $this->deleteAccountAssignmentAsyncWithHttpInfo($request);
    }
    
    public function deleteAccountAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteAccountAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteAccountAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账户分配创建状态详情
     *
     * 根据请求ID，查询指定IAM Identity Center实例下的账户分配创建状态详情信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeAccountAssignmentCreationStatusAsync($request)
    {
        return $this->describeAccountAssignmentCreationStatusAsyncWithHttpInfo($request);
    }
    
    public function describeAccountAssignmentCreationStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments/creation-status/{request_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['requestId'] !== null) {
            $pathParams['request_id'] = $localVarParams['requestId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeAccountAssignmentCreationStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeAccountAssignmentCreationStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账户分配删除状态详情
     *
     * 根据请求ID，查询指定IAM Identity Center实例下的账户分配删除状态详情信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeAccountAssignmentDeletionStatusAsync($request)
    {
        return $this->describeAccountAssignmentDeletionStatusAsyncWithHttpInfo($request);
    }
    
    public function describeAccountAssignmentDeletionStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments/deletion-status/{request_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['requestId'] !== null) {
            $pathParams['request_id'] = $localVarParams['requestId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeAccountAssignmentDeletionStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeAccountAssignmentDeletionStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 解除与用户或组绑定的所有账号授权关联
     *
     * 解除与用户或组绑定的所有账号授权关联。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateProfileAsync($request)
    {
        return $this->disassociateProfileAsyncWithHttpInfo($request);
    }
    
    public function disassociateProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/disassociate-profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DisassociateProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DisassociateProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 列出账户分配创建状态
     *
     * 查询指定IAM Identity Center实例下的账户分配的创建状态列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignmentCreationStatusAsync($request)
    {
        return $this->listAccountAssignmentCreationStatusAsyncWithHttpInfo($request);
    }
    
    public function listAccountAssignmentCreationStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments/creation-statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentCreationStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentCreationStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 列出账户分配删除状态
     *
     * 查询指定IAM Identity Center实例下的账户分配的删除状态列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignmentDeletionStatusAsync($request)
    {
        return $this->listAccountAssignmentDeletionStatusAsyncWithHttpInfo($request);
    }
    
    public function listAccountAssignmentDeletionStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments/deletion-statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentDeletionStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentDeletionStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 列出账户和权限集关联的用户或用户组
     *
     * 列出与指定账户以及指定权限集关联的用户或用户组。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignmentsAsync($request)
    {
        return $this->listAccountAssignmentsAsyncWithHttpInfo($request);
    }
    
    public function listAccountAssignmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $queryParams['permission_set_id'] = $localVarParams['permissionSetId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 检索与用户或用户组关联的账号列表
     *
     * 检索与用户或用户组关联的账号列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignmentsForPrincipalAsync($request)
    {
        return $this->listAccountAssignmentsForPrincipalAsyncWithHttpInfo($request);
    }
    
    public function listAccountAssignmentsForPrincipalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/account-assignments-for-principals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['principalId'] !== null) {
            $queryParams['principal_id'] = $localVarParams['principalId'];
        }
        if ($localVarParams['principalType'] !== null) {
            $queryParams['principal_type'] = $localVarParams['principalType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentsForPrincipalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentsForPrincipalRequest',
            $asyncRequest = true);
    }

    /**
     * 创建应用程序实例
     *
     * 创建应用程序实例。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApplicationInstanceAsync($request)
    {
        return $this->createApplicationInstanceAsyncWithHttpInfo($request);
    }
    
    public function createApplicationInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateApplicationInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateApplicationInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用程序实例
     *
     * 删除应用程序实例。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationInstanceAsync($request)
    {
        return $this->deleteApplicationInstanceAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteApplicationInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteApplicationInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用程序实例与用户或用户组关联关系
     *
     * 删除应用程序实例与用户或用户组关联关系。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProfileAsync($request)
    {
        return $this->deleteProfileAsyncWithHttpInfo($request);
    }
    
    public function deleteProfileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/profiles/{profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
        }
        if ($localVarParams['profileId'] !== null) {
            $pathParams['profile_id'] = $localVarParams['profileId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteProfileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteProfileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用程序详情
     *
     * 查询应用程序详情。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeApplicationAsync($request)
    {
        return $this->describeApplicationAsyncWithHttpInfo($request);
    }
    
    public function describeApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/applications/{application_instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用程序提供者详情
     *
     * 查询应用程序提供者详情。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeApplicationProviderAsync($request)
    {
        return $this->describeApplicationProviderAsyncWithHttpInfo($request);
    }
    
    public function describeApplicationProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/application-providers/{application_provider_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationProviderId'] !== null) {
            $pathParams['application_provider_id'] = $localVarParams['applicationProviderId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeApplicationProviderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeApplicationProviderRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用程序分配属性配置
     *
     * 查询应用程序分配属性配置，目的为用户或者用户组分配对应用程序的访问权限。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getApplicationAssignmentConfigurationAsync($request)
    {
        return $this->getApplicationAssignmentConfigurationAsyncWithHttpInfo($request);
    }
    
    public function getApplicationAssignmentConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/applications/{application_instance_id}/assignments-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetApplicationAssignmentConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetApplicationAssignmentConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用程序实例详情
     *
     * 查询应用程序实例详情。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getApplicationInstanceAsync($request)
    {
        return $this->getApplicationInstanceAsyncWithHttpInfo($request);
    }
    
    public function getApplicationInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetApplicationInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetApplicationInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 上传应用程序实例元数据文件
     *
     * 上传应用程序实例元数据文件。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importApplicationInstanceServiceProviderMetadataAsync($request)
    {
        return $this->importApplicationInstanceServiceProviderMetadataAsyncWithHttpInfo($request);
    }
    
    public function importApplicationInstanceServiceProviderMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ImportApplicationInstanceServiceProviderMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ImportApplicationInstanceServiceProviderMetadataRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序实例
     *
     * 列出应用程序实例。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationInstancesAsync($request)
    {
        return $this->listApplicationInstancesAsyncWithHttpInfo($request);
    }
    
    public function listApplicationInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序提供者
     *
     * 查询应用程序提供者列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationProvidersAsync($request)
    {
        return $this->listApplicationProvidersAsyncWithHttpInfo($request);
    }
    
    public function listApplicationProvidersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/application-providers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationProvidersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationProvidersRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序模板
     *
     * 查询应用程序模板列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationTemplatesAsync($request)
    {
        return $this->listApplicationTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listApplicationTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/application-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $queryParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationTemplatesRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序
     *
     * 查询应用程序列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationsAsync($request)
    {
        return $this->listApplicationsAsyncWithHttpInfo($request);
    }
    
    public function listApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationsRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序目录中的预置应用模板
     *
     * 列出应用程序目录中的预置应用模板。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCatalogApplicationsAsync($request)
    {
        return $this->listCatalogApplicationsAsyncWithHttpInfo($request);
    }
    
    public function listCatalogApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/catalog/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListCatalogApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListCatalogApplicationsRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序实例与用户或用户组存在的关联关系
     *
     * 列出应用程序实例与用户或用户组存在的关联关系。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProfilesAsync($request)
    {
        return $this->listProfilesAsyncWithHttpInfo($request);
    }
    
    public function listProfilesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/profiles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListProfilesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListProfilesRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用程序实例显示信息
     *
     * 更新应用程序实例显示信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceDisplayDataAsync($request)
    {
        return $this->updateApplicationInstanceDisplayDataAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceDisplayDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/display-data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceDisplayDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceDisplayDataRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用程序属性配置
     *
     * 更新应用程序属性配置信息，更新应用程序中的属性映射、中继状态以及会话过期时间。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceResponseConfigurationAsync($request)
    {
        return $this->updateApplicationInstanceResponseConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceResponseConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/response-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceResponseConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceResponseConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用程序Schema属性映射配置
     *
     * 更新应用程序Schema属性映射配置，支持SAML断言中Subject属性映射以及Subject NameID格式。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceResponseSchemaConfigurationAsync($request)
    {
        return $this->updateApplicationInstanceResponseSchemaConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceResponseSchemaConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/response-schema-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceResponseSchemaConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceResponseSchemaConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用程序实例证书配置
     *
     * 更新应用程序实例证书配置。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceSecurityConfigurationAsync($request)
    {
        return $this->updateApplicationInstanceSecurityConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceSecurityConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/security-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceSecurityConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceSecurityConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用程序实例服务提供商配置
     *
     * 更新应用程序实例服务提供商配置。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceServiceProviderConfigurationAsync($request)
    {
        return $this->updateApplicationInstanceServiceProviderConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceServiceProviderConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/service-provider-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceServiceProviderConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceServiceProviderConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新应用程序实例状态
     *
     * 更新应用程序实例状态。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceStatusAsync($request)
    {
        return $this->updateApplicationInstanceStatusAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 应用程序分配用户或用户组
     *
     * 应用程序分配用户或用户组。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApplicationAssignmentAsync($request)
    {
        return $this->createApplicationAssignmentAsyncWithHttpInfo($request);
    }
    
    public function createApplicationAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/applications/{application_instance_id}/assignments/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateApplicationAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateApplicationAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用程序已分配用户或用户组
     *
     * 删除应用程序已分配用户或用户组。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationAssignmentAsync($request)
    {
        return $this->deleteApplicationAssignmentAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationAssignmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/applications/{application_instance_id}/assignments/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteApplicationAssignmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteApplicationAssignmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用程序已分配的用户或用户组列表
     *
     * 查询应用程序已分配的用户或用户组列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationAssignmentsAsync($request)
    {
        return $this->listApplicationAssignmentsAsyncWithHttpInfo($request);
    }
    
    public function listApplicationAssignmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/applications/{application_instance_id}/assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationAssignmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationAssignmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 检索与用户或用户组关联的应用程序列表
     *
     * 检索与用户或用户组关联的应用程序列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationAssignmentsForPrincipalAsync($request)
    {
        return $this->listApplicationAssignmentsForPrincipalAsyncWithHttpInfo($request);
    }
    
    public function listApplicationAssignmentsForPrincipalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-assignments-for-principals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['principalId'] !== null) {
            $queryParams['principal_id'] = $localVarParams['principalId'];
        }
        if ($localVarParams['principalType'] !== null) {
            $queryParams['principal_type'] = $localVarParams['principalType'];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationAssignmentsForPrincipalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationAssignmentsForPrincipalRequest',
            $asyncRequest = true);
    }

    /**
     * 创建应用程序实例证书
     *
     * 创建应用程序实例证书。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApplicationInstanceCertificateAsync($request)
    {
        return $this->createApplicationInstanceCertificateAsyncWithHttpInfo($request);
    }
    
    public function createApplicationInstanceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateApplicationInstanceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateApplicationInstanceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用程序实例证书
     *
     * 删除应用程序实例证书。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationInstanceCertificateAsync($request)
    {
        return $this->deleteApplicationInstanceCertificateAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationInstanceCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteApplicationInstanceCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteApplicationInstanceCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 列出应用程序实例证书
     *
     * 查询应用程序实例证书列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationInstanceCertificatesAsync($request)
    {
        return $this->listApplicationInstanceCertificatesAsyncWithHttpInfo($request);
    }
    
    public function listApplicationInstanceCertificatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationInstanceCertificatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListApplicationInstanceCertificatesRequest',
            $asyncRequest = true);
    }

    /**
     * 激活应用程序实例证书
     *
     * 激活应用程序实例证书，实现证书轮转。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApplicationInstanceActiveCertificateAsync($request)
    {
        return $this->updateApplicationInstanceActiveCertificateAsyncWithHttpInfo($request);
    }
    
    public function updateApplicationInstanceActiveCertificateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/application-instances/{application_instance_id}/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['applicationInstanceId'] !== null) {
            $pathParams['application_instance_id'] = $localVarParams['applicationInstanceId'];
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceActiveCertificateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateApplicationInstanceActiveCertificateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例配置信息
     *
     * 查询IAM身份中心实例配置信息，包括身份认证配置和会话管理配置信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getSsoConfigurationAsync($request)
    {
        return $this->getSsoConfigurationAsyncWithHttpInfo($request);
    }
    
    public function getSsoConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/sso-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetSsoConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetSsoConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 设置实例配置信息
     *
     * 设置IAM身份中心服务实例配置信息，包括身份认证配置和会话管理配置信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSsoConfigurationAsync($request)
    {
        return $this->updateSsoConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateSsoConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/sso-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateSsoConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateSsoConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 自定义访问门户URL
     *
     * 自定义访问门户URL，默认情况下，您可以使用遵循以下格式的 URL访问门户：idcenter.huaweicloud.com/d-xxxxxxxxxx/portal，您可以按如下方式更改为自定义 URL：idcenter.huaweicloud.com/your_subdomain/portal。设置自定义访问门户URL是一次性操作，无法撤销。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAliasAsync($request)
    {
        return $this->createAliasAsyncWithHttpInfo($request);
    }
    
    public function createAliasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/alias';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateAliasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateAliasRequest',
            $asyncRequest = true);
    }

    /**
     * 删除服务实例
     *
     * 删除IAM Identity Center服务实例。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIdentityCenterAsync($request)
    {
        return $this->deleteIdentityCenterAsyncWithHttpInfo($request);
    }
    
    public function deleteIdentityCenterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/service/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteIdentityCenterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteIdentityCenterRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务实例开通所在区域
     *
     * 查询IAM身份中心服务实例开通后，具体开通所在区域。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeRegisteredRegionsAsync($request)
    {
        return $this->describeRegisteredRegionsAsyncWithHttpInfo($request);
    }
    
    public function describeRegisteredRegionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/registered-regions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeRegisteredRegionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeRegisteredRegionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询高可用功能配置
     *
     * 查询高可用功能配置信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getHaConfigurationAsync($request)
    {
        return $this->getHaConfigurationAsyncWithHttpInfo($request);
    }
    
    public function getHaConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/disaster-recovery-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetHaConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetHaConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务实例状态
     *
     * 查询IAM Identity Center服务实例状态信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getIdentityCenterServiceStatusAsync($request)
    {
        return $this->getIdentityCenterServiceStatusAsyncWithHttpInfo($request);
    }
    
    public function getIdentityCenterServiceStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/identity-center-service/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetIdentityCenterServiceStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetIdentityCenterServiceStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 获取身份源配置
     *
     * 获取IAM身份中心服务实例中的身份源配置信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIdentityStoreAssociationAsync($request)
    {
        return $this->listIdentityStoreAssociationAsyncWithHttpInfo($request);
    }
    
    public function listIdentityStoreAssociationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/identity-store-associations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListIdentityStoreAssociationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListIdentityStoreAssociationRequest',
            $asyncRequest = true);
    }

    /**
     * 列出实例
     *
     * 查询IAM身份中心的实例列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstancesAsync($request)
    {
        return $this->listInstancesAsyncWithHttpInfo($request);
    }
    
    public function listInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 选择服务实例开通区域
     *
     * IAM身份中心服务实例开通前，需要选择服务实例具体开通在某一区域。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerRegionAsync($request)
    {
        return $this->registerRegionAsyncWithHttpInfo($request);
    }
    
    public function registerRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/register-regions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\RegisterRegionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\RegisterRegionRequest',
            $asyncRequest = true);
    }

    /**
     * 开通服务实例
     *
     * 开通IAM Identity Center服务实例。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startIdentityCenterAsync($request)
    {
        return $this->startIdentityCenterAsyncWithHttpInfo($request);
    }
    
    public function startIdentityCenterAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/service/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\StartIdentityCenterResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\StartIdentityCenterRequest',
            $asyncRequest = true);
    }

    /**
     * 更新高可用功能配置
     *
     * 授权启用或者禁用高可用功能配置。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHaConfigurationAsync($request)
    {
        return $this->updateHaConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateHaConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/disaster-recovery-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateHaConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateHaConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 启用指定实例的访问控制功能
     *
     * 启用指定实例的访问控制功能。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceAccessControlAttributeConfigurationAsync($request)
    {
        return $this->createInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request);
    }
    
    public function createInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/access-control-attribute-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateInstanceAccessControlAttributeConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateInstanceAccessControlAttributeConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 解除指定实例的访问控制属性配置
     *
     * 禁用指定IAM Identity Center实例的基于属性的访问控制（ABAC）功能，并删除已配置的所有属性映射。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceAccessControlAttributeConfigurationAsync($request)
    {
        return $this->deleteInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/access-control-attribute-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteInstanceAccessControlAttributeConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteInstanceAccessControlAttributeConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定实例的访问控制属性配置
     *
     * 返回已配置为与指定IAM Identity Center实例的基于属性的访问控制（ABAC）一起使用的IAM Identity Center身份存储属性列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeInstanceAccessControlAttributeConfigurationAsync($request)
    {
        return $this->describeInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request);
    }
    
    public function describeInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/access-control-attribute-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeInstanceAccessControlAttributeConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeInstanceAccessControlAttributeConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新指定实例的访问控制属性配置
     *
     * 更新可与IAM Identity Center实例一起使用的IAM Identity Center身份存储属性，以进行基于属性的访问控制（ABAC）。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceAccessControlAttributeConfigurationAsync($request)
    {
        return $this->updateInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceAccessControlAttributeConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/access-control-attribute-configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateInstanceAccessControlAttributeConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateInstanceAccessControlAttributeConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询MFA管理配置信息
     *
     * 查询MFA管理配置信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getMfaDeviceManagementForIdentityStoreAsync($request)
    {
        return $this->getMfaDeviceManagementForIdentityStoreAsyncWithHttpInfo($request);
    }
    
    public function getMfaDeviceManagementForIdentityStoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/mfa-devices/management-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetMfaDeviceManagementForIdentityStoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetMfaDeviceManagementForIdentityStoreRequest',
            $asyncRequest = true);
    }

    /**
     * 设置MFA管理设置信息
     *
     * 设置MFA管理设置信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putMfaDeviceManagementForIdentityStoreAsync($request)
    {
        return $this->putMfaDeviceManagementForIdentityStoreAsyncWithHttpInfo($request);
    }
    
    public function putMfaDeviceManagementForIdentityStoreAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/mfa-devices/management-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutMfaDeviceManagementForIdentityStoreResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutMfaDeviceManagementForIdentityStoreRequest',
            $asyncRequest = true);
    }

    /**
     * 添加系统身份策略
     *
     * 在指定的权限集中添加系统身份策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachManagedPolicyToPermissionSetAsync($request)
    {
        return $this->attachManagedPolicyToPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function attachManagedPolicyToPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/attach-managed-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\AttachManagedPolicyToPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\AttachManagedPolicyToPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 附加系统策略到权限集
     *
     * 将系统策略附加到权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachManagedRoleToPermissionSetAsync($request)
    {
        return $this->attachManagedRoleToPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function attachManagedRoleToPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/attach-managed-role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\AttachManagedRoleToPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\AttachManagedRoleToPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 创建权限集
     *
     * 在指定的IAM Identity Center实例中创建一个权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPermissionSetAsync($request)
    {
        return $this->createPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function createPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreatePermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreatePermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定权限集中的自定义身份策略
     *
     * 删除指定权限集中的自定义身份策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCustomPolicyFromPermissionSetAsync($request)
    {
        return $this->deleteCustomPolicyFromPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function deleteCustomPolicyFromPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/custom-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteCustomPolicyFromPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteCustomPolicyFromPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定权限集中的自定义策略
     *
     * 删除指定权限集中的自定义策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCustomRoleFromPermissionSetAsync($request)
    {
        return $this->deleteCustomRoleFromPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function deleteCustomRoleFromPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/custom-role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteCustomRoleFromPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteCustomRoleFromPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除权限集
     *
     * 根据权限集ID，删除指定的权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePermissionSetAsync($request)
    {
        return $this->deletePermissionSetAsyncWithHttpInfo($request);
    }
    
    public function deletePermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeletePermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeletePermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集详情
     *
     * 根据权限集ID，查询指定权限集的详情信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describePermissionSetAsync($request)
    {
        return $this->describePermissionSetAsyncWithHttpInfo($request);
    }
    
    public function describePermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribePermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribePermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集预分配状态详情
     *
     * 根据请求Id，查询权限集预分配状态的详情信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describePermissionSetProvisioningStatusAsync($request)
    {
        return $this->describePermissionSetProvisioningStatusAsyncWithHttpInfo($request);
    }
    
    public function describePermissionSetProvisioningStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/provisioning-status/{request_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['requestId'] !== null) {
            $pathParams['request_id'] = $localVarParams['requestId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribePermissionSetProvisioningStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribePermissionSetProvisioningStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 从权限集分离系统身份策略
     *
     * 将附加的系统身份策略从指定的权限集中分离。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachManagedPolicyFromPermissionSetAsync($request)
    {
        return $this->detachManagedPolicyFromPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function detachManagedPolicyFromPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/detach-managed-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DetachManagedPolicyFromPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DetachManagedPolicyFromPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 从权限集分离系统策略
     *
     * 将附加的系统策略从指定的权限集中分离。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachManagedRoleFromPermissionSetAsync($request)
    {
        return $this->detachManagedRoleFromPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function detachManagedRoleFromPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/detach-managed-role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DetachManagedRoleFromPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DetachManagedRoleFromPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 获取分配给权限集的自定义身份策略
     *
     * 获取分配给权限集的自定义身份策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getCustomPolicyForPermissionSetAsync($request)
    {
        return $this->getCustomPolicyForPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function getCustomPolicyForPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/custom-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetCustomPolicyForPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetCustomPolicyForPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 获取分配给权限集的自定义策略
     *
     * 获取分配给权限集的自定义策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getCustomRoleForPermissionSetAsync($request)
    {
        return $this->getCustomRoleForPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function getCustomRoleForPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/custom-role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetCustomRoleForPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetCustomRoleForPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询权限集配额信息
     *
     * 查询权限集配额信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getPermissionSetSummaryAsync($request)
    {
        return $this->getPermissionSetSummaryAsyncWithHttpInfo($request);
    }
    
    public function getPermissionSetSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-set-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetPermissionSetSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetPermissionSetSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 列出权限集关联的账号
     *
     * 查询与指定权限集关联的账户列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountsForProvisionedPermissionSetAsync($request)
    {
        return $this->listAccountsForProvisionedPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function listAccountsForProvisionedPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountsForProvisionedPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountsForProvisionedPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 列出权限集中附加的系统身份策略
     *
     * 获取附加到指定权限集的系统身份策略列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedPoliciesInPermissionSetAsync($request)
    {
        return $this->listManagedPoliciesInPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function listManagedPoliciesInPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/managed-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListManagedPoliciesInPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListManagedPoliciesInPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 列出权限集中附加的系统策略
     *
     * 获取附加到指定权限集的系统策略列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedRolesInPermissionSetAsync($request)
    {
        return $this->listManagedRolesInPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function listManagedRolesInPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/managed-roles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListManagedRolesInPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListManagedRolesInPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 列出权限集预分配状态
     *
     * 查询指定实例中的权限集预分配状态列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionSetProvisioningStatusAsync($request)
    {
        return $this->listPermissionSetProvisioningStatusAsyncWithHttpInfo($request);
    }
    
    public function listPermissionSetProvisioningStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/provisioning-statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetProvisioningStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetProvisioningStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 列出权限集
     *
     * 查询指定实例下的权限集列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionSetsAsync($request)
    {
        return $this->listPermissionSetsAsyncWithHttpInfo($request);
    }
    
    public function listPermissionSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['permissionSetId'] !== null) {
            $queryParams['permission_set_id'] = $localVarParams['permissionSetId'];
        }
        if ($localVarParams['permissionUrn'] !== null) {
            $queryParams['permission_urn'] = $localVarParams['permissionUrn'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 列出分配给账户的权限集
     *
     * 查询分配给指定账户的权限集列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionSetsProvisionedToAccountAsync($request)
    {
        return $this->listPermissionSetsProvisionedToAccountAsyncWithHttpInfo($request);
    }
    
    public function listPermissionSetsProvisionedToAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/provisioned-to-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['xSecurityToken'] !== null) {
            $headerParams['x_security_token'] = $localVarParams['xSecurityToken'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetsProvisionedToAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetsProvisionedToAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 预分配权限集
     *
     * 将指定权限集预分配给指定账户。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function provisionPermissionSetAsync($request)
    {
        return $this->provisionPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function provisionPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/provision';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ProvisionPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ProvisionPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 将自定义身份策略附加到权限集
     *
     * 将自定义身份策略附加到权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putCustomPolicyToPermissionSetAsync($request)
    {
        return $this->putCustomPolicyToPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function putCustomPolicyToPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/custom-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutCustomPolicyToPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutCustomPolicyToPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 将自定义策略附加到权限集
     *
     * 将自定义策略附加到权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putCustomRoleToPermissionSetAsync($request)
    {
        return $this->putCustomRoleToPermissionSetAsyncWithHttpInfo($request);
    }
    
    public function putCustomRoleToPermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}/custom-role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutCustomRoleToPermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutCustomRoleToPermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 更新权限集
     *
     * 根据权限集ID，更新指定权限集的属性。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePermissionSetAsync($request)
    {
        return $this->updatePermissionSetAsyncWithHttpInfo($request);
    }
    
    public function updatePermissionSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{instance_id}/permission-sets/{permission_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['permissionSetId'] !== null) {
            $pathParams['permission_set_id'] = $localVarParams['permissionSetId'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdatePermissionSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdatePermissionSetRequest',
            $asyncRequest = true);
    }

    /**
     * 为指定资源添加标签
     *
     * 向指定的资源添加一个或多个标签。目前，您可以将标签附加到实例中的权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTagResourceAsync($request)
    {
        return $this->createTagResourceAsyncWithHttpInfo($request);
    }
    
    public function createTagResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateTagResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateTagResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 从指定资源中删除指定主键标签
     *
     * 从指定资源中删除具有指定主键的任何标签。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTagResourceAsync($request)
    {
        return $this->deleteTagResourceAsyncWithHttpInfo($request);
    }
    
    public function deleteTagResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{resource_type}/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteTagResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteTagResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 列出绑定到指定资源的标签
     *
     * 列出绑定到指定资源的标签。您可以将标签附加到实例中的权限集。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagResourcesAsync($request)
    {
        return $this->listTagResourcesAsyncWithHttpInfo($request);
    }
    
    public function listTagResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/instances/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListTagResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListTagResourcesRequest',
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