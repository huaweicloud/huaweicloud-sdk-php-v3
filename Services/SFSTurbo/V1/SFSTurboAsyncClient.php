<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SFSTurboAsyncClient extends Client
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
        return new ClientBuilder(new SFSTurboAsyncClient());
    }

    /**
     * 批量添加共享标签
     *
     * 指定共享批量添加标签。
     * 
     * 一个共享上最多有10个标签。
     * 一个共享上的多个标签的key不允许重复。
     * 此接口为幂等接口：如果要添加的key在共享上已存在，则覆盖更新标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddSharedTagsAsync($request)
    {
        return $this->batchAddSharedTagsAsyncWithHttpInfo($request);
    }
    
    public function batchAddSharedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\BatchAddSharedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\BatchAddSharedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 修改文件系统绑定的安全组
     *
     * 修改SFS Turbo文件系统绑定的安全组。修改安全组为异步任务，可以通过“查询单个文件系统”返回的子状态字段“sub_status”来判断是否修改安全组状态，子状态为“232”即为修改安全组成功。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeSecurityGroupAsync($request)
    {
        return $this->changeSecurityGroupAsyncWithHttpInfo($request);
    }
    
    public function changeSecurityGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v1/{project_id}/sfs-turbo/shares/{share_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ChangeSecurityGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ChangeSecurityGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 修改文件系统名称
     *
     * 修改文件系统名称
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeShareNameAsync($request)
    {
        return $this->changeShareNameAsyncWithHttpInfo($request);
    }
    
    public function changeShareNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v1/{project_id}/sfs-turbo/shares/{share_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ChangeShareNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ChangeShareNameRequest',
            $asyncRequest = true);
    }

    /**
     * 创建文件系统后端存储库
     *
     * 创建文件系统后端存储库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBackendTargetAsync($request)
    {
        return $this->createBackendTargetAsyncWithHttpInfo($request);
    }
    
    public function createBackendTargetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/targets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateBackendTargetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateBackendTargetRequest',
            $asyncRequest = true);
    }

    /**
     * 创建目录
     *
     * 创建目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFsDirAsync($request)
    {
        return $this->createFsDirAsyncWithHttpInfo($request);
    }
    
    public function createFsDirAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateFsDirResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateFsDirRequest',
            $asyncRequest = true);
    }

    /**
     * 创建目标文件夹quota
     *
     * 创建目标文件夹quota。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFsDirQuotaAsync($request)
    {
        return $this->createFsDirQuotaAsyncWithHttpInfo($request);
    }
    
    public function createFsDirQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir-quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateFsDirQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateFsDirQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 创建文件系统异步任务
     *
     * 创建文件系统异步任务（该接口目前仅支持“华南-广州-友好用户环境”，“华南-广州”，“华南-深圳”，“西南-贵阳一”，“华北-乌兰察布一”，“华北-北京一”，“华北-北京二”，“华北-北京四”，“华东-上海一”）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFsTaskAsync($request)
    {
        return $this->createFsTaskAsyncWithHttpInfo($request);
    }
    
    public function createFsTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/{feature}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['feature'] !== null) {
            $pathParams['feature'] = $localVarParams['feature'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateFsTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateFsTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建SFSTurbo 和 OBS 之间的联动任务
     *
     * 创建SFSTurbo 和 OBS 之间的联动任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHpcCacheTaskAsync($request)
    {
        return $this->createHpcCacheTaskAsyncWithHttpInfo($request);
    }
    
    public function createHpcCacheTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/hpc-cache/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateHpcCacheTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateHpcCacheTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建权限规则
     *
     * 创建权限规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPermRuleAsync($request)
    {
        return $this->createPermRuleAsyncWithHttpInfo($request);
    }
    
    public function createPermRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/perm-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreatePermRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreatePermRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 创建文件系统
     *
     * 创建文件系统。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createShareAsync($request)
    {
        return $this->createShareAsyncWithHttpInfo($request);
    }
    
    public function createShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateShareRequest',
            $asyncRequest = true);
    }

    /**
     * 创建共享标签
     *
     * 指定共享添加一个标签。
     * 一个共享上最多有10个标签。
     * 一个共享上的多个标签的key不允许重复。
     * 此接口为幂等接口：如果要添加的key在共享上已存在，则覆盖更新标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSharedTagAsync($request)
    {
        return $this->createSharedTagAsyncWithHttpInfo($request);
    }
    
    public function createSharedTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateSharedTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\CreateSharedTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除文件系统后端存储库
     *
     * 删除文件系统后端存储库
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBackendTargetAsync($request)
    {
        return $this->deleteBackendTargetAsyncWithHttpInfo($request);
    }
    
    public function deleteBackendTargetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/targets/{target_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['deleteDataInFileSystem'] !== null) {
            $queryParams['delete_data_in_file_system'] = $localVarParams['deleteDataInFileSystem'];
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['targetId'] !== null) {
            $pathParams['target_id'] = $localVarParams['targetId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteBackendTargetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteBackendTargetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除文件系统目录
     *
     * 删除文件系统目录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFsDirAsync($request)
    {
        return $this->deleteFsDirAsyncWithHttpInfo($request);
    }
    
    public function deleteFsDirAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteFsDirResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteFsDirRequest',
            $asyncRequest = true);
    }

    /**
     * 删除目标文件夹quota
     *
     * 删除目标文件夹quota。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFsDirQuotaAsync($request)
    {
        return $this->deleteFsDirQuotaAsyncWithHttpInfo($request);
    }
    
    public function deleteFsDirQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir-quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteFsDirQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteFsDirQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 取消/删除文件系统异步任务
     *
     * 如果异步任务正在执行，则取消并删除任务；否则，删除任务。（该接口目前仅支持“华南-广州-友好用户环境”，“华南-广州”，“华南-深圳”，“西南-贵阳一”，“华北-乌兰察布一”，“华北-北京一”，“华北-北京二”，“华北-北京四”，“华东-上海一”）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFsTaskAsync($request)
    {
        return $this->deleteFsTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteFsTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/{feature}/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['feature'] !== null) {
            $pathParams['feature'] = $localVarParams['feature'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteFsTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteFsTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除权限规则
     *
     * 删除权限规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePermRuleAsync($request)
    {
        return $this->deletePermRuleAsyncWithHttpInfo($request);
    }
    
    public function deletePermRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/perm-rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeletePermRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeletePermRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除文件系统
     *
     * 删除文件系统。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteShareAsync($request)
    {
        return $this->deleteShareAsyncWithHttpInfo($request);
    }
    
    public function deleteShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteShareRequest',
            $asyncRequest = true);
    }

    /**
     * 删除共享标签
     *
     * 指定共享删除一个标签。当共享中不存在指定要删除的key时，接口调用将会返回404错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSharedTagAsync($request)
    {
        return $this->deleteSharedTagAsyncWithHttpInfo($request);
    }
    
    public function deleteSharedTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteSharedTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\DeleteSharedTagRequest',
            $asyncRequest = true);
    }

    /**
     * 扩容文件系统
     *
     * 扩容文件系统。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function expandShareAsync($request)
    {
        return $this->expandShareAsyncWithHttpInfo($request);
    }
    
    public function expandShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ExpandShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ExpandShareRequest',
            $asyncRequest = true);
    }

    /**
     * 查询文件系统后端存储库列表
     *
     * 查询文件系统后端存储库列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBackendTargetsAsync($request)
    {
        return $this->listBackendTargetsAsyncWithHttpInfo($request);
    }
    
    public function listBackendTargetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/targets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListBackendTargetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListBackendTargetsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件系统异步任务列表
     *
     * 获取文件系统异步任务列表（该接口目前仅支持“华南-广州-友好用户环境”，“华南-广州”，“华南-深圳”，“西南-贵阳一”，“华北-乌兰察布一”，“华北-北京一”，“华北-北京二”，“华北-北京四”，“华东-上海一”）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFsTasksAsync($request)
    {
        return $this->listFsTasksAsyncWithHttpInfo($request);
    }
    
    public function listFsTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/{feature}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['feature'] !== null) {
            $pathParams['feature'] = $localVarParams['feature'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListFsTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListFsTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询联动任务详情列表
     *
     * 查询联动任务详情列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHpcCacheTasksAsync($request)
    {
        return $this->listHpcCacheTasksAsyncWithHttpInfo($request);
    }
    
    public function listHpcCacheTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/hpc-cache/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListHpcCacheTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListHpcCacheTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询文件系统的权限规则列表
     *
     * 查询文件系统的权限规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermRulesAsync($request)
    {
        return $this->listPermRulesAsyncWithHttpInfo($request);
    }
    
    public function listPermRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/perm-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListPermRulesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListPermRulesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户所有共享的标签
     *
     * 查询租户所有共享的标签集合。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSharedTagsAsync($request)
    {
        return $this->listSharedTagsAsyncWithHttpInfo($request);
    }
    
    public function listSharedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListSharedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListSharedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件系统列表
     *
     * 获取文件系统列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSharesAsync($request)
    {
        return $this->listSharesAsyncWithHttpInfo($request);
    }
    
    public function listSharesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListSharesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ListSharesRequest',
            $asyncRequest = true);
    }

    /**
     * 配置hpc缓存型后端信息
     *
     * 配置hpc缓存型后端信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setHpcCacheBackendAsync($request)
    {
        return $this->setHpcCacheBackendAsyncWithHttpInfo($request);
    }
    
    public function setHpcCacheBackendAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v1/{project_id}/sfs-turbo/shares/{share_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\SetHpcCacheBackendResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\SetHpcCacheBackendRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件系统后端存储库详细信息
     *
     * 获取文件系统后端存储库详细信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBackendTargetInfoAsync($request)
    {
        return $this->showBackendTargetInfoAsyncWithHttpInfo($request);
    }
    
    public function showBackendTargetInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/targets/{target_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['targetId'] !== null) {
            $pathParams['target_id'] = $localVarParams['targetId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowBackendTargetInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowBackendTargetInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询目录是否存在
     *
     * 查询目录是否存在
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFsDirAsync($request)
    {
        return $this->showFsDirAsyncWithHttpInfo($request);
    }
    
    public function showFsDirAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsDirResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsDirRequest',
            $asyncRequest = true);
    }

    /**
     * 查询目标文件夹quota
     *
     * 查询目标文件夹quota
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFsDirQuotaAsync($request)
    {
        return $this->showFsDirQuotaAsyncWithHttpInfo($request);
    }
    
    public function showFsDirQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir-quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsDirQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsDirQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 查询目录资源使用情况
     *
     * 查询目录资源使用情况(包括子目录的资源)。后端有5min的缓存时间，查询的数据可能有延迟。（该接口目前仅支持“华南-广州-友好用户环境”，“华南-广州”，“华南-深圳”，“西南-贵阳一”，“华北-乌兰察布一”，“华北-北京一”，“华北-北京二”，“华北-北京四”，“华东-上海一”）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFsDirUsageAsync($request)
    {
        return $this->showFsDirUsageAsyncWithHttpInfo($request);
    }
    
    public function showFsDirUsageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir-usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsDirUsageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsDirUsageRequest',
            $asyncRequest = true);
    }

    /**
     * 获取文件系统异步任务详情
     *
     * 获取文件系统异步任务详情（该接口目前仅支持“华南-广州-友好用户环境”，“华南-广州”，“华南-深圳”，“西南-贵阳一”，“华北-乌兰察布一”，“华北-北京一”，“华北-北京二”，“华北-北京四”，“华东-上海一”）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFsTaskAsync($request)
    {
        return $this->showFsTaskAsyncWithHttpInfo($request);
    }
    
    public function showFsTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/{feature}/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['feature'] !== null) {
            $pathParams['feature'] = $localVarParams['feature'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowFsTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询联动任务详情
     *
     * 查询联动任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHpcCacheTaskAsync($request)
    {
        return $this->showHpcCacheTaskAsyncWithHttpInfo($request);
    }
    
    public function showHpcCacheTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/hpc-cache/task/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowHpcCacheTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowHpcCacheTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 查询文件系统的某一个权限规则
     *
     * 查询文件系统的某一个权限规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPermRuleAsync($request)
    {
        return $this->showPermRuleAsyncWithHttpInfo($request);
    }
    
    public function showPermRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/perm-rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowPermRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowPermRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询文件系统详细信息
     *
     * 查询SFS Turbo文件系统详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showShareAsync($request)
    {
        return $this->showShareAsyncWithHttpInfo($request);
    }
    
    public function showShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowShareRequest',
            $asyncRequest = true);
    }

    /**
     * 查询共享标签
     *
     * 查询指定共享的所有标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSharedTagsAsync($request)
    {
        return $this->showSharedTagsAsyncWithHttpInfo($request);
    }
    
    public function showSharedTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/{share_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowSharedTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShowSharedTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新目标文件夹quota
     *
     * 更新目标文件夹quota
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFsDirQuotaAsync($request)
    {
        return $this->updateFsDirQuotaAsyncWithHttpInfo($request);
    }
    
    public function updateFsDirQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/dir-quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\UpdateFsDirQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\UpdateFsDirQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 更新文件系统
     *
     * 设置文件系统冷数据淘汰时间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHpcShareAsync($request)
    {
        return $this->updateHpcShareAsyncWithHttpInfo($request);
    }
    
    public function updateHpcShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\UpdateHpcShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\UpdateHpcShareRequest',
            $asyncRequest = true);
    }

    /**
     * 修改权限规则
     *
     * 修改权限规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePermRuleAsync($request)
    {
        return $this->updatePermRuleAsyncWithHttpInfo($request);
    }
    
    public function updatePermRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/sfs-turbo/shares/{share_id}/fs/perm-rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['shareId'] !== null) {
            $pathParams['share_id'] = $localVarParams['shareId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\UpdatePermRuleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\SFSTurbo\V1\Model\UpdatePermRuleRequest',
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