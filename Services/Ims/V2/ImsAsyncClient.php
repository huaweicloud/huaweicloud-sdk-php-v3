<?php

namespace HuaweiCloud\SDK\Ims\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ImsAsyncClient extends Client
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
       $client = new ClientBuilder(new ImsAsyncClient());
       return $client;
    }

    /**
     * 添加镜像标签
     *
     * 该接口用于为指定镜像添加或更新指定的单个标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addImageTagAsync($request)
    {
        return $this->addImageTagAsyncWithHttpInfo($request);
    }
    
    public function addImageTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/images/{image_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\AddImageTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\AddImageTagRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加镜像成员
     *
     * 该接口为扩展接口，主要用于镜像共享时用户将多个镜像共享给多个用户。
     * 该接口为异步接口，返回job_id说明任务下发成功，查询异步任务状态，如果是success说明任务执行成功，如果是failed说明任务执行失败。如何查询异步任务，请参见异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddMembersAsync($request)
    {
        return $this->batchAddMembersAsyncWithHttpInfo($request);
    }
    
    public function batchAddMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\BatchAddMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\BatchAddMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加删除镜像标签
     *
     * 该接口用于为指定镜像批量添加/更新、删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddOrDeleteTagsAsync($request)
    {
        return $this->batchAddOrDeleteTagsAsyncWithHttpInfo($request);
    }
    
    public function batchAddOrDeleteTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/images/{image_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\BatchAddOrDeleteTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\BatchAddOrDeleteTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除镜像成员
     *
     * 该接口为扩展接口，主要用于取消镜像共享。
     * 该接口为异步接口，返回job_id说明任务下发成功，查询异步任务状态，如果是success说明任务执行成功，如果是failed说明任务执行失败。如何查询异步任务，请参见异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteMembersAsync($request)
    {
        return $this->batchDeleteMembersAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\BatchDeleteMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\BatchDeleteMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量更新镜像成员状态
     *
     * 该接口为扩展接口，主要用于用户接受或者拒绝多个共享镜像时批量更新镜像成员的状态。
     * 该接口为异步接口，返回job_id说明任务下发成功，查询异步任务状态，如果是success说明任务执行成功，如果是failed说明任务执行失败。如何查询异步任务，请参见异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateMembersAsync($request)
    {
        return $this->batchUpdateMembersAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\BatchUpdateMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\BatchUpdateMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 跨Region复制镜像
     *
     * 该接口为扩展接口，用户在一个区域制作的私有镜像，可以通过跨Region复制镜像将镜像复制到其他区域，在其他区域发放相同类型的云服务器，帮助用户实现区域间的业务迁移。
     * 该接口为异步接口，返回job_id说明任务下发成功，查询异步任务状态，如果是success说明任务执行成功，如果是failed说明任务执行失败。
     * 如何查询异步任务，请参见异步任务进度查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyImageCrossRegionAsync($request)
    {
        return $this->copyImageCrossRegionAsyncWithHttpInfo($request);
    }
    
    public function copyImageCrossRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/{image_id}/cross_region_copy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\CopyImageCrossRegionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\CopyImageCrossRegionRequest',
            $asyncRequest = true);
    }

    /**
     * Region内复制镜像
     *
     * 该接口为扩展接口，主要用于用户将一个已有镜像复制为另一个镜像。复制镜像时，可以更改镜像的加密等属性，以满足不同的场景。
     * 该接口为异步接口，返回job_id说明任务下发成功，查询异步任务状态，如果是success说明任务执行成功，如果是failed说明任务执行失败。如何查询异步任务，请参见异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyImageInRegionAsync($request)
    {
        return $this->copyImageInRegionAsyncWithHttpInfo($request);
    }
    
    public function copyImageInRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/{image_id}/copy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\CopyImageInRegionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\CopyImageInRegionRequest',
            $asyncRequest = true);
    }

    /**
     * 使用外部镜像文件制作数据镜像
     *
     * 使用上传至OBS桶中的外部数据卷镜像文件制作数据镜像。作为异步接口，调用成功，只是说明后台收到了制作请求，镜像是否制作成功需要通过异步任务查询接口查询该任务的执行状态。具体请参考异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDataImageAsync($request)
    {
        return $this->createDataImageAsyncWithHttpInfo($request);
    }
    
    public function createDataImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/dataimages/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\CreateDataImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\CreateDataImageRequest',
            $asyncRequest = true);
    }

    /**
     * 制作镜像
     *
     * 本接口用于制作私有镜像，支持：
     * - 使用云服务器制作私有镜像。
     * - 使用上传至OBS桶中的外部镜像文件制作私有镜像。
     * - 使用数据卷制作系统盘镜像。
     * 
     * 作为异步接口，调用成功，只是说明云平台收到了制作请求，镜像是否制作成功需要通过异步任务查询接口查询该任务的执行状态，具体请参考异步任务查询。
     * 
     * 不同场景必选参数说明：
     * 
     * - 使用云服务器制作镜像时的请求的必选参数：name,instance_id。
     * - 使用上传至OBS桶中的外部镜像文件时的请求必选参数：name,image_url,min_disk。
     * - 使用数据卷制作系统盘镜像时的请求必选参数：name,volume_id,os_version
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createImageAsync($request)
    {
        return $this->createImageAsyncWithHttpInfo($request);
    }
    
    public function createImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/cloudimages/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\CreateImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\CreateImageRequest',
            $asyncRequest = true);
    }

    /**
     * 增加或修改标签
     *
     * 该接口主要用于为某个镜像增加或修改一个自定义标签。通过自定义标签，用户可以将镜像进行分类。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrUpdateTagsAsync($request)
    {
        return $this->createOrUpdateTagsAsyncWithHttpInfo($request);
    }
    
    public function createOrUpdateTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\CreateOrUpdateTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\CreateOrUpdateTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 制作整机镜像
     *
     * 使用云服务器或者云服务器备份制作整机镜像。作为异步接口，调用成功，只是说明后台收到了制作整机镜像的请求，镜像是否制作成功需要通过异步任务查询接口查询该任务的执行状态，具体请参考异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWholeImageAsync($request)
    {
        return $this->createWholeImageAsyncWithHttpInfo($request);
    }
    
    public function createWholeImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/wholeimages/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\CreateWholeImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\CreateWholeImageRequest',
            $asyncRequest = true);
    }

    /**
     * 删除镜像标签
     *
     * 该接口用于为镜像删除指定的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteImageTagAsync($request)
    {
        return $this->deleteImageTagAsyncWithHttpInfo($request);
    }
    
    public function deleteImageTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/images/{image_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\DeleteImageTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\DeleteImageTagRequest',
            $asyncRequest = true);
    }

    /**
     * 导出镜像
     *
     * 该接口为扩展接口，用于用户将自己的私有镜像导出到指定的OBS桶中。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportImageAsync($request)
    {
        return $this->exportImageAsyncWithHttpInfo($request);
    }
    
    public function exportImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/{image_id}/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ExportImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ExportImageRequest',
            $asyncRequest = true);
    }

    /**
     * 镜像文件快速导入
     *
     * 使用上传至OBS桶中的超大外部镜像文件制作私有镜像，目前仅支持RAW或ZVHD2格式镜像文件。且要求镜像文件大小不能超过1TB。
     * 由于快速导入功能要求提前转换镜像文件格式为RAW或ZVHD2格式，因此镜像文件小于128GB时推荐您优先使用常规的创建私有镜像的方式。
     * 作为异步接口，调用成功，只是说明后台收到了制作请求，镜像是否制作成功需要通过异步任务查询接口查询该任务的执行状态，具体请参考异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importImageQuickAsync($request)
    {
        return $this->importImageQuickAsyncWithHttpInfo($request);
    }
    
    public function importImageQuickAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/cloudimages/quickimport/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ImportImageQuickResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ImportImageQuickRequest',
            $asyncRequest = true);
    }

    /**
     * 按标签查询镜像
     *
     * 该接口用于按标签或其他条件对镜像进行过滤或者计数使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageByTagsAsync($request)
    {
        return $this->listImageByTagsAsyncWithHttpInfo($request);
    }
    
    public function listImageByTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/images/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListImageByTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListImageByTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像标签
     *
     * 该接口用于为查询指定镜像上的所有标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageTagsAsync($request)
    {
        return $this->listImageTagsAsyncWithHttpInfo($request);
    }
    
    public function listImageTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/images/{image_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListImageTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListImageTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像列表
     *
     * 根据不同条件查询镜像列表信息。
     * 可以在URI后面用‘?’和‘&amp;’添加不同的查询条件组合，请参考请求样例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImagesAsync($request)
    {
        return $this->listImagesAsyncWithHttpInfo($request);
    }
    
    public function listImagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/cloudimages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imagetype'] !== null) {
            $queryParams['__imagetype'] = $localVarParams['imagetype'];
        }
        if ($localVarParams['isregistered'] !== null) {
            $queryParams['__isregistered'] = $localVarParams['isregistered'];
        }
        if ($localVarParams['osBit'] !== null) {
            $queryParams['__os_bit'] = $localVarParams['osBit'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['__os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['platform'] !== null) {
            $queryParams['__platform'] = $localVarParams['platform'];
        }
        if ($localVarParams['supportDiskintensive'] !== null) {
            $queryParams['__support_diskintensive'] = $localVarParams['supportDiskintensive'];
        }
        if ($localVarParams['supportHighperformance'] !== null) {
            $queryParams['__support_highperformance'] = $localVarParams['supportHighperformance'];
        }
        if ($localVarParams['supportKvm'] !== null) {
            $queryParams['__support_kvm'] = $localVarParams['supportKvm'];
        }
        if ($localVarParams['supportKvmGpuType'] !== null) {
            $queryParams['__support_kvm_gpu_type'] = $localVarParams['supportKvmGpuType'];
        }
        if ($localVarParams['supportKvmInfiniband'] !== null) {
            $queryParams['__support_kvm_infiniband'] = $localVarParams['supportKvmInfiniband'];
        }
        if ($localVarParams['supportLargememory'] !== null) {
            $queryParams['__support_largememory'] = $localVarParams['supportLargememory'];
        }
        if ($localVarParams['supportXen'] !== null) {
            $queryParams['__support_xen'] = $localVarParams['supportXen'];
        }
        if ($localVarParams['supportXenGpuType'] !== null) {
            $queryParams['__support_xen_gpu_type'] = $localVarParams['supportXenGpuType'];
        }
        if ($localVarParams['supportXenHana'] !== null) {
            $queryParams['__support_xen_hana'] = $localVarParams['supportXenHana'];
        }
        if ($localVarParams['containerFormat'] !== null) {
            $queryParams['container_format'] = $localVarParams['containerFormat'];
        }
        if ($localVarParams['diskFormat'] !== null) {
            $queryParams['disk_format'] = $localVarParams['diskFormat'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['memberStatus'] !== null) {
            $queryParams['member_status'] = $localVarParams['memberStatus'];
        }
        if ($localVarParams['minDisk'] !== null) {
            $queryParams['min_disk'] = $localVarParams['minDisk'];
        }
        if ($localVarParams['minRam'] !== null) {
            $queryParams['min_ram'] = $localVarParams['minRam'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['protected'] !== null) {
            $queryParams['protected'] = $localVarParams['protected'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['virtualEnvType'] !== null) {
            $queryParams['virtual_env_type'] = $localVarParams['virtualEnvType'];
        }
        if ($localVarParams['visibility'] !== null) {
            $queryParams['visibility'] = $localVarParams['visibility'];
        }
        if ($localVarParams['flavorId'] !== null) {
            $queryParams['flavor_id'] = $localVarParams['flavorId'];
        }
        if ($localVarParams['createdAt'] !== null) {
            $queryParams['created_at'] = $localVarParams['createdAt'];
        }
        if ($localVarParams['updatedAt'] !== null) {
            $queryParams['updated_at'] = $localVarParams['updatedAt'];
        }
        if ($localVarParams['architecture'] !== null) {
            $queryParams['architecture'] = $localVarParams['architecture'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListImagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListImagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询租户所有镜像标签
     *
     * 该接口用于为查询租户的所有镜像上的标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImagesTagsAsync($request)
    {
        return $this->listImagesTagsAsyncWithHttpInfo($request);
    }
    
    public function listImagesTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/images/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListImagesTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListImagesTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像支持的OS列表
     *
     * 查询当前区域弹性云服务器的OS兼容性列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOsVersionsAsync($request)
    {
        return $this->listOsVersionsAsyncWithHttpInfo($request);
    }
    
    public function listOsVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/os_version';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListOsVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListOsVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 按条件查询租户镜像标签列表
     *
     * 根据不同条件查询镜像标签列表信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagsAsync($request)
    {
        return $this->listTagsAsyncWithHttpInfo($request);
    }
    
    public function listTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['imagetype'] !== null) {
            $queryParams['__imagetype'] = $localVarParams['imagetype'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['minDisk'] !== null) {
            $queryParams['min_disk'] = $localVarParams['minDisk'];
        }
        if ($localVarParams['platform'] !== null) {
            $queryParams['__platform'] = $localVarParams['platform'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['__os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['memberStatus'] !== null) {
            $queryParams['member_status'] = $localVarParams['memberStatus'];
        }
        if ($localVarParams['virtualEnvType'] !== null) {
            $queryParams['virtual_env_type'] = $localVarParams['virtualEnvType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['architecture'] !== null) {
            $queryParams['architecture'] = $localVarParams['architecture'];
        }
        if ($localVarParams['createdAt'] !== null) {
            $queryParams['created_at'] = $localVarParams['createdAt'];
        }
        if ($localVarParams['updatedAt'] !== null) {
            $queryParams['updated_at'] = $localVarParams['updatedAt'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 注册镜像
     *
     * 该接口用于将镜像文件注册为云平台未初始化的私有镜像。
     * 使用该接口注册镜像的具体步骤如下：
     * 将镜像文件上传到OBS个人桶中。具体操作请参见《对象存储服务客户端指南（OBS Browser）》或《对象存储服务API参考》。
     * 使用创建镜像元数据接口创建镜像元数据。调用成功后，保存该镜像的ID。创建镜像元数据请参考创建镜像元数据（OpenStack原生）。
     * 根据2得到的镜像ID，使用注册镜像接口注册OBS桶中的镜像文件。
     * 注册镜像接口作为异步接口，调用成功后，说明后台收到了注册请求。需要根据镜像ID查询该镜像状态验证镜像注册是否成功。当镜像状态变为“active”时，表示镜像注册成功。
     * 如何查询异步任务，请参见异步任务查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerImageAsync($request)
    {
        return $this->registerImageAsyncWithHttpInfo($request);
    }
    
    public function registerImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/{image_id}/upload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\RegisterImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\RegisterImageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像配额
     *
     * 该接口为扩展接口，主要用于查询租户在当前Region的私有镜像的配额数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImageQuotaAsync($request)
    {
        return $this->showImageQuotaAsyncWithHttpInfo($request);
    }
    
    public function showImageQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ShowImageQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ShowImageQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 异步任务查询
     *
     * 该接口为扩展接口，主要用于查询异步接口执行情况，比如查询导出镜像任务的执行状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobAsync($request)
    {
        return $this->showJobAsyncWithHttpInfo($request);
    }
    
    public function showJobAsyncWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ShowJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ShowJobRequest',
            $asyncRequest = true);
    }

    /**
     * 异步任务进度查询
     *
     * 该接口为扩展接口，主要用于查询异步任务进度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobProgressAsync($request)
    {
        return $this->showJobProgressAsyncWithHttpInfo($request);
    }
    
    public function showJobProgressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/cloudimages/job/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ShowJobProgressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ShowJobProgressRequest',
            $asyncRequest = true);
    }

    /**
     * 更新镜像信息
     *
     * 更新镜像信息接口，主要用于镜像属性的修改。当前仅支持可用（active）状态的镜像更新相关信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateImageAsync($request)
    {
        return $this->updateImageAsyncWithHttpInfo($request);
    }
    
    public function updateImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/cloudimages/{image_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\UpdateImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\UpdateImageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询版本列表（OpenStack原生）
     *
     * 查询API的版本信息列表，包括API的版本兼容性、域名信息等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVersionsAsync($request)
    {
        return $this->listVersionsAsyncWithHttpInfo($request);
    }
    
    public function listVersionsAsyncWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ListVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ListVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询版本列表（OpenStack原生）
     *
     * 查询API的版本信息列表，包括API的版本兼容性、域名信息等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVersionAsync($request)
    {
        return $this->showVersionAsyncWithHttpInfo($request);
    }
    
    public function showVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\ShowVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\ShowVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 添加镜像成员（OpenStack原生）
     *
     * 用户共享镜像给其他用户时，使用该接口向该镜像成员中添加接受镜像用户的项目ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceAddImageMemberAsync($request)
    {
        return $this->glanceAddImageMemberAsyncWithHttpInfo($request);
    }
    
    public function glanceAddImageMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceAddImageMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceAddImageMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 创建镜像元数据（OpenStack原生）
     *
     * 创建镜像元数据。调用创建镜像元数据接口成功后，只是创建了镜像的元数据，镜像对应的实际镜像文件并不存在
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceCreateImageMetadataAsync($request)
    {
        return $this->glanceCreateImageMetadataAsyncWithHttpInfo($request);
    }
    
    public function glanceCreateImageMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceCreateImageMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceCreateImageMetadataRequest',
            $asyncRequest = true);
    }

    /**
     * 增加标签（OpenStack原生）
     *
     * 该接口主要用于为某个镜像添加一个自定义标签。通过自定义标签，用户可以将镜像进行分类。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceCreateTagAsync($request)
    {
        return $this->glanceCreateTagAsyncWithHttpInfo($request);
    }
    
    public function glanceCreateTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/tags/{tag}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceCreateTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceCreateTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除镜像（OpenStack原生）
     *
     * 该接口主要用于删除镜像，用户可以通过该接口将自己的私有镜像删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceDeleteImageAsync($request)
    {
        return $this->glanceDeleteImageAsyncWithHttpInfo($request);
    }
    
    public function glanceDeleteImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceDeleteImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceDeleteImageRequest',
            $asyncRequest = true);
    }

    /**
     * 删除指定的镜像成员（OpenStack原生）
     *
     * 该接口用于取消对某个用户的镜像共享。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceDeleteImageMemberAsync($request)
    {
        return $this->glanceDeleteImageMemberAsyncWithHttpInfo($request);
    }
    
    public function glanceDeleteImageMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceDeleteImageMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceDeleteImageMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 删除标签（OpenStack原生）
     *
     * 该接口主要用于删除某个镜像的自定义标签，通过该接口，用户可以将私有镜像中一些不用的标签删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceDeleteTagAsync($request)
    {
        return $this->glanceDeleteTagAsyncWithHttpInfo($request);
    }
    
    public function glanceDeleteTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/tags/{tag}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceDeleteTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceDeleteTagRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像成员列表视图（OpenStack原生）
     *
     * 该接口主要用于查询镜像成员列表视图，通过视图，用户可以了解到镜像成员包含哪些属性，同时也可以了解每个属性的数据类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceListImageMemberSchemasAsync($request)
    {
        return $this->glanceListImageMemberSchemasAsyncWithHttpInfo($request);
    }
    
    public function glanceListImageMemberSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/schemas/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImageMemberSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImageMemberSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像成员列表（OpenStack原生）
     *
     * 该接口用于共享镜像过程中，获取接受该镜像的成员列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceListImageMembersAsync($request)
    {
        return $this->glanceListImageMembersAsyncWithHttpInfo($request);
    }
    
    public function glanceListImageMembersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImageMembersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImageMembersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像列表视图（OpenStack原生）
     *
     * 该接口主要用于查询镜像列表视图，通过该接口用户可以了解到镜像列表的详细情况和数据结构。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceListImageSchemasAsync($request)
    {
        return $this->glanceListImageSchemasAsyncWithHttpInfo($request);
    }
    
    public function glanceListImageSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/schemas/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImageSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImageSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像列表（OpenStack原生）
     *
     * 获取镜像列表。
     * 使用本接口查询镜像列表时，需要使用分页查询才能返回全部的镜像列表。
     * 分页说明
     * 分页是指返回一组镜像的一个子集，在返回的时候会存在下个子集的链接和首个子集的链接，默认返回的子集中数量为25，用户也可以通过使用limit和marker两个参数自己分页，指定返回子集中需要返回的数量。
     * 响应中的参数first是查询首页的URL。next是查询下一页的URL。当查询镜像列表最后一页时，不存在next。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceListImagesAsync($request)
    {
        return $this->glanceListImagesAsyncWithHttpInfo($request);
    }
    
    public function glanceListImagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imagetype'] !== null) {
            $queryParams['__imagetype'] = $localVarParams['imagetype'];
        }
        if ($localVarParams['isregistered'] !== null) {
            $queryParams['__isregistered'] = $localVarParams['isregistered'];
        }
        if ($localVarParams['osBit'] !== null) {
            $queryParams['__os_bit'] = $localVarParams['osBit'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['__os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['platform'] !== null) {
            $queryParams['__platform'] = $localVarParams['platform'];
        }
        if ($localVarParams['supportDiskintensive'] !== null) {
            $queryParams['__support_diskintensive'] = $localVarParams['supportDiskintensive'];
        }
        if ($localVarParams['supportHighperformance'] !== null) {
            $queryParams['__support_highperformance'] = $localVarParams['supportHighperformance'];
        }
        if ($localVarParams['supportKvm'] !== null) {
            $queryParams['__support_kvm'] = $localVarParams['supportKvm'];
        }
        if ($localVarParams['supportKvmGpuType'] !== null) {
            $queryParams['__support_kvm_gpu_type'] = $localVarParams['supportKvmGpuType'];
        }
        if ($localVarParams['supportKvmInfiniband'] !== null) {
            $queryParams['__support_kvm_infiniband'] = $localVarParams['supportKvmInfiniband'];
        }
        if ($localVarParams['supportLargememory'] !== null) {
            $queryParams['__support_largememory'] = $localVarParams['supportLargememory'];
        }
        if ($localVarParams['supportXen'] !== null) {
            $queryParams['__support_xen'] = $localVarParams['supportXen'];
        }
        if ($localVarParams['supportXenGpuType'] !== null) {
            $queryParams['__support_xen_gpu_type'] = $localVarParams['supportXenGpuType'];
        }
        if ($localVarParams['supportXenHana'] !== null) {
            $queryParams['__support_xen_hana'] = $localVarParams['supportXenHana'];
        }
        if ($localVarParams['containerFormat'] !== null) {
            $queryParams['container_format'] = $localVarParams['containerFormat'];
        }
        if ($localVarParams['diskFormat'] !== null) {
            $queryParams['disk_format'] = $localVarParams['diskFormat'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['memberStatus'] !== null) {
            $queryParams['member_status'] = $localVarParams['memberStatus'];
        }
        if ($localVarParams['minDisk'] !== null) {
            $queryParams['min_disk'] = $localVarParams['minDisk'];
        }
        if ($localVarParams['minRam'] !== null) {
            $queryParams['min_ram'] = $localVarParams['minRam'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['protected'] !== null) {
            $queryParams['protected'] = $localVarParams['protected'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['visibility'] !== null) {
            $queryParams['visibility'] = $localVarParams['visibility'];
        }
        if ($localVarParams['createdAt'] !== null) {
            $queryParams['created_at'] = $localVarParams['createdAt'];
        }
        if ($localVarParams['updatedAt'] !== null) {
            $queryParams['updated_at'] = $localVarParams['updatedAt'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceListImagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像详情（OpenStack原生）
     *
     * 查询单个镜像详情，用户可以通过该接口查询单个私有或者公共镜像的详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceShowImageAsync($request)
    {
        return $this->glanceShowImageAsyncWithHttpInfo($request);
    }
    
    public function glanceShowImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageRequest',
            $asyncRequest = true);
    }

    /**
     * 获取镜像成员详情（OpenStack原生）
     *
     * 该接口主要用于镜像共享中查询某个镜像成员的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceShowImageMemberAsync($request)
    {
        return $this->glanceShowImageMemberAsyncWithHttpInfo($request);
    }
    
    public function glanceShowImageMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageMemberRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像成员视图（OpenStack原生）
     *
     * 该接口主要用于查询镜像成员视图，通过视图，用户可以了解到镜像成员包含哪些属性，同时也可以了解每个属性的数据类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceShowImageMemberSchemasAsync($request)
    {
        return $this->glanceShowImageMemberSchemasAsyncWithHttpInfo($request);
    }
    
    public function glanceShowImageMemberSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/schemas/member';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageMemberSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageMemberSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询镜像视图（OpenStack原生）
     *
     * 该接口主要用于查询镜像视图，通过视图，用户可以了解到镜像包含哪些属性，同时也可以了解每个属性的数据类型等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceShowImageSchemasAsync($request)
    {
        return $this->glanceShowImageSchemasAsyncWithHttpInfo($request);
    }
    
    public function glanceShowImageSchemasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/schemas/image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageSchemasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceShowImageSchemasRequest',
            $asyncRequest = true);
    }

    /**
     * 更新镜像信息（OpenStack原生）
     *
     * 修改镜像信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceUpdateImageAsync($request)
    {
        return $this->glanceUpdateImageAsyncWithHttpInfo($request);
    }
    
    public function glanceUpdateImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/openstack-images-v2.1-json-patch', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/openstack-images-v2.1-json-patch', 'application/json'],
                ['application/openstack-images-v2.1-json-patch']
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceUpdateImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceUpdateImageRequest',
            $asyncRequest = true);
    }

    /**
     * 更新镜像成员状态（OpenStack原生）
     *
     * 用户接受或者拒绝共享镜像时，使用该接口更新镜像成员的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function glanceUpdateImageMemberAsync($request)
    {
        return $this->glanceUpdateImageMemberAsyncWithHttpInfo($request);
    }
    
    public function glanceUpdateImageMemberAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/images/{image_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
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
            $responseType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceUpdateImageMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ims\V2\Model\GlanceUpdateImageMemberRequest',
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