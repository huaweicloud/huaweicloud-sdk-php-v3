<?php

namespace HuaweiCloud\SDK\Ivs\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IvsAsyncClient extends Client
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
        return new ClientBuilder(new IvsAsyncClient());
    }

    /**
     * 人证核身证件版（二要素）
     *
     * 使用姓名、身份证号码二要素进行身份审核。身份验证时，传入的数据为身份证信息。提取身份证信息时，可以使用身份证正反面图片，也可以直接输入姓名、身份证号文本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectExtentionByIdCardImageAsync($request)
    {
        return $this->detectExtentionByIdCardImageAsyncWithHttpInfo($request);
    }
    
    public function detectExtentionByIdCardImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.0/ivs-idcard-extention';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectExtentionByIdCardImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectExtentionByIdCardImageRequest',
            $asyncRequest = true);
    }

    /**
     * 人证核身证件版（二要素）
     *
     * 使用姓名、身份证号码二要素进行身份审核。身份验证时，传入的数据为身份证信息。提取身份证信息时，可以使用身份证正反面图片，也可以直接输入姓名、身份证号文本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectExtentionByNameAndIdAsync($request)
    {
        return $this->detectExtentionByNameAndIdAsyncWithHttpInfo($request);
    }
    
    public function detectExtentionByNameAndIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.0/ivs-idcard-extention';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectExtentionByNameAndIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectExtentionByNameAndIdRequest',
            $asyncRequest = true);
    }

    /**
     * 人证核身标准版（三要素）
     *
     * 使用姓名、身份证号码、人脸图片三要素进行身份审核。
     * 身份验证时，传入的数据为人脸图片、身份证信息。提取身份证信息时，可以使用身份证正反面图片，也可以直接输入姓名、身份证号文本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectStandardByIdCardImageAsync($request)
    {
        return $this->detectStandardByIdCardImageAsyncWithHttpInfo($request);
    }
    
    public function detectStandardByIdCardImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v2.0/ivs-standard';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectStandardByIdCardImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectStandardByIdCardImageRequest',
            $asyncRequest = true);
    }

    /**
     * 人证核身标准版（三要素）
     *
     * 校验用户上传的身份证图片支持正反面同时上传 中的信息的真实性，输出最终的审核结果。 该接口也支持用户直接上传姓名和身份证号码进行合法性校验 。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detectStandardByNameAndIdAsync($request)
    {
        return $this->detectStandardByNameAndIdAsyncWithHttpInfo($request);
    }
    
    public function detectStandardByNameAndIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v2.0/ivs-standard';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectStandardByNameAndIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ivs\V2\Model\DetectStandardByNameAndIdRequest',
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