<?php

namespace HuaweiCloud\SDK\Frs\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class FrsAsyncClient extends Client
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
        return new ClientBuilder(new FrsAsyncClient());
    }

    /**
     * 添加人脸
     * 添加人脸到人脸库中，检测到传入的单张图片中存在多少张人脸，则增加多少张人脸到人脸库当中。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFacesByBase64Async($request)
    {
        return $this->addFacesByBase64AsyncWithHttpInfo($request);
    }
    
    public function addFacesByBase64AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\AddFacesByBase64Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\AddFacesByBase64Request',
            $asyncRequest = true);
    }

    /**
     * 添加人脸
     * 添加人脸到人脸库中，检测到传入的单张图片中存在多少张人脸，则增加多少张人脸到人脸库当中。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFacesByFileAsync($request)
    {
        return $this->addFacesByFileAsyncWithHttpInfo($request);
    }
    
    public function addFacesByFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\AddFacesByFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\AddFacesByFileRequest',
            $asyncRequest = true);
    }

    /**
     * 添加人脸
     * 添加人脸到人脸库中，检测到传入的单张图片中存在多少张人脸，则增加多少张人脸到人脸库当中。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFacesByUrlAsync($request)
    {
        return $this->addFacesByUrlAsyncWithHttpInfo($request);
    }
    
    public function addFacesByUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\AddFacesByUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\AddFacesByUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除人脸
     * 自定义筛选条件，批量删除人脸库中的符合指定条件的多张人脸。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteFacesAsync($request)
    {
        return $this->batchDeleteFacesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteFacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets/{face_set_name}/faces/batch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\BatchDeleteFacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\BatchDeleteFacesRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸比对
     * 人脸比对是将两个人脸进行比对，来判断是否为同一个人，返回比对置信度。如果传入的图片中包含多个人脸，选取最大的人脸进行比对。
     *
     * @param $request 请求对象
     * @return response
     */
    public function compareFaceByBase64Async($request)
    {
        return $this->compareFaceByBase64AsyncWithHttpInfo($request);
    }
    
    public function compareFaceByBase64AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/{project_id}/face-compare';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\CompareFaceByBase64Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\CompareFaceByBase64Request',
            $asyncRequest = true);
    }

    /**
     * 人脸比对
     * 人脸比对是将两个人脸进行比对，来判断是否为同一个人，返回比对置信度。如果传入的图片中包含多个人脸，选取最大的人脸进行比对。
     *
     * @param $request 请求对象
     * @return response
     */
    public function compareFaceByFileAsync($request)
    {
        return $this->compareFaceByFileAsyncWithHttpInfo($request);
    }
    
    public function compareFaceByFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-compare';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
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
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\CompareFaceByFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\CompareFaceByFileRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸比对
     * 人脸比对是将两个人脸进行比对，来判断是否为同一个人，返回比对置信度。如果传入的图片中包含多个人脸，选取最大的人脸进行比对。
     *
     * @param $request 请求对象
     * @return response
     */
    public function compareFaceByUrlAsync($request)
    {
        return $this->compareFaceByUrlAsyncWithHttpInfo($request);
    }
    
    public function compareFaceByUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/{project_id}/face-compare';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\CompareFaceByUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\CompareFaceByUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 创建人脸库
     * 创建用于存储人脸特征的人脸库。您最多可以创建10个人脸库，每个人脸库最大容量为10万个人脸特征。如有更大规格的需求请联系客服。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFaceSetAsync($request)
    {
        return $this->createFaceSetAsyncWithHttpInfo($request);
    }
    
    public function createFaceSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\CreateFaceSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\CreateFaceSetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除人脸
     * 根据external_image_id删除人脸。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFaceByExternalImageIdAsync($request)
    {
        return $this->deleteFaceByExternalImageIdAsyncWithHttpInfo($request);
    }
    
    public function deleteFaceByExternalImageIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['externalImageId'] !== null) {
            $queryParams['external_image_id'] = $localVarParams['externalImageId'];
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\DeleteFaceByExternalImageIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\DeleteFaceByExternalImageIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除人脸
     * 根据face_id删除人脸。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFaceByFaceIdAsync($request)
    {
        return $this->deleteFaceByFaceIdAsyncWithHttpInfo($request);
    }
    
    public function deleteFaceByFaceIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceId'] !== null) {
            $queryParams['face_id'] = $localVarParams['faceId'];
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\DeleteFaceByFaceIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\DeleteFaceByFaceIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除人脸库
     * 删除人脸库以及其中所有的人脸。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFaceSetAsync($request)
    {
        return $this->deleteFaceSetAsyncWithHttpInfo($request);
    }
    
    public function deleteFaceSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets/{face_set_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\DeleteFaceSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\DeleteFaceSetRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸检测
     * 人脸检测是对输入图片进行人脸检测和分析，输出人脸在图像中的位置、人脸关键点位置和人脸关键属性。
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectFaceByBase64Async($request)
    {
        return $this->detectFaceByBase64AsyncWithHttpInfo($request);
    }
    
    public function detectFaceByBase64AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/{project_id}/face-detect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\DetectFaceByBase64Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\DetectFaceByBase64Request',
            $asyncRequest = true);
    }

    /**
     * 人脸检测
     * 人脸检测是对输入图片进行人脸检测和分析，输出人脸在图像中的位置、人脸关键点位置和人脸关键属性。
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectFaceByFileAsync($request)
    {
        return $this->detectFaceByFileAsyncWithHttpInfo($request);
    }
    
    public function detectFaceByFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-detect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
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
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\DetectFaceByFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\DetectFaceByFileRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸检测
     * 人脸检测是对输入图片进行人脸检测和分析，输出人脸在图像中的位置、人脸关键点位置和人脸关键属性。
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectFaceByUrlAsync($request)
    {
        return $this->detectFaceByUrlAsyncWithHttpInfo($request);
    }
    
    public function detectFaceByUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/{project_id}/face-detect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\DetectFaceByUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\DetectFaceByUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸搜索
     * 人脸搜索是指在已有的人脸库中，查询与目标人脸相似的一张或者多张人脸，并返回相应的置信度。 支持传入图片或者faceID进行人脸搜索，如果传入的是多张人脸图片，选取图片中检测到的最大尺寸人脸作为检索的输入。
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchFaceByBase64Async($request)
    {
        return $this->searchFaceByBase64AsyncWithHttpInfo($request);
    }
    
    public function searchFaceByBase64AsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v2/{project_id}/face-sets/{face_set_name}/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByBase64Response',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByBase64Request',
            $asyncRequest = true);
    }

    /**
     * 人脸搜索
     * 人脸搜索是指在已有的人脸库中，查询与目标人脸相似的一张或者多张人脸，并返回相应的置信度。 支持传入图片或者faceID进行人脸搜索，如果传入的是多张人脸图片，选取图片中检测到的最大尺寸人脸作为检索的输入。
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchFaceByFaceIdAsync($request)
    {
        return $this->searchFaceByFaceIdAsyncWithHttpInfo($request);
    }
    
    public function searchFaceByFaceIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2/{project_id}/face-sets/{face_set_name}/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByFaceIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByFaceIdRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸搜索
     * 人脸搜索是指在已有的人脸库中，查询与目标人脸相似的一张或者多张人脸，并返回相应的置信度。 支持传入图片或者faceID进行人脸搜索，如果传入的是多张人脸图片，选取图片中检测到的最大尺寸人脸作为检索的输入。
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchFaceByFileAsync($request)
    {
        return $this->searchFaceByFileAsyncWithHttpInfo($request);
    }
    
    public function searchFaceByFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets/{face_set_name}/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByFileRequest',
            $asyncRequest = true);
    }

    /**
     * 人脸搜索
     * 人脸搜索是指在已有的人脸库中，查询与目标人脸相似的一张或者多张人脸，并返回相应的置信度。 支持传入图片或者faceID进行人脸搜索，如果传入的是多张人脸图片，选取图片中检测到的最大尺寸人脸作为检索的输入。
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchFaceByUrlAsync($request)
    {
        return $this->searchFaceByUrlAsyncWithHttpInfo($request);
    }
    
    public function searchFaceByUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2/{project_id}/face-sets/{face_set_name}/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\SearchFaceByUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 查询所有人脸库
     * 查询当前用户所有人脸库的状态信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAllFaceSetsAsync($request)
    {
        return $this->showAllFaceSetsAsyncWithHttpInfo($request);
    }
    
    public function showAllFaceSetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\ShowAllFaceSetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\ShowAllFaceSetsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询人脸库
     * 查询人脸库当前的状态。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFaceSetAsync($request)
    {
        return $this->showFaceSetAsyncWithHttpInfo($request);
    }
    
    public function showFaceSetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2/{project_id}/face-sets/{face_set_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\ShowFaceSetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\ShowFaceSetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询人脸
     * 查询指定人脸库中人脸信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFacesByFaceIdAsync($request)
    {
        return $this->showFacesByFaceIdAsyncWithHttpInfo($request);
    }
    
    public function showFacesByFaceIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceId'] !== null) {
            $queryParams['face_id'] = $localVarParams['faceId'];
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\ShowFacesByFaceIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\ShowFacesByFaceIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询人脸
     * 查询指定人脸库中人脸信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFacesByLimitAsync($request)
    {
        return $this->showFacesByLimitAsyncWithHttpInfo($request);
    }
    
    public function showFacesByLimitAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\ShowFacesByLimitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\ShowFacesByLimitRequest',
            $asyncRequest = true);
    }

    /**
     * 更新人脸
     * 根据人脸ID（face_id）更新单张人脸信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFaceAsync($request)
    {
        return $this->updateFaceAsyncWithHttpInfo($request);
    }
    
    public function updateFaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/06 /v2/{project_id}/face-sets/{face_set_name}/faces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['faceSetName'] !== null) {
            $pathParams['face_set_name'] = $localVarParams['faceSetName'];
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
            $responseType='\HuaweiCloud\SDK\Frs\V2\Model\UpdateFaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Frs\V2\Model\UpdateFaceRequest',
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