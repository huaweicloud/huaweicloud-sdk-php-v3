<?php

namespace HuaweiCloud\SDK\Ocr\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class OcrAsyncClient extends Client
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
        return new ClientBuilder(new OcrAsyncClient());
    }

    /**
     * 智能分类识别
     * 检测定位图片上指定要识别的票证（票据、证件或其他文字载体），并对其进行结构化识别。接口以列表形式返回图片上要识别票证的位置坐标、结构化识别的内容以及对应的类别。  计费次数说明：  只对识别成功的票证进行计费，识别失败的票证不计费。例如图片中包含三张票证，有两张识别成功，一张识别失败，此时接口计费两次。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeAutoClassificationAsync($request)
    {
        return $this->recognizeAutoClassificationAsyncWithHttpInfo($request);
    }
    
    public function recognizeAutoClassificationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/auto-classification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeAutoClassificationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeAutoClassificationRequest',
            $asyncRequest = true);
    }

    /**
     * 银行卡识别
     * 识别银行卡上的关键文字信息，并返回识别的结构化结果。  说明：  如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeBankcardAsync($request)
    {
        return $this->recognizeBankcardAsyncWithHttpInfo($request);
    }
    
    public function recognizeBankcardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/bankcard';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeBankcardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeBankcardRequest',
            $asyncRequest = true);
    }

    /**
     * 名片识别
     * 识别名片图片上的文字信息，并返回识别的结构化结果。支持对多种不同版式名片进行结构化信息提取。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeBusinessCardAsync($request)
    {
        return $this->recognizeBusinessCardAsyncWithHttpInfo($request);
    }
    
    public function recognizeBusinessCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/business-card';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeBusinessCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeBusinessCardRequest',
            $asyncRequest = true);
    }

    /**
     * 营业执照识别
     * 识别营业执照首页图片中的文字信息，并返回识别的结构化结果。  说明：   如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeBusinessLicenseAsync($request)
    {
        return $this->recognizeBusinessLicenseAsyncWithHttpInfo($request);
    }
    
    public function recognizeBusinessLicenseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/business-license';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeBusinessLicenseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeBusinessLicenseRequest',
            $asyncRequest = true);
    }

    /**
     * 驾驶证识别
     * 识别用户上传的驾驶证图片（或者用户提供的华为云上OBS的驾驶证图片文件的URL）中主页与副页的文字内容，并将识别的结果返回给用户。  说明：   如果图片中包含多张卡证票据，请调用智能分类识别服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeDriverLicenseAsync($request)
    {
        return $this->recognizeDriverLicenseAsyncWithHttpInfo($request);
    }
    
    public function recognizeDriverLicenseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/driver-license';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeDriverLicenseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeDriverLicenseRequest',
            $asyncRequest = true);
    }

    /**
     * 飞机行程单识别
     * 识别飞机行程单中的文字信息，并返回识别的结构化结果。  说明：  如果图片中包含多张卡证票据，请调用智能分类识别服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeFlightItineraryAsync($request)
    {
        return $this->recognizeFlightItineraryAsyncWithHttpInfo($request);
    }
    
    public function recognizeFlightItineraryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/flight-itinerary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeFlightItineraryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeFlightItineraryRequest',
            $asyncRequest = true);
    }

    /**
     * 通用表格识别
     * 识别用于识别用户上传的通用表格图片（或者用户提供的华为云上OBS的通用表格图片文件的URL）中的文字内容，并将识别的结果返回给用户。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeGeneralTableAsync($request)
    {
        return $this->recognizeGeneralTableAsyncWithHttpInfo($request);
    }
    
    public function recognizeGeneralTableAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/general-table';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeGeneralTableResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeGeneralTableRequest',
            $asyncRequest = true);
    }

    /**
     * 通用文字识别
     * 识别图片上的文字信息，返回识别的文字和坐标。支持扫描文件、电子文档、书籍、票据和表单等多种场景的文字识别。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeGeneralTextAsync($request)
    {
        return $this->recognizeGeneralTextAsyncWithHttpInfo($request);
    }
    
    public function recognizeGeneralTextAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/general-text';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeGeneralTextResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeGeneralTextRequest',
            $asyncRequest = true);
    }

    /**
     * 手写文字识别
     * 识别文档中的手写文字信息，并将识别的结构化结果返回给用户。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeHandwritingAsync($request)
    {
        return $this->recognizeHandwritingAsyncWithHttpInfo($request);
    }
    
    public function recognizeHandwritingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/handwriting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeHandwritingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeHandwritingRequest',
            $asyncRequest = true);
    }

    /**
     * 身份证识别
     * 识别身份证图片中的文字内容，并将识别的结果返回给用户。  说明：   身份证识别只支持中国大陆汉族身份证识别。  如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeIdCardAsync($request)
    {
        return $this->recognizeIdCardAsyncWithHttpInfo($request);
    }
    
    public function recognizeIdCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/id-card';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeIdCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeIdCardRequest',
            $asyncRequest = true);
    }

    /**
     * 车牌识别
     * 识别输入图片中的车牌信息，并返回其坐标和内容。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeLicensePlateAsync($request)
    {
        return $this->recognizeLicensePlateAsyncWithHttpInfo($request);
    }
    
    public function recognizeLicensePlateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/license-plate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeLicensePlateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeLicensePlateRequest',
            $asyncRequest = true);
    }

    /**
     * 机动车销售发票识别
     * 识别机动车销售发票图片中的文字内容，并将识别的结果返回给用户。  说明：  该增值税发票仅限于中华人民共和国境内使用的增值税发票。  如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeMvsInvoiceAsync($request)
    {
        return $this->recognizeMvsInvoiceAsyncWithHttpInfo($request);
    }
    
    public function recognizeMvsInvoiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/mvs-invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeMvsInvoiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeMvsInvoiceRequest',
            $asyncRequest = true);
    }

    /**
     * 护照识别
     * 识别用户上传的护照首页图片中的文字信息，并返回识别的结构化结果。当前版本支持中国护照的全字段识别。外国护照支持护照下方两行国际标准化的机读码识别，并可从中提取6-7个关键字段信息。  说明：  如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizePassportAsync($request)
    {
        return $this->recognizePassportAsyncWithHttpInfo($request);
    }
    
    public function recognizePassportAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/passport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizePassportResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizePassportRequest',
            $asyncRequest = true);
    }

    /**
     * 定额发票识别
     * 识别定额发票中的文字信息，并返回识别的结构化结果。  说明：   如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeQuotaInvoiceAsync($request)
    {
        return $this->recognizeQuotaInvoiceAsyncWithHttpInfo($request);
    }
    
    public function recognizeQuotaInvoiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/quota-invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeQuotaInvoiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeQuotaInvoiceRequest',
            $asyncRequest = true);
    }

    /**
     * 出租车发票识别
     * 识别出租车发票中的文字信息，并返回识别的结构化结果。  说明：  如果图片中包含多张卡证票据，请调用智能分类识别服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeTaxiInvoiceAsync($request)
    {
        return $this->recognizeTaxiInvoiceAsyncWithHttpInfo($request);
    }
    
    public function recognizeTaxiInvoiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/taxi-invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTaxiInvoiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTaxiInvoiceRequest',
            $asyncRequest = true);
    }

    /**
     * 车辆通行费发票识别
     * 识别车辆通行费发票中的文字信息，并返回识别的结构化结果。  说明：  如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeTollInvoiceAsync($request)
    {
        return $this->recognizeTollInvoiceAsyncWithHttpInfo($request);
    }
    
    public function recognizeTollInvoiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/toll-invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTollInvoiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTollInvoiceRequest',
            $asyncRequest = true);
    }

    /**
     * 火车票识别
     * 识别火车票中的文字信息，并返回识别的结构化结果。  说明：  如果图片中包含多张卡证票据，请调用[智能分类识别](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product&#x3D;OCR&amp;api&#x3D;AutoClassification)服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeTrainTicketAsync($request)
    {
        return $this->recognizeTrainTicketAsyncWithHttpInfo($request);
    }
    
    public function recognizeTrainTicketAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/train-ticket';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTrainTicketResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTrainTicketRequest',
            $asyncRequest = true);
    }

    /**
     * 道路运输证识别
     * 识别道路运输证首页中的文字信息，并返回识别的结构化结果。  说明： 如果图片中包含多张卡证票据，请调用智能分类识别服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeTransportationLicenseAsync($request)
    {
        return $this->recognizeTransportationLicenseAsyncWithHttpInfo($request);
    }
    
    public function recognizeTransportationLicenseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/transportation-license';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTransportationLicenseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeTransportationLicenseRequest',
            $asyncRequest = true);
    }

    /**
     * 增值税发票识别
     * 识别用户上传的增值税发票图片（或者用户提供的华为云上OBS的增值税发票图片文件的URL）中的文字内容，并将识别的结果返回给用户。  说明：  该增值税发票仅限于中华人民共和国境内使用的增值税发票。  如果图片中包含多张卡证票据，请调用智能分类识别服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeVatInvoiceAsync($request)
    {
        return $this->recognizeVatInvoiceAsyncWithHttpInfo($request);
    }
    
    public function recognizeVatInvoiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/vat-invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeVatInvoiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeVatInvoiceRequest',
            $asyncRequest = true);
    }

    /**
     * 行驶证识别
     * 识别用户上传的行驶证图片（或者用户提供的华为云上OBS的行驶证图片文件的URL）中主页和副页的文字内容，并将识别的结果返回给用户。  说明：  如果图片中包含多张卡证票据，请调用智能分类识别服务。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeVehicleLicenseAsync($request)
    {
        return $this->recognizeVehicleLicenseAsyncWithHttpInfo($request);
    }
    
    public function recognizeVehicleLicenseAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/vehicle-license';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeVehicleLicenseResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeVehicleLicenseRequest',
            $asyncRequest = true);
    }

    /**
     * 网络图片识别
     * 识别网络图片中的文字内容，并返回识别的结构化结果。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeWebImageAsync($request)
    {
        return $this->recognizeWebImageAsyncWithHttpInfo($request);
    }
    
    public function recognizeWebImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/web-image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeWebImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeWebImageRequest',
            $asyncRequest = true);
    }

    /**
     * VIN码识别
     * 识别图片中的车架号信息，并将识别结果返回给用户。
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeVinAsync($request)
    {
        return $this->recognizeVinAsyncWithHttpInfo($request);
    }
    
    public function recognizeVinAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/ocr/vin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeVinResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ocr\V1\Model\RecognizeVinRequest',
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