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
     * 创建资产
     *
     * 该接口用于在资产库中添加上传新的媒体资产。可上传的资产类型包括：数字人模型、素材、视频、图片、场景等。
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
     * 该接口用于删除资产库中的媒体资产。第一次调用删除接口，将指定资产放入回收站；第二次调用删除接口，将指定资产彻底删除。
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
        if ($localVarParams['assetManageType'] !== null) {
            $queryParams['asset_manage_type'] = $localVarParams['assetManageType'];
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
        if ($localVarParams['authorization'] !== null) {
            $headerParams['authorization'] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams['x_sdk_date'] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams['x_app_user_id'] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserMePrivilege'] !== null) {
            $headerParams['x_user_me_privilege'] = $localVarParams['xUserMePrivilege'];
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
                ['application/json', 'application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json;charset=utf-8'],
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
                ['application/json', 'application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json;charset=utf-8'],
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
                ['application/json', 'application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json;charset=utf-8'],
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
                ['application/json', 'application/json;charset=utf-8']
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
                ['application/json', 'application/json;charset=utf-8']
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
                ['application/json', 'application/json;charset=utf-8']
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
                ['application/json', 'application/json;charset=utf-8']
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
                ['application/json', 'application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json;charset=utf-8'],
                ['application/json', 'application/json;charset=utf-8']
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
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams['x_user_privilege'] = $localVarParams['xUserPrivilege'];
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
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams['x_user_privilege'] = $localVarParams['xUserPrivilege'];
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
                ['application/json', 'application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json;charset=utf-8'],
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
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams['x_user_privilege'] = $localVarParams['xUserPrivilege'];
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
                ['application/json', 'application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/json;charset=utf-8'],
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
                ['application/json', 'application/json;charset=utf-8']
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