<?php

namespace HuaweiCloud\SDK\Rgc\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class RgcAsyncClient extends Client
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
        $client = new ClientBuilder(new RgcAsyncClient());
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
    public function createBestPracticeDetectAsync($request)
    {
        return $this->createBestPracticeDetectAsyncWithHttpInfo($request);
    }
    
    public function createBestPracticeDetectAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateBestPracticeDetectRequest',
            $asyncRequest = true);
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
    public function showBestPracticeDetailsAsync($request)
    {
        return $this->showBestPracticeDetailsAsyncWithHttpInfo($request);
    }
    
    public function showBestPracticeDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeDetailsRequest',
            $asyncRequest = true);
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
    public function showBestPracticeOverviewAsync($request)
    {
        return $this->showBestPracticeOverviewAsyncWithHttpInfo($request);
    }
    
    public function showBestPracticeOverviewAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeOverviewRequest',
            $asyncRequest = true);
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
    public function showBestPracticeStatusAsync($request)
    {
        return $this->showBestPracticeStatusAsyncWithHttpInfo($request);
    }
    
    public function showBestPracticeStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowBestPracticeStatusRequest',
            $asyncRequest = true);
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
    public function disableControlAsync($request)
    {
        return $this->disableControlAsyncWithHttpInfo($request);
    }
    
    public function disableControlAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DisableControlRequest',
            $asyncRequest = true);
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
    public function enableControlAsync($request)
    {
        return $this->enableControlAsyncWithHttpInfo($request);
    }
    
    public function enableControlAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\EnableControlRequest',
            $asyncRequest = true);
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
    public function listConfigRuleCompliancesAsync($request)
    {
        return $this->listConfigRuleCompliancesAsyncWithHttpInfo($request);
    }
    
    public function listConfigRuleCompliancesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListConfigRuleCompliancesRequest',
            $asyncRequest = true);
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
    public function listControlViolationsAsync($request)
    {
        return $this->listControlViolationsAsyncWithHttpInfo($request);
    }
    
    public function listControlViolationsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlViolationsRequest',
            $asyncRequest = true);
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
    public function listControlsAsync($request)
    {
        return $this->listControlsAsyncWithHttpInfo($request);
    }
    
    public function listControlsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsRequest',
            $asyncRequest = true);
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
    public function listControlsForAccountAsync($request)
    {
        return $this->listControlsForAccountAsyncWithHttpInfo($request);
    }
    
    public function listControlsForAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsForAccountRequest',
            $asyncRequest = true);
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
    public function listControlsForOrganizationalUnitAsync($request)
    {
        return $this->listControlsForOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function listControlsForOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListControlsForOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function listDriftDetailsAsync($request)
    {
        return $this->listDriftDetailsAsyncWithHttpInfo($request);
    }
    
    public function listDriftDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListDriftDetailsRequest',
            $asyncRequest = true);
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
    public function listEnabledControlsAsync($request)
    {
        return $this->listEnabledControlsAsyncWithHttpInfo($request);
    }
    
    public function listEnabledControlsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListEnabledControlsRequest',
            $asyncRequest = true);
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
    public function listExternalConfigRuleCompliancesAsync($request)
    {
        return $this->listExternalConfigRuleCompliancesAsyncWithHttpInfo($request);
    }
    
    public function listExternalConfigRuleCompliancesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListExternalConfigRuleCompliancesRequest',
            $asyncRequest = true);
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
    public function showComplianceStatusForAccountAsync($request)
    {
        return $this->showComplianceStatusForAccountAsyncWithHttpInfo($request);
    }
    
    public function showComplianceStatusForAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowComplianceStatusForAccountRequest',
            $asyncRequest = true);
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
    public function showComplianceStatusForOrganizationalUnitAsync($request)
    {
        return $this->showComplianceStatusForOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function showComplianceStatusForOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowComplianceStatusForOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function showControlAsync($request)
    {
        return $this->showControlAsyncWithHttpInfo($request);
    }
    
    public function showControlAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlRequest',
            $asyncRequest = true);
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
    public function showControlOperateAsync($request)
    {
        return $this->showControlOperateAsyncWithHttpInfo($request);
    }
    
    public function showControlOperateAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlOperateRequest',
            $asyncRequest = true);
    }

    /**
     * 查询注册账号开启的控制策略
     *
     * 查询组织里某个注册账号下开启的某个控制策略的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showControlsForAccountAsync($request)
    {
        return $this->showControlsForAccountAsyncWithHttpInfo($request);
    }
    
    public function showControlsForAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlsForAccountRequest',
            $asyncRequest = true);
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
    public function showControlsForOrganizationalUnitAsync($request)
    {
        return $this->showControlsForOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function showControlsForOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowControlsForOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function checkLaunchAsync($request)
    {
        return $this->checkLaunchAsyncWithHttpInfo($request);
    }
    
    public function checkLaunchAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CheckLaunchRequest',
            $asyncRequest = true);
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
    public function deleteLandingZoneAsync($request)
    {
        return $this->deleteLandingZoneAsyncWithHttpInfo($request);
    }
    
    public function deleteLandingZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteLandingZoneRequest',
            $asyncRequest = true);
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
    public function setupLandingZoneAsync($request)
    {
        return $this->setupLandingZoneAsyncWithHttpInfo($request);
    }
    
    public function setupLandingZoneAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\SetupLandingZoneRequest',
            $asyncRequest = true);
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
    public function showAvailableUpdatesAsync($request)
    {
        return $this->showAvailableUpdatesAsyncWithHttpInfo($request);
    }
    
    public function showAvailableUpdatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowAvailableUpdatesRequest',
            $asyncRequest = true);
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
    public function showHomeRegionAsync($request)
    {
        return $this->showHomeRegionAsyncWithHttpInfo($request);
    }
    
    public function showHomeRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowHomeRegionRequest',
            $asyncRequest = true);
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
    public function showLandingZoneConfigurationAsync($request)
    {
        return $this->showLandingZoneConfigurationAsyncWithHttpInfo($request);
    }
    
    public function showLandingZoneConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneConfigurationRequest',
            $asyncRequest = true);
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
    public function showLandingZoneIdentityCenterAsync($request)
    {
        return $this->showLandingZoneIdentityCenterAsyncWithHttpInfo($request);
    }
    
    public function showLandingZoneIdentityCenterAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneIdentityCenterRequest',
            $asyncRequest = true);
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
    public function showLandingZoneStatusAsync($request)
    {
        return $this->showLandingZoneStatusAsyncWithHttpInfo($request);
    }
    
    public function showLandingZoneStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowLandingZoneStatusRequest',
            $asyncRequest = true);
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
    public function createAccountAsync($request)
    {
        return $this->createAccountAsyncWithHttpInfo($request);
    }
    
    public function createAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateAccountRequest',
            $asyncRequest = true);
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
    public function createManagedOrganizationalUnitAsync($request)
    {
        return $this->createManagedOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function createManagedOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateManagedOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function deleteManagedOrganizationalUnitsAsync($request)
    {
        return $this->deleteManagedOrganizationalUnitsAsyncWithHttpInfo($request);
    }
    
    public function deleteManagedOrganizationalUnitsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteManagedOrganizationalUnitsRequest',
            $asyncRequest = true);
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
    public function deregisterOrganizationalUnitAsync($request)
    {
        return $this->deregisterOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function deregisterOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeregisterOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function enrollAccountAsync($request)
    {
        return $this->enrollAccountAsyncWithHttpInfo($request);
    }
    
    public function enrollAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\EnrollAccountRequest',
            $asyncRequest = true);
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
    public function listManagedAccountsAsync($request)
    {
        return $this->listManagedAccountsAsyncWithHttpInfo($request);
    }
    
    public function listManagedAccountsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedAccountsRequest',
            $asyncRequest = true);
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
    public function listManagedAccountsForParentAsync($request)
    {
        return $this->listManagedAccountsForParentAsyncWithHttpInfo($request);
    }
    
    public function listManagedAccountsForParentAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedAccountsForParentRequest',
            $asyncRequest = true);
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
    public function listManagedOrganizationalUnitsAsync($request)
    {
        return $this->listManagedOrganizationalUnitsAsyncWithHttpInfo($request);
    }
    
    public function listManagedOrganizationalUnitsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListManagedOrganizationalUnitsRequest',
            $asyncRequest = true);
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
    public function listOperationAsync($request)
    {
        return $this->listOperationAsyncWithHttpInfo($request);
    }
    
    public function listOperationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListOperationRequest',
            $asyncRequest = true);
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
    public function reRegisterOrganizationalUnitAsync($request)
    {
        return $this->reRegisterOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function reRegisterOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ReRegisterOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function registerOrganizationalUnitAsync($request)
    {
        return $this->registerOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function registerOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\RegisterOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function showManagedAccountAsync($request)
    {
        return $this->showManagedAccountAsyncWithHttpInfo($request);
    }
    
    public function showManagedAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedAccountRequest',
            $asyncRequest = true);
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
    public function showManagedAccountTemplateAsync($request)
    {
        return $this->showManagedAccountTemplateAsyncWithHttpInfo($request);
    }
    
    public function showManagedAccountTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedAccountTemplateRequest',
            $asyncRequest = true);
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
    public function showManagedCoreAccountAsync($request)
    {
        return $this->showManagedCoreAccountAsyncWithHttpInfo($request);
    }
    
    public function showManagedCoreAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedCoreAccountRequest',
            $asyncRequest = true);
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
    public function showManagedOrganizationalUnitAsync($request)
    {
        return $this->showManagedOrganizationalUnitAsyncWithHttpInfo($request);
    }
    
    public function showManagedOrganizationalUnitAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowManagedOrganizationalUnitRequest',
            $asyncRequest = true);
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
    public function showOperationAsync($request)
    {
        return $this->showOperationAsyncWithHttpInfo($request);
    }
    
    public function showOperationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowOperationRequest',
            $asyncRequest = true);
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
    public function unEnrollAccountAsync($request)
    {
        return $this->unEnrollAccountAsyncWithHttpInfo($request);
    }
    
    public function unEnrollAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\UnEnrollAccountRequest',
            $asyncRequest = true);
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
    public function updateManagedAccountAsync($request)
    {
        return $this->updateManagedAccountAsyncWithHttpInfo($request);
    }
    
    public function updateManagedAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\UpdateManagedAccountRequest',
            $asyncRequest = true);
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
    public function createTemplateAsync($request)
    {
        return $this->createTemplateAsyncWithHttpInfo($request);
    }
    
    public function createTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\CreateTemplateRequest',
            $asyncRequest = true);
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
    public function deleteTemplateAsync($request)
    {
        return $this->deleteTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\DeleteTemplateRequest',
            $asyncRequest = true);
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
    public function listPredefinedTemplatesAsync($request)
    {
        return $this->listPredefinedTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listPredefinedTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ListPredefinedTemplatesRequest',
            $asyncRequest = true);
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
    public function showTemplateDeployParamsAsync($request)
    {
        return $this->showTemplateDeployParamsAsyncWithHttpInfo($request);
    }
    
    public function showTemplateDeployParamsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Rgc\V1\Model\ShowTemplateDeployParamsRequest',
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