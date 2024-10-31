<?php

namespace HuaweiCloud\SDK\Vod\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class VodClient extends Client
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
        $client = new ClientBuilder(new VodClient());
        return $client;
    }


    /**
     * 取消媒资转码任务
     *
     * 取消媒资转码任务，只能取消排队中的转码任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelAssetTranscodeTask($request)
    {
        return $this->cancelAssetTranscodeTaskWithHttpInfo($request);
    }

    public function cancelAssetTranscodeTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/process';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CancelAssetTranscodeTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CancelAssetTranscodeTaskRequest');
    }

    /**
     * 取消提取音频任务
     *
     * 取消提取音频任务，只有排队中的提取音频任务才可以取消。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelExtractAudioTask($request)
    {
        return $this->cancelExtractAudioTaskWithHttpInfo($request);
    }

    public function cancelExtractAudioTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/extract_audio';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CancelExtractAudioTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CancelExtractAudioTaskRequest');
    }

    /**
     * 上传检验
     *
     * 校验媒资文件是否已存储于视频点播服务中。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkMd5Duplication($request)
    {
        return $this->checkMd5DuplicationWithHttpInfo($request);
    }

    public function checkMd5DuplicationWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/duplication';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['md5'] !== null) {
            $queryParams['md5'] = $localVarParams['md5'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CheckMd5DuplicationResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CheckMd5DuplicationRequest');
    }

    /**
     * 确认媒资上传
     *
     * 媒资分段上传完成后，需要调用此接口通知点播服务媒资上传的状态，表示媒资上传创建完成。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmAssetUpload($request)
    {
        return $this->confirmAssetUploadWithHttpInfo($request);
    }

    public function confirmAssetUploadWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/status/uploaded';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ConfirmAssetUploadResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ConfirmAssetUploadRequest');
    }

    /**
     * 确认水印图片上传
     *
     * 确认水印图片上传状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmImageUpload($request)
    {
        return $this->confirmImageUploadWithHttpInfo($request);
    }

    public function confirmImageUploadWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/watermark/status/uploaded';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ConfirmImageUploadResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ConfirmImageUploadRequest');
    }

    /**
     * 创建媒资：上传方式
     *
     * 调用该接口创建媒资时，需要将对应的媒资文件上传到点播服务的OBS桶中。
     * 
     * 若上传的单媒资文件大小小于20M，则可以直接用PUT方法对该接口返回的地址进行上传。具体使用方法请参考[示例1：媒资上传（20M以下）](https://support.huaweicloud.com/api-vod/vod_04_0195.html)。
     * 
     * 若上传的单个媒资大小大于20M，则需要进行二进制流分割后上传，该接口的具体使用方法请参考[示例2：媒资分段上传（20M以上）](https://support.huaweicloud.com/api-vod/vod_04_0216.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAssetByFileUpload($request)
    {
        return $this->createAssetByFileUploadWithHttpInfo($request);
    }

    public function createAssetByFileUploadWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetByFileUploadResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetByFileUploadRequest');
    }

    /**
     * 创建媒资分类
     *
     * 创建媒资分类。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAssetCategory($request)
    {
        return $this->createAssetCategoryWithHttpInfo($request);
    }

    public function createAssetCategoryWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/category';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetCategoryResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetCategoryRequest');
    }

    /**
     * 媒资处理
     *
     * 实现视频转码、截图、加密等处理。既可以同时启动多种操作，也可以只启动一种操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAssetProcessTask($request)
    {
        return $this->createAssetProcessTaskWithHttpInfo($request);
    }

    public function createAssetProcessTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/process';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetProcessTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetProcessTaskRequest');
    }

    /**
     * 创建审核媒资任务
     *
     * 对上传的媒资进行审核。审核后，可以调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口查看审核结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAssetReviewTask($request)
    {
        return $this->createAssetReviewTaskWithHttpInfo($request);
    }

    public function createAssetReviewTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/review';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetReviewTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateAssetReviewTaskRequest');
    }

    /**
     * 音频提取
     *
     * 本接口为异步接口，创建音频提取任务下发成功后会返回asset_id和提取的audio_asset_id，但此时音频提取任务并没有立即完成，可通过消息订阅界面配置的音频提取完成事件来获取音频提取任务完成与否。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createExtractAudioTask($request)
    {
        return $this->createExtractAudioTaskWithHttpInfo($request);
    }

    public function createExtractAudioTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/extract_audio';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateExtractAudioTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateExtractAudioTaskRequest');
    }

    /**
     * CDN预热
     *
     * 媒资发布后，可通过指定媒资ID或URL向CDN预热。用户初次请求时，将由CDN节点提供请求媒资，加快用户下载缓存时间，提高用户体验。单租户每天最多预热1000个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPreheatingAsset($request)
    {
        return $this->createPreheatingAssetWithHttpInfo($request);
    }

    public function createPreheatingAssetWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/preheating';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreatePreheatingAssetResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreatePreheatingAssetRequest');
    }

    /**
     * 创建媒资：OBS托管方式
     *
     * 通过存量托管的方式，将已存储在OBS桶中的音视频文件同步到点播服务。
     * 
     * OBS托管方式分为增量托管和存量托管，增量托管暂只支持通过视频点播控制台配置，配置后，若OBS有新增音视频文件，则会自动同步到点播服务中，具体请参见[增量托管](https://support.huaweicloud.com/usermanual-vod/vod010032.html)。两个托管方式都需要先将对应的OBS桶授权给点播服务，具体请参见[桶授权](https://support.huaweicloud.com/usermanual-vod/vod010031.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTakeOverTask($request)
    {
        return $this->createTakeOverTaskWithHttpInfo($request);
    }

    public function createTakeOverTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/obs/host/stock/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTakeOverTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTakeOverTaskRequest');
    }

    /**
     * 创建自定义转码模板组
     *
     * 创建自定义转码模板组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTemplateGroup($request)
    {
        return $this->createTemplateGroupWithHttpInfo($request);
    }

    public function createTemplateGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template_group/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTemplateGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTemplateGroupRequest');
    }

    /**
     * 创建转码模板组集合
     *
     * 创建转码模板组集合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTemplateGroupCollection($request)
    {
        return $this->createTemplateGroupCollectionWithHttpInfo($request);
    }

    public function createTemplateGroupCollectionWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template-collection/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTemplateGroupCollectionResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTemplateGroupCollectionRequest');
    }

    /**
     * 创建自定义转码模板
     *
     * 创建自定义转码模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTranscodeTemplate($request)
    {
        return $this->createTranscodeTemplateWithHttpInfo($request);
    }

    public function createTranscodeTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/asset/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTranscodeTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateTranscodeTemplateRequest');
    }

    /**
     * 创建水印模板
     *
     * 创建水印模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWatermarkTemplate($request)
    {
        return $this->createWatermarkTemplateWithHttpInfo($request);
    }

    public function createWatermarkTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/template/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\CreateWatermarkTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\CreateWatermarkTemplateRequest');
    }

    /**
     * 删除媒资分类
     *
     * 删除媒资分类。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAssetCategory($request)
    {
        return $this->deleteAssetCategoryWithHttpInfo($request);
    }

    public function deleteAssetCategoryWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/category';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteAssetCategoryResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteAssetCategoryRequest');
    }

    /**
     * 删除媒资
     *
     * 删除媒资。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAssets($request)
    {
        return $this->deleteAssetsWithHttpInfo($request);
    }

    public function deleteAssetsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['deleteType'] !== null) {
            $queryParams['delete_type'] = $localVarParams['deleteType'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteAssetsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteAssetsRequest');
    }

    /**
     * 删除自定义转码模板组
     *
     * 删除自定义转码模板组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplateGroup($request)
    {
        return $this->deleteTemplateGroupWithHttpInfo($request);
    }

    public function deleteTemplateGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template_group/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTemplateGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTemplateGroupRequest');
    }

    /**
     * 删除转码模板组集合
     *
     * 删除转码模板组集合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplateGroupCollection($request)
    {
        return $this->deleteTemplateGroupCollectionWithHttpInfo($request);
    }

    public function deleteTemplateGroupCollectionWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template-collection/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupCollectionId'] !== null) {
            $queryParams['group_collection_id'] = $localVarParams['groupCollectionId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTemplateGroupCollectionResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTemplateGroupCollectionRequest');
    }

    /**
     * 删除转码产物
     *
     * 删除转码产物。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTranscodeProduct($request)
    {
        return $this->deleteTranscodeProductWithHttpInfo($request);
    }

    public function deleteTranscodeProductWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/transcode-product';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTranscodeProductResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTranscodeProductRequest');
    }

    /**
     * 删除自定义模板
     *
     * 删除自定义模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTranscodeTemplate($request)
    {
        return $this->deleteTranscodeTemplateWithHttpInfo($request);
    }

    public function deleteTranscodeTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/asset/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTranscodeTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteTranscodeTemplateRequest');
    }

    /**
     * 删除水印模板
     *
     * 删除水印模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWatermarkTemplate($request)
    {
        return $this->deleteWatermarkTemplateWithHttpInfo($request);
    }

    public function deleteWatermarkTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/template/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteWatermarkTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\DeleteWatermarkTemplateRequest');
    }

    /**
     * 查询指定分类信息
     *
     * 查询指定分类信息，及其子分类（即下一级分类）的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssetCategory($request)
    {
        return $this->listAssetCategoryWithHttpInfo($request);
    }

    public function listAssetCategoryWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/category';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListAssetCategoryResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListAssetCategoryRequest');
    }

    /**
     * 查询媒资日播放统计数据
     *
     * 查询媒资日播放统计数据。
     * 
     * 使用媒资日播放统计查询API前，需要先提交工单开通统计功能，才能触发统计任务。
     * 
     * 支持查询最近一年的播放统计数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssetDailySummaryLog($request)
    {
        return $this->listAssetDailySummaryLogWithHttpInfo($request);
    }

    public function listAssetDailySummaryLogWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/daily-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListAssetDailySummaryLogResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListAssetDailySummaryLogRequest');
    }

    /**
     * 查询媒资列表
     *
     * 查询媒资列表，列表中的每一条记录包含媒资的概要信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssetList($request)
    {
        return $this->listAssetListWithHttpInfo($request);
    }

    public function listAssetListWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['categoryId'] !== null) {
            $queryParams['category_id'] = $localVarParams['categoryId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['queryString'] !== null) {
            $queryParams['query_string'] = $localVarParams['queryString'];
        }
        if ($localVarParams['mediaType'] !== null) {
            $queryParams['media_type'] = $localVarParams['mediaType'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListAssetListResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListAssetListRequest');
    }

    /**
     * 查询域名播放日志
     *
     * 查询指定点播域名某段时间内在CDN的相关日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainLogs($request)
    {
        return $this->listDomainLogsWithHttpInfo($request);
    }

    public function listDomainLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/vod/cdn/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['queryDate'] !== null) {
            $queryParams['query_date'] = $localVarParams['queryDate'];
        }
        if ($localVarParams['pageSize'] !== null) {
            $queryParams['page_size'] = $localVarParams['pageSize'];
        }
        if ($localVarParams['pageNumber'] !== null) {
            $queryParams['page_number'] = $localVarParams['pageNumber'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListDomainLogsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListDomainLogsRequest');
    }

    /**
     * 查询转码模板组列表
     *
     * 查询转码模板组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTemplateGroup($request)
    {
        return $this->listTemplateGroupWithHttpInfo($request);
    }

    public function listTemplateGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template_group/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListTemplateGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListTemplateGroupRequest');
    }

    /**
     * 查询自定义模板组集合
     *
     * 查询转码模板组集合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTemplateGroupCollection($request)
    {
        return $this->listTemplateGroupCollectionWithHttpInfo($request);
    }

    public function listTemplateGroupCollectionWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template-collection/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupCollectionId'] !== null) {
            $queryParams['group_collection_id'] = $localVarParams['groupCollectionId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListTemplateGroupCollectionResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListTemplateGroupCollectionRequest');
    }

    /**
     * 查询TopN媒资信息
     *
     * 查询指定域名在指定日期播放次数排名Top 100的媒资统计数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTopStatistics($request)
    {
        return $this->listTopStatisticsWithHttpInfo($request);
    }

    public function listTopStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/top-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['date'] !== null) {
            $queryParams['date'] = $localVarParams['date'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListTopStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListTopStatisticsRequest');
    }

    /**
     * 查询转码模板列表
     *
     * 查询转码模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTranscodeTemplate($request)
    {
        return $this->listTranscodeTemplateWithHttpInfo($request);
    }

    public function listTranscodeTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/asset/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['isDefault'] !== null) {
            $queryParams['is_default'] = $localVarParams['isDefault'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryString'] !== null) {
            $queryParams['query_string'] = $localVarParams['queryString'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListTranscodeTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListTranscodeTemplateRequest');
    }

    /**
     * 查询水印列表
     *
     * 查询水印模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWatermarkTemplate($request)
    {
        return $this->listWatermarkTemplateWithHttpInfo($request);
    }

    public function listWatermarkTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/template/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListWatermarkTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListWatermarkTemplateRequest');
    }

    /**
     * 多字幕封装
     *
     * 多字幕封装，仅支持 HLS VTT格式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifySubtitle($request)
    {
        return $this->modifySubtitleWithHttpInfo($request);
    }

    public function modifySubtitleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/subtitles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ModifySubtitleResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ModifySubtitleRequest');
    }

    /**
     * 创建媒资：OBS转存方式
     *
     * 若您在使用点播服务前，已经在OBS桶中存储了音视频文件，您可以使用该接口将存储在OBS桶中的音视频文件转存到点播服务中，使用点播服务的音视频管理功能。调用该接口前，您需要调用[桶授权](https://support.huaweicloud.com/api-vod/vod_04_0199.html)接口，将存储音视频文件的OBS桶授权给点播服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishAssetFromObs($request)
    {
        return $this->publishAssetFromObsWithHttpInfo($request);
    }

    public function publishAssetFromObsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/reproduction';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\PublishAssetFromObsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\PublishAssetFromObsRequest');
    }

    /**
     * 媒资发布
     *
     * 将媒资设置为发布状态。支持批量发布。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishAssets($request)
    {
        return $this->publishAssetsWithHttpInfo($request);
    }

    public function publishAssetsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/status/publish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\PublishAssetsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\PublishAssetsRequest');
    }

    /**
     * 密钥查询
     *
     * 终端播放HLS加密视频时，向租户管理系统请求密钥，租户管理系统先查询其本地有没有已缓存的密钥，没有时则调用此接口向VOD查询。该接口的具体使用场景请参见[通过HLS加密防止视频泄露](https://support.huaweicloud.com/bestpractice-vod/vod_10_0004.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetCipher($request)
    {
        return $this->showAssetCipherWithHttpInfo($request);
    }

    public function showAssetCipherWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/ciphers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetCipherResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetCipherRequest');
    }

    /**
     * 查询指定媒资的详细信息
     *
     * 查询指定媒资的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetDetail($request)
    {
        return $this->showAssetDetailWithHttpInfo($request);
    }

    public function showAssetDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['categories'] !== null) {
            $queryParams['categories'] = $localVarParams['categories'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetDetailResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetDetailRequest');
    }

    /**
     * 查询媒资信息
     *
     * 查询媒资信息，支持指定媒资ID、分类、状态、起止时间查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetMeta($request)
    {
        return $this->showAssetMetaWithHttpInfo($request);
    }

    public function showAssetMetaWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['transcodeStatus'] !== null) {
            $queryParams['transcodeStatus'] = $localVarParams['transcodeStatus'];
        }
        if ($localVarParams['assetStatus'] !== null) {
            $queryParams['assetStatus'] = $localVarParams['assetStatus'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['categoryId'] !== null) {
            $queryParams['category_id'] = $localVarParams['categoryId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['queryString'] !== null) {
            $queryParams['query_string'] = $localVarParams['queryString'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetMetaResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetMetaRequest');
    }

    /**
     * 获取分段上传授权
     *
     * 客户端请求创建媒资时，如果媒资文件超过20MB，需采用分段的方式向OBS上传，在每次与OBS交互前，客户端需通过此接口获取到授权方可与OBS交互。
     * 
     * 该接口可以获取[初始化多段上传任务](https://support.huaweicloud.com/api-obs/obs_04_0098.html)、[上传段](https://support.huaweicloud.com/api-obs/obs_04_0099.html)、[合并段](https://support.huaweicloud.com/api-obs/obs_04_0102.html)、[列举已上传段](https://support.huaweicloud.com/api-obs/obs_04_0101.html)、[取消段合并](https://support.huaweicloud.com/api-obs/obs_04_0103.html)的带有临时授权的URL，用户需要根据OBS的接口文档配置相应请求的HTTP请求方法、请求头、请求体，然后请求对应的带有临时授权的URL。
     * 
     * 视频分段上传方式和OBS的接口文档保持一致，包括HTTP请求方法、请求头、请求体等各种入参，此接口的作用是为用户生成带有鉴权信息的URL（鉴权信息即query_str），用来替换OBS接口中对应的URL，临时给用户开通向点播服务的桶上传文件的权限。
     * 
     * 调用获取授权接口时需要传入bucket、object_key、http_verb，其中bucket和object_key是由[创建媒资：上传方式](https://support.huaweicloud.com/api-vod/vod_04_0196.html)接口中返回的响应体中的target字段获得的bucket和object，http_verb需要根据指定的操作选择。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetTempAuthority($request)
    {
        return $this->showAssetTempAuthorityWithHttpInfo($request);
    }

    public function showAssetTempAuthorityWithHttpInfo($request)
    {
        $resourcePath = '/v1.1/{project_id}/asset/authority';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['httpVerb'] !== null) {
            $queryParams['http_verb'] = $localVarParams['httpVerb'];
        }
        if ($localVarParams['bucket'] !== null) {
            $queryParams['bucket'] = $localVarParams['bucket'];
        }
        if ($localVarParams['objectKey'] !== null) {
            $queryParams['object_key'] = $localVarParams['objectKey'];
        }
        if ($localVarParams['contentType'] !== null) {
            $queryParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['contentMd5'] !== null) {
            $queryParams['content_md5'] = $localVarParams['contentMd5'];
        }
        if ($localVarParams['uploadId'] !== null) {
            $queryParams['upload_id'] = $localVarParams['uploadId'];
        }
        if ($localVarParams['partNumber'] !== null) {
            $queryParams['part_number'] = $localVarParams['partNumber'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetTempAuthorityResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowAssetTempAuthorityRequest');
    }

    /**
     * 查询CDN统计信息
     *
     * 查询CDN的统计数据，包括流量、峰值带宽、请求总数、请求命中率、流量命中率。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCdnStatistics($request)
    {
        return $this->showCdnStatisticsWithHttpInfo($request);
    }

    public function showCdnStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/cdn-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['statType'] !== null) {
            $queryParams['stat_type'] = $localVarParams['statType'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowCdnStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowCdnStatisticsRequest');
    }

    /**
     * 查询CDN预热
     *
     * 查询预热结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPreheatingAsset($request)
    {
        return $this->showPreheatingAssetWithHttpInfo($request);
    }

    public function showPreheatingAssetWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/preheating';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowPreheatingAssetResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowPreheatingAssetRequest');
    }

    /**
     * 查询媒资降冷配置
     *
     * 查询媒资降冷配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStorageModeType($request)
    {
        return $this->showStorageModeTypeWithHttpInfo($request);
    }

    public function showStorageModeTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/storage-mode-type';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowStorageModeTypeResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowStorageModeTypeRequest');
    }

    /**
     * 查询取回数据信息
     *
     * ## 典型场景 ##
     * 用于查询点播低频和归档取回量统计数据。&lt;br/&gt;
     * 
     * ## 接口功能 ##
     * 用于查询点播低频和归档取回量统计数据。&lt;br/&gt;
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVodRetrieval($request)
    {
        return $this->showVodRetrievalWithHttpInfo($request);
    }

    public function showVodRetrievalWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/vod-retrieval';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowVodRetrievalResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowVodRetrievalRequest');
    }

    /**
     * 查询源站统计信息
     *
     * 查询点播源站的统计数据，包括流量、存储空间、转码时长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVodStatistics($request)
    {
        return $this->showVodStatisticsWithHttpInfo($request);
    }

    public function showVodStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/vod-statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['interval'] !== null) {
            $queryParams['interval'] = $localVarParams['interval'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowVodStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowVodStatisticsRequest');
    }

    /**
     * 媒资发布取消
     *
     * 将媒资设置为未发布状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unpublishAssets($request)
    {
        return $this->unpublishAssetsWithHttpInfo($request);
    }

    public function unpublishAssetsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/status/unpublish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UnpublishAssetsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UnpublishAssetsRequest');
    }

    /**
     * 视频更新
     *
     * 媒资创建后，单独上传封面、更新视频文件或更新已有封面。
     * 
     * 如果是更新视频文件，更新完后要通过[确认媒资上传](https://support.huaweicloud.com/api-vod/vod_04_0198.html)接口通知点播服务。
     * 
     * 如果是更新封面或单独上传封面，则不需通知。
     * 
     * 更新视频可以使用分段上传，具体方式可以参考[示例2：媒资分段上传（20M以上）](https://support.huaweicloud.com/api-vod/vod_04_0216.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAsset($request)
    {
        return $this->updateAssetWithHttpInfo($request);
    }

    public function updateAssetWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetRequest');
    }

    /**
     * 修改媒资分类
     *
     * 修改媒资分类。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAssetCategory($request)
    {
        return $this->updateAssetCategoryWithHttpInfo($request);
    }

    public function updateAssetCategoryWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/category';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetCategoryResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetCategoryRequest');
    }

    /**
     * 修改媒资属性
     *
     * 修改媒资属性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAssetMeta($request)
    {
        return $this->updateAssetMetaWithHttpInfo($request);
    }

    public function updateAssetMetaWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetMetaResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetMetaRequest');
    }

    /**
     * 桶授权
     *
     * 用户可以通过该接口将OBS桶授权给点播服务或取消点播服务的授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBucketAuthorized($request)
    {
        return $this->updateBucketAuthorizedWithHttpInfo($request);
    }

    public function updateBucketAuthorizedWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/authority';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateBucketAuthorizedResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateBucketAuthorizedRequest');
    }

    /**
     * 设置封面
     *
     * 将视频截图生成的某张图片设置成封面。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCoverByThumbnail($request)
    {
        return $this->updateCoverByThumbnailWithHttpInfo($request);
    }

    public function updateCoverByThumbnailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/cover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateCoverByThumbnailResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateCoverByThumbnailRequest');
    }

    /**
     * 修改媒资文件在obs的存储模式
     *
     * ## 接口功能 ##
     * 修改媒资文件在obs的存储模式&lt;br/&gt;
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStorageMode($request)
    {
        return $this->updateStorageModeWithHttpInfo($request);
    }

    public function updateStorageModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/storage-mode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateStorageModeResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateStorageModeRequest');
    }

    /**
     * 修改媒资降冷粒度
     *
     * 修改媒资降冷粒度。
     * 
     * 默认为整个媒资粒度，支持转为仅原文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStorageModeType($request)
    {
        return $this->updateStorageModeTypeWithHttpInfo($request);
    }

    public function updateStorageModeTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asset/storage-mode-type';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateStorageModeTypeResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateStorageModeTypeRequest');
    }

    /**
     * 修改自定义转码模板组
     *
     * 修改自定义转码模板组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTemplateGroup($request)
    {
        return $this->updateTemplateGroupWithHttpInfo($request);
    }

    public function updateTemplateGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template_group/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateTemplateGroupResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateTemplateGroupRequest');
    }

    /**
     * 修改转码模板组集合
     *
     * 修改转码模板组结合
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTemplateGroupCollection($request)
    {
        return $this->updateTemplateGroupCollectionWithHttpInfo($request);
    }

    public function updateTemplateGroupCollectionWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/template-collection/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateTemplateGroupCollectionResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateTemplateGroupCollectionRequest');
    }

    /**
     * 修改转码模板
     *
     * 修改转码模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTranscodeTemplate($request)
    {
        return $this->updateTranscodeTemplateWithHttpInfo($request);
    }

    public function updateTranscodeTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/asset/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateTranscodeTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateTranscodeTemplateRequest');
    }

    /**
     * 修改水印模板
     *
     * 修改水印模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWatermarkTemplate($request)
    {
        return $this->updateWatermarkTemplateWithHttpInfo($request);
    }

    public function updateWatermarkTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/template/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateWatermarkTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UpdateWatermarkTemplateRequest');
    }

    /**
     * 创建媒资：URL拉取注入
     *
     * 基于音视频源文件URL，将音视频文件离线拉取上传到点播服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadMetaDataByUrl($request)
    {
        return $this->uploadMetaDataByUrlWithHttpInfo($request);
    }

    public function uploadMetaDataByUrlWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/upload_by_url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
                ['application/json', 'application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\UploadMetaDataByUrlResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\UploadMetaDataByUrlRequest');
    }

    /**
     * 查询托管任务
     *
     * 查询OBS存量托管任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTakeOverTask($request)
    {
        return $this->listTakeOverTaskWithHttpInfo($request);
    }

    public function listTakeOverTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/obs/host/stock/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ListTakeOverTaskResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ListTakeOverTaskRequest');
    }

    /**
     * 查询托管媒资详情
     *
     * 查询OBS托管媒资的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTakeOverAssetDetails($request)
    {
        return $this->showTakeOverAssetDetailsWithHttpInfo($request);
    }

    public function showTakeOverAssetDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/obs/host/task/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceBucket'] !== null) {
            $queryParams['source_bucket'] = $localVarParams['sourceBucket'];
        }
        if ($localVarParams['sourceObject'] !== null) {
            $queryParams['source_object'] = $localVarParams['sourceObject'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowTakeOverAssetDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowTakeOverAssetDetailsRequest');
    }

    /**
     * 查询托管任务详情
     *
     * 查询OBS存量托管任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTakeOverTaskDetails($request)
    {
        return $this->showTakeOverTaskDetailsWithHttpInfo($request);
    }

    public function showTakeOverTaskDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/asset/obs/host/stock/task/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\Vod\V1\Model\ShowTakeOverTaskDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Vod\V1\Model\ShowTakeOverTaskDetailsRequest');
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