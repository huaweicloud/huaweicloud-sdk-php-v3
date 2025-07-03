<?php

namespace HuaweiCloud\SDK\Swr\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SwrAsyncClient extends Client
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
        $client = new ClientBuilder(new SwrAsyncClient());
        return $client;
    }

    /**
     * 生成增强型登录指令(新)
     *
     * 调用该接口，通过获取响应消息头的X-Swr-Dockerlogin的值及响应消息体的host值，可生成增强型登录指令,注：此接口只支持IAM新平面的调用方式。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAuthorizationTokenAsync($request)
    {
        return $this->createAuthorizationTokenAsyncWithHttpInfo($request);
    }
    
    public function createAuthorizationTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/manage/utils/authorizationtoken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateAuthorizationTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateAuthorizationTokenRequest',
            $asyncRequest = true);
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
    public function createImageSyncRepoAsync($request)
    {
        return $this->createImageSyncRepoAsyncWithHttpInfo($request);
    }
    
    public function createImageSyncRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateImageSyncRepoRequest',
            $asyncRequest = true);
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
    public function createManualImageSyncRepoAsync($request)
    {
        return $this->createManualImageSyncRepoAsyncWithHttpInfo($request);
    }
    
    public function createManualImageSyncRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateManualImageSyncRepoRequest',
            $asyncRequest = true);
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
    public function createNamespaceAsync($request)
    {
        return $this->createNamespaceAsyncWithHttpInfo($request);
    }
    
    public function createNamespaceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateNamespaceRequest',
            $asyncRequest = true);
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
    public function createNamespaceAuthAsync($request)
    {
        return $this->createNamespaceAuthAsyncWithHttpInfo($request);
    }
    
    public function createNamespaceAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateNamespaceAuthRequest',
            $asyncRequest = true);
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
    public function createRepoAsync($request)
    {
        return $this->createRepoAsyncWithHttpInfo($request);
    }
    
    public function createRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoRequest',
            $asyncRequest = true);
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
    public function createRepoDomainsAsync($request)
    {
        return $this->createRepoDomainsAsyncWithHttpInfo($request);
    }
    
    public function createRepoDomainsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoDomainsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建镜像tag
     *
     * 创建镜像tag
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRepoTagAsync($request)
    {
        return $this->createRepoTagAsyncWithHttpInfo($request);
    }
    
    public function createRepoTagAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRepoTagRequest',
            $asyncRequest = true);
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
    public function createRetentionAsync($request)
    {
        return $this->createRetentionAsyncWithHttpInfo($request);
    }
    
    public function createRetentionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateRetentionRequest',
            $asyncRequest = true);
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
    public function createSecretAsync($request)
    {
        return $this->createSecretAsyncWithHttpInfo($request);
    }
    
    public function createSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateSecretRequest',
            $asyncRequest = true);
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
    public function createTriggerAsync($request)
    {
        return $this->createTriggerAsyncWithHttpInfo($request);
    }
    
    public function createTriggerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateTriggerRequest',
            $asyncRequest = true);
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
    public function createUserRepositoryAuthAsync($request)
    {
        return $this->createUserRepositoryAuthAsyncWithHttpInfo($request);
    }
    
    public function createUserRepositoryAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateUserRepositoryAuthRequest',
            $asyncRequest = true);
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
    public function deleteImageSyncRepoAsync($request)
    {
        return $this->deleteImageSyncRepoAsyncWithHttpInfo($request);
    }
    
    public function deleteImageSyncRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteImageSyncRepoRequest',
            $asyncRequest = true);
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
    public function deleteNamespaceAuthAsync($request)
    {
        return $this->deleteNamespaceAuthAsyncWithHttpInfo($request);
    }
    
    public function deleteNamespaceAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteNamespaceAuthRequest',
            $asyncRequest = true);
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
    public function deleteNamespacesAsync($request)
    {
        return $this->deleteNamespacesAsyncWithHttpInfo($request);
    }
    
    public function deleteNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteNamespacesRequest',
            $asyncRequest = true);
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
    public function deleteRepoAsync($request)
    {
        return $this->deleteRepoAsyncWithHttpInfo($request);
    }
    
    public function deleteRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoRequest',
            $asyncRequest = true);
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
    public function deleteRepoDomainsAsync($request)
    {
        return $this->deleteRepoDomainsAsyncWithHttpInfo($request);
    }
    
    public function deleteRepoDomainsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoDomainsRequest',
            $asyncRequest = true);
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
    public function deleteRepoTagAsync($request)
    {
        return $this->deleteRepoTagAsyncWithHttpInfo($request);
    }
    
    public function deleteRepoTagAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRepoTagRequest',
            $asyncRequest = true);
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
    public function deleteRetentionAsync($request)
    {
        return $this->deleteRetentionAsyncWithHttpInfo($request);
    }
    
    public function deleteRetentionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteRetentionRequest',
            $asyncRequest = true);
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
    public function deleteTriggerAsync($request)
    {
        return $this->deleteTriggerAsyncWithHttpInfo($request);
    }
    
    public function deleteTriggerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteTriggerRequest',
            $asyncRequest = true);
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
    public function deleteUserRepositoryAuthAsync($request)
    {
        return $this->deleteUserRepositoryAuthAsyncWithHttpInfo($request);
    }
    
    public function deleteUserRepositoryAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteUserRepositoryAuthRequest',
            $asyncRequest = true);
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
    public function listImageAutoSyncReposDetailsAsync($request)
    {
        return $this->listImageAutoSyncReposDetailsAsyncWithHttpInfo($request);
    }
    
    public function listImageAutoSyncReposDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListImageAutoSyncReposDetailsRequest',
            $asyncRequest = true);
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
    public function listNamespacesAsync($request)
    {
        return $this->listNamespacesAsyncWithHttpInfo($request);
    }
    
    public function listNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespacesRequest',
            $asyncRequest = true);
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
    public function listQuotasAsync($request)
    {
        return $this->listQuotasAsyncWithHttpInfo($request);
    }
    
    public function listQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像仓库列表详情
     *
     * 查询镜像仓库列表详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepoDetailsAsync($request)
    {
        return $this->listRepoDetailsAsyncWithHttpInfo($request);
    }
    
    public function listRepoDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/manage/repos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['isPublic'] !== null) {
            $queryParams['is_public'] = $localVarParams['isPublic'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepoDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepoDetailsRequest',
            $asyncRequest = true);
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
    public function listRepoDomainsAsync($request)
    {
        return $this->listRepoDomainsAsyncWithHttpInfo($request);
    }
    
    public function listRepoDomainsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepoDomainsRequest',
            $asyncRequest = true);
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
    public function listReposDetailsAsync($request)
    {
        return $this->listReposDetailsAsyncWithHttpInfo($request);
    }
    
    public function listReposDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListReposDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像tag列表详情
     *
     * 查询镜像tag列表详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRepositoryTagAsync($request)
    {
        return $this->listRepositoryTagAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/manage/namespaces/{namespace}/repos/{repository}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['withManifest'] !== null) {
            $queryParams['with_manifest'] = $localVarParams['withManifest'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepositoryTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepositoryTagRequest',
            $asyncRequest = true);
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
    public function listRepositoryTagsAsync($request)
    {
        return $this->listRepositoryTagsAsyncWithHttpInfo($request);
    }
    
    public function listRepositoryTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRepositoryTagsRequest',
            $asyncRequest = true);
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
    public function listRetentionHistoriesAsync($request)
    {
        return $this->listRetentionHistoriesAsyncWithHttpInfo($request);
    }
    
    public function listRetentionHistoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRetentionHistoriesRequest',
            $asyncRequest = true);
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
    public function listRetentionsAsync($request)
    {
        return $this->listRetentionsAsyncWithHttpInfo($request);
    }
    
    public function listRetentionsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListRetentionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询共享镜像列表详情
     *
     * 查询共享镜像列表详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSharedRepoDetailsAsync($request)
    {
        return $this->listSharedRepoDetailsAsyncWithHttpInfo($request);
    }
    
    public function listSharedRepoDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/manage/shared-repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sharedBy'] !== null) {
            $queryParams['shared_by'] = $localVarParams['sharedBy'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListSharedRepoDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListSharedRepoDetailsRequest',
            $asyncRequest = true);
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
    public function listSharedReposDetailsAsync($request)
    {
        return $this->listSharedReposDetailsAsyncWithHttpInfo($request);
    }
    
    public function listSharedReposDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListSharedReposDetailsRequest',
            $asyncRequest = true);
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
    public function listTriggersDetailsAsync($request)
    {
        return $this->listTriggersDetailsAsyncWithHttpInfo($request);
    }
    
    public function listTriggersDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListTriggersDetailsRequest',
            $asyncRequest = true);
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
    public function showAccessDomainAsync($request)
    {
        return $this->showAccessDomainAsyncWithHttpInfo($request);
    }
    
    public function showAccessDomainAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowAccessDomainRequest',
            $asyncRequest = true);
    }

    /**
     * 获取租户总览信息
     *
     * 获取租户总览信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainOverviewAsync($request)
    {
        return $this->showDomainOverviewAsyncWithHttpInfo($request);
    }
    
    public function showDomainOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/manage/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowDomainOverviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowDomainOverviewRequest',
            $asyncRequest = true);
    }

    /**
     * 获取租户资源统计信息
     *
     * 获取租户资源统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainResourceReportsAsync($request)
    {
        return $this->showDomainResourceReportsAsyncWithHttpInfo($request);
    }
    
    public function showDomainResourceReportsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/manage/reports/{resource_type}/{frequency}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['frequency'] !== null) {
            $pathParams['frequency'] = $localVarParams['frequency'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowDomainResourceReportsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowDomainResourceReportsRequest',
            $asyncRequest = true);
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
    public function showNamespaceAsync($request)
    {
        return $this->showNamespaceAsyncWithHttpInfo($request);
    }
    
    public function showNamespaceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowNamespaceRequest',
            $asyncRequest = true);
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
    public function showNamespaceAuthAsync($request)
    {
        return $this->showNamespaceAuthAsyncWithHttpInfo($request);
    }
    
    public function showNamespaceAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowNamespaceAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定tag的镜像详情
     *
     * 查询镜像仓库中指定tag的镜像
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRepoTagAsync($request)
    {
        return $this->showRepoTagAsyncWithHttpInfo($request);
    }
    
    public function showRepoTagAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRepoTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRepoTagRequest',
            $asyncRequest = true);
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
    public function showRepositoryAsync($request)
    {
        return $this->showRepositoryAsyncWithHttpInfo($request);
    }
    
    public function showRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRepositoryRequest',
            $asyncRequest = true);
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
    public function showRetentionAsync($request)
    {
        return $this->showRetentionAsyncWithHttpInfo($request);
    }
    
    public function showRetentionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowRetentionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询服务特性开关信息
     *
     * 查询服务特性开关信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showShareFeatureGatesAsync($request)
    {
        return $this->showShareFeatureGatesAsyncWithHttpInfo($request);
    }
    
    public function showShareFeatureGatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/manage/projects/{project_id}/feature-gates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowShareFeatureGatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowShareFeatureGatesRequest',
            $asyncRequest = true);
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
    public function showSyncJobAsync($request)
    {
        return $this->showSyncJobAsyncWithHttpInfo($request);
    }
    
    public function showSyncJobAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowSyncJobRequest',
            $asyncRequest = true);
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
    public function showTriggerAsync($request)
    {
        return $this->showTriggerAsyncWithHttpInfo($request);
    }
    
    public function showTriggerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowTriggerRequest',
            $asyncRequest = true);
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
    public function showUserRepositoryAuthAsync($request)
    {
        return $this->showUserRepositoryAuthAsyncWithHttpInfo($request);
    }
    
    public function showUserRepositoryAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowUserRepositoryAuthRequest',
            $asyncRequest = true);
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
    public function updateNamespaceAuthAsync($request)
    {
        return $this->updateNamespaceAuthAsyncWithHttpInfo($request);
    }
    
    public function updateNamespaceAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateNamespaceAuthRequest',
            $asyncRequest = true);
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
    public function updateRepoAsync($request)
    {
        return $this->updateRepoAsyncWithHttpInfo($request);
    }
    
    public function updateRepoAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRepoRequest',
            $asyncRequest = true);
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
    public function updateRepoDomainsAsync($request)
    {
        return $this->updateRepoDomainsAsyncWithHttpInfo($request);
    }
    
    public function updateRepoDomainsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRepoDomainsRequest',
            $asyncRequest = true);
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
    public function updateRetentionAsync($request)
    {
        return $this->updateRetentionAsyncWithHttpInfo($request);
    }
    
    public function updateRetentionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateRetentionRequest',
            $asyncRequest = true);
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
    public function updateTriggerAsync($request)
    {
        return $this->updateTriggerAsyncWithHttpInfo($request);
    }
    
    public function updateTriggerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateTriggerRequest',
            $asyncRequest = true);
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
    public function updateUserRepositoryAuthAsync($request)
    {
        return $this->updateUserRepositoryAuthAsyncWithHttpInfo($request);
    }
    
    public function updateUserRepositoryAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateUserRepositoryAuthRequest',
            $asyncRequest = true);
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
    public function listApiVersionsAsync($request)
    {
        return $this->listApiVersionsAsyncWithHttpInfo($request);
    }
    
    public function listApiVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListApiVersionsRequest',
            $asyncRequest = true);
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
    public function showApiVersionAsync($request)
    {
        return $this->showApiVersionAsyncWithHttpInfo($request);
    }
    
    public function showApiVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowApiVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 增加域名
     *
     * 增加域名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDomainNameAsync($request)
    {
        return $this->addDomainNameAsyncWithHttpInfo($request);
    }
    
    public function addDomainNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/domainname';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\AddDomainNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\AddDomainNameRequest',
            $asyncRequest = true);
    }

    /**
     * 创建不可变Tag策略
     *
     * 创建不可变Tag策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createImmutableRuleAsync($request)
    {
        return $this->createImmutableRuleAsyncWithHttpInfo($request);
    }
    
    public function createImmutableRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/immutabletagrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateImmutableRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateImmutableRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建实例
     *
     * 创建企业仓库实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceAsync($request)
    {
        return $this->createInstanceAsyncWithHttpInfo($request);
    }
    
    public function createInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 开启或关闭公网访问
     *
     * 开启或关闭公网访问
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceEndpointPolicyAsync($request)
    {
        return $this->createInstanceEndpointPolicyAsyncWithHttpInfo($request);
    }
    
    public function createInstanceEndpointPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/endpoint-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceEndpointPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceEndpointPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 新增内网访问
     *
     * 新增内网访问
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceInternalEndpointAsync($request)
    {
        return $this->createInstanceInternalEndpointAsyncWithHttpInfo($request);
    }
    
    public function createInstanceInternalEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/internal-endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceInternalEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceInternalEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 创建长期访问凭证
     *
     * 创建长期访问凭证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceLtCredentialAsync($request)
    {
        return $this->createInstanceLtCredentialAsyncWithHttpInfo($request);
    }
    
    public function createInstanceLtCredentialAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/long-term-credential';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceLtCredentialResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceLtCredentialRequest',
            $asyncRequest = true);
    }

    /**
     * 创建命名空间
     *
     * 创建命名空间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceNamespaceAsync($request)
    {
        return $this->createInstanceNamespaceAsyncWithHttpInfo($request);
    }
    
    public function createInstanceNamespaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceNamespaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceNamespaceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建镜像同步的目标仓库
     *
     * 创建镜像同步的目标仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceRegistryAsync($request)
    {
        return $this->createInstanceRegistryAsyncWithHttpInfo($request);
    }
    
    public function createInstanceRegistryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/registries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRegistryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRegistryRequest',
            $asyncRequest = true);
    }

    /**
     * 创建镜像同步策略
     *
     * 创建镜像同步策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceReplicationPolicyAsync($request)
    {
        return $this->createInstanceReplicationPolicyAsyncWithHttpInfo($request);
    }
    
    public function createInstanceReplicationPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceReplicationPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceReplicationPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加资源标签
     *
     * 批量添加资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceResourceTagsAsync($request)
    {
        return $this->createInstanceResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function createInstanceResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建老化策略
     *
     * 创建老化策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceRetentionPolicyAsync($request)
    {
        return $this->createInstanceRetentionPolicyAsyncWithHttpInfo($request);
    }
    
    public function createInstanceRetentionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRetentionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRetentionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建签名策略
     *
     * 创建签名策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceSignPolicyAsync($request)
    {
        return $this->createInstanceSignPolicyAsyncWithHttpInfo($request);
    }
    
    public function createInstanceSignPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceSignPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceSignPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取临时访问凭证
     *
     * 获取临时访问凭证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceTempCredentialAsync($request)
    {
        return $this->createInstanceTempCredentialAsyncWithHttpInfo($request);
    }
    
    public function createInstanceTempCredentialAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/temp-credential';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceTempCredentialResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceTempCredentialRequest',
            $asyncRequest = true);
    }

    /**
     * 创建触发器策略
     *
     * 创建触发器策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceWebhookAsync($request)
    {
        return $this->createInstanceWebhookAsyncWithHttpInfo($request);
    }
    
    public function createInstanceWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/webhook/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加子资源标签
     *
     * 批量添加子资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubResourceTagsAsync($request)
    {
        return $this->createSubResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function createSubResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/{sub_resource_type}/{sub_resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['subResourceType'] !== null) {
            $pathParams['sub_resource_type'] = $localVarParams['subResourceType'];
        }
        if ($localVarParams['subResourceId'] !== null) {
            $pathParams['sub_resource_id'] = $localVarParams['subResourceId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\CreateSubResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\CreateSubResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除域名
     *
     * 删除域名，SWR企业仓库的默认域名无法删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomainNameAsync($request)
    {
        return $this->deleteDomainNameAsyncWithHttpInfo($request);
    }
    
    public function deleteDomainNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/domainname/{domainname_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainnameId'] !== null) {
            $pathParams['domainname_id'] = $localVarParams['domainnameId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteDomainNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteDomainNameRequest',
            $asyncRequest = true);
    }

    /**
     * 删除不可变Tag策略
     *
     * 删除不可变Tag策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteImmutableRuleAsync($request)
    {
        return $this->deleteImmutableRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteImmutableRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/immutabletagrules/{immutable_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['immutableRuleId'] !== null) {
            $pathParams['immutable_rule_id'] = $localVarParams['immutableRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteImmutableRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteImmutableRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除实例
     *
     * 删除实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceAsync($request)
    {
        return $this->deleteInstanceAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除制品
     *
     * 删除制品
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceArtifactAsync($request)
    {
        return $this->deleteInstanceArtifactAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceArtifactAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}/artifacts/{reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['reference'] !== null) {
            $pathParams['reference'] = $localVarParams['reference'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceArtifactResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceArtifactRequest',
            $asyncRequest = true);
    }

    /**
     * 删除内网访问
     *
     * 删除内网访问
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceInternalEndpointAsync($request)
    {
        return $this->deleteInstanceInternalEndpointAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceInternalEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/internal-endpoints/{internal_endpoints_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['internalEndpointsId'] !== null) {
            $pathParams['internal_endpoints_id'] = $localVarParams['internalEndpointsId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceInternalEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceInternalEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 删除任务
     *
     * 删除任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceJobAsync($request)
    {
        return $this->deleteInstanceJobAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceJobRequest',
            $asyncRequest = true);
    }

    /**
     * 删除长期访问凭证
     *
     * 删除长期访问凭证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceLtCredentialAsync($request)
    {
        return $this->deleteInstanceLtCredentialAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceLtCredentialAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/long-term-credentials/{credential_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['credentialId'] !== null) {
            $pathParams['credential_id'] = $localVarParams['credentialId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceLtCredentialResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceLtCredentialRequest',
            $asyncRequest = true);
    }

    /**
     * 删除命名空间
     *
     * 删除命名空间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceNamespaceAsync($request)
    {
        return $this->deleteInstanceNamespaceAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceNamespaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceNamespaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceNamespaceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除镜像同步的目标仓库
     *
     * 删除同步仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceRegistryAsync($request)
    {
        return $this->deleteInstanceRegistryAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceRegistryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/registries/{registry_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['registryId'] !== null) {
            $pathParams['registry_id'] = $localVarParams['registryId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRegistryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRegistryRequest',
            $asyncRequest = true);
    }

    /**
     * 删除镜像同步策略
     *
     * 删除镜像同步策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceReplicationPolicyAsync($request)
    {
        return $this->deleteInstanceReplicationPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceReplicationPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceReplicationPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceReplicationPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除制品仓库
     *
     * 删除仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceRepositoryAsync($request)
    {
        return $this->deleteInstanceRepositoryAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除资源标签
     *
     * 批量删除资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceResourceTagsAsync($request)
    {
        return $this->deleteInstanceResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除老化策略
     *
     * 删除老化策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceRetentionPolicyAsync($request)
    {
        return $this->deleteInstanceRetentionPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceRetentionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRetentionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceRetentionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除签名策略
     *
     * 删除签名策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceSignPolicyAsync($request)
    {
        return $this->deleteInstanceSignPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceSignPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceSignPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceSignPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除触发器策略
     *
     * 删除触发器策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceWebhookAsync($request)
    {
        return $this->deleteInstanceWebhookAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/webhook/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteInstanceWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除子资源标签
     *
     * 批量删除子资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSubResourceTagsAsync($request)
    {
        return $this->deleteSubResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function deleteSubResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/{sub_resource_type}/{sub_resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['subResourceType'] !== null) {
            $pathParams['sub_resource_type'] = $localVarParams['subResourceType'];
        }
        if ($localVarParams['subResourceId'] !== null) {
            $pathParams['sub_resource_id'] = $localVarParams['subResourceId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteSubResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\DeleteSubResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 手动执行镜像同步策略
     *
     * 手动执行同步策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeInstanceReplicationPolicyAsync($request)
    {
        return $this->executeInstanceReplicationPolicyAsyncWithHttpInfo($request);
    }
    
    public function executeInstanceReplicationPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ExecuteInstanceReplicationPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ExecuteInstanceReplicationPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 执行老化策略
     *
     * 执行老化策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeInstanceRetentionPolicyAsync($request)
    {
        return $this->executeInstanceRetentionPolicyAsyncWithHttpInfo($request);
    }
    
    public function executeInstanceRetentionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ExecuteInstanceRetentionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ExecuteInstanceRetentionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 手动执行签名策略
     *
     * 手动执行签名策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeInstanceSignPolicyAsync($request)
    {
        return $this->executeInstanceSignPolicyAsyncWithHttpInfo($request);
    }
    
    public function executeInstanceSignPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ExecuteInstanceSignPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ExecuteInstanceSignPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取上传下载的相关审计日志列表
     *
     * 获取上传下载的相关审计日志列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuditLogsAsync($request)
    {
        return $this->listAuditLogsAsyncWithHttpInfo($request);
    }
    
    public function listAuditLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/audit-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['operation'] !== null) {
            $queryParams['operation'] = $localVarParams['operation'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListAuditLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListAuditLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有域名列表
     *
     * 查询当前实例的所有域名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainNamesAsync($request)
    {
        return $this->listDomainNamesAsyncWithHttpInfo($request);
    }
    
    public function listDomainNamesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/domainname';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['uid'] !== null) {
            $queryParams['uid'] = $localVarParams['uid'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListDomainNamesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListDomainNamesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询特性开关信息
     *
     * 查询特性开关信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFeatureGatesAsync($request)
    {
        return $this->listFeatureGatesAsyncWithHttpInfo($request);
    }
    
    public function listFeatureGatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/feature-gates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListFeatureGatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListFeatureGatesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询全局特性开关信息
     *
     * 查询全局特性开关信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalFeatureGatesAsync($request)
    {
        return $this->listGlobalFeatureGatesAsyncWithHttpInfo($request);
    }
    
    public function listGlobalFeatureGatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/feature-gates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListGlobalFeatureGatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListGlobalFeatureGatesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取不可变Tag策略列表
     *
     * 获取不可变Tag策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImmutableRulesAsync($request)
    {
        return $this->listImmutableRulesAsyncWithHttpInfo($request);
    }
    
    public function listImmutableRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/immutabletagrules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['namespaceId'] !== null) {
            $queryParams['namespace_id'] = $localVarParams['namespaceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListImmutableRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListImmutableRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例列表
     *
     * 查询实例列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceAsync($request)
    {
        return $this->listInstanceAsyncWithHttpInfo($request);
    }
    
    public function listInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品附件列表
     *
     * 获取制品附件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceAccessoriesAsync($request)
    {
        return $this->listInstanceAccessoriesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceAccessoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}/artifacts/{reference}/accessories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['reference'] !== null) {
            $pathParams['reference'] = $localVarParams['reference'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceAccessoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceAccessoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库实例的所有制品版本列表
     *
     * 获取仓库实例的所有制品版本列表（此接口只在企业仓库实例版本大于25.6.0以上的版本才支持）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceAllArtifactsAsync($request)
    {
        return $this->listInstanceAllArtifactsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceAllArtifactsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/artifacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceAllArtifactsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceAllArtifactsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品版本列表
     *
     * 获取制品版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceArtifactsAsync($request)
    {
        return $this->listInstanceArtifactsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceArtifactsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}/artifacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceArtifactsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceArtifactsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取内网访问列表
     *
     * 获取内网访问列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceInternalEndpointsAsync($request)
    {
        return $this->listInstanceInternalEndpointsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceInternalEndpointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/internal-endpoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceInternalEndpointsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceInternalEndpointsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务列表
     *
     * 获取任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceJobsAsync($request)
    {
        return $this->listInstanceJobsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询长期访问凭证列表
     *
     * 查询长期访问凭证列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceLtCredentialsAsync($request)
    {
        return $this->listInstanceLtCredentialsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceLtCredentialsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/long-term-credentials';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceLtCredentialsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceLtCredentialsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取命名空间列表
     *
     * 获取命名空间列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceNamespacesAsync($request)
    {
        return $this->listInstanceNamespacesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['public'] !== null) {
            $queryParams['public'] = $localVarParams['public'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceNamespacesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目下所有实例标签
     *
     * 查询项目下所有实例标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceProjectTagsAsync($request)
    {
        return $this->listInstanceProjectTagsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceProjectTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceProjectTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceProjectTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步的目标仓库列表
     *
     * 获取镜像同步的目标仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceRegistriesAsync($request)
    {
        return $this->listInstanceRegistriesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceRegistriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/registries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRegistriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRegistriesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步策略列表
     *
     * 获取镜像同步策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceReplicationPoliciesAsync($request)
    {
        return $this->listInstanceReplicationPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceReplicationPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['registryId'] !== null) {
            $queryParams['registry_id'] = $localVarParams['registryId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步策略执行任务的镜像版本列表
     *
     * 获取镜像同步策略执行任务的镜像版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceReplicationPolicyExecSubTasksAsync($request)
    {
        return $this->listInstanceReplicationPolicyExecSubTasksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceReplicationPolicyExecSubTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/executions/{execution_id}/tasks/{task_id}/subtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPolicyExecSubTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPolicyExecSubTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步策略执行任务的镜像列表
     *
     * 获取镜像同步策略执行任务的镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceReplicationPolicyExecTasksAsync($request)
    {
        return $this->listInstanceReplicationPolicyExecTasksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceReplicationPolicyExecTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/executions/{execution_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPolicyExecTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPolicyExecTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步策略执行记录列表
     *
     * 获取镜像同步策略执行记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceReplicationPolicyExecutionsAsync($request)
    {
        return $this->listInstanceReplicationPolicyExecutionsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceReplicationPolicyExecutionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $queryParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPolicyExecutionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceReplicationPolicyExecutionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品仓库列表
     *
     * 获取制品仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceRepositoriesAsync($request)
    {
        return $this->listInstanceRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['namespaceId'] !== null) {
            $queryParams['namespace_id'] = $localVarParams['namespaceId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 按照标签检索资源列表
     *
     * 按照标签检索资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceResourceInstancesAsync($request)
    {
        return $this->listInstanceResourceInstancesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceResourceInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceResourceInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceResourceInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源标签
     *
     * 查询资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceResourceTagsAsync($request)
    {
        return $this->listInstanceResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取老化策略列表
     *
     * 获取老化策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceRetentionPoliciesAsync($request)
    {
        return $this->listInstanceRetentionPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceRetentionPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/retention/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['namespaceId'] !== null) {
            $queryParams['namespace_id'] = $localVarParams['namespaceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取老化策略执行任务的镜像版本列表
     *
     * 获取老化策略执行任务的镜像版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceRetentionPolicyExecSubTasksAsync($request)
    {
        return $this->listInstanceRetentionPolicyExecSubTasksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceRetentionPolicyExecSubTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}/executions/{execution_id}/tasks/{task_id}/subtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPolicyExecSubTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPolicyExecSubTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取老化策略执行任务的镜像列表
     *
     * 获取老化策略执行任务的镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceRetentionPolicyExecTasksAsync($request)
    {
        return $this->listInstanceRetentionPolicyExecTasksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceRetentionPolicyExecTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}/executions/{execution_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPolicyExecTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPolicyExecTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取老化策略执行记录列表
     *
     * 获取老化策略执行记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceRetentionPolicyExecutionsAsync($request)
    {
        return $this->listInstanceRetentionPolicyExecutionsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceRetentionPolicyExecutionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPolicyExecutionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceRetentionPolicyExecutionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取签名策略列表
     *
     * 获取签名策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceSignPoliciesAsync($request)
    {
        return $this->listInstanceSignPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listInstanceSignPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/signature/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取签名执行记录任务的镜像列表
     *
     * 获取签名执行记录任务的镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceSignPolicyExecTasksAsync($request)
    {
        return $this->listInstanceSignPolicyExecTasksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceSignPolicyExecTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}/executions/{execution_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignPolicyExecTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignPolicyExecTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取签名执行记录列表
     *
     * 获取签名执行记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceSignPolicyExecutionsAsync($request)
    {
        return $this->listInstanceSignPolicyExecutionsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceSignPolicyExecutionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignPolicyExecutionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignPolicyExecutionsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取签名策略执行任务的镜像版本列表
     *
     * 获取签名策略执行任务的镜像版本列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceSignatureExecutionSubtasksAsync($request)
    {
        return $this->listInstanceSignatureExecutionSubtasksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceSignatureExecutionSubtasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}/executions/{execution_id}/tasks/{task_id}/subtasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignatureExecutionSubtasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceSignatureExecutionSubtasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取实例统计数据
     *
     * 获取实例统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceStatisticsAsync($request)
    {
        return $this->listInstanceStatisticsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceStatisticsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceStatisticsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceStatisticsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品仓库的Tag列表
     *
     * 获取制品仓库的Tag列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceTagsAsync($request)
    {
        return $this->listInstanceTagsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['isAccessory'] !== null) {
            $queryParams['is_accessory'] = $localVarParams['isAccessory'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取触发器执行任务列表
     *
     * 获取触发器执行任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceWebhookJobsAsync($request)
    {
        return $this->listInstanceWebhookJobsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceWebhookJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/webhook/policies/{policy_id}/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceWebhookJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceWebhookJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取触发器策略列表
     *
     * 获取触发器策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceWebhooksAsync($request)
    {
        return $this->listInstanceWebhooksAsyncWithHttpInfo($request);
    }
    
    public function listInstanceWebhooksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/webhook/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['namespaceId'] !== null) {
            $queryParams['namespace_id'] = $localVarParams['namespaceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceWebhooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListInstanceWebhooksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取命名空间下所有制品仓库列表
     *
     * 获取命名空间下所有制品仓库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNamespaceRepositoriesAsync($request)
    {
        return $this->listNamespaceRepositoriesAsyncWithHttpInfo($request);
    }
    
    public function listNamespaceRepositoriesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['orderColumn'] !== null) {
            $queryParams['order_column'] = $localVarParams['orderColumn'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespaceRepositoriesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespaceRepositoriesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实例下所有命名空间标签
     *
     * 查询实例下所有命名空间标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNamespaceTagsAsync($request)
    {
        return $this->listNamespaceTagsAsyncWithHttpInfo($request);
    }
    
    public function listNamespaceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces-tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespaceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListNamespaceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 按照标签检索子资源列表
     *
     * 按照标签检索子资源列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubResourceInstancesAsync($request)
    {
        return $this->listSubResourceInstancesAsyncWithHttpInfo($request);
    }
    
    public function listSubResourceInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/{sub_resource_type}/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['subResourceType'] !== null) {
            $pathParams['sub_resource_type'] = $localVarParams['subResourceType'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListSubResourceInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListSubResourceInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询子资源标签
     *
     * 查询子资源标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubResourceTagsAsync($request)
    {
        return $this->listSubResourceTagsAsyncWithHttpInfo($request);
    }
    
    public function listSubResourceTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/{sub_resource_type}/{sub_resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['subResourceType'] !== null) {
            $pathParams['sub_resource_type'] = $localVarParams['subResourceType'];
        }
        if ($localVarParams['subResourceId'] !== null) {
            $pathParams['sub_resource_id'] = $localVarParams['subResourceId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ListSubResourceTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ListSubResourceTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取实例详情
     *
     * 获取实例详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceAsync($request)
    {
        return $this->showInstanceAsyncWithHttpInfo($request);
    }
    
    public function showInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品详情
     *
     * 获取制品详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceArtifactAsync($request)
    {
        return $this->showInstanceArtifactAsyncWithHttpInfo($request);
    }
    
    public function showInstanceArtifactAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}/artifacts/{reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['reference'] !== null) {
            $pathParams['reference'] = $localVarParams['reference'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceArtifactResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceArtifactRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品附加信息
     *
     * 获取制品附加信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceArtifactAdditionAsync($request)
    {
        return $this->showInstanceArtifactAdditionAsyncWithHttpInfo($request);
    }
    
    public function showInstanceArtifactAdditionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}/artifacts/{reference}/additions/{addition}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
        }
        if ($localVarParams['reference'] !== null) {
            $pathParams['reference'] = $localVarParams['reference'];
        }
        if ($localVarParams['addition'] !== null) {
            $pathParams['addition'] = $localVarParams['addition'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceArtifactAdditionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceArtifactAdditionRequest',
            $asyncRequest = true);
    }

    /**
     * 查看实例配置
     *
     * 查看实例配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceConfigurationAsync($request)
    {
        return $this->showInstanceConfigurationAsyncWithHttpInfo($request);
    }
    
    public function showInstanceConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 获取公网访问信息
     *
     * 获取公网访问信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceEndpointPolicyAsync($request)
    {
        return $this->showInstanceEndpointPolicyAsyncWithHttpInfo($request);
    }
    
    public function showInstanceEndpointPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/endpoint-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceEndpointPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceEndpointPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询内网访问详情
     *
     * 查询内网访问详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceInternalEndpointAsync($request)
    {
        return $this->showInstanceInternalEndpointAsyncWithHttpInfo($request);
    }
    
    public function showInstanceInternalEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/internal-endpoints/{internal_endpoints_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['internalEndpointsId'] !== null) {
            $pathParams['internal_endpoints_id'] = $localVarParams['internalEndpointsId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceInternalEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceInternalEndpointRequest',
            $asyncRequest = true);
    }

    /**
     * 获取任务详情
     *
     * 获取任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceJobAsync($request)
    {
        return $this->showInstanceJobAsyncWithHttpInfo($request);
    }
    
    public function showInstanceJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceJobRequest',
            $asyncRequest = true);
    }

    /**
     * 获取命名空间详情
     *
     * 获取命名空间详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceNamespaceAsync($request)
    {
        return $this->showInstanceNamespaceAsyncWithHttpInfo($request);
    }
    
    public function showInstanceNamespaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceNamespaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceNamespaceRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步的目标仓库详情
     *
     * 获取镜像同步的目标仓库详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceRegistryAsync($request)
    {
        return $this->showInstanceRegistryAsyncWithHttpInfo($request);
    }
    
    public function showInstanceRegistryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/registries/{registry_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['registryId'] !== null) {
            $pathParams['registry_id'] = $localVarParams['registryId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRegistryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRegistryRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像同步策略详情
     *
     * 获取镜像同步策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceReplicationPolicyAsync($request)
    {
        return $this->showInstanceReplicationPolicyAsyncWithHttpInfo($request);
    }
    
    public function showInstanceReplicationPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceReplicationPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceReplicationPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取制品仓库详情
     *
     * 获取制品仓库详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceRepositoryAsync($request)
    {
        return $this->showInstanceRepositoryAsyncWithHttpInfo($request);
    }
    
    public function showInstanceRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 按照标签检索资源数量
     *
     * 按照标签检索资源数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceResourceInstancesCountAsync($request)
    {
        return $this->showInstanceResourceInstancesCountAsyncWithHttpInfo($request);
    }
    
    public function showInstanceResourceInstancesCountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceResourceInstancesCountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceResourceInstancesCountRequest',
            $asyncRequest = true);
    }

    /**
     * 获取老化策略详情
     *
     * 获取老化策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceRetentionPolicyAsync($request)
    {
        return $this->showInstanceRetentionPolicyAsyncWithHttpInfo($request);
    }
    
    public function showInstanceRetentionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRetentionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceRetentionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取签名策略详情
     *
     * 获取签名策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceSignPolicyAsync($request)
    {
        return $this->showInstanceSignPolicyAsyncWithHttpInfo($request);
    }
    
    public function showInstanceSignPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceSignPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceSignPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 获取触发器策略详情
     *
     * 获取触发器策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceWebhookAsync($request)
    {
        return $this->showInstanceWebhookAsyncWithHttpInfo($request);
    }
    
    public function showInstanceWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/webhook/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowInstanceWebhookRequest',
            $asyncRequest = true);
    }

    /**
     * 按照标签检索子资源数量
     *
     * 按照标签检索子资源数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSubResourceInstancesCountAsync($request)
    {
        return $this->showSubResourceInstancesCountAsyncWithHttpInfo($request);
    }
    
    public function showSubResourceInstancesCountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/{resource_type}/{resource_id}/{sub_resource_type}/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['subResourceType'] !== null) {
            $pathParams['sub_resource_type'] = $localVarParams['subResourceType'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\ShowSubResourceInstancesCountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\ShowSubResourceInstancesCountRequest',
            $asyncRequest = true);
    }

    /**
     * 停止镜像同步任务
     *
     * 停止镜像同步任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopInstanceReplicationPolicyExecutionAsync($request)
    {
        return $this->stopInstanceReplicationPolicyExecutionAsyncWithHttpInfo($request);
    }
    
    public function stopInstanceReplicationPolicyExecutionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/executions/{execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\StopInstanceReplicationPolicyExecutionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\StopInstanceReplicationPolicyExecutionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新域名
     *
     * 更新域名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDomainNameAsync($request)
    {
        return $this->updateDomainNameAsyncWithHttpInfo($request);
    }
    
    public function updateDomainNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/domainname/{domainname_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainnameId'] !== null) {
            $pathParams['domainname_id'] = $localVarParams['domainnameId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateDomainNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateDomainNameRequest',
            $asyncRequest = true);
    }

    /**
     * 修改不可变Tag策略
     *
     * 修改不可变Tag策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateImmutableRuleAsync($request)
    {
        return $this->updateImmutableRuleAsyncWithHttpInfo($request);
    }
    
    public function updateImmutableRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/immutabletagrules/{immutable_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['immutableRuleId'] !== null) {
            $pathParams['immutable_rule_id'] = $localVarParams['immutableRuleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateImmutableRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateImmutableRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 修改实例配置
     *
     * 修改实例配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceConfigurationAsync($request)
    {
        return $this->updateInstanceConfigurationAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 更新公网访问白名单
     *
     * 更新公网访问白名单，更新为全量更新方式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceEndpointPolicyAsync($request)
    {
        return $this->updateInstanceEndpointPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceEndpointPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/endpoint-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceEndpointPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceEndpointPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 启用/停用长期访问凭证
     *
     * 启用/停用长期访问凭证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceLtCredentialAsync($request)
    {
        return $this->updateInstanceLtCredentialAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceLtCredentialAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/long-term-credentials/{credential_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['credentialId'] !== null) {
            $pathParams['credential_id'] = $localVarParams['credentialId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceLtCredentialResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceLtCredentialRequest',
            $asyncRequest = true);
    }

    /**
     * 修改命名空间
     *
     * 修改命名空间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceNamespaceAsync($request)
    {
        return $this->updateInstanceNamespaceAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceNamespaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
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
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceNamespaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceNamespaceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改镜像同步的目标仓库
     *
     * 修改镜像同步的目标仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceRegistryAsync($request)
    {
        return $this->updateInstanceRegistryAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceRegistryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/registries/{registry_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['registryId'] !== null) {
            $pathParams['registry_id'] = $localVarParams['registryId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceRegistryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceRegistryRequest',
            $asyncRequest = true);
    }

    /**
     * 修改镜像同步策略
     *
     * 修改镜像同步策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceReplicationPolicyAsync($request)
    {
        return $this->updateInstanceReplicationPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceReplicationPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/replication/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceReplicationPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceReplicationPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改制品仓库
     *
     * 修改制品仓库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceRepositoryAsync($request)
    {
        return $this->updateInstanceRepositoryAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceRepositoryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/repositories/{repository_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['repositoryName'] !== null) {
            $pathParams['repository_name'] = $localVarParams['repositoryName'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceRepositoryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceRepositoryRequest',
            $asyncRequest = true);
    }

    /**
     * 修改老化策略
     *
     * 修改老化策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceRetentionPolicyAsync($request)
    {
        return $this->updateInstanceRetentionPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceRetentionPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/retention/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceRetentionPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceRetentionPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改签名策略
     *
     * 修改签名策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceSignPolicyAsync($request)
    {
        return $this->updateInstanceSignPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceSignPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/signature/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceSignPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceSignPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改触发器策略
     *
     * 修改触发器策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceWebhookAsync($request)
    {
        return $this->updateInstanceWebhookAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceWebhookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/instances/{instance_id}/namespaces/{namespace_name}/webhook/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['namespaceName'] !== null) {
            $pathParams['namespace_name'] = $localVarParams['namespaceName'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceWebhookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Swr\V2\Model\UpdateInstanceWebhookRequest',
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