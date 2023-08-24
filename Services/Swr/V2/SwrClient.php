<?php

namespace HuaweiCloud\SDK\Swr\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SwrClient extends Client
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
        return new ClientBuilder(new SwrClient());
    }


    /**
     * 创建镜像自动同步任务
     *
     * 创建镜像自动同步任务，帮助您把最新推送的镜像自动同步到其他区域镜像仓库内。 镜像自动同步帮助您把最新推送的镜像自动同步到其他区域镜像仓库内，后期镜像有更新时，目标仓库的镜像也会自动更新，但已有的镜像不会自动同步。已有镜像的同步需要手动操作，详情请参见手动同步镜像。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createImageSyncRepo($request)
    {
        return $this->createImageSyncRepoWithHttpInfo($request);
    }

    public function createImageSyncRepoWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/sync_repo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateImageSyncRepoResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateImageSyncRepoRequest');
    }

    /**
     * 手动同步镜像
     *
     * 对于镜像仓库已有的镜像，如果想在其他区域使用，需要手动触发镜像同步。 判断是否同步成功的方法如下：响应状态码为200，无报错信息，表示同步成功。通过SWR管理控制台或调用查询镜像仓库概要信息接口，在目标区域的目标组织下，若存在所同步的镜像版本表示同步成功。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createManualImageSyncRepo($request)
    {
        return $this->createManualImageSyncRepoWithHttpInfo($request);
    }

    public function createManualImageSyncRepoWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/sync_images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateManualImageSyncRepoResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateManualImageSyncRepoRequest');
    }

    /**
     * 创建组织
     *
     * 创建组织
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNamespace($request)
    {
        return $this->createNamespaceWithHttpInfo($request);
    }

    public function createNamespaceWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateNamespaceResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateNamespaceRequest');
    }

    /**
     * 创建组织权限
     *
     * 创建组织权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNamespaceAuth($request)
    {
        return $this->createNamespaceAuthWithHttpInfo($request);
    }

    public function createNamespaceAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateNamespaceAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateNamespaceAuthRequest');
    }

    /**
     * 在组织下创建镜像仓库
     *
     * 在组织下创建镜像仓库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepo($request)
    {
        return $this->createRepoWithHttpInfo($request);
    }

    public function createRepoWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoRequest');
    }

    /**
     * 创建共享帐号
     *
     * 创建共享帐号。镜像上传后，您可以共享私有镜像给其他帐号，并授予下载该镜像的权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepoDomains($request)
    {
        return $this->createRepoDomainsWithHttpInfo($request);
    }

    public function createRepoDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repositories/{repository}/access-domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoDomainsRequest');
    }

    /**
     * 创建镜像老化规则
     *
     * 创建镜像老化规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRetention($request)
    {
        return $this->createRetentionWithHttpInfo($request);
    }

    public function createRetentionWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/retentions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRetentionResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRetentionRequest');
    }

    /**
     * 生成临时登录指令
     *
     * 调用该接口，通过获取响应消息头的X-Swr-Dockerlogin的值及响应消息体的host值，可生成临时登录指令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecret($request)
    {
        return $this->createSecretWithHttpInfo($request);
    }

    public function createSecretWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/utils/secret';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectname'] !== null) {
            $queryParams['projectname'] = $localVarParams['projectname'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateSecretResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateSecretRequest');
    }

    /**
     * 创建触发器
     *
     * 创建触发器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrigger($request)
    {
        return $this->createTriggerWithHttpInfo($request);
    }

    public function createTriggerWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/triggers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateTriggerResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateTriggerRequest');
    }

    /**
     * 创建镜像权限
     *
     * 创建镜像权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createUserRepositoryAuth($request)
    {
        return $this->createUserRepositoryAuthWithHttpInfo($request);
    }

    public function createUserRepositoryAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateUserRepositoryAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateUserRepositoryAuthRequest');
    }

    /**
     * 删除镜像自动同步任务
     *
     * 根据目标区域、目标组织删除指定的镜像自动同步任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteImageSyncRepo($request)
    {
        return $this->deleteImageSyncRepoWithHttpInfo($request);
    }

    public function deleteImageSyncRepoWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/sync_repo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteImageSyncRepoResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteImageSyncRepoRequest');
    }

    /**
     * 删除组织权限
     *
     * 删除组织权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNamespaceAuth($request)
    {
        return $this->deleteNamespaceAuthWithHttpInfo($request);
    }

    public function deleteNamespaceAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteNamespaceAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteNamespaceAuthRequest');
    }

    /**
     * 删除组织
     *
     * 删除组织
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNamespaces($request)
    {
        return $this->deleteNamespacesWithHttpInfo($request);
    }

    public function deleteNamespacesWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteNamespacesResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteNamespacesRequest');
    }

    /**
     * 删除组织下的镜像仓库
     *
     * 删除组织下的镜像仓库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepo($request)
    {
        return $this->deleteRepoWithHttpInfo($request);
    }

    public function deleteRepoWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoRequest');
    }

    /**
     * 删除共享帐号
     *
     * 删除共享帐号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepoDomains($request)
    {
        return $this->deleteRepoDomainsWithHttpInfo($request);
    }

    public function deleteRepoDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repositories/{repository}/access-domains/{access_domain}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['accessDomain'] !== null) {
            $pathParams['access_domain'] = $localVarParams['accessDomain'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoDomainsRequest');
    }

    /**
     * 删除指定tag的镜像
     *
     * 删除镜像仓库中指定tag的镜像
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRepoTag($request)
    {
        return $this->deleteRepoTagWithHttpInfo($request);
    }

    public function deleteRepoTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/tags/{tag}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['tag'] !== null) {
            $pathParams['tag'] = $localVarParams['tag'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoTagResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoTagRequest');
    }

    /**
     * 删除镜像老化规则
     *
     * 删除镜像老化规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRetention($request)
    {
        return $this->deleteRetentionWithHttpInfo($request);
    }

    public function deleteRetentionWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/retentions/{retention_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['retentionId'] !== null) {
            $pathParams['retention_id'] = $localVarParams['retentionId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRetentionResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRetentionRequest');
    }

    /**
     * 删除触发器
     *
     * 删除触发器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrigger($request)
    {
        return $this->deleteTriggerWithHttpInfo($request);
    }

    public function deleteTriggerWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/triggers/{trigger}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['trigger'] !== null) {
            $pathParams['trigger'] = $localVarParams['trigger'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteTriggerResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteTriggerRequest');
    }

    /**
     * 删除镜像权限
     *
     * 删除镜像权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteUserRepositoryAuth($request)
    {
        return $this->deleteUserRepositoryAuthWithHttpInfo($request);
    }

    public function deleteUserRepositoryAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteUserRepositoryAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteUserRepositoryAuthRequest');
    }

    /**
     * 获取镜像自动同步任务列表
     *
     * 获取为当前镜像仓库所创建的所有自动同步任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageAutoSyncReposDetails($request)
    {
        return $this->listImageAutoSyncReposDetailsWithHttpInfo($request);
    }

    public function listImageAutoSyncReposDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/sync_repo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListImageAutoSyncReposDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListImageAutoSyncReposDetailsRequest');
    }

    /**
     * 查询组织列表
     *
     * 查询组织列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNamespaces($request)
    {
        return $this->listNamespacesWithHttpInfo($request);
    }

    public function listNamespacesWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespacesResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespacesRequest');
    }

    /**
     * 获取配额信息
     *
     * 获取配额信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotas($request)
    {
        return $this->listQuotasWithHttpInfo($request);
    }

    public function listQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/projects/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListQuotasRequest');
    }

    /**
     * 获取共享帐号列表
     *
     * 获取共享帐号列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepoDomains($request)
    {
        return $this->listRepoDomainsWithHttpInfo($request);
    }

    public function listRepoDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repositories/{repository}/access-domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepoDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepoDomainsRequest');
    }

    /**
     * 查询镜像仓库列表
     *
     * 查询镜像仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listReposDetails($request)
    {
        return $this->listReposDetailsWithHttpInfo($request);
    }

    public function listReposDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/repos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListReposDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListReposDetailsRequest');
    }

    /**
     * 查询镜像tag列表
     *
     * 查询镜像tag列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryTags($request)
    {
        return $this->listRepositoryTagsWithHttpInfo($request);
    }

    public function listRepositoryTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepositoryTagsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepositoryTagsRequest');
    }

    /**
     * 获取镜像老化记录
     *
     * 获取镜像老化记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRetentionHistories($request)
    {
        return $this->listRetentionHistoriesWithHttpInfo($request);
    }

    public function listRetentionHistoriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/retentions/histories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListRetentionHistoriesResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRetentionHistoriesRequest');
    }

    /**
     * 获取镜像老化规则列表
     *
     * 获取镜像老化规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRetentions($request)
    {
        return $this->listRetentionsWithHttpInfo($request);
    }

    public function listRetentionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/retentions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListRetentionsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRetentionsRequest');
    }

    /**
     * 查询共享镜像列表
     *
     * 查询共享镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSharedReposDetails($request)
    {
        return $this->listSharedReposDetailsWithHttpInfo($request);
    }

    public function listSharedReposDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/shared-repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['center'] !== null) {
            $queryParams['center'] = $localVarParams['center'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListSharedReposDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListSharedReposDetailsRequest');
    }

    /**
     * 获取镜像仓库下的触发器列表
     *
     * 获取镜像仓库下的触发器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTriggersDetails($request)
    {
        return $this->listTriggersDetailsWithHttpInfo($request);
    }

    public function listTriggersDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/triggers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListTriggersDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListTriggersDetailsRequest');
    }

    /**
     * 判断共享帐号是否存在
     *
     * 判断共享租户是否存在
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccessDomain($request)
    {
        return $this->showAccessDomainWithHttpInfo($request);
    }

    public function showAccessDomainWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repositories/{repository}/access-domains/{access_domain}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['accessDomain'] !== null) {
            $pathParams['access_domain'] = $localVarParams['accessDomain'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowAccessDomainResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowAccessDomainRequest');
    }

    /**
     * 获取组织详情
     *
     * 获取组织详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNamespace($request)
    {
        return $this->showNamespaceWithHttpInfo($request);
    }

    public function showNamespaceWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowNamespaceResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowNamespaceRequest');
    }

    /**
     * 查询组织权限
     *
     * 查询组织权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNamespaceAuth($request)
    {
        return $this->showNamespaceAuthWithHttpInfo($request);
    }

    public function showNamespaceAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowNamespaceAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowNamespaceAuthRequest');
    }

    /**
     * 查询镜像仓库概要信息
     *
     * 查询镜像仓库概要信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepository($request)
    {
        return $this->showRepositoryWithHttpInfo($request);
    }

    public function showRepositoryWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRepositoryRequest');
    }

    /**
     * 获取镜像老化规则记录
     *
     * 获取镜像老化规则记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRetention($request)
    {
        return $this->showRetentionWithHttpInfo($request);
    }

    public function showRetentionWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/retentions/{retention_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['retentionId'] !== null) {
            $pathParams['retention_id'] = $localVarParams['retentionId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRetentionResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRetentionRequest');
    }

    /**
     * 获取镜像自动同步任务信息
     *
     * 创建镜像自动同步任务后，可以通过此接口查询该任务的状态，以判断是否同步成功。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSyncJob($request)
    {
        return $this->showSyncJobWithHttpInfo($request);
    }

    public function showSyncJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/sync_job';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['filter'] !== null) {
            $queryParams['filter'] = $localVarParams['filter'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowSyncJobResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowSyncJobRequest');
    }

    /**
     * 获取触发器详情
     *
     * 获取触发器详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrigger($request)
    {
        return $this->showTriggerWithHttpInfo($request);
    }

    public function showTriggerWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/triggers/{trigger}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['trigger'] !== null) {
            $pathParams['trigger'] = $localVarParams['trigger'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowTriggerResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowTriggerRequest');
    }

    /**
     * 查询镜像权限
     *
     * 查询镜像权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserRepositoryAuth($request)
    {
        return $this->showUserRepositoryAuthWithHttpInfo($request);
    }

    public function showUserRepositoryAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowUserRepositoryAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowUserRepositoryAuthRequest');
    }

    /**
     * 更新组织权限
     *
     * 更新组织权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNamespaceAuth($request)
    {
        return $this->updateNamespaceAuthWithHttpInfo($request);
    }

    public function updateNamespaceAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateNamespaceAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateNamespaceAuthRequest');
    }

    /**
     * 更新镜像仓库的概要信息
     *
     * 更新租户组织下的镜像概要信息，包括镜像类型、是否公有、描述信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepo($request)
    {
        return $this->updateRepoWithHttpInfo($request);
    }

    public function updateRepoWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRepoResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRepoRequest');
    }

    /**
     * 更新共享帐号
     *
     * 更新共享帐号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRepoDomains($request)
    {
        return $this->updateRepoDomainsWithHttpInfo($request);
    }

    public function updateRepoDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repositories/{repository}/access-domains/{access_domain}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['accessDomain'] !== null) {
            $pathParams['access_domain'] = $localVarParams['accessDomain'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRepoDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRepoDomainsRequest');
    }

    /**
     * 修改镜像老化规则
     *
     * 修改镜像老化规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRetention($request)
    {
        return $this->updateRetentionWithHttpInfo($request);
    }

    public function updateRetentionWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/retentions/{retention_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['retentionId'] !== null) {
            $pathParams['retention_id'] = $localVarParams['retentionId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRetentionResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRetentionRequest');
    }

    /**
     * 更新触发器配置
     *
     * 更新触发器配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTrigger($request)
    {
        return $this->updateTriggerWithHttpInfo($request);
    }

    public function updateTriggerWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/triggers/{trigger}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
        }
        if ($localVarParams['trigger'] !== null) {
            $pathParams['trigger'] = $localVarParams['trigger'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateTriggerResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateTriggerRequest');
    }

    /**
     * 更新镜像权限
     *
     * 更新镜像权限
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateUserRepositoryAuth($request)
    {
        return $this->updateUserRepositoryAuthWithHttpInfo($request);
    }

    public function updateUserRepositoryAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/manage/namespaces/{namespace}/repos/{repository}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['repository'] !== null) {
            $pathParams['repository'] = $localVarParams['repository'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateUserRepositoryAuthResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateUserRepositoryAuthRequest');
    }

    /**
     * 查询所有API版本信息
     *
     * 查询所有API版本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersions($request)
    {
        return $this->listApiVersionsWithHttpInfo($request);
    }

    public function listApiVersionsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListApiVersionsResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListApiVersionsRequest');
    }

    /**
     * 查询指定API版本信息
     *
     * 查询指定API版本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiVersion($request)
    {
        return $this->showApiVersionWithHttpInfo($request);
    }

    public function showApiVersionWithHttpInfo($request)
    {
        $resourcePath = '/{api_version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['apiVersion'] !== null) {
            $pathParams['api_version'] = $localVarParams['apiVersion'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowApiVersionResponse',
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowApiVersionRequest');
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