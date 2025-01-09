<?php

namespace HuaweiCloud\SDK\Meeting\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class MeetingClient extends Client
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
        $client = new ClientBuilder(new MeetingClient(), "MeetingCredentials");
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
    public function addAppId($request)
    {
        return $this->addAppIdWithHttpInfo($request);
    }

    public function addAppIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddAppIdRequest');
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
    public function addCorp($request)
    {
        return $this->addCorpWithHttpInfo($request);
    }

    public function addCorpWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddCorpRequest');
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
    public function addCorpAdmin($request)
    {
        return $this->addCorpAdminWithHttpInfo($request);
    }

    public function addCorpAdminWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddCorpAdminRequest');
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
    public function addDepartment($request)
    {
        return $this->addDepartmentWithHttpInfo($request);
    }

    public function addDepartmentWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddDepartmentRequest');
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
    public function addDevice($request)
    {
        return $this->addDeviceWithHttpInfo($request);
    }

    public function addDeviceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddDeviceRequest');
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
    public function addMaterial($request)
    {
        return $this->addMaterialWithHttpInfo($request);
    }

    public function addMaterialWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddMaterialRequest');
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
    public function addProgram($request)
    {
        return $this->addProgramWithHttpInfo($request);
    }

    public function addProgramWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddProgramRequest');
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
    public function addPublication($request)
    {
        return $this->addPublicationWithHttpInfo($request);
    }

    public function addPublicationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddPublicationRequest');
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
    public function addResource($request)
    {
        return $this->addResourceWithHttpInfo($request);
    }

    public function addResourceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddResourceRequest');
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
    public function addToPersonalSpace($request)
    {
        return $this->addToPersonalSpaceWithHttpInfo($request);
    }

    public function addToPersonalSpaceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddToPersonalSpaceRequest');
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
    public function addUser($request)
    {
        return $this->addUserWithHttpInfo($request);
    }

    public function addUserWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AddUserRequest');
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
    public function allowClientRecord($request)
    {
        return $this->allowClientRecordWithHttpInfo($request);
    }

    public function allowClientRecordWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowClientRecordRequest');
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
    public function allowGuestUnmute($request)
    {
        return $this->allowGuestUnmuteWithHttpInfo($request);
    }

    public function allowGuestUnmuteWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowGuestUnmuteRequest');
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
    public function allowWaitingParticipant($request)
    {
        return $this->allowWaitingParticipantWithHttpInfo($request);
    }

    public function allowWaitingParticipantWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AllowWaitingParticipantRequest');
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
    public function associateVmr($request)
    {
        return $this->associateVmrWithHttpInfo($request);
    }

    public function associateVmrWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\AssociateVmrRequest');
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
    public function batchDeleteCorpAdmins($request)
    {
        return $this->batchDeleteCorpAdminsWithHttpInfo($request);
    }

    public function batchDeleteCorpAdminsWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteCorpAdminsRequest');
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
    public function batchDeleteDevices($request)
    {
        return $this->batchDeleteDevicesWithHttpInfo($request);
    }

    public function batchDeleteDevicesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteDevicesRequest');
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
    public function batchDeleteMaterials($request)
    {
        return $this->batchDeleteMaterialsWithHttpInfo($request);
    }

    public function batchDeleteMaterialsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteMaterialsRequest');
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
    public function batchDeletePrograms($request)
    {
        return $this->batchDeleteProgramsWithHttpInfo($request);
    }

    public function batchDeleteProgramsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteProgramsRequest');
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
    public function batchDeletePublications($request)
    {
        return $this->batchDeletePublicationsWithHttpInfo($request);
    }

    public function batchDeletePublicationsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeletePublicationsRequest');
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
    public function batchDeleteUsers($request)
    {
        return $this->batchDeleteUsersWithHttpInfo($request);
    }

    public function batchDeleteUsersWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchDeleteUsersRequest');
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
    public function batchHand($request)
    {
        return $this->batchHandWithHttpInfo($request);
    }

    public function batchHandWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchHandRequest');
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
    public function batchSearchAppId($request)
    {
        return $this->batchSearchAppIdWithHttpInfo($request);
    }

    public function batchSearchAppIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchSearchAppIdRequest');
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
    public function batchShowUserDetails($request)
    {
        return $this->batchShowUserDetailsWithHttpInfo($request);
    }

    public function batchShowUserDetailsWithHttpInfo($request)
    {
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
            $queryParams['idType'] = $localVarParams['idType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchShowUserDetailsRequest');
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
    public function batchUpdateDevicesStatus($request)
    {
        return $this->batchUpdateDevicesStatusWithHttpInfo($request);
    }

    public function batchUpdateDevicesStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchUpdateDevicesStatusRequest');
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
    public function batchUpdateUserStatus($request)
    {
        return $this->batchUpdateUserStatusWithHttpInfo($request);
    }

    public function batchUpdateUserStatusWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BatchUpdateUserStatusRequest');
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
    public function broadcastParticipant($request)
    {
        return $this->broadcastParticipantWithHttpInfo($request);
    }

    public function broadcastParticipantWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\BroadcastParticipantRequest');
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
    public function cancelBroadcast($request)
    {
        return $this->cancelBroadcastWithHttpInfo($request);
    }

    public function cancelBroadcastWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelBroadcastRequest');
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
    public function cancelMeeting($request)
    {
        return $this->cancelMeetingWithHttpInfo($request);
    }

    public function cancelMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelMeetingRequest');
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
    public function cancelRecurringMeeting($request)
    {
        return $this->cancelRecurringMeetingWithHttpInfo($request);
    }

    public function cancelRecurringMeetingWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelRecurringMeetingRequest');
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
    public function cancelRecurringSubMeeting($request)
    {
        return $this->cancelRecurringSubMeetingWithHttpInfo($request);
    }

    public function cancelRecurringSubMeetingWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CancelRecurringSubMeetingRequest');
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
    public function checkCallNumberInConf($request)
    {
        return $this->checkCallNumberInConfWithHttpInfo($request);
    }

    public function checkCallNumberInConfWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckCallNumberInConfRequest');
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
    public function checkSlideVerifyCode($request)
    {
        return $this->checkSlideVerifyCodeWithHttpInfo($request);
    }

    public function checkSlideVerifyCodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckSlideVerifyCodeRequest');
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
    public function checkToken($request)
    {
        return $this->checkTokenWithHttpInfo($request);
    }

    public function checkTokenWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckTokenRequest');
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
    public function checkVeriCodeForUpdateUserInfo($request)
    {
        return $this->checkVeriCodeForUpdateUserInfoWithHttpInfo($request);
    }

    public function checkVeriCodeForUpdateUserInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckVeriCodeForUpdateUserInfoRequest');
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
    public function checkVerifyCode($request)
    {
        return $this->checkVerifyCodeWithHttpInfo($request);
    }

    public function checkVerifyCodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CheckVerifyCodeRequest');
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
    public function createAnonymousAuthRandom($request)
    {
        return $this->createAnonymousAuthRandomWithHttpInfo($request);
    }

    public function createAnonymousAuthRandomWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xPassword'] !== null) {
            $headerParams[$arr['xPassword']] = $localVarParams['xPassword'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateAnonymousAuthRandomRequest');
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
    public function createAuthRandom($request)
    {
        return $this->createAuthRandomWithHttpInfo($request);
    }

    public function createAuthRandomWithHttpInfo($request)
    {
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
            $headerParams[$arr['xPassword']] = $localVarParams['xPassword'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateAuthRandomRequest');
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
    public function createConfToken($request)
    {
        return $this->createConfTokenWithHttpInfo($request);
    }

    public function createConfTokenWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
        }
        if ($localVarParams['xPassword'] !== null) {
            $headerParams[$arr['xPassword']] = $localVarParams['xPassword'];
        }
        if ($localVarParams['xLoginType'] !== null) {
            $headerParams[$arr['xLoginType']] = $localVarParams['xLoginType'];
        }
        if ($localVarParams['xNonce'] !== null) {
            $headerParams[$arr['xNonce']] = $localVarParams['xNonce'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateConfTokenRequest');
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
    public function createMeeting($request)
    {
        return $this->createMeetingWithHttpInfo($request);
    }

    public function createMeetingWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateMeetingRequest');
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
    public function createPortalRefNonce($request)
    {
        return $this->createPortalRefNonceWithHttpInfo($request);
    }

    public function createPortalRefNonceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreatePortalRefNonceRequest');
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
    public function createRecurringMeeting($request)
    {
        return $this->createRecurringMeetingWithHttpInfo($request);
    }

    public function createRecurringMeetingWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateRecurringMeetingRequest');
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
    public function createVisionActiveCode($request)
    {
        return $this->createVisionActiveCodeWithHttpInfo($request);
    }

    public function createVisionActiveCodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateVisionActiveCodeRequest');
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
    public function createWebSocketToken($request)
    {
        return $this->createWebSocketTokenWithHttpInfo($request);
    }

    public function createWebSocketTokenWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateWebSocketTokenRequest');
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
    public function createWebinar($request)
    {
        return $this->createWebinarWithHttpInfo($request);
    }

    public function createWebinarWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\CreateWebinarRequest');
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
    public function deleteAppId($request)
    {
        return $this->deleteAppIdWithHttpInfo($request);
    }

    public function deleteAppIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteAppIdRequest');
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
    public function deleteAttendees($request)
    {
        return $this->deleteAttendeesWithHttpInfo($request);
    }

    public function deleteAttendeesWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteAttendeesRequest');
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
    public function deleteCorp($request)
    {
        return $this->deleteCorpWithHttpInfo($request);
    }

    public function deleteCorpWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteCorpRequest');
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
    public function deleteCorpVmr($request)
    {
        return $this->deleteCorpVmrWithHttpInfo($request);
    }

    public function deleteCorpVmrWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteCorpVmrRequest');
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
    public function deleteDepartment($request)
    {
        return $this->deleteDepartmentWithHttpInfo($request);
    }

    public function deleteDepartmentWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteDepartmentRequest');
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
    public function deleteLayout($request)
    {
        return $this->deleteLayoutWithHttpInfo($request);
    }

    public function deleteLayoutWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['uuId'] !== null) {
            $queryParams['uuID'] = $localVarParams['uuId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteLayoutRequest');
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
    public function deleteRecordings($request)
    {
        return $this->deleteRecordingsWithHttpInfo($request);
    }

    public function deleteRecordingsWithHttpInfo($request)
    {
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
            $queryParams['confUUIDs'] = $localVarParams['confUuiDs'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteRecordingsRequest');
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
    public function deleteResource($request)
    {
        return $this->deleteResourceWithHttpInfo($request);
    }

    public function deleteResourceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteResourceRequest');
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
    public function deleteToken($request)
    {
        return $this->deleteTokenWithHttpInfo($request);
    }

    public function deleteTokenWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteTokenRequest');
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
    public function deleteVisionActiveCode($request)
    {
        return $this->deleteVisionActiveCodeWithHttpInfo($request);
    }

    public function deleteVisionActiveCodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteVisionActiveCodeRequest');
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
    public function deleteWebHookConfig($request)
    {
        return $this->deleteWebHookConfigWithHttpInfo($request);
    }

    public function deleteWebHookConfigWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteWebHookConfigRequest');
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
    public function deleteWebinar($request)
    {
        return $this->deleteWebinarWithHttpInfo($request);
    }

    public function deleteWebinarWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DeleteWebinarRequest');
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
    public function disassociateVmr($request)
    {
        return $this->disassociateVmrWithHttpInfo($request);
    }

    public function disassociateVmrWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\DisassociateVmrRequest');
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
    public function hand($request)
    {
        return $this->handWithHttpInfo($request);
    }

    public function handWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\HandRequest');
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
    public function hangUp($request)
    {
        return $this->hangUpWithHttpInfo($request);
    }

    public function hangUpWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\HangUpRequest');
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
    public function inviteOperateVideo($request)
    {
        return $this->inviteOperateVideoWithHttpInfo($request);
    }

    public function inviteOperateVideoWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteOperateVideoRequest');
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
    public function inviteParticipant($request)
    {
        return $this->inviteParticipantWithHttpInfo($request);
    }

    public function inviteParticipantWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteParticipantRequest');
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
    public function inviteShare($request)
    {
        return $this->inviteShareWithHttpInfo($request);
    }

    public function inviteShareWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteShareRequest');
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
    public function inviteUser($request)
    {
        return $this->inviteUserWithHttpInfo($request);
    }

    public function inviteUserWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteUserRequest');
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
    public function inviteWithPwd($request)
    {
        return $this->inviteWithPwdWithHttpInfo($request);
    }

    public function inviteWithPwdWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\InviteWithPwdRequest');
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
    public function listHistoryWebinars($request)
    {
        return $this->listHistoryWebinarsWithHttpInfo($request);
    }

    public function listHistoryWebinarsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sortType'] = $localVarParams['sortType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['startTime'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['endTime'] = $localVarParams['endTime'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListHistoryWebinarsRequest');
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
    public function listNetworkQuality($request)
    {
        return $this->listNetworkQualityWithHttpInfo($request);
    }

    public function listNetworkQualityWithHttpInfo($request)
    {
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
            $headerParams[$arr['confToken']] = $localVarParams['confToken'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListNetworkQualityRequest');
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
    public function listOngoingWebinars($request)
    {
        return $this->listOngoingWebinarsWithHttpInfo($request);
    }

    public function listOngoingWebinarsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sortType'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListOngoingWebinarsRequest');
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
    public function listOnlineConfAttendee($request)
    {
        return $this->listOnlineConfAttendeeWithHttpInfo($request);
    }

    public function listOnlineConfAttendeeWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListOnlineConfAttendeeRequest');
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
    public function listUpComingWebinars($request)
    {
        return $this->listUpComingWebinarsWithHttpInfo($request);
    }

    public function listUpComingWebinarsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sortType'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ListUpComingWebinarsRequest');
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
    public function live($request)
    {
        return $this->liveWithHttpInfo($request);
    }

    public function liveWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\LiveRequest');
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
    public function lockMeeting($request)
    {
        return $this->lockMeetingWithHttpInfo($request);
    }

    public function lockMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\LockMeetingRequest');
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
    public function lockView($request)
    {
        return $this->lockViewWithHttpInfo($request);
    }

    public function lockViewWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\LockViewRequest');
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
    public function moveToWaitingRoom($request)
    {
        return $this->moveToWaitingRoomWithHttpInfo($request);
    }

    public function moveToWaitingRoomWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\MoveToWaitingRoomRequest');
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
    public function muteMeeting($request)
    {
        return $this->muteMeetingWithHttpInfo($request);
    }

    public function muteMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\MuteMeetingRequest');
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
    public function muteParticipant($request)
    {
        return $this->muteParticipantWithHttpInfo($request);
    }

    public function muteParticipantWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\MuteParticipantRequest');
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
    public function prolongMeeting($request)
    {
        return $this->prolongMeetingWithHttpInfo($request);
    }

    public function prolongMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ProlongMeetingRequest');
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
    public function record($request)
    {
        return $this->recordWithHttpInfo($request);
    }

    public function recordWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\RecordRequest');
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
    public function renameParticipant($request)
    {
        return $this->renameParticipantWithHttpInfo($request);
    }

    public function renameParticipantWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\RenameParticipantRequest');
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
    public function resetActivecode($request)
    {
        return $this->resetActivecodeWithHttpInfo($request);
    }

    public function resetActivecodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetActivecodeRequest');
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
    public function resetAppKey($request)
    {
        return $this->resetAppKeyWithHttpInfo($request);
    }

    public function resetAppKeyWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetAppKeyRequest');
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
    public function resetPwd($request)
    {
        return $this->resetPwdWithHttpInfo($request);
    }

    public function resetPwdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetPwdRequest');
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
    public function resetPwdByAdmin($request)
    {
        return $this->resetPwdByAdminWithHttpInfo($request);
    }

    public function resetPwdByAdminWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetPwdByAdminRequest');
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
    public function resetVisionActiveCode($request)
    {
        return $this->resetVisionActiveCodeWithHttpInfo($request);
    }

    public function resetVisionActiveCodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResetVisionActiveCodeRequest');
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
    public function resumeSimultaneousInterpretation($request)
    {
        return $this->resumeSimultaneousInterpretationWithHttpInfo($request);
    }

    public function resumeSimultaneousInterpretationWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ResumeSimultaneousInterpretationRequest');
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
    public function rollcallParticipant($request)
    {
        return $this->rollcallParticipantWithHttpInfo($request);
    }

    public function rollcallParticipantWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\RollcallParticipantRequest');
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
    public function saveLayout($request)
    {
        return $this->saveLayoutWithHttpInfo($request);
    }

    public function saveLayoutWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SaveLayoutRequest');
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
    public function searchAttendanceRecordsOfHisMeeting($request)
    {
        return $this->searchAttendanceRecordsOfHisMeetingWithHttpInfo($request);
    }

    public function searchAttendanceRecordsOfHisMeetingWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchAttendanceRecordsOfHisMeetingRequest');
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
    public function searchCorp($request)
    {
        return $this->searchCorpWithHttpInfo($request);
    }

    public function searchCorpWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpRequest');
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
    public function searchCorpAdmins($request)
    {
        return $this->searchCorpAdminsWithHttpInfo($request);
    }

    public function searchCorpAdminsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpAdminsRequest');
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
    public function searchCorpDir($request)
    {
        return $this->searchCorpDirWithHttpInfo($request);
    }

    public function searchCorpDirWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $queryParams['deptCode'] = $localVarParams['deptCode'];
        }
        if ($localVarParams['querySubDept'] !== null) {
            $queryParams['querySubDept'] = $localVarParams['querySubDept'];
        }
        if ($localVarParams['searchScope'] !== null) {
            $queryParams['searchScope'] = $localVarParams['searchScope'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpDirRequest');
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
    public function searchCorpExternalDir($request)
    {
        return $this->searchCorpExternalDirWithHttpInfo($request);
    }

    public function searchCorpExternalDirWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['searchScope'] !== null) {
            $queryParams['searchScope'] = $localVarParams['searchScope'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpExternalDirRequest');
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
    public function searchCorpResources($request)
    {
        return $this->searchCorpResourcesWithHttpInfo($request);
    }

    public function searchCorpResourcesWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startExpireDate'] !== null) {
            $queryParams['startExpireDate'] = $localVarParams['startExpireDate'];
        }
        if ($localVarParams['endExpireDate'] !== null) {
            $queryParams['endExpireDate'] = $localVarParams['endExpireDate'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vmrMode'] !== null) {
            $queryParams['vmrMode'] = $localVarParams['vmrMode'];
        }
        if ($localVarParams['typeId'] !== null) {
            $queryParams['typeId'] = $localVarParams['typeId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['orderId'] = $localVarParams['orderId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpResourcesRequest');
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
    public function searchCorpVmr($request)
    {
        return $this->searchCorpVmrWithHttpInfo($request);
    }

    public function searchCorpVmrWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['vmrMode'] !== null) {
            $queryParams['vmrMode'] = $localVarParams['vmrMode'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCorpVmrRequest');
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
    public function searchCtlRecordsOfHisMeeting($request)
    {
        return $this->searchCtlRecordsOfHisMeetingWithHttpInfo($request);
    }

    public function searchCtlRecordsOfHisMeetingWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchCtlRecordsOfHisMeetingRequest');
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
    public function searchDepartmentByName($request)
    {
        return $this->searchDepartmentByNameWithHttpInfo($request);
    }

    public function searchDepartmentByNameWithHttpInfo($request)
    {
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
            $queryParams['deptName'] = $localVarParams['deptName'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchDepartmentByNameRequest');
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
    public function searchDevices($request)
    {
        return $this->searchDevicesWithHttpInfo($request);
    }

    public function searchDevicesWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['model'] !== null) {
            $queryParams['model'] = $localVarParams['model'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $queryParams['deptCode'] = $localVarParams['deptCode'];
        }
        if ($localVarParams['enableSubDept'] !== null) {
            $queryParams['enableSubDept'] = $localVarParams['enableSubDept'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchDevicesRequest');
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
    public function searchHisMeetings($request)
    {
        return $this->searchHisMeetingsWithHttpInfo($request);
    }

    public function searchHisMeetingsWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['queryAll'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['startDate'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['endDate'] = $localVarParams['endDate'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sortType'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchHisMeetingsRequest');
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
    public function searchMaterials($request)
    {
        return $this->searchMaterialsWithHttpInfo($request);
    }

    public function searchMaterialsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMaterialsRequest');
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
    public function searchMeetingFileList($request)
    {
        return $this->searchMeetingFileListWithHttpInfo($request);
    }

    public function searchMeetingFileListWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMeetingFileListRequest');
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
    public function searchMeetings($request)
    {
        return $this->searchMeetingsWithHttpInfo($request);
    }

    public function searchMeetingsWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['queryAll'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['queryConfMode'] !== null) {
            $queryParams['queryConfMode'] = $localVarParams['queryConfMode'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sortType'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMeetingsRequest');
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
    public function searchMemberVmr($request)
    {
        return $this->searchMemberVmrWithHttpInfo($request);
    }

    public function searchMemberVmrWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['specialVmr'] !== null) {
            $queryParams['specialVmr'] = $localVarParams['specialVmr'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchMemberVmrRequest');
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
    public function searchOnlineMeetings($request)
    {
        return $this->searchOnlineMeetingsWithHttpInfo($request);
    }

    public function searchOnlineMeetingsWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['queryAll'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchOnlineMeetingsRequest');
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
    public function searchPrograms($request)
    {
        return $this->searchProgramsWithHttpInfo($request);
    }

    public function searchProgramsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchProgramsRequest');
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
    public function searchPublications($request)
    {
        return $this->searchPublicationsWithHttpInfo($request);
    }

    public function searchPublicationsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchPublicationsRequest');
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
    public function searchRecordings($request)
    {
        return $this->searchRecordingsWithHttpInfo($request);
    }

    public function searchRecordingsWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['queryAll'] !== null) {
            $queryParams['queryAll'] = $localVarParams['queryAll'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['startDate'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['endDate'] = $localVarParams['endDate'];
        }
        if ($localVarParams['sortType'] !== null) {
            $queryParams['sortType'] = $localVarParams['sortType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchRecordingsRequest');
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
    public function searchResource($request)
    {
        return $this->searchResourceWithHttpInfo($request);
    }

    public function searchResourceWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startExpireDate'] !== null) {
            $queryParams['startExpireDate'] = $localVarParams['startExpireDate'];
        }
        if ($localVarParams['endExpireDate'] !== null) {
            $queryParams['endExpireDate'] = $localVarParams['endExpireDate'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['typeId'] !== null) {
            $queryParams['typeId'] = $localVarParams['typeId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchResourceRequest');
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
    public function searchResourceOpRecord($request)
    {
        return $this->searchResourceOpRecordWithHttpInfo($request);
    }

    public function searchResourceOpRecordWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['startExpireDate'] !== null) {
            $queryParams['startExpireDate'] = $localVarParams['startExpireDate'];
        }
        if ($localVarParams['endExpireDate'] !== null) {
            $queryParams['endExpireDate'] = $localVarParams['endExpireDate'];
        }
        if ($localVarParams['startOperateDate'] !== null) {
            $queryParams['startOperateDate'] = $localVarParams['startOperateDate'];
        }
        if ($localVarParams['endOperateDate'] !== null) {
            $queryParams['endOperateDate'] = $localVarParams['endOperateDate'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['typeId'] !== null) {
            $queryParams['typeId'] = $localVarParams['typeId'];
        }
        if ($localVarParams['operateType'] !== null) {
            $queryParams['operateType'] = $localVarParams['operateType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchResourceOpRecordRequest');
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
    public function searchUsers($request)
    {
        return $this->searchUsersWithHttpInfo($request);
    }

    public function searchUsersWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['sortField'] !== null) {
            $queryParams['sortField'] = $localVarParams['sortField'];
        }
        if ($localVarParams['isAsc'] !== null) {
            $queryParams['isAsc'] = $localVarParams['isAsc'];
        }
        if ($localVarParams['deptCode'] !== null) {
            $queryParams['deptCode'] = $localVarParams['deptCode'];
        }
        if ($localVarParams['enableSubDept'] !== null) {
            $queryParams['enableSubDept'] = $localVarParams['enableSubDept'];
        }
        if ($localVarParams['adminType'] !== null) {
            $queryParams['adminType'] = $localVarParams['adminType'];
        }
        if ($localVarParams['enableRoom'] !== null) {
            $queryParams['enableRoom'] = $localVarParams['enableRoom'];
        }
        if ($localVarParams['userType'] !== null) {
            $queryParams['userType'] = $localVarParams['userType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['containsUnActive'] !== null) {
            $queryParams['containsUnActive'] = $localVarParams['containsUnActive'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchUsersRequest');
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
    public function searchVisionActiveCode($request)
    {
        return $this->searchVisionActiveCodeWithHttpInfo($request);
    }

    public function searchVisionActiveCodeWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['devType'] !== null) {
            $queryParams['devType'] = $localVarParams['devType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchVisionActiveCodeRequest');
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
    public function sendSlideVerifyCode($request)
    {
        return $this->sendSlideVerifyCodeWithHttpInfo($request);
    }

    public function sendSlideVerifyCodeWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SendSlideVerifyCodeRequest');
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
    public function sendVeriCodeForChangePwd($request)
    {
        return $this->sendVeriCodeForChangePwdWithHttpInfo($request);
    }

    public function sendVeriCodeForChangePwdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SendVeriCodeForChangePwdRequest');
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
    public function sendVeriCodeForUpdateUserInfo($request)
    {
        return $this->sendVeriCodeForUpdateUserInfoWithHttpInfo($request);
    }

    public function sendVeriCodeForUpdateUserInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SendVeriCodeForUpdateUserInfoRequest');
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
    public function setAttendeeLanChannel($request)
    {
        return $this->setAttendeeLanChannelWithHttpInfo($request);
    }

    public function setAttendeeLanChannelWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetAttendeeLanChannelRequest');
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
    public function setCohost($request)
    {
        return $this->setCohostWithHttpInfo($request);
    }

    public function setCohostWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetCohostRequest');
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
    public function setCustomMultiPicture($request)
    {
        return $this->setCustomMultiPictureWithHttpInfo($request);
    }

    public function setCustomMultiPictureWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetCustomMultiPictureRequest');
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
    public function setHostView($request)
    {
        return $this->setHostViewWithHttpInfo($request);
    }

    public function setHostViewWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetHostViewRequest');
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
    public function setInterpreterGroup($request)
    {
        return $this->setInterpreterGroupWithHttpInfo($request);
    }

    public function setInterpreterGroupWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetInterpreterGroupRequest');
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
    public function setMultiPicture($request)
    {
        return $this->setMultiPictureWithHttpInfo($request);
    }

    public function setMultiPictureWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetMultiPictureRequest');
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
    public function setParticipantView($request)
    {
        return $this->setParticipantViewWithHttpInfo($request);
    }

    public function setParticipantViewWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetParticipantViewRequest');
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
    public function setProfileImage($request)
    {
        return $this->setProfileImageWithHttpInfo($request);
    }

    public function setProfileImageWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetProfileImageRequest');
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
    public function setRole($request)
    {
        return $this->setRoleWithHttpInfo($request);
    }

    public function setRoleWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetRoleRequest');
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
    public function setSsoConfig($request)
    {
        return $this->setSsoConfigWithHttpInfo($request);
    }

    public function setSsoConfigWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetSsoConfigRequest');
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
    public function setUserProfileImage($request)
    {
        return $this->setUserProfileImageWithHttpInfo($request);
    }

    public function setUserProfileImageWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetUserProfileImageRequest');
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
    public function setWebHookConfig($request)
    {
        return $this->setWebHookConfigWithHttpInfo($request);
    }

    public function setWebHookConfigWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetWebHookConfigRequest');
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
    public function showConfOrg($request)
    {
        return $this->showConfOrgWithHttpInfo($request);
    }

    public function showConfOrgWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowConfOrgRequest');
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
    public function showCorp($request)
    {
        return $this->showCorpWithHttpInfo($request);
    }

    public function showCorpWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpRequest');
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
    public function showCorpAdmin($request)
    {
        return $this->showCorpAdminWithHttpInfo($request);
    }

    public function showCorpAdminWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpAdminRequest');
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
    public function showCorpBasicInfo($request)
    {
        return $this->showCorpBasicInfoWithHttpInfo($request);
    }

    public function showCorpBasicInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpBasicInfoRequest');
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
    public function showCorpResource($request)
    {
        return $this->showCorpResourceWithHttpInfo($request);
    }

    public function showCorpResourceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowCorpResourceRequest');
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
    public function showDepartment($request)
    {
        return $this->showDepartmentWithHttpInfo($request);
    }

    public function showDepartmentWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDepartmentRequest');
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
    public function showDeptAndChildDept($request)
    {
        return $this->showDeptAndChildDeptWithHttpInfo($request);
    }

    public function showDeptAndChildDeptWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeptAndChildDeptRequest');
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
    public function showDeviceDetail($request)
    {
        return $this->showDeviceDetailWithHttpInfo($request);
    }

    public function showDeviceDetailWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceDetailRequest');
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
    public function showDeviceStatus($request)
    {
        return $this->showDeviceStatusWithHttpInfo($request);
    }

    public function showDeviceStatusWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceStatusRequest');
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
    public function showDeviceTypes($request)
    {
        return $this->showDeviceTypesWithHttpInfo($request);
    }

    public function showDeviceTypesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowDeviceTypesRequest');
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
    public function showHisMeetingDetail($request)
    {
        return $this->showHisMeetingDetailWithHttpInfo($request);
    }

    public function showHisMeetingDetailWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xType'] !== null) {
            $headerParams[$arr['xType']] = $localVarParams['xType'];
        }
        if ($localVarParams['xQueryType'] !== null) {
            $headerParams[$arr['xQueryType']] = $localVarParams['xQueryType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowHisMeetingDetailRequest');
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
    public function showLayout($request)
    {
        return $this->showLayoutWithHttpInfo($request);
    }

    public function showLayoutWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowLayoutRequest');
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
    public function showMeetingDetail($request)
    {
        return $this->showMeetingDetailWithHttpInfo($request);
    }

    public function showMeetingDetailWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xType'] !== null) {
            $headerParams[$arr['xType']] = $localVarParams['xType'];
        }
        if ($localVarParams['xQueryType'] !== null) {
            $headerParams[$arr['xQueryType']] = $localVarParams['xQueryType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingDetailRequest');
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
    public function showMeetingFile($request)
    {
        return $this->showMeetingFileWithHttpInfo($request);
    }

    public function showMeetingFileWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingFileRequest');
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
    public function showMeetingFileList($request)
    {
        return $this->showMeetingFileListWithHttpInfo($request);
    }

    public function showMeetingFileListWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMeetingFileListRequest');
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
    public function showMyInfo($request)
    {
        return $this->showMyInfoWithHttpInfo($request);
    }

    public function showMyInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowMyInfoRequest');
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
    public function showOnlineMeetingDetail($request)
    {
        return $this->showOnlineMeetingDetailWithHttpInfo($request);
    }

    public function showOnlineMeetingDetailWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xType'] !== null) {
            $headerParams[$arr['xType']] = $localVarParams['xType'];
        }
        if ($localVarParams['xQueryType'] !== null) {
            $headerParams[$arr['xQueryType']] = $localVarParams['xQueryType'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowOnlineMeetingDetailRequest');
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
    public function showOrgRes($request)
    {
        return $this->showOrgResWithHttpInfo($request);
    }

    public function showOrgResWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowOrgResRequest');
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
    public function showProgram($request)
    {
        return $this->showProgramWithHttpInfo($request);
    }

    public function showProgramWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowProgramRequest');
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
    public function showPublication($request)
    {
        return $this->showPublicationWithHttpInfo($request);
    }

    public function showPublicationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowPublicationRequest');
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
    public function showRealTimeInfoOfMeeting($request)
    {
        return $this->showRealTimeInfoOfMeetingWithHttpInfo($request);
    }

    public function showRealTimeInfoOfMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRealTimeInfoOfMeetingRequest');
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
    public function showRecordInfo($request)
    {
        return $this->showRecordInfoWithHttpInfo($request);
    }

    public function showRecordInfoWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordInfoRequest');
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
    public function showRecordingDetail($request)
    {
        return $this->showRecordingDetailWithHttpInfo($request);
    }

    public function showRecordingDetailWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordingDetailRequest');
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
    public function showRecordingFileDownloadUrls($request)
    {
        return $this->showRecordingFileDownloadUrlsWithHttpInfo($request);
    }

    public function showRecordingFileDownloadUrlsWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRecordingFileDownloadUrlsRequest');
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
    public function showRegionInfoOfMeeting($request)
    {
        return $this->showRegionInfoOfMeetingWithHttpInfo($request);
    }

    public function showRegionInfoOfMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRegionInfoOfMeetingRequest');
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
    public function showRoomSetting($request)
    {
        return $this->showRoomSettingWithHttpInfo($request);
    }

    public function showRoomSettingWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowRoomSettingRequest');
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
    public function showSpRes($request)
    {
        return $this->showSpResWithHttpInfo($request);
    }

    public function showSpResWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSpResRequest');
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
    public function showSpResource($request)
    {
        return $this->showSpResourceWithHttpInfo($request);
    }

    public function showSpResourceWithHttpInfo($request)
    {
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
            $queryParams['queryGroup'] = $localVarParams['queryGroup'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSpResourceRequest');
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
    public function showSsoConfig($request)
    {
        return $this->showSsoConfigWithHttpInfo($request);
    }

    public function showSsoConfigWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowSsoConfigRequest');
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
    public function showUserDetail($request)
    {
        return $this->showUserDetailWithHttpInfo($request);
    }

    public function showUserDetailWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowUserDetailRequest');
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
    public function showWebHookConfig($request)
    {
        return $this->showWebHookConfigWithHttpInfo($request);
    }

    public function showWebHookConfigWithHttpInfo($request)
    {
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
            $queryParams['corpId'] = $localVarParams['corpId'];
        }
        if ($localVarParams['spId'] !== null) {
            $queryParams['spId'] = $localVarParams['spId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowWebHookConfigRequest');
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
    public function showWebinar($request)
    {
        return $this->showWebinarWithHttpInfo($request);
    }

    public function showWebinarWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowWebinarRequest');
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
    public function startMeeting($request)
    {
        return $this->startMeetingWithHttpInfo($request);
    }

    public function startMeetingWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\StartMeetingRequest');
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
    public function stopMeeting($request)
    {
        return $this->stopMeetingWithHttpInfo($request);
    }

    public function stopMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\StopMeetingRequest');
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
    public function switchMode($request)
    {
        return $this->switchModeWithHttpInfo($request);
    }

    public function switchModeWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SwitchModeRequest');
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
    public function updateAppId($request)
    {
        return $this->updateAppIdWithHttpInfo($request);
    }

    public function updateAppIdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateAppIdRequest');
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
    public function updateContact($request)
    {
        return $this->updateContactWithHttpInfo($request);
    }

    public function updateContactWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateContactRequest');
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
    public function updateCorp($request)
    {
        return $this->updateCorpWithHttpInfo($request);
    }

    public function updateCorpWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateCorpRequest');
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
    public function updateCorpBasicInfo($request)
    {
        return $this->updateCorpBasicInfoWithHttpInfo($request);
    }

    public function updateCorpBasicInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateCorpBasicInfoRequest');
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
    public function updateDepartment($request)
    {
        return $this->updateDepartmentWithHttpInfo($request);
    }

    public function updateDepartmentWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateDepartmentRequest');
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
    public function updateDevice($request)
    {
        return $this->updateDeviceWithHttpInfo($request);
    }

    public function updateDeviceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateDeviceRequest');
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
    public function updateMaterial($request)
    {
        return $this->updateMaterialWithHttpInfo($request);
    }

    public function updateMaterialWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMaterialRequest');
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
    public function updateMeeting($request)
    {
        return $this->updateMeetingWithHttpInfo($request);
    }

    public function updateMeetingWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['userUuid'] !== null) {
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMeetingRequest');
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
    public function updateMemberVmr($request)
    {
        return $this->updateMemberVmrWithHttpInfo($request);
    }

    public function updateMemberVmrWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMemberVmrRequest');
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
    public function updateMyInfo($request)
    {
        return $this->updateMyInfoWithHttpInfo($request);
    }

    public function updateMyInfoWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateMyInfoRequest');
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
    public function updateProgram($request)
    {
        return $this->updateProgramWithHttpInfo($request);
    }

    public function updateProgramWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateProgramRequest');
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
    public function updatePublication($request)
    {
        return $this->updatePublicationWithHttpInfo($request);
    }

    public function updatePublicationWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdatePublicationRequest');
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
    public function updatePwd($request)
    {
        return $this->updatePwdWithHttpInfo($request);
    }

    public function updatePwdWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdatePwdRequest');
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
    public function updateRecurringMeeting($request)
    {
        return $this->updateRecurringMeetingWithHttpInfo($request);
    }

    public function updateRecurringMeetingWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRecurringMeetingRequest');
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
    public function updateRecurringSubMeeting($request)
    {
        return $this->updateRecurringSubMeetingWithHttpInfo($request);
    }

    public function updateRecurringSubMeetingWithHttpInfo($request)
    {
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
            $queryParams['userUUID'] = $localVarParams['userUuid'];
        }
        if ($localVarParams['conferenceId'] !== null) {
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xAuthorizationType'] !== null) {
            $headerParams[$arr['xAuthorizationType']] = $localVarParams['xAuthorizationType'];
        }
        if ($localVarParams['xSiteId'] !== null) {
            $headerParams[$arr['xSiteId']] = $localVarParams['xSiteId'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRecurringSubMeetingRequest');
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
    public function updateResource($request)
    {
        return $this->updateResourceWithHttpInfo($request);
    }

    public function updateResourceWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateResourceRequest');
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
    public function updateRoomSetting($request)
    {
        return $this->updateRoomSettingWithHttpInfo($request);
    }

    public function updateRoomSettingWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateRoomSettingRequest');
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
    public function updateStartedConfConfig($request)
    {
        return $this->updateStartedConfConfigWithHttpInfo($request);
    }

    public function updateStartedConfConfigWithHttpInfo($request)
    {
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
            $queryParams['conferenceID'] = $localVarParams['conferenceId'];
        }
        if ($localVarParams['xConferenceAuthorization'] !== null) {
            $headerParams[$arr['xConferenceAuthorization']] = $localVarParams['xConferenceAuthorization'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateStartedConfConfigRequest');
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
    public function updateToken($request)
    {
        return $this->updateTokenWithHttpInfo($request);
    }

    public function updateTokenWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateTokenRequest');
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
    public function updateUser($request)
    {
        return $this->updateUserWithHttpInfo($request);
    }

    public function updateUserWithHttpInfo($request)
    {
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
            $queryParams['accountType'] = $localVarParams['accountType'];
        }
        if ($localVarParams['xRequestId'] !== null) {
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateUserRequest');
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
    public function updateWebHookConfigStatus($request)
    {
        return $this->updateWebHookConfigStatusWithHttpInfo($request);
    }

    public function updateWebHookConfigStatusWithHttpInfo($request)
    {
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateWebHookConfigStatusRequest');
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
    public function updateWebinar($request)
    {
        return $this->updateWebinarWithHttpInfo($request);
    }

    public function updateWebinarWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UpdateWebinarRequest');
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
    public function uploadFile($request)
    {
        return $this->uploadFileWithHttpInfo($request);
    }

    public function uploadFileWithHttpInfo($request)
    {
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
            $headerParams[$arr['xRequestId']] = $localVarParams['xRequestId'];
        }
        if ($localVarParams['acceptLanguage'] !== null) {
            $headerParams[$arr['acceptLanguage']] = $localVarParams['acceptLanguage'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\UploadFileRequest');
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
    public function searchQosHistoryMeetings($request)
    {
        return $this->searchQosHistoryMeetingsWithHttpInfo($request);
    }

    public function searchQosHistoryMeetingsWithHttpInfo($request)
    {
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
            $queryParams['startDate'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['endDate'] = $localVarParams['endDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosHistoryMeetingsRequest');
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
    public function searchQosOnlineMeetings($request)
    {
        return $this->searchQosOnlineMeetingsWithHttpInfo($request);
    }

    public function searchQosOnlineMeetingsWithHttpInfo($request)
    {
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
            $queryParams['searchKey'] = $localVarParams['searchKey'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosOnlineMeetingsRequest');
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
    public function searchQosParticipantDetail($request)
    {
        return $this->searchQosParticipantDetailWithHttpInfo($request);
    }

    public function searchQosParticipantDetailWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['confType'] !== null) {
            $queryParams['confType'] = $localVarParams['confType'];
        }
        if ($localVarParams['participantId'] !== null) {
            $queryParams['participantID'] = $localVarParams['participantId'];
        }
        if ($localVarParams['qosType'] !== null) {
            $queryParams['qosType'] = $localVarParams['qosType'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosParticipantDetailRequest');
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
    public function searchQosParticipants($request)
    {
        return $this->searchQosParticipantsWithHttpInfo($request);
    }

    public function searchQosParticipantsWithHttpInfo($request)
    {
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
            $queryParams['confUUID'] = $localVarParams['confUuid'];
        }
        if ($localVarParams['confType'] !== null) {
            $queryParams['confType'] = $localVarParams['confType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['searchKey'] !== null) {
            $queryParams['searchKey'] = $localVarParams['searchKey'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchQosParticipantsRequest');
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
    public function setQosThreshold($request)
    {
        return $this->setQosThresholdWithHttpInfo($request);
    }

    public function setQosThresholdWithHttpInfo($request)
    {
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
            $queryParams['thresholdType'] = $localVarParams['thresholdType'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SetQosThresholdRequest');
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
    public function showQosThreshold($request)
    {
        return $this->showQosThresholdWithHttpInfo($request);
    }

    public function showQosThresholdWithHttpInfo($request)
    {
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
            $queryParams['thresholdType'] = $localVarParams['thresholdType'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\ShowQosThresholdRequest');
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
    public function searchStatisticConferenceInfo($request)
    {
        return $this->searchStatisticConferenceInfoWithHttpInfo($request);
    }

    public function searchStatisticConferenceInfoWithHttpInfo($request)
    {
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
            $queryParams['timeUnit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['startTime'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['endTime'] = $localVarParams['endTime'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticConferenceInfoRequest');
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
    public function searchStatisticConferenceParticipant($request)
    {
        return $this->searchStatisticConferenceParticipantWithHttpInfo($request);
    }

    public function searchStatisticConferenceParticipantWithHttpInfo($request)
    {
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
            $queryParams['timeUnit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['startTime'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['endTime'] = $localVarParams['endTime'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticConferenceParticipantRequest');
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
    public function searchStatisticResourceInfo($request)
    {
        return $this->searchStatisticResourceInfoWithHttpInfo($request);
    }

    public function searchStatisticResourceInfoWithHttpInfo($request)
    {
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
            $queryParams['timeUnit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['startTime'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['endTime'] = $localVarParams['endTime'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticResourceInfoRequest');
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
    public function searchStatisticUserInfo($request)
    {
        return $this->searchStatisticUserInfoWithHttpInfo($request);
    }

    public function searchStatisticUserInfoWithHttpInfo($request)
    {
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
            $queryParams['timeUnit'] = $localVarParams['timeUnit'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['startTime'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['endTime'] = $localVarParams['endTime'];
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
            $requestType='\HuaweiCloud\SDK\Meeting\V1\Model\SearchStatisticUserInfoRequest');
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