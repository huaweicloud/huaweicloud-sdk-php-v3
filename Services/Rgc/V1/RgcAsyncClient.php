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