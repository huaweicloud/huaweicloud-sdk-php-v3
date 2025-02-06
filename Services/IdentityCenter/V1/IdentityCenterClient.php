<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IdentityCenterClient extends Client
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
        $client = new ClientBuilder(new IdentityCenterClient(), "GlobalCredentials");
        return $client;
    }


    /**
     * 创建账号分配
     *
     * 使用指定的权限集为指定账号分配对应主体的访问权限，主体可为IAM身份中心用户或用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccountAssignment($request)
    {
        return $this->createAccountAssignmentWithHttpInfo($request);
    }

    public function createAccountAssignmentWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateAccountAssignmentRequest');
    }

    /**
     * 删除账号分配
     *
     * 使用指定的权限集从指定的账号删除主体的访问权限，主体可为IAM身份中心用户或用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAccountAssignment($request)
    {
        return $this->deleteAccountAssignmentWithHttpInfo($request);
    }

    public function deleteAccountAssignmentWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteAccountAssignmentRequest');
    }

    /**
     * 查询账号分配创建状态详情
     *
     * 根据请求ID，查询指定IAM身份中心实例下的账号分配创建状态详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeAccountAssignmentCreationStatus($request)
    {
        return $this->describeAccountAssignmentCreationStatusWithHttpInfo($request);
    }

    public function describeAccountAssignmentCreationStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeAccountAssignmentCreationStatusRequest');
    }

    /**
     * 查询账号分配删除状态详情
     *
     * 根据请求ID，查询指定IAM身份中心实例下的账号分配删除状态详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeAccountAssignmentDeletionStatus($request)
    {
        return $this->describeAccountAssignmentDeletionStatusWithHttpInfo($request);
    }

    public function describeAccountAssignmentDeletionStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeAccountAssignmentDeletionStatusRequest');
    }

    /**
     * 列出账号分配创建状态
     *
     * 查询指定IAM身份中心实例下的账号分配的创建状态列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignmentCreationStatus($request)
    {
        return $this->listAccountAssignmentCreationStatusWithHttpInfo($request);
    }

    public function listAccountAssignmentCreationStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentCreationStatusRequest');
    }

    /**
     * 列出账号分配删除状态
     *
     * 查询指定IAM身份中心实例下的账号分配的删除状态列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignmentDeletionStatus($request)
    {
        return $this->listAccountAssignmentDeletionStatusWithHttpInfo($request);
    }

    public function listAccountAssignmentDeletionStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentDeletionStatusRequest');
    }

    /**
     * 列出账号和权限集关联的用户或用户组
     *
     * 列出与指定账号以及指定权限集关联的用户或用户组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAssignments($request)
    {
        return $this->listAccountAssignmentsWithHttpInfo($request);
    }

    public function listAccountAssignmentsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountAssignmentsRequest');
    }

    /**
     * 列出实例
     *
     * 查询IAM身份中心的实例列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstances($request)
    {
        return $this->listInstancesWithHttpInfo($request);
    }

    public function listInstancesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListInstancesResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListInstancesRequest');
    }

    /**
     * 启用指定实例的访问控制功能
     *
     * 启用指定实例的访问控制功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceAccessControlAttributeConfiguration($request)
    {
        return $this->createInstanceAccessControlAttributeConfigurationWithHttpInfo($request);
    }

    public function createInstanceAccessControlAttributeConfigurationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateInstanceAccessControlAttributeConfigurationRequest');
    }

    /**
     * 解除指定实例的访问控制属性配置
     *
     * 禁用指定IAM身份中心实例的基于属性的访问控制（ABAC）功能，并删除已配置的所有属性映射。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceAccessControlAttributeConfiguration($request)
    {
        return $this->deleteInstanceAccessControlAttributeConfigurationWithHttpInfo($request);
    }

    public function deleteInstanceAccessControlAttributeConfigurationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteInstanceAccessControlAttributeConfigurationRequest');
    }

    /**
     * 获取指定实例的访问控制属性配置
     *
     * 返回已配置为与指定IAM身份中心实例的基于属性的访问控制（ABAC）一起使用的IAM身份中心身份源属性列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describeInstanceAccessControlAttributeConfiguration($request)
    {
        return $this->describeInstanceAccessControlAttributeConfigurationWithHttpInfo($request);
    }

    public function describeInstanceAccessControlAttributeConfigurationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribeInstanceAccessControlAttributeConfigurationRequest');
    }

    /**
     * 更新指定实例的访问控制属性配置
     *
     * 更新可与IAM身份中心实例一起使用的IAM身份中心身份源属性，以进行基于属性的访问控制（ABAC）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceAccessControlAttributeConfiguration($request)
    {
        return $this->updateInstanceAccessControlAttributeConfigurationWithHttpInfo($request);
    }

    public function updateInstanceAccessControlAttributeConfigurationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdateInstanceAccessControlAttributeConfigurationRequest');
    }

    /**
     * 添加系统身份策略
     *
     * 在指定的权限集中添加系统身份策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachManagedPolicyToPermissionSet($request)
    {
        return $this->attachManagedPolicyToPermissionSetWithHttpInfo($request);
    }

    public function attachManagedPolicyToPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\AttachManagedPolicyToPermissionSetRequest');
    }

    /**
     * 创建权限集
     *
     * 在指定的IAM身份中心实例中创建一个权限集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPermissionSet($request)
    {
        return $this->createPermissionSetWithHttpInfo($request);
    }

    public function createPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreatePermissionSetRequest');
    }

    /**
     * 删除自定义身份策略
     *
     * 删除指定权限集中的自定义身份策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCustomPolicyFromPermissionSet($request)
    {
        return $this->deleteCustomPolicyFromPermissionSetWithHttpInfo($request);
    }

    public function deleteCustomPolicyFromPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteCustomPolicyFromPermissionSetRequest');
    }

    /**
     * 删除指定权限集中的自定义策略
     *
     * 删除指定权限集中的自定义策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCustomRoleFromPermissionSet($request)
    {
        return $this->deleteCustomRoleFromPermissionSetWithHttpInfo($request);
    }

    public function deleteCustomRoleFromPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteCustomRoleFromPermissionSetRequest');
    }

    /**
     * 删除权限集
     *
     * 根据权限集ID，删除指定的权限集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePermissionSet($request)
    {
        return $this->deletePermissionSetWithHttpInfo($request);
    }

    public function deletePermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeletePermissionSetRequest');
    }

    /**
     * 查询权限集详情
     *
     * 根据权限集ID，查询指定权限集的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describePermissionSet($request)
    {
        return $this->describePermissionSetWithHttpInfo($request);
    }

    public function describePermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribePermissionSetRequest');
    }

    /**
     * 查询权限集预分配状态详情
     *
     * 根据请求ID，查询权限集预分配状态的详情信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function describePermissionSetProvisioningStatus($request)
    {
        return $this->describePermissionSetProvisioningStatusWithHttpInfo($request);
    }

    public function describePermissionSetProvisioningStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DescribePermissionSetProvisioningStatusRequest');
    }

    /**
     * 删除系统身份策略
     *
     * 删除指定权限集中的系统身份策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachManagedPolicyFromPermissionSet($request)
    {
        return $this->detachManagedPolicyFromPermissionSetWithHttpInfo($request);
    }

    public function detachManagedPolicyFromPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DetachManagedPolicyFromPermissionSetRequest');
    }

    /**
     * 查询自定义身份策略详情
     *
     * 查询指定权限集中的自定义身份策略详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getCustomPolicyForPermissionSet($request)
    {
        return $this->getCustomPolicyForPermissionSetWithHttpInfo($request);
    }

    public function getCustomPolicyForPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetCustomPolicyForPermissionSetRequest');
    }

    /**
     * 获取分配给权限集的自定义策略
     *
     * 获取分配给权限集的自定义策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getCustomRoleForPermissionSet($request)
    {
        return $this->getCustomRoleForPermissionSetWithHttpInfo($request);
    }

    public function getCustomRoleForPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\GetCustomRoleForPermissionSetRequest');
    }

    /**
     * 列出权限集关联的账号
     *
     * 查询与指定权限集关联的账号列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountsForProvisionedPermissionSet($request)
    {
        return $this->listAccountsForProvisionedPermissionSetWithHttpInfo($request);
    }

    public function listAccountsForProvisionedPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListAccountsForProvisionedPermissionSetRequest');
    }

    /**
     * 列出系统身份策略
     *
     * 获取添加到指定权限集中的系统身份策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedPoliciesInPermissionSet($request)
    {
        return $this->listManagedPoliciesInPermissionSetWithHttpInfo($request);
    }

    public function listManagedPoliciesInPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListManagedPoliciesInPermissionSetRequest');
    }

    /**
     * 列出权限集预分配状态
     *
     * 查询指定实例中的权限集预分配状态列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionSetProvisioningStatus($request)
    {
        return $this->listPermissionSetProvisioningStatusWithHttpInfo($request);
    }

    public function listPermissionSetProvisioningStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetProvisioningStatusRequest');
    }

    /**
     * 列出权限集
     *
     * 查询指定实例下的权限集列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionSets($request)
    {
        return $this->listPermissionSetsWithHttpInfo($request);
    }

    public function listPermissionSetsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetsRequest');
    }

    /**
     * 列出分配给账号的权限集
     *
     * 查询分配给指定账号的权限集列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissionSetsProvisionedToAccount($request)
    {
        return $this->listPermissionSetsProvisionedToAccountWithHttpInfo($request);
    }

    public function listPermissionSetsProvisionedToAccountWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListPermissionSetsProvisionedToAccountRequest');
    }

    /**
     * 预分配权限集
     *
     * 将指定权限集预分配给指定账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function provisionPermissionSet($request)
    {
        return $this->provisionPermissionSetWithHttpInfo($request);
    }

    public function provisionPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ProvisionPermissionSetRequest');
    }

    /**
     * 添加自定义身份策略
     *
     * 在指定的权限集中添加自定义身份策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putCustomPolicyToPermissionSet($request)
    {
        return $this->putCustomPolicyToPermissionSetWithHttpInfo($request);
    }

    public function putCustomPolicyToPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutCustomPolicyToPermissionSetRequest');
    }

    /**
     * 将自定义策略附加到权限集
     *
     * 将自定义策略附加到权限集
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putCustomRoleToPermissionSet($request)
    {
        return $this->putCustomRoleToPermissionSetWithHttpInfo($request);
    }

    public function putCustomRoleToPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\PutCustomRoleToPermissionSetRequest');
    }

    /**
     * 更新权限集
     *
     * 根据权限集ID，更新指定权限集的属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePermissionSet($request)
    {
        return $this->updatePermissionSetWithHttpInfo($request);
    }

    public function updatePermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\UpdatePermissionSetRequest');
    }

    /**
     * 为指定资源添加标签
     *
     * 给指定的资源添加一个或多个标签。当前支持为权限集添加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTagResource($request)
    {
        return $this->createTagResourceWithHttpInfo($request);
    }

    public function createTagResourceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\CreateTagResourceRequest');
    }

    /**
     * 删除指定资源的指定标签
     *
     * 从指定资源中删除指定的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTagResource($request)
    {
        return $this->deleteTagResourceWithHttpInfo($request);
    }

    public function deleteTagResourceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DeleteTagResourceRequest');
    }

    /**
     * 列出绑定到指定资源的标签
     *
     * 列出绑定到指定资源的标签。当前支持为权限集添加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagResources($request)
    {
        return $this->listTagResourcesWithHttpInfo($request);
    }

    public function listTagResourcesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListTagResourcesRequest');
    }

    /**
     * 添加系统策略
     *
     * 在指定的权限集中添加系统策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachManagedRoleToPermissionSet($request)
    {
        return $this->attachManagedRoleToPermissionSetWithHttpInfo($request);
    }

    public function attachManagedRoleToPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\AttachManagedRoleToPermissionSetRequest');
    }

    /**
     * 删除系统策略
     *
     * 删除指定权限集中的系统策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachManagedRoleFromPermissionSet($request)
    {
        return $this->detachManagedRoleFromPermissionSetWithHttpInfo($request);
    }

    public function detachManagedRoleFromPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\DetachManagedRoleFromPermissionSetRequest');
    }

    /**
     * 列出系统策略
     *
     * 获取添加到指定权限集中的系统策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedRolesInPermissionSet($request)
    {
        return $this->listManagedRolesInPermissionSetWithHttpInfo($request);
    }

    public function listManagedRolesInPermissionSetWithHttpInfo($request)
    {
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
            $headerParams[$arr['xSecurityToken']] = $localVarParams['xSecurityToken'];
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
            $requestType='\HuaweiCloud\SDK\IdentityCenter\V1\Model\ListManagedRolesInPermissionSetRequest');
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