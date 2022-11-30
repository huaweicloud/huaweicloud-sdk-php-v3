<?php

namespace HuaweiCloud\SDK\Bssintl\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class BssintlAsyncClient extends Client
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
        return new ClientBuilder(new BssintlAsyncClient(), "GlobalCredentials");
    }

    /**
     * 设置包年/包月资源自动续费
     *
     * 功能描述：客户可以设置包年/包月资源到期后转为按需资源计费
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function autoRenewalResourcesAsync($request)
    {
        return $this->autoRenewalResourcesAsyncWithHttpInfo($request);
    }
    
    public function autoRenewalResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/autorenew/{resource_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\AutoRenewalResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\AutoRenewalResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 取消包年/包月资源自动续费
     *
     * 功能描述：取消包年/包月资源自动续费
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelAutoRenewalResourcesAsync($request)
    {
        return $this->cancelAutoRenewalResourcesAsyncWithHttpInfo($request);
    }
    
    public function cancelAutoRenewalResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/autorenew/{resource_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CancelAutoRenewalResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CancelAutoRenewalResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 取消待支付订单
     *
     * 功能描述：客户可以对待支付的订单进行取消操作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelCustomerOrderAsync($request)
    {
        return $this->cancelCustomerOrderAsyncWithHttpInfo($request);
    }
    
    public function cancelCustomerOrderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CancelCustomerOrderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CancelCustomerOrderRequest',
            $asyncRequest = true);
    }

    /**
     * 退订包年/包月资源
     *
     * 功能描述：客户购买包年/包月资源后，支持客户退订包年/包月实例。退订资源实例包括资源续费部分和当前正在使用的部分，退订后资源将无法使用
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelResourcesSubscriptionAsync($request)
    {
        return $this->cancelResourcesSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function cancelResourcesSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/unsubscribe';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CancelResourcesSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CancelResourcesSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 申请实名认证变更
     *
     * 功能描述：客户可以进行实名认证变更申请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEnterpriseRealnameAuthenticationAsync($request)
    {
        return $this->changeEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request);
    }
    
    public function changeEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/enterprise';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ChangeEnterpriseRealnameAuthenticationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ChangeEnterpriseRealnameAuthenticationRequest',
            $asyncRequest = true);
    }

    /**
     * 校验客户注册信息
     *
     * 功能描述：客户注册时可检查客户的登录名称、手机号或者邮箱是否可以用于注册。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkUserIdentityAsync($request)
    {
        return $this->checkUserIdentityAsyncWithHttpInfo($request);
    }
    
    public function checkUserIdentityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/users/check-identity';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CheckUserIdentityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CheckUserIdentityRequest',
            $asyncRequest = true);
    }

    /**
     * 申请企业实名认证
     *
     * 功能描述：企业客户可以进行企业实名认证申请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnterpriseRealnameAuthenticationAsync($request)
    {
        return $this->createEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request);
    }
    
    public function createEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/enterprise';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CreateEnterpriseRealnameAuthenticationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CreateEnterpriseRealnameAuthenticationRequest',
            $asyncRequest = true);
    }

    /**
     * 申请个人实名认证
     *
     * 功能描述：个人客户可以进行个人实名认证申请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPersonalRealnameAuthAsync($request)
    {
        return $this->createPersonalRealnameAuthAsyncWithHttpInfo($request);
    }
    
    public function createPersonalRealnameAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/individual';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CreatePersonalRealnameAuthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CreatePersonalRealnameAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 创建客户
     *
     * 功能描述：在伙伴销售平台创建客户时同步创建华为云账号，并将客户在伙伴销售平台上的账号与华为云账号进行映射。同时，创建的华为云账号与伙伴账号关联绑定。华为云伙伴能力中心（一级经销商）可以注册精英服务商伙伴（二级经销商）的子客户。注册完成后，子客户可以自动和精英服务商伙伴绑定。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubCustomerAsync($request)
    {
        return $this->createSubCustomerAsyncWithHttpInfo($request);
    }
    
    public function createSubCustomerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\CreateSubCustomerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\CreateSubCustomerRequest',
            $asyncRequest = true);
    }

    /**
     * 冻结客户账号
     *
     * 功能描述：冻结伙伴子客户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function freezeSubCustomersAsync($request)
    {
        return $this->freezeSubCustomersAsyncWithHttpInfo($request);
    }
    
    public function freezeSubCustomersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/freeze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\FreezeSubCustomersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\FreezeSubCustomersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用量单位进制
     *
     * 功能描述：伙伴在伙伴销售平台上查询使用量单位的进制转换信息，用于不同度量单位之间的转换。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConversionsAsync($request)
    {
        return $this->listConversionsAsyncWithHttpInfo($request);
    }
    
    public function listConversionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/conversions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['measureType'] !== null) {
            $queryParams['measure_type'] = $localVarParams['measureType'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListConversionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListConversionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询成本数据
     *
     * 客户在自建平台查询成本分析数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCostsAsync($request)
    {
        return $this->listCostsAsyncWithHttpInfo($request);
    }
    
    public function listCostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v4/costs/cost-analysed-bills/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户按需资源列表
     *
     * 功能描述：客户在伙伴销售平台查询已开通的按需资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerOnDemandResourcesAsync($request)
    {
        return $this->listCustomerOnDemandResourcesAsyncWithHttpInfo($request);
    }
    
    public function listCustomerOnDemandResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/on-demand-resources/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerOnDemandResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerOnDemandResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单列表
     *
     * 功能描述：客户购买包年包月资源后，可以查看待审核、处理中、已取消、已完成和待支付等状态的订单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerOrdersAsync($request)
    {
        return $this->listCustomerOrdersAsyncWithHttpInfo($request);
    }
    
    public function listCustomerOrdersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['createTimeBegin'] !== null) {
            $queryParams['create_time_begin'] = $localVarParams['createTimeBegin'];
        }
        if ($localVarParams['createTimeEnd'] !== null) {
            $queryParams['create_time_end'] = $localVarParams['createTimeEnd'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['paymentTimeBegin'] !== null) {
            $queryParams['payment_time_begin'] = $localVarParams['paymentTimeBegin'];
        }
        if ($localVarParams['paymentTimeEnd'] !== null) {
            $queryParams['payment_time_end'] = $localVarParams['paymentTimeEnd'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerOrdersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerOrdersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源详单
     *
     * 功能描述：客户在客户自建平台查询自己的资源详单，用于反映各类资源的消耗情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerselfResourceRecordDetailsAsync($request)
    {
        return $this->listCustomerselfResourceRecordDetailsAsyncWithHttpInfo($request);
    }
    
    public function listCustomerselfResourceRecordDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/res-records/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerselfResourceRecordDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerselfResourceRecordDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源消费记录
     *
     * 功能描述：客户在客户自建平台查询每个资源的消费明细数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerselfResourceRecordsAsync($request)
    {
        return $this->listCustomerselfResourceRecordsAsyncWithHttpInfo($request);
    }
    
    public function listCustomerselfResourceRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/res-fee-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cycle'] !== null) {
            $queryParams['cycle'] = $localVarParams['cycle'];
        }
        if ($localVarParams['cloudServiceType'] !== null) {
            $queryParams['cloud_service_type'] = $localVarParams['cloudServiceType'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['chargeMode'] !== null) {
            $queryParams['charge_mode'] = $localVarParams['chargeMode'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['includeZeroRecord'] !== null) {
            $queryParams['include_zero_record'] = $localVarParams['includeZeroRecord'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['billDateBegin'] !== null) {
            $queryParams['bill_date_begin'] = $localVarParams['billDateBegin'];
        }
        if ($localVarParams['billDateEnd'] !== null) {
            $queryParams['bill_date_end'] = $localVarParams['billDateEnd'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerselfResourceRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListCustomerselfResourceRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源包列表
     *
     * 功能描述：客户在自建平台查询资源包列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourceInfosAsync($request)
    {
        return $this->listFreeResourceInfosAsyncWithHttpInfo($request);
    }
    
    public function listFreeResourceInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/payments/free-resources/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListFreeResourceInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListFreeResourceInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源内使用量
     *
     * 功能描述：客户在自建平台查询客户自己的资源包列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourceUsagesAsync($request)
    {
        return $this->listFreeResourceUsagesAsyncWithHttpInfo($request);
    }
    
    public function listFreeResourceUsagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/payments/free-resources/usages/details/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListFreeResourceUsagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListFreeResourceUsagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云经销商列表
     *
     * 华为云总经销商（一级经销商）可以查询云经销商（二级经销商）列表。
     * 
     * 一级经销商在伙伴中心查询二级经销商列表的方式请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/dp_120210.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIndirectPartnersAsync($request)
    {
        return $this->listIndirectPartnersAsyncWithHttpInfo($request);
    }
    
    public function listIndirectPartnersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/indirect-partners/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListIndirectPartnersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListIndirectPartnersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询发票列表
     *
     * 功能描述：查询发票列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInvoicesAsync($request)
    {
        return $this->listInvoicesAsyncWithHttpInfo($request);
    }
    
    public function listInvoicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{domain_id}/payments/intl-invoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListInvoicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListInvoicesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用量单位列表
     *
     * 功能描述：伙伴在伙伴销售平台上查询资源使用量的度量单位及名称，度量单位类型等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMeasureUnitsAsync($request)
    {
        return $this->listMeasureUnitsAsyncWithHttpInfo($request);
    }
    
    public function listMeasureUnitsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/measurements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListMeasureUnitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListMeasureUnitsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询消费汇总(客户)
     *
     * 功能描述：客户可以查询自身的消费汇总单的功能，消费按月汇总。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMonthlyExpendituresAsync($request)
    {
        return $this->listMonthlyExpendituresAsyncWithHttpInfo($request);
    }
    
    public function listMonthlyExpendituresAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1.0/{domain_id}/customer/account-mgr/bill/monthly-sum';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cycle'] !== null) {
            $queryParams['cycle'] = $localVarParams['cycle'];
        }
        if ($localVarParams['cloudServiceTypeCode'] !== null) {
            $queryParams['cloud_service_type_code'] = $localVarParams['cloudServiceTypeCode'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListMonthlyExpendituresResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListMonthlyExpendituresRequest',
            $asyncRequest = true);
    }

    /**
     * 查询按需产品价格
     *
     * 功能描述：按需资源询价
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOnDemandResourceRatingsAsync($request)
    {
        return $this->listOnDemandResourceRatingsAsyncWithHttpInfo($request);
    }
    
    public function listOnDemandResourceRatingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/ratings/on-demand-resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListOnDemandResourceRatingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListOnDemandResourceRatingsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单可用折扣
     *
     * 功能描述：功能介绍客户在伙伴销售平台支付待支付订单时，查询可使用的折扣。只返回商务合同折扣和伙伴授权折扣客户在客户自建平台查看订单可用的优惠券列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrderDiscountsAsync($request)
    {
        return $this->listOrderDiscountsAsyncWithHttpInfo($request);
    }
    
    public function listOrderDiscountsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/order-discounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListOrderDiscountsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListOrderDiscountsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户包年/包月资源列表
     *
     * 功能描述：客户在客户自建平台查询某个或所有的包年/包月资源
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPayPerUseCustomerResourcesAsync($request)
    {
        return $this->listPayPerUseCustomerResourcesAsyncWithHttpInfo($request);
    }
    
    public function listPayPerUseCustomerResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/suscriptions/resources/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListPayPerUseCustomerResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListPayPerUseCustomerResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伙伴月度消费账单
     *
     * 功能描述：伙伴可以查询伙伴月度消费账单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPostpaidBillSumAsync($request)
    {
        return $this->listPostpaidBillSumAsyncWithHttpInfo($request);
    }
    
    public function listPostpaidBillSumAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/partner-bills/postpaid-bill-summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['billCycle'] !== null) {
            $queryParams['bill_cycle'] = $localVarParams['billCycle'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListPostpaidBillSumResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListPostpaidBillSumRequest',
            $asyncRequest = true);
    }

    /**
     * 查询包年/包月产品价格
     *
     * 功能描述：客户在自建平台按照条件查询包年/包月产品开通时候的价格
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRateOnPeriodDetailAsync($request)
    {
        return $this->listRateOnPeriodDetailAsyncWithHttpInfo($request);
    }
    
    public function listRateOnPeriodDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/ratings/period-resources/subscribe-rate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListRateOnPeriodDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListRateOnPeriodDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源类型列表
     *
     * 伙伴在伙伴销售平台查询资源类型的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceTypesAsync($request)
    {
        return $this->listResourceTypesAsyncWithHttpInfo($request);
    }
    
    public function listResourceTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/resource-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListResourceTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListResourceTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 根据云服务类型查询资源列表
     *
     * 功能描述：伙伴在伙伴销售平台根据云服务类型查询关联的资源类型编码和名称，用于查询按需产品的价格或包年/包月产品的价格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceResourcesAsync($request)
    {
        return $this->listServiceResourcesAsyncWithHttpInfo($request);
    }
    
    public function listServiceResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/service-resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListServiceResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListServiceResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云服务类型列表
     *
     * 伙伴在伙伴销售平台查询云服务类型的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceTypesAsync($request)
    {
        return $this->listServiceTypesAsyncWithHttpInfo($request);
    }
    
    public function listServiceTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/service-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListServiceTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListServiceTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询优惠券列表
     *
     * 功能描述：伙伴/客户可以查询自身的优惠券信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerCouponsAsync($request)
    {
        return $this->listSubCustomerCouponsAsyncWithHttpInfo($request);
    }
    
    public function listSubCustomerCouponsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/promotions/benefits/coupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['couponId'] !== null) {
            $queryParams['coupon_id'] = $localVarParams['couponId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['promotionPlanId'] !== null) {
            $queryParams['promotion_plan_id'] = $localVarParams['promotionPlanId'];
        }
        if ($localVarParams['couponType'] !== null) {
            $queryParams['coupon_type'] = $localVarParams['couponType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['activeStartTime'] !== null) {
            $queryParams['active_start_time'] = $localVarParams['activeStartTime'];
        }
        if ($localVarParams['activeEndTime'] !== null) {
            $queryParams['active_end_time'] = $localVarParams['activeEndTime'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sourceId'] !== null) {
            $queryParams['source_id'] = $localVarParams['sourceId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListSubCustomerCouponsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListSubCustomerCouponsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户列表
     *
     * 功能描述：伙伴可以查询合作伙伴的客户信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomersAsync($request)
    {
        return $this->listSubCustomersAsyncWithHttpInfo($request);
    }
    
    public function listSubCustomersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListSubCustomersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListSubCustomersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用量类型列表
     *
     * 功能描述：伙伴在伙伴销售平台查询资源的使用量类型列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsageTypesAsync($request)
    {
        return $this->listUsageTypesAsyncWithHttpInfo($request);
    }
    
    public function listUsageTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/usage-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListUsageTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ListUsageTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 支付包年/包月产品订单
     *
     * 客户可以对待支付状态的包年/包月产品订单进行支付
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function payOrdersAsync($request)
    {
        return $this->payOrdersAsyncWithHttpInfo($request);
    }
    
    public function payOrdersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/orders/customer-orders/pay';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\PayOrdersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\PayOrdersRequest',
            $asyncRequest = true);
    }

    /**
     * 续订包年/包月资源
     *
     * 功能描述：客户的包年包/月资源即将到期时，可进行包年/包月资源的续订
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function renewalResourcesAsync($request)
    {
        return $this->renewalResourcesAsyncWithHttpInfo($request);
    }
    
    public function renewalResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/renew';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\RenewalResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\RenewalResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 发送验证码
     *
     * 功能描述：客户注册时，如果填写了邮箱，可以向对应的邮箱发送注册验证码，校验信息的正确性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendVerificationMessageCodeAsync($request)
    {
        return $this->sendVerificationMessageCodeAsyncWithHttpInfo($request);
    }
    
    public function sendVerificationMessageCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/verificationcode/send';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\SendVerificationMessageCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\SendVerificationMessageCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账户余额
     *
     * 功能描述：客户可以查询自身的账户余额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerAccountBalancesAsync($request)
    {
        return $this->showCustomerAccountBalancesAsyncWithHttpInfo($request);
    }
    
    public function showCustomerAccountBalancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/customer-accounts/balances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowCustomerAccountBalancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowCustomerAccountBalancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单详情
     *
     * 功能描述：客户可以查看订单详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerOrderDetailsAsync($request)
    {
        return $this->showCustomerOrderDetailsAsyncWithHttpInfo($request);
    }
    
    public function showCustomerOrderDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/details/{order_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['orderId'] !== null) {
            $pathParams['order_id'] = $localVarParams['orderId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowCustomerOrderDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowCustomerOrderDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实名认证审核结果
     *
     * 功能描述：如果实名认证申请或实名认证变更申请的响应中，显示需要人工审核，使用该接口查询审核结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRealnameAuthenticationReviewResultAsync($request)
    {
        return $this->showRealnameAuthenticationReviewResultAsyncWithHttpInfo($request);
    }
    
    public function showRealnameAuthenticationReviewResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowRealnameAuthenticationReviewResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowRealnameAuthenticationReviewResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询退款订单的金额详情
     *
     * 功能描述：客户在伙伴销售平台查询某次退订订单或者降配订单的退款金额来自哪些资源和对应订单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRefundOrderDetailsAsync($request)
    {
        return $this->showRefundOrderDetailsAsyncWithHttpInfo($request);
    }
    
    public function showRefundOrderDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/refund-orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowRefundOrderDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowRefundOrderDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户预算
     *
     * 功能描述：查询客户预算
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSubCustomerBudgetAsync($request)
    {
        return $this->showSubCustomerBudgetAsyncWithHttpInfo($request);
    }
    
    public function showSubCustomerBudgetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/budget';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowSubCustomerBudgetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\ShowSubCustomerBudgetRequest',
            $asyncRequest = true);
    }

    /**
     * 解冻客户账号
     *
     * 功能描述：解冻伙伴子客户
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unfreezeSubCustomersAsync($request)
    {
        return $this->unfreezeSubCustomersAsyncWithHttpInfo($request);
    }
    
    public function unfreezeSubCustomersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/unfreeze';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\UnfreezeSubCustomersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\UnfreezeSubCustomersRequest',
            $asyncRequest = true);
    }

    /**
     * 设置或者取消包年/包月资源到期转按需
     *
     * 功能描述：客户可以设置包年/包月资源到期后转为按需资源计费。包年/包月计费模式到期后，按需的计费模式即生效
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePeriodToOnDemandAsync($request)
    {
        return $this->updatePeriodToOnDemandAsyncWithHttpInfo($request);
    }
    
    public function updatePeriodToOnDemandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/to-on-demand';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\UpdatePeriodToOnDemandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\UpdatePeriodToOnDemandRequest',
            $asyncRequest = true);
    }

    /**
     * 设置客户预算
     *
     * 功能描述：设置客户预算
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubCustomerBudgetAsync($request)
    {
        return $this->updateSubCustomerBudgetAsyncWithHttpInfo($request);
    }
    
    public function updateSubCustomerBudgetAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/budget';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bssintl\V2\Model\UpdateSubCustomerBudgetResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bssintl\V2\Model\UpdateSubCustomerBudgetRequest',
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