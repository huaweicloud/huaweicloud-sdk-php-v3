<?php

namespace HuaweiCloud\SDK\Meeting\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class MeetingAsyncClient extends Client
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
        $client = new ClientBuilder(new MeetingAsyncClient(), "MeetingCredentials");
        return $client;
    }

    /**
     * 添加企业应用
     *
     * 企业默认管理员添加应用，添加应用后，记录返回信息，后续可通过[[执行App ID鉴权](https://support.huaweicloud.com/api-meeting/meeting_21_0311.html)](tag:hws) [[执行App ID鉴权](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0311.html)](tag:hk)获取accessToken
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAppIdAsync($request)
    {
        return $this->addAppIdAsyncWithHttpInfo($request);
    }
    
    public function addAppIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/usg/acs/corp/app';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddAppIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddAppIdRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员创建企业
     *
     * 创建企业，默认管理员及分配资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCorpAsync($request)
    {
        return $this->addCorpAsyncWithHttpInfo($request);
    }
    
    public function addCorpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddCorpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddCorpRequest',
            $asyncRequest = true);
    }

    /**
     * 添加企业管理员
     *
     * 企业默认管理员添加企业普通管理员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCorpAdminAsync($request)
    {
        return $this->addCorpAdminAsyncWithHttpInfo($request);
    }
    
    public function addCorpAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/admin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddCorpAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddCorpAdminRequest',
            $asyncRequest = true);
    }

    /**
     * 添加部门
     *
     * 企业管理员通过该接口添加部门，最多支持10级部门，每级子部门最多支持100个，默认企业最大部门数量为10000个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDepartmentAsync($request)
    {
        return $this->addDepartmentAsyncWithHttpInfo($request);
    }
    
    public function addDepartmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/dept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddDepartmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddDepartmentRequest',
            $asyncRequest = true);
    }

    /**
     * 增加终端
     *
     * 企业管理员通过该接口添加专业会议终端。专业会议终端包括DP300/HUAWEI Bar系列/HUAWEI Board/TE系列。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDeviceAsync($request)
    {
        return $this->addDeviceAsyncWithHttpInfo($request);
    }
    
    public function addDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 新增信息窗素材
     *
     * 新增信息窗素材（上传素材文件）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addMaterialAsync($request)
    {
        return $this->addMaterialAsyncWithHttpInfo($request);
    }
    
    public function addMaterialAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/materials';
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
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddMaterialResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddMaterialRequest',
            $asyncRequest = true);
    }

    /**
     * 新增信息窗节目
     *
     * 新增信息窗节目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addProgramAsync($request)
    {
        return $this->addProgramAsyncWithHttpInfo($request);
    }
    
    public function addProgramAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/programs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddProgramResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddProgramRequest',
            $asyncRequest = true);
    }

    /**
     * 新增信息窗发布
     *
     * 新增信息窗发布。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addPublicationAsync($request)
    {
        return $this->addPublicationAsyncWithHttpInfo($request);
    }
    
    public function addPublicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/publications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddPublicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddPublicationRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员分配企业资源
     *
     * 企业新增资源发放。该接口同时支持修改，带resourceId后会判断该资源是否存在，存在即修改（支持修改的参数见修改接口），否则按新增处理。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addResourceAsync($request)
    {
        return $this->addResourceAsyncWithHttpInfo($request);
    }
    
    public function addResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{corp_id}/resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['corpId'] !== null) {
            $pathParams['corp_id'] = $localVarParams['corpId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 保存会议纪要到个人云空间
     *
     * 用户使用手机扫码后,手机端请求服务端将当前会议纪要文件保存到个人云空间。二维码内容 ：cloudlink://cloudlink.huawei.com/h5page?action&#x3D;SAVE_MEETING_FILE&amp;key1&#x3D;value1&amp;key2&#x3D;value2 。key/value的个数可能变化，终端解析后，在发起后续请求时，将所有key/value存为map，作为入参即可。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addToPersonalSpaceAsync($request)
    {
        return $this->addToPersonalSpaceAsyncWithHttpInfo($request);
    }
    
    public function addToPersonalSpaceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/meeting-files/save-to-personal-space';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddToPersonalSpaceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddToPersonalSpaceRequest',
            $asyncRequest = true);
    }

    /**
     * 添加用户
     *
     * 企业管理员通过该接口添加企业用户。
     * &gt; 默认添加用户后，用户第一次登录华为云会议App或者Portal时需要修改密码。若需关闭第一次登录修改密码，请联系华为销售人员，并提供华为云会议企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addUserAsync($request)
    {
        return $this->addUserAsyncWithHttpInfo($request);
    }
    
    public function addUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AddUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddUserRequest',
            $asyncRequest = true);
    }

    /**
     * 允许客户端录制
     *
     * 该接口用于设置允许/禁止与会者客户端本地录制（非云端录制）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function allowClientRecordAsync($request)
    {
        return $this->allowClientRecordAsyncWithHttpInfo($request);
    }
    
    public function allowClientRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/allowClientRecord';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowClientRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowClientRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 与会者自己解除静音
     *
     * 该接口用于设置与会者是否可以自己解除静音。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function allowGuestUnmuteAsync($request)
    {
        return $this->allowGuestUnmuteAsyncWithHttpInfo($request);
    }
    
    public function allowGuestUnmuteAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/mute/guestUnMute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowGuestUnmuteResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowGuestUnmuteRequest',
            $asyncRequest = true);
    }

    /**
     * 准入等候者
     *
     * 该接口用于允许等候室中的成员进入会议。可以允许全部成员进入会议，或者允许指定成员进入会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function allowWaitingParticipantAsync($request)
    {
        return $this->allowWaitingParticipantAsyncWithHttpInfo($request);
    }
    
    public function allowWaitingParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/allowWaitingParticipant';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowWaitingParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowWaitingParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 分配云会议室
     *
     * 企业管理员通过该接口将云会议室分配给用户、专业会议终端（TE10、TE20、HUAWEI Board、HUAWEI Bar 500及HUAWEI Box系列）、智慧屏TV、电子白板（SmartRooms）、IdeaHub。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateVmrAsync($request)
    {
        return $this->associateVmrAsyncWithHttpInfo($request);
    }
    
    public function associateVmrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vmr/assign-to-member/{account}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['account'] !== null) {
            $pathParams['account'] = $localVarParams['account'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\AssociateVmrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AssociateVmrRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除企业管理员
     *
     * 通过该接口批量删除企业管理员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteCorpAdminsAsync($request)
    {
        return $this->batchDeleteCorpAdminsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteCorpAdminsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/admin/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteCorpAdminsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteCorpAdminsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除终端
     *
     * 企业管理员通过该接口批量删除专业会议终端，返回删除失败的列表。
     * &gt; 如果需要删除Ideahub、SmartRooms、智慧屏TV请使用[[批量删除用户](https://support.huaweicloud.com/api-meeting/meeting_21_0070.html)](tag:hws)[[批量删除用户](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0070.html)](tag:hk)接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteDevicesAsync($request)
    {
        return $this->batchDeleteDevicesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteDevicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteDevicesRequest',
            $asyncRequest = true);
    }

    /**
     * 删除信息窗素材
     *
     * 删除信息窗素材。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteMaterialsAsync($request)
    {
        return $this->batchDeleteMaterialsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteMaterialsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/materials/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteMaterialsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteMaterialsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除信息窗节目
     *
     * 删除信息窗节目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteProgramsAsync($request)
    {
        return $this->batchDeleteProgramsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteProgramsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/programs/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteProgramsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteProgramsRequest',
            $asyncRequest = true);
    }

    /**
     * 删除信息窗发布
     *
     * 删除信息窗发布。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeletePublicationsAsync($request)
    {
        return $this->batchDeletePublicationsAsyncWithHttpInfo($request);
    }
    
    public function batchDeletePublicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/publications/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeletePublicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeletePublicationsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除用户
     *
     * 企业管理员通过该接口批量删除企业用户。删除多个用户时，全部删除成功或者全部删除失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteUsersAsync($request)
    {
        return $this->batchDeleteUsersAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量举手
     *
     * 该接口用于批量设置来宾的举手/放下举手状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchHandAsync($request)
    {
        return $this->batchHandAsyncWithHttpInfo($request);
    }
    
    public function batchHandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/batch/hands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchHandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchHandRequest',
            $asyncRequest = true);
    }

    /**
     * 分页查询企业应用
     *
     * 企业默认管理员分页查询企业应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSearchAppIdAsync($request)
    {
        return $this->batchSearchAppIdAsyncWithHttpInfo($request);
    }
    
    public function batchSearchAppIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/usg/acs/corp/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchSearchAppIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchSearchAppIdRequest',
            $asyncRequest = true);
    }

    /**
     * 批量查询用户详情
     *
     * 批量查询用户详情，支持指定第三方账号查询详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowUserDetailsAsync($request)
    {
        return $this->batchShowUserDetailsAsyncWithHttpInfo($request);
    }
    
    public function batchShowUserDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/abs/users/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['idType'] !== null) {
            $queryParams['id_type'] = $localVarParams['idType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchShowUserDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchShowUserDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改终端状态
     *
     * 企业管理员通过该接口批量修改专业会议终端状态。当硬终端资源到期后，若企业内对应资源的硬终端超过数量后会被系统随机自动停用，此时可通过该接口修改专业会议终端的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateDevicesStatusAsync($request)
    {
        return $this->batchUpdateDevicesStatusAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateDevicesStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device/status/{value}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['value'] !== null) {
            $pathParams['value'] = $localVarParams['value'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchUpdateDevicesStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchUpdateDevicesStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 批量修改用户状态
     *
     * 企业管理员通过该接口批量修改用户状态，当用户帐号数资源或者电子白板（SmartRooms）资源到期后，若企业内对应资源的用户帐号超过数量后会被系统随机自动停用，此时可通过该接口修改用户的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateUserStatusAsync($request)
    {
        return $this->batchUpdateUserStatusAsyncWithHttpInfo($request);
    }
    
    public function batchUpdateUserStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member/status/{value}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['value'] !== null) {
            $pathParams['value'] = $localVarParams['value'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchUpdateUserStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchUpdateUserStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 广播会场
     *
     * 该接口用于广播指定的与会者。同一时间，只允许一个与会者被广播。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function broadcastParticipantAsync($request)
    {
        return $this->broadcastParticipantAsyncWithHttpInfo($request);
    }
    
    public function broadcastParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/broadcast';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\BroadcastParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BroadcastParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 取消广播
     *
     * 该接口用于取消广播，包括：取消广播多画面，取消广播会场，取消点名会场。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelBroadcastAsync($request)
    {
        return $this->cancelBroadcastAsyncWithHttpInfo($request);
    }
    
    public function cancelBroadcastAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/cancelBroadcast';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelBroadcastResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelBroadcastRequest',
            $asyncRequest = true);
    }

    /**
     * 取消预约会议
     *
     * 该接口用于取消预约的会议。企业管理员可以取消本企业下用户创建的会议，普通用户只能取消自己创建的会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelMeetingAsync($request)
    {
        return $this->cancelMeetingAsyncWithHttpInfo($request);
    }
    
    public function cancelMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 取消周期性会议
     *
     * 该接口用于取消周期性会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelRecurringMeetingAsync($request)
    {
        return $this->cancelRecurringMeetingAsyncWithHttpInfo($request);
    }
    
    public function cancelRecurringMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/cycleconferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelRecurringMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelRecurringMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 取消周期性会议的子会议
     *
     * 该接口用于取消周期性会议的子会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelRecurringSubMeetingAsync($request)
    {
        return $this->cancelRecurringSubMeetingAsyncWithHttpInfo($request);
    }
    
    public function cancelRecurringSubMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/cyclesubconf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelRecurringSubMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelRecurringSubMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 根据号码，查询是否在会议中
     *
     * 通过该接口查询号码，是否在会议中
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkCallNumberInConfAsync($request)
    {
        return $this->checkCallNumberInConfAsyncWithHttpInfo($request);
    }
    
    public function checkCallNumberInConfAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/mms/ncms/conferences/online/check-callnumber-in-conf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['callNumber'] !== null) {
            $queryParams['call_number'] = $localVarParams['callNumber'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckCallNumberInConfResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckCallNumberInConfRequest',
            $asyncRequest = true);
    }

    /**
     * 校验滑块验证码
     *
     * 该接口提供校验滑块验证码。服务器收到请求，返回校验结果。用户在前台界面通过滑块操作匹配图形，使得抠图和原图吻合。然后服务器进行校验滑块验证码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkSlideVerifyCodeAsync($request)
    {
        return $this->checkSlideVerifyCodeAsyncWithHttpInfo($request);
    }
    
    public function checkSlideVerifyCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/auth/slideverifycode/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckSlideVerifyCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckSlideVerifyCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 校验Token
     *
     * 该接口提供校验token合法性功能。服务器收到请求后，验证token合法性并返回结果。如果参数needGenNewToken为true时，生成新的token并返回。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkTokenAsync($request)
    {
        return $this->checkTokenAsyncWithHttpInfo($request);
    }
    
    public function checkTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/token/validate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckTokenRequest',
            $asyncRequest = true);
    }

    /**
     * 校验手机和邮箱对应的验证码
     *
     * 企业用户通过该接口校验手机和邮箱对应的验证码，一分钟内记录尝试次数不得超过5次。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkVeriCodeForUpdateUserInfoAsync($request)
    {
        return $this->checkVeriCodeForUpdateUserInfoAsyncWithHttpInfo($request);
    }
    
    public function checkVeriCodeForUpdateUserInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/verification-code/verify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckVeriCodeForUpdateUserInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckVeriCodeForUpdateUserInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 校验验证码
     *
     * 该接口提供校验验证码，服务器收到请求，返回结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkVerifyCodeAsync($request)
    {
        return $this->checkVerifyCodeAsyncWithHttpInfo($request);
    }
    
    public function checkVerifyCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/verifycode/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckVerifyCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckVerifyCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 匿名用户会议鉴权
     *
     * 该接口用于匿名用户入会鉴权。请求根据会议ID和密码鉴权，返回鉴权随机数（可以根据该随机数获取匿名用户信息、会议信息等）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAnonymousAuthRandomAsync($request)
    {
        return $this->createAnonymousAuthRandomAsyncWithHttpInfo($request);
    }
    
    public function createAnonymousAuthRandomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/anonymous/auth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xPassword'] !== null) {
            $headerParams['x_password'] = $localVarParams['xPassword'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateAnonymousAuthRandomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateAnonymousAuthRandomRequest',
            $asyncRequest = true);
    }

    /**
     * 获取会议鉴权随机数
     *
     * 根据会议ID + 密码鉴权返回鉴权随机数，如果是小程序调用时，需要企业支持小程序功能
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAuthRandomAsync($request)
    {
        return $this->createAuthRandomAsyncWithHttpInfo($request);
    }
    
    public function createAuthRandomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/mms/ncms/conferences/auth/random';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confId'] !== null) {
            $queryParams['conf_id'] = $localVarParams['confId'];
        }
        if ($localVarParams['guestWaiting'] !== null) {
            $queryParams['guest_waiting'] = $localVarParams['guestWaiting'];
        }
        if ($localVarParams['xPassword'] !== null) {
            $headerParams['x_password'] = $localVarParams['xPassword'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateAuthRandomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateAuthRandomRequest',
            $asyncRequest = true);
    }

    /**
     * 获取会控Token
     *
     * 该接口用于获取正在召开会议的会控Token（未开始的会议调用该接口返回失败）。Token有效期是半个小时。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createConfTokenAsync($request)
    {
        return $this->createConfTokenAsyncWithHttpInfo($request);
    }
    
    public function createConfTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
        }
        if ($localVarParams['xPassword'] !== null) {
            $headerParams['x_password'] = $localVarParams['xPassword'];
        }
        if ($localVarParams['xLoginType'] !== null) {
            $headerParams['x_login_type'] = $localVarParams['xLoginType'];
        }
        if ($localVarParams['xNonce'] !== null) {
            $headerParams['x_nonce'] = $localVarParams['xNonce'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateConfTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateConfTokenRequest',
            $asyncRequest = true);
    }

    /**
     * 创建会议
     *
     * 该接口用于创建立即会议和预约会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMeetingAsync($request)
    {
        return $this->createMeetingAsyncWithHttpInfo($request);
    }
    
    public function createMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 获取页面免登陆跳转的nonce信息
     *
     * 通过Access Token生成页面免登陆跳转到华为云会议的Portal的nonce信息。获取到nonce信息后，通过链接https://meeting.huaweicloud.com/?lang&#x3D;zh-CN&amp;nonce&#x3D;xxxxxxxxxxxxx#/login进行免登陆跳转。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPortalRefNonceAsync($request)
    {
        return $this->createPortalRefNonceAsyncWithHttpInfo($request);
    }
    
    public function createPortalRefNonceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/auth/portal-ref-nonce';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreatePortalRefNonceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreatePortalRefNonceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建周期性会议
     *
     * 该接口用于预约周期性会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRecurringMeetingAsync($request)
    {
        return $this->createRecurringMeetingAsyncWithHttpInfo($request);
    }
    
    public function createRecurringMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/cycleconferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateRecurringMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateRecurringMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员生成激活码
     *
     * 企业管理员生成智慧屏、电子白板（SmartRooms）、Ideahub的激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVisionActiveCodeAsync($request)
    {
        return $this->createVisionActiveCodeAsyncWithHttpInfo($request);
    }
    
    public function createVisionActiveCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vision/activecode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateVisionActiveCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateVisionActiveCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 获取websocket建链Token
     *
     * 该接口用于获取会控WebSocket建链的临时Token。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWebSocketTokenAsync($request)
    {
        return $this->createWebSocketTokenAsyncWithHttpInfo($request);
    }
    
    public function createWebSocketTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/wsToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateWebSocketTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateWebSocketTokenRequest',
            $asyncRequest = true);
    }

    /**
     * 预约网络研讨会
     *
     * 该接口用于创建网络研讨会。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWebinarAsync($request)
    {
        return $this->createWebinarAsyncWithHttpInfo($request);
    }
    
    public function createWebinarAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateWebinarResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateWebinarRequest',
            $asyncRequest = true);
    }

    /**
     * 删除企业应用
     *
     * 企业管理员删除企业应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAppIdAsync($request)
    {
        return $this->deleteAppIdAsyncWithHttpInfo($request);
    }
    
    public function deleteAppIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/usg/acs/corp/app/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteAppIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteAppIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除与会者
     *
     * 该接口用于删除与会者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAttendeesAsync($request)
    {
        return $this->deleteAttendeesAsyncWithHttpInfo($request);
    }
    
    public function deleteAttendeesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/attendees/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteAttendeesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteAttendeesRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员删除企业
     *
     * 删除企业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCorpAsync($request)
    {
        return $this->deleteCorpAsyncWithHttpInfo($request);
    }
    
    public function deleteCorpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteCorpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteCorpRequest',
            $asyncRequest = true);
    }

    /**
     * 删除云会议室
     *
     * 企业管理员通过该接口删除企业的云会议室。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCorpVmrAsync($request)
    {
        return $this->deleteCorpVmrAsyncWithHttpInfo($request);
    }
    
    public function deleteCorpVmrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vmr/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteCorpVmrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteCorpVmrRequest',
            $asyncRequest = true);
    }

    /**
     * 删除部门
     *
     * 企业管理员通过该接口删除部门。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDepartmentAsync($request)
    {
        return $this->deleteDepartmentAsyncWithHttpInfo($request);
    }
    
    public function deleteDepartmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/dept/{dept_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $pathParams['dept_code'] = $localVarParams['deptCode'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteDepartmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteDepartmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除多画面布局
     *
     * 该接口用于删除当前会议已保存的多画面布局。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLayoutAsync($request)
    {
        return $this->deleteLayoutAsyncWithHttpInfo($request);
    }
    
    public function deleteLayoutAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/layOut';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['uuId'] !== null) {
            $queryParams['uu_id'] = $localVarParams['uuId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteLayoutResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteLayoutRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除录制
     *
     * 该接口用于批量删除会议的录制。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRecordingsAsync($request)
    {
        return $this->deleteRecordingsAsyncWithHttpInfo($request);
    }
    
    public function deleteRecordingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/record/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuiDs'] !== null) {
            $queryParams['conf_uui_ds'] = $localVarParams['confUuiDs'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteRecordingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteRecordingsRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员根据删除企业资源
     *
     * 企业删除资源项，删除资源项后，企业资源总数会自动减少。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceAsync($request)
    {
        return $this->deleteResourceAsyncWithHttpInfo($request);
    }
    
    public function deleteResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{corp_id}/resource/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['corpId'] !== null) {
            $pathParams['corp_id'] = $localVarParams['corpId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 注销登录
     *
     * 该接口提供注销功能。服务器收到请求后，删除该Token。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTokenAsync($request)
    {
        return $this->deleteTokenAsyncWithHttpInfo($request);
    }
    
    public function deleteTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteTokenRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员删除激活码
     *
     * 企业管理员批量删除激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteVisionActiveCodeAsync($request)
    {
        return $this->deleteVisionActiveCodeAsyncWithHttpInfo($request);
    }
    
    public function deleteVisionActiveCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vision/activecode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteVisionActiveCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteVisionActiveCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 删除事件推送
     *
     * 该接口用于管理员删除已配置的事件推送设置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWebHookConfigAsync($request)
    {
        return $this->deleteWebHookConfigAsyncWithHttpInfo($request);
    }
    
    public function deleteWebHookConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/webhook/link-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteWebHookConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteWebHookConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 取消网络研讨会
     *
     * 该接口用于取消已预约的网络研讨会。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWebinarAsync($request)
    {
        return $this->deleteWebinarAsyncWithHttpInfo($request);
    }
    
    public function deleteWebinarAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences/{conference_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $pathParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteWebinarResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteWebinarRequest',
            $asyncRequest = true);
    }

    /**
     * 回收云会议室
     *
     * 企业管理员通过该接口回收云会议室。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateVmrAsync($request)
    {
        return $this->disassociateVmrAsyncWithHttpInfo($request);
    }
    
    public function disassociateVmrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vmr/recycle-from-member/{account}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['account'] !== null) {
            $pathParams['account'] = $localVarParams['account'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\DisassociateVmrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DisassociateVmrRequest',
            $asyncRequest = true);
    }

    /**
     * 举手
     *
     * 该接口用于设置指定与会者的举手/放下举手状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function handAsync($request)
    {
        return $this->handAsyncWithHttpInfo($request);
    }
    
    public function handAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/hands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\HandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\HandRequest',
            $asyncRequest = true);
    }

    /**
     * 挂断与会者
     *
     * 该接口用于挂断正在通话中的与会者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function hangUpAsync($request)
    {
        return $this->hangUpAsyncWithHttpInfo($request);
    }
    
    public function hangUpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\HangUpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\HangUpRequest',
            $asyncRequest = true);
    }

    /**
     * 主持人邀请与会者开启/关闭摄像头
     *
     * 该接口用于邀请指定与会者开启、关闭摄像头。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function inviteOperateVideoAsync($request)
    {
        return $this->inviteOperateVideoAsyncWithHttpInfo($request);
    }
    
    public function inviteOperateVideoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/video';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteOperateVideoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteOperateVideoRequest',
            $asyncRequest = true);
    }

    /**
     * 邀请与会者
     *
     * 该接口用于邀请与会者加入会议。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function inviteParticipantAsync($request)
    {
        return $this->inviteParticipantAsyncWithHttpInfo($request);
    }
    
    public function inviteParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 邀请共享
     *
     * 该接口用于邀请/取消邀请指定与会人共享桌面。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function inviteShareAsync($request)
    {
        return $this->inviteShareAsyncWithHttpInfo($request);
    }
    
    public function inviteShareAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/share/invite';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteShareResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteShareRequest',
            $asyncRequest = true);
    }

    /**
     * 邀请用户
     *
     * 通过手机号码或者邮箱地址邀请用户加入企业。
     * * 若被邀请用户在华为云会议系统中不存在，则：
     * - 华为云会议免费版和华为云会议标准版发送短信/邮件邀请用户完成注册后加入企业。用户注册成功后，加入该企业。
     * - 华为云会议旗舰版在企业内直接添加该用户。用户会收到华为云会议的初始密码，用户第一次以手机号或者邮箱登录时，需要修改密码。
     * * 若被邀请用户在华为云会议系统中存在，则该用户会收到短信或者邮件确认。确认完成后改用户加入企业内。该用户的密码保持原来的密码不变。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function inviteUserAsync($request)
    {
        return $this->inviteUserAsyncWithHttpInfo($request);
    }
    
    public function inviteUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteUserRequest',
            $asyncRequest = true);
    }

    /**
     * 通过会议ID和密码邀请与会者
     *
     * 该接口用于通过会议ID和密码邀请与会者。一般用于App已知会议ID和来宾密码，通过扫码等方式获取其他终端的SIP号码后，使用该接口将其他终端邀请加入会议中。
     * &gt; 需要管理员在企业的“会议设置”&gt;“来宾扫码邀请任意硬终端入会”设置成打开，才允许通过来宾密码邀请其他终端入会。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function inviteWithPwdAsync($request)
    {
        return $this->inviteWithPwdAsyncWithHttpInfo($request);
    }
    
    public function inviteWithPwdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/inviteWithPwd';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteWithPwdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteWithPwdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询历史召开的网络研讨会列表
     *
     * 该接口用于查询历史网络研讨会。管理员可查询企业内历史网络研讨会，非管理员可查询个人历史网络研讨会。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHistoryWebinarsAsync($request)
    {
        return $this->listHistoryWebinarsAsyncWithHttpInfo($request);
    }
    
    public function listHistoryWebinarsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ListHistoryWebinarsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListHistoryWebinarsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会场网络质量
     *
     * 查询会场网络质量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNetworkQualityAsync($request)
    {
        return $this->listNetworkQualityAsyncWithHttpInfo($request);
    }
    
    public function listNetworkQualityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/cqs/media/qos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceid'] !== null) {
            $queryParams['conferenceid'] = $localVarParams['conferenceid'];
        }
        if ($localVarParams['appid'] !== null) {
            $queryParams['appid'] = $localVarParams['appid'];
        }
        if ($localVarParams['confuuid'] !== null) {
            $queryParams['confuuid'] = $localVarParams['confuuid'];
        }
        if ($localVarParams['confToken'] !== null) {
            $headerParams['conf_token'] = $localVarParams['confToken'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ListNetworkQualityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListNetworkQualityRequest',
            $asyncRequest = true);
    }

    /**
     * 查询正在召开的网络研讨会列表
     *
     * 该接口用于查询正在召开的网络研讨会。管理员可查询企业内正在召开网络研讨会，非管理员可查询自己预订的正在召开的网络研讨会。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOngoingWebinarsAsync($request)
    {
        return $this->listOngoingWebinarsAsyncWithHttpInfo($request);
    }
    
    public function listOngoingWebinarsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences/ongoing';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ListOngoingWebinarsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListOngoingWebinarsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定会议的在线与会者信息
     *
     * 该接口用于查询指定会议的在线与会者信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOnlineConfAttendeeAsync($request)
    {
        return $this->listOnlineConfAttendeeAsyncWithHttpInfo($request);
    }
    
    public function listOnlineConfAttendeeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/online/conf-attendee';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confId'] !== null) {
            $queryParams['conf_id'] = $localVarParams['confId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ListOnlineConfAttendeeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListOnlineConfAttendeeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询即将召开的网络研讨会列表
     *
     * 该接口用于查询即将召开的网络研讨会。管理员可查询企业内即将召开网络研讨会，非管理员可查询自己预订的即将召开的网络研讨会。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUpComingWebinarsAsync($request)
    {
        return $this->listUpComingWebinarsAsyncWithHttpInfo($request);
    }
    
    public function listUpComingWebinarsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences/upcoming';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ListUpComingWebinarsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListUpComingWebinarsRequest',
            $asyncRequest = true);
    }

    /**
     * 启停会议直播
     *
     * 该接口用于启动或停止会议直播。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function liveAsync($request)
    {
        return $this->liveAsyncWithHttpInfo($request);
    }
    
    public function liveAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/live';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\LiveResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\LiveRequest',
            $asyncRequest = true);
    }

    /**
     * 锁定会议
     *
     * 该接口用于锁定或解锁会议。锁定会议后，不允许新的来宾主动加入会议。会议锁定后使用主持人密码/主持人链接加入会议或者主持人邀请来宾不受影响。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function lockMeetingAsync($request)
    {
        return $this->lockMeetingAsyncWithHttpInfo($request);
    }
    
    public function lockMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/lock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\LockMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\LockMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 锁定会场视频源
     *
     * 该接口用于锁定或者解锁某在线会场的视频源。只适用于专业会议终端（如TE系列等）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function lockViewAsync($request)
    {
        return $this->lockViewAsyncWithHttpInfo($request);
    }
    
    public function lockViewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/lockView';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\LockViewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\LockViewRequest',
            $asyncRequest = true);
    }

    /**
     * 移入等候室
     *
     * 该接口用于将会中的指定与会者移入到等候室。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function moveToWaitingRoomAsync($request)
    {
        return $this->moveToWaitingRoomAsyncWithHttpInfo($request);
    }
    
    public function moveToWaitingRoomAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/moveToWaitingRoom';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\MoveToWaitingRoomResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\MoveToWaitingRoomRequest',
            $asyncRequest = true);
    }

    /**
     * 全场静音
     *
     * 该接口用于设置整个会议所有与会者（主持人除外）的静音/取消静音状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function muteMeetingAsync($request)
    {
        return $this->muteMeetingAsyncWithHttpInfo($request);
    }
    
    public function muteMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/mute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\MuteMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\MuteMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 静音与会者
     *
     * 该接口用于设置指定与会者静音/取消静音状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function muteParticipantAsync($request)
    {
        return $this->muteParticipantAsyncWithHttpInfo($request);
    }
    
    public function muteParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/mute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\MuteParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\MuteParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 延长会议
     *
     * 该接口用于延长会议时间。默认会议自动延长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function prolongMeetingAsync($request)
    {
        return $this->prolongMeetingAsyncWithHttpInfo($request);
    }
    
    public function prolongMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/duration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ProlongMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ProlongMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 启停会议录制
     *
     * 该接口用于启动或停止会议云录制。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function recordAsync($request)
    {
        return $this->recordAsyncWithHttpInfo($request);
    }
    
    public function recordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/record';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\RecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\RecordRequest',
            $asyncRequest = true);
    }

    /**
     * 重命名与会者
     *
     * 重命名某个与会者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function renameParticipantAsync($request)
    {
        return $this->renameParticipantAsyncWithHttpInfo($request);
    }
    
    public function renameParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\RenameParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\RenameParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员通过sn重置激活码
     *
     * 当硬终端激活码失效时，企业管理员可以通过该接口重置激活码，使用重新获取的激活码激活终端，每24小时可重新激活5次。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetActivecodeAsync($request)
    {
        return $this->resetActivecodeAsyncWithHttpInfo($request);
    }
    
    public function resetActivecodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device/{sn}/activecode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['sn'] !== null) {
            $pathParams['sn'] = $localVarParams['sn'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetActivecodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetActivecodeRequest',
            $asyncRequest = true);
    }

    /**
     * 重置企业应用appkey
     *
     * 企业默认管理员重置企业应用appkey
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetAppKeyAsync($request)
    {
        return $this->resetAppKeyAsyncWithHttpInfo($request);
    }
    
    public function resetAppKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/usg/acs/corp/app/{app_id}/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetAppKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetAppKeyRequest',
            $asyncRequest = true);
    }

    /**
     * 用户重置密码
     *
     * 该接口提供给用户重置密码功能，服务器收到请求，重新设置用户密码并返回结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetPwdAsync($request)
    {
        return $this->resetPwdAsyncWithHttpInfo($request);
    }
    
    public function resetPwdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/password/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetPwdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetPwdRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员重置企业成员密码
     *
     * 企业管理员通过该接口提供企业管理员重置企业成员密码的功能。当服务器收到重置密码的请求时，发送新的密码到企业成员的邮箱或者短信，并返回结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetPwdByAdminAsync($request)
    {
        return $this->resetPwdByAdminAsyncWithHttpInfo($request);
    }
    
    public function resetPwdByAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/password/admin/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetPwdByAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetPwdByAdminRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员重置帐号的激活码
     *
     * 企业管理员重置帐号的激活码，重置后，原设备直接解绑，必须重新激活使用,若手机邮箱不填，则不会发送新的激活码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetVisionActiveCodeAsync($request)
    {
        return $this->resetVisionActiveCodeAsyncWithHttpInfo($request);
    }
    
    public function resetVisionActiveCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vision/activecode/{account}/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['account'] !== null) {
            $pathParams['account'] = $localVarParams['account'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetVisionActiveCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetVisionActiveCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 开启/关闭同声传译
     *
     * 该接口用于会议主席可以通过该接口开启/关闭同声传译。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resumeSimultaneousInterpretationAsync($request)
    {
        return $this->resumeSimultaneousInterpretationAsyncWithHttpInfo($request);
    }
    
    public function resumeSimultaneousInterpretationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/simultaneousInterpretation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ResumeSimultaneousInterpretationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResumeSimultaneousInterpretationRequest',
            $asyncRequest = true);
    }

    /**
     * 点名会场
     *
     * 该接口用于点名指定与会者。点名会场的效果是除了主持人外，点名与会者为非静音状态，未点名的与会者统一为静音状态。同一时间，只允许一个与会者被点名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rollcallParticipantAsync($request)
    {
        return $this->rollcallParticipantAsyncWithHttpInfo($request);
    }
    
    public function rollcallParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/rollCall';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\RollcallParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\RollcallParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 保存多画面布局
     *
     * 该接口用于保存多画面布局。保存的多画面布局，只能在当前会议使用，会议结束后，保存的多画面布局就会释放。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveLayoutAsync($request)
    {
        return $this->saveLayoutAsyncWithHttpInfo($request);
    }
    
    public function saveLayoutAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/layOut';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SaveLayoutResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SaveLayoutRequest',
            $asyncRequest = true);
    }

    /**
     * 查询历史会议的与会者记录
     *
     * 该接口用于查询指定历史会议的与会者记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchAttendanceRecordsOfHisMeetingAsync($request)
    {
        return $this->searchAttendanceRecordsOfHisMeetingAsyncWithHttpInfo($request);
    }
    
    public function searchAttendanceRecordsOfHisMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/history/confAttendeeRecord';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchAttendanceRecordsOfHisMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchAttendanceRecordsOfHisMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员分页搜索企业
     *
     * SP管理员分页搜索企业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCorpAsync($request)
    {
        return $this->searchCorpAsyncWithHttpInfo($request);
    }
    
    public function searchCorpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpRequest',
            $asyncRequest = true);
    }

    /**
     * 分页查询企业管理员
     *
     * 通过该接口分页查询企业管理员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCorpAdminsAsync($request)
    {
        return $this->searchCorpAdminsAsyncWithHttpInfo($request);
    }
    
    public function searchCorpAdminsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/admin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpAdminsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpAdminsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业通讯录
     *
     * 企业用户（含管理员）通过该接口查询该企业的通讯录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCorpDirAsync($request)
    {
        return $this->searchCorpDirAsyncWithHttpInfo($request);
    }
    
    public function searchCorpDirAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/abs/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $queryParams['dept_code'] = $localVarParams['deptCode'];
        }
        if ($localVarParams['querySubDept'] !== null) {
            $queryParams['query_sub_dept'] = $localVarParams['querySubDept'];
        }
        if ($localVarParams['searchScope'] !== null) {
            $queryParams['search_scope'] = $localVarParams['searchScope'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpDirResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpDirRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业外部联系人
     *
     * 企业用户（含管理员）通过该接口查询该企业的外部联系人或者个人外部联系人。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCorpExternalDirAsync($request)
    {
        return $this->searchCorpExternalDirAsyncWithHttpInfo($request);
    }
    
    public function searchCorpExternalDirAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/abs/external-contacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['searchScope'] !== null) {
            $queryParams['search_scope'] = $localVarParams['searchScope'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpExternalDirResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpExternalDirRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员分页查询企业资源订单列表
     *
     * 企业管理员根据条件查询企业资源订单列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCorpResourcesAsync($request)
    {
        return $this->searchCorpResourcesAsyncWithHttpInfo($request);
    }
    
    public function searchCorpResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/resource-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startExpireDate'] !== null) {
            $queryParams['start_expire_date'] = $localVarParams['startExpireDate'];
        }
        if ($localVarParams['endExpireDate'] !== null) {
            $queryParams['end_expire_date'] = $localVarParams['endExpireDate'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vmrMode'] !== null) {
            $queryParams['vmr_mode'] = $localVarParams['vmrMode'];
        }
        if ($localVarParams['typeId'] !== null) {
            $queryParams['type_id'] = $localVarParams['typeId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员分页查询企业云会议室
     *
     * 企业管理员通过该接口分页查询企业的云会议室。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCorpVmrAsync($request)
    {
        return $this->searchCorpVmrAsyncWithHttpInfo($request);
    }
    
    public function searchCorpVmrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vmr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['vmrMode'] !== null) {
            $queryParams['vmr_mode'] = $localVarParams['vmrMode'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpVmrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpVmrRequest',
            $asyncRequest = true);
    }

    /**
     * 查询历史会议的会控记录
     *
     * 该接口用于查询指定历史会议的会控记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchCtlRecordsOfHisMeetingAsync($request)
    {
        return $this->searchCtlRecordsOfHisMeetingAsyncWithHttpInfo($request);
    }
    
    public function searchCtlRecordsOfHisMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/history/confCtlRecord';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCtlRecordsOfHisMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCtlRecordsOfHisMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 按名称查询所有的部门
     *
     * 企业管理员通过该接口按名称查询所有的部门。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDepartmentByNameAsync($request)
    {
        return $this->searchDepartmentByNameAsyncWithHttpInfo($request);
    }
    
    public function searchDepartmentByNameAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/dept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['deptName'] !== null) {
            $queryParams['dept_name'] = $localVarParams['deptName'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchDepartmentByNameResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchDepartmentByNameRequest',
            $asyncRequest = true);
    }

    /**
     * 分页查询终端
     *
     * 企业管理员通过该接口分页查询专业会议终端信息。
     * &gt; 如果需要查询Ideahub、SmartRooms、智慧屏TV请使用[[分页查询用户](https://support.huaweicloud.com/api-meeting/meeting_21_0071.html)](tag:hws)[[分页查询用户](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0071.html)](tag:hk)接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchDevicesAsync($request)
    {
        return $this->searchDevicesAsyncWithHttpInfo($request);
    }
    
    public function searchDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['model'] !== null) {
            $queryParams['model'] = $localVarParams['model'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $queryParams['dept_code'] = $localVarParams['deptCode'];
        }
        if ($localVarParams['enableSubDept'] !== null) {
            $queryParams['enable_sub_dept'] = $localVarParams['enableSubDept'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchDevicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchDevicesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询历史会议列表
     *
     * 该接口用于查询已经结束的会议。管理员可以查询本企业内所有的历史会议，普通用户仅能查询自己创建或者被邀请的历史会议。不带查询参数时，默认查询权限范围内的历史会议。
     * &gt; * 普通用户如果只是通过会议ID或者会议链接接入会议，不是预定者会前邀请或者会中主持人邀请的，则历史会议中无法查到
     * &gt; * 如果同一个会议召开并结束多次，则会产生多条历史会议（会议ID相同，会议UUID不同）
     * &gt; * 历史会议记录默认保留6个月，最长保留12个月。保留时间管理员可在“会议设置”的“历史会议留存时间”中修改
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchHisMeetingsAsync($request)
    {
        return $this->searchHisMeetingsAsyncWithHttpInfo($request);
    }
    
    public function searchHisMeetingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['query_all'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchHisMeetingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchHisMeetingsRequest',
            $asyncRequest = true);
    }

    /**
     * 分页查询信息窗素材
     *
     * 分页查询信息窗素材。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchMaterialsAsync($request)
    {
        return $this->searchMaterialsAsyncWithHttpInfo($request);
    }
    
    public function searchMaterialsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/materials';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMaterialsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMaterialsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会议纪要列表
     *
     * 用户查询自己的会议纪要列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchMeetingFileListAsync($request)
    {
        return $this->searchMeetingFileListAsyncWithHttpInfo($request);
    }
    
    public function searchMeetingFileListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/meeting-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMeetingFileListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMeetingFileListRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会议列表
     *
     * 该接口用于查询尚未结束的会议。
     * * 管理员可以查询管理权限域内所有的会议，普通用户仅能查询自己创建或者需要参加的会议。不带查询参数时，默认查询权限范围内正在召开或还未召开的会议。
     * * 只能查询尚未结束的会议（既正在召开的会议和已预约还未召开的会议）。如果需要查询历史会议列表，请参考[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchMeetingsAsync($request)
    {
        return $this->searchMeetingsAsyncWithHttpInfo($request);
    }
    
    public function searchMeetingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['query_all'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['queryConfMode'] !== null) {
            $queryParams['query_conf_mode'] = $localVarParams['queryConfMode'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMeetingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMeetingsRequest',
            $asyncRequest = true);
    }

    /**
     * 普通用户分页查询云会议室及个人会议ID
     *
     * 企业用户通过该接口查询个人已分配的云会议室及个人会议ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchMemberVmrAsync($request)
    {
        return $this->searchMemberVmrAsyncWithHttpInfo($request);
    }
    
    public function searchMemberVmrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/vmr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['specialVmr'] !== null) {
            $queryParams['special_vmr'] = $localVarParams['specialVmr'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMemberVmrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMemberVmrRequest',
            $asyncRequest = true);
    }

    /**
     * 查询在线会议列表
     *
     * 该接口用于查询正在召开的会议列表。管理员可以查询本企业内所有在线会议，普通用户仅能查询当前自己帐号创建或者需要参加的在线会议。不带查询参数时，默认查询权限范围内的在线会议，按开始时间升序排列。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchOnlineMeetingsAsync($request)
    {
        return $this->searchOnlineMeetingsAsyncWithHttpInfo($request);
    }
    
    public function searchOnlineMeetingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/online';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['query_all'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchOnlineMeetingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchOnlineMeetingsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询信息窗节目
     *
     * 获取信息窗节目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchProgramsAsync($request)
    {
        return $this->searchProgramsAsyncWithHttpInfo($request);
    }
    
    public function searchProgramsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/programs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchProgramsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchProgramsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询信息窗发布
     *
     * 获取信息窗发布。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchPublicationsAsync($request)
    {
        return $this->searchPublicationsAsyncWithHttpInfo($request);
    }
    
    public function searchPublicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/publications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchPublicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchPublicationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询录制列表
     *
     * 该接口用于查询会议录制列表。管理员可以查询本企业内所有的录制，普通用户仅能查询自己创建的会议的录制。不带查询参数时，默认查询权限范围内的录制。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchRecordingsAsync($request)
    {
        return $this->searchRecordingsAsyncWithHttpInfo($request);
    }
    
    public function searchRecordingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/record/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['query_all'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sort_type'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchRecordingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchRecordingsRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员根据分页查询企业资源
     *
     * SP根据条件查询企业的资源项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchResourceAsync($request)
    {
        return $this->searchResourceAsyncWithHttpInfo($request);
    }
    
    public function searchResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{corp_id}/resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startExpireDate'] !== null) {
            $queryParams['start_expire_date'] = $localVarParams['startExpireDate'];
        }
        if ($localVarParams['endExpireDate'] !== null) {
            $queryParams['end_expire_date'] = $localVarParams['endExpireDate'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['typeId'] !== null) {
            $queryParams['type_id'] = $localVarParams['typeId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['corpId'] !== null) {
            $pathParams['corp_id'] = $localVarParams['corpId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchResourceRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员分页查询企业资源操作记录
     *
     * SP根据根据条件查询企业的资源操作记录，支持根据resourceId模糊搜索。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchResourceOpRecordAsync($request)
    {
        return $this->searchResourceOpRecordAsyncWithHttpInfo($request);
    }
    
    public function searchResourceOpRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{corp_id}/resource-record';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startExpireDate'] !== null) {
            $queryParams['start_expire_date'] = $localVarParams['startExpireDate'];
        }
        if ($localVarParams['endExpireDate'] !== null) {
            $queryParams['end_expire_date'] = $localVarParams['endExpireDate'];
        }
        if ($localVarParams['startOperateDate'] !== null) {
            $queryParams['start_operate_date'] = $localVarParams['startOperateDate'];
        }
        if ($localVarParams['endOperateDate'] !== null) {
            $queryParams['end_operate_date'] = $localVarParams['endOperateDate'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['typeId'] !== null) {
            $queryParams['type_id'] = $localVarParams['typeId'];
        }
        if ($localVarParams['operateType'] !== null) {
            $queryParams['operate_type'] = $localVarParams['operateType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['corpId'] !== null) {
            $pathParams['corp_id'] = $localVarParams['corpId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchResourceOpRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchResourceOpRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 分页查询用户
     *
     * 企业管理员通过该接口分页查询企业用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchUsersAsync($request)
    {
        return $this->searchUsersAsyncWithHttpInfo($request);
    }
    
    public function searchUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sort_field'] = $localVarParams['sortField'];
        }
        if ($localVarParams['isAsc'] !== null) {
            $queryParams['is_asc'] = $localVarParams['isAsc'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $queryParams['dept_code'] = $localVarParams['deptCode'];
        }
        if ($localVarParams['enableSubDept'] !== null) {
            $queryParams['enable_sub_dept'] = $localVarParams['enableSubDept'];
        }
        if ($localVarParams['adminType'] !== null) {
            $queryParams['admin_type'] = $localVarParams['adminType'];
        }
        if ($localVarParams['enableRoom'] !== null) {
            $queryParams['enable_room'] = $localVarParams['enableRoom'];
        }
        if ($localVarParams['userType'] !== null) {
            $queryParams['user_type'] = $localVarParams['userType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['containsUnActive'] !== null) {
            $queryParams['contains_un_active'] = $localVarParams['containsUnActive'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchUsersRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员分页查询激活码
     *
     * 企业管理员分页查询激活码，支持激活码、终端名称模糊查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchVisionActiveCodeAsync($request)
    {
        return $this->searchVisionActiveCodeAsyncWithHttpInfo($request);
    }
    
    public function searchVisionActiveCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/vision/activecode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['devType'] !== null) {
            $queryParams['dev_type'] = $localVarParams['devType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchVisionActiveCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchVisionActiveCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 发送滑块验证码
     *
     * 该接口提供发送滑块验证码。服务器收到请求，返回抠图以及抠图后的原图等结果。需要在前台界面显示出抠图以及抠图后的原图，用户通过滑块操作来匹配图形。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendSlideVerifyCodeAsync($request)
    {
        return $this->sendSlideVerifyCodeAsyncWithHttpInfo($request);
    }
    
    public function sendSlideVerifyCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/auth/slideverifycode/send';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SendSlideVerifyCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SendSlideVerifyCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 发送验证码
     *
     * 该接口提供发送验证码，服务器收到请求，发送验证码到邮箱或者短信并返回结果。用户在前台界面通过滑块验证后，再进行发送验证码操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendVeriCodeForChangePwdAsync($request)
    {
        return $this->sendVeriCodeForChangePwdAsyncWithHttpInfo($request);
    }
    
    public function sendVeriCodeForChangePwdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/verifycode/send';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SendVeriCodeForChangePwdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SendVeriCodeForChangePwdRequest',
            $asyncRequest = true);
    }

    /**
     * 获取验证码
     *
     * 修改用户手机或邮箱时，需要获取验证码。企业用户通过该接口获取验证码，系统会向用户的手机或邮箱发送，验证码1分钟内有效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendVeriCodeForUpdateUserInfoAsync($request)
    {
        return $this->sendVeriCodeForUpdateUserInfoAsyncWithHttpInfo($request);
    }
    
    public function sendVeriCodeForUpdateUserInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/verification-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SendVeriCodeForUpdateUserInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SendVeriCodeForUpdateUserInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 设置普通与会人的语言频道
     *
     * 主持人通过该接口设置某些普通与会者(包括主持人)加入哪个语言频道。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setAttendeeLanChannelAsync($request)
    {
        return $this->setAttendeeLanChannelAsyncWithHttpInfo($request);
    }
    
    public function setAttendeeLanChannelAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/setAttendeeLanChannel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetAttendeeLanChannelResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetAttendeeLanChannelRequest',
            $asyncRequest = true);
    }

    /**
     * 申请联席主持人
     *
     * 该接口用于设置联席主持人或释放联席主持人。只能将来宾设置为联席主持人。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setCohostAsync($request)
    {
        return $this->setCohostAsyncWithHttpInfo($request);
    }
    
    public function setCohostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/cohost';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetCohostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetCohostRequest',
            $asyncRequest = true);
    }

    /**
     * 设置自定义多画面
     *
     * 该接口用于设置会中多画面。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setCustomMultiPictureAsync($request)
    {
        return $this->setCustomMultiPictureAsyncWithHttpInfo($request);
    }
    
    public function setCustomMultiPictureAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/display/customMultiPicture';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetCustomMultiPictureResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetCustomMultiPictureRequest',
            $asyncRequest = true);
    }

    /**
     * 主持人选看
     *
     * 该接口用于主持人轮询、主持人选看多画面、主持人选看会场操作。只适用于专业会议终端（如TE系列等）为主持人的场景。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setHostViewAsync($request)
    {
        return $this->setHostViewAsyncWithHttpInfo($request);
    }
    
    public function setHostViewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/chairView';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetHostViewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetHostViewRequest',
            $asyncRequest = true);
    }

    /**
     * 设置传译组
     *
     * 主持人通过该接口设置传译组，每个传译组支持两种语言，传译组内支持多个传译员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setInterpreterGroupAsync($request)
    {
        return $this->setInterpreterGroupAsyncWithHttpInfo($request);
    }
    
    public function setInterpreterGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/interpreterGroup';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetInterpreterGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetInterpreterGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 设置多画面
     *
     * 设置会议多画面。该接口废弃不用，请使用“[[设置自定义多画面](https://support.huaweicloud.com/api-meeting/meeting_21_0418.html)](tag:hws)[[设置自定义多画面](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0418.html)](tag:hk)”接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setMultiPictureAsync($request)
    {
        return $this->setMultiPictureAsyncWithHttpInfo($request);
    }
    
    public function setMultiPictureAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/display/multiPicture';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetMultiPictureResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetMultiPictureRequest',
            $asyncRequest = true);
    }

    /**
     * 会场选看
     *
     * 该接口用于专业会议终端（如TE系列等）选看其他与会者。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setParticipantViewAsync($request)
    {
        return $this->setParticipantViewAsyncWithHttpInfo($request);
    }
    
    public function setParticipantViewAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/partView';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetParticipantViewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetParticipantViewRequest',
            $asyncRequest = true);
    }

    /**
     * 用户设置头像
     *
     * 用户设置头像
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setProfileImageAsync($request)
    {
        return $this->setProfileImageAsyncWithHttpInfo($request);
    }
    
    public function setProfileImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/abs/profile-images';
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
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetProfileImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetProfileImageRequest',
            $asyncRequest = true);
    }

    /**
     * 申请主持人
     *
     * 该接口用于设置主持人或释放主持人。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setRoleAsync($request)
    {
        return $this->setRoleAsyncWithHttpInfo($request);
    }
    
    public function setRoleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/participants/role';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetRoleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetRoleRequest',
            $asyncRequest = true);
    }

    /**
     * 设置SSO登录配置
     *
     * 该接口用于设置SSO登录的鉴权配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setSsoConfigAsync($request)
    {
        return $this->setSsoConfigAsyncWithHttpInfo($request);
    }
    
    public function setSsoConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/authorizeconfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetSsoConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetSsoConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员设置企业成员头像
     *
     * 为企业内的用户设置头像（只允许管理员调用）
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setUserProfileImageAsync($request)
    {
        return $this->setUserProfileImageAsyncWithHttpInfo($request);
    }
    
    public function setUserProfileImageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/abs/profile-images/{user_id}';
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
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetUserProfileImageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetUserProfileImageRequest',
            $asyncRequest = true);
    }

    /**
     * 设置事件推送
     *
     * 该接口用于管理员设置企业级会议事件订阅配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setWebHookConfigAsync($request)
    {
        return $this->setWebHookConfigAsyncWithHttpInfo($request);
    }
    
    public function setWebHookConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/webhook/link-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetWebHookConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetWebHookConfigRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员查询会议归属企业
     *
     * SP管理员根据会议ID查询该会议归属的企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConfOrgAsync($request)
    {
        return $this->showConfOrgAsyncWithHttpInfo($request);
    }
    
    public function showConfOrgAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/confOrg';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowConfOrgResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowConfOrgRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员查询企业
     *
     * 获取企业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCorpAsync($request)
    {
        return $this->showCorpAsyncWithHttpInfo($request);
    }
    
    public function showCorpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业管理员
     *
     * 通过该接口查询企业管理员。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCorpAdminAsync($request)
    {
        return $this->showCorpAdminAsyncWithHttpInfo($request);
    }
    
    public function showCorpAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/admin/{account}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['account'] !== null) {
            $pathParams['account'] = $localVarParams['account'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpAdminRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员查询企业注册信息
     *
     * 企业管理员通过该接口查询企业注册信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCorpBasicInfoAsync($request)
    {
        return $this->showCorpBasicInfoAsyncWithHttpInfo($request);
    }
    
    public function showCorpBasicInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpBasicInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpBasicInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员查询企业内资源及业务权限
     *
     * 企业管理员通过该接口查询企业内资源及业务权限，包括查询已使用的资源情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCorpResourceAsync($request)
    {
        return $this->showCorpResourceAsyncWithHttpInfo($request);
    }
    
    public function showCorpResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 通过部门编码查询部门信息
     *
     * 通过部门编码查询部门信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDepartmentAsync($request)
    {
        return $this->showDepartmentAsyncWithHttpInfo($request);
    }
    
    public function showDepartmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/abs/departments/{dept_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $pathParams['dept_code'] = $localVarParams['deptCode'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDepartmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDepartmentRequest',
            $asyncRequest = true);
    }

    /**
     * 查询部门及其一级子部门列表
     *
     * 企业管理员通过该接口查询部门及其一级子部门列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeptAndChildDeptAsync($request)
    {
        return $this->showDeptAndChildDeptAsyncWithHttpInfo($request);
    }
    
    public function showDeptAndChildDeptAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/dept/{dept_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $pathParams['dept_code'] = $localVarParams['deptCode'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeptAndChildDeptResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeptAndChildDeptRequest',
            $asyncRequest = true);
    }

    /**
     * 查询终端详情
     *
     * 企业管理员通过该接口查询专业会议终端详情。
     * &gt; 如果需要查询Ideahub、SmartRooms、智慧屏TV详情请使用[[查询用户详情](https://support.huaweicloud.com/api-meeting/meeting_21_0069.html)](tag:hws)[[查询用户详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0069.html)](tag:hk)接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceDetailAsync($request)
    {
        return $this->showDeviceDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeviceDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device/{sn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['sn'] !== null) {
            $pathParams['sn'] = $localVarParams['sn'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询设备状态
     *
     * 调用本接口可以查询硬终端的状态。
     * 硬终端与发起查询请求的帐号需在同一企业下，否则会鉴权失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceStatusAsync($request)
    {
        return $this->showDeviceStatusAsyncWithHttpInfo($request);
    }
    
    public function showDeviceStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/ap/userstatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有终端类型
     *
     * 企业管理员通过该接口获取所有的专业会议终端类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeviceTypesAsync($request)
    {
        return $this->showDeviceTypesAsyncWithHttpInfo($request);
    }
    
    public function showDeviceTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/termdevtype';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询历史会议详情
     *
     * 该接口用户查询指定历史会议的详情。管理员可以查询本企业内所有的历史会议详情，普通用户仅能查询自己创建或者被邀请的历史会议详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHisMeetingDetailAsync($request)
    {
        return $this->showHisMeetingDetailAsyncWithHttpInfo($request);
    }
    
    public function showHisMeetingDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/history/confDetail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xType'] !== null) {
            $headerParams['x_type'] = $localVarParams['xType'];
        }
        if ($localVarParams['xQueryType'] !== null) {
            $headerParams['x_query_type'] = $localVarParams['xQueryType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowHisMeetingDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowHisMeetingDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询多画面布局
     *
     * 该接口用于查询当前会议已保存的多画面布局。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLayoutAsync($request)
    {
        return $this->showLayoutAsyncWithHttpInfo($request);
    }
    
    public function showLayoutAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/layOut';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowLayoutResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowLayoutRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会议详情
     *
     * 查询偏移量
     * * 管理员可以查询管理权限域内所有会议的详情，普通用户仅能查询自己创建或者需要参加的会议详情。
     * * 只能查询尚未结束的会议（既正在召开的会议和已预约还未召开的会议）。如果需要查询历史会议列详情，请参考[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMeetingDetailAsync($request)
    {
        return $this->showMeetingDetailAsyncWithHttpInfo($request);
    }
    
    public function showMeetingDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/confDetail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xType'] !== null) {
            $headerParams['x_type'] = $localVarParams['xType'];
        }
        if ($localVarParams['xQueryType'] !== null) {
            $headerParams['x_query_type'] = $localVarParams['xQueryType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会议纪要详情
     *
     * 用户查询单个会议纪要详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMeetingFileAsync($request)
    {
        return $this->showMeetingFileAsyncWithHttpInfo($request);
    }
    
    public function showMeetingFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/meeting-files/{file_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['fileCode'] !== null) {
            $pathParams['file_code'] = $localVarParams['fileCode'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingFileRequest',
            $asyncRequest = true);
    }

    /**
     * 打开会议纪要文件列表
     *
     * 用户使用手机扫码后，手机端请求服务端,让服务端通知指定IdeaHub打开指定用户的会议纪要文件列表。二维码内容 ：cloudlink://cloudlink.huawei.com/h5page?action&#x3D;OPEN_MEETING_FILE_LIST&amp;key1&#x3D;value1&amp;key2&#x3D;value2 。key/value的个数可能变化，终端解析后，在发起后续请求时，将所有key/value存为map，作为入参即可。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMeetingFileListAsync($request)
    {
        return $this->showMeetingFileListAsyncWithHttpInfo($request);
    }
    
    public function showMeetingFileListAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/meeting-files/open-meeting-file-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingFileListResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingFileListRequest',
            $asyncRequest = true);
    }

    /**
     * 用户查询自己的信息
     *
     * 企业用户通过该接口查询自己的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMyInfoAsync($request)
    {
        return $this->showMyInfoAsyncWithHttpInfo($request);
    }
    
    public function showMyInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMyInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMyInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询在线会议详情
     *
     * 该接口用于查询正在召开的会议详情。管理员可以查询本企业内所有的在线会议详情，普通用户仅能查询自己帐号创建或者需要参加的在线会议详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOnlineMeetingDetailAsync($request)
    {
        return $this->showOnlineMeetingDetailAsyncWithHttpInfo($request);
    }
    
    public function showOnlineMeetingDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/online/confDetail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xType'] !== null) {
            $headerParams['x_type'] = $localVarParams['xType'];
        }
        if ($localVarParams['xQueryType'] !== null) {
            $headerParams['x_query_type'] = $localVarParams['xQueryType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowOnlineMeetingDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowOnlineMeetingDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员查询企业资源使用信息
     *
     * 企业管理员查询所属企业的资源使用信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrgResAsync($request)
    {
        return $this->showOrgResAsyncWithHttpInfo($request);
    }
    
    public function showOrgResAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/orgRes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowOrgResResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowOrgResRequest',
            $asyncRequest = true);
    }

    /**
     * 根据ID查询节目详情
     *
     * 根据ID获取节目详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProgramAsync($request)
    {
        return $this->showProgramAsyncWithHttpInfo($request);
    }
    
    public function showProgramAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/programs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowProgramResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowProgramRequest',
            $asyncRequest = true);
    }

    /**
     * 根据ID查询信息窗发布详情
     *
     * 根据ID获取发布详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPublicationAsync($request)
    {
        return $this->showPublicationAsyncWithHttpInfo($request);
    }
    
    public function showPublicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/publications/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowPublicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowPublicationRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会议实时信息
     *
     * 该接口用于查询正在召开的会议实时信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRealTimeInfoOfMeetingAsync($request)
    {
        return $this->showRealTimeInfoOfMeetingAsyncWithHttpInfo($request);
    }
    
    public function showRealTimeInfoOfMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/realTimeInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRealTimeInfoOfMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRealTimeInfoOfMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询单会议录制文件信息
     *
     * 查询单会议录制文件信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordInfoAsync($request)
    {
        return $this->showRecordInfoAsyncWithHttpInfo($request);
    }
    
    public function showRecordInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/rlm/record/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询录制详情
     *
     * 改接口用于查询某个会议录制的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordingDetailAsync($request)
    {
        return $this->showRecordingDetailAsyncWithHttpInfo($request);
    }
    
    public function showRecordingDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/record/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordingDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordingDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询录制文件下载链接
     *
     * 该接口用户查询指定会议录制文件下载链接。
     * &gt; * 仅企业管理员权限的帐号才能查询录制文件的下载链接
     * &gt; * 这个接口需要在华为云会议后台开通白名单后才能调用。请联系华为销售人员，并提供华为云会议企业ID
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecordingFileDownloadUrlsAsync($request)
    {
        return $this->showRecordingFileDownloadUrlsAsyncWithHttpInfo($request);
    }
    
    public function showRecordingFileDownloadUrlsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/record/downloadurls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordingFileDownloadUrlsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordingFileDownloadUrlsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询会议所在区域信息
     *
     * 该接口用于查询会议所在区域的IP和域名。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRegionInfoOfMeetingAsync($request)
    {
        return $this->showRegionInfoOfMeetingAsyncWithHttpInfo($request);
    }
    
    public function showRegionInfoOfMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/region/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRegionInfoOfMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRegionInfoOfMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 查询网络研讨会高级设置
     *
     * 该接口用于查询指定网络研讨会的高级设置。管理员可查询企业内的网络研讨会高级设置，非管理员只可查询自己预定的网络研讨会的高级设置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRoomSettingAsync($request)
    {
        return $this->showRoomSettingAsyncWithHttpInfo($request);
    }
    
    public function showRoomSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/room-setting/{conference_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $pathParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRoomSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRoomSettingRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员查询SP下资源使用信息
     *
     * SP管理员查询所属SP的共享资源使用信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSpResAsync($request)
    {
        return $this->showSpResAsyncWithHttpInfo($request);
    }
    
    public function showSpResAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/spRes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSpResResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSpResRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员查询资源信息
     *
     * SP管理员查询SP的所有资源，包括已使用的资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSpResourceAsync($request)
    {
        return $this->showSpResourceAsyncWithHttpInfo($request);
    }
    
    public function showSpResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queryGroup'] !== null) {
            $queryParams['query_group'] = $localVarParams['queryGroup'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSpResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSpResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 查询SSO登录配置
     *
     * 该接口用于查询SSO登录的鉴权配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSsoConfigAsync($request)
    {
        return $this->showSsoConfigAsyncWithHttpInfo($request);
    }
    
    public function showSsoConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/authorizeconfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSsoConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSsoConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询用户详情
     *
     * 企业管理员通过该接口查询企业用户详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showUserDetailAsync($request)
    {
        return $this->showUserDetailAsyncWithHttpInfo($request);
    }
    
    public function showUserDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member/{account}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['account'] !== null) {
            $pathParams['account'] = $localVarParams['account'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowUserDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowUserDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询事件推送
     *
     * 该接口用于管理员查询企业事件订阅配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWebHookConfigAsync($request)
    {
        return $this->showWebHookConfigAsyncWithHttpInfo($request);
    }
    
    public function showWebHookConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/webhook/link-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['corpId'] !== null) {
            $queryParams['corp_id'] = $localVarParams['corpId'];
        }
        if ($localVarParams['spId'] !== null) {
            $queryParams['sp_id'] = $localVarParams['spId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowWebHookConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowWebHookConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询网络研讨会详情
     *
     * 该接口用于查询指定网络研讨会的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWebinarAsync($request)
    {
        return $this->showWebinarAsyncWithHttpInfo($request);
    }
    
    public function showWebinarAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences/{conference_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $pathParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowWebinarResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowWebinarRequest',
            $asyncRequest = true);
    }

    /**
     * 激活会议
     *
     * 该接口用于通过会议ID和会议密码激活会议。所有的会控接口都需要在会议激活后才能调用，可以通过该接口先激活会议。
     * &gt; 来宾密码是否可以激活会议取决于会议创建时是否设置了“是否允许来宾启动会议”（allowGuestStartConf&#x3D;true）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startMeetingAsync($request)
    {
        return $this->startMeetingAsyncWithHttpInfo($request);
    }
    
    public function startMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\StartMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\StartMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 结束会议
     *
     * 该接口用于结束正在召开的会议。
     * &gt; * 如果管理员在企业的会议设置中关闭“结束会议保留预约记录”开关，会议结束后会议列表中将删除该会议，与会者不能再次加入该会议。否则会议预约时间到之前，与会者可以再次加入该会议
     * &gt; * “结束会议保留预约记录”默认是开的
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopMeetingAsync($request)
    {
        return $this->stopMeetingAsyncWithHttpInfo($request);
    }
    
    public function stopMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\StopMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\StopMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 切换视频显示策略
     *
     * 该接口用于切换会中视频画面显示策略，包括广播多画面，广播单画面，声控多画面。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchModeAsync($request)
    {
        return $this->switchModeAsyncWithHttpInfo($request);
    }
    
    public function switchModeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/display/mode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SwitchModeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SwitchModeRequest',
            $asyncRequest = true);
    }

    /**
     * 修改企业应用
     *
     * 企业默认管理员修改企业应用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAppIdAsync($request)
    {
        return $this->updateAppIdAsyncWithHttpInfo($request);
    }
    
    public function updateAppIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/usg/acs/corp/app/{app_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['appId'] !== null) {
            $pathParams['app_id'] = $localVarParams['appId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateAppIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateAppIdRequest',
            $asyncRequest = true);
    }

    /**
     * 修改手机或邮箱
     *
     * 企业用户通过该接口修改手机或邮箱，需要先获取验证码，验证多次失败会禁止修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateContactAsync($request)
    {
        return $this->updateContactAsyncWithHttpInfo($request);
    }
    
    public function updateContactAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/contact';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateContactResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateContactRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员修改企业
     *
     * 修改企业，若任一参数为null或者不携带则不修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCorpAsync($request)
    {
        return $this->updateCorpAsyncWithHttpInfo($request);
    }
    
    public function updateCorpAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateCorpResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateCorpRequest',
            $asyncRequest = true);
    }

    /**
     * 企业管理员修改企业注册信息
     *
     * 企业管理员通过该接口修改企业注册信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCorpBasicInfoAsync($request)
    {
        return $this->updateCorpBasicInfoAsyncWithHttpInfo($request);
    }
    
    public function updateCorpBasicInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateCorpBasicInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateCorpBasicInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 修改部门
     *
     * 企业管理员通过该接口修改部门。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDepartmentAsync($request)
    {
        return $this->updateDepartmentAsyncWithHttpInfo($request);
    }
    
    public function updateDepartmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/dept/{dept_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $pathParams['dept_code'] = $localVarParams['deptCode'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateDepartmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateDepartmentRequest',
            $asyncRequest = true);
    }

    /**
     * 修改终端
     *
     * 企业管理员通过该接口修改专业会议终端。
     * &gt; 如果需要修改Ideahub、SmartRooms、智慧屏TV请使用[[修改用户](https://support.huaweicloud.com/api-meeting/meeting_21_0068.html)](tag:hws)[[修改用户](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0068.html)](tag:hk)接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeviceAsync($request)
    {
        return $this->updateDeviceAsyncWithHttpInfo($request);
    }
    
    public function updateDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/device/{sn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['sn'] !== null) {
            $pathParams['sn'] = $localVarParams['sn'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateDeviceRequest',
            $asyncRequest = true);
    }

    /**
     * 更新信息窗素材
     *
     * 更新信息窗素材。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMaterialAsync($request)
    {
        return $this->updateMaterialAsyncWithHttpInfo($request);
    }
    
    public function updateMaterialAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/materials/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMaterialResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMaterialRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑预约会议
     *
     * 该接口用于修改已预约的会议。会议开始后，不能被修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMeetingAsync($request)
    {
        return $this->updateMeetingAsyncWithHttpInfo($request);
    }
    
    public function updateMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 修改用会议室及个人会议ID信息
     *
     * 企业用户登录后可以修改分配给用户的云会议室及个人会议ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMemberVmrAsync($request)
    {
        return $this->updateMemberVmrAsyncWithHttpInfo($request);
    }
    
    public function updateMemberVmrAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member/vmr/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMemberVmrResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMemberVmrRequest',
            $asyncRequest = true);
    }

    /**
     * 用户修改自己的信息
     *
     * 企业用户通过该接口修改自己的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMyInfoAsync($request)
    {
        return $this->updateMyInfoAsyncWithHttpInfo($request);
    }
    
    public function updateMyInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/member';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMyInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMyInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 更新信息窗节目
     *
     * 更新信息窗节目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProgramAsync($request)
    {
        return $this->updateProgramAsyncWithHttpInfo($request);
    }
    
    public function updateProgramAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/programs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateProgramResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateProgramRequest',
            $asyncRequest = true);
    }

    /**
     * 修改信息窗发布
     *
     * 修改信息窗发布。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePublicationAsync($request)
    {
        return $this->updatePublicationAsyncWithHttpInfo($request);
    }
    
    public function updatePublicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/sss/publications/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdatePublicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdatePublicationRequest',
            $asyncRequest = true);
    }

    /**
     * 修改密码
     *
     * 企业成员通过该接口提供用户修改密码功能，服务器收到请求，修改用户密码并返回结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePwdAsync($request)
    {
        return $this->updatePwdAsyncWithHttpInfo($request);
    }
    
    public function updatePwdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdatePwdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdatePwdRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑周期性会议
     *
     * 该接口用于修改已预约的周期性会议。会议开始后，不能被修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRecurringMeetingAsync($request)
    {
        return $this->updateRecurringMeetingAsyncWithHttpInfo($request);
    }
    
    public function updateRecurringMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/cycleconferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRecurringMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRecurringMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑周期性会议的子会议
     *
     * 该接口用于修改已预约的周期性会议的子会议。会议开始后，不能被修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRecurringSubMeetingAsync($request)
    {
        return $this->updateRecurringSubMeetingAsyncWithHttpInfo($request);
    }
    
    public function updateRecurringSubMeetingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/conferences/cyclesubconf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['user_uuid'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams['x_authorization_type'] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams['x_site_id'] = $localVarParams['xSiteId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRecurringSubMeetingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRecurringSubMeetingRequest',
            $asyncRequest = true);
    }

    /**
     * SP管理员根据修改企业资源
     *
     * 企业修改资源的过期时间、停用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateResourceAsync($request)
    {
        return $this->updateResourceAsyncWithHttpInfo($request);
    }
    
    public function updateResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/sp/corp/{corp_id}/resource';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['corpId'] !== null) {
            $pathParams['corp_id'] = $localVarParams['corpId'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateResourceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateResourceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改网络研讨会高级设置
     *
     * 该接口用于设置指定网络研讨会的高级设置。管理员可设置企业内的网络研讨会高级设置，非管理员只可设置自己预定的网络研讨会的高级设置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoomSettingAsync($request)
    {
        return $this->updateRoomSettingAsyncWithHttpInfo($request);
    }
    
    public function updateRoomSettingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/room-setting/{conference_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $pathParams['conference_id'] = $localVarParams['conferenceId'];
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRoomSettingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRoomSettingRequest',
            $asyncRequest = true);
    }

    /**
     * 会中修改配置
     *
     * 该接口用于修改会议配置，包括会议共享是否锁定，允许呼入范围。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStartedConfConfigAsync($request)
    {
        return $this->updateStartedConfConfigAsyncWithHttpInfo($request);
    }
    
    public function updateStartedConfConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/control/conferences/updateStartedConfConfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conference_id'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams['x_conference_authorization'] = $localVarParams['xConferenceAuthorization'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateStartedConfConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateStartedConfConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 刷新Token
     *
     * 该接口提供刷新Token功能，根据传入的Token，刷新Token失效时间并返回结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTokenAsync($request)
    {
        return $this->updateTokenAsyncWithHttpInfo($request);
    }
    
    public function updateTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/acs/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateTokenRequest',
            $asyncRequest = true);
    }

    /**
     * 修改用户
     *
     * 企业管理员通过该接口修改企业用户。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateUserAsync($request)
    {
        return $this->updateUserAsyncWithHttpInfo($request);
    }
    
    public function updateUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/usg/dcs/corp/member/{account}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountType'] !== null) {
            $queryParams['account_type'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
        }
        if ($localVarParams['account'] !== null) {
            $pathParams['account'] = $localVarParams['account'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateUserRequest',
            $asyncRequest = true);
    }

    /**
     * 开启事件推送
     *
     * 该接口用于管理员变更订阅配置使用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWebHookConfigStatusAsync($request)
    {
        return $this->updateWebHookConfigStatusAsyncWithHttpInfo($request);
    }
    
    public function updateWebHookConfigStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/mmc/management/webhook/change-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateWebHookConfigStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateWebHookConfigStatusRequest',
            $asyncRequest = true);
    }

    /**
     * 编辑网络研讨会
     *
     * 该接口用于修改已创建的网络研讨会。网络研讨会开始后不能修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWebinarAsync($request)
    {
        return $this->updateWebinarAsyncWithHttpInfo($request);
    }
    
    public function updateWebinarAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/conferences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
                []
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateWebinarResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateWebinarRequest',
            $asyncRequest = true);
    }

    /**
     * 上传图片
     *
     * 该接口用户上传网络研讨会高级设置用的图片。图片可用于网络研讨会的封面和Logo。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadFileAsync($request)
    {
        return $this->uploadFileAsyncWithHttpInfo($request);
    }
    
    public function uploadFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/wss/webinar/open/res/file';
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
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams['x_request_id'] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams['accept_language'] = $localVarParams['acceptLanguage'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\UploadFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UploadFileRequest',
            $asyncRequest = true);
    }

    /**
     * 查询QoS历史会议列表
     *
     * 该接口用于查询企业内历史会议的QoS告警。仅旗舰版企业/标准版企业的企业管理员有权限查询。可以查询最近3个月内的数据。
     * &gt; 仪表盘的QoS统计功能需要申请才能开通。请联系华为销售人员，并提供华为云会议企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchQosHistoryMeetingsAsync($request)
    {
        return $this->searchQosHistoryMeetingsAsyncWithHttpInfo($request);
    }
    
    public function searchQosHistoryMeetingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/conferences/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosHistoryMeetingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosHistoryMeetingsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询QoS在线会议列表
     *
     * 该接口用于查询企业内正在召开会议的QoS告警。仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * &gt; 仪表盘的QoS统计功能需要申请才能开通。请联系华为销售人员，并提供华为云会议企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchQosOnlineMeetingsAsync($request)
    {
        return $this->searchQosOnlineMeetingsAsyncWithHttpInfo($request);
    }
    
    public function searchQosOnlineMeetingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/conferences/online';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosOnlineMeetingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosOnlineMeetingsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询与会者的QoS数据
     *
     * 该接口用于查询企业内在线会议或历史会议的与会者QoS数据。仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * &gt; 仪表盘的QoS统计功能需要申请才能开通。请联系华为销售人员，并提供华为云会议企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchQosParticipantDetailAsync($request)
    {
        return $this->searchQosParticipantDetailAsyncWithHttpInfo($request);
    }
    
    public function searchQosParticipantDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/conference/participant/qos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['confType'] !== null) {
            $queryParams['conf_type'] = $localVarParams['confType'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participant_id'] = $localVarParams['participantId'];
        }
        if ($localVarParams['qosType'] !== null) {
            $queryParams['qos_type'] = $localVarParams['qosType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosParticipantDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosParticipantDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询QoS会议与会者列表
     *
     * 该接口用于查询企业内在线会议或历史会议的与会者QoS告警。仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * &gt; 仪表盘的QoS统计功能需要申请才能开通。请联系华为销售人员，并提供华为云会议企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchQosParticipantsAsync($request)
    {
        return $this->searchQosParticipantsAsyncWithHttpInfo($request);
    }
    
    public function searchQosParticipantsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/conference/participants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['confUuid'] !== null) {
            $queryParams['conf_uuid'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['confType'] !== null) {
            $queryParams['conf_type'] = $localVarParams['confType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['search_key'] = $localVarParams['searchKey'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosParticipantsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosParticipantsRequest',
            $asyncRequest = true);
    }

    /**
     * 设置QoS告警阈值
     *
     * 该接口用于设置QoS告警阈值。仅旗舰版企业/标准版企业的企业管理员有权限设置。
     * &gt; 仪表盘的QoS统计功能需要申请才能开通。请联系华为销售人员，并提供华为云会议企业ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setQosThresholdAsync($request)
    {
        return $this->setQosThresholdAsyncWithHttpInfo($request);
    }
    
    public function setQosThresholdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/conference/threshold';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['thresholdType'] !== null) {
            $queryParams['threshold_type'] = $localVarParams['thresholdType'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
                ['application/json; charset=utf-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SetQosThresholdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetQosThresholdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询QoS告警阈值
     *
     * 该接口用于查询QoS告警阈值。仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * &gt; 该接口用于查询QoS告警阈值。仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQosThresholdAsync($request)
    {
        return $this->showQosThresholdAsyncWithHttpInfo($request);
    }
    
    public function showQosThresholdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/conference/threshold';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['thresholdType'] !== null) {
            $queryParams['threshold_type'] = $localVarParams['thresholdType'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowQosThresholdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowQosThresholdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业级会议总体统计数据
     *
     * 该接口用于查询企业内：
     * * 单日内按小时统计的会议数据。
     * * 指定日期范围内按日/按月统计的会议数据。
     * &gt; 仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchStatisticConferenceInfoAsync($request)
    {
        return $this->searchStatisticConferenceInfoAsyncWithHttpInfo($request);
    }
    
    public function searchStatisticConferenceInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/dashboard/statistic/conference/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticConferenceInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticConferenceInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业级会议与会统计数据
     *
     * 该接口用于查询企业内与会者数据统计：
     * * 查询与会用户统计数据，按日/按月统计。
     * * 查询与会硬件终端统计数据，按日/按月统计。
     * * 查询与会设备统计数据，按日/按月统计。
     * &gt; 仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchStatisticConferenceParticipantAsync($request)
    {
        return $this->searchStatisticConferenceParticipantAsyncWithHttpInfo($request);
    }
    
    public function searchStatisticConferenceParticipantAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/dashboard/statistic/conference/participant';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticConferenceParticipantResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticConferenceParticipantRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业级会议已购资源使用统计数据
     *
     * 该接口用于查询企业内已购资源使用状况数据统计：
     * * 查询已购资源使用状况，按日/按月统计。
     * &gt; 仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchStatisticResourceInfoAsync($request)
    {
        return $this->searchStatisticResourceInfoAsyncWithHttpInfo($request);
    }
    
    public function searchStatisticResourceInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/dashboard/statistic/resource/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticResourceInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticResourceInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业级会议的用户统计数据
     *
     * 该接口用于查询企业内用户数据统计：
     * * 查询会议用户登录数据，按日/按月统计。
     * * 查询会议用户激活数据，按日/按月统计。
     * * 查询会议用户登录设备数据，按日/按月统计。
     * &gt; 仅旗舰版企业/标准版企业的企业管理员有权限查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function searchStatisticUserInfoAsync($request)
    {
        return $this->searchStatisticUserInfoAsyncWithHttpInfo($request);
    }
    
    public function searchStatisticUserInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/metrics/dashboard/statistic/user/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['timeUnit'] !== null) {
            $queryParams['time_unit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticUserInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticUserInfoRequest',
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