<?php

namespace HuaweiCloud\SDK\Rgc\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class RgcClient extends Client
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
        $client = new ClientBuilder(new RgcClient());
        return $client;
    }


    /**
     * 检测八大场景治理成熟度
     *
     * 检测八大场景治理成熟度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBestPracticeDetect($request)
    {
        return $this->createBestPracticeDetectWithHttpInfo($request);
    }

    public function createBestPracticeDetectWithHttpInfo($request)
    {
        $resourcePath = '/v1/best-practice/detect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateBestPracticeDetectResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateBestPracticeDetectRequest');
    }

    /**
     * 查询治理成熟度的账号详情
     *
     * 查询治理成熟度的账号详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBestPracticeAccountInfo($request)
    {
        return $this->showBestPracticeAccountInfoWithHttpInfo($request);
    }

    public function showBestPracticeAccountInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/best-practice/account-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeAccountInfoResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeAccountInfoRequest');
    }

    /**
     * 查询最近一次成功的治理成熟度检测的详情
     *
     * 查询最近一次成功的治理成熟度检测的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBestPracticeDetails($request)
    {
        return $this->showBestPracticeDetailsWithHttpInfo($request);
    }

    public function showBestPracticeDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1/best-practice/detection-details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeDetailsRequest');
    }

    /**
     * 查询最近一次成功的治理成熟度检测的总览
     *
     * 查询最近一次成功的治理成熟度检测的总览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBestPracticeOverview($request)
    {
        return $this->showBestPracticeOverviewWithHttpInfo($request);
    }

    public function showBestPracticeOverviewWithHttpInfo($request)
    {
        $resourcePath = '/v1/best-practice/detection-overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeOverviewResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeOverviewRequest');
    }

    /**
     * 查询最近一次的治理成熟度检测的状态
     *
     * 查询最近一次的治理成熟度检测的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBestPracticeStatus($request)
    {
        return $this->showBestPracticeStatusWithHttpInfo($request);
    }

    public function showBestPracticeStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/best-practice/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeStatusResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeStatusRequest');
    }

    /**
     * 关闭控制策略
     *
     * 关闭组织下的某个单元的某个控制策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableControl($request)
    {
        return $this->disableControlWithHttpInfo($request);
    }

    public function disableControlWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/controls/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\DisableControlResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DisableControlRequest');
    }

    /**
     * 开启控制策略
     *
     * 给组织下的某个单元开启某个控制策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableControl($request)
    {
        return $this->enableControlWithHttpInfo($request);
    }

    public function enableControlWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/controls/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\EnableControlResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\EnableControlRequest');
    }

    /**
     * 查询纳管账号的Config规则合规性信息
     *
     * 查询纳管账号的Config规则合规性信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConfigRuleCompliances($request)
    {
        return $this->listConfigRuleCompliancesWithHttpInfo($request);
    }

    public function listConfigRuleCompliancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-accounts/{managed_account_id}/config-rule-compliances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListConfigRuleCompliancesResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListConfigRuleCompliancesRequest');
    }

    /**
     * 列出不合规信息
     *
     * 列出组织里所有不合规的资源信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listControlViolations($request)
    {
        return $this->listControlViolationsWithHttpInfo($request);
    }

    public function listControlViolationsWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/control-violations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $queryParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlViolationsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlViolationsRequest');
    }

    /**
     * 列出控制策略
     *
     * 列出RGC服务里所有的预置控制策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listControls($request)
    {
        return $this->listControlsWithHttpInfo($request);
    }

    public function listControlsWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/controls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsRequest');
    }

    /**
     * 列出纳管账号下开启的控制策略
     *
     * 列出组织里某个纳管账号开启的所有控制策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listControlsForAccount($request)
    {
        return $this->listControlsForAccountWithHttpInfo($request);
    }

    public function listControlsForAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-accounts/{managed_account_id}/controls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsForAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsForAccountRequest');
    }

    /**
     * 列出注册OU下开启的控制策略
     *
     * 列出组织里某个注册OU开启的所有控制策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listControlsForOrganizationalUnit($request)
    {
        return $this->listControlsForOrganizationalUnitWithHttpInfo($request);
    }

    public function listControlsForOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-organizational-units/{managed_organizational_unit_id}/controls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsForOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsForOrganizationalUnitRequest');
    }

    /**
     * 列出漂移信息
     *
     * 列出Landing Zone的所有漂移详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDriftDetails($request)
    {
        return $this->listDriftDetailsWithHttpInfo($request);
    }

    public function listDriftDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/drift-details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListDriftDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListDriftDetailsRequest');
    }

    /**
     * 列出开启的控制策略
     *
     * 列出组织里开启的所有控制策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnabledControls($request)
    {
        return $this->listEnabledControlsWithHttpInfo($request);
    }

    public function listEnabledControlsWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/enabled-controls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListEnabledControlsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListEnabledControlsRequest');
    }

    /**
     * 查询纳管账号的外部Config规则合规性信息
     *
     * 查询纳管账号的外部Config规则合规性信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExternalConfigRuleCompliances($request)
    {
        return $this->listExternalConfigRuleCompliancesWithHttpInfo($request);
    }

    public function listExternalConfigRuleCompliancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-accounts/{managed_account_id}/external-config-rule-compliances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListExternalConfigRuleCompliancesResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListExternalConfigRuleCompliancesRequest');
    }

    /**
     * 查询纳管账号的合规状态
     *
     * 查询组织里某个纳管账号的资源合规状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showComplianceStatusForAccount($request)
    {
        return $this->showComplianceStatusForAccountWithHttpInfo($request);
    }

    public function showComplianceStatusForAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-accounts/{managed_account_id}/compliance-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['controlId'] !== null) {
            $queryParams['control_id'] = $localVarParams['controlId'];
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowComplianceStatusForAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowComplianceStatusForAccountRequest');
    }

    /**
     * 查询注册OU的合规状态
     *
     * 查询组织里某个注册OU下所有纳管账号的资源合规状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showComplianceStatusForOrganizationalUnit($request)
    {
        return $this->showComplianceStatusForOrganizationalUnitWithHttpInfo($request);
    }

    public function showComplianceStatusForOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-organizational-units/{managed_organizational_unit_id}/compliance-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['controlId'] !== null) {
            $queryParams['control_id'] = $localVarParams['controlId'];
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowComplianceStatusForOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowComplianceStatusForOrganizationalUnitRequest');
    }

    /**
     * 查询控制策略详细信息
     *
     * 查询单个预置的控制策略详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showControl($request)
    {
        return $this->showControlWithHttpInfo($request);
    }

    public function showControlWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/controls/{control_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['controlId'] !== null) {
            $pathParams['control_id'] = $localVarParams['controlId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlRequest');
    }

    /**
     * 查询控制策略操作状态
     *
     * 根据操作ID查询返回指定ID的操作状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showControlOperate($request)
    {
        return $this->showControlOperateWithHttpInfo($request);
    }

    public function showControlOperateWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/operation-control-status/{operation_control_status_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['operationControlStatusId'] !== null) {
            $pathParams['operation_control_status_id'] = $localVarParams['operationControlStatusId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlOperateResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlOperateRequest');
    }

    /**
     * 查询纳管账号开启的控制策略
     *
     * 查询组织里某个纳管账号下开启的某个控制策略的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showControlsForAccount($request)
    {
        return $this->showControlsForAccountWithHttpInfo($request);
    }

    public function showControlsForAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-accounts/{managed_account_id}/controls/{control_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
        }
        if ($localVarParams['controlId'] !== null) {
            $pathParams['control_id'] = $localVarParams['controlId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlsForAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlsForAccountRequest');
    }

    /**
     * 查询注册OU开启的控制策略
     *
     * 查询组织里某个注册OU下开启的某个控制策略的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showControlsForOrganizationalUnit($request)
    {
        return $this->showControlsForOrganizationalUnitWithHttpInfo($request);
    }

    public function showControlsForOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/governance/managed-organizational-units/{managed_organizational_unit_id}/controls/{control_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
        }
        if ($localVarParams['controlId'] !== null) {
            $pathParams['control_id'] = $localVarParams['controlId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlsForOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlsForOrganizationalUnitRequest');
    }

    /**
     * 设置Landing Zone前检查
     *
     * 在设置Landing Zone之前，检查当前区域是否可以设置Landing Zone。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkLaunch($request)
    {
        return $this->checkLaunchWithHttpInfo($request);
    }

    public function checkLaunchWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/pre-launch-check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\CheckLaunchResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CheckLaunchRequest');
    }

    /**
     * 删除Landing Zone
     *
     * 删除Landing Zone。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLandingZone($request)
    {
        return $this->deleteLandingZoneWithHttpInfo($request);
    }

    public function deleteLandingZoneWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteLandingZoneResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteLandingZoneRequest');
    }

    /**
     * 设置Landing Zone
     *
     * 在当前区域创建或者更新Landing Zone。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setupLandingZone($request)
    {
        return $this->setupLandingZoneWithHttpInfo($request);
    }

    public function setupLandingZoneWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/setup';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\SetupLandingZoneResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\SetupLandingZoneRequest');
    }

    /**
     * 查询Landing Zone可更新状态
     *
     * 查询Landing Zone当前是否需要升级更新。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAvailableUpdates($request)
    {
        return $this->showAvailableUpdatesWithHttpInfo($request);
    }

    public function showAvailableUpdatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/available-updates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowAvailableUpdatesResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowAvailableUpdatesRequest');
    }

    /**
     * 查询主区域
     *
     * 查询Landing Zone的主区域。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHomeRegion($request)
    {
        return $this->showHomeRegionWithHttpInfo($request);
    }

    public function showHomeRegionWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/home-region';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowHomeRegionResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowHomeRegionRequest');
    }

    /**
     * 查询Landing Zone的配置
     *
     * 查询当前客户的Landing Zone的所有配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLandingZoneConfiguration($request)
    {
        return $this->showLandingZoneConfigurationWithHttpInfo($request);
    }

    public function showLandingZoneConfigurationWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneConfigurationResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneConfigurationRequest');
    }

    /**
     * 查询当前客户的Identity Center用户信息
     *
     * 查询当前客户的Identity Center用户信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLandingZoneIdentityCenter($request)
    {
        return $this->showLandingZoneIdentityCenterWithHttpInfo($request);
    }

    public function showLandingZoneIdentityCenterWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/identity-center';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneIdentityCenterResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneIdentityCenterRequest');
    }

    /**
     * 查询Landing Zone设置状态
     *
     * 查询Landing Zone的设置状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLandingZoneStatus($request)
    {
        return $this->showLandingZoneStatusWithHttpInfo($request);
    }

    public function showLandingZoneStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/landing-zone/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneStatusResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneStatusRequest');
    }

    /**
     * 创建账号
     *
     * 在组织里的某个注册OU下创建账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccount($request)
    {
        return $this->createAccountWithHttpInfo($request);
    }

    public function createAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateAccountRequest');
    }

    /**
     * 创建OU
     *
     * 通过RGC服务在组织下创建OU，创建后的OU在RGC中状态为已注册。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createManagedOrganizationalUnit($request)
    {
        return $this->createManagedOrganizationalUnitWithHttpInfo($request);
    }

    public function createManagedOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-organizational-units';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateManagedOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateManagedOrganizationalUnitRequest');
    }

    /**
     * 删除注册OU
     *
     * 在组织里删除已注册OU。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteManagedOrganizationalUnits($request)
    {
        return $this->deleteManagedOrganizationalUnitsWithHttpInfo($request);
    }

    public function deleteManagedOrganizationalUnitsWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-organizational-units/{managed_organizational_unit_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteManagedOrganizationalUnitsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteManagedOrganizationalUnitsRequest');
    }

    /**
     * 取消注册OU
     *
     * 将组织里的某个OU从RGC服务里取消注册。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deregisterOrganizationalUnit($request)
    {
        return $this->deregisterOrganizationalUnitWithHttpInfo($request);
    }

    public function deregisterOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-organizational-units/{managed_organizational_unit_id}/de-register';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\DeregisterOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeregisterOrganizationalUnitRequest');
    }

    /**
     * 纳管账号
     *
     * 将组织里的某个账号纳管到RGC服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enrollAccount($request)
    {
        return $this->enrollAccountWithHttpInfo($request);
    }

    public function enrollAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/accounts/{managed_account_id}/enroll';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\EnrollAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\EnrollAccountRequest');
    }

    /**
     * 列举控制策略生效的纳管账号信息
     *
     * 列举控制策略生效的纳管账号信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedAccounts($request)
    {
        return $this->listManagedAccountsWithHttpInfo($request);
    }

    public function listManagedAccountsWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['controlId'] !== null) {
            $queryParams['control_id'] = $localVarParams['controlId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedAccountsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedAccountsRequest');
    }

    /**
     * 列出注册OU下的纳管账号信息
     *
     * 列出组织里某个注册OU下的所有纳管账号信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedAccountsForParent($request)
    {
        return $this->listManagedAccountsForParentWithHttpInfo($request);
    }

    public function listManagedAccountsForParentWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-organizational-units/{managed_organizational_unit_id}/managed-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedAccountsForParentResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedAccountsForParentRequest');
    }

    /**
     * 列举控制策略生效的注册OU信息
     *
     * 列举控制策略生效的注册OU信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listManagedOrganizationalUnits($request)
    {
        return $this->listManagedOrganizationalUnitsWithHttpInfo($request);
    }

    public function listManagedOrganizationalUnitsWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-organizational-units';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['controlId'] !== null) {
            $queryParams['control_id'] = $localVarParams['controlId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedOrganizationalUnitsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedOrganizationalUnitsRequest');
    }

    /**
     * 查询已注册OU和纳管账号操作过程信息列表
     *
     * 查询在RGC服务里已注册OU和纳管账号操作的过程信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOperation($request)
    {
        return $this->listOperationWithHttpInfo($request);
    }

    public function listOperationWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $queryParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListOperationResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListOperationRequest');
    }

    /**
     * 重新注册OU
     *
     * 重新注册组织里的某个OU到RGC服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reRegisterOrganizationalUnit($request)
    {
        return $this->reRegisterOrganizationalUnitWithHttpInfo($request);
    }

    public function reRegisterOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/organizational-units/{organizational_unit_id}/re-register';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $pathParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ReRegisterOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ReRegisterOrganizationalUnitRequest');
    }

    /**
     * 注册OU
     *
     * 将组织里的某个OU注册到RGC服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerOrganizationalUnit($request)
    {
        return $this->registerOrganizationalUnitWithHttpInfo($request);
    }

    public function registerOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/organizational-units/{organizational_unit_id}/register';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $pathParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\RegisterOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\RegisterOrganizationalUnitRequest');
    }

    /**
     * 查询纳管账号信息
     *
     * 查询组织里某个纳管账号信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showManagedAccount($request)
    {
        return $this->showManagedAccountWithHttpInfo($request);
    }

    public function showManagedAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-accounts/{managed_account_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedAccountRequest');
    }

    /**
     * 查询纳管账号的模板信息
     *
     * 查询组织里某个纳管账号的模板信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showManagedAccountTemplate($request)
    {
        return $this->showManagedAccountTemplateWithHttpInfo($request);
    }

    public function showManagedAccountTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-accounts/{managed_account_id}/blueprint';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedAccountTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedAccountTemplateRequest');
    }

    /**
     * 列出核心纳管账号
     *
     * 列出组织里的所有核心纳管账号信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showManagedCoreAccount($request)
    {
        return $this->showManagedCoreAccountWithHttpInfo($request);
    }

    public function showManagedCoreAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-core-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedCoreAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedCoreAccountRequest');
    }

    /**
     * 查询已注册OU信息
     *
     * 查询在RGC服务里的注册OU信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showManagedOrganizationalUnit($request)
    {
        return $this->showManagedOrganizationalUnitWithHttpInfo($request);
    }

    public function showManagedOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-organizational-units/{managed_organizational_unit_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedOrganizationalUnitId'] !== null) {
            $pathParams['managed_organizational_unit_id'] = $localVarParams['managedOrganizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedOrganizationalUnitRequest');
    }

    /**
     * 查询注册过程信息
     *
     * 查询在RGC服务里注册/取消注册的过程信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOperation($request)
    {
        return $this->showOperationWithHttpInfo($request);
    }

    public function showOperationWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/{operation_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['operationId'] !== null) {
            $pathParams['operation_id'] = $localVarParams['operationId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowOperationResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowOperationRequest');
    }

    /**
     * 取消纳管账号
     *
     * 将组织里的某个账号从RGC服务里取消纳管。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unEnrollAccount($request)
    {
        return $this->unEnrollAccountWithHttpInfo($request);
    }

    public function unEnrollAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-accounts/{managed_account_id}/un-enroll';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\UnEnrollAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\UnEnrollAccountRequest');
    }

    /**
     * 更新纳管账号
     *
     * 更新组织里某个已在RGC服务的纳管账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateManagedAccount($request)
    {
        return $this->updateManagedAccountWithHttpInfo($request);
    }

    public function updateManagedAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/managed-organization/managed-accounts/{managed_account_id}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['managedAccountId'] !== null) {
            $pathParams['managed_account_id'] = $localVarParams['managedAccountId'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\UpdateManagedAccountResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\UpdateManagedAccountRequest');
    }

    /**
     * 创建模板
     *
     * 创建RFS模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTemplate($request)
    {
        return $this->createTemplateWithHttpInfo($request);
    }

    public function createTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/rgc/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateTemplateRequest');
    }

    /**
     * 删除模板
     *
     * 删除RFS模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplate($request)
    {
        return $this->deleteTemplateWithHttpInfo($request);
    }

    public function deleteTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/rgc/templates/{template_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateName'] !== null) {
            $pathParams['template_name'] = $localVarParams['templateName'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteTemplateRequest');
    }

    /**
     * 查询预置模板列表
     *
     * 查询预置模板列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPredefinedTemplates($request)
    {
        return $this->listPredefinedTemplatesWithHttpInfo($request);
    }

    public function listPredefinedTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/rgc/predefined-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ListPredefinedTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListPredefinedTemplatesRequest');
    }

    /**
     * 查询模板的部署参数
     *
     * 查询模板的部署参数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTemplateDeployParams($request)
    {
        return $this->showTemplateDeployParamsWithHttpInfo($request);
    }

    public function showTemplateDeployParamsWithHttpInfo($request)
    {
        $resourcePath = '/v1/rgc/templates/{template_name}/deploy-params';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['templateName'] !== null) {
            $pathParams['template_name'] = $localVarParams['templateName'];
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
            $responseType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowTemplateDeployParamsResponse',
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowTemplateDeployParamsRequest');
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