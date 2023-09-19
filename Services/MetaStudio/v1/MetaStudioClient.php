<?php

namespace HuaweiCloud\SDK\MetaStudio\v1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class MetaStudioClient extends Client
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
        return new ClientBuilder(new MetaStudioClient());
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
    public function createDigitalAsset($request)
    {
        return $this->createDigitalAssetWithHttpInfo($request);
    }

    public function createDigitalAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateDigitalAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateDigitalAssetRequest');
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
    public function deleteAsset($request)
    {
        return $this->deleteAssetWithHttpInfo($request);
    }

    public function deleteAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteAssetRequest');
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
    public function listAssetSummary($request)
    {
        return $this->listAssetSummaryWithHttpInfo($request);
    }

    public function listAssetSummaryWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListAssetSummaryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListAssetSummaryRequest');
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
    public function listAssets($request)
    {
        return $this->listAssetsWithHttpInfo($request);
    }

    public function listAssetsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserMePrivilege'] !== null) {
            $headerParams[$arr['xUserMePrivilege']] = $localVarParams['xUserMePrivilege'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListAssetsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListAssetsRequest');
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
    public function restoreAsset($request)
    {
        return $this->restoreAssetWithHttpInfo($request);
    }

    public function restoreAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\RestoreAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\RestoreAssetRequest');
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
    public function showAsset($request)
    {
        return $this->showAssetWithHttpInfo($request);
    }

    public function showAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowAssetRequest');
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
    public function updateDigitalAsset($request)
    {
        return $this->updateDigitalAssetWithHttpInfo($request);
    }

    public function updateDigitalAssetWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateDigitalAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateDigitalAssetRequest');
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
    public function createDigitalHumanBusinessCard($request)
    {
        return $this->createDigitalHumanBusinessCardWithHttpInfo($request);
    }

    public function createDigitalHumanBusinessCardWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateDigitalHumanBusinessCardRequest');
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
    public function deleteDigitalHumanBusinessCard($request)
    {
        return $this->deleteDigitalHumanBusinessCardWithHttpInfo($request);
    }

    public function deleteDigitalHumanBusinessCardWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteDigitalHumanBusinessCardRequest');
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
    public function listDigitalHumanBusinessCard($request)
    {
        return $this->listDigitalHumanBusinessCardWithHttpInfo($request);
    }

    public function listDigitalHumanBusinessCardWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListDigitalHumanBusinessCardRequest');
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
    public function showDigitalHumanBusinessCard($request)
    {
        return $this->showDigitalHumanBusinessCardWithHttpInfo($request);
    }

    public function showDigitalHumanBusinessCardWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowDigitalHumanBusinessCardRequest');
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
    public function updateDigitalHumanBusinessCard($request)
    {
        return $this->updateDigitalHumanBusinessCardWithHttpInfo($request);
    }

    public function updateDigitalHumanBusinessCardWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateDigitalHumanBusinessCardRequest');
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
    public function cancel2DDigitalHumanVideo($request)
    {
        return $this->cancel2DDigitalHumanVideoWithHttpInfo($request);
    }

    public function cancel2DDigitalHumanVideoWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\Cancel2DDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\Cancel2DDigitalHumanVideoRequest');
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
    public function create2DDigitalHumanVideo($request)
    {
        return $this->create2DDigitalHumanVideoWithHttpInfo($request);
    }

    public function create2DDigitalHumanVideoWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\Create2DDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\Create2DDigitalHumanVideoRequest');
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
    public function show2DDigitalHumanVideo($request)
    {
        return $this->show2DDigitalHumanVideoWithHttpInfo($request);
    }

    public function show2DDigitalHumanVideoWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\Show2DDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\Show2DDigitalHumanVideoRequest');
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
    public function cancelPhotoDigitalHumanVideo($request)
    {
        return $this->cancelPhotoDigitalHumanVideoWithHttpInfo($request);
    }

    public function cancelPhotoDigitalHumanVideoWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CancelPhotoDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CancelPhotoDigitalHumanVideoRequest');
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
    public function createPhotoDigitalHumanVideo($request)
    {
        return $this->createPhotoDigitalHumanVideoWithHttpInfo($request);
    }

    public function createPhotoDigitalHumanVideoWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreatePhotoDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreatePhotoDigitalHumanVideoRequest');
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
    public function showPhotoDigitalHumanVideo($request)
    {
        return $this->showPhotoDigitalHumanVideoWithHttpInfo($request);
    }

    public function showPhotoDigitalHumanVideoWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowPhotoDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowPhotoDigitalHumanVideoRequest');
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
    public function confirmFileUpload($request)
    {
        return $this->confirmFileUploadWithHttpInfo($request);
    }

    public function confirmFileUploadWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ConfirmFileUploadResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ConfirmFileUploadRequest');
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
    public function createFile($request)
    {
        return $this->createFileWithHttpInfo($request);
    }

    public function createFileWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateFileRequest');
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
    public function deleteFile($request)
    {
        return $this->deleteFileWithHttpInfo($request);
    }

    public function deleteFileWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteFileRequest');
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
    public function createPictureModelingByUrlJob($request)
    {
        return $this->createPictureModelingByUrlJobWithHttpInfo($request);
    }

    public function createPictureModelingByUrlJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams[$arr['xUserPrivilege']] = $localVarParams['xUserPrivilege'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreatePictureModelingByUrlJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreatePictureModelingByUrlJobRequest');
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
    public function createPictureModelingJob($request)
    {
        return $this->createPictureModelingJobWithHttpInfo($request);
    }

    public function createPictureModelingJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams[$arr['xUserPrivilege']] = $localVarParams['xUserPrivilege'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreatePictureModelingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreatePictureModelingJobRequest');
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
    public function listPictureModelingJobs($request)
    {
        return $this->listPictureModelingJobsWithHttpInfo($request);
    }

    public function listPictureModelingJobsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListPictureModelingJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListPictureModelingJobsRequest');
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
    public function showPictureModelingJob($request)
    {
        return $this->showPictureModelingJobWithHttpInfo($request);
    }

    public function showPictureModelingJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowPictureModelingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowPictureModelingJobRequest');
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
    public function executeSmartLiveCommand($request)
    {
        return $this->executeSmartLiveCommandWithHttpInfo($request);
    }

    public function executeSmartLiveCommandWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ExecuteSmartLiveCommandResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ExecuteSmartLiveCommandRequest');
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
    public function listSmartLive($request)
    {
        return $this->listSmartLiveWithHttpInfo($request);
    }

    public function listSmartLiveWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListSmartLiveRequest');
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
    public function liveEventReport($request)
    {
        return $this->liveEventReportWithHttpInfo($request);
    }

    public function liveEventReportWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\LiveEventReportResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\LiveEventReportRequest');
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
    public function showSmartLive($request)
    {
        return $this->showSmartLiveWithHttpInfo($request);
    }

    public function showSmartLiveWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowSmartLiveRequest');
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
    public function startSmartLive($request)
    {
        return $this->startSmartLiveWithHttpInfo($request);
    }

    public function startSmartLiveWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\StartSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\StartSmartLiveRequest');
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
    public function stopSmartLive($request)
    {
        return $this->stopSmartLiveWithHttpInfo($request);
    }

    public function stopSmartLiveWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\StopSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\StopSmartLiveRequest');
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
    public function createSmartLiveRoom($request)
    {
        return $this->createSmartLiveRoomWithHttpInfo($request);
    }

    public function createSmartLiveRoomWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateSmartLiveRoomRequest');
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
    public function deleteSmartLiveRoom($request)
    {
        return $this->deleteSmartLiveRoomWithHttpInfo($request);
    }

    public function deleteSmartLiveRoomWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteSmartLiveRoomRequest');
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
    public function listSmartLiveRooms($request)
    {
        return $this->listSmartLiveRoomsWithHttpInfo($request);
    }

    public function listSmartLiveRoomsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListSmartLiveRoomsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListSmartLiveRoomsRequest');
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
    public function showSmartLiveRoom($request)
    {
        return $this->showSmartLiveRoomWithHttpInfo($request);
    }

    public function showSmartLiveRoomWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowSmartLiveRoomRequest');
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
    public function updateSmartLiveRoom($request)
    {
        return $this->updateSmartLiveRoomWithHttpInfo($request);
    }

    public function updateSmartLiveRoomWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateSmartLiveRoomRequest');
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
    public function listStyles($request)
    {
        return $this->listStylesWithHttpInfo($request);
    }

    public function listStylesWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListStylesResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListStylesRequest');
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
    public function createTtsa($request)
    {
        return $this->createTtsaWithHttpInfo($request);
    }

    public function createTtsaWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams[$arr['xUserPrivilege']] = $localVarParams['xUserPrivilege'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateTtsaResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateTtsaRequest');
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
    public function listTtsaData($request)
    {
        return $this->listTtsaDataWithHttpInfo($request);
    }

    public function listTtsaDataWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListTtsaDataResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListTtsaDataRequest');
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
    public function listTtsaJobs($request)
    {
        return $this->listTtsaJobsWithHttpInfo($request);
    }

    public function listTtsaJobsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListTtsaJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListTtsaJobsRequest');
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
    public function createVideoMotionCaptureJob($request)
    {
        return $this->createVideoMotionCaptureJobWithHttpInfo($request);
    }

    public function createVideoMotionCaptureJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
        }
        if ($localVarParams['xUserPrivilege'] !== null) {
            $headerParams[$arr['xUserPrivilege']] = $localVarParams['xUserPrivilege'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateVideoMotionCaptureJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateVideoMotionCaptureJobRequest');
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
    public function executeVideoMotionCaptureCommand($request)
    {
        return $this->executeVideoMotionCaptureCommandWithHttpInfo($request);
    }

    public function executeVideoMotionCaptureCommandWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ExecuteVideoMotionCaptureCommandResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ExecuteVideoMotionCaptureCommandRequest');
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
    public function listVideoMotionCaptureJobs($request)
    {
        return $this->listVideoMotionCaptureJobsWithHttpInfo($request);
    }

    public function listVideoMotionCaptureJobsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListVideoMotionCaptureJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListVideoMotionCaptureJobsRequest');
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
    public function showVideoMotionCaptureJob($request)
    {
        return $this->showVideoMotionCaptureJobWithHttpInfo($request);
    }

    public function showVideoMotionCaptureJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowVideoMotionCaptureJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowVideoMotionCaptureJobRequest');
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
    public function stopVideoMotionCaptureJob($request)
    {
        return $this->stopVideoMotionCaptureJobWithHttpInfo($request);
    }

    public function stopVideoMotionCaptureJobWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\StopVideoMotionCaptureJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\StopVideoMotionCaptureJobRequest');
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
    public function createVideoScripts($request)
    {
        return $this->createVideoScriptsWithHttpInfo($request);
    }

    public function createVideoScriptsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateVideoScriptsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\CreateVideoScriptsRequest');
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
    public function deleteVideoScript($request)
    {
        return $this->deleteVideoScriptWithHttpInfo($request);
    }

    public function deleteVideoScriptWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteVideoScriptResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\DeleteVideoScriptRequest');
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
    public function listVideoScripts($request)
    {
        return $this->listVideoScriptsWithHttpInfo($request);
    }

    public function listVideoScriptsWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListVideoScriptsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ListVideoScriptsRequest');
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
    public function showVideoScript($request)
    {
        return $this->showVideoScriptWithHttpInfo($request);
    }

    public function showVideoScriptWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowVideoScriptResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\ShowVideoScriptRequest');
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
    public function updateVideoScript($request)
    {
        return $this->updateVideoScriptWithHttpInfo($request);
    }

    public function updateVideoScriptWithHttpInfo($request)
    {
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
            $headerParams[$arr['authorization']] = $localVarParams['authorization'];
        }
        if ($localVarParams['xSdkDate'] !== null) {
            $headerParams[$arr['xSdkDate']] = $localVarParams['xSdkDate'];
        }
        if ($localVarParams['xProjectId'] !== null) {
            $headerParams[$arr['xProjectId']] = $localVarParams['xProjectId'];
        }
        if ($localVarParams['xAppUserId'] !== null) {
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateVideoScriptResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\v1\Model\UpdateVideoScriptRequest');
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