<?php

namespace HuaweiCloud\SDK\MetaStudio\V1;

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
        $client = new ClientBuilder(new MetaStudioClient());
        return $client;
    }


    /**
     * 创建激活码
     *
     * 该接口用于创建激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createActiveCode($request)
    {
        return $this->createActiveCodeWithHttpInfo($request);
    }

    public function createActiveCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/active-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateActiveCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateActiveCodeRequest');
    }

    /**
     * 删除激活码
     *
     * 该接口用于删除激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteActiveCode($request)
    {
        return $this->deleteActiveCodeWithHttpInfo($request);
    }

    public function deleteActiveCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/active-code/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteActiveCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteActiveCodeRequest');
    }

    /**
     * 查询激活码列表
     *
     * 该接口用于查询激活码列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listActiveCode($request)
    {
        return $this->listActiveCodeWithHttpInfo($request);
    }

    public function listActiveCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/active-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['robotId'] !== null) {
            $queryParams['robot_id'] = $localVarParams['robotId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListActiveCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListActiveCodeRequest');
    }

    /**
     * 重置激活码
     *
     * 该接口用于重置激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetActiveCode($request)
    {
        return $this->resetActiveCodeWithHttpInfo($request);
    }

    public function resetActiveCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/active-code/{active_code_id}/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['activeCodeId'] !== null) {
            $pathParams['active_code_id'] = $localVarParams['activeCodeId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ResetActiveCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ResetActiveCodeRequest');
    }

    /**
     * 查询激活码详情
     *
     * 该接口用于查询激活码详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showActiveCode($request)
    {
        return $this->showActiveCodeWithHttpInfo($request);
    }

    public function showActiveCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/active-code/{active_code_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['activeCodeId'] !== null) {
            $pathParams['active_code_id'] = $localVarParams['activeCodeId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowActiveCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowActiveCodeRequest');
    }

    /**
     * 修改激活码
     *
     * 该接口用于修改激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateActiveCode($request)
    {
        return $this->updateActiveCodeWithHttpInfo($request);
    }

    public function updateActiveCodeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/active-code/{active_code_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['activeCodeId'] !== null) {
            $pathParams['active_code_id'] = $localVarParams['activeCodeId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateActiveCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateActiveCodeRequest');
    }

    /**
     * 创建委托
     *
     * 该接口用于创建委托。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAgencyWithRoleType($request)
    {
        return $this->createAgencyWithRoleTypeWithHttpInfo($request);
    }

    public function createAgencyWithRoleTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/agency/{role_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['roleType'] !== null) {
            $pathParams['role_type'] = $localVarParams['roleType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAgencyWithRoleTypeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAgencyWithRoleTypeRequest');
    }

    /**
     * 删除委托
     *
     * 该接口用于删除项目下委托。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAgencyWithRoleType($request)
    {
        return $this->deleteAgencyWithRoleTypeWithHttpInfo($request);
    }

    public function deleteAgencyWithRoleTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/agency/{role_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['roleType'] !== null) {
            $pathParams['role_type'] = $localVarParams['roleType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAgencyWithRoleTypeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAgencyWithRoleTypeRequest');
    }

    /**
     * 查询委托
     *
     * 该接口用于查询项目下委托
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAgency($request)
    {
        return $this->showAgencyWithHttpInfo($request);
    }

    public function showAgencyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/agency';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['roleType'] !== null) {
            $queryParams['role_type'] = $localVarParams['roleType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAgencyResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAgencyRequest');
    }

    /**
     * 创建语音录制配置
     *
     * 该接口用于创建语音录制配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAudioRecordConfig($request)
    {
        return $this->createAudioRecordConfigWithHttpInfo($request);
    }

    public function createAudioRecordConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/audio-record-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAudioRecordConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAudioRecordConfigRequest');
    }

    /**
     * 删除语音录制配置
     *
     * 该接口用于删除语音录制配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAudioRecordConfig($request)
    {
        return $this->deleteAudioRecordConfigWithHttpInfo($request);
    }

    public function deleteAudioRecordConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/audio-record-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAudioRecordConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAudioRecordConfigRequest');
    }

    /**
     * 查询语音录制配置
     *
     * 该接口用于查询语音录制配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAudioRecordConfig($request)
    {
        return $this->showAudioRecordConfigWithHttpInfo($request);
    }

    public function showAudioRecordConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/audio-record-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAudioRecordConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAudioRecordConfigRequest');
    }

    /**
     * 修改语音录制配置
     *
     * 该接口用于修改语音录制配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAudioRecordConfig($request)
    {
        return $this->updateAudioRecordConfigWithHttpInfo($request);
    }

    public function updateAudioRecordConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/audio-record-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateAudioRecordConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateAudioRecordConfigRequest');
    }

    /**
     * 删除导入导出任务
     *
     * 删除导入导出任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTask($request)
    {
        return $this->deleteTaskWithHttpInfo($request);
    }

    public function deleteTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/task/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteTaskResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteTaskRequest');
    }

    /**
     * 下载导入或导出的结果文件
     *
     * 下载导入或者导出结果文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadResultFile($request)
    {
        return $this->downloadResultFileWithHttpInfo($request);
    }

    public function downloadResultFileWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/result/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DownloadResultFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DownloadResultFileRequest');
    }

    /**
     * 下载信息导入模板
     *
     * 下载导入模板，返回导入模板文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadTemplate($request)
    {
        return $this->downloadTemplateWithHttpInfo($request);
    }

    public function downloadTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/import/{resource}/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resource'] !== null) {
            $pathParams['resource'] = $localVarParams['resource'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DownloadTemplateResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DownloadTemplateRequest');
    }

    /**
     * 导出文件
     *
     * 导出文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportResource($request)
    {
        return $this->exportResourceWithHttpInfo($request);
    }

    public function exportResourceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/export/{resource}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['businessId'] !== null) {
            $queryParams['business_id'] = $localVarParams['businessId'];
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
        if ($localVarParams['resource'] !== null) {
            $pathParams['resource'] = $localVarParams['resource'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExportResourceResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExportResourceRequest');
    }

    /**
     * 导入文件
     *
     * 导入文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importResource($request)
    {
        return $this->importResourceWithHttpInfo($request);
    }

    public function importResourceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/import/{resource}';
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
        if ($localVarParams['businessId'] !== null) {
            $queryParams['business_id'] = $localVarParams['businessId'];
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
        if ($localVarParams['resource'] !== null) {
            $pathParams['resource'] = $localVarParams['resource'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ImportResourceResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ImportResourceRequest');
    }

    /**
     * 分页查询导入导出任务列表
     *
     * 分页查询导入导出任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchTask($request)
    {
        return $this->searchTaskWithHttpInfo($request);
    }

    public function searchTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['businessId'] !== null) {
            $queryParams['business_id'] = $localVarParams['businessId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SearchTaskResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SearchTaskRequest');
    }

    /**
     * 查询导入导出任务详情
     *
     * 查询导入导出任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTask($request)
    {
        return $this->showTaskWithHttpInfo($request);
    }

    public function showTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/ies/task/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTaskResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTaskRequest');
    }

    /**
     * 查询用户数据概览
     *
     * 获取周期内用户的资源使用情况概览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSummaryUsageData($request)
    {
        return $this->showSummaryUsageDataWithHttpInfo($request);
    }

    public function showSummaryUsageDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/data-analysis-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['businessType'] !== null) {
            $queryParams['business_type'] = $localVarParams['businessType'];
        }
        if ($localVarParams['unit'] !== null) {
            $queryParams['unit'] = $localVarParams['unit'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSummaryUsageDataResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSummaryUsageDataRequest');
    }

    /**
     * 查询用户数据详情
     *
     * 获取周期内用户的资源使用情况
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUsageData($request)
    {
        return $this->showUsageDataWithHttpInfo($request);
    }

    public function showUsageDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/data-analysis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $queryParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['businessType'] !== null) {
            $queryParams['business_type'] = $localVarParams['businessType'];
        }
        if ($localVarParams['unit'] !== null) {
            $queryParams['unit'] = $localVarParams['unit'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowUsageDataResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowUsageDataRequest');
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
    public function createDialogUrl($request)
    {
        return $this->createDialogUrlWithHttpInfo($request);
    }

    public function createDialogUrlWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDialogUrlResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDialogUrlRequest');
    }

    /**
     * 查询数字人智能交互任务列表
     *
     * 该接口用于查询数字人智能交互任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartChatJob($request)
    {
        return $this->listSmartChatJobWithHttpInfo($request);
    }

    public function listSmartChatJobWithHttpInfo($request)
    {
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartChatJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartChatJobRequest');
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
    public function showSmartChatJob($request)
    {
        return $this->showSmartChatJobWithHttpInfo($request);
    }

    public function showSmartChatJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatJobRequest');
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
    public function startSmartChatJob($request)
    {
        return $this->startSmartChatJobWithHttpInfo($request);
    }

    public function startSmartChatJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartChatJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartChatJobRequest');
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
    public function stopSmartChatJob($request)
    {
        return $this->stopSmartChatJobWithHttpInfo($request);
    }

    public function stopSmartChatJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartChatJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartChatJobRequest');
    }

    /**
     * 创建对话结果上报配置
     *
     * 该接口用于创建对话结果上报配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDialogReportConfig($request)
    {
        return $this->createDialogReportConfigWithHttpInfo($request);
    }

    public function createDialogReportConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/dialog-report-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDialogReportConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDialogReportConfigRequest');
    }

    /**
     * 删除对话结果上报配置
     *
     * 该接口用于删除对话结果上报配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDialogReportConfig($request)
    {
        return $this->deleteDialogReportConfigWithHttpInfo($request);
    }

    public function deleteDialogReportConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/dialog-report-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDialogReportConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDialogReportConfigRequest');
    }

    /**
     * 查询对话结果上报配置
     *
     * 该接口用于查询对话结果上报配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDialogReportConfig($request)
    {
        return $this->showDialogReportConfigWithHttpInfo($request);
    }

    public function showDialogReportConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/dialog-report-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDialogReportConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDialogReportConfigRequest');
    }

    /**
     * 修改对话结果上报配置
     *
     * 该接口用于修改对话结果上报配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDialogReportConfig($request)
    {
        return $this->updateDialogReportConfigWithHttpInfo($request);
    }

    public function updateDialogReportConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/dialog-report-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDialogReportConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDialogReportConfigRequest');
    }

    /**
     * 批量资产操作
     *
     * 该接口用批量资产操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchExecuteAssetAction($request)
    {
        return $this->batchExecuteAssetActionWithHttpInfo($request);
    }

    public function batchExecuteAssetActionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-assets/batch-action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\BatchExecuteAssetActionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\BatchExecuteAssetActionRequest');
    }

    /**
     * 复制资产
     *
     * 该接口用于在Region B复制Region A的指定资产。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAssetByReplicationInfo($request)
    {
        return $this->createAssetByReplicationInfoWithHttpInfo($request);
    }

    public function createAssetByReplicationInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-assets-by-replication-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAssetByReplicationInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAssetByReplicationInfoRequest');
    }

    /**
     * 创建资产
     *
     * 该接口用于在资产库中添加上传新的媒体资产。可上传的资产类型包括：分身数字人模型、背景图片、素材图片、素材视频、PPT等。
     * &gt; 上传的图片、视频和背景图片，如果需要在视频制作素材中可见，需要设置system_properties。
     * &gt; - 资产类型是IMAGE时，通过system_properties来区分背景图片（BACKGROUND_IMG）、素材图片（MATERIAL_IMG）。
     * &gt; - 资产类型是VIDEO时，通过system_properties来区分素材视频（MATERIAL_VIDEO）、名片视频（BUSSINESS_CARD_VIDEO）。
     * &gt; MetaStudio平台生成的视频，system_properties带CREATED_BY_PLATFORM。
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
        if ($localVarParams['xMssAuthorization'] !== null) {
            $headerParams[$arr['xMssAuthorization']] = $localVarParams['xMssAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalAssetRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteAssetRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetSummaryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetSummaryRequest');
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
        if ($localVarParams['tagCombinationType'] !== null) {
            $queryParams['tag_combination_type'] = $localVarParams['tagCombinationType'];
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
        if ($localVarParams['accurateQueryField'] !== null) {
            $queryParams['accurate_query_field'] = $localVarParams['accurateQueryField'];
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
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
        if ($localVarParams['isWithActionLibrary'] !== null) {
            $queryParams['is_with_action_library'] = $localVarParams['isWithActionLibrary'];
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
        if ($localVarParams['isRealtimeVoice'] !== null) {
            $queryParams['is_realtime_voice'] = $localVarParams['isRealtimeVoice'];
        }
        if ($localVarParams['humanModel2dVersion'] !== null) {
            $queryParams['human_model_2d_version'] = $localVarParams['humanModel2dVersion'];
        }
        if ($localVarParams['includeDeviceName'] !== null) {
            $queryParams['include_device_name'] = $localVarParams['includeDeviceName'];
        }
        if ($localVarParams['excludeDeviceName'] !== null) {
            $queryParams['exclude_device_name'] = $localVarParams['excludeDeviceName'];
        }
        if ($localVarParams['supportedService'] !== null) {
            $queryParams['supported_service'] = $localVarParams['supportedService'];
        }
        if ($localVarParams['appUserId'] !== null) {
            $queryParams['app_user_id'] = $localVarParams['appUserId'];
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListAssetsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\RestoreAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\RestoreAssetRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAssetRequest');
    }

    /**
     * 查询资产复制信息
     *
     * 当需要将资产从A Region复制到B Region时，先要在A Region调用该接口用于查询资产复制信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetReplicationInfo($request)
    {
        return $this->showAssetReplicationInfoWithHttpInfo($request);
    }

    public function showAssetReplicationInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-assets/{asset_id}/replication-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAssetReplicationInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAssetReplicationInfoRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalAssetRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDigitalHumanBusinessCardRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDigitalHumanBusinessCardRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanBusinessCardRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDigitalHumanBusinessCardRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalHumanBusinessCardResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDigitalHumanBusinessCardRequest');
    }

    /**
     * 查询视频制作任务列表
     *
     * 该接口用于查询视频制作任务列表。可查询分身数字人视频制作列表，照片数字人视频制作列表等。
     * &gt; - 默认查询最近一个月任务记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDigitalHumanVideo($request)
    {
        return $this->listDigitalHumanVideoWithHttpInfo($request);
    }

    public function listDigitalHumanVideoWithHttpInfo($request)
    {
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
        if ($localVarParams['fuzzyQueryField'] !== null) {
            $queryParams['fuzzy_query_field'] = $localVarParams['fuzzyQueryField'];
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
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['jobIds'] !== null) {
            $queryParams['job_ids'] = $localVarParams['jobIds'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDigitalHumanVideoRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Cancel2DDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Cancel2DDigitalHumanVideoRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2DDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2DDigitalHumanVideoRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2DDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2DDigitalHumanVideoRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CancelPhotoDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CancelPhotoDigitalHumanVideoRequest');
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
    public function createPhotoDetection($request)
    {
        return $this->createPhotoDetectionWithHttpInfo($request);
    }

    public function createPhotoDetectionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDetectionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDetectionRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePhotoDigitalHumanVideoRequest');
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
    public function showPhotoDetection($request)
    {
        return $this->showPhotoDetectionWithHttpInfo($request);
    }

    public function showPhotoDetectionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDetectionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDetectionRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDigitalHumanVideoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPhotoDigitalHumanVideoRequest');
    }

    /**
     * 上传文档
     *
     * 该接口用于上传文档。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDocument($request)
    {
        return $this->createDocumentWithHttpInfo($request);
    }

    public function createDocumentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document';
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
        if ($localVarParams['knowledgeLibraryId'] !== null) {
            $queryParams['knowledge_library_id'] = $localVarParams['knowledgeLibraryId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDocumentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateDocumentRequest');
    }

    /**
     * 批量删除文档
     *
     * 该接口用于批量删除文档。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDocument($request)
    {
        return $this->deleteDocumentWithHttpInfo($request);
    }

    public function deleteDocumentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDocumentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteDocumentRequest');
    }

    /**
     * 下载文档
     *
     * 该接口用于下载文档。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadDocument($request)
    {
        return $this->downloadDocumentWithHttpInfo($request);
    }

    public function downloadDocumentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DownloadDocumentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DownloadDocumentRequest');
    }

    /**
     * 查询文档列表
     *
     * 该接口用于分页查询文档列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDocumentInfo($request)
    {
        return $this->listDocumentInfoWithHttpInfo($request);
    }

    public function listDocumentInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['knowledgeLibraryId'] !== null) {
            $queryParams['knowledge_library_id'] = $localVarParams['knowledgeLibraryId'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDocumentInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDocumentInfoRequest');
    }

    /**
     * 查询文档详情
     *
     * 该接口用于查询文档详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDocumentInfo($request)
    {
        return $this->showDocumentInfoWithHttpInfo($request);
    }

    public function showDocumentInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document/detail/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDocumentInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowDocumentInfoRequest');
    }

    /**
     * 修改文档
     *
     * 该接口用于修改文档
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDocument($request)
    {
        return $this->updateDocumentWithHttpInfo($request);
    }

    public function updateDocumentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document/update/{document_id}';
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
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDocumentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDocumentRequest');
    }

    /**
     * 分页查询文档分段信息
     *
     * 该接口用于分页查询文档分段信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDocumentSegment($request)
    {
        return $this->listDocumentSegmentWithHttpInfo($request);
    }

    public function listDocumentSegmentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document-segment/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['documentId'] !== null) {
            $queryParams['document_id'] = $localVarParams['documentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDocumentSegmentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListDocumentSegmentRequest');
    }

    /**
     * 文档分段效果预览
     *
     * 该接口用于文档分段效果预览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function previewDocumentSegment($request)
    {
        return $this->previewDocumentSegmentWithHttpInfo($request);
    }

    public function previewDocumentSegmentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document-segment/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['documentId'] !== null) {
            $queryParams['document_id'] = $localVarParams['documentId'];
        }
        if ($localVarParams['previewLines'] !== null) {
            $queryParams['preview_lines'] = $localVarParams['previewLines'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\PreviewDocumentSegmentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\PreviewDocumentSegmentRequest');
    }

    /**
     * 开始文档分段
     *
     * 该接口用于开始文档分段任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startDocumentSegment($request)
    {
        return $this->startDocumentSegmentWithHttpInfo($request);
    }

    public function startDocumentSegmentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document-segment/segment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartDocumentSegmentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartDocumentSegmentRequest');
    }

    /**
     * 修改文档分段内容
     *
     * 该接口用于文档分段内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDocumentSegmentInfo($request)
    {
        return $this->updateDocumentSegmentInfoWithHttpInfo($request);
    }

    public function updateDocumentSegmentInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document-segment/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDocumentSegmentInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDocumentSegmentInfoRequest');
    }

    /**
     * 更新文档分段配置
     *
     * 该接口用于更新文档分段配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDocumentSegmentParam($request)
    {
        return $this->updateDocumentSegmentParamWithHttpInfo($request);
    }

    public function updateDocumentSegmentParamWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/document-segment/{document_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['documentId'] !== null) {
            $pathParams['document_id'] = $localVarParams['documentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDocumentSegmentParamResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateDocumentSegmentParamRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmFileUploadResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmFileUploadRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFileRequest');
    }

    /**
     * 创建大文件
     *
     * 该接口用于创建大文件（超过5G），获取分段上传URL。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLargeFile($request)
    {
        return $this->createLargeFileWithHttpInfo($request);
    }

    public function createLargeFileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/large-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateLargeFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateLargeFileRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteFileRequest');
    }

    /**
     * 创建热点问题
     *
     * 该接口用于创建热点问题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHotQuestion($request)
    {
        return $this->createHotQuestionWithHttpInfo($request);
    }

    public function createHotQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-question';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateHotQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateHotQuestionRequest');
    }

    /**
     * 删除热点问题
     *
     * 该接口用于删除热点问题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHotQuestion($request)
    {
        return $this->deleteHotQuestionWithHttpInfo($request);
    }

    public function deleteHotQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-question/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteHotQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteHotQuestionRequest');
    }

    /**
     * 查询热点问题列表
     *
     * 该接口用于查询热点问题列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHotQuestion($request)
    {
        return $this->listHotQuestionWithHttpInfo($request);
    }

    public function listHotQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-question';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['robotId'] !== null) {
            $queryParams['robot_id'] = $localVarParams['robotId'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListHotQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListHotQuestionRequest');
    }

    /**
     * 查询热点问题详情
     *
     * 该接口用于查询热点问题详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHotQuestion($request)
    {
        return $this->showHotQuestionWithHttpInfo($request);
    }

    public function showHotQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-question/{hot_question_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hotQuestionId'] !== null) {
            $pathParams['hot_question_id'] = $localVarParams['hotQuestionId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowHotQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowHotQuestionRequest');
    }

    /**
     * 修改热点问题
     *
     * 该接口用于修改热点问题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHotQuestion($request)
    {
        return $this->updateHotQuestionWithHttpInfo($request);
    }

    public function updateHotQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-question/{hot_question_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hotQuestionId'] !== null) {
            $pathParams['hot_question_id'] = $localVarParams['hotQuestionId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateHotQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateHotQuestionRequest');
    }

    /**
     * 创建热词记录
     *
     * 该接口用于创建热词记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHotWords($request)
    {
        return $this->createHotWordsWithHttpInfo($request);
    }

    public function createHotWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateHotWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateHotWordsRequest');
    }

    /**
     * 删除热词记录
     *
     * 该接口用于删除热词记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHotWords($request)
    {
        return $this->deleteHotWordsWithHttpInfo($request);
    }

    public function deleteHotWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words/{hot_words_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hotWordsId'] !== null) {
            $pathParams['hot_words_id'] = $localVarParams['hotWordsId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteHotWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteHotWordsRequest');
    }

    /**
     * 查询热词记录列表
     *
     * 该接口用于查询热词记录列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHotWords($request)
    {
        return $this->listHotWordsWithHttpInfo($request);
    }

    public function listHotWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['robotId'] !== null) {
            $queryParams['robot_id'] = $localVarParams['robotId'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
        }
        if ($localVarParams['hotWordsType'] !== null) {
            $queryParams['hot_words_type'] = $localVarParams['hotWordsType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListHotWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListHotWordsRequest');
    }

    /**
     * 查询配置热词记录详情
     *
     * 该接口用于查询热词记录详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHotWords($request)
    {
        return $this->showHotWordsWithHttpInfo($request);
    }

    public function showHotWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words/{hot_words_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hotWordsId'] !== null) {
            $pathParams['hot_words_id'] = $localVarParams['hotWordsId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowHotWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowHotWordsRequest');
    }

    /**
     * 查询热词功能开关
     *
     * 该接口用于查询热词功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHotWordsSwitch($request)
    {
        return $this->showHotWordsSwitchWithHttpInfo($request);
    }

    public function showHotWordsSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowHotWordsSwitchResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowHotWordsSwitchRequest');
    }

    /**
     * 修改热词记录
     *
     * 该接口用于修改热词记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHotWords($request)
    {
        return $this->updateHotWordsWithHttpInfo($request);
    }

    public function updateHotWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words/{hot_words_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['hotWordsId'] !== null) {
            $pathParams['hot_words_id'] = $localVarParams['hotWordsId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateHotWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateHotWordsRequest');
    }

    /**
     * 修改热词功能开关
     *
     * 该接口用于修改热词功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHotWordsSwitch($request)
    {
        return $this->updateHotWordsSwitchWithHttpInfo($request);
    }

    public function updateHotWordsSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/hot-words-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateHotWordsSwitchResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateHotWordsSwitchRequest');
    }

    /**
     * 创建指令集
     *
     * 该接口用于创建指令集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstructionLibrary($request)
    {
        return $this->createInstructionLibraryWithHttpInfo($request);
    }

    public function createInstructionLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction-library';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInstructionLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInstructionLibraryRequest');
    }

    /**
     * 删除指令集
     *
     * 该接口用于删除指令集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstructionLibrary($request)
    {
        return $this->deleteInstructionLibraryWithHttpInfo($request);
    }

    public function deleteInstructionLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction-library/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInstructionLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInstructionLibraryRequest');
    }

    /**
     * 查询指令集列表
     *
     * 该接口用于查询指令集列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstructionLibrary($request)
    {
        return $this->listInstructionLibraryWithHttpInfo($request);
    }

    public function listInstructionLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction-library';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInstructionLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInstructionLibraryRequest');
    }

    /**
     * 查询指令集详情
     *
     * 该接口用于查询指令集详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstructionLibrary($request)
    {
        return $this->showInstructionLibraryWithHttpInfo($request);
    }

    public function showInstructionLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction-library/{instruction_library_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instructionLibraryId'] !== null) {
            $pathParams['instruction_library_id'] = $localVarParams['instructionLibraryId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowInstructionLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowInstructionLibraryRequest');
    }

    /**
     * 修改指令集
     *
     * 该接口用于修改指令集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstructionLibrary($request)
    {
        return $this->updateInstructionLibraryWithHttpInfo($request);
    }

    public function updateInstructionLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction-library/{instruction_library_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instructionLibraryId'] !== null) {
            $pathParams['instruction_library_id'] = $localVarParams['instructionLibraryId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInstructionLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInstructionLibraryRequest');
    }

    /**
     * 创建指令
     *
     * 该接口用于创建指令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstruction($request)
    {
        return $this->createInstructionWithHttpInfo($request);
    }

    public function createInstructionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInstructionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInstructionRequest');
    }

    /**
     * 删除指令
     *
     * 该接口用于删除指令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstruction($request)
    {
        return $this->deleteInstructionWithHttpInfo($request);
    }

    public function deleteInstructionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInstructionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInstructionRequest');
    }

    /**
     * 查询指令列表
     *
     * 该接口用于查询指令列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstruction($request)
    {
        return $this->listInstructionWithHttpInfo($request);
    }

    public function listInstructionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instructionLibraryId'] !== null) {
            $queryParams['instruction_library_id'] = $localVarParams['instructionLibraryId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInstructionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInstructionRequest');
    }

    /**
     * 查询指令详情
     *
     * 该接口用于查询指令详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstruction($request)
    {
        return $this->showInstructionWithHttpInfo($request);
    }

    public function showInstructionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction/{instruction_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instructionId'] !== null) {
            $pathParams['instruction_id'] = $localVarParams['instructionId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowInstructionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowInstructionRequest');
    }

    /**
     * 修改指令
     *
     * 该接口用于修改指令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstruction($request)
    {
        return $this->updateInstructionWithHttpInfo($request);
    }

    public function updateInstructionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/instruction/{instruction_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instructionId'] !== null) {
            $pathParams['instruction_id'] = $localVarParams['instructionId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInstructionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInstructionRequest');
    }

    /**
     * 互动规则库增加规则
     *
     * 该接口用于互动规则库增加规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInteractionRule($request)
    {
        return $this->createInteractionRuleWithHttpInfo($request);
    }

    public function createInteractionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups/{group_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractionRuleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractionRuleRequest');
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
    public function createInteractionRuleGroup($request)
    {
        return $this->createInteractionRuleGroupWithHttpInfo($request);
    }

    public function createInteractionRuleGroupWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractionRuleGroupResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractionRuleGroupRequest');
    }

    /**
     * 互动规则库删除某条规则
     *
     * 该接口用于互动规则库修改删除规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInteractionRule($request)
    {
        return $this->deleteInteractionRuleWithHttpInfo($request);
    }

    public function deleteInteractionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups/{group_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInteractionRuleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInteractionRuleRequest');
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
    public function deleteInteractionRuleGroup($request)
    {
        return $this->deleteInteractionRuleGroupWithHttpInfo($request);
    }

    public function deleteInteractionRuleGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteInteractionRuleGroupRequest');
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
    public function listInteractionRuleGroups($request)
    {
        return $this->listInteractionRuleGroupsWithHttpInfo($request);
    }

    public function listInteractionRuleGroupsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInteractionRuleGroupsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInteractionRuleGroupsRequest');
    }

    /**
     * 查询智能直播间互动规则库概要列表
     *
     * 该接口用于智能直播间互动规则库概要列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInteractionRuleGroupsSummary($request)
    {
        return $this->listInteractionRuleGroupsSummaryWithHttpInfo($request);
    }

    public function listInteractionRuleGroupsSummaryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInteractionRuleGroupsSummaryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInteractionRuleGroupsSummaryRequest');
    }

    /**
     * 查询智能直播间互动规则库详情
     *
     * 该接口用于查询智能直播间互动规则库详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInteractionRuleGroup($request)
    {
        return $this->showInteractionRuleGroupWithHttpInfo($request);
    }

    public function showInteractionRuleGroupWithHttpInfo($request)
    {
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowInteractionRuleGroupResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowInteractionRuleGroupRequest');
    }

    /**
     * 互动规则库修改某条规则
     *
     * 该接口用于互动规则库修改某条规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInteractionRule($request)
    {
        return $this->updateInteractionRuleWithHttpInfo($request);
    }

    public function updateInteractionRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-interaction-rule-groups/{group_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInteractionRuleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInteractionRuleRequest');
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
    public function updateInteractionRuleGroup($request)
    {
        return $this->updateInteractionRuleGroupWithHttpInfo($request);
    }

    public function updateInteractionRuleGroupWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateInteractionRuleGroupRequest');
    }

    /**
     * 交互助手对话
     *
     * 该接口用于交互助手对话。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInteractiveChat($request)
    {
        return $this->createInteractiveChatWithHttpInfo($request);
    }

    public function createInteractiveChatWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/chat';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractiveChatResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateInteractiveChatRequest');
    }

    /**
     * 下载加密文件
     *
     * 下载加密文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEncryptFile($request)
    {
        return $this->showEncryptFileWithHttpInfo($request);
    }

    public function showEncryptFileWithHttpInfo($request)
    {
        $resourcePath = '/v1/voice-training-manage/common/encrypt-file-download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tenantId'] !== null) {
            $queryParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['onceToken'] !== null) {
            $queryParams['once_token'] = $localVarParams['onceToken'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowEncryptFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowEncryptFileRequest');
    }

    /**
     * 创建知识库意图和问法
     *
     * 该接口用于创建知识库意图和问法。一个意图包含一个主题，一个答案，若干个问法等。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIntentAndQuestion($request)
    {
        return $this->createIntentAndQuestionWithHttpInfo($request);
    }

    public function createIntentAndQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/intent-question';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateIntentAndQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateIntentAndQuestionRequest');
    }

    /**
     * 创建知识库意图
     *
     * 该接口用于创建知识库意图。一个意图包含一个主题，一个答案，若干个问法等。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createKnowledgeIntent($request)
    {
        return $this->createKnowledgeIntentWithHttpInfo($request);
    }

    public function createKnowledgeIntentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/intent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeIntentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeIntentRequest');
    }

    /**
     * 删除知识库意图
     *
     * 该接口用于删除知识库意图。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKnowledgeIntent($request)
    {
        return $this->deleteKnowledgeIntentWithHttpInfo($request);
    }

    public function deleteKnowledgeIntentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/intent/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeIntentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeIntentRequest');
    }

    /**
     * 查询知识库意图列表
     *
     * 该接口用于查询知识库意图列表。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKnowledgeIntent($request)
    {
        return $this->listKnowledgeIntentWithHttpInfo($request);
    }

    public function listKnowledgeIntentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/intent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['skillId'] !== null) {
            $queryParams['skill_id'] = $localVarParams['skillId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeIntentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeIntentRequest');
    }

    /**
     * 查询知识库意图详情
     *
     * 该接口用于查询知识库意图详情。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKnowledgeIntent($request)
    {
        return $this->showKnowledgeIntentWithHttpInfo($request);
    }

    public function showKnowledgeIntentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/intent/{intent_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['intentId'] !== null) {
            $pathParams['intent_id'] = $localVarParams['intentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeIntentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeIntentRequest');
    }

    /**
     * 修改知识库意图
     *
     * 该接口用于修改知识库意图。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKnowledgeIntent($request)
    {
        return $this->updateKnowledgeIntentWithHttpInfo($request);
    }

    public function updateKnowledgeIntentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/intent/{intent_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['intentId'] !== null) {
            $pathParams['intent_id'] = $localVarParams['intentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeIntentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeIntentRequest');
    }

    /**
     * 知识库召回测试
     *
     * 该接口用于知识库召回测试。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkRecallKnowledgeLibrary($request)
    {
        return $this->checkRecallKnowledgeLibraryWithHttpInfo($request);
    }

    public function checkRecallKnowledgeLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/knowledge-library/recall';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CheckRecallKnowledgeLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CheckRecallKnowledgeLibraryRequest');
    }

    /**
     * 创建知识库
     *
     * 该接口用于创建知识库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createKnowledgeLibrary($request)
    {
        return $this->createKnowledgeLibraryWithHttpInfo($request);
    }

    public function createKnowledgeLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/knowledge-library';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeLibraryRequest');
    }

    /**
     * 删除知识库
     *
     * 该接口用于删除知识库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKnowledgeLibrary($request)
    {
        return $this->deleteKnowledgeLibraryWithHttpInfo($request);
    }

    public function deleteKnowledgeLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/knowledge-library/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeLibraryRequest');
    }

    /**
     * 查询知识库列表
     *
     * 该接口用于查询知识库列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKnowledgeLibrary($request)
    {
        return $this->listKnowledgeLibraryWithHttpInfo($request);
    }

    public function listKnowledgeLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/knowledge-library';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
        }
        if ($localVarParams['knowledgeType'] !== null) {
            $queryParams['knowledge_type'] = $localVarParams['knowledgeType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeLibraryRequest');
    }

    /**
     * 查询知识库详情
     *
     * 该接口用于查询知识库详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKnowledgeLibrary($request)
    {
        return $this->showKnowledgeLibraryWithHttpInfo($request);
    }

    public function showKnowledgeLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/knowledge-library/{knowledge_library_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['knowledgeLibraryId'] !== null) {
            $pathParams['knowledge_library_id'] = $localVarParams['knowledgeLibraryId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeLibraryRequest');
    }

    /**
     * 修改知识库
     *
     * 该接口用于修改知识库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKnowledgeLibrary($request)
    {
        return $this->updateKnowledgeLibraryWithHttpInfo($request);
    }

    public function updateKnowledgeLibraryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/knowledge-library/{knowledge_library_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['knowledgeLibraryId'] !== null) {
            $pathParams['knowledge_library_id'] = $localVarParams['knowledgeLibraryId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeLibraryResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeLibraryRequest');
    }

    /**
     * 批量创建知识库问法
     *
     * 该接口用于批量创建知识库问法。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBatchKnowledgeQuestion($request)
    {
        return $this->createBatchKnowledgeQuestionWithHttpInfo($request);
    }

    public function createBatchKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question-batch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateBatchKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateBatchKnowledgeQuestionRequest');
    }

    /**
     * 创建知识库问法
     *
     * 该接口用于创建知识库问法。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createKnowledgeQuestion($request)
    {
        return $this->createKnowledgeQuestionWithHttpInfo($request);
    }

    public function createKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeQuestionRequest');
    }

    /**
     * 删除知识库问法
     *
     * 该接口用于删除知识库问法。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKnowledgeQuestion($request)
    {
        return $this->deleteKnowledgeQuestionWithHttpInfo($request);
    }

    public function deleteKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeQuestionRequest');
    }

    /**
     * 查询知识库问法列表
     *
     * 该接口用于查询知识库问法列表。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKnowledgeQuestion($request)
    {
        return $this->listKnowledgeQuestionWithHttpInfo($request);
    }

    public function listKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['intentId'] !== null) {
            $queryParams['intent_id'] = $localVarParams['intentId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeQuestionRequest');
    }

    /**
     * 查询知识库问法详情
     *
     * 该接口用于查询知识库问法详情。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKnowledgeQuestion($request)
    {
        return $this->showKnowledgeQuestionWithHttpInfo($request);
    }

    public function showKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question/{question_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['questionId'] !== null) {
            $pathParams['question_id'] = $localVarParams['questionId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeQuestionRequest');
    }

    /**
     * 批量修改知识库问法
     *
     * 该接口用于批量修改知识库问法。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBatchKnowledgeQuestion($request)
    {
        return $this->updateBatchKnowledgeQuestionWithHttpInfo($request);
    }

    public function updateBatchKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question-batch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateBatchKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateBatchKnowledgeQuestionRequest');
    }

    /**
     * 修改知识库问法
     *
     * 该接口用于修改知识库问法。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKnowledgeQuestion($request)
    {
        return $this->updateKnowledgeQuestionWithHttpInfo($request);
    }

    public function updateKnowledgeQuestionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/question/{question_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['questionId'] !== null) {
            $pathParams['question_id'] = $localVarParams['questionId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeQuestionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeQuestionRequest');
    }

    /**
     * 创建知识库技能
     *
     * 该接口用于创建知识库技能。一个技能用于特定场景的交互问答，包含若干个意图等。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createKnowledgeSkill($request)
    {
        return $this->createKnowledgeSkillWithHttpInfo($request);
    }

    public function createKnowledgeSkillWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/skill';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeSkillResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateKnowledgeSkillRequest');
    }

    /**
     * 删除知识库技能
     *
     * 该接口用于删除知识库技能。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteKnowledgeSkill($request)
    {
        return $this->deleteKnowledgeSkillWithHttpInfo($request);
    }

    public function deleteKnowledgeSkillWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/skill/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeSkillResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteKnowledgeSkillRequest');
    }

    /**
     * 导出知识库技能
     *
     * 该接口用于导出知识库技能。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportKnowledgeSkill($request)
    {
        return $this->exportKnowledgeSkillWithHttpInfo($request);
    }

    public function exportKnowledgeSkillWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/skill/{skill_id}/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['exportType'] !== null) {
            $queryParams['export_type'] = $localVarParams['exportType'];
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
        if ($localVarParams['skillId'] !== null) {
            $pathParams['skill_id'] = $localVarParams['skillId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExportKnowledgeSkillResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExportKnowledgeSkillRequest');
    }

    /**
     * 查询知识库技能列表
     *
     * 该接口用于查询知识库技能列表。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listKnowledgeSkill($request)
    {
        return $this->listKnowledgeSkillWithHttpInfo($request);
    }

    public function listKnowledgeSkillWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/skill';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeSkillResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListKnowledgeSkillRequest');
    }

    /**
     * 查询知识库技能详情
     *
     * 该接口用于查询知识库技能详情。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showKnowledgeSkill($request)
    {
        return $this->showKnowledgeSkillWithHttpInfo($request);
    }

    public function showKnowledgeSkillWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/skill/{skill_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['skillId'] !== null) {
            $pathParams['skill_id'] = $localVarParams['skillId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeSkillResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowKnowledgeSkillRequest');
    }

    /**
     * 修改知识库技能
     *
     * 该接口用于修改知识库技能。接口使用限制详见[API使用限制](metastudio_02_0000.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKnowledgeSkill($request)
    {
        return $this->updateKnowledgeSkillWithHttpInfo($request);
    }

    public function updateKnowledgeSkillWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/knowledge/skill/{skill_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['skillId'] !== null) {
            $pathParams['skill_id'] = $localVarParams['skillId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeSkillResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateKnowledgeSkillRequest');
    }

    /**
     * 创建第三方直播平台
     *
     * 该接口用于创建第三方直播平台。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLivePlatform($request)
    {
        return $this->createLivePlatformWithHttpInfo($request);
    }

    public function createLivePlatformWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/platforms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateLivePlatformResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateLivePlatformRequest');
    }

    /**
     * 删除第三方直播平台信息
     *
     * 该接口用于删除第三方直播平台信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLivePlatform($request)
    {
        return $this->deleteLivePlatformWithHttpInfo($request);
    }

    public function deleteLivePlatformWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/platforms/{platform_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['platformId'] !== null) {
            $pathParams['platform_id'] = $localVarParams['platformId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteLivePlatformResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteLivePlatformRequest');
    }

    /**
     * 查询第三方直播平台商品列表
     *
     * 该接口用于查询第三方直播平台商品列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLivePlatformProducts($request)
    {
        return $this->listLivePlatformProductsWithHttpInfo($request);
    }

    public function listLivePlatformProductsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['platformId'] !== null) {
            $queryParams['platform_id'] = $localVarParams['platformId'];
        }
        if ($localVarParams['liveId'] !== null) {
            $queryParams['live_id'] = $localVarParams['liveId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListLivePlatformProductsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListLivePlatformProductsRequest');
    }

    /**
     * 查询直播平台列表
     *
     * 该接口用于查询直播平台列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLivePlatforms($request)
    {
        return $this->listLivePlatformsWithHttpInfo($request);
    }

    public function listLivePlatformsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/platforms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['accessType'] !== null) {
            $queryParams['access_type'] = $localVarParams['accessType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListLivePlatformsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListLivePlatformsRequest');
    }

    /**
     * 查询第三方直播平台信息
     *
     * 该接口用于查询第三方直播平台信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLivePlatform($request)
    {
        return $this->showLivePlatformWithHttpInfo($request);
    }

    public function showLivePlatformWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/platforms/{platform_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['platformId'] !== null) {
            $pathParams['platform_id'] = $localVarParams['platformId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLivePlatformResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLivePlatformRequest');
    }

    /**
     * 查询直播平台对接方式
     *
     * 该接口用于直播平台对接方式。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLivePlatformAccessType($request)
    {
        return $this->showLivePlatformAccessTypeWithHttpInfo($request);
    }

    public function showLivePlatformAccessTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/access-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['used'] !== null) {
            $queryParams['used'] = $localVarParams['used'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLivePlatformAccessTypeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLivePlatformAccessTypeRequest');
    }

    /**
     * 更新第三方直播平台信息
     *
     * 该接口用于更新第三方直播平台信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLivePlatform($request)
    {
        return $this->updateLivePlatformWithHttpInfo($request);
    }

    public function updateLivePlatformWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/live-platforms/platforms/{platform_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['platformId'] !== null) {
            $pathParams['platform_id'] = $localVarParams['platformId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateLivePlatformResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateLivePlatformRequest');
    }

    /**
     * 创建大语言模型配置
     *
     * 该接口用于创建大语言模型配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLlmConfig($request)
    {
        return $this->createLlmConfigWithHttpInfo($request);
    }

    public function createLlmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/llm-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateLlmConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateLlmConfigRequest');
    }

    /**
     * 删除大语言模型配置
     *
     * 该接口用于删除大语言模型配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLlmConfig($request)
    {
        return $this->deleteLlmConfigWithHttpInfo($request);
    }

    public function deleteLlmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/llm-config/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteLlmConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteLlmConfigRequest');
    }

    /**
     * 查询大语言模型配置列表
     *
     * 该接口用于查询大语言模型配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLlmConfig($request)
    {
        return $this->listLlmConfigWithHttpInfo($request);
    }

    public function listLlmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/llm-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListLlmConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListLlmConfigRequest');
    }

    /**
     * 查询大语言模型配置详情
     *
     * 该接口用于查询大语言模型配置详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLlmConfig($request)
    {
        return $this->showLlmConfigWithHttpInfo($request);
    }

    public function showLlmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/llm-config/{llm_config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['llmConfigId'] !== null) {
            $pathParams['llm_config_id'] = $localVarParams['llmConfigId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLlmConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLlmConfigRequest');
    }

    /**
     * 修改大语言模型配置
     *
     * 该接口用于修改大语言模型配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLlmConfig($request)
    {
        return $this->updateLlmConfigWithHttpInfo($request);
    }

    public function updateLlmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/llm-config/{llm_config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['llmConfigId'] !== null) {
            $pathParams['llm_config_id'] = $localVarParams['llmConfigId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateLlmConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateLlmConfigRequest');
    }

    /**
     * 创建MCP服务端对接配置
     *
     * 该接口用于创建MCP服务端对接配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMcpServer($request)
    {
        return $this->createMcpServerWithHttpInfo($request);
    }

    public function createMcpServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/mcp-server';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMcpServerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMcpServerRequest');
    }

    /**
     * 删除MCP服务端对接配置
     *
     * 该接口用于删除MCP服务端对接配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMcpServer($request)
    {
        return $this->deleteMcpServerWithHttpInfo($request);
    }

    public function deleteMcpServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/mcp-server/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteMcpServerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteMcpServerRequest');
    }

    /**
     * 查询MCP服务端对接配置列表
     *
     * 该接口用于查询MCP服务端对接配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMcpServer($request)
    {
        return $this->listMcpServerWithHttpInfo($request);
    }

    public function listMcpServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/mcp-server';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListMcpServerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListMcpServerRequest');
    }

    /**
     * 查询MCP服务端对接配置详情
     *
     * 该接口用于查询MCP服务端对接配置详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMcpServer($request)
    {
        return $this->showMcpServerWithHttpInfo($request);
    }

    public function showMcpServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/mcp-server/{mcp_server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['mcpServerId'] !== null) {
            $pathParams['mcp_server_id'] = $localVarParams['mcpServerId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowMcpServerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowMcpServerRequest');
    }

    /**
     * 修改MCP服务端对接配置
     *
     * 该接口用于修改MCP服务端对接配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMcpServer($request)
    {
        return $this->updateMcpServerWithHttpInfo($request);
    }

    public function updateMcpServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/mcp-server/{mcp_server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['mcpServerId'] !== null) {
            $pathParams['mcp_server_id'] = $localVarParams['mcpServerId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateMcpServerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateMcpServerRequest');
    }

    /**
     * 创建一次性鉴权码
     *
     * 该接口用于创建一次性鉴权码，有效期5分钟，鉴权码只能使用一次，每次使用后需要重新获取。
     * &gt; 接口只能通过第三方后台调用，不能在浏览器前台直接调用，否则会有跨域问题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOnceCode($request)
    {
        return $this->createOnceCodeWithHttpInfo($request);
    }

    public function createOnceCodeWithHttpInfo($request)
    {
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateOnceCodeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateOnceCodeRequest');
    }

    /**
     * 订购metastudio云服务产品
     *
     * 该接口用于订购MetaStudio服务的包周期,一次性,按需套餐包产品
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMetaStudioOrders($request)
    {
        return $this->createMetaStudioOrdersWithHttpInfo($request);
    }

    public function createMetaStudioOrdersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/mss/public/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMetaStudioOrdersResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMetaStudioOrdersRequest');
    }

    /**
     * 批量删除安抚话术
     *
     * 该接口用于批量删除安抚话术。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeletePacifyWords($request)
    {
        return $this->batchDeletePacifyWordsWithHttpInfo($request);
    }

    public function batchDeletePacifyWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\BatchDeletePacifyWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\BatchDeletePacifyWordsRequest');
    }

    /**
     * 创建安抚话术
     *
     * 该接口用于创建安抚话术。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPacifyWords($request)
    {
        return $this->createPacifyWordsWithHttpInfo($request);
    }

    public function createPacifyWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePacifyWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePacifyWordsRequest');
    }

    /**
     * 删除安抚话术
     *
     * 该接口用于删除安抚话术。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePacifyWords($request)
    {
        return $this->deletePacifyWordsWithHttpInfo($request);
    }

    public function deletePacifyWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words/{pacify_words_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pacifyWordsId'] !== null) {
            $pathParams['pacify_words_id'] = $localVarParams['pacifyWordsId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeletePacifyWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeletePacifyWordsRequest');
    }

    /**
     * 查询安抚话术列表
     *
     * 该接口用于查询安抚话术列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPacifyWords($request)
    {
        return $this->listPacifyWordsWithHttpInfo($request);
    }

    public function listPacifyWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['robotId'] !== null) {
            $queryParams['robot_id'] = $localVarParams['robotId'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
        }
        if ($localVarParams['pacifyWordsType'] !== null) {
            $queryParams['pacify_words_type'] = $localVarParams['pacifyWordsType'];
        }
        if ($localVarParams['intent'] !== null) {
            $queryParams['intent'] = $localVarParams['intent'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPacifyWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPacifyWordsRequest');
    }

    /**
     * 查询安抚话术详情
     *
     * 该接口用于查询安抚话术详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPacifyWords($request)
    {
        return $this->showPacifyWordsWithHttpInfo($request);
    }

    public function showPacifyWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words/{pacify_words_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pacifyWordsId'] !== null) {
            $pathParams['pacify_words_id'] = $localVarParams['pacifyWordsId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsRequest');
    }

    /**
     * 查询安抚话术意图
     *
     * 该接口用于查询安抚话术意图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPacifyWordsIntent($request)
    {
        return $this->showPacifyWordsIntentWithHttpInfo($request);
    }

    public function showPacifyWordsIntentWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words-intent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsIntentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsIntentRequest');
    }

    /**
     * 查询安抚话术功能开关
     *
     * 该接口用于查询安抚话术功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPacifyWordsSwitch($request)
    {
        return $this->showPacifyWordsSwitchWithHttpInfo($request);
    }

    public function showPacifyWordsSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsSwitchResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsSwitchRequest');
    }

    /**
     * 查询安抚话术等待触发时长
     *
     * 该接口用于查询等待触发时长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPacifyWordsTriggerTime($request)
    {
        return $this->showPacifyWordsTriggerTimeWithHttpInfo($request);
    }

    public function showPacifyWordsTriggerTimeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words-time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsTriggerTimeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPacifyWordsTriggerTimeRequest');
    }

    /**
     * 修改安抚话术
     *
     * 该接口用于修改安抚话术。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePacifyWords($request)
    {
        return $this->updatePacifyWordsWithHttpInfo($request);
    }

    public function updatePacifyWordsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words/{pacify_words_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pacifyWordsId'] !== null) {
            $pathParams['pacify_words_id'] = $localVarParams['pacifyWordsId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePacifyWordsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePacifyWordsRequest');
    }

    /**
     * 修改安抚话术功能开关
     *
     * 该接口用于修改安抚话术功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePacifyWordsSwitch($request)
    {
        return $this->updatePacifyWordsSwitchWithHttpInfo($request);
    }

    public function updatePacifyWordsSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePacifyWordsSwitchResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePacifyWordsSwitchRequest');
    }

    /**
     * 修改安抚话术等待触发时长
     *
     * 该接口用于修改安抚话术等待触发时长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePacifyWordsTriggerTime($request)
    {
        return $this->updatePacifyWordsTriggerTimeWithHttpInfo($request);
    }

    public function updatePacifyWordsTriggerTimeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/pacify-words-time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePacifyWordsTriggerTimeResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePacifyWordsTriggerTimeRequest');
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePictureModelingByUrlJobRequest');
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePictureModelingJobRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPictureModelingJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPictureModelingJobsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPictureModelingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPictureModelingJobRequest');
    }

    /**
     * 创建插件配置
     *
     * 该接口用于创建插件配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPluginConfig($request)
    {
        return $this->createPluginConfigWithHttpInfo($request);
    }

    public function createPluginConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/plugin-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePluginConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreatePluginConfigRequest');
    }

    /**
     * 删除插件配置
     *
     * 该接口用于删除插件配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePluginConfig($request)
    {
        return $this->deletePluginConfigWithHttpInfo($request);
    }

    public function deletePluginConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/plugin-config/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeletePluginConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeletePluginConfigRequest');
    }

    /**
     * 查询插件配置列表
     *
     * 该接口用于查询插件配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPluginConfig($request)
    {
        return $this->listPluginConfigWithHttpInfo($request);
    }

    public function listPluginConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/plugin-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pluginProvider'] !== null) {
            $queryParams['plugin_provider'] = $localVarParams['pluginProvider'];
        }
        if ($localVarParams['pluginType'] !== null) {
            $queryParams['plugin_type'] = $localVarParams['pluginType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPluginConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListPluginConfigRequest');
    }

    /**
     * 查询插件配置详情
     *
     * 该接口用于查询插件配置详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginConfig($request)
    {
        return $this->showPluginConfigWithHttpInfo($request);
    }

    public function showPluginConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/plugin-config/{plugin_config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pluginConfigId'] !== null) {
            $pathParams['plugin_config_id'] = $localVarParams['pluginConfigId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPluginConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPluginConfigRequest');
    }

    /**
     * 查询插件配置默认信息
     *
     * 该接口用于查询插件配置默认信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginConfigDefaultInfo($request)
    {
        return $this->showPluginConfigDefaultInfoWithHttpInfo($request);
    }

    public function showPluginConfigDefaultInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/plugin-config-default';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPluginConfigDefaultInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowPluginConfigDefaultInfoRequest');
    }

    /**
     * 修改插件配置
     *
     * 该接口用于修改插件配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePluginConfig($request)
    {
        return $this->updatePluginConfigWithHttpInfo($request);
    }

    public function updatePluginConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/plugin-config/{plugin_config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pluginConfigId'] !== null) {
            $pathParams['plugin_config_id'] = $localVarParams['pluginConfigId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePluginConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdatePluginConfigRequest');
    }

    /**
     * 创建商品
     *
     * Create product
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProduct($request)
    {
        return $this->createProductWithHttpInfo($request);
    }

    public function createProductWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateProductResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateProductRequest');
    }

    /**
     * 删除商品
     *
     * 删除商品
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteProduct($request)
    {
        return $this->deleteProductWithHttpInfo($request);
    }

    public function deleteProductWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteProductResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteProductRequest');
    }

    /**
     * 查询商品列表
     *
     * 查询商品列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProducts($request)
    {
        return $this->listProductsWithHttpInfo($request);
    }

    public function listProductsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListProductsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListProductsRequest');
    }

    /**
     * 商品资产组合配置
     *
     * 商品资产组合配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setProductAsset($request)
    {
        return $this->setProductAssetWithHttpInfo($request);
    }

    public function setProductAssetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/products/{product_id}/assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SetProductAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SetProductAssetRequest');
    }

    /**
     * 查询商品详情
     *
     * Show product
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProduct($request)
    {
        return $this->showProductWithHttpInfo($request);
    }

    public function showProductWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowProductResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowProductRequest');
    }

    /**
     * 更新商品
     *
     * Update product
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProduct($request)
    {
        return $this->updateProductWithHttpInfo($request);
    }

    public function updateProductWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['productId'] !== null) {
            $pathParams['product_id'] = $localVarParams['productId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateProductResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateProductRequest');
    }

    /**
     * 创建问答对
     *
     * 该接口用于创建问答对。一个问答对包含一个标准问题，一个答案，若干个相似问题等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createQuestionAnswer($request)
    {
        return $this->createQuestionAnswerWithHttpInfo($request);
    }

    public function createQuestionAnswerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/question-answer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateQuestionAnswerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateQuestionAnswerRequest');
    }

    /**
     * 删除问答对
     *
     * 该接口用于删除问答对。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteQuestionAnswer($request)
    {
        return $this->deleteQuestionAnswerWithHttpInfo($request);
    }

    public function deleteQuestionAnswerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/question-answer/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteQuestionAnswerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteQuestionAnswerRequest');
    }

    /**
     * 查询问答对列表
     *
     * 该接口用于查询问答对列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuestionAnswer($request)
    {
        return $this->listQuestionAnswerWithHttpInfo($request);
    }

    public function listQuestionAnswerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/question-answer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['knowledgeLibraryId'] !== null) {
            $queryParams['knowledge_library_id'] = $localVarParams['knowledgeLibraryId'];
        }
        if ($localVarParams['question'] !== null) {
            $queryParams['question'] = $localVarParams['question'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListQuestionAnswerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListQuestionAnswerRequest');
    }

    /**
     * 查询问答对详情
     *
     * 该接口用于查询问答对详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuestionAnswer($request)
    {
        return $this->showQuestionAnswerWithHttpInfo($request);
    }

    public function showQuestionAnswerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/question-answer/{question_answer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['questionAnswerId'] !== null) {
            $pathParams['question_answer_id'] = $localVarParams['questionAnswerId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowQuestionAnswerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowQuestionAnswerRequest');
    }

    /**
     * 修改问答对
     *
     * 该接口用于修改问答对。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateQuestionAnswer($request)
    {
        return $this->updateQuestionAnswerWithHttpInfo($request);
    }

    public function updateQuestionAnswerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/question-answer/{question_answer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['questionAnswerId'] !== null) {
            $pathParams['question_answer_id'] = $localVarParams['questionAnswerId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateQuestionAnswerResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateQuestionAnswerRequest');
    }

    /**
     * 查询声音训练资源
     *
     * 查询声音训练资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVoiceTrainingQuotas($request)
    {
        return $this->showVoiceTrainingQuotasWithHttpInfo($request);
    }

    public function showVoiceTrainingQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVoiceTrainingQuotasResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVoiceTrainingQuotasRequest');
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
    public function createRobot($request)
    {
        return $this->createRobotWithHttpInfo($request);
    }

    public function createRobotWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateRobotResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateRobotRequest');
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
    public function deleteRobot($request)
    {
        return $this->deleteRobotWithHttpInfo($request);
    }

    public function deleteRobotWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteRobotRequest');
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
    public function listRobot($request)
    {
        return $this->listRobotWithHttpInfo($request);
    }

    public function listRobotWithHttpInfo($request)
    {
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
        if ($localVarParams['roomId'] !== null) {
            $queryParams['room_id'] = $localVarParams['roomId'];
        }
        if ($localVarParams['robotType'] !== null) {
            $queryParams['robot_type'] = $localVarParams['robotType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListRobotResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListRobotRequest');
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
    public function showRobot($request)
    {
        return $this->showRobotWithHttpInfo($request);
    }

    public function showRobotWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowRobotRequest');
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
    public function updateRobot($request)
    {
        return $this->updateRobotWithHttpInfo($request);
    }

    public function updateRobotWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateRobotRequest');
    }

    /**
     * 校验应用
     *
     * 该接口用于校验应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function validateRobot($request)
    {
        return $this->validateRobotWithHttpInfo($request);
    }

    public function validateRobotWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/robot/validate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ValidateRobotResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ValidateRobotRequest');
    }

    /**
     * 创建角色
     *
     * 该接口用于创建角色。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRole($request)
    {
        return $this->createRoleWithHttpInfo($request);
    }

    public function createRoleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateRoleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateRoleRequest');
    }

    /**
     * 删除角色
     *
     * 该接口用于删除角色。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRole($request)
    {
        return $this->deleteRoleWithHttpInfo($request);
    }

    public function deleteRoleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/role/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteRoleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteRoleRequest');
    }

    /**
     * 查询角色列表
     *
     * 该接口用于查询角色列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRole($request)
    {
        return $this->listRoleWithHttpInfo($request);
    }

    public function listRoleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListRoleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListRoleRequest');
    }

    /**
     * 查询角色详情
     *
     * 该接口用于查询角色详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRole($request)
    {
        return $this->showRoleWithHttpInfo($request);
    }

    public function showRoleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/role/{role_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowRoleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowRoleRequest');
    }

    /**
     * 修改角色
     *
     * 该接口用于修改角色。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRole($request)
    {
        return $this->updateRoleWithHttpInfo($request);
    }

    public function updateRoleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/wise-brain-manager/role/{role_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateRoleResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateRoleRequest');
    }

    /**
     * 创建智能交互对话
     *
     * 该接口用于创建智能交互对话。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSmartChatRoom($request)
    {
        return $this->createSmartChatRoomWithHttpInfo($request);
    }

    public function createSmartChatRoomWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartChatRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartChatRoomRequest');
    }

    /**
     * 删除智能交互对话
     *
     * 该接口用于删除智能交互对话。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSmartChatRoom($request)
    {
        return $this->deleteSmartChatRoomWithHttpInfo($request);
    }

    public function deleteSmartChatRoomWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartChatRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartChatRoomRequest');
    }

    /**
     * 查询智能交互对话列表
     *
     * 该接口用于智能交互对话列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartChatRooms($request)
    {
        return $this->listSmartChatRoomsWithHttpInfo($request);
    }

    public function listSmartChatRoomsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartChatRoomsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartChatRoomsRequest');
    }

    /**
     * 查询智能交互对话详情
     *
     * 该接口用于查询智能交互对话详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSmartChatRoom($request)
    {
        return $this->showSmartChatRoomWithHttpInfo($request);
    }

    public function showSmartChatRoomWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartChatRoomRequest');
    }

    /**
     * 更新智能交互对话信息
     *
     * 该接口用于智能交互对话信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSmartChatRoom($request)
    {
        return $this->updateSmartChatRoomWithHttpInfo($request);
    }

    public function updateSmartChatRoomWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartChatRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartChatRoomRequest');
    }

    /**
     * 租户设置直播租户级配置
     *
     * 该接口用于租户设置直播租户级配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSmartLiveUserConfig($request)
    {
        return $this->updateSmartLiveUserConfigWithHttpInfo($request);
    }

    public function updateSmartLiveUserConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-configs/user-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartLiveUserConfigResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartLiveUserConfigRequest');
    }

    /**
     * 批量确认命令
     *
     * 该接口用于批量确认命令列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchConfirmLiveCommands($request)
    {
        return $this->batchConfirmLiveCommandsWithHttpInfo($request);
    }

    public function batchConfirmLiveCommandsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs/{job_id}/batch-commands-confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\BatchConfirmLiveCommandsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\BatchConfirmLiveCommandsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteSmartLiveCommandResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteSmartLiveCommandRequest');
    }

    /**
     * 查询数字人直播插入命令列表
     *
     * 该接口用于查询数字人直播插入命令列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInsertCommands($request)
    {
        return $this->listInsertCommandsWithHttpInfo($request);
    }

    public function listInsertCommandsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/smart-live-jobs/{job_id}/command/insert-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInsertCommandsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListInsertCommandsRequest');
    }

    /**
     * 查询某个智能直播间下直播任务列表
     *
     * 该接口用于查询某个智能直播间的直播任务列表。
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
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRequest');
    }

    /**
     * 查询租户所有数字人直播任务列表
     *
     * 该接口用于查询租户所有数字人智能直播任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartLiveJobs($request)
    {
        return $this->listSmartLiveJobsWithHttpInfo($request);
    }

    public function listSmartLiveJobsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveJobsRequest');
    }

    /**
     * 查询租户未确认的互动规则命令列表
     *
     * 该接口用于查询租户未确认的互动规则命令列表，仅限于需要做二次确认的特定用户使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartLiveRuleCommands($request)
    {
        return $this->listSmartLiveRuleCommandsWithHttpInfo($request);
    }

    public function listSmartLiveRuleCommandsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-command/rule-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRuleCommandsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRuleCommandsRequest');
    }

    /**
     * 查询租户未确认的剧本命令列表
     *
     * 该接口用于查询租户未确认的剧本命令列表，仅限于需要做二次确认的特定用户使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmartLiveScriptCommands($request)
    {
        return $this->listSmartLiveScriptCommandsWithHttpInfo($request);
    }

    public function listSmartLiveScriptCommandsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-command/script-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveScriptCommandsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveScriptCommandsRequest');
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
        if ($localVarParams['xMssAuthKey'] !== null) {
            $headerParams[$arr['xMssAuthKey']] = $localVarParams['xMssAuthKey'];
        }
        if ($localVarParams['xMssExpiresTime'] !== null) {
            $headerParams[$arr['xMssExpiresTime']] = $localVarParams['xMssExpiresTime'];
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventReportRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StartSmartLiveRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartLiveResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopSmartLiveRequest');
    }

    /**
     * 直播间确认
     *
     * 该接口用直播间二次确认
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function confirmSmarLiveRoom($request)
    {
        return $this->confirmSmarLiveRoomWithHttpInfo($request);
    }

    public function confirmSmarLiveRoomWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmSmarLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmSmarLiveRoomRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSmartLiveRoomRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteSmartLiveRoomRequest');
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
        if ($localVarParams['roomType'] !== null) {
            $queryParams['room_type'] = $localVarParams['roomType'];
        }
        if ($localVarParams['templateOwnType'] !== null) {
            $queryParams['template_own_type'] = $localVarParams['templateOwnType'];
        }
        if ($localVarParams['confirmState'] !== null) {
            $queryParams['confirm_state'] = $localVarParams['confirmState'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRoomsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListSmartLiveRoomsRequest');
    }

    /**
     * 查询直播建配置风险信息
     *
     * 该接口用查询直播建配置风险信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLiveWarningInfo($request)
    {
        return $this->showLiveWarningInfoWithHttpInfo($request);
    }

    public function showLiveWarningInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/smart-live-rooms/{room_id}/live-warning-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLiveWarningInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowLiveWarningInfoRequest');
    }

    /**
     * 查询智能直播间剧本详情
     *
     * 该接口用于查询智能直播间剧本详情。
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSmartLiveRoomRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartLiveRoomResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateSmartLiveRoomRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListStylesResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListStylesRequest');
    }

    /**
     * 创建分身数字人视频字幕文件
     *
     * 该接口用于创建分身数字人视频字幕文件任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubtitleFile($request)
    {
        return $this->createSubtitleFileWithHttpInfo($request);
    }

    public function createSubtitleFileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subtitle-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSubtitleFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSubtitleFileRequest');
    }

    /**
     * 查询分身数字人视频字幕文件任务详情
     *
     * 该接口用于查询分身数字人视频字幕文件任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSubtitleFile($request)
    {
        return $this->showSubtitleFileWithHttpInfo($request);
    }

    public function showSubtitleFileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/subtitle-files/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSubtitleFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowSubtitleFileRequest');
    }

    /**
     * 统计时间段内过期的资源数量
     *
     * 统计指定时间段内即将过期的包周期与一次性资源数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countTenantResources($request)
    {
        return $this->countTenantResourcesWithHttpInfo($request);
    }

    public function countTenantResourcesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/tenants/resources-count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['business'] !== null) {
            $queryParams['business'] = $localVarParams['business'];
        }
        if ($localVarParams['resourceExpireStartTime'] !== null) {
            $queryParams['resource_expire_start_time'] = $localVarParams['resourceExpireStartTime'];
        }
        if ($localVarParams['resourceExpireEndTime'] !== null) {
            $queryParams['resource_expire_end_time'] = $localVarParams['resourceExpireEndTime'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CountTenantResourcesResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CountTenantResourcesRequest');
    }

    /**
     * 查看租户资源列表
     *
     * 查看租户资源列表。
     * &gt; 按需套餐包用量本接口无法查询，需要调用CBC接口查询，详见[按需套餐包用量查询](https://cbc.huaweicloud.com/bm/support/api-apidt/CBCInterface_0001239.html)和[查询资源包信息](https://cbc.huaweicloud.com/bm/support/api-apidt/CBCInterface_0000511.html)。
     * &gt; 各种资源的计费方式请参考[计费说明](https://support.huaweicloud.com/productdesc-metastudio/metastudio_01_0006.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTenantResources($request)
    {
        return $this->listTenantResourcesWithHttpInfo($request);
    }

    public function listTenantResourcesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/tenants/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['business'] !== null) {
            $queryParams['business'] = $localVarParams['business'];
        }
        if ($localVarParams['resourceSource'] !== null) {
            $queryParams['resource_source'] = $localVarParams['resourceSource'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['resourceExpireStartTime'] !== null) {
            $queryParams['resource_expire_start_time'] = $localVarParams['resourceExpireStartTime'];
        }
        if ($localVarParams['resourceExpireEndTime'] !== null) {
            $queryParams['resource_expire_end_time'] = $localVarParams['resourceExpireEndTime'];
        }
        if ($localVarParams['subResource'] !== null) {
            $queryParams['sub_resource'] = $localVarParams['subResource'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTenantResourcesResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTenantResourcesRequest');
    }

    /**
     * 查看租户资源用量信息
     *
     * 查询租户一次性和包周期（包年/包月）资源用量信息。
     * &gt; 按需套餐包用量本接口无法查询，需要调用CBC接口查询，详见[按需套餐包用量查询](https://cbc.huaweicloud.com/bm/support/api-apidt/CBCInterface_0001239.html)和[查询资源包信息](https://cbc.huaweicloud.com/bm/support/api-apidt/CBCInterface_0000511.html)。
     * &gt; 各种资源的计费方式请参考[计费说明](https://support.huaweicloud.com/productdesc-metastudio/metastudio_01_0006.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceUsage($request)
    {
        return $this->showResourceUsageWithHttpInfo($request);
    }

    public function showResourceUsageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/tenants/resources-usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['business'] !== null) {
            $queryParams['business'] = $localVarParams['business'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowResourceUsageResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowResourceUsageRequest');
    }

    /**
     * 签署云服务声明
     *
     * 签署云服务声明。调用此接口前请知悉[[metastudio隐私协议](https://www.huaweicloud.com/declaration/tsa_metastudio.html)](tag:hws)[[metastudio隐私协议](https://www.huaweicloud.com/intl/en-us/declaration-sg/tsa-metastudio.html)](tag:hws_hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function signAgreement($request)
    {
        return $this->signAgreementWithHttpInfo($request);
    }

    public function signAgreementWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/tenants/service-agreements/signed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SignAgreementResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SignAgreementRequest');
    }

    /**
     * 签署特殊云服务声明
     *
     * 签署特殊云服务声明,目前可签署自动支付协议。开启自动支付协议之后,调用下单接口时，华为云将进行自动扣费。若因账户余额不足导致扣费失败，系统会生成待支付订单，您可前往费用中心-我的订单查看，届时您需手动完成支付。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function signSpecialAgreement($request)
    {
        return $this->signSpecialAgreementWithHttpInfo($request);
    }

    public function signSpecialAgreementWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/tenants/special-agreements/signed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SignSpecialAgreementResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SignSpecialAgreementRequest');
    }

    /**
     * 提交短任务
     *
     * 提交短任务，执行改接口后，任务会正式开始执行。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function commitShortJob($request)
    {
        return $this->commitShortJobWithHttpInfo($request);
    }

    public function commitShortJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/short-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CommitShortJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CommitShortJobRequest');
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
    public function commitVoiceTrainingJob($request)
    {
        return $this->commitVoiceTrainingJobWithHttpInfo($request);
    }

    public function commitVoiceTrainingJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CommitVoiceTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CommitVoiceTrainingJobRequest');
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
    public function confirmTrainingSegment($request)
    {
        return $this->confirmTrainingSegmentWithHttpInfo($request);
    }

    public function confirmTrainingSegmentWithHttpInfo($request)
    {
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmTrainingSegmentResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ConfirmTrainingSegmentRequest');
    }

    /**
     * 创建短任务
     *
     * 用户创建短任务（音频质量检测等），该接口会返回一个obs上传地址，用于上传语音文件。
     * 文件上传后，调用“提交短任务”接口，启动短任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createShortJob($request)
    {
        return $this->createShortJobWithHttpInfo($request);
    }

    public function createShortJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/short-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateShortJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateShortJobRequest');
    }

    /**
     * 创建高级版语音训练任务
     *
     * 用户创建语音训练高级版任务，该接口会返回一个obs上传地址，用于上传语音文件。
     * 
     * 语音文件为一段WAV格式的长音频文件，仅支持将语音文件打包成zip压缩格式上传。
     * 
     * 文件上传后，调用“提交语音训练任务”接口，启动审核和训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingAdvanceJob($request)
    {
        return $this->createTrainingAdvanceJobWithHttpInfo($request);
    }

    public function createTrainingAdvanceJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingAdvanceJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingAdvanceJobRequest');
    }

    /**
     * 创建基础版语音训练任务
     *
     * 用户创建语音训练基础版任务，该接口会返回一个obs上传地址，用于上传语音文件。
     * 
     * 支持2种方式上传语音文件：
     * * 语音文件和文本文件打包成zip上传：语音文件已经切分成20个wav文件，每个语音文件对应一个txt文本文件，所有文件打包成zip文件。语音文件命名规则：0.wav~19.wav；文本文件命名规则：0.txt~19.txt。
     * * 语音文件和文本文件逐句上传：每次上传一句语料的语音文件和文本文件，再调用“确认在线录音结果”接口确认语音和文本内容是否一致。确认成功后再上传和确认下一句。
     * 
     * 文件上传后，调用“提交语音训练任务”接口，启动审核和训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingBasicJob($request)
    {
        return $this->createTrainingBasicJobWithHttpInfo($request);
    }

    public function createTrainingBasicJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingBasicJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingBasicJobRequest');
    }

    /**
     * 创建进阶版语音训练任务
     *
     * 用户创建语音训练进阶版任务，该接口会返回一个obs上传地址，用于上传语音文件。
     * 
     * 支持2种方式上传语音文件：
     * * 语音文件和文本文件打包成zip上传：语音文件已经切分成100个wav文件，每个语音文件对应一个txt文本文件，所有文件打包成zip文件。语音文件命名规则：0.wav~99.wav；文本文件命名规则：0.txt~99.txt。
     * * 语音文件和文本文件逐句上传：每次上传一句语料的语音文件和文本文件，再调用“确认在线录音结果”接口确认语音和文本内容是否一致。确认成功后再上传和确认下一句。
     * 
     * 文件上传后，调用“提交语音训练任务”接口，启动审核和训练。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingMiddleJob($request)
    {
        return $this->createTrainingMiddleJobWithHttpInfo($request);
    }

    public function createTrainingMiddleJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingMiddleJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingMiddleJobRequest');
    }

    /**
     * 创建第三方平台语音训练任务
     *
     * 用户创建第三方平台语音训练任务,该接口会返回一个obs上传地址，用于上传语音文件。
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
    public function createTrainingThirdPartyJob($request)
    {
        return $this->createTrainingThirdPartyJobWithHttpInfo($request);
    }

    public function createTrainingThirdPartyJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/third-party-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingThirdPartyJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingThirdPartyJobRequest');
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
    public function deleteVoiceTrainingJob($request)
    {
        return $this->deleteVoiceTrainingJobWithHttpInfo($request);
    }

    public function deleteVoiceTrainingJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVoiceTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVoiceTrainingJobRequest');
    }

    /**
     * 查询任务操作日志
     *
     * 查询任务操作日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobOperationLog($request)
    {
        return $this->listJobOperationLogWithHttpInfo($request);
    }

    public function listJobOperationLogWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}/op-logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListJobOperationLogResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListJobOperationLogRequest');
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
    public function listVoiceTrainingJob($request)
    {
        return $this->listVoiceTrainingJobWithHttpInfo($request);
    }

    public function listVoiceTrainingJobWithHttpInfo($request)
    {
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
        if ($localVarParams['updateUntil'] !== null) {
            $queryParams['update_until'] = $localVarParams['updateUntil'];
        }
        if ($localVarParams['updateSince'] !== null) {
            $queryParams['update_since'] = $localVarParams['updateSince'];
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
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['batchName'] !== null) {
            $queryParams['batch_name'] = $localVarParams['batchName'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['isOndemandResource'] !== null) {
            $queryParams['is_ondemand_resource'] = $localVarParams['isOndemandResource'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVoiceTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVoiceTrainingJobRequest');
    }

    /**
     * 设置任务批次
     *
     * 用户设置任务批次，该接口用于批量任务管理场景，设置任务的批次
     * * 需要开通NA租户权限后才能正常调用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setJobBatchName($request)
    {
        return $this->setJobBatchNameWithHttpInfo($request);
    }

    public function setJobBatchNameWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/batch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xAppUserId']] = $localVarParams['xAppUserId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SetJobBatchNameResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SetJobBatchNameRequest');
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
    public function showJobAuditResult($request)
    {
        return $this->showJobAuditResultWithHttpInfo($request);
    }

    public function showJobAuditResultWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobAuditResultResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobAuditResultRequest');
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
    public function showJobUploadingAddress($request)
    {
        return $this->showJobUploadingAddressWithHttpInfo($request);
    }

    public function showJobUploadingAddressWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRequest');
    }

    /**
     * 查询短任务详情
     *
     * 查询短任务详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showShortJob($request)
    {
        return $this->showShortJobWithHttpInfo($request);
    }

    public function showShortJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/short-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowShortJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowShortJobRequest');
    }

    /**
     * 查询用户配置的个性化音频时长
     *
     * 查询用户配置的个性化音频时长
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTenantDurationCfg($request)
    {
        return $this->showTenantDurationCfgWithHttpInfo($request);
    }

    public function showTenantDurationCfgWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/tenant-duration-cfg';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTenantDurationCfgResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTenantDurationCfgRequest');
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
    public function showTrainingSegmentInfo($request)
    {
        return $this->showTrainingSegmentInfoWithHttpInfo($request);
    }

    public function showTrainingSegmentInfoWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTrainingSegmentInfoResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTrainingSegmentInfoRequest');
    }

    /**
     * 用户获取附件上传url
     *
     * 用户获取附件上传url
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserReviewAttachmentUploadingAddress($request)
    {
        return $this->showUserReviewAttachmentUploadingAddressWithHttpInfo($request);
    }

    public function showUserReviewAttachmentUploadingAddressWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/voice-training-manage/user/jobs/{job_id}/review-attachment-uploading-address-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['endNumber'] !== null) {
            $queryParams['end_number'] = $localVarParams['endNumber'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowUserReviewAttachmentUploadingAddressResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowUserReviewAttachmentUploadingAddressRequest');
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
    public function showVoiceTrainingJob($request)
    {
        return $this->showVoiceTrainingJobWithHttpInfo($request);
    }

    public function showVoiceTrainingJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVoiceTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVoiceTrainingJobRequest');
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
    public function create2dModelTrainingJob($request)
    {
        return $this->create2dModelTrainingJobWithHttpInfo($request);
    }

    public function create2dModelTrainingJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2dModelTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Create2dModelTrainingJobRequest');
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
    public function delete2dModelTrainingJob($request)
    {
        return $this->delete2dModelTrainingJobWithHttpInfo($request);
    }

    public function delete2dModelTrainingJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Delete2dModelTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Delete2dModelTrainingJobRequest');
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
    public function execute2dModelTrainingCommandByUser($request)
    {
        return $this->execute2dModelTrainingCommandByUserWithHttpInfo($request);
    }

    public function execute2dModelTrainingCommandByUserWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Execute2dModelTrainingCommandByUserResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Execute2dModelTrainingCommandByUserRequest');
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
    public function list2dModelTrainingJob($request)
    {
        return $this->list2dModelTrainingJobWithHttpInfo($request);
    }

    public function list2dModelTrainingJobWithHttpInfo($request)
    {
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
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['queryProjectId'] !== null) {
            $queryParams['query_project_id'] = $localVarParams['queryProjectId'];
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
        if ($localVarParams['modelResolution'] !== null) {
            $queryParams['model_resolution'] = $localVarParams['modelResolution'];
        }
        if ($localVarParams['isFlexus'] !== null) {
            $queryParams['is_flexus'] = $localVarParams['isFlexus'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\List2dModelTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\List2dModelTrainingJobRequest');
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
    public function show2dModelTrainingJob($request)
    {
        return $this->show2dModelTrainingJobWithHttpInfo($request);
    }

    public function show2dModelTrainingJobWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2dModelTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Show2dModelTrainingJobRequest');
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
    public function update2dModelTrainingJob($request)
    {
        return $this->update2dModelTrainingJobWithHttpInfo($request);
    }

    public function update2dModelTrainingJobWithHttpInfo($request)
    {
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
                ['application/json', 'application/json;charset=utf-8']
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\Update2dModelTrainingJobRequest');
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
    public function createFacialAnimations($request)
    {
        return $this->createFacialAnimationsWithHttpInfo($request);
    }

    public function createFacialAnimationsWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateFacialAnimationsRequest');
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsaRequest');
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
    public function listFacialAnimationsData($request)
    {
        return $this->listFacialAnimationsDataWithHttpInfo($request);
    }

    public function listFacialAnimationsDataWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListFacialAnimationsDataResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListFacialAnimationsDataRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaDataResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaDataRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtsaJobsRequest');
    }

    /**
     * 校验音色模型是否可用（自研和第三方音色）
     *
     * 该接口用于校验音色模型是否可用，模型可用返回模型信息，不可用返回具体不可用的原因
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkVoiceAsset($request)
    {
        return $this->checkVoiceAssetWithHttpInfo($request);
    }

    public function checkVoiceAssetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/check-voice-asset/{voice_asset_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['voiceAssetId'] !== null) {
            $pathParams['voice_asset_id'] = $localVarParams['voiceAssetId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CheckVoiceAssetResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CheckVoiceAssetRequest');
    }

    /**
     * 获取TTS语音合成任务记录
     *
     * 该接口用于获取TTS语音合成任务记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTtsJob($request)
    {
        return $this->showTtsJobWithHttpInfo($request);
    }

    public function showTtsJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/tts-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['ttsServiceEnum'] !== null) {
            $queryParams['tts_service_enum'] = $localVarParams['ttsServiceEnum'];
        }
        if ($localVarParams['businessType'] !== null) {
            $queryParams['business_type'] = $localVarParams['businessType'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsJobRequest');
    }

    /**
     * 获取英文单词音标
     *
     * 根据英文单词返回对应音标列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTtsPhoneticSymbol($request)
    {
        return $this->showTtsPhoneticSymbolWithHttpInfo($request);
    }

    public function showTtsPhoneticSymbolWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/phonetic-symbol';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['word'] !== null) {
            $queryParams['word'] = $localVarParams['word'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsPhoneticSymbolResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsPhoneticSymbolRequest');
    }

    /**
     * 创建TTS异步任务
     *
     * 该接口用于对外生成音频文件。每个预置音色的计费标准详见[预置音色计费标准](metastudio_02_0060.xml)。
     * 
     * &gt; 使用本接口前，需要在MetaStudio控制台服务概览页面，开通“声音合成”的按需计费。
     * &gt; 详细操作为：单击“声音合成”卡片中的“去开通”，在弹出的“开通按需计费服务提示”对话框中，勾选同意协议。单击“确定”，开通按需计费。
     * &gt; 如需使用第三方声音进行语音合成，请购买出门问问声音套餐，操作请参考《用户指南》的“购买出门问问声音套餐”章节。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAsyncTtsJob($request)
    {
        return $this->createAsyncTtsJobWithHttpInfo($request);
    }

    public function createAsyncTtsJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/async-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAsyncTtsJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateAsyncTtsJobRequest');
    }

    /**
     * 创建TTS试听任务
     *
     * 该接口用于创建生成播报内容的语音试听文件任务。
     * 
     * [第三方音色试听需要收费，收费标准参考：https://marketplace.huaweicloud.com/product/OFFI919400645308506112#productid&#x3D;OFFI919400645308506112](tag:hc)
     * 
     * [第三方音色试听需要收费，收费标准参考：https://marketplace.huaweicloud.com/intl/contents/939bf377-3005-472b-a4e2-383911e6102f](tag:hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTtsAudition($request)
    {
        return $this->createTtsAuditionWithHttpInfo($request);
    }

    public function createTtsAuditionWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsAuditionResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtsAuditionRequest');
    }

    /**
     * 获取TTS异步任务
     *
     * 该接口用于获取TTS音频文件下载链接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAsyncTtsJob($request)
    {
        return $this->showAsyncTtsJobWithHttpInfo($request);
    }

    public function showAsyncTtsJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/async-jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAsyncTtsJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowAsyncTtsJobRequest');
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
    public function showTtsAuditionFile($request)
    {
        return $this->showTtsAuditionFileWithHttpInfo($request);
    }

    public function showTtsAuditionFileWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsAuditionFileResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowTtsAuditionFileRequest');
    }

    /**
     * 设置TTS租户级自定义读法配置
     *
     * 该接口用于设置TTS租户级自定义读法配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTtscVocabularyConfigs($request)
    {
        return $this->createTtscVocabularyConfigsWithHttpInfo($request);
    }

    public function createTtscVocabularyConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtscVocabularyConfigsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtscVocabularyConfigsRequest');
    }

    /**
     * 设置TTS租户级词表分组配置
     *
     * 该接口用于设置TTS租户级词表分组配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTtscVocabularyGroups($request)
    {
        return $this->createTtscVocabularyGroupsWithHttpInfo($request);
    }

    public function createTtscVocabularyGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtscVocabularyGroupsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTtscVocabularyGroupsRequest');
    }

    /**
     * 删除TTS租户级自定义读法配置
     *
     * 该接口用于删除TTS租户级自定义读法配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTtscVocabularyConfigs($request)
    {
        return $this->deleteTtscVocabularyConfigsWithHttpInfo($request);
    }

    public function deleteTtscVocabularyConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteTtscVocabularyConfigsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteTtscVocabularyConfigsRequest');
    }

    /**
     * 删除TTS租户级词表分组
     *
     * 该接口用于删除TTS租户级词表分组配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTtscVocabularyGroups($request)
    {
        return $this->deleteTtscVocabularyGroupsWithHttpInfo($request);
    }

    public function deleteTtscVocabularyGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteTtscVocabularyGroupsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteTtscVocabularyGroupsRequest');
    }

    /**
     * 获取TTS租户级自定义读法配置
     *
     * 该接口用于获取TTS租户级自定义读法配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTtscVocabularyConfigs($request)
    {
        return $this->listTtscVocabularyConfigsWithHttpInfo($request);
    }

    public function listTtscVocabularyConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['ttsServiceName'] !== null) {
            $queryParams['tts_service_name'] = $localVarParams['ttsServiceName'];
        }
        if ($localVarParams['isVocabularyConfigEnable'] !== null) {
            $queryParams['is_vocabulary_config_enable'] = $localVarParams['isVocabularyConfigEnable'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtscVocabularyConfigsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtscVocabularyConfigsRequest');
    }

    /**
     * 获取TTS租户级词表分组列表
     *
     * 该接口用于获取TTS租户级词表分组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTtscVocabularyGroups($request)
    {
        return $this->listTtscVocabularyGroupsWithHttpInfo($request);
    }

    public function listTtscVocabularyGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtscVocabularyGroupsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListTtscVocabularyGroupsRequest');
    }

    /**
     * 设置租户级配置
     *
     * 该接口用于设置租户级配置，当前用于租户级自定义读法配置的全局开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveTtscTenantConfigs($request)
    {
        return $this->saveTtscTenantConfigsWithHttpInfo($request);
    }

    public function saveTtscTenantConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/tenant-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SaveTtscTenantConfigsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SaveTtscTenantConfigsRequest');
    }

    /**
     * 修改TTS租户级自定义读法配置
     *
     * 该接口用于修改TTS租户级自定义读法配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveTtscVocabularyConfigs($request)
    {
        return $this->saveTtscVocabularyConfigsWithHttpInfo($request);
    }

    public function saveTtscVocabularyConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-configs/{vocabulary_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
        if ($localVarParams['vocabularyId'] !== null) {
            $pathParams['vocabulary_id'] = $localVarParams['vocabularyId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SaveTtscVocabularyConfigsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SaveTtscVocabularyConfigsRequest');
    }

    /**
     * 设置TTS租户级词表分组的资产列表
     *
     * 该接口用于设置TTS租户级词表分组的资产列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setTtscGroupAssets($request)
    {
        return $this->setTtscGroupAssetsWithHttpInfo($request);
    }

    public function setTtscGroupAssetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/group-assets/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SetTtscGroupAssetsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\SetTtscGroupAssetsRequest');
    }

    /**
     * 获取租户级全局配置
     *
     * 该接口用于获取租户级全局配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVocabularySwitchConfigs($request)
    {
        return $this->showVocabularySwitchConfigsWithHttpInfo($request);
    }

    public function showVocabularySwitchConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/tenant-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['key'] !== null) {
            $queryParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVocabularySwitchConfigsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVocabularySwitchConfigsRequest');
    }

    /**
     * TTS租户级词表分组重命名
     *
     * 该接口用于对TTS租户级词表分组重命名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTtscVocabularyGroups($request)
    {
        return $this->updateTtscVocabularyGroupsWithHttpInfo($request);
    }

    public function updateTtscVocabularyGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ttsc/vocabulary-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateTtscVocabularyGroupsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateTtscVocabularyGroupsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoMotionCaptureJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoMotionCaptureJobRequest');
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
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ExecuteVideoMotionCaptureCommandRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoMotionCaptureJobsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoMotionCaptureJobsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoMotionCaptureJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoMotionCaptureJobRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopVideoMotionCaptureJobResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\StopVideoMotionCaptureJobRequest');
    }

    /**
     * 复制视频制作剧本
     *
     * 该接口用于复制视频制作剧本。
     * &gt; - 复制的剧本不包含预览字幕信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function copyVideoScripts($request)
    {
        return $this->copyVideoScriptsWithHttpInfo($request);
    }

    public function copyVideoScriptsWithHttpInfo($request)
    {
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CopyVideoScriptsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CopyVideoScriptsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoScriptsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateVideoScriptsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVideoScriptResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteVideoScriptRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoScriptsResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListVideoScriptsRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoScriptResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowVideoScriptRequest');
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateVideoScriptResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateVideoScriptRequest');
    }

    /**
     * 创建欢迎词
     *
     * 该接口用于创建欢迎词。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWelcomeSpeech($request)
    {
        return $this->createWelcomeSpeechWithHttpInfo($request);
    }

    public function createWelcomeSpeechWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateWelcomeSpeechResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateWelcomeSpeechRequest');
    }

    /**
     * 删除欢迎词
     *
     * 该接口用于删除欢迎词。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWelcomeSpeech($request)
    {
        return $this->deleteWelcomeSpeechWithHttpInfo($request);
    }

    public function deleteWelcomeSpeechWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteWelcomeSpeechResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\DeleteWelcomeSpeechRequest');
    }

    /**
     * 查询欢迎词列表
     *
     * 该接口用于查询欢迎词列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWelcomeSpeech($request)
    {
        return $this->listWelcomeSpeechWithHttpInfo($request);
    }

    public function listWelcomeSpeechWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['robotId'] !== null) {
            $queryParams['robot_id'] = $localVarParams['robotId'];
        }
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListWelcomeSpeechResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ListWelcomeSpeechRequest');
    }

    /**
     * 查询欢迎词详情
     *
     * 该接口用于查询欢迎词详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWelcomeSpeech($request)
    {
        return $this->showWelcomeSpeechWithHttpInfo($request);
    }

    public function showWelcomeSpeechWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech/{welcome_speech_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['welcomeSpeechId'] !== null) {
            $pathParams['welcome_speech_id'] = $localVarParams['welcomeSpeechId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowWelcomeSpeechResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowWelcomeSpeechRequest');
    }

    /**
     * 查询欢迎词功能开关
     *
     * 该接口用于查询欢迎词功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWelcomeSpeechSwitch($request)
    {
        return $this->showWelcomeSpeechSwitchWithHttpInfo($request);
    }

    public function showWelcomeSpeechSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['language'] !== null) {
            $queryParams['language'] = $localVarParams['language'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowWelcomeSpeechSwitchResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowWelcomeSpeechSwitchRequest');
    }

    /**
     * 修改欢迎词
     *
     * 该接口用于修改欢迎词。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWelcomeSpeech($request)
    {
        return $this->updateWelcomeSpeechWithHttpInfo($request);
    }

    public function updateWelcomeSpeechWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech/{welcome_speech_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['welcomeSpeechId'] !== null) {
            $pathParams['welcome_speech_id'] = $localVarParams['welcomeSpeechId'];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateWelcomeSpeechResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateWelcomeSpeechRequest');
    }

    /**
     * 修改欢迎词功能开关
     *
     * 该接口用于修改欢迎词功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWelcomeSpeechSwitch($request)
    {
        return $this->updateWelcomeSpeechSwitchWithHttpInfo($request);
    }

    public function updateWelcomeSpeechSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/digital-human-chat/welcome-speech-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateWelcomeSpeechSwitchResponse',
            $requestType='\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateWelcomeSpeechSwitchRequest');
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