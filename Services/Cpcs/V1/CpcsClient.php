<?php

namespace HuaweiCloud\SDK\Cpcs\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CpcsClient extends Client
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
        $client = new ClientBuilder(new CpcsClient());
        return $client;
    }


    /**
     * 创建集群模式端口
     *
     * 创建集群模式端口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addClusterPort($request)
    {
        return $this->addClusterPortWithHttpInfo($request);
    }

    public function addClusterPortWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/port';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\AddClusterPortResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\AddClusterPortRequest');
    }

    /**
     * 创建密码服务集群与应用绑定关系
     *
     * 创建密码服务集群与应用绑定关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateApps($request)
    {
        return $this->associateAppsWithHttpInfo($request);
    }

    public function associateAppsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/associate-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\AssociateAppsResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\AssociateAppsRequest');
    }

    /**
     * 密码服务集群授予应用访问密钥的访问权限
     *
     * 密码服务集群授予应用访问密钥的访问权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function authorizeAccessKeys($request)
    {
        return $this->authorizeAccessKeysWithHttpInfo($request);
    }

    public function authorizeAccessKeysWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/authorize-access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\AuthorizeAccessKeysResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\AuthorizeAccessKeysRequest');
    }

    /**
     * 停用应用的访问密钥
     *
     * 停用应用的访问密钥
     * &gt; 只有当访问密钥处于“启用”状态时，方可调用此接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDisableAccessKeys($request)
    {
        return $this->batchDisableAccessKeysWithHttpInfo($request);
    }

    public function batchDisableAccessKeysWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}/access-keys/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\BatchDisableAccessKeysResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\BatchDisableAccessKeysRequest');
    }

    /**
     * 启用应用的访问密钥
     *
     * 启用应用的访问密钥
     * &gt; 只有当访问密钥处于“停用”状态时，方可调用此接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchEnableAccessKeys($request)
    {
        return $this->batchEnableAccessKeysWithHttpInfo($request);
    }

    public function batchEnableAccessKeysWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}/access-keys/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\BatchEnableAccessKeysResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\BatchEnableAccessKeysRequest');
    }

    /**
     * 密码服务集群解除对访问密钥的授权
     *
     * 密码服务集群解除对访问密钥的授权
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelAuthorizeAccessKeys($request)
    {
        return $this->cancelAuthorizeAccessKeysWithHttpInfo($request);
    }

    public function cancelAuthorizeAccessKeysWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/de-authorize-access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\CancelAuthorizeAccessKeysResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\CancelAuthorizeAccessKeysRequest');
    }

    /**
     * 检测集群模式端口是否正常
     *
     * 检测该端口关联的监听器、后端服务器组是否正确无误。
     * &gt; 该接口调用后会根据实际情况，更新检查结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkClusterPort($request)
    {
        return $this->checkClusterPortWithHttpInfo($request);
    }

    public function checkClusterPortWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/port/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\CheckClusterPortResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\CheckClusterPortRequest');
    }

    /**
     * 创建应用
     *
     * 创建应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApp($request)
    {
        return $this->createAppWithHttpInfo($request);
    }

    public function createAppWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\CreateAppResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\CreateAppRequest');
    }

    /**
     * 创建访问密钥
     *
     * 创建访问密钥
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAppAccessKey($request)
    {
        return $this->createAppAccessKeyWithHttpInfo($request);
    }

    public function createAppAccessKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}/access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\CreateAppAccessKeyResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\CreateAppAccessKeyRequest');
    }

    /**
     * 创建密码服务集群
     *
     * 创建密码服务集群
     * &gt; 调用接口之后返回订单ID，需要到“待支付订单里面”支付成功之后才能创建密码服务集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCluster($request)
    {
        return $this->createClusterWithHttpInfo($request);
    }

    public function createClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\CreateClusterResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\CreateClusterRequest');
    }

    /**
     * 删除应用的访问密钥
     *
     * 删除应用的访问密钥
     * &gt; 只有当访问密钥处于“停用”状态时，方可调用此接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAccessKey($request)
    {
        return $this->deleteAccessKeyWithHttpInfo($request);
    }

    public function deleteAccessKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}/access-keys/{access_key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accessKeyId'] !== null) {
            $pathParams['access_key_id'] = $localVarParams['accessKeyId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteAccessKeyResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteAccessKeyRequest');
    }

    /**
     * 删除应用
     *
     * 删除应用
     * &gt; 只有当应用与任何其它服务没有绑定关系的情况下，方可进行集群删除操作该操作不可恢复，请谨慎执行
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApp($request)
    {
        return $this->deleteAppWithHttpInfo($request);
    }

    public function deleteAppWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteAppResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteAppRequest');
    }

    /**
     * 删除密码服务集群
     *
     * 删除密码服务集群，即释放密码服务集群所有服务实例以及对应的VSM集群实例，并删除集群相关信息
     * &gt; 只有当集群与任何应用都没有绑定关系的情况下，且处于“运行中”状态，且退订了集群中所有实例，方可进行集群删除操作，该操作不可恢复，请谨慎执行
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCcspCluster($request)
    {
        return $this->deleteCcspClusterWithHttpInfo($request);
    }

    public function deleteCcspClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteCcspClusterResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteCcspClusterRequest');
    }

    /**
     * 删除集群模式端口
     *
     * 删除集群模式端口。
     * &gt; 由于端口可能被租户二次修改过，并用于其他业务,所以删除会有几个不同选项，具体查看参数说明。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClusterPort($request)
    {
        return $this->deleteClusterPortWithHttpInfo($request);
    }

    public function deleteClusterPortWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/port/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteClusterPortResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\DeleteClusterPortRequest');
    }

    /**
     * 停用密码服务实例的业务功能
     *
     * 停用密码服务实例的业务功能
     * &gt; 只有当密码服务实例处于“启用”状态时，方可调用此接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableCcspInstance($request)
    {
        return $this->disableCcspInstanceWithHttpInfo($request);
    }

    public function disableCcspInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/instances/{instance_id}/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\DisableCcspInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\DisableCcspInstanceRequest');
    }

    /**
     * 解除密码服务集群与应用绑定关系
     *
     * 解除密码服务集群与应用绑定关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateApps($request)
    {
        return $this->disassociateAppsWithHttpInfo($request);
    }

    public function disassociateAppsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/disassociate-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\DisassociateAppsResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\DisassociateAppsRequest');
    }

    /**
     * 启用密码服务实例的业务功能
     *
     * 启用密码服务实例的业务功能
     * &gt; 只有当密码服务实例处于“停用”状态时，方可调用此接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableCcspInstance($request)
    {
        return $this->enableCcspInstanceWithHttpInfo($request);
    }

    public function enableCcspInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/instances/{instance_id}/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\EnableCcspInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\EnableCcspInstanceRequest');
    }

    /**
     * 查询密码服务的镜像
     *
     * 查询密码服务的镜像
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCcspTenantImages($request)
    {
        return $this->listCcspTenantImagesWithHttpInfo($request);
    }

    public function listCcspTenantImagesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ListCcspTenantImagesResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ListCcspTenantImagesRequest');
    }

    /**
     * 查询集群模式端口列表
     *
     * 列出当前集群下的所有集群模式端口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClusterPort($request)
    {
        return $this->listClusterPortWithHttpInfo($request);
    }

    public function listClusterPortWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/port';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ListClusterPortResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ListClusterPortRequest');
    }

    /**
     * 下载访问密钥
     *
     * 下载访问密钥且只能下载一次。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccessKey($request)
    {
        return $this->showAccessKeyWithHttpInfo($request);
    }

    public function showAccessKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}/access-keys/{access_key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accessKeyId'] !== null) {
            $pathParams['access_key_id'] = $localVarParams['accessKeyId'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAccessKeyResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAccessKeyRequest');
    }

    /**
     * 查询应用的访问密钥列表
     *
     * 查询应用的访问密钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppAccessKeyList($request)
    {
        return $this->showAppAccessKeyListWithHttpInfo($request);
    }

    public function showAppAccessKeyListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps/{app_id}/access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['keyName'] !== null) {
            $queryParams['key_name'] = $localVarParams['keyName'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAppAccessKeyListResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAppAccessKeyListRequest');
    }

    /**
     * 查询应用列表
     *
     * 查询应用列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAppList($request)
    {
        return $this->showAppListWithHttpInfo($request);
    }

    public function showAppListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['vpcName'] !== null) {
            $queryParams['vpc_name'] = $localVarParams['vpcName'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAppListResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAppListRequest');
    }

    /**
     * 查询密码服务集群与应用的绑定关系列表
     *
     * 查询密码服务集群与应用的绑定关系列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssociationList($request)
    {
        return $this->showAssociationListWithHttpInfo($request);
    }

    public function showAssociationListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/associations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAssociationListResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAssociationListRequest');
    }

    /**
     * 查询平台审计日志
     *
     * 查询平台审计日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAuditLog($request)
    {
        return $this->showAuditLogWithHttpInfo($request);
    }

    public function showAuditLogWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/platform/audit-log';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAuditLogResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAuditLogRequest');
    }

    /**
     * 查询可创建密码服务集群的可用区列表
     *
     * 查询可创建密码服务集群的可用区列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAvailableAz($request)
    {
        return $this->showAvailableAzWithHttpInfo($request);
    }

    public function showAvailableAzWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/az';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAvailableAzResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowAvailableAzRequest');
    }

    /**
     * 查询密码服务集群详情
     *
     * 查询密码服务集群信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCcspCluster($request)
    {
        return $this->showCcspClusterWithHttpInfo($request);
    }

    public function showCcspClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowCcspClusterResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowCcspClusterRequest');
    }

    /**
     * 查询密码服务集群列表
     *
     * 查询密码服务集群列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCcspClusterList($request)
    {
        return $this->showCcspClusterListWithHttpInfo($request);
    }

    public function showCcspClusterListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowCcspClusterListResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowCcspClusterListRequest');
    }

    /**
     * 查询密码服务实例列表
     *
     * 查询密码服务实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCcspInstanceInfo($request)
    {
        return $this->showCcspInstanceInfoWithHttpInfo($request);
    }

    public function showCcspInstanceInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['isNormal'] !== null) {
            $queryParams['is_normal'] = $localVarParams['isNormal'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowCcspInstanceInfoResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowCcspInstanceInfoRequest');
    }

    /**
     * 查询密码服务集群已授权的访问密钥列表
     *
     * 查询密码服务集群已授权的访问密钥列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterAccessKeyList($request)
    {
        return $this->showClusterAccessKeyListWithHttpInfo($request);
    }

    public function showClusterAccessKeyListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/access-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowClusterAccessKeyListResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowClusterAccessKeyListRequest');
    }

    /**
     * 获取密码服务管理界面URL
     *
     * 获取密码服务管理界面URL
     * &gt; URL存在有效期，URL失效后无法跳转管理界面，需要重新获取URL
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterUri($request)
    {
        return $this->showClusterUriWithHttpInfo($request);
    }

    public function showClusterUriWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/{cluster_id}/uri';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowClusterUriResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowClusterUriRequest');
    }

    /**
     * 获取AK详情
     *
     * 获取所监控或者统计的AK详情列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceDetailAccessKey($request)
    {
        return $this->showResourceDetailAccessKeyWithHttpInfo($request);
    }

    public function showResourceDetailAccessKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/resource/access-key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['algorithmType'] !== null) {
            $queryParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['certificateType'] !== null) {
            $queryParams['certificate_type'] = $localVarParams['certificateType'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailAccessKeyResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailAccessKeyRequest');
    }

    /**
     * 获取证书详情
     *
     * 获取所监控或者统计的证书详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceDetailCertificate($request)
    {
        return $this->showResourceDetailCertificateWithHttpInfo($request);
    }

    public function showResourceDetailCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/resource/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['algorithmType'] !== null) {
            $queryParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['certificateType'] !== null) {
            $queryParams['certificate_type'] = $localVarParams['certificateType'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNum'] !== null) {
            $queryParams['page_num'] = $localVarParams['pageNum'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailCertificateRequest');
    }

    /**
     * 查询租户的资源分布信息
     *
     * 查询租户的资源分布信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceInfo($request)
    {
        return $this->showResourceInfoWithHttpInfo($request);
    }

    public function showResourceInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/resource-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceInfoResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceInfoRequest');
    }

    /**
     * 获取证书分布统计信息
     *
     * 获取CPCS中证书分布统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticCertificate($request)
    {
        return $this->showStatisticCertificateWithHttpInfo($request);
    }

    public function showStatisticCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/certificate/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['algorithm'] !== null) {
            $queryParams['algorithm'] = $localVarParams['algorithm'];
        }
        if ($localVarParams['algorithmType'] !== null) {
            $queryParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['certificateType'] !== null) {
            $queryParams['certificate_type'] = $localVarParams['certificateType'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticCertificateRequest');
    }

    /**
     * 获取接口调用统计信息
     *
     * 获取CPCS中接口调用统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticInterface($request)
    {
        return $this->showStatisticInterfaceWithHttpInfo($request);
    }

    public function showStatisticInterfaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/interface/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['algorithm'] !== null) {
            $queryParams['algorithm'] = $localVarParams['algorithm'];
        }
        if ($localVarParams['algorithmType'] !== null) {
            $queryParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['certificateType'] !== null) {
            $queryParams['certificate_type'] = $localVarParams['certificateType'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticInterfaceResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticInterfaceRequest');
    }

    /**
     * 获取资源总量统计信息
     *
     * 获取CPCS中\\资源总量统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticResource($request)
    {
        return $this->showStatisticResourceWithHttpInfo($request);
    }

    public function showStatisticResourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/resource/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['algorithm'] !== null) {
            $queryParams['algorithm'] = $localVarParams['algorithm'];
        }
        if ($localVarParams['algorithmType'] !== null) {
            $queryParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['certificateType'] !== null) {
            $queryParams['certificate_type'] = $localVarParams['certificateType'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticResourceResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticResourceRequest');
    }

    /**
     * 获取密钥分布统计信息
     *
     * 获取CPCS中密钥分布统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatisticSecretKey($request)
    {
        return $this->showStatisticSecretKeyWithHttpInfo($request);
    }

    public function showStatisticSecretKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/secret-key/statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['algorithm'] !== null) {
            $queryParams['algorithm'] = $localVarParams['algorithm'];
        }
        if ($localVarParams['algorithmType'] !== null) {
            $queryParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['certificateType'] !== null) {
            $queryParams['certificate_type'] = $localVarParams['certificateType'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticSecretKeyResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatisticSecretKeyRequest');
    }

    /**
     * 获取应用状态监控
     *
     * CPCS服务创建的应用状态监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatusApp($request)
    {
        return $this->showStatusAppWithHttpInfo($request);
    }

    public function showStatusAppWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/app/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusAppResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusAppRequest');
    }

    /**
     * 获取集群监控信息
     *
     * CPCS服务创建的集群的状态监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatusCluster($request)
    {
        return $this->showStatusClusterWithHttpInfo($request);
    }

    public function showStatusClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/cluster/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusClusterResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusClusterRequest');
    }

    /**
     * 获取实例监控信息
     *
     * CPCS服务创建的密码服务实例的状态监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatusInstance($request)
    {
        return $this->showStatusInstanceWithHttpInfo($request);
    }

    public function showStatusInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/instance/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceRequest');
    }

    /**
     * 获取服务监控信息
     *
     * CPCS服务的状态监控
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStatusService($request)
    {
        return $this->showStatusServiceWithHttpInfo($request);
    }

    public function showStatusServiceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/service/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['appId'] !== null) {
            $queryParams['app_id'] = $localVarParams['appId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusServiceResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusServiceRequest');
    }

    /**
     * 密码资源指标监控
     *
     * 获取密码服务实例与虚拟密码机实例的指标（cpu使用率，内存使用率等指标）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVmMonitor($request)
    {
        return $this->showVmMonitorWithHttpInfo($request);
    }

    public function showVmMonitorWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/vm-monitor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['metricName'] !== null) {
            $queryParams['metric_name'] = $localVarParams['metricName'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['vsmId'] !== null) {
            $queryParams['vsm_id'] = $localVarParams['vsmId'];
        }
        if ($localVarParams['from'] !== null) {
            $queryParams['from'] = $localVarParams['from'];
        }
        if ($localVarParams['to'] !== null) {
            $queryParams['to'] = $localVarParams['to'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowVmMonitorResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\ShowVmMonitorRequest');
    }

    /**
     * AK/SK 换取Cpcs token
     *
     * 使用aksk换取cpcs token
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchCpcsToken($request)
    {
        return $this->switchCpcsTokenWithHttpInfo($request);
    }

    public function switchCpcsTokenWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dew/cpcs/token/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchCpcsTokenResponse',
            $requestType='\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchCpcsTokenRequest');
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