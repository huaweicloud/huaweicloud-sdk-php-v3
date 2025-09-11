<?php

namespace HuaweiCloud\SDK\Bms\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class BmsAsyncClient extends Client
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
        $client = new ClientBuilder(new BmsAsyncClient());
        return $client;
    }

    /**
     * 裸金属服务器绑定弹性网卡
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addServerNicsAsync($request)
    {
        return $this->addServerNicsAsyncWithHttpInfo($request);
    }
    
    public function addServerNicsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/nics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\AddServerNicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\AddServerNicsRequest',
            $asyncRequest = true);
    }

    /**
     * 裸金属服务器挂载云硬盘
     *
     * 裸金属服务器创建成功后，如果发现磁盘不够用或者当前磁盘不满足要求，可以将已有云硬盘挂载给裸金属服务器，作为数据盘使用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachBaremetalServerVolumeAsync($request)
    {
        return $this->attachBaremetalServerVolumeAsyncWithHttpInfo($request);
    }
    
    public function attachBaremetalServerVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/attachvolume';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\AttachBaremetalServerVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\AttachBaremetalServerVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加裸金属服务器标签
     *
     * - 为指定裸金属服务器批量添加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateBaremetalServerTagsAsync($request)
    {
        return $this->batchCreateBaremetalServerTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateBaremetalServerTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v1/{project_id}/baremetalservers/{server_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\BatchCreateBaremetalServerTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\BatchCreateBaremetalServerTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除裸金属服务器标签
     *
     * - 为指定云服务器批量删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteBaremetalServerTagsAsync($request)
    {
        return $this->batchDeleteBaremetalServerTagsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteBaremetalServerTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\BatchDeleteBaremetalServerTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\BatchDeleteBaremetalServerTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 重启裸金属服务器
     *
     * 根据给定的裸金属服务器ID列表，批量重启裸金属服务器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRebootBaremetalServersAsync($request)
    {
        return $this->batchRebootBaremetalServersAsyncWithHttpInfo($request);
    }
    
    public function batchRebootBaremetalServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v1/{project_id}/baremetalservers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\BatchRebootBaremetalServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\BatchRebootBaremetalServersRequest',
            $asyncRequest = true);
    }

    /**
     * 启动裸金属服务器
     *
     * 根据给定的裸金属服务器ID列表，批量启动裸金属服务器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStartBaremetalServersAsync($request)
    {
        return $this->batchStartBaremetalServersAsyncWithHttpInfo($request);
    }
    
    public function batchStartBaremetalServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\BatchStartBaremetalServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\BatchStartBaremetalServersRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭裸金属服务器
     *
     * 根据给定的裸金属服务器ID列表，批量关闭裸金属服务器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStopBaremetalServersAsync($request)
    {
        return $this->batchStopBaremetalServersAsyncWithHttpInfo($request);
    }
    
    public function batchStopBaremetalServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v1/{project_id}/baremetalservers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\BatchStopBaremetalServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\BatchStopBaremetalServersRequest',
            $asyncRequest = true);
    }

    /**
     * 修改裸金属服务器名称
     *
     * 修改裸金属服务器名称
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeBaremetalServerNameAsync($request)
    {
        return $this->changeBaremetalServerNameAsyncWithHttpInfo($request);
    }
    
    public function changeBaremetalServerNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ChangeBaremetalServerNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ChangeBaremetalServerNameRequest',
            $asyncRequest = true);
    }

    /**
     * 切换裸金属服务器的操作系统
     *
     * 切换裸金属服务器的操作系统。切换操作系统支持密码或者密钥注入，该接口支持企业项目细粒度权限的校验，具体细粒度请参见 bms:servers:changeOS
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeBaremetalServerOsAsync($request)
    {
        return $this->changeBaremetalServerOsAsyncWithHttpInfo($request);
    }
    
    public function changeBaremetalServerOsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/changeos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ChangeBaremetalServerOsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ChangeBaremetalServerOsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建裸金属服务器
     *
     * 创建一台或多台裸金属服务器,裸金属服务器的登录鉴权方式包括两种：密钥对、密码。为安全起见，推荐使用密钥对方式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBareMetalServersAsync($request)
    {
        return $this->createBareMetalServersAsyncWithHttpInfo($request);
    }
    
    public function createBareMetalServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/text']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/text'],
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\CreateBareMetalServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\CreateBareMetalServersRequest',
            $asyncRequest = true);
    }

    /**
     * 删除裸金属服务器裸金属服务器物理机
     *
     * 删除裸金属服务器裸金属服务器物理机
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBaremetalServerAsync($request)
    {
        return $this->deleteBaremetalServerAsyncWithHttpInfo($request);
    }
    
    public function deleteBaremetalServerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\DeleteBaremetalServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\DeleteBaremetalServerRequest',
            $asyncRequest = true);
    }

    /**
     * 裸金属服务器解绑弹性网卡
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServerNicsAsync($request)
    {
        return $this->deleteServerNicsAsyncWithHttpInfo($request);
    }
    
    public function deleteServerNicsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/nics/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\DeleteServerNicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\DeleteServerNicsRequest',
            $asyncRequest = true);
    }

    /**
     * Windows裸金属服务器清除密码
     *
     * 清除Windows裸金属服务器初始安装时系统生成的密码记录。清除密码后，不影响裸金属服务器密码登录功能，但不能再使用获取密码功能来查询该裸金属服务器密码。如果裸金属服务器是通过私有镜像创建的，请确保已安装Cloudbase-init。公共镜像默认已安装该软件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWindowsBareMetalServerPasswordAsync($request)
    {
        return $this->deleteWindowsBareMetalServerPasswordAsyncWithHttpInfo($request);
    }
    
    public function deleteWindowsBareMetalServerPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-server-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\DeleteWindowsBareMetalServerPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\DeleteWindowsBareMetalServerPasswordRequest',
            $asyncRequest = true);
    }

    /**
     * 裸金属服务器卸载云磁盘
     *
     * 将挂载至裸金属服务器中的磁盘卸载；对于挂载在系统盘盘位（也就是“/dev/sda”挂载点）上的磁盘，不允许执行卸载操作；对于挂载在数据盘盘位（非“/dev/sda”挂载点）上的磁盘，支持离线卸载和在线卸载（裸金属服务器处于“运行中”状态）磁盘
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachBaremetalServerVolumeAsync($request)
    {
        return $this->detachBaremetalServerVolumeAsyncWithHttpInfo($request);
    }
    
    public function detachBaremetalServerVolumeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/detachvolume/{attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $pathParams['attachment_id'] = $localVarParams['attachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\DetachBaremetalServerVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\DetachBaremetalServerVolumeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器详情
     *
     * 获取裸金属服务器详细信息，该接口支持查询裸金属服务器的计费方式，以及是否被冻结
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBareMetalServerDetailsAsync($request)
    {
        return $this->listBareMetalServerDetailsAsyncWithHttpInfo($request);
    }
    
    public function listBareMetalServerDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ListBareMetalServerDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ListBareMetalServerDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器详情列表
     *
     * 用户根据设置的请求条件筛选裸金属服务器，并获取裸金属服务器的详细信息。该接口支持查询裸金属服务器计费方式，以及是否被冻结。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBareMetalServersAsync($request)
    {
        return $this->listBareMetalServersAsyncWithHttpInfo($request);
    }
    
    public function listBareMetalServersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['reservationId'] !== null) {
            $queryParams['reservation_id'] = $localVarParams['reservationId'];
        }
        if ($localVarParams['detail'] !== null) {
            $queryParams['detail'] = $localVarParams['detail'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ListBareMetalServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ListBareMetalServersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器列表
     *
     * 用户根据设置的请求条件筛选裸金属服务器，并获取裸金属服务器的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBareMetalServersDetailAsync($request)
    {
        return $this->listBareMetalServersDetailAsyncWithHttpInfo($request);
    }
    
    public function listBareMetalServersDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.1/{project_id}/baremetalservers/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['detail'] !== null) {
            $queryParams['detail'] = $localVarParams['detail'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ListBareMetalServersDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ListBareMetalServersDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询规格详情和规格扩展信息列表
     *
     * 查询裸金属服务器的规格详情和规格的扩展信息。您可以调用此接口查询“baremetal:extBootType”参数取值，以确认某个规格是否支持快速发放
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBaremetalFlavorDetailExtendsAsync($request)
    {
        return $this->listBaremetalFlavorDetailExtendsAsyncWithHttpInfo($request);
    }
    
    public function listBaremetalFlavorDetailExtendsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ListBaremetalFlavorDetailExtendsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ListBaremetalFlavorDetailExtendsRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑port
     *
     * 编辑port
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyVmNicAsync($request)
    {
        return $this->modifyVmNicAsyncWithHttpInfo($request);
    }
    
    public function modifyVmNicAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/nics/{nic_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nicId'] !== null) {
            $pathParams['nic_id'] = $localVarParams['nicId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ModifyVmNicResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ModifyVmNicRequest',
            $asyncRequest = true);
    }

    /**
     * 重装裸金属服务器操作系统
     *
     * 重装裸金属服务器的操作系统。快速发放裸金属服务器支持裸金属服务器数据盘不变的情况下，使用原镜像重装系统盘。重装操作系统支持密码或者密钥注入
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reinstallBaremetalServerOsAsync($request)
    {
        return $this->reinstallBaremetalServerOsAsyncWithHttpInfo($request);
    }
    
    public function reinstallBaremetalServerOsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/reinstallos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ReinstallBaremetalServerOsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ReinstallBaremetalServerOsRequest',
            $asyncRequest = true);
    }

    /**
     * 一键重置裸金属服务器密码
     *
     * 在裸金属服务器支持一键重置密码功能的前提下，重置裸金属服务器管理帐号（root用户或Administrator用户）的密码。可以通过6.10.1-查询是否支持一键重置密码API查询是否支持一键重置密码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetPwdOneClickAsync($request)
    {
        return $this->resetPwdOneClickAsyncWithHttpInfo($request);
    }
    
    public function resetPwdOneClickAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-reset-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ResetPwdOneClickResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ResetPwdOneClickRequest',
            $asyncRequest = true);
    }

    /**
     * 查询可用资源
     *
     * 查询可用资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAvailableResourceAsync($request)
    {
        return $this->showAvailableResourceAsyncWithHttpInfo($request);
    }
    
    public function showAvailableResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/available_resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowAvailableResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowAvailableResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器网卡信息
     *
     * 查询裸金属服务器的网卡信息，比如网卡的IP地址、MAC地址
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBaremetalServerInterfaceAttachmentsAsync($request)
    {
        return $this->showBaremetalServerInterfaceAttachmentsAsyncWithHttpInfo($request);
    }
    
    public function showBaremetalServerInterfaceAttachmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-interface';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowBaremetalServerInterfaceAttachmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowBaremetalServerInterfaceAttachmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器标签
     *
     * - 查询指定云服务器的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBaremetalServerTagsAsync($request)
    {
        return $this->showBaremetalServerTagsAsyncWithHttpInfo($request);
    }
    
    public function showBaremetalServerTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowBaremetalServerTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowBaremetalServerTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器挂载的云硬盘信息
     *
     * 查询裸金属服务器挂载的磁盘信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBaremetalServerVolumeInfoAsync($request)
    {
        return $this->showBaremetalServerVolumeInfoAsyncWithHttpInfo($request);
    }
    
    public function showBaremetalServerVolumeInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-volume_attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowBaremetalServerVolumeInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowBaremetalServerVolumeInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询裸金属服务器元数据配置
     *
     * 查询云服务器元数据配置，通过本接口，您可以查询指裸金属服务器的元数据配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMetadataOptionsAsync($request)
    {
        return $this->showMetadataOptionsAsyncWithHttpInfo($request);
    }
    
    public function showMetadataOptionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/metadata-options';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowMetadataOptionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowMetadataOptionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询是否支持一键重置密码
     *
     * 查询是否支持一键重置密码
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResetPwdAsync($request)
    {
        return $this->showResetPwdAsyncWithHttpInfo($request);
    }
    
    public function showResetPwdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-resetpwd-flag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowResetPwdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowResetPwdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取裸金属服务器远程登录地址
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServerRemoteConsoleAsync($request)
    {
        return $this->showServerRemoteConsoleAsyncWithHttpInfo($request);
    }
    
    public function showServerRemoteConsoleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/remote_console';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowServerRemoteConsoleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowServerRemoteConsoleRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户配额
     *
     * 查询该租户下，所有资源的配额信息，包括已使用配额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTenantQuotaAsync($request)
    {
        return $this->showTenantQuotaAsyncWithHttpInfo($request);
    }
    
    public function showTenantQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/limits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowTenantQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowTenantQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * Windows裸金属服务器获取密码
     *
     * 获取Windows裸金属服务器初始安装时系统生成的管理员帐户（Administrator帐户或Cloudbase-init设置的帐户）随机密码。如果裸金属服务器是通过私有镜像创建的，请确保已安装Cloudbase-init。公共镜像默认已安装该软件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWindowsBaremetalServerPwdAsync($request)
    {
        return $this->showWindowsBaremetalServerPwdAsyncWithHttpInfo($request);
    }
    
    public function showWindowsBaremetalServerPwdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-server-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowWindowsBaremetalServerPwdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowWindowsBaremetalServerPwdRequest',
            $asyncRequest = true);
    }

    /**
     * 修改裸金属服务器弹性网卡的属性
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBaremetalServerInterfaceAttachmentsAsync($request)
    {
        return $this->updateBaremetalServerInterfaceAttachmentsAsyncWithHttpInfo($request);
    }
    
    public function updateBaremetalServerInterfaceAttachmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/os-interface/{port_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['portId'] !== null) {
            $pathParams['port_id'] = $localVarParams['portId'];
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\UpdateBaremetalServerInterfaceAttachmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\UpdateBaremetalServerInterfaceAttachmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 更新裸金属服务器元数据
     *
     * 更新裸金属服务器元数据。如果元数据中没有待更新字段，则自动添加该字段。如果元数据中已存在待更新字段，则直接更新字段值；如果元数据中的字段不再请求参数中，则保持不变
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBaremetalServerMetadataAsync($request)
    {
        return $this->updateBaremetalServerMetadataAsyncWithHttpInfo($request);
    }
    
    public function updateBaremetalServerMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\UpdateBaremetalServerMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\UpdateBaremetalServerMetadataRequest',
            $asyncRequest = true);
    }

    /**
     * 更新裸金属服务器元数据配置
     *
     * 更新裸金属服务器元数据配置，通过本接口，您可以选择启用或关闭IMDS服务，也可以选择IMDS服务的版本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMetadataOptionsAsync($request)
    {
        return $this->updateMetadataOptionsAsyncWithHttpInfo($request);
    }
    
    public function updateMetadataOptionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/baremetalservers/{server_id}/metadata-options';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\UpdateMetadataOptionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\UpdateMetadataOptionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定API版本信息
     *
     * 查询裸金属服务指定接口版本的信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSpecifiedVersionAsync($request)
    {
        return $this->showSpecifiedVersionAsyncWithHttpInfo($request);
    }
    
    public function showSpecifiedVersionAsyncWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowSpecifiedVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowSpecifiedVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询Job状态
     *
     * 查询Job的执行状态。对于创建裸金属服务器物理机、挂卸卷等异步API，命令下发后，会返回job_id，通过job_id可以查询任务的执行状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobInfosAsync($request)
    {
        return $this->showJobInfosAsyncWithHttpInfo($request);
    }
    
    public function showJobInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bms\V1\Model\ShowJobInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bms\V1\Model\ShowJobInfosRequest',
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