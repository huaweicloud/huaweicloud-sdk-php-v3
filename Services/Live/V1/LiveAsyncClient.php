<?php

namespace HuaweiCloud\SDK\Live\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class LiveAsyncClient extends Client
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
        return new ClientBuilder(new LiveAsyncClient());
    }

    /**
     * 创建直播域名
     * 可单独创建直播播放域名或推流域名，每个租户最多可配置64条域名记录。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDomainAsync($request)
    {
        return $this->createDomainAsyncWithHttpInfo($request);
    }
    
    public function createDomainAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/domain';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\CreateDomainResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\CreateDomainRequest',
            $asyncRequest = true);
    }

    /**
     * 域名映射
     * 将用户已创建的播放域名和推流域名建立域名映射关系
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDomainMappingAsync($request)
    {
        return $this->createDomainMappingAsyncWithHttpInfo($request);
    }
    
    public function createDomainMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/domains_mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specifyProject'] !== null) {
            $queryParams['specify_project'] = $localVarParams['specifyProject'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\CreateDomainMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\CreateDomainMappingRequest',
            $asyncRequest = true);
    }

    /**
     * 创建录制配置
     * 创建录制配置接口
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecordConfigAsync($request)
    {
        return $this->createRecordConfigAsyncWithHttpInfo($request);
    }
    
    public function createRecordConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/record/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\CreateRecordConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\CreateRecordConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 禁止直播推流
     * 禁止直播推流
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStreamForbiddenAsync($request)
    {
        return $this->createStreamForbiddenAsyncWithHttpInfo($request);
    }
    
    public function createStreamForbiddenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/blocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specifyProject'] !== null) {
            $queryParams['specify_project'] = $localVarParams['specifyProject'];
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
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\CreateStreamForbiddenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\CreateStreamForbiddenRequest',
            $asyncRequest = true);
    }

    /**
     * 创建直播转码模板
     * 创建直播转码模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTranscodingsTemplateAsync($request)
    {
        return $this->createTranscodingsTemplateAsyncWithHttpInfo($request);
    }
    
    public function createTranscodingsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\CreateTranscodingsTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\CreateTranscodingsTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除直播域名
     * 删除域名。只有在域名停用（off）状态时才能删除。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomainAsync($request)
    {
        return $this->deleteDomainAsyncWithHttpInfo($request);
    }
    
    public function deleteDomainAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/domain';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\DeleteDomainResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\DeleteDomainRequest',
            $asyncRequest = true);
    }

    /**
     * 删除直播域名映射关系
     * 将播放域名和推流域名的域名映射关系删除
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomainMappingAsync($request)
    {
        return $this->deleteDomainMappingAsyncWithHttpInfo($request);
    }
    
    public function deleteDomainMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/domains_mapping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specifyProject'] !== null) {
            $queryParams['specify_project'] = $localVarParams['specifyProject'];
        }
        if ($localVarParams['pullDomain'] !== null) {
            $queryParams['pull_domain'] = $localVarParams['pullDomain'];
        }
        if ($localVarParams['pushDomain'] !== null) {
            $queryParams['push_domain'] = $localVarParams['pushDomain'];
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\DeleteDomainMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\DeleteDomainMappingRequest',
            $asyncRequest = true);
    }

    /**
     * 删除录制配置
     * 删除录制配置接口
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRecordConfigAsync($request)
    {
        return $this->deleteRecordConfigAsyncWithHttpInfo($request);
    }
    
    public function deleteRecordConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/record/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\DeleteRecordConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\DeleteRecordConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 禁推恢复
     * 恢复直播推流接口
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStreamForbiddenAsync($request)
    {
        return $this->deleteStreamForbiddenAsyncWithHttpInfo($request);
    }
    
    public function deleteStreamForbiddenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/blocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specifyProject'] !== null) {
            $queryParams['specify_project'] = $localVarParams['specifyProject'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['streamName'] !== null) {
            $queryParams['stream_name'] = $localVarParams['streamName'];
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\DeleteStreamForbiddenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\DeleteStreamForbiddenRequest',
            $asyncRequest = true);
    }

    /**
     * 删除直播转码模板
     * 删除直播转码模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTranscodingsTemplateAsync($request)
    {
        return $this->deleteTranscodingsTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteTranscodingsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\DeleteTranscodingsTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\DeleteTranscodingsTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取直播播放日志
     * 获取直播播放日志，基于域名以5分钟粒度进行打包，日志内容以 \&quot;|\&quot; 进行分隔。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLiveSampleLogsAsync($request)
    {
        return $this->listLiveSampleLogsAsyncWithHttpInfo($request);
    }
    
    public function listLiveSampleLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['playDomain'] !== null) {
            $queryParams['play_domain'] = $localVarParams['playDomain'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ListLiveSampleLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ListLiveSampleLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询直播中的流信息
     * 查询直播中的流信息
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLiveStreamsOnlineAsync($request)
    {
        return $this->listLiveStreamsOnlineAsyncWithHttpInfo($request);
    }
    
    public function listLiveStreamsOnlineAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/realtime/streams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publishDomain'] !== null) {
            $queryParams['publish_domain'] = $localVarParams['publishDomain'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['stream'] !== null) {
            $queryParams['stream'] = $localVarParams['stream'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ListLiveStreamsOnlineResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ListLiveStreamsOnlineRequest',
            $asyncRequest = true);
    }

    /**
     * 查询录制配置
     * 查询录制配置接口
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecordConfigsAsync($request)
    {
        return $this->listRecordConfigsAsyncWithHttpInfo($request);
    }
    
    public function listRecordConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/record/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['streamName'] !== null) {
            $queryParams['stream_name'] = $localVarParams['streamName'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['recordType'] !== null) {
            $queryParams['record_type'] = $localVarParams['recordType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ListRecordConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ListRecordConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询禁止直播推流列表
     * 查询禁播黑名单列表
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStreamForbiddenAsync($request)
    {
        return $this->listStreamForbiddenAsyncWithHttpInfo($request);
    }
    
    public function listStreamForbiddenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/blocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specifyProject'] !== null) {
            $queryParams['specify_project'] = $localVarParams['specifyProject'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['streamName'] !== null) {
            $queryParams['stream_name'] = $localVarParams['streamName'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ListStreamForbiddenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ListStreamForbiddenRequest',
            $asyncRequest = true);
    }

    /**
     * 查询直播加速的带宽数据
     * 查询直播加速的播流域名网络带宽监控数据
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBandwidthAsync($request)
    {
        return $this->showBandwidthAsyncWithHttpInfo($request);
    }
    
    public function showBandwidthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/bandwidth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['step'] !== null) {
            $queryParams['step'] = $localVarParams['step'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ShowBandwidthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ShowBandwidthRequest',
            $asyncRequest = true);
    }

    /**
     * 查询直播域名
     * 查询直播域名
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainAsync($request)
    {
        return $this->showDomainAsyncWithHttpInfo($request);
    }
    
    public function showDomainAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/domain';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ShowDomainResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ShowDomainRequest',
            $asyncRequest = true);
    }

    /**
     * 查询直播播放在线人数
     * 查询加速的直播播放在线人数
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOnlineUsersAsync($request)
    {
        return $this->showOnlineUsersAsyncWithHttpInfo($request);
    }
    
    public function showOnlineUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['streamName'] !== null) {
            $queryParams['stream_name'] = $localVarParams['streamName'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['step'] !== null) {
            $queryParams['step'] = $localVarParams['step'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ShowOnlineUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ShowOnlineUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询直播加速的流量数据
     * 查询直播加速的播流域名网络流量监控数据
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrafficAsync($request)
    {
        return $this->showTrafficAsyncWithHttpInfo($request);
    }
    
    public function showTrafficAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/traffic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['step'] !== null) {
            $queryParams['step'] = $localVarParams['step'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ShowTrafficResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ShowTrafficRequest',
            $asyncRequest = true);
    }

    /**
     * 查询直播转码模板
     * 查询直播转码模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTranscodingsTemplateAsync($request)
    {
        return $this->showTranscodingsTemplateAsyncWithHttpInfo($request);
    }
    
    public function showTranscodingsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\ShowTranscodingsTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\ShowTranscodingsTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 修改直播域名
     * 修改直播播放、RTMP推流加速域名相关信息
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDomainAsync($request)
    {
        return $this->updateDomainAsyncWithHttpInfo($request);
    }
    
    public function updateDomainAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/domain';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json; charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8', 'application/json'],
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\UpdateDomainResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\UpdateDomainRequest',
            $asyncRequest = true);
    }

    /**
     * 修改禁推属性
     * 修改禁推属性
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStreamForbiddenAsync($request)
    {
        return $this->updateStreamForbiddenAsyncWithHttpInfo($request);
    }
    
    public function updateStreamForbiddenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/stream/blocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specifyProject'] !== null) {
            $queryParams['specify_project'] = $localVarParams['specifyProject'];
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
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\UpdateStreamForbiddenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\UpdateStreamForbiddenRequest',
            $asyncRequest = true);
    }

    /**
     * 配置直播转码模板
     * 修改直播转码模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTranscodingsTemplateAsync($request)
    {
        return $this->updateTranscodingsTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateTranscodingsTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/template/transcodings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json; charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Live\V1\Model\UpdateTranscodingsTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Live\V1\Model\UpdateTranscodingsTemplateRequest',
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