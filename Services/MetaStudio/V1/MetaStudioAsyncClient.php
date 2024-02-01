<?php

namespace HuaweiCloud\SDK\MetaStudio\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class MetaStudioAsyncClient extends Client
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
        return new ClientBuilder(new MetaStudioAsyncClient());
    }

    /**
     * 创建对话链接
     *
     * 该接口用于创建对话链接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDialogUrlAsync($request)
    {
        return $this->createDialogUrlAsyncWithHttpInfo($request);
    }
    
    public function createDialogUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/create-dialog-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDialogUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDialogUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人智能交互任务
     *
     * 该接口用于查询数字人智能交互任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSmartChatJobAsync($request)
    {
        return $this->showSmartChatJobAsyncWithHttpInfo($request);
    }
    
    public function showSmartChatJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/smart-chat-rooms/{room_id}/smart-chat-jobs/{job_id}/state';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatJobRequest',
            $asyncRequest = true);
    }

    /**
     * 启动数字人智能交互任务
     *
     * 该接口用于启动数字人智能交互任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startSmartChatJobAsync($request)
    {
        return $this->startSmartChatJobAsyncWithHttpInfo($request);
    }
    
    public function startSmartChatJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/smart-chat-rooms/{room_id}/smart-chat-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['robotId'] !== null) {
            $queryParams['robot_id'] = $localVarParams['robotId'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartChatJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartChatJobRequest',
            $asyncRequest = true);
    }

    /**
     * 结束数字人智能交互任务
     *
     * 该接口用于结束数字人智能交互任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopSmartChatJobAsync($request)
    {
        return $this->stopSmartChatJobAsyncWithHttpInfo($request);
    }
    
    public function stopSmartChatJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/smart-chat-rooms/{room_id}/smart-chat-jobs/{job_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartChatJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartChatJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建资产
     *
     * 该接口用于在资产库中添加上传新的媒体资产。可上传的资产类型包括：分身数字人模型、背景图片、素材图片、素材视频、PPT等。
     * * &gt; 资产类型是IMAGE时，通过system_properties来区分背景图片（BACKGROUND_IMG）、素材图片（MATERIAL_IMG）。
     * * &gt; 资产类型是VIDEO时，通过system_properties来区分素材视频（MATERIAL_VIDEO）、名片视频（BUSSINESS_CARD_VIDEO）。
     * * &gt; MetaStudio平台生成的视频，system_properties带CREATED_BY_PLATFORM。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDigitalAssetAsync($request)
    {
        return $this->createDigitalAssetAsyncWithHttpInfo($request);
    }
    
    public function createDigitalAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 删除资产
     *
     * 该接口用于删除资产库中的媒体资产。调用该接口删除媒体资产时，媒体资产会放入回收站中，不会彻底删除。如需彻底删除资产，需增加“mode&#x3D;force”参数配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAssetAsync($request)
    {
        return $this->deleteAssetAsyncWithHttpInfo($request);
    }
    
    public function deleteAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets/{asset_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['mode'] !== null) {
            $queryParams['mode'] = $localVarParams['mode'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资产概要
     *
     * 该接口用于查询媒体资产库中指定的多个资产的概要信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssetSummaryAsync($request)
    {
        return $this->listAssetSummaryAsyncWithHttpInfo($request);
    }
    
    public function listAssetSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets/summarys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资产列表
     *
     * 该接口用于查询资产库中的媒体资产列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAssetsAsync($request)
    {
        return $this->listAssetsAsyncWithHttpInfo($request);
    }
    
    public function listAssetsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['assetType'] !== null) {
            $queryParams['asset_type'] = $localVarParams['assetType'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['assetSource'] !== null) {
            $queryParams['asset_source'] = $localVarParams['assetSource'];
        }
        if ($localVarParams['assetState'] !== null) {
            $queryParams['asset_state'] = $localVarParams['assetState'];
        }
        if ($localVarParams['styleId'] !== null) {
            $queryParams['style_id'] = $localVarParams['styleId'];
        }
        if ($localVarParams['renderEngine'] !== null) {
            $queryParams['render_engine'] = $localVarParams['renderEngine'];
        }
        if ($localVarParams['sex'] !== null) {
            $queryParams['sex'] = $localVarParams['sex'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
        }
        if ($localVarParams['systemProperty'] !== null) {
            $queryParams['system_property'] = $localVarParams['systemProperty'];
        }
        if ($localVarParams['actionEditable'] !== null) {
            $queryParams['action_editable'] = $localVarParams['actionEditable'];
        }
        if ($localVarParams['isMovable'] !== null) {
            $queryParams['is_movable'] = $localVarParams['isMovable'];
        }
        if ($localVarParams['voiceProvider'] !== null) {
            $queryParams['voice_provider'] = $localVarParams['voiceProvider'];
        }
        if ($localVarParams['role'] !== null) {
            $queryParams['role'] = $localVarParams['role'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetsRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复被删除的资产
     *
     * 该接口用于恢复被删除至回收站的媒体资产。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreAssetAsync($request)
    {
        return $this->restoreAssetAsyncWithHttpInfo($request);
    }
    
    public function restoreAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets/{asset_id}/restore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\RestoreAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\RestoreAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资产详情
     *
     * 该接口用于查询资产库中指定媒体资产的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetAsync($request)
    {
        return $this->showAssetAsyncWithHttpInfo($request);
    }
    
    public function showAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets/{asset_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 更新资产
     *
     * 该接口用于更新资产库中的媒体资产信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDigitalAssetAsync($request)
    {
        return $this->updateDigitalAssetAsyncWithHttpInfo($request);
    }
    
    public function updateDigitalAssetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-assets/{asset_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['assetId'] !== null) {
            $pathParams['asset_id'] = $localVarParams['assetId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalAssetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalAssetRequest',
            $asyncRequest = true);
    }

    /**
     * 创建数字人名片制作
     *
     * 该接口用于数字人名片制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDigitalHumanBusinessCardAsync($request)
    {
        return $this->createDigitalHumanBusinessCardAsyncWithHttpInfo($request);
    }
    
    public function createDigitalHumanBusinessCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-business-cards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalHumanBusinessCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalHumanBusinessCardRequest',
            $asyncRequest = true);
    }

    /**
     * 删除数字人名片制作任务
     *
     * 该接口用于删除数字人名片制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDigitalHumanBusinessCardAsync($request)
    {
        return $this->deleteDigitalHumanBusinessCardAsyncWithHttpInfo($request);
    }
    
    public function deleteDigitalHumanBusinessCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-business-cards/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDigitalHumanBusinessCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDigitalHumanBusinessCardRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人名片制作任务列表
     *
     * 该接口用于查询数字人名片制作任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDigitalHumanBusinessCardAsync($request)
    {
        return $this->listDigitalHumanBusinessCardAsyncWithHttpInfo($request);
    }
    
    public function listDigitalHumanBusinessCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-business-cards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['videoAssetName'] !== null) {
            $queryParams['video_asset_name'] = $localVarParams['videoAssetName'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanBusinessCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanBusinessCardRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人名片制作任务详情
     *
     * 该接口用于查询数字人名片制作任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDigitalHumanBusinessCardAsync($request)
    {
        return $this->showDigitalHumanBusinessCardAsyncWithHttpInfo($request);
    }
    
    public function showDigitalHumanBusinessCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-business-cards/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDigitalHumanBusinessCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDigitalHumanBusinessCardRequest',
            $asyncRequest = true);
    }

    /**
     * 更新数字人名片制作
     *
     * 该接口用于更新数字人名片制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDigitalHumanBusinessCardAsync($request)
    {
        return $this->updateDigitalHumanBusinessCardAsyncWithHttpInfo($request);
    }
    
    public function updateDigitalHumanBusinessCardAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-business-cards/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalHumanBusinessCardResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalHumanBusinessCardRequest',
            $asyncRequest = true);
    }

    /**
     * 查询视频制作任务列表
     *
     * 该接口用于查询视频制作任务列表。可查询分身数字人视频制作列表，照片数字人视频制作列表等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDigitalHumanVideoAsync($request)
    {
        return $this->listDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function listDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-videos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['scriptId'] !== null) {
            $queryParams['script_id'] = $localVarParams['scriptId'];
        }
        if ($localVarParams['assetName'] !== null) {
            $queryParams['asset_name'] = $localVarParams['assetName'];
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 取消等待中的分身数字人视频制作任务
     *
     * 该接口用于取消等待中的分身数字人视频制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancel2DDigitalHumanVideoAsync($request)
    {
        return $this->cancel2DDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function cancel2DDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/2d-digital-human-videos/{job_id}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Cancel2DDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Cancel2DDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建分身数字人视频制作任务
     *
     * 该接口用于创建分身数字人视频制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function create2DDigitalHumanVideoAsync($request)
    {
        return $this->create2DDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function create2DDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/2d-digital-human-videos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2DDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2DDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分身数字人视频制作任务详情
     *
     * 该接口用于查询分身数字人视频制作任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function show2DDigitalHumanVideoAsync($request)
    {
        return $this->show2DDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function show2DDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/2d-digital-human-videos/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['showScript'] !== null) {
            $queryParams['show_script'] = $localVarParams['showScript'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2DDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2DDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 取消等待中的照片分身数字人视频制作任务
     *
     * 该接口用于取消等待中的照片分身数字人视频制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelPhotoDigitalHumanVideoAsync($request)
    {
        return $this->cancelPhotoDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function cancelPhotoDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/photo-digital-human-videos/{job_id}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CancelPhotoDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CancelPhotoDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 创建照片检测任务
     *
     * 该接口用于创建照片检测任务，检测照片是否满足制作照片数字人的要求。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPhotoDetectionAsync($request)
    {
        return $this->createPhotoDetectionAsyncWithHttpInfo($request);
    }
    
    public function createPhotoDetectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/photo-detection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDetectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDetectionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建照片分身数字人视频制作任务
     *
     * 该接口用于创建照片分身数字人视频制作任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPhotoDigitalHumanVideoAsync($request)
    {
        return $this->createPhotoDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function createPhotoDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/photo-digital-human-videos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询照片检测任务详情
     *
     * 该接口用于查询照片检测任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPhotoDetectionAsync($request)
    {
        return $this->showPhotoDetectionAsyncWithHttpInfo($request);
    }
    
    public function showPhotoDetectionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/photo-detection/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDetectionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDetectionRequest',
            $asyncRequest = true);
    }

    /**
     * 查询照片分身数字人视频制作任务详情
     *
     * 该接口用于查询照片分身数字人视频制作任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPhotoDigitalHumanVideoAsync($request)
    {
        return $this->showPhotoDigitalHumanVideoAsyncWithHttpInfo($request);
    }
    
    public function showPhotoDigitalHumanVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/photo-digital-human-videos/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['showScript'] !== null) {
            $queryParams['show_script'] = $localVarParams['showScript'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDigitalHumanVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDigitalHumanVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 确认文件已上传
     *
     * 资产文件上传完毕后，通过该接口确认上传完成。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmFileUploadAsync($request)
    {
        return $this->confirmFileUploadAsyncWithHttpInfo($request);
    }
    
    public function confirmFileUploadAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/files/{file_id}/complete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['fileId'] !== null) {
            $pathParams['file_id'] = $localVarParams['fileId'];
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
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmFileUploadResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmFileUploadRequest',
            $asyncRequest = true);
    }

    /**
     * 创建文件并获取上传URL
     *
     * 该接口用于创建文件并获取上传URL。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFileAsync($request)
    {
        return $this->createFileAsyncWithHttpInfo($request);
    }
    
    public function createFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除文件
     *
     * 该接口用于删除媒体资产库中指定的文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFileAsync($request)
    {
        return $this->deleteFileAsyncWithHttpInfo($request);
    }
    
    public function deleteFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/files/{file_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['fileId'] !== null) {
            $pathParams['file_id'] = $localVarParams['fileId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteFileRequest',
            $asyncRequest = true);
    }

    /**
     * 创建一次性鉴权码
     *
     * 该接口用于创建一次性鉴权码，有效期5分钟，鉴权码只能使用一次，每次使用后需要重新获取。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOnceCodeAsync($request)
    {
        return $this->createOnceCodeAsyncWithHttpInfo($request);
    }
    
    public function createOnceCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/once-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateOnceCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateOnceCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 基于图片URL创建照片建模任务
     *
     * 该接口用于从URL中获取图片进行照片建模任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPictureModelingByUrlJobAsync($request)
    {
        return $this->createPictureModelingByUrlJobAsyncWithHttpInfo($request);
    }
    
    public function createPictureModelingByUrlJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human/stylized/picture-modelings-by-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePictureModelingByUrlJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePictureModelingByUrlJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建照片建模任务
     *
     * 该接口用于创建风格化照片建模任务。通过上传照片，生成风格化数字人模型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPictureModelingJobAsync($request)
    {
        return $this->createPictureModelingJobAsyncWithHttpInfo($request);
    }
    
    public function createPictureModelingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human/stylized/picture-modelings';
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
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePictureModelingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePictureModelingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 照片建模任务列表查询
     *
     * 该接口用于查询风格化照片建模任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPictureModelingJobsAsync($request)
    {
        return $this->listPictureModelingJobsAsyncWithHttpInfo($request);
    }
    
    public function listPictureModelingJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human/stylized/picture-modelings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPictureModelingJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPictureModelingJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 照片建模任务详情查询
     *
     * 该接口用于风格化查询照片建模任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPictureModelingJobAsync($request)
    {
        return $this->showPictureModelingJobAsyncWithHttpInfo($request);
    }
    
    public function showPictureModelingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human/stylized/picture-modelings/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPictureModelingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPictureModelingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建应用
     *
     * 该接口用于创建应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRobotAsync($request)
    {
        return $this->createRobotAsyncWithHttpInfo($request);
    }
    
    public function createRobotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/robot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateRobotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateRobotRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用
     *
     * 该接口用于删除应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRobotAsync($request)
    {
        return $this->deleteRobotAsyncWithHttpInfo($request);
    }
    
    public function deleteRobotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/robot/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteRobotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteRobotRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用列表
     *
     * 该接口用于查询应用列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRobotAsync($request)
    {
        return $this->listRobotAsyncWithHttpInfo($request);
    }
    
    public function listRobotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/robot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListRobotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListRobotRequest',
            $asyncRequest = true);
    }

    /**
     * 查询应用详情
     *
     * 该接口用于查询应用详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRobotAsync($request)
    {
        return $this->showRobotAsyncWithHttpInfo($request);
    }
    
    public function showRobotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/robot/{robot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['robotId'] !== null) {
            $pathParams['robot_id'] = $localVarParams['robotId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowRobotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowRobotRequest',
            $asyncRequest = true);
    }

    /**
     * 修改应用
     *
     * 该接口用于修改应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRobotAsync($request)
    {
        return $this->updateRobotAsyncWithHttpInfo($request);
    }
    
    public function updateRobotAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-chat/robot/{robot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['robotId'] !== null) {
            $pathParams['robot_id'] = $localVarParams['robotId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateRobotResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateRobotRequest',
            $asyncRequest = true);
    }

    /**
     * 创建智能交互对话直播间
     *
     * 该接口用于创建智能交互对话直播间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSmartChatRoomAsync($request)
    {
        return $this->createSmartChatRoomAsyncWithHttpInfo($request);
    }
    
    public function createSmartChatRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-chat-rooms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartChatRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartChatRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 删除智能交互对话直播间
     *
     * 该接口用于删除智能交互对话直播间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSmartChatRoomAsync($request)
    {
        return $this->deleteSmartChatRoomAsyncWithHttpInfo($request);
    }
    
    public function deleteSmartChatRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-chat-rooms/{room_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartChatRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartChatRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 查询智能交互对话直播间列表
     *
     * 该接口用于智能交互对话直播间列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartChatRoomsAsync($request)
    {
        return $this->listSmartChatRoomsAsyncWithHttpInfo($request);
    }
    
    public function listSmartChatRoomsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-chat-rooms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['roomName'] !== null) {
            $queryParams['room_name'] = $localVarParams['roomName'];
        }
        if ($localVarParams['modelName'] !== null) {
            $queryParams['model_name'] = $localVarParams['modelName'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartChatRoomsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartChatRoomsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询智能交互对话直播间详情
     *
     * 该接口用于查询智能交互对话直播间详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSmartChatRoomAsync($request)
    {
        return $this->showSmartChatRoomAsyncWithHttpInfo($request);
    }
    
    public function showSmartChatRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-chat-rooms/{room_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 更新智能交互对话直播间信息
     *
     * 该接口用于智能交互对话直播间信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSmartChatRoomAsync($request)
    {
        return $this->updateSmartChatRoomAsyncWithHttpInfo($request);
    }
    
    public function updateSmartChatRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-chat-rooms/{room_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartChatRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartChatRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 控制数字人直播过程
     *
     * 该接口用于控制数字人直播过程。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeSmartLiveCommandAsync($request)
    {
        return $this->executeSmartLiveCommandAsyncWithHttpInfo($request);
    }
    
    public function executeSmartLiveCommandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs/{job_id}/command';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteSmartLiveCommandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteSmartLiveCommandRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人智能直播任务列表
     *
     * 该接口用于查询数字人智能直播任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartLiveAsync($request)
    {
        return $this->listSmartLiveAsyncWithHttpInfo($request);
    }
    
    public function listSmartLiveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人智能直播任务列表
     *
     * 该接口用于查询数字人智能直播任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartLiveJobsAsync($request)
    {
        return $this->listSmartLiveJobsAsyncWithHttpInfo($request);
    }
    
    public function listSmartLiveJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['roomName'] !== null) {
            $queryParams['room_name'] = $localVarParams['roomName'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 上报直播间事件
     *
     * 该接口用于上报直播间事件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function liveEventReportAsync($request)
    {
        return $this->liveEventReportAsyncWithHttpInfo($request);
    }
    
    public function liveEventReportAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs/{job_id}/live-event-report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authKey'] !== null) {
            $queryParams['auth_key'] = $localVarParams['authKey'];
        }
        if ($localVarParams['expiresTime'] !== null) {
            $queryParams['expires_time'] = $localVarParams['expiresTime'];
        }
        if ($localVarParams['refreshUrl'] !== null) {
            $queryParams['refresh_url'] = $localVarParams['refreshUrl'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventReportResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventReportRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人智能直播任务详情
     *
     * 该接口用于查询数字人智能直播任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSmartLiveAsync($request)
    {
        return $this->showSmartLiveAsyncWithHttpInfo($request);
    }
    
    public function showSmartLiveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveRequest',
            $asyncRequest = true);
    }

    /**
     * 启动数字人智能直播任务
     *
     * 该接口用于启动数字人智能直播任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startSmartLiveAsync($request)
    {
        return $this->startSmartLiveAsyncWithHttpInfo($request);
    }
    
    public function startSmartLiveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartLiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartLiveRequest',
            $asyncRequest = true);
    }

    /**
     * 结束数字人智能直播任务
     *
     * 该接口用于结束数字人智能直播任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopSmartLiveAsync($request)
    {
        return $this->stopSmartLiveAsyncWithHttpInfo($request);
    }
    
    public function stopSmartLiveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs/{job_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartLiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartLiveRequest',
            $asyncRequest = true);
    }

    /**
     * 检测音色与文本的语言一致性
     *
     * 检测音色与文本的语言一致性，音色与文本不一致会导致报错
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkTextLanguageAsync($request)
    {
        return $this->checkTextLanguageAsyncWithHttpInfo($request);
    }
    
    public function checkTextLanguageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms-scripts/language-check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CheckTextLanguageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CheckTextLanguageRequest',
            $asyncRequest = true);
    }

    /**
     * 创建智能直播间互动规则库
     *
     * 该接口用于创建智能直播间互动规则库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInteractionRuleGroupAsync($request)
    {
        return $this->createInteractionRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function createInteractionRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractionRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractionRuleGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 创建智能直播间
     *
     * 该接口用于创建智能直播间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSmartLiveRoomAsync($request)
    {
        return $this->createSmartLiveRoomAsyncWithHttpInfo($request);
    }
    
    public function createSmartLiveRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartLiveRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartLiveRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 删除智能直播间互动规则库
     *
     * 该接口用于删除智能直播间互动规则库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInteractionRuleGroupAsync($request)
    {
        return $this->deleteInteractionRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteInteractionRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInteractionRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInteractionRuleGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除智能直播间
     *
     * 该接口用于删除智能直播间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSmartLiveRoomAsync($request)
    {
        return $this->deleteSmartLiveRoomAsyncWithHttpInfo($request);
    }
    
    public function deleteSmartLiveRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartLiveRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartLiveRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 查询智能直播间互动规则库列表
     *
     * 该接口用于智能直播间互动规则库列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInteractionRuleGroupsAsync($request)
    {
        return $this->listInteractionRuleGroupsAsyncWithHttpInfo($request);
    }
    
    public function listInteractionRuleGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInteractionRuleGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInteractionRuleGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询智能直播间列表
     *
     * 该接口用于智能直播间列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartLiveRoomsAsync($request)
    {
        return $this->listSmartLiveRoomsAsyncWithHttpInfo($request);
    }
    
    public function listSmartLiveRoomsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['roomName'] !== null) {
            $queryParams['room_name'] = $localVarParams['roomName'];
        }
        if ($localVarParams['dhId'] !== null) {
            $queryParams['dh_id'] = $localVarParams['dhId'];
        }
        if ($localVarParams['modelName'] !== null) {
            $queryParams['model_name'] = $localVarParams['modelName'];
        }
        if ($localVarParams['liveState'] !== null) {
            $queryParams['live_state'] = $localVarParams['liveState'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['roomType'] !== null) {
            $queryParams['room_type'] = $localVarParams['roomType'];
        }
        if ($localVarParams['templateOwnType'] !== null) {
            $queryParams['template_own_type'] = $localVarParams['templateOwnType'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRoomsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRoomsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询智能直播剧本详情
     *
     * 该接口用于查询智能直播剧本详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSmartLiveRoomAsync($request)
    {
        return $this->showSmartLiveRoomAsyncWithHttpInfo($request);
    }
    
    public function showSmartLiveRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 更新智能直播间互动规则库
     *
     * 该接口用于更新智能直播间互动规则库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInteractionRuleGroupAsync($request)
    {
        return $this->updateInteractionRuleGroupAsyncWithHttpInfo($request);
    }
    
    public function updateInteractionRuleGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInteractionRuleGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInteractionRuleGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 更新智能直播间信息
     *
     * 该接口用于智能直播间信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSmartLiveRoomAsync($request)
    {
        return $this->updateSmartLiveRoomAsyncWithHttpInfo($request);
    }
    
    public function updateSmartLiveRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['roomId'] !== null) {
            $pathParams['room_id'] = $localVarParams['roomId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartLiveRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartLiveRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 查询数字人风格列表
     *
     * 查询数字人风格列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStylesAsync($request)
    {
        return $this->listStylesAsyncWithHttpInfo($request);
    }
    
    public function listStylesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/styles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListStylesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListStylesRequest',
            $asyncRequest = true);
    }

    /**
     * 提交语音训练任务
     *
     * 提交训练任务,执行该接口后,任务会进入审核状态,审核完成后会等待训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function commitVoiceTrainingJobAsync($request)
    {
        return $this->commitVoiceTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function commitVoiceTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CommitVoiceTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CommitVoiceTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 确认在线录音结果
     *
     * 确认在线录音结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmTrainingSegmentAsync($request)
    {
        return $this->confirmTrainingSegmentAsyncWithHttpInfo($request);
    }
    
    public function confirmTrainingSegmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/training-segment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['index'] !== null) {
            $queryParams['index'] = $localVarParams['index'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmTrainingSegmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmTrainingSegmentRequest',
            $asyncRequest = true);
    }

    /**
     * 创建高级版语音训练任务
     *
     * 用户创建语音训练基础版任务,该接口会返回一个obs上传地址，用于上传语音文件。
     * 仅支持zip包方式上传语音文件：
     * * 语音文件打包成zip上传：上传的训练数据为一个zip格式压缩文件,其中包含一段wav格式的长音频文件。
     * 
     * &gt; * 文件上传后，调用“提交语音训练任务”接口，启动审核和训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingAdvanceJobAsync($request)
    {
        return $this->createTrainingAdvanceJobAsyncWithHttpInfo($request);
    }
    
    public function createTrainingAdvanceJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/advance-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingAdvanceJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingAdvanceJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建基础版语音训练任务
     *
     * 用户创建语音训练基础版任务,该接口会返回一个obs上传地址，用于上传语音文件。
     * 支持2种方式上传语音文件：
     * * 语音文件和文本文件打包成zip上传：语音文件已经切分成20个wav文件，每个语音文件对应一个txt文本文件，所有文件打包成zip文件。语音文件命名规则：0.wav~19.wav；文本文件命名规则：0.txt~19.txt。
     * * 语音文件和文本文件逐句上传：每次上传一句语料的语音文件和文本文件，再调用“确认在线录音结果”接口确认语音和文本内容是否一致。确认成功后再上传和确认下一句。
     * 
     * &gt; * 文件上传后，调用“提交语音训练任务”接口，启动审核和训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingBasicJobAsync($request)
    {
        return $this->createTrainingBasicJobAsyncWithHttpInfo($request);
    }
    
    public function createTrainingBasicJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/basic-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingBasicJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingBasicJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建进阶版语音训练任务
     *
     * 用户创建语音训练基础版任务,该接口会返回一个obs上传地址，用于上传语音文件。
     * 支持2种方式上传语音文件：
     * * 语音文件和文本文件打包成zip上传：语音文件已经切分成100个wav文件，每个语音文件对应一个txt文本文件，所有文件打包成zip文件。语音文件命名规则：0.wav~99.wav；文本文件命名规则：0.txt~99.txt。
     * * 语音文件和文本文件逐句上传：每次上传一句语料的语音文件和文本文件，再调用“确认在线录音结果”接口确认语音和文本内容是否一致。确认成功后再上传和确认下一句。
     * 
     * &gt; * 文件上传后，调用“提交语音训练任务”接口，启动审核和训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingMiddleJobAsync($request)
    {
        return $this->createTrainingMiddleJobAsyncWithHttpInfo($request);
    }
    
    public function createTrainingMiddleJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/middle-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingMiddleJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingMiddleJobRequest',
            $asyncRequest = true);
    }

    /**
     * 删除语音训练任务
     *
     * 删除语音训练任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVoiceTrainingJobAsync($request)
    {
        return $this->deleteVoiceTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function deleteVoiceTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVoiceTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVoiceTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询语音训练任务列表
     *
     * 查询语音训练任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVoiceTrainingJobAsync($request)
    {
        return $this->listVoiceTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function listVoiceTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['voiceName'] !== null) {
            $queryParams['voice_name'] = $localVarParams['voiceName'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVoiceTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVoiceTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 获取语音训练任务审核结果
     *
     * 获取语音训练任务审核结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobAuditResultAsync($request)
    {
        return $this->showJobAuditResultAsyncWithHttpInfo($request);
    }
    
    public function showJobAuditResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}/audit-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobAuditResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobAuditResultRequest',
            $asyncRequest = true);
    }

    /**
     * 获取语音文件上传地址
     *
     * 获取语音文件上传地址
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobUploadingAddressAsync($request)
    {
        return $this->showJobUploadingAddressAsyncWithHttpInfo($request);
    }
    
    public function showJobUploadingAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}/uploading-address-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 获取在线录音确认结果
     *
     * 获取在线录音确认结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingSegmentInfoAsync($request)
    {
        return $this->showTrainingSegmentInfoAsyncWithHttpInfo($request);
    }
    
    public function showTrainingSegmentInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/training-segment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['job_id'] = $localVarParams['jobId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTrainingSegmentInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTrainingSegmentInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询语音训练任务详情
     *
     * 查询语音训练任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVoiceTrainingJobAsync($request)
    {
        return $this->showVoiceTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function showVoiceTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVoiceTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVoiceTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建分身数字人模型训练任务
     *
     * 该接口用于创建分身数字人模型训练任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function create2dModelTrainingJobAsync($request)
    {
        return $this->create2dModelTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function create2dModelTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-training-manage/user/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2dModelTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2dModelTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 删除分身数字人模型训练任务
     *
     * 该接口用于删除分身数字人模型训练任务。同时需要删除训练任务相关的训练视频、身份证照片、授权文件、模型资产等。
     * &gt; * 该接口应当在任务处于以下状态时调用：WAIT_FILE_UPLOAD、AUTO_VERIFY_FAILED、MANUAL_VERIFYING、MANUAL_VERIFY_FAILED、TRAINING_DATA_PREPROCESS_FAILED、TRAIN_FAILED、INFERENCE_DATA_PREPROCESS_FAILED、JOB_SUCCESS、WAIT_USER_CONFIRM、JOB_REJECT、JOB_FINISH
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function delete2dModelTrainingJobAsync($request)
    {
        return $this->delete2dModelTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function delete2dModelTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-training-manage/user/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Delete2dModelTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Delete2dModelTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 租户执行分身数字人模型训练任务命令
     *
     * 该接口用于租户执行分身数字人模型训练任务命令，如提交训练审核等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function execute2dModelTrainingCommandByUserAsync($request)
    {
        return $this->execute2dModelTrainingCommandByUserAsyncWithHttpInfo($request);
    }
    
    public function execute2dModelTrainingCommandByUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-training-manage/user/jobs/{job_id}/command';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Execute2dModelTrainingCommandByUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Execute2dModelTrainingCommandByUserRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分身数字人模型训练任务列表
     *
     * 该接口用于查询分身数字人模型训练任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function list2dModelTrainingJobAsync($request)
    {
        return $this->list2dModelTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function list2dModelTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-training-manage/user/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['batchName'] !== null) {
            $queryParams['batch_name'] = $localVarParams['batchName'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\List2dModelTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\List2dModelTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询分身数字人模型训练任务详情
     *
     * 该接口用于查询分身数字人模型训练任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function show2dModelTrainingJobAsync($request)
    {
        return $this->show2dModelTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function show2dModelTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-training-manage/user/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2dModelTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2dModelTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 更新分身数字人模型训练任务
     *
     * 该接口用于更新分身数字人模型训练任务。用于在自动审核或者人工审核不通过情况下，更新训练视频、身份证照片等。
     * &gt; * 该接口只能在AUTO_VERIFY_FAILED或者MANUAL_VERIFY_FAILED状态下调用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function update2dModelTrainingJobAsync($request)
    {
        return $this->update2dModelTrainingJobAsyncWithHttpInfo($request);
    }
    
    public function update2dModelTrainingJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-training-manage/user/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Update2dModelTrainingJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Update2dModelTrainingJobRequest',
            $asyncRequest = true);
    }

    /**
     * 创建语音驱动表情动画任务
     *
     * 该接口用于创建驱动数字人表情的任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFacialAnimationsAsync($request)
    {
        return $this->createFacialAnimationsAsyncWithHttpInfo($request);
    }
    
    public function createFacialAnimationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/ttsa/fas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFacialAnimationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFacialAnimationsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建语音驱动任务
     *
     * 该接口用于创建驱动数字人表情、动作及语音的任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTtsaAsync($request)
    {
        return $this->createTtsaAsyncWithHttpInfo($request);
    }
    
    public function createTtsaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/ttsa-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsaRequest',
            $asyncRequest = true);
    }

    /**
     * 获取语音驱动表情数据
     *
     * 该接口用于获取生成的数字人表情驱动数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFacialAnimationsDataAsync($request)
    {
        return $this->listFacialAnimationsDataAsyncWithHttpInfo($request);
    }
    
    public function listFacialAnimationsDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/fas-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListFacialAnimationsDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListFacialAnimationsDataRequest',
            $asyncRequest = true);
    }

    /**
     * 获取语音驱动数据
     *
     * 该接口用于获取生成的数字人驱动数据，包括语音、表情、动作等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTtsaDataAsync($request)
    {
        return $this->listTtsaDataAsyncWithHttpInfo($request);
    }
    
    public function listTtsaDataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/ttsa-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaDataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaDataRequest',
            $asyncRequest = true);
    }

    /**
     * 获取语音驱动任务列表
     *
     * 该接口用于查询驱动数字人表情、动作及语音的任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTtsaJobsAsync($request)
    {
        return $this->listTtsaJobsAsyncWithHttpInfo($request);
    }
    
    public function listTtsaJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/ttsa-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建TTS试听任务
     *
     * 该接口用于创建生成播报内容的语音试听文件任务。第三方音色试听需要收费，收费标准参考：https://marketplace.huaweicloud.com/product/OFFI919400645308506112#productid&#x3D;OFFI919400645308506112
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTtsAuditionAsync($request)
    {
        return $this->createTtsAuditionAsyncWithHttpInfo($request);
    }
    
    public function createTtsAuditionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/ttsc/audition';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsAuditionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsAuditionRequest',
            $asyncRequest = true);
    }

    /**
     * 获取TTS试听文件
     *
     * 该接口用于获取TTS试听文件下载链接，返回List中包含当前已生产的试听文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTtsAuditionFileAsync($request)
    {
        return $this->showTtsAuditionFileAsyncWithHttpInfo($request);
    }
    
    public function showTtsAuditionFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/ttsc/audition-file/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsAuditionFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsAuditionFileRequest',
            $asyncRequest = true);
    }

    /**
     * 创建视频驱动任务
     *
     * 该接口用于创建视频驱动任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVideoMotionCaptureJobAsync($request)
    {
        return $this->createVideoMotionCaptureJobAsyncWithHttpInfo($request);
    }
    
    public function createVideoMotionCaptureJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/video-motion-capture-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams['x_user_privilege'] = $localVarParams['xUserPrivilege'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoMotionCaptureJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoMotionCaptureJobRequest',
            $asyncRequest = true);
    }

    /**
     * 控制数字人驱动
     *
     * 该接口用于控制数字人驱动。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeVideoMotionCaptureCommandAsync($request)
    {
        return $this->executeVideoMotionCaptureCommandAsyncWithHttpInfo($request);
    }
    
    public function executeVideoMotionCaptureCommandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/video-motion-capture-jobs/{job_id}/command';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
                ['application/json;charset=utf-8']
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteVideoMotionCaptureCommandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteVideoMotionCaptureCommandRequest',
            $asyncRequest = true);
    }

    /**
     * 查询视频驱动任务列表
     *
     * 该接口用于查询视频驱动任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVideoMotionCaptureJobsAsync($request)
    {
        return $this->listVideoMotionCaptureJobsAsyncWithHttpInfo($request);
    }
    
    public function listVideoMotionCaptureJobsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/video-motion-capture-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoMotionCaptureJobsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoMotionCaptureJobsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询视频驱动任务详情
     *
     * 该接口用于查询视频驱动任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVideoMotionCaptureJobAsync($request)
    {
        return $this->showVideoMotionCaptureJobAsyncWithHttpInfo($request);
    }
    
    public function showVideoMotionCaptureJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/video-motion-capture-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoMotionCaptureJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoMotionCaptureJobRequest',
            $asyncRequest = true);
    }

    /**
     * 停止视频驱动任务
     *
     * 该接口用于停止视频驱动任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopVideoMotionCaptureJobAsync($request)
    {
        return $this->stopVideoMotionCaptureJobAsyncWithHttpInfo($request);
    }
    
    public function stopVideoMotionCaptureJobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/video-motion-capture-jobs/{job_id}/finish';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopVideoMotionCaptureJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopVideoMotionCaptureJobRequest',
            $asyncRequest = true);
    }

    /**
     * 复制视频制作剧本
     *
     * 该接口用于复制视频制作剧本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyVideoScriptsAsync($request)
    {
        return $this->copyVideoScriptsAsyncWithHttpInfo($request);
    }
    
    public function copyVideoScriptsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-video-scripts/{script_id}/copy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['scriptId'] !== null) {
            $pathParams['script_id'] = $localVarParams['scriptId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CopyVideoScriptsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CopyVideoScriptsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建视频制作剧本
     *
     * 该接口用于创建视频制作剧本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVideoScriptsAsync($request)
    {
        return $this->createVideoScriptsAsyncWithHttpInfo($request);
    }
    
    public function createVideoScriptsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-video-scripts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoScriptsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoScriptsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除视频制作剧本
     *
     * 该接口用于删除视频制作剧本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVideoScriptAsync($request)
    {
        return $this->deleteVideoScriptAsyncWithHttpInfo($request);
    }
    
    public function deleteVideoScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-video-scripts/{script_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['scriptId'] !== null) {
            $pathParams['script_id'] = $localVarParams['scriptId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVideoScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVideoScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 查询视频制作剧本列表
     *
     * 该接口用于查询视频制作剧本列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVideoScriptsAsync($request)
    {
        return $this->listVideoScriptsAsyncWithHttpInfo($request);
    }
    
    public function listVideoScriptsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-video-scripts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['scriptCatalog'] !== null) {
            $queryParams['script_catalog'] = $localVarParams['scriptCatalog'];
        }
        if ($localVarParams['viewMode'] !== null) {
            $queryParams['view_mode'] = $localVarParams['viewMode'];
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoScriptsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoScriptsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询视频制作剧本详情
     *
     * 该接口用于查询视频制作剧本详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVideoScriptAsync($request)
    {
        return $this->showVideoScriptAsyncWithHttpInfo($request);
    }
    
    public function showVideoScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-video-scripts/{script_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['scriptId'] !== null) {
            $pathParams['script_id'] = $localVarParams['scriptId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoScriptRequest',
            $asyncRequest = true);
    }

    /**
     * 更新视频制作剧本
     *
     * 该接口用于更新视频制作剧本。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVideoScriptAsync($request)
    {
        return $this->updateVideoScriptAsyncWithHttpInfo($request);
    }
    
    public function updateVideoScriptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/digital-human-video-scripts/{script_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams['x_project_id'] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['scriptId'] !== null) {
            $pathParams['script_id'] = $localVarParams['scriptId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateVideoScriptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateVideoScriptRequest',
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