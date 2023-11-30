<?php

namespace HuaweiCloud\SDK\Sis\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class SisClient extends Client
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
        return new ClientBuilder(new SisClient());
    }


    /**
     * 获取录音文件识别结果
     *
     * 该接口用于获取录音文件识别结果及识别状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function collectTranscriberJob($request)
    {
        return $this->collectTranscriberJobWithHttpInfo($request);
    }

    public function collectTranscriberJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/transcriber/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json', 'application/json-1', 'application/json-2']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1', 'application/json-2'],
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\CollectTranscriberJobResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\CollectTranscriberJobRequest');
    }

    /**
     * 创建热词表
     *
     * 新建一个热词表，创建成功返回id。每个用户限制创建10个热词表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVocabulary($request)
    {
        return $this->createVocabularyWithHttpInfo($request);
    }

    public function createVocabularyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/vocabularies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\CreateVocabularyResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\CreateVocabularyRequest');
    }

    /**
     * 删除热词表
     *
     * 通过热词表id删除热词表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVocabulary($request)
    {
        return $this->deleteVocabularyWithHttpInfo($request);
    }

    public function deleteVocabularyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/vocabularies/{vocabulary_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vocabularyId'] !== null) {
            $pathParams['vocabulary_id'] = $localVarParams['vocabularyId'];
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\DeleteVocabularyResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\DeleteVocabularyRequest');
    }

    /**
     * 提交录音文件识别任务
     *
     * **录音文件识别**
     * 录音文件识别接口，用于识别长录音文件，录音文件放在华为云OBS（对象存储服务）上。
     * 
     * 由于录音文件识别通常会需要较长的时间，因此识别是异步的，也即接口分为创建识别任务和查询任务状态两个接口。创建识别任务接口创建任务完成后返回，然后用户通过调用查询任务状态接口来获得转写状态和结果。
     * 
     * **功能介绍**
     * 该接口用于提交录音文件识别任务，其中录音文件保存在用户的OBS桶中。用户开通录音识别服务时，需授权录音文件引擎读取用户OBS桶权限。
     * 
     * 接口约束
     * 录音时长不超过5小时，文件大小不超过300M，识别结果保存72小时（从识别完成的时间算起）。72小时后如果再访问，将会返回 \&quot;task id is not found\&quot;错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pushTranscriberJobs($request)
    {
        return $this->pushTranscriberJobsWithHttpInfo($request);
    }

    public function pushTranscriberJobsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/transcriber/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $headerParams[$arr['enterpriseProjectId']] = $localVarParams['enterpriseProjectId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\PushTranscriberJobsResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\PushTranscriberJobsRequest');
    }

    /**
     * 录音文件识别极速版
     *
     * 极速版ASR(Restful API 接口, 适用于音频(文件大小&lt;&#x3D;100M,语音时长&lt;&#x3D;30分钟)文件的同步识别。
     * 此接口以POST方式一次性上传整个音频或从华为OBS中下载音频， 识别结果将在请求响应中即刻返回，用于语音文件极速转写，质检分析的离线场景。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeFlashAsr($request)
    {
        return $this->recognizeFlashAsrWithHttpInfo($request);
    }

    public function recognizeFlashAsrWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/flash';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['property'] !== null) {
            $queryParams['property'] = $localVarParams['property'];
        }
        if ($localVarParams['audioFormat'] !== null) {
            $queryParams['audio_format'] = $localVarParams['audioFormat'];
        }
        if ($localVarParams['obsBucketName'] !== null) {
            $queryParams['obs_bucket_name'] = $localVarParams['obsBucketName'];
        }
        if ($localVarParams['obsObjectKey'] !== null) {
            $queryParams['obs_object_key'] = $localVarParams['obsObjectKey'];
        }
        if ($localVarParams['addPunc'] !== null) {
            $queryParams['add_punc'] = $localVarParams['addPunc'];
        }
        if ($localVarParams['digitNorm'] !== null) {
            $queryParams['digit_norm'] = $localVarParams['digitNorm'];
        }
        if ($localVarParams['needWordInfo'] !== null) {
            $queryParams['need_word_info'] = $localVarParams['needWordInfo'];
        }
        if ($localVarParams['vocabularyId'] !== null) {
            $queryParams['vocabulary_id'] = $localVarParams['vocabularyId'];
        }
        if ($localVarParams['firstChannelOnly'] !== null) {
            $queryParams['first_channel_only'] = $localVarParams['firstChannelOnly'];
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\RecognizeFlashAsrResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\RecognizeFlashAsrRequest');
    }

    /**
     * 一句话识别
     *
     * 一句话识别接口，用于短语音的同步识别。一次性上传整个音频，响应中即返回识别结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function recognizeShortAudio($request)
    {
        return $this->recognizeShortAudioWithHttpInfo($request);
    }

    public function recognizeShortAudioWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/short-audio';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\RecognizeShortAudioResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\RecognizeShortAudioRequest');
    }

    /**
     * 语音合成
     *
     * 语音合成，是一种将文本转换成逼真语音的服务。用户通过实时访问和调用API获取语音合成结果，将用户输入的文字合成为音频。通过音色选择、自定义音量、语速，为企业和个人提供个性化的发音服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runTts($request)
    {
        return $this->runTtsWithHttpInfo($request);
    }

    public function runTtsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/tts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\RunTtsResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\RunTtsRequest');
    }

    /**
     * 查询热词表列表
     *
     * 查询用户所有热词表列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVocabularies($request)
    {
        return $this->showVocabulariesWithHttpInfo($request);
    }

    public function showVocabulariesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/vocabularies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\ShowVocabulariesResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\ShowVocabulariesRequest');
    }

    /**
     * 查询热词表信息
     *
     * 通过热词表id查询热词表的信息和内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVocabulary($request)
    {
        return $this->showVocabularyWithHttpInfo($request);
    }

    public function showVocabularyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/vocabularies/{vocabulary_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vocabularyId'] !== null) {
            $pathParams['vocabulary_id'] = $localVarParams['vocabularyId'];
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\ShowVocabularyResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\ShowVocabularyRequest');
    }

    /**
     * 更新热词表
     *
     * 更新一个热词表，更新成功返回id。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVocabulary($request)
    {
        return $this->updateVocabularyWithHttpInfo($request);
    }

    public function updateVocabularyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/asr/vocabularies/{vocabulary_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['vocabularyId'] !== null) {
            $pathParams['vocabulary_id'] = $localVarParams['vocabularyId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\Sis\V1\Model\UpdateVocabularyResponse',
            $requestType='\HuaweiCloud\SDK\Sis\V1\Model\UpdateVocabularyRequest');
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